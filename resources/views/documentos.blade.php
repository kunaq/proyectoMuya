    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        span.select2.select2-container.select2-container--classic {
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

        /* Otros estilos personalizados */
        /* .my-select2 {
          width: 200px;
        } */
    </style>
    <x-layouts.app title="documentos" meta-description="documentos meta description">
        <main id="main" class="main">
            <div class="pagetitle d-none d-md-block">
                <h1>Documentos</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
                        <li class="breadcrumb-item active">Documentos</li>
                    </ol>
                </nav>
            </div>

            <div class="pagetitle d-sm-block d-md-none mt-5">
                <h1>Documentos</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
                        <li class="breadcrumb-item active">Documentos</li>
                    </ol>
                </nav>
            </div>

            <div class="col-md-12 d-none d-md-block">
                <div class="col-md-12 container_buttons_docs">
                    <button class="btns_docs">
                        <i>
                            <img class="img_boleta" src="{{ asset('assets/img/BOLETAS-08.svg') }}" alt="">
                        </i>
                        BOLETAS
                    </button>
                    <button class="btns_docs">
                        <i>
                            <img class="img_boleta" src="{{ asset('assets/img/CTS-09.svg') }}" alt="">
                        </i>
                        CONSTANCIA CTS
                    </button>
                    <button class="btns_docs">
                        <i>
                            <img class="img_boleta" src="{{ asset('assets/img/UTILIDADES-10.svg') }}" alt="">
                        </i>
                        PARTICIPACION DE UTILIDADES</button>
                    <button class="btns_docs">
                        <i>
                            <img class="img_boleta" src="{{ asset('assets/img/RENTA-11.svg') }}" alt="">
                        </i>
                        RENTA DE 5TA CATEGORIA
                    </button>
                </div>
            </div>

            <div class="col-sm-12 d-sm-block d-md-none">
                <div class="col-md-12 container_buttons_docs">
                    <button class="btns_docs">
                        <i>
                            <img class="img_boleta" src="{{ asset('assets/img/BOLETAS-08.svg') }}" alt="">
                        </i>
                        BOLETAS
                    </button>
                    <button class="btns_docs">
                        <i>
                            <img class="img_boleta" src="{{ asset('assets/img/CTS-09.svg') }}" alt="">
                        </i>
                        CONSTANCIA CTS
                    </button>
                    <button class="btns_docs">
                        <i>
                            <img class="img_boleta" src="{{ asset('assets/img/UTILIDADES-10.svg') }}" alt="">
                        </i>
                        PARTICIPACION DE UTILIDADES</button>
                    <button class="btns_docs">
                        <i>
                            <img class="img_boleta" src="{{ asset('assets/img/RENTA-11.svg') }}" alt="">
                        </i>
                        RENTA DE 5TA CATEGORIA
                    </button>
                </div>
            </div>


            <div class="container_total_fechas">
                <div class="d-flex" style="padding: 4%">
                    <div class="mx-auto">
                        <strong class="titulo_busqueda_anio">BÚSQUEDA POR AÑO</strong>
                    </div>
                </div>

                <div class="container mt-4">
                    <div
                        class="d-flex flex-wrap flex-md-nowrap align-items-center justify-content-center container_inputs_fechas">
                        <div class="d-flex align-items-center me-3 mb-2 mb-md-0">
                            <label for="inicio" class="me-5 text-start text-sm-start">Inicio:</label>
                            <select name="inicio" id="inicio" class="form-select me-3">
                                <option value="">2023</option>
                            </select>
                        </div>

                        <div class="d-flex align-items-center me-3 mb-2 mb-md-0">
                            <label for="fin" class="me-5 text-start text-sm-start">Fin:</label>
                            <select name="fin" id="fin" class="form-select me-1">
                                <option value="">2023</option>
                            </select>
                        </div>

                        <div class="d-block d-md-none w-100 text-center mt-2">
                            <button class="btn btn-primary btn_buscar_fecha mx-auto">Buscar</button>
                        </div>

                        <div class="d-none d-md-block">
                            <button class="btn btn-primary btn_buscar_fecha">Buscar</button>
                        </div>
                    </div>
                </div>

            </div>







            <section class="section dashboard" hidden>
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="card">
                            <h5 class="card-title"></h5>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4" style="margin-bottom: 1rem;">
                                        <div class="form-group">
                                            <select name="tipoDoc" id="tipoDoc"
                                                class="form-control selectForm js-example-basic-single">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3" style="margin-bottom: 1rem;">
                                        <div class="form-group">
                                            <select name="annoIni" id="annoIni" class="form-control selectForm">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="form-group">
                                            <select name="annoFin" id="annoFin" class="form-control selectForm"
                                                disabled>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="text-align: -webkit-center">
                                        <div class="form-group">
                                            <h5><button class="btn btn-success btnDorado login-btn"
                                                    id="buscarDoc">Buscar&nbsp;&nbsp;<span
                                                        class="bi bi-search"></span></button></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div id="sectionContainer"></div>



            {{-- <section class="section dashboard" id="resultado">

            <div class="row">
                <div class="col-md-10 offset-md-1 ">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 30px;">2023</h5>
                            <div class="row">
                                <div class="col-6 col-md-2">
                                    <a href="assets/file/boleta.pdf" class="btn btn-block mb-4"
                                        target="_blank"><i class="bx bx-calendar"></i> Enero</a>
                                </div>
                                <div class="col-6 col-md-2">
                                    <a href="assets/file/boleta.pdf" target="_blank"
                                        class="btn btn-block mb-4"><i class="bx bx-calendar"></i> Febrero</a>
                                </div>
                                <div class="col-6 col-md-2">
                                    <a href="assets/file/boleta.pdf" target="_blank"
                                        class="btn btn-block mb-4"><i class="bx bx-calendar"></i> Marzo</a>
                                </div>
                                <div class="col-6 col-md-2">
                                    <a href="assets/file/boleta.pdf" target="_blank"
                                        class="btn btn-block mb-4"><i class="bx bx-calendar"></i> Abril</a>
                                </div>
                                <div class="col-6 col-md-2">
                                    <a href="assets/file/boleta.pdf" target="_blank"
                                        class="btn btn-block mb-4"><i class="bx bx-calendar"></i> Mayo</a>
                                </div>
                                <div class="col-6 col-md-2">
                                    <a href="assets/file/boleta.pdf" target="_blank"
                                        class="btn btn-block mb-4"><i class="bx bx-calendar"></i> Junio</a>
                                </div>
                                <div class="col-6 col-md-2">
                                    <a href="assets/file/boleta.pdf" target="_blank"
                                        class="btn btn-block mb-4"><i class="bx bx-calendar"></i> Julio</a>
                                </div>
                                <div class="col-6 col-md-2">
                                    <a href="assets/file/boleta.pdf" target="_blank"
                                        class="btn btn-block mb-4"><i class="bx bx-calendar"></i> Agosto</a>
                                </div>
                                <div class="col-6 col-md-2">
                                    <a href="assets/file/boleta.pdf" target="_blank"
                                        class="btn btn-block mb-4"><i class="bx bx-calendar"></i>
                                        Septiembre</a>
                                </div>
                                <div class="col-6 col-md-2">
                                    <a href="assets/file/boleta.pdf" target="_blank"
                                        class="btn btn-block mb-4"><i class="bx bx-calendar"></i> Octubre</a>
                                </div>
                                <div class="col-6 col-md-2">
                                    <a href="assets/file/boleta.pdf" target="_blank"
                                        class="btn btn-block mb-4"><i class="bx bx-calendar"></i>
                                        Noviembre</a>
                                </div>
                                <div class="col-6 col-md-2">
                                    <a href="assets/file/boleta.pdf" target="_blank"
                                        class="btn btn-block mb-4"><i class="bx bx-calendar"></i>
                                        Diciembre</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        </main><!-- End #main -->

    </x-layouts.app>

    <!-- Template Main JS File -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/es.js"></script>
    <script type="text/javascript">
        window.onload = function() {

            // Iniciar el temporizador cuando la página se carga
            iniciarTemporizador();

            $.ajax({
                url: 'lista/MuestraAnhos',
                method: "GET",
                crossDomain: true,
                dataType: 'json',
                success: function(respuesta) {
                    var anio = new Date().getFullYear();
                    respuesta['response'].forEach(function(word) {
                        //console.log(word);
                        if (word['codvar'] <= anio) {
                            $("#annoIni").append('<option value="' + word['codvar'] + '">' + word[
                                'desvar1'] + '</option>');
                            $("#annoFin").append('<option value="' + word['codvar'] + '">' + word[
                                'desvar1'] + '</option>');
                        }

                    });
                }, //success
                error(e) {
                    console.log(e.message);
                } //error
            }); //ajax muestraAnno

            $.ajax({
                url: 'lista/ListarFormato',
                method: "GET",
                crossDomain: true,
                dataType: 'json',
                success: function(respuesta) {
                    respuesta['response'].forEach(function(word) {
                        //console.log(word);
                        $("#tipoDoc").append('<option value="' + word['cod_formato'] + '">' + word[
                            'dsc_formato'] + '</option>');

                    });
                }, //success
                error(e) {
                    console.log(e.message);
                } //error
            }); //ajax muestraAnno


        }
        $(document).ready(function() {
            $('.js-example-basic-single').select2({
                language: "es",
                theme: "classic",
                width: 'resolve',
                placeholder: "Seleccione un tipo de documento...",
                allowClear: true,
                // dir: "rtl",
            });
        });


        var fIni = document.getElementById('annoIni');
        fIni.addEventListener('change', function() {
            var startDate = document.getElementById("annoIni").value;
            var endDateSelect = document.getElementById("annoFin");
            var endDateOptions = endDateSelect.options;

            // Se habilita el campo de fecha fin..
            endDateSelect.removeAttribute("disabled");

            // Mostrar todas las opciones de fecha de fin
            for (var i = 0; i < endDateOptions.length; i++) {
                endDateOptions[i].style.display = "";
            }

            // Verificar si se ha seleccionado una fecha de inicio
            if (startDate) {
                // Filtrar las opciones de fecha de fin
                for (var i = 0; i < endDateOptions.length; i++) {
                    var endDate = endDateOptions[i].value;

                    if (endDate < startDate) {
                        // Ocultar las opciones menores a la fecha de inicio
                        endDateOptions[i].style.display = "none";
                    }
                }

                // Restablecer el valor seleccionado de la fecha de fin si es inválido
                if (endDateSelect.value < startDate) {
                    endDateSelect.value = startDate;
                }
            }



        });

        document.getElementById("buscarDoc").addEventListener("click", function(e) {
            var startDate = document.getElementById("annoIni").value;
            var endDateSelect = document.getElementById("annoFin");
            var finDate = endDateSelect.value;
            var tipoDoc = document.getElementById("tipoDoc").value;
            var codTra = '@php echo(session('codTrabajador')) @endphp';

            // Resto del código de búsqueda aquí...

            if (tipoDoc == '11001') {
                dscUrl = 'lista/ListarBoletaPago';
            } else if (tipoDoc == '11002') {
                dscUrl = 'lista/ListarConstanciaCTS';
            } else if (tipoDoc == '11005') {
                dscUrl = 'lista/ListarConvenio'
            } else if (tipoDoc == '11003') {
                dscUrl = 'lista/ListarUtilidades'
            } else if (tipoDoc == '11006') {
                dscUrl = 'lista/ListarSolicitud'
            } else {
                dscUrl = 'lista/ListaVacia';
            }

            $.ajax({
                url: dscUrl,
                method: "GET",
                crossDomain: true,
                dataType: 'json',
                data: {
                    'codTra': codTra,
                    'annoIni': startDate,
                    'annoFin': finDate
                },
                success: function(respuesta) {
                    var resultados = {}; // Objeto para almacenar los resultados por año

                    // Recorrer los resultados y almacenarlos en el objeto 'resultados'
                    respuesta.response.forEach(function(resultado) {
                        var anno = resultado.cod_anno;
                        if (!resultados[anno]) {
                            resultados[anno] = [];
                        }
                        resultados[anno].push(resultado);
                    });

                    console.log(resultados);

                    // Generar bloques por cada año entre el inicial y final seleccionados
                    var sectionContainer = document.getElementById("sectionContainer");
                    sectionContainer.innerHTML = ""; // Limpiar los bloques anteriores

                    var selectedYears = []; // Variable para almacenar los años seleccionados

                    for (var year = startDate; year <= parseInt(endDateSelect.value); year++) {
                        selectedYears.push(year);

                        var sectionId = "resultado_" + year;
                        var sectionElement = document.createElement("section");
                        sectionElement.setAttribute("class", "section dashboard");
                        sectionElement.setAttribute("id", sectionId);
                        sectionElement.setAttribute("hidden", "true");

                        var sectionContent = "";
                        if (resultados[year]) {
                            // Mostrar resultados para el año actual
                            sectionContent = `
                        <section class="section dashboard" id="resultado_${year}">
                            <div class="row">
                                <div class="col-md-10 offset-md-1">
                                    <div class="card">
                                        <h5 class="card-header" style="font-size: 2em; color: #a18347;">${year}</h5>
                                        <div class="card-body" style="padding-top:1em;">
                                            <div class="row">`;
                            resultados[year].forEach(function(resultado) {
                                if (tipoDoc == '11001' || tipoDoc == '11002') {
                                    var mes = resultado.dsc_periodo.split(' ')[0];
                                    var deshabilita = (resultado.flg_firmado == 'SI') ? '' :
                                        'disabled';
                                    sectionContent += `<div class="col-6 col-md-2" style="margin-bottom:1em;">
                                                    <button class="btn btn-success btnDorado" onclick="buscarDocumento('${resultado.num_mes}','${year}','0')" ${deshabilita} >${mes}</button>
                                                </div>`;
                                } else if (tipoDoc == '11005' || tipoDoc == '11006' ||
                                    tipoDoc == '11003') {
                                    var titulo = (tipoDoc == '11003') ? resultado.cod_anno :
                                        resultado.dsc_periodo;
                                    var numTranx = (tipoDoc == '11003') ? '0' : resultado
                                        .num_transaccion;
                                    var numMes = (tipoDoc == '11003') ? '0' : resultado.num_mes;
                                    var deshabilita = (resultado.flg_firmado == 'SI') ? '' :
                                        'disabled';
                                    sectionContent += `<div class="col-6 col-md-3" style="margin-bottom:1em;">
                                                    <button class="btn btn-success btnDorado" onclick="buscarDocumento('${numMes}','${year}','${numTranx}')" ${deshabilita} >${titulo}</button>
                                                </div>`;
                                }
                            });
                            sectionContent += `
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    `;
                        } else {
                            // Mostrar mensaje de "No hay resultados para el periodo seleccionado"
                            sectionContent = `
                        <section class="section dashboard" id="resultado_${year}">
                            <div class="row">
                                <div class="col-md-10 offset-md-1">
                                    <div class="card">
                                        <h5 class="card-header" style="font-size: 2em; color: #a18347;">${year}</h5>
                                        <div class="card-body">
                                            <h5 class="card-title" style="text-align: center;">No hay resultados para el periodo seleccionado</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    `;
                        }

                        sectionElement.innerHTML = sectionContent;
                        sectionContainer.appendChild(sectionElement);
                    }

                    // Mostrar los bloques correspondientes a los años seleccionados
                    for (var i = 0; i < selectedYears.length; i++) {
                        var sectionId = "resultado_" + selectedYears[i];
                        var sectionElement = document.getElementById(sectionId);

                        if (sectionElement) {
                            sectionElement.removeAttribute("hidden");
                        }
                    }
                },
                error: function(e) {
                    console.error(e);
                }
            });

        });

        function buscarDocumento(mes, anno, numTrx) {
            codTra = '@php echo(session('codTrabajador')) @endphp';
            codDoc = document.getElementById("tipoDoc").value;
            //numMes = nombreMesANumero(mes);

            $.ajax({
                url: 'ObtenerBase64',
                method: "GET",
                crossDomain: true,
                dataType: 'json',
                data: {
                    'cod_trabajador': codTra,
                    'codDoc': codDoc,
                    'anno': anno,
                    'mes': mes,
                    'numTrx': numTrx
                },
                success: function(result) {
                    console.log(result)
                    var completo = result['response']['dsc_base_64'] + result['response']['dsc_base_64_2'] +
                        result['response']['dsc_base_64_3'] + result['response']['dsc_base_64_4'] + result[
                            'response']['dsc_base_64_5'] + result['response']['dsc_base_64_6'] + result[
                            'response']['dsc_base_64_7'] + result['response']['dsc_base_64_8'] + result[
                            'response']['dsc_base_64_9'] + result['response']['dsc_base_64_10'];
                    if (result['response']['dsc_base_64'] != null) {
                        base64ToPDF(completo);
                    } else {
                        Swal.fire({
                            icon: 'warning',
                            text: 'No existe documento a retornar.',
                            confirmButtonText: 'Continuar',
                            confirmButtonColor: '#a18347',
                        })
                    }
                }
            }); //ObtenerBase64

        }
    </script>
