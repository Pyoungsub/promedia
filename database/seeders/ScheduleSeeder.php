<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Schedule;
class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Schedule::insert([
            ['admin_id' => 1, 'name' => '감사', 'effective_date' => '2024-07-05', 'due_date' => '2024-07-05', 'from' => '09:00:00', 'to' => '18:00:00', 'place' => '서울특별시 영등포구 당산로41길 11', 'description' => '테스트용 자료 입니다. 행사와 연관 없습니다.', 'created_at' => now(), 'updated_at' => now()],
            ['admin_id' => 1, 'name' => '더미', 'effective_date' => '2024-07-07', 'due_date' => '2024-07-09', 'from' => '09:00:00', 'to' => '18:00:00', 'place' => '서울특별시 영등포구 당산로41길 11', 'description' => '테스트용 자료 입니다. 행사와 연관 없습니다.', 'created_at' => now(), 'updated_at' => now()],
            ['admin_id' => 1, 'name' => '찡긋', 'effective_date' => '2024-07-12', 'due_date' => '2024-07-15', 'from' => '09:00:00', 'to' => '18:00:00', 'place' => '서울특별시 영등포구 당산로41길 11', 'description' => '테스트용 자료 입니다. 행사와 연관 없습니다.', 'created_at' => now(), 'updated_at' => now()],
            ['admin_id' => 1, 'name' => '안녕하세요 다다미디어입니다.', 'effective_date' => '2024-07-17', 'due_date' => '2024-07-17', 'from' => '09:00:00', 'to' => '18:00:00', 'place' => '서울특별시 영등포구 당산로41길 11', 'description' => '테스트용 자료 입니다. 행사와 연관 없습니다.', 'created_at' => now(), 'updated_at' => now()],
            ['admin_id' => 1, 'name' => '감사', 'effective_date' => '2024-08-05', 'due_date' => '2024-08-05', 'from' => '09:00:00', 'to' => '18:00:00', 'place' => '서울특별시 영등포구 당산로41길 11', 'description' => '테스트용 자료 입니다. 행사와 연관 없습니다.', 'created_at' => now(), 'updated_at' => now()],
            ['admin_id' => 1, 'name' => '더미', 'effective_date' => '2024-08-07', 'due_date' => '2024-08-08', 'from' => '09:00:00', 'to' => '18:00:00', 'place' => '서울특별시 영등포구 당산로41길 11', 'description' => '테스트용 자료 입니다. 행사와 연관 없습니다.', 'created_at' => now(), 'updated_at' => now()],
            ['admin_id' => 1, 'name' => '찡긋', 'effective_date' => '2024-08-12', 'due_date' => '2024-08-15', 'from' => '09:00:00', 'to' => '18:00:00', 'place' => '서울특별시 영등포구 당산로41길 11', 'description' => '테스트용 자료 입니다. 행사와 연관 없습니다.', 'created_at' => now(), 'updated_at' => now()],
            ['admin_id' => 1, 'name' => '안녕하세요 다다미디어입니다.', 'effective_date' => '2024-08-17', 'due_date' => '2024-08-17', 'from' => '09:00:00', 'to' => '18:00:00', 'place' => '서울특별시 영등포구 당산로41길 11', 'description' => '테스트용 자료 입니다. 행사와 연관 없습니다.', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
