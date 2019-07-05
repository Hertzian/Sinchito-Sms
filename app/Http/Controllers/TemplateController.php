<?php

namespace App\Http\Controllers;

use App\Account;
use App\Template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TemplateController extends Controller
{
    
    public function newTemplate($id, Request $request1, Request $request2){
        $account = Account::find($id);
        $template = new Template();

        $template->name = $request1->input('name');
        $template->content = $request2->input('content');
        // $template->id = $request0->input('id');

        $request->validate([
            // '' => 'required',
            'name' => 'required',
            'content' => 'required'
        ]);

        $template->save();

        return view('/vistas.template')
        ->with('message', 'La plantilla se ha creado con éxito');
    }

    public function gettemplate(){    
        $user = Auth::user();
        $account = Account::find($user->id);
        $template = Template::where('account_id', $account)->get();

        return view('vistas.template',[
            'template' => $template,
        ]);
    }

    public function editTemplate(Request $request, $id){
        $account = Account::find($id);
        $template = new template();

        $template->name = $request->input('name');
        $template->content = $request->input('content');
        $template->account_id = $account->id;

        $request->validate([
            'name' => 'required',
            'content' => 'required'
        ]);

        $template->save();

        return redirect('/template')
        ->with('message', 'La plantilla se ha creado con éxito');
    }

    public function deleteTemplate($id){        
        $template = Template::find($id);
        $template->delete();

        return redirect('/template')
        ->with('message', 'El batch se ha eliminado con éxito');;
    }
}
