<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserLocationAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_location_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('zip', 32);
            $table->string('street', 32);
            $table->string('landmark', 32);
            $table->string('district', 32);
            $table->string('city', 32);
            $table->string('state', 32);
            $table->string('country', 32);
            $table->string('address_label', 32);
            $table->foreign('user_id')
              ->references('id')->on('users')
              ->onDelete('cascade');
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
        Schema::dropIfExists('user_location_addresses');
    }
}
