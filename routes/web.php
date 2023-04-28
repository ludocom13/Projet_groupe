<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\FilmController;
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

Route::get('/', [UtilisateurController::class,"acceuil"])->name("acceuil");
Route::get('/create', [UtilisateurController::class,"create"])->name("create");
Route::post('/', [UtilisateurController::class,"store"])->name("store");
Route::get('/show', [UtilisateurController::class,"show"])->name("show");
Route::get('/login', [UtilisateurController::class,"login"])->name("login");
Route::get('/profil', [UtilisateurController::class,"profil"])->name("profil");
Route::post('/login', [UtilisateurController::class,"connected"])->name("login.connected");


Route::get('/vues', [GenresController::class,"vues"])->name("vues");
Route::get('/films', [GenresController::class,"films"])->name("films");
Route::get('genres/science_fiction', [GenresController::class,"science_fiction"])->name("science_fiction");
Route::get('/action', [GenresController::class,"action"])->name("action");
Route::get('/aventure', [GenresController::class,"aventure"])->name("aventure");
Route::get('/epouvante', [GenresController::class,"epouvante"])->name("epouvante");
Route::get('/comedie', [GenresController::class,"comedie"])->name("comedie");
Route::get('/animation', [GenresController::class,"animation"])->name("animation");
Route::get('/thriller', [GenresController::class,"thriller"])->name("thriller");


Route::get('/films/create', [FilmController::class,"create"])->name("films.create");
Route::post('/films', [FilmController::class,"store"])->name("films.store");
Route::get('/films', [FilmController::class,"show"])->name("films.show");


