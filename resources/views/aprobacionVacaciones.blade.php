<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
    span.select2.select2-container.select2-container--classic{
        width: 100% !important;
    }
    /* Personalización del tema Classic */
    .select2-container--classic .select2-selection--single {
      height: 2em;
      border-radius: 4px;
      background-color: #f2f2f2;
      border: 1px solid #ccc;
    }
    .select2-container--classic .select2-selection--single .select2-selection__rendered {
      line-height: 2em;
    }

    .select2-container--classic .select2-selection--single .select2-selection__arrow {
      /* top: 6px; */
      height: 1.9em;
    }
    .select2-container--classic.select2-container--open .select2-dropdown {
    border-color: #155450;
}
    .select2-container--classic.select2-container--open .select2-selection--single {
    border: 1px solid #155450;
    }
    .select2-container--classic .select2-results__option--highlighted.select2-results__option--selectable {
        background-color: #155450;
        color: #fff;
    }

    .select2-container--classic .select2-results__option {
      padding: 0.5em 0.8em;
    }
    .tooltip{
        position: fixed!important;
    }
    .select2-container--open{
        z-index: 9999;
    }

    /* Otros estilos personalizados */
    /* .my-select2 {
      width: 200px;
    } */
</style>

<x-layouts.app title="aprobacionVacaciones" meta-description="aprobacion de vacaciones meta description">
<div id="overlay_load" class="overlay_muya">
    <img src="{{ asset('assets/img/GM.png') }}" alt="login" class="fading-element">
</div>
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

{{-- Lista de colaboradores --}}
<section class="section dashboard d-md-block">
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
                                                <th scope="col" width="10%">Firma del convenio</th>
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
<section class="section dashboard d-md-block">
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
                                                <th scope="col" width="10%">Subestado</th>
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
                            <br>
                            <div class="row">
                                <div class="offset-md-8 col-1 col-md-1" style="text-align: -webkit-right">
                                    <input class="form-check-input checkVerde" type="checkbox"  id="CheckVerEquipEquip">
                                </div>
                                <div class="col-10 col-md-3" style="text-align: -webkit-left">
                                    <div class="form-group">
                                        <h5 style="font-size: 17px;">Visualizar equipos de mi equipo</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>        
        
    </div>  
</section>

{{-- 
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
                                                <th scope="col" width="10%">Inicio</th>
                                                <th scope="col" width="10%">Fin</th>
                                                <th scope="col" width="5%">Días</th>
                                                <th scope="col" width="10%">Reincorpora</th>
                                                <th scope="col" width="10%">Estado</th>
                                                <th scope="col" width="10%">Subestado</th>
                                                <th scope="col" width="10%">Alerta reglas</th>
                                                <th scope="col" width="10%">Alerta reprog.</th>
                                                <th scope="col" width="5%">Aceptar</th>
                                                <th scope="col" width="5%">Rechazar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Milagros Huaman A.</td>
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
</section> --}}

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
                                    <h1 class="card-title tarjeta-vaca-foco"><b><span id="indPromVac"></span></b></h1>
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
                    <h5 class="card-title" style="font-size: 28px;">Reporte de vacaciones por trabajador</h5>
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
                            <input class="form-check-input checkVerde" checked type="checkbox" value="" id="checkVisualizarVacaciones">
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
                    <h5 class="card-title" style="font-size: 28px;">Reporte de solicitud de vacaciones</h5>
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
{{session('alert')}}
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

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/es.js"></script>

