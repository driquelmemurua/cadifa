<?php

use Illuminate\Database\Seeder;

class administratorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	public function run(){
	    $faker = Faker\Factory::create();

	    for( $i = 0; $i < 2; $i++ ) {
	        DB::table('administrators')->insert([
            'id' => $i,
            'name' => $faker->name,
            'email' => $faker->email,
            'password' => bcrypt('secret'),
            'created_at'
            'updated_at'

            ]);
        }
    }
}
