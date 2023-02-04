<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 5; $i++){
 
    		DB::table('users')->insert([
    			'name' => $faker->name,
    			'email' => $faker->email,
    			'password' => $faker->password()
    		]);
 
    	}
    }
}
