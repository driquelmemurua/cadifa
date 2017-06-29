<?php

use Illuminate\Database\Seeder;

class Images_and_Tags_Seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $faker = Faker\Factory::create();
	    $min_date = strtotime("10 March 2010");
    	$max_date = strtotime("29 June 2017");

		/*images - Creacion de muchas*/
		
		$cantidad_images = 300;

		for($image = 0; $image < $cantidad_images; $image++){
		    $rand_images_created_at = rand($min_date, $max_date); /*la fecha de subida de cada imagen da igual para efectos de esta prueba */ 
			$rand_images_updated_at = rand($rand_images_created_at, $max_date); /*modificacion entre la creacion del sistema y la fecha de entrega*/
		    $images_created_at = date("Y-m-d H:i:s", $rand_images_created_at);
	   		$images_updated_at = date("Y-m-d H:i:s", $rand_images_updated_at);
			$image_url1 = 'http://lorempixel.com/400/200/sports/';
			$image_url2 = $faker->uuid; /*Faker crea un uuid especifico para la url*/


   		    DB::table('images')->insert([
	   		//'id' => $image,
	   		'image_route' => $image_url1 . $image_url2,
		    'created_at' => $images_created_at,
	       	'updated_at' => $images_updated_at /*Debe terminar sin coma*/
	        ]);
  		}

		/*tags - Creacion de muchas*/
		
		$cantidad_tags = 100;

		for($tags = 0; $tags < $cantidad_tags; $tags++){
		    $rand_tags_created_at = rand($min_date, $max_date); /*la fecha de subida de cada imagen da igual para efectos de esta prueba */ 
			$rand_tags_updated_at = rand($rand_tags_created_at, $max_date); /*modificacion entre la creacion del sistema y la fecha de entrega*/
		    $tags_created_at = date("Y-m-d H:i:s", $rand_images_created_at);
	   		$tags_updated_at = date("Y-m-d H:i:s", $rand_images_updated_at);

   		    DB::table('tags')->insert([
	   		//'id' => $tags,
	   		'name' => $faker->name,
		    'created_at' => $tags_created_at,
	       	'updated_at' => $tags_updated_at /*Debe terminar sin coma*/
	        ]);
  		}
    }
}
