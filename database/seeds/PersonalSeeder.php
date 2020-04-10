<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PersonalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=1; $i < 50; $i++) { 
        $faker = Faker::create();
        \DB::table('personal')->insert(array(
            'personal_id' => $i,
            'name'=> $faker->name,
            'surname'=> $faker->lastname,
            'address'=> $faker->word,
            'city'=> $faker->city,
            'old'=> $faker->numberBetween(18,30),
            'email' => $faker->unique()->safeEmail,
            'phone'=> $faker->phoneNumber,
            'status'=> $faker->numberBetween(0,1),
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
	        ));
	    }
	}
}
