<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ActivityController as FrontendActivityController;
use App\Http\Controllers\Frontend\ActivityCommentController as FrontendActivityCommentController;

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\InformationController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\LeaderHistoryController;
use App\Http\Controllers\Backend\ReviewController;
use App\Http\Controllers\Backend\ActivityController;
use App\Http\Controllers\Backend\ActivityCommentController;

use Illuminate\Support\Facades\Route;

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

Route::resource('/', HomeController::class)->only(['index', 'store']);
Route::resource('/kegiatan', FrontendActivityController::class);
Route::resource('/komentar-kegiatan', FrontendActivityCommentController::class);

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('dashboard', DashboardController::class)->name('dashboard');
    Route::resource('/informasi', InformationController::class);
    Route::resource('/pengguna', UserController::class);
    Route::resource('/ketua-terdahulu', LeaderHistoryController::class);
    Route::resource('/ulasan', ReviewController::class);
    Route::resource('/galeri', GalleryController::class);
    Route::resource('/kegiatan', ActivityController::class, ['as' => 'admin']);
    Route::resource('/komentar-kegiatan', ActivityCommentController::class, ['as' => 'admin']);
});

require __DIR__.'/auth.php';