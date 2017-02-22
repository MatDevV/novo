<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitutionUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institution_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('institution_id');
            $table->integer('user_id');
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
        Schema::dropIfExists('institution_users');
    }
}
