<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
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
        Admin::insert([
            'user_id' => 1,
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
