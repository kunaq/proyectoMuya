
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center" style="background-color: #155450;">

    <div class="d-flex align-items-center justify-content-between">
      <a href="home" id="anclaLogo" class="logo d-flex align-items-center d-none d-md-block">
        <img src="assets/img/GM-BLANCO.png" alt="">
      </a>
      <a href="home" id="anclaLogoMobil" class="logo logo-sm d-flex align-items-center d-sm-block d-md-none">
        <img src="assets/img/GM-BLANCO-SM.png" alt="">
      </a>
      <i class="bi bi-list toggle-sidebar-btn "></i>
    </div>
    
    <!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
       
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2" style="color:white">{{session('nombreBienvenida')}}&nbsp;</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{session('nombreTrabajador')}}</h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li id="anclaCambContr">
              <a class="dropdown-item d-flex align-items-center" href="{{route('cambioContrasena')}}">
                <i class="bi bi-gear"></i>
                <span>Cambio contraseña</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{route('logout')}}">
                <i class="bi bi-box-arrow-right"></i>
                <span>Salir</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->