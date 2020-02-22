<?php

namespace App\Http\Controllers\user;

use App\Account;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function getProfileView(){
        $user = Auth::user();
        $account = Account::find($user->id);

        return view('user.profile.getprofile', [
            'user' => $user,
            'account' => $account
        ]);
    }

    public function updateProfile(Request $request){
        $user = Auth::user();

        // dd($request);

        $this->validate($request,[
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'sec_last_name' => 'required|string|max:255',
            'phone' => 'numeric|digits:10',
            'email' => 'unique:users,email,' . $user->id,
            'avatar' => 'image|max:1000',
            'password' => 'nullable|min:8|string|confirmed',
        ]);

        if ($request->file('avatar')) {
            $fileNameWithExt = $request->file('avatar')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('avatar')->getClientOriginalExtension();
            $imgFileNameToStore = $fileName . '_' . time() . '.' . $extension;
            $path = $request->file('avatar')->storeAs('public/avatar', $imgFileNameToStore);
            $user->avatar = $imgFileNameToStore;
        }

        $user->name = $request->input('name');
        $user->last_name = $request->input('last_name');
        $user->sec_last_name = $request->input('sec_last_name');
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));


        $user->update();

        return redirect('/user/profile')->with('message', 'Perfil actualizado.');
    }

    public function dashboard(){
        return view('user.dashboard');
    }
}
