<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(AddressSeed::class);
        $this->call(UbsSeed::class);
		$this->call(PersonSeed::class);
        $this->call(DoctorSeed::class);
        $this->call(LoginSeed::class);
        $this->call(PacientSeed::class);
        $this->call(AuditionSeed::class);
        $this->call(ConsultationSeed::class);
        
        
        Model::reguard();
        // $this->call(UsersTableSeeder::class);
    }
}
