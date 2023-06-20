<x-layouts.app title="mensajes" meta-description="mensaje meta description">


  <main id="main" class="main">
    <div class="pagetitle">
        <h1>Mensajes</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
            <li class="breadcrumb-item active">Mensajes</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <div class="card d-none d-md-block">         
            <nav>
              <div class="nav nav-tabs nav-fill navDatPer" id="nav-tab" role="tablist">
                <button class="nav-item nav-item-left nav-link active" id="nav-pendientes-tab" data-bs-toggle="tab" data-bs-target="#nav-pendientes" type="button" role="tab" aria-controls="nav-pendientes" aria-selected="true">Pendientes</button>

                <button class="nav-item nav-item-centro nav-link" id="nav-finalizados-tab" data-bs-toggle="tab" data-bs-target="#nav-finalizados" type="button" role="tab" aria-controls="nav-finalizados" aria-selected="false">Finalizados</button>

                <button class="nav-item nav-item-right nav-link" id="nav-avisos-tab" data-bs-toggle="tab" data-bs-target="#nav-avisos" type="button" role="tab" aria-controls="nav-avisos" aria-selected="false">Avisos</button>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade" id="nav-finalizados" style="margin-bottom: 2rem;" role="tabpanel" aria-labelledby="nav-finalizados-tab">
                <div style="margin: 1rem;">
                    <div class="row">
                        <div class="col-md-12 table-responsive" style="padding-left: 2rem;padding-right: 2rem; max-height: 500px;overflow-y: auto;">
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
                                <tbody style="text-align: center;font-size:0.7em;" id="MensajeFinalizados"></tbody>
                            </table>
                        </div>
                    </div>
                </div>
              </div>

              <div class="tab-pane fade show active" style="margin-bottom: 2rem;" id="nav-pendientes" role="tabpanel" aria-labelledby="nav-pendientes-tab">
                <div style="margin: 1rem;">
                    <div class="row">
                        <div class="col-md-12 table-responsive" style="padding-left: 2rem;padding-right: 2rem;height: 500px;overflow-y: auto;">
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
                                <tbody style="text-align: center;font-size:0.7em;" id="MensajePendientes"></tbody>
                            </table>
                        </div>
                    </div>    
                </div>
              </div>
              <div class="tab-pane fade" id="nav-avisos" style="margin-bottom: 2rem;" role="tabpanel" aria-labelledby="nav-avisos-tab">
                <div style="margin: 1rem;">
                    <div class="row">
                        <div class="col-md-12 table-responsive" style="padding-left: 2rem;padding-right: 2rem;height: 500px;overflow-y: auto;">
                            <table class="table table-striped ">
                                <thead>
                                    <tr>
                                        <th scope="col" width="15%" style="text-align: center;">Notificado</th>
                                        <th scope="col" width="15%" style="text-align: center;">Limite</th>
                                        <th scope="col" width="20%" style="text-align: center;">Solicitante</th>
                                        <th scope="col" width="50%" style="text-align: center;">Mensaje</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align: center;font-size:0.7em;" id="MensajeAvisos"></tbody>
                            </table>
                        </div>
                    </div>    
                </div>
              </div>
            </div>

          </div>

          <div class="card d-sm-block d-md-none">         
            <nav>
              <div class="nav nav-pills nav-fill navDatPer" id="nav-tab" role="tablist">
                <a class="nav-item nav-item-left nav-link active" id="nav-pendientes-tab" data-toggle="tab" href="#nav-pendientes-sm" role="tab" aria-controls="nav-pendientes" aria-selected="true">Pendientes</a>
                <a class="nav-item nav-item-centro nav-link" id="nav-finalizados-tab" data-toggle="tab" href="#nav-finalizados-sm" role="tab" aria-controls="nav-finalizados" aria-selected="false">Finalizados</a>
                <a class="nav-item nav-item-right nav-link" id="nav-avisos-tab" data-toggle="tab" href="#nav-avisos-sm" role="tab" aria-controls="nav-avisos" aria-selected="false">Avisos</a>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade" id="nav-finalizados-sm" style="margin-bottom: 2rem;" role="tabpanel" aria-labelledby="nav-finalizados-tab">
                <div style="margin: 1rem;">
                    <div class="row">
                        <div class="col-md-12 table-responsive" style="padding-left: 2rem;padding-right: 2rem; max-height: 500px;overflow-y: auto;">
                            <table class="table table-striped ">
                            <tbody style="text-align: center;font-size:0.7em;" id="MensajeFinalizados2"></tbody>
                            </table>
                        </div>
                    </div>
                </div>
              </div>

              <div class="tab-pane fade show active" style="margin-bottom: 2rem;" id="nav-pendientes-sm" role="tabpanel" aria-labelledby="nav-pendientes-tab">
                <div style="margin: 1rem;">
                    <div class="row">
                        <div class="col-md-12 table-responsive" style="padding-left: 2rem;padding-right: 2rem;height: 500px;overflow-y: auto;">
                            <table class="table table-striped ">
                            <tbody style="text-align: center;font-size:0.7em;" id="MensajePendientes2"></tbody>
                            </table>
                        </div>
                    </div>    
                </div>
              </div>
              <div class="tab-pane fade" id="nav-avisos-sm" style="margin-bottom: 2rem;" role="tabpanel" aria-labelledby="nav-avisos-tab">
                <div style="margin: 1rem;">
                    <div class="row">
                        <div class="col-md-12 table-responsive" style="padding-left: 2rem;padding-right: 2rem;height: 500px;overflow-y: auto;">
                            <table class="table table-striped ">
                            <tbody style="text-align: center;font-size:0.7em;" id="MensajeAvisos2"></tbody>
                            </table>
                        </div>
                    </div>    
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
        
        $.ajax({
        url: 'lista/ListarMensajePendientes', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        data:{},
        success: function(respuesta){
          console.log('response',respuesta)
          
          filaData='';
          respuesta['response'].forEach(function(element){ 
            var fchReg =  element['fch_notificacion'].split("T");
            var fchLim=  element['fch_limite'].split("T");
            
            var filaAccion='';
            if(element['dsc_tipo_mensaje'] == 'TAREAS')
            {
                  if(element['cod_estado'] == 'FIN')
                  {
                    filaAccion="<button class='btn btn-success btnTabHome btnDorado' disabled >Firmado</button>";
                  }
                  else
                  {
                    filaAccion="<button class='btn btn-success btnTabHome btnDorado'>Firmar</button>";
                  }
            }
            else if(element['dsc_tipo_mensaje'] == 'SEGUIMIENTO')
            {
                filaAccion="<button class='btn btn-success btnTabHome verdeMuya'>Ir</button>";
            }
            else if(element['dsc_tipo_mensaje'] == 'ALERTAS')
            {
                filaAccion="<button class='btn btn-success btnTabHome'>Ocultar</button>";
                
            }
            else if(element['dsc_tipo_mensaje'] == 'AVISOS')
            {
                filaAccion="";
            }

            filaData += '<tr>'+
              '<td>'+fchReg[0]+'</td>'+
              '<td>'+fchLim[0]+'</td>'+
              '<td>'+element['dsc_trabajador_solicitante']+'</td>'+
              '<td>'+element['dsc_mensaje']+'</td>'+
              '<td>'+filaAccion+'</td>'+
            '</tr>';


           // filasArray.push(filaData);
          });
          //console.log(filasArray);
          $('#MensajePendientes').html(filaData);
          $('#MensajePendientes2').html(filaData);
        }//success
       
       
    });//end ajax



    $.ajax({
        url: 'lista/ListarMensajeFinalizados', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        data:{},
        success: function(respuesta){

          
          filaData='';
          respuesta['response'].forEach(function(element){ 
            var fchReg =  element['fch_notificacion'].split("T");
            var fchLim=  element['fch_limite'].split("T");
            
            var filaAccion='';
            if(element['dsc_tipo_mensaje'] == 'TAREAS')
            {
                  if(element['cod_estado'] == 'FIN')
                  {
                    filaAccion="<button class='btn btn-success btnTabHome btnDorado' disabled >Firmado</button>";
                  }
                  else
                  {
                    filaAccion="<button class='btn btn-success btnTabHome btnDorado'>Firmar</button>";
                  }
            }
            else if(element['dsc_tipo_mensaje'] == 'SEGUIMIENTO')
            {
                filaAccion="<button class='btn btn-success btnTabHome verdeMuya'>Ir</button>";
            }
            else if(element['dsc_tipo_mensaje'] == 'ALERTAS')
            {
                filaAccion="<button class='btn btn-success btnTabHome'>Ocultar</button>";
            }
            else if(element['dsc_tipo_mensaje'] == 'AVISOS')
            {
                filaAccion="";
            }

            filaData += '<tr>'+
              '<td>'+fchReg[0]+'</td>'+
              '<td>'+fchLim[0]+'</td>'+
              '<td>'+element['dsc_trabajador_solicitante']+'</td>'+
              '<td>'+element['dsc_mensaje']+'</td>'+
              '<td>'+filaAccion+'</td>'+
            '</tr>';


           // filasArray.push(filaData);
          });
          //console.log(filasArray);
          $('#MensajeFinalizados').html(filaData);
          $('#MensajeFinalizados2').html(filaData);
        }//success
       
       
    });//end ajax






    $.ajax({
        url: 'lista/ListarMensajeAvisos', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        data:{},
        success: function(respuesta){

          
          filaData='';
          respuesta['response'].forEach(function(element){ 
            var fchReg =  element['fch_notificacion'].split("T");
            var fchLim=  element['fch_limite'].split("T");
            
            filaData += '<tr>'+
              '<td>'+fchReg[0]+'</td>'+
              '<td>'+fchLim[0]+'</td>'+
              '<td>'+element['dsc_trabajador_solicitante']+'</td>'+
              '<td>'+element['dsc_mensaje']+'</td>'+
            '</tr>';


           // filasArray.push(filaData);
          });
          //console.log(filasArray);
          $('#MensajeAvisos').html(filaData);
          $('#MensajeAvisos2').html(filaData);
        }//success
       
       
    });//end ajax




    }

    

</script>