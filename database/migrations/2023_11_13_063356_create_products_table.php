<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('sku', 10)->unique();
            $table->unsignedBigInteger('category_id');
            $table->string('name', 50);
            $table->unsignedInteger('stock'); // Use unsignedInteger instead of integer
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
