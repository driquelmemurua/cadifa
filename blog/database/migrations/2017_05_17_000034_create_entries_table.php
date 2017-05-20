<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('blogger_id');
            $table->string('title');
            $table->unsignedInteger('visits')->default(0);
            $table->timestamps();
        });

        Schema::table('entries', function (Blueprint $table) {
            $table->foreign('blogger_id')->references('id')->on('bloggers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entries');
    }
}
