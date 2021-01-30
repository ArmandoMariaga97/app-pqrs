<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePQRSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_q_r_s', function (Blueprint $table) {
            $table->id();
            $table->string('radicado');
            $table->unsignedBigInteger('t_pqr');
            
            $table->unsignedBigInteger('user_creador');
            $table->longText('descripcion_solicitud');
            $table->string('archivo_solicitud')->nullable();
            
            $table->unsignedBigInteger('asesor')->nullable();
            $table->longText('descripcion_respuesta')->nullable();
            $table->string('archivo_respuesta')->nullable();
            
            $table->Integer('estado')->nullable();

            $table->foreign('user_creador')
            ->references('id')->on('users')
            ->onDelete('cascade');

            $table->foreign('asesor')
            ->references('id')->on('users')
            ->onDelete('cascade');

            $table->foreign('t_pqr')
            ->references('id')->on('tipo_p_q_r_s')
            ->onDelete('cascade');

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
        Schema::dropIfExists('p_q_r_s');
    }
}
