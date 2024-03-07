<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>PUSTIK - Perpustakaan Pesantren PeTIK</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('template') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/fontawesome.css">
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/owl.css">
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    @vite(['resources/scss/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('sweetalert::alert')

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @include('partials.navbar')
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    @yield('content')

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright © 2036 <a href="#">Cyborg Gaming</a> Company. All rights reserved.

                        <br>Design: <a href="https://templatemo.com" target="_blank"
                            title="free CSS templates">TemplateMo</a> Distributed By <a href="https://themewagon.com"
                            target="_blank">ThemeWagon</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('template') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('template') }}/vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="{{ asset('template') }}/assets/js/isotope.min.js"></script>
    <script src="{{ asset('template') }}/assets/js/owl-carousel.js"></script>
    <script src="{{ asset('template') }}/assets/js/tabs.js"></script>
    <script src="{{ asset('template') }}/assets/js/popup.js"></script>
    <script src="{{ asset('template') }}/assets/js/custom.js"></script>


</body>

</html>
