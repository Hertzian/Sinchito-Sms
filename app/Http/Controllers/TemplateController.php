<?php

namespace App\Http\Controllers;

use App\Account;
use App\ItemList;
use App\Template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TemplateController extends Controller
{
    
    public function newTemplate($id, Request $request){
        $account = Account::find($id);
        $template = new Template();

        $template->name = $request -> input('name');
        $template->content = $request -> input('texto_personalizado');
        $template->account_id = $id;        

        // $request->validate([
        //     // '' => 'required',
        //     'name' => 'required',
        //     'content' => 'required'
        // ]);

        $template->save();

        return redirect('/getTemplate')
        ->with('message', 'La plantilla se ha creado con éxito');
    }

    public function gettemplate(){
        $user = Auth::user();
        $account = Account::find($user->id);
        $template = Template::where('account_id',  $user->id)->get();
        $temitem = Template::where('account_id',  $user->id)->get();
        $batches = ItemList::where('account_id', $user->id)->get();

        return view('vistas.template',[
            'template' => $template,
            'account' => $account,
            'batches' => $batches,
            'temitem' => $temitem
        ]);
    }

    public function gettemplateitem($id){    
        $user = Auth::user();
        $account = Account::find($user->id);
        $template = Template::where('id',  $id)->get();

        return view('template.templateitem',[
            'template' => $template,
            'account' => $account
        ]);
    }

    public function editTemplate(Request $request, $id){
        $template =  Template::find($id);
        $user = Auth::user();
        $account = Account::find($user->id);

        $template->name = $request->input('name');
        $template->content = $request->input('content');
        $template->id = $template->id;
        $template->account_id = $account->id;

        $template->update();

        return redirect('/getTemplate')
        ->with('message', 'La plantilla se ha editado con éxito');
    }

    public function deleteTemplate($id){        
        $template = Template::find($id);
        $template -> delete();

        return redirect('/getTemplate')
        ->with('message', 'El plantilla se ha eliminado con éxito');;
    }

    public function gettemplatesms($id){    
        $user = Auth::user();
        $account = Account::find($user->id);
        $template = Template::where('id',  $id)->get();
        $temitem = Template::where('account_id',  $user->id)->get();
        $batches = ItemList::where('account_id', $user->id)->get();

        return view('template.templatesms',[
            'template' => $template,
            'account' => $account,
            'batches' => $batches,
            'temitem' => $temitem
        ]);
    }
}
