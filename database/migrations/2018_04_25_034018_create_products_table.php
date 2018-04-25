<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('id_user')->references('id')->on('customers');
          $table->string('product_name');
          $table->string('description');
          $table->integer('price');
          $table->string('variant');
          $table->string('photo_product');
          $table->string('stock')->default('0');
          $table->integer('purchase');
          $table->integer('viewer');
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
        Schema::dropIfExists('products');
    }
}
