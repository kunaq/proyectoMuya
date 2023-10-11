//const { parseJSON } = require("jquery");
var hooy = new Date();
var inicioCalendario = hooy.setDate(hooy.getDate() + 1);
var flgRegla = '';
var dscReglaDomingo = '';
var dscReglaFeriado = '';

setTimeout(function() { 
  flatpickr("#datepickerIniSolVac",{
      locale:"es",
      dateFormat: "d-m-Y",
      minDate: inicioCalendario,
      allowInput: true,
      disableMobile: "true",
      //disable: feriados,
  });
}, 2000);

//----------disparador cambio en fecha de inicio-----------
var inputFchInicio = document.getElementById('datepickerIniSolVac');
inputFchInicio.addEventListener("change", function() {
    document.getElementById('datepickerFinSolVac').value = '';
    document.getElementById('resutSolVac').innerHTML = '';
    document.getElementById('resutSolVac2').innerHTML = '';
    document.getElementById('resutSolVac3').innerHTML = '';
    numPend = parseInt(document.getElementById("numVacPend").value);
    numdiasReprog = parseInt(document.getElementById("numVacPendReprog").value);
    //console.log('numPend',numPend);

    
    var parametroY = parseInt(document.getElementById('parametroY').value);

    var fchInicio = inputFchInicio.value;
    var maximaDate = new Date();
    var fechaParts = fchInicio.split('-');
    maximaDate.setDate(parseInt(fechaParts[0]));
    maximaDate.setMonth(parseInt(fechaParts[1]) - 1);
    maximaDate.setFullYear(parseInt(fechaParts[2]));
    maximaDate.setDate(maximaDate.getDate() + numPend + parametroY + numdiasReprog);
    
    var ctdProgVac = parseInt(document.getElementById('ctdProgPeriodo').value);
    // console.log('ctdProgVac',ctdProgVac);
    if (ctdProgVac < 2) {
        var minimaDate = new Date();
        minimaDate.setDate(parseInt(fechaParts[0]));
        minimaDate.setMonth(parseInt(fechaParts[1]) - 1);
        minimaDate.setFullYear(parseInt(fechaParts[2]));
        minimo = minimaDate.setDate(minimaDate.getDate() + 6);
    }else{
        minimo = fchInicio;
    }

    var movil = esMovil();
    console.log(movil);

    if(movil == 'SI'){
      minimo = minimaDate.setDate(minimaDate.getDate() - 1);
    }
    /// despues de todas las validaciones contruir faltpickr---
    flatpickr("#datepickerFinSolVac",{
        locale:"es",
        dateFormat: "d-m-Y",
        minDate: minimo,
        allowInput: true,
        disableMobile: "true",
        //disable: feriados,
        maxDate: maximaDate
    });

    var formattedRange = 'Usted ha seleccionado desde el día '+fchInicio;
    document.getElementById('resutSolVac').innerHTML = formattedRange;
});

//-----------------disparador de fecha fin -------
var inputFchFin = document.getElementById('datepickerFinSolVac');
inputFchFin.addEventListener("change", function() {
    document.getElementById('resutSolVac2').innerHTML = '';
    document.getElementById('resutSolVac3').innerHTML = '';
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

    // -----bloque dia de retorno de vacaciones-----------


    const fchFinStr = fchFin; // Supongamos que fchFin es una cadena en formato 'DD-MM-YYYY'

    // Días de la semana
    const diasSemana = ['domingo', 'lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado'];
    // Meses del año
    const mesesAno = ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'];

    // Convertir la cadena en un objeto Date
    const partesFecha = fchFinStr.split('-');
    const dia = parseInt(partesFecha[0], 10);
    const mes = parseInt(partesFecha[1], 10) - 1;
    const ano = parseInt(partesFecha[2], 10);
    fchFin = new Date(ano, mes, dia);

    // Obtener los componentes de la fecha
    const diaSemana = diasSemana[fchFin.getDay()];

    // Formatear la fecha en el formato 'Día de la semana día de mes de año'
    const fechaFormateada = `${diaSemana}, ${dia} de ${mesesAno[mes]} del ${ano}.`;

    //console.log('fchfin', fechaFormateada);

    // Agregar 1 día a la fecha de retorno
    fchFin.setDate(fchFin.getDate() + 1);

    // Verificar si el nuevo día es domingo
    if (fchFin.getDay() === 0) {
    // Si es domingo, agregar un día adicional
      //fchFin.setDate(fchFin.getDate() + 1);
      flgRegla = 'SI';
      dscReglaDomingo = 'El día de retorno es Domingo';

      Swal.fire({
        icon: 'warning',
        text: 'El día de retorno es un día no laborable.',
        confirmButtonText: 'Continuar',
        confirmButtonColor: '#a18347',
      })
    }else{
      flgRegla = 'NO';
      dscReglaDomingo = '';
    }
    feriados.forEach(element => {

      const FinDia = fchFin.getDate();
      const diaForm = (FinDia < 10) ? '0'+FinDia : FinDia; 
      const FinMes = fchFin.getMonth()+1;
      const mesForm = (FinMes < 10) ? '0'+FinMes : FinMes; 
      const FinAno = fchFin.getFullYear();
      var auxFchFin = diaForm+'-'+mesForm+'-'+FinAno;

      if(element == auxFchFin){
        //fchFin.setDate(fchFin.getDate() + 1);
        flgRegla = 'SI';
        dscReglaFeriado = '';

        Swal.fire({
          icon: 'warning',
          text: 'El día de retorno es un día no laborable o día de descanso.',
          confirmButtonText: 'Continuar',
          confirmButtonColor: '#a18347',
        })
      }else{
        flgRegla = 'NO';
        dscReglaFeriado = '';
      }  
      if (fchFin.getDay() === 0) {
        // Si es domingo, agregar un día adicional
        //fchFin.setDate(fchFin.getDate() + 1);
      }
    });

    // Obtener los componentes de la nueva fecha
    const nuevoDiaSemana = diasSemana[fchFin.getDay()];
    const nuevoDia = fchFin.getDate();
    const nuevoMes = mesesAno[fchFin.getMonth()];
    const nuevoAno = fchFin.getFullYear();

    // Formatear la nueva fecha en el formato 'Día de la semana día de mes de año'
    const nuevoFechaFormateada = `${nuevoDiaSemana}, ${nuevoDia} de ${nuevoMes} del ${nuevoAno}.`;

    const diaForm = (nuevoDia < 10) ? '0'+nuevoDia : nuevoDia; 
    const mesForm = ((fchFin.getMonth()+1) < 10) ? '0'+(fchFin.getMonth()+1) : (fchFin.getMonth()+1);

    document.getElementById('fchRetornoBD').value = `${nuevoAno}-${mesForm}-${diaForm}`;

    //console.log('Nuevo día de retorno:', nuevoFechaFormateada);

    document.getElementById('resutSolVac3').innerHTML = 'Fecha de retorno: ' + nuevoFechaFormateada;

    
});

