<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('userRoles')->insert([
            'libelle'=>['client_booker','client_admin','seven_agent','seven_admin','seven-controller']
        ]);
    }
}
