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
            $username = $faker->userName;
        	DB::table('employees')->insert([
        			'department_id' => rand(1,17),
                    'user_id' => $index,
        			'first_name' => $faker->firstName,
        			'last_name' => $faker->lastName,
        			// 'emailadres' => $username . "@umcg.nl",
        			// 'username' => $username,
        			// 'password' => $faker->password,
        		]);
        }

            DB::table('employees')->insert([
                'department_id' => 17,
                'user_id' => 1001,
                'first_name' => 'Eric',
                'last_name' => 'Landheer',
                // 'emailadres' => $username . "@umcg.nl",
                // 'username' => $username,
                // 'password' => $faker->password,
             ]);
    }
}
