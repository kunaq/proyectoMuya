<x-layouts.app title="fechasimp" meta-description="fechas importantes meta description">

  <main id="main" class="main">
    <div class="pagetitle">
      <div class="row">
        <div class="col-md-3">
          <h1>Fechas importantes</h1>
          <nav>
              <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
              <li class="breadcrumb-item active">Datos</li>
              <li class="breadcrumb-item active">Fechas importantes</li>
              </ol>
          </nav>
        </div>
        <div class="row col-md-6 offset-1">
          <div class="col-4 col-md-3">
            <div class="form-group">
              <select name="annoFimp" id="annoFimp" class="form-control selectForm" >
                   
              </select>
            </div>
          </div>
          <div class="col-5 col-md-3" style="text-align: -webkit-center">
            <div class="form-group">
                <h5><button class="btn btn-success btnDorado" id="buscarFimp"  onClick="BuscarPagos();">Buscar&nbsp;&nbsp;<span class="bi bi-search"></span></button></h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <div class="card">
              <div class="card-body d-none d-md-block">
                <h5 class="card-title" style="font-size: 20px; text-align: center;">PAGO DE HABERES</h5>
                <div class="table-responsive">
                  <table class="table table-striped tableDatos">
                    <tbody style="text-align: center;">
                      <tr>
                        <th scope="col">Enero</th>
                        <th scope="col">Febrero</th>
                        <th scope="col">Marzo</th>
                        <th scope="col">Abril</th>
                        <th scope="col">Mayo</th>
                        <th scope="col">Junio</th>
                      </tr>
                      <tr>
                        <td><span id="ENERO"></span></td>
                        <td><span id="FEBRERO"></span></td>
                        <td><span id="MARZO"></span></td>
                        <td><span id="ABRIL"></span></td>
                        <td><span id="MAYO"></span></td>
                        <td><span id="JUNIO"></span></td>
                      </tr>
                      <tr>
                        <th scope="col">Julio</th>
                        <th scope="col">Agosto</th>
                        <th scope="col">Septiembre</th>
                        <th scope="col">Octubre</th>
                        <th scope="col">Noviembre</th>
                        <th scope="col">Diciembre</th>
                      </tr>
                      <tr>
                        <td><span id="JULIO"></span></td>
                        <td><span id="AGOSTO"></span></td>
                        <td><span id="SEPTIEMBRE"></span></td>
                        <td><span id="OCTUBRE"></span></td>
                        <td><span id="NOVIEMBRE"></span></td>
                        <td><span id="DICIEMBRE"></span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

              <div class="card-body d-sm-block d-md-none">
                <h5 class="card-title" style="font-size: 20px; text-align: center;">PAGO DE HABERES</h5>
                <div class="table-responsive">
                  <table class="table table-striped tableDatos">
                    <tbody style="text-align: center;">
                      <tr>
                        <th scope="col">Enero</th>
                        <th scope="col">Febrero</th>
                        <th scope="col">Marzo</th>
                      </tr>
                      <tr>
                        <td><span id="ENEROM"></span></td>
                        <td><span id="FEBREROM"></span></td>
                        <td><span id="MARZOM"></span></td>
                      </tr>
                      <tr>
                        <th scope="col">Abril</th>
                        <th scope="col">Mayo</th>
                        <th scope="col">Junio</th>
                      </tr>
                      <tr>
                        <td><span id="ABRILM"></span></td>
                        <td><span id="MAYOM"></span></td>
                        <td><span id="JUNIOM"></span></td>
                      </tr>
                      <tr>
                        <th scope="col">Julio</th>
                        <th scope="col">Agosto</th>
                        <th scope="col">Septiembre</th>
                      </tr>
                      <tr>
                        <td><span id="JULIOM"></span></td>
                        <td><span id="AGOSTOM"></span></td>
                        <td><span id="SEPTIEMBREM"></span></td>
                      </tr>
                      <tr>
                        <th scope="col">Octubre</th>
                        <th scope="col">Noviembre</th>
                        <th scope="col">Diciembre</th>
                      </tr>
                      <tr>
                        <td><span id="OCTUBREM"></span></td>
                        <td><span id="NOVIEMBREM"></span></td>
                        <td><span id="DICIEMBREM"></span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
          </div>
        </div>
      </div> 
      
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <div class="card">
              <div class="card-body d-none d-md-block">
                <h5 class="card-title" style="font-size: 20px; text-align: center;">PAGO DE ADELANTO DE VACACIONES</h5>
                <div class="table-responsive">
                    <table class="table table-striped tableDatos" style="text-align: center;">
                    <tbody>
                      <tr>
                        <th scope="col">Enero</th>
                        <th scope="col">Febrero</th>
                        <th scope="col">Marzo</th>
                        <th scope="col">Abril</th>
                        <th scope="col">Mayo</th>
                        <th scope="col">Junio</th>
                      </tr>
                      <tr>
                        <td><span id="ENERO1"></span></td>
                        <td><span id="FEBRERO1"></span></td>
                        <td><span id="MARZO1"></span></td>
                        <td><span id="ABRIL1"></span></td>
                        <td><span id="MAYO1"></span></td>
                        <td><span id="JUNIO1"></span></td>
                      </tr>
                      <tr>
                        <th scope="col">Julio</th>
                        <th scope="col">Agosto</th>
                        <th scope="col">Septiembre</th>
                        <th scope="col">Octubre</th>
                        <th scope="col">Noviembre</th>
                        <th scope="col">Diciembre</th>
                      </tr>
                      <tr>
                        <td><span id="JULIO1"></span></td>
                        <td><span id="AGOSTO1"></span></td>
                        <td><span id="SEPTIEMBRE1"></span></td>
                        <td><span id="OCTUBRE1"></span></td>
                        <td><span id="NOVIEMBRE1"></span></td>
                        <td><span id="DICIEMBRE1"></span></td>
                      </tr>
                    </tbody>
                    </table>
                </div>
              </div>

              <div class="card-body d-sm-block d-md-none">
                <h5 class="card-title" style="font-size: 20px; text-align: center;">PAGO DE ADELANTO DE VACACIONES</h5>
                <div class="table-responsive">
                    <table class="table table-striped tableDatos" style="text-align: center;">
                    <tbody>
                      <tr>
                        <th scope="col">Enero</th>
                        <th scope="col">Febrero</th>
                        <th scope="col">Marzo</th>
                      </tr>
                      <tr>
                        <td><span id="ENERO1M"></span></td>
                        <td><span id="FEBRERO1M"></span></td>
                        <td><span id="MARZO1M"></span></td>
                      </tr>
                      <tr>
                        <th scope="col">Abril</th>
                        <th scope="col">Mayo</th>
                        <th scope="col">Junio</th>
                      </tr>
                      <tr>
                        <td><span id="ABRIL1M"></span></td>
                        <td><span id="MAYO1M"></span></td>
                        <td><span id="JUNIOM1"></span></td>
                      </tr>
                      <tr>
                        <th scope="col">Julio</th>
                        <th scope="col">Agosto</th>
                        <th scope="col">Septiembre</th>
                      </tr>
                      <tr>
                        <td><span id="JULIO1M"></span></td>
                        <td><span id="AGOSTO1M"></span></td>
                        <td><span id="SEPTIEMBRE1M"></span></td>
                      </tr>
                      <tr>
                        <th scope="col">Octubre</th>
                        <th scope="col">Noviembre</th>
                        <th scope="col">Diciembre</th>
                      </tr>
                      <tr>
                        <td><span id="OCTUBRE1M"></span></td>
                        <td><span id="NOVIMEBRE1M"></span></td>
                        <td><span id="DICIEMBRE1M"></span></td>
                      </tr>
                    </tbody>
                    </table>
                </div>
              </div>
          </div>
        </div>
      </div> 

      <div class="row">
        <div class="col-md-5 offset-md-1">
          <div class="card">
            <div class="row card-body">
              <div class="col-md-10 offset-md-1" style="border-bottom: 0px;margin-bottom: -1rem;">
                <h5 class="card-title" style="font-size: 20px; text-align: center;">CTS</h5>
                <table class="table table-striped tableDatos">
                    <tbody style="text-align: center;">
                      <tr>
                        <th scope="col">Mayo</th>
                        <th scope="col">Noviembre</th>
                      </tr>
                        <tr>
                            <td style="border-bottom: 0;"><span id="MAYO2"></span></td>
                            <td style="border-bottom: 0;"><span id="NOVIEMBRE2"></span></td>
                        </tr>
                    </tbody>
                </table>
              </div> 
            </div>
          </div>
        </div>    
        <div class="col-md-5">
          <div class="card">
            <div class="row card-body">
              <div class="col-md-10 offset-md-1" style="border-bottom: 0px;margin-bottom: -1rem;">
                <h5 class="card-title" style="font-size: 20px; text-align: center;">GRATIFICACIÓN</h5>
                <table class="table table-striped tableDatos">
                    <tbody style="text-align: center;">
                      <tr>
                        <th scope="col">Julio</th>
                        <th scope="col">Diciembre</th>
                      </tr>
                        <tr>
                            <td style="border-bottom: 0;"><span id="JULIO3"></span></td>
                            <td style="border-bottom: 0;"><span id="DICIEMBRE3"></span></td>
                        </tr>
                    </tbody>
                </table>
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
            url: 'api/ObtenerPagoHaberes', 
            method: "GET",
            crossDomain: true,
            dataType: 'json',
            data:{ "cod_anno":2023 },
            success: function(result){
              console.log('response',result)
                //ESCRITORIO
                document.getElementById("ENERO").innerHTML=result["response"]["enero"];
                document.getElementById("FEBRERO").innerHTML=result["response"]["febrero"];
                document.getElementById("MARZO").innerHTML=result["response"]["marzo"];
                document.getElementById("ABRIL").innerHTML=result["response"]["abril"];
                document.getElementById("MAYO").innerHTML=result["response"]["mayo"];
                document.getElementById("JUNIO").innerHTML=result["response"]["junio"];
                document.getElementById("JULIO").innerHTML=result["response"]["julio"];
                document.getElementById("AGOSTO").innerHTML=result["response"]["agosto"];
                document.getElementById("SEPTIEMBRE").innerHTML=result["response"]["septiembre"];
                document.getElementById("OCTUBRE").innerHTML=result["response"]["octubre"];
                document.getElementById("NOVIEMBRE").innerHTML=result["response"]["noviembre"];
                document.getElementById("DICIEMBRE").innerHTML=result["response"]["diciembre"];

                //MOVIL
                document.getElementById("ENEROM").innerHTML=result["response"]["enero"];
                document.getElementById("FEBREROM").innerHTML=result["response"]["febrero"];
                document.getElementById("MARZOM").innerHTML=result["response"]["marzo"];
                document.getElementById("ABRILM").innerHTML=result["response"]["abril"];
                document.getElementById("MAYOM").innerHTML=result["response"]["mayo"];
                document.getElementById("JUNIOM").innerHTML=result["response"]["junio"];
                document.getElementById("JULIOM").innerHTML=result["response"]["julio"];
                document.getElementById("AGOSTOM").innerHTML=result["response"]["agosto"];
                document.getElementById("SEPTIEMBREM").innerHTML=result["response"]["septiembre"];
                document.getElementById("OCTUBREM").innerHTML=result["response"]["octubre"];
                document.getElementById("NOVIEMBREM").innerHTML=result["response"]["noviembre"];
                document.getElementById("DICIEMBREM").innerHTML=result["response"]["diciembre"];
            }
        });

        var fecha = new Date();
	      var ano = fecha.getFullYear();

        $.ajax({
            url: 'api/ObtenerPagoAdelantoVacaciones', 
            method: "GET",
            crossDomain: true,
            dataType: 'json',
            data:{ "cod_anno":ano },
            success: function(result){
                //ESCRITORIO
                document.getElementById("ENERO1").innerHTML=result["response"]["enero"];
                document.getElementById("FEBRERO1").innerHTML=result["response"]["enero"];
                document.getElementById("MARZO1").innerHTML=result["response"]["marzo"];
                document.getElementById("ABRIL1").innerHTML=result["response"]["abril"];
                document.getElementById("MAYO1").innerHTML=result["response"]["mayo"];
                document.getElementById("JUNIO1").innerHTML=result["response"]["junio"];
                document.getElementById("JULIO1").innerHTML=result["response"]["julio"];
                document.getElementById("AGOSTO1").innerHTML=result["response"]["agosto"];
                document.getElementById("SEPTIEMBRE1").innerHTML=result["response"]["septiembre"];
                document.getElementById("OCTUBRE1").innerHTML=result["response"]["octubre"];
                document.getElementById("NOVIEMBRE1").innerHTML=result["response"]["noviembre"];
                document.getElementById("DICIEMBRE1").innerHTML=result["response"]["diciembre"];

                //MOVIL
                document.getElementById("ENERO1M").innerHTML=result["response"]["enero"];
                document.getElementById("FEBRERO1M").innerHTML=result["response"]["enero"];
                document.getElementById("MARZO1M").innerHTML=result["response"]["marzo"];
                document.getElementById("ABRIL1M").innerHTML=result["response"]["abril"];
                document.getElementById("MAYO1M").innerHTML=result["response"]["MAYO"];
                document.getElementById("JUNIO1M").innerHTML=result["response"]["junio"];
                document.getElementById("JULIO1M").innerHTML=result["response"]["julio"];
                document.getElementById("AGOSTO1M").innerHTML=result["response"]["agosto"];
                document.getElementById("SEPTIEMBRE1M").innerHTML=result["response"]["septiembre"];
                document.getElementById("OCTUBRE1M").innerHTML=result["response"]["octubre"];
                document.getElementById("NOVIEMBRE1M").innerHTML=result["response"]["noviembre"];
                document.getElementById("DICIEMBRE1M").innerHTML=result["response"]["diciembre"];
            }
        });


        $.ajax({
            url: 'api/ObtenerPagoCts', 
            method: "GET",
            crossDomain: true,
            dataType: 'json',
            data:{ "cod_anno":ano },
            success: function(result){
                document.getElementById("MAYO2").innerHTML=result["response"]["mayo"];
                document.getElementById("NOVIEMBRE2").innerHTML=result["response"]["noviembre"];
            }
        });


        $.ajax({
            url: 'api/ObtenerPagoGratificacion', 
            method: "GET",
            crossDomain: true,
            dataType: 'json',
            data:{ "cod_anno":ano },
            success: function(result){
                document.getElementById("JULIO3").innerHTML=result["response"]["julio"];
                document.getElementById("DICIEMBRE3").innerHTML=result["response"]["diciembre"];
            }
        });

       

        $.ajax({
        url: 'lista/MuestraAnhos', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        success: function(respuesta){ 
                respuesta['response'].forEach(function(word){
                //console.log(word);
                seleccion = '';
                if(word['codvar'] == ano){
                seleccion = 'selected';
                }else{
                seleccion = '';
                }
                $("#annoFimp").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>');
            });
        },//success
        error(e){
            console.log(e.message);
        }//error
    });

       
    }

        function BuscarPagos() {

        var cod_anno = $('#annoFimp').val();
        $.ajax({
            url: 'api/ObtenerPagoHaberes', 
            method: "GET",
            crossDomain: true,
            dataType: 'json',
            data:{ "cod_anno": cod_anno },
            success: function(result){
              console.log('response',result)
                //ESCRITORIO
                document.getElementById("ENERO").innerHTML=result["response"]["enero"];
                document.getElementById("FEBRERO").innerHTML=result["response"]["febrero"];
                document.getElementById("MARZO").innerHTML=result["response"]["marzo"];
                document.getElementById("ABRIL").innerHTML=result["response"]["abril"];
                document.getElementById("MAYO").innerHTML=result["response"]["mayo"];
                document.getElementById("JUNIO").innerHTML=result["response"]["junio"];
                document.getElementById("JULIO").innerHTML=result["response"]["julio"];
                document.getElementById("AGOSTO").innerHTML=result["response"]["agosto"];
                document.getElementById("SEPTIEMBRE").innerHTML=result["response"]["septiembre"];
                document.getElementById("OCTUBRE").innerHTML=result["response"]["octubre"];
                document.getElementById("NOVIEMBRE").innerHTML=result["response"]["noviembre"];
                document.getElementById("DICIEMBRE").innerHTML=result["response"]["diciembre"];

                //MOVIL
                document.getElementById("ENEROM").innerHTML=result["response"]["enero"];
                document.getElementById("FEBREROM").innerHTML=result["response"]["febrero"];
                document.getElementById("MARZOM").innerHTML=result["response"]["marzo"];
                document.getElementById("ABRILM").innerHTML=result["response"]["abril"];
                document.getElementById("MAYOM").innerHTML=result["response"]["mayo"];
                document.getElementById("JUNIOM").innerHTML=result["response"]["junio"];
                document.getElementById("JULIOM").innerHTML=result["response"]["julio"];
                document.getElementById("AGOSTOM").innerHTML=result["response"]["agosto"];
                document.getElementById("SEPTIEMBREM").innerHTML=result["response"]["septiembre"];
                document.getElementById("OCTUBREM").innerHTML=result["response"]["octubre"];
                document.getElementById("NOVIEMBREM").innerHTML=result["response"]["noviembre"];
                document.getElementById("DICIEMBREM").innerHTML=result["response"]["diciembre"];
            }
        });

        $.ajax({
            url: 'api/ObtenerPagoAdelantoVacaciones', 
            method: "GET",
            crossDomain: true,
            dataType: 'json',
            data:{ "cod_anno": cod_anno  },
            success: function(result){
                //ESCRITORIO
                document.getElementById("ENERO1").innerHTML=result["response"]["enero"];
                document.getElementById("FEBRERO1").innerHTML=result["response"]["enero"];
                document.getElementById("MARZO1").innerHTML=result["response"]["marzo"];
                document.getElementById("ABRIL1").innerHTML=result["response"]["abril"];
                document.getElementById("MAYO1").innerHTML=result["response"]["mayo"];
                document.getElementById("JUNIO1").innerHTML=result["response"]["junio"];
                document.getElementById("JULIO1").innerHTML=result["response"]["julio"];
                document.getElementById("AGOSTO1").innerHTML=result["response"]["agosto"];
                document.getElementById("SEPTIEMBRE1").innerHTML=result["response"]["septiembre"];
                document.getElementById("OCTUBRE1").innerHTML=result["response"]["octubre"];
                document.getElementById("NOVIEMBRE1").innerHTML=result["response"]["noviembre"];
                document.getElementById("DICIEMBRE1").innerHTML=result["response"]["diciembre"];

                //MOVIL
                document.getElementById("ENERO1M").innerHTML=result["response"]["enero"];
                document.getElementById("FEBRERO1M").innerHTML=result["response"]["enero"];
                document.getElementById("MARZO1M").innerHTML=result["response"]["marzo"];
                document.getElementById("ABRIL1M").innerHTML=result["response"]["abril"];
                document.getElementById("MAYO1M").innerHTML=result["response"]["MAYO"];
                document.getElementById("JUNIO1M").innerHTML=result["response"]["junio"];
                document.getElementById("JULIO1M").innerHTML=result["response"]["julio"];
                document.getElementById("AGOSTO1M").innerHTML=result["response"]["agosto"];
                document.getElementById("SEPTIEMBRE1M").innerHTML=result["response"]["septiembre"];
                document.getElementById("OCTUBRE1M").innerHTML=result["response"]["octubre"];
                document.getElementById("NOVIEMBRE1M").innerHTML=result["response"]["noviembre"];
                document.getElementById("DICIEMBRE1M").innerHTML=result["response"]["diciembre"];
            }
        });


        $.ajax({
            url: 'api/ObtenerPagoCts', 
            method: "GET",
            crossDomain: true,
            dataType: 'json',
            data:{ "cod_anno": cod_anno  },
            success: function(result){
                document.getElementById("MAYO2").innerHTML=result["response"]["mayo"];
                document.getElementById("NOVIEMBRE2").innerHTML=result["response"]["noviembre"];
            }
        });


        $.ajax({
            url: 'api/ObtenerPagoGratificacion', 
            method: "GET",
            crossDomain: true,
            dataType: 'json',
            data:{ "cod_anno": cod_anno  },
            success: function(result){
                document.getElementById("JULIO3").innerHTML=result["response"]["julio"];
                document.getElementById("DICIEMBRE3").innerHTML=result["response"]["diciembre"];
            }
        });

    }

    

</script>