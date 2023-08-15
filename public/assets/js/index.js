// ---------------Script para mostrar banderas

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

// ---------------Fin script para mostrar banderas

// ---------------Ocultar/mostrar contraseña

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

// ---------------Fin ocultar/mostrar contraseña

document.getElementById("password")
.addEventListener("keyup", function(e) {
    if (e.code === 'Enter') {
        document.getElementById("loginBtn").click();
    }
});

$("#loginBtn").click(function(){
    // Hacer la solicitud AJAX utilizando baseUrl y apiKey
    var user = document.getElementById("dni").value;
    var passw = document.getElementById("password").value;
    passw = passw.toUpperCase();

    //--------------Login--------------
    $.ajax({
        url: 'api/login', 
        method: "GET",
        dataType: 'json',
        data:{'usuario':user,'password':passw},
        crossDomain: true,
        success: function(respuesta){
            console.log('flg_cargo',respuesta.data.response.flg_cargo_sin_acceso);
            var bloqueo = respuesta.data.response.flg_bloqueado;
            if(respuesta.data.mensaje == 'Contraseña incorrecta'){
                document.getElementById('message2').style.display = "block";
                document.getElementById('message3').style.display = "none";
                document.getElementById('message4').style.display = "none";
            }else if(respuesta.data.response.flg_cargo_sin_acceso == 'SI'){
                document.getElementById('message2').style.display = "none";
                document.getElementById('message3').style.display = "none";
                document.getElementById('message4').style.display = "block";
            }else if(respuesta.data.response.flg_bloqueado == 'SI'){
                document.getElementById('message3').style.display = "block";
                document.getElementById('message4').style.display = "none";
            }else if(respuesta.data.mensaje == 'OK' && (bloqueo == 'NO'|| bloqueo == null) && respuesta.data.response.flg_cargo_sin_acceso == 'NO'){
                document.getElementById('message2').style.display = "none";
                document.getElementById('message3').style.display = "none";
                document.getElementById('message4').style.display = "none";
                $.ajax({
                    url: 'api/ListarVentana', 
                    method: "GET",
                    dataType: 'json',
                    data:{'codTra':respuesta.data.response.cod_usuario},
                    crossDomain: true,
                    success: function(respu){
                        //console.log(passw);
                       
                    },//success
                    error(e){
                        console.log(e);
                        if(respuesta.data.response.flg_expirado == 'SI'){
                            Swal.fire({
                                icon: 'warning',
                                text: 'Su contraseña ha expirado, modifiquela en la siguiente ventana.',
                                confirmButtonText: 'Continuar',
                                confirmButtonColor: '#a18347',
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = "primerCambio";
                                }
                            })
                        }else if (passw == 'KUNAQ2024' || respuesta.data.response.flg_recuperar == 'SI') {
                            window.location.href = "primerCambio";
                        }else{
                            window.location.href = "home";
                        }
                    }//error
                });
            }
        },//success
        error(e){
            console.log(e);
        }//error
            
    });//ajax
    
});

// Obtener el elemento del campo de entrada
var dniInput = document.getElementById('dniOlvideC');
var dniInputHelp = document.getElementById('helpId');

// Agregar un evento de escucha para el evento "input"
dniInput.addEventListener('input', function() {
  // Obtener el valor ingresado en el campo de entrada
  var dniValue = dniInput.value;
  
  // Expresión regular para validar el documento de identidad
  var dniRegex = /^[0-9]{8,9}$/;

  // Verificar si el valor cumple con la expresión regular
  if (!dniRegex.test(dniValue)) {
    // Mostrar un mensaje de error o realizar alguna acción adicional
    // Por ejemplo, puedes agregar una clase CSS para resaltar el campo de entrada en rojo
    
    document.getElementById('enviaCorreo').setAttribute('disabled', true);
    // dniInput.classList.remove('is-valid');
    // dniInput.classList.add('is-invalid');
    // dniInputHelp.classList.remove('valid-feedback');
    // dniInputHelp.classList.add('invalid-feedback');
    dniInputHelp.removeAttribute('hidden');
  } else {
    // El valor es válido, puedes realizar alguna acción adicional si es necesario
    // Por ejemplo, puedes eliminar la clase CSS para resaltar el campo de entrada en rojo
    document.getElementById('enviaCorreo').removeAttribute('disabled');
    // dniInput.classList.remove('is-invalid');
    // dniInput.classList.add('is-valid');
    // dniInputHelp.classList.remove('invalid-feedback');
    // dniInputHelp.classList.add('valid-feedback');
    dniInputHelp.setAttribute('hidden','true');
  }
});

