<x-layouts.app title="aprobacionVacaciones" meta-description="aprobacion de vacaciones meta description">

<main id="main" class="main">
<div class="pagetitle">
    <h1>Aprobación de vacaciones</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
        <li class="breadcrumb-item active">Vacaciones</li>
        <li class="breadcrumb-item active">Aprobación</li>
        </ol>
    </nav>
</div>

{{-- Lista de colaboradores --}}
<section class="section dashboard d-none d-md-block">
    <div class="row">
        <div class="col-md-10 offset-md-1 d-md-block">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 18px;">Lista de colaboradores</h5>
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

{{-- Solicitudes por aprobar --}}
<section class="section dashboard d-none d-md-block">
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
                                                <td>08/02/2023</td>
                                                <td>Aprobado por el jefe</td>
                                                <td></td>
                                                <td></td>
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
                                                <td>12/02/2023</td>
                                                <td></td>
                                                <td><span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;"></span></td>
                                                <td><span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;"></span></td>
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
                                                <td>12/02/2023</td>
                                                <td></td>
                                                <td></span></td>
                                                <td><span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;"></span></td>
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
                                                <td>12/02/2023</td>
                                                <td></td>
                                                <td><span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;"></span></td>
                                                <td><span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;"></span></td>
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
                                                <td>08/02/2023</td>
                                                <td>Aprobado por el jefe</td>
                                                <td></td>
                                                <td></td>
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
                                                <td>28/02/2023</td>
                                                <td>Rechazado</td>
                                                <td><span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;"></span></td>
                                                <td></td>
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
                                                <td>08/02/2023</td>
                                                <td>Aprobado por el jefe</td>
                                                <td></td>
                                                <td></td>
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
                                                <td>08/02/2023</td>
                                                <td>Aprobado por el jefe</td>
                                                <td></td>
                                                <td></td>
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
                                                <td>08/02/2023</td>
                                                <td>Aprobado por el jefe</td>
                                                <td></td>
                                                <td></td>
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
                                                <td>28/02/2023</td>
                                                <td>Rechazado</td>
                                                <td><span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;"></span></td>
                                                <td></td>
                                                <td>
                                                    <input class="form-check-input checkDorado" type="checkbox" value="" id="flexCheckDefault">
                                                </td>
                                                <td>
                                                    <input class="form-check-input checkVerde" type="checkbox" value="" id="flexCheckDefault2">
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

<section class="section dashboard d-sm-block d-md-none">
    <div class="row">
        <div class="col-md-10 offset-md-1 d-md-block">
            <div class="card">
                <div class="card-body">
                    <h5 class="tarjeta-vaca-foco" style="font-size: 18px; padding-top: 1rem;;">Para acceder a todas las opciones por favor ingresar desde su ordenador.</h5>  
                </div>
            </div>
        </div>        
    </div>  
</section>

<section class="section dashboard d-sm-block d-md-none">
    <div class="row">
        <div class="col-md-10 offset-md-1 d-md-block">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 18px;">Solicitudes por aprobar</h5>
                    <div class="row">
                        <div class="col-md-12 table-responsive" style="padding-left: 2rem;padding-right: 2rem;">
                            <div class="row">
                                <div class="col-md-12 table-responsive" style="padding-left: 0rem;padding-right: 1rem;height: 23rem;">
                                    <table class="table table-striped " id="solAprobarMobil" style="text-align: center; height: 300px;">
                                        <thead>
                                            <tr>
                                                <th scope="col" width="15%">Colaborador</th>
                                                <th scope="col" width="10%">Alerta reglas</th>
                                                <th scope="col" width="10%">Alerta reprog.</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Milagros Huaman A.</td>
                                                <td><span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;"></span></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Adriana Jaramillo G.</td>
                                                <td><span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;"></span></td>
                                                <td><span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;"></span></td>
                                            </tr>
                                            <tr>
                                                <td>Carlos González H.</td>
                                                <td></td>
                                                <td><span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;"></span></td>
                                            </tr>
                                            <tr>
                                                <td>María Huaman C.</td>
                                                <td><span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;"></span></td>
                                                <td><span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;"></span></td>
                                            </tr>
                                            <tr>
                                                <td>Azucena Jaramillo G.</td>
                                                <td><span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;"></span></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Ándres Jaramillo H.</td>
                                                <td><span class="bi bi-exclamation-triangle" style="font-size: 28px;color:red;"></span></td>
                                                <td></td>
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

