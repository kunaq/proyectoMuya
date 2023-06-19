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
                                        <th scope="col" width="15%">F. notific.</th>
                                        <th scope="col" width="12%">F. límite</th>
                                        <th scope="col" width="18%">Solicitante</th>
                                        <th scope="col" colspan="2" width="55%">Actividad</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>6/02/2023</td>
                                        <td>13/02/2023</td>
                                        <td>M. Huaman</td>
                                        <td>Está a 5 días de iniciar sus vacaciones, debe firmar la "Solicitud de vacaciones".</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>6/02/2023</td>
                                        <td>13/02/2023</td>
                                        <td>M. Huaman</td>
                                        <td>Falta correo corporativo en el sistema de planillas.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>13/02/2023</td>
                                        <td>20/02/2023</td>
                                        <td>M. Huaman</td>
                                        <td>Firmar documento "Acuerdo de adelanto de vacaciones".</td>
                                        <td><button class="btn btn-success btnTabHome btnDorado">Firmar</button></td>
                                    </tr>
                                    <tr>
                                        <td>11/02/2023</td>
                                        <td>18/02/2023</td>
                                        <td>M. Huaman</td>
                                        <td>Firmar documento "Solicitud de vacaciones".</td>
                                        <td><button class="btn btn-success btnTabHome btnDorado">Firmar</button></td>
                                    </tr>
                                    <tr>
                                        <td>6/02/2023</td>
                                        <td>13/02/2023</td>
                                        <td>M. Huaman</td>
                                        <td>Aceptar/Rechazar una solicitud de vacaciones.</td>
                                        <td><button class="btn btn-success btnTabHome verdeMuya">Ir</button></td>
                                    </tr>
                                    <tr>
                                        <td>6/02/2023</td>
                                        <td>13/02/2023</td>
                                        <td>M. Huaman</td>
                                        <td>No firma el "Acuerdo de adelanto de vacaciones".</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>6/02/2023</td>
                                        <td>13/02/2023</td>
                                        <td>M. Huaman</td>
                                        <td>Está a 5 días de iniciar sus vacaciones, debe firmar la "Solicitud de vacaciones".</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>6/02/2023</td>
                                        <td>13/02/2023</td>
                                        <td>M. Huaman</td>
                                        <td>Falta correo corporativo en el sistema de planillas.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>6/02/2023</td>
                                        <td>13/02/2023</td>
                                        <td>M. Huaman</td>
                                        <td>La solicitud de vacaciones ha sido cancelada por falta de firma de la "Solicitud de vacaciones".</td>
                                        <td></td>
                                    </tr>
                                </tbody>
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
                                        <th scope="col" width="15%">F. notific.</th>
                                        <th scope="col" width="12%">F. límite</th>
                                        <th scope="col" width="18%">Solicitante</th>
                                        <th scope="col" colspan="2" width="55%">Actividad</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>13/02/2023</td>
                                        <td>20/02/2023</td>
                                        <td>M. Huaman</td>
                                        <td>Firmar documento "Acuerdo de adelanto de vacaciones".</td>
                                        <td><button class="btn btn-success btnTabHome btnDorado">Firmar</button></td>
                                    </tr>
                                    <tr>
                                        <td>11/02/2023</td>
                                        <td>18/02/2023</td>
                                        <td>M. Huaman</td>
                                        <td>Firmar documento "Solicitud de vacaciones".</td>
                                        <td><button class="btn btn-success btnTabHome btnDorado">Firmar</button></td>
                                    </tr>
                                    <tr>
                                        <td>6/02/2023</td>
                                        <td>13/02/2023</td>
                                        <td>M. Huaman</td>
                                        <td>Aceptar/Rechazar una solicitud de vacaciones.</td>
                                        <td><button class="btn btn-success btnTabHome verdeMuya">Ir</button></td>
                                    </tr>
                                    <tr>
                                        <td>6/02/2023</td>
                                        <td>13/02/2023</td>
                                        <td>M. Huaman</td>
                                        <td>No firma el "Acuerdo de adelanto de vacaciones".</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>6/02/2023</td>
                                        <td>13/02/2023</td>
                                        <td>M. Huaman</td>
                                        <td>Está a 5 días de iniciar sus vacaciones, debe firmar la "Solicitud de vacaciones".</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>6/02/2023</td>
                                        <td>13/02/2023</td>
                                        <td>M. Huaman</td>
                                        <td>Falta correo corporativo en el sistema de planillas.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>6/02/2023</td>
                                        <td>13/02/2023</td>
                                        <td>M. Huaman</td>
                                        <td>La solicitud de vacaciones ha sido cancelada por falta de firma de la "Solicitud de vacaciones".</td>
                                        <td><button class="btn btn-secondary btnTabHome">Ocultar</button></td>
                                    </tr>
                                </tbody>
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
                                        <th scope="col" width="15%">F. notific.</th>
                                        <th scope="col" width="12%">F. límite</th>
                                        <th scope="col" width="18%">Solicitante</th>
                                        <th scope="col" colspan="2" width="55%">Actividad</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>13/02/2023</td>
                                        <td>20/02/2023</td>
                                        <td>M. Huaman</td>
                                        <td>Firmar documento "Acuerdo de adelanto de vacaciones".</td>
                                        <td><button class="btn btn-success btnTabHome btnDorado">Firmar</button></td>
                                    </tr>
                                    <tr>
                                        <td>11/02/2023</td>
                                        <td>18/02/2023</td>
                                        <td>M. Huaman</td>
                                        <td>Firmar documento "Solicitud de vacaciones".</td>
                                        <td><button class="btn btn-success btnTabHome btnDorado">Firmar</button></td>
                                    </tr>
                                    <tr>
                                        <td>6/02/2023</td>
                                        <td>13/02/2023</td>
                                        <td>M. Huaman</td>
                                        <td>Aceptar/Rechazar una solicitud de vacaciones.</td>
                                        <td><button class="btn btn-success btnTabHome verdeMuya">Ir</button></td>
                                    </tr>
                                    <tr>
                                        <td>6/02/2023</td>
                                        <td>13/02/2023</td>
                                        <td>M. Huaman</td>
                                        <td>No firma el "Acuerdo de adelanto de vacaciones".</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>6/02/2023</td>
                                        <td>13/02/2023</td>
                                        <td>M. Huaman</td>
                                        <td>Está a 5 días de iniciar sus vacaciones, debe firmar la "Solicitud de vacaciones".</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>6/02/2023</td>
                                        <td>13/02/2023</td>
                                        <td>M. Huaman</td>
                                        <td>Aceptar/Rechazar una solicitud de vacaciones.</td>
                                        <td><button class="btn btn-success btnTabHome verdeMuya">Ir</button></td>
                                    </tr>
                                    <tr>
                                        <td>6/02/2023</td>
                                        <td>13/02/2023</td>
                                        <td>M. Huaman</td>
                                        <td>No firma el "Acuerdo de adelanto de vacaciones".</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>6/02/2023</td>
                                        <td>13/02/2023</td>
                                        <td>M. Huaman</td>
                                        <td>Está a 5 días de iniciar sus vacaciones, debe firmar la "Solicitud de vacaciones".</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>6/02/2023</td>
                                        <td>13/02/2023</td>
                                        <td>M. Huaman</td>
                                        <td>Falta correo corporativo en el sistema de planillas.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>6/02/2023</td>
                                        <td>13/02/2023</td>
                                        <td>M. Huaman</td>
                                        <td>La solicitud de vacaciones ha sido cancelada por falta de firma de la "Solicitud de vacaciones".</td>
                                        <td><button class="btn btn-secondary btnTabHome">Ocultar</button></td>
                                    </tr>
                                </tbody>
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
                                <tbody>
                                  <tr>
                                    <td>Está a 5 días de iniciar sus vacaciones, debe firmar la "Solicitud de vacaciones".<br>  <b>F. notific:</b> 6/02/2023<br> <b>F. límite:</b> 13/02/2023 <br> <b>Solicitante:</b> M. Huaman <br></td>
                                  </tr>
                                  <tr>
                                    <td>Falta correo corporativo en el sistema de planillas. <br>  <b>F. notific:</b> 6/02/2023<br><b>F. límite:</b> 13/02/2023 <br> <b>Solicitante:</b> M. Huaman <br></td>
                                  </tr>
                                  <tr>
                                    <td>Firmar documento "Acuerdo de adelanto de vacaciones". <br> <b>F. notific:</b> 13/02/2023<br> <b>F. límite:</b> 20/02/2023 <br> <b>Solicitante:</b> M. Huaman<br> <button class="btn btn-success btnTabHome btnDorado">Firmar</button></td>
                                  </tr>
                                  <tr>
                                    <td>Firmar documento "Solicitud de vacaciones".<br>  <b>F. notific:</b> 11/02/2023<br> <b>F. límite:</b> 18/02/2023 <br> <b>Solicitante:</b> M. Huaman <br><button class="btn btn-success btnTabHome btnDorado">Firmar</button></td>
                                  </tr>
                                  <tr>
                                    <td>Aceptar/Rechazar una solicitud de vacaciones. <br>  <b>F. notific:</b> 6/02/2023<br><b>F. límite:</b> 13/02/2023 <br> <b>Solicitante:</b> M. Huaman <br><button class="btn btn-success btnTabHome verdeMuya">Ir</button></td>
                                  </tr>
                                  <tr>
                                    <td>No firma el "Acuerdo de adelanto de vacaciones". <br> <b>F. notific:</b> 6/02/2023<br> <b>F. límite:</b> 13/02/2023 <br> <b>Solicitante:</b> M. Huaman<br> </td>
                                  </tr>
                                  <tr>
                                    <td>La solicitud de vacaciones ha sido cancelada por falta de firma de la "Solicitud de vacaciones". <br>  <b>F. notific:</b> 6/02/2023<br><b>F. límite:</b> 13/02/2023 <br> <b>Solicitante:</b> M. Huaman <br></td>
                                  </tr>
                                </tbody>
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
                                <tbody>
                                  <tr>
                                    <td>Firmar documento "Acuerdo de adelanto de vacaciones". <br> <b>F. notific:</b> 13/02/2023<br> <b>F. límite:</b> 20/02/2023 <br> <b>Solicitante:</b> M. Huaman<br> <button class="btn btn-success btnTabHome btnDorado">Firmar</button></td>
                                  </tr>
                                  <tr>
                                    <td>Firmar documento "Solicitud de vacaciones".<br>  <b>F. notific:</b> 11/02/2023<br> <b>F. límite:</b> 18/02/2023 <br> <b>Solicitante:</b> M. Huaman <br><button class="btn btn-success btnTabHome btnDorado">Firmar</button></td>
                                  </tr>
                                  <tr>
                                    <td>Aceptar/Rechazar una solicitud de vacaciones. <br>  <b>F. notific:</b> 6/02/2023<br><b>F. límite:</b> 13/02/2023 <br> <b>Solicitante:</b> M. Huaman <br><button class="btn btn-success btnTabHome verdeMuya">Ir</button></td>
                                  </tr>
                                  <tr>
                                    <td>No firma el "Acuerdo de adelanto de vacaciones". <br> <b>F. notific:</b> 6/02/2023<br> <b>F. límite:</b> 13/02/2023 <br> <b>Solicitante:</b> M. Huaman<br> </td>
                                  </tr>
                                  <tr>
                                    <td>Está a 5 días de iniciar sus vacaciones, debe firmar la "Solicitud de vacaciones".<br>  <b>F. notific:</b> 6/02/2023<br> <b>F. límite:</b> 13/02/2023 <br> <b>Solicitante:</b> M. Huaman <br></td>
                                  </tr>
                                  <tr>
                                    <td>Falta correo corporativo en el sistema de planillas. <br>  <b>F. notific:</b> 6/02/2023<br><b>F. límite:</b> 13/02/2023 <br> <b>Solicitante:</b> M. Huaman <br></td>
                                  </tr>
                                  
                                  <tr>
                                    <td>La solicitud de vacaciones ha sido cancelada por falta de firma de la "Solicitud de vacaciones". <br>  <b>F. notific:</b> 6/02/2023<br><b>F. límite:</b> 13/02/2023 <br> <b>Solicitante:</b> M. Huaman <br><button class="btn btn-secondary btnTabHome">Ocultar</button></td>
                                  </tr>                       
                                </tbody>
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
                                <tbody>
                                  <tr>
                                    <td>Firmar documento "Acuerdo de adelanto de vacaciones". <br> <b>F. notific:</b> 13/02/2023<br> <b>F. límite:</b> 20/02/2023 <br> <b>Solicitante:</b> M. Huaman<br> <button class="btn btn-success btnTabHome btnDorado">Firmar</button></td>
                                  </tr>
                                  <tr>
                                    <td>Firmar documento "Solicitud de vacaciones".<br>  <b>F. notific:</b> 11/02/2023<br> <b>F. límite:</b> 18/02/2023 <br> <b>Solicitante:</b> M. Huaman <br><button class="btn btn-success btnTabHome btnDorado">Firmar</button></td>
                                  </tr>
                                  <tr>
                                    <td>Aceptar/Rechazar una solicitud de vacaciones. <br>  <b>F. notific:</b> 6/02/2023<br><b>F. límite:</b> 13/02/2023 <br> <b>Solicitante:</b> M. Huaman <br><button class="btn btn-success btnTabHome verdeMuya">Ir</button></td>
                                  </tr>
                                  <tr>
                                    <td>No firma el "Acuerdo de adelanto de vacaciones". <br> <b>F. notific:</b> 6/02/2023<br> <b>F. límite:</b> 13/02/2023 <br> <b>Solicitante:</b> M. Huaman<br> </td>
                                  </tr>
                                  <tr>
                                    <td>Está a 5 días de iniciar sus vacaciones, debe firmar la "Solicitud de vacaciones".<br>  <b>F. notific:</b> 6/02/2023<br> <b>F. límite:</b> 13/02/2023 <br> <b>Solicitante:</b> M. Huaman <br></td>
                                  </tr>
                                  <tr>
                                    <td>Aceptar/Rechazar una solicitud de vacaciones. <br>  <b>F. notific:</b> 6/02/2023<br><b>F. límite:</b> 13/02/2023 <br> <b>Solicitante:</b> M. Huaman <br><button class="btn btn-success btnTabHome verdeMuya">Ir</button></td>
                                  </tr>
                                  <tr>
                                    <td>No firma el "Acuerdo de adelanto de vacaciones". <br> <b>F. notific:</b> 6/02/2023<br> <b>F. límite:</b> 13/02/2023 <br> <b>Solicitante:</b> M. Huaman<br> </td>
                                  </tr>
                                  <tr>
                                    <td>Está a 5 días de iniciar sus vacaciones, debe firmar la "Solicitud de vacaciones".<br>  <b>F. notific:</b> 6/02/2023<br> <b>F. límite:</b> 13/02/2023 <br> <b>Solicitante:</b> M. Huaman <br></td>
                                  </tr>
                                  <tr>
                                    <td>La solicitud de vacaciones ha sido cancelada por falta de firma de la "Solicitud de vacaciones". <br>  <b>F. notific:</b> 6/02/2023<br><b>F. límite:</b> 13/02/2023 <br> <b>Solicitante:</b> M. Huaman <br><button class="btn btn-secondary btnTabHome">Ocultar</button></td>
                                  </tr> 
                                  <tr>
                                    <td>Falta correo corporativo en el sistema de planillas.<br>  <b>F. notific:</b> 1/02/2023<br> <b>F. límite:</b> 10/02/2023 <br> <b>Solicitante:</b> M. Huaman <br></td>
                                  </tr>
                                </tbody>
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