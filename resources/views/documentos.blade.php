<x-layouts.app title="documentos" meta-description="documentos meta description">

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Documentos</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
                    <li class="breadcrumb-item active">Documentos</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="card">
                        <h5 class="card-title"></h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4" style="margin-bottom: 1rem;">
                                    <div class="form-group">
                                        <select name="tipoDoc" id="tipoDoc" class="form-control selectForm">
                                            <option value="0" selected disabled>Seleccione un tipo de documento...
                                            </option>
                                            <option value="11001">Boleta de pago</option>
                                            <option value="11002">Constancia de CTS</option>
                                            <option value="11003">Participación de utilidades</option>
                                            <option value="11004">Certificado de renta de 5ta categoría</option>
                                            <option value="11005">Convenio de adelanto de vacaciones</option>
                                            <option value="11006">Solicitud de vacaciones</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3" style="margin-bottom: 1rem;">
                                    <div class="form-group">
                                        <select name="annoIni" id="annoIni" class="form-control selectForm">
                                            <option value="2023">2023</option>
                                            <option value="2022">2022</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="form-group">
                                        <select name="annoFin" id="annoFin" class="form-control selectForm" disabled>
                                            <option value="2023">2023</option>
                                            <option value="2022">2022</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2" style="text-align: -webkit-center">
                                    <div class="form-group">
                                        <h5><button class="btn btn-success btnDorado"
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

        <section class="section dashboard" id="resultado" hidden="true">

            <div class="row">
                <div class="col-md-10 offset-md-1 ">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 30px;">2023</h5>
                            <div class="row">
                                <div class="col-6 col-md-2">
                                    <a href="assets/file/boleta.pdf" class="btn btn-block login-btn mb-4"
                                        target="_blank"><i class="bx bx-calendar"></i> Enero</a>
                                </div>
                                <div class="col-6 col-md-2">
                                    <a href="assets/file/boleta.pdf" target="_blank"
                                        class="btn btn-block login-btn mb-4"><i class="bx bx-calendar"></i> Febrero</a>
                                </div>
                                <div class="col-6 col-md-2">
                                    <a href="assets/file/boleta.pdf" target="_blank"
                                        class="btn btn-block login-btn mb-4"><i class="bx bx-calendar"></i> Marzo</a>
                                </div>
                                <div class="col-6 col-md-2">
                                    <a href="assets/file/boleta.pdf" target="_blank"
                                        class="btn btn-block login-btn mb-4"><i class="bx bx-calendar"></i> Abril</a>
                                </div>
                                <div class="col-6 col-md-2">
                                    <a href="assets/file/boleta.pdf" target="_blank"
                                        class="btn btn-block login-btn mb-4"><i class="bx bx-calendar"></i> Mayo</a>
                                </div>
                                <div class="col-6 col-md-2">
                                    <a href="assets/file/boleta.pdf" target="_blank"
                                        class="btn btn-block login-btn mb-4"><i class="bx bx-calendar"></i> Junio</a>
                                </div>
                                <div class="col-6 col-md-2">
                                    <a href="assets/file/boleta.pdf" target="_blank"
                                        class="btn btn-block login-btn mb-4"><i class="bx bx-calendar"></i> Julio</a>
                                </div>
                                <div class="col-6 col-md-2">
                                    <a href="assets/file/boleta.pdf" target="_blank"
                                        class="btn btn-block login-btn mb-4"><i class="bx bx-calendar"></i> Agosto</a>
                                </div>
                                <div class="col-6 col-md-2">
                                    <a href="assets/file/boleta.pdf" target="_blank"
                                        class="btn btn-block login-btn mb-4"><i class="bx bx-calendar"></i>
                                        Septiembre</a>
                                </div>
                                <div class="col-6 col-md-2">
                                    <a href="assets/file/boleta.pdf" target="_blank"
                                        class="btn btn-block login-btn mb-4"><i class="bx bx-calendar"></i> Octubre</a>
                                </div>
                                <div class="col-6 col-md-2">
                                    <a href="assets/file/boleta.pdf" target="_blank"
                                        class="btn btn-block login-btn mb-4"><i class="bx bx-calendar"></i>
                                        Noviembre</a>
                                </div>
                                <div class="col-6 col-md-2">
                                    <a href="assets/file/boleta.pdf" target="_blank"
                                        class="btn btn-block login-btn mb-4"><i class="bx bx-calendar"></i>
                                        Diciembre</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- Template Main JS File -->
    <script type="text/javascript">
        document.getElementById("buscarDoc").addEventListener("click", function(e){
      obj = document.getElementById("resultado");
      obj.removeAttribute('hidden', 'true');
      obj.addAttribute('hidden', 'false');
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
    
    </script>

</x-layouts.app>