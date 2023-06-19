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
                <p style="color: #7D7D7C;"><b>Milagros Josefina<br> Huaman Olivera</b></p>
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
                        <td>Milagros Josefina</td>
                        <td>Huaman Olivera</td>
                        <td>DNI-123456789</td>
                      </tr>
                      <tr>
                        <th scope="col">Fecha de nacimiento</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Correo personal</th>
                      </tr>
                      <tr>
                        <td>01/01/1990</td>
                        <td>987 654 321</td>
                        <td>milagrosHuaman@mail.com</td>
                      </tr>
                      <tr>
                        <th scope="col" colspan="3">Dirección</th>
                      </tr>
                      <tr>
                        <td colspan="3">Dirección de prueba Urb. Genérica, Calle San José,
                          casa 42, Distrito, Provincia, Departamento, País</td>
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
                        <td>15/02/2020</td>
                        <td>Consejero NI</td>
                      </tr>
                      <tr>
                        <th scope="col">Sede</th>
                        <th scope="col">Jefe a quien reporta</th>
                      </tr>
                      <tr>
                        <td>San Antonio</td>
                        <td>Maximiliano Gonzalez</td>
                      </tr> 
                      <tr>
                        <th scope="col">Equipo asignado</th>
                        <th scope="col">Correo corporativo</th>
                      </tr>
                      <tr>
                        <td>SAC - Administrativos Chiclayo</td>
                        <td>mhuaman@muya.com.pe</td>
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
                        <th scope="col">DNI</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Fecha de Nacimiento</th>
                        <th scope="col">Vínculo</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>123456789</td>
                        <td>Veronica Alexandra</td>
                        <td>Huaman Fernández</td>
                        <td>06/05/2012</td>
                        <td>Hija</td>
                      </tr>
                      <tr>
                        <td>123456789</td>
                        <td>Miguel Ángel</td>
                        <td>Huaman Fernández</td>
                        <td>09/02/2009</td>
                        <td>Hijo</td>
                      </tr>
                      <tr>
                        <td>123456789</td>
                        <td>Veronica Alexandra</td>
                        <td>Huaman Fernández</td>
                        <td>06/05/2012</td>
                        <td>Hija</td>
                      </tr>
                      <tr>
                        <td>123456789</td>
                        <td>Miguel Ángel</td>
                        <td>Huaman Fernández</td>
                        <td>09/02/2009</td>
                        <td>Hijo</td>
                      </tr>
                      <tr>
                        <td>123456789</td>
                        <td>Marco Antonio</td>
                        <td>Fernández</td>
                        <td>25/10/1988</td>
                        <td>Cónyugue</td>
                      </tr>
                    </tbody>
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
                        <td>Milagros Josefina</td>
                      </tr>
                      <tr>
                        <th scope="col">Apellidos</th>
                      </tr>
                      <tr>
                        <td>Huaman Olivera</td>
                      </tr>
                      <tr>
                        <th scope="col">Documento</th>
                      </tr>
                      <tr>
                        <td>DNI-123456789</td>
                      </tr>
                      <tr>
                        <th scope="col">Fecha de nacimiento</th>
                      </tr>
                      <tr>
                        <td>01/01/1990</td>
                      </tr>
                      <tr>
                        <th scope="col">Teléfono</th>
                      </tr>
                      <tr>
                        <td>987 654 321</td>
                      </tr>
                      <tr>
                        <th scope="col">Correo personal</th>
                      </tr>
                      <tr>
                        <td>milagrosHuaman@mail.com</td>
                      </tr>
                      <tr>
                        <th scope="col">Dirección</th>
                      </tr>
                      <tr>
                        <td >Dirección de prueba Urb. Genérica, Calle San José,
                          casa 42, Distrito, Provincia, Departamento, País</td>
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
                        <td>15/02/2020</td>
                      </tr>
                      <tr>
                        <th scope="col">Cargo Actual</th>
                      </tr>
                      <tr>
                        <td>Consejero NI</td>
                      </tr>
                      <tr>
                        <th scope="col">Sede</th>
                      </tr>
                      <tr>
                        <td>San Antonio</td>
                      </tr>
                      <tr>
                        <th scope="col">Jefe a quien reporta</th>
                      </tr>
                      <tr>
                        <td>Maximiliano Gonzalez</td>
                      </tr>
                      <tr>
                        <th scope="col">Equipo asignado</th>
                      </tr>
                      <tr>
                        <td>SAC - Administrativos Chiclayo</td>
                      </tr>
                      <tr>
                        <th scope="col">Correo corporativo</th>
                      </tr>
                      <tr>
                        <td>mhuaman@muya.com.pe</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane fade" id="nav-grupoFam-sm" role="tabpanel" aria-labelledby="nav-grupoFam-tab">
                <br>
                <div class="table-responsive" style="margin: 0.29rem;">
                  <table class="table tableDatos">
                    <tbody>
                      <tr>
                        <td>Veronica Alexandra Huaman Fernández <br>
                          <b>DNI:</b>  123456789 <br>                          
                          <b>F. nac.: </b>06/05/2012 <br>
                          <b>Vínculo:</b> Hija</td>
                      </tr>
                      <tr>
                        <td>Miguel Ángel Huaman Fernández <br>
                          <b>DNI:</b> 123456789 <br>
                          <b>F. nac.: </b>09/02/2009 <br>
                          <b>Vínculo:</b> Hijo</td>
                      </tr>
                      <tr>
                        <td>Veronica Alexandra Huaman Fernández <br>
                          <b>DNI:</b> 123456789 <br>                          
                          <b>F. nac.: </b>06/05/2012 <br>
                          <b>Vínculo:</b> Hija
                      </tr>
                      <tr>
                        <td>Miguel Ángel Huaman Fernández <br>
                          <b>DNI:</b> 123456789 <br>
                          <b>F. nac.: </b>09/02/2009 <br>
                          <b>Vínculo:</b> Hijo</td>
                      </tr>
                      <tr>
                        <td>Marco Antonio Fernández <br>
                          <b>DNI:</b>123456789 <br>
                          <b>F. nac.: </b>25/10/1988 <br>
                          <b>Vínculo:</b> Cónyugue</td>
                      </tr>
                    </tbody>
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