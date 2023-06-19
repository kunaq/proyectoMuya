<x-layouts.app title="vacacionesEmpresa" meta-description="Home meta description">

  <main id="main" class="main">
    <div class="pagetitle">
        <h1>Vacaciones de la empresa</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="home.html">Inicio</a></li>
            <li class="breadcrumb-item active">Vacaciones</li>
            <li class="breadcrumb-item active">Empresa</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">
            <div class="col-md-10 offset-md-1 d-md-block">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 18px;">Lista de colaboradores a nivel nacional</h5>
                        <div class="row">
                            <div class="col-md-12 table-responsive" style="padding-left: 2rem;padding-right: 2rem;">
                                <div class="row">
                                    <div class="col-md-12 table-responsive" style="padding-left: 2rem;padding-right: 2rem;height: 23rem;">
                                        <table class="table table-striped " id="listaColab" style="text-align: center; height: 300px;">
                                            <thead style="text-align: center;">
                                                <tr>
                                                    <th scope="col" width="20%">Colaborador</th>
                                                    <th scope="col" width="10%">Vacaciones generadas</th>
                                                    <th scope="col" width="10%">Vacaciones programadas</th>
                                                    <th scope="col" width="10%">Saldo</th>
                                                    <th scope="col" width="10%">Alerta</th>
                                                    <th scope="col" width="10%">Firma</th>
                                                    <th scope="col" width="15%">No cruzar con jefe</th>
                                                    <th scope="col" width="15%">No cruzar entre si</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Milagros Huaman A.</td>
                                                    <td>13/02/2023</td>
                                                    <td>20/02/2023</td>
                                                    <td>3</td>
                                                    <td><span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="No hay firma"></span></td>
                                                    <td>No</td>
                                                    <td>
                                                        <input class="form-check-input checkDorado" type="checkbox" value="" id="flexCheckDefault">
                                                    </td>
                                                    <td>
                                                        <input class="form-check-input checkVerde" type="checkbox" value="" id="flexCheckDefault2">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Rodrigo Montero J.</td>
                                                    <td>01/02/2023</td>
                                                    <td>08/02/2023</td>
                                                    <td>8</td>
                                                    <td><span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="No hay firma"></span></td>
                                                    <td>No</td>
                                                    <td>
                                                        <input class="form-check-input checkDorado" type="checkbox" value="" id="flexCheckDefault">
                                                    </td>
                                                    <td>
                                                        <input class="form-check-input checkVerde" type="checkbox" value="" id="flexCheckDefault2">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Adriana Jaramillo G.</td>
                                                    <td>01/02/2023</td>
                                                    <td>08/02/2023</td>
                                                    <td>5</td>
                                                    <td><span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="No hay firma"></span></td>
                                                    <td>No</td>
                                                    <td>
                                                        <input class="form-check-input checkDorado" type="checkbox" value="" id="flexCheckDefault">
                                                    </td>
                                                    <td>
                                                        <input class="form-check-input checkVerde" type="checkbox" value="" id="flexCheckDefault2">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Carlos González H.</td>
                                                    <td>01/02/2023</td>
                                                    <td>08/02/2023</td>
                                                    <td>2</td>
                                                    <td><span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="No hay firma"></span></td>
                                                    <td>No</td>
                                                    <td>
                                                        <input class="form-check-input checkDorado" type="checkbox" value="" id="flexCheckDefault">
                                                    </td>
                                                    <td>
                                                        <input class="form-check-input checkVerde" type="checkbox" value="" id="flexCheckDefault2">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>María Huaman C.</td>
                                                    <td>13/02/2023</td>
                                                    <td>20/02/2023</td>
                                                    <td>3</td>
                                                    <td><span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="No hay firma"></span></td>
                                                    <td>No</td>
                                                    <td>
                                                        <input class="form-check-input checkDorado" type="checkbox" value="" id="flexCheckDefault">
                                                    </td>
                                                    <td>
                                                        <input class="form-check-input checkVerde" type="checkbox" value="" id="flexCheckDefault2">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Ricardo Montero D.</td>
                                                    <td>01/02/2023</td>
                                                    <td>08/02/2023</td>
                                                    <td>8</td>
                                                    <td></td>
                                                    <td>Si</td>
                                                    <td>
                                                        <input class="form-check-input checkDorado" type="checkbox" value="" id="flexCheckDefault">
                                                    </td>
                                                    <td>
                                                        <input class="form-check-input checkVerde" type="checkbox" value="" id="flexCheckDefault2">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Azucena Jaramillo G.</td>
                                                    <td>01/02/2023</td>
                                                    <td>08/02/2023</td>
                                                    <td>5</td>
                                                    <td></td>
                                                    <td>Si</td>
                                                    <td>
                                                        <input class="form-check-input checkDorado" type="checkbox" value="" id="flexCheckDefault">
                                                    </td>
                                                    <td>
                                                        <input class="form-check-input checkVerde" type="checkbox" value="" id="flexCheckDefault2">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Cecilia González J.</td>
                                                    <td>01/02/2023</td>
                                                    <td>08/02/2023</td>
                                                    <td>2</td>
                                                    <td></td>
                                                    <td>Si</td>
                                                    <td>
                                                        <input class="form-check-input checkDorado" type="checkbox" value="" id="flexCheckDefault">
                                                    </td>
                                                    <td>
                                                        <input class="form-check-input checkVerde" type="checkbox" value="" id="flexCheckDefault2">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Mario Huaman L.</td>
                                                    <td>13/02/2023</td>
                                                    <td>20/02/2023</td>
                                                    <td>3</td>
                                                    <td></td>
                                                    <td>No</td>
                                                    <td>
                                                        <input class="form-check-input checkDorado" type="checkbox" value="" id="flexCheckDefault">
                                                    </td>
                                                    <td>
                                                        <input class="form-check-input checkVerde" type="checkbox" value="" id="flexCheckDefault2">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Rachel Montero M.</td>
                                                    <td>01/02/2023</td>
                                                    <td>08/02/2023</td>
                                                    <td>8</td>
                                                    <td></td>
                                                    <td>Si</td>
                                                    <td>
                                                        <input class="form-check-input checkDorado" type="checkbox" value="" id="flexCheckDefault">
                                                    </td>
                                                    <td>
                                                        <input class="form-check-input checkVerde" type="checkbox" value="" id="flexCheckDefault2">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Ándres Jaramillo H.</td>
                                                    <td>01/02/2023</td>
                                                    <td>08/02/2023</td>
                                                    <td>5</td>
                                                    <td></td>
                                                    <td>Si</td>
                                                    <td>
                                                        <input class="form-check-input checkDorado" type="checkbox" value="" id="flexCheckDefault">
                                                    </td>
                                                    <td>
                                                        <input class="form-check-input checkVerde" type="checkbox" value="" id="flexCheckDefault2">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Carolina González D.</td>
                                                    <td>01/02/2023</td>
                                                    <td>08/02/2023</td>
                                                    <td>2</td>
                                                    <td><span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;"></span></td>
                                                    <td>Si</td>
                                                    <td>
                                                        <input class="form-check-input checkDorado" type="checkbox" value="" id="flexCheckDefault">
                                                    </td>
                                                    <td>
                                                        <input class="form-check-input checkVerde" type="checkbox" value="" id="flexCheckDefault2">
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
            </div>        
        </div>  
    </section>

    <section class="section dashboard">
        <div class="row">
            <div class="col-md-10 offset-md-1 d-md-block">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 18px;">Solicitudes por aprobar</h5>
                        <div class="row">
                            <div class="col-md-12 table-responsive" style="padding-left: 2rem;padding-right: 2rem;">
                                <div class="row">
                                    <div class="col-md-12 table-responsive" style="padding-left: 0rem;padding-right: 1rem;height: 23rem;">
                                        <table class="table table-striped " id="solAprobar" style="text-align: center; height: 300px;">
                                            <thead>
                                                <tr>
                                                    <th scope="col" width="15%">Colaborador</th>
                                                    <th scope="col" width="10%">Inicio</th>
                                                    <th scope="col" width="10%">Fin</th>
                                                    <th scope="col" width="5%">Días</th>
                                                    <th scope="col" width="10%">Reincorpora</th>
                                                    <th scope="col" width="10%">Estado</th>
                                                    <th scope="col" width="10%">Alerta reglas</th>
                                                    <th scope="col" width="10%">Alerta reprog.</th>
                                                    <th scope="col" width="5%">Aceptar</th>
                                                    <th scope="col" width="5%">Rechazar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Milagros Huaman A.</td>
                                                    <td>13/02/2023</td>
                                                    <td>20/02/2023</td>
                                                    <td>3</td>
                                                    <td>28/02/2023</td>
                                                    <td>Rechazado</td>
                                                    <td><span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;"></span></td>
                                                    <td></td>
                                                    <td>
                                                        <button class="btn btn-success btnDorado" onclick="apruebaSolicitud();"><span class="bi bi-check-circle"></span></button>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-danger" onclick="rechazaSolicitud();"><span class="bi bi-x-circle"></span></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Rodrigo Montero J.</td>
                                                    <td>01/02/2023</td>
                                                    <td>08/02/2023</td>
                                                    <td>8</td>
                                                    <td>08/02/2023</td>
                                                    <td>Aprobado por el jefe</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <button class="btn btn-success btnDorado" onclick="apruebaSolicitud();"><span class="bi bi-check-circle"></span></button>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-danger" onclick="rechazaSolicitud();"><span class="bi bi-x-circle"></span></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Adriana Jaramillo G.</td>
                                                    <td>01/02/2023</td>
                                                    <td>08/02/2023</td>
                                                    <td>5</td>
                                                    <td>12/02/2023</td>
                                                    <td></td>
                                                    <td><span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;"></span></td>
                                                    <td><span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;"></span></td>
                                                    <td>
                                                        <button class="btn btn-success btnDorado" onclick="apruebaSolicitud();"><span class="bi bi-check-circle"></span></button>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-danger" onclick="rechazaSolicitud();"><span class="bi bi-x-circle"></span></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Carlos González H.</td>
                                                    <td>01/02/2023</td>
                                                    <td>08/02/2023</td>
                                                    <td>2</td>
                                                    <td>12/02/2023</td>
                                                    <td></td>
                                                    <td></span></td>
                                                    <td><span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;"></span></td>
                                                    <td>
                                                        <button class="btn btn-success btnDorado" onclick="apruebaSolicitud();"><span class="bi bi-check-circle"></span></button>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-danger" onclick="rechazaSolicitud();"><span class="bi bi-x-circle"></span></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>María Huaman C.</td>
                                                    <td>13/02/2023</td>
                                                    <td>20/02/2023</td>
                                                    <td>3</td>
                                                    <td>12/02/2023</td>
                                                    <td></td>
                                                    <td><span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;"></span></td>
                                                    <td><span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;"></span></td>
                                                    <td>
                                                        <button class="btn btn-success btnDorado" onclick="apruebaSolicitud();"><span class="bi bi-check-circle"></span></button>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-danger" onclick="rechazaSolicitud();"><span class="bi bi-x-circle"></span></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Ricardo Montero D.</td>
                                                    <td>01/02/2023</td>
                                                    <td>08/02/2023</td>
                                                    <td>8</td>
                                                    <td>08/02/2023</td>
                                                    <td>Aprobado por el jefe</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <button class="btn btn-success btnDorado" onclick="apruebaSolicitud();"><span class="bi bi-check-circle"></span></button>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-danger" onclick="rechazaSolicitud();"><span class="bi bi-x-circle"></span></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Azucena Jaramillo G.</td>
                                                    <td>01/02/2023</td>
                                                    <td>08/02/2023</td>
                                                    <td>5</td>
                                                    <td>28/02/2023</td>
                                                    <td>Rechazado</td>
                                                    <td><span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;"></span></td>
                                                    <td></td>
                                                    <td>
                                                        <button class="btn btn-success btnDorado" onclick="apruebaSolicitud();"><span class="bi bi-check-circle"></span></button>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-danger" onclick="rechazaSolicitud();"><span class="bi bi-x-circle"></span></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Cecilia González J.</td>
                                                    <td>01/02/2023</td>
                                                    <td>08/02/2023</td>
                                                    <td>2</td>
                                                    <td>08/02/2023</td>
                                                    <td>Aprobado por el jefe</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <button class="btn btn-success btnDorado" onclick="apruebaSolicitud();"><span class="bi bi-check-circle"></span></button>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-danger" onclick="rechazaSolicitud();"><span class="bi bi-x-circle"></span></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Mario Huaman L.</td>
                                                    <td>13/02/2023</td>
                                                    <td>20/02/2023</td>
                                                    <td>3</td>
                                                    <td>08/02/2023</td>
                                                    <td>Aprobado por el jefe</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <button class="btn btn-success btnDorado" onclick="apruebaSolicitud();"><span class="bi bi-check-circle"></span></button>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-danger" onclick="rechazaSolicitud();"><span class="bi bi-x-circle"></span></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Rachel Montero M.</td>
                                                    <td>01/02/2023</td>
                                                    <td>08/02/2023</td>
                                                    <td>8</td>
                                                    <td>08/02/2023</td>
                                                    <td>Aprobado por el jefe</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <button class="btn btn-success btnDorado" onclick="apruebaSolicitud();"><span class="bi bi-check-circle"></span></button>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-danger" onclick="rechazaSolicitud();"><span class="bi bi-x-circle"></span></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Ándres Jaramillo H.</td>
                                                    <td>01/02/2023</td>
                                                    <td>08/02/2023</td>
                                                    <td>5</td>
                                                    <td>28/02/2023</td>
                                                    <td>Rechazado</td>
                                                    <td><span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;"></span></td>
                                                    <td></td>
                                                    <td>
                                                        <button class="btn btn-success btnDorado" onclick="apruebaSolicitud();"><span class="bi bi-check-circle"></span></button>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-danger" onclick="rechazaSolicitud();"><span class="bi bi-x-circle"></span></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>C. González</td>
                                                    <td>01/02/2023</td>
                                                    <td>08/02/2023</td>
                                                    <td>2</td>
                                                    <td>12/02/2023</td>
                                                    <td></td>
                                                    <td><span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;"></span></td>
                                                    <td><span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;"></span></td>
                                                    <td>
                                                        <button class="btn btn-success btnDorado" onclick="apruebaSolicitud();"><span class="bi bi-check-circle"></span></button>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-danger" onclick="rechazaSolicitud();"><span class="bi bi-x-circle"></span></button>
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
            </div>        
          
        </div>  
    </section>

      <section class="section dashboard">
        <div class="row">
          <div class="col-md-10 offset-md-1">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 28px;">Indicadores de gestión</h5>
                    <div class="row">
                        <div class="col-md-4" style="margin-bottom: 1rem;">
                            <div class="card">
                                <div class="card-body">
                                    <h5 style="font-size: 17px; text-align: center; padding-top: 1rem;">Promedio de días pendientes de vacaciones del equipo <b>hasta fin de año</b></h5>
                                    <hr>
                                    <h1 class="tarjeta-vaca-foco"><b>259.3</b></h1>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6" style="margin-bottom: 1rem;">
                                            <div class="form-group">
                                                <select name="annoIni" id="annoIni" class="form-control selectForm">
                                                    <option value="0" selected disabled>Sede</option>
                                                    <option value="todos">Todos</option>
                                                    <option value="004">Cañete</option>
                                                    <option value="004">Chiclayo</option>
                                                    <option value="004">Chimbote</option>
                                                    <option value="001">Corona del Fraile</option>
                                                    <option value="002">Cusco I</option>
                                                    <option value="003">Cusco II</option>
                                                    <option value="004">Lambayeque</option>
                                                    <option value="002">Lima</option>
                                                    <option value="003">Pisco</option>
                                                    <option value="004">San Antonio</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="annoFin" id="annoFin" class="form-control selectForm">
                                                    <option value="0" selected disabled>Área</option>
                                                    <option value="todos">Todos</option>
                                                    <option value="A0001">Administración y finanzas</option>
                                                    <option value="A0002">Comercial</option>
                                                    <option value="A0003">Gerencia de atención al cliente</option>
                                                    <option value="A0004">Gerencia general</option>
                                                    <option value="A0005">Operaciones</option>
                                                    <option value="A0004">Parque</option>
                                                    <option value="A0005">SAC</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" style="margin-bottom: 1rem;">
                            <div class="card">
                                <div class="card-body">
                                    <h5 style="font-size: 17px;text-align: center; padding-top: 1rem;">Promedio de días pendientes de vacaciones del equipo <b>a la fecha de hoy</b></h5>
                                    <hr>
                                    <h1 class="tarjeta-vaca-foco"><b>201.2</b></h1>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6" style="margin-bottom: 1rem;">
                                            <div class="form-group">
                                                <select name="annoIni" id="annoIni" class="form-control selectForm">
                                                    <option value="0" selected disabled>Sede</option>
                                                    <option value="todos">Todos</option>
                                                    <option value="004">Cañete</option>
                                                    <option value="004">Chiclayo</option>
                                                    <option value="004">Chimbote</option>
                                                    <option value="001">Corona del Fraile</option>
                                                    <option value="002">Cusco I</option>
                                                    <option value="003">Cusco II</option>
                                                    <option value="004">Lambayeque</option>
                                                    <option value="002">Lima</option>
                                                    <option value="003">Pisco</option>
                                                    <option value="004">San Antonio</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="annoFin" id="annoFin" class="form-control selectForm">
                                                    <option value="0" selected disabled>Área</option>
                                                    <option value="todos">Todos</option>
                                                    <option value="A0001">Administración y finanzas</option>
                                                    <option value="A0002">Comercial</option>
                                                    <option value="A0003">Gerencia de atención al cliente</option>
                                                    <option value="A0004">Gerencia general</option>
                                                    <option value="A0005">Operaciones</option>
                                                    <option value="A0004">Parque</option>
                                                    <option value="A0005">SAC</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" style="margin-bottom: 1rem;">
                            <div class="card">
                                <div class="card-body">
                                    <h5 style="text-align: center; padding-top: 1rem;">Número de reprogramaciones realizadas en el año del equipo</h5>
                                    <hr>
                                    <h1 class="tarjeta-vaca-foco"><b>23</b></h1>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6" style="margin-bottom: 1rem;">
                                            <div class="form-group">
                                                <select name="annoIni" id="annoIni" class="form-control selectForm">
                                                    <option value="0" selected disabled>Sede</option>
                                                    <option value="todos">Todos</option>
                                                    <option value="004">Cañete</option>
                                                    <option value="004">Chiclayo</option>
                                                    <option value="004">Chimbote</option>
                                                    <option value="001">Corona del Fraile</option>
                                                    <option value="002">Cusco I</option>
                                                    <option value="003">Cusco II</option>
                                                    <option value="004">Lambayeque</option>
                                                    <option value="002">Lima</option>
                                                    <option value="003">Pisco</option>
                                                    <option value="004">San Antonio</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="annoFin" id="annoFin" class="form-control selectForm">
                                                    <option value="0" selected disabled>Área</option>
                                                    <option value="todos">Todos</option>
                                                    <option value="A0001">Administración y finanzas</option>
                                                    <option value="A0002">Comercial</option>
                                                    <option value="A0003">Gerencia de atención al cliente</option>
                                                    <option value="A0004">Gerencia general</option>
                                                    <option value="A0005">Operaciones</option>
                                                    <option value="A0004">Parque</option>
                                                    <option value="A0005">SAC</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                        <h5 class="card-title" style="font-size: 28px;">Reporte de vacaciones</h5>
                        <div class="row">
                            <div class="col-3 col-md-1" style="margin-bottom: 1rem;">
                                <div class="form-group">
                                    <span>Inicio:</span>
                                </div>
                            </div>
                            <div class="col-9 col-md-2" style="margin-bottom: 1rem;">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="datepicker1">
                                </div>
                            </div>
                            <div class="col-3 col-md-1" style="margin-bottom: 1rem;">
                                <div class="form-group">
                                    <span>Fin:</span>
                                </div>
                            </div>
                            <div class="col-9 col-md-2" style="margin-bottom: 1rem;">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="datepicker2">
                                </div>
                            </div>
                            <div class="col-md-2" style="text-align: -webkit-center">
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
                        <h5 class="card-title" style="font-size: 28px;">Descargar solicitudes de vacaciones</h5>
                        <div class="row">
                            <div class="col-3 col-md-1" style="margin-bottom: 1rem;">
                                <div class="form-group">
                                    <span>Inicio:</span>
                                </div>
                            </div>
                            <div class="col-9 col-md-2" style="margin-bottom: 1rem;">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="datepicker3">
                                </div>
                            </div>
                            <div class="col-3 col-md-1" style="margin-bottom: 1rem;">
                                <div class="form-group">
                                    <span>Fin:</span>
                                </div>
                            </div>
                            <div class="col-9 col-md-2" style="margin-bottom: 1rem;">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="datepicker4">
                                </div>
                            </div>
                            <div class="col-md-2" style="text-align: -webkit-center">
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
                        <h5 class="card-title" style="font-size: 28px;">Cargar vacaciones</h5>
                        <div class="row">
                            <div class="col-md-2" style="text-align: -webkit-center">
                                <div class="form-group">
                                    <h5><button class="btn btn-success btnDorado" id="buscarDoc">Cargar</button></h5>
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

    <section class="section dashboard">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 28px;">Reglas de solicitud de vacaciones</h5>
                        <div class="row">
                            <div class="col-md-2 offset-md-3" style="text-align: -webkit-center">
                                <div class="form-group">
                                    <h5><button class="btn btn-success btnDorado" data-bs-toggle="modal" data-bs-target="#ModalReglas" style="width: -webkit-fill-available;">Ver reglas</button></h5>
                                </div>
                            </div>  
                            <div class="col-md-2 offset-md-1" style="text-align: -webkit-center">
                                <div class="form-group">
                                    <h5><button class="btn btn-success btnDorado" data-bs-toggle="modal" data-bs-target="#ModalModifReglas" style="width: -webkit-fill-available;">Modificar reglas</button></h5>
                                </div>
                            </div>                      
                        </div>
                    </div>
                </div>
            </div>  
        </div>    
    </section>

  </main><!-- End #main -->

<x-modals.vacacionesEmpresa/>

</x-layouts.app>
