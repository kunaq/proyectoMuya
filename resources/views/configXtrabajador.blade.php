
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
    .tooltip{
        position: fixed!important;
    }
    .select2-container--open{
        z-index: 9999;
    }

    /* Otros estilos personalizados */
    /* .my-select2 {
      width: 200px;
    } */
</style>
<x-layouts.app title="ConfiguracionXtrabajador" meta-description="Configuracion por trabajador meta description">

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
                                    <select name="Trabajador" id="Trabajador" class="form-control selectForm js-example-diacritics"  onchange="ObtenerTrabajador(this.value)">
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
                            <div class="col-3 col-md-1 offset-md-2" style="margin-bottom: 1rem;">
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
                                    <h5><button class="btn btn-success btnDorado" id="btnDescVacaciones">Descargar</button></h5>
                                </div>
                            </div>                      
                           
                        </div>
                    </div>
                </div>
            </div>  
        </div>    
    </section>

    {{-- <section class="section dashboard">
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
                                    <h5><button class="btn btn-success btnDorado" id="btnDescargConfig">Descargar</button></h5>
                                </div>
                            </div>                      
                            <div class="col-1 col-md-1" style="text-align: -webkit-center">
                                <input class="form-check-input checkVerde" checked type="checkbox" value="" id="flexCheckDefault4">
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
    </section> --}}

    <section class="section dashboard">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 26px;">Carga masiva de configuraciones</h5>
                        <div class="row">
                            <div class="col-12" style="text-align: -webkit-center">
                                <div class="form-group">
                                    <h5><button class="btn btn-success btnDorado" id="btnModalCarga" data-bs-toggle="modal" data-bs-target="#ModalCargaMasivaConfig">Cargar</button></h5>
                                </div>
                            </div>                      
                        </div>
                    </div>
                </div>
            </div>  
        </div>    
    </section>
  
    </main><!-- End #main -->

    <x-modals.configXtrabajador/>
  
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

    $('#annoIniConfig, #periodo, #Trabajador, #Responsable, #tipoDoc3').select2({
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
                $("#Trabajador").append('<option value="">Seleccione...</option>');
                //console.log(word);
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
                $("#Responsable").append('<option value="">Seleccione...</option>');
                //console.log(word);
                $("#Responsable").append('<option value="'+ word['codvar'] +'">'+ word['desvar1'] +'</option>');
            });
        },//success
        error(e){
            console.log(e.message);
        }//error
    });

   //ObtenerTrabajador('@php echo(session('codTrabajador')) @endphp');

    //---------------------------Años------------------------------
    $.ajax({
        url: 'lista/MuestraAnhos', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        success: function(respuesta){ 
                respuesta['response'].forEach(function(word){
                //console.log(word);
                $("#annoIniConfig").append('<option value="'+ word['codvar'] +'">'+ word['desvar1'] +'</option>');
                // $("#annoFin").append('<option value="'+ word['codvar'] +'">'+ word['desvar1'] +'</option>');

            });
        },//success
        error(e){
            console.log(e.message);
        }//error
    });//ajax muestraAnno

}

var obj = document.getElementById('archivo');

obj.addEventListener('input', function(){
    if (obj.value == '') {
        document.getElementById('buscarDoc3').setAttribute('disabled','true');
    }else{
        document.getElementById('buscarDoc3').removeAttribute('disabled');
    }
});

//ar cod_trabajador='@php echo(session('codTrabajador')) @endphp';

