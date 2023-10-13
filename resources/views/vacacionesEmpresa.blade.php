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

<x-layouts.app title="vacacionesEmpresa" meta-description="Home meta description">

  <main id="main" class="main">
    <div class="pagetitle">
        <h1>Vacaciones de la empresa</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="home.html">Inicio</a></li>
            <li class="breadcrumb-item active">Vacaciones</li>
            <li class="breadcrumb-item active">Empresa</li>
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

    <section class="section dashboard">
        <div class="row">
            <div class="col-md-12  d-md-block">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="card-title" style="font-size: 18px;">Lista de colaboradores a nivel nacional</h5>
                            </div>
                            <div class="col-md-2 offset-md-4 btnListaVacaciones">
                                <button class="btn btn-success btnDorado" id="actualizaConfigEmp">Actualizar</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 table-responsive" style="padding-right: 2rem;height: 23rem;">
                                <table class="table table-striped " data-page-length="20" id="listaColabEmp" style="text-align: center; height: 300px;">
                                    <thead style="text-align: center;">
                                        <tr>
                                            <th scope="col" width="10%">Colaborador</th>
                                            <th scope="col" width="10%">Jefe</th>
                                            <th scope="col" width="10%">Sede</th>
                                            <th scope="col" width="10%">Área</th>
                                            <th scope="col" width="8%">Vacaciones generadas</th>
                                            <th scope="col" width="8%">Vacaciones programadas</th>
                                            <th scope="col" width="5%">Saldo</th>
                                            <th scope="col" width="5%">Alerta</th>
                                            <th scope="col" width="5%">Firma del convenio</th>
                                            <th scope="col" width="12%">No cruzar con jefe</th>
                                            <th scope="col" width="17%">No cruzar entre si</th>
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
    </section>
    

    <section class="section dashboard">
        <div class="row">
            <div class="col-md-12 d-md-block">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="card-title" style="font-size: 18px;">Solicitudes por aprobar</h5>
                            </div>
                            <div class="col-md-2 offset-md-4 btnListaVacaciones">
                                <button class="btn btn-success btnDorado" id="btnProcSolVacEmp">Actualizar</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 table-responsive" style="padding-left: 1rem;padding-right: 1rem;height: 23rem;">
                                <table class="table table-striped " data-page-length="20" id="tablaSolAprobarEmp" style="text-align: center; height: 300px;">
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
                                            <th scope="col" width="5%">Anular</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- <tr>
                                            <td>Milagros Huaman A.</td>
                                            <td>13/02/2023</td>
                                            <td>20/02/2023</td>
                                            <td>3</td>
                                            <td>28/02/2023</td>
                                            <td>Rechazado</td>
                                            <td><span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;"></span></td>
                                            <td></td>
                                            <td>
                                                <button class="btn btn-success btnDorado" onclick="apruebaSolicitud();"><span class="bi bi-check-circle"></span></button>
                                            </td>
                                            <td>
                                                <button class="btn btn-danger" onclick="rechazaSolicitud();"><span class="bi bi-x-circle"></span></button>
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
    </section>

      <section class="section dashboard">
        <div class="row">
          <div class="col-md-10 offset-md-1">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 28px;">Indicadores de gestión</h5>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 style="font-size: 17px; text-align: center; padding-top: 1rem;">Promedio de días pendientes de vacaciones del equipo <b>hasta fin de año</b></h5>
                                    <hr>
                                    <h1 class="tarjeta-vaca-foco"><b><span id="indPromVacPend"></span></b></h1>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12" style="margin-bottom: 1rem;">
                                            <div class="form-group">
                                                <select name="sedePromVacPend" id="sedePromVacPend" class="form-control selectForm">
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <select name="areaPromVacPend" id="areaPromVacPend" class="form-control selectForm">
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 style="font-size: 17px;text-align: center; padding-top: 1rem;">Promedio de días pendientes de vacaciones del equipo <b>a la fecha de hoy</b></h5>
                                    <hr>
                                    <h1 class="tarjeta-vaca-foco"><b><span id="indPromVacPendHoy"></span></b></h1>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12" style="margin-bottom: 1rem;">
                                            <div class="form-group">
                                                <select name="sedePromVacPendHoy" id="sedePromVacPendHoy" class="form-control selectForm">
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <select name="areaPromVacPendHoy" id="areaPromVacPendHoy" class="form-control selectForm">
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 style="font-size: 17px;text-align: center; padding-top: 1rem;padding-bottom:1rem;">Número de reprogramaciones realizadas en el año del equipo</h5>
                                    <hr>
                                    <h1 class="tarjeta-vaca-foco"><b><span id="indRepVac"></span></b></h1>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12" style="margin-bottom: 1rem;">
                                            <div class="form-group">
                                                <select name="sedeReprog" id="sedeReprog" class="form-control selectForm">
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <select name="areaReprog" id="areaReprog" class="form-control selectForm">
                                                </select>
                                            </div>
                                        </div>
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

    {{-- <section class="section dashboard">
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
                                    <h5><button class="btn btn-success btnDorado" id="btnDescRepVacEmp">Descargar</button></h5>
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
    </section> --}}

    <section class="section dashboard">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 28px;">Descargar solicitudes de vacaciones</h5>
                        <div class="row">
                            <div class="col-3 offset-md-2 col-md-1" style="margin-bottom: 1rem;">
                                <div class="form-group">
                                    <span>Inicio:</span>
                                </div>
                            </div>
                            <div class="col-9 col-md-2" style="margin-bottom: 1rem;">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="datepicker3" placeholder="Seleccione..">
                                </div>
                            </div>
                            <div class="col-3 col-md-1" style="margin-bottom: 1rem;">
                                <div class="form-group">
                                    <span>Fin:</span>
                                </div>
                            </div>
                            <div class="col-9 col-md-2" style="margin-bottom: 1rem;">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="datepicker4" disabled>
                                </div>
                            </div>
                            <div class="col-md-2" style="text-align: -webkit-center">
                                <div class="form-group">
                                    <h5><button class="btn btn-success btnDorado" id="btnDesSolEmp">Descargar</button></h5>
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
    {{-- -----------REGLAS DE SOLICITUD DE VACACIONES-------------- --}}
    <section class="section dashboard">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 28px;">Reglas de solicitud de vacaciones</h5>
                        <div class="row">
                            <div class="col-md-2 offset-md-2" style="text-align: -webkit-center">
                                <div class="form-group">
                                    <h5><button class="btn btn-success btnDorado" data-bs-toggle="modal" data-bs-target="#ModalReglas" style="width: -webkit-fill-available;">Ver reglas</button></h5>
                                </div>
                            </div>  
                            <div class="col-md-2 offset-md-1" style="text-align: -webkit-center">
                                <div class="form-group">
                                    <h5><button class="btn btn-success btnDorado" data-bs-toggle="modal" data-bs-target="#ModalModifReglas" style="width: -webkit-fill-available;">Modificar reglas</button></h5>
                                </div>
                            </div> 
                            <div class="col-md-2 offset-md-1" style="text-align: -webkit-center">
                                <div class="form-group">
                                    <h5><button class="btn btn-success btnDorado" data-bs-toggle="modal" data-bs-target="#ModalParametros" style="width: -webkit-fill-available;">Parámetros</button></h5>
                                </div>
                            </div>                      
                        </div>
                    </div>
                </div>
            </div>  
        </div>    
    </section>

  </main><!-- End #main -->

