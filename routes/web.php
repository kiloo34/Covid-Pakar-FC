<?php

use Illuminate\Support\Facades\Route;

// Admin
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\DiseaseController as AdminDisease;
use App\Http\Controllers\LandingPageController;
// Pakar
use App\Http\Controllers\Pakar\DashboardController as PakarDashboard;
use App\Http\Controllers\Pakar\DiagnoseController;
use App\Http\Controllers\Pakar\DiseaseCategoryController as PakarDiseaseCategory;
use App\Http\Controllers\Pakar\SymptomController as PakarSymptom;
use App\Http\Controllers\Pakar\SymptomCategoryController as PakarSymptomCategory;
use App\Models\Diagnose;

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

Route::get('/', LandingPageController::class)->name('landing');
Route::post('guest/diagnose', [LandingPageController::class, 'store'])->name('guest.diagnose.store');

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
        
        // Disease Category
        Route::resource('kategori_penyakit', PakarDiseaseCategory::class);
        // Ajax
        Route::get('ajax/penyakit/all', [PakarDiseaseCategory::class, 'getAllData'])->name('ajax.penyakit.all');
        Route::get('ajax/kategori_penyakit/{diseaseId}/all', [PakarDiseaseCategory::class, 'getAllDataCategory'])->name('ajax.category.all');
        
        // Symptom
        Route::resource('gejala', PakarSymptom::class);
        // Ajax
        Route::get('ajax/gejala/symptom', [PakarSymptom::class, 'getAllDataSymptom'])->name('ajax.gejala.all');
        Route::get('ajax/gejala/all', [PakarSymptom::class, 'getAllDataCategory'])->name('ajax.gejala.category');
        Route::get('ajax/gejala/{kategori_penyakit}/all', [PakarSymptom::class, 'getAllSympthom'])->name('ajax.gejala.detail.list');
        
        // Symptom Category
        Route::resource('kategori_gejala', PakarSymptomCategory::class)->except(['index', 'create', 'store']);
        Route::get('kategori_gejala/{gejala}/index', [PakarSymptomCategory::class, 'index'])->name('kategoriGejala.index');
        // Ajax
        Route::get('ajax/kategori_gejala/{gejala}/all', [PakarSymptomCategory::class, 'getCategorySympthom'])->name('ajax.kategoriGejala');
        

        // Diagnose
        Route::resource('diagnosa', DiagnoseController::class);
    });
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
