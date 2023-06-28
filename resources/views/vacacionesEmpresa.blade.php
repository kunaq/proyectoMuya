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
                                <table class="table table-striped " id="listaColabEmp" style="text-align: center; height: 300px;">
                                    <thead style="text-align: center;">
                                        <tr>
                                            <th scope="col" width="15%">Colaborador</th>
                                            <th scope="col" width="15%">Jefe</th>
                                            <th scope="col" width="10%">Sede</th>
                                            <th scope="col" width="8%">Vacaciones generadas</th>
                                            <th scope="col" width="8%">Vacaciones programadas</th>
                                            <th scope="col" width="5%">Saldo</th>
                                            <th scope="col" width="5%">Alerta</th>
                                            <th scope="col" width="5%">Firma</th>
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
                                <table class="table table-striped " id="tablaSolAprobarEmp" style="text-align: center; height: 300px;">
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
                        <div class="col-md-4" style="margin-bottom: 1rem;">
                            <div class="card">
                                <div class="card-body">
                                    <h5 style="font-size: 17px; text-align: center; padding-top: 1rem;">Promedio de días pendientes de vacaciones del equipo <b>hasta fin de año</b></h5>
                                    <hr>
                                    <h1 class="tarjeta-vaca-foco"><b>259.3</b></h1>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6" style="margin-bottom: 1rem;">
                                            <div class="form-group">
                                                <select name="annoIni" id="annoIni" class="form-control selectForm">
                                                    <option value="0" selected disabled>Sede</option>
                                                    <option value="todos">Todos</option>
                                                    <option value="004">Cañete</option>
                                                    <option value="004">Chiclayo</option>
                                                    <option value="004">Chimbote</option>
                                                    <option value="001">Corona del Fraile</option>
                                                    <option value="002">Cusco I</option>
                                                    <option value="003">Cusco II</option>
                                                    <option value="004">Lambayeque</option>
                                                    <option value="002">Lima</option>
                                                    <option value="003">Pisco</option>
                                                    <option value="004">San Antonio</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="annoFin" id="annoFin" class="form-control selectForm">
                                                    <option value="0" selected disabled>Área</option>
                                                    <option value="todos">Todos</option>
                                                    <option value="A0001">Administración y finanzas</option>
                                                    <option value="A0002">Comercial</option>
                                                    <option value="A0003">Gerencia de atención al cliente</option>
                                                    <option value="A0004">Gerencia general</option>
                                                    <option value="A0005">Operaciones</option>
                                                    <option value="A0004">Parque</option>
                                                    <option value="A0005">SAC</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" style="margin-bottom: 1rem;">
                            <div class="card">
                                <div class="card-body">
                                    <h5 style="font-size: 17px;text-align: center; padding-top: 1rem;">Promedio de días pendientes de vacaciones del equipo <b>a la fecha de hoy</b></h5>
                                    <hr>
                                    <h1 class="tarjeta-vaca-foco"><b>201.2</b></h1>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6" style="margin-bottom: 1rem;">
                                            <div class="form-group">
                                                <select name="annoIni" id="annoIni" class="form-control selectForm">
                                                    <option value="0" selected disabled>Sede</option>
                                                    <option value="todos">Todos</option>
                                                    <option value="004">Cañete</option>
                                                    <option value="004">Chiclayo</option>
                                                    <option value="004">Chimbote</option>
                                                    <option value="001">Corona del Fraile</option>
                                                    <option value="002">Cusco I</option>
                                                    <option value="003">Cusco II</option>
                                                    <option value="004">Lambayeque</option>
                                                    <option value="002">Lima</option>
                                                    <option value="003">Pisco</option>
                                                    <option value="004">San Antonio</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="annoFin" id="annoFin" class="form-control selectForm">
                                                    <option value="0" selected disabled>Área</option>
                                                    <option value="todos">Todos</option>
                                                    <option value="A0001">Administración y finanzas</option>
                                                    <option value="A0002">Comercial</option>
                                                    <option value="A0003">Gerencia de atención al cliente</option>
                                                    <option value="A0004">Gerencia general</option>
                                                    <option value="A0005">Operaciones</option>
                                                    <option value="A0004">Parque</option>
                                                    <option value="A0005">SAC</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" style="margin-bottom: 1rem;">
                            <div class="card">
                                <div class="card-body">
                                    <h5 style="font-size: 17px;text-align: center; padding-top: 1rem;padding-bottom:1rem;">Número de reprogramaciones realizadas en el año del equipo</h5>
                                    <hr>
                                    <h1 class="tarjeta-vaca-foco"><b>23</b></h1>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6" style="margin-bottom: 1rem;">
                                            <div class="form-group">
                                                <select name="annoIni" id="annoIni" class="form-control selectForm">
                                                    <option value="0" selected disabled>Sede</option>
                                                    <option value="todos">Todos</option>
                                                    <option value="004">Cañete</option>
                                                    <option value="004">Chiclayo</option>
                                                    <option value="004">Chimbote</option>
                                                    <option value="001">Corona del Fraile</option>
                                                    <option value="002">Cusco I</option>
                                                    <option value="003">Cusco II</option>
                                                    <option value="004">Lambayeque</option>
                                                    <option value="002">Lima</option>
                                                    <option value="003">Pisco</option>
                                                    <option value="004">San Antonio</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="annoFin" id="annoFin" class="form-control selectForm">
                                                    <option value="0" selected disabled>Área</option>
                                                    <option value="todos">Todos</option>
                                                    <option value="A0001">Administración y finanzas</option>
                                                    <option value="A0002">Comercial</option>
                                                    <option value="A0003">Gerencia de atención al cliente</option>
                                                    <option value="A0004">Gerencia general</option>
                                                    <option value="A0005">Operaciones</option>
                                                    <option value="A0004">Parque</option>
                                                    <option value="A0005">SAC</option>
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
                            <div class="col-1 col-md-1" style="text-align: -webkit-center">
                                <input class="form-check-input checkVerde" checked type="checkbox" value="" id="chckEquipSol">
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

    <section class="section dashboard">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 28px;">Cargar vacaciones</h5>
                        <div class="row">
                            <div class="col-md-2" style="text-align: -webkit-center">
                                <div class="form-group">
                                    <h5><button class="btn btn-success btnDorado" id="buscarDoc">Cargar</button></h5>
                                </div>
                            </div>                      
                            <div class="col-1 col-md-1" style="text-align: -webkit-center">
                                <input class="form-check-input checkVerde" checked type="checkbox" value="" id="flexCheckDefault2">
                            </div>
                            <div class="col-11 col-md-8">
                                <div class="form-group">
                                    <h5>Aprobar automáticamente las vacaciones que inician el siguiente mes</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
