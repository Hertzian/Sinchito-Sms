<?php

namespace App\Http\Controllers\admin;

use App\User;
use App\Account;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountsController extends Controller
{
    public function addCredit(Request $request, $id){
        $user = User::find($id);
        $account = Account::find($user->id);

        $this->validate($request,[
            'balance' => 'required|gte:.1'
        ]);
        
        $account->balance = $account->balance + $request->input('balance');

        if($account->balance / $account->price <= $account->price - .1){
            $account->message_limit = 0;
        }else{
            $account->message_limit = floor($account->balance / $account->price);
        }  

        $account->update();

        return redirect('/admin/userdetail/' . $user->id)
            ->with('message', 'El crédito se ha adicionado con éxito.');
    }
    
    public function statusAccount(Request $request, $id){
        $user = User::find($id);
        $account = Account::find($user->id);

        $this->validate($request, [
            'type' => 'required',
            'price' => 'required',
            'status' => 'required'
        ]);

        $account->type = $request->input('type');
        $account->price = $request->input('price');
        $account->status = $request->input('status');
        $account->message_limit =  $account->balance / $account->price;

        $account->update();

        return redirect('/admin/userdetail/' . $user->id)
            ->with('message', 'Los datos de cuenta se han actualizado con éxito.');
    }
}
