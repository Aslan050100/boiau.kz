<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('mini_description');
            $table->bigInteger('category_id')->unsigned();
            $table->text('description');
            $table->string('image')->default('img/logo.png');
            $table->bigInteger('price')->nullable();
            $table->string('slug');
            # starts Product info
            $table->string('manufacturer')->nullable();
            $table->string('power')->nullable();
            $table->string('temperature')->nullable();
            $table->string('protection')->nullable();
            $table->string('warranty')->nullable();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories');
        });
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
