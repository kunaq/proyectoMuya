$(document).ready(function () {
    $("#show_hide_password1 a").on("click", function (event) {
        event.preventDefault();
        if ($("#show_hide_password1 input").attr("type") == "text") {
            $("#show_hide_password1 input").attr("type", "password");
            $("#show_hide_password1 i").addClass("fa-eye-slash");
            $("#show_hide_password1 i").removeClass("fa-eye");
        } else if ($("#show_hide_password1 input").attr("type") == "password") {
            $("#show_hide_password1 input").attr("type", "text");
            $("#show_hide_password1 i").removeClass("fa-eye-slash");
            $("#show_hide_password1 i").addClass("fa-eye");
        }
    });

    $("#show_hide_password2 a").on("click", function (event) {
        event.preventDefault();
        if ($("#show_hide_password2 input").attr("type") == "text") {
            $("#show_hide_password2 input").attr("type", "password");
            $("#show_hide_password2 i").addClass("fa-eye-slash");
            $("#show_hide_password2 i").removeClass("fa-eye");
        } else if ($("#show_hide_password2 input").attr("type") == "password") {
            $("#show_hide_password2 input").attr("type", "text");
            $("#show_hide_password2 i").removeClass("fa-eye-slash");
            $("#show_hide_password2 i").addClass("fa-eye");
        }
    });

    $("#show_hide_password3 a").on("click", function (event) {
        event.preventDefault();
        if ($("#show_hide_password3 input").attr("type") == "text") {
            $("#show_hide_password3 input").attr("type", "password");
            $("#show_hide_password3 i").addClass("fa-eye-slash");
            $("#show_hide_password3 i").removeClass("fa-eye");
        } else if ($("#show_hide_password3 input").attr("type") == "password") {
            $("#show_hide_password3 input").attr("type", "text");
            $("#show_hide_password3 i").removeClass("fa-eye-slash");
            $("#show_hide_password3 i").addClass("fa-eye");
        }
    });
});

var myInput = document.getElementById("newpassword");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");
var charEsp = document.getElementById("charEsp");
var envia = document.getElementById("envia");
var verPass = document.getElementById("nuevapass2");
var mensaje = document.getElementById("message2");
var passAct = document.getElementById("actualpass");

myInput.onkeyup = function () {
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

    // Validate special characters
    var specialChars = /[!@#$%^&*(),.?":{}|<>\-_+¡¿Ññ]/g;

    if (myInput.value.match(specialChars)) {    
        charEsp.classList.remove("valid");
        charEsp.classList.add("invalid");
        todo--;
    } else {
        charEsp.classList.remove("invalid");
        charEsp.classList.add("valid");
        todo++;
    }

    if (todo == 5) {
        validoTodo.classList.remove("invalid");
        validoTodo.classList.add("validTodo");
    } else {
        validoTodo.classList.remove("validTodo");
        validoTodo.classList.add("invalid");
        envia.disabled = true;
    }
};

verPass.onkeyup = function () {
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
    var form = document.getElementById("formCambioPass");
    form.addEventListener("submit", function(event) {
      // Detener el envío del formulario
        event.preventDefault();
    });
    var dsc_clave = verPass.value;
    var encriptado = (CryptoJS.MD5(passAct.value)).toString();
    if (encriptado != guardado) {
        passAct.focus();
        Swal.fire({
            icon: 'warning',
            text: 'La contraseña actual no concide con la guardada.',
            confirmButtonText: 'Continuar',
            confirmButtonColor: '#a18347',
        })

    }else{
        if (passAct.value.trim() != 0) {      
            $.ajax({
                url: 'actualizaContrasenna', 
                method: "PUT",
                crossDomain: true,
                dataType: 'json',
                data:{'dsc_clave':dsc_clave},
                success: function(respuesta){
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
                },//success
                error(e){
                    //console.log(e.responseText);
                    if(e.responseText == '{"mensaje":"Actualizado"}Actualizado'){
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
                    }else{
                        Swal.fire({
                            icon: 'warning',
                            text: 'Ha ocurrido un error intentelo nuevamente.',
                            confirmButtonText: 'Continuar',
                            confirmButtonColor: '#a18347',
                        })
                    }
                }//error
            });//ajax
        }
    }

});

