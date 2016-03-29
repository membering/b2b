<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_descriptions', function (Blueprint $table) {
//            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->string('language_code', 2);
            $table->string('name');
            $table->string('meta');
            $table->string('description')->nullable();
            $table->timestamps();
        });

        Schema::table('category_descriptions', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('category_descriptions');
    }
}
