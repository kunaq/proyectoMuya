    <!-- -------------------Modal Reglas------------------------------- -->

    <div class="modal fade" id="ModalReglas" tabindex="-1" aria-labelledby="ModalReglasLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-lg modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title card-title fs-5" id="ModalReglasLabel">Reglas de Solicitud de vacaciones</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body"  id="bodyRegla">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success btnDorado" data-bs-dismiss="modal">Aceptar</button>
            </div>
          </div>
        </div>
      </div>
  
    <!-- -------------------Modal Firmar------------------------------- -->

    <div class="modal fade" id="ModalFirmar" tabindex="-1" aria-labelledby="ModalFirmarLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title tarjeta-vaca-foco fs-5" id="ModalFirmarLabel">Firmar convenio de adelanto de vacaciones</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Para proceder con la firma de convenio de adelanto de vacaciones la información será enviada al correo <span id="correoPerMuestra"></span>, ingresar al correo mencionado para continuar con el proceso.
        </div>
        <div class="modal-footer">
            <a href="#"><button type="button" id="aceptaFirma" class="btn btn-success btnDorado" data-bs-dismiss="modal"> Enviar</button></a>
        </div>
        </div>
    </div>
    </div>

    <!-- -------------------Modal Solicitar------------------------------- -->

    <div class="modal fade" id="ModalSolicitud" tabindex="-1" aria-labelledby="ModalSolicitudLabel" aria-hidden="true">
      <div class="modal-dialog  modal-dialog-centered modal-lg modal-dialog-scrollable">
          <div class="modal-content">
            <form action="#" id="FormSolicitudVac">
              <div class="modal-header">
                  <h1 class="modal-title tarjeta-vaca-foco fs-5" id="ModalSolicitudLabel">Solicitud de vacaciones</h1>
                  <button type="reset" id="btnDissmissModSol" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <div class="row">
                    <h5 style="font-size: 17px; padding-bottom: 1rem;">Seleccione la fecha para sus vacaciones</h5>
                    <div class="row">
                      <div class="col-md-2" style="margin-bottom: 1rem;">
                          <div class="form-group">
                              <span>Inicio:</span>
                          </div>
                      </div>
                      <div class="col-md-3" style="margin-bottom: 1rem;">
                          <div class="form-group">
                              <input type="text" class="form-control" id="datepickerIniSolVac" name="datepickerIniSolVac">
                          </div>
                      </div>
                      <div class="col-md-2" style="margin-bottom: 1rem;">
                          <div class="form-group">
                              <span>Fin:</span>
                          </div>
                      </div>
                      <div class="col-md-3">
                          <div class="form-group">
                              <input type="text" class="form-control" id="datepickerFinSolVac" name="datepickerFinSolVac">
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-8">
                        <span id=resutSolVac></span><span id=resutSolVac2></span><p id=resutSolVac3></p>
                        <input type="hidden" id="cantDiasSol" value = 0>
                        <input type="hidden" id="numVacPendReprog" value = "0">
                        <input type="hidden" id="reprogramacion" value = 'NO'>
                        <input type="hidden" id="numLinea">
                        <input type="hidden" id="fchInicioRech">
                        <input type="hidden" id="fchFinRech">
                        <input type="hidden" id="fchReincRech">
                        <input type="hidden" id="cantDiasRech">
                        <input type="hidden" id="ctdProgPeriodo">
                        <input type="hidden" id="parametroX">
                        <input type="hidden" id="parametroY">
                        <input type="hidden" id="pagoPlanilla">
                        <input type="hidden" id="fchRetornoBD">
                      </div>
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" id="solicitaVacaciones" class="btn btn-success btnDorado">Aceptar</button>
                  <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              </div>
            </form>
          </div>
      </div>
    </div>
  
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

     {{-- js llamada externa --}}
     

     <script>
         const baseUrl = "{{ env('API_VERIFCONECT_BASE_URL') }}";
         const apiKey = "{{ env('API_VERIFCONECT_API_KEY') }}";
         const baseTokenUrl = "{{ env('API_SOLICTOKEN_BASE_URL') }}";
         const apiTokenKey = "{{ env('API_SOLICTOKEN_API_KEY') }}";

     </script>
  
    <!-- Template Main JS File -->

