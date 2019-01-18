<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::truncate();
        User::create([
        	'name' => 'Admin',
        	'email'=> 'a@gmail.com',
        	'email_verified_at' => date('Y-m-d H:i:s', time()),
        	'password' => bcrypt('123465'),
        ]);
         User::create([
        	'name' => 'mod',
        	'email'=> 'mod@gmail.com',
        	'email_verified_at' => date('Y-m-d H:i:s', time()),
        	'password' => bcrypt('123465'),
        ]);
    }
}
