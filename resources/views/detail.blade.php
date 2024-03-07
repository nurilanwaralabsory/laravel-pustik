@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="feature-banner header-text">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <img src="{{ asset('upload' . '/' . $book->cover) }}" alt=""
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
                                <img src="{{ asset('upload' . '/' . $bk->cover) }}" alt="" class="templatemo-item"
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
@endsection
