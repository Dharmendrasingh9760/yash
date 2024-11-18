<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@nagarpalika.com',
            'password' => Hash::make('Admin@nagarpalika4321'),
            'mobile' => 1234567899,
            'role' => '1',
        ]);

    }
}
