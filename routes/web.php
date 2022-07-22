<?php

use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\LeaderHistoryController;
use App\Http\Controllers\Backend\ReviewController;
// use App\Http\Controllers\Backend\ActivityController;
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
Route::resource('/blog', BlogController::class);

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('dashboard', DashboardController::class)->name('dashboard');
    Route::resource('/pengaturan', SettingController::class);
    Route::resource('/pengguna', UserController::class);
    Route::resource('/ketua-terdahulu', LeaderHistoryController::class);
    Route::resource('/ulasan', ReviewController::class);
});

require __DIR__.'/auth.php';