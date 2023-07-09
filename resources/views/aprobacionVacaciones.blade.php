<x-layouts.app title="aprobacionVacaciones" meta-description="aprobacion de vacaciones meta description">

<main id="main" class="main">
<div class="pagetitle">
    <h1>Aprobación de vacaciones</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
        <li class="breadcrumb-item active">Vacaciones</li>
        <li class="breadcrumb-item active">Aprobación</li>
        </ol>
    </nav>
</div>

{{-- Lista de colaboradores --}}
<section class="section dashboard d-none d-md-block">
    <div class="row">
        <div class="col-md-10 offset-md-1 d-md-block">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="card-title" style="font-size: 18px;">Lista de colaboradores</h5>
                        </div>
                        <div class="col-md-2 offset-md-4 btnListaVacaciones">
                            <button class="btn btn-success btnDorado" id="actualizaConfig">Actualizar</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 table-responsive" style="padding-left: 2rem;padding-right: 2rem;">
                            <div class="row">
                                <div class="col-md-12 table-responsive" style="padding-left: 2rem;padding-right: 2rem;height: 23rem;">
                                    <table class="table table-striped " id="listaColab" style="text-align: center; height: 300px;">
                                        <thead style="text-align: center;">
                                            <tr>
                                                <th scope="col" width="20%">Colaborador</th>
                                                <th scope="col" width="10%">Vacaciones generadas</th>
                                                <th scope="col" width="10%">Vacaciones programadas</th>
                                                <th scope="col" width="10%">Saldo</th>
                                                <th scope="col" width="10%">Alerta</th>
                                                <th scope="col" width="10%">Firma</th>
                                                <th scope="col" width="15%">No cruzar con jefe</th>
                                                <th scope="col" width="15%">No cruzar entre si</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- <tr>
                                                <td>Milagros Huaman A.</td>
                                                <td>13/02/2023</td>
                                                <td>20/02/2023</td>
                                                <td>3</td>
                                                <td><span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="No hay firma"></span></td>
                                                <td>No</td>
                                                <td>
                                                    <input class="form-check-input checkDorado" type="checkbox" value="" id="flexCheckDefault">
                                                </td>
                                                <td>
                                                    <input class="form-check-input checkVerde" type="checkbox" value="" id="flexCheckDefault2">
                                                </td>
                                            </tr> --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>        
    </div>  
</section>

{{-- Solicitudes por aprobar --}}
<section class="section dashboard d-none d-md-block">
    <div class="row">
        <div class="col-md-10 offset-md-1 d-md-block">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="card-title" style="font-size: 18px;">Solicitudes por aprobar</h5>
                        </div>
                        <div class="col-md-2 offset-md-4 btnListaVacaciones">
                            <button class="btn btn-success btnDorado" id="btnProcSolVac">Actualizar</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 table-responsive" style="padding-left: 2rem;padding-right: 2rem;">
                            <div class="row">
                                <div class="col-md-12 table-responsive" style="padding-left: 0rem;padding-right: 1rem;height: 23rem;">
                                    <table class="table table-striped " id="tablaSolAprobar" style="text-align: center; height: 300px;">
                                        <thead>
                                            <tr>
                                                <th scope="col" width="15%">Colaborador</th>
                                                <th scope="col" width="10%">Inicio</th>
                                                <th scope="col" width="10%">Fin</th>
                                                <th scope="col" width="5%">Días</th>
                                                <th scope="col" width="10%">Reincorpora</th>
                                                <th scope="col" width="10%">Estado</th>
                                                <th scope="col" width="10%">Alerta reglas</th>
                                                <th scope="col" width="10%">Alerta reprog.</th>
                                                <th scope="col" width="5%">Aceptar</th>
                                                <th scope="col" width="5%">Rechazar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- <tr>
                                                <td>Adriana Jaramillo G.</td>
                                                <td>01/02/2023</td>
                                                <td>08/02/2023</td>
                                                <td>5</td>
                                                <td>12/02/2023</td>
                                                <td></td>
                                                <td><span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;"></span></td>
                                                <td><span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;"></span></td>
                                                <td>
                                                    <input class="form-check-input checkDorado" type="radio" name="radioBtnSol" id="aprobSol" value="APROBAR">
                                                </td>
                                                <td>
                                                    <input class="form-check-input checkVerde" type="radio" name="radioBtnSol" id="recSol" value="RECHAZAR">
                                                </td>
                                            </tr> --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>        
        
    </div>  
