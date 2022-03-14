<?php

namespace Database\Seeders;

use App\Models\Agency;
use Illuminate\Database\Seeder;

class AgencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Agency::create([
            'country'=>'France',
            'city'=>'Villeneuve-Le-Roi',
            'postCode'=>'94290',
            'address'=>'21 rue de Pierre Fitte',
            'phoneNumber'=>'0233096754',
        ]);

        Agency::create([
        'country'=>'France',
        'city'=>'Le Blanc-Mesnil',
        'postCode'=>'93150',
        'address'=>'4 rue du Parc',
        'phoneNumber'=>'0214485763'
        ]);
        Agency::create([
        'country'=>'France',
        'city'=>'La Courneuve',
        'postCode'=>'93120',
        'address'=>'5 rue Pascal',
        'phoneNumber'=>'0214883763',
        ]);
        Agency::create([
        'country'=>'France',
        'city'=>'Wissous',
        'postCode'=>'91320',
        'address'=>'Voies des Jumeaux',
        'phoneNumber'=>'0239745861',
        ]);

        Agency::create([
        'country'=>'France',
        'city'=>'Waziers',
        'postCode'=>'59119',
        'address'=>'50 rue Célestin Dubois',
        'phoneNumber'=>'0348914764',
        ]);

        Agency::create([
        'country'=>'France',
        'city'=>'Volgré',
        'postCode'=>'89710',
        'address'=>'Route de Montargis',
        'phoneNumber'=>'0258584961',
        ]);

        Agency::create([
        'country'=>'France',
        'city'=>'Vitry-en-Charollais',
        'postCode'=>'71600',
        'address'=>'Lieu-dit Les Collaillots',
        'phoneNumber'=>'0148756910',
        ]);

        Agency::create([
        'country'=>'France',
        'city'=>'Virelade',
        'postCode'=>'33720',
        'address'=>'1 La Barbouse',
        'phoneNumber'=>'0247951479',
        ]);

        Agency::create([
        'country'=>'France',
        'city'=>'Saint-Herblain',
        'postCode'=>'44800',
        'address'=>'7 Rue des Piliers de la Chauvinière',
        'phoneNumber'=>'0287468745',
        ]);

        Agency::create([
        'country'=>'France',
        'city'=>'Toulouse',
        'postCode'=>'31100',
        'address'=>'297 Route d\'Espagne',
        'phoneNumber'=>'0589478516',
        ]);

        Agency::create([
        'country'=>'France',
        'city'=>'Pornic',
        'postCode'=>'44210',
        'address'=>'17 rue Henri Becquerel',
        'phoneNumber'=>'0215487895',
        ]);
        //Example
        /**Agency::create([
        'country'=>'France',
        'city'=>'',
        'postCode'=>'',
        'address'=>'',
        'phoneNumber'=>$this->faker->phoneNumber,
        ]);*/
    }
}
