<?php

namespace App\Http\Controllers;

use App\Account;
use App\ItemList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function getAccounts(){
        $user = Auth::user();
        $accounts = Account::where('user_id', $user->id)->get();

        return view('account.getaccounts',[
            'user' => $user,
            'accounts' => $accounts,
        ]);
    }

    public function getAccount($id){
        $user = Auth::user();
        $account = Account::find($id);
        $batches = ItemList::where('account_id', $account->id)->get();


        return view('account.getaccount', [
            'user' => $user,
            'account' => $account,
            'batches' => $batches
        ]);


    }

    public function newAccountView(){
        $user = Auth::user();
        
        return view('account.newaccount')->with('user', $user);
    }
    
    public function newAccount(Request $request){
        $user = Auth::user();
        $account = new Account();

        $account->type = $request->input('type');
        $account->message_limit = $request->input('message_limit');
        $account->balance = $request->input('balance');
        $account->status = $request->input('status');
        $account->user_id = $user->id;

        $request->validate([
            'type' => 'required',
            'message_limit' => 'required',
            'balance' => 'required',
            'status' => 'required'
        ]);

        $account->save();

        return redirect('/home')->with('message', 'La cuenta se ha creado con éxito');
    }
}
