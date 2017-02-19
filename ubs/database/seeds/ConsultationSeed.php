<?php

use Illuminate\Database\Seeder;

class ConsultationSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	App\Consultation::create([
            'person_doctor' => 999,
            'person_pacient' => 999,
        	'blood_presure' => str_random(10),
        	'weight' => 80.00, 
        	'observations' => str_random(10),
        	'physical_exam' => str_random(10), 
        	'foot_exam' => str_random(10), 
        	'create_date' => '2017-02-13 18:30:01',
        	'update_date' => '2017-02-13 18:30:01', 
        	'sync' => TRUE
        ]);
    }
}
