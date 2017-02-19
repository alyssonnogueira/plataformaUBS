<?php

use Illuminate\Database\Seeder;

class PersonSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Person::create([
        	'id' => 999,
            'name' => 'paciente 00',
        	'cpf' => '00000000000',
        	'birth' => '2017-02-13 18:30:01',
        	'rg' => '000000000',
        	'phone' => '0000000000',
        	'email' => 'paciente@gmail.com',
        	'civil_status' => 'indeciso',
        	'sync' => FALSE,
        	'address_id' => 1,
        	'ubs_id' => 1
        	]);
    }
}