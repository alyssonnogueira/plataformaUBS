<?php

use Illuminate\Database\Seeder;

class UbsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Ubs::create([
        	'address_id' => 1,
        	'name' => 'ubs da familia',
        	'sync' => true
        	]);
        App\Ubs::create([
        	'address_id' => 2,
        	'name' => 'ubs sem familia',
        	'sync' => true
        	]);
    }
}
