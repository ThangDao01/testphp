<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->integer('OrderId')->unsigned();
            $table->foreign('OrderId')->references('IdOrd')->on('orders');
            $table->integer('ProductId')->unsigned();
            $table->foreign('ProductId')->references('IdPrd')->on('products');
            $table->integer('Quantity');
            $table->integer('Amount');

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
        Schema::dropIfExists('order_details');
    }
}
