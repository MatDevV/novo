<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExerciseMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercise_media', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('exercise_id');
            $table->integer('media_id');
            $table->timestamps();
            $table->softDeletes('softDeletes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exercise_media');
    }
}
