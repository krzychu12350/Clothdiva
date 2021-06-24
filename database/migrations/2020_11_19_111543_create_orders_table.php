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
            $table->increments('id_order');
            $table->string('status', 100);
            $table->string('date_of_placing_order');
            $table->string('payment_method', 20);
            $table->double('order_value',6,2);
 
           /* $table->foreignId('id_invoice');
            $table->foreign('id_invoice')
            ->references('id_invoice')->on('invoices')
            ->onDelete('cascade');*/
            
            $table->foreignId('id_ushop');
            $table->foreign('id_ushop')
            ->references('id_ushop')->on('ushop')
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
        Schema::dropIfExists('orders');
    }
}
