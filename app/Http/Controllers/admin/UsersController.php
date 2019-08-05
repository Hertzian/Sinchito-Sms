<?php

namespace App\Http\Controllers\admin;

use App\User;
use App\Account;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function getUsersView(){
        $users = User::all();
        $accounts = Account::with('user');

        return view('admin.users.getUsers',[
            'users' => $users,
            'accounts' => $accounts
        ]);
    }

    public function userDetailView($id){
        $user = User::find($id);
        $account = Account::find($user->id);

        return view('admin.users.userdetail', [
            'user' => $user,
            'account' => $account
        ]);
    }

    public function userDetail(Request $request, $id){
        $user = User::find($id);

        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'unique:users,email,' . $user->id,
            'password' => 'string|min:8'
        ]);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));

        $user->update();

        return redirect('/admin/userdetail/' . $user->id)->with('message', 'El usuario se ha editado con éxito');
    }

    public function newUser(Request $request){
        
        $user = new User();
        $account = new Account();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
        
        $user->save();
        $account->user_id = $user->id;
        $account->save();

        return redirect('/admin')->with('message', 'El usuario se ha creado con éxito');
    }

    public function deleteUser($id){
        $user = User::find($id);
        $user->delete();

        return redirect('/admin')->with('message', 'El usuario se ha eliminado con éxito');
    }
}
