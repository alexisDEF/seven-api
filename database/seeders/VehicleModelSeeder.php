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
            'logoBrandUrl'=>'https://www.francecasse.fr/blog/wp-content/uploads/2014/01/2013.png',
            'vehiclesAvailable'=>50,
            'vehiclesUnavailable'=>100,
        ]);

        VehicleModel::create([
            'brand'=>'Citroen',
            'model'=>'C3',
            'logoBrandUrl'=>'https://www.largus.fr/images/images/logo-citroen-2009-2017.jpg',
            'vehiclesAvailable'=>20,
            'vehiclesUnavailable'=>50,
        ]);

        VehicleModel::create([
            'brand'=>'Renault',
            'model'=>'Espace',
            'logoBrandUrl'=>'https://www.francecasse.fr/blog/wp-content/uploads/2014/01/2013.png',
            'vehiclesAvailable'=>100,
            'vehiclesUnavailable'=>1,
        ]);

        VehicleModel::create([
            'brand'=>'Fiat',
            'model'=>'Doblo',
            'logoBrandUrl'=>'https://m.media-amazon.com/images/I/71Lq7UjirOL._AC_SL1363_.jpg',
            'vehiclesAvailable'=>50,
            'vehiclesUnavailable'=>100,
        ]);

        VehicleModel::create([
            'brand'=>'Audi',
            'model'=>'A3',
            'logoBrandUrl'=>'https://upload.wikimedia.org/wikipedia/fr/1/15/Audi_logo.svg',
            'vehiclesAvailable'=>50,
            'vehiclesUnavailable'=>100,
        ]);

        VehicleModel::create([
            'brand'=>'Peugeot',
            'model'=>'208',
            'logoBrandUrl'=>'https://upload.wikimedia.org/wikipedia/fr/1/15/Audi_logo.svg',

            'vehiclesAvailable'=>50,
            'vehiclesUnavailable'=>100,
        ]);

        VehicleModel::create([
            'brand'=>'Volkwagen',
            'model'=>'Golf IV',
            'logoBrandUrl'=>'https://upload.wikimedia.org/wikipedia/fr/1/15/Audi_logo.svg',

            'vehiclesAvailable'=>50,
            'vehiclesUnavailable'=>100,
        ]);

        VehicleModel::create([
            'brand'=>'Dacia',
            'model'=>'Sandero',
            'logoBrandUrl'=>'https://upload.wikimedia.org/wikipedia/fr/1/15/Audi_logo.svg',

            'vehiclesAvailable'=>50,
            'vehiclesUnavailable'=>100,
        ]);

        VehicleModel::create([
            'brand'=>'Toyota',
            'model'=>'Yaris',
            'logoBrandUrl'=>'https://upload.wikimedia.org/wikipedia/fr/1/15/Audi_logo.svg',

            'vehiclesAvailable'=>50,
            'vehiclesUnavailable'=>100,
        ]);

        VehicleModel::create([
            'brand'=>'Ford',
            'model'=>'Puma',
            'logoBrandUrl'=>'https://upload.wikimedia.org/wikipedia/fr/1/15/Audi_logo.svg',
            'vehiclesAvailable'=>50,
            'vehiclesUnavailable'=>100,
        ]);
    }
}
