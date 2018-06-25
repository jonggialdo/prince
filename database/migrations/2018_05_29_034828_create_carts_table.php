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
            $table->integer('transaction_id');
<<<<<<< HEAD
            $table->string('date_insert')->default('1');
=======
            $table->boolean('checkout_status')->default(false);
>>>>>>> 2e35d2db26f0b982d73d6a42b195a33470b245ac
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
