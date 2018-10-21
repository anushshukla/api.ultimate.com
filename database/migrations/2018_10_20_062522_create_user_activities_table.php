<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserActivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_activities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('database', 32);
            $table->string('table', 32);
            $table->string('action', 32);
            $table->string('field', 32);
            $table->string('activity', 32);
            $table->string('initiator', 32)->nullable();
            $table->foreign('user_id')
              ->references('id')->on('users')
              ->onDelete('cascade')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('user_activities');
    }
}
