<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Empleado;
use App\Ausencia;
use App\DiasTomados;
use App\Franco;
use App\HoraExtra;
use App\Vacaciones;
class GenerarPdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empleados = Empleado::all();
        $empleado = Empleado::find($id);
          $ausencias = Ausencia::with("tipo")->where('empleados_id',$id)->get();
          $ausencias = $ausencias->groupBy('tipo.nombre');

          $diasTomados = DiasTomados::where('empleados_id',$id)->get();
        $francos_compensatorios = Franco::where('empleados_id',$id)->get();
        $hora_extra= HoraExtra::where('empleados_id',$id)->get();
        $dias_tomados = DiasTomados::where('empleados_id',$id)->get();
      // return $diasTomados;


      $totalVacaciones = 0;

      foreach ($diasTomados as $dia){
          $totalVacaciones = $totalVacaciones + $dia->cantidad_dias;
      }


      $semanas = round($totalVacaciones / 7);
           $numero = $semanas * 2;
           $dias_habiles = $totalVacaciones-$numero;



      $diasDisponibles =  $empleado->diasDisponibles() - $dias_habiles;
    //return $diasDisponibles;

    $pdf = PDF::loadView('pdf.individual',['empleado'=>$empleado, 'ausencias'=>$ausencias,'empleados'=>$empleados,'diasTomados'=>$diasTomados,'diasDisponibles'=>$diasDisponibles,'diasHabiles'=>$dias_habiles,'francos_compensatorios'=>$francos_compensatorios,'hora_extras'=>$hora_extra,'dias_tomados'=>$dias_tomados]);

         // return response(['empleado'=>$empleado, 'ausencias'=>$ausencias,'empleados'=>$empleados,'diasTomados'=>$diasTomados]);

          return $pdf->stream('informe.pdf');

         //return view('pdf.individual', ['empleado'=>$empleado, 'ausencias'=>$ausencias,'empleados'=>$empleados,'diasTomados'=>$diasTomados]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
