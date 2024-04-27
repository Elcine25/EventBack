<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\VilleController;
use App\Http\Controllers\EvenementsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
// Connexion

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('categories', [CategorieController::class, 'index']);
Route::post('categories', [CategorieController::class, 'store']);
Route::get('categories/{id}', [CategorieController::class, 'show']);
Route::get('categories/{id}/edit', [CategorieController::class, 'edit']);
Route::put('categories/{id}/edit', [CategorieController::class, 'update']);
Route::delete('categories/{id}/delete', [CategorieController::class, 'destroy']);

Route::get('villes', [VilleController::class, 'index']);
Route::post('villes', [VilleController::class, 'store']);
Route::get('villes/{id}', [VilleController::class, 'show']);
Route::get('villes/{id}/edit', [VilleController::class, 'edit']);
Route::put('villes/{id}/edit', [VilleController::class, 'update']);
Route::delete('villes/{id}/delete', [VilleController::class, 'destroy']);

Route::post('evenements', [EvenementsController::class, 'store']);
Route::get('evenements/{id}', [EvenementsController::class, 'show']);
Route::get('evenements/{id}/edit', [EvenementsController::class, 'edit']);
Route::put('evenements/{id}/edit', [EvenementsController::class, 'update']);
Route::delete('evenements/{id}/delete', [EvenementsController::class, 'destroy']);


Route::middleware('auth:sanctum')->group(function () {
});




  

