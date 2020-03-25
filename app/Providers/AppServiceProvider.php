<?php

namespace App\Providers;

use App\Account;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('*', function (View $view){
            if (Auth::user()) {
                $user = Auth::user();
                $name = $user->name;
                $last_mame = $user->last_name;
                $email = $user->email;
                $avatar = $user->avatar;
                
                $account = Account::find($user->id);
                $balance = $account->balance;
                $smsLimit = $account->message_limit;

                $view->with([
                    'name' => $name,
                    'last_mame' => $last_mame,
                    'email' => $email,
                    'avatar' => $avatar,
                    'balance' => $balance,
                    'smsLimit' => $smsLimit,
                ]);
            }
        });

                
    }
}