</section>

<section class="section dashboard d-sm-block d-md-none">
    <div class="row">
        <div class="col-md-10 offset-md-1 d-md-block">
            <div class="card">
                <div class="card-body">
                    <h5 class="tarjeta-vaca-foco" style="font-size: 18px; padding-top: 1rem;;">Para acceder a todas las opciones por favor ingresar desde su ordenador.</h5>  
                </div>
            </div>
        </div>        
    </div>  
</section>

<section class="section dashboard d-sm-block d-md-none">
    <div class="row">
        <div class="col-md-10 offset-md-1 d-md-block">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 18px;">Solicitudes por aprobar</h5>
                    <div class="row">
                        <div class="col-md-12 table-responsive" style="padding-left: 2rem;padding-right: 2rem;">
                            <div class="row">
                                <div class="col-md-12 table-responsive" style="padding-left: 0rem;padding-right: 1rem;height: 23rem;">
                                    <table class="table table-striped " id="solAprobarMobil" style="text-align: center; height: 300px;">
                                        <thead>
                                            <tr>
                                                <th scope="col" width="15%">Colaborador</th>
                                                <th scope="col" width="10%">Alerta reglas</th>
                                                <th scope="col" width="10%">Alerta reprog.</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Milagros Huaman A.</td>
                                                <td><span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;"></span></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Adriana Jaramillo G.</td>
                                                <td><span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;"></span></td>
                                                <td><span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;"></span></td>
                                            </tr>
                                            <tr>
                                                <td>Carlos González H.</td>
                                                <td></td>
                                                <td><span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;"></span></td>
                                            </tr>
                                            <tr>
                                                <td>María Huaman C.</td>
                                                <td><span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;"></span></td>
                                                <td><span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;"></span></td>
                                            </tr>
                                            <tr>
                                                <td>Azucena Jaramillo G.</td>
                                                <td><span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;"></span></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Ándres Jaramillo H.</td>
                                                <td><span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;"></span></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>        
    </div>  
</section>

{{-- Indicadores de gestion --}}
<section class="section dashboard">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 28px;">Indicadores de gestión</h5>
                    <div class="row">
                        <div class="col-md-4" style="margin-bottom: 1rem;">
                            <div class="card">
                                <div class="card-body">
                                    <h1 class="card-title tarjeta-vaca-foco"><b><span id="indPromVac">50</span></b></h1>
                                    <h5 style="font-size: 17px; text-align: center;">Promedio de días pendientes de vacaciones del equipo <b>hasta fin de año</b></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" style="margin-bottom: 1rem;">
                            <div class="card">
                                <div class="card-body">
                                    <h1 class="card-title tarjeta-vaca-foco"><b><span id="indPromVacPend"></span></b></h1>
                                    <h5 style="font-size: 17px;text-align: center;">Promedio de días pendientes de vacaciones del equipo <b>a la fecha de hoy</b></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" style="margin-bottom: 1rem;">
                            <div class="card">
                                <div class="card-body">
                                    <h1 class="card-title tarjeta-vaca-foco"><b><span id="indRepVac"></span></b></h1>
                                    <h5 style="font-size: 17px;text-align: center;">Número de reprogramaciones realizadas en el año del equipo</h5>
                                </div>
                            </div>
                        </div>                      
                    </div>
                </div>
            </div>
        </div>  
    </div>  
</section>

{{-- Reporte de vacaciones --}}
<section class="section dashboard">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 28px;">Reporte de vacaciones</h5>
                    <div class="row">
                        <div class="col-3 col-md-1" style="margin-bottom: 1rem;">
                            <div class="form-group">
                                <span>Inicio:</span>
                            </div>
                        </div>
                        <div class="col-9 col-md-2" style="margin-bottom: 1rem;">
                            <div class="form-group">
                                <input type="text" class="form-control" id="datepicker1" placeholder="Seleccione..">
                            </div>
                        </div>
                        <div class="col-3 col-md-1" style="margin-bottom: 1rem;">
                            <div class="form-group">
                                <span>Fin:</span>
                            </div>
                        </div>
                        <div class="col-9 col-md-2" style="margin-bottom: 1rem;">
                            <div class="form-group">
                                <input type="text" class="form-control" id="datepicker2" disabled>
                            </div>
                        </div>
                        <div class="col-md-2" style="text-align: -webkit-center">
                            <div class="form-group">
                                <h5><button class="btn btn-success btnDorado" id="buscarDoc">Descargar</button></h5>
                            </div>
                        </div>                      
                        <div class="col-1 col-md-1" style="text-align: -webkit-center">
                            <input class="form-check-input checkVerde" checked type="checkbox" value="" id="flexCheckDefault2">
                        </div>
                        <div class="col-11 col-md-3" style="text-align: -webkit-center">
                            <div class="form-group">
                                <h5>Visualizar equipos de mi equipo</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>    
