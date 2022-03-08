<?php

namespace Database\Seeders;

use App\Models\Agency;
use App\Models\Agent;
use App\Models\Capacity;
use App\Models\Company;
use App\Models\Customer;
use App\Models\DamageType;
use App\Models\Driver;
use App\Models\Reservation;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\VehicleCheck;
use App\Models\VehicleModel;
use App\Models\VehiclePart;
use App\Models\VehicleStatus;
use Database\Factories\HasGotDamageFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       // \App\Models\Role::factory(10)->create();
        User::create([
            'email'=>'height@seven.fr',
            'password'=>Hash::make('12345678'),
            'firstname' => 'Height',
            'lastname' => '01',
            'street' => 'teststreet',
            'postalCode' => '85000',
            'city' => 'testcity',
            'tel' => '0601020304',
            'licenseNumber' => 123456,
            'typeUser' => 'agent',
         //   'role_id' => null,
        ]);


        User::create([
            'email'=>'customer@gmail.com',
            'password'=>Hash::make('12345678'),
            'firstName' => 'Customer',
            'lastName' => '01',
            'street' => 'street',
            'postalCode' => '85000',
            'city' => 'Paris',
            'tel' => '0601020304',
            'licenseNumber' => 123457,
            'typeUser' => 'customer',
            //   'role_id' => null,
        ]);

        VehicleModel::create([
            'brand'=>'Renault',
            'model'=>'Clio 3',
            'vehiclesAvailable'=>50,
            'vehiclesUnavailable'=>100,
        ]);

        //VehicleCheckSeeder::class;
        $this->call(VehicleStatusSeeder::class);
        $this->call(DamageTypeSeeder::class);
        $this->call(VehiclePartSeeder::class);


         \App\Models\User::factory(30)->create();
         Agency::factory(10)->create();
         Agent::factory(10)->create();
         Capacity::factory(10)->create();
         Company::factory(10)->create();
         Customer::factory(10)->create();
         Driver::factory(10)->create();
         VehicleCheck::factory(10)->create();
        VehicleModel::factory(1)->create();
        Vehicle::factory(10)->create();
        Reservation::factory(10)->create();


    }
}
