<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearSalidasMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salidas_particulares', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("cantidad_horas");
            $table->date('fecha');
            $table->unsignedBigInteger('empleados_id');
            $table->foreign('empleados_id')->references('id')->on('empleados');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
