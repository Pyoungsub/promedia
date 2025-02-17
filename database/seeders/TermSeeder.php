<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Term;
class TermSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Term::insert([
            ['ordinal_number' => 1, 'from' => 1969, 'to' => 1970, 'created_at' => now(), 'updated_at' => now()],
            ['ordinal_number' => 2, 'from' => 1969, 'to' => 1970, 'created_at' => now(), 'updated_at' => now()],
            ['ordinal_number' => 3, 'from' => 1969, 'to' => 1970, 'created_at' => now(), 'updated_at' => now()],
            ['ordinal_number' => 4, 'from' => 1969, 'to' => 1970, 'created_at' => now(), 'updated_at' => now()],
            ['ordinal_number' => 5, 'from' => 1969, 'to' => 1970, 'created_at' => now(), 'updated_at' => now()],
            ['ordinal_number' => 6, 'from' => 1971, 'to' => 1972, 'created_at' => now(), 'updated_at' => now()],
            ['ordinal_number' => 7, 'from' => 1973, 'to' => 1974, 'created_at' => now(), 'updated_at' => now()],
            ['ordinal_number' => 8, 'from' => 1975, 'to' => 1976, 'created_at' => now(), 'updated_at' => now()],
            ['ordinal_number' => 9, 'from' => 1977, 'to' => 1978, 'created_at' => now(), 'updated_at' => now()],
            ['ordinal_number' => 10, 'from' => 1979, 'to' => 1980, 'created_at' => now(), 'updated_at' => now()],
            ['ordinal_number' => 11, 'from' => 1981, 'to' => 1982, 'created_at' => now(), 'updated_at' => now()],
            ['ordinal_number' => 12, 'from' => 1983, 'to' => 1984, 'created_at' => now(), 'updated_at' => now()],
            ['ordinal_number' => 13, 'from' => 1985, 'to' => 1986, 'created_at' => now(), 'updated_at' => now()],
            ['ordinal_number' => 14, 'from' => 1987, 'to' => 1988, 'created_at' => now(), 'updated_at' => now()],
            ['ordinal_number' => 15, 'from' => 1989, 'to' => 1990, 'created_at' => now(), 'updated_at' => now()],
            ['ordinal_number' => 16, 'from' => 1991, 'to' => 1993, 'created_at' => now(), 'updated_at' => now()],
            ['ordinal_number' => 17, 'from' => 1993, 'to' => 1995, 'created_at' => now(), 'updated_at' => now()],
            ['ordinal_number' => 18, 'from' => 1995, 'to' => 1998, 'created_at' => now(), 'updated_at' => now()],
            ['ordinal_number' => 19, 'from' => 1998, 'to' => 2001, 'created_at' => now(), 'updated_at' => now()],
            ['ordinal_number' => 20, 'from' => 2001, 'to' => 2004, 'created_at' => now(), 'updated_at' => now()],
            ['ordinal_number' => 21, 'from' => 2004, 'to' => 2006, 'created_at' => now(), 'updated_at' => now()],
            ['ordinal_number' => 22, 'from' => 2006, 'to' => 2008, 'created_at' => now(), 'updated_at' => now()],
            ['ordinal_number' => 23, 'from' => 2008, 'to' => 2010, 'created_at' => now(), 'updated_at' => now()],
            ['ordinal_number' => 24, 'from' => 2010, 'to' => 2012, 'created_at' => now(), 'updated_at' => now()],
            ['ordinal_number' => 25, 'from' => 2012, 'to' => 2014, 'created_at' => now(), 'updated_at' => now()],
            ['ordinal_number' => 26, 'from' => 2014, 'to' => 2016, 'created_at' => now(), 'updated_at' => now()],
            ['ordinal_number' => 27, 'from' => 2016, 'to' => 2018, 'created_at' => now(), 'updated_at' => now()],
            ['ordinal_number' => 28, 'from' => 2019, 'to' => 2020, 'created_at' => now(), 'updated_at' => now()],
            ['ordinal_number' => 29, 'from' => 2021, 'to' => 2022, 'created_at' => now(), 'updated_at' => now()],
            ['ordinal_number' => 30, 'from' => 2023, 'to' => 2024, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