</section>

{{-- Descargar solicitudes de vacaciones --}}
<section class="section dashboard">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 28px;">Descargar solicitudes de vacaciones</h5>
                    <div class="row">
                        <div class="col-3 col-md-1" style="margin-bottom: 1rem;">
                            <div class="form-group">
                                <span>Inicio:</span>
                            </div>
                        </div>
                        <div class="col-9 col-md-2" style="margin-bottom: 1rem;">
                            <div class="form-group">
                                <input type="text" class="form-control" id="datepickerIniDes" placeholder="Seleccione..">
                            </div>
                        </div>
                        <div class="col-3 col-md-1" style="margin-bottom: 1rem;">
                            <div class="form-group">
                                <span>Fin:</span>
                            </div>
                        </div>
                        <div class="col-9 col-md-2" style="margin-bottom: 1rem;">
                            <div class="form-group">
                                <input type="text" class="form-control" id="datepickerFinDes" disabled>
                            </div>
                        </div>
                        <div class="col-md-2" style="text-align: -webkit-center">
                            <div class="form-group">
                                <h5><button class="btn btn-success btnDorado" id="btnDescargSolVac">Descargar</button></h5>
                            </div>
                        </div>                      
                        <div class="col-1 col-md-1" style="text-align: -webkit-center">
                            <input class="form-check-input checkVerde" checked type="checkbox" value="" id="CheckDescSolVac">
                        </div>
                        <div class="col-11 col-md-3" style="text-align: -webkit-center">
                            <div class="form-group">
                                <h5>Visualizar equipos de mi equipo</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>    
</section>

{{-- Cargar vacaciones --}}
<section class="section dashboard">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            {{-- <form class="was-validated" action="{{ route('subirArchivo') }}" method="POST" enctype="multipart/form-data"> --}}
                {{-- @csrf --}}
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 28px;">Cargar vacaciones</h5>
                        <div class="row" style="text-align: center">
                            <div class="col-12">
                                <button class="btn btn-success btnDorado" data-bs-toggle="modal" data-bs-target="#ModalCargaMasiva" id="buscarDoc">Carga Masiva</button>
                            </div>                    
                        </div>
                    </div>
                </div>
            {{-- </form> --}}
        </div>  
    </div>    
</section>

{{-- Reglas de solicitud de vacaciones --}}
<section class="section dashboard">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 28px;">Reglas de solicitud de vacaciones</h5>
                    <div class="row">
                        <div class="col-md-2 offset-md-5" style="text-align: -webkit-center">
                            <div class="form-group">
                                <h5><button class="btn btn-success btnDorado" data-bs-toggle="modal" data-bs-target="#ModalReglas" id="buscarDoc">Ver reglas</button></h5>
                            </div>
                        </div>                      
                    </div>
                </div>
            </div>
        </div>  
    </div>    
</section>

</main><!-- End #main -->

<x-modals.aprobacionVacaciones/>

</x-layouts.app>

<!-- Template Main JS File -->
<script src="{{asset('assets/js/aprobacionVacaciones.js')}}"></script>
<script type='importmap'>
{
    "imports": {
    "@fullcalendar/core": "https://cdn.skypack.dev/@fullcalendar/core@6.1.6",
    "@fullcalendar/daygrid": "https://cdn.skypack.dev/@fullcalendar/multimonth@6.1.6"
    }
}
</script>
<script type="module">
import { Calendar } from '@fullcalendar/core'
import multiMonthPlugin from '@fullcalendar/multimonth'
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: [multiMonthPlugin],
        initialView: 'multiMonthYear'
    });
    calendar.render();
    });
