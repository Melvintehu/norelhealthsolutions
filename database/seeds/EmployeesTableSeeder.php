<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 1000) as $index){
        	DB::table('employees')->insert([
        			'department_id' => rand(1,2),
        			'first_name' => $faker->firstName,
        			'last_name' => $faker->lastName,
        			'emailadres' => $faker->companyEmail,
        			'username' => $faker->userName,
        			'password' => $faker->password,
        		]);
        }
    }
}
