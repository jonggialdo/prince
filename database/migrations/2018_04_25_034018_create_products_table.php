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
          $table->integer('id_user')->references('id')->on('users');
          $table->string('product_name')->default('0');
          $table->string('description')->default('0');
          $table->integer('price')->default('0');
          $table->string('photo_product');
          $table->string('stock')->default('0');
          $table->integer('purchase')->default('0');
          $table->integer('viewer')->default('0');
          $table->string('category')->default();
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
