<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItenPedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itenPedido', function (Blueprint $table) {
           
           
            $table->integer('id_pedido');
            $table->integer('id_item');
            $table->primary(['id_pedido', 'id_item']);

            $table->unsignedBigInteger('pedido_id');
            $table->foreign('pedido_id')->references('id_pedido')->on('pedido')->onDelete('cascade')-> update('cascade');
            $table->unsignedBigInteger('item_id');
            $table->foreign('item_id')->references('id_item')->on('itens')->onDelete('cascade')-> update('cascade');

           
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
        Schema::dropIfExists('itenPedido');
    }
}
