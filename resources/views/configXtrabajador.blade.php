
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
    span.select2.select2-container.select2-container--classic{
        width: 100% !important;
    }
    /* Personalización del tema Classic */
    .select2-container--classic .select2-selection--single {
      height: 2em;
      border-radius: 4px;
      background-color: #f2f2f2;
      border: 1px solid #ccc;
    }
    .select2-container--classic .select2-selection--single .select2-selection__rendered {
      line-height: 2em;
    }

    .select2-container--classic .select2-selection--single .select2-selection__arrow {
      /* top: 6px; */
      height: 1.9em;
    }
    .select2-container--classic.select2-container--open .select2-dropdown {
    border-color: #155450;
}
    .select2-container--classic.select2-container--open .select2-selection--single {
    border: 1px solid #155450;
    }
    .select2-container--classic .select2-results__option--highlighted.select2-results__option--selectable {
        background-color: #155450;
        color: #fff;
    }

    .select2-container--classic .select2-results__option {
      padding: 0.5em 0.8em;
    }

    /* Otros estilos personalizados */
    /* .my-select2 {
      width: 200px;
    } */
</style>
<x-layouts.app title="cambioContrasena" meta-description="Cambio de contrasena meta description">

    <main id="main" class="main">
      <div class="pagetitle">
          <h1>Configuración por trabajador</h1>
          <nav>
              <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
              <li class="breadcrumb-item active">Configuración</li>
              <li class="breadcrumb-item active">Por trabajador</li>
              </ol>
          </nav>
      </div><!-- End Page Title -->
  
      <section class="section dashboard">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-body"> 
                        <h5 >&nbsp;</h5>
                        
                        <div class="row m-3">
                            <div class="col-md-3">
                                <span class="titulo-tarjetaConfig" style="color: #a18347;"><b>Buscar</b></span>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-md-8 offset-md-3">
                                <div class="form-group">
                                    <select name="Trabajador" id="Trabajador" class="form-control selectForm js-example-diacritics"  onchange="ObtenerTrabajador()">
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row ">
                            <div class="col-md-8 m-4">
                                <div id="message">
                                <p class="titulo-tarjetaConfig" style="color: #a18347;"><b>General</b></p>
                            </div>
                        </div>
                        <br>
                        <br>

                        <div class="row" style="padding-bottom: 1rem;">
                            <div class=" col-10 col-md-2 offset-md-2">
                                <p>Grupo:</p>
                            </div>
                            <div class=" col-5 col-md-3">
                                <div class="form-group">
                                    <input type="text" name="cod_grupo" id="cod_grupo" value="" style="text-align: center" class="form-control" disabled>
                                </div>
                            </div>
                            <div class=" col-7 col-md-4">
                                <div class="form-group">
                                    <input type="text" name="dsc_grupo" id="dsc_grupo" value="" style="text-align: center" class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>

                        <div class="row" style="padding-bottom: 1rem;">
                            <div class="col-10 col-md-2 offset-md-2">
                                <p>Comisionista:</p>
                            </div>
                            <div class=" col-5 col-md-3">
                                <div class="form-group">
                                    <input type="text" name="cod_comisionista" id="cod_comisionista" value="" style="text-align: center" class="form-control" disabled>
                                </div>
                            </div>
                            <div class=" col-7 col-md-4">
                                <div class="form-group">
                                    <input type="text" name="dsc_comisionista" id="dsc_comisionista" value="" style="text-align: center" class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                        <br><br>

                        <div class="row">
                            <div class="col-md-8 m-4">
                                <p class="titulo-tarjetaConfig" style="color: #a18347;"><b>Vacaciones</b></p>
                            </div>
                        </div>

                        <div class="row" >
                            <div class="col-10 col-md-4 offset-md-2">
                                <p>Requiere aprobación de vacaciones</p>
                            </div>
                            <div class=" col-2 col-md-1">
                                <div class="form-group">
                                    <input class="form-check-input checkVerde" type="checkbox" value="" id="flg_requiere_aprobacion">
                                </div>
                            </div>
                        </div>
                        <br><br>

                        <div class="row" style="padding-bottom: 1rem;">
                            <div class="col-12 col-md-4 offset-md-2">
                                <p>Trabajador quien aprueba sus vacaciones</p>
                            </div>
                            <div class=" col-12 col-md-5">
                                <div class="form-group">
                                    <select name="Responsable" id="Responsable" class="form-control selectForm js-example-diacritics">
                                        
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br><br>

                        <div class="row" style="padding-bottom: 1rem;">
                            <div class="col-12 col-md-4 offset-md-2">
                                <p>No puede salir de vacaciones los últimos</p>
                            </div>
                            <div class=" col-3 col-md-2">
                                <div class="form-group">
                                    <input id="num_ultimo_dias" class="form-control " type="number" min="0" max="30" value="">
                                </div>
                            </div>
                            <div class="col-6 col-md-2">
                                <p>días del mes</p>
                            </div>
                        </div>
                        <br><br>

                        <div class="row">
                            <div class="col-md-8 m-4">
                                <p class="titulo-tarjetaConfig" style="color: #a18347;"><b>Asistencia</b></p>
                            </div>
                        </div>

                        <div class="row" >
                            <div class="col-10 col-md-4 offset-md-2">
                                <p>Requiere supervisión de asistencia</p>
                            </div>
                            <div class=" col-2 col-md-1">
                                <div class="form-group">
                                    <input class="form-check-input checkVerde" type="checkbox" value="" id="flexCheckDefault2">
                                </div>
                            </div>
                        </div>
                        <br><br>

                        <div class="row" >
                            <div class="col-12 col-md-4 offset-md-2">
                                <p>Trabajador quien supervisa su asistencia</p>
                            </div>
                            <div class=" col-12 col-md-5" style="margin-bottom: 1rem">
                                <div class="form-group">
                                    <select name="tipoDoc3" id="tipoDoc3" class="form-control selectForm js-example-diacritics">
                                       
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-12 col-md-2 offset-md-10" style="text-align: -webkit-center">
                                <div class="form-group">
                                    <h5><button class="btn btn-success btnDorado" id="" onclick="Guardar()">Guardar</button></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </section>

    <section class="section dashboard">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 28px;">Lista de personal a cargo</h5>
                        <div class="row">
                            <div class="col-md-6" style="margin-bottom: 1rem;">
                                <div class="form-group table-responsive" style="padding-left: 0rem;padding-right: 1rem;height: 23rem;">
                                    <table class="table table-striped " id="solAprobar" style="text-align: center; height: 300px;">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="card-title">Aprobación de vacaciones</th>
                                            </tr>
                                        </thead>
                                        <tbody id="ListaColaboradores">
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-6" style="margin-bottom: 1rem;">
                                <div class="form-group table-responsive" style="padding-left: 0rem;padding-right: 1rem;height: 23rem;">
                                    <table class="table table-striped " id="solAprobar" style="text-align: center; height: 300px;">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="card-title">Gestión de asistencia</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>    
    </section>

    <section class="section dashboard">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 28px;">Reporte de vacaciones por trabajador</h5>
                        <div class="row">
                            <div class="col-3 col-md-1" style="margin-bottom: 1rem;">
                                <div class="form-group">
                                    <span>Inicio:</span>
                                </div>
                            </div>
                            <div class="col-9 col-md-2" style="margin-bottom: 1rem;">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="datepicker1" placeholder="Seleccione..">
                                </div>
                            </div>
                            <div class="col-3 col-md-1" style="margin-bottom: 1rem;">
                                <div class="form-group">
                                    <span>Fin:</span>
                                </div>
                            </div>
                            <div class="col-9 col-md-2" style="margin-bottom: 1rem;">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="datepicker2" disabled>
                                </div>
                            </div>
                            <div class="col-12 col-md-2" style="text-align: -webkit-center">
                                <div class="form-group">
                                    <h5><button class="btn btn-success btnDorado" id="buscarDoc">Descargar</button></h5>
                                </div>
                            </div>                      
                            <div class="col-1 col-md-1" style="text-align: -webkit-center">
                                <input class="form-check-input checkVerde" checked type="checkbox" value="" id="flexCheckDefault2">
                            </div>
                            <div class="col-11 col-md-3" style="text-align: -webkit-center">
                                <div class="form-group">
                                    <h5>Visualizar equipos de mi equipo</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>    
    </section>

    <section class="section dashboard">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 26px;">Descargar solicitudes de vacaciones por trabajador</h5>
                        <div class="row">
                            <div class="col-3 col-md-1" style="margin-bottom: 1rem;">
                                <div class="form-group">
                                    <span>Inicio:</span>
                                </div>
                            </div>
                            <div class="col-9 col-md-2" style="margin-bottom: 1rem;">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="datepicker3" placeholder="Seleccione..">
                                </div>
                            </div>
                            <div class="col-3 col-md-1" style="margin-bottom: 1rem;">
                                <div class="form-group">
                                    <span>Fin:</span>
                                </div>
                            </div>
                            <div class="col-9 col-md-2" style="margin-bottom: 1rem;">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="datepicker4" disabled>
                                </div>
                            </div>
                            <div class="col-12 col-md-2" style="text-align: -webkit-center">
                                <div class="form-group">
                                    <h5><button class="btn btn-success btnDorado" id="buscarDoc">Descargar</button></h5>
                                </div>
                            </div>                      
                            <div class="col-1 col-md-1" style="text-align: -webkit-center">
                                <input class="form-check-input checkVerde" checked type="checkbox" value="" id="flexCheckDefault2">
                            </div>
                            <div class="col-11 col-md-3" style="text-align: -webkit-center">
                                <div class="form-group">
                                    <h5>Visualizar equipos de mi equipo</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>    
    </section>

    <section class="section dashboard">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 26px;">Carga masiva de configuraciones</h5>
                        <div class="row">
                            <div class="col-12 col-md-2" style="text-align: -webkit-center">
                                <div class="form-group">
                                    <h5><button class="btn btn-success btnDorado" id="buscarDoc" >Cargar</button></h5>
                                </div>
                            </div>                      
                            <div class="col-1 col-md-1" style="text-align: -webkit-center">
                                <input class="form-check-input checkVerde" checked type="checkbox" value="" id="flexCheckDefault2">
                            </div>
                            <div class="col-11 col-md-8">
                                <div class="form-group">
                                    <h5>Aprobar automáticamente las vacaciones que inician el siguiente mes</h5>
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
  
    <!-- Template Main JS File -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/es.js"></script>
    <script src="{{asset('assets/js/configXtrabajador.js')}}"></script>
    <script>
    

    window.onload= function() {
        
        if ('@php echo(session('ventana5_3')) @endphp' != 'SI') {
            let timerInterval
            Swal.fire({
                icon: 'error',
                title: 'Error de acceso',
                text: 'Usted no tiene acceso a esta opción.',
                timer: 1500,
                timerProgressBar: true,
                    didOpen: () => {
                        Swal.showLoading()
                        const b = Swal.getHtmlContainer().querySelector('b')
                        timerInterval = setInterval(() => {
                        b.textContent = Swal.getTimerLeft()
                        }, 100)
                    },
                    willClose: () => {
                        clearInterval(timerInterval)
                    }
                }).then((result) => {
                /* Read more about handling dismissals below */
                if (result.dismiss === Swal.DismissReason.timer) {
                    window.location.href = "adios";
                }
            })  
        }

        $('select').select2({
            language: "es",
            theme: "classic",
            width: 'resolve',
            placeholder: "Escriba el nombre del trabajador",
            allowClear: true,
            // dir: "rtl",
        });
        
       var flg_existe_config='';
        $.ajax({

        url: 'lista/MuestraTrabajadores', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        success: function(respuesta){ 
                respuesta['response'].forEach(function(word){
                console.log(word);
                $("#Trabajador").append('<option value="'+ word['codvar'] +'">'+ word['desvar1'] +'</option>');
            });
        },//success
        error(e){
            console.log(e.message);
        }//error
    });

    $.ajax({

        url: 'lista/MuestraResponsables', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        success: function(respuesta){ 
                respuesta['response'].forEach(function(word){
                console.log(word);
                $("#Responsable").append('<option value="'+ word['codvar'] +'">'+ word['desvar1'] +'</option>');
            });
        },//success
        error(e){
            console.log(e.message);
        }//error
   });

   ObtenerTrabajador();

    }

    var cod_trabajador='';
    function ObtenerTrabajador() {
     cod_trabajador=document.getElementById("Trabajador").value;
      console.log(cod_trabajador);
      $.ajax({
            url: 'api/ObtenerTrabajador', 
            method: "GET",
            crossDomain: true,
            dataType: 'json',
            data :{'cod_trabajador': cod_trabajador},
            success: function(result){
                console.log(result);
              if(result["response"]["flg_requiere_aprobacion"]=='SI'){document.getElementById("flg_requiere_aprobacion").checked = true;}else{document.getElementById("flg_requiere_aprobacion").checked = false;}
              document.getElementById("num_ultimo_dias").value =result["response"]["num_ultimo_dias"];
              document.getElementById("cod_grupo").value =result["response"]["cod_grupo"];
              document.getElementById("dsc_grupo").value =result["response"]["dsc_grupo"];
              document.getElementById("cod_comisionista").value =result["response"]["cod_comisionista"];
              document.getElementById("dsc_comisionista").value =result["response"]["dsc_comisionista"];

              var responsa=document.getElementById("Responsable") ;
              responsa.value=result["response"]["cod_supervisor"];

              flg_existe_config=result["response"]["flg_existe_config"];
            }
        });

        $.ajax({
            url: 'lista/ListarColaborador', 
            method: "GET",
            crossDomain: true,
            dataType: 'json',
            data :{'cod_trabajador': cod_trabajador},
            success: function(respuesta){
                console.log(respuesta);

                filaData='';
                respuesta['response'].forEach(function(element){ 
                    
                    filaData += '<tr>'+
                    '<td>'+element['dsc_trabajador']+'</td>'+
                    '</tr>';


           // filasArray.push(filaData);
          });
          //console.log(filasArray);
          $('#ListaColaboradores').html(filaData);

            }
        });


    }

    function Guardar()
    {
        console.log(cod_trabajador);
        if(document.getElementById("flg_requiere_aprobacion").checked==true){ if (flg_existe_config=='NO'){InsertarColaborador();} else{ActualizarColaborador();}}
        else{InsertarResponsable();}
        
    }
    function InsertarColaborador() {
               
        var cod_responsable=document.getElementById("Responsable").value;
        //var cod_trabajador=cod_trabajador;
        var num_ultimo_dias=document.getElementById("num_ultimo_dias").value;
                data = {
                    'cod_responsable': cod_responsable,
                    'cod_trabajador': cod_trabajador,
                    'num_ultimo_dias': num_ultimo_dias
                }
                console.log(cod_trabajador);
      Swal.fire({
      title: '¿Esta seguro de agregar un nuevo colaborador?',
      text: 'Confirmación',
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#35B44A',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Aceptar'
    }).then((result) => {
      if (result.isConfirmed) {
        console.log(cod_trabajador);
        $.ajax({
                        url: 'api/InsertarColaborador', 
                        method: "PUT",
                        crossDomain: true,
                        dataType: 'json',
                        data:{'data': data},
                        success: function(respuesta){
                            console.log(respuesta);
                            Swal.fire({
                                icon: 'success',
                                text: 'Se agrego el colaborador con éxito',
                                confirmButtonText: 'Continuar',
                                confirmButtonColor: '#a18347',
                            }).then((result) => {
                            if (result.isConfirmed) {
                                console.log('data rechazado',data);
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
    })

    }


    function ActualizarColaborador() {
               
               var cod_responsable=document.getElementById("Responsable").value;
               var cod_trabajador=document.getElementById("Trabajador").value;
               var num_ultimo_dias=document.getElementById("num_ultimo_dias").value;
                           data = {
                               'cod_responsable': cod_responsable,
                               'cod_trabajador': cod_trabajador,
                               'num_ultimo_dias': num_ultimo_dias
                           }
                      
                 Swal.fire({
                 title: '¿Esta seguro de agregar un nuevo colaborador?',
                 text: 'Confirmación',
                 icon: 'question',
                 showCancelButton: true,
                 confirmButtonColor: '#35B44A',
                 cancelButtonColor: '#d33',
                 confirmButtonText: 'Aceptar'
               }).then((result) => {
                 if (result.isConfirmed) {
                   console.log(cod_trabajador);
                   $.ajax({
                                   url: 'api/ActualizarColaborador', 
                                   method: "PUT",
                                   crossDomain: true,
                                   dataType: 'json',
                                   data:{'data': data},
                                   success: function(respuesta){
                                       console.log(respuesta);
                                       Swal.fire({
                                           icon: 'success',
                                           text: 'Se agrego el colaborador con éxito',
                                           confirmButtonText: 'Continuar',
                                           confirmButtonColor: '#a18347',
                                       }).then((result) => {
                                       if (result.isConfirmed) {
                                           console.log('data rechazado',data);
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
               })
           
               }



         function InsertarResponsable() {
               
              
                       data = {
                            'dsc_grupo_vacaciones': 'ww',
                           'cod_responsable': cod_trabajador
                           
                       }
                       console.log(cod_trabajador);
             Swal.fire({
             title: '¿Esta seguro de agregar un nuevo responsable?',
             text: 'Confirmación',
             icon: 'question',
             showCancelButton: true,
             confirmButtonColor: '#35B44A',
             cancelButtonColor: '#d33',
             confirmButtonText: 'Aceptar'
           }).then((result) => {
             if (result.isConfirmed) {
               console.log(cod_trabajador);
               $.ajax({
                               url: 'api/InsertarResponsable', 
                               method: "PUT",
                               crossDomain: true,
                               dataType: 'json',
                               data:{'data': data},
                               success: function(respuesta){
                                   console.log(respuesta);
                                   Swal.fire({
                                       icon: 'success',
                                       text: 'Se agrego el responsable con éxito',
                                       confirmButtonText: 'Continuar',
                                       confirmButtonColor: '#a18347',
                                   }).then((result) => {
                                   if (result.isConfirmed) {
                                       console.log('data rechazado',data);
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
           })
       
           }

    //-----valida dias maximos 30----
        var input = document.getElementById("num_ultimo_dias");
        input.addEventListener("input", function() {
            var value = parseInt(input.value);
            if (value > 30) {
            input.value = 30;
            }
        });
        //-------------------------------
    
    </script>
