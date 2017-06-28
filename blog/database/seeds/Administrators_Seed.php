<?php

use Illuminate\Database\Seeder;

class Administrators_Seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	public function run(){
	    $faker = Faker\Factory::create();
	    $min_date = strtotime("10 March 2017");
    	$max_date = strtotime("29 June 2017");

	    for( $i = 0; $i < 2; $i++ ) {
	    	$rand_created_at = rand($min_date, $max_date);
    		$rand_updated_at = rand($rand_created_at, $max_date);

	    	$created_at = date("Y-m-d H:i:s", $rand_created_at);
	    	$updated_at = date("Y-m-d H:i:s", $rand_updated_at);

	        DB::table('administrators')->insert([
            'id' => $i,
            'name' => 'SOY ADMIN con pass "admin"',
            'email' => $faker->email,
            'password' => bcrypt('admin'),
            'created_at' => $created_at,
            'updated_at' => $updated_at /*Debe terminar sin coma*/
            ]);
        }
    }
}