<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Cyborg - Awesome HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('template') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/fontawesome.css">
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/owl.css">
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 579 Cyborg Gaming

https://templatemo.com/tm-579-cyborg-gaming

-->
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
                    <a href="#" class="logo">
                      <span class="fs-2 fw-bolder" style="color: #e75e8d">PUSTIK</span>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Search End ***** -->
                    <div class="search-input">
                      <form id="search" action="#">
                        <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                        <i class="fa fa-search"></i>
                      </form>
                    </div>
                    <!-- ***** Search End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{ route('dashboard') }}">Home</a></li>
                        <li><a href="{{ route('books') }}">Books</a></li>
                        <li><a href="#" class="active">Details</a></li>
                        <li><a href="streams.html">Streams</a></li>
                        <li><a href="profile.html">Profile <img src="assets/images/profile-header.jpg" alt=""></a></li>
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

          <!-- ***** Featured Start ***** -->
          <div class="row">
            <div class="col-lg-12">
              <div class="feature-banner header-text">
                <div class="row">
                  <div class="col-lg-4">
                    <img src="{{ $book->cover }}" alt="" style="border-radius: 23px; width: 300px; height: 400px;">
                  </div>
                  <div class="col-lg-8">
                    <h2 class="text-center mb-5">Details Buku</h2>
                                <div class="table-responsive">
                                    <table class="table table-lg text-white">
                                            <tr>
                                                <th>Title</th>
                                                <td>{{ $book->title }}</td>
                                            </tr>
                                            <tr>
                                                <th>Author</th>
                                                <td>{{ $book->author }}</td>
                                            </tr>
                                            <tr>
                                                <th>Publisher</th>
                                                <td>{{ $book->publisher }}</td>
                                            </tr>
                                            <tr>
                                                <th>ISBN</th>
                                                <td>{{ $book->isbn }}</td>
                                            </tr>
                                            <tr>
                                                <th>Category</th>
                                                <td>{{ $book->category->category_name }}</td>
                                            </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                  <!-- <div class="col-lg-8">
                    <div class="thumb">
                      <img src="assets/images/feature-right.jpg" alt="" style="border-radius: 23px;">
                      <a href="https://www.youtube.com/watch?v=r1b03uKWk_M" target="_blank"><i class="fa fa-play"></i></a>
                    </div>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Featured End ***** -->

          <!-- ***** Details Start ***** -->
          <div class="game-details">
            <div class="row">
              <div class="col-lg-12">
                <h2>Deskripsi Buku</h2>
              </div>
              <div class="col-lg-12">
                <div class="content">
                  <div class="row">
                    <div class="col-lg-4">
                      <img src="{{ asset('template') }}/assets/images/details-01.jpg" alt="" style="border-radius: 23px; margin-bottom: 30px;">
                    </div>
                    <div class="col-lg-4">
                      <img src="{{ asset('template') }}/assets/images/details-02.jpg" alt="" style="border-radius: 23px; margin-bottom: 30px;">
                    </div>
                    <div class="col-lg-4">
                      <img src="{{ asset('template') }}/assets/images/details-03.jpg" alt="" style="border-radius: 23px; margin-bottom: 30px;">
                    </div>
                    <div class="col-lg-12">
                      <p>{{ $book->description }}</p>
                    </div>
                    <div class="col-lg-12">
                      <div class="main-border-button">
                        <a href="#">Pinjam Buku Sekarang</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Details End ***** -->

          <!-- ***** Other Start ***** -->
          <div class="other-games">
            <div class="row">
              <div class="col-lg-12">
                <div class="heading-section">
                  <h4><em>Other</em> Books</h4>
                </div>
              </div>
              @foreach ($books as $bk)
              <div class="col-lg-6">
                  <div class="item">
                    <a href="{{ route('detail', $bk->id) }}">
                      <img src="{{ $bk->cover }}" alt="" class="templatemo-item" style="height: 100px">
                      <h4>{{ $bk->title }}</h4><span>{{ $bk->category->category_name }}</span>
                    </a>
                  </div>
              </div>
          @endforeach
            </div>
          </div>
          <!-- ***** Other End ***** -->

        </div>
      </div>
    </div>
  </div>
  
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2036 <a href="#">Cyborg Gaming</a> Company. All rights reserved. 
          
          <br>Design: <a href="https://templatemo.com" target="_blank" title="free CSS templates">TemplateMo</a>  Distributed By <a href="https://themewagon.com" target="_blank" >ThemeWagon</a></p>
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
