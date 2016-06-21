<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\EpdPatient;

class PatientsTableSeeder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	


        $patients = EpdPatient::all();
        foreach($patients as $patient){

            $patient->delete();
        }

    	$faker = Faker::create();
    	for($i = 0; $i < 10000; $i++){

	       	$patient = new EpdPatient;

	       	$patient->document_number = $faker->unique()->numberBetween(1000000, 26000000);
	       	$patient->first_name = $faker->firstName;
	       	$patient->last_name = $faker->lastName;
	       	$patient->telephone_number = $faker->phoneNumber;
	       	$patient->date_of_birth = $faker->dateTimeThisCentury();
	       	$patient->weight = $faker->numberBetween(40, 130) ;

	       	$patient->save();
    	}

    }
}
