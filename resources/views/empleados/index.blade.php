@extends('layouts.header')

@section('title', 'Listado de Empleados')

@section('content')

<br>

       <div class="card"> 
                 <div class="header bg-pink">
<h3 class="title"> Lista de empleados </h3>
<div>   
    <a target="_blank" href="{{route('pdflista')}} " class="btn btn-primary">Imprimir Lista </a>
</div>
                 </div>

            <div class="body">
            <table class="table responsive">
                                <thead>
                                    <tr>

                                            <th>Codigo</th>
                                            <th>Nombre</th>
                                            <th>Telefono</th>
                                            <th>Domicilio</th>
                                            <th>Area</th>
                                            <th>Cargo</th>
                                            <th>Horario</th>
                                            <th>Estado</th>
                                            
                                            <th>Inicio de Contrato</th>
                                            <th>Fin de Contrato</th>

                                            
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach($empleados as $empleado)
        
                                        <tr>
                                        <td>{{$empleado->cuil}}</td>
                                            <td>{{$empleado->apellido_nombre}}</td>
                                            <td>{{$empleado->telefono}}</td>
                                            <td>{{$empleado->domicilio}}</td>
                                            <td>{{$empleado->area}}</td>
                                            <td>{{$empleado->cargo}}</td>
                                            <td>{{$empleado->horario}}</td>
                                            <td>{{$empleado->situacion_revista}}</td>
                                            
                                            <td>{{$empleado->inicio_contrato}}</td>
                                            <td>{{$empleado->fin_contrato}}</td>


                                        </tr>
                                       @endforeach
                                </tbody>
                            </table>
                        </div>
       </div>
    
       @endsection