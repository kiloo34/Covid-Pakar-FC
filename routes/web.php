<?php

use Illuminate\Support\Facades\Route;

// Admin
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\DiseaseController as AdminDisease;
// Pakar
use App\Http\Controllers\Pakar\DashboardController as PakarDashboard;
use App\Http\Controllers\Pakar\DiseaseCategory as PakarDiseaseCategory;
use App\Http\Controllers\Pakar\QuestionController as PakarQuestion;

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
        'prefix'        => '/admin',
        'as'            => 'admin.',
        'middleware'    => ['role:admin'],
    ], function () {
    	// Dashboard
        Route::get('/dashboard', [AdminDashboard::class, 'index'])->name('dashboard.index');
        
        // Disease
        Route::resource('penyakit', AdminDisease::class);
    });

    Route::group([
        'prefix'        => '/pakar',
        'as'            => 'pakar.',
        'middleware'    => ['role:pakar'],
    ], function () {
    	// Dashboard
        Route::get('/dashboard', [PakarDashboard::class, 'index'])->name('dashboard.index');

        // Disease Category
        Route::resource('kategori_penyakit', PakarDiseaseCategory::class);
        
        // Question
        Route::resource('pertanyaan', PakarQuestion::class);
    });
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
