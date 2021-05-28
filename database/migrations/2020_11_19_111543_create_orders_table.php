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
            $table->date('date_of_placing_order');
            //$table->boolean('if_the_order_accepted');	
            //$table->date('date_of_order_addmision');		
            //$table->date('shipping_date');
            //$table->boolean('if_the_order_completed');
            //$table->date('date_of_order_fulfillment');
 
            $table->foreignId('id_invoice');
            $table->foreign('id_invoice')
            ->references('id_invoice')->on('invoices')
            ->onDelete('cascade');
            
            $table->foreignId('id_user');
            $table->foreign('id_user')
            ->references('id_user')->on('users')
            ->onDelete('cascade');
            
            $table->foreignId('id_payment');
            $table->foreign('id_payment')
            ->references('id_payment')->on('payments')
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