<script type="text/javascript">
var fechIniCalendario = null;
var fchFinCalendario = null;
window.onload= function() {
  var numUltDias = 0;
  var codTrabajador = '@php echo(session('codTrabajador')) @endphp';
  var botonSolicitud = document.getElementById("btnSolicitarVac");
  var botonConvenio = document.getElementById("btnFirmarConvenio");
  document.getElementById("ctdProgPeriodo").value = '@php echo(session('ctdProgVac')) @endphp';
  $.ajax({
      url: 'api/ObtenerTrabajador', 
      method: "GET",
      crossDomain: true,
      dataType: 'json',
      data:{'cod_trabajador':codTrabajador},
      success: function(result){
          document.getElementById('correoPerMuestra').innerHTML=result["response"]["dsc_mail_personal"];
          document.getElementById("num_vacaciones_pendiente").innerHTML=result["response"]["num_vacaciones_pendiente"];
          document.getElementById("numVacPend").value=result["response"]["num_vacaciones_pendiente"];
          fechIniCalendario = (result["response"]["fch_proxima_vacaciones"] != '1900-01-01T00:00:00') ? result["response"]["fch_proxima_vacaciones"].split("T") : null;
          fchFinCalendario = (result["response"]["fch_fin"] != '1900-01-01T00:00:00') ? result["response"]["fch_fin"].split("T") : null;
         
          fch_ingreso = result["response"]["fch_ingreso_planilla"];
          var fechaActual = new Date();
          var auxFech = new Date(fch_ingreso);
          var diferenciaMilisegundos = fechaActual - auxFech;

          var diferenciaMeses = diferenciaMilisegundos / (30 * 24 * 60 * 60 * 1000);
          //console.log('diferenciaMeses',diferenciaMeses);
          var diferenciaAnios = diferenciaMilisegundos / (365 * 24 * 60 * 60 * 1000);
          //console.log('diferenciaAnios',diferenciaAnios);
        
          if (diferenciaAnios < 1) {
            botonConvenio.disabled = true;
            if (diferenciaMeses < 3) {
              botonSolicitud.disabled = true;  
            } else {
              botonSolicitud.disabled = false;
            }
          }else{
            if ('@php echo(session('flgAcuerdoFirm')) @endphp' == 'NO') {
              botonSolicitud.disabled = true;
              botonConvenio.disabled = false;
            } else {
              botonSolicitud.disabled = false;
              botonConvenio.disabled = true;
            }
          }

          numUltDias = result['response']['num_ultimo_dias'];
          muestraCalendario(fechIniCalendario,fchFinCalendario);
      }
  });//ajax obtener trabajador

  var fcha = new Date();
  var anno = fcha.getFullYear();
  var mes = fcha.getMonth();
  muestraListadoSolicitudes(anno,anno);

  var meses = [ 'enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre']

  $.ajax({
    url: 'lista/MuestraAnhos', 
    method: "GET",
    crossDomain: true,
    dataType: 'json',
    success: function(respuesta){ 
      respuesta['response'].forEach(function(word){
        //console.log(word);
        $("#annoIni").append('<option value="'+ word['codvar'] +'">'+ word['desvar1'] +'</option>');
        $("#annoFin").append('<option value="'+ word['codvar'] +'">'+ word['desvar1'] +'</option>');
      });
    },//success
    error(e){
      console.log(e.message);
    }//error
  });//ajax muestraAnno
  //----------------------- Muestra reglas-------------------------------
  $.ajax({
    url: 'lista/ListarReglasTrabajador', 
    method: "GET",
    crossDomain: true,
    dataType: 'json',
    success: function(respuesta){ 
      //console.log(respuesta);
      var body = document.getElementById('bodyRegla'); //console.log('ver', respuesta['response']);
      var aux = (respuesta['response']=='') ? 'No hay reglas definidas por el momento..' : respuesta['response'][0]['dsc_regla'];
      body.innerHTML = aux;
    },//success
    error(e){
      console.log(e.message);
    }//error
  });//ajax ListarReglasTrabajador

  //---------------------obtiene fecha pago de haberes del mes en curso---------------------------------
  $.ajax({
      url: 'api/ObtenerPagoHaberes', 
      method: "GET",
      crossDomain: true,
      dataType: 'json',
      data:{ "cod_anno": anno },
      success: function(result){
        //console.log('response',result['response'][meses[mes]])
          pagoHaberes = result['response'][meses[mes]];
          auxDia = pagoHaberes.split(' ');
          pagoHaberes = '"'+anno+'/'+(mes+1)+'/'+auxDia[1]+'"';
          diaPagoHaberes = new Date(pagoHaberes);
          var fechaActual = new Date();
          if(diaPagoHaberes < fechaActual){
            document.getElementById('pagoPlanilla').value = 'SI';
           // botonSolicitud.disabled = true;
          }else{
            document.getElementById('pagoPlanilla').value = 'NO';
            //botonSolicitud.disabled = false;
          }
        //console.log('pagoHaberes',diaPagoHaberes < fechaActual);
      }
  });//pago de haberes

  //------------------obtiene parametros X e Y--------------------------------

  $.ajax({
      url: 'lista/ListarParametro', 
      method: "GET",
      crossDomain: true,
      dataType: 'json',
      data:{ "cod_anno": anno },
      success: function(result){
        //console.log('response',result['response'][0]['cantidad'])
        document.getElementById("parametroX").value = result['response'][0]['cantidad'];
        document.getElementById("parametroY").value = result['response'][1]['cantidad'];
      }
  });//pago de haberes


}

