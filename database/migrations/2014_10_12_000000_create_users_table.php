<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('name');
            $table->string('email');
            $table->string('avatar')->default('default.jpg');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('artists', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('name');
            $table->string('image')->default('default.jpg');
            $table->longText('description');
            $table->string('country');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('performs', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->longText('description');
            $table->dateTime('startdate');
            $table->dateTime('enddate');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('venues', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('name');
            $table->string('image')->default('default.jpg');
            $table->string('address');
            $table->string('city');
            $table->string('email');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('events', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('name');
            // $table->integer('venue_id')->unsigned()->default(1);
            $table->string('image')->default('default.jpg');
            $table->dateTime('startdate');
            $table->dateTime('enddate');
            $table->longText('description');
          //  $table->string('venuename');
            $table->string('venue_name')->references('name')->on('venues');

            $table->rememberToken();
            $table->timestamps();

            // $table->foreign('venue_id')
            // ->unsigned()
            // ->references('id')
            // ->on('venues');
        });




    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('artists');
        Schema::dropIfExists('performs');
        Schema::dropIfExists('events');
        Schema::dropIfExists('venues');
    }
}
