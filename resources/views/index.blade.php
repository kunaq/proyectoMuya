<x-layouts.index>

<main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container" style="max-width: 1028px;">
        <div class="card login-card">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <img src="assets/img/GM-BLANCO.png" style="background-color: #a18347;" alt="login" class="login-card-img">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <div class="brand-wrapper">
                            <div class="row">
                                <img src="assets/img/LOGO_GRUPO_MUYA.png" alt="logo" class="logo d-sm-block d-md-none">
                            </div>
                        </div>
                        <div class="row" style="height: 3rem;">
                            <div class="form-group col-md-1 offset-md-8" style="text-align: end;">
                                <select id="id_select2_example" style="width: 100px;" data-minimum-results-for-search="Infinity">
                                    <option data-img_src="assets/img/Peru_bandera.png"></option>
                                    <option data-img_src="assets/img/Ecuador_bandera.png"></option>   
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="dni" class="sr-only">Número de DNI</label>
                            <input type="text" name="dni" id="dni" class="form-control" autocomplete="false" placeholder="Número del DNI">
                        </div>
                        <div class="form-group mb-4">
                            <label for="password" class="sr-only">Clave</label>
                            <div class="input-group" id="show_hide_password">
                                <input type="password" name="password" id="password" autocomplete="false"  class="form-control" placeholder="Clave">
                                <div class="input-group-append">
                                    <span class="input-group-text"><a class="hidePass" href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a></span>                                  
                                </div>
                            </div>
                        </div>
                        <div class="row form-group mb-4">
                            <div class="col-md-6">
                                <a href="#" style="text-decoration: underline;">Olvidé mi contraseña</a>
                            </div>
                            <div class="col-md-6">
                                <div id="message2">
                                    <span style="color: red;">Usuario o clave inválido.</span>
                                </div>
                                <div id="message3">
                                    <span style="color: red;">El usuario se encuentra bloqueado temporalmente por exceso de intentos fallidos.</span>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn btn-block login-btn mb-4" id="loginBtn">Ingresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

</x-layouts.index>
  
{{-- js llamada externa --}}

<script src="{{asset('assets/js/index.js')}}"></script>

