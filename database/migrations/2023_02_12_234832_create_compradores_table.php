<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compradores', function (Blueprint $table) {
            $table->id();
            $table->nombre();
            $table->apellido();
            $table->email();
            $table->direccion();
            $table->tarjeta_credito();
            $table->codigo_seguridad();
            $table->pregunta_seguridad1();       
            $table->respuesta_seguridad1();
            $table->pregunta_seguridad2();
            $table->respuesta_seguridad2();
            $table->pregunta_seguridad3();
            $table->respuesta_seguridad3();
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
        Schema::dropIfExists('compradores');
    }
};