<script src="{{asset('assets/js/vacacionesEmpresa.js')}}"></script>
<script type="text/javascript">
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
                    
                    if(element['flg_acuerdo_firmado'] == 'NO' || element['flg_acuerdo_firmado'] == ''){
                        alertaRegla = '<span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="No hay firma"></span>';
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
                $('#tablaSolAprobarEmp').DataTable({
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
                console.log('response',result['response'][0]['cantidad'])
                document.getElementById("parametroX").value = result['response'][0]['cantidad'];
                document.getElementById("parametroY").value = result['response'][1]['cantidad'];
            }
        });
}
    
    //-----------------------Procesar solicitudes de vacaciones---------------------
var btnProcesar = document.getElementById('btnProcSolVacEmp');
btnProcesar.addEventListener("click", function() {
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
    
//-----------------------Guarda configuraciones-----------------------------------
var btnConfig = document.getElementById('actualizaConfigEmp');
btnConfig.addEventListener("click", function() {
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
    });
});

//-----------------------------Guarda reglas----------------------------------------

var btnModificaReglas = document.getElementById('btnModificaReglas');
btnModificaReglas.addEventListener("click", function() {
    
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
                //location.reload();
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

    var chckDsc = document.getElementById('chckEquipSol');
    var flgTodos = chckDsc.checked ? 'SI' : 'NO';

    var codTra = '@php echo(session('codTrabajador')) @endphp';

    $.ajax({
        url: 'ListarSolicitudVacacionesxResponsable', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        //data:{'codTra':'@php echo(session('codTrabajador')) @endphp','fchIni':fchInicio,'fchFin':fchFin},
        data:{'codTra':'TRA00603','fchIni':fchInicio,'fchFin':fchFin},
        success: function(respuesta){
            console.log(respuesta['response']);
            var data = []; 
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

                filaData = [
                    element['cod_trabajador']+'-'+element['num_linea'],
                    element['cod_trabajador'],
                    element['dsc_trabajador'],
                    'AREA',
                    element['dsc_sede'],
                    'CARGO',
                    fchIni,
                    fchFin,
                    element['cant_dias'],
                    fchReinc,
                    element['dsc_estado'],
                    firmado,
                    pagado,
                    'DIAS EXCEDIDOS',
                    'CODIGO SOLICITUD ANTERIOR',
                    fchReg,
                    'COD-TRA REGISTRO',
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
            link.download = 'solicitudVacaciones.xlsx';

            // Simular un clic en el enlace para iniciar la descarga
            link.click();

        },//success
        error(e){
            console.log(e.message);
        }//error    
    });


});


</script>
