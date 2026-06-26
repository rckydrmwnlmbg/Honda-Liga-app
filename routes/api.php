<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginApiController;
use App\Http\Controllers\AdminMemberApiController;
use App\Http\Controllers\AdminBeritaApiController;
use App\Http\Controllers\AdminProposalApiController;
use App\Http\Controllers\AdminProposalDoneApiController;
use App\Http\Controllers\AdminDownloaderApiController;
use App\Http\Controllers\AdminKontenApiController;
use App\Http\Controllers\AdminJualanApiController;
use App\Http\Controllers\AdminkomunitasApiController;
use App\Http\Controllers\RegistApiController;
use App\Http\Controllers\UserBeritaApiController;
use App\Http\Controllers\UserDownloaderApiController;
use App\Http\Controllers\UserProposalApiController;
use App\Http\Controllers\UserKontenApiController;
use App\Http\Controllers\UserPenjualanApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', [LoginApiController::class, 'login']);
Route::post('/logout', [LoginApiController::class, 'logout']);

Route::get('/admin/member', [AdminMemberApiController::class, 'index']);
Route::put('/admin/member/{id}', [AdminMemberApiController::class, 'update']);

Route::get('/admin/berita', [AdminBeritaApiController::class, 'index']);
Route::put('/admin/berita/{id}', [AdminBeritaApiController::class, 'update']);

Route::get('/admin/proposal', [AdminProposalApiController::class, 'index']);
Route::put('/admin/proposal/{id}', [AdminProposalApiController::class, 'update']);

Route::get('/admin/proposaldone', [AdminProposalDoneApiController::class, 'index']);
Route::put('/admin/proposaldone/{id}', [AdminProposalDoneApiController::class, 'update']);

Route::get('/admin/downloader', [AdminDownloaderApiController::class, 'index']);
Route::put('/admin/downloader/{id}', [AdminDownloaderApiController::class, 'update']);

Route::get('/admin/kontenkreatif', [AdminKontenApiController::class, 'index']);
Route::put('/admin/kontenkreatif/{id}', [AdminKontenApiController::class, 'update']);

Route::get('/admin/jualan', [AdminJualanApiController::class, 'index']);
Route::put('/admin/jualan/{id}', [AdminJualanApiController::class, 'update']);

Route::get('/admin/komunitas', [AdminkomunitasApiController::class, 'index']);
Route::post('/admin/komunitas', [AdminkomunitasApiController::class, 'store']);

Route::post('/regist', [RegistApiController::class, 'store']);

Route::get('/user/berita/{id}', [UserBeritaApiController::class, 'index']);
Route::post('/user/berita/', [UserBeritaApiController::class, 'store']);

Route::get('/user/downloader/{id}', [UserDownloaderApiController::class, 'index']);
Route::post('/user/downloader/', [UserDownloaderApiController::class, 'store']);

Route::get('/user/proposal/{id}', [UserProposalApiController::class, 'index']);
Route::post('/user/proposal/', [UserProposalApiController::class, 'store']);

Route::get('/user/konten/{id}', [UserKontenApiController::class, 'index']);
Route::post('/user/konten/', [UserKontenApiController::class, 'store']);

Route::get('/user/jualan/{id}', [UserPenjualanApiController::class, 'index']);
Route::post('/user/jualan/', [UserPenjualanApiController::class, 'store']);