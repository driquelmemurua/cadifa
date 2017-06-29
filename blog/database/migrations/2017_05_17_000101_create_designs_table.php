<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designs', function (Blueprint $table) {
            $table->unsignedInteger('entry_id');
            $table->text('description')->nullable();
            $table->timestamps();
        });

        Schema::table('designs', function (Blueprint $table) {
            $table->foreign('entry_id')->references('id')->on('entries');
            $table->primary('entry_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('designs');
    }
}
