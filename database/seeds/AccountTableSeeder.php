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
        $account = Account::create([
            'user_id' => '1',
            'type' => 'normal',
            'price' => '.1',
            'message_limit' => '100',
            'balance' => '10',
            'status' => '1'
        ]);
        
    }
}
