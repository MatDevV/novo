<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExerciseHomeworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercise_homework', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes('softDeletes');
            $table->integer('exercise_id');
            $table->integer('homework_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exercise_homeworks');
    }
}
