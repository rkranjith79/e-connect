<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="csrf-token" content="rQN6A8GwY20IPFkQzkWCjUsLgEVr63pYkYPy790g">
    <meta name="app-url" content="//econnectmatrimony.com/">
    <meta name="file-base-url" content="//econnectmatrimony.com/">
    <!-- Title -->
    <title>E-Connect Matrimony | No. 1 Matrimony in Tiruppur | Tamil Nadu</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="E-Connect Matrimony" />
    <meta name="keywords" content="matrimony,kongu,tamil,matrimony,marriage,bride,groom,tiruppur">

    <!-- Favicon -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="application-name" content="E-Connect Matrimony">
    <meta name="apple-mobile-web-app-title" content="E-Connect Matrimony">
    <meta name="theme-color" content="#248822">
    <meta name="msapplication-navbutton-color" content="#248822">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="msapplication-TileColor" content="#248822">
    <meta name="msapplication-starturl" content="index.html">
    <meta name="msapplication-TileColor" content="#248822">
    <meta name="msapplication-TileImage" content="assets/img/icons/ms-icon-144x144.png">

    <link rel="shortcut icon" href="assets/img/icons/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/img/icons/favicon.ico" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('css/vendors.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aiz-core.css') }}">


    <link rel="stylesheet" href="{{ asset('css/custom-style.css') }}">
    <script>
        var AIZ = AIZ || {};
    </script>

   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Questrial&display=swap" rel="stylesheet">

</head>

<body class="text-left">
    <!-- preloading area start -->
    <style>
        #loading {
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            position: fixed;
            display: block;
            background-color: var(--primary);
            z-index: 9999;
            text-align: center
        }

        #loading div {
            top: 50%;
            left: 0;
            right: 0;
            position: absolute;
            margin: auto;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        #loading img.loading-front {
            height: 110px
        }

        #loading .loading {
            position: relative;
            width: calc(100% - 20px);
            max-width: 250px;
            margin-top: 15px;
            height: 10px;
            border: 1px solid #fff;
            border-radius: 10px
        }

        #loading .loading:before {
            content: "";
            display: block;
            position: absolute;
            width: 0;
            height: 100%;
            background-color: #fff;
            animation: load 2s linear 1;
            animation-fill-mode: forwards
        }

        @keyframes load {
            0 {
                width: 0
            }

            100% {
                width: 100%
            }
        }

        #form_content label.form-label {
            color: #000;
        }

        /* #form_content label.form-label {
            text-shadow: 1px 2px 12px #5e5252;
        } */

        #form_content .section-title {
            color: #fff;
            text-align: center;
            font-weight: bold;
            background: var(--hov-primary);
            background: linear-gradient(225deg, var(--primary) 0%, var(--secondary) 100%);
            border-radius: 5px;
            padding: 3px 0;
            margin: 10px 0;
            font-size: 1.25rem;
        }
    </style>
    <!--  -->
    <!-- preloading area end -->

    <div class="aiz-main-wrapper d-flex flex-column bg-white">

        @include('layouts.includes.user.header')




        @yield('content')



        @include('layouts.includes.user.footer')
        @include('layouts.includes.user.sidebar')

        <div class="close-layer"></div>
        <!-- Go to Top -->
        <button id="goTop" class="btn btn-primary btn-icon btn-circle"><i class="fas fa-angle-up"></i></button>
    </div>



    <div class="modal fade package_update_alert_modal" id="modal-zoom">
        <div class="modal-dialog modal-dialog-centered modal-dialog-zoom">
            <div class="modal-content package_update_alert_modal_content">
                <div class="modal-body text-center">
                    <h4 class="modal-title h6 mb-3">Please Update Your Package.</h4>
                    <hr>
                    <a href="packages.html" class="btn btn-primary mt-2">Package Purchase</a>
                    <button type="button" class="btn btn-danger mt-2" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/vendors.js') }}"></script>
    <script src="{{ asset('js/aiz-core.js') }}"></script>
    <script src="{{ asset('js/custom-script.js') }}"></script>
    <script src="{{ asset('js/jasny-bootstrap.min.js') }}"></script>

    <script type="text/javascript">
        function package_update_alert() {
            $('.package_update_alert_modal').modal('show');
        }
    </script>

    <script type="text/javascript"></script>



</body>


</html>
