<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavoriteProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorite_products', function (Blueprint $table) {
            $table->increments('id_favorite_product');
             
            $table->foreignId('id_ushop');
            $table->foreign('id_ushop')
            ->references('id_ushop')->on('ushop')
            ->onDelete('cascade');
             
            $table->foreignId('id_product');
            $table->foreign('id_product')
            ->references('id_product')->on('products')
            ->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favorite_products');
    }
}