<x-modals.vacacionesEmpresa/>
</x-layouts.app>


{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/es.js"></script>

<script src="{{asset('assets/js/vacacionesEmpresa.js')}}"></script>

<script type="text/javascript">
$('#sedePromVacPend, #sedePromVacPendHoy, #sedeReprog').select2({
    language: "es",
    theme: "classic",
    width: 'resolve',
    placeholder: "Sede",
    allowClear: true,
    // dir: "rtl",
});

$('#areaPromVacPend, #areaPromVacPendHoy, #areaReprog').select2({
    language: "es",
    theme: "classic",
    width: 'resolve',
    placeholder: "Área",
    allowClear: true,
    // dir: "rtl",
});

window.onload= function() {
    if ('@php echo(session('ventana4_3')) @endphp' != 'SI') {
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
        data:{'codTrabajador':'%'},
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
                var flgJefe = '';
                var flgEntre = '';
                if(element['flg_no_cruzar_jefe'] == 'SI'){
                    flgJefe = 'checked';
                }
                if(element['flg_no_cruzar'] == 'SI'){
                    flgEntre = 'checked';
                }

                var filaData = [
                    element['dsc_trabajador'],
                    element['dsc_responsable'],
                    element['dsc_sede'],
                    element['dsc_area'],
                    element['num_vacaciones_generadas'],
                    element['num_vacaciones_programadas'],
                    element['num_saldo'],
                    alertaRegla,
                    element['flg_acuerdo_firmado'],
                    '<input class="form-check-input checkDorado" type="checkbox" '+flgJefe+' value="JEFE-'+element['cod_trabajador']+'-'+element['cod_grupo_vacaciones']+'-'+element['num_linea']+'" id="flexCheckDefault">',
                    '<input class="form-check-input checkVerde" type="checkbox" '+flgEntre+' value="ENTRE-'+element['cod_trabajador']+'-'+element['cod_grupo_vacaciones']+'-'+element['num_linea']+'" id="flexCheckDefault2">'
                ];
                filasArray1.push(filaData);
            });
            //console.log(filasArray1);
            $('#listaColabEmp').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json'
                },
                data: filasArray1,
                columns: [
                    { title: 'Colaborador' },
                    { title: 'Responsable' },
                    { title: 'Sede' },
                    { title: 'Area' },
                    { title: 'Vacaciones generadas' },
                    { title: 'Vacaciones programadas' },
                    { title: 'Saldo' },
                    { title: 'Alerta' },
                    { title: 'Firma del convenio' },
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

    //------------------------Listado Aprobacion de solicitud----------------------------
    $.ajax({
        url: 'lista/ListarSolicitudColaboradorxAprobar', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        data:{'codTrabajador':'%'},
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
                var deshabilitaAprueba = '';
                var deshabilitaRechazo = '';
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

                if(element['flg_aprobado'] == 'SI' || element['flg_rechazado'] == 'SI'){
                    deshabilitaRechazo = 'disabled';
                    deshabilitaAprueba = 'disabled';
                }

                if(element['flg_aprobado'] == 'SI' && element['flg_pagado'] == 'NO'){

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
                    '<input class="form-check-input checkDorado" type="radio" name="radioBtnSol'+element['cod_trabajador']+'-'+element['num_linea']+'" '+deshabilitaAprueba+' id="aprobSol" value="APROBAR-'+element['cod_trabajador']+'-'+element['num_linea']+'-'+fchIni+'-'+fchFin+'">',
                    '<input class="form-check-input checkVerde" type="radio" name="radioBtnSol'+element['cod_trabajador']+'-'+element['num_linea']+'" id="recSol"  '+deshabilitaRechazo+' value="RECHAZAR-'+element['cod_trabajador']+'-'+element['num_linea']+'-'+fchIni+'-'+fchFin+'">',
                    '<input class="form-check-input checkDorado" type="radio" name="radioBtnSol'+element['cod_trabajador']+'-'+element['num_linea']+'" id="anularSol" value="ANULAR-'+element['cod_trabajador']+'-'+element['num_linea']+'-'+fchIni+'-'+fchFin+'">',
                ];
                filasArray.push(filaData);
            });
            //console.log(filasArray);
            $('#tablaSolAprobarEmp').DataTable({
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
                    { title: 'Alerta reglas' },
                    { title: 'Alerta reprog.' },
                    { title: 'Aceptar' },
                    { title: 'Rechazar' },
                    { title: 'Anular' },
                ],
                "columnDefs": [
                    { className: "centro", "targets": "_all"}
                ],
                dom: 'trip',
                processing: true,
                "pageLength": 20
            });
            // //console.log(filasArray);
        }
    });
    //-----Se muestra las reglas de trabajador y jefe--------------------------
    $.ajax({
        url: 'lista/ListarReglasTrabajador', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        success: function(respuesta){ 
            // console.log(respuesta);
            var body = document.getElementById('nav-colaborador');
            var body2 = document.getElementById('txtReglasColab');
            var aux = (respuesta['response'][0]['dsc_regla']=='') ? 'No hay reglas definidas por el momento..' : respuesta['response'][0]['dsc_regla'];
            body.innerHTML = aux;
            body2.innerHTML = aux;
        },//success
        error(e){
            console.log(e.message);
        }//error
    });//ajax ListarReglasTrabajador

    $.ajax({
        url: 'lista/ListarReglasJefe', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        success: function(respuesta){ 
            // console.log(respuesta);
            var body = document.getElementById('navSupervisor');
            var body2 = document.getElementById('txtReglasJefe');
            var aux = (respuesta['response'][0]['dsc_regla']=='') ? 'No hay reglas definidas por el momento..' : respuesta['response'][0]['dsc_regla'];
            body.innerHTML = aux;
            body2.innerHTML = aux;
        },//success
        error(e){
            console.log(e.message);
        }//error
    });//ajax ListarReglasJefe

    //--------------------------parametros--------------------------
    var fcha = new Date();
    var anno = fcha.getFullYear();
    $.ajax({
        url: 'lista/ListarParametro', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        data:{ "cod_anno": anno },
        success: function(result){
            //console.log('response',result['response'][0]['cantidad'])
            document.getElementById("parametroX").value = result['response'][0]['cantidad'];
            document.getElementById("parametroY").value = result['response'][1]['cantidad'];
        }
    });

    //--------------------------------sede y area----------------------------------
    var promesas = [];

    var promesa1 = $.ajax({
        url: 'lista/ListarLocalidad', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        success: function(respuesta){ 
            $("#sedePromVacPend").append('<option value="%">TODAS</option>');
            $("#sedePromVacPendHoy").append('<option value="%">TODAS</option>');
            $("#sedeReprog").append('<option value="%">TODAS</option>');
            respuesta['response'].forEach(function(word){
                
                $("#sedePromVacPend").append('<option value="'+ word['cod_localidad'] +'">'+ word['dsc_localidad'] +'</option>');
                $("#sedePromVacPendHoy").append('<option value="'+ word['cod_localidad'] +'">'+ word['dsc_localidad'] +'</option>');
                $("#sedeReprog").append('<option value="'+ word['cod_localidad'] +'">'+ word['dsc_localidad'] +'</option>');
            });
        },//success
        error(e){
            console.log(e.message);
        }//error
    });

    promesas.push(promesa1);

    var promesa2 = $.ajax({
        url: 'lista/ListarArea', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        success: function(respuesta){ 
            $("#areaPromVacPend").append('<option value="%">TODAS</option>');
            $("#areaPromVacPendHoy").append('<option value="%">TODAS</option>');
            $("#areaReprog").append('<option value="%">TODAS</option>');
            respuesta['response'].forEach(function(word){
                $("#areaPromVacPend").append('<option value="'+ word['cod_area'] +'">'+ word['dsc_area'] +'</option>');
                $("#areaPromVacPendHoy").append('<option value="'+ word['cod_area'] +'">'+ word['dsc_area'] +'</option>');
                $("#areaReprog").append('<option value="'+ word['cod_area'] +'">'+ word['dsc_area'] +'</option>');
            });
        },//success
        error(e){
            console.log(e.message);
        }//error
    });

    promesas.push(promesa2);

    Promise.all(promesas)
    .then(function() {
        indicadorPromVacPendHoy();
        indicadorReprogramaciones();
        indicadorPromVacPendAnno();
    });

    
}

