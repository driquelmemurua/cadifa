<?php

use Illuminate\Database\Seeder;

class Users_and_Bloggers_Seed extends Seeder
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

		$i = 0; /*Usuario 0 es el Blogger*/
	    
	    $rand_created_at = $min_date; /*Blogger "creado" en la misma fecha de creacion del sistema*/
    	$rand_updated_at = rand($rand_created_at, $max_date);

	    $created_at = date("Y-m-d H:i:s", $rand_created_at);
	    $updated_at = date("Y-m-d H:i:s", $rand_updated_at);

	    DB::table('users')->insert([ /*Primero debe existir un users, luego se le asigna un bloggers*/
        'id' => $i,
        'name' => 'SOY BLOGGER',
        'avatar_route' => 'https://www.victoria147.com/wp-content/uploads/2014/10/user-avatar-placeholder.png',
        /*remember_token => ,*/ /*No utilizado mientras tanto, es el uso del TOKEN para uso con FACEBOOK*/
        'created_at' => $created_at,
        'updated_at' => $updated_at /*Debe terminar sin coma*/
        ]);

	    DB::table('bloggers')->insert([
        'id' => $i, /*Mismo id del primer users que tiene nombre "SOY BLOGGER"*/
        'bio' => 'Blogger del sistema',
        'created_at' => $created_at,
        'updated_at' => $updated_at /*Debe terminar sin coma*/
        ]);        

	    /*Creacion de 99 usuarios NO bloggers en el sistema*/
	    for($i = 1; $i < 100; $i++) { 
	    	$rand_created_at = rand($min_date, $max_date); 
    		$rand_updated_at = rand($rand_created_at, $max_date);

	    	$created_at = date("Y-m-d H:i:s", $rand_created_at);
	    	$updated_at = date("Y-m-d H:i:s", $rand_updated_at);

	    	DB::table('users')->insert([
        	'id' => $i,
        	'name' => $faker->name,
        	'avatar_route' => 'http://colegiosantasofialapintana.cl/wp-content/uploads/2016/08/no_image_user.png',
        	/*remember_token => ,*/ /*No utilizado mientras tanto, es el uso del TOKEN para uso con FACEBOOK*/
        	'created_at' => $created_at,
        	'updated_at' => $updated_at /*Debe terminar sin coma*/
        	]);
        }
    }
}
