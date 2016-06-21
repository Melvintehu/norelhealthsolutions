<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\EpdMedicine;
use App\EpdPatient;


class MedicineTableSeeder extends Seeder
{


	protected $medicine = ['Acetaminophen',
							'Adderall',
							'Alprazolam',
							'Amitriptyline',
							'Amlodipine',
							'Amoxicillin',
							'Ativan',
							'Atorvastatin',
							'Azithromycin',
							'Ciprofloxacin',
							'Citalopram',
							'Clindamycin',
							'Clonazepam',
							'Codeine',
							'Cyclobenzaprine',
							'Cymbalta',
							'Doxycycline',
							'Gabapentin',
							'Hydrochlorothiazide',
							'Ibuprofen',
							'Lexapro',
							'Lisinopril',
							'Loratadine',
							'Lorazepam',
							'Losartan',
							'Lyrica',
							'Meloxicam',
							'Metformin',
							'Metoprolol',
							'Naproxen',
							'Omeprazole',
							'Oxycodone',
							'Pantoprazole',
							'Prednisone',
							'Tramadol',
							'Trazodone',
							'Viagra',
							'Wellbutrin',
							'Xanax',
							'Zoloft'];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
    	$faker = Faker::create();
    	$patients = EpdPatient::all();
    	$medicines = EpdMedicine::all();

    	foreach ($medicines as $medicine) {
    		$medicine->delete();
    	}


    	foreach($patients as $patient){


    		for($i = 0; $i < rand(0,5); $i++){
    			$startDate = $faker->dateTimeBetween($faker->dateTimeThisCentury);
    		
    			$starts_at = Carbon::createFromTimestamp($faker->dateTime()->getTimeStamp()) ;

				$ends_at= Carbon::createFromFormat('Y-m-d H:i:s', $starts_at)->addMonths( $faker->numberBetween( 4, 80 ) );

		
				if($ends_at > Carbon::now()){
					$ends_at = "";
				}

		
    			$medicine = new EpdMedicine;
    			$medicine->date_start = $starts_at;
    			$medicine->date_end = $ends_at;
    			$medicine->name = $this->medicine[rand(0, 39)];
    			$medicine->description = $faker->sentence(20);
    			$medicine->dosage = $faker->numberBetween(1, 400);
    			$medicine->patient_document_number = $patient->document_number;
    			$medicine->save();


    		}

    	}

    }
}
