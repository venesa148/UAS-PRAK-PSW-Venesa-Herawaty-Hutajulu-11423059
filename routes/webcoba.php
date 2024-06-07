<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourtController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PesanLapanganController;

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
Route::get('/pesan-lapangan', [PesanLapanganController::class, 'index'])->name('pesan-lapangan.index');



Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/show', function () {
    return view('show');
})->name('show');



Route::get('/about', [UserController::class, 'about'])->name('about');

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

//Normal Users Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/profile', [UserController::class, 'userprofile'])->name('profile');

    
    Route::get('products/show/{id}', [ProductController::class, 'show'])->name('/show');
    Route::get('product/show', [ProductController::class, 'index'])->name('user.produk');
    Route::get('court/show', [CourtController::class, 'index'])->name('user.court');
});

// user booking pemesanan user
Route::get('form/allbooking', [BookingController::class, 'allbooking'])->name('form/allbooking');

Route::get('/booking',[BookingController::class,'index'])->name('booking');
Route::get('/tambahdata',[BookingController::class,'tambahdata'])->name('tambahdata');
Route::post('/insertdata',[BookingController::class,'insertdata'])->name('insertdata');
Route::get('/tampilkandata/{id}', [BookingController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}', [BookingController::class, 'updatedata'])->name('updatedata');
Route::get('/delete/{id}', [BookingController::class, 'delete'])->name('delete');

// untuk approved admin
Route::get('/abooking',[BookingController::class,'adminview'])->name('abooking');
Route::get('/bbooking',[BookingController::class,'bdminview'])->name('bbooking');
Route::get('/admintampilkandata/{id}', [BookingController::class, 'admintampilkandata'])->name('admintampilkandata');
Route::post('/adminupdatedata/{id}', [BookingController::class, 'adminupdatedata'])->name('adminupdatedata');

// Pesan lapangan
Route::get('/pesan-lapangan', [PesanLapanganController::class, 'index'])->name('pesan-lapangan.index');
// Route::get('/pesan-lapangan/create', [PesanLapanganController::class, 'create'])->name('pesan-lapangan.create');
// Route::post('/pesan-lapangan/store', [PesanLapanganController::class, 'store'])->name('pesan-lapangan.store');
// Route::get('/pesan-lapangan/{id}', [PesanLapanganController::class, 'show'])->name('pesan-lapangan.show');
// Route::get('/pesan-lapangan/{id}/edit', [PesanLapanganController::class, 'edit'])->name('pesan-lapangan.edit');
// Route::put('/pesan-lapangan/{id}/update', [PesanLapanganController::class, 'update'])->name('pesan-lapangan.update');
// Route::delete('/pesan-lapangan/{id}/delete', [PesanLapanganController::class, 'destroy'])->name('pesan-lapangan.destroy');

//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin/home');

    Route::get('/admin/profile', [AdminController::class, 'profilepage'])->name('admin/profile');
    //  products
    Route::get('/admin/products', [ProductController::class, 'index'])->name('admin/products');
    Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin/products/create');
    Route::post('/admin/products/store', [ProductController::class, 'store'])->name('admin/products/store');
    Route::get('/admin/products/show/{id}', [ProductController::class, 'show'])->name('admin/products/show');
    Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit'])->name('admin/products/edit');
    Route::put('/admin/products/edit/{id}', [ProductController::class, 'update'])->name('admin/products/update');
    Route::delete('/admin/products/destroy/{id}', [ProductController::class, 'destroy'])->name('admin/products/destroy');

    //court
    Route::get('/admin/court', [CourtController::class, 'index'])->name('admin/court');
    Route::get('/admin/court/create', [CourtController::class, 'create'])->name('admin/court/create');
    Route::post('/admin/court/store', [CourtController::class, 'store'])->name('admin/court/store');
    Route::get('/admin/court/show/{id}', [CourtController::class, 'show'])->name('admin/court/show');
    Route::get('/admin/court/edit/{id}', [CourtController::class, 'edit'])->name('admin/court/edit');
    Route::put('/admin/court/update/{id}', [CourtController::class, 'update'])->name('admin/court/update');
    Route::delete('/admin/court/destroy/{id}', [CourtController::class, 'destroy'])->name('admin/court/destroy');



});