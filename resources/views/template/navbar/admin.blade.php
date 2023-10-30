<!--  BEGIN SIDEBAR  -->
{{-- <div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">
        <div class="profile-info">
            <figure class="user-cover-image" style="background: #fafafa"></figure>
            <div class="user-info">
                <img src="{{ asset('assets/user-profile/' . $admin->avatar) }}" alt="avatar" class="bg-white">
                <h6 class="">{{ $admin->nama_admin }}</h6>
                <p class="">Admin CBT-Malela</p>
            </div>
        </div>
        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu {{ ($menu['menu'] == 'dashboard') ? 'active' : ''; }}">
                <a href="{{ url("/admin") }}" aria-expanded="{{ ($menu['expanded'] == 'dashboard') ? 'true' : 'false'; }}" class="dropdown-toggle">
                    <div class="">
                        <span data-feather="airplay"></span>
                        <span>Dashboard</span>
                    </div>
                </a>
            </li>
            <li class="menu menu-heading">
                <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg><span>MASTER DATA</span></div>
            </li>
            <li class="menu {{ ($menu['menu'] == 'master') ? 'active' : ''; }}">
                <a href="#components" data-toggle="collapse" aria-expanded="{{ ($menu['expanded'] == 'master') ? 'true' : 'false'; }}" class="dropdown-toggle">
                    <div class="">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                        <span>User</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ ($menu['collapse'] == 'master') ? 'show' : ''; }}" id="components" data-parent="#accordionExample">
                    <li class="{{ ($menu['sub'] == 'siswa') ? 'active' : ''; }}">
                        <a href="{{ url("/admin/siswa") }}"> Siswa </a>
                    </li>
                    <li class="{{ ($menu['sub'] == 'guru') ? 'active' : ''; }}">
                        <a href="{{ url("/admin/guru") }}"> Mentor </a>
                    </li>
                </ul>
            </li>

            <li class="menu {{ ($menu['menu'] == 'materi_kategori') ? 'active' : ''; }}">
                <a href="#components_kategori" data-toggle="collapse" aria-expanded="{{ ($menu['expanded'] == 'materi_kategori') ? 'true' : 'false'; }}" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" stroke="currentColor"  height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>
                        <span>Kategori Materi</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ ($menu['collapse'] == 'materi_kategori') ? 'show' : ''; }}" id="components_kategori" data-parent="#accordionExample">
                    <li class="{{ ($menu['sub'] == 'kategori') ? 'active' : ''; }}">
                        <a href="{{ url("/admin/kategori") }}"> Kategori </a>
                    </li>
                    <li class="{{ ($menu['sub'] == 'subskategori') ? 'active' : ''; }}">
                        <a href="{{ url("/admin/kategori/subs") }}"> Subs Kategori </a>
                    </li>
                </ul>
            </li>

            <li class="menu {{ ($menu['menu'] == 'kelas') ? 'active' : ''; }}">
                <a href="{{ url("/admin/kelas") }}" aria-expanded="{{ ($menu['expanded'] == 'kelas') ? 'true' : 'false'; }}" class="dropdown-toggle">
                    <div class="">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span>Kelas</span>
                    </div>
                </a>
            </li>

            <li class="menu {{ ($menu['menu'] == 'mapel') ? 'active' : ''; }}">
                <a href="{{ url("/admin/mapel") }}" aria-expanded="{{ ($menu['expanded'] == 'mapel') ? 'true' : 'false'; }}" class="dropdown-toggle">
                    <div class="">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                            <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                        </svg>
                        <span>Mapel</span>
                    </div>
                </a>
            </li>

            <li class="menu {{ ($menu['menu'] == 'slider') ? 'active' : ''; }}">
                <a href="{{ url("/admin/slider") }}" aria-expanded="{{ ($menu['expanded'] == 'slider') ? 'true' : 'false'; }}" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><g transform="translate(2 3)"><path d="M20 16a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2h3l2-3h6l2 3h3a2 2 0 0 1 2 2v11z"/><circle cx="10" cy="10" r="4"/></g></svg>
                        <span>Slider</span>
                    </div>
                </a>
            </li>



            <li class="menu {{ ($menu['menu'] == 'relasi') ? 'active' : ''; }}">
                <a href="{{ url("/admin/relasi") }}" aria-expanded="{{ ($menu['expanded'] == 'relasi') ? 'true' : 'false'; }}" class="dropdown-toggle">
                    <div class="">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                            <line x1="6" y1="3" x2="6" y2="15"></line>
                            <circle cx="18" cy="6" r="3"></circle>
                            <circle cx="6" cy="18" r="3"></circle>
                            <path d="M18 9a9 9 0 0 1-9 9"></path>
                        </svg>
                        <span>Relasi</span>
                    </div>
                </a>
            </li>
            <li class="menu menu-heading">
                <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg><span>USER MENU</span></div>
            </li>
            <li class="menu {{ ($menu['menu'] == 'profile') ? 'active' : ''; }}">
                <a href="{{ url("/admin/profile") }}" aria-expanded="{{ ($menu['expanded'] == 'profile') ? 'true' : 'false'; }}" class="dropdown-toggle">
                    <div class="">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        <span>Profile</span>
                    </div>
                </a>
            </li>
            <li class="menu {{ ($menu['menu'] == 'narasi') ? 'active' : ''; }}">
                <a href="{{ url("/admin/narasi") }}" aria-expanded="{{ ($menu['expanded'] == 'narasi') ? 'true' : 'false'; }}" class="dropdown-toggle">
                    <div class="">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                            <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                        </svg>
                        <span>Narasi</span>
                    </div>
                </a>
            </li>
            <li class="menu">
                <a href="{{ url("/logout") }}" aria-expanded="false" class="dropdown-toggle logout">
                    <div class="">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                            <polyline points="16 17 21 12 16 7"></polyline>
                            <line x1="21" y1="12" x2="9" y2="12"></line>
                        </svg>
                        <span>Logout</span>
                    </div>
                </a>
            </li>
        </ul>

    </nav>

