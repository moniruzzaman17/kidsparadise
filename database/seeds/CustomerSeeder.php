<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Customer;
use App\CustomerAddress;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// create object of admin user model
    	$admin 			= new Customer;
    	$adminAddress 	= new CustomerAddress;

    	$admin->name = 'Md. Moniruzzaman';
    	$admin->phone = '01761189963';
    	$admin->password_hash = Hash::make('clicxo2019');
    	$admin->save();

    	$admin->name = 'Md. Moniruzzaman';
    	$admin->phone = '01761189963';
    	$admin->password_hash = Hash::make('clicxo2019');
    	$admin->save();

    	$adminAddress->parent_id = $admin->entity_id;
    	$adminAddress->name = $admin->name;
    	$adminAddress->phone = $admin->phone;
    	$adminAddress->save();
    }
}
