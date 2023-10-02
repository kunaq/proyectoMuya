<link rel="stylesheet" href="assets/css/fullCalendarCustom.css">
<x-layouts.app title="Visor de servicios" meta-description="Visor de servicios meta description">
    
    <main id="main" class="main">
    
        <section class="section dashboard">
            <div class="row">
                <div class="col-md-10 offset-md-1 d-none d-md-block">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 30px;">Visor de servicios</h5>
                            <div class="row">
                                <div class="col-md-12 table-responsive" style="padding-left: 2rem;padding-right: 2rem;">
                                    <div id='calendar' class="calendar-visorServicio" style="height: 28rem;"></div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div> 
            </div>
        </section>
  
    </main><!-- End #main -->
  
</x-layouts.app>
<script src="https://unpkg.com/popper.js/dist/umd/popper.min.js"></script>
<script src="https://unpkg.com/tooltip.js/dist/umd/tooltip.min.js"></script>
<script type="text/javascript">

$(document).ready(function () {
    muestraCalendario();     
});//end ready
  
function muestraCalendario() {
    var eventos = [];

    $.ajax({
        url: 'lista/ListarUsoServicio',
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        success: function(respuesta) {
            respuesta['response'].forEach(muestra => {
                var start = muestra['fch_servicio'];
                var startDate = new Date(start);
                var auxFecha = start.split('T');
                var dscNombres = muestra['dsc_apellido_paterno'] + ' ' + muestra['dsc_apellido_materno'] + ', ' + muestra['dsc_nombres'];

                if(muestra['cod_tipo_documento'] == 'DI001'){
                    tipoDoc = 'DNI';
                }
                else if (muestra['cod_tipo_documento'] == 'DI002') {
                    tipoDoc = 'CARNET EXTRANJERIA';
                }
                else if (muestra['cod_tipo_documento'] == 'DI003') {
                    tipoDoc = 'PASAPORTE';
                }
                else if (muestra['cod_tipo_documento'] == 'DI004') {
                    tipoDoc = 'RUC';
                }
                else if (muestra['cod_tipo_documento'] == 'DI005') {
                    tipoDoc = 'OTROS';
                }
                else{
                    tipoDoc = 'LIBERTA ELECTORAL';
                }


                if(!muestra['cod_plataforma_esp'] || muestra['cod_plataforma_esp'] == null){
                    plat = 'N/A';
                    area = 'N/A';
                    ejex = 'N/A';
                    ejey = 'N/A';
                    espc = 'N/A';
                    nivel = 'N/A';
                }else{
                    plat = muestra['dsc_plataforma'];
                    area = muestra['dsc_area'];
                    ejex = muestra['cod_eje_horizontal_esp'];
                    ejey = muestra['cod_eje_vertical_esp'];
                    espc = muestra['cod_espacio'];
                    nivel = muestra['num_nivel'];
                }

                var evento;
                if(muestra['dsc_prefijo'] == 'MI' || muestra['dsc_prefijo'] == 'ME'){

                    descripcion = '<table class="table tableVisor">'+
                    '<tr>'+
                        '<td style="text-align: center;" colspan = "4"><b>'+muestra['dsc_tipo_autorizacion']+'</b></td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td style="text-align: left;"><b>Fecha:</b></td>'+
                        '<td style="text-align: left;">'+formatDate(auxFecha[0])+'</td>'+
                        '<td><b>Hora:</b></td>'+
                        '<td style="text-align: left;">'+auxFecha[1]+'</td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td style="text-align: left;"><b>Nombre:</b></td>'+
                        '<td style="text-align: left;" colspan = "3">'+dscNombres+'</td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td style="text-align: left;"><b>DNI:</b></td>'+
                        '<td style="text-align: left;" colspan = "3">'+tipoDoc+"-"+muestra['dsc_documento']+'</td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td style="text-align: left;"><b>Sacerdote:</b></td>'+
                        '<td style="text-align: left;" colspan = "3">'+muestra['dsc_sacerdote']+'</td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td style="text-align: left;"><b>Cantante:</b></td>'+
                        '<td style="text-align: left;" colspan = "3">'+muestra['dsc_cantante']+'</td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td style="text-align: left;"><b>Motivo:</b></td>'+
                        '<td style="text-align: left;" colspan = "3">'+muestra['dsc_motivo_conmemoracion']+'</td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td style="text-align: left;"><b>Contrato:</b></td>'+
                        '<td style="text-align: left;" colspan = "3">'+muestra['cod_contrato']+'</td>'+
                    '</tr>'+
                    '</table>';
                }else{
                    descripcion = '<table class="table tableVisor">'+
                    '<tr>'+
                        '<td style="text-align: center;" colspan = "4"><b>'+muestra['dsc_tipo_autorizacion']+'</b></td>'+
                    '</tr>'+
                    '<tr>'+
                      '<td style="text-align: left;"><b>Fecha:</b></td>'+
                      '<td style="text-align: left;">'+formatDate(auxFecha[0])+'</td>'+
                      '<td><b>Hora:</b></td>'+
                      '<td style="text-align: left;">'+auxFecha[1]+'</td>'+
                    '</tr>'+
                    '<tr>'+
                      '<td style="text-align: left;"><b>Nombre:</b></td>'+
                      '<td style="text-align: left;" colspan = "3">'+dscNombres+'</td>'+
                    '</tr>'+
                    '<tr>'+
                      '<td style="text-align: left;"><b>DNI:</b></td>'+
                      '<td style="text-align: left;" colspan = "3">'+tipoDoc+"-"+muestra['dsc_documento']+'</td>'+
                    '</tr>'+
                    '<tr>'+
                      '<td style="text-align: left;"><b>Plataforma:</b></td>'+
                      '<td style="text-align: left;" colspan = "3">'+plat+'</td>'+
                    '</tr>'+
                    '<tr>'+
                      '<td style="text-align: left;"><b>Area de plataforma:</b></td>'+
                      '<td style="text-align: left;" colspan = "3">'+area+'</td>'+
                    '</tr>'+
                    '<tr>'+
                      '<td style="text-align: left;"><b>Eje horiz.:</b></td>'+
                      '<td style="text-align: left;">'+ejex+'</td>'+
                      '<td style="text-align: left;"><b>Eje ver.:</b></td>'+
                      '<td style="text-align: left;">'+ejey+'</td>'+
                    '</tr>';
                }

                if (muestra['dsc_prefijo'] == 'IN' || muestra['dsc_prefijo'] == 'DEP') {
                    evento = {
                        title: muestra['dsc_beneficiario_lapida'],
                        description: descripcion,
                        start: start,
                        color: '#dc3545'
                    };
                } else if (muestra['dsc_prefijo'] == 'MIS') {
                    evento = {
                        title: dscNombres,
                        description: descripcion,
                        start: start,
                        color: '#198754'
                    };
                }else if (muestra['dsc_prefijo'] == 'FLO') {
                    evento = {
                        title: muestra['dsc_beneficiario_lapida'],
                        description: descripcion,
                        start: start,
                        color: '#d63384'
                    };
                }else if (muestra['dsc_prefijo'] == 'TI' || muestra['dsc_prefijo'] == 'TE'){
                    evento = {
                        title: muestra['dsc_apellido_paterno'] + ' ' + muestra['dsc_apellido_materno'] + ', ' + muestra['dsc_nombres'],
                        description: descripcion,
                        start: start,
                        color: '#052c65'
                    };
                }else if (muestra['dsc_prefijo'] == 'CRE'){
                    evento = {
                        title: dscNombres,
                        description: descripcion,
                        start: start,
                        color: '#fd7e14'
                    };
                }
                eventos.push(evento);
            });

            // Luego de llenar el arreglo eventos, inicializa y renderiza el calendario
            var eventosJSON = JSON.stringify(eventos);
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                locale: 'es-PE',
                initialView: 'timeGridWeek',
                firstDay: 1,
                allDaySlot: false,
                slotMinTime: "06:00:00",
                slotMaxTime: "22:00:00",
                //scrollTime: false,
                //dayMaxEvents: true,
                headerToolbar: {
                    start: '',
                    center: 'title',
                    end: 'dayGridMonth,timeGridWeek,timeGridDay prev,next'
                },
                buttonText: {
                    today: 'Hoy',
                    month: 'Mes',
                    week: 'Semana',
                    day: 'Día',
                    list: 'Lista'
                },
                eventDidMount: function(info) {
                    var tooltip = new Tooltip(info.el, {
                        title: info.event.extendedProps.description,
                        placement: 'top',
                        trigger: 'hover',
                        container: 'body',
                        html: true
                    });
                },
            });

            calendar.addEventSource(JSON.parse(eventosJSON));
            calendarEl.style.height = '100%';
            calendar.render();
        },
        error: function(e) {
            console.log(e.message);
        }
    });
}

</script>