function bloquearUltimosXDias(date) {
    var currentDate = new Date();
    var lastXDaysOfMonth = x;
    // Obtener el último día del mes de la fecha actual
    var lastDayOfMonth = new Date(date.getFullYear(), date.getMonth() + 1, 0).getDate();
    // Verificar si la fecha está dentro de los últimos x días del mes
    if (date.getDate() > lastDayOfMonth - lastXDaysOfMonth) {
      return true; // Deshabilitar la fecha
    }
    return false; // Habilitar la fecha
}
  
  // Inicializar el Flatpickr con la función de deshabilitar fechas personalizada
  flatpickr("#datepicker", {
    disable: bloquearUltimosXDias
  });

var btnBuscarLista = document.getElementById('buscarLista');
btnBuscarLista.addEventListener("click", function() {
    var inicio = document.getElementById('annoIni').value;
    var fin = document.getElementById('annoFin').value;
    //console.log('annoI',inicio)
    muestraListadoSolicitudes(inicio,fin);
});


const myModalEl = document.getElementById('ModalSolicitud')
myModalEl.addEventListener('hidden.bs.modal', event => {
    document.getElementById('FormSolicitudVac').reset();
    document.getElementById('cantDiasSol').value = 0;
    document.getElementById('numVacPendReprog').value = 0;
    document.getElementById('reprogramacion').value = 'NO';
    document.getElementById('resutSolVac').innerHTML = '';
    document.getElementById('resutSolVac2').innerHTML = '';
    document.getElementById('resutSolVac3').innerHTML = '';
})

function descargaDoc() {
    console.log('descargar');
}

function reprograma(cantDias,numLinea,fhcIni,fchFin,fchReini) {
    document.getElementById('cantDiasSol').value = cantDias;
    document.getElementById('numVacPendReprog').value = cantDias;
    document.getElementById('numLinea').value = numLinea;
    document.getElementById('reprogramacion').value = 'SI';
    document.getElementById('fchInicioRech').value = fhcIni;
    document.getElementById('fchFinRech').value = fchFin;
    document.getElementById('fchReincRech').value = fchReini;    
    document.getElementById('cantDiasRech').value = cantDias;
}

// ---------apartado del calendario--------------

function muestraCalendario(filaCalendario) {

  var eventos = [];
  filaCalendario.forEach(muestra => {
    if(muestra[0] == 'APROBADO' || muestra[0] == 'SOLICITADO'){

      var start = muestra[1];
      var end = muestra[2];

      // Convertir las fechas en objetos Date
      var startDate = new Date(start);
      var endDate = new Date(end);
     
      // Sumar un día a la fecha de fin
      endDate.setDate(endDate.getDate() + 1);
      fin = endDate.toISOString().split('T')[0]
      endDate.toISOString().split('T')[0];

      if (muestra[0] == 'SOLICITADO') {
        var evento = {
          title: 'Vacaciones Solicitadas',
          start: start,
          end: fin,
          color: '#6c757d'
        };
      }else{
        var evento = {
          title: 'Vacaciones Aprobadas',
          start: start,
          end: fin
        };
      }

      eventos.push(evento);
    }

  });
  var eventosJSON = JSON.stringify(eventos);
 // console.log(eventosJSON);

  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    locale: 'es-PE', // Cambia la configuración local a español de Perú
    initialView: 'dayGridMonth',
    scrollTime: false, // Desactiva el desplazamiento de la hora
    headerToolbar: {
      start: '',
      center: 'title',
      end: 'prev,next'
    },
    buttonText: {
      today: 'Hoy' // Cambia el texto del botón "Today" a "Hoy"
    },

    eventDidMount: function(info) {
      var tooltip = new Tooltip(info.el, {
        title: info.event.extendedProps.description,
        placement: 'top',
        trigger: 'hover',
        container: 'body'
      });
    },

  });
  calendar.addEventSource(JSON.parse(eventosJSON)); // Agrega los eventos desde la variable eventosJSON
  // Ajusta el tamaño del contenedor del calendario para que sea lo suficientemente grande
  calendarEl.style.height = '100%';
  calendar.render();
}
  //console.log('revision calendario',);