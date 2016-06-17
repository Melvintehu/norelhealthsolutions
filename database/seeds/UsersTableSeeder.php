<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
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
            $email = $faker->unique->userName;
        	DB::table('users')->insert([
        			

        			'email' => $email . '@umcg.nl',
        			'password' => $faker->password,
        			// 'emailadres' => $username . "@umcg.nl",
        			// 'username' => $username,
        			// 'password' => $faker->password,
        		]);
        }

        // insert admin user
        DB::table('users')->insert([
                'email' => 'admin@umcg.nl',
                'password' => bcrypt('Hallojs100'),
            ]);
    }
}
