<x-layouts.app title="Home" meta-description="Home meta description">
    
  <main id="main" class="main">

    <section class="section dashboard">
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <div class="card">
              <div class="card-body">
                  <h1 class="card-title titulo-home"><span> ¡Hola </span><span class="primMayus" id="nombreTrabajador">{{session('nombreTrabajador')}}</span>! <br> <span> Bienvenida a la plataforma de Grupo Muya</span></h1>
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
                                <h5><button class="btn btn-success btnDorado">Descargar Boleta</button></h5>
                            </div>
                        </div>
                    </div> 
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
        var codTrabajador = '@php echo(session('codTrabajador')) @endphp';
        $.ajax({
            url: 'api/ObtenerTrabajador', 
            method: "GET",
            crossDomain: true,
            dataType: 'json',
            data:{'cod_trabajador':codTrabajador},
            success: function(result){
                document.getElementById("num_vacaciones_pendiente").innerHTML=result["response"]["num_vacaciones_pendiente"];
                document.getElementById("dsc_ultima_boleta").innerHTML=result["response"]["dsc_ultima_boleta"];
                var aux =result["response"]["dsc_proxima_vacaciones"];
                
                if (aux == 'NO REGISTRADO') {
                var parentElement = document.getElementById("dsc_proxima_vacaciones");
                parentElement.style.padding ='0.5em';
                var h1Element = document.createElement("h1");
                h1Element.className = "card-title tarjeta-foco";
                h1Element.style.padding = '0em';
                h1Element.innerHTML = "<b>No hay </br> Vacaciones registradas</b>";
                parentElement.appendChild(h1Element);
            }
            else{
                    var h5Element = document.createElement("h5");
                    h5Element.style.marginBottom = "0";
                    h5Element.id = "proxVac";
                    h5Element.textContent = "Tus próximas vacaciones inician";
                    parentElement.appendChild(h5Element);
                }
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

            if(element['dsc_tipo_mensaje'] == 'TAREAS')
            {
                  if(element['cod_estado'] == 'FIN')
                  {
                    filaAccion="<button class='btn btn-success btnTabHome btnDorado' disabled >Firmado</button>";
                  }
                  else
                  {
                    filaAccion="<button class='btn btn-success btnTabHome btnDorado' onclick='location.href="+'"{{route('solicitudVacaciones')}}"'+";'>Firmar</button>";
                  }
            }
            else if(element['dsc_tipo_mensaje'] == 'SEGUIMIENTO')
            {
                filaAccion="<button class='btn btn-success btnTabHome verdeMuya' onclick='location.href="+'"{{route('aprobacionVacaciones')}}"'+";'>Ir</button>";
            }
            else if(element['dsc_tipo_mensaje'] == 'ALERTAS')
            {
                filaAccion="";
                
            }
            else if(element['dsc_tipo_mensaje'] == 'AVISOS')
            {
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

    

</script>