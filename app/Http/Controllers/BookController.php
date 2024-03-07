<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrower;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;




class BookController extends Controller
{
    public $book;
    public function __construct()
    {
        $this->book = new Book();
    }
    public function index(Request $request)
    {
        $cari = $request->get('search');

        $borrower = Borrower::all();
        $user = User::where('role', 'user')->get();
        $category = Category::all();
        $buku = Book::all();
        $book = Book::where('title', 'LIKE', "%$cari%")->simplePaginate(5);
        // bikin angkanya sesuai
        $no = $book->firstItem() - 1;

        return view('buku.index', compact('book','buku','category','borrower','user', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $borrower = Borrower::all();
        $buku = Book::all();
        $user = User::where('role', 'user')->get();
        $category = Category::all();

        return view('buku.create', compact('borrower','buku','category','user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $rules = [
            'sampul' => 'required|mimes:jpg,png|max:1000',
            'judul' => 'required|min:3|max:50',
            'deskripsi' => 'required|min:3|max:500',
            'penulis' => 'required|min:3|max:50',
            'penerbit' => 'required|min:3|max:50',
            'isbn' => 'required|min:3|max:50',
            'kategori' => 'required'
        ];
        // bikin pesan error
        $messages = [
            'mimes' => "ekstensi file tidak diterima, pake jpg ato png",
            'sampul.required' => ':attribute harus diisi.',
            'judul.required' => 'Judul harus diisi.',
            'judul.min' => 'Judul harus memiliki minimal :min karakter.',
            'judul.max' => 'Judul tidak boleh melebihi :max karakter.',
            'deskripsi.required' => 'Deskripsi harus diisi.',
            'deskripsi.min' => 'Deskripsi harus memiliki minimal :min karakter.',
            'deskripsi.max' => 'Deskripsi tidak boleh melebihi :max karakter.',
            'penulis.required' => 'Penulis harus diisi.',
            'penerbit.required' => 'Penerbit harus diisi.',
            'isbn.required' => 'ISBN harus diisi.',
            'penulis.min' => 'Penulis harus memiliki minimal :min karakter.',
            'penulis.max' => 'Penulis tidak boleh melebihi :max karakter.',
            'kategori.required' => 'Kategori harus dipilih.'
        ];
        // eksekusii
        $this->validate($request, $rules, $messages);

        $gambar = $request->sampul;
        // rename nama gambar
        // getClientOriginalExtension = untuk mendapatkan ekstensi file
        // echo time()
        // echo rand(100, 900)

        // $gambar->getClientOriginalExtension();
        $namaFile = time() . rand(100, 900) . "." . $gambar->getClientOriginalExtension();
        // Upload foto ke folder yang di tentukan /public/img
        // echo $namaFile;
        $this->book->cover = $namaFile;
        $this->book->title = $request->judul;
        $this->book->description = $request->deskripsi;
        $this->book->author = $request->penulis;
        $this->book->publisher = $request->penerbit;
        $this->book->isbn = $request->isbn;
        $this->book->category_id = $request->kategori;

        // memindahkan gambar ke dalam folder publik
        $gambar->move(public_path() . '/upload', $namaFile);
        $this->book->save();
        Alert::success('Succespul!...', ' Data Berhasil Disimpan');
        return redirect()->route('buku.index');
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
    public function update(Request $request, $id)
    {
        $buku = Book::findOrFail($id);

        $rules = [
            'sampul' => 'mimes:jpg,png|max:1000',
            'judul' => 'required|min:3|max:50',
            'deskripsi' => 'required|min:3|max:500',
            'penulis' => 'required|min:3|max:50',
            'penerbit' => 'required|min:3|max:50',
            'isbn' => 'required|min:3|max:50',
            'kategori' => 'required'
        ];
        // bikin pesan error
        $messages = [
            'mimes' => "ekstensi file tidak diterima, pake jpg ato png",
            // 'sampul.required' => ':attribute harus diisi.',
            'judul.required' => 'Judul harus diisi.',
            'judul.min' => 'Judul harus memiliki minimal :min karakter.',
            'judul.max' => 'Judul tidak boleh melebihi :max karakter.',
            'deskripsi.required' => 'Deskripsi harus diisi.',
            'deskripsi.min' => 'Deskripsi harus memiliki minimal :min karakter.',
            'deskripsi.max' => 'Deskripsi tidak boleh melebihi :max karakter.',
            'penulis.required' => 'Penulis harus diisi.',
            'penerbit.required' => 'Penerbit harus diisi.',
            'isbn.required' => 'ISBN harus diisi.',
            'penulis.min' => 'Penulis harus memiliki minimal :min karakter.',
            'penulis.max' => 'Penulis tidak boleh melebihi :max karakter.',
            'kategori.required' => 'Kategori harus dipilih.'
        ];
        $this->validate($request, $rules, $messages);

        // kalau gambarnya kosong
        if (!$request->sampul) {
            $buku->title = $request->judul;
            $buku->description = $request->deskripsi;
            $buku->author = $request->penulis;
            $buku->publisher = $request->penerbit;
            $buku->isbn = $request->isbn;
            $buku->category_id = $request->kategori;
            $buku->save();
            Alert::success('Succespul!...', ' Data Berhasil Diubah');
            return redirect()->route('buku.index');
            // echo "gambar kosong " .$update->sampul;
        }
        // kalau ada yang nama sama dengan gambar berbeda
        if ($request->sampul) {
            $gambar = $request->sampul;
            $namaFile = time() . rand(100, 900) . "." . $gambar->getClientOriginalExtension();
            $gambar->move(public_path() . '/upload', $namaFile);
            // $update->sampul = $namaFile;
            $buku->cover = $namaFile;
            $buku->title = $request->judul;
            $buku->description = $request->deskripsi;
            $buku->author = $request->penulis;
            $buku->publisher = $request->penerbit;
            $buku->isbn = $request->isbn;
            $buku->category_id = $request->kategori;
            $buku->save();
            Alert::success('Succespul!...', ' Data Berhasil Diubah');
            return redirect()->route('buku.index');
        }
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