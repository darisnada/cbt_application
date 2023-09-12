<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>{{ $title }}</title>
    <link rel="icon" type="image/x-icon" href="{{ url('/assets/img') }}/cbt-malela.png" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="{{ url('/assets/cbt-malela') }}/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('/assets/cbt-malela') }}/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('/assets/cbt-malela') }}/assets/css/authentication/form-1.css" rel="stylesheet"
        type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css"
        href="{{ url('/assets/cbt-malela') }}/assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/assets/cbt-malela') }}/assets/css/forms/switches.css">
    <link href="{{ url('/assets/cbt-malela') }}/plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ url('/assets/cbt-malela') }}/plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css" />
    <script src="{{ url('/assets/cbt-malela') }}/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="{{ url('/assets/cbt-malela') }}/plugins/sweetalerts/sweetalert2.min.js"></script>
    <script src="{{ url('/assets/cbt-malela') }}/plugins/sweetalerts/custom-sweetalert.js"></script>
    <style>
        svg#freepik_stories-mobile-login:not(.animated) .animable {
            opacity: 0;
        }

        svg#freepik_stories-mobile-login.animated #freepik--background-complete--inject-40 {
            animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomIn, 1.5s Infinite linear floating;
            animation-delay: 0s, 1s;
        }

        svg#freepik_stories-mobile-login.animated #freepik--Shadow--inject-40 {
            animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) lightSpeedRight;
            animation-delay: 0s;
        }

        svg#freepik_stories-mobile-login.animated #freepik--Floor--inject-40 {
            animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) fadeIn;
            animation-delay: 0s;
        }

        svg#freepik_stories-mobile-login.animated #freepik--Device--inject-40 {
            animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideUp, 1.5s Infinite linear wind;
            animation-delay: 0s, 1s;
        }

        svg#freepik_stories-mobile-login.animated #freepik--Character--inject-40 {
            animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideLeft;
            animation-delay: 0s;
        }

        svg#freepik_stories-mobile-login.animated #freepik--Plant--inject-40 {
            animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomIn;
            animation-delay: 0s;
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

        @keyframes lightSpeedRight {
            from {
                transform: translate3d(50%, 0, 0) skewX(-20deg);
                opacity: 0;
            }

            60% {
                transform: skewX(10deg);
                opacity: 1;
            }

            80% {
                transform: skewX(-2deg);
            }

            to {
                opacity: 1;
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @keyframes slideUp {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }

            100% {
                opacity: 1;
                transform: inherit;
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
                        <h1 class="">Log In to <a href=""><span class="brand-name">CBT</span></a></h1>
                        @if (count($admin) == 0)
                            <p class="signup-link">Admin belum ada. <a href="{{ url('/install') }}">Buat akun Admin
                                    dulu</a></p>
                        @else
                            <p class="signup-link">Daftar Akun. <a href="{{ url('/register') }}">Klik Disini!</a></p>
                        @endif
                        <form action="{{ url('/login') }}" method="POST" class="text-left">
                            <div class="form">
                                @csrf
                                <div id="username-field" class="field-wrapper input">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <input type="email" id="username" name="email" type="text"
                                        class="form-control" value="{{ old('email') }}" placeholder="Username"
                                        required>
                                </div>

                                <div id="password-field" class="field-wrapper input mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                                        <rect x="3" y="11" width="18" height="11" rx="2"
                                            ry="2"></rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>
                                    <input type="password" id="password" name="password" type="password"
                                        class="form-control" placeholder="Password" required>
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
                                        <button type="submit" class="btn btn-primary" value="">Log In</button>
                                    </div>

                                </div>
                            </div>
                        </form><br>
                        <p class="signup-link">
                            Lupa Password? <a href="{{ url('/recovery') }}">Klik Disini</a>
                        </p>
                        <p class="terms-conditions" style="margin-top: 30px;">© 2022 CBT-MALELA laravel8 by <a href="https://www.youtube.com/channel/UCvteoPo7Th3Q2Mdi9c8CT1w" target="_blank">ABDULOH</a> All Rights Reserved. <a href="https://www.freepik.com/" target="_blank">Illustration by Freepik</a></p>

                    </div>
                </div>
            </div>
        </div>
        <div class="form-image">
            <div class="l-image d-flex align-center">
               <img src="{{asset('assets/img/login.png')}}" alt="">
            </div>
        </div>
    </div>


    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ url('/assets/cbt-malela') }}/bootstrap/js/popper.min.js"></script>
    <script src="{{ url('/assets/cbt-malela') }}/bootstrap/js/bootstrap.min.js"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ url('/assets/cbt-malela') }}/assets/js/authentication/form-1.js"></script>

    {!! session('pesan') !!}
</body>

</html>
