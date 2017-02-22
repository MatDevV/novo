<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentworks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('homework_id');
            $table->integer('user_id');
            $table->integer('time_spent');
            $table->datetime('work_date');
            $table->integer('right_percentage');
            $table->integer('counter');
            $table->text('percentage_counter');
            $table->integer('status');
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
        Schema::dropIfExists('studentworks');
    }
}
