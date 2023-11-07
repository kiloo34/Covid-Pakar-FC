<?php

use Illuminate\Support\Facades\Route;

// Admin
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\DiseaseController as AdminDisease;

// Pakar
use App\Http\Controllers\Pakar\DashboardController as PakarDashboard;
use App\Http\Controllers\Pakar\DiseaseController as PakarDisease;
use App\Http\Controllers\Pakar\DiseaseCategoryController as PakarDiseaseCategory;
use App\Http\Controllers\Pakar\SymptomController as PakarSymptom;

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
        // Ajax
        Route::get('ajax/penyakit/all', [AdminDisease::class, 'getAllData'])->name('ajax.penyakit.all');
    });
    
    Route::group([
        'prefix'        => '/pakar',
        'as'            => 'pakar.',
        'middleware'    => ['role:pakar'],
    ], function () {
        // Dashboard
        Route::get('/dashboard', [PakarDashboard::class, 'index'])->name('dashboard.index');
        
        // Disease 
        Route::get('penyakit', PakarDisease::class)->name('penyakit.index');
        Route::get('ajax/penyakit/all', [PakarDisease::class, 'getAllData'])->name('ajax.penyakit.all');

        // Disease Category
        Route::resource('kategori_penyakit', PakarDiseaseCategory::class)->except(['index']);
        Route::get('/kategori_penyakit/{disease}/index', [PakarDiseaseCategory::class, 'index'])->name('kategori_penyakit.index');
        // Ajax
        Route::get('ajax/kategori_penyakit/{diseaseId}/all', [PakarDiseaseCategory::class, 'getAllDataCategory'])->name('ajax.category.all');
        
        // Symptom
        Route::resource('gejala', PakarSymptom::class);
        // Ajax
        Route::get('ajax/gejala/all', [PakarSymptom::class, 'getAllDataCategory'])->name('ajax.gejala.all');
        Route::get('ajax/gejala/{kategori_penyakit}/all', [PakarSymptom::class, 'getAllSympthom'])->name('ajax.gejala.detail.list');
    });
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
