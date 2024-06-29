  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">



      <ul class="sidebar-nav" id="sidebar-nav">

          <li class="nav-item{{ Request::route()->getName() === 'home' ? ' active' : '' }}">
              <a class="nav-link collapsed{{ Request::route()->getName() === 'home' ? ' bg-black text-white' : '' }}"
                  href="{{ route('home') }}">
                  <span>Inicio</span>
              </a>
          </li>

          <li class="nav-item">
              <a class="nav-link collapsed{{ Request::route()->getName() === 'datosPersonales' || Request::route()->getName() === 'fechasImp' ? ' bg-black text-white' : '' }}"
                  data-bs-target="#datos-nav" data-bs-toggle="collapse" href="#">
                  <span>Datos</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="datos-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                  <li>
                      <a href="{{ route('datosPersonales') }}"
                          class="{{ Request::route()->getName() === 'datosPersonales' ? 'bg-black text-white' : '' }}">
                          <span>Personales</span>
                      </a>
                  </li>
                  <li>
                      <a href="{{ route('fechasImp') }}"
                          class="{{ Request::route()->getName() === 'fechasImp' ? 'bg-black text-white' : '' }}">
                          <span>Fechas importantes</span>
                      </a>
                  </li>
              </ul>
          </li>


          <li class="nav-item d-block d-lg-none{{ Request::route()->getName() === 'seguimiento' ? ' active' : '' }}">
              <a class="nav-link collapsed{{ Request::route()->getName() === 'seguimiento' ? ' bg-black text-white' : '' }}"
                  href="{{ route('seguimiento') }}">
                  <span>Seguimiento</span>
              </a>
          </li>


          <li class="nav-item{{ Request::route()->getName() === 'mensajes' ? ' active' : '' }}">
              <a class="nav-link collapsed{{ Request::route()->getName() === 'mensajes' ? ' bg-black text-white' : '' }}"
                  href="{{ route('mensajes') }}">
                  <span>Mensajes</span>
              </a>
          </li>

          <li class="nav-item{{ Request::route()->getName() === 'documentos' ? ' active' : '' }}">
              <a class="nav-link collapsed{{ Request::route()->getName() === 'documentos' ? ' bg-black text-white' : '' }}"
                  href="{{ route('documentos') }}">
                  <span>Documentos</span>
              </a>
          </li>

          <li class="nav-item">
              <a class="nav-link collapsed{{ Request::route()->getName() === 'solicitudVacaciones' || Request::route()->getName() === 'aprobacionVacaciones' || Request::route()->getName() === 'vacacionesEmpresa' ? ' bg-black text-white' : '' }}"
                  data-bs-target="#vacaciones-nav" data-bs-toggle="collapse" href="#">
                  <span>Vacaciones</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="vacaciones-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                  <li>
                      <a href="{{ route('solicitudVacaciones') }}"
                          class="{{ Request::route()->getName() === 'solicitudVacaciones' ? 'bg-black text-white' : '' }}">
                          <span>Solicitud</span>
                      </a>
                  </li>
                  @if (session('flgResponsable') === 'SI')
                      <li>
                          <a href="{{ route('aprobacionVacaciones') }}"
                              class="{{ Request::route()->getName() === 'aprobacionVacaciones' ? 'bg-black text-white' : '' }}">
                              <span>Aprobación</span>
                          </a>
                      </li>
                  @endif
                  @if (session('ventana4_3') === 'SI')
                      <li>
                          <a href="{{ route('vacacionesEmpresa') }}"
                              class="{{ Request::route()->getName() === 'vacacionesEmpresa' ? 'bg-black text-white' : '' }}">
                              <span>Empresa</span>
                          </a>
                      </li>
                  @endif
              </ul>
          </li>

          <li class="nav-item">
              <a class="nav-link collapsed{{ Request::route()->getName() === 'cambioContrasena' || Request::route()->getName() === 'delegacion' || Request::route()->getName() === 'configXtrabajador' ? ' bg-black text-white' : '' }}"
                  data-bs-target="#config-nav" data-bs-toggle="collapse" href="#">
                  <span>Configuración</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="config-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                  <li>
                      <a href="{{ route('cambioContrasena') }}"
                          class="{{ Request::route()->getName() === 'cambioContrasena' ? 'bg-black text-white' : '' }}">
                          <span>Cambiar contraseña</span>
                      </a>
                  </li>
                  <li>
                      <a href="{{ route('delegacion') }}"
                          class="{{ Request::route()->getName() === 'delegacion' ? 'bg-black text-white' : '' }}">
                          <span>Delegación</span>
                      </a>
                  </li>
                  {{-- @if (session('flgResponsable') === 'SI')
                      <li>
                      <a href="{{ route('delegacion') }}"
                          class="{{ Request::route()->getName() === 'delegacion' ? 'bg-black text-white' : '' }}">
                          <span>Delegación</span>
                      </a>
                  </li>
                  @endif --}}
                  @if (session('ventana5_3') === 'SI')
                      <li>
                          <a href="{{ route('configXtrabajador') }}"
                              class="{{ Request::route()->getName() === 'configXtrabajador' ? 'bg-black text-white' : '' }}">
                              <span>Por trabajador</span>
                          </a>
                      </li>
                  @endif
              </ul>

              <a href="{{ route('logout') }}" class="d-flex mt-5 justify-content-center"
                  data-bs-custom-class="custom-tooltip" data-bs-placement="top" title="Salir">
                  <h5><button class="btn btn-success btnDorado" style="border-color: white !important;">
                          <span class="bi bi-box-arrow-right"></span>&nbsp;&nbsp;Salir</button></h5>
              </a>

          </li>

          {{-- <li class="nav-item d-sm-block d-md-none">
        <a class="nav-link collapsed" href="index.php">
          <button class="btn btn-success btnTabHome btnDorado">Cerrar sesión</button>
        </a>
      </li> --}}

      </ul>
      {{-- <div id="salirSideBar">
          <a href="{{ route('logout') }}" data-bs-custom-class="custom-tooltip" data-bs-placement="top" title="Salir">
              <h5><button class="btn btn-success btnDorado" style="border-color: white !important;">
                      <span class="bi bi-box-arrow-right"></span>&nbsp;&nbsp;Salir</button></h5>
          </a>
      </div> --}}

  </aside><!-- End Sidebar-->
