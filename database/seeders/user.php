<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'akbar',
            'email' => 'akbar@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('akbar123'),
            'remember_token' => rand(100, 500),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
