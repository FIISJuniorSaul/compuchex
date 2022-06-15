@extends('layouts.header')
@section('title', 'Registrar Ausencia')

@section('content')
<div class="card"> 

<div class="header bg-cyan">
<h2>Editar datos del empleado {{$empleado->apellido_nombre}}</h2>
</div>
<div class="body"> 
<form  method="post" action="{{ route('empleados.update',$empleado->id) }}">
        {{csrf_field()}}

        <input name="_method" type="hidden" value="PUT">
      

  <div class="form-group">
        <label for="apellido_nombre" class="form-label"> Nombre y Apellido</label>

      <div class="form-line">
          <input type="text" class="form-control" name="apellido_nombre" value="{{$empleado->apellido_nombre}}">
      </div>
  </div>

  <div class="form-group ">
        <label for="cuil" class="form-label">Codigo</label>

        <div class="form-line">
            <input type="text" class="form-control" name="cuil" value="{{$empleado->cuil}}" >
        </div>
    </div>

    <div class="form-group ">
            <label for="tel" class="form-label">Teléfono</label>

            <div class="form-line">
                <input type="text" class="form-control" name="tel" value="{{$empleado->tel}}">
            </div>
        </div>

        <div class="form-group ">
                <label for="domicilio" class="form-label">Domicilio</label>

                <div class="form-line">
                    <input type="text" class="form-control" name="domicilio"  value="{{$empleado->domicilio}}" >
                </div>
            </div>

            <div class="form-group ">
                    <label for="horario" class="form-label">Horario</label>

                    <div class="form-line">
                        <input type="text" class="form-control" name="horario" value="{{$empleado->horario}}">
                    </div>
                </div>


  <div class="form-group form-float">
      <div class="form-line">
        <label for="cargo">Cargo:</label>
        <select name="cargo" class="form-control dropdown selectpicker ">
              
                <option selected value="{{$empleado->cargo}}">{{$empleado->cargo}}</option>

                <option value="Administador">Administador(a)</option>
                <option value="Contador">Contador(a)</option>
                <option value="Tectnico">Tectnico(a)</option>
                <option value="Diseñador">Diseñador(a)</option>
                <option value="Vendedor">Vendedor(a)</option>
                <option value="Supervisor">Supervisor(a)</option>
                <option value="Secretario">Secretario(a)</option>
                <option value="Limpiesas">Limpiesa</option>

              </select>
      </div>
  </div>



  <div class="form-group form-float">
        <div class="form-line">
          <label for="antiguedad">Fecha de Incorporación:</label>
  
          <input type="text" class="fechaIngreso form-control" name="antiguedad" placeholder="Clic aquí para seleccionar fecha...">
        </div>
    </div>




    <div class="form-group form-float">
            <div class="form-line">
              <label for="situacion_revista">Situación de Revista:</label>
              <select name="situacion_revista" class="form-control dropdown selectpicker ">
                    
                  
                    <option selected value="{{$empleado->situacion_revista}}">{{$empleado->situacion_revista}}</option>

                    <option value="Permanente">Permanente</option>
                      <option value="Suplente">Suplente</option>
                      <option value="Pasantía">Pasantía</option>

                    </select>
            </div>
        </div>

        <div class="form-group form-float">
        <div class="form-line">
          <label for="inicio_contrato">inicio de contrato:</label>
  
          <input type="text" class="fechaIngreso form-control" name="inicio_contrato" placeholder="Clic aquí para seleccionar fecha...">
        </div>
    </div>

    <div class="form-group form-float">
        <div class="form-line">
          <label for="fin_contrato">fin de contrato:</label>
  
          <input type="text" class="fechaIngreso form-control" name="fin_contrato" placeholder="Clic aquí para seleccionar fecha...">
        </div>
    </div>


        <div class="form-group form-float">
                <div class="form-line">
                  <label for="area">Área:</label>
                  <select name="area" class="form-control dropdown selectpicker ">
                        
                      
                  <option value="Administración">Administración</option>
                <option value="Contabilidad">Contabilidad</option>
                <option value="Soporte Tectnico">Soporte Tectnico</option>
                <option value="Ventas y Servicios">Ventas y Servicios</option>
                <option value="RR HH">RR HH</option>
                <option value="Supervisor">Supervisor</option>

                        </select>
                </div>
            </div>
    


            <div class="form-group ">
                <label for="dias_vacaciones_adicionales" class="form-label">Días de vacaciones adicionales (Completar si correspondiere)</label>

                <div class="form-line">
                    <input type="text" class="form-control" name="dias_vacaciones_adicionales" >
                </div>
            </div>

            
            <div class="form-group ">
                    <label for="activo" class="form-label">Empleado Activo</label>
    
                    <div class="form-line">
                        <select  class="form-control" name="activo" >
                            @if ($empleado->activo == 1)
                            <option selected value=1>SI</option>
                            <option  value=0>NO</option>
                            @else
                            <option  value=1>SI</option>
                            <option selected value=0>NO</option>
                            @endif
                        </select>
                    </div>
                </div>
    



  <div class="form-group">    
                <button type="submit" class="btn btn-block btn-lg btn-info waves-effect" >Crear Empleado</button>
              </div>

</form>
</div>
</div>
@endsection