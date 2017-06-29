<?php

use Illuminate\Database\Seeder;

class Entries_Designs_Stories_EntryTags_Seed_Comments_Seed extends Seeder
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

    	$blogger_id = 0; /*el id del blogger, en este sistema de prueba, es 0*/
		$cantidad_max_users = 100; /*cantidad maxima de users existentes en el sistema*/
		$cantidad_max_comments = 200; /*cantidad maxima de comments de prueba que existiran en cada entries en el sistema*/
		$cantidad_max_comments_per_user = 10; /*cantidad maxima de comments por un solo user en una sola entries*/
		$cantidad_max_likes = 100; /*cantidad maxima de likes de entries de prueba que existiran en el sistema*/
		$cantidad_max_visitas = 1000; /*cantidad maxima de visitas a una entries*/
		$cantidad_max_entry_tags = 10; /*cantidad maxima de entry_tags por cada entries*/
		$cantidad_max_design_images = 5; /*cantidad maxima de design_images*/

		/*images - Creacion de muchas*/
		
		$cantidad_images = 300;

		for($image = 0; $image < $cantidad_images; $image++){
		    $rand_images_created_at = rand($min_date, $max_date); /*la fecha de subida de cada imagen da igual para efectos de esta prueba */ 
			$rand_images_updated_at = rand($rand_images_created_at, $max_date); /*modificacion entre la creacion del sistema y la fecha de entrega*/
		    $images_created_at = date("Y-m-d H:i:s", $rand_images_created_at);
	   		$images_updated_at = date("Y-m-d H:i:s", $rand_images_updated_at);

   		    DB::table('images')->insert([
	   		'id' => $image,
	   		'image_route' => 'https://scontent.fscl7-1.fna.fbcdn.net/v/t1.0-9/1001042_10200855104555807_509855741_n.jpg?oh=58c1ecf53f3f2d42c35f004c6981e9c1&oe=59DEA38A',
		    'created_at' => $images_created_at,
	       	'updated_at' => $images_updated_at /*Debe terminar sin coma*/
	        ]);
  		}

		/*tags - Creacion de muchas*/
		
		$cantidad_tags = 500;

		for($tags = 0; $tags < $cantidad_images; $tags++){
		    $rand_tags_created_at = rand($min_date, $max_date); /*la fecha de subida de cada imagen da igual para efectos de esta prueba */ 
			$rand_tags_updated_at = rand($rand_tags_created_at, $max_date); /*modificacion entre la creacion del sistema y la fecha de entrega*/
		    $tags_created_at = date("Y-m-d H:i:s", $rand_images_created_at);
	   		$tags_updated_at = date("Y-m-d H:i:s", $rand_images_updated_at);

   		    DB::table('tags')->insert([
	   		'id' => $image,
	   		'name' => $faker->name,
		    'created_at' => $tags_created_at,
	       	'updated_at' => $tags_updated_at /*Debe terminar sin coma*/
	        ]);
  		}

		/*entries - Creacion de muchas*/

		$image_id = 0

		$cantidad_entries = 100; /*cantidad de entries de prueba que existiran en el sistema*/
    	$rand_entries_created_at = $min_date; /*primer entries se crea el mismo dia del inicio del sistema */ 
   		$rand_entries_updated_at = rand($rand_created_at, $max_date); /*modificacion entre la creacion del sistema y la fecha de entrega*/

	    for($i = 0; $i < $cantidad_entries; $i++){
		    $created_at = date("Y-m-d H:i:s", $rand_entries_created_at);
		    $updated_at = date("Y-m-d H:i:s", $rand_entries_updated_at);
		    
		    $likes = rand(0, $cantidad_max_likes);
		    $visits = rand($cantidad_max_likes, $cantidad_max_visitas);
		    
		    DB::table('entries')->insert([
	       	'id' => $i,
	       	'blogger_id' => $blogger_id,
	        'title' => $faker->realtext($maxNbChars = 20, $indexSize = 1), /*Faker crea un titulo real de maximo 20 caracteres*/
			'visits' => $visits,
	        'created_at' => $created_at,
	        'updated_at' => $updated_at /*Debe terminar sin coma*/
	        ]);

			/*entry_tags - Creacion de varios, asociados a entries en creacion*/

	        $cantidad_entry_tags = rand(1,$cantidad_max_entry_tags);

		    for ($j = 0; $j < $cantidad_entry_tags; $j++){
   				$tag_id = rand(0, $cantidad_images);
		    	DB::table('entry_tags')->insert([
	        	'entry_id' => $i, /*id de la entries en creacion*/
	        	'tag_id' => $tag_id,
	        	'created_at' => $created_at, /*Los entry_tags tienen mismas fechas que su entries asignado*/
	        	'updated_at' => $updated_at /*Debe terminar sin coma*/
	        	]);
		    }
		    
			/*comments - Creacion de varios, asociados a entries en creacion*/

		    $cantidad_comments = rand(1, $cantidad_max_comments);

		    for($k = 0; $k < $cantidad_comments; $k++){ 
		    	for($id_users = 1; $id_users < $100; $id_users++){ /*comentan los distintos usuarios que entren*/
		    		
		    		$cantidad_comments_per_users = rand(0, $cantidad_max_comments_per_user);
		    		
		    		for($l = 0; $l = $cantidad_comments_per_users; $l++){ /*cantidad de comments que hace cada users*/
				    	$rand_comments_created_at = rand($rand_entries_created_at, $max_date); /*comments tiene misma o futura fecha respecto a su entries*/ 
	   					$rand_comments_updated_at = rand($rand_comments_created_at, $max_date);

					    $comments_created_at = date("Y-m-d H:i:s", $rand_comments_created_at);
					    $comments_updated_at = date("Y-m-d H:i:s", $rand_comments_updated_at);

				    	DB::table('comments')->insert([
		        		'id' => $k,
		        		'entry_id' => $i, /*id de la entries en creacion*/
		        		'user_id' => $id_users,
		        		'created_at' => $comments_created_at, /*Los comments tienen mismas o futuras fechas que su entries asignado*/
		        		'updated_at' => $comments_updated_at /*Debe terminar sin coma*/
		        		]);
	 
				    	$k = $k + 1; /*se pasa al comments siguiente*/
			    	}

			    	$id_users = $id_users + rand(0,10); /*para que varie que solo algunos users comenten*/
		    		
		    	}
			}

			/*Desde aqui se define si le entries es una stories o un designs*/

			$tipo_entries = rand(0,1);

			if($tipo_entries == 0): /*Entries seria una stories*/
			    $aux_indexSize = rand(1,30);
			    DB::table('stories')->insert([
		       	'entry_id' => $i,
		       	'content' => $faker->realtext($maxNbChars = 1000, $indexSize = $aux_indexSize),
		        'created_at' => $created_at, /*Las stories tienen mismas fechas que su entries asignado*/
		        'updated_at' => $updated_at /*Debe terminar sin coma*/
		        ]);
			elseif($tipo_entries == 1): /*Entries seria un designs*/
   			
    			/*crear designs correspondiente a esta entries*/
    			
    			$aux_indexSize = rand(1,30);
    			DB::table('designs')->insert([
		       	'entry_id' => $i, /*mismo id de la entries en creacion*/
		       	'description' => $faker->realtext($maxNbChars = 500, $indexSize = $aux_indexSize),
		        'created_at' => $created_at, /*Los designs tienen mismas fechas que su entries asignado*/
		        'updated_at' => $updated_at /*Debe terminar sin coma*/
		        ]);

				/*design_images - Creacion de varias, asociadas */

				$cantidad_design_images = rand(1, $cantidad_max_design_images);

    			for($m = 0; $m < $cantidad_design_images; $m++){
    				$image_id = rand(0, $cantidad_images);
    				DB::table('design_images')->insert([
		       		'design_id' => $i, /*mismo id de la entries en creacion y, a su vez, del designs en creacion*/
		       		'image_id' => $image_id,
		        	'created_at' => $created_at, /*Los design_images tienen mismas fechas que su entries asignado*/
		        	'updated_at' => $updated_at /*Debe terminar sin coma*/
		        	]);
		        }

			endif;

		    $rand_entries_created_at = strtotime($rand_entries_created_at . ' +1 day'));; /*se le suma un dia a la fecha de creacion de la entries anterior*/
   			$rand_entries_updated_at = rand($rand_entries_created_at, $max_date); /*mismo principio*/

	    }

    }
}
