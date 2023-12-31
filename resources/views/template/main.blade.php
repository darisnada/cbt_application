<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CBT - {{$title}}</title>

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


    <!--Simplebar css-->
    <link rel="stylesheet" href="{{url('assets')}}/vendor/css/simplebar.min.css">

    <!--Choices css-->
    <link rel="stylesheet" href="{{url('assets')}}/vendor/css/choices.min.css">

    <!--Date range picker-->
    <link rel="stylesheet" href="{{url('assets')}}/vendor/css/daterangepicker.css">

    {{-- DataTable CSS --}}
    <script src="{{ url('_assets') }}/cbt-malela/assets/js/libs/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="{{url('assets')}}/datatable.bootstrap5.min.css">

    <!--Main style-->
    <link rel="stylesheet" href="{{url('assets')}}/css/style.min.css" id="switchThemeStyle">

    {{-- <script src="{{asset('_assets/ew/js/jquery.js')}}"></script> --}}
    {!! $plugin !!}
        <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
        <script src="{{ url('/_assets/cbt-malela') }}/plugins/sweetalerts/sweetalert2.min.js"></script>
        <script src="{{ url('/_assets/cbt-malela') }}/plugins/sweetalerts/custom-sweetalert.js"></script>
        <script src="{{ url('/_assets/cbt-malela') }}/bootstrap/js/popper.min.js"></script>
        <script src="{{ url('/_assets/cbt-malela') }}/bootstrap/js/bootstrap.min.js"></script>
        <script src="{{ url('/_assets/cbt-malela') }}/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="{{ url('/_assets/cbt-malela') }}/assets/js/app.js"></script>
        <script src="{{ url('/_assets/cbt-malela') }}/plugins/font-icons/feather/feather.min.js"></script>
        <!-- Core Css Quill editor -->
        <link href="{{ url('/assets') }}/vendor/css/quill.snow.css" rel="stylesheet">
        <script>
        //     $(document).ready(function() {
        //         App.init();
        //     });
        </script>
        <script src="{{ url('/_assets/cbt-malela') }}/assets/js/custom.js"></script>

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

