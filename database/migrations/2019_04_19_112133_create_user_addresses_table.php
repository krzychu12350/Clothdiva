<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_addresses', function (Blueprint $table) {
            $table->increments('id_user_address');
            $table->string('name_of_city', 100);
            $table->string('post_code', 6);
            $table->string('name_of_street', 45);
           // $table->string('voideship', 45);
            $table->string('county', 45);
            $table->string('apartment_number', 10);
            $table->string('house_number', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_addresses');
    }
}