</script>

<script type="text/javascript">
window.onload= function() {
    if ('@php echo(session('ventana4_2')) @endphp' != 'SI') {
        let timerInterval
        Swal.fire({
            icon: 'error',
            title: 'Error de acceso',
            text: 'Usted no tiene acceso a esta opción.',
            timer: 1500,
            timerProgressBar: true,
                didOpen: () => {
                    Swal.showLoading()
                    const b = Swal.getHtmlContainer().querySelector('b')
                    timerInterval = setInterval(() => {
                    b.textContent = Swal.getTimerLeft()
                    }, 100)
                },
                willClose: () => {
                    clearInterval(timerInterval)
                }
            }).then((result) => {
            /* Read more about handling dismissals below */
            if (result.dismiss === Swal.DismissReason.timer) {
                window.location.href = "adios";
            }
        })  
    }

    $.ajax({
        url: 'lista/ListarVacacionesProgramadas', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        data:{'codTrabajador':'@php echo(session('codTrabajador')) @endphp'},
        success: function(result){
            //console.log(result);
            var filasArray1 = [];
            result['response'].forEach(element => {
                var alertaRegla = '';
                
                if(element['flg_acuerdo_firmado'] == 'NO' || element['flg_acuerdo_firmado'] == ''){
                    alertaRegla = '<span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="No hay firma"></span>';
                }else{
                    alertaRegla = '';
                }

                var cantDias = element['cant_dia'];
                var codTrabajador = "'"+element['cod_trabajador']+"'";
                flgJefe = '';
                flgEntre = '';
                if(element['flg_no_cruzar_jefe'] == 'SI'){
                    flgJefe = 'checked';
                }
                if(element['flg_no_cruzar'] == 'SI'){
                    flgEntre = 'checked';
                }

                var filaData = [
                    element['dsc_trabajador'],
                    element['num_vacaciones_generadas'],
                    element['num_vacaciones_programadas'],
                    element['num_saldo'],
                    alertaRegla,
                    element['flg_acuerdo_firmado'],
                    '<input class="form-check-input checkDorado" type="checkbox" '+flgJefe+' value="JEFE-'+element['cod_trabajador']+'-'+element['cod_grupo_vacaciones']+'-'+element['num_linea']+'-'+element['flg_no_cruzar_jefe_oculto']+'" id="flexCheckDefault">',
                    '<input class="form-check-input checkVerde" type="checkbox" '+flgEntre+' value="ENTRE-'+element['cod_trabajador']+'-'+element['cod_grupo_vacaciones']+'-'+element['num_linea']+'" id="flexCheckDefault2">'
                ];
                filasArray1.push(filaData);
            });
            //console.log(filasArray1);
            $('#listaColab').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json'
                },
                data: filasArray1,
                columns: [
                    { title: 'Colaborador' },
                    { title: 'Vacaciones generadas' },
                    { title: 'Vacaciones programadas' },
                    { title: 'Saldo' },
                    { title: 'Alerta' },
                    { title: 'Firma' },
                    { title: 'No cruzar con jefe' },
                    { title: 'No cruzar entre si' },
                ],
                dom: 'trip',
                processing: true,
            });
            // //console.log(filasArray1);
        }
    });

    //------------------------Listado Aprobacion de solicitud----------------------------
    $.ajax({
        url: 'lista/ListarSolicitudColaboradorxAprobar', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        data:{'codTrabajador':'@php echo(session('codTrabajador')) @endphp'},
        success: function(result){
            //console.log(result);
            var filasArray = [];
            result['response'].forEach(element => {
                var auxFecIni =  element['fch_inicio'].split("T");
                fchIni = formatDate(auxFecIni[0]);
                var auxFecFin =  element['fch_fin'].split("T");
                fchFin = formatDate(auxFecFin[0]);
                var auxFecRein =  element['fch_retorno'].split("T");
                fchReinc = formatDate(auxFecRein[0]);
                var alertaRegla = '';
                var alertaReprog = '';
                
                if(element['flg_alerta_regla'] == 'NO' || element['flg_alerta_regla'] == ''){
                alertaRegla = '';
                }else{
                alertaRegla = '<span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;"></span>';
                }

                if(element['flg_reprogramar'] == 'NO' || element['flg_reprogramar'] == ''){
                alertaReprog = '';
                }else{
                alertaReprog = '<span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;"></span>';
                }

                var cantDias = element['cant_dia'];
                var codTrabajador = "'"+element['cod_trabajador']+"'";

                var filaData = [
                    element['dsc_trabajador'],
                    fchIni,
                    fchFin,
                    cantDias,
                    fchReinc,
                    element['dsc_estado'],
                    alertaRegla,
                    alertaReprog,
                    '<input class="form-check-input checkDorado" type="radio" name="radioBtnSol'+element['cod_trabajador']+'" id="aprobSol" value="APROBAR-'+element['cod_trabajador']+'-'+element['num_linea']+'-'+fchIni+'-'+fchFin+'">',
                    '<input class="form-check-input checkVerde" type="radio" name="radioBtnSol'+element['cod_trabajador']+'" id="recSol" value="RECHAZAR-'+element['cod_trabajador']+'-'+element['num_linea']+'-'+fchIni+'-'+fchFin+'">'
                ];
                filasArray.push(filaData);
            });
            //console.log(filasArray);
            $('#tablaSolAprobar').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json'
                },
                data: filasArray,
                columns: [
                    { title: 'Colaborador' },
                    { title: 'Inicio' },
                    { title: 'Fin' },
                    { title: 'Días' },
                    { title: 'Reincorpora' },
                    { title: 'Estado' },
                    { title: 'Alerta reglas' },
                    { title: 'Alerta reprog.' },
                    { title: 'Aceptar' },
                    { title: 'Rechazar' },
                ],
                dom: 'trip',
                processing: true,
            });
            // //console.log(filasArray);
        }
    });

    //---------------------------reglas------------------------------
    $.ajax({
        url: 'lista/ListarReglasJefe', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        success: function(respuesta){ 
            //console.log(respuesta);
            var body = document.getElementById('bodyRegla');
            var aux = (respuesta['response']=='') ? 'No hay reglas definidas por el momento..' : respuesta['response'];
            body.innerHTML = aux;
        },//success
        error(e){
            console.log(e.message);
        }//error
    });//ajax ListarReglasJefe

    //---------------------------Años------------------------------
    $.ajax({
        url: 'lista/MuestraAnhos', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        success: function(respuesta){ 
                respuesta['response'].forEach(function(word){
                //console.log(word);
                $("#annoIni").append('<option value="'+ word['codvar'] +'">'+ word['desvar1'] +'</option>');
                // $("#annoFin").append('<option value="'+ word['codvar'] +'">'+ word['desvar1'] +'</option>');

            });
        },//success
        error(e){
            console.log(e.message);
        }//error
    });//ajax muestraAnno

    //---------------------------indicadores------------------------------

    $.ajax({
        url: 'lista/ObtenerPromedioDiasPendiente', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        data:{'codTra':'@php echo(session('codTrabajador')) @endphp'},
        success: function(respuesta){ 
            console.log(respuesta['response']['ctd_dia_pendiente']);
            var indicador = document.getElementById('indPromVacPend');
            indicador.innerHTML = respuesta['response']['ctd_dia_pendiente'];
        },//success
        error(e){
            console.log(e.message);
        }//error
    });//ajax ObtenerPromedioDiasPendiente hasta hoy

    $.ajax({
        url: 'lista/ObtenerReprogramaciones', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        data:{'codTra':'@php echo(session('codTrabajador')) @endphp'},
        success: function(respuesta){ 
            console.log(respuesta['response']['ctd_reprogramaciones']);
            var indicador = document.getElementById('indRepVac');
            indicador.innerHTML = respuesta['response']['ctd_reprogramaciones'];
        },//success
        error(e){
            console.log(e.message);
        }//error
    });//ajax ObtenerReprogramaciones

}

