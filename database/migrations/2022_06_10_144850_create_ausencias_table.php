<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAusenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ausencias', function (Blueprint $table) {
            $table->id();
 //           $table->softDeletes();
            $table->timestamps();
            $table->unsignedBigInteger('empleados_id');
            $table->foreign('empleados_id')->references('id')->on('empleados');
            $table->unsignedBigInteger('tipos_ausencias_id');
            $table->foreign('tipos_ausencias_id')->references('id')->on('tipos_ausencias');
            $table->boolean('justificado');
            $table->string('observaciones');
            $table->string('inicio_ausencia');
            $table->string('finalizacion_ausencia');
            $table->integer('dias_habiles_ausencia');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ausencias');
    }
}
