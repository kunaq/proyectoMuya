
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
    span.select2.select2-container.select2-container--classic{
        width: 100% !important;
    }
</style>
<x-layouts.app title="cambioContrasena" meta-description="Cambio de contrasena meta description">

    <main id="main" class="main">
      <div class="pagetitle">
          <h1>Delegación</h1>
          <nav>
              <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
              <li class="breadcrumb-item active">Configuración</li>
              <li class="breadcrumb-item active">Delegación</li>
              </ol>
          </nav>
      </div><!-- End Page Title -->
  
      <section class="section dashboard">
        <div class="row">
          <div class="col-md-10 offset-md-1">
            <div class="card">
                <div class="card-body"> 
                    <h5 >&nbsp;</h5>
                    <div class="row">
                      <div class="col-md-3">
                        <p class="titulo-tarjetaConfig" style="color: #a18347;"><b>Buscar</b></p>
                      </div>
                      <div class="col-md-8">
                        <div class="form-group">
                            <select name="tipoDoc" id="tipoDoc" class="form-control selectForm js-example-basic-single">
                                <option value="0" selected>Escriba el nombre del trabajador</option>
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
                    <br>
                    <div class="row">
                      <div class="col-md-8">
                        <div id="message">
                         <p style="text-align: justify;">Delegación de permisos de aprobación de vacaciones por vacaciones y/o licencia</p>
                      </div>
                    </div>
                    <br> <br>
                    <div class="row">
                        <div class="col-md-8">
                            <div id="message">
                            <p class="titulo-tarjetaConfig" style="color: #a18347;"><b>Delegaciones:</b></p>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row" style="height: 3rem;">
                      <div class="col-10 col-md-6 offset-md-2">
                        <p>Delegar los permisos de aprobación de vacaciones</p>
                      </div>
                      <div class=" col-2 col-md-1">
                        <div class="form-group">
                            <input class="form-check-input checkVerde" type="checkbox" value="" id="flexCheckDefault2">
                        </div>
                      </div>
                    </div>
                    <br><br>
                    <div class="row" style="padding-bottom: 1rem;">
                        <div class="col-12 col-md-6 offset-md-2">
                          <p>Trabajador quien aprobará sus vacaciones temporalmente</p>
                        </div>
                        <br>
                        <div class=" col-12 col-md-3">
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
                    <div class="row">
                      <div class="col-12 col-md-4 offset-md-4" style="text-align: -webkit-center;">
                        <button class="btn btn-success" id="" type="submit" style="background-color: #155450;">Aceptar</button>
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
    <script src="{{asset('assets/js/delegacion.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
    $(document).ready(function(){
        $('.js-example-basic-single').select2({
            theme: "classic"
        });
    });
    </script>
