<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('id_product')->references('id')->on('products');
          $table->integer('id_user')->references('id')->on('customers');
          $table->integer('quantity');
          $table->integer('total');
          $table->integer('fee_delivery');
          $table->string('status_payment');
          $table->string('status_delivery');
          $table->date('date_payment');
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
        Schema::dropIfExists('orders');
    }
}