var btnEnvia = document.getElementById('enviaCorreo');
btnEnvia.addEventListener("click", function() {
    var user = document.getElementById("dniOlvideC").value;
    var form = document.getElementById("formOlvideC");
    form.addEventListener("submit", function(event) {
        // Detener el envío del formulario
        event.preventDefault();
    });

    $.ajax({
        url: 'lista/ObtenerCorreo', 
        method: "GET",
        dataType: 'json',
        data:{'dscDni':user},
        crossDomain: true,
        success: function(respuesta){
            console.log('respuesta',respuesta['response']['dsc_mail_personal']);
            var correo = respuesta['response']['dsc_mail_personal'];
            if (respuesta['response']['cod_trabajador'] != null) {
            
                if (correo != '') {
                    $.ajax({
                        url: 'api/enviarCorreo', 
                        method: "post",
                        crossDomain: true,
                        dataType: 'json',
                        data:{'destinatario':respuesta['response']['dsc_trabajador'],'correoPersonal':correo,'correoCorp':'','fchNotif':'','fchLimite':'','asunto':'Recuperación de contraseña','solicitante':'','actividad':user,'codigoMensaje':'olvido'},
                        success: function(respuesta){
                            console.log(respuesta);
                            location.reload();
                        },error(jqXHR, textStatus, errorThrown) {
                            //console.log(jqXHR.responseJSON.message);
                             // Verificar si el error es específico de código 550
                            var errorMessage = jqXHR.responseJSON.message;
                            var emailPattern = /([a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,})/;
                            var matches = errorMessage.match(emailPattern);
          
                            if (matches && matches.length > 1) {
                              var email = matches[1];
                              var customErrorMessage = "El correo no pudo ser entregado a " + email + ", la cuenta no existe, o ha sido bloqueada.";
                              //console.log(customErrorMessage);
          
                              Swal.fire({
                                icon: 'warning',
                                text: customErrorMessage,
                                confirmButtonText: 'Continuar',
                                confirmButtonColor: '#a18347',
                              });
                            } else {
                              console.log(jqXHR.responseJSON.message);
          
                              Swal.fire({
                                icon: 'warning',
                                text: 'Ha ocurrido un error. Por favor, inténtelo nuevamente.',
                                confirmButtonText: 'Continuar',
                                confirmButtonColor: '#a18347',
                              });
                            }
                          }//error
                    });//ajax
                }else{
                    Swal.fire({
                        icon: 'warning',
                        text: 'No tiene configurado un correo electrónico. Por favor contacte con su area de recursos humanos.',
                        confirmButtonText: 'Continuar',
                        confirmButtonColor: '#a18347',
                    }).then((result) => {
                        if (result.isConfirmed) {
                           location.reload();
                        }
                    })
                }//else correo
            }else{
                Swal.fire({
                    icon: 'warning',
                    text: 'Su DNI no esta registrado como trabajador.',
                    confirmButtonText: 'Continuar',
                    confirmButtonColor: '#a18347',
                }).then((result) => {
                    if (result.isConfirmed) {
                       location.reload();
                    }
                })
            }//else no existe trabajador
           
        },//success
        error(e){
            console.log(e);
        }//error
    });       
});

// // Obtén el formulario
// var form = document.getElementById('formOlvideC');

// // Agrega un evento de escucha para el evento "submit" del formulario
// form.addEventListener('submit', function(event) {
//   // Obtén el valor del campo de entrada del DNI
//   var dniValue = document.getElementById('dniOlvideC').value;
  
//   // Expresión regular para validar el DNI (solo números de 8 o 9 dígitos)
//   var dniRegex = /^[0-9]{8,9}$/;

//   // Verifica si el DNI cumple con la expresión regular
//   if (!dniRegex.test(dniValue)) {
//     // El DNI no es válido, cancela el envío del formulario
//     event.preventDefault();

//     // Realiza alguna acción adicional si es necesario, como mostrar un mensaje de error
//     // alert('Por favor, introduce un DNI válido.');
//   }
// });
