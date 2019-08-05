<?php

use App\Account;
use Illuminate\Database\Seeder;

class AccountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $chenson = new Account();
        $chenson->user_id = '1';
        $chenson->save();

        $account = new Account();
        $account->user_id = '2';
        $account->save();
    }
}
