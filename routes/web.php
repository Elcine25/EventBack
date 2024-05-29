<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\EvenementsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VilleController;

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
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', function () {  return view('welcome'); })->name('home');
    Route::view("/profile/edit", 'profile.edit');
    Route::view("/profile/password", 'profile.password');

    Route::get('/events', [EvenementsController::class, 'lindex'])->name('event-index');
    Route::get('/events', [EvenementsController::class, 'index'])->name('event-index');
    Route::get('/events/create', [EvenementsController::class, 'create'])->name('event-create');
    Route::get('/events/edit/{id}', [EvenementsController::class, 'edit'])->name('event-edit');
    Route::post('/events/store', [EvenementsController::class, 'store'])->name('event-store');
    Route::put('/evenets/update/{id}', [EvenementsController::class, 'update'])->name('event-update');
    Route::delete('/events/delete/{id}', [EvenementsController::class, 'destroy'])->name('event-delete');

    Route::get('/categories', [CategorieController::class, 'index'])->name('categorie-index');
    Route::get('/categories/create', [CategorieController::class, 'create'])->name('categorie-create');
    Route::get('/categories/edit/{id}', [CategorieController::class, 'edit'])->name('categorie-edit');
    Route::post('/categories/store', [CategorieController::class, 'store'])->name('categorie-store');
    Route::put('/categories/update/{id}', [CategorieController::class, 'update'])->name('categorie-update');
    Route::delete('/categories/delete/{id}', [CategorieController::class, 'destroy'])->name('categorie-delete');

    Route::get('/villes', [VilleController::class, 'index'])->name('ville-index');
    Route::get('/villes/create', [VilleController::class, 'create'])->name('ville-create');
    Route::get('/villes/edit/{id}', [VilleController::class, 'edit'])->name('ville-edit');
    Route::post('/villes/store', [VilleController::class, 'store'])->name('ville-store');
    Route::put('/villes/update/{id}', [VilleController::class, 'update'])->name('ville-update');
    Route::delete('/villes/delete/{id}', [VilleController::class, 'destroy'])->name('ville-delete');

});