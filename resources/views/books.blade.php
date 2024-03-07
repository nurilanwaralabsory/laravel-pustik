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
                        <div class="col-lg-4">
                            <div class="top-downloaded">
                                <div class="heading-section">
                                    <h4><em>Top</em> Books</h4>
                                </div>
                                <ul>
                                    <li>
                                        <img src="{{ asset('template') }}/assets/images/game-01.jpg" alt=""
                                            class="templatemo-item">
                                        <h4>Fortnite</h4>
                                        <h6>Sandbox</h6>
                                        <span><i class="fa fa-star" style="color: yellow;"></i> 4.9</span>
                                        <span><i class="fa fa-download" style="color: #ec6090;"></i> 2.2M</span>
                                        <div class="download">
                                            <a href="#"><i class="fa fa-download"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="{{ asset('template') }}/assets/images/game-02.jpg" alt=""
                                            class="templatemo-item">
                                        <h4>CS-GO</h4>
                                        <h6>Legendary</h6>
                                        <span><i class="fa fa-star" style="color: yellow;"></i> 4.9</span>
                                        <span><i class="fa fa-download" style="color: #ec6090;"></i> 2.2M</span>
                                        <div class="download">
                                            <a href="#"><i class="fa fa-download"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="{{ asset('template') }}/assets/images/game-03.jpg" alt=""
                                            class="templatemo-item">
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
                                            <a href="{{ route('detail', $book->id) }}">
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
@endsection
