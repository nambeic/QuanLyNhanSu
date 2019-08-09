<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->truncate();
        App\User::create([
        	'name' => 'Nam',
        	'email' =>'nam@gmail.com',
        	'password' => bcrypt('12345678')
        ]);
    }
}