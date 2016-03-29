<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_descriptions', function (Blueprint $table) {
//            $table->increments('id');
            $table->integer('product_id')->unsigned();
            $table->string('language_code', 2);
            $table->string('name');
            $table->string('description_short');
            $table->string('description_long');
            $table->timestamps();
        });

        Schema::table('product_descriptions', function (Blueprint $table) {
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product_descriptions');
    }
}