//---------------------------indicadores------------------------------

function indicadorReprogramaciones() {
    var codSede = document.getElementById("sedeReprog").value;
    var codArea = document.getElementById("areaReprog").value;
    $.ajax({
        url: 'lista/ObtenerReprogramaciones', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        data:{'codTra':'%','codGrupo':'%','codSede':codSede,'codArea':codArea},
        success: function(respuesta){ 
            //console.log(respuesta['response']['ctd_reprogramaciones']);
            var indicador = document.getElementById('indRepVac');
            indicador.innerHTML = respuesta['response']['ctd_reprogramaciones'];
        },//success
        error(e){
            console.log(e.message);
        }//error
    });//ajax ObtenerReprogramaciones  
}

function indicadorPromVacPendHoy() {
    var codSede = document.getElementById("sedePromVacPendHoy").value;
    var codArea = document.getElementById("areaPromVacPendHoy").value;
    $.ajax({
        url: 'lista/ObtenerPromedioDiasPendiente', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        data:{'codTra':'%','codGrupo':'%','codSede':codSede,'codArea':codArea},
        success: function(respuesta){ 
            //console.log(respuesta['response']['ctd_dia_pendiente']);
            var indicador = document.getElementById('indPromVacPendHoy');
            indicador.innerHTML = respuesta['response']['ctd_dia_pendiente'];
        },//success
        error(e){
            console.log(e.message);
        }//error
    });//ajax ObtenerPromedioDiasPendiente hasta hoy
}

