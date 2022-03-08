<?php

namespace Database\Seeders;

use App\Models\VehiclePart;
use Illuminate\Database\Seeder;

class VehiclePartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VehiclePart::create(['libelle'=>'Aile AV G']);
        VehiclePart::create(['libelle'=>'Aile AV D']);
        VehiclePart::create(['libelle'=>'Aile AR G']);
        VehiclePart::create(['libelle'=>'Aile AR D']);
        VehiclePart::create(['libelle'=>'Calandre']);
        VehiclePart::create(['libelle'=>'Phare AV G']);
        VehiclePart::create(['libelle'=>'Phare AV D']);
        VehiclePart::create(['libelle'=>'Siège conducteur']);
        VehiclePart::create(['libelle'=>'Siège passager']);
        VehiclePart::create(['libelle'=>'Tableau de bord']);
        VehiclePart::create(['libelle'=>'Porte AV G']);
        VehiclePart::create(['libelle'=>'Porte AV D']);
        VehiclePart::create(['libelle'=>'Porte AR G']);
        VehiclePart::create(['libelle'=>'Porte AR D']);
    }
}
