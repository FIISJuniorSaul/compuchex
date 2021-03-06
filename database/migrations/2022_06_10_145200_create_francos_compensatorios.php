<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrancosCompensatorios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('francos_compensatorios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date("fecha");
            $table->string('observaciones');
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
