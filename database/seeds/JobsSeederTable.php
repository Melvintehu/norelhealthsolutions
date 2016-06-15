<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class JobsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	DB::table('jobs')->insert([
                    'name' => 'Cardioloog',
                    'tier' => 4
        		]);
        	DB::table('jobs')->insert([
                    'name' => 'Chirurg',
                    'tier' => 4
        		]);
        	DB::table('jobs')->insert([
                    'name' => 'KNO Arts',
                    'tier' => 4
        		]);
        	DB::table('jobs')->insert([
                    'name' => 'MDL Arts',
                    'tier' => 4
        		]);
        	DB::table('jobs')->insert([
                    'name' => 'Neuroloog',
                    'tier' => 4
        		]);
        	DB::table('jobs')->insert([
                    'name' => 'Kinderarts',
                    'tier' => 4
        		]);
        	DB::table('jobs')->insert([
                    'name' => 'Orthopedist',
                    'tier' => 4
        		]);
        	DB::table('jobs')->insert([
                    'name' => 'Oncoloog',
                    'tier' => 4
        		]);
        	DB::table('jobs')->insert([
                    'name' => 'Fysiotherapeut',
                    'tier' => 4
        		]);
        	DB::table('jobs')->insert([
                    'name' => 'Internist',
                    'tier' => 3
        		]);
        	DB::table('jobs')->insert([
                    'name' => 'Co-assistent',
                    'tier' => 2
        		]);
        	DB::table('jobs')->insert([
                    'name' => 'Verpleegkundige',
                    'tier' => 2
        		]);
        	DB::table('jobs')->insert([
                    'name' => 'Administratief medewerker',
                    'tier' => 1
        		]);
        	DB::table('jobs')->insert([
                    'name' => 'Bewaking',
                    'tier' => 1
        		]);
        	DB::table('jobs')->insert([
                    'name' => 'ICT medewerker',
                    'tier' => 1
        		]);
        }
}