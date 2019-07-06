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
                $balance = bcdiv($account->balance , '1', 1);
                $view->with('balance', $balance);
            }
        });
        view()->composer('*', function (View $view){
            if (Auth::user()) {
                $user = Auth::user();
                $account = Account::find($user->id);
                $smsLimit = bcdiv($account->message_limit, '1', 1);
                $view->with('smsLimit', $smsLimit);
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
        
        // view()->composer('*', function (View $view){
        //     if (Auth::user()) {
        //         $user = Auth::user();
        //         $Lname = $user->last_name;
        //         $view->with('Lname', $Lname);                
        //     }
        // });

        // view()->composer('*', function (View $view){
        //     if (Auth::user()) {
        //         $user = Auth::user();
        //         $phone = $user->phone;
        //         $view->with('phone', $phone);                
        //     }
        // });

        // view()->composer('*', function (View $view){
        //     if (Auth::user()) {
        //         $user = Auth::user();
        //         $country = $user->phone;
        //         $view->with('country', $country);                
        //     }
        // });

        // view()->composer('*', function (View $view){
        //     if (Auth::user()) {
        //         $user = Auth::user();
        //         $state = $user->state;
        //         $view->with('state', $state);                
        //     }
        // });

        // view()->composer('*', function (View $view){
        //     if (Auth::user()) {
        //         $user = Auth::user();
        //         $city = $user->city;
        //         $view->with('city', $city);                
        //     }
        // });

        // view()->composer('*', function (View $view){
        //     if (Auth::user()) {
        //         $user = Auth::user();
        //         $address = $user->address;
        //         $view->with('address', $address);                
        //     }
        // });


    }
}
