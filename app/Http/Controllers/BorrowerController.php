<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrower;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BorrowerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $borrower;
    public function __construct()
    {
        $this->borrower = new Borrower();
    }
    public function index()
    {
        $borrower = Borrower::all();
        $book = Book::all();
        $user = User::where('role', 'user')->get();
        $category = Category::all();
        $no = 1;
        return view('dashboard', compact('borrower','book','category','user', 'no'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $rules = [
            'name' => 'required|min:3|max:100',
            'phone_number' => 'required|min:5|max:20',
            'address' => 'required|min:3|max:100',
            'book_id' => 'required',
            'user_id' => 'required',
        ];
        // bikin pesan error
        $messages = [
            'required' => ':attribute tidak boleh kosong!',
            'min' => ':attribute minimal harus 3 huruf',
            'max' => ':attribute maximal 20 huruf'
        ];
        // eksekusi fungsinya

        $validatedData = $request->validate($rules, $messages);

        Alert::success('Succesful', 'Peminjaman berhasil');

        Borrower::create($validatedData);
        return redirect('/history');
    }

    /**
     * Display the specified resource.
     */
    public function show(Borrower $borrower)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Borrower $borrower)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Borrower $borrower)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Borrower $borrower)
    {
        //
    }
}