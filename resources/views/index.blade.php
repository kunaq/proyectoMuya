<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<x-layouts.index>
<link rel="stylesheet" href="assets/css/login.css">

    <main class="mainIndex">
        <div class="container">
            <div class="card login-card">
                <div class="row">
                    <div class="col-md-6">
                        <img src="assets/img/GM-BLANCO.png" alt="login"
                            class="login-card-img">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <div class="brand-wrapper">
                                <div class="row">
                                    <img class="logo" src="assets/img/LOGO_GRUPO_MUYA.png" alt="logo">
                                </div>
                                <h2 class="inicioSession">Inicio de Sesión</h2>
                            </div>
                            <div class="row banderas">
                                <div class="form-group">
                                    <select id="id_select2_example" style="width: 100px;"
                                        data-minimum-results-for-search="Infinity">
                                        <option data-img_src="assets/img/Peru_bandera.png"></option>
                                        <option data-img_src="assets/img/Ecuador_bandera.png"></option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="dni" class="sr-only">Número de DNI</label>
                                <input type="text" name="dni" id="dni" class="form-control" autocomplete="false"
                                    placeholder="Número del DNI">
                            </div>
                            <div class="form-group">
                                <label for="password" class="sr-only">Clave</label>
                                <div class="input-group" id="show_hide_password">
                                    <input type="password" name="password" id="password" autocomplete="false"
                                        class="form-control" placeholder="Clave">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><a class="hidePass" href=""><i
                                                    class="fa fa-eye-slash" aria-hidden="true"></i></a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-6">
                                    <a href="#" style="text-decoration: underline;" data-bs-toggle="modal"
                                        data-bs-target="#ModalOlvideC">Olvidé mi contraseña</a>
                                </div>
                                <div class="col-md-6">
                                    <div id="message2">
                                        <span style="color: red;">Usuario o clave inválido.</span>
                                    </div>
                                </div>
                            </div>
                            <div id="message3">
                                <span style="color: red;">El usuario se encuentra bloqueado temporalmente por
                                    exceso de intentos fallidos.</span>
                            </div>
                            <div id="message4">
                                <span style="color: red;">El cargo del usuario no tiene acceso al portal web.</span>
                            </div>
                            <a href="#" class="btn btn-block login-btn" id="loginBtn">Ingresar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- -------------------Modal Olvide contraseña------------------------------- -->

        <div class="modal fade" id="ModalOlvideC" tabindex="-1" aria-labelledby="ModalOlvideCLabel" aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title tarjeta-vaca-foco fs-5" id="ModalOlvideCLabel">Olvidé mi contraseña</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="formOlvideC" action="#" method="get">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="dniOlvideC" class="form-label">Por favor introduzca su DNI</label>
                                <input type="number" class="form-control" @style('max-width:50%; margin-left: 25%;') name="dniOlvideC" id="dniOlvideC" min="0" max="999999999" aria-describedby="helpId" placeholder="" required>
                                <div id="helpId" class="form-text" @style('max-width:50%; margin-left: 25%;') hidden>DNI formato inválido</div>
                            </div>
                        </div>
                        <div class="modal-footer"><button type="submit" id="enviaCorreo" class="btn btn-secondary"
                                    data-bs-dismiss="modal" disabled="true"> Enviar Correo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </main>


</x-layouts.index>

{{-- js llamada externa --}}
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>

<script src="{{asset('assets/js/index.js')}}"></script>