flatpickr("#datepickerIniSolVac",{
    locale:"es",
    dateFormat: "d-m-Y",
    minDate: "today"
});

var fchInicio = document.getElementById('datepickerIniSolVac').value;
var inputFchI =document.getElementById('datepickerIniSolVac');
inputFchI.addEventListener("change",function(){
    console.log(fchInicio);
    flatpickr("#datepickerFinSolVac",{
        locale:"es",
        dateFormat: "d-m-Y",
        minDate: fchInicio
    });
});

function alertaSolicitud(){
    Swal.fire({
        icon: 'warning',
        html: 'No cumple con los requisitos necesarios para solicitar vacaciones.</br>¿Desea continuar?',
        showCancelButton: true,
        confirmButtonText: 'Continuar',
        confirmButtonColor: '#155450',
        cancelButtonText: 'Cancelar',
        }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            var fechaIni = '';
            Swal.fire({
                icon: 'success',
                text: 'Se ha registrado su solicitud con éxito',
                confirmButtonText: 'Continuar',
                confirmButtonColor: '#155450',
                })
        } else if (result.isDenied) {
            /**/
        }
    })
}

var boton = document.getElementById("aceptaFirma");

boton.addEventListener("click",function(){

    //--------------Verificar Conectividad Bigdavi--------------
    // $.ajax({
    //     url: baseUrl,
    //     method: "GET",
    //     crossDomain: true,
    //     dataType: 'json',
    //     success: function(respuesta){
    //         console.log(respuesta);
    //     }//success
    // });//ajax

    //--------------Solicitar Token Bigdavi--------------
    // $.ajax({
    //     url: 'api/crearPdf', 
    //     method: "POST",
    //     crossDomain: true,
    //     success: function(respuesta){
    //         console.log(respuesta);
    //     },//success
    //     error(e){
    //         console.log(e.message);
    //     }//error
            
    // });//ajax

    // $.ajax({
    //     url: 'api/solicitud', 
    //     method: "POST",
    //     crossDomain: true,
    //     success: function(respuesta){
    //         console.log('token',respuesta);
    //     },//success
    //     error(e){
    //         console.log(e.message);
    //     }//error
            
    // });//ajax

});