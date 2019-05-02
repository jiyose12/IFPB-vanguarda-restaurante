<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Funcionario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionario', function (Blueprint $table) {
            $table->increments('id_funcionario');
            $table->string('nome',100);
            $table->double('salario',9,2);
            $table->date('dataADM');
            $table->string('cpf',12);
            $table->string('email',30);
            $table->enum('sexo',['F','M']);
            $table->unsignedInteger('id_cargo');
            $table->foreign('id_cargo')->references('id_cargo')->on('cargo')->onDelete('cascade');
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
        Schema::dropIfExists('funcionario');
    }
}
