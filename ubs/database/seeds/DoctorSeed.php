<?php

use Illuminate\Database\Seeder;

class DoctorSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Doctor::create([
        	'person_doctor' => 999,
        	'boss' => true,
            'crm' => "0000000000"
        	]);
    }
}
