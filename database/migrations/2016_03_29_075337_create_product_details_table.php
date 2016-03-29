<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
//            $table->increments('id');
            $table->integer('product_id')->unsigned();
            $table->decimal('weight', 15, 8);
            $table->integer('weight_class_id');
            $table->decimal('length', 15, 8);
            $table->decimal('width', 15, 8);
            $table->decimal('height', 15, 8);
            $table->integer('length_class_id');
            $table->integer('color_id')->nullable();
            $table->timestamps();
        });

        Schema::table('product_details', function (Blueprint $table) {
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
        Schema::drop('product_details');
    }
}
