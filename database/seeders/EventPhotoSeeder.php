<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EventPhoto;
class EventPhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        EventPhoto::insert([
            ['event_id' => 1, 'img_path' => 'events/PgXJkL9PfEWZ0I0YqiKQIFyPzNdjkSv5F97F3LQH.jpg', 'created_at' => '2024-07-22 11:32:00', 'updated_at'=> '2024-07-22 11:32:00'],
            ['event_id' => 2, 'img_path' => 'events/rBdzRoRlDxmGooQp2LnMbORLa6BW8OvDA1SDoWyr.jpg', 'created_at' => '2024-07-22 11:32:55', 'updated_at'=> '2024-07-22 11:32:55'],
            ['event_id' => 2, 'img_path' => 'events/ZEpHSdnkiFtOVkb3tixLizf1mICFB9HFpKbdaGtG.jpg', 'created_at' => '2024-07-22 11:32:55', 'updated_at'=> '2024-07-22 11:32:55'],
            ['event_id' => 3, 'img_path' => 'events/GIgzsIby2MjfI7Notqr41ScElhcjEmufXPsASbQc.jpg', 'created_at' => '2024-07-22 11:33:51', 'updated_at'=> '2024-07-22 11:33:51'],
            ['event_id' => 3, 'img_path' => 'events/7xGsdzlDONQXOe93TD5iP5g0Qx2iETgL0aZqCGXq.jpg', 'created_at' => '2024-07-22 11:33:51', 'updated_at'=> '2024-07-22 11:33:51'],
            ['event_id' => 3, 'img_path' => 'events/Uc6Em49yZX8KOf90cVtDkOFvteT7aAgL0aZqCGXq.jpg', 'created_at' => '2024-07-22 11:33:51', 'updated_at'=> '2024-07-22 11:33:51'],
            ['event_id' => 4, 'img_path' => 'events/mNvXDdVAhpyDQWQSRBm3Ekt6xKBopMye5NqqKiut.jpg', 'created_at' => '2024-07-22 11:43:41', 'updated_at'=> '2024-07-22 11:43:41'],
            ['event_id' => 5, 'img_path' => 'events/vTBOjRh5kkaPXX2jl8d7GZ0OHIaUxYmR3D6PcBDM.jpg', 'created_at' => '2024-07-22 11:44:20', 'updated_at'=> '2024-07-22 11:44:20'],
            ['event_id' => 6, 'img_path' => 'events/qo5cJ77ZgXuoRcTNZJxCx7tBqkf49iInuChgbbI0.jpg', 'created_at' => '2024-07-22 11:44:50', 'updated_at'=> '2024-07-22 11:44:50'],
            ['event_id' => 7, 'img_path' => 'events/4x7zfcMVUXeXlLvlsLMSRhmgudISJXwN9afGvj4T.png', 'created_at' => '2024-07-22 11:45:33', 'updated_at'=> '2024-07-22 11:45:33'],
        ]);
        
    }
}
