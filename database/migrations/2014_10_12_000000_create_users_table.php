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
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('artists', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('name');
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

        Schema::create('events', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('name');
            $table->dateTime('startdate');
            $table->dateTime('enddate');
            $table->longText('description');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('venues', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('name');
            $table->string('address');
            $table->string('city');
            $table->string('email');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
        Schema::dropIfExists('artists');
        Schema::dropIfExists('performs');
        Schema::dropIfExists('events');
        Schema::dropIfExists('venues');
    }
}
