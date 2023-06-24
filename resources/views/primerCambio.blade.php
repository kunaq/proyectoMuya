<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intranet - cambioContrasena</title>
    <meta name="description" content="Cambio de contrasena meta description" />

      <!-- Vendor CSS Files -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.13.1/af-2.5.1/b-2.3.3/b-html5-2.3.3/b-print-2.3.3/cr-1.6.1/date-1.2.0/fc-4.2.1/r-2.4.0/rr-1.3.1/sc-2.0.7/sp-2.1.0/sl-1.5.0/sr-1.2.0/datatables.min.css" />
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/login.css" rel="stylesheet">

</head>
<body>

<x-layouts.nav/>

  <main id="main" class="main">
    <div class="pagetitle">
        <h1>Cambio de contraseña</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item">Inicio</li>
            <li class="breadcrumb-item active">Configuración</li>
            <li class="breadcrumb-item active">Cambiar de contraseña</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <div class="card">
              <div class="card-body">
                  <h5 class="card-title">Cambiar contraseña</h5>

                  <div class="row">
                    <div class="col-md-2 offset-md-3">
                      <p>Actual</p>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="form-group">
                          <div class="input-group" id="show_hide_password1">
                            <input type="password" name="actualpass" id="actualpass" class="form-control" required>
                            <div class="input-group-append">
                                <span class="input-group-text btnCamPass"><a class="hidePass" href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a></span>                                  
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-2 offset-md-3">
                      <p>Nueva</p>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-group" id="show_hide_password2">
                          <input type="password" name="newpassword" id="newpassword" class="form-control" required>
                          <div class="input-group-append">
                              <span class="input-group-text btnCamPass"><a class="hidePass" href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a></span>                                  
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-6 offset-md-5">
                      <div id="message">
                       <p style="text-align: justify;"> Mínimo<span id="letter" class="invalid"> una letra minúscula</span>,<span id="capital" class="invalid"> una mayúscula</span> y <span id="number" class="invalid">un número</span>. <span id="length" class="invalid">Mínimo 8 caracteres. </span><span id="validoTodo" class="invalid"></span>
                      </div></p>
                    </div>
                  </div>
                  <br>
                  <div class="row" style="height: 3rem;">
                    <div class="col-md-4 offset-md-1">
                      <p style="text-align: center;">Vuelva a escribir la contraseña nueva</p>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <div class="input-group" id="show_hide_password3">
                            <!-- <input type="text" name="nuevapass2" id="nuevapass2" class="form-control" required> -->
                            <input type="password" name="nuevapass2" id="nuevapass2" class="form-control" required>
                            <div class="input-group-append">
                                <span class="input-group-text btnCamPass"><a class="hidePass" href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a></span>                                  
                            </div>
                          </div>
                        <div id="message2">
                          <span style="color: red;">Las contraseñas no coinciden</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br><br>
                  <div class="row">
                    <div class="col-md-4 offset-md-4">
                      <button class="btn btn-success" id="envia1raVez" disabled="disabled" type="submit" style="background-color: #155450;">Cambiar contraseña</button>
                    </div>
                  </div>
              </div>
          </div>
        </div>  
      </div>  
    </section>

  </main><!-- End #main -->

  <x-layouts.footer/>

  <!-- Vendor JS Files -->
  
  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.6/index.global.min.js"></script>
  
  <script src="https://use.fontawesome.com/b9bdbd120a.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script src="https://npmcdn.com/flatpickr@4.6.13/dist/l10n/es.js"></script>
  <script type="text/javascript" src="md5.min.js"></script>
  <!-- Incluye el archivo de script del complemento rangePlugin -->
  <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/plugins/rangePlugin.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>


  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>
  <script src="{{asset('assets/js/cambioContrasena.js')}}"></script>
  
    
</body>
</html>
