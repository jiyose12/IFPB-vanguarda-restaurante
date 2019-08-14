<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItensPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itens_pedidos', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->timestamps();
            $table->integer('itens_id')->unsigned();
            $table->integer('pedido_id')->unsigned();
            //$table->foreign('itens_id')->references('id')->on('itens');
           // $table->foreign('pedido_id')->references('id')->on('pedidos');
            $table->date('dtremoved')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itens_pedidos');
    }
}
