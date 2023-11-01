<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="icon" type="image/x-icon" href="{{ url('/_assets/img') }}/icon-web.jpeg" />

        <!-- PWA  -->
    <meta name="theme-color" content="#6777ef"/>
    <link rel="apple-touch-icon" href="{{ asset('logo.PNG') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">

        <!--Font awesome icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <!--Google web fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="{{asset('assets')}}/css/style.min.css" id="switchThemeStyle">
        <style>
          .watermark-100-image {
              opacity: 0.19;
              color: BLACK;
              position: absolute; 
              bottom: 10px; 
              right: 10px; 
              
          }
        </style>
    </head>

    <body>
<!--Theme mode switcher-->
<div class="position-absolute size-40 me-2 mt-2 end-0 top-0 z-fixed">
    <div class="dropdown">
      <button class="btn btn-outline-secondary size-35 fs-5 d-flex align-items-center justify-content-center p-0"
        id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" data-bs-display="static">
        <span class="bi my-1 theme-icon-active"><i class="bi bi-sun"></i></span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="bd-theme" style="--bs-dropdown-min-width: 8rem;">
        <li class="mb-1">
          <button type="button" class="dropdown-item d-flex align-items-center active"
            data-bs-theme-value="light">
            <span class="bi me-2 theme-icon"><i class="bi bi-sun"></i></svg>
              Light
          </button>
        </li>
        <li class="mb-1">
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark">
            <span class="bi me-2 theme-icon"><i class="bi bi-moon"></i></span>
            Dark
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto">
            <span class="bi me-2 theme-icon"><i class="bi bi-circle-half"></i></span>
            Auto

          </button>
        </li>
      </ul>
    </div>
  </div>
          <!--////////////////// PreLoader Start//////////////////////-->
          <div class="loader">
            <!--Placeholder animated layout for preloader-->
            <div class="d-flex flex-column flex-root">
              <div class="page d-flex flex-row flex-column-fluid">
                <div class="page-content ps-0 ms-0 d-flex flex-column flex-row-fluid">
                  <div
                    class="content flex-column p-4 pb-0 d-flex justify-content-center align-items-center flex-column-fluid position-relative">
                    <div class="w-100 h-100 position-relative d-flex align-items-center justify-content-center">
                      <div class="spinner-border me-3 text-primary" role="status">
                      </div> 
                      <div>
                      <span>Loading...</span>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--////////////////// /.PreLoader END//////////////////////-->

        <div class="d-flex flex-column flex-root">
            <!--Page-->
            <div class="page d-flex flex-row flex-column-fluid">
                
                <!--///////////Page content wrapper///////////////-->
                <main class="page-content overflow-hidden ms-0 d-flex flex-column flex-row-fluid">

                    <!--//content//-->
                    <div class="content p-1 d-flex flex-column-fluid position-relative">
                        <div class="container py-4">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-md-8 col-lg-5 col-xl-4">
                                    <!--Logo-->
                                    <a href="index.html"
                                        class="d-flex position-relative mb-4 z-1 align-items-center justify-content-center">
                                        {{-- <img src="{{ asset('_assets/user-profile/default.png') }}" width="100px" class="rounded-circle" alt=""> --}}
                                        <img src="{{ url('/_assets/img') }}/icon-web.jpeg" width="150px" class="rounded-circle" alt="">
                                    </a>
                                    <!--Card-->
                                    <div class="card card-body p-4">
                                        <h4 class="text-center">Welcome Back!</h4>
                                        <p class="mb-4 text-muted text-center">
                                            Please Sign In with details...
                                        </p>
                                        <form action="{{ url('/login') }}" method="POST" class=" z-1 position-relative needs-validation" novalidate="">
                                            @csrf
                                            <div class="form-floating mb-3">
                                                <input type="email" id="username" name="email" class="form-control" value="{{old('email')}}" required="" id="floatingInput"
                                                    placeholder="name@example.com">
                                                <label for="floatingInput">Email address</label>
                                                <span class="invalid-feedback">Please enter a valid email address</span>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="password" id="password" value="{{old('password')}}" name="password" required="" class="form-control"
                                                    id="floatingPassword" placeholder="Password">
                                                <label for="floatingPassword">Password</label>
                                                <span class="invalid-feedback">Enter the password</span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <div class="form-check">
                                                    <input class="form-check-input me-1" id="terms" type="checkbox"
                                                        value="">
                                                    <label class="form-check-label" for="terms">Remember Me</label>
                                                </div>
                                                <div>
                                                    <a href="page-auth-recover-pass.html" class="small text-muted">Forget Password?</a>
                                                </div>
                                            </div>
                                            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign In</button>
                                            <hr class="mt-4 mb-3">
                                            <p class="text-muted text-center">
                                                Don’t have an account yet? <a href="{{url('/register')}}"
                                                    class="ms-1">Sign Up</a>

                                            </p>
                                            {{-- <div class="d-flex align-items-center pb-3">
                                                <span class="flex-grow-1 border-bottom pt-1"></span>
                                                <span
                                                    class="d-inline-flex align-items-center justify-content-center lh-1 size-30 rounded-circle text-mono">or</span>
                                                <span class="flex-grow-1 border-bottom pt-1"></span>
                                            </div>
                                            <div class="d-grid">
                                                <a href="#!"
                                                    class="d-flex justify-content-center hover-lift btn-secondary btn position-relative center-both">
                                                   <div class="position-relative d-flex align-items-center">
                                                        <svg fill="currentColor" class="me-2" width="16" height="16" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24"><path d="M12.48 10.92v3.28h7.84c-.24 1.84-.853 3.187-1.787 4.133-1.147 1.147-2.933 2.4-6.053 2.4-4.827 0-8.6-3.893-8.6-8.72s3.773-8.72 8.6-8.72c2.6 0 4.507 1.027 5.907 2.347l2.307-2.307C18.747 1.44 16.133 0 12.48 0 5.867 0 .307 5.387.307 12s5.56 12 12.173 12c3.573 0 6.267-1.173 8.373-3.36 2.16-2.16 2.84-5.213 2.84-7.667 0-.76-.053-1.467-.173-2.053H12.48z"/></svg>
                                                        <span>sign in with google</span>
                                                    </div>
                                                </a>
                                            </div> --}}
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="watermark-100-image">
                      {{-- <center> --}}
                        <img src="{{ url('/_assets/img') }}/icon-web.jpeg" width="200px" class="imagenya" alt="">
                      {{-- </center> --}}
                    </div>

                    <!--///////////Page content wrapper end///////////////-->

                     <!--//Page-footer//-->
                     <footer class="pb-4">
                        <div class="container-fluid px-4">
                          <span class="d-block lh-sm small text-muted text-end">&copy;
                            <script>
                              document.write(new Date().getFullYear())
                            </script>. Copyright
                          </span>
                        </div>
                      </footer>
                      <!--/.Page Footer End-->
                </main>
            </div>
        </div>
        
        <!--////////////Theme Core scripts Start/////////////////-->

        <script src="{{asset('assets')}}/js/theme.bundle.js"></script>
        <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

        <!--////////////Theme Core scripts End/////////////////-->

        <script src="{{ asset('/sw.js') }}"></script>
    <script>
        if (!navigator.serviceWorker.controller) {
            navigator.serviceWorker.register("/sw.js").then(function (reg) {
                console.log("Service worker has been registered for scope: " + reg.scope);
            });
        }
    </script>

    </body>

</html>
