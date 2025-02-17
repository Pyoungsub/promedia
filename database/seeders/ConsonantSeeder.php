<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Consonant;
class ConsonantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Consonant::insert([
            ['consonant' => 'ㄱ', 'created_at' => now(), 'updated_at' => now()],
            ['consonant' => 'ㄴ', 'created_at' => now(), 'updated_at' => now()],
            ['consonant' => 'ㄷ', 'created_at' => now(), 'updated_at' => now()],
            ['consonant' => 'ㄹ', 'created_at' => now(), 'updated_at' => now()],
            ['consonant' => 'ㅁ', 'created_at' => now(), 'updated_at' => now()],
            ['consonant' => 'ㅂ', 'created_at' => now(), 'updated_at' => now()],
            ['consonant' => 'ㅅ', 'created_at' => now(), 'updated_at' => now()],
            ['consonant' => 'ㅇ', 'created_at' => now(), 'updated_at' => now()],
            ['consonant' => 'ㅈ', 'created_at' => now(), 'updated_at' => now()],
            ['consonant' => 'ㅊ', 'created_at' => now(), 'updated_at' => now()],
            ['consonant' => 'ㅋ', 'created_at' => now(), 'updated_at' => now()],
            ['consonant' => 'ㅌ', 'created_at' => now(), 'updated_at' => now()],
            ['consonant' => 'ㅍ', 'created_at' => now(), 'updated_at' => now()],
            ['consonant' => 'ㅎ', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
