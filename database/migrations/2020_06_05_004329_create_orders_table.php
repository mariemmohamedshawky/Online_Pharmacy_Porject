<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('order_id');
            $table->timestamps();
           $table->string('user_name');
            $table->string('email');
            $table->string('product_name');
            $table->Integer('product_price');
            $table->Integer('product_quantity');
            //$table->Integer('total');
             $table->Integer('phone');
              //$table->string('country');
                $table->string('address');
                $table->string('payWay');

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
