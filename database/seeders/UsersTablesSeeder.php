<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user1 =  User::create([
            'name'    => 'Admin',
            'email'    => 'admin@gmail.com',
            'password'   =>  Hash::make('123456'),
            'remember_token' =>  str_random(10),
            'is_admin' => 1
        ]);

        $user2 = User::create([
            'name'    => 'user',
            'email'    => 'user@gmail.com',
            'password'   =>  Hash::make('123456'),
            'remember_token' =>  str_random(10),
            'is_admin' => 0
        ]);
    }
}
