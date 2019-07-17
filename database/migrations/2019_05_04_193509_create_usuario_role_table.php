<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarioRole', function (Blueprint $table) {
            $table->integer('id_role');
            $table->integer('id_usuario');
            $table->primary(['id_role', 'id_usuario']);
            
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')->references('id_role')->on('role')->onDelete('cascade')-> update('cascade');
            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('usuario')->onDelete('cascade')-> update('cascade');
                                                            
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
        Schema::dropIfExists('usuarioRole');
    }
}
