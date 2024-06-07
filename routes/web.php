<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourtController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\BeritaCountroller;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LapanganController;
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

Route::get('/pasti', [UserController::class, 'pasti'])->name('pasti');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/role', [UserController::class, 'role'])->name('role');

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::get('registermem', 'registermem')->name('registermem');
    Route::post('registerSavemem', 'registerSavemem')->name('registerSavemem');
    Route::get('/registerpengelola', 'registerpengelola')->name('registerpengelola');
    Route::post('register', 'registerSave')->name('register.save');
    Route::post('registerAdmin', 'registerSaveAdmin')->name('register.save.admin');

    Route::get('login', 'login')->name('login');
    Route::get('loginbanget', 'loginbanget')->name('loginbanget');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

//Normal Users Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/kontak', [HomeController::class, 'kontak'])->name('kontak');
    Route::get('/berita', [BeritaController::class, 'berita'])->name('berita');
    Route::get('/pengumuman', [MemberController::class, 'pengumuman'])->name('pengumuman');
    Route::get('/profile', [UserController::class, 'userprofile'])->name('profile');
    Route::get('products/show/{id}', [ProductController::class, 'show'])->name('/products/show');

    Route::get('product/userindex', [ProductController::class, 'userindex'])->name('user.produk');

    Route::get('court/userindex', [CourtController::class, 'userindex'])->name('user.court');

    // booking
    // Route::get('form/allbooking', [BookingController::class, 'allbooking'])->name('form/allbooking');
    Route::get('/booking', [BookingController::class, 'index'])->name('booking');
    Route::get('/tambahdata', [BookingController::class, 'tambahdata'])->name('tambahdata');
    Route::post('/insertdata', [BookingController::class, 'insertdata'])->name('insertdata');
    Route::get('/tampilkandata/{id}', [BookingController::class, 'tampilkandata'])->name('tampilkandata');
    Route::post('/updatedata/{id}', [BookingController::class, 'updatedata'])->name('updatedata');
    Route::get('/delete/{id}', [BookingController::class, 'delete'])->name('delete');

    Route::get('product/userindex', [ProductController::class, 'userindex'])->name('user.produk');
});
Route::get('/role', [HomeController::class, 'role'])->name('role');

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
    // Route::get('/admin/court', [CourtController::class, 'index'])->name('admin/court');
    // Route::get('/admin/court/create', [CourtController::class, 'create'])->name('admin/court/create');
    // Route::post('/admin/court/store', [CourtController::class, 'store'])->name('admin/court/store');
    // Route::get('/admin/court/show/{id}', [CourtController::class, 'show'])->name('admin/court/show');
    // Route::get('/admin/court/edit/{id}', [CourtController::class, 'edit'])->name('admin/court/edit');
    // Route::put('/admin/court/update/{id}', [CourtController::class, 'update'])->name('admin/court/update');
    // Route::delete('/admin/court/destroy/{id}', [CourtController::class, 'destroy'])->name('admin/court/destroy');

    // Pengumuman
    Route::get('/databerita', [BeritaController::class, 'databerita'])->name('databerita');
    Route::get('/tambahberita', [BeritaController::class, 'tambahberita'])->name('tambahberita');
    Route::post('/insertdataberita', [BeritaController::class, 'insertdataberita'])->name('insertdataberita');
    Route::get('/tampilkandataberita/{id}', [BeritaController::class, 'tampilkandataberita'])->name('tampilkandataberita');
    Route::post('/updatedata/{id}', [BeritaController::class, 'updatedata'])->name('updatedata');
    Route::get('/deleteberita/{id}', [BeritaController::class, 'deleteberita'])->name('deleteberita');
});

//booking
Route::get('/abooking', [BookingController::class, 'adminview'])->name('abooking');
Route::get('/bbooking', [BookingController::class, 'bdminview'])->name('bbooking');
Route::post('/adminupdatedata/{id}', [BookingController::class, 'adminupdatedata'])->name('adminupdatedata');
Route::get('/member', [AdminController::class, 'member'])->name('member');
Route::get('/memberadmin', [AdminController::class, 'memberadmin'])->name('memberadmin');



Route::get('/delete/{id}', [AdminController::class, 'delete'])->name('delete');
Route::get('/deletemember/{id}', [AdminController::class, 'deletemember'])->name('deletemember');
Route::get('/deletememberinfo/{id}', [AdminController::class, 'deletememberinfo'])->name('deletememberinfo');
Route::get('/deletebook/{id}', [BookingController::class, 'deletebook'])->name('deletebook');


Route::get('/admintampilkandata/{id}', [BookingController::class, 'admintampilkandata'])->name('admintampilkandata');


// export pdf
Route::get('/exportpdf', [BookingController::class, 'exportpdf'])->name('exportpdf');
Route::get('/exportexcel', [BookingController::class, 'exportexcel'])->name('exportexcel');

// Pemilik Kaya
Route::get('/lokasi', [LokasiController::class, 'index'])->name('lokasi');
Route::get('/tambahlokasi', [LokasiController::class, 'tambahlokasi'])->name('tambahlokasi');
Route::post('/insertlokasi', [LokasiController::class, 'insertlokasi'])->name('insertlokasi');
Route::get('/tampilkanlokasi/{id}', [LokasiController::class, 'tampilkanlokasi'])->name('tampilkanlokasi');
Route::post('/updatelokasi/{id}', [LokasiController::class, 'updatelokasi'])->name('updatelokasi');
Route::get('/deletek/{id}', [LokasiController::class, 'deletek'])->name('deletek');

Route::get('/lapangan', [LapanganController::class, 'index'])->name('lapangan');
Route::get('/tambahlapangan', [LapanganController::class, 'tambahlapangan'])->name('tambahlapangan');
Route::post('/insertlapangan', [LapanganController::class, 'insertlapangan'])->name('insertlapangan');
Route::get('/tampillapangan/{id}', [LapanganController::class, 'tampillapangan'])->name('tampillapangan');
Route::post('/updatelapangan/{id}', [LapanganController::class, 'updatelapangan'])->name('updatelapangan');
Route::get('/deletelapangan/{id}', [LapanganController::class, 'deletelapangan'])->name('deletelapangan');
Route::get('/admin/court/admin', [CourtController::class, 'indexadmin'])->name('admin/court/admin');
Route::get('/adminbooking', [BookingController::class, 'adminviewbooking'])->name('adminbooking');
Route::get('/pengelola', [AdminController::class, 'pengelola'])->name('pengelola');



//court
Route::get('/admin/court', [CourtController::class, 'index'])->name('admin/court');
Route::get('/admin/court/create', [CourtController::class, 'create'])->name('admin/court/create');
Route::post('/admin/court/store', [CourtController::class, 'store'])->name('admin/court/store');
Route::get('/admin/court/show/{id}', [CourtController::class, 'show'])->name('admin/court/show');
Route::get('/admin/court/edit/{id}', [CourtController::class, 'edit'])->name('admin/court/edit');
Route::put('/admin/court/update/{id}', [CourtController::class, 'update'])->name('admin/court/update');
Route::delete('/admin/court/destroy/{id}', [CourtController::class, 'destroy'])->name('admin/court/destroy');

Route::get('/abooking', [BookingController::class, 'adminview'])->name('abooking');
Route::get('/bbooking', [BookingController::class, 'bdminview'])->name('bbooking');


// CRUD Member




// Route::get('product/userindex', [ProductController::class, 'userindex'])->name('user.produk');


Route::get('/beritauser', [BeritaController::class, 'beritauser'])->name('beritauser');