<?php

use Illuminate\Support\Facades\Route;

// Admin
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;

// Pakar
use App\Http\Controllers\Pakar\DashboardController as PakarDashboard;

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
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::group([
        'prefix' => '/admin',
        'middleware' => ['role:admin'],
    ], function () {
    	// Dashboard
        Route::get('/dashboard', [AdminDashboard::class, 'index'])->name('admin.dashboard.index');
    });

    Route::group([
        'prefix' => '/pakar',
        'middleware' => ['role:pakar'],
    ], function () {
    	// Dashboard
        Route::get('/dashboard', [PakarDashboard::class, 'index'])->name('pakar.dashboard.index');
    });
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
