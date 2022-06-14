
@extends('layouts.header')
@section('title', 'Listado de Ausencias por Empleados')

@section('content')
<div class="row"> 
    <a href="{{ route('ausencias.create') }}" type="button" class="btn btn-block btn-lg btn-primary waves-effect">REGISTRAR AUSENCIAS</a>
    </div>

<br>

@if($errors->any())
<div class="alert alert-success">

<h4>{{$errors->first()}}</h4>
</div>
@endif
       <div class="card"> 
                 <div class="header bg-teal">
<h3 class="title"> Ausencias </h3>
      </div>
            <div class="body">
            <table class="table responsive">
                                <thead>
                                    <tr>
                                    <th>Codigo </th>
                                            <th>Empleado </th>
                                            <th>Tipo de Ausencia </th>
                                            <th>Inicio Ausencia</th>
                                            <th>Fin Ausencia</th>
                                            <th>Descripcion</th>
                                            <th>Días Hábiles</th>
                                            <th>Remunerada</th>
                                            <th>Eliminar</th>

                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach($empleadosAusencias as $ausencia)
        
                                        <tr>
                                        <td>{{$ausencia->empleado->cuil}}</td>
                                            <td>{{$ausencia->empleado->apellido_nombre}}</td>
                                            <td>{{$ausencia->tipo->nombre}}</td>
                                            <td>{{$ausencia->inicio_ausencia}}</td>
                                            <td>{{$ausencia->finalizacion_ausencia}}</td>
                                            <td>{{$ausencia->observaciones}}</td>
                                            <td>{{$ausencia->dias_habiles_ausencia}}</td>
                                             @if ($ausencia->tipo->remunerada === 1)

                                            <td>SI  </td>
                                            @else
                                            <td>NO  </td>
                                            @endif

                                            <td>
                <form onsubmit="return confirm('Estás seguro de eliminar esta ausencia?');" 
                action="{{route('eliminarasistencia',$ausencia->id)}}" method="POST" >
                                                           @csrf
<input type="hidden" name="id" value="{{$ausencia->id}}">
                                                    <input type="submit"
                                                    class="btn btn-block btn-lg btn-danger waves-effect" value="Eliminar Ausencia" >
                                                 </form>

                                            </td>


                                        </tr>
                                       @endforeach
                                </tbody>
                            </table>
                        </div>
       </div>
                @endsection



             
                    