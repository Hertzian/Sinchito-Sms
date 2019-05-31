<?php

namespace App\Http\Controllers;

use App\Item;
use App\Account;
use App\ItemList;
use Clx\Xms\Client;
use Illuminate\Http\Request;
use Clx\Xms\Api\MtBatchTextSmsCreate;

class ItemsListController extends Controller
{
    protected $token;
    protected $splan;
    protected $endpoint;

    public function __construct(){

        $this->middleware('auth');        
        $this->token = config('app.sinch')['API_TOKEN'];
        $this->splan = config('app.sinch')['SERVICE_PLAN_ID'];
        // third arg for Client(), default https://api.clxcommunications.com/xms
        $this->endpoint = url('some url');
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

        return redirect('/')->with('message', 'El batch se ha creado con éxito');
    }

    public function sendBatchSMS(Request $request, $id){
        
        $batch = ItemList::find($id);
        $name = Item::where('item_list_id', $batch->id)->pluck('name');
        $number = Item::where('item_list_id', $batch->id)->pluck('number');

        $names =[];
        $numbers =[];

        $client = new Client($this->splan, $this->token);
        $message;
        try {

            $batchParams = new MtBatchTextSmsCreate();
            $batchParams->setSender('12345');

            if (count($number) >= 1) {
                for ($i=0; $i < count($number); $i++) { 
                    $numbers[] = $number[$i];
                }

                // foreach ($numbers as $key => $value) {
                //     $numbers[] = $number[$value];
                // }
                
            }

            dd($numbers);

            $batchParams->setRecipients($numbers);
            
            $texto = $request->input('texto_personalizado');

            // $batchParams->setBody('
            // Hola 
            // ${fulano},
            // Enviado con sinch, Kiubole, checando si funciona esto...
            // ');

            $batchParams->setBody($texto);

            if (count($name) >=1) {
                for ($i=0; $i < count($number); $i++) { 
                    $names = array_add($names, $number[$i], $name[$i]);
                }
            }

            // dd($names);
            $batchParams->setParameters($names);

            $result = $client->createTextBatch($batchParams);

            $message = 'El ID que se dio al batch es: ' . $result->getBatchId();

        } catch (Exception $ex) {

            $message = 'Error creating batch: ' . $ex->getMessage();
        }

        return redirect('/')->with('message', $message);
    }
    
}
