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
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="15">         
                   </textarea>
                </div>

                <div class="tab-pane fade show active" id="navModfSupervisor" style="margin-bottom: 2rem;" role="tabpanel" aria-labelledby="navModfSupervisor-tab">
                    <textarea class="form-control" id="exampleFormControlTextarea2" rows="15"></textarea>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" id="modificaReglas" class="btn btn-success btnDorado" >Guardar</button>
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
          <h1 class="modal-title tarjeta-vaca-foco fs-5" id="ModalReglasLabel">Parametros</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        {{-- <nav>
            <div class="nav nav-pills nav-fill navDatPer" id="nav-tab" role="tablist">
                <button class="nav-item nav-item-left nav-link active" id="navSupervisor-tab" data-bs-toggle="tab" data-bs-target="#navSupervisor" type="button" role="tab" aria-controls="navSupervisor" aria-selected="true">Responsable</button>
                <button class="nav-item nav-item-right nav-link" id="nav-colaborador-tab" data-bs-toggle="tab" data-bs-target="#nav-colaborador" type="button" role="tab" aria-controls="nav-colaborador" aria-selected="false">Colaborador</button>
            </div>
        </nav> --}}
        <form action="" method="get">
            <div class="modal-body">
                {{-- <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade" id="nav-colaborador" style="margin-bottom: 2rem;" role="tabpanel" aria-labelledby= "nav-colaborador-tab"></div>
    
                    <div class="tab-pane fade show active" id="navSupervisor" style="margin-bottom: 2rem;" role="tabpanel" aria-labelledby="navSupervisor-tab"></div>
                </div> --}}
                <div class="row">
                    <div class="mb-3 col-12 col-md-6">
                      <label for="parametroX" class="form-label">Parámetros X:</label>
                      <input type="number"
                        class="form-control" name="parametroX" id="parametroX" aria-describedby="helpId" min="0" max="99">
                      <small id="helpId" class="form-text text-muted"> ayuda parámetroX</small>
                    </div>
                    <div class="mb-3 col-12 col-md-6">
                        <label for="parametroY" class="form-label">Parámetros Y:</label>
                        <input type="number"
                          class="form-control" name="parametroY" id="parametroY" aria-describedby="helpId" min="0" max="99">
                        <small id="helpId" class="form-text text-muted"> ayuda parámetroY</small>
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
  <script type='importmap'>
    {
      "imports": {
        "@fullcalendar/core": "https://cdn.skypack.dev/@fullcalendar/core@6.1.6",
        "@fullcalendar/daygrid": "https://cdn.skypack.dev/@fullcalendar/multimonth@6.1.6"
      }
    }
  </script>

  <script type="text/javascript">
// ---------------valida parámetros----------------
    function limitInputValue(elementId, maxValue) {
    var input = document.getElementById(elementId);
    input.addEventListener("input", function() {
        var value = parseInt(input.value);
        if (value > maxValue) {
        input.value = maxValue;
        }
    });
    }

    limitInputValue("parametroX", 30);
    limitInputValue("parametroY", 30);
// ------------------------------------------------


    $.extend(true, $.fn.dataTable.defaults, {
        searching: false,
        lengthChange: false,
    });
    $(document).ready(function () {
        $('#listaColab').DataTable({
            language: {
                url: '//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json'
            },
            "order": [[4, "desc"]],

        });
    });
    $(document).ready(function () {
        $('#solAprobar').DataTable({
            language: {
                url: '//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json'
            },
            "order": [[4, "desc"]],

        });
    });
    function apruebaSolicitud(){
        Swal.fire({
            icon: 'warning',
            html: 'Va a APROBAR esta solicitud.</br>¿Desea continuar?',
            showCancelButton: true,
            confirmButtonText: 'Continuar',
            confirmButtonColor: '#155450',
            cancelButtonText: 'Cancelar',
            }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                Swal.fire({
                    icon: 'success',
                    text: 'Se ha registrado su solicitud con éxito',
                    confirmButtonText: 'Continuar',
                    confirmButtonColor: '#155450',
                    })
            } else if (result.isDenied) {
                /**/
            }
        })
    }
    function rechazaSolicitud(){
        Swal.fire({
            icon: 'warning',
            html: 'Va a RECHAZAR esta solicitud.</br>¿Desea continuar?',
            showCancelButton: true,
            confirmButtonText: 'Continuar',
            confirmButtonColor: '#155450',
            cancelButtonText: 'Cancelar',
            }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                Swal.fire({
                    icon: 'success',
                    text: 'Ha sido rechazada la solicitud.',
                    confirmButtonText: 'Continuar',
                    confirmButtonColor: '#155450',
                    })
            } else if (result.isDenied) {
                /**/
            }
        })
    }
    $( function() {
        $( "#datepicker1" ).datepicker();
        $( "#datepicker2" ).datepicker();
        $( "#datepicker3" ).datepicker();
        $( "#datepicker4" ).datepicker();
    } );

  </script>