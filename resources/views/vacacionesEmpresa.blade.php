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
            <div class="col-md-10 offset-md-1 d-md-block">
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
                            <div class="col-md-12 table-responsive" style="padding-left: 2rem;padding-right: 2rem;">
                                <div class="row">
                                    <div class="col-md-12 table-responsive" style="padding-left: 2rem;padding-right: 2rem;height: 23rem;">
                                        <table class="table table-striped " id="listaColabEmp" style="text-align: center; height: 300px;">
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
    

    <section class="section dashboard">
        <div class="row">
            <div class="col-md-10 offset-md-1 d-md-block">
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
                            <div class="col-md-12 table-responsive" style="padding-left: 2rem;padding-right: 2rem;">
                                <div class="row">
                                    <div class="col-md-12 table-responsive" style="padding-left: 0rem;padding-right: 1rem;height: 23rem;">
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
                                                <tr>
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
                                    <h5><button class="btn btn-success btnDorado" data-bs-toggle="modal" data-bs-target="#ModalParametros" style="width: -webkit-fill-available;">Modificar parámetros</button></h5>
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
                        '<input class="form-check-input checkDorado" type="radio" name="radioBtnSol'+element['cod_trabajador']+'" id="aprobSol" value="APROBAR-'+element['cod_trabajador']+'-'+element['num_linea']+'">',
                        '<input class="form-check-input checkVerde" type="radio" name="radioBtnSol'+element['cod_trabajador']+'" id="recSol" value="RECHAZAR-'+element['cod_trabajador']+'-'+element['num_linea']+'">'
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
    //-----Se muestra las reglas de trabajador y jefe---
        $.ajax({
            url: 'lista/ListarReglasTrabajador', 
            method: "GET",
            crossDomain: true,
            dataType: 'json',
            success: function(respuesta){ 
            // console.log(respuesta);
            var body = document.getElementById('nav-colaborador');
            var body2 = document.getElementById('exampleFormControlTextarea1');
            var aux = (respuesta['response']=='') ? 'No hay reglas definidas por el momento..' : respuesta['response'];
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
            var body2 = document.getElementById('exampleFormControlTextarea2');
            var aux = (respuesta['response']=='') ? 'No hay reglas definidas por el momento..' : respuesta['response'];
            body.innerHTML = aux;
            body2.innerHTML = aux;
            },//success
            error(e){
            console.log(e.message);
            }//error
        });//ajax ListarReglasJefe
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
                            console.log(respuesta);
                            Swal.fire({
                                icon: 'success',
                                text: 'Se han procesado las solicitudes con éxito',
                                confirmButtonText: 'Continuar',
                                confirmButtonColor: '#a18347',
                            }).then((result) => {
                            if (result.isConfirmed) {
                                console.log('data rechazado',data);
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
                            console.log(respuesta);
                            Swal.fire({
                                icon: 'success',
                                text: 'Se han procesado las solicitudes con éxito',
                                confirmButtonText: 'Continuar',
                                confirmButtonColor: '#a18347',
                            }).then((result) => {
                            if (result.isConfirmed) {
                                console.log('data aprobado',data);
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
        location.reload();
    });
    
    //-----------------------Guarda configuraciones-----------------------------------
    var btnConfig = document.getElementById('actualizaConfig');
    btnConfig.addEventListener("click", function() {
    
        var tabla = document.getElementById("listaColabEmp");
        var filas = tabla.getElementsByTagName("tr");
    
        for (var i = 0; i < filas.length; i++) {
            var fila = filas[i];
            var checkboxes = fila.querySelectorAll('input[type="checkbox"]');
            var valoresSeleccionados = [];
            var valoresNoSeleccionados = [];
        
            for (var j = 0; j < checkboxes.length; j++) {
                var checkbox = checkboxes[j];
                flgJefe = '';
                flgEntre = '';
                codTrabajador ='';
                grupoVac ='';
                numLinea ='';
                if (checkbox.checked) {
                    valoresSeleccionados.push(checkbox.value);
                    if (checkboxes.length == 2) {
                        var valoresSeleccionados = [];          
                        for (var j = 0; j < checkboxes.length; j++) {
                            var checkbox = checkboxes[j];
                            valoresSeleccionados.push(checkbox.value);
                            //console.log("Valores", valoresSeleccionados);
                            var aux = valoresSeleccionados[j].split('-');
                            flgCruce = aux[0];
                            
                            if(flgCruce == 'JEFE'){
                                flgJefe = 'SI';
                            }else if(flgCruce == 'ENTRE'){
                                flgEntre = 'SI';
                            }
    
                            codTrabajador = aux[1];
                            grupoVac = aux[2];
                            numLinea = aux[3];
                            
                        }
                        data = {
                            'cod_grupo_vacaciones': grupoVac,
                            'cod_trabajador': codTrabajador,
                            'num_linea': numLinea,
                            'flg_no_cruzar_jefe': flgJefe,
                            'flg_no_cruzar': flgEntre
                        }
                        $.ajax({
                            url: 'api/ActualizarVacacionesProgramadas', 
                            method: "PUT",
                            crossDomain: true,
                            dataType: 'json',
                            data:{'data':data},
                            success: function(respuesta){
                                //console.log(respuesta);
                                Swal.fire({
                                    icon: 'success',
                                    text: 'Se han actualizado las reglas con éxito',
                                    confirmButtonText: 'Continuar',
                                    confirmButtonColor: '#a18347',
                                }).then((result) => {
                                if (result.isConfirmed) {
                                    console.log('data 2Flg',data);
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
                    }else if(checkboxes.length == 1){
                        var valoresSeleccionados = [];          
                        for (var j = 0; j < checkboxes.length; j++) {
                            var checkbox = checkboxes[j];
                            valoresSeleccionados.push(checkbox.value);
    
                            var aux = valoresSeleccionados[0].split('-');
                            flgCruce = aux[0];
                            
                            if(flgCruce == 'JEFE'){
                                flgJefe = 'SI';
                            }else if(flgCruce == 'ENTRE'){
                                flgEntre = 'SI';
                            }
    
                            codTrabajador = aux[1];
                            grupoVac = aux[2];
                            numLinea = aux[3];
                            
                        }
                        data = {
                            'cod_grupo_vacaciones': grupoVac,
                            'cod_trabajador': codTrabajador,
                            'num_linea': numLinea,
                            'flg_no_cruzar_jefe': flgJefe,
                            'flg_no_cruzar': flgEntre
                        }
                        $.ajax({
                            url: 'api/ActualizarVacacionesProgramadas', 
                            method: "PUT",
                            crossDomain: true,
                            dataType: 'json',
                            data:{'data':data},
                            success: function(respuesta){
                                //console.log(respuesta);
                                Swal.fire({
                                    icon: 'success',
                                    text: 'Se han actualizado las reglas con éxito',
                                    confirmButtonText: 'Continuar',
                                    confirmButtonColor: '#a18347',
                                }).then((result) => {
                                if (result.isConfirmed) {
                                    console.log('data 1flg',data);
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
                }else{
                    valoresNoSeleccionados.push(checkbox.value);
                    console.log('sin Check',valoresNoSeleccionados);
                    if(checkboxes.length == 0){
                    var valoresNoSeleccionados = [];          
                        for (var j = 0; j < checkboxes.length; j++) {
                            var checkbox = checkboxes[j];
                            valoresNoSeleccionados.push(checkbox.value);
                            var aux = valoresNoSeleccionados[0].split('-');
                            codTrabajador = aux[1];
                            grupoVac = aux[2];
                            numLinea = aux[3];               
                        }
                        data = {
                            'cod_grupo_vacaciones': grupoVac,
                            'cod_trabajador': codTrabajador,
                            'num_linea': numLinea,
                            'flg_no_cruzar_jefe': '',
                            'flg_no_cruzar': ''
                        }
                        $.ajax({
                            url: 'api/ActualizarVacacionesProgramadas', 
                            method: "PUT",
                            crossDomain: true,
                            dataType: 'json',
                            data:{'data':data},
                            success: function(respuesta){
                                //console.log(respuesta);
                                Swal.fire({
                                    icon: 'success',
                                    text: 'Se han actualizado las reglas con éxito',
                                    confirmButtonText: 'Continuar',
                                    confirmButtonColor: '#a18347',
                                }).then((result) => {
                                if (result.isConfirmed) {
                                    console.log('data sinFlg',data);
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
            
        }
        location.reload();
    });

    // var input3 = document.getElementById("parametroX");
    //     console.log(input3);

    </script>