function muestraListadoSolicitudes(annoIni,annoFin) {
  $.ajax({
      url: 'lista/ListarSolicitudVacaciones', 
      method: "GET",
      crossDomain: true,
      dataType: 'json',
      data:{'codTrabajador':'@php echo(session('codTrabajador')) @endphp','annoIni':annoIni,'annoFin':annoFin},
      success: function(result){
        //console.log(result);
        var filasArray = [];
        var filasMovil = [];
        result['response'].forEach(element => {
            var auxFecIni =  element['fch_inicio'].split("T");
            fchIni = formatDate(auxFecIni[0]);
            var auxFecFin =  element['fch_fin'].split("T");
            fchFin = formatDate(auxFecFin[0]);
            var flgFirmado = '';
            var disBtnFir = '';
            var disBtnDwn = '';
            var disBtnEdit = '';

            if(element['flg_aprobado'] == 'NO' || element['flg_aprobado'] == ''){
              disBtnFir = 'disabled';
              disBtnEdit = '';
            }else{
              disBtnFir = '';
              disBtnEdit = 'disabled';
            }

            if(element['flg_firmado'] == 'NO' || element['flg_firmado'] == ''){
              flgFirmado = 'Sin firmar';
            }else{
              flgFirmado = 'Firmado';
              disBtnFir = 'disabled';
              disBtnEdit = 'disabled';
            }
            var flgPagado = '';
            if(element['flg_pagado'] == 'NO' || element['flg_pagado'] == ''){
              flgPagado = 'No pagado';
              disBtnDwn = 'disabled';
            }else{
              flgPagado = 'Pagado';
              disBtnFir = 'disabled';
              disBtnEdit = 'disabled';
            }
            if(element['flg_rechazado'] == 'SI'){
              disBtnFir = 'disabled';
              disBtnDwn = 'disabled';
              disBtnEdit = 'disabled';
            }
            var cantDias = element['cant_dia'];
            var numLinea = element['num_linea'];
            var fchReinc = document.getElementById("datepickerFinSolVac").value;
            var codTrabajador = "'"+'@php echo(session('codTrabajador')) @endphp'+"'";
            var finFchIni = "'"+fchIni+"'";
            var finFchFin = "'"+fchFin+"'";

            var filaData = [
                fchIni,
                fchFin,
                cantDias,
                element['dsc_estado'],
                flgFirmado,
                flgPagado,
                '<button class="btn btn-success btnDorado" data-bs-toggle="tooltip" data-bs-placement="top" '+disBtnFir+' title="Firmar" onClick="enviaDocSoli('+codTrabajador+','+finFchIni+','+finFchFin+','+finFchFin+','+cantDias+','+numLinea+')"><span class="bi bi-vector-pen"></span></button>'+
                '<button class = "btn btn-success verdeMuya" data-bs-toggle="tooltip" data-bs-placement="top" title = "Descargar" '+disBtnDwn+'><span class="bi bi-download" onClick="descargaDoc('+cantDias+','+numLinea+')"></span></button>'+
                '<button class = "btn btn-secondary" data-bs-toggle="modal" data-bs-target="#ModalSolicitud" data-bs-toggle = "tooltip" data-bs-placement="top" title = "Modificar" '+disBtnEdit+' onClick="reprograma('+cantDias+','+numLinea+','+fchIni+','+fchFin+','+fchReinc+')"><span class = "bi bi-pencil-square"></span></button>' 
            ];

            filasArray.push(filaData);

            var filaDataMovil = [
              '<tr>'+
                '<td>'+
                    '<b>Inicio:</b> '+fchIni+'<br>'+
                    '<b>Término:</b> '+fchFin+' <br>'+
                    '<b>Número de días:</b> '+cantDias+' <br>'+
                    '<b>Estado:</b> '+element['dsc_estado']+'<br>'+
                    '<b>Firma:</b> '+flgFirmado+' <br>'+
                    '<b>Pago:</b> '+flgPagado+' <br><br>'+
                    '<div style="text-align-last: center;">'+
                        '<button class="btn btn-success btnDorado" '+disBtnFir+' onClick="enviaDocSoli('+codTrabajador+','+finFchIni+','+finFchFin+','+finFchFin+','+cantDias+','+numLinea+')">Firma</button>'+
                        '<button class="btn btn-success verdeMuya" '+disBtnDwn+'>Descarga</button>'+
                        '<button class="btn btn-secondary" '+disBtnEdit+' onClick="reprograma('+cantDias+','+numLinea+','+fchIni+','+fchFin+','+fchReinc+')">Edita</button>'+
                    '</div>'+  
                '</td>'+
              '</tr>'
            ];

            filasMovil.push(filaDataMovil);
          });
          if ($.fn.dataTable.isDataTable('#listaVacSol')) {
              $('#listaVacSol').DataTable().clear();
              $('#listaVacSol').DataTable().destroy();        
          }
          //console.log(filasArray);
          $('#listaVacSol').DataTable({
            language: {
              url: '//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json'
            },
            data: filasArray,
            columns: [
              { title: 'Inicio' },
              { title: 'Término' },
              { title: 'Num. días' },
              { title: 'Estado' },
              { title: 'Firma' },
              { title: 'Pago' },
              { title: 'Acciones' },
            ],
            dom: 'trip',
            processing: true,
          });//datatable

          $('#bodySolicitudMovil').html(filasMovil);

      }//success
  });//ajax
}//funcion

