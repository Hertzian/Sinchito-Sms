<?php

namespace App\Http\Controllers\user;

use App\Account;
use App\Message;
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

    public function messageListView(){
        $user = Auth::user();
        $account = Account::find($user->id);
        return view('user.messageList.messageList');
    }

    public function messageItemView(){
        $user = Auth::user();
        return view('user.messageList.messageItem');
    }

    public function sendListView(){
        $user = Auth::user();
        $account = Account::find($user->id);
        $messageList = MessageList::where('account_id', $account->id)->get();

        return view('user.itemlist.getsendlists',[
            'user' => $user,
            'account' => $account,
            'messageList' => $messageList
        ]);
    }

    public function sendItemsView($messageListId){
        $user = Auth::user();
        $account = Account::find($user->id);
        $messageList = MessageList::find($messageListId);

        $messages = Message::where('message_list_id', $messageListId)->get();

        // dd($messages);

        if (count($messages) >= 1) {
            return view('user.itemlist.getsenditems')
                ->with([
                    'content' => $messageList->body,
                    'messages' => $messages
                ]);
        }else {
            try {
                $messageItem = new Client($this->splan, $this->token);
                
                $items = $messageItem->fetchBatch($messageList->name);

                // dd($items->getRecipients());

                for ($i=0; $i < count($items->getRecipients()); $i++) { 
                    $item = new Message();
                    $item->identifier = $messageList->name;
                    $item->recipient = $items->getRecipients()[$i];
                    $item->message_list_id = $messageListId;
                    $item->save();
                }

                return view('user.itemlist.getsenditems')
                ->with([
                    'content' => $messageList->body,
                    'messages' => $messages
                ]);
                
            } catch (\Throwable $th) {
                return redirect('/user/sendmessagelist')->with('message', 'Ha ocurrido un error al recuperar los mensajes');
            }
        }
    }
}
