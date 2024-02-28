<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => env('SEED_USERNAME'),
            'email' => env('SEED_EMAIL'),
            'password' => Hash::make(env('SEED_PASSWORD'))
        ]);
    }
}
