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
        	'doctor_login' => 999,
        	'email' => 'doctor@ubs.com',
        	'password' => bcrypt('mamao'),
        	'sync' => true
        	]);
    }
}