{{-- Indicadores de gestion --}}
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
                            <h1 class="card-title tarjeta-vaca-foco"><b>35.8</b></h1>
                            <h5 style="font-size: 17px; text-align: center;">Promedio de días pendientes de vacaciones del equipo <b>hasta fin de año</b></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="margin-bottom: 1rem;">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title tarjeta-vaca-foco"><b>23.6</b></h1>
                            <h5 style="font-size: 17px;text-align: center;">Promedio de días pendientes de vacaciones del equipo <b>a la fecha de hoy</b></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="margin-bottom: 1rem;">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title tarjeta-vaca-foco"><b>6</b></h1>
                            <h5 style="font-size: 17px;text-align: center;">Número de reprogramaciones realizadas en el año del equipo</h5>
                        </div>
                    </div>
                </div>                      
            </div>
        </div>
    </div>
    </div>  
</div>  
</section>

{{-- Reporte de vacaciones --}}
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

{{-- Descargar solicitudes de vacaciones --}}
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
                                <input type="text" class="form-control" id="datepickerIniDes">
                            </div>
                        </div>
                        <div class="col-3 col-md-1" style="margin-bottom: 1rem;">
                            <div class="form-group">
                                <span>Fin:</span>
                            </div>
                        </div>
                        <div class="col-9 col-md-2" style="margin-bottom: 1rem;">
                            <div class="form-group">
                                <input type="text" class="form-control" id="datepickerFinDes">
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

{{-- Cargar vacaciones --}}
<section class="section dashboard">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <form action="{{ route('subirArchivo') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 28px;">Cargar vacaciones</h5>
                        <div class="row">
                            <div class="col-md-5" style="text-align: -webkit-center">
                                <input  class="btn btn-success btnDorado" style="padding-right: 0em" type="file" name="archivo">
                            </div>  
                            <div class="col-1 col-md-1" style="text-align: -webkit-center; margin: 0em -1em 0em 1em;">
                                <input class="form-check-input checkVerde" checked type="checkbox" value="" id="flexCheckDefault2">
                            </div>
                            <div class="col-11 col-md-4">
                                <div class="form-group">
                                    <h5>Aprobar automáticamente las vacaciones que inician el siguiente mes</h5>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-success btnDorado" type="submit" id="buscarDoc">Cargar</button>
                            </div>                    
                        </div>
                    </div>
                </div>
            </form>
        </div>  
    </div>    
</section>

{{-- Reglas de solicitud de vacaciones --}}
<section class="section dashboard">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 28px;">Reglas de solicitud de vacaciones</h5>
                    <div class="row">
                        <div class="col-md-2 offset-md-5" style="text-align: -webkit-center">
                            <div class="form-group">
                                <h5><button class="btn btn-success btnDorado" data-bs-toggle="modal" data-bs-target="#ModalReglas" id="buscarDoc">Ver reglas</button></h5>
                            </div>
                        </div>                      
                    </div>
                </div>
            </div>
        </div>  
    </div>    
</section>

</main><!-- End #main -->

<x-modals.aprobacionVacaciones/>

</x-layouts.app>

<!-- Template Main JS File -->
<script src="{{asset('assets/js/aprobacionVacaciones.js')}}"></script>
<script type='importmap'>
{
    "imports": {
    "@fullcalendar/core": "https://cdn.skypack.dev/@fullcalendar/core@6.1.6",
    "@fullcalendar/daygrid": "https://cdn.skypack.dev/@fullcalendar/multimonth@6.1.6"
    }
}
</script>
<script type="module">
import { Calendar } from '@fullcalendar/core'
import multiMonthPlugin from '@fullcalendar/multimonth'
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: [multiMonthPlugin],
        initialView: 'multiMonthYear'
    });
    calendar.render();
    });
</script>


