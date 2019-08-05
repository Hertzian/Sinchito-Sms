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
        $chenson = new User();
        $chenson->name = 'Chenson';
        $chenson->email = 'alberto.magana@chenson.com.mx';
        $chenson->password = Hash::make('Chenson123!');
        $chenson->save();

        $user = new User();
        $user->name = 'user';
        $user->email = 'user@user.com';
        $user->password = Hash::make('12345678');
        $user->save();
        
    }
}
