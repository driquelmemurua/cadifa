<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesignImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('design_images', function (Blueprint $table) {
            $table->unsignedInteger('design_id');
            $table->unsignedInteger('image_id');
            $table->timestamps();
        });

        Schema::table('design_images', function (Blueprint $table) {
            $table->foreign('design_id')->references('entry_id')->on('designs');
            $table->foreign('image_id')->references('id')->on('images');
            $table->primary(array('design_id', 'image_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('design_images');
    }
}
