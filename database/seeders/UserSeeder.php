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
        $admin_id = DB::table('users')->insert([
            'name' => 'Beaufaye',
            'password' => Hash::make('benben'),
            'role' => 'admin',
        ]);

      
    }
}
