  <!-- -------------------Modal Reglas------------------------------- -->

  <div class="modal fade" id="ModalReglas" tabindex="-1" aria-labelledby="ModalReglasLabel" aria-hidden="true">
      <div class="modal-dialog  modal-dialog-centered modal-lg modal-dialog-scrollable">
          <div class="modal-content">
              <div class="modal-header">
                  <h1 class="modal-title card-title fs-5" id="ModalReglasLabel">Reglas de Solicitud de vacaciones</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" id="bodyRegla">
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-success btnDorado" data-bs-dismiss="modal">Aceptar</button>
              </div>
          </div>
      </div>
  </div>

  <!-- -------------------Modal Carga Masiva Excel------------------------------- -->


  <form id="formularioCargaMasiva" class="" action="" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="modal fade" id="ModalCargaMasiva" tabindex="-1" aria-labelledby="ModalReglasLabel"
          aria-hidden="true">
          <div class="modal-dialog  modal-dialog-centered modal-xl modal-dialog-scrollable">
              <div class="modal-content">
                  <div class="modal-header">
                      <h1 class="modal-title card-title fs-5" id="ModalReglasLabel">Carga Masiva de vacaciones</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body" id="">
                      {{-- <div class="col-md-5" style="text-align: -webkit-center">
                <input  class="btn btn-success btnDorado" type="file" name="archivo">
            </div> --}}
                      <div class="row mb-3">
                          <div class="col-12 col-md-4">
                              <p class="form-label">Seleccione el periodo de carga:</p>
                          </div>
                          <div class="col-12 col-md-2" style="margin-left: -3.5em;">
                              <div class="form-group">
                                  <select class="form-select" name="annoIniVE" id="annoIniVE">
                                  </select>
                              </div>
                          </div>

                          <div class="col-12 col-md-2">
                              <div class="form-group">
                                  <select class="form-select" name="periodo" id="periodo">
                                      <option value="1">Enero</option>
                                      <option value="2">Febrero</option>
                                      <option value="3">Marzo</option>
                                      <option value="4">Abril</option>
                                      <option value="5">Mayo</option>
                                      <option value="6">Junio</option>
                                      <option value="7">Julio</option>
                                      <option value="8">Agosto</option>
                                      <option value="9">Septiembre</option>
                                      <option value="10">Octubre</option>
                                      <option value="11">Noviembre</option>
                                      <option value="12">Diciembre</option>
                                  </select>
                              </div>
                          </div>
                          <div class="col-12 col-md-2">
                              <div class="form-group" style="display: flex">
                                  <p style="margin-right: 1em">al</p>
                                  <select class="form-select" name="annoFinVE" id="annoFinVE">
                                  </select>
                              </div>
                          </div>

                          <div class="col-12 col-md-2">
                              <div class="form-group">
                                  <select class="form-select" name="periodoFin" id="periodoFin">
                                      <option value="1">Enero</option>
                                      <option value="2">Febrero</option>
                                      <option value="3">Marzo</option>
                                      <option value="4">Abril</option>
                                      <option value="5">Mayo</option>
                                      <option value="6">Junio</option>
                                      <option value="7">Julio</option>
                                      <option value="8">Agosto</option>
                                      <option value="9">Septiembre</option>
                                      <option value="10">Octubre</option>
                                      <option value="11">Noviembre</option>
                                      <option value="12">Diciembre</option>
                                  </select>
                              </div>
                          </div>
                      </div>

                      <div class="row" style="display: flex; align-items: baseline;">
                          <div class="col-12 col-md-12 mb-3">
                              <p class="form-label" style="margin-left:5%">Seleccione un archivo Excel con <i
                                      class="" data-bs-html="true" data-bs-toggle="tooltip"
                                      data-bs-placement="top" id="ayudaCargaMasivaApr"><u>formato válido</u></i> y
                                  extensión .xls/.xlsx</p>
                              <input type="file" id="archivo" name="archivo" class="form-control"
                                  aria-label="file example" style="max-width:70%; margin-left:15%" required>
                              {{-- <div class="invalid-feedback">Example invalid form file feedback</div> --}}
                          </div>
                          <div class="row">
                              <div class="col-2 col-md-1 offset-md-1" style="text-align: right;margin-top:-0.2em;">
                                  <input class="form-check-input chkDatos" type="checkbox" checked
                                      id="apruebaAutomatico" name="apruebaAutomatico">
                                  <input type="hidden" name="origen" value="APR">
                              </div>
                              <div class="col-10 col-md-10">
                                  <p>Aprobar automáticamente las vacaciones que inician el siguiente mes</p>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button class="btn btn-success btnDorado" data-bs-dismiss="modal" type="submit"
                          id="buscarDoc2" disabled>Cargar</button>
                  </div>

                  {{-- <div class="modal-footer">
                      <button class="btn btn-success btnDorado" data-bs-dismiss="modal" type="button"
                          id="buscarDoc2" disabled onclick="envioMasivoExcel()">Cargar</button>
                  </div> --}}
              </div>
          </div>
      </div>

  </form>

  <script>
      var obj = document.getElementById('archivo');

      obj.addEventListener('input', function() {
          if (obj.value == '') {
              document.getElementById('buscarDoc2').setAttribute('disabled', 'true');
          } else {
              document.getElementById('buscarDoc2').removeAttribute('disabled');
          }
      });
  </script>