<!-- Template Main JS File -->
<script src="{{asset('assets/js/aprobacionVacaciones.js')}}"></script>
<script type="text/javascript">
window.onload= function() {
    // Iniciar el temporizador cuando la página se carga
    iniciarTemporizador();

    if ('@php echo(session('flgResponsable')) @endphp' != 'SI') {
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
                
                if(element['flg_solicitud_firmado'] == 'SI'){
                    alertaRegla = '<a href="#" style="font-size: 28px;color:red;" title="Falta firma de solicitud de vacaciones"><span class="bi bi-exclamation-triangle"></span></a>';
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
                "aaSorting":[],
                columns: [
                    { title: 'Colaborador' },
                    { title: 'Vacaciones generadas' },
                    { title: 'Vacaciones programadas' },
                    { title: 'Saldo' },
                    { title: 'Alerta' },
                    { title: 'Firma de convenio' },
                    { title: 'No cruzar con jefe' },
                    { title: 'No cruzar entre si' },
                ],
                dom: 'trip',
                processing: true,
                "pageLength": 20
            });
            // //console.log(filasArray1);
        }
    });

    listaSolicitudesxAprobar();

    //---------------------------reglas------------------------------
    $.ajax({
        url: 'lista/ListarReglasJefe', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        success: function(respuesta){ 
            //console.log(respuesta);
            var body = document.getElementById('bodyRegla');
            var aux = (respuesta['response']=='') ? 'No hay reglas definidas por el momento..' : respuesta['response'][0]['dsc_regla'];
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
                $("#annoIniVE").append('<option value="'+ word['codvar'] +'">'+ word['desvar1'] +'</option>');
                $("#annoFinVE").append('<option value="'+ word['codvar'] +'">'+ word['desvar1'] +'</option>');

            });
        },//success
        error(e){
            console.log(e.message);
        }//error
    });//ajax muestraAnno

    //---------------------------indicadores------------------------------
    var codGrupo = ('@php echo(session('codGrupoVac')) @endphp' != '') ? '@php echo(session('codGrupoVac')) @endphp' : '%';

    $.ajax({
        url: 'lista/ObtenerDiasPendiente', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        data:{'codTra':'@php echo(session('codTrabajador')) @endphp','codGrupo':codGrupo,'codSede':'%','codArea':'%'},
        success: function(respuesta){ 
            console.log(respuesta['response']['ctd_dia_pendiente']);
            var indicador = document.getElementById('indPromVac');
            indicador.innerHTML = respuesta['response']['ctd_dia_pendiente'];
        },//success
        error(e){
            console.log(e.message);
        }//error
    });//ajax ObtenerDiasPendiente hasta hoy

    $.ajax({
        url: 'lista/ObtenerPromedioDiasPendiente', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        data:{'codTra':'@php echo(session('codTrabajador')) @endphp','codGrupo':codGrupo,'codSede':'%','codArea':'%'},
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
        data:{'codTra':'@php echo(session('codTrabajador')) @endphp','codGrupo':codGrupo,'codSede':'%','codArea':'%'},
        success: function(respuesta){ 
            console.log(respuesta['response']['ctd_reprogramaciones']);
            var indicador = document.getElementById('indRepVac');
            indicador.innerHTML = respuesta['response']['ctd_reprogramaciones'];
        },//success
        error(e){
            console.log(e.message);
        }//error
    });//ajax ObtenerReprogramaciones

    const actual = new Date();
    const month = actual.getMonth();
    $("#periodo").val(month);
    $('#periodo').trigger('change');
    $("#periodoFin").val(month);
    $('#periodoFin').trigger('change'); 

}

var checkboxEquipo = document.getElementById("CheckVerEquipEquip");
checkboxEquipo.addEventListener("change", function() {
    listaSolicitudesxAprobar();
});


