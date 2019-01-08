<?php

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
            $table->string('quantity');
            $table->string('deliveryStatus');
            $table->string('vehicle');
            $table->integer('cid')->unsigned();
            $table->foreign('cid')->references('id')->on('customers');
            $table->integer('pid')->unsigned();
            $table->foreign('pid')->references('id')->on('products');
            $table->integer('uid')->unsigned();
            $table->foreign('uid')->references('id')->on('users');
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
        Schema::drop('orders');
    }
}
