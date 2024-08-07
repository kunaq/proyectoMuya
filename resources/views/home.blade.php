<x-layouts.app title="Home" meta-description="Home meta description">
    
  <main id="main" class="main">

    <section class="section dashboard">
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <div class="card">
              <div class="card-body">
                  <h1 class="card-title titulo-home"><span> ¡Hola </span><span class="primMayus" id="nombreTrabajador">{{session('nombreBienvenida')}}</span>! <br> <span> BienvenidO(a) a la plataforma de Grupo Muya</span></h1>
              </div>
          </div>
        </div>  
      </div>  
    </section>

    <section class="section tarjetas-home">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="card-title tarjeta-foco"><b><span id="dsc_ultima_boleta"></span></b></h1>
                                <h5><button class="btn btn-success btnDorado" id="btnDscgBoleta">Descargar Boleta</button></h5>
                            </div>
                        </div>
                    </div> 
                    <input type="hidden" id="mesBoleta" name="mesBoleta">
                    <input type="hidden" id="annoBoleta" name="annoBoleta">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="card-title tarjeta-foco"><b><span id="num_vacaciones_pendiente"></span></b></h1>
                                <h5>Días generados de vacaciones</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body" id="dsc_proxima_vacaciones">
                                {{-- <h1 class="card-title tarjeta-foco"><b><span id="dsc_proxima_vacaciones"></span></b></h1>
                                <h5 style="margin-bottom: 0;" id="proxVac">Tus próximas vacaciones inician</h5> --}}
                            </div>
                        </div>
                    </div>  
                </div>  
            </div>
        </div>
    </section>

    <section class="section dashboard">
        <div class="row">
          <div class="col-md-10 offset-md-1 d-none d-md-block">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 30px;">Tus últimos mensajes</h5>
                    {{-- <button onclick="enviaCorreoMensaje('TRA01871','NOMBRE SOLICITANTE','1003','19/07/2023','PRUEBA ENVIO','ACTIVIDAD PRUEBA')"></button> --}}
                    <div class="row">
                        <div class="col-md-12 table-responsive" style="padding-left: 2rem;padding-right: 2rem;">
                            <table class="table table-striped ">
                                <thead>
                                    <tr>
                                        <th scope="col" width="15%" style="text-align: center;">Notificado</th>
                                        <th scope="col" width="15%" style="text-align: center;">Limite</th>
                                        <th scope="col" width="20%" style="text-align: center;">Solicitante</th>
                                        <th scope="col" width="40%" style="text-align: center;">Mensaje</th>
                                        <th scope="col" width="10%" style="text-align: center;">Accion</th>
                                        
                                    </tr>
                                </thead>
                                <tbody style="text-align: center;font-size:0.7em;" id="UltimoMensaje">
                            </table>
                        </div>
                    </div>  
                </div>
            </div>
          </div> 
          



          <div class="col-sm-10 d-sm-block d-md-none">
            <div class="card">
              <div class="card-body">
                  <h5 class="card-title" style="font-size: 28px;">Tus últimos mensajes</h5>
                  <div class="row">
                      <div class="col-md-12 table-responsive" style="padding-left: 2rem;padding-right: 2rem;">
                          <table class="table table-striped ">
                          <tbody style="text-align: center;font-size:0.7em;" id="UltimoMensajeMovil">
                          </table>
                      </div>
                  </div>  
              </div>
          </div>
          </div>
        </div>  
      </section>

  </main><!-- End #main -->

</x-layouts.app>

