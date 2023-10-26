<!--///////////Page sidebar begin///////////////-->
<aside class="page-sidebar">
          <div class="h-100 flex-column d-flex" data-simplebar>

            <!--Aside-logo-->
            <div class="aside-logo p-3 position-relative">
              <a href="index.html" class="d-block pe-2">
                <div class="d-flex align-items-center flex-no-wrap text-truncate">
                  <!--Sidebar-icon-->
                  <span class="sidebar-icon fs-5 lh-1 text-white rounded-circle bg-primary">
                    <img src="{{ asset('_assets/user-profile/default.png') }}" width="100%" alt="">
                  </span>
                  <span class="sidebar-text">
                    <!--Sidebar-text-->
                    <span class="sidebar-text text-truncate fs-4 text-uppercase fw-bolder">
                      Panel <sub class="fs-6 opacity-50">2.0</sub>
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
                      <li class="sidebar-item"><a class="sidebar-link" href="{{ url("/siswa") }}">Dashboard</a></li>
                    </ul>
                  </li>

                  <li class="nav-item mt-2 sidebar-title text-truncate small opacity-50">
                    <i class="bi bi-three-dots align-middle"></i>
                    <span>Siswa Menu</span>
                  </li>

                  <li class="nav-item">
                    <a href="#materi" data-bs-toggle="collapse"
                      class="nav-link d-flex align-items-center text-truncate"
                      aria-expanded="false">
                      <span class="sidebar-icon">
                       <i class="bi bi-journal-text fs-5"></i>
                      </span>
                      <!--Sidebar nav text-->
                      <span class="sidebar-text">Materi</span>
                    </a>
                    <ul data-bs-target="#materi" id="materi" class="sidebar-dropdown list-unstyled collapse">
                      <li class="sidebar-item"><a class="sidebar-link" href="{{ url("/siswa/materi") }}">Materi</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a href="#kegiatan" data-bs-toggle="collapse"
                      class="nav-link d-flex align-items-center text-truncate"
                      aria-expanded="false">
                      <span class="sidebar-icon">
                       <i class="bi bi-puzzle fs-5"></i>
                      </span>
                      <!--Sidebar nav text-->
                      <span class="sidebar-text">Kegiatan</span>
                    </a>
                    <ul data-bs-target="#kegiatan" id="kegiatan" class="sidebar-dropdown list-unstyled collapse">
                      <li class="sidebar-item"><a class="sidebar-link" href="{{ url("/siswa/kegiatan") }}">Kegiatan</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a href="#tugas" data-bs-toggle="collapse"
                      class="nav-link d-flex align-items-center text-truncate"
                      aria-expanded="false">
                      <span class="sidebar-icon">
                       <i class="bi bi-journal-check fs-5"></i>
                      </span>
                      <!--Sidebar nav text-->
                      <span class="sidebar-text">Tugas</span>
                    </a>
                    <ul data-bs-target="#tugas" id="tugas" class="sidebar-dropdown list-unstyled collapse">
                      <li class="sidebar-item"><a class="sidebar-link" href="{{ url("/siswa/tugas") }}">Tugas</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a href="#ujian" data-bs-toggle="collapse"
                      class="nav-link d-flex align-items-center text-truncate"
                      aria-expanded="false">
                      <span class="sidebar-icon">
                       <i class="bi bi-journal-check fs-5"></i>
                      </span>
                      <!--Sidebar nav text-->
                      <span class="sidebar-text">Ujian</span>
                    </a>
                    <ul data-bs-target="#ujian" id="ujian" class="sidebar-dropdown list-unstyled collapse">
                      <li class="sidebar-item"><a class="sidebar-link" href="{{ url("/siswa/ujian") }}">Ujian</a></li>
                    </ul>
                  </li>

                  <li class="nav-item mt-2 sidebar-title text-truncate small opacity-50">
                    <i class="bi bi-three-dots align-middle"></i>
                    <span>User Menu</span>
                  </li>

                  <li class="nav-item">
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
                  </li>

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