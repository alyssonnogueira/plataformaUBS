<?php

use Illuminate\Database\Seeder;

class AuditionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Audition::create([
        	'person_doctor' => 999,
        	'person_pacient' => 999,
	        'nutrition' => str_random(10),
	        'hearing' => str_random(10),
	        'vision' => str_random(10),
	        'humor_depression' => str_random(10),
	        'cognition_memory' => str_random(10),
	        'daily_activies' => str_random(10),
	        'tumble' => str_random(10),
	        'created_date' => '2017-02-13 18:30:01',
	        'updated_date' => '2017-02-13 18:30:01',
	        'sync' => TRUE
        ]);
        App\Audition::create([
        	'person_doctor' => 999,
        	'person_pacient' => 999,
	        'nutrition' => str_random(10),
	        'hearing' => str_random(10),
	        'vision' => str_random(10),
	        'humor_depression' => str_random(10),
	        'cognition_memory' => str_random(10),
	        'daily_activies' => str_random(10),
	        'tumble' => str_random(10),
	        'created_date' => '2017-02-13 18:30:01',
	        'updated_date' => '2017-02-13 18:30:01',
	        'sync' => TRUE
        ]);
    }
}
