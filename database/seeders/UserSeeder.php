<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'admin',
            'email' => 'admin@softui.com',
            'phone' => '0713122381',
            'password' => Hash::make('secret'),
            'org_id' => '51',
            'role' => 'doctor',
            'active'=> '1',
            'verified'=> '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
