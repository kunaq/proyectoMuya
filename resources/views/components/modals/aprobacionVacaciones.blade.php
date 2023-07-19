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

  
  <form id="formularioCargaMasiva" class="" action="{{ route('subirArchivo') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
    
    <div class="modal fade" id="ModalCargaMasiva" tabindex="-1" aria-labelledby="ModalReglasLabel" aria-hidden="true">
      <div class="modal-dialog  modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title card-title fs-5" id="ModalReglasLabel">Carga Masiva de vacaciones</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" id="">
            {{-- <div class="col-md-5" style="text-align: -webkit-center">
                <input  class="btn btn-success btnDorado" type="file" name="archivo">
            </div> --}}

            
            
            <div class="row" style="display: flex; align-items: baseline;">
              
              <div class="mb-3 col-12 col-md-6">
                <div class="form-group">
                  <label for="annoIni" class="form-label">Año:</label>
                  <select class="form-select" name="annoIni" id="annoIni">
                  </select>
                </div>
              </div>

              <div class="mb-3 col-12 col-md-6">
                <div class="form-group">
                  <label for="periodo" class="form-label">Periodo:</label>
                  <select class="form-select" name="periodo" id="periodo">
                    <option value="Enero">Enero</option>
                    <option value="Febrero">Febrero</option>
                    <option value="Marzo">Marzo</option>
                    <option value="Abril">Abril</option>
                    <option value="Mayo">Mayo</option>
                    <option value="Junio">Junio</option>
                    <option value="Julio">Julio</option>
                    <option value="Agosto">Agosto</option>
                    <option value="Septiembre">Septiembre</option>
                    <option value="Octubre">Octubre</option>
                    <option value="Noviembre">Noviembre</option>
                    <option value="Diciembre">Diciembre</option>  
                  </select>              
                </div>
              </div>


              <div class="col-12 col-md-12 mb-3">
                <p class="form-label" style="margin-left:5%">Seleccione un archivo Excel con <i class="" data-bs-html="true" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="<p style='text-align: justify;'>La hoja de Excel debe tener 3 columnas ('codigo de trabajador', 'fecha inicio', 'fecha fin') y los datos sin encabezado</p>"><u>formato válido</u></i> y extensión .xls/.xlsx</p>
                <input type="file" id="archivo" name="archivo" class="form-control" aria-label="file example" style="max-width:70%; margin-left:15%" required>
                {{-- <div class="invalid-feedback">Example invalid form file feedback</div> --}}
              </div>
              <div class="col-12 col-md-2" style="text-align: center;">
                <input class="form-check-input checkVerde" type="checkbox" checked value="" id="flexCheckDefault2">
              </div>
              <div class="col-12 col-md-10">
                  <div class="form-group">
                      <h6>Aprobar automáticamente las vacaciones que inician el siguiente mes</h6>
                  </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-success btnDorado" data-bs-dismiss="modal" type="submit" id="buscarDoc2" disabled>Cargar</button>
          </div>
        </div>
      </div>
    </div>

  </form>

<script>
  var obj = document.getElementById('archivo');

  obj.addEventListener('input', function(){
    if (obj.value == '') {
      document.getElementById('buscarDoc2').setAttribute('disabled','true');
    }else{
      document.getElementById('buscarDoc2').removeAttribute('disabled');
    }
  });
  
  
</script>
