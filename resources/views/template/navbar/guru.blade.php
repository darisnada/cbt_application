<!--  BEGIN SIDEBAR  -->
{{-- <div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">
        <div class="profile-info">
            <figure class="user-cover-image" style="background: #fafafa"></figure>
            <div class="user-info">
                <img src="{{ asset('assets/user-profile/' . $guru->avatar) }}" alt="avatar" class="bg-white">
                <h6 class="">{{ $guru->nama_guru }}</h6>
                <p class="">Mentor CBT-Malela</p>
            </div>
        </div>
        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu {{ ($menu['menu'] == 'dashboard') ? 'active' : ''; }}">
                <a href="{{ url("/guru") }}" aria-expanded="{{ ($menu['expanded'] == 'dashboard') ? 'true' : 'false'; }}" class="dropdown-toggle">
                    <div class="">
                        <span data-feather="airplay"></span>
                        <span>Dashboard</span>
                    </div>
                </a>
            </li>
            <li class="menu menu-heading">
                <div class="heading">
                    <span data-feather="minus"></span>
                    <span>MENTOR MENU</span>
                </div>
            </li>
            <li class="menu {{ ($menu['menu'] == 'materi') ? 'active' : ''; }}">
                <a href="{{ url("/guru/materi") }}" aria-expanded="{{ ($menu['expanded'] == 'materi') ? 'true' : 'false'; }}" class="dropdown-toggle">
                    <div class="">
                        <span data-feather="book-open"></span>
                        <span>Materi</span>
                    </div>
                </a>
            </li>
            <li class="menu {{ ($menu['menu'] == 'tugas') ? 'active' : ''; }}">
                <a href="#" aria-expanded="{{ ($menu['expanded'] == 'tugas') ? 'true' : 'false'; }}" class="dropdown-toggle">
                    <div class="">
                        <span data-feather="book"></span>
                        <span>Tugas</span>
                    </div>
                </a>
            </li>
            <li class="menu {{ ($menu['menu'] == 'ujian') ? 'active' : ''; }}">
                <a href="#" aria-expanded="{{ ($menu['expanded'] == 'ujian') ? 'true' : 'false'; }}" class="dropdown-toggle">
                    <div class="">
                        <span data-feather="cast"></span>
                        <span>Ujian</span>
                    </div>
                </a>
            </li>
            <li class="menu menu-heading">
                <div class="heading">
                    <span data-feather="minus"></span>
                    <span>USER MENU</span>
                </div>
            </li>
            <li class="menu {{ ($menu['menu'] == 'profile') ? 'active' : ''; }}">
                <a href="{{ url("/guru/profile") }}" aria-expanded="{{ ($menu['expanded'] == 'profile') ? 'true' : 'false'; }}" class="dropdown-toggle">
                    <div class="">
                        <span data-feather="user"></span>
                        <span>Profile</span>
                    </div>
                </a>
            </li>
            <li class="menu">
                <a href="{{ url("/logout") }}" aria-expanded="false" class="dropdown-toggle logout">
                    <div class="">
                        <span data-feather="log-out"></span>
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
              <img src="{{ asset('_assets/user-profile/' . $guru->avatar) }}" width="100%" alt="">
            </span>
            <span class="sidebar-text">
              <!--Sidebar-text-->
              <span class="sidebar-text text-truncate fs-4 text-uppercase fw-bolder">
                CBT <sub class="fs-6 opacity-50"></sub>
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
                <li class="sidebar-item"><a class="sidebar-link" href="{{ url("/guru") }}">Dashboard</a></li>
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
                <li class="sidebar-item"><a class="sidebar-link" href="{{ url("/guru/materi") }}">Materi</a></li>
              </ul>
            </li>
            {{-- <li class="nav-item">
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
                <li class="sidebar-item"><a class="sidebar-link" href="{{ url("//kegiatan") }}">Kegiatan</a></li>
              </ul>
            </li> --}}
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
                <li class="sidebar-item"><a class="sidebar-link" href="{{ url("/guru/tugas") }}">Tugas</a></li>
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
                <li class="sidebar-item"><a class="sidebar-link" href="{{ url("/guru/profile") }}">Profile</a></li>
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
