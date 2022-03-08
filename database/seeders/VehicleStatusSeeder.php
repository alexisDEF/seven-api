<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicle_statuses')->insert(
            [
                'libelle'=>'A préparer'
            ]
        );

        DB::table('vehicle_statuses')->insert(
            [
                'libelle'=>'Prêt à partir'
            ]
        );

        DB::table('vehicle_statuses')->insert(
            [
                'libelle'=>'Contrôlé au retrait'
            ]
        );
    }
}
