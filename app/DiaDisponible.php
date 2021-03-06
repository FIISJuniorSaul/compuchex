<?php

namespace App;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DiaDisponible extends Model
{

    protected $table = "dias_disponibles";

    protected $fillable = [
        'cantidad', 'periodo', 'empleados_id'
    ];

}
