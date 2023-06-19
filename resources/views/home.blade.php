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
                                <h1 class="card-title tarjeta-foco"><b>MARZO</b></h1>
                                <h5><button class="btn btn-success btnDorado">Descargar Boleta</button></h5>
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="card-title tarjeta-foco"><b>25</b></h1>
                                <h5>Días generados de vacaciones</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="card-title tarjeta-foco"><b>15 - ABRIL</b></h1>
                                <h5 style="margin-bottom: 0;">Tus próximas vacaciones inician</h5>
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
                                        <td>Firmar documento "Convenio de adelanto de vacaciones".</td>
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
                                        <td>Aceptar/Rechazar una solicitud de vacaciones</td>
                                        <td><button class="btn btn-success btnTabHome verdeMuya">Ir</button></td>
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
                  <h5 class="card-title" style="font-size: 28px;">Tus últimos mensajes</h5>
                  <div class="row">
                      <div class="col-md-12 table-responsive" style="padding-left: 2rem;padding-right: 2rem;">
                          <table class="table table-striped ">
                              <tbody>
                                  <tr>
                                      <td>Firmar documento "Acuerdo de adelanto de vacaciones". <br>  <b>F. notific:</b> 13/02/2023<br> <b>F. límite:</b> 20/02/2023 <br> <b>Solicitante:</b> M. Huaman <br> <button class="btn btn-success btnTabHome btnDorado">Firmar</button></td>
                                  </tr>
                                  <tr>
                                      <td>Firmar documento "Solicitud de vacaciones". <br> <b>F. notific:</b> 11/02/2023<br> <b>F. límite:</b> 18/02/2023 <br> <b>Solicitante:</b> M. Huaman<br> <button class="btn btn-success btnTabHome btnDorado">Firmar</button></td>
                                  </tr>
                                  <tr>
                                      <td>Aceptar/Rechazar una solicitud de vacaciones <br>  <b>F. notific:</b> 11/02/2023<br><b>F. límite:</b> 18/02/2023 <br> <b>Solicitante:</b> M. Huaman <br> <button class="btn btn-success btnTabHome verdeMuya">Ir</button></td>
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

</x-layouts.app>
