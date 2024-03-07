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

class CategoryController extends Controller
{
    public $category;
    public function __construct()
    {
        $this->category = new Category();
    }
    public function index(Request $request)
    {
        $cari = $request->get('search');
        $borrower = Borrower::all();
        $user = User::where('role', 'user')->get();
        $category = Category::all();
        $buku = Book::all();
        $categories = Category::where('category_name', 'LIKE', "%$cari%")->simplePaginate(5);
        // bikin angkanya sesuai
        $no = $categories->firstItem() - 1;

        return view('kategori.index', compact('categories', 'buku', 'category', 'borrower', 'user', 'no'));

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

        return view('kategori.create', compact('borrower', 'buku', 'category', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $rules = [
            'category_name' => 'required|unique:categories'
        ];
        // bikin pesan error
        $messages = [
            'unique' => ":attribute sudah digunakan",
            'required' => ":attribute tidak boleh kosong"
        ];

        $this->validate($request, $rules, $messages);

        $this->category->category_name = $request->category_name;

        // memindahkan gambar ke dalam folder publik
        $this->category->save();
        Alert::success('Succespul!...', ' Data Berhasil Disimpan');
        return redirect()->route('kategori.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $categories = Category::findOrFail($id);

        $borrower = Borrower::all();
        $buku = Book::all();
        $user = User::where('role', 'user')->get();
        $category = Category::all();

        return view('kategori.show', compact('borrower', 'buku', 'categories', 'category', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categories = Category::findOrFail($id);

        $borrower = Borrower::all();
        $buku = Book::all();
        $user = User::where('role', 'user')->get();
        $category = Category::all();

        return view('kategori.edit', compact('borrower', 'buku', 'categories', 'category', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $categories = Category::findOrFail($id);

        $rules = [
            'category_name' => 'required|min:5|unique:categories,category_name,' . $id
        ];
        // bikin pesan error
        $messages = [
            'required' => ":attribute tidak boleh kosong",
            'min' => ":attribute tidak boleh kurang dari :min karakter",
            'unique' => ":attribute sudah digunakan"

        ];

        $this->validate($request, $rules, $messages);

        $categories->category_name = $request->category_name;

        // memindahkan gambar ke dalam folder publik
        $categories->save();
        Alert::success('Succespul!...', ' Data Berhasil Disimpan');
        return redirect()->route('kategori.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $categories = Category::findOrFail($id);

        $categories->delete();

        Alert::success('Berhasil!', 'Data berhasil dihapus');

        return redirect()->route('kategori.index');
    }
}