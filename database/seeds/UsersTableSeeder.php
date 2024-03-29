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
        User::create([
        	'name' => 'Bruno Aguilar',
        	'email' => 'josebrunoaguilar@gmail.com',
        	'password' => bcrypt('123456')
        ]);
        User::create([
        	'name' => 'Marcelo Aguilar',
        	'email' => 'marcelo@gmail.com',
        	'password' => bcrypt('123456')
        ]);
    }
}
