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
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('alias');
            $table->double('price')->nullable();
            $table->double('promotion_price')->nullable();
            $table->string('promotion_item')->nullable();
            $table->text('summary')->nullable();
            $table->longText('detail')->nullable();
            $table->string('tags')->nullable();
            $table->tinyInteger('today');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('cate_id')->unsigned();
            $table->foreign('cate_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
