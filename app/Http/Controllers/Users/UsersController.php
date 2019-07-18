<?php

namespace App\Http\Controllers\Users;

use App\Account;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function getProfileView(){
        $user = Auth::user();
        $account = Account::find($user->id);

        return view('profile.getprofile', [
            'user' => $user,
            'account' => $account
        ]);
    }
}
