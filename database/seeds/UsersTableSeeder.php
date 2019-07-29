<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'User',
            'email' => 'user@postget.com',
            'role_id' => 0,
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@postget.com',
            'role_id' => 1,
            'email_verified_at' => now(),
            'password' => Hash::make('adminpassword'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
