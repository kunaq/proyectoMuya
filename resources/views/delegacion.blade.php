
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
          <h1>Delegación</h1>
          <nav>
              <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
              <li class="breadcrumb-item active">Configuración</li>
              <li class="breadcrumb-item active">Delegación</li>
              </ol>
          </nav>
      </div><!-- End Page Title -->
  
      <section class="section dashboard">
        <div class="row">
          <div class="col-md-10 offset-md-1">
            <div class="card">
                <div class="card-body"> 
                    <h5 >&nbsp;</h5>
                    <div class="row">
                      <div class="col-md-3">
                        <p class="titulo-tarjetaConfig" style="color: #a18347;"><b>Buscar</b></p>
                      </div>
                      <div class="col-md-8">
                        <div class="form-group">
                          <h5><b>{{session('nombreTrabajador')}}</b></h5>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-8">
                        <div id="message">
                         <p style="text-align: justify;">Delegación de permisos de aprobación de vacaciones por vacaciones y/o licencia</p>
                      </div>
                    </div>
                    <br> <br>
                    <div class="row">
                        <div class="col-md-8">
                            <div id="message">
                            <p class="titulo-tarjetaConfig" style="color: #a18347;"><b>Delegaciones:</b></p>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row" style="height: 3rem;">
                      <div class="col-10 col-md-6 offset-md-2">
                        <p>Delegar los permisos de aprobación de vacaciones</p>
                      </div>
                      <div class=" col-2 col-md-1">
                        <div class="form-group">
                            <input class="form-check-input checkVerde" type="checkbox" value="" id="delegado" >
                        </div>
                      </div>
                    </div>
                    <br><br>
                    <div class="row" style="padding-bottom: 1rem;">
                        <div class="col-12 col-md-6 offset-md-2">
                          <p>Trabajador quien aprobará sus vacaciones temporalmente</p>
                        </div>
                        <br>
                        <div class=" col-12 col-md-4">
                            <div class="form-group">
                                <select name="Colaborador" id="Colaborador" class="form-control selectForm js-example-basic-single" onchange="ObtenerColaborador(this.value)">
          
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <br><br>
                    <div class="row">
                      <div class="col-12 col-md-4 offset-md-4" style="text-align: -webkit-center;">
                        <button class="btn btn-success" id="" type="submit" style="background-color: #155450;" onclick="ActualizarDelegado()">Aceptar</button>
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
   {{-- <script src="{{asset('assets/js/delegacion.js')}}"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/es.js"></script>

<script>
  window.onload= function() {
    if ('@php echo(session('ventana5_2')) @endphp' != 'SI') {
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

    $('.js-example-basic-single').select2({
        theme: "classic"
    });

    $.ajax({
      url: 'lista/MuestraColaboradores', 
      method: "GET",
      crossDomain: true,
      dataType: 'json',
      success: function(respuesta){ 
        $("#Colaborador").append('<option value="">Seleccione...</option>');
        respuesta['response'].forEach(function(word){
          console.log(word);
          $("#Colaborador").append('<option value="'+ word['codvar'] +'">'+ word['desvar1'] +'</option>');
        });
      },//success
      error(e){
          console.log(e.message);
      }//error
    });
  }

  function ObtenerColaborador(codTra) {
    $.ajax({
      url: 'api/ObtenerColaborador', 
      method: "GET",
      crossDomain: true,
      dataType: 'json',
      data: {'codTra':codTra},
      success: function(result){
        if(result["response"]["flg_delegar_permiso"]=='SI'){
          document.getElementById("delegado").checked = true;
        }else{
          document.getElementById("delegado").checked = false;
        }
          
      }
    });
  }

  function ActualizarDelegado() {
      var flg_delegado='NO';
      var cod_trabajador='';
    
      if(document.getElementById("delegado").checked==true){
        flg_delegado='SI';
      }
      cod_trabajador=document.getElementById("Colaborador").value;

      data = {
        'cod_trabajador': cod_trabajador,
        'flg_delegar_permiso': flg_delegado
      }
           
      Swal.fire({
      title: '¿Esta seguro de modificar los permisos de este trabajador?',
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
          url: 'api/ActualizarDelegacion', 
          method: "PUT",
          crossDomain: true,
          dataType: 'json',
          data:{'data':data},
          success: function(respuesta){
            console.log(respuesta);
            Swal.fire({
              icon: 'success',
              text: 'Se guardo el permiso con éxito',
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
    })//then

  }

</script>
