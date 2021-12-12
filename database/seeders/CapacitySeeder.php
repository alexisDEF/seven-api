<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CapacitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('capacities')->insert([
            'libelle'=> ['viewTravel','viewCompany','viewVehicle']
        ]);
    }
}