//----------validacion fecha registro de vacaciones---
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
//------------------------------solicitaVacaciones boton aceptar----------------------------------------

var btnSolicitar = document.getElementById('solicitaVacaciones');
btnSolicitar.addEventListener("click", function() {
  btnSolicitar.setAttribute('disabled','disabled');
  var diasGenerados = document.getElementById('num_vacaciones_pendiente').innerHTML;
  diasGenerados = parseInt(diasGenerados);
  var form = document.getElementById("FormSolicitudVac");
  form.addEventListener("submit", function(event) {
    // Detener el envío del formulario
      event.preventDefault();
  });

    var fchInicio = document.getElementById('datepickerIniSolVac').value;
    var fechaParts = fchInicio.split('-');
    var day = fechaParts[0];
    var month = fechaParts[1];
    var year = fechaParts[2]; 
    fchInicio = year + "-" + month + "-" + day;

    var fchFin = document.getElementById('datepickerFinSolVac').value;
    var fechaPartsF = fchFin.split('-');
    var dayF = fechaPartsF[0];
    var monthF = fechaPartsF[1];
    var yearF = fechaPartsF[2]; 
    fchFin = yearF + "-" + monthF + "-" + dayF;

    var cantDias = document.getElementById('cantDiasSol').value;
    cantDias = parseInt(cantDias);
    diferenciaExceso = cantDias - diasGenerados;

    var diasExces = (diferenciaExceso < 0) ? Math.abs(diferenciaExceso) : 0;
    //console.log('diferenciaExceso',diferenciaExceso);

    var reprog = document.getElementById('reprogramacion').value;
    var numLinea = document.getElementById('numLinea').value;
    var fchRetorno = document.getElementById('fchRetornoBD').value;

    var numLineaAnt = (reprog == 'SI') ? numLineaAnt : '';

    var solVac = {
        'cod_trabajador': '@php echo(session('codTrabajador')) @endphp',
        'fch_inicio': fchInicio,
        'fch_fin': fchFin,
        'fch_retorno': fchRetorno,
        'cant_dia': cantDias,
        'flg_alerta_regla': 'NO',
        'ctd_dias_exceso': diasExces,
        'cod_trabajador_registro': '@php echo(session('codTrabajador')) @endphp',
        'num_linea_origen': 0
      }
    
    var parametroX = parseInt(document.getElementById('parametroX').value);
    var pagoHaber = document.getElementById('pagoPlanilla').value;
    var fechaActual = new Date();
    var mes = fechaActual.getMonth() + 1;

    if (pagoHaber == 'SI' && month == mes) {
      Swal.fire({
          icon: 'warning',
          text: 'No puede seleccionar el mes donde ya se realizo el pago de planilla. Elija otras fechas.',
          confirmButtonText: 'Continuar',
          confirmButtonColor: '#a18347',
      }).then((result) => {
          if (result.isConfirmed) {
            //location.reload();
          }
        })
    }else{
      $.ajax({
        url: 'api/ObtenerCoincidenciaVacacionesxTrabajador', 
        method: "get",
        crossDomain: true,
        dataType: 'json',
        data:{'codTra':'@php echo(session('codTrabajador')) @endphp','fchIni':fchInicio,'fchFin':fchFin},
        success: function(respuesta){
          console.log('coincidencia',respuesta);
          if(respuesta['response']['ctd_coincidencia'] > parametroX){
            Swal.fire({
                icon: 'warning',
                text: 'Las fechas seleccionadas no estan permitidas ya que estas coinciden con fechas de otros trabajadores. Elija otras fechas.',
                confirmButtonText: 'Continuar',
                confirmButtonColor: '#a18347',
            }).then((result) => {
              if (result.isConfirmed) {
                btnSolicitar.removeAttribute('disabled');
                //location.reload();
              }
            })
          }else if(respuesta['response']['flg_coincide_trabajador'] == 'SI'){
            Swal.fire({
                icon: 'warning',
                text: 'Ya tiene una solicitud en la fecha seleccionada. Elija otras fechas.',
                confirmButtonText: 'Continuar',
                confirmButtonColor: '#a18347',
            }).then((result) => {
              if (result.isConfirmed) {
                btnSolicitar.removeAttribute('disabled');
                //location.reload();
              }
            })
          }
          else{
            // console.log('else parametro x');
            if(reprog == 'NO'){
              console.log(solVac);
              $.ajax({
                  url: 'api/InsertarSolicitudVacaciones', 
                  method: "PUT",
                  crossDomain: true,
                  dataType: 'json',
                  data:{'solVac':solVac},
                  success: function(respuesta){
                      console.log(respuesta);
                      enviaSolitudVac('@php echo(session('codTrabajador')) @endphp',fchInicio,fchFin,fchFin,cantDias);
                      Swal.fire({
                          icon: 'success',
                          text: 'Se ha registrado su solicitud con éxito',
                          confirmButtonText: 'Continuar',
                          confirmButtonColor: '#a18347',
                      }).then((result) => {
                        if (result.isConfirmed) {
                          location.reload();
                        }
                      })
                  },//success
                  error(e){
                      console.log(e.message);
                      Swal.fire({
                        icon: 'warning',
                        text: 'Ha ocurrido un error intentelo nuevamente.',
                        confirmButtonText: 'Continuar',
                        confirmButtonColor: '#a18347',
                      })
                      btnSolicitar.removeAttribute('disabled');
                  }//error
              });//ajax
            }
            else{
              var numLinea = document.getElementById('numLinea').value;
              var fchInicioRech = document.getElementById('fchInicioRech').value;
              var fchFinRech = document.getElementById('fchFinRech').value;
              var fchReincRech = document.getElementById('fchReincRech').value;
              var cantDiasRech = document.getElementById('cantDiasRech').value;
              data = {
                  'cod_trabajador': '@php echo(session('codTrabajador')) @endphp',
                  'num_linea': numLinea,
                  'cod_trabajador_accion': '@php echo(session('codTrabajador')) @endphp'
                }
              $.ajax({
                  url: 'api/ReprogramarSolicitudVacaciones', 
                  method: "PUT",
                  crossDomain: true,
                  dataType: 'json',
                  data:{'solVac':data},
                  success: function(respuesta){
                      console.log(respuesta);
                      enviaRechazoVac('@php echo(session('codTrabajador')) @endphp',fchInicioRech,fchFinRech,fchReincRech);
                      $.ajax({
                          url: 'api/InsertarSolicitudVacaciones', 
                          method: "PUT",
                          crossDomain: true,
                          dataType: 'json',
                          data:{'solVac':solVac},
                          success: function(respuesta){
                            console.log(respuesta);
                            enviaSolitudVac('@php echo(session('codTrabajador')) @endphp',fchInicio,fchFin,fchFin,cantDias);
                            Swal.fire({
                              icon: 'success',
                              text: 'Se ha registrado su solicitud con éxito',
                              confirmButtonText: 'Continuar',
                              confirmButtonColor: '#a18347',
                            }).then((result) => {
                              if (result.isConfirmed) {
                                location.reload();
                              }
                            })
                          },//success
                          error(e){
                            console.log(e.message);
                            Swal.fire({
                              icon: 'warning',
                              text: 'Ha ocurrido un error intentelo nuevamente.',
                              confirmButtonText: 'Continuar',
                              confirmButtonColor: '#a18347',
                            })
                            btnSolicitar.removeAttribute('disabled');
                          }//error
                      });//ajax

                  },//success
                  error(e){
                      console.log(e.message);
                      Swal.fire({
                          icon: 'warning',
                          text: 'Ha ocurrido un error intentelo nuevamente.',
                          confirmButtonText: 'Continuar',
                          confirmButtonColor: '#a18347',
                      })
                      btnSolicitar.removeAttribute('disabled');
                  }//error
              });//ajax

            }
          }            
        },//success
        error(e){
          console.log(e.message);
          msjError = (@php echo(session('codGrupoVac')) @endphp == '') ? 'No esta configurado su grupo de vacaciones,' : '';
          Swal.fire({
            icon: 'warning',
            text: 'Ha ocurrido un error,'+msjError+' intentelo nuevamente.',
            confirmButtonText: 'Continuar',
            confirmButtonColor: '#a18347',
          })
          btnSolicitar.removeAttribute('disabled');
        }//error
      });//ajax obtener coincidencia
    }
});//onclick solicitar vacaciones

