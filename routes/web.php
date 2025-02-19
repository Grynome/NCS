<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CareersController;

 Route::get('/', [HomeController::class, 'main'])->name('home');
 
    //  Canals Article
        Route::get('Next-Indonesia/Insight', [BlogController::class, 'blogInsightPage'])->name('insight');
        Route::get('Next-Indonesia/Research', [BlogController::class, 'blogResearchPage'])->name('research');
        Route::get('Next-Indonesia/Update', [BlogController::class, 'blogUpdatePage'])->name('update');
        // Detail Page Canals
            Route::get('Detail/Article=', [BlogController::class, 'dtArticle'])->name('dt.canals');

 Route::get('/About-Us', [AboutController::class, 'vwAbout'])->name('about.us');
 Route::get('/Careers', [CareersController::class, 'vwCareers'])->name('careers');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
