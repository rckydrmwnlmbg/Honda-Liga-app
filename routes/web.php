<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produkcontroller;
use App\Http\Controllers\eventcontroller;
use App\Http\Controllers\artikelcontroller;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardMemberController;
use App\Http\Controllers\DashboardProdukController;
use App\Http\Controllers\DashboardProposalController;
use App\Http\Controllers\DashboardProposalDoneController;
use App\Http\Controllers\DashboardDownladerController;
use App\Http\Controllers\DashboardBeritaController;
use App\Http\Controllers\DashboardJualanController;
use App\Http\Controllers\DashboardKontenkreatifController;
use App\Http\Controllers\editAdminDashboardController;
use App\Http\Controllers\profilcontroller;
use App\Http\Controllers\ProposalUserController;
use App\Http\Controllers\ProposalDoneController;
use App\Http\Controllers\downloaderUserController;
use App\Http\Controllers\jualanUserController;
use App\Http\Controllers\kontenKreatifUserController;
use App\Http\Controllers\BeritaUserController;
use App\Http\Controllers\DashboardPromoController;
use App\Models\Promo;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    
    return view('layout.home',['promo' => promo::all()]);
});

Route::get('/login', [LoginController::class, 'index'])->Middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/signup', [RegisterController::class, 'index'])->Middleware('guest');
Route::post('/signup', [RegisterController::class, 'store']);


Route::get('/profile', [profilcontroller::class, 'index'])->Middleware('auth', 'ceklevel:user');
Route::get('/profile/{id}/edit', [profilcontroller::class, 'edit'])->Middleware('auth', 'ceklevel:user');
Route::put('/profile/{id}', [profilcontroller::class, 'update'])->Middleware('auth', 'ceklevel:user');



Route::resource('/produk', produkcontroller::class);

Route::get('/artikel',[artikelcontroller::class,'index']);

Route::get('/event',[eventcontroller::class,'index']);

Route::get('/leaderboard', function () {
    return view('layout.leaderboard');
});
Route::get('/Dashboard', [DashboardController::class, 'index'])->Middleware('auth', 'ceklevel:admin');
Route::get('/Dashboard/member', [DashboardMemberController::class, 'index'])->Middleware('auth', 'ceklevel:admin');

Route::resource('/Dashboard/member', DashboardMemberController::class)->Middleware('auth', 'ceklevel:admin');
Route::resource('/Dashboard/produk', DashboardProdukController::class)->Middleware('auth', 'ceklevel:admin');
Route::resource('/Dashboard/proposal', DashboardProposalController::class)->Middleware('auth', 'ceklevel:admin');
Route::resource('/Dashboard/proposalDone', DashboardProposalDoneController::class)->Middleware('auth', 'ceklevel:admin');
Route::resource('/Dashboard/downloader', DashboardDownladerController::class)->Middleware('auth', 'ceklevel:admin');
Route::resource('/Dashboard/Berita', DashboardBeritaController::class)->Middleware('auth', 'ceklevel:admin');
Route::resource('/Dashboard/sales', DashboardJualanController::class)->Middleware('auth', 'ceklevel:admin');
Route::resource('/Dashboard/kontenkreatif', DashboardKontenkreatifController::class)->Middleware('auth', 'ceklevel:admin');
Route::resource('/Dashboard/editAdmin', editAdminDashboardController::class)->Middleware('auth', 'ceklevel:admin');
Route::resource('/Dashboard/promo', DashboardPromoController::class)->Middleware('auth', 'ceklevel:admin');

Route::resource('/proposal', ProposalUserController::class)->Middleware('auth', 'ceklevel:user');
Route::resource('/proposalDone', ProposalDoneController::class)->Middleware('auth', 'ceklevel:user');
Route::resource('/downloader', downloaderUserController::class)->Middleware('auth', 'ceklevel:user');
Route::resource('/jualan', JualanUserController::class)->Middleware('auth', 'ceklevel:user');
Route::resource('/kontenkreatif', kontenKreatifUserController::class)->Middleware('auth', 'ceklevel:user');
Route::resource('/berita', BeritaUserController::class)->Middleware('auth', 'ceklevel:user');

