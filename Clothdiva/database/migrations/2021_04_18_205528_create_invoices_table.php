<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id_invoice');
            $table->float('netto_prize');
            $table->float('VAT_prize');
            $table->decimal('VAT_rate', 2, 0);
            $table->float('brutto_prize');

            /*
            $table->foreign('id_user_address')
            ->references('id_user_address')->on('user_addresses')
            ->onDelete('cascade');
            */

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
