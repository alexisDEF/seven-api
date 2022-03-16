<?php

namespace Database\Seeders;

use App\Models\VehicleModel;
use Illuminate\Database\Seeder;

class VehicleModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VehicleModel::create([
            'brand'=>'Renault',
            'model'=>'Clio 3',
            'vehiclesAvailable'=>50,
            'vehiclesUnavailable'=>100,
        ]);

        VehicleModel::create([
            'brand'=>'Citroen',
            'model'=>'C3',
            'vehiclesAvailable'=>20,
            'vehiclesUnavailable'=>50,
        ]);

        VehicleModel::create([
            'brand'=>'Renault',
            'model'=>'Espace',
            'vehiclesAvailable'=>100,
            'vehiclesUnavailable'=>1,
        ]);

        VehicleModel::create([
            'brand'=>'Fiat',
            'model'=>'Doblo',
            'vehiclesAvailable'=>50,
            'vehiclesUnavailable'=>100,
        ]);

        VehicleModel::create([
            'brand'=>'Audi',
            'model'=>'A3',
            'vehiclesAvailable'=>50,
            'vehiclesUnavailable'=>100,
        ]);

        VehicleModel::create([
            'brand'=>'Peugeot',
            'model'=>'208',
            'vehiclesAvailable'=>50,
            'vehiclesUnavailable'=>100,
        ]);

        VehicleModel::create([
            'brand'=>'Volkwagen',
            'model'=>'Golf IV',
            'vehiclesAvailable'=>50,
            'vehiclesUnavailable'=>100,
        ]);

        VehicleModel::create([
            'brand'=>'Dacia',
            'model'=>'Sandero',
            'vehiclesAvailable'=>50,
            'vehiclesUnavailable'=>100,
        ]);

        VehicleModel::create([
            'brand'=>'Toyota',
            'model'=>'Yaris',
            'vehiclesAvailable'=>50,
            'vehiclesUnavailable'=>100,
        ]);

        VehicleModel::create([
            'brand'=>'Ford',
            'model'=>'Puma',
            'vehiclesAvailable'=>50,
            'vehiclesUnavailable'=>100,
        ]);
    }
}
