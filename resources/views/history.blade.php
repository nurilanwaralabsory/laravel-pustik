@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-profile ">
                                @if (count($borrowers) == 0)
                                    <h1 class="text-danger text-center">No History</h1>
                                @endif
                                @foreach ($borrowers as $borrower)
                                    @foreach ($books as $book)
                                        @if ($borrower->book_id == $book->id)
                                            <div class="row mb-4">
                                                <div class="col-lg-3">
                                                    <img src="{{ asset('upload' . '/' . $book->cover) }}" class="w-100"
                                                        alt="" style="border-radius: 23px;">
                                                    <h4 class="text-center mt-2">{{ $book->title }}</p>
                                                </div>
                                                <div class="col-lg-4 align-self-center">
                                                    <div class="main-info header-text">
                                                        <h4>{{ $borrower->name }}</h4>
                                                        <span
                                                            class="mb-1 @if ($borrower->status == 'borrowed') bg-danger @endif">{{ $borrower->status }}</span>
                                                        @if ($borrower->status == 'borrowed')
                                                            <h5 class="my-2">Waktu
                                                                <div class="d-inline" style="color: #e75e8d">
                                                                    {{ Carbon\Carbon::parse($borrower->created_at)->addDays(7)->format('d') - $date }}
                                                                    hari
                                                                    lagi</div>
                                                            </h5>
                                                            <form action="borrower/{{ $borrower->id }}" method="POST">
                                                                @method('PUT')
                                                                @csrf
                                                                <button class="btn btn-primary mt-3">Return</button>
                                                            </form>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 align-self-center">
                                                    <ul>
                                                        <li>Games Downloaded <span>3</span></li>
                                                        <li>Friends Online <span>16</span></li>
                                                        <li>Live Streams <span>None</span></li>
                                                        <li>Clips <span>29</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
