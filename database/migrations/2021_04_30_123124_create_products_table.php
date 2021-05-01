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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id_product');
            $table->string('name', 100);
            $table->integer('quantity');
            $table->double('prize',6,2);
            $table->string('color', 100);
            $table->text('description');
            $table->text('composition_and_conservation');
            
            /*
            $table->foreignId('id_user');
            $table->foreign('id_user')
            ->references('id_user')->on('users')
            ->onDelete('cascade'); 
            tylko pytanie czy klucz "id_user" bierze z tabelki favourite_products czy z tabelki users?? NIE WIEM
            */
            
            $table->foreignId('id_sub_category');
            $table->foreign('id_sub_category')
            ->references('id_sub_category')->on('sub_categories')
            ->onDelete('cascade');

            $table->foreignId('id_promotion');
            $table->foreign('id_promotion')
            ->references('id_promotion')->on('promotions')
            ->onDelete('cascade');

            $table->foreignId('id_order');
            $table->foreign('id_order')
            ->references('id_order')->on('orders')
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
        Schema::dropIfExists('products');
    }
}
