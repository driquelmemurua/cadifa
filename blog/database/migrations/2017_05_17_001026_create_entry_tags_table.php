<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntryTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entry_tags', function (Blueprint $table) {
            $table->unsignedInteger('entry_id');
            $table->unsignedInteger('tag_id');
            $table->timestamps();
        });

        Schema::table('entry_tags', function (Blueprint $table) {
            $table->foreign('entry_id')->references('id')->on('entries');
            $table->foreign('tag_id')->references('id')->on('tags');
            $table->primary(array('entry_id', 'tag_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entry_tags');
    }
}