<body class="sidebar-noneoverflow">

        <!--////////////////// PreLoader Start//////////////////////-->
      <div class="loader">
        <!--Placeholder animated layout for preloader-->
        <div class="d-flex flex-column flex-root">
          <div class="page d-flex flex-row flex-column-fluid">

            <!--Sidebar start-->
            <aside class="page-sidebar placeholder-wave">
              <div class="placeholder col-12 h-100 bg-gray"></div>
            </aside>
            <div class="page-content d-flex flex-column flex-row-fluid">
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
        {{-- {{session()->get('role')}} --}}
        @if (session()->get('role') == 3)
          @if (session()->get('is_active') == 0)
            @include('template.navbar.no_siswa')
          @else 
            @include('template.navbar.siswa')
          @endif
        @endif
        @if (session()->get('role') == 2)
          @include('template.navbar.guru')
        @endif
        @if (session()->get('role') == 1)
          @include('template.navbar.admin')
        @endif
        <!--///////////Page content wrapper///////////////-->
        <main class="page-content d-flex flex-column flex-row-fluid">
            @include('template.topbar')

            <!--//Page Toolbar//-->
            <div class="toolbar p-4 pb-0">
                <div class="position-relative container-fluid px-0">
                <div class="row align-items-center position-relative">
                    <div class="col-md-5 mb-3 mb-lg-0">

                    {{-- <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#!" class="">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                        <li class="breadcrumb-item active">Default</li>
                        </ol>
                    </nav> --}}
                    </div>
                    <div class="col-md-7 text-md-end">
                    <!-- <div class="d-flex justify-content-md-end align-items-center">
                        <div id="reportrange" class="bg-body-secondary rounded px-3 py-1">
                        <i class="bi bi-calendar me-1 pe-none"></i>
                        <span class="small d-inline-block ms-1"></span>
                        </div>
                    </div> -->
                    </div>
                </div>
                </div>
            </div>
            <!--//Page Toolbar End//-->

          <!--//Page content//-->
          <div class="content p-4 pb-0 d-flex flex-column-fluid">
            <div class="container">
              @yield("content")
            </div>
            
            {{-- <div class="watermark-100-image"> --}}
              {{-- <center> --}}
                {{-- <img src="{{ url('/_assets/img') }}/icon-web.jpeg" width="200px" class="imagenya" alt=""> --}}
              {{-- </center> --}}
            {{-- </div> --}}
          </div>
          <!--//Page content End//-->

        </main>
        <!--///////////Page content wrapper End///////////////-->
      </div>
    </div>

    <!--////////////Theme Core scripts Start/////////////////-->

    <script src="{{url('assets')}}/js/theme.bundle.js"></script>
    <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!--////////////Theme Core scripts End/////////////////-->


    <!--Charts-->
    <script src="{{url('assets')}}/vendor/apexcharts.min.js"></script>
    <!--Dashboard duration calendar-->
    <script src="{{url('assets')}}/vendor/moment.min.js"></script>
    <script src="{{url('assets')}}/vendor/daterangepicker.js"></script>
    {{-- <script src="{{url('assets')}}/summernote/summernote.js"></script> --}}

    <!--Datatables-->
    <script src="{{url('assets')}}/datatable/jquery.datatable.min.js"></script>
    <script src="{{url('assets')}}/datatable/datatable.bootstrap5.min.js"></script>
    <script src="{{url('assets')}}/vendor/quill.min.js"></script>
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script> --}}
    {{-- <script src="//cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script> --}}
    <script src="{{ asset('/assets') }}/ckeditor/ckeditor.js"></script>
    <script>
      $(document).ready(function (){
        var initQuill = document.querySelectorAll("[data-quill]");
        initQuill.forEach((qe) => {
            const qt = {
                ...(qe.dataset.quill ? JSON.parse(qe.dataset.quill) : {}),
                modules: {
                    toolbar: [
                        [{ header: [1, 2, false] }],
                        ["bold", "underline"],
                        ["link", "blockquote", "code", "image"],
                        [{ list: "ordered" }, { list: "bullet" }]
                    ]
                },
                theme: "snow"
            };
            new Quill(qe, qt);
        });
      })
      CKEDITOR.replace('editor');
      function editorck(a) {
        CKEDITOR.replace('ckeditor'+a, {
            extraPlugins: 'easyimage',
            // easyimage_imageUploadUrl: '{{ route("summernote_upload") }}?_token=' + '{{ csrf_token() }}',
            cloudServices_tokenUrl: '{{ csrf_token() }}',
            cloudServices_uploadUrl: '{{ route("summernote_upload") }}',
            // filebrowserUploadMethod: 'form',
            // filebrowserUploadUrl: '{{ route("summernote_upload") }}?_token=' + '{{ csrf_token() }}',
        });
      }

      CKEDITOR.replace('editor1', {
          // extraPlugins: 'easyimage',
          // cloudServices_tokenUrl: '{{ url("?_token=".csrf_token()) }}',
          // cloudServices_uploadUrl: '{{ url("summernote/upload"."?_token=".csrf_token()) }}',
          // easyimage_imageUploadUrl: '{{route("summernote_upload")}}',
          // filebrowserUploadMethod: 'form',
          // filebrowserUploadUrl: '{{ route("summernote_upload") }}?_token=' + '{{ csrf_token() }}',
      });
  </script>
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        // Datatables Responsive
        $("#datatableId").DataTable({
          "filter":false,
                  "length":false
        });
      });
    </script>

    <script>
        $(".logout").on("click",function(t){t.preventDefault();var n=$(this).attr("href");swal({title:"yakin logout?",text:"anda harus login ulang untuk masuk ke aplikasi!",type:"warning",showCancelButton:!0,cancelButtonText:"tidak",confirmButtonText:"ya, logout",padding:"2em"}).then(function(t){t.value&&(document.location.href=n)}),$("#swal2-container").css("z-index","9999")}),feather.replace();
    </script>

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
