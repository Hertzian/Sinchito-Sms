<?php

namespace App\Http\Controllers\user;

use App\Account;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function getProfileView(){
        $user = Auth::user();
        $account = Account::find($user->id);

        return view('user.profile.getprofile', [
            'user' => $user,
            'account' => $account
        ]);
    }

    public function dashboard(){
        return view('user.dashboard');
    }
}