//------------------------Listado Aprobacion de solicitud----------------------------
function listaSolicitudesxAprobar() {
    var checkboxEquipo = document.getElementById("CheckVerEquipEquip");
    var verEquipos = checkboxEquipo.checked ? 'SI' : 'NO';
    
    $.ajax({
        url: 'lista/ListarSolicitudColaboradorxAprobar', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        data:{'codTrabajador':'@php echo(session('codTrabajador')) @endphp','flg_equipos':verEquipos},
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
                var codTra = "'"+element['cod_trabajador']+"'";
                var dscTra = "'"+element['dsc_trabajador']+"'";
                var regla1 = "'"+element['cod_regla']+"'";
                var regla2 = "'"+element['cod_regla2']+"'";
                
                if(element['flg_alerta_regla'] == 'NO' || element['flg_alerta_regla'] == ''){
                    alertaRegla = '';
                }else{
                    tipo = "'reglas'";
                    alertaRegla = '<span class="bi bi-exclamation-triangle" onclick="muestraInfo('+codTra+','+dscTra+','+tipo+','+regla1+','+regla2+')" style="font-size: 28px;color:red;"></span>';
                }
                
                if(element['flg_reprogramar'] == 'NO' || element['flg_reprogramar'] == ''){
                    alertaReprog = '';
                }else{
                    tipo = "'reprogramacion'";
                    alertaReprog = '<span class="bi bi-exclamation-triangle" onclick="muestraInfo('+codTra+','+dscTra+','+tipo+','+element['num_linea']+','+element['num_linea_origen']+');" style="font-size: 28px;color:red;"></span>';
                }
                
                if (element['dsc_estado'] == 'APROBADO' || element['dsc_estado'] == 'RECHAZADO') {
                    disabled = 'disabled';
                    equipo = 'SI';
                }else{
                    disabled = '';
                    equipo = 'NO';
                }

                if(element['flg_equipo'] && element['flg_equipo'] == 'NO'){
                    disabled = 'disabled';
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
                    element['dsc_subestado_solicitud'],
                    alertaRegla,
                    alertaReprog,
                    '<input class="form-check-input checkDorado" '+disabled+' type="radio" name="radioBtnSol'+element['cod_trabajador']+'-'+element['num_linea']+'" id="aprobSol" value="APROBAR-'+element['cod_trabajador']+'-'+element['num_linea']+'-'+fchIni+'-'+fchFin+'">',
                    '<input class="form-check-input checkVerde" type="radio" '+disabled+' name="radioBtnSol'+element['cod_trabajador']+'-'+element['num_linea']+'" id="recSol" value="RECHAZAR-'+element['cod_trabajador']+'-'+element['num_linea']+'-'+fchIni+'-'+fchFin+'">',
                    element['flg_equipo']
                ];
                filasArray.push(filaData);
            });
            //console.log(filasArray);
            if ($.fn.dataTable.isDataTable('#tablaSolAprobar')) {
                $('#tablaSolAprobar').DataTable().clear();
                $('#tablaSolAprobar').DataTable().destroy();        
            }
            $('#tablaSolAprobar').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json'
                },
                data: filasArray,
                "aaSorting":[],
                columns: [
                    { title: 'Colaborador' },
                    { title: 'Inicio' },
                    { title: 'Fin' },
                    { title: 'Días' },
                    { title: 'Reincorpora' },
                    { title: 'Estado' },
                    { title: 'Subestado' },
                    { title: 'Alerta reglas' },
                    { title: 'Alerta reprog.' },
                    { title: 'Aceptar' },
                    { title: 'Rechazar' },
                ],
                rowCallback:function(row,data)
                {
                    if(data[11] == "NO")
                    {
                        $($(row).find("td")).css("color","#23817b");
                    }
                },
                columnDefs: [
                    { type: 'date-uk', targets:[1,2,4] }
                ],
                dom: 'trip',
                processing: true,
                "pageLength": 20
            });
            // //console.log(filasArray);
        }
    });
    
}//funcion lista solicitudes por aprobar
//-----------------------Procesar solicitudes de vacaciones---------------------
var btnProcesar = document.getElementById('btnProcSolVac');
btnProcesar.addEventListener("click", function() {
    $("#overlay_load").show();
    btnProcesar.setAttribute('disabled','disabled');
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
            
            procesarSolicitud(accion, codTrabajador, numLinea, fchIni, fchFin);
        }
    }
    $("#overlay_load").hide();
});

function procesarSolicitud(accion, codTrabajador, numLinea, fchIni, fchFin){
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
                enviaRechazoVacJefe(codTrabajador,fchIni,fchFin,numLinea)
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
                btnProcesar.removeAttribute('disabled');
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
                if (respuesta['response']['dsc_retorno'] == 'OK') {
                    enviaAprobacionVac(codTrabajador,fchIni,fchFin,numLinea);
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
                }else{
                    Swal.fire({
                        icon: 'warning',
                        text: respuesta['response']['dsc_retorno'],
                        confirmButtonText: 'Continuar',
                        confirmButtonColor: '#a18347',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            console.log('data con error',respuesta);
                                location.reload();
                        }
                    })
                }

            },//success
            error(e){
                console.log(e.message);
                Swal.fire({
                    icon: 'warning',
                    text: 'Ha ocurrido un error intentelo nuevamente.',
                    confirmButtonText: 'Continuar',
                    confirmButtonColor: '#a18347',
                })
                btnProcesar.removeAttribute('disabled');
            }//error
        });//ajax
    }
}
//------------------------funciones para enviar mensajes------------------------------

function enviaAprobacionVac(codTra,fchIni,fchFin,numSolicitud) {
    $("#overlay_load").show();
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

            enviaCorreoMensaje(codTra,codTra,solicitante,'4002','',asunto,actividad,numSolicitud);

            //-------------------------Cambia estado de mensaje a finalizado---------------------------
            data = {
                    'num_item':numSolicitud
            }
            $.ajax({
                url: 'lista/ActualizarEstadoMensaje', 
                method: "GET",
                crossDomain: true,
                dataType: 'json',
                data:{'data':data},
                success: function(respuesta){
                    console.log('actualizaMensaje',respuesta);
                },//success
                error(e){
                    console.log(e.message);
                }//error
            });

        },//success
        error(e){
            console.log(e.message);
        }//error
    });//ajax  
    $("#overlay_load").hide();
}

