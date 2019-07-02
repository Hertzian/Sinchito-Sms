<?php

namespace App\Http\Controllers;

use App\Account;
use App\Message;
use App\MessageList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class messageListController extends Controller
{
    public function getMessajeList(){    
        $user = Auth::user();
        $message = MessageList::where('account_id', $user->id)->get();

        return view('MessageList.messageList',[
            'message' => $message
        ]);
    }

    public function getMessajeItem($id){    
        $user = Auth::user();
        $account = Account::find($user->id);
        $message = Message::where('message_list_id', $id)->get();

        return view('MessageList.messageItem',[
            'message' => $message
        ]);
    }


    public function MessageListView(){
        $user = Auth::user();
        $account = Account::find($user->id);
        return view('MessageList.messageList');
        // ,['account' => $account ]);
    }

    public function MessageItemView(){
        $user = Auth::user();
        // $account = Account::find($user->id);
        // $batches = ItemList::where('account_id', $user->id)->get();
        return view('MessageList.messageItem');
        // ,['batch' => $batches]);
        
    }

}
