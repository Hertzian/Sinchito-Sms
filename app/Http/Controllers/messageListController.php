<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class messageListController extends Controller
{
    public function getMessajeList(){    
        $user = Auth::user();
        $account = Account::find($user->id);
        $messaje = ItemList::where('account_id', $user->id)->get();

        return view('MessageList.messageList',[

        ]);
    }

}
