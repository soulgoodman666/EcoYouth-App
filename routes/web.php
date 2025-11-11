<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\TanamanController;
use App\Http\Controllers\TipController;
use App\Models\Tip;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;



// Rute login page

Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');

// login
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');

// logout
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// alternatif logout manual (jika tidak pakai Auth)
Route::post('/logout-manual', function () {
    Session::forget('user_id');
    return redirect()->route('login');
})->name('logout.manual');

// halaman home
Route::get('/home', function () {
    return view('home');
})->middleware('auth')->name('home');


// Rute yang dilindungi untuk pengguna umum


Route::get('/tips', function () {
    $tips = Tip::all(); // atau bisa pakai Tip::latest()->get();
    return view('tips', compact('tips'));
})->name('tips');


// ini bagian tips page
Route::get('/tips/{id}', [TipController::class, 'showTip']);

Route::put('tanaman/{id}/status', [TanamanController::class, 'updateStatus'])->name('tanaman.updateStatus');


// ini bagian news page
Route::get('/news', [NewsController::class, 'index'])->name('news.index');

Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');

// ini bagian video page use App\Http\Controllers\VideoController;
Route::get('/videos', [VideoController::class, 'index'])->name('videos.index');


// ini bagian my plants
Route::get('/myPlants', function () {
    return view('myPlants');
})->name('myPlants');

// Rute untuk tanaman
Route::get('myPlants', [TanamanController::class, 'index'])->name('myPlants.index');
Route::get('/tanaman-saya/create', [TanamanController::class, 'create'])->name('tanaman.create');
Route::post('/tanaman-saya', [TanamanController::class, 'store'])->name('tanaman.store');
Route::delete('/tanaman-saya/{id}', [TanamanController::class, 'destroy'])->name('tanaman.destroy');
Route::resource('tanaman', TanamanController::class);


// Rute admin (tambahkan jika Anda memiliki halaman admin)
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard'); // Pastikan file ini ada
    })->name('admin.dashboard');
});

