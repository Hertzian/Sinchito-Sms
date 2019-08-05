<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Chenson';
        $user->email = 'alberto.magana@chenson.com.mx';
        $user->password = Hash::make('Chenson123!');
        $user->save();
    }
}
