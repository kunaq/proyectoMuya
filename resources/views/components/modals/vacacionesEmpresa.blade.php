    <!-- -------------------Modal Carga Masiva Excel------------------------------- -->

  
    <form id="formularioCargaMasiva" class="" action="" method="POST" enctype="multipart/form-data">
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
                    <label for="annoIniVE" class="form-label">Año:</label>
                    <select class="form-select" name="annoIniVE" id="annoIniVE">
                    </select>
                  </div>
                </div>
  
                <div class="mb-3 col-12 col-md-6">
                  <div class="form-group">
                    <label for="periodo" class="form-label">Periodo:</label>
                    <select class="form-select" name="periodo" id="periodo">
                      <option value="ENE">Enero</option>
                      <option value="FEB">Febrero</option>
                      <option value="MAR">Marzo</option>
                      <option value="ABR">Abril</option>
                      <option value="MAY">Mayo</option>
                      <option value="JUN">Junio</option>
                      <option value="JUL">Julio</option>
                      <option value="AGO">Agosto</option>
                      <option value="SET">Septiembre</option>
                      <option value="OCT">Octubre</option>
                      <option value="NOV">Noviembre</option>
                      <option value="DIC">Diciembre</option>  
                    </select>              
                  </div>
                </div>
  
  
                <div class="col-12 col-md-12 mb-3">
                  <p class="form-label" style="margin-left:5%">Seleccione un archivo Excel con <i class="" data-bs-html="true" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="<p style='text-align: justify;'>La hoja de Excel debe tener 3 columnas ('codigo de trabajador', 'fecha inicio', 'fecha fin') y los datos sin encabezado</p>"><u>formato válido</u></i> y extensión .xls/.xlsx</p>
                  <input type="file" id="archivo" name="archivo" class="form-control" aria-label="file example" style="max-width:70%; margin-left:15%" required>
                  {{-- <div class="invalid-feedback">Example invalid form file feedback</div> --}}
                </div>
                <div class="row">
                  <div class="col-2 col-md-1 offset-md-1" style="text-align: right;margin-top:-0.2em;">
                    <input class="form-check-input checkVerde" type="checkbox" checked value="" id="flexCheckDefault2" name="apruebaAutomatico">
                    <input type="hidden" name="origen" value="EMP">
                  </div>
                  <div class="col-10 col-md-10">
                    <p>Aprobar automáticamente las vacaciones que inician el siguiente mes</p>
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

  <!-- -------------------Modal Reglas------------------------------- -->

  <div class="modal fade" id="ModalReglas" tabindex="-1" aria-labelledby="ModalReglasLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-lg modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title tarjeta-vaca-foco fs-5" id="ModalReglasLabel">Reglas de Solicitud de vacaciones</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <nav>
            <div class="nav nav-pills nav-fill navDatPer" id="nav-tab" role="tablist">
                <button class="nav-item nav-item-left nav-link active" id="navSupervisor-tab" data-bs-toggle="tab" data-bs-target="#navSupervisor" type="button" role="tab" aria-controls="navSupervisor" aria-selected="true">Responsable</button>
                <button class="nav-item nav-item-right nav-link" id="nav-colaborador-tab" data-bs-toggle="tab" data-bs-target="#nav-colaborador" type="button" role="tab" aria-controls="nav-colaborador" aria-selected="false">Colaborador</button>
            </div>
        </nav>
        <div class="modal-body">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade" id="nav-colaborador" style="margin-bottom: 2rem;" role="tabpanel" aria-labelledby= "nav-colaborador-tab"></div>

                <div class="tab-pane fade show active" id="navSupervisor" style="margin-bottom: 2rem;" role="tabpanel" aria-labelledby="navSupervisor-tab"></div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success btnDorado" data-bs-dismiss="modal">Aceptar</button>
        </div>
      </div>
    </div>
  </div>

   <!-- -------------------Modal Modificar Reglas------------------------------- -->

   <div class="modal fade" id="ModalModifReglas" tabindex="-1" aria-labelledby="ModalModifReglasLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-lg modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title tarjeta-vaca-foco fs-5" id="ModalReglasLabel">Modificar reglas de Solicitud de vacaciones</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <nav>
            <div class="nav nav-pills nav-fill navDatPer" id="nav-tab" role="tablist">
                <button class="nav-item nav-item-left nav-link active" id="navModfSupervisor-tab" data-bs-toggle="tab" data-bs-target="#navModfSupervisor" type="button" role="tab" aria-controls="navModfSupervisor" aria-selected="true">Responsable</button>
                <button class="nav-item nav-item-right nav-link" id="navModifcolaborador-tab" data-bs-toggle="tab" data-bs-target="#navModifcolaborador" type="button" role="tab" aria-controls="navModifcolaborador" aria-selected="false">Colaborador</button>
            </div>
        </nav>
        <div class="modal-body">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade" id="navModifcolaborador" style="margin-bottom: 2rem;" role="tabpanel" aria-labelledby= "navModifcolaborador-tab">   
                    <textarea class="form-control" id="txtReglasColab" rows="15">         
                   </textarea>
                </div>

                <div class="tab-pane fade show active" id="navModfSupervisor" style="margin-bottom: 2rem;" role="tabpanel" aria-labelledby="navModfSupervisor-tab">
                    <textarea class="form-control" id="txtReglasJefe" rows="15"></textarea>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" id="btnModificaReglas" class="btn btn-success btnDorado" >Guardar</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>

    <!-- -------------------Modal Parametros------------------------------- -->

  <div class="modal fade" id="ModalParametros" tabindex="-1" aria-labelledby="ModalReglasLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-lg modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title tarjeta-vaca-foco fs-5" id="ModalReglasLabel">Parámetros</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        {{-- <nav>
            <div class="nav nav-pills nav-fill navDatPer" id="nav-tab" role="tablist">
                <button class="nav-item nav-item-left nav-link active" id="navSupervisor-tab" data-bs-toggle="tab" data-bs-target="#navSupervisor" type="button" role="tab" aria-controls="navSupervisor" aria-selected="true">Responsable</button>
                <button class="nav-item nav-item-right nav-link" id="nav-colaborador-tab" data-bs-toggle="tab" data-bs-target="#nav-colaborador" type="button" role="tab" aria-controls="nav-colaborador" aria-selected="false">Colaborador</button>
            </div>
        </nav> --}}
        <form action="" id="formParametros" method="get">
          <div class="modal-body">
              {{-- <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade" id="nav-colaborador" style="margin-bottom: 2rem;" role="tabpanel" aria-labelledby= "nav-colaborador-tab"></div>
  
                  <div class="tab-pane fade show active" id="navSupervisor" style="margin-bottom: 2rem;" role="tabpanel" aria-labelledby="navSupervisor-tab"></div>
              </div> --}}
              <div class="row">
                  <div class="col-12 col-md-2">
                    <label for="parametroX" class="form-label">Parámetro X:</label>
                  </div>
                  <div class="col-12 col-md-3">
                    <input type="number"
                      class="form-control" name="parametroX" id="parametroX" aria-describedby="helpId" min="0" max="99">
                  </div>
                  <div class="col-12 col-md-2 offset-md-1">
                      <label for="parametroY" class="form-label">Parámetro Y:</label>
                  </div>
                  <div class="col-12 col-md-3">
                      <input type="number"
                        class="form-control" name="parametroY" id="parametroY" aria-describedby="helpId" min="0" max="99">
                    </div>
              </div>
              <div class="row">
                  <div class="col-12 col-md-6">
                      <small id="helpId" class="form-text text-muted">Cantidad máxima de trabajadores de un mismo grupo que pueden coincidir en sus vacaciones en un mismo día. </small>
                  </div>
                  <div class="col-12 col-md-6">
                      <small id="helpId" class="form-text text-muted">Cantidad total de días que pueden exeder las vacaciones solicitadas</small>
                  </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success btnDorado" data-bs-dismiss="modal">Aceptar</button>
          </div>
        </form>
      </div>
    </div>
  </div>


  <!-- Template Main JS File -->
  {{-- <script type='importmap'>
    {
      "imports": {
        "@fullcalendar/core": "https://cdn.skypack.dev/@fullcalendar/core@6.1.6",
        "@fullcalendar/daygrid": "https://cdn.skypack.dev/@fullcalendar/multimonth@6.1.6"
      }
    }
  </script> --}}

<script type="text/javascript">

</script>