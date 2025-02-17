<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            AdminSeeder::class,
<<<<<<< HEAD
            ConsonantSeeder::class,
            PartnershipSeeder::class,
            ScheduleSeeder::class,
        ]);
    }
}
=======
            //ScheduleSeeder::class,
            ConsonantSeeder::class,
            PartnershipSeeder::class,
            PartnershipMemberSeeder::class,
            ConsonantPartnershipSeeder::class,
            PartnershipUrlSeeder::class,
            TermSeeder::class,
            MemberRoleSeeder::class,
            MemberSeeder::class,
            EventSeeder::class,
            EventPhotoSeeder::class,
        ]);
    }
}
>>>>>>> bc662e7 (modified code)