//-----------------------Procesar solicitudes de vacaciones---------------------
var btnProcesar = document.getElementById('btnProcSolVac');
btnProcesar.addEventListener("click", function() {

    var tabla = document.getElementById("tablaSolAprobar");
    var filas = tabla.getElementsByTagName("tr");

    for (var i = 0; i < filas.length; i++) {
        var fila = filas[i];
        var inputsRadio = fila.querySelectorAll('input[type="radio"]:checked');
        
        for (var j = 0; j < inputsRadio.length; j++) {
            var inputRadio = inputsRadio[j];
            var valor = inputRadio.value;
            //console.log("Valor seleccionado en la fila " + (i + 1) + ", radio " + (j + 1) + ": " + valor);
            var aux = valor.split('-');
            accion = aux[0];
            codTrabajador = aux[1];
            numLinea = aux[2];
            fchIni = aux[3];
            fchFin = aux[4];
            data = {
                'cod_trabajador': codTrabajador,
                'num_linea': numLinea,
                'cod_trabajador_accion': '@php echo(session('codTrabajador')) @endphp'
            }
            if(accion == 'RECHAZAR'){
               // console.log('data rechazado',data);
                $.ajax({
                    url: 'api/RechazarSolicitudVacaciones', 
                    method: "PUT",
                    crossDomain: true,
                    dataType: 'json',
                    data:{'solVac':data},
                    success: function(respuesta){
                        enviaRechazoVac(codTrabajador,fchIni,fchFin)
                        console.log(respuesta);
                        Swal.fire({
                            icon: 'success',
                            text: 'Se han procesado las solicitudes con éxito',
                            confirmButtonText: 'Continuar',
                            confirmButtonColor: '#a18347',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                console.log('data rechazado',data);
                                    location.reload();
                            }
                        })
                    },//success
                    error(e){
                        console.log(e.message);
                        Swal.fire({
                            icon: 'warning',
                            text: 'Ha ocurrido un error intentelo nuevamente.',
                            confirmButtonText: 'Continuar',
                            confirmButtonColor: '#a18347',
                            })
                    }//error
                });//ajax
            }else if(accion == 'APROBAR'){
               // console.log('data aprobado',data);
                $.ajax({
                    url: 'api/AprobarSolicitudVacaciones', 
                    method: "PUT",
                    crossDomain: true,
                    dataType: 'json',
                    data:{'solVac':data},
                    success: function(respuesta){
                        enviaAprobacionVac(codTrabajador,fchIni,fchFin)
                        console.log(respuesta);
                        Swal.fire({
                            icon: 'success',
                            text: 'Se han procesado las solicitudes con éxito',
                            confirmButtonText: 'Continuar',
                            confirmButtonColor: '#a18347',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                console.log('data aprobado',data);
                                    location.reload();
                            }
                        })
                    },//success
                    error(e){
                        console.log(e.message);
                        Swal.fire({
                            icon: 'warning',
                            text: 'Ha ocurrido un error intentelo nuevamente.',
                            confirmButtonText: 'Continuar',
                            confirmButtonColor: '#a18347',
                            })
                    }//error
                });//ajax
            }
        }
    }
});
//------------------------funciones para enviar mensajes------------------------------

