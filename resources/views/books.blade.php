@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="featured-games header-text">
                                <div class="heading-section">
                                    <h4><em>Most Popular Books</em> Right Now</h4>
                                </div>
                                <div class="owl-features owl-carousel">
                                    @foreach ($books as $book)
                                        <div class="item">
                                            <div class="thumb">
                                                <img style="height: 45vh" src="{{ asset('upload' . '/' . $book->cover) }}"
                                                    alt="">
                                                <div class="hover-effect">
                                                    <h6><a href="{{ url('detail' . '/' . $book->id) }}">Details</a></h6>
                                                </div>
                                            </div>
                                            <h4>{{ $book->title }}<br><span>{{ $book->author }}</span></h4>
                                        </div>
                                    @endforeach
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
                                            <a href="{{ route('detail', $book->id) }}">
                                                <div class="item">
                                                    <img src="{{ asset('upload' . '/' . $book->cover) }}" alt="">
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
@endsection
