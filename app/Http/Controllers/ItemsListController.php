<?php

namespace App\Http\Controllers;

use App\Account;
use App\ItemList;
use Illuminate\Http\Request;

class ItemsListController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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
    
}
