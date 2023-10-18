  <!-- -------------------Modal Carga Masiva Excel------------------------------- -->

  
  <form class="" id="formCargaMasivaConfig" action="{{ route('subirArchivoConfiguraciones') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
    
    <div class="modal fade" id="ModalCargaMasivaConfig" tabindex="-1" aria-labelledby="ModalCargaMasivaConfig" aria-hidden="true">
      <div class="modal-dialog  modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title card-title fs-5" id="ModalCargaMasivaConfigLabel">Carga Masiva de configuraciones</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            {{-- <div class="col-md-5" style="text-align: -webkit-center">
                <input  class="btn btn-success btnDorado" type="file" name="archivo">
            </div> --}}  
            
            <div class="row" style="display: flex; align-items: baseline;">

              <div class="col-12 col-md-12 mb-3">
                <p class="form-label" style="margin-left:5%">Seleccione un archivo Excel con <i id="ayudaCargaMasiva"><u>formato válido</u></i> y extensión .xls/.xlsx</p>
                <input type="file" id="archivo" name="archivo" class="form-control" aria-label="file example" style="max-width:70%; margin-left:15%" required>
                {{-- <div class="invalid-feedback">Example invalid form file feedback</div> --}}
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-success btnDorado" data-bs-dismiss="modal" type="submit" id="buscarDoc3" disabled>Cargar</button>
          </div>
        </div>
      </div>
    </div>

  </form>