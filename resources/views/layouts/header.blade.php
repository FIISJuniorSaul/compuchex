<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=Edge">
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <title>RRHH - CompuChex </title>
      <!-- Favicon-->
      <!-- Bootstrap Material Datetime Picker Css -->
      <link href="{{ asset('resources/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet">
      </link>
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
      <!-- Bootstrap Core Css -->
      <link href="{{ asset('resources/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
      </link>
      <link href="{{ asset('resources/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet">
      </link>
      <!-- Waves Effect Css -->
      <link href="{{ asset('resources/plugins/node-waves/waves.css')}}" rel="stylesheet">
      </link>
      <!-- Animation Css -->
      <link href="{{ asset('resources/plugins/animate-css/animate.css')}}" rel="stylesheet">
      </link>
      <!-- Morris Chart Css-->
      <link href="{{ asset('resources/plugins/morrisjs/morris.css')}}" rel="stylesheet">
      </link>
      <!-- Custom Css -->
      <link href="{{ asset('resources/css/style.css')}}" rel="stylesheet">
      </link>
      <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
      <link href="{{ asset('resources/css/themes/theme-light-blue.css')}}" rel="stylesheet">
      </link>
   </head>
   <body class="theme-light-blue">
      <!-- #END# Page Loader -->
      <!-- Overlay For Sidebars -->
      <div class="overlay"></div>
      <!-- #END# Overlay For Sidebars -->
      <!-- Search Bar -->
      <div class="search-bar">
         <div class="search-icon">
            <i class="material-icons">search</i>
         </div>
         <input type="text" placeholder="Ingrese nombre de empleado...">
         <div class="close-search">
            <i class="material-icons">close</i>
         </div>
      </div>
      <!-- #END# Search Bar -->
      <!-- Top Bar -->
      <nav class="navbar">
         <div class="container-fluid">
            <div class="navbar-header">
               <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
               <a href="javascript:void(0);" class="bars"></a>
               <a class="navbar-brand" href="{{ route('empleados.index') }}">RRHH - CompuChex</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                  <!-- Call Search
                     <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                     <!-- #END# Call Search -->
               </ul>
            </div>
         </div>
      </nav>
      <!-- #Top Bar -->
      <section>
         <!-- Left Sidebar -->
         <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
               <div class="image">
               </div>
               <div class="info-container" style="margin-top: 10%">
                  <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{{Auth::user()->name }}}
                  </div>
                  <div class="email">{{{Auth::user()->email }}}</div>
                  <div class="btn-group user-helper-dropdown">
                     <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                     <ul class="dropdown-menu pull-right">
                        <li class="nav-item dropdown">
                           <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                           {{ __('Salir') }}
                           </a>
                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                           </form>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
               <ul class="list">
                  <li class="header">MEN?? PRINCIPAL</li>
                  <li class="{{ Route::is('empleados.index') ? 'active' : null }}" >
                     <a href="{{ route('empleados.index') }}">
                     <i class="material-icons">person_add</i>
                     <span>Escritorio</span>
                     </a>
                  </li>
                  <li class="{{ Route::is('empleados.show') ? 'active' : null }}">
                     <a href="javascript:void(0);" class="menu-toggle">
                     <i class="material-icons">person_pin</i>
                     <span>Gesti??n de Empleados</span>
                     </a>
                     <ul class="ml-menu">
                     
                        <li class="{{ Request::path() == 'empleados/create' ? 'active' : '' }}" >
                           <a href="{{ route('empleados.create') }}">
                           <i class="material-icons">person_add</i>
                           <span>Registrar Empleado</span>
                           </a>
                        </li>
                        <li>
                        <li class="{{ Route::is('listar') ? 'active' : null }}" >
                           <a href="{{ route('listar') }}">
                           <i class="material-icons"></i>
                           <span>Lista Empleados</span>
                           </a>
                           @foreach($empleados as $emp)
                        <li >
                           <a href="{{ URL::to('empleados/' . $emp->id) }}">{{$emp->apellido_nombre}}</a>
                        </li>
                        </li>
                           
                        @endforeach
                        </li>
                     </ul>
                  </li>
                  <li class="{{ Route::is('salidas.index') ? 'active' : null }}">
                        <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">check</i>
                        <span>Salidas Particulares</span>
                        </a>
                        <ul class="ml-menu">
                           <li class="{{ Request::path() == 'salidas.index' ? 'active' : '' }}" >
                              <a href="{{ route('salidas.index') }}">
                              <span>Listado de Salidas Particulares</span>
                              </a>
                           </li>
                           <li class="{{ Request::path() == 'salidas/create' ? 'active' : '' }}" >
                              <a href="{{ route('salidas.create') }}">
                              <span>Registrar Nueva Salida</span>
                              </a>
                           </li>
                        </ul>
                     </li>
                  <li class="{{ Route::is('ausencias.show') ? 'active' : null }}">
                     <a href="javascript:void(0);" class="menu-toggle">
                     <i class="material-icons">error</i>
                     <span>Ausencias</span>
                     </a>
                     <ul class="ml-menu">
                        <li class="{{ Request::path() == 'ausencias.index' ? 'active' : '' }}" >
                           <a href="{{ route('ausencias.index') }}">
                           <span>Listado de Ausencias Cargadas</span>
                           </a>
                        </li>
                        <li class="{{ Request::path() == 'ausencias/create' ? 'active' : '' }}" >
                           <a href="{{ route('ausencias.create') }}">
                           <span>Registrar Ausencia</span>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="{{ Request::path() == 'francos' ? 'active' : '' }}">
                     <a href="javascript:void(0);" class="menu-toggle">
                     <i class="material-icons">hourglass_empty</i>
                     <span>Francos Compensatorios </span>
                     </a>
                     <ul class="ml-menu">
                        <li class="{{ Request::path() == 'addfranco' ? 'active' : '' }}" >
                           <a href="{{ route('addfranco') }}">
                           <span>Registrar Franco Compensatorio</span>
                           </a>
                        </li>
                        <li class="{{ Request::path() == 'francos' ? 'active' : '' }}" >
                           <a href="{{ route('francos') }}">
                           <span>Listar Francos Compensatorios</span>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="{{ Route::is('vacaciones.*') ? 'active' : null }}">
                     <a href="javascript:void(0);" class="menu-toggle">
                     <i class="material-icons">event_available</i>
                     <span>Vacaciones</span>
                     </a>
                     <ul class="ml-menu">
                        <li class="{{ Route::is('vacaciones.index') ? 'active' : null }}" >
                           <a href="{{ route('vacaciones.index') }}">
                           <span>Listar Vacaciones</span>
                           </a>
                        </li>
                        <li class="{{ Request::path() == 'vacaciones/create' ? 'active' : '' }}" >
                           <a href="{{ route('vacaciones.create') }}">
                           <span>Registar Vacaciones</span>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="{{ Route::is('horas.*') ? 'active' : null }}">
                     <a href="javascript:void(0);" class="menu-toggle">
                     <i class="material-icons">timer</i>
                     <span>Horas Extras</span>
                     </a>
                     <ul class="ml-menu">
                        <li class="{{ Route::is('horas.index') ? 'active' : null }}" >
                           <a href="{{ route('horas.index') }}">
                           <span>Listar Horas Extras</span>
                           </a>
                        </li>
                        <li class="{{ Route::is('horas.create') ? 'active' : null }}" >
                           <a href="{{ route('horas.create') }}">
                           <span>Registar Horas Extras</span>
                           </a>
                        </li>
                     </ul>
                  </li>
                  
                  <li class="{{ Request::path() == 'tipo' ? 'active' : '' }}">
                     <a href="javascript:void(0);" class="menu-toggle">
                     <i class="material-icons">assignment</i>
                     <span>Gesti??n </span>
                     </a>
                     <ul class="ml-menu">
                        <li class="{{ Request::path() == 'tipo/create' ? 'active' : '' }}" >
                           <a href="{{ route('tipo.create') }}">
                           <span>Agregar nuevo tipo de licencia</span>
                           </a>
                        </li>
                        <li class="{{ Request::path() == 'tipo' ? 'active' : '' }}" >
                           <a href="{{ route('tipo.index') }}">
                           <span>Listar Licencias</span>
                           </a>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
               <div class="copyright">
                  &copy; 2022 <a href="javascript:void(0);">CompuCHEX</a>.
               </div>
               <div class="version">
                  <b>Version: </b> 0.0.1
               </div>
            </div>
            <!-- #Footer -->
         </aside>
         <!-- #END# Left Sidebar -->
         <!-- Right Sidebar -->
         <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
               <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
               <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
            </div>
         </aside>
         <!-- #END# Right Sidebar -->
      </section>
      <section class="content">
         <div class="container-fluid">
            @yield('content')
            <!-- #END# Browser Usage -->
         </div>
         </div>
      </section>
      <!-- Jquery Core Js -->
      <script src="{{ asset('resources/plugins/jquery/jquery.min.js')}}" ></script>
      <!-- Bootstrap Core Js -->
      <script src="{{ asset('resources/plugins/bootstrap/js/bootstrap.js')}}" ></script>
      <script src="{{ asset('resources/plugins/jquery.dependent.fields.js')}}" ></script>
      <!-- Select Plugin Js -->
      <script src="{{ asset('resources/plugins/bootstrap-select/js/bootstrap-select.js')}}" ></script>
      <!-- Slimscroll Plugin Js -->
      <script src="{{ asset('resources/plugins/jquery-slimscroll/jquery.slimscroll.js')}}" ></script>
      <!-- Waves Effect Plugin Js -->
      <script src="{{ asset('resources/plugins/node-waves/waves.js')}}" ></script>
      <!-- Autorsize Plugin Js -->
      <script src="{{ asset('resources/plugins/autosize/autosize.js')}}" ></script>
      <!-- Jquery CountTo Plugin Js -->
      <script src="{{ asset('resources/plugins/jquery-countto/jquery.countTo.js')}}" ></script>
      <!-- Sparkline Chart Plugin Js -->
      <script src="{{ asset('resources/plugins/jquery-sparkline/jquery.sparkline.js')}}" ></script>
      <!-- Demo Js -->
      <script src="{{ asset('resources/js/demo.js')}}" ></script>
      <script src="{{ asset('resources/js/pages/forms/basic-form-elements.js')}}" ></script>
      <script src="{{ asset('resources/plugins/momentjs/moment.js')}}"></script>
      <script src="{{ asset('resources/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
      <script src="{{ asset('resources/js/admin.js')}}" ></script>
      <script>
         $('.depends-on-master-checkbox').dependsOn('#master-checkbox');
         $('#dependent-dropdown').dependsOn('#master-dropdown', ['Canada', 'United States']);
      </script>
   </body>
</html>