function indicadorPromVacPendAnno() {
    var codSede = document.getElementById("sedePromVacPendHoy").value;
    var codArea = document.getElementById("areaPromVacPendHoy").value;
    $.ajax({
        url: 'lista/ObtenerDiasPendiente', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        data:{'codTra':'%','codGrupo':'%','codSede':codSede,'codArea':codArea},
        success: function(respuesta){ 
           // console.log(respuesta['response']['ctd_dia_pendiente']);
            var indicador = document.getElementById('indPromVacPend');
            indicador.innerHTML = respuesta['response']['ctd_dia_pendiente'];
        },//success
        error(e){
            console.log(e.message);
        }//error
    });//ajax ObtenerDiasPendiente hasta fin de año
}

$("#sedeReprog").on("change", function() {
    indicadorReprogramaciones();
});

$("#areaReprog").on("change", function() {
    indicadorReprogramaciones();
});

$("#sedePromVacPendHoy").on("change", function() {
    indicadorPromVacPendHoy();
});

$("#areaPromVacPendHoy").on("change", function() {
    indicadorPromVacPendHoy();
});

$("#sedePromVacPend").on("change", function() {
    indicadorPromVacPendAnno();
});

$("#areaPromVacPend").on("change", function() {
    indicadorPromVacPendAnno();
});

