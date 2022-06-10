<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoAusenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('apellido_nombre');
            $table->date('antiguedad');
            $table->string('cuil');
            $table->string('telefono');
            $table->string('domicilio');
            $table->string('cargo');
            $table->string('horario');
            $table->string('situacion_revista');
            $table->string('area');
            $table->string('dias_vacaciones_adicionales');
            $table->softDeletes();
        });
        
        Schema::create('tipos_ausencias', function (Blueprint $table) {
            $table->increments('id');
            $table->softDeletes();
            $table->string('nombre');
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
        Schema::dropIfExists('tipo_ausencias');
    }
}
