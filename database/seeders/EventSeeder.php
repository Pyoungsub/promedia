<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;
class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::insert([
            ['title' => '제250차 이사회', 'date' => '2024-04-15', 'created_at' => '2024-07-22 11:32:00', 'updated_at' => '2024-07-22 11:32:00'],
            ['title' => '전문기자연수회 ', 'date' => '2023-09-11', 'created_at' => '2024-07-22 11:32:55', 'updated_at' => '2024-07-22 11:32:55'],
            ['title' => '제31대 회장단', 'date' => '2024-02-22', 'created_at' => '2024-07-22 11:33:51', 'updated_at' => '2024-07-22 11:33:51'],
            ['title' => '제249차 이사회', 'date' => '2024-03-19', 'created_at' => '2024-07-22 11:43:41', 'updated_at' => '2024-07-22 11:43:41'],
            ['title' => '산악동우회 행사', 'date' => '2024-04-08', 'created_at' => '2024-07-22 11:44:20', 'updated_at' => '2024-07-22 11:44:20'],
            ['title' => '한일합동세미나 추진위 회의', 'date' => '2024-04-15', 'created_at' => '2024-07-22 11:44:50', 'updated_at' => '2024-07-22 11:44:50'],
            ['title' => '한일합동세미나', 'date' => '2024-05-30', 'created_at' => '2024-07-22 11:45:33', 'updated_at' => '2024-07-22 11:45:33'],
        ]);
        //
        
    }
}
