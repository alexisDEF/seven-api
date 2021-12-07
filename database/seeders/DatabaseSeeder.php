<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'email'=>'saler01@alizon.fr',
            'password'=>Hash::make('12345678'),
            'firstName' => 'Saler',
            'lastName' => '01',
            'street' => 'teststreet',
            'postalCode' => '85000',
            'city' => 'testcity',
            'tel' => '0601020304',
            'licenseNumber' => 123456,
            'role_id' => 1,
        ]);
         \App\Models\User::factory(10)->create();


    }
}
