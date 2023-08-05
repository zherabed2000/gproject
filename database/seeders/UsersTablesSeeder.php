<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([
            'name'    => 'Admin',
            'email'    => 'admin@gmail.com',
            'password'   =>  Hash::make('123456'),
            'remember_token' =>  Str::random(10),
            'is_admin' => 1
        ]);

        User::create([
            'name'    => 'user',
            'email'    => 'user@gmail.com',
            'password'   =>  Hash::make('123456'),
            'remember_token' => Str::random(10),
            'is_admin' => 0
        ]);
    }
}
