
flatpickr("#datepickerIniSolVac",{
    locale:"es",
    dateFormat: "d-m-Y",
    minDate: "today",
    disable: ["28-07-2023", "29-07-2023","08-10-2023"],
});

var inputFchInicio = document.getElementById('datepickerIniSolVac');
inputFchInicio.addEventListener("change", function() {
    document.getElementById('datepickerFinSolVac').value = '';
    document.getElementById('resutSolVac').innerHTML = '';
    document.getElementById('resutSolVac2').innerHTML = '';
    numPend = parseInt(document.getElementById("numVacPend").value);
    console.log('numPend',numPend);

    var fchInicio = inputFchInicio.value;
    var maximaDate = new Date();
    var fechaParts = fchInicio.split('-');
    maximaDate.setDate(parseInt(fechaParts[0]));
    maximaDate.setMonth(parseInt(fechaParts[1]) - 1);
    maximaDate.setFullYear(parseInt(fechaParts[2]));
    maximaDate.setDate(maximaDate.getDate() + numPend);

    flatpickr("#datepickerFinSolVac",{
        locale:"es",
        dateFormat: "d-m-Y",
        minDate: fchInicio,
        disable: ["28-07-2023", "29-07-2023","08-10-2023"],
        maxDate: maximaDate
    });

    var formattedRange = 'Usted ha seleccionado desde el día '+fchInicio;
    document.getElementById('resutSolVac').innerHTML = formattedRange;
});

var inputFchFin = document.getElementById('datepickerFinSolVac');
inputFchFin.addEventListener("change", function() {
    document.getElementById('resutSolVac2').innerHTML = '';
    var fchFin = inputFchFin.value;
    var fchIni = document.getElementById('datepickerIniSolVac').value;

    var x = new Date();
    var fechaParts = fchIni.split('-');
    x.setDate(parseInt(fechaParts[0]));
    x.setMonth(parseInt(fechaParts[1]) - 1);
    x.setFullYear(parseInt(fechaParts[2]));
    x.setDate(x.getDate());

    var y = new Date();
    var fechaParts2 = fchFin.split('-');
    y.setDate(parseInt(fechaParts2[0]));
    y.setMonth(parseInt(fechaParts2[1]) - 1);
    y.setFullYear(parseInt(fechaParts2[2]));
    y.setDate(y.getDate());
    
    // segundos = milisegundos/1000
    // minutos = segundos/60
    // horas = minutos/60
    // Días = horas/24
    
    const diffInDays = (Math.floor((y - x) / (1000 * 60 * 60 * 24)))+1;

    var formattedRange = ' al '+fchFin+'. Cantidad de días: '+diffInDays;
    document.getElementById('cantDiasSol').value = diffInDays;
    document.getElementById('resutSolVac2').innerHTML = formattedRange;
    
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
