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
            console.log('flg_bloq',respuesta.data.response.flg_bloqueado);
            var bloqueo = respuesta.data.response.flg_bloqueado;
            if(respuesta.data.mensaje == 'Contraseña incorrecta'){
                document.getElementById('message2').style.display = "block";
                document.getElementById('message3').style.display = "none";
            }else if(respuesta.data.response.flg_bloqueado == 'SI'){
                document.getElementById('message3').style.display = "block";
            }else if(respuesta.data.mensaje == 'OK' && (bloqueo == 'NO'|| bloqueo == null)){
                document.getElementById('message2').style.display = "none";
                document.getElementById('message3').style.display = "none";
                if (passw == 'KUNAQ2024' || passw == 'GMUYA'+user) {
                    window.location.href = "primerCambio";
                }else{
                    window.location.href = "home";
                }
            }
        },//success
        error(e){
            console.log(e);
        }//error
            
    });//ajax
    
    // if(passw.value == '00000'){
    //     document.getElementById('message2').style.display = "block";
    // }else{
    //     document.getElementById('message2').style.display = "none";
    //     window.location.href = "home";
    // }
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
    
    document.getElementById('aceptaFirma').setAttribute('disabled', true);
    // dniInput.classList.remove('is-valid');
    // dniInput.classList.add('is-invalid');
    // dniInputHelp.classList.remove('valid-feedback');
    // dniInputHelp.classList.add('invalid-feedback');
    dniInputHelp.removeAttribute('hidden');
  } else {
    // El valor es válido, puedes realizar alguna acción adicional si es necesario
    // Por ejemplo, puedes eliminar la clase CSS para resaltar el campo de entrada en rojo
    document.getElementById('aceptaFirma').removeAttribute('disabled');
    // dniInput.classList.remove('is-invalid');
    // dniInput.classList.add('is-valid');
    // dniInputHelp.classList.remove('invalid-feedback');
    // dniInputHelp.classList.add('valid-feedback');
    dniInputHelp.setAttribute('hidden','true');
  }
});

var btnEnvia = document.getElementById('aceptaFirma');
btnBuscarLista.addEventListener("click", function() {
    var inicio = document.getElementById('annoIni').value;
    var fin = document.getElementById('annoFin').value;
    console.log('annoI',inicio)
    muestraListadoSolicitudes(inicio,fin);
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
