<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
<<<<<<< HEAD
            $table->id('id_role');
            $table->string('role_name', 45);
=======
            $table->increments('id_role');
<<<<<<< HEAD
            $table->string('name');
>>>>>>> 97084e1 (fafa)
=======
            $table->string('role_name', 45);
>>>>>>> 12deadb (Revert "fafa")
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
