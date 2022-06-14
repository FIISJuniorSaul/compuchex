@extends('layouts.header')
@section('title', 'Registrar Ausencia')

@section('content')
<div class="card"> 

<div class="header bg-cyan">
<h2>Agregar Nuevo Empleado</h2>
</div>
<div class="body"> 
<form  method="post" action="{{ route('empleados.store') }}">
  {{csrf_field()}}
  <input name="_method" type="hidden" value="POST">

  <div class="form-group form-float">

      <div class="form-line">
          <input type="text" class="form-control" name="apellido_nombre" >
          <label for="apellido_nombre" class="form-label">Apellido y Nombre</label>
      </div>
  </div>

  <div class="form-group form-float">

        <div class="form-line">
            <input type="text" class="form-control" name="cuil" >
            <label for="cuil" class="form-label">Cuil</label>
        </div>
    </div>

    <div class="form-group form-float">

            <div class="form-line">
                <input type="text" class="form-control" name="telefono" >
                <label for="telefono" class="form-label">Teléfono</label>
            </div>
        </div>

        <div class="form-group form-float">

                <div class="form-line">
                    <input type="text" class="form-control" name="domicilio" >
                    <label for="domicilio" class="form-label">Domicilio</label>
                </div>
            </div>

            <div class="form-group form-float">

                    <div class="form-line">
                        <input type="text" class="form-control" name="horario" >
                        <label for="horario" class="form-label">Horario</label>
                    </div>
                </div>


  <div class="form-group form-float">
      <div class="form-line">
        <label for="cargo">Cargo:</label>
        <select name="cargo" class="form-control dropdown selectpicker ">
              
            
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
                    
                  
               
                      <option value="Permanente">Permanente</option>
                      <option value="Suplente">Suplente</option>
                      <option value="Pasantía">Pasantía</option>
                      

                    </select>
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
    


            <div class="form-group form-float">

                <div class="form-line">
                    <input type="text" class="form-control" name="dias_vacaciones_adicionales" >
                    <label for="dias_vacaciones_adicionales" class="form-label">Días de vacaciones adicionales (Completar si correspondiere)</label>
                </div>
            </div>



  <div class="form-group">    
                <button type="submit" class="btn btn-block btn-lg btn-info waves-effect" >Crear Empleado</button>
              </div>

</form>
</div>
</div>
@endsection