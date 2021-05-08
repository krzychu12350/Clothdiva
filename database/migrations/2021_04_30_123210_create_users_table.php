<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            
            //$table->increments();
            $table->id('id_user');
            $table->string('name', 100);
            $table->string('surname', 100);
            $table->string('mobile', 12);
            $table->string('login', 100);
            $table->string('email', 100);
            $table->string('password', 100);
            //$table->boolean('is_admin')->nullable();
            
            $table->foreignId('id_role');
            $table->foreign('id_role')
            ->references('id_role')->on('roles')
            ->onDelete('cascade');
            /*
            $table->foreignId('id_user_address');
            $table->foreign('id_user_address')
            ->references('id_user_address')->on('user_addresses')
            ->onDelete('cascade');
            
            $table->id();
            $table->string('user_name', 100);
            $table->string('user_email', 100);
            $table->string('user_password', 100);
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
        Schema::dropIfExists('users');
    }
}
