<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function index()
    {
        $books = Book::paginate(8);
        return view('index', [
            'books' => $books
        ]);
    }

    public function books()
    {
        $books = Book::all();
        return view('books', [
            'books' => $books
        ]);
    }
}