function ObtenerTrabajador(codTra) {
    //cod_trabajador=document.getElementById("codTrabajador").value;
    //console.log(cod_trabajador);
    $.ajax({
        url: 'api/ObtenerTrabajador', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        data :{'cod_trabajador': codTra},
        success: function(result){
            //console.log(result["response"]["cod_supervisor"]);
            if(result["response"]["flg_requiere_aprobacion"]=='SI'){
                document.getElementById("flg_requiere_aprobacion").checked = true;
            }else{
                document.getElementById("flg_requiere_aprobacion").checked = false;
            }
            document.getElementById("num_ultimo_dias").value =result["response"]["num_ultimo_dias"];
            document.getElementById("cod_grupo").value =result["response"]["cod_grupo"];
            document.getElementById("dsc_grupo").value =result["response"]["dsc_grupo"];
            document.getElementById("cod_comisionista").value =result["response"]["cod_comisionista"];
            document.getElementById("dsc_comisionista").value =result["response"]["dsc_comisionista"];

            $('#Responsable').val(result["response"]["cod_supervisor"]).trigger('change.select2');

            flg_existe_config=result["response"]["flg_existe_config"];
        }
    });

    $.ajax({
        url: 'lista/ListarColaborador', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        data :{'cod_trabajador': codTra},
        success: function(respuesta){
            //console.log(respuesta);

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
    //console.log(cod_trabajador);
    if(document.getElementById("flg_requiere_aprobacion").checked==true){ 
        if (flg_existe_config=='NO'){
            InsertarColaborador();
        } else{
            ActualizarColaborador();
        }
    }else{
        InsertarResponsable();
    }
    
}

function InsertarColaborador() {
               
    var cod_responsable = document.getElementById("Responsable").value;
    var cod_trabajador = document.getElementById("Trabajador").value;
    var num_ultimo_dias = document.getElementById("num_ultimo_dias").value;
        data = {
            'cod_responsable': cod_responsable,
            'cod_trabajador': cod_trabajador,
            'num_ultimo_dias': num_ultimo_dias
        }
    //console.log(cod_trabajador);
    Swal.fire({
    title: '¿Esta seguro de agregar un nuevo colaborador?',
    text: 'Confirmación',
    icon: 'question',
    showCancelButton: true,
    confirmButtonColor: '#a18347',
    cancelButtonColor: '#6c757d',
    confirmButtonText: 'Aceptar'
    }).then((result) => {
    if (result.isConfirmed) {
        //console.log(cod_trabajador);
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
            
    var cod_responsable = document.getElementById("Responsable").value;
    var cod_trabajador = document.getElementById("Trabajador").value;
    var num_ultimo_dias = document.getElementById("num_ultimo_dias").value;
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
    confirmButtonColor: '#a18347',
    cancelButtonColor: '#6c757d',
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
        confirmButtonColor: '#a18347',
        cancelButtonColor: '#6c757d',
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

//-----------------------Procesar descargar reporte solicitudes de vacaciones---------------------
// var btnProcesar = document.getElementById('btnDescargConfig');
// btnProcesar.addEventListener("click", function() {
//     var fchInicio = document.getElementById('datepicker3').value;
//     var fechaParts = fchInicio.split('-');
//     var day = fechaParts[0];
//     var month = fechaParts[1];
//     var year = fechaParts[2]; 
//     fchInicio = year + "-" + month + "-" + day;

//     var fchFin = document.getElementById('datepicker4').value;
//     var fechaPartsF = fchFin.split('-');
//     var dayF = fechaPartsF[0];
//     var monthF = fechaPartsF[1];
//     var yearF = fechaPartsF[2]; 
//     fchFin = yearF + "-" + monthF + "-" + dayF;

//     var chckDsc = document.getElementById('flexCheckDefault4');
//     var flgTodos = chckDsc.checked ? 'SI' : 'NO';

//     //var codTra = '@php echo(session('codTrabajador')) @endphp';
//     var codTra = (document.getElementById('Trabajador').value != '') ? document.getElementById('Trabajador').value : '@php echo(session('codTrabajador')) @endphp';

//     $.ajax({
//         url: 'ListarSolicitudVacacionesxResponsable', 
//         method: "GET",
//         crossDomain: true,
//         dataType: 'json',
//         //data:{'codTra':'@php echo(session('codTrabajador')) @endphp','fchIni':fchInicio,'fchFin':fchFin},
//         data:{'codTra':codTra,'fchIni':fchInicio,'fchFin':fchFin},
//         success: function(respuesta){
//             console.log(respuesta['response']);
//             var data = []; 
//             respuesta['response'].forEach(element => {

//                 var fchIni = element['fch_inicio'].split('T');
//                 fchIni = formatDate(fchIni[0]);
//                 var fchFin = element['fch_fin'].split('T');
//                 fchFin = formatDate(fchFin[0]);
//                 var fchReinc = element['fch_retorno'].split('T');
//                 fchReinc = formatDate(fchReinc[0]);
//                 var fchReg = element['fch_registro_solicitud'].split('T');
//                 fchReg = formatDate(fchReg[0]);
//                 var fchRechz = element['fch_rechazado'].split('T');
//                 fchRechz = formatDate(fchRechz[0]);

//                 var firmado = (element['flg_firmado'] == 'SI') ? 'FIRMADO' : 'NO FIRMADO';
//                 var pagado = (element['flg_pagado'] == 'SI') ? 'PAGADO' : 'NO PAGADO';
//                 var fchAprob = element['fch_aprobado'].split('T');
//                 fchAprob = formatDate(fchAprob[0]);
//                 var fechaAproba = (fchAprob == '01/01/1900') ? '' : fchAprob;
//                 var solicitudAnt = (element['num_linea_origen'] != 0) ? element['cod_trabajador']+'-'+element['num_linea_origen'] : '';

//                 filaData = [
//                     element['cod_trabajador']+'-'+element['num_linea'],
//                     element['cod_trabajador'],
//                     element['dsc_trabajador'],
//                     element['dsc_area'],
//                     element['dsc_sede'],
//                     element['dsc_cargo'],
//                     fchIni,
//                     fchFin,
//                     element['cant_dia'],
//                     fchReinc,
//                     element['dsc_estado'],
//                     element['dsc_subestado_aprobacion'],
//                     element['dsc_subestado_rechazo'],
//                     element['dsc_subestado_solicitud'],
//                     firmado,
//                     pagado,
//                     element['ctd_dias_exceso'],
//                     solicitudAnt,
//                     fchReg,
//                     element['cod_trabajador_registro'],
//                     fechaAproba,
//                     element['cod_trabajador_aprobado'],
//                     fchRechz,
//                     element['cod_trabajador_rechazado']  
//                 ]
//                 data.push(filaData);
//             });
            
//             // Crear un libro de trabajo (workbook)
//             var workbook = XLSX.utils.book_new();

//             // Crear una hoja de cálculo (worksheet)
//             var worksheet = XLSX.utils.aoa_to_sheet(data);

//             // Agregar cabecera
//             var header = ['SOLICITUD','TRABAJADOR','NOMBRES Y APELLIDOS','ÁREA','SEDE','CARGO','FECHA DE INGRESO.','VAC. GENERADA','VAC. PROGRAMADA','SALDO','ESTADO ACUERDO ADEL. VAC.','GRUPO','COMISIONISTA','REQUIERE APROBACIÓN VAC.','CÓDIGO TRABAJADOR QUIEN APRUEBA VAC.','REQUIERE SUPERVISIÓN DE ASISTENCIA','REGLA'];
//             XLSX.utils.sheet_add_aoa(worksheet, [header], { origin: 'A1' });

//             // Agregar la hoja de cálculo al libro de trabajo
//             XLSX.utils.book_append_sheet(workbook, worksheet, 'Sheet1');

//             // Convertir el libro de trabajo a un archivo binario
//             var excelBuffer = XLSX.write(workbook, { bookType: 'xlsx', type: 'array' });

//             // Crear un blob a partir del archivo binario
//             var blob = new Blob([excelBuffer], { type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' });

//             // Crear una URL para el blob
//             var url = URL.createObjectURL(blob);

//             // Crear un enlace de descarga
//             var link = document.createElement('a');
//             link.href = url;
//             link.download = 'solicitudVacaciones'+codTra+'.xlsx';

//             // Simular un clic en el enlace para iniciar la descarga
//             link.click();

//         },//success
//         error(e){
//             console.log(e.message);
//         }//error    
//     });

// });

//-----------------------Procesar descargar reporte de vacaciones---------------------
var btnProcesar = document.getElementById('btnDescVacaciones');
btnProcesar.addEventListener("click", function() {
    btnProcesar.setAttribute('disabled','disabled');
    var fchInicio = document.getElementById('datepicker1').value;
    var fechaParts = fchInicio.split('-');
    var day = fechaParts[0];
    var month = fechaParts[1];
    var year = fechaParts[2];
    fchInicio = year + "-" + month + "-" + day;
    //console.log(fchInicio);
    var fchFin = document.getElementById('datepicker2').value;
    var fechaPartsF = fchFin.split('-');
    var dayF = fechaPartsF[0];
    var monthF = fechaPartsF[1];
    var yearF = fechaPartsF[2];
    fchFin = yearF + "-" + monthF + "-" + dayF;
    //console.log(fchFin);
    var codTra = '@php echo(session('codTrabajador')) @endphp';

    $.ajax({
        url: 'lista/ListarReporteVacacionesxTrabajador',
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        data:{'codTra':codTra,'fchIni':fchInicio,'fchFin':fchFin,'origen':'TRA','visualizar':'NO'},
        success: function(respuesta){
           //console.log(respuesta['response']);
            if (respuesta['response'].length > 0) {
                var header = ['CODIGO TRABAJADOR','NOMBRES Y APELLIDOS','SEDE','CARGO','AREA','FECHA INGRESO','VACACIONES GENERADAS','VACACIONES PROGRAMADAS','SALDO','ESTADO ADELANTO VACACIONES','GRUPO','TIPO COMISIONISTA','REQUIERE APROBACION','APROBADOR','CODIGO TRABAJADOR APROBADOR',' REQUIERE SUPERVISION','SUPERVISOR','CODIGO TRABAJADOR SUPERVISOR','REGLA'];
                var filasArray = [];

                respuesta['response'].forEach(element => {
                    var fch_ingreso = element['fch_ingreso'].split('T');
                    fch_ingreso = formatDate(fch_ingreso[0]);
                    var fch_ingreso2 = (fch_ingreso == '01/01/1900') ? '' : fch_ingreso;

                    filaData = [
                        element['cod_trabajador'],
                        element['dsc_trabajador'],
                        element['dsc_localidad'],
                        element['dsc_cargo'],
                        element['dsc_area'],
                        fch_ingreso2,
                        element['ctd_vacaciones_generadas'],
                        element['ctd_vacaciones_programadas'],
                        element['ctd_saldo'],
                        element['dsc_estado_adelanto_vacaciones'],
                        element['dsc_grupo'],
                        element['dsc_comisionista'],
                        element['flg_requiere_aprobacion'],
                        element['dsc_trabajador_aprobacion'],
                        element['cod_trabajador_aprobacion'],
                        element['flg_requiere_supervision'],
                        element['dsc_trabajador_supervision'],
                        element['cod_trabajador_supervision'],
                        element['dsc_regla']
                    ]
                    filasArray.push(filaData);
                });
                // Crear un libro de trabajo (workbook)
                var workbook = XLSX.utils.book_new();
                var worksheet = XLSX.utils.json_to_sheet(filasArray);

                // Crear una hoja de cálculo (worksheet)
                XLSX.utils.sheet_add_aoa(worksheet, [header], { origin: 'A1' });

                // Agregar la hoja de cálculo al libro de trabajo
                XLSX.utils.book_append_sheet(workbook, worksheet, 'Sheet1');

                // Convertir el libro de trabajo a un archivo binario
                var excelBuffer = XLSX.write(workbook, { bookType: 'xlsx', type: 'array' });

                // Crear un blob a partir del archivo binario
                var blob = new Blob([excelBuffer], { type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' });

                // Crear una URL para el blob
                var url = URL.createObjectURL(blob);

                // Crear un enlace de descarga
                var link = document.createElement('a');
                link.href = url;
                link.download = 'reporteVacaciones.xlsx';

                // Simular un clic en el enlace para iniciar la descarga
                link.click();
                btnProcesar.removeAttribute('disabled');
            }else{
                Swal.fire({
                    icon: 'warning',
                    text: 'No existen registros a retornar para el período seleccionado.',
                    confirmButtonText: 'Continuar',
                    confirmButtonColor: '#a18347',
                });
                btnProcesar.removeAttribute('disabled');
            }

        },//success
        error(e){
            console.log(e.message);
        }//error    
    });

});

//----------------------------------carga masiva--------------------------

// var btnProcesar = document.getElementById('buscarDoc3');
// btnProcesar.addEventListener("click", function() {

//     var form = document.getElementById("formCargaMasivaConfig");
//     form.addEventListener("submit", function(event) {
//         // Detener el envío del formulario
//         event.preventDefault();
//     });


//     $.ajax({
//         url: '/subir-archivo-config', 
//         method: "POST",
//         crossDomain: true,
//         dataType: 'json',
//         data:{'data': data},
//         success: function(respuesta){
//             console.log(respuesta);
//             Swal.fire({
//                 icon: 'success',
//                 text: 'Se agrego el responsable con éxito',
//                 confirmButtonText: 'Continuar',
//                 confirmButtonColor: '#a18347',
//             }).then((result) => {
//             if (result.isConfirmed) {
//                 console.log('data rechazado',data);
//             }
//             })
//         },//success
//         error(e){
//             console.log(e.message);
//             Swal.fire({
//                 icon: 'warning',
//                 text: 'Ha ocurrido un error intentelo nuevamente.',
//                 confirmButtonText: 'Continuar',
//                 confirmButtonColor: '#a18347',
//                 })
//         }//error
//     });//ajax 

// });
  
  // Escucha el evento de envío del formulario
  document.getElementById('formCargaMasivaConfig').addEventListener('submit', function(e) {
    e.preventDefault(); // Evita que el formulario se envíe de forma tradicional

    // Obtiene los datos del formulario
    var formData = new FormData(this);

    // Realiza la petición AJAX
    fetch('{{ route('subirArchivoConfiguraciones') }}', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.error) {
            // Si hay un error, muestra la alerta de error
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: data.error,
                confirmButtonColor: '#a18347',
                confirmButtonText: 'Cerrar'
            });
        } else {
            //console.log(data);
            if (data.response.dsc_observacion != "OK") {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: data.mensaje,
                    confirmButtonColor: '#a18347',
                    confirmButtonText: 'Cerrar'
                });
            }else{
                // Si no hay error, muestra la alerta de éxito
                Swal.fire({
                    icon: 'success',
                    title: 'Éxito',
                    text: 'Archivo procesado correctamente',
                    confirmButtonColor: '#a18347',
                    confirmButtonText: 'Cerrar'
                }).then((result) => {
                    // Redirige a la página deseada después de cerrar la alerta de éxito
                    if (result.isConfirmed) {
                        window.location.href = '{{ route('configXtrabajador') }}';
                    }
                });
            }
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
});

</script>
