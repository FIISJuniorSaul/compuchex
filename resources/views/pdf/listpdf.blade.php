

<!DOCTYPE html>

<style>

        .page-break {
            page-break-after: always;
        }
        body { 
            width: 16cm;
            font-family: Arial, Helvetica, sans-serif
            }
        .clearfix:after {
            content: "";
            display: table;
            clear: both;
          }
          
          a {
            color: #5D6975;
            text-decoration: underline;
          }
          
          body {
            position: relative;
            width: 16cm;  

            margin: 0 auto; 
            color: #001028;
            background: #FFFFFF; 
            font-family: Arial, sans-serif; 
            font-size: 12px; 
            font-family: Arial;
          }
          
          header {
            padding: 10px 0;
            margin-bottom: 30px;
          }
          
       
          
          h1 {
            border-top: 1px solid  #5D6975;
            border-bottom: 1px solid  #5D6975;
            color: #5D6975;
            font-size: 2.4em;
            line-height: 1.4em;
            font-weight: normal;
            text-align: center;
            margin: 0 0 20px 0;
            background: url(dimension.png);
          }

          h2 {
            border-top: 1px solid  #5D6975;
            border-bottom: 1px solid  #5D6975;
            color: #5D6975;
           
            line-height: 1.4em;
            font-weight: normal;
            text-align: center;
            margin: 0 0 20px 0;
            background: url(dimension.png);
          }
          
        
         
          
          
          
          
          table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            margin-bottom: 20px;
          }
          
          table tr:nth-child(2n-1) td {
            background: #F5F5F5;
          }
          
          table th,
          table td {
            text-align: center;
          }
          
          table th {
            padding: 5px 10px;
            color: #5D6975;
            border-bottom: 1px solid #C1CED9;
            white-space: nowrap;        
            font-weight: normal;
            text-align:left;
          }
          
          table .service,
          table .desc {
            text-align: left;
          }
          
          table td {
            padding: 10px;
            text-align: left;
          }
          
          table td.service,
          table td.desc {
            vertical-align: top;
          }
          
          table td.unit,
          table td.qty,
          table td.total {
            font-size: 1.2em;
          }
          
          table td.grand {
            border-top: 1px solid #5D6975;;
          }
          
          #notices .notice {
            color: #5D6975;
            font-size: 1.2em;
          }
          
          footer {
            color: #5D6975;
            width: 100%;
            height: 30px;
            position: absolute;
            bottom: 0;
            border-top: 1px solid #C1CED9;
            padding: 8px 0;
            text-align: center;
          }

          .gris{
            -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
            filter: grayscale(100%);
          }

</style>

<html lang="es">
<body>

<br>
       <div class="card"> 
                 <div class="header bg-pink">
        <header class="clearfix">
    <div id="logo" style="text-align: center">
      
    <td rowspan="4"><img src=resources/images/log.png style="width:20%"><h1> Lista de empleados </h1></td>
            
    </div> </header>
                 </div>
            <div class="body">
            <table class="table responsive">
                                <thead>
                                    <tr>
                                             <th>Codigo</th>
                                            <th>Nombre</th>
                                            <th>Telefono</th>
                                           
                                            <th>Area</th>
                                            <th>Cargo</th>
                                            <th>Horario</th>
                                            <th>Estado</th>
                                            
                                            <th>Inicio de Contrato <br>Fin de Contrato</th>
                                            
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach($empleados as $empleado)
        
                                        <tr>
                                        <td>{{$empleado->cuil}}</td>
                                            <td>{{$empleado->apellido_nombre}}</td>
                                            <td>{{$empleado->telefono}}</td>
                                           
                                            <td>{{$empleado->area}}</td>
                                            <td>{{$empleado->cargo}}</td>
                                            <td>{{$empleado->horario}}</td>
                                            <td>{{$empleado->situacion_revista}}</td>
                                            
                                            <td>{{$empleado->inicio_contrato}} <br> {{$empleado->fin_contrato}}</td>
                                            


                                        </tr>
                                       @endforeach
                                </tbody>
                                </table>
                        </div>
                        
       </div>
    
      
    <footer>
      
    </footer>
  </body>
</html>