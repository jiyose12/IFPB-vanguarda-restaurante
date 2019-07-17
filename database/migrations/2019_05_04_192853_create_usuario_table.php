<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
           
            $table->bigIncrements('id');
            
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')->references('id_role')->on('role')->onDelete('cascade')-> update('cascade');
            $table->string('nome');
            $table->string('name');
            $table->string('email');
            $table->string('username');
            $table->string('password', 455);
            
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
        Schema::dropIfExists('usuario');
    }
}
