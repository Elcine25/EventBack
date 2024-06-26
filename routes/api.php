<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CcategorieController;
use App\Http\Controllers\VvilleController;
use App\Http\Controllers\EevenementsController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\MailSubscripController;

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
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group(function () {
//Route::post('commentaires', [CommentaireController::class, 'store']);
Route::post('/evenements/{eventId}/commentaires', [CommentaireController::class, 'store']);
Route::post('/evenements/votes', [VoteController::class, 'store']);
Route::get('evenements/votes/{evenement_id}', [VoteController::class, 'show']);
Route::post('/subscribe', [MailSubscripController::class, 'etreNotifie']);
});


Route::get('commentaires', [CommentaireController::class, 'index']);
//Route::post('commentaires', [CommentaireController::class, 'store']);
Route::get('commentaires/{id}/commentaires', [CommentaireController::class, 'show']);
//Route::get('/evenements/{id}/commentaires', [CommentaireController::class, 'showw']);


Route::get('categories', [CcategorieController::class, 'index']);
Route::post('categories', [CcategorieController::class, 'store']);
Route::get('categories/{id}', [CcategorieController::class, 'show']);
Route::get('categories/{id}/edit', [CcategorieController::class, 'edit']);
Route::put('categories/{id}/edit', [CcategorieController::class, 'update']);
Route::delete('categories/{id}/delete', [CcategorieController::class, 'destroy']);

Route::get('villes', [VvilleController::class, 'index']);
Route::post('villes', [VvilleController::class, 'store']);
Route::get('villes/{id}', [VvilleController::class, 'show']);
Route::get('villes/{id}/edit', [VvilleController::class, 'edit']);
Route::put('villes/{id}/edit', [VvilleController::class, 'update']);
Route::delete('villes/{id}/delete', [VvilleController::class, 'destroy']);

Route::get('evenements', [EevenementsController::class, 'index']);
Route::post('evenements', [EevenementsController::class, 'store']);
Route::get('evenements/{id}', [EevenementsController::class, 'show']);
Route::get('evenements/{id}/edit', [EevenementsController::class, 'edit']);
Route::put('evenements/{id}/edit', [EevenementsController::class, 'update']);
Route::delete('evenements/{id}/delete', [EevenementsController::class, 'destroy']);
Route::get('evenementscounts', [EevenementsController::class, 'getEventCounts']);
Route::get('events/miseenavant', [EevenementsController::class, 'miseenavant']);

Route::get('/evenements/search', [EevenementsController::class, 'search']);
Route::get('/evenements/filter', [EevenementsController::class, 'filter']);



//Route::get('/evenements', [EevenementsController::class, 'getFilteredEvents']);





  

