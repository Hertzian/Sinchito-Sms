<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    
    public function newTemplate(Request $request){
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
       
        $template->delete();

        return redirect('/template')
        ->with('message', 'El batch se ha eliminado con éxito');;
    }
}
