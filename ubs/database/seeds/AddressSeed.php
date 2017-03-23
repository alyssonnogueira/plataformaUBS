<?php

use Illuminate\Database\Seeder;

class AddressSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Address::create([
            'id' => 1,
        	'country' => 'Brasil',
        	'state' => 'RS',
        	'city' => 'Pelotas',
        	'neighboorhood' => 'Porto',
        	'zip' => '96010-100',
        	'street' => 'Gomes Carneiro',
        	'number' => 1,
        	'complement' => 421,
        	'sync' => true
        ]);
        App\Address::create([
            'id' => 2,
        	'country' => 'Brasil',
        	'state' => 'RS',
        	'city' => 'Pelotas',
        	'neighboorhood' => 'Porto',
        	'zip' => '96010-100',
        	'street' => 'Gomes Carneiro',
        	'number' => 1,
        	'complement' => 421,
        	'sync' => true
        ]);
    }
}
