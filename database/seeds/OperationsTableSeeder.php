<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\EpdMedicine;
use App\EpdPatient;
use App\EpdMedicalProcedure;


class OperationsTableSeeder extends Seeder
{

	protected $med_procedures = [
			'Biopsy',
			'Stereotactic surgery',
			'Radiosurgery',
			'Endoscopic surgery',
			'Lithotomy',
			'Image-guided surgery',
			'Facial rejuvenation',
			'Neovaginoplasty',
			'Vaginoplasty',
			'Ablation',
			'Amputation',
			'Cardiopulmonary resuscitation (CPR)',
			'Cryosurgery',
			'General surgery',
			'Hand surgery',
			'Laminectomy',
			'Hemilaminectomy',
			'Laparoscopic surgery',
			'Lithotriptor',
			'Lobotomy',
			'Knee cartilage replacement therapy',
			'Xenotransplantation'
			];	
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$faker = Faker::create();
    	$patients = EpdPatient::all();
    	$procedures = EpdMedicalProcedure::all();

    	foreach($procedures as $procedure){
    		$procedure->delete();
    	}
    	
    	foreach($patients as $patient){
    		

    		for($i = 0; $i < rand(0,5); $i++){
    			$epdMedicalProcedure = new EpdMedicalProcedure;

    			$epdMedicalProcedure->date = $faker->dateTimeBetween($faker->dateTimeThisCentury);
    			$epdMedicalProcedure->name = $this->med_procedures[rand(0, count($this->med_procedures)-1)];
    			$epdMedicalProcedure->description = $faker->sentence(20);
    			$epdMedicalProcedure->document_number = $patient->document_number;

    			$epdMedicalProcedure->save();
    		}

    	}
    }
}
