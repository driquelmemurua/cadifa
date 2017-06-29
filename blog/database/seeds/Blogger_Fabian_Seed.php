<?php

use Illuminate\Database\Seeder;

class Blogger_Fabian_Seed extends Seeder
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
	    
	    $rand_created_at = $min_date; /*Blogger "creado" en la misma fecha de creacion del sistema*/
    	$rand_updated_at = rand($rand_created_at, $max_date);

	    $created_at = date("Y-m-d H:i:s", $rand_created_at);
	    $updated_at = date("Y-m-d H:i:s", $rand_updated_at);

	    /*DATOS DEL LOGIN DE FACEBOOK*/

	    $id_facebook = '10212223048787308'; /*ID QUE FACEBOOK ENTREGA*/
	    $name_facebook = 'Fabián Miranda Muñoz'; /*name QUE FACEBOOK ENTREGA*/
	    $avatar_route_facebook = 'https://graph.facebook.com/v2.9/10212223048787308/picture?type=normal'; /*avatar QUE FACEBOOK ENTREGA*/
	    $remember_token_facebook = 'zKfL3QEOs5mp0dHLX9RazKjkTRLa5vW5TvufuojMPUG1BHIrk75pnseRs2IE';

	    DB::table('users')->insert([ /*Primero debe existir un users, luego se le asigna un bloggers*/
        'id' => $id_facebook,
        'name' => $name_facebook,
        'avatar_route' => $avatar_route_facebook,
        'remember_token' => $remember_token_facebook,*/ /*TOKEN para uso con FACEBOOK*/
        'created_at' => $created_at,
        'updated_at' => $updated_at /*Debe terminar sin coma*/
        ]);

		$bio1 = 'Blogger del sistema '
		$bio2 = $name_facebook;

	    DB::table('bloggers')->insert([
        'id' => $id_facebook, /*Mismo id del primer users que tiene nombre "SOY BLOGGER"*/
        'bio' => $bio1 . $bio2,
        'created_at' => $created_at,
        'updated_at' => $updated_at /*Debe terminar sin coma*/
        ]);        
    }
}