function enviaRechazoVacJefe(codTra,fchIni,fchFin,numSolicitud) {
    $("#overlay_load").show();    
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

            enviaCorreoMensaje(codTra,codTra,solicitante,'4003','',asunto,actividad,numSolicitud);

            //-------------------------Cambia estado de mensaje a finalizado---------------------------
            data = {
                    'num_item':numSolicitud
            }
            $.ajax({
                url: 'lista/ActualizarEstadoMensaje', 
                method: "GET",
                crossDomain: true,
                dataType: 'json',
                data:{'data':data},
                success: function(respuesta){
                    console.log('actualizaMensaje',respuesta);
                },//success
                error(e){
                    console.log(e.message);
                }//error
            });

        },//success
        error(e){
            console.log(e.message);
        }//error
    });//ajax  
    $("#overlay_load").hide();
}

//-----------------------Guarda configuraciones-----------------------------------

var btnConfig = document.getElementById('actualizaConfig');
btnConfig.addEventListener("click", function() {
    $("#overlay_load").show();
    btnConfig.setAttribute('disabled','disabled');
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
        $("#overlay_load").hide();
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
        $("#overlay_load").hide();
        Swal.fire({
            icon: 'warning',
            text: 'Ha ocurrido un error. Inténtelo nuevamente.',
            confirmButtonText: 'Continuar',
            confirmButtonColor: '#a18347',
        });
        btnConfig.removeAttribute('disabled');
    });
});

//-----------------------Procesar descargar reporte solicitudes de vacaciones---------------------
var btnProcesarD = document.getElementById('btnDescargSolVac');
btnProcesarD.addEventListener("click", function() {
    btnProcesarD.setAttribute('disabled','disabled');
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
        url: 'lista/ListarSolicitudVacacionesxResponsable', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        //data:{'codTra':'@php echo(session('codTrabajador')) @endphp','fchIni':fchInicio,'fchFin':fchFin},
        data:{'codTra':codTra,'fchIni':fchInicio,'fchFin':fchFin,'origen':'APR','visualizar':flgTodos},
        success: function(respuesta){
            console.log(respuesta['response'].length);
            if (respuesta['response'].length > 0) {
                data = [];
                var header = ['SOLICITUD','TRABAJADOR','NOMBRES Y APELLIDOS','ÁREA','SEDE','CARGO','FECHA INICIO VAC.','FECHA FIN VAC.','DÍAS VAC.','DÍA DE INCORPORACIÓN','ESTADO ACTUAL SOL.','SUBESTADO APROBACIÓN','SUBESTADO RECHAZO','SUBESTADO SOLICITUD','ESTADO FIRMA SOL.',' ESTADO DE PAGO','CANT. DÍAS EXCEDIDOS','REPROGRAMACIÓN','FECHA REGISTRO SOL.','CÓDIGO TRABAJADOR REGISTRÓ','FECHA APROBACIÓN SOL.','CÓDIGO TRABAJADOR DEL APROBADOR','FECHA RECHAZO SOL.','CÓDIGO TRABAJADOR DE RECHAZO'];
                respuesta['response'].forEach(element => {

                    var fchIni = element['fch_inicio'].split('T');
                    fchIni = formatDate(fchIni[0]);
                    var fchInicio = (fchIni == '01/01/1900') ? '' : fchIni;
                    
                    var fchFin = element['fch_fin'].split('T');
                    fchFin = formatDate(fchFin[0]);
                    var fchFinal = (fchFin == '01/01/1900') ? '' : fchFin;

                    var fchReinc = element['fch_retorno'].split('T');
                    fchReinc = formatDate(fchReinc[0]);
                    var fchRetorno = (fchReinc == '01/01/1900') ? '' : fchReinc;

                    var fchReg = element['fch_registro_solicitud'].split('T');
                    fchReg = formatDate(fchReg[0]);
                    var fchRegistro = (fchReg == '01/01/1900') ? '' : fchReg;
                    
                    var fchRechz = element['fch_rechazado'].split('T');
                    fchRechz = formatDate(fchRechz[0]);
                    var fchRechazo = (fchRechz == '01/01/1900') ? '' : fchRechz;

                    var fchAprob = element['fch_aprobado'].split('T');
                    fchAprob = formatDate(fchAprob[0]);
                    var fechaAproba = (fchAprob == '01/01/1900') ? '' : fchAprob;

                    var firmado = (element['flg_firmado'] == 'SI') ? 'FIRMADO' : 'NO FIRMADO';
                    var pagado = (element['flg_pagado'] == 'SI') ? 'PAGADO' : 'NO PAGADO';
                    var solicitudAnt = (element['num_linea_origen'] != 0) ? element['cod_trabajador']+'-'+element['num_linea_origen'] : '';

                    filaData = [
                        element['cod_trabajador']+'-'+element['num_linea'],
                        element['cod_trabajador'],
                        element['dsc_trabajador'],
                        element['dsc_area'],
                        element['dsc_sede'],
                        element['dsc_cargo'],
                        fchInicio,
                        fchFinal,
                        element['cant_dia'],
                        fchRetorno,
                        element['dsc_estado'],
                        element['dsc_subestado_aprobacion'],
                        element['dsc_subestado_rechazo'],
                        element['dsc_subestado_solicitud'],
                        firmado,
                        pagado,
                        element['ctd_dias_exceso'],
                        solicitudAnt,
                        fchRegistro,
                        element['cod_trabajador_registro'],
                        fechaAproba,
                        element['cod_trabajador_aprobado'],
                        fchRechazo,
                        element['cod_trabajador_rechazado']
                        
                    ]
                    data.push(filaData);
                });
                
                // Crear un libro de trabajo (workbook)
                var workbook = XLSX.utils.book_new();
                var worksheet = XLSX.utils.json_to_sheet(data);

                // Crear una hoja de cálculo (worksheet)
                XLSX.utils.sheet_add_aoa(worksheet, [header], { origin: 'A1' });

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

                btnProcesarD.removeAttribute('disabled');
            }else{
                Swal.fire({
                    icon: 'warning',
                    text: 'No existen registros a retornar para el período seleccionado.',
                    confirmButtonText: 'Continuar',
                    confirmButtonColor: '#a18347',
                });
                btnProcesarD.removeAttribute('disabled');
            }
        },//success
        error(e){
            console.log(e.message);
        }//error    
    });


});

