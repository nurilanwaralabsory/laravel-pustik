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
                            <span class="fs-2 fw-bolder" style="color: #e75e8d">PUSTIK</span>
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
                            <li><a href="{{route('dashboard')}}">Home</a></li>
                            <li><a href="browse.html" class="active">Browse</a></li>
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
                    
                     <!-- ***** Featured Games Start ***** -->
          <div class="row mt-5">
            <div class="col-lg-8">
              <div class="featured-games header-text">
                <div class="heading-section">
                  <h4><em>Most Popular Books</em> Right Now</h4>
                </div>
                <div class="owl-features owl-carousel">
                    @foreach ($books as $book)
                  <div class="item">
                    <div class="thumb">
                      <img style="height: 45vh" src="{{$book->cover}}" alt="">
                      <div class="hover-effect">
                        <h6><a href="#">Details</a></h6>
                      </div>
                    </div>
                    <h4>{{$book->title}}<br><span>{{$book->author}}</span></h4>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="top-downloaded">
                <div class="heading-section">
                  <h4><em>Top</em> Downloaded</h4>
                </div>
                <ul>
                  <li>
                    <img src="{{asset('template')}}/assets/images/game-01.jpg" alt="" class="templatemo-item">
                    <h4>Fortnite</h4>
                    <h6>Sandbox</h6>
                    <span><i class="fa fa-star" style="color: yellow;"></i> 4.9</span>
                    <span><i class="fa fa-download" style="color: #ec6090;"></i> 2.2M</span>
                    <div class="download">
                      <a href="#"><i class="fa fa-download"></i></a>
                    </div>
                  </li>
                  <li>
                    <img src="{{asset('template')}}/assets/images/game-02.jpg" alt="" class="templatemo-item">
                    <h4>CS-GO</h4>
                    <h6>Legendary</h6>
                    <span><i class="fa fa-star" style="color: yellow;"></i> 4.9</span>
                    <span><i class="fa fa-download" style="color: #ec6090;"></i> 2.2M</span>
                    <div class="download">
                      <a href="#"><i class="fa fa-download"></i></a>
                    </div>
                  </li>
                  <li>
                    <img src="{{asset('template')}}/assets/images/game-03.jpg" alt="" class="templatemo-item">
                    <h4>PugG</h4>
                    <h6>Battle Royale</h6>
                    <span><i class="fa fa-star" style="color: yellow;"></i> 4.9</span>
                    <span><i class="fa fa-download" style="color: #ec6090;"></i> 2.2M</span>
                    <div class="download">
                      <a href="#"><i class="fa fa-download"></i></a>
                    </div>
                  </li>
                </ul>
                <div class="text-button">
                  <a href="profile.html">View All Games</a>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Featured Games End ***** -->

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
                                            <a href="#">
                                            <div class="item">
                                                <img src="{{ $book->cover }}" alt="">
                                                <h4>
                                                    {{ $book->title }}<br><span>{{ $book->author }}</span></h4>
                                            </div>
                                        </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ***** Most Popular End ***** -->
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
