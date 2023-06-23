    <!-- -------------------Modal Reglas------------------------------- -->

    <div class="modal fade" id="ModalReglas" tabindex="-1" aria-labelledby="ModalReglasLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-lg modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title card-title fs-5" id="ModalReglasLabel">Reglas de Solicitud de vacaciones</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sit amet urna vitae tellus pulvinar venenatis sit amet ut enim. Etiam ultrices ac dolor sed tincidunt. Aliquam tincidunt molestie lectus at mattis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec luctus sodales magna ac mollis. Maecenas maximus mauris quis magna dictum eleifend. Integer eleifend ante velit, id ullamcorper purus tincidunt bibendum. Ut purus dui, sollicitudin vitae turpis non, commodo facilisis urna. Praesent consectetur cursus nunc, eu finibus ligula tempus a. In vestibulum sem urna, ut tincidunt purus convallis sed. Etiam sollicitudin risus sapien, nec bibendum nulla molestie non. Nullam pulvinar massa magna, at sollicitudin sem vestibulum et. <br><br>
  
              Proin tincidunt est vel dui sagittis efficitur. Nulla purus augue, scelerisque in tincidunt bibendum, mattis et velit. Vivamus vitae bibendum justo. Nullam finibus rutrum quam dapibus tempus. Integer iaculis, ipsum eget rhoncus cursus, nibh felis mattis tortor, eu imperdiet risus mauris sit amet purus. Suspendisse potenti. Donec convallis ex ac est gravida, non elementum velit faucibus. Ut fermentum finibus nibh, at hendrerit mauris interdum eu. In condimentum laoreet sagittis. Aliquam egestas maximus felis. Quisque hendrerit mauris in libero euismod facilisis et ut odio. Proin nec lacus vel ante dignissim faucibus non nec dolor. <br><br>
  
              Praesent sed augue sed elit bibendum congue id quis lorem. Vivamus porttitor purus vel erat finibus blandit. Vestibulum metus mauris, consequat non tincidunt eu, faucibus nec lacus. Curabitur sodales risus sed lorem egestas sagittis. Proin eu leo lacus. Etiam bibendum odio quis dignissim vehicula. Quisque arcu ex, suscipit vitae nisl vitae, convallis tristique odio. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus vitae lacus nec ante vulputate finibus ut at turpis. Curabitur maximus magna quam, quis pretium lectus porta ut.
              <br><br>
              Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Maecenas a pretium mi, ut porttitor ex. In mattis purus in velit volutpat, eu elementum magna porta. Ut scelerisque lacus at aliquet feugiat. Aenean gravida accumsan massa, ut sollicitudin justo convallis eget. Sed eget pharetra purus. Fusce vulputate dapibus ex nec egestas. Nam eros augue, condimentum at felis et, tincidunt porttitor nisl. Nam ut sollicitudin purus, in blandit justo. Sed vel est et diam dapibus porttitor non eget massa. Praesent rhoncus efficitur orci. Donec eu felis nec sapien suscipit cursus. Donec nec sem a sapien ullamcorper bibendum at eu lectus.
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
        <div class="modal-header">
            <h1 class="modal-title tarjeta-vaca-foco fs-5" id="ModalSolicitudLabel">Solicitud de vacaciones</h1>
            <button type="button" id="btnDissmissModSol" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                  <input type="hidden" id="cantDiasSol">
                </div>
              </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" id="solicitaVacaciones" class="btn btn-success btnDorado">Aceptar</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        </div>
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
      }
  });

  
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
        result['response'].forEach(element => {
            var auxFecIni =  element['fch_inicio'].split("T");
            fchIni = formatDate(auxFecIni[0]);
            var auxFecFin =  element['fch_fin'].split("T");
            fchFin = formatDate(auxFecFin[0]);
            var flgFirmado = '';
            var disBtnFir = '';
            var disBtnDwn = '';
            var disBtnEdit = '';
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
                '<button class="btn btn-success btnDorado" data-bs-toggle="tooltip" data-bs-placement="top"                 data-bs-custom-class="custom-tooltip" '+disBtnFir+' data-bs-title="Firmar" onClick="enviaDocSoli('+codTrabajador+','+finFchIni+','+finFchFin+','+finFchFin+','+cantDias+')"><span class="bi bi-vector-pen"></span></button>'+
                '<button class = "btn btn-success verdeMuya" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title = "Descargar" '+disBtnDwn+'><span class="bi bi-download"></span></button>'+
                '<button class = "btn btn-secondary" data-bs-toggle = "tooltip" data-bs-placement="top" data-bs-custom-class = "custom-tooltip" data-bs-title = "Modificar" '+disBtnEdit+'><span class = "bi bi-pencil-square"></span></button>' 
            ];
            filasArray.push(filaData);
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
          });
          //console.log(filasArray);
      }
  });
}

var btnBuscarLista = document.getElementById('buscarLista');
btnBuscarLista.addEventListener("click", function() {
  var inicio = document.getElementById('annoIni').value;
  var fin = document.getElementById('annoFin').value;
  console.log('annoI',inicio)
    muestraListadoSolicitudes(inicio,fin);
});

var btnBuscarListaMobil = document.getElementById('buscarListaMobil');
btnBuscarListaMobil.addEventListener("click", function() {
  var inicio = document.getElementById('annoIniMob').value;
  var fin = document.getElementById('annoFinMob').value;
    muestraListadoSolicitudes(inicio,fin);
});

var btnSolicitar = document.getElementById('solicitaVacaciones');
btnSolicitar.addEventListener("click", function() {
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
        'fch_retorno': '2023-06-20T21:18:43.680Z',
        'cant_dia': cantDias,
        'flg_alerta_regla': 'NO'
      }
    $.ajax({
        url: 'api/InsertarSolicitudVacaciones', 
        method: "PUT",
        crossDomain: true,
        dataType: 'json',
        data:{'solVac':solVac},
        success: function(respuesta){
            console.log(respuesta);
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
        }//error
    });//ajax
});//onclick

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

});

function enviaDocSoli(codTra,fchIni,fchFin,fchRinc,cantDias) {

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
          var actividad = 'La solicitud de vacaciones ha sido ingresada. (Inicio: '+fchIni+', fin: '+fchFin+')';
          var solicitante = "'"+'@php echo(session('nombreTrabajador')) @endphp'+"'";
          var asunto = 'Envio de solicitud de vacaciones';

          $.ajax({
              url: 'api/enviarCorreo', 
              method: "post",
              crossDomain: true,
              dataType: 'json',
              data:{'destinatario':dscTra,'correoDestino':correoTra,'fchNotif':fechaFormateada,'fchLimite':'','asunto':asunto,'solicitante':solicitante,'actividad':actividad},
              success: function(respuesta){
                  console.log(respuesta);
              },//success
              error(e){
                  console.log(e.message);
              }//error
          });//ajax

      },//success
      error(e){
          console.log(e.message);
      }//error
    });//ajax
  

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

   