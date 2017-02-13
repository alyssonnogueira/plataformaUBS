<?php

use Illuminate\Database\Seeder;

class LoginSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Login::create([
        	'person_doctor_login' => 1,
        	'email' => 'doctor@ubs.com',
        	'password' => 'mamao',
        	'sync' => true
        	]);
    }
}
