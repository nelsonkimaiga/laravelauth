<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder{
    public function run(){
        DB::table('users')->delete();
        
        User::create(array(
    	'name'     => 'Nelson',
        'username' => 'kimaiga',
        'email'    => 'nelsonkimaiga@aol.com',
        'password' => Hash::make('303seminarian'),
    ));
    }
}