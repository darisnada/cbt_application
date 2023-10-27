
          <!--//page-header//-->
          <header class="navbar py-0 page-header border-bottom navbar-expand navbar-light px-4">
            <a href="index.html" class="navbar-brand d-block d-lg-none">
              <div class="d-flex align-items-center flex-no-wrap text-truncate">
                <!--Sidebar-icon-->
                <span class="sidebar-icon bg-primary rounded-circle size-40 text-white">
                  <svg width="16" height="18" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.399994" width="4" height="12" fill="white" />
                    <path
                      d="M5.89998 9.6C7.1465 9.6 8.34196 9.09429 9.22338 8.19411C10.1048 7.29394 10.6 6.07304 10.6 4.8C10.6 3.52696 10.1048 2.30606 9.22338 1.40589C8.34196 0.505713 7.1465 2.4787e-07 5.89998 0L5.89998 4.8L5.89998 9.6Z"
                      fill="white" />
                  </svg>
                </span>
              </div>
            </a>
            <ul class="navbar-nav d-flex align-items-center h-100">
              <li class="nav-item d-none d-lg-flex flex-column h-100 me-lg-2 align-items-center justify-content-center">
                <a href="javascript:void(0)"
                  class="sidebar-trigger nav-link rounded-3 size-35 d-flex align-items-center justify-content-center p-0">
                   <i class="bi bi-arrow-bar-left fs-5"></i></a>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto d-flex align-items-center h-100">
              
              <li class="nav-item dropdown d-flex align-items-center justify-content-center flex-column h-100">
                <a href="#"
                  class="nav-link rounded-pill p-1 lh-1 pe-1 pe-md-2 d-flex align-items-center justify-content-center"
                  aria-expanded="false" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                  <div class="d-flex align-items-center">

                    <!--Avatar with status-->
                    <div class="avatar-status status-online me-1 avatar sm">
                      @if (session()->get('role') === 3)
                      <img src="{{ asset('_assets/user-profile/' . $siswa->avatar) }}" class="rounded-circle img-fluid" alt="">
                      @endif
                      @if (session()->get('role') === 2)
                      <img src="{{ asset('_assets/user-profile/' . $guru->avatar) }}" class="rounded-circle img-fluid" alt="">
                      @endif
                      @if (session()->get('role') === 1)
                      <img src="{{ asset('_assets/user-profile/' . $admin->avatar) }}" class="rounded-circle img-fluid" alt="">
                      @endif
                    </div>
                  </div>
                </a>

                <div class="dropdown-menu mt-0 p-0 dropdown-menu-end overflow-hidden">
                  <!--User meta-->
                  {{-- <div class="position-relative overflow-hidden p-4 bg-primary-subtle">
                    <div class="position-relative">
                      @if (session()->get('role') === 3)
                      <h5 class="mb-1">{{ $siswa->nama_siswa }}</h5>
                      <p class="text-body-tertiary small mb-0 lh-1">Siswa</p>
                      @endif

                      @if (session()->get('role') === 2)
                      <h5 class="mb-1">{{ $guru->nama_guru }}</h5>
                      <p class="text-body-tertiary small mb-0 lh-1">Guru</p>
                      @endif
                      
                      @if (session()->get('role') === 3)
                      <h5 class="mb-1">{{ $admin->nama_admin }}</h5>
                      <p class="text-body-tertiary small mb-0 lh-1">Admin</p>
                      @endif
                      
                    </div>
                  </div> --}}
                  <div class="p-2">
                    {{-- <a href="{{ url("/siswa/profile") }}" class="dropdown-item">
                      <i class="bi bi-person-circle opacity-75 fs-5 align-middle me-2"></i>Profile</a> --}}
                    {{-- <a href="account-general.html" class="dropdown-item">
                      <i class="bi bi-person-gear fs-5 opacity-75 align-middle me-2"></i>Settings</a> --}}
                    {{-- <hr class="mt-3 mb-1"> --}}
                    <a href="{{ url("/logout") }}" class="dropdown-item d-flex align-items-center">
                      <i class="bi bi-box-arrow-in-right opacity-75 fs-5 align-middle me-2"></i>
                      Sign out
                    </a>
                  </div>
                </div>
              </li>
              <li
                class="nav-item dropdown ms-1 ms-lg-3 d-flex d-lg-none align-items-center justify-content-center flex-column h-100">
                <a href="#"
                  class="nav-link sidebar-trigger-lg-down size-35 p-0 fs-4 d-flex align-items-center justify-content-center rounded-3">
                  <i class="bi bi-list"></i>
                </a>
              </li>
            </ul>
          </header>
          <!--Main Header End-->
