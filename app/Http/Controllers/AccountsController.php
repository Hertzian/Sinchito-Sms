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
    
    // For superAdmin purposes only********************************
    public function getAccounts(){
        $user = Auth::user();
        $accounts = Account::where('user_id', $user->id)->get();

        return view('account.getaccounts',[
            'user' => $user,
            'accounts' => $accounts,
        ]);
    }
    // /For superAdmin purposes only********************************

    public function getBalanceView(){
        $user = Auth::user();
        $account = Account::find($user->id);
        
        
        return view('account.getbalance')->with('account', $account);
    }
    
    public function addCredit(Request $request){
        $user = Auth::user();
        $account = Account::find($user->id);

        $validatedData = $request->validate([
            'balance' => 'required|gte:.1'
        ]);
        
        $account->balance = $account->balance + $request->input('balance');

        if($account->balance / .65 <= .64){
            $account->message_limit = 0;
        }else{
            $account->message_limit = floor($account->balance / .65);
        }  
        
        $account->update();

        return redirect('/getbalance')->with('message', 'El crédito se ha adicionado con con éxito');
    }
    
    // public function newAccount(Request $request){
    //     $user = Auth::user();
    //     $account = new Account();

    //     $account->type = $request->input('type');
    //     $account->message_limit = $request->input('message_limit');
    //     $account->balance = $request->input('balance');
    //     $account->status = $request->input('status');
    //     $account->user_id = $user->id;

    //     $request->validate([
    //         'type' => 'required',
    //         'message_limit' => 'required',
    //         'balance' => 'required',
    //         'status' => 'required'
    //     ]);

    //     $account->save();

    //     return redirect('getaccount')->with('message', 'La cuenta se ha creado con éxito');
    // }
}
