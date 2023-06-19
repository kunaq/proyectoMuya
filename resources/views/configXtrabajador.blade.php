
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
    span.select2.select2-container.select2-container--classic{
        width: 100% !important;
    }
</style>
<x-layouts.app title="cambioContrasena" meta-description="Cambio de contrasena meta description">

    <main id="main" class="main">
      <div class="pagetitle">
          <h1>Configuración por trabajador</h1>
          <nav>
              <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
              <li class="breadcrumb-item active">Configuración</li>
              <li class="breadcrumb-item active">Por trabajador</li>
              </ol>
          </nav>
      </div><!-- End Page Title -->
  
      <section class="section dashboard">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-body"> 
                        <h5 >&nbsp;</h5>
                        
                        <div class="row m-3">
                            <div class="col-md-3">
                                <span class="titulo-tarjetaConfig" style="color: #a18347;"><b>Buscar</b></span>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-md-8 offset-md-3">
                                <div class="form-group">
                                    <select name="tipoDoc" id="tipoDoc" class="form-control selectForm js-example-basic-single">
                                        <option value="0" selected disabled>Escriba el nombre del trabajador</option>
                                        <option value="11001">Alfredo Ponce</option>
                                        <option value="11002">Juan Chavez</option>
                                        <option value="11003">Mercedes Huaman</option>
                                        <option value="11004">Rodrigo Montero</option>
                                        <option value="11005">Adriana Jaramillo</option>
                                        <option value="11006">María Huaman</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row ">
                            <div class="col-md-8 m-4">
                                <div id="message">
                                <p class="titulo-tarjetaConfig" style="color: #a18347;"><b>General</b></p>
                            </div>
                        </div>
                        <br>
                        <br>

                        <div class="row" style="padding-bottom: 1rem;">
                            <div class=" col-10 col-md-2 offset-md-2">
                                <p>Grupo:</p>
                            </div>
                            <div class=" col-5 col-md-3">
                                <div class="form-group">
                                    <input type="text" name="" id="" value="CODIGO" style="text-align: center" class="form-control" disabled>
                                </div>
                            </div>
                            <div class=" col-7 col-md-4">
                                <div class="form-group">
                                    <input type="text" name="" id="" value="GRUPO" style="text-align: center" class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>

                        <div class="row" style="padding-bottom: 1rem;">
                            <div class="col-10 col-md-2 offset-md-2">
                                <p>Comisionista:</p>
                            </div>
                            <div class=" col-5 col-md-3">
                                <div class="form-group">
                                    <input type="text" name="" id="" value="CODIGO" style="text-align: center" class="form-control" disabled>
                                </div>
                            </div>
                            <div class=" col-7 col-md-4">
                                <div class="form-group">
                                    <input type="text" name="" id="" value="GRUPO" style="text-align: center" class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                        <br><br>

                        <div class="row">
                            <div class="col-md-8 m-4">
                                <p class="titulo-tarjetaConfig" style="color: #a18347;"><b>Vacaciones</b></p>
                            </div>
                        </div>

                        <div class="row" >
                            <div class="col-10 col-md-4 offset-md-2">
                                <p>Requiere aprobación de vacaciones</p>
                            </div>
                            <div class=" col-2 col-md-1">
                                <div class="form-group">
                                    <input class="form-check-input checkVerde" type="checkbox" value="" id="flexCheckDefault2">
                                </div>
                            </div>
                        </div>
                        <br><br>

                        <div class="row" style="padding-bottom: 1rem;">
                            <div class="col-12 col-md-4 offset-md-2">
                                <p>Trabajador quien aprueba sus vacaciones</p>
                            </div>
                            <div class=" col-12 col-md-5">
                                <div class="form-group">
                                    <select name="tipoDoc" id="tipoDoc" class="form-control selectForm js-example-basic-single">
                                        <option value="0" selected disabled>Escriba el nombre del trabajador</option>
                                        <option value="11001">Alfredo Ponce</option>
                                        <option value="11002">Juan Chavez</option>
                                        <option value="11003">Mercedes Huaman</option>
                                        <option value="11004">Rodrigo Montero</option>
                                        <option value="11005">Adriana Jaramillo</option>
                                        <option value="11006">María Huaman</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br><br>

                        <div class="row" style="padding-bottom: 1rem;">
                            <div class="col-12 col-md-4 offset-md-2">
                                <p>No puede salir de vacaciones los últimos</p>
                            </div>
                            <div class=" col-3 col-md-1">
                                <div class="form-group">
                                    <input class="form-control " type="tel" value="">
                                </div>
                            </div>
                            <div class="col-6 col-md-2">
                                <p>días del mes</p>
                            </div>
                        </div>
                        <br><br>

                        <div class="row">
                            <div class="col-md-8 m-4">
                                <p class="titulo-tarjetaConfig" style="color: #a18347;"><b>Asistencia</b></p>
                            </div>
                        </div>

                        <div class="row" >
                            <div class="col-10 col-md-4 offset-md-2">
                                <p>Requiere supervisión de asistencia</p>
                            </div>
                            <div class=" col-2 col-md-1">
                                <div class="form-group">
                                    <input class="form-check-input checkVerde" type="checkbox" value="" id="flexCheckDefault2">
                                </div>
                            </div>
                        </div>
                        <br><br>

                        <div class="row" >
                            <div class="col-12 col-md-4 offset-md-2">
                                <p>Trabajador quien supervisa su asistencia</p>
                            </div>
                            <div class=" col-12 col-md-5">
                                <div class="form-group">
                                    <select name="tipoDoc" id="tipoDoc" class="form-control selectForm js-example-basic-single">
                                        <option value="0" selected disabled>Escriba el nombre del trabajador</option>
                                        <option value="11001">Alfredo Ponce</option>
                                        <option value="11002">Juan Chavez</option>
                                        <option value="11003">Mercedes Huaman</option>
                                        <option value="11004">Rodrigo Montero</option>
                                        <option value="11005">Adriana Jaramillo</option>
                                        <option value="11006">María Huaman</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>  
        </div>  
    </section>

    <section class="section dashboard">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 28px;">Lista de personal a cargo</h5>
                        <div class="row">
                            <div class="col-md-6" style="margin-bottom: 1rem;">
                                <div class="form-group table-responsive" style="padding-left: 0rem;padding-right: 1rem;height: 23rem;">
                                    <table class="table table-striped " id="solAprobar" style="text-align: center; height: 300px;">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="card-title">Aprobación de vacaciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Milagros Huaman A.</td>
                                            </tr>
                                            <tr>
                                                <td>Rodrigo Montero J.</td>
                                            </tr>
                                            <tr>
                                                <td>Adriana Jaramillo G.</td>
                                            </tr>
                                            <tr>
                                                <td>Carlos González H.</td>
                                            </tr>
                                            <tr>
                                                <td>María Huaman C.</td>
                                            </tr>
                                            <tr>
                                                <td>Ricardo Montero D.</td>
                                            </tr>
                                            <tr>
                                                <td>Azucena Jaramillo G.</td>
                                            </tr>
                                            <tr>
                                                <td>Cecilia González J.</td>
                                            </tr>
                                            <tr>
                                                <td>Mario Huaman L.</td>
                                            </tr>
                                            <tr>
                                                <td>Rachel Montero M.</td>
                                            </tr>
                                            <tr>
                                                <td>Ándres Jaramillo H.</td>
                                            </tr>
                                            <tr>
                                                <td>C. González</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-6" style="margin-bottom: 1rem;">
                                <div class="form-group table-responsive" style="padding-left: 0rem;padding-right: 1rem;height: 23rem;">
                                    <table class="table table-striped " id="solAprobar" style="text-align: center; height: 300px;">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="card-title">Gestión de asistencia</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Milagros Huaman A.</td>
                                            </tr>
                                            <tr>
                                                <td>Rodrigo Montero J.</td>
                                            </tr>
                                            <tr>
                                                <td>Adriana Jaramillo G.</td>
                                            </tr>
                                            <tr>
                                                <td>Carlos González H.</td>
                                            </tr>
                                            <tr>
                                                <td>María Huaman C.</td>
                                            </tr>
                                            <tr>
                                                <td>Ricardo Montero D.</td>
                                            </tr>
                                            <tr>
                                                <td>Azucena Jaramillo G.</td>
                                            </tr>
                                            <tr>
                                                <td>Cecilia González J.</td>
                                            </tr>
                                            <tr>
                                                <td>Mario Huaman L.</td>
                                            </tr>
                                            <tr>
                                                <td>Rachel Montero M.</td>
                                            </tr>
                                            <tr>
                                                <td>Ándres Jaramillo H.</td>
                                            </tr>
                                            <tr>
                                                <td>C. González</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>    
    </section>

    <section class="section dashboard">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 28px;">Reporte de vacaciones por trabajador</h5>
                        <div class="row">
                            <div class="col-3 col-md-1" style="margin-bottom: 1rem;">
                                <div class="form-group">
                                    <span>Inicio:</span>
                                </div>
                            </div>
                            <div class="col-9 col-md-2" style="margin-bottom: 1rem;">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="datepicker1">
                                </div>
                            </div>
                            <div class="col-3 col-md-1" style="margin-bottom: 1rem;">
                                <div class="form-group">
                                    <span>Fin:</span>
                                </div>
                            </div>
                            <div class="col-9 col-md-2" style="margin-bottom: 1rem;">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="datepicker2">
                                </div>
                            </div>
                            <div class="col-12 col-md-2" style="text-align: -webkit-center">
                                <div class="form-group">
                                    <h5><button class="btn btn-success btnDorado" id="buscarDoc">Descargar</button></h5>
                                </div>
                            </div>                      
                            <div class="col-1 col-md-1" style="text-align: -webkit-center">
                                <input class="form-check-input checkVerde" checked type="checkbox" value="" id="flexCheckDefault2">
                            </div>
                            <div class="col-11 col-md-3" style="text-align: -webkit-center">
                                <div class="form-group">
                                    <h5>Visualizar equipos de mi equipo</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>    
    </section>

    <section class="section dashboard">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 26px;">Descargar solicitudes de vacaciones por trabajador</h5>
                        <div class="row">
                            <div class="col-3 col-md-1" style="margin-bottom: 1rem;">
                                <div class="form-group">
                                    <span>Inicio:</span>
                                </div>
                            </div>
                            <div class="col-9 col-md-2" style="margin-bottom: 1rem;">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="datepicker3">
                                </div>
                            </div>
                            <div class="col-3 col-md-1" style="margin-bottom: 1rem;">
                                <div class="form-group">
                                    <span>Fin:</span>
                                </div>
                            </div>
                            <div class="col-9 col-md-2" style="margin-bottom: 1rem;">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="datepicker4">
                                </div>
                            </div>
                            <div class="col-12 col-md-2" style="text-align: -webkit-center">
                                <div class="form-group">
                                    <h5><button class="btn btn-success btnDorado" id="buscarDoc">Descargar</button></h5>
                                </div>
                            </div>                      
                            <div class="col-1 col-md-1" style="text-align: -webkit-center">
                                <input class="form-check-input checkVerde" checked type="checkbox" value="" id="flexCheckDefault2">
                            </div>
                            <div class="col-11 col-md-3" style="text-align: -webkit-center">
                                <div class="form-group">
                                    <h5>Visualizar equipos de mi equipo</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>    
    </section>

    <section class="section dashboard">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 26px;">Carga masiva de vacaciones</h5>
                        <div class="row">
                            <div class="col-12 col-md-2" style="text-align: -webkit-center">
                                <div class="form-group">
                                    <h5><button class="btn btn-success btnDorado" id="buscarDoc" >Cargar</button></h5>
                                </div>
                            </div>                      
                            <div class="col-1 col-md-1" style="text-align: -webkit-center">
                                <input class="form-check-input checkVerde" checked type="checkbox" value="" id="flexCheckDefault2">
                            </div>
                            <div class="col-11 col-md-8">
                                <div class="form-group">
                                    <h5>Aprobar automáticamente las vacaciones que inician el siguiente mes</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>    
    </section>
  
    </main><!-- End #main -->
  
  </x-layouts.app>
  
    <!-- Template Main JS File -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
    $(document).ready(function(){
        $('.js-example-basic-single').select2({
            theme: "classic"
        });
    });
    </script>
