<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
//            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('first_name', 60);
            $table->string('last_name', 60);
            $table->string('avatar');
            $table->tinyInteger('gender')->nullable();
            $table->string('phone', 20)->nullable();
            $table->integer('country_id')->unsigned();
            $table->integer('province_id')->unsigned();
            $table->integer('ward_id')->unsigned();
            $table->timestamps();

            $table->primary('user_id');
        });

        Schema::table('user_profiles', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_profiles');
    }
}
