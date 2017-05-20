<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBloggerSocialNetworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogger_social_networks', function (Blueprint $table) {
            $table->string('blogger_id');
            $table->unsignedInteger('social_network_id');
            $table->string('username')->nullable();
            $table->timestamps();
        });

        Schema::table('blogger_social_networks', function (Blueprint $table) {
            $table->foreign('blogger_id')->references('id')->on('bloggers');
            $table->foreign('social_network_id')->references('id')->on('social_networks');
            $table->primary(array('blogger_id', 'social_network_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogger_social_networks');
    }
}
