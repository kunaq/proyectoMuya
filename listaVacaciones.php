<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>GDH</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/icono.svg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.13.2/datatables.min.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.13.1/af-2.5.1/b-2.3.3/b-html5-2.3.3/b-print-2.3.3/cr-1.6.1/date-1.2.0/fc-4.2.1/r-2.4.0/rr-1.3.1/sc-2.0.7/sp-2.1.0/sl-1.5.0/sr-1.2.0/datatables.min.css"/>
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
 

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center" style="background-color: #D5161E;">

    <div class="d-flex align-items-center justify-content-between">
      <a href="welcome.html" class="logo d-flex align-items-center">
        <img src="assets/img/logoRB.svg" alt="">
      </a>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
       
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2" style="color:white">M. Huaman</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Milagros Huaman</h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-gear"></i>
                <span>Cambio contraseña</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="index.html">
                <i class="bi bi-box-arrow-right"></i>
                <span>Salir</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">


      <li class="nav-item">
        <a class="nav-link collapsed" href="datosPersonales.html">
          <i class="bi bi-person"></i>
          <span>Datos</span>
        </a>
      </li><!-- End Profile Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="boletasPago.html">
          <i class="bi bi-card-list"></i>
          <span>Bolestas de Pago</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="listaVacaciones.php">
          <i class="bx bx-swim"></i>
          <span>Vacaciones</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="listaPrestamos.html">
          <i class="bx bx-dollar"></i>
          <span>Prestamos</span>
        </a>
      </li>

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">
    <div class="pagetitle">
        <h1>Vacaciones</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
            <li class="breadcrumb-item active">Vacaciones</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">&nbsp;</h5>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-xxl-3 col-md-3">
                                <div class="card info-card sales-card" style="background-color: #1CB498;">
                                    <div class="card-body">
                                        <h3 class="card-title" style="color:white">Vacaciones Totales</span></h3>
                                        <div class="" style="text-align: right;">
                                            <h6 style="color:white">45</h6> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-md-3">
                                <div class="card info-card sales-card" style="background-color: #E5BB22;">
                                    <div class="card-body">
                                        <h3 class="card-title" style="color:white">Vacaciones Gozadas</span></h3>
                                        <div class="" style="text-align: right;">
                                            <h6 style="color:white">40</h6> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-md-3">
                                <div class="card info-card sales-card" style="background-color: #D5161E;">
                                    <div class="card-body">
                                        <h3 class="card-title" style="color:white">Vacaciones Pendientes</span></h3>
                                        <div class="" style="text-align: right;">
                                            <h6 style="color:white">15</h6> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-md-3">
                                <div class="card info-card sales-card" style="background-color: #727276;">
                                    <div class="card-body">
                                        <h3 class="card-title" style="color:white">Vacaciones Programadas</span></h3>
                                        <div class="" style="text-align: right;">
                                            <h6 style="color:white">5</h6> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <table class="table table-striped" id="example" style="width:100%">
                    <thead style="background-color: #D5161E; color: white;">
                        <tr>
                            <th rowspan="2" style="width:2rem"></th>
                            <th rowspan="2" style="text-align: center; vertical-align:middle;">Periodo</th>
                            <th rowspan="2" style="text-align: center; vertical-align:middle;">Total</th>
                            <th rowspan="2" style="text-align: center; vertical-align:middle;">Gozadas</th>
                            <th rowspan="2" style="text-align: center; vertical-align:middle;">Pagadas</th>
                            <th colspan="4" style="text-align: center; vertical-align:middle;">Pendientes</th>
                        </tr>
                        <tr>
                            <th style="text-align: center;">Vencidas</th>
                            <th style="text-align: center;">Pagadas</th>
                            <th style="text-align: center;">Truncas</th>
                            <th style="text-align: center;">Total</th>
                        </tr>
                    </thead>
                    <tbody style="text-align: center;">
                        <tr>
                            <td>
                              <p>
                                <button class="btn " type="button" data-bs-toggle="collapse" data-bs-target="#contentId1" aria-expanded="false"
                                    aria-controls="contentId">
                                    <a class="dropdown-item align-items-center" id="fila2">
                                      <i class="bi bi-search"></i>
                                    </a>
                                </button>
                              </p>
                            </td>
                            <td>2022-2023</td>
                            <td>15</td>
                            <td>15</td>
                            <td>15</td>
                            <td>0</td>
                            <td>15</td>
                            <td>0</td>
                            <td>15</td>
                            <div>
                                <tr class="collapse" id="contentId1">
                                  <td colspan="5">
                                    <table class="table table-striped">
                                      <thead>
                                        <tr style="background-color: #D5161E; color: white;">
                                          <th scope="col" style="width: 15%;">Fecha Inicio</th>
                                          <th scope="col">Fecha Fin</th>
                                          <th scope="col">Días</th>
                                          <th scope="col">Estado</th>
                                          <th scope="col">Observación</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>01/01/2022</td>
                                          <td>08/01/2022</td>
                                          <td>7</td>
                                          <td>Gozadas</td>
                                          <td>Sin observación.</td>
                                        </tr>
                                        <tr>
                                          <td>15/08/2022</td>
                                          <td>30/08/2022</td>
                                          <td>15</td>
                                          <td>Pagadas</td>
                                          <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                            </div>
                        </tr>
                        <tr>
                            <td>
                              <p>
                                <button class="btn " type="button" data-bs-toggle="collapse" data-bs-target="#contentId2" aria-expanded="false"
                                    aria-controls="contentId">
                                    <a class="dropdown-item align-items-center" id="fila2">
                                      <i class="bi bi-search"></i>
                                    </a>
                                </button>
                              </p>
                            </td>
                            <td>2021-2022</td>
                            <td>15</td>
                            <td>15</td>
                            <td>10</td>
                            <td>5</td>
                            <td>15</td>
                            <td>0</td>
                            <td>15</td>
                            <div>
                                <tr class="collapse" id="contentId2">
                                  <td colspan="5">
                                    <table class="table table-striped">
                                      <thead>
                                        <tr style="background-color: #D5161E; color: white;">
                                          <th scope="col" style="width: 15%;">Fecha Inicio</th>
                                          <th scope="col">Fecha Fin</th>
                                          <th scope="col">Días</th>
                                          <th scope="col">Estado</th>
                                          <th scope="col">Observación</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>01/01/2021</td>
                                          <td>08/01/2021</td>
                                          <td>7</td>
                                          <td>Gozadas</td>
                                          <td>Sin observación.</td>
                                        </tr>
                                        <tr>
                                          <td>15/08/2021</td>
                                          <td>30/08/2021</td>
                                          <td>15</td>
                                          <td>Pagadas</td>
                                          <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                            </div>
                        </tr>
                        <tr>
                            <td>
                              <p>
                                <button class="btn " type="button" data-bs-toggle="collapse" data-bs-target="#contentId3" aria-expanded="false"
                                    aria-controls="contentId">
                                    <a class="dropdown-item align-items-center" id="fila2">
                                      <i class="bi bi-search"></i>
                                    </a>
                                </button>
                              </p>
                            </td>
                            <td>2020-2021</td>
                            <td>15</td>
                            <td>15</td>
                            <td>15</td>
                            <td>0</td>
                            <td>15</td>
                            <td>0</td>
                            <td>15</td>
                            <div>
                              <tr class="collapse" id="contentId3">
                                <td colspan="5">
                                  <table class="table table-striped">
                                    <thead>
                                      <tr style="background-color: #D5161E; color: white;">
                                        <th scope="col" style="width: 15%;">Fecha Inicio</th>
                                        <th scope="col">Fecha Fin</th>
                                        <th scope="col">Días</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col">Observación</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>01/01/2020</td>
                                        <td>08/01/2020</td>
                                        <td>7</td>
                                        <td>Gozadas</td>
                                        <td>Sin observación.</td>
                                      </tr>
                                      <tr>
                                        <td>15/08/2021</td>
                                        <td>30/08/2021</td>
                                        <td>10</td>
                                        <td>Pagadas</td>
                                        <td>Sin observación.</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                            </div>
                        </tr>
                    </tbody>
                </table>

                <div id="tablaDetalle" hidden >
                  <table class="table table-striped" style="width: 80%;">
                    <thead>
                      <tr style="background-color: #D5161E; color: white;">
                        <th scope="col" style="width: 15%;">Fecha Inicio</th>
                        <th scope="col">Fecha Fin</th>
                        <th scope="col">Días</th>
                        <th scope="col">Esado</th>
                        <th scope="col">Observación</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>01/01/2021</td>
                        <td>08/01/2021</td>
                        <td>7</td>
                        <td>Gozadas</td>
                        <td>Sin observación.</td>
                      </tr>
                      <tr>
                        <td>15/08/2021</td>
                        <td>30/08/2021</td>
                        <td>15</td>
                        <td>Pagadas</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- <footer id="footer" class="footer">
    <div class="copyright">
      2023 © <b></b> Realizado por <a href="https://www.kunaq.pe/" style="color:#D61010" target="_blank">Kunaq y Asociados SAC</a>
    </div>
  </footer>End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>  
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.13.2/datatables.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment-with-locales.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/locale/es-mx.min.js"></script>
  <script src="https://cdn.datatables.net/datetime/1.2.0/js/dataTables.dateTime.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
  <script src="https://cdn.datatables.net/plug-ins/1.10.16/sorting/datetime-moment.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.13.1/af-2.5.1/b-2.3.3/b-html5-2.3.3/b-print-2.3.3/cr-1.6.1/date-1.2.0/fc-4.2.1/r-2.4.0/rr-1.3.1/sc-2.0.7/sp-2.1.0/sl-1.5.0/sr-1.2.0/datatables.min.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
<script type="text/javascript">
   

  
</script>

</body>

</html>