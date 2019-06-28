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
                $account = Account::find($user->id);
                $balance = $account->balance;
                $view->with('balance', $balance);
            }
        });

        view()->composer('*', function (View $view){
            if (Auth::user()) {
                $user = Auth::user();
                $name = $user->name . ' ';
                $view->with('name', $name);
            }
        });

        view()->composer('*', function (View $view){
            if (Auth::user()) {
                $user = Auth::user();
                $email = $user->email;
                $view->with('email', $email);                
            }
        });
    }
}
