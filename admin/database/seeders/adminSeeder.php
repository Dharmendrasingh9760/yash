<?php

namespace Database\Seeders;

use App\Models\admin;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $create = [
            'name' => 'Admin',
            'email' => 'bharat@appentus.in',
            'password' => Hash::make('1234567890'),
        ];

        User::create($create);
    }
}