<script type="text/javascript">
  //  var num_vacaciones_pendiente="0";
    window.onload= function() {

        // Iniciar el temporizador cuando la página se carga
        iniciarTemporizador();

        var codTrabajador = '@php echo(session('codTrabajador')) @endphp';
        $.ajax({
            url: 'api/ObtenerTrabajador', 
            method: "GET",
            crossDomain: true,
            dataType: 'json',
            data:{'cod_trabajador':codTrabajador},
            success: function(result){
                document.getElementById("num_vacaciones_pendiente").innerHTML=result["response"]["num_vacaciones_pendiente"];
                var btnDescarga = document.getElementById('btnDscgBoleta');
                if(result["response"]["dsc_ultima_boleta"] == 'NULL' || result["response"]["dsc_ultima_boleta"] == "" ){
                    btnDescarga.disabled = true;
                }else{
                    document.getElementById("dsc_ultima_boleta").innerHTML=result["response"]["dsc_ultima_boleta"];
                    btnDescarga.disabled = false;
                }
                var aux = result["response"]["dsc_proxima_vacaciones"];
                
                if (aux == 'NO REGISTRADO') {
                    var parentElement = document.getElementById("dsc_proxima_vacaciones");
                    parentElement.style.padding ='0.5em';
                    var h1Element = document.createElement("h1");
                    h1Element.className = "card-title tarjeta-foco";
                    h1Element.style.padding = '0em';
                    h1Element.innerHTML = "<b>No hay </br> Vacaciones registradas</b>";
                    parentElement.appendChild(h1Element);
                }else{
                    var parentElement = document.getElementById("dsc_proxima_vacaciones");
                    parentElement.style.padding ='1em';
                    var h5Element = document.createElement("h5");
                    h5Element.id = "proxVac";
                    h5Element.textContent = "Tus próximas vacaciones inician ";
                    parentElement.appendChild(h5Element);
                    var h1Element = document.createElement("h1");
                    h1Element.className = "card-title tarjeta-foco";
                    h1Element.style.padding = '0em';
                    h1Element.innerHTML ="<b>"+aux+"</b>";
                    parentElement.appendChild(h1Element);
                }
                
                var aux2 = result["response"]["dsc_ultima_boleta"].split(' ');
                mes = nombreMesANumero(aux2[0])
                document.getElementById("mesBoleta").value = mes;
                document.getElementById("annoBoleta").value = aux2[1];

            }
        });


        $.ajax({
        url: 'lista/ListarUltimosMensajes', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        data:{},
        success: function(respuesta){

          
          filaData='';
          filaDataMovil='';
          respuesta['response'].forEach(function(element){ 
            var fchReg = element['fch_notificacion'].split("T");
            var fchLim=  element['fch_limite'].split("T");
            var fchLimite = formatDate(fchLim[0]);
            if (fchLimite === '01/01/1900') {
                fchLimite = '-';
            }
            
            var filaAccion='';

            if(element['cod_mensaje'] == '1001'){
            
                if(element['cod_estado'] == 'FIN'){

                    filaAccion="<button class='btn btn-success btnTabHome btnDorado' disabled >Firmado</button>";

                }else{

                    filaAccion='<button class="btn btn-success btnTabHome btnDorado" onclick="firmaConvenio('+codTrabajador+')">Firmar</button>';
                }
            }else if(element['cod_mensaje'] == '1004'){
            
                if(element['cod_estado'] == 'FIN'){

                    filaAccion="<button class='btn btn-success btnTabHome btnDorado' disabled >Firmado</button>";

                }else{

                    filaAccion="<button class='btn btn-success btnTabHome btnDorado' onclick='location.href="+'"{{route('solicitudVacaciones')}}"'+";'>Ir a firmar</button>";
                }
            }else if(element['cod_mensaje'] == '1002' || element['cod_mensaje'] == '1003'){

                filaAccion="<button class='btn btn-success btnTabHome verdeMuya' onclick='location.href="+'"{{route('aprobacionVacaciones')}}"'+";'>Ir</button>";

            }else{
                filaAccion="";
            }

            filaData += '<tr>'+
              '<td>'+formatDate(fchReg[0])+'</td>'+
              '<td>'+fchLimite+'</td>'+
              '<td>'+element['dsc_trabajador_solicitante']+'</td>'+
              '<td>'+element['dsc_mensaje']+'</td>'+
              '<td>'+filaAccion+'</td>'+
            '</tr>';

            filaDataMovil += '<tr>'+
              '<td>'+element['dsc_mensaje']+'<br>'+
              '<b>F. notific:</b>'+formatDate(fchReg[0])+'<br>'+
              '<b>F. límite:</b>'+fchLimite+'</br>'+
              '<b>Solicitante:</b>'+element['dsc_trabajador_solicitante']+'</br>'+
               +filaAccion+'</td>'+
            '</tr>';
           // filasArray.push(filaData);
          });
          //console.log(filasArray);
          $('#UltimoMensaje').html(filaData);
          $('#UltimoMensajeMovil').html(filaDataMovil);
        }//success
       
       
    });//end ajax


}

var btnSolicitar = document.getElementById('btnDscgBoleta');
btnSolicitar.addEventListener("click", function() {
    codTra = '@php echo(session('codTrabajador')) @endphp';
    codDoc = '11001';
    var mes = document.getElementById("mesBoleta").value;
    var anno = document.getElementById("annoBoleta").value;

    $.ajax({
      url: 'ObtenerBase64',
      method: "GET",
      crossDomain: true,
      dataType: 'json',
      data:{'cod_trabajador':codTra,'codDoc':codDoc,'anno':anno,'mes':mes,'numTrx':'0'},
      success: function(result){
        console.log(result['response']['dsc_base_64'])
        var completo = result['response']['dsc_base_64']+result['response']['dsc_base_64_2']+result['response']['dsc_base_64_3']+result['response']['dsc_base_64_4']+result['response']['dsc_base_64_5']+result['response']['dsc_base_64_6']+result['response']['dsc_base_64_7']+result['response']['dsc_base_64_8']+result['response']['dsc_base_64_9']+result['response']['dsc_base_64_10'];
        if (result['response']['dsc_base_64'] != null) {
            base64ToPDF(completo);
        }else{
            Swal.fire({
                icon: 'warning',
                text: 'No existe documento a retornar.',
                confirmButtonText: 'Continuar',
                confirmButtonColor: '#a18347',
            })
        }
      }
  });//ObtenerBase64

});
    

</script>