</div> --}}
<!--  END SIDEBAR  -->

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
                Learn
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
                <li class="sidebar-item"><a class="sidebar-link" href="{{ url("/admin") }}">Dashboard</a></li>
              </ul>
            </li>

            <li class="nav-item mt-2 sidebar-title text-truncate small opacity-50">
              <i class="bi bi-three-dots align-middle"></i>
              <span>Menu</span>
            </li>

            <li class="nav-item">
                <a href="#siswa" data-bs-toggle="collapse"
                  class="nav-link d-flex align-items-center text-truncate"
                  aria-expanded="false">
                  <span class="sidebar-icon">
                   <i class="bi bi-journal-text fs-5"></i>
                  </span>
                  <!--Sidebar nav text-->
                  <span class="sidebar-text">Siswa</span>
                </a>
                <ul data-bs-target="#siswa" id="siswa" class="sidebar-dropdown list-unstyled collapse">
                  <li class="sidebar-item"><a class="sidebar-link" href="{{ url("/admin/siswa") }}">Siswa</a></li>
                  <li class="sidebar-item"><a class="sidebar-link" href="{{ url("/admin/siswa/payment") }}">Bukti Bayar</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#mentor" data-bs-toggle="collapse"
                  class="nav-link d-flex align-items-center text-truncate"
                  aria-expanded="false">
                  <span class="sidebar-icon">
                   <i class="bi bi-journal-text fs-5"></i>
                  </span>
                  <!--Sidebar nav text-->
                  <span class="sidebar-text">Mentor</span>
                </a>
                <ul data-bs-target="#mentor" id="mentor" class="sidebar-dropdown list-unstyled collapse">
                  <li class="sidebar-item"><a class="sidebar-link" href="{{ url("/admin/guru") }}">Mentor</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#kategori" data-bs-toggle="collapse"
                  class="nav-link d-flex align-items-center text-truncate"
                  aria-expanded="false">
                  <span class="sidebar-icon">
                   <i class="bi bi-journal-text fs-5"></i>
                  </span>
                  <!--Sidebar nav text-->
                  <span class="sidebar-text">Kategori</span>
                </a>
                <ul data-bs-target="#kategori" id="kategori" class="sidebar-dropdown list-unstyled collapse">
                  <li class="sidebar-item"><a class="sidebar-link" href="{{ url("/admin/kategori") }}">Kategori</a></li>
                </ul>
              </li>
            
              <li class="nav-item">
                <a href="#subkategori" data-bs-toggle="collapse"
                  class="nav-link d-flex align-items-center text-truncate"
                  aria-expanded="false">
                  <span class="sidebar-icon">
                   <i class="bi bi-journal-text fs-5"></i>
                  </span>
                  <!--Sidebar nav text-->
                  <span class="sidebar-text">Sub Kategori</span>
                </a>
                <ul data-bs-target="#subkategori" id="subkategori" class="sidebar-dropdown list-unstyled collapse">
                  <li class="sidebar-item"><a class="sidebar-link" href="{{ url("/admin/kategori/subs") }}">Sub Kategori</a></li>
                </ul>
              </li>

              <li class="nav-item">
                <a href="#kelas" data-bs-toggle="collapse"
                  class="nav-link d-flex align-items-center text-truncate"
                  aria-expanded="false">
                  <span class="sidebar-icon">
                   <i class="bi bi-journal-text fs-5"></i>
                  </span>
                  <!--Sidebar nav text-->
                  <span class="sidebar-text">Kelas</span>
                </a>
                <ul data-bs-target="#kelas" id="kelas" class="sidebar-dropdown list-unstyled collapse">
                  <li class="sidebar-item"><a class="sidebar-link" href="{{ url("/admin/kelas") }}">Kelas</a></li>
                </ul>
              </li>
              
              <li class="nav-item">
                <a href="#mapel" data-bs-toggle="collapse"
                  class="nav-link d-flex align-items-center text-truncate"
                  aria-expanded="false">
                  <span class="sidebar-icon">
                   <i class="bi bi-journal-text fs-5"></i>
                  </span>
                  <!--Sidebar nav text-->
                  <span class="sidebar-text">Mapel</span>
                </a>
                <ul data-bs-target="#mapel" id="mapel" class="sidebar-dropdown list-unstyled collapse">
                  <li class="sidebar-item"><a class="sidebar-link" href="{{ url("/admin/mapel") }}">Mapel</a></li>
                </ul>
              </li>

              <li class="nav-item">
                <a href="#slider" data-bs-toggle="collapse"
                  class="nav-link d-flex align-items-center text-truncate"
                  aria-expanded="false">
                  <span class="sidebar-icon">
                   <i class="bi bi-journal-text fs-5"></i>
                  </span>
                  <!--Sidebar nav text-->
                  <span class="sidebar-text">Slider</span>
                </a>
                <ul data-bs-target="#slider" id="slider" class="sidebar-dropdown list-unstyled collapse">
                  <li class="sidebar-item"><a class="sidebar-link" href="{{ url("/admin/slider") }}">Slider</a></li>
                </ul>
              </li>

              <li class="nav-item">
                <a href="#relasi" data-bs-toggle="collapse"
                  class="nav-link d-flex align-items-center text-truncate"
                  aria-expanded="false">
                  <span class="sidebar-icon">
                   <i class="bi bi-journal-text fs-5"></i>
                  </span>
                  <!--Sidebar nav text-->
                  <span class="sidebar-text">Relasi</span>
                </a>
                <ul data-bs-target="#relasi" id="relasi" class="sidebar-dropdown list-unstyled collapse">
                  <li class="sidebar-item"><a class="sidebar-link" href="{{ url("/admin/relasi") }}">Relasi</a></li>
                </ul>
              </li>

              <li class="nav-item">
                <a href="#narasi" data-bs-toggle="collapse"
                  class="nav-link d-flex align-items-center text-truncate"
                  aria-expanded="false">
                  <span class="sidebar-icon">
                   <i class="bi bi-journal-text fs-5"></i>
                  </span>
                  <!--Sidebar nav text-->
                  <span class="sidebar-text">Narasi</span>
                </a>
                <ul data-bs-target="#narasi" id="narasi" class="sidebar-dropdown list-unstyled collapse">
                  <li class="sidebar-item"><a class="sidebar-link" href="{{ url("/admin/narasi") }}">Narasi</a></li>
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
                <li class="sidebar-item"><a class="sidebar-link" href="{{ url("/admin/profile") }}">Profile</a></li>
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