function enviaAprobacionVac(codTra,fchIni,fchFin) {

$.ajax({
    url: 'api/ObtenerTrabajador', 
    method: "GET",
    crossDomain: true,
    dataType: 'json',
    data:{'cod_trabajador':codTra},
    success: function(respuesta){
        console.log(respuesta);
        var dscTra = respuesta['response']['dsc_trabajador'];
        var correoTra = respuesta['response']['dsc_mail_personal'];
        var fechaActual = new Date();
        var dia = fechaActual.getDate();
        var mes = fechaActual.getMonth() + 1;
        var anio = fechaActual.getFullYear();
        var diaFormateado = dia < 10 ? '0' + dia : dia;
        var mesFormateado = mes < 10 ? '0' + mes : mes;
        var fechaFormateada = diaFormateado + '/' + mesFormateado + '/' + anio;
        var fchBD = anio+'-'+mesFormateado+'-'+diaFormateado;
        var actividad = 'La solicitud de vacaciones ha sido aprobada. (Inicio: '+fchIni+', fin: '+fchFin+')';
        var solicitante = "'"+'@php echo(session('nombreTrabajador')) @endphp'+"'";
        var asunto = 'Aprobación de solicitud de vacaciones';

        enviaCorreoMensaje(codTra,solicitante,'4002','',asunto,actividad,'guarda  ');

    },//success
    error(e){
        console.log(e.message);
    }//error
});//ajax  
}

