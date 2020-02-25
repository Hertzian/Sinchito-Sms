<?php

namespace App\Http\Controllers\user;

use App\Item;
use App\Account;
use App\ItemList;
use App\Template;
use Clx\Xms\Client;
use App\MessageList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Clx\Xms\Api\MtBatchTextSmsCreate;
use Illuminate\Support\Facades\Storage;

class ItemsListController extends Controller
{
    protected $token;
    protected $splan;
    protected $endpoint;
    protected $sender;

    public function __construct(){

        $this->middleware('auth');        
        $this->token = config('app.sinch')['API_TOKEN'];
        $this->splan = config('app.sinch')['SERVICE_PLAN_ID'];
        // third arg for Client(), default https://api.clxcommunications.com/xms
        $this->endpoint = url('some url');
        $this->sender = '12345';
    }
    
    public function getBatches(){    
        $user = Auth::user();
        $account = Account::find($user->id);
        $batches = ItemList::where('account_id', $user->id)->paginate(15);

        // dd($account);

        $items = Item::select('name', 'number')
            ->where('item_list_id', '=' )
            ->get();

        return view('user.itemlist.getitemslist',[
            'account' => $account,
            'batches' => $batches,
            'items' => $items
        ]);
    }

    public function newBatchView($id){
        $account = Account::find($id);

        return view('user.itemlist.newitemlist',[
            'account' => $account
        ]);
    }

    public function newBatch(Request $request, $id){
        $account = Account::find($id);
        $batch = new ItemList();

        $batch->name = $request->input('name');
        $batch->account_id = $account->id;

        $request->validate([
            'name' => 'required',
        ]);

        $batch->save();

        return redirect('/user/getlist')
        ->with('message', 'El batch se ha creado con éxito');
    }

    public function newCSVBatch(Request $request, $id){
        $account = Account::find($id);

        $this->validate($request, [
            'item_list_id' => 'required',
            'csv' => 'required|file'
        ]);

        $item_list_id = $request->input('item_list_id');

        $extension = $request->file('csv')->getClientOriginalExtension();
        $fileNameWithExt = $request->file('csv')->getClientOriginalName();
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
        $path = $request->file('csv')->storeAs('public/csv' . $request->input('csv'), $fileNameToStore);

        $file = Storage::get($path);
        $arr = str_getcsv($file, ',');
           
            
        for ($i=0; $i < count($arr); $i++) { 
            $item = new Item();
            $item->number = '+52' . $arr[$i];
            $item->item_list_id = $item_list_id;
            $item->save();
        }
        
        return redirect('/user/getlist')->with('message', 'Los contactos del archivo csv se han adicionado con éxito');
    }


    public function sendTemplate(Request $request, $id){
        $account = Account::find($id);
        $batchId = $request->input('item_list_id');

        $name = Item::where('item_list_id', $batchId)->pluck('name');
        $number = Item::where('item_list_id', $batchId)->pluck('number');
        $numCount = Item::where('item_list_id', $batchId)->pluck('item_list_id');
        $texto = $request->input('template_id');
        $template = Template::find($texto);

        $client = new Client($this->splan, $this->token);

        $nombres = [];
        $numeros = [];

        if (count($number) <= $account->message_limit && $account->message_limit >= 1){
            try {
                
                $batchParams = new MtBatchTextSmsCreate();
                $batchParams->setSender($this->sender);

                $batchParams->setRecipients($number);

                $batchParams->setBody($template->content);

                if (count($name) >=1) {
                    for ($i=0; $i < count($number); $i++) { 
                        $nombres = array_add($nombres, $number[$i], $name[$i]);
                    }
                    $nombres += ['default' => 'estimado cliente'];
                }

                $fulano = ['cliente' => $nombres];
                
                $batchParams->setParameters($fulano);

                $result = $client->createTextBatch($batchParams);

                $batchID = $result->getBatchId();

                $batchSMS = new MessageList();
                $batchSMS->name = $batchID;
                $batchSMS->account_id = $account->id;
                $batchSMS->save();

                $account->message_limit = $account->message_limit - count($number);
                $account->balance = $account->balance - (count($number) * $account->price);
                $account->update();

                $message = 'El ID que se dio al batch es: ' . $batchID;

            } catch (Exception $ex) {

                $message = 'Error: ' . $ex->getMessage();
            }
        }else{
            $error = 'No cuentas con saldo disponible para enviar mensajes';

            return redirect('/user/')->with('error', $error);
        }

        return redirect('/user/')->with('message', $message);
    }

    public function sendBatchSMS(Request $request, $accountId){

        $account = Account::find($accountId);
        $batchId = $request->input('item_list_id');
        $numbers = Item::where('item_list_id', $batchId)->pluck('number');
        $numCount = Item::where('item_list_id', $batchId)->pluck('item_list_id');
        $texto = $request->input('texto_personalizado');

        $client = new Client($this->splan, $this->token);

        if (count($numbers) <= $account->message_limit && $account->message_limit >= 1){
            try {

                $batchParams = new MtBatchTextSmsCreate();
                $batchParams->setSender($this->sender);

                $batchParams->setRecipients($numbers);

                $batchParams->setBody($texto);

                $result = $client->createTextBatch($batchParams);
                $batchID = $result->getBatchId();

                $batchSMS = new MessageList();
                $batchSMS->name = $batchID;
                $batchSMS->account_id = $account->id;
                $batchSMS->save();

                $account->message_limit = $account->message_limit - count($numbers);
                $account->balance = $account->balance - (count($numbers) * $account->price);
                $account->update();

                $message = 'El ID que se dio al batch es: ' . $batchID;
                
            } catch (Exception $ex) {

                $message = 'Error al crear el lote: ' . $ex->getMessage();
            }

        }else{
            $error = 'No cuentas con saldo disponible para enviar mensajes';

            return redirect('/user/getlist')->with('error', $error);
        }

        return redirect('/user/getitems/' . $batchId)->with('message', $message);

    }

    public function editContactListName(Request $request, $contactListId){
        $batch = ItemList::find($contactListId);

        $this->validate($request, [
            'name' => 'required'
        ]);

        $batch->name = $request->input('name');
        $batch->account_id = $request->input('account_id');
        $batch->update();

        return redirect('/user/getlist')->with('message', 'El nombre de la lista se editó correctamente');
    }

    public function deleteBatch($id){        
        $batch = ItemList::find($id);
        $batch->delete();

        return redirect('/user/getlist')
        ->with('message', 'El batch se ha eliminado con éxito');;
    }

    public function getContacts($id){
        $batch = ItemList::find($id);
        $items = Item::where('item_list_id', $batch->id)->get();

        return view('user.itemlist.contactList',[
            'batch' => $batch,
            'items' => $items
        ]);
    }
}
