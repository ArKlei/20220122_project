<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schools')->insert([
        'name' => 'UAB Baltijos technologijų institutas',
            'description' => 'Pakeisk savo gyvenimą! Išmok skaitmeninių profesijų!
                Programavo, dizaino ir kitų skaitmeninių profesijų kursai.
                Programavo, dizaino ir kitų skaitmeninių profesijų kursai Vilniuje, Kaune ir Klaipėdoje.
                Intensyvūs 8-12 savaičių kursai arba metinės programos įvairiose IT srityse.
                Programavimo kursai: Front End, PHP, Java, Swift, Erlang, Python, Ruby on Rails ir kt.
                Dizaino kursai: tinklalapiai, aplikacijos, grafika, UX/UI, 2D ir 3D animacija ir kt.
                Kitos IT sritys: dirbtinis intelektas, growth hacking ir kt.',
            'place' => 'Saulėtekio al. 17, LT-10224 Vilnius',
            'phone' => 37065232000
        ]);
    }
}