var btnFirmaConvenio = document.getElementById('aceptaFirma');
btnFirmaConvenio.addEventListener("click", function() {
  firmaConvenio('@php echo(session('codTrabajador')) @endphp');       
});//evento click

function enviaSolitudVac(codTra,fchIni,fchFin,fchRinc,cantDias) {

  $.ajax({
      url: 'api/ObtenerTrabajador', 
      method: "GET",
      crossDomain: true,
      dataType: 'json',
      data:{'cod_trabajador':codTra},
      success: function(respuesta){
          console.log(respuesta);
          var dscTra = respuesta['response']['dsc_trabajador'];
          var correoTra = respuesta['response']['dsc_mail_personal'];
          var codSupervisor = respuesta['response']['cod_supervisor'];
          var fechaActual = new Date();
          var dia = fechaActual.getDate();
          var mes = fechaActual.getMonth() + 1;
          var anio = fechaActual.getFullYear();
          var diaFormateado = dia < 10 ? '0' + dia : dia;
          var mesFormateado = mes < 10 ? '0' + mes : mes;
          var fechaFormateada = diaFormateado + '/' + mesFormateado + '/' + anio;
          var fchBD = anio+'-'+mesFormateado+'-'+diaFormateado;
          var actividad = 'La solicitud de vacaciones ha sido ingresada. (Inicio: '+fchIni+', fin: '+fchFin+')';
          var actividadSup = 'Aceptar/rechazar una solicitud de vacaciones.';
          var solicitante = "'"+'@php echo(session('nombreTrabajador')) @endphp'+"'";
          var asunto = 'Ingreso de solicitud de vacaciones';

          enviaCorreoMensaje(codTra,solicitante,'4001','',asunto,actividad);
          
          var fechaActualMas8Dias = new Date();
          fechaActualMas8Dias.setDate(fechaActualMas8Dias.getDate() + 8);
          var fchLimite = fechaActualMas8Dias.getFullYear() + '-' + (fechaActualMas8Dias.getMonth() + 1).toString().padStart(2, '0') + '-' + fechaActualMas8Dias.getDate().toString().padStart(2, '0');
          
          if (fchLimite < fchIni) {
            fchLimite = fchBD;
          }

          enviaCorreoMensaje(codSupervisor,solicitante,'1002',fchLimite,actividadSup,actividadSup);

      },//success
      error(e){
          console.log(e.message);
      }//error
  });//ajax  
}

