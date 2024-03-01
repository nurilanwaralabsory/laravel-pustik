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
    public function detail(Request $request)
    {
        $excludedIds = [$request->id];
        $book =  Book::find($request->id);
        $books = Book::whereNotIn('id', $excludedIds)->get();
        return view('detail', compact('book', 'books'));
    }
}
