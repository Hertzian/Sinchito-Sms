<?php

namespace App\Http\Controllers\user;

use App\Account;
use App\ItemList;
use Clx\Xms\Client;
use App\MessageList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MessageListController extends Controller
{
    public function getMessajeList(){    
        $user = Auth::user();
        $account = Account::find($user->id);
        $messaje = ItemList::where('account_id', $user->id)->get();

        return view('user.messageList.messageList',[

        ]);
    }

    public function MessageListView(){
        $user = Auth::user();
        $account = Account::find($user->id);
        return view('user.messageList.messageList');
        // ,['account' => $account ]);
    }

    public function MessageItemView(){
        $user = Auth::user();
        // $account = Account::find($user->id);
        // $batches = ItemList::where('account_id', $user->id)->get();
        return view('user.messageList.messageItem');
        // ,['batch' => $batches]);
    }

    public function SendListView(){
        $user = Auth::user();
        $account = Account::find($user->id);
        $messageList = MessageList::where('account_id', $account->id)->get();

        return view('user.itemlist.getsendlists',[
            'user' => $user,
            'account' => $account,
            'messageList' => $messageList
        ]);
    }

    public function SendItemsView($id){
        $user = Auth::user();
        $account = Account::find($user->id);
        $batch = MessageList::find($id);
        $messageItem = new Client;
        $item = $messageItem->fetchBatches($batch->name);

        return view('user.itemlist.getsenditems', [
            'user' => $user,
            'account' => $account,
            'batch' => $batch,
            // 'messageItem' => $messageItem
            'item' => $item
        ]);
    }
}