//-----------------------Procesar descargar reporte vacaciones---------------------

var btnProcesarD = document.getElementById('buscarDoc');
btnProcesarD.addEventListener("click", function() {
    btnProcesarD.setAttribute('disabled','disabled');
    var fchInicio = document.getElementById('datepicker1').value;
    var fechaParts = fchInicio.split('-');
    var day = fechaParts[0];
    var month = fechaParts[1];
    var year = fechaParts[2];
    fchInicio = year + "-" + month + "-" + day;
    //console.log(fchInicio);
    var fchFin = document.getElementById('datepicker2').value;
    var fechaPartsF = fchFin.split('-');
    var dayF = fechaPartsF[0];
    var monthF = fechaPartsF[1];
    var yearF = fechaPartsF[2];
    fchFin = yearF + "-" + monthF + "-" + dayF;
    //console.log(fchFin);
    var chckDsc = document.getElementById('checkVisualizarVacaciones');
    var flgTodos = chckDsc.checked ? 'SI' : 'NO';
    var codTra = '@php echo(session('codTrabajador')) @endphp';

    $.ajax({
        url: 'lista/ListarReporteVacacionesxTrabajador',
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        data:{'codTra':codTra,'fchIni':fchInicio,'fchFin':fchFin,'origen':'APR','visualizar':flgTodos},
        success: function(respuesta){
           //console.log(respuesta['response']);
            if (respuesta['response'].length > 0) {
                var header = ['CODIGO TRABAJADOR','NOMBRES Y APELLIDOS','LOCALIDAD','CARGO','AREA','FECHA INGRESO','VACACIONES GENERADAS','VACACIONES SOLICITADAS','SALDO','ESTADO ADELANTO VACACIONES','GRUPO','TIPO COMISIONISTA','REQUIERE APROBACION','APROBADOR',' REQUIERE SUPERVISION','SUPERVISOR','REGLA'];
                var filasArray = [];

                respuesta['response'].forEach(element => {
                    var fch_ingreso = element['fch_ingreso'].split('T');
                    fch_ingreso = formatDate(fch_ingreso[0]);
                    var fch_ingreso2 = (fch_ingreso == '01/01/1900') ? '' : fch_ingreso;

                    filaData = [
                        element['cod_trabajador'],
                        element['dsc_trabajador'],
                        element['dsc_localidad'],
                        element['dsc_cargo'],
                        element['dsc_area'],
                        fch_ingreso2,
                        element['ctd_vacaciones_generadas'],
                        element['ctd_vacaciones_programadas'],
                        element['ctd_saldo'],
                        element['dsc_estado_adelanto_vacaciones'],
                        element['dsc_grupo'],
                        element['dsc_comisionista'],
                        element['flg_requiere_aprobacion'],
                        element['dsc_trabajador_aprobacion'],
                        element['flg_requiere_supervision'],
                        element['dsc_trabajador_supervision'],
                        element['dsc_regla']
                    ]
                    filasArray.push(filaData);
                });
                // Crear un libro de trabajo (workbook)
                var workbook = XLSX.utils.book_new();
                var worksheet = XLSX.utils.json_to_sheet(filasArray);

                // Crear una hoja de cálculo (worksheet)
                XLSX.utils.sheet_add_aoa(worksheet, [header], { origin: 'A1' });

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
                link.download = 'reporteVacaciones'+codTra+'.xlsx';

                // Simular un clic en el enlace para iniciar la descarga
                link.click();
                btnProcesarD.removeAttribute('disabled');
            }else{
                Swal.fire({
                    icon: 'warning',
                    text: 'No existen registros a retornar para el período seleccionado.',
                    confirmButtonText: 'Continuar',
                    confirmButtonColor: '#a18347',
                });
                btnProcesarD.removeAttribute('disabled');
            }

        },//success
        error(e){
            console.log(e.message);
        }//error    
    });

});

