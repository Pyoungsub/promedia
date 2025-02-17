<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
        //
        User::insert(['name' => '최고관리자', 'email' => 'admin@kopma.kr', 'password' => Hash::make('password'), 'created_at' => now(), 'updated_at' => now()]);
    }
}