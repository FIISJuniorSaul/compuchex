<?php

namespace App;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empleado extends Model
{
    use SoftDeletes;

    protected $table = "empleados";
    protected $dates = ['deleted_at'];


    protected $fillable = [
        'apellido_nombre', 'antiguedad', 'cargo',  'area',
        'horario','domicilio','telefono','cuil','situacion_revista','dias_vacaciones_adicionales'
        ,'inicio_contrato','fin_contrato',
    ];


    public function condicion()
    {
        return $this->belongsTo('App\Condicion','condiciones_id');
    }

    public function ausencias()
    {
        return $this->hasMany('App\Ausencia','empleados_id');
    }

    public function asistencias()
    {
        return $this->hasMany('App\Asistencia');
    }

    public function antiguedad()
    {
        $fecha_ingreso = $this->fecha_ingreso;
        $hoy = Carbon::now();
        return $hoy->diffInYears( Carbon::parse($fecha_ingreso));
    }

    public function diasLactancia(){
        $fecha_lactancia = $this->periodo_lactancia;
        $hoy = Carbon::now();
       $dias_restantes =  $hoy->diffInDays( Carbon::parse($fecha_lactancia));
       $dias_lactancia = 730;
       return $dias_lactancia - $dias_restantes;
    }

    public function diasMaternidad(){
        $fecha_maternidad = $this->periodo_maternidad;
        $hoy = Carbon::now();
       $dias_restantes =  $hoy->diffInDays( Carbon::parse($fecha_maternidad));
       $dias_maternidad = 180;
       return $dias_maternidad - $dias_restantes;
    }

    public function diasTomados()
    {
        return $this->hasMany('App\DiasTomados');

    }


    public function diasDisponibles() {

          $años_antiguedad = $this->antiguedad();
        if ($años_antiguedad < 5 ) {
            return 15 + $this->dias_vacaciones_adicionales;
        };
        if (($años_antiguedad >= 5) && ($años_antiguedad <= 10)  ) {
            return 20 + $this->dias_vacaciones_adicionales;
        };
        if (($años_antiguedad >= 10) &&  ($años_antiguedad <= 15)  ) {
            return 25+ $this->dias_vacaciones_adicionales;
        };
        if (($años_antiguedad >= 15) &&  ($años_antiguedad <= 20)  ) {
            return 30+ $this->dias_vacaciones_adicionales;
        };
        if ($años_antiguedad >= 25  ) {
            return 35+ $this->dias_vacaciones_adicionales;
        };

    }

    public function horasExtras(){
        return $this->hasMany('App\HoraExtra');

    }



}
