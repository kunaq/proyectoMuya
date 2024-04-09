<link rel="stylesheet" href="assets/css/fullCalendarCustom.css">
<x-layouts.app title="Contratos" meta-description="Home meta description">
    <div id="overlay_load" class="overlay_muya">
        <img src="{{ asset('assets/img/GM.png') }}" alt="login" class="fading-element">
    </div>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Seguimientos prospectos</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
                    <li class="breadcrumb-item active">Comercial</li>
                    <li class="breadcrumb-item active">Seguimiento de prospectos</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        {{-- <section class="section tarjetas-home">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h1 class="card-title tarjeta-foco"><b><span
                                                id="num_vacaciones_pendiente"></span></b></h1>
                                    <h5>Saldo pendiente de vacaciones</h5>
                                    <input type="hidden" id="numVacPend" name="numVacPend">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-none d-md-block">
                            <div class="card">
                                <div class="card-body">
                                    <h5 style="padding-top: 20px;"><span id="msgRecordar"></span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section> --}}

        {{-- <div class="col-sm-10 d-sm-block d-md-none">
            <div class="card">
                <div class="card-body" style="text-align: center;">
                    <h5 style="padding-top: 20px;"><span id="msgRecordarM"></span></h5>
                </div>
            </div>g
        </div> --}}

        <section class="section dashboard">
            <div class="row">
                {{-- <div class="col-md-10 offset-md-1">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 18px; color: #155450;">Calendario de vacaciones
                                solicitadas</h5>
                            <div class="row">
                                <div class="col-md-12 table-responsive" style="padding-left: 2rem;padding-right: 2rem;">
                                    <div id='calendar' style="height: 28rem;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="row">
                    <div class="col-md-2 offset-md-2" style="margin-bottom: 1rem;">
                        <button class="btn btn-success btnDorado btnConvenio" style="width: -webkit-fill-available;"
                            data-bs-toggle="modal" data-bs-target="#ModalSolicitud" id="btnSolicitarVac">Solicitar <br>
                            vacaciones</button>
                    </div>
                    <div class="col-md-2 offset-md-1" style="margin-bottom: 1rem;">
                        <button class="btn btn-success btnDorado btnConvenio" data-bs-toggle="modal"
                            id="btnFirmarConvenio" data-bs-target="#ModalFirmar">Firmar convenio de adelanto de
                            vacaciones</button>
                    </div>
                    <div class="col-md-2 offset-md-1" style="margin-bottom: 1rem;">
                        <button class="btn btn-success btnDorado btnConvenio" data-bs-toggle="modal"
                            data-bs-target="#ModalReglas" style="width: -webkit-fill-available;">Reglas de solicitud
                            <br> de vacaciones</button>
                    </div>
                </div> --}}

                <div class="col-md-10 offset-md-1 ">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title "> </h5>
                            <div class="row">
                                <div class="col-3 col-md-1" style="margin-bottom: 1rem;">
                                    <div class="form-group">
                                        <span>Inicio:</span>
                                    </div>
                                </div>
                                <div class="col-md-3" style="margin-bottom: 1rem;">
                                    <div class="form-group">
                                        {{-- <select name="annoIni" id="annoIni" class="form-control selectForm">
                                        </select> --}}
                                        <input type="date" class="form-control" id="fecha_ini" name="fecha_ini">
                                    </div>
                                </div>
                                <div class="col-3 d-sm-block d-md-none"></div>
                                <div class="col-3 col-md-1" style="margin-bottom: 1rem;">
                                    <div class="form-group">
                                        <span>Fin:</span>
                                    </div>
                                </div>
                                <div class="col-3" style="margin-bottom: 2rem;">
                                    <div class="form-group">
                                        {{-- <select name="annoFin" id="annoFin" class="form-control selectForm" disabled>
                                        </select> --}}
                                        <input type="date" class="form-control" id="fecha_fin" name="fecha_fin">
                                    </div>
                                </div>

                                <div class="col-3 d-sm-block d-md-none"></div>
                                <br><br>

                                {{-- {{ session('rol_desc') }} --}}
                                <div class="col-1 label_estado" style="margin-bottom: 1rem;">
                                    <div class="form-group">
                                        <span>Estado:</span>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3" style="margin-bottom: 1rem;">
                                    <div class="form-group">
                                        <select name="select_estados" id="select_estados"
                                            class="form-control selectForm">
                                            <option selected disabled>SELECCIONE</option>
                                            <option value="EMI">EMITIDO</option>
                                            <option value="ENV">ENVIADO</option>
                                            <option value="ACT">ACTIVADO</option>
                                            <option value="%">TODOS</option>
                                        </select>
                                    </div>
                                </div>
                                @if (session('consejero_flg') == 'SI')

                                    <div class="col-3 d-sm-block d-md-none"></div>

                                    <div class="col-1" style="margin-bottom: 1rem;" hidden>
                                        <div class="form-group">
                                            <span>Supervisor:</span>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3" style="margin-bottom: 1rem;" hidden>
                                        <div class="form-group">
                                            <select name="" id="" class="form-control selectForm">
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-1" style="margin-bottom: 1rem;">
                                        <div class="form-group">
                                            <span>Consejero:</span>
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-3" style="margin-bottom: 1rem;">
                                        <div class="form-group">
                                            <select name="cbo_consj" id="cbo_consj" class="form-control selectForm"
                                                disabled>
                                                <option value="{{ session('codTrabajador') }}">
                                                    {{ session('nombreTrabajador') }}</option>
                                            </select>
                                        </div>
                                    </div>
                                @elseif(session('supervisor_flg') == 'SI')
                                    <div class="col-1" style="margin-bottom: 1rem;" hidden>
                                        <div class="form-group">
                                            <span>Supervisor:</span>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3" style="margin-bottom: 1rem;" hidden>
                                        <div class="form-group">
                                            <select name="" id="" class="form-control selectForm">
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-1" style="margin-bottom: 1rem;">
                                        <div class="form-group">
                                            <span>Consejero:</span>
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-3" style="margin-bottom: 1rem;">
                                        <div class="form-group">
                                            <select name="cbo_consj" id="cbo_consj" class="form-control selectForm">
                                                @if (isset($cbo_consejero['response']) && count($cbo_consejero['response']) > 0)
                                                    @foreach ($cbo_consejero['response'] as $consejero)
                                                        <option value="{{ $consejero['cod_trabajador'] }}">
                                                            {{ $consejero['dsc_trabajador'] }}
                                                        </option>
                                                    @endforeach
                                                @else
                                                    <option value="%">SIN CONSEJEROS</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                @elseif(session('jefe_flg') == 'SI')
                                    <div class="col-1" style="margin-bottom: 1rem;">
                                        <div class="form-group">
                                            <span>Supervisor</span>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3" style="margin-bottom: 1rem;">
                                        <div class="form-group">
                                            <select name="cod_sup" id="cod_sup" class="form-control selectForm">
                                                @if (isset($cbo_supervisor['response']) && count($cbo_supervisor['response']) > 0)
                                                    @foreach ($cbo_supervisor['response'] as $supervisor)
                                                        <option value="{{ $supervisor['cod_trabajador'] }}">
                                                            {{ $supervisor['dsc_trabajador'] }}
                                                        </option>
                                                    @endforeach
                                                @else
                                                    <option value="-">SIN SUPERVISOR</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-1" style="margin-bottom: 1rem;">
                                        <div class="form-group">
                                            <span>Consejero</span>
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-3" style="margin-bottom: 1rem;">
                                        <div class="form-group">
                                            <select name="cbo_consj" id="cbo_consj" class="form-control selectForm">
                                                @if (isset($cbo_consejero['response']) && count($cbo_consejero['response']) > 0)
                                                    @foreach ($cbo_consejero['response'] as $consejero)
                                                        <option value="{{ $consejero['cod_trabajador'] }}">
                                                            {{ $consejero['dsc_trabajador'] }}
                                                        </option>
                                                    @endforeach
                                                @else
                                                    <option value="%">SIN CONSEJEROS</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                @endif
                                <div class="col-md-2" style="text-align: -webkit-center">
                                    <div class="form-group">
                                        <h5><button class="btn btn-success btnDorado"
                                                id="buscarContrato">Buscar&nbsp;&nbsp;<span
                                                    class="bi bi-search"></span></button></h5>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="row d-none d-md-block">
                                <div class="col-md-12 table-responsive"
                                    style="padding-left: 2rem;padding-right: 2rem;">
                                    <table class="table table-striped " id="listaContratos"
                                        style="text-align: center;">
                                        <thead>
                                            <tr>
                                                <th scope="col" width="15%">Nro.Contrato</th>
                                                <th scope="col" width="15%">Digital</th>
                                                <th scope="col" width="10%">Firma Electronica</th>
                                                <th scope="col" width="14%">Cliente</th>
                                                <!--<th scope="col" width="14%">Tipo Titular</th>-->
                                                <th scope="col" width="14%">Celular</th>
                                                <th scope="col" width="14%">Correo</th>
                                                <th scope="col" width="14%">Emision</th>
                                                <th scope="col" width="14%">Notif.Firma</th>
                                                <th scope="col" width="14%">Firmado</th>
                                                <th scope="col" width="14%">Firma Rechazada</th>
                                                <th scope="col" width="14%">Motivo rechazo</th>
                                                <th scope="col" width="14%">Enviado</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <td>13/02/2023</td>
                                            <td>20/02/2023</td>
                                            <td>3</td>
                                            <td>Solicitado</td>
                                            <td>Sin firmar</td>
                                            <td>No pagado</td>
                                            <td>
                                                <button class="btn btn-success btnDorado" data-bs-toggle="tooltip" data-bs-placement="top"                 data-bs-custom-class="custom-tooltip" data-bs-title="Firmar"><span class="bi bi-vector-pen"></span></button>
                                                <button class="btn btn-success verdeMuya" data-bs-toggle="tooltip" data-bs-placement="top"                 data-bs-custom-class="custom-tooltip" data-bs-title="Descargar"><span class="bi bi-download"></span></button>
                                                <button class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top"                 data-bs-custom-class="custom-tooltip" data-bs-title="Modificar"><span class="bi bi-pencil-square"></span></button>
                                            </td>
                                        </tr> 
                                        </tbody>
                                    </table>
                                </div>
                            </div> --}}


                            {{-- <div class="row d-sm-block d-md-none">
                                <div class="col-md-12 table-responsive" style="padding-left: 2rem;padding-right: 2rem;">
                                    <table class="table table-striped " id="listaVacSolMovil">
                                        <tbody id="bodySolicitudMovil">
                                            <tr>
                                            <td>
                                                <b>Inicio:</b> 6/02/2023<br>
                                                <b>Término:</b> 13/02/2023 <br>
                                                <b>Número de días:</b> 7 <br>
                                                <b>Estado:</b> Aprobado<br>
                                                <b>Firma:</b> Firmado <br>
                                                <b>Pago:</b> Pagado <br><br>
                                                <div style="text-align-last: center;">
                                                    <button class="btn btn-success btnDorado" disabled>Firma</button>
                                                    <button class="btn btn-success verdeMuya">Descarga</button>
                                                    <button class="btn btn-secondary" disabled>Edita</button>
                                                </div>  
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section dashboard">
            <div class="row" style="flex-direction: row;" id="container_contratos">

            </div>
        </section>
    </main><!-- End #main -->

    <x-modals.solicitudVacaciones />

</x-layouts.app>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

{{-- <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script> --}}
<script src="https://unpkg.com/popper.js/dist/umd/popper.min.js"></script>
<script src="https://unpkg.com/tooltip.js/dist/umd/tooltip.min.js"></script>
{{-- <script src="https://static.cloudflareinsights.com/beacon.min.js"></script> --}}
{{-- <script src="{{ asset('assets/js/solicitudVacaciones.js') }}"></script> --}}

<script>
    $(document).ready(function() {

        var isMobile = window.innerWidth <= 767;

        var contentContainer = $('#listaContratos tbody');

        if (isMobile) {
            console.log("Celular");
            contentContainer.empty();

            contentContainer.append('<div class="card">Contenido del card para celulares</div>');
        }
    });
    var fecha_actual = new Date();

    var primer_dia = new Date(fecha_actual.getFullYear(), fecha_actual.getMonth(), 1);
    var primer_dia_parse = primer_dia.toISOString().split('T')[0];
    document.getElementById('fecha_ini').value = primer_dia_parse;


    var ultimo_dia = new Date(fecha_actual.getFullYear(), fecha_actual.getMonth() + 1, 0);
    var ultimo_dia_parse = ultimo_dia.toISOString().split('T')[0];
    document.getElementById('fecha_fin').value = ultimo_dia_parse;



    $('#buscarContrato').click(function(event) {
        var fechaInic = $('#fecha_ini').val();
        var fechaFin = $('#fecha_fin').val();
        var estados = $('#select_estados').val();
        var select_sup = $('#cod_sup').val();
        var select_consej = $('#cbo_consj').val();

        var cod_jefe = '@php echo(session('codTrabajador')) @endphp';
        ListadoContratos(fechaInic, fechaFin, estados, select_consej, cod_jefe, select_sup, select_consej)
    });

    function ListadoContratos(fechaInic, fechaFinal, estado_opt, jef_id, sup_id, consej_id) {
        $.ajax({
            url: '/Contratos/ListarContratos',
            method: "GET",
            crossDomain: true,
            dataType: 'json',
            data: {
                'fechaIni': fechaInic,
                'fechaFin': fechaFinal,
                'estado': estado_opt,
                'codJefe': jef_id,
                'codSup': sup_id,
                'codCons': consej_id
            },
            beforeSend: function() {
                $("#overlay_load").show();
            },
            success: function(result) {
                $("#overlay_load").hide();
                console.log(result);

                // if ($.fn.DataTable.isDataTable('#listaContratos')) {
                //     $('#listaContratos').DataTable().destroy();
                // }

                // if (result && result.response && result.response.length > 0) {
                //     for (var i = 0; i < result.response.length; i++) {
                //         var contratos = result.response[i];

                //         var newRow = $('<tr>');
                //         newRow.append('<td>' + contratos.cod_contrato + '</td>');
                //         newRow.append('<td>' + contratos.flg_ctt_digital + '</td>');
                //         newRow.append('<td>' + contratos.flg_activo_firma + '</td>');
                //         newRow.append('<td>' + contratos.dsc_cliente + '</td>');
                //         //newRow.append('<td> - </td>');
                //         newRow.append('<td>' + contratos.dsc_telefono_1 + '</td>');
                //         newRow.append('<td>' + contratos.dsc_email + '</td>');
                //         var fechaEmision = new Date(contratos.fch_emision);
                //         var fecha_emision = ("0" + fechaEmision.getDate()).slice(-2) + "-" + ("0" + (
                //             fechaEmision.getMonth() + 1)).slice(-2) + "-" + fechaEmision.getFullYear();
                //         newRow.append('<td>' + fecha_emision + '</td>');
                //         newRow.append('<td> - </td>');
                //         newRow.append('<td>' + contratos.flg_activo_firma + '</td>');
                //         newRow.append('<td>' + contratos.fch_firma_rechazada + '</td>');
                //         newRow.append('<td>' + contratos.dsc_motivo_rechazo + '</td>');
                //         newRow.append('<td>' + contratos.fch_enviado_titular + '</td>');



                //         $('#listaContratos tbody').append(newRow);
                //     }

                //     $('#listaContratos').DataTable({
                //         language: {
                //             url: '//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json'
                //         },
                //         //dom: 'trip',
                //         processing: true,
                //         paging: true,
                //         ordering: false,
                //         pageLength: 5,
                //         lengthMenu: [5, 10, 15, 20],
                //     });
                //     $("#overlay_load").hide();
                // } 

                $('#container_contratos').empty();

                if (result && result.response && result.response.length > 0) {
                    for (var i = 0; i < result.response.length; i++) {
                        var contrato = result.response[i];

                        // Crear la tarjeta del contrato
                        var contratoCard = $('<div class="col-md-6">');
                        contratoCard.append(
                            '<div class="card card_contrato_shadow collapsed-card card_contrato mb-3">' +
                            '<div class="card-info_contrato">' +
                            '<div class="info_contrato_card">' +
                            '<p class="info_contrato">' + contrato.dsc_cliente + '</p>' +
                            '</div>' +
                            '<div class="info_contrato_card">' +
                            '<p class="">contrato digital ' + contrato.cod_contrato +
                            ' c/ firma elec.</p>' +
                            '<p class="">Estado: <strong>' + contrato.estado + '</strong></p>' +
                            '</div>' +
                            '</div>' +
                            '<div class="arrow_container">' +
                            '<button type="button" class="btn btn-tool arrow_collapse_contrato" data-card-widget="collapse">' +
                            '<i class="fa-solid fa-angle-down"></i>' +
                            '</button>' +
                            '</div>' +
                            '<div class="card-body bg_info_contrato"></div>' +
                            // Puedes agregar detalles aquí
                            '</div>' +
                            '</div>'
                        );

                        // Agregar la tarjeta al contenedor
                        $('#container_contratos').append(contratoCard);
                    }
                } else {
                    alert("No hay Contratos disponibles");
                    // Crear una tarjeta de contrato de ejemplo en caso de que no haya datos
                    var contratoCard = $('<div class="col-md-6">');
                    contratoCard.append(
                        '<div class="card card_contrato_shadow collapsed-card card_contrato mb-3">' +
                        '<div class="card-info_contrato">' +
                        '<div class="info_contrato_card">' +
                        '<p class="info_contrato">Nombre del Cliente</p>' +
                        '</div>' +
                        '<div class="info_contrato_card">' +
                        '<p class="">Contrato digital 12345678 c/ firma elec.</p>' +
                        '<p class="">Estado: <strong>Sin datos</strong></p>' +
                        '</div>' +
                        '</div>' +
                        '<div class="arrow_container">' +
                        '<button type="button" class="btn btn-tool arrow_collapse_contrato" data-card-widget="collapse">' +
                        '<i class="fa-solid fa-angle-down"></i>' +
                        '</button>' +
                        '</div>' +
                        '<div class="card-body bg_info_contrato"></div>' +
                        // Puedes agregar detalles aquí
                        '</div>' +
                        '</div>'
                    );

                    // Agregar la tarjeta al contenedor
                    $('#container_contratos').append(contratoCard);
                    $("#overlay_load").hide();
                    // console.log('No hay datos de prospectos disponibles.');
                }
            },
            error(e) {
                console.log(e.message);
            }
        }); //ajax

    }
</script>