//-----------------------Procesar solicitudes de vacaciones---------------------
var btnProcesar = document.getElementById('btnProcSolVacEmp');
btnProcesar.addEventListener("click", function() {
    btnProcesar.setAttribute('disabled','disabled');
    var tabla = document.getElementById("tablaSolAprobarEmp");
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
            codTrabajadorLista = aux[1];
            numLineaLista = aux[2];
            fchIni = aux[3];
            fchFin = aux[4];
            
            procesarSolicitud(accion, codTrabajadorLista, numLineaLista, fchIni, fchFin);
            
        }//for
    }//for
});

function procesarSolicitud(accion, codTrabajadorLista, numLineaLista, fchIni, fchFin) {
    var datos = {
        'cod_trabajador': codTrabajadorLista,
        'num_linea': numLineaLista,
        'cod_trabajador_accion': '@php echo(session('codTrabajador')) @endphp'
    }
    
    if(accion == 'RECHAZAR'){
        // console.log('data rechazado',data);
        $.ajax({
            url: 'api/RechazarSolicitudVacaciones', 
            method: "PUT",
            crossDomain: true,
            dataType: 'json',
            data:{'solVac':datos},
            success: function(respuesta){
                enviaRechazoVac(codTrabajadorLista,fchIni,fchFin,'REC',numLineaLista)
                console.log(respuesta);
                Swal.fire({
                    icon: 'success',
                    text: 'Se han procesado las solicitudes con éxito',
                    confirmButtonText: 'Continuar',
                    confirmButtonColor: '#a18347',
                }).then((result) => {
                    if (result.isConfirmed) {
                        console.log('data rechazado',datos);
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
            data:{'solVac':datos},
            success: function(respuesta){
                enviaAprobacionVac(codTrabajadorLista,fchIni,fchFin,numLineaLista);
                console.log(respuesta);
                Swal.fire({
                    icon: 'success',
                    text: 'Se han procesado las solicitudes con éxito',
                    confirmButtonText: 'Continuar',
                    confirmButtonColor: '#a18347',
                }).then((result) => {
                    if (result.isConfirmed) {
                        console.log('data aprobado',datos);
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
    }else if(accion == 'ANULAR'){
        $.ajax({
            url: 'func/ObtenerValidacionVacacionesPagadas', 
            method: "get",
            crossDomain: true,
            dataType: 'json',
            data:{'codTra':codTrabajadorLista,'numLinea':numLineaLista},
            success: function(respuesta){
                console.log(datos,' ObtenerValidacionVacacionesPagadas');
                if (respuesta == 'NO') {
                    $.ajax({
                        url: 'api/RechazarSolicitudVacaciones', 
                        method: "PUT",
                        crossDomain: true,
                        dataType: 'json',
                        data:{'solVac':datos},
                        success: function(respuesta){
                            enviaRechazoVac(codTrabajadorLista,fchIni,fchFin,'ANU',numLineaLista);
                            dataAnu = {
                                "cod_trabajador" : codTrabajadorLista ,
                                "num_linea": numLineaLista,
                                "cod_usuario" : '@php echo(session('codTrabajador')) @endphp' 
                            };
                            console.log(dataAnu);
                            $.ajax({
                                url: 'func/AnularGoceVacaciones',
                                method: "PUT",
                                crossDomain: true,
                                dataType: 'json',
                                data:{'data':dataAnu},
                                success: function(respuesta){
                                    console.log(respuesta)
                                },//success
                                error(e){
                                    console.log(e);
                                }//error
                            });//ajax

                            Swal.fire({
                                icon: 'success',
                                text: 'Se han procesado las solicitudes con éxito',
                                confirmButtonText: 'Continuar',
                                confirmButtonColor: '#a18347',
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    console.log('data anulado',datos);
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
                }else if(respuesta == 'SI'){
                    Swal.fire({
                        icon: 'warning',
                        text: 'No puede anular esta solicitud, ya se ha realizado el pago.',
                        confirmButtonText: 'Continuar',
                        confirmButtonColor: '#a18347',
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
    
//-----------------------Guarda configuraciones-----------------------------------
var btnConfig = document.getElementById('actualizaConfigEmp');
btnConfig.addEventListener("click", function() {

    btnConfig.setAttribute('disabled','disabled');
    var filas = document.querySelectorAll("#listaColabEmp tbody tr");
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
        btnConfig.removeAttribute('disabled');
    });
});

//-----------------------------Guarda reglas----------------------------------------

var btnModificaReglas = document.getElementById('btnModificaReglas');
btnModificaReglas.addEventListener("click", function() {
    btnModificaReglas.setAttribute('disabled','disabled');
    var promesas = [];
    var reglasJefe = document.getElementById('txtReglasJefe').value;
    var reglasColab = document.getElementById('txtReglasColab').value;
    var reglas = [reglasJefe,reglasColab];

    for (var i = 0; i < 2; i++) {

        var flgJefe = i == 0 ? 'SI' : 'NO';
        var flgColab = i == 1 ? 'SI' : 'NO';
        var codRegla = i == 0 ? 'RG001' : 'RG002';

        var regla = reglas[i]

        var data = {
            'cod_regla': codRegla,
            'dsc_regla': regla,
            'flg_activo': 'SI',
            'flg_trabajador': flgColab,
            'flg_jefe': flgJefe
        };
        console.log(data);
        var promesa = $.ajax({
        url: 'api/ActualizarReglaTrabajador',
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
            text: 'Se han actualizado las reglas con éxito',
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
        btnModificaReglas.removeAttribute('disabled');
    });

});

//-----------------------Procesar descargar reporte solicitudes de vacaciones---------------------
var btnProcesar = document.getElementById('btnDesSolEmp');
btnProcesar.addEventListener("click", function() {
    var fchInicio = document.getElementById('datepicker3').value;
    var fechaParts = fchInicio.split('-');
    var day = fechaParts[0];
    var month = fechaParts[1];
    var year = fechaParts[2]; 
    fchInicio = year + "-" + month + "-" + day;

    var fchFin = document.getElementById('datepicker4').value;
    var fechaPartsF = fchFin.split('-');
    var dayF = fechaPartsF[0];
    var monthF = fechaPartsF[1];
    var yearF = fechaPartsF[2]; 
    fchFin = yearF + "-" + monthF + "-" + dayF;

    var codTra = '@php echo(session('codTrabajador')) @endphp';

    $.ajax({
        url: 'lista/ListarSolicitudVacacionesxResponsable', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        //data:{'codTra':'@php echo(session('codTrabajador')) @endphp','fchIni':fchInicio,'fchFin':fchFin},
        data:{'codTra':codTra,'fchIni':fchInicio,'fchFin':fchFin,'origen':'EMP','visualizar':'NO'},
        success: function(respuesta){
            console.log(respuesta['response'].length);
            if (respuesta['response'].length > 0) {
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
                link.download = 'solicitudVacaciones.xlsx';

                // Simular un clic en el enlace para iniciar la descarga
                link.click();
            }else{
                Swal.fire({
                    icon: 'warning',
                    text: 'No existen registros a retornar para el período seleccionado.',
                    confirmButtonText: 'Continuar',
                    confirmButtonColor: '#a18347',
                });
            }
        },//success
        error(e){
            console.log(e.message);
        }//error    
    });


});

//-----------------------Procesar descargar reporte vacaciones---------------------

// var btnProcesar = document.getElementById('btnDescRepVacEmp');
// btnProcesar.addEventListener("click", function() {
//     btnProcesar.setAttribute('disabled','disabled');
//     var fchInicio = document.getElementById('datepicker1').value;
//     var fechaParts = fchInicio.split('-');
//     var day = fechaParts[0];
//     var month = fechaParts[1];
//     var year = fechaParts[2];
//     fchInicio = year + "-" + month + "-" + day;
//     //console.log(fchInicio);
//     var fchFin = document.getElementById('datepicker2').value;
//     var fechaPartsF = fchFin.split('-');
//     var dayF = fechaPartsF[0];
//     var monthF = fechaPartsF[1];
//     var yearF = fechaPartsF[2];
//     fchFin = yearF + "-" + monthF + "-" + dayF;
//     //console.log(fchFin);
//     var chckDsc = document.getElementById('flexCheckDefault2');
//     var flgTodos = chckDsc.checked ? 'SI' : 'NO';
//     var codTra = '@php echo(session('codTrabajador')) @endphp';

//     $.ajax({
//         url: 'lista/ListarReporteVacacionesxTrabajador',
//         method: "GET",
//         crossDomain: true,
//         dataType: 'json',
//         data:{'codTra':codTra,'fchIni':fchInicio,'fchFin':fchFin},
//         success: function(respuesta){
//            //console.log(respuesta['response']);
//             if (respuesta['response'].length > 0) {
//                 var header = ['CODIGO TRABAJADOR','NOMBRES Y APELLIDOS','SEDE','CARGO','AREA','FECHA INGRESO','VACACIONES GENERADAS','VACACIONES PROGRAMADAS','SALDO','ESTADO ADELANTO VACACIONES','GRUPO','TIPO COMISIONISTA','REQUIERE APROBACION','APROBADOR','CODIGO TRABAJADOR APROBADOR',' REQUIERE SUPERVISION','SUPERVISOR','CODIGO TRABAJADOR SUPERVISOR','REGLA'];
//                 var filasArray = [];

//                 respuesta['response'].forEach(element => {
//                     var fch_ingreso = element['fch_ingreso'].split('T');
//                     fch_ingreso = formatDate(fch_ingreso[0]);
//                     var fch_ingreso2 = (fch_ingreso == '01/01/1900') ? '' : fch_ingreso;

//                     filaData = [
//                         element['cod_trabajador'],
//                         element['dsc_trabajador'],
//                         element['dsc_localidad'],
//                         element['dsc_cargo'],
//                         element['dsc_area'],
//                         fch_ingreso2,
//                         element['ctd_vacaciones_generadas'],
//                         element['ctd_vacaciones_programadas'],
//                         element['ctd_saldo'],
//                         element['dsc_estado_adelanto_vacaciones'],
//                         element['dsc_grupo'],
//                         element['dsc_comisionista'],
//                         element['flg_requiere_aprobacion'],
//                         element['dsc_trabajador_aprobacion'],
//                         element['cod_trabajador_aprobacion'],
//                         element['flg_requiere_supervision'],
//                         element['dsc_trabajador_supervision'],
//                         element['cod_trabajador_supervision'],
//                         element['dsc_regla']
//                     ]
//                     filasArray.push(filaData);
//                 });
//                 // Crear un libro de trabajo (workbook)
//                 var workbook = XLSX.utils.book_new();
//                 var worksheet = XLSX.utils.json_to_sheet(filasArray);

//                 // Crear una hoja de cálculo (worksheet)
//                 XLSX.utils.sheet_add_aoa(worksheet, [header], { origin: 'A1' });

//                 // Agregar la hoja de cálculo al libro de trabajo
//                 XLSX.utils.book_append_sheet(workbook, worksheet, 'Sheet1');

//                 // Convertir el libro de trabajo a un archivo binario
//                 var excelBuffer = XLSX.write(workbook, { bookType: 'xlsx', type: 'array' });

//                 // Crear un blob a partir del archivo binario
//                 var blob = new Blob([excelBuffer], { type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' });

//                 // Crear una URL para el blob
//                 var url = URL.createObjectURL(blob);

//                 // Crear un enlace de descarga
//                 var link = document.createElement('a');
//                 link.href = url;
//                 link.download = 'reporteVacaciones'+codTra+'.xlsx';

//                 // Simular un clic en el enlace para iniciar la descarga
//                 link.click();
//                 btnProcesar.removeAttribute('disabled');
//             }else{
//                 Swal.fire({
//                     icon: 'warning',
//                     text: 'No existen registros a retornar para el período seleccionado.',
//                     confirmButtonText: 'Continuar',
//                     confirmButtonColor: '#a18347',
//                 });
//                 btnProcesar.removeAttribute('disabled');
//             }

//         },//success
//         error(e){
//             console.log(e.message);
//         }//error    
//     });

// });

$.ajax({
    url: 'lista/MuestraAnhos', 
    method: "GET",
    crossDomain: true,
    dataType: 'json',
    success: function(respuesta){ 
      respuesta['response'].forEach(function(word){
        //console.log(word);
        $("#annoIniVE").append('<option value="'+ word['codvar'] +'">'+ word['desvar1'] +'</option>');
      });
    },//success
    error(e){
      console.log(e.message);
    }//error
});//ajax muestraAnno

$('#annoIniVE, #periodo').select2({
    language: "es",
    theme: "classic",
    width: 'resolve',
    placeholder: "Escriba el nombre del trabajador",
    allowClear: true,
    // dir: "rtl",
});

function enviaRechazoVac(codTra,fchIni,fchFin,accionEnvio,numSolicitud) {
    $.ajax({
        url: 'api/ObtenerTrabajador', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        data:{'cod_trabajador':codTra},
        success: function(respuesta){
            console.log('accionEnvio',accionEnvio);
            var dscTra = respuesta['response']['dsc_trabajador'];
            var correoTra = respuesta['response']['dsc_mail_personal'];
            var codSupervisor = respuesta['response']['cod_supervisor'];
            var fechaActual = new Date();
            var dia = fechaActual.getDate();
            var mes = fechaActual.getMonth() + 1;
            var anio = fechaActual.getFullYear();
            var diaFormateado = dia < 10 ? '0' + dia : dia;
            var mesFormateado = mes < 10 ? '0' + mes : mes;
            var fechaFormateada = diaFormateado + '/' + mesFormateado + '/' + anio;
            var fchBD = anio+'-'+mesFormateado+'-'+diaFormateado;
            var actividad = '';
            if (accionEnvio == 'REC') {
                actividad = 'La solicitud de vacaciones ha sido rechazada por el jefe. (Inicio: '+fchIni+', fin: '+fchFin+')';
            }else if(accionEnvio == 'ANU'){
                actividad = 'La solicitud de vacaciones ha sido rechazada por anulación. (Inicio: '+fchIni+', fin: '+fchFin+')';
            }

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
}

function enviaAprobacionVac(codTra,fchIni,fchFin,numSolicitud) {
    
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
            var codSupervisor = respuesta['response']['cod_supervisor'];
            var fechaActual = new Date();
            var dia = fechaActual.getDate();
            var mes = fechaActual.getMonth() + 1;
            var anio = fechaActual.getFullYear();
            var diaFormateado = dia < 10 ? '0' + dia : dia;
            var mesFormateado = mes < 10 ? '0' + mes : mes;
            var fechaFormateada = diaFormateado + '/' + mesFormateado + '/' + anio;
            var fchBD = anio+'-'+mesFormateado+'-'+diaFormateado;
            var actividad = 'La solicitud de vacaciones ha sido aprobada por jefe. (Inicio: '+fchIni+', fin: '+fchFin+')';

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
}

//-------------------------------carga masiva------------------------------------

var obj = document.getElementById('archivo');

obj.addEventListener('input', function(){
    if (obj.value == '') {
        document.getElementById('buscarDoc2').setAttribute('disabled','true');
    }else{
        document.getElementById('buscarDoc2').removeAttribute('disabled');
    }
});

// Escucha el evento de envío del formulario
document.getElementById('formularioCargaMasiva').addEventListener('submit', function(e) {
    e.preventDefault(); // Evita que el formulario se envíe de forma tradicional

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
    fetch('{{ route('subirArchivo') }}', {
        method: 'POST',
        body: formData
    }).then(response => response.json()).then(data => {
        if (data.error) {
            // Si hay un error, muestra la alerta de error
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: data.error,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Cerrar'
            });
        } else {
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

                    Swal.fire({
                        icon: 'success',
                        title: 'Éxito',
                        text: data.mensaje,
                        confirmButtonColor: '#3085d6',
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
        }
    }).catch(error => {
        console.error('Error:', error);
    });
});

</script>