function enviaRechazoVac(codTra,fchIni,fchFin,fchRinc) {
  $.ajax({
      url: 'api/ObtenerTrabajador', 
      method: "GET",
      crossDomain: true,
      dataType: 'json',
      data:{'cod_trabajador':codTra},
      success: function(respuesta){
          console.log(respuesta);
          var dscTra = respuesta['response']['dsc_trabajador'];
          var correoTra = respuesta['response']['dsc_mail_personal'];
          var codSupervisor = respuesta['response']['cod_supervisor'];
          var fechaActual = new Date();
          var dia = fechaActual.getDate();
          var mes = fechaActual.getMonth() + 1;
          var anio = fechaActual.getFullYear();
          var diaFormateado = dia < 10 ? '0' + dia : dia;
          var mesFormateado = mes < 10 ? '0' + mes : mes;
          var fechaFormateada = diaFormateado + '/' + mesFormateado + '/' + anio;
          var fchBD = anio+'-'+mesFormateado+'-'+diaFormateado;
          var actividad = 'La solicitud de vacaciones ha sido rechazada por reprogramación de vacaciones. (Inicio: '+fchIni+', fin: '+fchFin+')';
          var solicitante = "'"+'@php echo(session('nombreTrabajador')) @endphp'+"'";
          var asunto = 'Rechazo de solicitud de vacaciones';

          enviaCorreoMensaje(codTra,solicitante,'4003','',asunto,actividad);

          var fechaActualMas8Dias = new Date();
          fechaActualMas8Dias.setDate(fechaActualMas8Dias.getDate() + 8);
          var fchLimite = fechaActualMas8Dias.getFullYear() + '-' + (fechaActualMas8Dias.getMonth() + 1).toString().padStart(2, '0') + '-' + fechaActualMas8Dias.getDate().toString().padStart(2, '0');
          
          if (fchLimite < fchIni) {
            fchLimite = fchBD;
          }

          enviaCorreoMensaje(codSupervisor,solicitante,'1003',fchLimite,asunto,actividad);

      },//success
      error(e){
          console.log(e.message);
      }//error
  });//ajax  
}
</script>

   