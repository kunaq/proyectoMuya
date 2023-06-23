<x-layouts.app title="datosPersonales" meta-description="datos personales meta description">

  <main id="main" class="main">
    <div class="pagetitle">
        <h1>Datos Personales</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
            <li class="breadcrumb-item active">Datos</li>
            <li class="breadcrumb-item active">Datos Personales</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <div class="col-md-2 offset-md-1">
            <div class="card">
              <div class="card-body">
                <br>
                <div class="text-center d-none d-md-block">
                  <img src="assets/img/perfilTrab.png" class="rounded-circle" style="width: -webkit-fill-available;">
                </div>
                <div class="text-center d-sm-block d-md-none">
                  <img src="assets/img/perfilTrab.png" class="rounded-circle" style="width: 60%;">
                </div>
              </div>
              <hr style="margin:0 1rem 1rem;color: gray;">
              <div class="text-center">
                <p style="color: #7D7D7C;"><b><span id="dsc_nombres3"></span><br> <span id="dsc_apellidos3"></span></b></p>
              </div>
              <br class="d-none d-md-block"><br class="d-none d-md-block"><br class="d-none d-md-block">
            </div>
        </div>
        <!-- -->
        <div class="col-md-8 d-none d-md-block">
          <div class="card">         
            <nav>
              <div class="nav nav-pills nav-fill navDatPer" id="nav-tab" role="tablist">
                <button class="nav-item nav-item-left nav-link active" id="nav-datosPer-tab" data-bs-toggle="tab" data-bs-target="#nav-datosPer" role="tab" aria-controls="nav-datosPer" aria-selected="false">Datos Personales</button>
                <button class="nav-item nav-item-centro nav-link" id="nav-empresa-tab" data-bs-toggle="tab" data-bs-target="#nav-empresa" role="tab" aria-controls="nav-empresa" aria-selected="true">Empresa</button>
                <button class="nav-item nav-item-right nav-link" id="nav-grupoFam-tab" data-bs-toggle="tab" data-bs-target="#nav-grupoFam" role="tab" aria-controls="nav-grupoFam" aria-selected="false">Grupo Familiar</button>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-datosPer" style="margin-bottom: 2rem;" role="tabpanel" aria-labelledby="nav-datosPer-tab">
                <div style="margin: 1rem;">
                  <table class="table tableDatos">
                    <thead>
                      <tr>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Documento</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><span id="dsc_nombres"></span></td>
                        <td><span id="dsc_apellidos"></span></td>
                        <td><span id="dsc_documento"></span></td>
                      </tr>
                      <tr>
                        <th scope="col">Fecha de nacimiento</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Correo personal</th>
                      </tr>
                      <tr>
                        <td><span id="fch_nacimiento"></span></td>
                        <td><span id="dsc_telefono_personal"></span></td>
                        <td><span id="dsc_mail_personal"></span></td>
                      </tr>
                      <tr>
                        <th scope="col" colspan="3">Dirección</th>
                      </tr>
                      <tr>
                        <td colspan="3"><span id="dsc_direccion"></span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

              <div class="tab-pane fade " style="margin-bottom: 3.5rem;" id="nav-empresa" role="tabpanel" aria-labelledby="nav-empresa-tab">
                <div style="margin: 1rem;">
                  <table class="table tableDatos">
                    <thead>
                      <tr>
                        <th scope="col" width="50%">Fecha de ingreso</th>
                        <th scope="col">Cargo Actual</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><span id="fch_ingreso"></span></td>
                        <td><span id="dsc_cargo"></span></td>
                      </tr>
                      <tr>
                        <th scope="col">Sede</th>
                        <th scope="col">Jefe a quien reporta</th>
                      </tr>
                      <tr>
                        <td><span id="dsc_localidad"></span></td>
                        <td><span id="dsc_superior"></span></td>
                      </tr> 
                      <tr>
                        <th scope="col">Area asignada</th>
                        <th scope="col">Correo corporativo</th>
                      </tr>
                      <tr>
                        <td><span id="dsc_area"></span></td>
                        <td><span id="dsc_mail_empresa"></span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane fade" id="nav-grupoFam" role="tabpanel" aria-labelledby="nav-grupoFam-tab">
                <br>
                <div class="table-responsive" style="margin: 0.29rem;">
                  <table class="table tableDatos">
                    <thead>
                      <tr>
                        <th scope="col" style="text-align: center;">DNI</th>
                        <th scope="col" style="text-align: center;">Nombres</th>
                        <th scope="col" style="text-align: center;">Apellidos</th>
                        <th scope="col" style="text-align: center;">Fecha de Nacimiento</th>
                        <th scope="col" style="text-align: center;">Vínculo</th>
                      </tr>
                    </thead>
                    <tbody style="text-align: center;font-size:0.7em;" id="DerechoHabiente"></tbody>
                  </table>
                </div>
                <br>
              </div>
            </div>

          </div>
        </div>

        <div class="col-md-8 d-sm-block d-md-none">
          <div class="card">          
            <nav>
              <div class="nav nav-pills nav-fill navDatPer" id="nav-tab" role="tablist">
                <a class="nav-item nav-item-left nav-link active" id="nav-datosPer-tab" data-toggle="tab" href="#nav-datosPer-sm" role="tab" aria-controls="nav-datosPer" aria-selected="false">Datos Personales</a>
                <a class="nav-item nav-item-centro nav-link" id="nav-empresa-tab" data-toggle="tab" href="#nav-empresa-sm" role="tab" aria-controls="nav-empresa" aria-selected="true">Empresa</a>
                <a class="nav-item nav-item-right nav-link" id="nav-grupoFam-tab" data-toggle="tab" href="#nav-grupoFam-sm" role="tab" aria-controls="nav-grupoFam" aria-selected="false">Grupo Familiar</a>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-datosPer-sm" style="margin-bottom: 2rem;" role="tabpanel" aria-labelledby="nav-datosPer-tab">
                <div style="margin: 1rem;">
                  <table class="table tableDatos">
                    <tbody>
                      <tr>
                        <th scope="col">Nombres</th>
                      </tr>
                      <tr>
                        <td><span id="dsc_nombres2"></span></td>
                      </tr>
                      <tr>
                        <th scope="col">Apellidos</th>
                      </tr>
                      <tr>
                        <td><span id="dsc_apellidos2"></span></td>
                      </tr>
                      <tr>
                        <th scope="col">Documento</th>
                      </tr>
                      <tr>
                        <td><span id="dsc_documento2"></span></td>
                      </tr>
                      <tr>
                        <th scope="col">Fecha de nacimiento</th>
                      </tr>
                      <tr>
                        <td><span id="fch_nacimiento2"></span></td>
                      </tr>
                      <tr>
                        <th scope="col">Teléfono</th>
                      </tr>
                      <tr>
                        <td><span id="dsc_telefono_personal2"></span></td>
                      </tr>
                      <tr>
                        <th scope="col">Correo personal</th>
                      </tr>
                      <tr>
                        <td><span id="dsc_mail_personal2"></span></td>
                      </tr>
                      <tr>
                        <th scope="col">Dirección</th>
                      </tr>
                      <tr>
                        <td ><span id="dsc_direccion2"></span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane fade " style="margin-bottom: 3.5rem;" id="nav-empresa-sm" role="tabpanel" aria-labelledby="nav-empresa-tab">
                <div style="margin: 1rem;">
                  <table class="table tableDatos">
                    <tbody>
                      <tr>
                        <th scope="col">Fecha de ingreso</th>
                      </tr>
                      <tr>
                        <td><span id="fch_ingreso2"></span></td>
                      </tr>
                      <tr>
                        <th scope="col">Cargo Actual</th>
                      </tr>
                      <tr>
                        <td><span id="dsc_cargo2"></span></td>
                      </tr>
                      <tr>
                        <th scope="col">Sede</th>
                      </tr>
                      <tr>
                        <td><span id="dsc_localidad2"></span></td>
                      </tr>
                      <tr>
                        <th scope="col">Jefe a quien reporta</th>
                      </tr>
                      <tr>
                        <td><span id="dsc_superior2"></span></td>
                      </tr>
                      <tr>
                        <th scope="col">Area asignada</th>
                      </tr>
                      <tr>
                        <td><span id="dsc_area2"></span></td>
                      </tr>
                      <tr>
                        <th scope="col">Correo corporativo</th>
                      </tr>
                      <tr>
                        <td><span id="dsc_mail_empresa2"></span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane fade" id="nav-grupoFam-sm" role="tabpanel" aria-labelledby="nav-grupoFam-tab">
                <br>
                <div class="table-responsive" style="margin: 0.29rem;">
                  <table class="table tableDatos">
                  <tbody style="text-align: center;font-size:0.7em;" id="DerechoHabienteMovil"></tbody>
                  </table>
                </div>
                <br>
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
  var codTrabajador = '@php echo(session('codTrabajador')) @endphp';
    window.onload= function() {
        $.ajax({
            url: 'api/ObtenerTrabajador', 
            method: "GET",
            crossDomain: true,
            dataType: 'json',
            data:{'cod_trabajador':codTrabajador},
            success: function(result){
                var fchNac =  result["response"]['fch_nacimiento'].split("T");
                var fchIng =  result["response"]['fch_ingreso'].split("T");

                //FOTO
                document.getElementById("dsc_nombres3").innerHTML=result["response"]["dsc_nombres"];
                document.getElementById("dsc_apellidos3").innerHTML=result["response"]["dsc_apellido_paterno"] +' '+result["response"]["dsc_apellido_materno"];

                //ESCRITORIO
                document.getElementById("dsc_nombres").innerHTML=result["response"]["dsc_nombres"];
                document.getElementById("dsc_apellidos").innerHTML=result["response"]["dsc_apellido_paterno"] +' '+result["response"]["dsc_apellido_materno"];
                document.getElementById("dsc_documento").innerHTML=result["response"]["dsc_tipo_documento"] +': '+result["response"]["dsc_documento"];
                document.getElementById("fch_nacimiento").innerHTML=formatDate(fchNac[0]) ;
                document.getElementById("dsc_telefono_personal").innerHTML=result["response"]["dsc_telefono_personal"] ;
                document.getElementById("dsc_mail_personal").innerHTML=result["response"]["dsc_mail_personal"] ;
                document.getElementById("dsc_direccion").innerHTML=result["response"]["dsc_direccion"] ;

                document.getElementById("fch_ingreso").innerHTML=formatDate(fchIng[0]) ;
                document.getElementById("dsc_cargo").innerHTML=result["response"]["dsc_cargo"] ;
                document.getElementById("dsc_localidad").innerHTML=result["response"]["dsc_localidad"] ;
                document.getElementById("dsc_superior").innerHTML=result["response"]["dsc_superior"] ;
                document.getElementById("dsc_area").innerHTML=result["response"]["dsc_area"] ;
                document.getElementById("dsc_mail_empresa").innerHTML=result["response"]["dsc_mail_empresa"] ;


                //MOVIL
                document.getElementById("dsc_nombres2").innerHTML=result["response"]["dsc_nombres"];
                document.getElementById("dsc_apellidos2").innerHTML=result["response"]["dsc_apellido_paterno"] +' '+result["response"]["dsc_apellido_materno"];
                document.getElementById("dsc_documento2").innerHTML=result["response"]["dsc_tipo_documento"] +': '+result["response"]["dsc_documento"];
                document.getElementById("fch_nacimiento2").innerHTML=formatDate(fchNac[0]) ;
                document.getElementById("dsc_telefono_personal2").innerHTML=result["response"]["dsc_telefono_personal"] ;
                document.getElementById("dsc_mail_personal2").innerHTML=result["response"]["dsc_mail_personal"] ;
                document.getElementById("dsc_direccion2").innerHTML=result["response"]["dsc_direccion"] ;
             
                document.getElementById("fch_ingreso2").innerHTML=formatDate(fchIng[0]) ;
                document.getElementById("dsc_cargo2").innerHTML=result["response"]["dsc_cargo"] ;
                document.getElementById("dsc_localidad2").innerHTML=result["response"]["dsc_localidad"] ;
                document.getElementById("dsc_superior2").innerHTML=result["response"]["dsc_superior"] ;
                document.getElementById("dsc_area2").innerHTML=result["response"]["dsc_area"] ;
                document.getElementById("dsc_mail_empresa2").innerHTML=result["response"]["dsc_mail_empresa"] ;

            }
        });


        $.ajax({
        url: 'lista/ListarDerechoHabientes', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        data:{},
        success: function(respuesta){

          
          filaData='';
          filaDataMovil='';
          respuesta['response'].forEach(function(element){ 
            var fchNac =  element['fch_nacimiento'].split("T");
            
          

            filaData += '<tr>'+
              '<td>'+element['num_documento']+'</td>'+
              '<td>'+element['dsc_nombres']+'</td>'+
              '<td>'+element['dsc_apellido_paterno']+' ' +element['dsc_apellido_materno']+'</td>'+
              '<td>'+formatDate(fchNac[0])+'</td>'+
              '<td>'+element['dsc_parentesco']+'</td>'+
            '</tr>';
         
            filaDataMovil += '<tr>'+
              '<td>'+element['dsc_nombres']+element['dsc_apellido_paterno']+' '+element['dsc_apellido_materno']+'<br>'+
              '<b>DNI:</b>'+element['num_documento']+'<br>'+
              '<b>Nac:</b>'+formatDate(fchNac[0])+'<br>'+
              '<b>Vinculo:</b>'+element['dsc_parentesco']+'<td>'+
            '</tr>';

          });
          //console.log(filasArray);
          $('#DerechoHabiente').html(filaData);
          $('#DerechoHabienteMovil').html(filaDataMovil);
        }//success
       
       
    });//end ajax



    }

    

</script>