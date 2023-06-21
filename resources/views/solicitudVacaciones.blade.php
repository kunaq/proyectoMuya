<x-layouts.app title="solicitudVacaciones" meta-description="Home meta description">

  <main id="main" class="main">
    <div class="pagetitle">
        <h1>Solicitud de vacaciones</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
            <li class="breadcrumb-item active">Vacaciones</li>
            <li class="breadcrumb-item active">Solicitud</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section tarjetas-home">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="card-title tarjeta-foco"><b><span id="num_vacaciones_pendiente"></span></b></h1>
                                <h5>Días generados de vacaciones</h5>
                                <input type="hidden" id="numVacPend" name="numVacPend">
                            </div>
                        </div>
                    </div>  
                </div>  
            </div>
        </div>

    </section>

    <div class="col-sm-10 d-sm-block d-md-none">
      <div class="card">
        <div class="card-body" style="text-align: center;">
          <h5 style="padding-top: 20px;">Recuerda que tus próximas vacaciones programadas son desde el  <b>01/06/2023</b> hasta el <b>10/06/2023</b></h5>
        </div>
      </div>  
    </div>

    <section class="section dashboard">
        <div class="row">
          <div class="col-md-10 offset-md-1 d-none d-md-block" style="height: 34rem;">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 18px; color: #155450;">Calendario de vacaciones solicitadas</h5>
                    <div class="row">
                        <div class="col-md-12 table-responsive" style="padding-left: 2rem;padding-right: 2rem;height: 28rem;">
                            <div id='calendar' style="height: 28rem;;"></div>
                        </div>
                    </div>  
                </div>
            </div>
          </div> 

          <div class="row">
            <div class="col-md-2 offset-md-2" style="margin-bottom: 1rem;">
                <button class="btn btn-success btnDorado" style="width: -webkit-fill-available;" data-bs-toggle="modal" data-bs-target="#ModalSolicitud" >Solicitar <br> vacaciones</button>
            </div>
            <div class="col-md-2 offset-md-1" style="margin-bottom: 1rem;">
                <button class="btn btn-success btnDorado btnConvenio" data-bs-toggle="modal" data-bs-target="#ModalFirmar">Firmar convenio de adelanto de vacaciones</button>
            </div>
            <div class="col-md-2 offset-md-1" style="margin-bottom: 1rem;">
                <button class="btn btn-success btnDorado" data-bs-toggle="modal" data-bs-target="#ModalReglas" style="width: -webkit-fill-available;">Reglas de solicitud <br> de vacaciones</button>
            </div>
          </div>

          <div class="col-md-10 offset-md-1 d-none d-md-block">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title ">Registro de vacaciones</h5>
                    <div class="row">
                        <div class="col-md-3" style="margin-bottom: 1rem;">
                            <div class="form-group">
                                <span class="card-title">Búsqueda pór año</span>
                            </div>
                        </div>
                        <div class="col-md-1" style="margin-bottom: 1rem;">
                            <div class="form-group">
                                <span>Inicio:</span>
                            </div>
                        </div>
                        <div class="col-md-1" style="margin-bottom: 1rem;">
                            <div class="form-group">
                                <select name="annoIni" id="annoIni" class="form-control selectForm">
                                    <option value="0" selected>2023</option>
                                    <option value="2022">2022</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-1" style="margin-bottom: 1rem;">
                            <div class="form-group">
                                <span>Fin:</span>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <select name="annoFin" id="annoFin" class="form-control selectForm">
                                    <option value="0" selected>2023</option>
                                    <option value="2022">2022</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2" style="text-align: -webkit-center">
                            <div class="form-group">
                                <h5><button class="btn btn-success btnDorado" id="buscarDoc">Buscar&nbsp;&nbsp;<span class="bi bi-search"></span></button></h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 table-responsive" style="padding-left: 2rem;padding-right: 2rem;">
                            <table class="table table-striped " style="text-align: center;">
                                <thead>
                                    <tr>
                                        <th scope="col" width="15%">Inicio</th>
                                        <th scope="col" width="15%">Término</th>
                                        <th scope="col" width="10%">Número de días</th>
                                        <th scope="col" width="14%">Estado</th>
                                        <th scope="col" width="14%">Firma</th>
                                        <th scope="col" width="14%">Pago</th>
                                        <th scope="col" width="18%">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>13/02/2023</td>
                                        <td>20/02/2023</td>
                                        <td>3</td>
                                        <td>Solicitado</td>
                                        <td>Sin firmar</td>
                                        <td>No pagado</td>
                                        <td>
                                            <button class="btn btn-success btnDorado" data-bs-toggle="tooltip" data-bs-placement="top"                 data-bs-custom-class="custom-tooltip" data-bs-title="Firmar"><span class="bi bi-vector-pen"></span></button>
                                            <button class="btn btn-success verdeMuya" data-bs-toggle="tooltip" data-bs-placement="top"                 data-bs-custom-class="custom-tooltip" data-bs-title="Descargar"><span class="bi bi-download"></span></button>
                                            <button class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top"                 data-bs-custom-class="custom-tooltip" data-bs-title="Modificar"><span class="bi bi-pencil-square"></span></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>11/02/2023</td>
                                        <td>18/02/2023</td>
                                        <td>7</td>
                                        <td>Aprobado</td>
                                        <td>Firmado</td>
                                        <td>Pagado</td>
                                        <td>
                                            <button class="btn btn-success btnDorado" disabled><span class="bi bi-vector-pen"></span></button>
                                            <button class="btn btn-success verdeMuya" data-bs-toggle="tooltip" data-bs-placement="top"                 data-bs-custom-class="custom-tooltip" data-bs-title="Descargar"><span class="bi bi-download"></span></button>
                                            <button class="btn btn-secondary" disabled><span class="bi bi-pencil-square"></span></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6/02/2023</td>
                                        <td>13/02/2023</td>
                                        <td>7</td>
                                        <td>Aprobado</td>
                                        <td>Firmado</td>
                                        <td>Pagado</td>
                                        <td>
                                            <button class="btn btn-success btnDorado" disabled><span class="bi bi-vector-pen"></span></button>
                                            <button class="btn btn-success verdeMuya" data-bs-toggle="tooltip" data-bs-placement="top"                 data-bs-custom-class="custom-tooltip" data-bs-title="Descargar"><span class="bi bi-download"></span></button>
                                            <button class="btn btn-secondary" disabled><span class="bi bi-pencil-square"></span></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>  
                </div>
            </div>
          </div> 
          
          <div class="col-sm-10 d-sm-block d-md-none">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title ">Registro de vacaciones</h5>
                    <div class="row">
                        <div class="col-md-3" style="margin-bottom: 1rem;">
                            <div class="form-group">
                                <span class="card-title">Búsqueda pór año</span>
                            </div>
                        </div>
                        <div class="col-3 col-md-6" style="margin-bottom: 1rem;">
                            <div class="form-group">
                                <span>Inicio:</span>
                            </div>
                        </div>
                        <div class="col-6" style="margin-bottom: 1rem;">
                            <div class="form-group">
                                <select name="annoIni" id="annoIni" class="form-control selectForm">
                                    <option value="0" selected>2023</option>
                                    <option value="2022">2022</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3 d-sm-block d-md-none"></div>
                        <div class="col-3 col-md-6" style="margin-bottom: 1rem;">
                            <div class="form-group">
                                <span>Fin:</span>
                            </div>
                        </div>
                        <div class="col-6" style="margin-bottom: 1rem;">
                            <div class="form-group">
                                <select name="annoFin" id="annoFin" class="form-control selectForm">
                                    <option value="0" selected>2023</option>
                                    <option value="2022">2022</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2" style="text-align: -webkit-center">
                            <div class="form-group">
                                <h5><button class="btn btn-success btnDorado" id="buscarDoc">Buscar&nbsp;&nbsp;<span class="bi bi-search"></span></button></h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 table-responsive" style="padding-left: 2rem;padding-right: 2rem;">
                            <table class="table table-striped " id="listaVacSol">
                                <tbody>
                                    <tr>
                                        <td>
                                            <b>Inicio:</b> 13/02/2023<br>
                                            <b>Término:</b> 20/02/2023 <br>
                                            <b>Número de días:</b> 3 <br>
                                            <b>Estado:</b> Solicitado<br>
                                            <b>Firma:</b> Sin Firmar <br>
                                            <b>Pago:</b> No pagado <br><br>
                                            <div style="text-align-last: center;">
                                                <button class="btn btn-success btnDorado">Firma</button>
                                                <button class="btn btn-success verdeMuya">Descarga</button>
                                                <button class="btn btn-secondary">Modifica</button>
                                            </div>   
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Inicio:</b> 11/02/2023<br>
                                            <b>Término:</b> 18/02/2023 <br>
                                            <b>Número de días:</b> 7 <br>
                                            <b>Estado:</b> Aprobado<br>
                                            <b>Firma:</b> Firmado <br>
                                            <b>Pago:</b> Pagado <br><br>
                                            <div style="text-align-last: center;">
                                                <button class="btn btn-success btnDorado" disabled>Firmar</button>
                                                <button class="btn btn-success verdeMuya">Descargar</button>
                                                <button class="btn btn-secondary" disabled>Editar</button>
                                            </div>  
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Inicio:</b> 6/02/2023<br>
                                            <b>Término:</b> 13/02/2023 <br>
                                            <b>Número de días:</b> 7 <br>
                                            <b>Estado:</b> Aprobado<br>
                                            <b>Firma:</b> Firmado <br>
                                            <b>Pago:</b> Pagado <br><br>
                                            <div style="text-align-last: center;">
                                                <button class="btn btn-success btnDorado" disabled>Firma</button>
                                                <button class="btn btn-success verdeMuya">Descarga</button>
                                                <button class="btn btn-secondary" disabled>Edita</button>
                                            </div>  
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>  
                </div>
          </div>
          </div>
        </div>  
      </section>
</main><!-- End #main -->

<x-modals.solicitudVacaciones/>

</x-layouts.app>
