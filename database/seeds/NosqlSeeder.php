<?php
ini_set('memory_limit','20000M');
use Illuminate\Database\Seeder;

class NosqlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(PatientsTableSeeder::class);
         $this->call(MedicineTableSeeder::class);
         $this->call(OperationsTableSeeder::class);
    }
}
