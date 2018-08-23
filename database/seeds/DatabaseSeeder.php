<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
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