function enviaRechazoVac(codTra,fchIni,fchFin) {
$.ajax({
    url: 'api/ObtenerTrabajador', 
    method: "GET",
    crossDomain: true,
    dataType: 'json',
    data:{'cod_trabajador':codTra},
    success: function(respuesta){
        console.log(respuesta);
        var dscTra = respuesta['response']['dsc_trabajador'];
        var correoTra = respuesta['response']['dsc_mail_personal'];
        var fechaActual = new Date();
        var dia = fechaActual.getDate();
        var mes = fechaActual.getMonth() + 1;
        var anio = fechaActual.getFullYear();
        var diaFormateado = dia < 10 ? '0' + dia : dia;
        var mesFormateado = mes < 10 ? '0' + mes : mes;
        var fechaFormateada = diaFormateado + '/' + mesFormateado + '/' + anio;
        var fchBD = anio+'-'+mesFormateado+'-'+diaFormateado;
        var actividad = 'La solicitud de vacaciones ha sido rechazada. (Inicio: '+fchIni+', fin: '+fchFin+')';
        var solicitante = "'"+'@php echo(session('nombreTrabajador')) @endphp'+"'";
        var asunto = 'Rechazo de solicitud de vacaciones';

        enviaCorreoMensaje(codTra,solicitante,'4003','',asunto,actividad,'guarda  ');

    },//success
    error(e){
        console.log(e.message);
    }//error
});//ajax  
}

//-----------------------Guarda configuraciones-----------------------------------

var btnConfig = document.getElementById('actualizaConfig');
btnConfig.addEventListener("click", function() {
  
    var filas = document.querySelectorAll("#listaColab tbody tr");
    var promesas = [];

    for (var i = 0; i < filas.length; i++) {
        var fila = filas[i];
        var checkboxDorado = fila.querySelector(".checkDorado");
        var checkboxVerde = fila.querySelector(".checkVerde");
        var valorDorado = checkboxDorado.value;
        var valorVerde = checkboxVerde.value;
        var flgJefe = checkboxDorado.checked ? 'SI' : 'NO';
        var flgEntre = checkboxVerde.checked ? 'SI' : 'NO';

        var aux = valorDorado.split('-');
        var grupoVac = aux[2];
        var codTrabajador = aux[1];
        var numLinea = aux[3];

        var data = {
            'cod_grupo_vacaciones': grupoVac,
            'cod_trabajador': codTrabajador,
            'num_linea': numLinea,
            'flg_no_cruzar_jefe': flgJefe,
            'flg_no_cruzar': flgEntre
        };

        var promesa = $.ajax({
        url: 'api/ActualizarVacacionesProgramadas',
        method: "PUT",
        crossDomain: true,
        dataType: 'json',
        data: {
            'data': data
        }
        });

        promesas.push(promesa);
    }

    Promise.all(promesas)
    .then(function() {
        Swal.fire({
            icon: 'success',
            text: 'Se ha actualizado con éxito',
            confirmButtonText: 'Continuar',
            confirmButtonColor: '#a18347',
        }).then(function(result) {
            if (result.isConfirmed) {
                location.reload();
            }
        });
    })
    .catch(function(error) {
        console.log(error);
        Swal.fire({
            icon: 'warning',
            text: 'Ha ocurrido un error. Inténtelo nuevamente.',
            confirmButtonText: 'Continuar',
            confirmButtonColor: '#a18347',
        });
    });
});

