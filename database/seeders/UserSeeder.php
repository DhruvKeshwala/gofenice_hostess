<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \DB;
use Hash;

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
            'role' => 'admin',
            'name' => 'Admin',
            'surname' => 'Admin',
            'email' => 'admin@gmail.com',
            'mobilenoprefix' => '91',
            'mobileno' => '9999999999',
            'status' => 'Active',
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'role' => 'user',
            'name' => 'User',
            'surname' => 'User',
            'email' => 'user@gmail.com',
            'mobilenoprefix' => '91',
            'mobileno' => '8888888888',
            'status' => 'Active',
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $prefixes = ['91', '93', '355'];
        foreach ($prefixes as $key => $value) {
            DB::table('mobile_prefixes')->insert([
                'prefix' => $value,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
