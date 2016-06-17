<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();


        	DB::table('departments')->insert([
                    'name' => 'Spoedeisende Hulp'
        		]);
            DB::table('departments')->insert([
                    'name' => 'Polikliniek'
                ]);
            DB::table('departments')->insert([
                    'name' => 'Cardiologie'
                ]);
            DB::table('departments')->insert([
                    'name' => 'Nierziekten'
                ]);
            DB::table('departments')->insert([
                    'name' => 'Kindergeneeskunde'
                ]);
            DB::table('departments')->insert([
                    'name' => 'Intensive Care'
                ]);
            DB::table('departments')->insert([
                    'name' => 'Hematologie'
                ]);
            DB::table('departments')->insert([
                    'name' => 'Longgeneeskunde'
                ]);
            DB::table('departments')->insert([
                    'name' => 'MDL'
                ]);
            DB::table('departments')->insert([
                    'name' => 'Neurologie'
                ]);
            DB::table('departments')->insert([
                    'name' => 'Oncologie'
                ]);
            DB::table('departments')->insert([
                    'name' => 'Orthopodie'
                ]);
            DB::table('departments')->insert([
                    'name' => 'Psychiatrie'
                ]);
            DB::table('departments')->insert([
                    'name' => 'Verloskundig'
                ]);
            DB::table('departments')->insert([
                    'name' => 'Balie'
                ]);
            DB::table('departments')->insert([
                    'name' => 'Bewaking'
                ]);
            DB::table('departments')->insert([
                    'name' => 'ICT'
                ]);
        }
}
