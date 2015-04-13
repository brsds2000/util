<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UserTableSeeder extends Seeder {

    public function run()
    {
        // DB::table('users')->delete();

        User::create([
        	'email' => 'testeadmin@teste.com',
        	'name' => 'teste Adminstridor',
        	'password' => bcrypt($data['teste123']),
        	'indativo' => 'S',
        	'indadmin' => 'S'
        	]);
	}

}