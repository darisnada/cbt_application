<!--///////////Page sidebar begin///////////////-->
<aside class="page-sidebar">
    <div class="h-100 flex-column d-flex" data-simplebar>

      <!--Aside-logo-->
      <div class="aside-logo p-3 position-relative">
        <a href="index.html" class="d-block pe-2">
          <div class="d-flex align-items-center flex-no-wrap text-truncate">
            <!--Sidebar-icon-->
            <span class="sidebar-icon fs-5 lh-1 text-white rounded-circle bg-primary">
              <img src="{{ url('/_assets/img') }}/icon-web.jpeg" width="100%" alt="">
            </span>
            <span class="sidebar-text">
              <!--Sidebar-text-->
              <span class="sidebar-text text-truncate fs-4 text-uppercase fw-bolder">
                LEARN <sub class="fs-6 opacity-50"></sub>
              </span>
            </span>
          </div>
        </a>
      </div>
      <!--Aside-Menu-->
      <div class="aside-menu pe-2 my-auto flex-column-fluid">
        <nav class="flex-grow-1 h-100" id="page-navbar">
          <!--:Sidebar nav-->
          <ul class="nav flex-column collapse-group collapse d-flex pt-4">
            <li class="nav-item sidebar-title text-truncate opacity-50 small">
              <i class="bi bi-three-dots align-middle"></i>
              <span>Main</span>
            </li>
            <li class="nav-item">
              <a href="#dashboards" data-bs-toggle="collapse"
                class="nav-link d-flex align-items-center text-truncate"
                aria-expanded="false">
                <span class="sidebar-icon">
                 <i class="bi bi-speedometer2 fs-5"></i>
                </span>
                <!--Sidebar nav text-->
                <span class="sidebar-text">Dashboard</span>
              </a>
              <ul data-bs-target="#dashboards" id="dashboards" class="sidebar-dropdown list-unstyled collapse">
                <li class="sidebar-item"><a class="sidebar-link" href="{{ url("/bukti_bayar_siswa") }}">Dashboard</a></li>
              </ul>
            </li>

            {{-- <li class="nav-item mt-2 sidebar-title text-truncate small opacity-50">
              <i class="bi bi-three-dots align-middle"></i>
              <span>Menu</span>
            </li> --}}


            {{-- <li class="nav-item mt-2 sidebar-title text-truncate small opacity-50">
              <i class="bi bi-three-dots align-middle"></i>
              <span>User Menu</span>
            </li> --}}

            {{-- <li class="nav-item">
              <a href="#profile" data-bs-toggle="collapse"
                class="nav-link d-flex align-items-center text-truncate"
                aria-expanded="false">
                <span class="sidebar-icon">
                 <i class="bi bi-person-badge fs-5"></i>
                </span>
                <!--Sidebar nav text-->
                <span class="sidebar-text">Profile</span>
              </a>
              <ul data-bs-target="#profile" id="profile" class="sidebar-dropdown list-unstyled collapse">
                <li class="sidebar-item"><a class="sidebar-link" href="{{ url("/siswa/profile") }}">Profile</a></li>
              </ul>
            </li> --}}

          </ul>
        </nav>
      </div>
      <!--Aside-footer-->
      <footer class="aside-footer position-relative p-3">
        
      </footer>
    </div>
  </aside>
  <!--///////////Page Sidebar End///////////////-->

  <!--///Sidebar close button for 991px or below devices///-->
  <div class="sidebar-close d-lg-none">
    <a href="#"></a>
  </div>
  <!--///.Sidebar close end///-->