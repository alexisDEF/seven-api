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
            'email'=>'01@sevenapi.fr',
            'password'=>Hash::make('12345678'),
            'name' => '01',
        ]);
         \App\Models\User::factory(10)->create();

         $saler = Role::create(['name'=>'saler']);
         $purchaser = Role::create(['name'=>'purchaser']);
         $stockEmployee = Role::create(['name'=>'stockEmployee']);
         $stockManager = Role::create(['name'=>'stockManager']);

         $addStockWithdrawal = Permission::create(['name'=>'addStockWithdrawal']);
         $addStockEntry = Permission::create(['name'=>'addStockEntry']);
         $addSupplierOrder = Permission::create(['name'=>'addSupplierOrder']);
         $addDelivery = Permission::create(['name'=>'addDelivery']);

         $saler->givePermissionTo('addStockWithdrawal');
         $purchaser->givePermissionTo('addSupplierOrder');
         $stockEmployee->givePermissionTo('addStockWithdrawal','addStockEntry');
         $stockManager->givePermissionTo('addStockWithdrawal','addStockEntry','addDelivery');


    }
}
