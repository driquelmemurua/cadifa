<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->unsignedInteger('entry_id');
            $table->string('user_id');
            $table->timestamps();
        });

        Schema::table('likes', function (Blueprint $table) {
            $table->foreign('entry_id')->references('id')->on('entries');
            $table->foreign('user_id')->references('id')->on('users');
            $table->primary(array('entry_id', 'user_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('likes');
    }
}
