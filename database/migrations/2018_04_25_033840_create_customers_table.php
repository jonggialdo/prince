<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
          $table->increments('id');
          $table->string('username')->unique();
          $table->string('email')->unique();
          $table->string('password');
          $table->string('name')->unique();
          $table->string('gender');
          $table->integer('no_telp');
          $table->string('address');
          $table->string('photo_user');
          $table->string('job');
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
        Schema::dropIfExists('customers');
    }
}
