<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\AnnonceAdminController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    
    Route::get('/admin/categorie', [CategoryController::class, 'index'])->name('admin.categorie');
    
    Route::post('/admin/categorie', [CategoryController::class, 'store'])->name('admin.categorie.add');
    
    Route::get('/admin/annonce', [AnnonceAdminController::class, 'index'])->name('admin.annonce');
    
    Route::get('/admin/annonce/create', [AnnonceAdminController::class, 'create'])->name('admin.annonce.create');
    
    Route::post('/admin/annonce/create', [AnnonceAdminController::class, 'store'])->name('admin.annonce.store');
    //addaptation pour create 

    Route::get('/admin/annonce.edit', [AnnonceAdminController::class, 'edit'])->name('admin.annonce.edit');
    //Gestion des route pour l'administration


    
    // Supprimer une news
    Route::get('/admin/annonce/delete/{id}', [AnnonceAdminController::class, 'delete'])->name('admin.annonce.delete');
});





require __DIR__.'/auth.php';
