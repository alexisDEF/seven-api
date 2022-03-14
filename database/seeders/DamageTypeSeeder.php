<?php

namespace Database\Seeders;

use App\Models\DamageType;
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
        $RS = DamageType::create(['damage'=>'Rayure superficielle']);
        $RP = DamageType::create(['damage'=>'Rayure profonde']);
        $EC = DamageType::create(['damage'=>'Enfoncement/choc']);
//        return [
//            $RS,
//            $RP,
//            $EC
//        ];
    }
}
