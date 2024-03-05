<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrower;
use App\Models\Category;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;


class BookController extends Controller
{
    public $book;
    public function __construct()
    {
        $this->book = new Book();
    }
    public function index()
    {
        $borrower = Borrower::all();
        $book = Book::all();
        $user = User::where('role', 'user')->get();
        $category = Category::all();
        $no = 1;

        return view('buku.index', compact('book','category','borrower','user', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $borrower = Borrower::all();
        $book = Book::all();
        $user = User::where('role', 'user')->get();
        $category = Category::all();

        return view('buku.create', compact('borrower','book','category','user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $buku = Book::findOrFail($id);
        $borrower = Borrower::all();
        $book = Book::all();
        $user = User::where('role', 'user')->get();
        $category = Category::all();

        return view('buku.show', compact('borrower','book','category','user','buku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $buku = Book::findOrFail($id);
        $borrower = Borrower::all();
        $book = Book::all();
        $user = User::where('role', 'user')->get();
        $category = Category::all();

        return view('buku.edit', compact('borrower','book','category','user','buku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);

        $book->delete();

        Alert::success('Berhasil!', 'Data berhasil dihapus');

        return redirect()->route('buku.index');
    }
}
