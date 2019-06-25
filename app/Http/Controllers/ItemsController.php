<?php

namespace App\Http\Controllers;

use App\Item;
use App\ItemList;
use Clx\Xms\Client;
use Illuminate\Http\Request;
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

    // {{ url('getitems/' . $itemlist->id) }}
    public function newItemView($id){
        $itemlist = ItemList::find($id);

        return view('item.newitem',[
            'itemlist' => $itemlist
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
            'number' => 'required'
        ]);

        $item->save();

        return redirect('/getitems')
            ->with('message', 'El item se ha creado con éxito');
    }

    public function sendSingleSMSView(){
        return view('item.single');
    }

    public function sendSingleSMS(Request $request){
        $client = new Client($this->splan, $this->token);
        $message;
        try {

            $batchParams = new MtBatchTextSmsCreate();
            $batchParams->setSender($this->sender);

            $num = '+52' . $request->input('tel');
            $texto = $request->input('texto_personalizado');

            $batchParams->setRecipients([$num]);
            $batchParams->setBody($texto);

            $result = $client->createTextBatch($batchParams);

            $message = 'El ID que se dio al batch es: '
            . $result->getBatchId()
            ;

        } catch (Exception $ex) {

            $message = 'Error creating batch: ' . $ex->getMessage();
        }

        return redirect('/')->with('message', $message);
    }


}
