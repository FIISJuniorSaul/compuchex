
@extends('layouts.header')
@section('title', 'Listado de Horas Extras Registradas')

@section('content')
<div class="row"> 
    
@if($errors->any())
<div class="alert alert-success">

<h4>{{$errors->first()}}</h4>
</div>
@endif

    <a href="{{ route('horas.create') }}" type="button" class="btn btn-block btn-lg btn-primary waves-effect">REGISTRAR HORAS EXTRAS</a>
    </div>
<br>
       <div class="card"> 
                 <div class="header bg-teal">
<h3 class="title"> Horas Extras </h3>
                 </div>
            <div class="body">
            <table class="table responsive">
                                <thead>
                                    <tr><th>Codigo</th>
                                            <th>Empleado</th>
                                            
                                            <th>Fecha</th>
                                            <th>Cantidad de horas</th>
                                            <th>Eliminar</th>

                                          
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach($horas as $hora)
        
                                        <tr>
                                        <td>{{$hora->empleado->cuil}}</td>
                                            <td>{{$hora->empleado->apellido_nombre}}</td>
                                            <td>{{$hora->fecha}}</td>
                                            <td>{{$hora->cantidad}}</td>
                                            <td>
    
                                                     
                                                     <form  
                                                     onsubmit="return confirm('Estás seguro de eliminar estas horas extras?');" 
                                                     action="{{route('horas.destroy',$hora->id)}}" method="POST" >
                                                            @csrf
                                                            <input type="hidden" name="_method" value="DELETE">

                                                    <input type="submit"
                                                        class="btn btn-block btn-lg btn-danger waves-effect" value="Eliminar Horas Extras" >
                                                        
    
                                                     </form>
    
    
    
                                                </td>

                                        </tr>
                                       @endforeach
                                </tbody>
                            </table>
                        </div>
       </div>
                @endsection



             
                    