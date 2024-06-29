<x-layouts.app title="Seguimiento" meta-description="mensaje meta description">

    <div id="overlay_load" class="overlay_muya">
        <img src="{{ asset('assets/img/GM-BLANCO-SM.png') }}" alt="login" class="fading-element">
    </div>
    <main id="main" class="main">
        <div class="pagetitle d-none d-md-block">
            <h1>Seguimiento de Contrato </h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
                    <li class="breadcrumb-item active">Seguimiento</li>
                </ol>
            </nav>
        </div>

        <div class="pagetitle d-sm-block d-md-none mt-5">
            <h1 style="font-size: 30px">Seguimiento de Contrato</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
                    <li class="breadcrumb-item active">Seguimiento</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="d-sm-block d-md-none d-flex flex-column align-items-center mb-3">
                <select class="form-select mb-3" name="" id="">
                    <option value="">Seleccione estado</option>
                </select>

                <select class="form-select mb-3" name="" id="">
                    <option value="">Seleccione supervisor</option>

                </select>

                <select class="form-select mb-3" name="" id="">
                    <option value="">Seleccione usuario</option>
                </select>

                <select class="form-select mb-3" name="" id="">
                    <option value="">Seleccione</option>

                </select>
            </div>

            <div class="row">
                <div class="col-md-10 offset-md-1" id="container_cards_seguimientos">

                    {{-- <div class="card">
                        <div class="d-flex flex-column align-items-center">
                            <h5 class="card-title text-center">Jose Alberto Valderrama Portales</h5>
                            <p class="card-text">
                                Contrato <strong class="text_resaltado">digital</strong> xxxxxx
                                <strong class="text_resaltado">c/firma</strong> elec.
                            </p>
                            <p class="card-text">Estado: <strong class="text_resaltado">FIRMADO</strong></p>
                            <div class="d-flex justify-content-space-between" style="gap: 230px">
                                <p></p>
                                <button class="btn btn-success mb-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#info_contrato_1" aria-expanded="false"
                                    aria-controls="info_contrato_1">
                                    <i class="bi bi-caret-down-fill"></i>
                                </button>
                            </div>
                        </div>

                        <div class="card-body collapse mt-3" id="info_contrato_1">
                            <div class="d-flex flex-column align-items-center">
                                <p class="card-text">
                                    <label class="text_resaltado">Emitido:</label>
                                    <strong>14/11/23</strong>
                                </p>

                                <p class="card-text">
                                    <label class="text_resaltado">Enviado:</label>
                                    <strong>14/11/23</strong>
                                </p>

                                <p class="card-text">
                                    <label class="text_resaltado">Activado:</label>
                                    <strong>-</strong>
                                </p>

                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#info_1">1° Titular</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#info_2">2° Titular</a>
                                    </li>
                                </ul>

                                <div class="d-flex flex-column align-items-center mt-2" id="info_1">
                                    <p class="card-text text_resaltado">
                                        <strong>Jose Alberto Valderrama Portales</strong>
                                    </p>
                                    <p>
                                        <strong>987 654 321</strong>
                                    </p>

                                    <p>
                                        <strong>correo.de.prueba@grupomuya.com.pe</strong>
                                    </p>

                                    <p>
                                        <label class="text_resaltado">Notificacion Firma: </label>
                                        <strong>14/11/23</strong>
                                    </p>

                                    <p>
                                        <label class="text_resaltado">Firmado:</label>
                                        <strong>14/11/23</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                </div>

            </div>
        </section>

    </main><!-- End #main -->

</x-layouts.app>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{ asset('assets/js/seguimientos.js') }}"></script>
