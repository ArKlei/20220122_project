<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\AttendanceGroup;

use Illuminate\Support\Facades\DB;

class AttendanceGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attendance_groups')->insert([
        'name' => 'Full-stack attendace group: 22gr. 21.09.17 PHP Invest.lt',
        'description' => 'Grupė laisvamanių, lengvabūdžių ir turinčių humoro jausmą bepročių fanatikų grupė!',
        'difficulty' => 'beginners',
        'school_id' => 1
    ]);
    }
}




