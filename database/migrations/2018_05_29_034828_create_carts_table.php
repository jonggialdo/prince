<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user');
            $table->integer('id_product');
            $table->integer('qnt');
            $table->integer('subtotal');
            $table->integer('transaction_id')->default(0);
            $table->boolean('checkout_status')->default(false);
            $table->integer('id_seller')->default(0);
            $table->string('date_insert')->default('1');
            $table->integer('transaction_status')->default(0);
>>>>>>> 658f06835cc89f5e9da55d6ae859481e53418a72
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
        Schema::dropIfExists('carts');
    }
}
