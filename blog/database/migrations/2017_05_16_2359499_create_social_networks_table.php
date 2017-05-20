<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialNetworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_networks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('icon_route');
            $table->string('url');
            $table->timestamps();
        });

        Schema::table('social_networks', function (Blueprint $table) {
            $table->unique('name');
            $table->unique('icon_route');
            $table->unique('url');
        });        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('social_networks');
    }
}
