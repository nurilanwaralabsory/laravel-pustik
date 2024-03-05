<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Detail - PUSTIK</title>

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
                                        <img src="{{ $book->cover }}" alt=""
                                            style="border-radius: 23px; width: 300px; height: 400px;">
                                        <div class="text-center mt-3">
                                            <button type="button" class="btn btn-primary w-50" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                Borrow
                                            </button>
                                        </div>
                                    </div>
                                    @include('modal')
                                    <div class="col-lg-8">
                                        <h2 class="text-center mb-5">Details Books</h2>
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
                                                <tr>
                                                    <th>Description</th>
                                                    <td>{{ $book->description }}</td>
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
        <!-- ***** Featured End ***** -->-

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
                                <img src="{{ $bk->cover }}" alt="" class="templatemo-item"
                                    style="height: 100px">
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
