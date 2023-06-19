  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#datos-nav" data-bs-toggle="collapse" href="#">
          <span>Datos</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="datos-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('datosPersonales')}}">
              <span>Personales</span>
            </a>
          </li>
          <li>
            <a href="{{route('fechasImp')}}">
              <span>Fechas importantes</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('mensajes')}}">
          <span>Mensajes</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('documentos')}}">
          <span>Documentos</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#vacaciones-nav" data-bs-toggle="collapse" href="#">
          <span>Vacaciones</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="vacaciones-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('solicitudVacaciones')}}">
              <span>Solicitud</span>
            </a>
          </li>
          <li>
            <a href="{{route('aprobacionVacaciones')}}">
              <span>Aprobación</span>
            </a>
          </li>
          <li>
            <a href="{{route('vacacionesEmpresa')}}">
              <span>Empresa</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#config-nav" data-bs-toggle="collapse" href="#">
          <span>Configuración</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="config-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('cambioContrasena')}}">
              <span>Cambiar contraseña</span>
            </a>
          </li>
          <li>
            <a href="{{route('delegacion')}}">
              <span>Delegación</span>
            </a>
          </li>
          <li>
            <a href="{{route('configXtrabajador')}}">
              <span>Por trabajador</span>
            </a>
          </li>
        </ul>
      </li>

      {{-- <li class="nav-item d-sm-block d-md-none">
        <a class="nav-link collapsed" href="index.php">
          <button class="btn btn-success btnTabHome btnDorado">Cerrar sesión</button>
        </a>
      </li> --}}

    </ul>

  </aside><!-- End Sidebar-->