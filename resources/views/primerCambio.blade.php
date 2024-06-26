<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intranet - cambioContrasena</title>
    <meta name="CambioContrasena" content="Cambio de contrasena meta description" />

    <!-- Vendor CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.13.1/af-2.5.1/b-2.3.3/b-html5-2.3.3/b-print-2.3.3/cr-1.6.1/date-1.2.0/fc-4.2.1/r-2.4.0/rr-1.3.1/sc-2.0.7/sp-2.1.0/sl-1.5.0/sr-1.2.0/datatables.min.css" />
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/login.css" rel="stylesheet">

</head>

<body>

    <x-layouts.nav />

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
                            <form action="" id="myForm">
                                <h5 class="card-title">Cambiar contraseña</h5>

                                {{-- <div class="row">
                  <div class="col-md-2 offset-md-3">
                    <p>Actual</p>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-group">
                        <div class="input-group" id="show_hide_password1_1">
                          <input type="password" required name="actualpass" id="actualpass" class="form-control" required>
                          <div class="input-group-append">
                              <span class="input-group-text btnCamPass"><a class="hidePass" href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a></span>                                  
                          </div>
                        </div>
                        <div id="msgPassAct" style="display: none">
                          <span style="color: red;">Debe ingresar su antigua contraseña</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <br> --}}
                                <div class="row">
                                    <div class="col-md-2 offset-md-3">
                                        <p>Nueva</p>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group" id="show_hide_password2_1">
                                                <input type="password" name="newpassword" id="newpassword"
                                                    class="form-control" required>
                                                <div class="input-group-append">
                                                    <span class="input-group-text btnCamPass"><a class="hidePass"
                                                            href=""><i class="fa fa-eye-slash"
                                                                aria-hidden="true"></i></a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6 offset-md-5">
                                        <div id="message">
                                            <p style="text-align: justify;"> Mínimo<span id="letter" class="invalid">
                                                    una letra minúscula</span>,<span id="capital" class="invalid"> una
                                                    mayúscula</span> y <span id="number" class="invalid">un
                                                    número</span>. <span id="length" class="invalid">Mínimo 8
                                                    caracteres. </span><span id="validoTodo" class="invalid"></span>
                                        </div>
                                        </p>
                                    </div>
                                </div>
                                <br>
                                <div class="row" style="height: 3rem;">
                                    <div class="col-md-4 offset-md-1">
                                        <p style="text-align: center;">Vuelva a escribir la contraseña nueva</p>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group" id="show_hide_password3_1">
                                                <!-- <input type="text" name="nuevapass2" id="nuevapass2" class="form-control" required> -->
                                                <input type="password" name="nuevapass2" id="nuevapass2"
                                                    class="form-control" required>
                                                <div class="input-group-append">
                                                    <span class="input-group-text btnCamPass"><a class="hidePass"
                                                            href=""><i class="fa fa-eye-slash"
                                                                aria-hidden="true"></i></a></span>
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
                                        <button class="btn btn-success" id="envia1raVez" disabled="disabled"
                                            type="submit" style="background-color: #155450;">Cambiar
                                            contraseña</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <x-layouts.footer />

    <!-- Vendor JS Files -->

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.6/index.global.min.js"></script>

    <script src="https://use.fontawesome.com/b9bdbd120a.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://npmcdn.com/flatpickr@4.6.13/dist/l10n/es.js"></script>
    <!-- Incluye el archivo de script del complemento rangePlugin -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/plugins/rangePlugin.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>


    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            ancla = document.getElementById('anclaCambContr');
            ancla.style.display = "none";
            $("#anclaLogo").attr("href", "#");
            $("#anclaLogoMobil").attr("href", "#");

            $("#show_hide_password1_1 a").on("click", function(event) {
                event.preventDefault();
                if ($("#show_hide_password1_1 input").attr("type") == "text") {
                    $("#show_hide_password1_1 input").attr("type", "password");
                    $("#show_hide_password1_1 i").addClass("fa-eye-slash");
                    $("#show_hide_password1_1 i").removeClass("fa-eye");
                } else if ($("#show_hide_password1_1 input").attr("type") == "password") {
                    $("#show_hide_password1_1 input").attr("type", "text");
                    $("#show_hide_password1_1 i").removeClass("fa-eye-slash");
                    $("#show_hide_password1_1 i").addClass("fa-eye");
                }
            });

            $("#show_hide_password2_1 a").on("click", function(event) {
                event.preventDefault();
                if ($("#show_hide_password2_1 input").attr("type") == "text") {
                    $("#show_hide_password2_1 input").attr("type", "password");
                    $("#show_hide_password2_1 i").addClass("fa-eye-slash");
                    $("#show_hide_password2_1 i").removeClass("fa-eye");
                } else if ($("#show_hide_password2_1 input").attr("type") == "password") {
                    $("#show_hide_password2_1 input").attr("type", "text");
                    $("#show_hide_password2_1 i").removeClass("fa-eye-slash");
                    $("#show_hide_password2_1 i").addClass("fa-eye");
                }
            });

            $("#show_hide_password3_1 a").on("click", function(event) {
                event.preventDefault();
                if ($("#show_hide_password3_1 input").attr("type") == "text") {
                    $("#show_hide_password3_1 input").attr("type", "password");
                    $("#show_hide_password3_1 i").addClass("fa-eye-slash");
                    $("#show_hide_password3_1 i").removeClass("fa-eye");
                } else if ($("#show_hide_password3_1 input").attr("type") == "password") {
                    $("#show_hide_password3_1 input").attr("type", "text");
                    $("#show_hide_password3_1 i").removeClass("fa-eye-slash");
                    $("#show_hide_password3_1 i").addClass("fa-eye");
                }
            });
        });

        var myInput = document.getElementById("newpassword");
        var letter = document.getElementById("letter");
        var capital = document.getElementById("capital");
        var number = document.getElementById("number");
        var length = document.getElementById("length");
        var envia = document.getElementById("envia1raVez");
        var verPass = document.getElementById("nuevapass2");
        var mensaje = document.getElementById("message2");
        // var passAct = document.getElementById("actualpass");

        myInput.onkeyup = function() {
            // Validate lowercase letters
            var lowerCaseLetters = /[a-z]/g;
            var todo = 0;
            if (myInput.value.match(lowerCaseLetters)) {
                letter.classList.remove("invalid");
                letter.classList.add("valid");
                todo++;
            } else {
                letter.classList.remove("valid");
                letter.classList.add("invalid");
                todo--;
            }

            // Validate capital letters
            var upperCaseLetters = /[A-Z]/g;
            if (myInput.value.match(upperCaseLetters)) {
                capital.classList.remove("invalid");
                capital.classList.add("valid");
                todo++;
            } else {
                capital.classList.remove("valid");
                capital.classList.add("invalid");
                todo--;
            }

            // Validate numbers
            var numbers = /[0-9]/g;
            if (myInput.value.match(numbers)) {
                number.classList.remove("invalid");
                number.classList.add("valid");
                todo++;
            } else {
                number.classList.remove("valid");
                number.classList.add("invalid");
                todo--;
            }

            // Validate length
            if (myInput.value.length >= 8) {
                length.classList.remove("invalid");
                length.classList.add("valid");
                todo++;
            } else {
                length.classList.remove("valid");
                length.classList.add("invalid");
                todo--;
            }
            if (todo == 4) {
                validoTodo.classList.remove("invalid");
                validoTodo.classList.add("validTodo");
            } else {
                validoTodo.classList.remove("validTodo");
                validoTodo.classList.add("invalid");
                envia.disabled = true;
            }
        };

        verPass.onkeyup = function() {
            //console.log(mensaje.style.display);
            if (validoTodo.classList == "validTodo" && myInput.value == verPass.value) {
                mensaje.style.display = "none";
                envia.disabled = false;
            } else if (verPass.value == "") {
                mensaje.style.display = "none";
            } else {
                mensaje.style.display = "block";
                envia.disabled = true;
            }
        };


        envia.addEventListener("click", function() {
            var form = document.getElementById("myForm");
            form.addEventListener("submit", function(event) {
                // Detener el envío del formulario
                event.preventDefault();
            });
            var dsc_clave = verPass.value;

            // if (passAct.value.trim() != 0) {

            // }

            $.ajax({
                url: 'actualizaContrasenna',
                method: "PUT",
                crossDomain: true,
                dataType: 'json',
                data: {
                    'dsc_clave': dsc_clave
                },
                success: function(respuesta) {
                    console.log(respuesta);
                    Swal.fire({
                        icon: 'success',
                        text: 'Se ha registrado su nueva clave con éxito',
                        confirmButtonText: 'Continuar',
                        confirmButtonColor: '#a18347',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "home";
                        }
                    })
                }, //success
                error(e) {
                    //console.log(e.responseText);
                    if (e.responseText == '{"mensaje":"Actualizado"}Actualizado') {
                        Swal.fire({
                            icon: 'success',
                            text: 'Se ha registrado su nueva clave con éxito',
                            confirmButtonText: 'Continuar',
                            confirmButtonColor: '#a18347',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = "home";
                            }
                        })
                    } else {
                        Swal.fire({
                            icon: 'warning',
                            text: 'Ha ocurrido un error intentelo nuevamente.',
                            confirmButtonText: 'Continuar',
                            confirmButtonColor: '#a18347',
                        })
                    }
                } //error
            }); //ajax
        });
    </script>


</body>

</html>