//-----------------------Procesar descargar reporte solicitudes de vacaciones---------------------
var btnProcesar = document.getElementById('btnDescargSolVac');
btnProcesar.addEventListener("click", function() {
    var fchInicio = document.getElementById('datepickerIniDes').value;
    var fechaParts = fchInicio.split('-');
    var day = fechaParts[0];
    var month = fechaParts[1];
    var year = fechaParts[2]; 
    fchInicio = year + "-" + month + "-" + day;

    var fchFin = document.getElementById('datepickerFinDes').value;
    var fechaPartsF = fchFin.split('-');
    var dayF = fechaPartsF[0];
    var monthF = fechaPartsF[1];
    var yearF = fechaPartsF[2]; 
    fchFin = yearF + "-" + monthF + "-" + dayF;

    var chckDsc = document.getElementById('CheckDescSolVac');
    var flgTodos = chckDsc.checked ? 'SI' : 'NO';

    var codTra = '@php echo(session('codTrabajador')) @endphp';

    $.ajax({
        url: 'ListarSolicitudVacacionesxResponsable', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        //data:{'codTra':'@php echo(session('codTrabajador')) @endphp','fchIni':fchInicio,'fchFin':fchFin},
        data:{'codTra':codTra,'fchIni':fchInicio,'fchFin':fchFin},
        success: function(respuesta){
            console.log(respuesta['response']);
            data = [];
            var header = ['SOLICITUD','TRABAJADOR','NOMBRES Y APELLIDOS','ÁREA','SEDE','CARGO','FECHA INICIO VAC.','FECHA FIN VAC.','DÍAS VAC.','DÍA DE INCORPORACIÓN','ESTADO ACTUAL SOL.','SUBESTADO APROBACIÓN','SUBESTADO RECHAZO','SUBESTADO SOLICITUD','ESTADO FIRMA SOL.',' ESTADO DE PAGO','CANT. DÍAS EXCEDIDOS','REPROGRAMACIÓN','FECHA REGISTRO SOL.','CÓDIGO TRABAJADOR REGISTRÓ','FECHA APROBACIÓN SOL.','CÓDIGO TRABAJADOR DEL APROBADOR','FECHA RECHAZO SOL.','CÓDIGO TRABAJADOR DE RECHAZO'];
            respuesta['response'].forEach(element => {

                var fchIni = element['fch_inicio'].split('T');
                fchIni = formatDate(fchIni[0]);
                var fchFin = element['fch_fin'].split('T');
                fchFin = formatDate(fchFin[0]);
                var fchReinc = element['fch_retorno'].split('T');
                fchReinc = formatDate(fchReinc[0]);
                var fchReg = element['fch_registro_solicitud'].split('T');
                fchReg = formatDate(fchReg[0]);
                var fchRechz = element['fch_rechazado'].split('T');
                fchRechz = formatDate(fchRechz[0]);

                var firmado = (element['flg_firmado'] == 'SI') ? 'FIRMADO' : 'NO FIRMADO';
                var pagado = (element['flg_pagado'] == 'SI') ? 'PAGADO' : 'NO PAGADO';
                var fchAprob = element['fch_aprobado'].split('T');
                fchAprob = formatDate(fchAprob[0]);
                var fechaAproba = (fchAprob == '01/01/1900') ? '' : fchAprob;
                var solicitudAnt = (element['num_linea_origen'] != 0) ? element['cod_trabajador']+'-'+element['num_linea_origen'] : '';

                filaData = [
                    element['cod_trabajador']+'-'+element['num_linea'],
                    element['cod_trabajador'],
                    element['dsc_trabajador'],
                    element['dsc_area'],
                    element['dsc_sede'],
                    element['dsc_cargo'],
                    fchIni,
                    fchFin,
                    element['cant_dia'],
                    fchReinc,
                    element['dsc_estado'],
                    element['dsc_subestado_aprobacion'],
                    element['dsc_subestado_rechazo'],
                    element['dsc_subestado_solicitud'],
                    firmado,
                    pagado,
                    element['ctd_dias_exceso'],
                    solicitudAnt,
                    fchReg,
                    element['cod_trabajador_registro'],
                    fechaAproba,
                    element['cod_trabajador_aprobado'],
                    fchRechz,
                    element['cod_trabajador_rechazado']
                    
                ]
                data.push(filaData);
            });
            
            // Crear un libro de trabajo (workbook)
            var workbook = XLSX.utils.book_new();

            // Crear una hoja de cálculo (worksheet)
            var worksheet = XLSX.utils.aoa_to_sheet(data);

            // Agregar la hoja de cálculo al libro de trabajo
            XLSX.utils.book_append_sheet(workbook, worksheet, 'Sheet1');

            // Convertir el libro de trabajo a un archivo binario
            var excelBuffer = XLSX.write(workbook, { bookType: 'xlsx', type: 'array' });

            // Crear un blob a partir del archivo binario
            var blob = new Blob([excelBuffer], { type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' });

            // Crear una URL para el blob
            var url = URL.createObjectURL(blob);

            // Crear un enlace de descarga
            var link = document.createElement('a');
            link.href = url;
            link.download = 'solicitudVacaciones'+codTra+'.xlsx';

            // Simular un clic en el enlace para iniciar la descarga
            link.click();

        },//success
        error(e){
            console.log(e.message);
        }//error    
    });


});


</script>


