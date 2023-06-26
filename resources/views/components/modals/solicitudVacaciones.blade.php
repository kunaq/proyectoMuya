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
            Para proceder con la firma de convenio de adelanto de vacaciones la información será enviada al correo ({{session('correoPTrabajador')}}), ingresar al correo mencionado para continuar con el proceso.
        </div>
        <div class="modal-footer">
            <a href="#"><button type="button" id="aceptaFirma" class="btn btn-secondary" data-bs-dismiss="modal"> Enviar</button></a>
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
                        <span id=resutSolVac></span><span id=resutSolVac2></span>
                        <input type="hidden" id="cantDiasSol" value = 0>
                        <input type="hidden" id="reprogramacion" value = 'NO'>
                        <input type="hidden" id="numLinea">
                        <input type="hidden" id="fchInicioRech">
                        <input type="hidden" id="fchFinRech">
                        <input type="hidden" id="fchReincRech">
                        <input type="hidden" id="cantDiasRech">
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


    <script type='importmap'>
      {
        "imports": {
          "@fullcalendar/core": "https://cdn.skypack.dev/@fullcalendar/core@6.1.6",
          "@fullcalendar/daygrid": "https://cdn.skypack.dev/@fullcalendar/multimonth@6.1.6"
        }
      }
    </script>
    <script type='module'>
      import { Calendar } from '@fullcalendar/core'
      import dayGridPlugin from '@fullcalendar/daygrid'
  
      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
  
        var calendar = new FullCalendar.Calendar(calendarEl, {
          timeZone: 'UTC',
          initialView: 'dayGridMonth',
          events: [
            {
              start: '2023-05-10T10:00:00',
              end: '2023-05-18T16:00:00',
              display: 'background'
            }
          ],
          editable: true,
          selectable: true,
          height: "100%",
          contentHeight: 300
        });
  
        calendar.render();
      });
    </script>

<script type="text/javascript">

window.onload= function() {
  var numUltDias = 0;
  var codTrabajador = '@php echo(session('codTrabajador')) @endphp';
  $.ajax({
      url: 'api/ObtenerTrabajador', 
      method: "GET",
      crossDomain: true,
      dataType: 'json',
      data:{'cod_trabajador':codTrabajador},
      success: function(result){
          document.getElementById("num_vacaciones_pendiente").innerHTML=result["response"]["num_vacaciones_pendiente"];
          document.getElementById("numVacPend").value=result["response"]["num_vacaciones_pendiente"];
          fch_ingreso = result["response"]["fch_ingreso_planilla"];
          var fechaActual = new Date();
          var auxFech = new Date(fch_ingreso);
          var diferenciaMilisegundos = fechaActual - auxFech;
          var diferenciaAnios = diferenciaMilisegundos / (365 * 24 * 60 * 60 * 1000);
          var botonConvenio = document.getElementById("btnFirmarConvenio");
          if (diferenciaAnios < 1) {
            botonConvenio.disabled = true;
          } else {
            botonConvenio.disabled = false;
          }
          var diferenciaMeses = diferenciaMilisegundos / (30 * 24 * 60 * 60 * 1000);
          var botonSolicitud = document.getElementById("btnSolicitarVac");
          if (diferenciaMeses < 3) {
            botonSolicitud.disabled = true;
          } else {
            botonSolicitud.disabled = false;
          }
          numUltDias = result['response']['num_ultimo_dias'];
      }
  });//ajax obtener trabajador

  
  var fcha = new Date();
  var anno = fcha.getFullYear();
  muestraListadoSolicitudes(anno,anno);

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

  $.ajax({
    url: 'lista/ListarReglasTrabajador', 
    method: "GET",
    crossDomain: true,
    dataType: 'json',
    success: function(respuesta){ 
      console.log(respuesta);
      var body = document.getElementById('bodyRegla'); console.log('ver', respuesta['response']);
      var aux = (respuesta['response']=='') ? 'No hay reglas definidas por el momento..' : respuesta['response'];
            body.innerHTML = aux;
    },//success
    error(e){
      console.log(e.message);
    }//error
  });//ajax ListarReglasTrabajador

  // $.ajax({
  //   url: 'lista/ListarReglasTrabajador', 
  //   method: "GET",
  //   crossDomain: true,
  //   dataType: 'json',
  //   success: function(respuesta){ 
  //     console.log(respuesta);
  //     var body = document.getElementById('bodyRegla');
  //     body.innerHTML = respuesta['response'];
  //   },//success
  //   error(e){
  //     console.log(e.message);
  //   }//error
  // });//ajax ListarReglasTrabajador

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
            }else{
              disBtnFir = '';
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
                '<button class="btn btn-success btnDorado" data-bs-toggle="tooltip" data-bs-placement="top" '+disBtnFir+' title="Firmar" onClick="enviaDocSoli('+codTrabajador+','+finFchIni+','+finFchFin+','+finFchFin+','+cantDias+')"><span class="bi bi-vector-pen"></span></button>'+
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
                        '<button class="btn btn-success btnDorado" '+disBtnFir+' onClick="enviaDocSoli('+codTrabajador+','+finFchIni+','+finFchFin+','+finFchFin+','+cantDias+')">Firma</button>'+
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

var btnSolicitar = document.getElementById('solicitaVacaciones');
btnSolicitar.addEventListener("click", function() {

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

    var solVac = {
        'cod_trabajador': '@php echo(session('codTrabajador')) @endphp',
        'fch_inicio': fchInicio,
        'fch_fin': fchFin,
        'fch_retorno': '2023-06-20',
        'cant_dia': cantDias,
        'flg_alerta_regla': 'NO'
      }

    var reprog = document.getElementById('reprogramacion').value;

    if(reprog == 'NO'){
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
                  //location.reload();
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
          }//error
      });//ajax
    }else{
      var numLinea = document.getElementById('numLinea').value;
      var fchInicioRech = document.getElementById('fchInicioRech').value;
      var fchFinRech = document.getElementById('fchFinRech').value;
      var fchReincRech = document.getElementById('fchReincRech').value;
      var cantDiasRech = document.getElementById('cantDiasRech').value;
      data = {
          'cod_trabajador': '@php echo(session('codTrabajador')) @endphp',
          'num_linea': numLinea,
          'cod_trabajador_accion': 'string'
        }
      $.ajax({
          url: 'api/RechazarSolicitudVacaciones', 
          method: "PUT",
          crossDomain: true,
          dataType: 'json',
          data:{'data':data},
          success: function(respuesta){
              console.log(respuesta);
              enviaRechazoVac('@php echo(session('codTrabajador')) @endphp',fchInicioRech,fchFinRech,fchReincRech,cantDiacantDiasRechs);
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
                          //location.reload();
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
          }//error
      });//ajax


    }

});//onclick solicitar vacaciones

