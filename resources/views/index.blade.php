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
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    @vite(['resources/scss/app.css', 'resources/js/app.js'])
</head>

<body>

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
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <span class="fs-2 fw-bolder" style="color: #e75e8d">FAJAR</span>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Search End ***** -->
                        <div class="search-input">
                            <form id="search" action="#">
                                <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword"
                                    onkeypress="handle" />
                                <i class="fa fa-search"></i>
                            </form>
                        </div>
                        <!-- ***** Search End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="index.html" class="active">Home</a></li>
                            <li><a href="browse.html">Browse</a></li>
                            <li><a href="details.html">Details</a></li>
                            <form method="POST" action="{{ route('logout') }}">
                                <li class="mt-1" :href="route('logout')"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                    @csrf
                                    <a href="#">{{ Auth::user()->name }}
                                        <img src="{{ asset('template') }}/assets/images/profile-header.jpg"
                                            alt="" style="width: 20px">
                                    </a>
                                </li>
                            </form>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">

                    <!-- ***** Banner Start ***** -->
                    <div class="main-banner">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="header-text">
                                    <h6>Welcome To PUSTIK</h6>
                                    <h4><em>Perpustakaan</em> Pesantren PeTIK</h4>
                                    <div class="main-button">
                                        <a href="browse.html">Browse Book</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ***** Banner End ***** -->

                    <!-- ***** Most Popular Start ***** -->
                    <div class="most-popular">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="heading-section">
                                    <h4><em>Most Popular Books</em> Right Now</h4>
                                </div>
                                <div class="row">
                                    @foreach ($books as $book)
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="item">
                                                <img src="{{ $book->cover }}" alt="">
                                                <h4>
                                                    {{ $book->title }}<br><span>{{ $book->author }}</span></h4>
                                            </div>
                                        </div>
                                    @endforeach

                                    {{-- <div class="col-lg-3 col-sm-6">
                                        <div class="item">
                                            <img src="{{ asset('template') }}/assets/images/popular-02.jpg"
                                                alt="">
                                            <h4>PubG<br><span>Battle S</span></h4>
                                            <ul>
                                                <li><i class="fa fa-star"></i> 4.8</li>
                                                <li><i class="fa fa-download"></i> 2.3M</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="item">
                                            <img src="{{ asset('template') }}/assets/images/popular-03.jpg"
                                                alt="">
                                            <h4>Dota2<br><span>Steam-X</span></h4>
                                            <ul>
                                                <li><i class="fa fa-star"></i> 4.8</li>
                                                <li><i class="fa fa-download"></i> 2.3M</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="item">
                                            <img src="{{ asset('template') }}/assets/images/popular-04.jpg"
                                                alt="">
                                            <h4>CS-GO<br><span>Legendary</span></h4>
                                            <ul>
                                                <li><i class="fa fa-star"></i> 4.8</li>
                                                <li><i class="fa fa-download"></i> 2.3M</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-lg-6 col-sm-6">
                                                    <div class="item inner-item">
                                                        <img src="{{ asset('template') }}/assets/images/popular-05.jpg"
                                                            alt="">
                                                        <h4>Mini Craft<br><span>Legendary</span></h4>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i> 4.8</li>
                                                            <li><i class="fa fa-download"></i> 2.3M</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-6">
                                                    <div class="item">
                                                        <img src="{{ asset('template') }}/assets/images/popular-06.jpg"
                                                            alt="">
                                                        <h4>Eagles Fly<br><span>Matrix Games</span></h4>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i> 4.8</li>
                                                            <li><i class="fa fa-download"></i> 2.3M</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="item">
                                            <img src="{{ asset('template') }}/assets/images/popular-07.jpg"
                                                alt="">
                                            <h4>Warface<br><span>Max 3D</span></h4>
                                            <ul>
                                                <li><i class="fa fa-star"></i> 4.8</li>
                                                <li><i class="fa fa-download"></i> 2.3M</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="item">
                                            <img src="{{ asset('template') }}/assets/images/popular-08.jpg"
                                                alt="">
                                            <h4>Warcraft<br><span>Legend</span></h4>
                                            <ul>
                                                <li><i class="fa fa-star"></i> 4.8</li>
                                                <li><i class="fa fa-download"></i> 2.3M</li>
                                            </ul>
                                        </div>
                                    </div> --}}
                                    <div class="col-lg-12">
                                        <div class="main-button">
                                            <a href="browse.html">Discover Popular</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ***** Most Popular End ***** -->

                    <!-- ***** Gaming Library Start ***** -->
                    <div class="gaming-library">
                        <div class="col-lg-12">
                            <div class="heading-section">
                                <h4><em>Your Gaming</em> Library</h4>
                            </div>
                            <div class="item">
                                <ul>
                                    <li><img src="{{ asset('template') }}/assets/images/game-01.jpg" alt=""
                                            class="templatemo-item">
                                    </li>
                                    <li>
                                        <h4>Dota 2</h4><span>Sandbox</span>
                                    </li>
                                    <li>
                                        <h4>Date Added</h4><span>24/08/2036</span>
                                    </li>
                                    <li>
                                        <h4>Hours Played</h4><span>634 H 22 Mins</span>
                                    </li>
                                    <li>
                                        <h4>Currently</h4><span>Downloaded</span>
                                    </li>
                                    <li>
                                        <div class="main-border-button border-no-active"><a
                                                href="#">Donwloaded</a></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="item">
                                <ul>
                                    <li><img src="{{ asset('template') }}/assets/images/game-02.jpg" alt=""
                                            class="templatemo-item">
                                    </li>
                                    <li>
                                        <h4>Fortnite</h4><span>Sandbox</span>
                                    </li>
                                    <li>
                                        <h4>Date Added</h4><span>22/06/2036</span>
                                    </li>
                                    <li>
                                        <h4>Hours Played</h4><span>740 H 52 Mins</span>
                                    </li>
                                    <li>
                                        <h4>Currently</h4><span>Downloaded</span>
                                    </li>
                                    <li>
                                        <div class="main-border-button"><a href="#">Donwload</a></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="item last-item">
                                <ul>
                                    <li><img src="{{ asset('template') }}/assets/images/game-03.jpg" alt=""
                                            class="templatemo-item">
                                    </li>
                                    <li>
                                        <h4>CS-GO</h4><span>Sandbox</span>
                                    </li>
                                    <li>
                                        <h4>Date Added</h4><span>21/04/2036</span>
                                    </li>
                                    <li>
                                        <h4>Hours Played</h4><span>892 H 14 Mins</span>
                                    </li>
                                    <li>
                                        <h4>Currently</h4><span>Downloaded</span>
                                    </li>
                                    <li>
                                        <div class="main-border-button border-no-active"><a
                                                href="#">Donwloaded</a></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="main-button">
                                <a href="profile.html">View Your Library</a>
                            </div>
                        </div>
                    </div>
                    <!-- ***** Gaming Library End ***** -->
                </div>
            </div>
        </div>
    </div>

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
