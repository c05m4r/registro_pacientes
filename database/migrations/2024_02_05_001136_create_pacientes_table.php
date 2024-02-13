<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('usuario_igm'); //inicalApellido-inicalNombre-DNI
            $table->string('dni');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email');
            $table->string('medico_solicitante');
            $table->string('obra_social');
            $table->string('estudio'); //rx, torax, densitometria, ...
            $table->string('tecnico'); //quien realiza el estudio
            $table->string('categoria'); //radiologia, mamografia, densitometria
            $table->float('costo_impresion');
            $table->boolean('estado_informe');
            $table->boolean('estado_envio');
            $table->timestamps();
            $table->softDeletes();
            // codigo_no_autorizado (saldo)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
