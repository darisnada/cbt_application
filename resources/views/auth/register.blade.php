<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>{{ $title }}</title>
    <link rel="icon" type="image/x-icon" href="{{ url("/assets/img") }}/cbt-malela.png" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="{{ url("/assets/cbt-malela") }}/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url("/assets/cbt-malela") }}/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="{{ url("/assets/cbt-malela") }}/assets/css/authentication/form-1.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ url("/assets/cbt-malela") }}/assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="{{ url("/assets/cbt-malela") }}/assets/css/forms/switches.css">
    <script src="{{ url("/assets/cbt-malela") }}/assets/js/libs/jquery-3.1.1.min.js"></script>
    <link href="{{ url("/assets/cbt-malela") }}/plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <script src="{{ url("/assets/cbt-malela") }}/plugins/sweetalerts/sweetalert2.min.js"></script>
    <style>
        svg#freepik_stories-mobile-login:not(.animated) .animable {
            opacity: 0;
        }

        svg#freepik_stories-mobile-login.animated #freepik--background-complete--inject-39 {
            animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideDown, 1.5s Infinite linear floating;
            animation-delay: 0s, 1s;
        }

        svg#freepik_stories-mobile-login.animated #freepik--Floor--inject-39 {
            animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideDown;
            animation-delay: 0s;
        }

        svg#freepik_stories-mobile-login.animated #freepik--Plant--inject-39 {
            animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
            animation-delay: 0s;
        }

        svg#freepik_stories-mobile-login.animated #freepik--Padlock--inject-39 {
            animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideDown;
            animation-delay: 0s;
        }

        svg#freepik_stories-mobile-login.animated #freepik--Device--inject-39 {
            animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut, 1.5s Infinite linear wind;
            animation-delay: 0s, 1s;
        }

        svg#freepik_stories-mobile-login.animated #freepik--speech-bubble--inject-39 {
            animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomIn;
            animation-delay: 0s;
        }

        svg#freepik_stories-mobile-login.animated #freepik--Character--inject-39 {
            animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideLeft;
            animation-delay: 0s;
        }

        @keyframes slideDown {
            0% {
                opacity: 0;
                transform: translateY(-30px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes floating {
            0% {
                opacity: 1;
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                opacity: 1;
                transform: translateY(0px);
            }
        }

        @keyframes zoomOut {
            0% {
                opacity: 0;
                transform: scale(1.5);
            }

            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes wind {
            0% {
                transform: rotate(0deg);
            }

            25% {
                transform: rotate(1deg);
            }

            75% {
                transform: rotate(-1deg);
            }
        }

        @keyframes zoomIn {
            0% {
                opacity: 0;
                transform: scale(0.5);
            }

            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes slideLeft {
            0% {
                opacity: 0;
                transform: translateX(-30px);
            }

            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }
    </style>
</head>

<body class="form">

    <div class="form-container">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">
                        <h1 class="">Daftar Akun<br /><span class="brand-name">CBT Malela</span></h1>
                        <p class="signup-link">Sudah punya akun? <a href="{{ url("/") }}">Log in</a></p>
                        <form action="{{ url("/register") }}" method="POST" class="text-left" id="myform">
                            @csrf
                            <div class="form">
                                <div id="username-field" class="field-wrapper input">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <input type="text" id="username" name="nama" type="text" class="form-control" value="<?= old('nama'); ?>" placeholder="Nama" required>
                                    @error('nama')
                                        <div class="invalid-feedback" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror  
                                </div>
                                <div id="email-field" class="field-wrapper input">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                                    </svg>
                                    <input type="email" id="email" name="email" type="text" value="<?= old('email'); ?>" placeholder="Email" required>
                                    @error('email')
                                        <div class="invalid-feedback" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror  
                                </div>
                                <div id="password-field" class="field-wrapper input mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>
                                    <input type="password" id="password" name="password" type="password" value="" placeholder="Password" required>
                                    @error('password')
                                        <div class="invalid-feedback" style="display: block;">
                                            {{ $message }}
                                        </div>
                                    @enderror  
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="laki-laki" name="gender" value="Laki - Laki" class="custom-control-input" @if(old('gender') == "Laki - Laki") checked @endif @if(old('gender') == null) checked @endif>
                                        <label class="custom-control-label" for="laki-laki">Laki Laki</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="Perempuan" name="gender" value="Perempuan" class="custom-control-input" @if(old('gender') == "Perempuan") checked @endif>
                                        <label class="custom-control-label" for="Perempuan">Perempuan</label>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-top: 10px;">
                                     @if (old('saya_siswa') != null)
                                        <input type="checkbox" id="saya_siswa" name="saya_siswa" value="1" checked><label for="saya_siswa" style="margin-left: 5px;">Saya Siswa</label>
                                    @else
                                        <input type="checkbox" id="saya_siswa" name="saya_siswa" value="1"><label for="saya_siswa" style="margin-left: 5px;">Saya Siswa</label>
                                    @endif
                                </div>
                                <div class="siswa-field">
                                    <div id="username-field" class="field-wrapper input">
                                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                            <line x1="4" y1="9" x2="20" y2="9"></line>
                                            <line x1="4" y1="15" x2="20" y2="15"></line>
                                            <line x1="10" y1="3" x2="8" y2="21"></line>
                                            <line x1="16" y1="3" x2="14" y2="21"></line>
                                        </svg>
                                        <input type="text" id="no_induk" name="nis" type="text" class="form-control no-induk" placeholder="Nomor Induk" autocomplete="off">
                                        @error('nis')
                                            <div class="invalid-feedback" style="display: block;">
                                                {{ $message }}
                                            </div>
                                        @enderror  
                                    </div>
                                    <div id="no_induk-field" class="field-wrapper input">
                                        <select name="kelas_id" id="" class="form-control">
                                            @foreach ($kelas as $k)
                                                <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper toggle-pass">
                                        <p class="d-inline-block">Show Password</p>
                                        <label class="switch s-primary">
                                            <input type="checkbox" id="toggle-password" class="d-none">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-primary" value="">Get Started!</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                        <p class="terms-conditions" style="margin-top: 30px;">© 2022 CBT-MALELA Laravel8 by <a href="https://www.youtube.com/channel/UCvteoPo7Th3Q2Mdi9c8CT1w" target="_blank">ABDULOH</a> All Rights Reserved. <a href="https://www.freepik.com/" target="_blank">Illustration by Freepik</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-image">
            <div class="l-image d-flex align-center">
               <img src="{{asset('assets/img/register.png')}}" height="700px" style="margin-top:50px" alt="">
            </div>
        </div>
    </div>


    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ url("/assets/cbt-malela") }}/bootstrap/js/popper.min.js"></script>
    <script src="{{ url("/assets/cbt-malela") }}/bootstrap/js/bootstrap.min.js"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ url("/assets/cbt-malela") }}/assets/js/authentication/form-1.js"></script>
    {!! session('pesan'); !!}

    <script>
        $(document).ready(function(){$("#myform");const i=$("#saya_siswa"),e=$(".siswa-field");e.hide(),i.on("click",function(){$(this).is(":checked")?(e.show(),e.find("input").attr("required",!0),e.find("select").attr("required",!0)):(e.hide(),e.find("input").attr("required",!1),e.find("select").attr("required",!1))})});
    </script>
    @if (old('saya_siswa') != null)
        <script>
           setTimeout(()=>{const s=$(".siswa-field");s.show(),$("#no_induk").val("{{ old('nis') }}"),$("select[name=kelas_id]").val("{{ old('kelas_id') }}")},300);
        </script>
    @endif

</body>


</html>