<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriasEmpleados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias_empleados', function (Blueprint $table) {
            
                Schema::table('empleados', function (Blueprint $table) {
                    $table->string('antiguedad')->change();
        
                });
        
              
        
                Schema::table('ausencias', function (Blueprint $table) {
                    $table->string('tipo_ausencia');
                    
        
                });
        
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorias_empleados');
    }
}
