<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Student;
use App\Models\AttendaceGroup;
use App\Models\School;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            SchoolSeeder::class,
            AttendanceGroupSeeder::class,
            StudentSeeder::class
        ]);
    }
}
