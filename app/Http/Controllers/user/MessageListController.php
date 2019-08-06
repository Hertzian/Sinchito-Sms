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
    public function __construct(){

        $this->middleware('auth');        
        $this->token = config('app.sinch')['API_TOKEN'];
        $this->splan = config('app.sinch')['SERVICE_PLAN_ID'];
        // third arg for Client(), default https://api.clxcommunications.com/xms
        $this->endpoint = url('some url');
        $this->sender = '12345';
    }

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
    }

    public function MessageItemView(){
        $user = Auth::user();
        return view('user.messageList.messageItem');
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
        $messageItem = new Client($this->splan, $this->token);
        $items = $messageItem->fetchBatch($batch->name);

        return view('user.itemlist.getsenditems', [
            'user' => $user,
            'account' => $account,
            'batch' => $batch,
            'id' => $items->getBatchId(),
            'contacts' => $items->getRecipients(),
            'content' => $items->getBody(),
        ]);
    }
}
