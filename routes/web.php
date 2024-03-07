<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BorrowerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

// Route::get('/admin', function () {
//     return view('dashboard');
// })->middleware('auth')->name('admin');

Route::get('/dashboard', [BorrowerController::class, 'index'])->middleware(['auth'])->name('admin');

Route::get('/index', [FrontController::class, 'index'])->middleware(['auth', 'verified'])->name('index');
Route::get('/books', [FrontController::class, 'books'])->middleware(['auth', 'verified'])->name('books');
Route::get('/history', [FrontController::class, 'history'])->middleware(['auth', 'verified'])->name('history');
Route::get('/detail/{id}', [FrontController::class, 'detail'])->middleware(['auth', 'verified'])->name('detail');
Route::get('/return/{id}', [BorrowerController::class, 'return'])->middleware(['auth', 'verified'])->name('return');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('buku', BookController::class);
    Route::resource('kategori', CategoryController::class);
    Route::resource('borrower', BorrowerController::class);
});

require __DIR__ . '/auth.php';
