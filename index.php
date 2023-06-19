<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Methods: GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Intranet</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/8.5.0/build.css" integrity="sha512-oXqkIy/+iqrHrpoTwFkSLZJpNwoYn9e77QtCNzBi+Jb6uJgTtcdHVy0C+nEpeUfC3fxSbydPxLG+ndikNVvrdQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.css">

</head>

<body>
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
                            <div id="message2" style="margin-top: -1.5rem;">
                                <span style="color: red;">Usuario o clave invalido.</span>
                            </div>
                            <div class="form-group">
                                <label for="dni" class="sr-only">Número de DNI</label>
                                <input type="text" name="dni" id="dni" class="form-control"
                                    placeholder="Número del DNI">
                            </div>
                            <div class="form-group mb-4">
                                <label for="password" class="sr-only">Clave</label>
                                <div class="input-group" id="show_hide_password">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Clave">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><a class="hidePass" href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a></span>                                  
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <a href="#" style="text-decoration: underline;">Olvidé mi contraseña</a>
                            </div>
                            <a href="#" class="btn btn-block login-btn mb-4" id="loginBtn">Ingresar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/b9bdbd120a.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.js"></script>

    <script type="text/javascript">

        function custom_template(obj){
            var data = $(obj.element).data();
            var text = $(obj.element).text();
            if(data && data['img_src']){
                img_src = data['img_src'];
                template = $("<div><img src=\"" + img_src + "\" style=\"width:100%;height:50px;\"/><p style=\"font-weight: 500;font-size:10pt;text-align:center;\">" + text + "</p></div>");
                return template;
            }
        }
        var options = {
            'templateSelection': custom_template,
            'templateResult': custom_template,
        }
        $('#id_select2_example').select2(options);
        $('.select2-container--default .select2-selection--single').css({'height': '52px'});


        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if($('#show_hide_password input').attr("type") == "text"){
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass( "fa-eye-slash" );
                    $('#show_hide_password i').removeClass( "fa-eye" );
                }else if($('#show_hide_password input').attr("type") == "password"){
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass( "fa-eye-slash" );
                    $('#show_hide_password i').addClass( "fa-eye" );
                }
            });
        });

        $("#loginBtn").click(function(){
            $.ajax({
                url:"https://webapilogin.azurewebsites.net/api/Logueo/LogueoWebPlanilla/20547386176/46879360/PASSWORD",
                method: "GET",
                crossDomain: true,
                dataType: 'json',
                data: {'dsc_ruc_empresa':'20547386176','dsc_documento':'46879360','dsc_clave':'PASSWORD'},
                success: function(respuesta){
                    console.log(respuesta);
                }//success
            });//ajax
            
            var passw = document.getElementById("password");

            if(passw.value == '00000'){
                document.getElementById('message2').style.display = "block";
            }else{
                document.getElementById('message2').style.display = "none";
               // window.location.href = "password.html";
            }
        });

        if (window.sessionStorage) {
            sessionStorage.setItem("nombre", "Gonzalo");
            var nombre = sessionStorage.getItem("nombre");
            //sessionStorage.removeItem("nombre");
        }
        else{
            throw new Error('Tu Browser no soporta sessionStorage!');
        }
    </script>
</body>



</html>
