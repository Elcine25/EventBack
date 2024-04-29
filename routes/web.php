<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\EvenementsController;
use Illuminate\Support\Facades\Route;

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

    Route::get('/events', [EvenementsController::class, 'index'])->name('event-index');
    Route::get('/events/create', [EvenementsController::class, 'create'])->name('event-create');
    Route::post('/events/store', [EvenementsController::class, 'store'])->name('event-store');

    Route::get('/categories', [CategorieController::class, 'index'])->name('categorie-index');
    Route::get('/categories/create', [CategorieController::class, 'create'])->name('categorie-create');
    Route::get('/categories/edit/{id}', [CategorieController::class, 'edit'])->name('categorie-edit');
    Route::post('/categories/store', [CategorieController::class, 'store'])->name('categorie-store');
    Route::put('/categories/update/{id}', [CategorieController::class, 'update'])->name('categorie-update');
    Route::delete('/categories/delete/{id}', [CategorieController::class, 'destroy'])->name('categorie-delete');

});