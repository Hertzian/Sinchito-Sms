<?php

namespace App\Http\Controllers;

use App\Item;
use App\Account;
use App\ItemList;
use Clx\Xms\Client;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Clx\Xms\Api\MtBatchTextSmsCreate;

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
    
    public function getBatches($id){
        $account = Account::find($id);
        $batches = ItemList::where('account_id', $account->id)
            ->get();

        return view('itemlist.getitemslist',[
            'account' => $account,
            'batches' => $batches
        ]);
    }

    public function newBatchView($id){
        $account = Account::find($id);

        return view('itemlist.newitemlist',[
            'account' => $account
        ]);
    }

    public function newBatch(Request $request, $id){
        $account = Account::find($id);
        $batch = new ItemList();

        $batch->name = $request->input('name');
        $batch->account_id = $request->input('account_id');

        $request->validate([
            'name' => 'required',
            'account_id' => 'required'
        ]);

        $batch->save();

        return redirect('/getaccount/' . $account->id)->with('message', 'El batch se ha creado con éxito');
    }

    public function sendBatchSMS(Request $request, $id){
        
        $batch = ItemList::find($id);
        $name = Item::where('item_list_id', $batch->id)->pluck('name');
        $number = Item::where('item_list_id', $batch->id)->pluck('number');

        $names = [];
        $numbers = [];
        $message;

        $client = new Client($this->splan, $this->token);
        
        try {

            $batchParams = new MtBatchTextSmsCreate();
            $batchParams->setSender($this->sender);

            if(count($number) >=1){
                for ($i=0; $i < count($name); $i++) { 
                    $numbers[] = $number[$i];
                }
            }

            $texto = $request->input('texto_personalizado');

            $batchParams->setRecipients($numbers);


            $batchParams->setBody('Hola ${fulano}, ' . $texto);

            if (count($name) >=1) {
                for ($i=0; $i < count($number); $i++) { 
                    $names = array_add($names, $number[$i], $name[$i]);
                }
                $names += ['default' => 'estimado cliente'];
            }

            $fulano = ['fulano' => $names];

            $batchParams->setParameters($fulano);

            $result = $client->createTextBatch($batchParams);

            $message = 'El ID que se dio al batch es: ' . $result->getBatchId();

        } catch (Exception $ex) {

            $message = 'Error creating batch: ' . $ex->getMessage();
        }

        return redirect('/')->with('message', $message);
    }
    
}
