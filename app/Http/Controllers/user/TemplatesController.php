<?php

namespace App\Http\Controllers\user;

use App\Account;
use App\ItemList;
use App\Template;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TemplatesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function getTemplatesView(){
        $user = Auth::user();
        $account = Account::find($user->id);
        $batches = ItemList::where('account_id', $user->id)->get();
        $templates = Template::where('account_id', $user->id)->get();

        return view('user.templates.getTemplates', [
            'account' => $account,
            'batches' => $batches,
            'templates' => $templates
        ]);
    }

    public function newTemplate(Request $request){
        $user = Auth::user();
        $account = Account::find($user->id);

        $template = new Template();

        
        $request->validate([
            'name' => 'required',
            'content' => 'required'
        ]);

        $template->account_id = $account->id;
        $template->name = $request->input('name');
        $template->content = $request->input('content');

        $template->save();

        return redirect('/user/gettemplates')->with('message', 'La plantilla se ha creado con éxito');
    }

    public function editTemplate(Request $request, $id){
        $user = Auth::user();
        $account = Account::find($user->id);
        $template = Template::find($id);

        $request->validate([
            'name' => 'required',
            'content' => 'required'
        ]);

        $template->account_id = $account->id;
        $template->name = $request->input('name');
        $template->content = $request->input('content');

        $template->update();

        return redirect('/user/gettemplates')->with('message', 'La plantilla se ha editado con éxito');
    }

    public function deleteTemplate($id){
        $template = Template::find($id);

        $template->delete();

        return redirect('/user/gettemplates')->with('message', 'La plantilla fue eliminada con éxito');
    }
}
