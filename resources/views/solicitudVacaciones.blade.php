<link rel="stylesheet" href="assets/css/fullCalendarCustom.css">
<x-layouts.app title="solicitudVacaciones" meta-description="Home meta description">

    <div id="overlay_load" class="overlay_muya">
        <img src="{{ asset('assets/img/GM-BLANCO-SM.png') }}" alt="login" class="fading-element">
    </div>
    <main id="main" class="main">
        <div class="pagetitle d-none d-md-block">
            <h1>SOLICITUD DE VACACIONES</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
                    <li class="breadcrumb-item active">Vacaciones</li>
                    <li class="breadcrumb-item active">Solicitud</li>
                </ol>
            </nav>
        </div>

        <div class="pagetitle d-sm-block d-md-none mt-5">
            <h1>SOLICITUD DE VACACIONES</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
                    <li class="breadcrumb-item active">Vacaciones</li>
                    <li class="breadcrumb-item active">Solicitud</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section tarjetas-home">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="card d-flex" style="justify-content: flex-end;">
                                <div class="card-body">
                                    <div class="dias_vacaciones">
                                        {{-- <h1 class="card-title tarjeta-foco mt-4"> --}}
                                        <h1 class="mt-4" style="font-size: 36px">
                                            Tienes
                                            <b><span id="num_vacaciones_pendiente"></span></b>
                                            dias
                                        </h1>
                                        {{-- <h3 class="mt-4">Tienes <strong style="font-size: 36px"
                                                id="num_vacaciones_pendiente"></strong> días</h3> --}}

                                        <input type="hidden" id="numVacPend" name="numVacPend">
                                        <h5 style="color:var(--color_c_n)">saldo pendiente de vacaciones</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="col-md-6">
                            <div class="card d-flex" style="justify-content: flex-end;">
                                <div class="card-body">
                                    <div class="dias_vacaciones">
                                        <strong style="font-size: 36px" id="num_vacaciones_pendiente"></strong>
                                        <h4>Inicio de tus proximas vacaciones</h4>
                                        <input type="hidden" id="numVacPend" name="numVacPend">

                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        <div class="col-md-6">
                            <div class="card d-flex" style="justify-content: flex-end;">
                                <div class="card-body">
                                    <div class="dias_vacaciones">
                                        <strong style="font-size: 36px" id="msgRecordar"></strong>
                                        <h4>Inicio de tus proximas vacaciones</h4>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </section>




        <section class="section dashboard">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div>
                        <div class="card-body">
                            <div class="d-flex" style="gap: 40px">
                                <div class="col-md-6 d-none d-md-block">
                                    <h5 class="card-title titulo_1" style="text-transform: none;">Calendario de
                                        vacaciones solicitadas</h5>
                                </div>

                                {{-- <div class="card" style="position: relative; top: -182px">
                                    <div class="card-body">
                                        <div class="col-md-12 d-none d-md-block">
                                            <div>
                                                <h5 class="tarjetas-home" id="msgRecordar"></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}

                            </div>

                            <div class="row d-sm-block d-md-none justify-content-center">
                                <div class="col-sm-6">
                                    <h5 class="card-title titulo_1" style="text-transform: none;">Calendario de
                                        vacaciones solicitadas</h5>
                                </div>


                            </div>

                            <div class="row">
                                <div class="col-md-12 table-responsive"
                                    style="padding-left: 2rem;padding-right: 2rem; background-color: white;">
                                    <div id='calendar' style="height: 28rem;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2 offset-md-2" style="margin-bottom: 1rem;">
                        <button class="btn btn-success btnDorado btnConvenio" style="width: -webkit-fill-available;"
                            data-bs-toggle="modal" data-bs-target="#ModalSolicitud" id="btnSolicitarVac">Solicitar
                            <br>
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
                </div>


                <div class="col-md-10">

                    <div class="tittle_card">
                        <h4 class="titulo_registro_v">Registro de vacaciones
                        </h4>
                    </div>

                    <div class="card_vacaciones">
                        <div class="card-body">
                            {{-- <h5 class="card-title ">Registro de vacaciones</h5> --}}
                            <div class="row">
                                <div class="col-12 col-md-3" style="margin-bottom: 1rem;margin-top: 2%;">
                                    <div class="form-group">
                                        <span class="card-title">Búsqueda por año</span>
                                    </div>
                                </div>
                                <div class="col-3 col-md-1" style="margin-bottom: 1rem;margin-top: 2%;">
                                    <div class="form-group">
                                        <span>Inicio:</span>
                                    </div>
                                </div>
                                <div class="col-6 col-md-2" style="margin-bottom: 1rem;margin-top: 2%;">
                                    <div class="form-group">
                                        <select name="annoIni" id="annoIni" class="form-control selectForm">
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3 d-sm-block d-md-none"></div>
                                <div class="col-3 col-md-1" style="margin-bottom: 1rem;margin-top: 2%;">
                                    <div class="form-group">
                                        <span>Fin:</span>
                                    </div>
                                </div>
                                <div class="col-6 col-md-2" style="margin-bottom: 1rem;margin-top: 2%;">
                                    <div class="form-group">
                                        <select name="annoFin" id="annoFin" class="form-control selectForm"
                                            disabled>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2" style="text-align: -webkit-center; margin-top: 2%;">
                                    <div class="form-group">
                                        <h5><button class="btn btn-success btnDorado"
                                                id="buscarLista">Buscar&nbsp;&nbsp;<span
                                                    class="bi bi-search"></span></button></h5>
                                    </div>
                                </div>
                            </div>


                            <div class="row d-none d-md-block">
                                <div class="col-md-12 table-responsive"
                                    style="padding-left: 2rem;padding-right: 2rem;">
                                    <table class="table table-striped " id="listaVacSol" style="text-align: center;">
                                        <thead>
                                            <tr>
                                                <th scope="col" width="15%">Inicio</th>
                                                <th scope="col" width="15%">Término</th>
                                                <th scope="col" width="10%">Número de días</th>
                                                <th scope="col" width="14%">Estado</th>
                                                <th scope="col" width="14%">Firma</th>
                                                <th scope="col" width="14%">Pago</th>
                                                <th scope="col" width="18%">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- <tr>
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
                                        </tr> --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row d-sm-block d-md-none">
                                <div class="col-md-12 table-responsive"
                                    style="padding-left: 2rem;padding-right: 2rem;">
                                    <table class="table table-striped " id="listaVacSolMovil">
                                        <tbody id="bodySolicitudMovil">
                                            {{-- <tr>
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

    </main><!-- End #main -->

    <x-modals.solicitudVacaciones />

</x-layouts.app>
{{-- <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script> --}}
<script src="https://unpkg.com/popper.js/dist/umd/popper.min.js"></script>
<script src="https://unpkg.com/tooltip.js/dist/umd/tooltip.min.js"></script>
{{-- <script src="https://static.cloudflareinsights.com/beacon.min.js"></script> --}}
<script src="{{ asset('assets/js/solicitudVacaciones.js') }}"></script>
