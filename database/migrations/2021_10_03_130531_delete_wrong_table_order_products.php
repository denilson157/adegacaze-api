<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteWrongTableOrderProducts extends Migration
{
    public function up()
    {
        Schema::dropIfExists('order_product');
        Schema::dropIfExists('order_products');

        Schema::create('order_product', function (Blueprint $table) {
            $table->integer('order_id');
            $table->integer('product_id');
            $table->integer('quantity');
            $table->decimal('price', 9, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::create('order_product', function (Blueprint $table) {
            $table->integer('order_id');
            $table->integer('product_id');
            $table->integer('quantity');
            $table->decimal('price', 9, 2);
            $table->timestamps();
        });
    }
}
