<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DamageTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('damage_types')->insert([
            'damage'=> 'Rayure superficielle'
        ]);

        DB::table('damage_types')->insert([
            'damage'=> 'Rayure profonde'
        ]);

        DB::table('damage_types')->insert([
            'damage'=>'Enfoncement/choc'
        ]);
    }
}
