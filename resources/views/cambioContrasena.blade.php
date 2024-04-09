<x-layouts.app title="cambioContrasena" meta-description="Cambio de contrasena meta description">

  <main id="main" class="main">
    <div class="pagetitle">
        <h1>Cambio de contraseña</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
            <li class="breadcrumb-item active">Configuración</li>
            <li class="breadcrumb-item active">Cambiar de contraseña</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <div class="card">
            <form action="#" id="formCambioPass">
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
                       <p style="text-align: justify;"> Mínimo<span id="letter" class="invalid"> una letra minúscula</span>,<span id="capital" class="invalid"> una mayúscula</span> y <span id="number" class="invalid">un número</span>. <span id="length" class="invalid">Mínimo 8 caracteres. </span><span id="charEsp" class="valid">Tu contraseña NO debe incluir caracteres especiales: !#$%&*. </span><span id="validoTodo" class="invalid"></span>
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
                      <button class="btn btn-success" id="envia" disabled="disabled" type="submit" style="background-color: #155450;">Cambiar contraseña</button>
                    </div>
                  </div>
              </div>
            </form>
          </div>
        </div>  
      </div>  
    </section>

  </main><!-- End #main -->

</x-layouts.app>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/cambioContrasena.js')}}"></script>
  
  <script type="text/javascript">
  // Iniciar el temporizador cuando la página se carga
    window.onload = function() {
      iniciarTemporizador();
    }
  </script>