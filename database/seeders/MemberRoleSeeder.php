<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MemberRole;
class MemberRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        MemberRole::insert([
            ['role' => '명예회장', 'created_at' => now(), 'updated_at' => now()],
            ['role' => '회장', 'created_at' => now(), 'updated_at' => now()],
            ['role' => '고문', 'created_at' => now(), 'updated_at' => now()],
            ['role' => '상임고문', 'created_at' => now(), 'updated_at' => now()],
            ['role' => '부회장', 'created_at' => now(), 'updated_at' => now()],
            ['role' => '상근부회장', 'created_at' => now(), 'updated_at' => now()],
            ['role' => '감사', 'created_at' => now(), 'updated_at' => now()],
            ['role' => '이사', 'created_at' => now(), 'updated_at' => now()],
            ['role' => '전무이사', 'created_at' => now(), 'updated_at' => now()],
            ['role' => '실행이사', 'created_at' => now(), 'updated_at' => now()],
            ['role' => '이사장', 'created_at' => now(), 'updated_at' => now()],
            ['role' => '부이사장', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
