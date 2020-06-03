<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           {
              Schema::create('products', function (Blueprint $table) {
         $table->bigIncrements('po_id');
           $table->string('po_name');
            $table->Integer('po_price');
            $table->string('po_description');
            $table->date('po_date');
            $table->string('po_img');
            $table->bigInteger('po_user')->unsigned();
           $table->foreign('po_user')->references('id')->on('users')->onDelete('cascade') ;
        });
    
    }
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