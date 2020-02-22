<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'user',
            'last_name' => 'ApellidoPaterno',
            'sec_last_name' => 'ApellidoMaterno',
            'phone' => '0123456789',
            'email' => 'user@user.com',
            'password' => Hash::make('12345678'),
        ]);
        
    }
}
