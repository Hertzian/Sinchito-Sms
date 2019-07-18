<?php

namespace App\Http\Controllers;

use App\Item;
use App\Account;
use App\ItemList;
use Clx\Xms\Client;
use App\MessageList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Clx\Xms\Api\MtBatchTextSmsCreate;

class ItemsController extends Controller
{
    protected $token;
    protected $splan;
    protected $endpoint;
    protected $sender;

    public function __construct()
    {
        $this->middleware('auth');        
        $this->token = config('app.sinch')['API_TOKEN'];
        $this->splan = config('app.sinch')['SERVICE_PLAN_ID'];
        // third arg for Client(), default https://api.clxcommunications.com/xms
        $this->endpoint = url('some url');
        $this->sender = '12345';
    }
    
    public function getBatch($id){
        $batch = ItemList::find($id);
        $items = Item::where('item_list_id', $batch->id)->get();

        return view('item.getitemlist',[
            'batch' => $batch,
            'items' => $items
        ]);
    }

    public function newItem(Request $request, $id){
        $itemlist = ItemList::find($id);
        $item = new Item();

        $item->name = $request->input('name');
        $item->number = '+52' . $request->input('number');
        $item->item_list_id = $request->input('item_list_id');

        $request->validate([
            'name' => 'required',
            'number' => 'required',
            'item_list_id' => 'required'
        ]);

        $item->save();

        return redirect('/getlist')
            ->with('message', 'El contacto se ha creado con éxito');
    }

    public function sendSingleSMSView(){
        return view('item.single');
    }

    public function sendSingleSMS(Request $request){
        
        $user = Auth::user();
        $account = Account::find($user->id);
        
        $client = new Client($this->splan, $this->token);
        $message;

        if ($account->message_limit >= 1 && $account->balance >= $account->price) {
        
            try {
                
                $texto = $request->input('texto_personalizado');
                $batchParams = new MtBatchTextSmsCreate();
                $batchParams->setSender($this->sender);

                $num = '+52' . $request->input('number');
                $texto = $request->input('texto_personalizado');

                $batchParams->setRecipients([$num]);
                $batchParams->setBody($texto);

                $result = $client->createTextBatch($batchParams);
                $batchID = $result->getBatchId();

                $batchSMS = new MessageList();
                $batchSMS->name = $batchID;
                $batchSMS->account_id = $account->id;
                $batchSMS->save();

                $account->message_limit = $account->message_limit - 1;
                $account->balance = $account->balance - $account->price;
                $account->update();

                $message = 'El ID que se dio al batch es: ' . $batchID;

            } catch (Exception $ex) {

                $message = 'Error al crear el lote: ' . $ex->getMessage();
            }

        }else{
            $error = 'No cuentas con saldo disponible para enviar mensajes';

            return redirect('/')->with('error', $error);
        }

        return redirect('/')->with('message', $message);
    }

    public function deleteItem($id){
        $item = Item::find($id);

        $item->delete();

        return redirect('/getlist')->with('message', 'El contacto se ha eliminado con éxito');
    }

    
}
