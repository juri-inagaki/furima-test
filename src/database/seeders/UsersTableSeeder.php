<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'テストユーザー1',
                'email' => 'test1@example.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'テストユーザー2',
                'email' => 'test2@example.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'テストユーザー3',
                'email' => 'test3@example.com',
                'password' => Hash::make('password'),
            ],
        ]);
    }
}