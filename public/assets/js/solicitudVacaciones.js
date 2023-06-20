
flatpickr("#datepickerIniSolVac",{
    locale:"es",
    dateFormat: "d-m-Y",
    minDate: "today",
    disable: ["28-07-2023", "29-07-2023","08-10-2023"],
});

var inputFchInicio = document.getElementById('datepickerIniSolVac');
inputFchInicio.addEventListener("change", function() {
    var fchInicio = inputFchInicio.value;
    var maximaDate = new Date();
    var fechaParts = fchInicio.split('-');
    maximaDate.setDate(parseInt(fechaParts[0]));
    maximaDate.setMonth(parseInt(fechaParts[1]) - 1);
    maximaDate.setFullYear(parseInt(fechaParts[2]));
    maximaDate.setDate(maximaDate.getDate() + 7);
    console.log('maximaDate', maximaDate);

    flatpickr("#datepickerFinSolVac",{
        locale:"es",
        dateFormat: "d-m-Y",
        minDate: fchInicio,
        disable: ["28-07-2023", "29-07-2023","08-10-2023"],
        maxDate: maximaDate
    });

    var formattedRange = 'Usted ha seleccionado desde '+fchInicio+" al "+fechaFin;
    document.getElementById('resutSolVac').innerHTML = formattedRange;
});

function contarDomingos(fechaInicio, fechaFin) {
    var currentDate = new Date(fechaInicio);
    var endDate = new Date(fechaFin);
    var contadorDomingos = 0;
  
    while (currentDate <= endDate) {
      if (currentDate.getDay() === 0) { // 0 representa el domingo
        contadorDomingos++;
      }
      currentDate.setDate(currentDate.getDate() + 1);
    }
  
    return contadorDomingos;
  }



// var inputFchInicio = document.getElementById('datepickerIniSolVac');
// var flatpickrInstance = null;

// inputFchInicio.addEventListener("change", function() {
//     document.getElementById('resutSolVac').innerHTML ='';
//     var fchInicio = inputFchInicio.value;
//     console.log('value', fchInicio);

//     if (fchInicio && fchInicio.length > 0) {
//         var maxDate = new Date();
//         var fechaParts = fchInicio.split('-');
//         maxDate.setDate(parseInt(fechaParts[0]));
//         maxDate.setMonth(parseInt(fechaParts[1]) - 1);
//         maxDate.setFullYear(parseInt(fechaParts[2]));
//         maxDate.setDate(maxDate.getDate() + 7);
//         console.log('maxDate', maxDate);
        

//         if (flatpickrInstance) {
//             flatpickrInstance.set('maxDate', maxDate);
//         } else {
//             flatpickrInstance = inputFchInicio.flatpickr({
//                 plugins: [new rangePlugin({ maxDate: maxDate })],
//                 locale: "es",
//                 dateFormat: "d-m-Y",
//                 minDate: "today",
//                 disable: ["30-07-2023", "31-07-2023", "08-10-2023"],
//                 mode: "range"
//             });
//         }
//     }
// });




function formatDate(date) {
    var day = date.getDate();
    var month = date.getMonth() + 1;
    var year = date.getFullYear();
    return day + "-" + month + "-" + year;
}

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