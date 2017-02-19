<?php

use Illuminate\Database\Seeder;

class PacientSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Pacient::create([
        	'person_pacient' => 999,
        	'sus' => str_random(10),
        	'height' => 1.70,
        	'weight' => 70.00,
        	'skinColor' => str_random(10),
        	'locomotionProblem' => str_random(10),
        	'bedridden' => false,
        	'osteoporosis' => false,
        	'depression' => false,
        	'insanity' => false,
        	'needCare' => false,
        	'armPerimeter' => str_random(10),
        	'dm' => str_random(10),
        	'has' => str_random(10),
        	'bookSenior' => false,
        	'oralHealthRisk' => false
        	]);
    }
}