var btnFirmaConvenio = document.getElementById('aceptaFirma');
btnFirmaConvenio.addEventListener("click", function() {
  $.ajax({
        url: 'api/enviarDocumentos', 
        method: "get",
        crossDomain: true,
        dataType: 'json',
        success: function(respuesta){
            console.log(respuesta);
            Swal.fire({
                icon: 'success',
                text: 'Se ha registrado la firma',
                confirmButtonText: 'Continuar',
                confirmButtonColor: '#a18347',
            }).then((result) => {
              if (result.isConfirmed) {
                //location.reload();
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
        }//error
    });//ajax

});

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
          var fechaActual = new Date();
          var dia = fechaActual.getDate();
          var mes = fechaActual.getMonth() + 1;
          var anio = fechaActual.getFullYear();
          var diaFormateado = dia < 10 ? '0' + dia : dia;
          var mesFormateado = mes < 10 ? '0' + mes : mes;
          var fechaFormateada = diaFormateado + '/' + mesFormateado + '/' + anio;
          var fchBD = anio+'-'+mesFormateado+'-'+diaFormateado;
          var actividad = 'La solicitud de vacaciones ha sido ingresada. (Inicio: '+fchIni+', fin: '+fchFin+')';
          var solicitante = "'"+'@php echo(session('nombreTrabajador')) @endphp'+"'";
          var asunto = 'Ingreso de solicitud de vacaciones';

          enviaCorreoMensaje(codTra,solicitante,'4001','',asunto,actividad,'guarda  ');

      },//success
      error(e){
          console.log(e.message);
      }//error
  });//ajax  
}

function enviaRechazoVac(codTra,fchIni,fchFin,fchRinc,cantDias) {

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

        enviaCorreoMensaje(codTra,solicitante,'4003','',asunto,actividad,'guarda  ');

    },//success
    error(e){
        console.log(e.message);
    }//error
});//ajax  
}

function enviaDocSoli(codTra,fchIni,fchFin,fchRinc,cantDias) {

  $.ajax({
      url: 'api/enviarDocumentos', 
      method: "get",
      crossDomain: true,
      dataType: 'json',
      data:{'codigoTabajador':codTra,'fchIni':fchIni,'fchFin':fchFin,'fchReinc':fchRinc,'cantDias':cantDias,'accion':'solicitudVaca'},
      success: function(respuesta){
          console.log(respuesta);
          Swal.fire({
              icon: 'success',
              text: 'Se ha registrado la firma',
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
      }//error
  });//ajax

}
</script>

   