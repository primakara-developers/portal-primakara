<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
        $fields = [
        	'name' => 'Admin',
        	'slug' => str_slug('admin'),
        	'email' => 'admin@primdev.org',
        	'password' => Hash::make('adminprimakaradev'),
        	'is_admin' => 1
        ];

        User::create($fields);
    }
}
