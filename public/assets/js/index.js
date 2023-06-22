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

    //--------------Login--------------
    $.ajax({
        url: 'api/login', 
        method: "GET",
        dataType: 'json',
        data:{'usuario':user,'password':passw},
        crossDomain: true,
        success: function(respuesta){
            console.log(respuesta.data.mensaje);
            if(respuesta.data.mensaje != 'OK'){
                document.getElementById('message2').style.display = "block";
            }else{
                document.getElementById('message2').style.display = "none";
                //window.location.href = "home";
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