// --------------------------Carga masiva solicitudes-------------------------------

document.getElementById('formularioCargaMasiva').addEventListener('submit', function(e) {
    e.preventDefault(); // Evita que el formulario se envíe de forma tradicional
    $("#overlay_load").show();
    var codTraSolic = '@php echo(session('codTrabajador')) @endphp';
    var dscSolicitante = '';
    $.ajax({
        url: 'api/ObtenerTrabajador', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        data:{'cod_trabajador':codTraSolic},
        success: function(respuesta){
            dscSolicitante = respuesta['response']['dsc_trabajador'];
        }
    });//ajax

    // Obtiene los datos del formulario
    var formData = new FormData(this);

    // Realiza la petición AJAX
    fetch('{{ route('validarArchivo') }}', {
        method: 'POST',
        body: formData
    }).then(response => response.json()).then(dataV => {
        // console.log(dataV);
        if (dataV.response.dsc_observacion == null) {    
            fetch('{{ route('subirArchivo') }}', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json()).then(data => { 
                if (data.error) {
                    // Si hay un error, muestra la alerta de error
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        html: data.error,
                        confirmButtonColor: '#a18347',
                        confirmButtonText: 'Cerrar'
                    });
                } else if(data.response.dsc_observacion == "OK"){
                    // Si no hay error, muestra la alerta de éxito
                    $("#overlay_load").show();
                    var numImport = data.response.num_importacion;
                    $.ajax({
                        url: 'lista/ListarSolicitudMasiva', 
                        method: "GET",
                        crossDomain: true,
                        dataType: 'json',
                        data:{'numImport':numImport},
                        success: function(respuesta){
                            console.log('lista solicitud',respuesta);
                            respuesta['response'].forEach(element => {
                                var codTra = element['cod_trabajador'];
                                var fchLimite = element['fch_limite'];
                                var fchInicio = element['fch_inicio'];
                                var fchFin = element['fch_fin'];
                                var numSolicitud = element['num_solicitud'];
                                var estado = 1;
                                var codMensaje = '';
                                var asunto = '';
                                var actividad = '';
                                var estado = element['dsc_estado'];
                                if(estado == 'SOLICITADO'){  //Solicitado
                                    $.ajax({
                                        url: 'api/ObtenerTrabajador', 
                                        method: "GET",
                                        crossDomain: true,
                                        dataType: 'json',
                                        data:{'cod_trabajador':codTra},
                                        success: function(respuesta){
                                            var codJefe = respuesta['response']['cod_supervisor'];
                                            codMensaje = '4001';
                                            codMensajeJefe = '1002';
                                            asunto = 'Ingreso de solicitud de vacaciones';
                                            actividad = 'La solicitud de vacaciones ha sido ingresada. (Inicio: '+fchInicio+', fin: '+fchFin+')';
                                            asuntoJefe = 'Aceptar/rechazar una solicitud de vacaciones.'; 
                                            //envia correo a trabajador
                                            enviaCorreoMensaje(codTra,codTraSolic,dscSolicitante,codMensaje,'',asunto,actividad,numSolicitud);

                                            //envia correo jefe de trabajador
                                            enviaCorreoMensaje(codJefe,codTraSolic,dscSolicitante,codMensajeJefe,fchLimite,asuntoJefe,asuntoJefe,numSolicitud);
                                        }
                                    });
                                }else if (estado == 'RECHAZADO'){//Rechazado
                                    codMensaje = '4003';
                                    asunto = 'La solicitud de vacaciones ha sido rechazada';
                                    actividad = 'La solicitud de vacaciones ha sido rechazada. (Inicio: '+fchInicio+', fin: '+fchFin+')';
                                    //envia correo a trabajador
                                    enviaCorreoMensaje(codTra,codTraSolic,dscSolicitante,codMensaje,'',asunto,actividad,numSolicitud);
                                }else if (estado == 'APROBADO'){//Aprobado
                                    codMensajeA = '4001';
                                    asuntoA = 'Ingreso de solicitud de vacaciones';
                                    actividadA = 'La solicitud de vacaciones ha sido ingresada. (Inicio: '+fchInicio+', fin: '+fchFin+')';
                                    //envia correo a trabajador
                                    enviaCorreoMensaje(codTra,codTraSolic,dscSolicitante,codMensajeA,'',asuntoA,actividadA,numSolicitud);

                                    codMensaje = '4002';
                                    asunto = 'La solicitud de vacaciones ha sido aprobada';
                                    actividad = 'La solicitud de vacaciones ha sido aprobada. (Inicio: '+fchInicio+', fin: '+fchFin+')';
                                    //envia correo a trabajador
                                    enviaCorreoMensaje(codTra,codTraSolic,dscSolicitante,codMensaje,'',asunto,actividad,numSolicitud);
                                }
                            });//foreach
                            numSolicitudCarga = 404;
                            //envia correo a trabajador que cargo el archivo
                            enviaCorreoMensaje(codTraSolic,codTraSolic,dscSolicitante,'4005','','Has realizado la carga masiva de solicitud de vacaciones.','Has realizado la carga masiva de solicitud de vacaciones.',numSolicitudCarga);
                            $("#overlay_load").hide();
                            Swal.fire({
                                icon: 'success',
                                title: 'Éxito',
                                html: data.mensaje,
                                confirmButtonColor: '#a18347',
                                confirmButtonText: 'Cerrar'
                            }).then((result) => {
                                // Redirige a la página deseada después de cerrar la alerta de éxito
                                if (result.isConfirmed) {
                                    location.reload();
                                }
                            });
                        },//success
                        error(e){
                            console.log(e.message);
                        }//error
                    });
                }else if (data.response.dsc_observacion != "OK") {
                    $("#overlay_load").hide();
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        html: data.mensaje,
                        confirmButtonColor: '#a18347',
                        confirmButtonText: 'Cerrar'
                    });
                }
            });
        }else{
            $("#overlay_load").hide();
            Swal.fire({
                icon: 'question',
                // text: "Existen reglas que no se cumplen. ¿Desea continuar?",
                html: dataV.response.dsc_observacion,
                showDenyButton: true,
                confirmButtonText: "Continuar carga masiva",
                confirmButtonColor: '#a18347',
                denyButtonText: 'Abortar carga masiva'
            }).then((result) => {
                if (result.isConfirmed) {
                    fetch('{{ route('subirArchivo') }}', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.json()).then(data => { 
                        if (data.error) {
                            // Si hay un error, muestra la alerta de error
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                html: data.error,
                                confirmButtonColor: '#a18347',
                                confirmButtonText: 'Cerrar'
                            });
                        } else if(data.response.dsc_observacion == "OK"){
                            // Si no hay error, muestra la alerta de éxito
                            var numImport = data.response.num_importacion;
                            $.ajax({
                                url: 'lista/ListarSolicitudMasiva', 
                                method: "GET",
                                crossDomain: true,
                                dataType: 'json',
                                data:{'numImport':numImport},
                                success: function(respuesta){
                                    console.log('lista solicitud',respuesta);
                                    respuesta['response'].forEach(element => {
                                        var codTra = element['cod_trabajador'];
                                        var fchLimite = element['fch_limite'];
                                        var fchInicio = element['fch_inicio'];
                                        var fchFin = element['fch_fin'];
                                        var numSolicitud = element['num_solicitud'];
                                        var estado = 1;
                                        var codMensaje = '';
                                        var asunto = '';
                                        var actividad = '';
                                        var estado = element['dsc_estado'];
                                        if(estado == 'SOLICITADO'){  //Solicitado
                                            $.ajax({
                                                url: 'api/ObtenerTrabajador', 
                                                method: "GET",
                                                crossDomain: true,
                                                dataType: 'json',
                                                data:{'cod_trabajador':codTra},
                                                success: function(respuesta){
                                                    var codJefe = respuesta['response']['cod_supervisor'];
                                                    codMensaje = '4001';
                                                    codMensajeJefe = '1002';
                                                    asunto = 'Ingreso de solicitud de vacaciones';
                                                    actividad = 'La solicitud de vacaciones ha sido ingresada. (Inicio: '+fchInicio+', fin: '+fchFin+')';
                                                    asuntoJefe = 'Aceptar/rechazar una solicitud de vacaciones.'; 
                                                    //envia correo a trabajador
                                                    enviaCorreoMensaje(codTra,codTraSolic,dscSolicitante,codMensaje,'',asunto,actividad,numSolicitud);

                                                    //envia correo jefe de trabajador
                                                    enviaCorreoMensaje(codJefe,codTraSolic,dscSolicitante,codMensajeJefe,fchLimite,asuntoJefe,asuntoJefe,numSolicitud);
                                                }
                                            });
                                        }else if (estado == 'RECHAZADO'){//Rechazado
                                            codMensaje = '4003';
                                            asunto = 'La solicitud de vacaciones ha sido rechazada';
                                            actividad = 'La solicitud de vacaciones ha sido rechazada. (Inicio: '+fchInicio+', fin: '+fchFin+')';
                                            //envia correo a trabajador
                                            enviaCorreoMensaje(codTra,codTraSolic,dscSolicitante,codMensaje,'',asunto,actividad,numSolicitud);
                                        }else if (estado == 'APROBADO'){//Aprobado
                                            codMensajeA = '4001';
                                            asuntoA = 'Ingreso de solicitud de vacaciones';
                                            actividadA = 'La solicitud de vacaciones ha sido ingresada. (Inicio: '+fchInicio+', fin: '+fchFin+')';
                                            //envia correo a trabajador
                                            enviaCorreoMensaje(codTra,codTraSolic,dscSolicitante,codMensajeA,'',asuntoA,actividadA,numSolicitud);
                                            
                                            codMensaje = '4002';
                                            asunto = 'La solicitud de vacaciones ha sido aprobada';
                                            actividad = 'La solicitud de vacaciones ha sido aprobada. (Inicio: '+fchInicio+', fin: '+fchFin+')';
                                            //envia correo a trabajador
                                            enviaCorreoMensaje(codTra,codTraSolic,dscSolicitante,codMensaje,'',asunto,actividad,numSolicitud);
                                        }
                                    });//foreach
                                    numSolicitudCarga = 404;
                                    //envia correo a trabajador que cargo el archivo
                                    enviaCorreoMensaje(codTraSolic,codTraSolic,dscSolicitante,'4005','','Has realizado la carga masiva de solicitud de vacaciones.','Has realizado la carga masiva de solicitud de vacaciones.',numSolicitudCarga);
                                    $("#overlay_load").hide();
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Éxito',
                                        html: data.mensaje,
                                        confirmButtonColor: '#a18347',
                                        confirmButtonText: 'Cerrar'
                                    }).then((result) => {
                                        // Redirige a la página deseada después de cerrar la alerta de éxito
                                        if (result.isConfirmed) {
                                            location.reload();
                                        }
                                    });
                                },//success
                                error(e){
                                    console.log(e.message);
                                }//error
                            });
                        }else if (data.response.dsc_observacion != "OK") {
                            $("#overlay_load").hide();
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                html: data.mensaje,
                                confirmButtonColor: '#a18347',
                                confirmButtonText: 'Cerrar'
                            });
                        }
                    });
                } else if (result.isDenied) {
                    Swal.fire({
                        icon: 'info',
                        text: "Carga masiva abortada",
                        confirmButtonColor: '#a18347',
                        confirmButtonText: 'Cerrar'
                    });
                }
            });
        }
    }).catch(error => {
        $("#overlay_load").hide();
        console.error('Error:', error);
    });
});

// $('#annoIniVE,#periodo, #annoFinVE, #periodoFin').select2({
//     language: "es",
//     theme: "classic",
//     width: 'resolve',
//     // placeholder: "Escriba el nombre del trabajador",
//     allowClear: true,
//     // dir: "rtl",
// });

$("#ayudaCargaMasivaApr").click(function () {
    Swal.fire({
        icon: 'info',
        html: "<p style='text-align: center;'>Solicitar formato Excel a gdh.</p>",
        confirmButtonColor: '#a18347',
        confirmButtonText: 'Cerrar'
    })
});

</script>
