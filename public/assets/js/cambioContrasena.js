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
var envia = document.getElementById("envia");
var verPass = document.getElementById("nuevapass2");
var mensaje = document.getElementById("message2");

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
    if (todo == 4) {
        validoTodo.classList.remove("invalid");
        validoTodo.classList.add("validTodo");
    } else {
        validoTodo.classList.remove("validTodo");
        validoTodo.classList.add("invalid");
        envia.disabled = true;
    }
};

verPass.onkeyup = function () {
    console.log(mensaje.style.display);
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
