<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('code');
            $table->integer('district_id')->unsigned();
            $table->tinyInteger('status')->default(1);
//            $table->timestamps();
        });

        Schema::table('wards', function (Blueprint $table) {
            $table->foreign('district_id')->references('id')->on('districts');
        });

        Schema::table('user_profiles', function (Blueprint $table) {
            $table->foreign('ward_id')->references('id')->on('wards');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('wards');
    }
}
