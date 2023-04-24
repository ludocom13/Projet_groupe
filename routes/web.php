<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Utilisateur;
use App\Http\Controllers\Connexion;
use App\Http\Controllers\Inscriptiontraitement;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|


Route::get('/',  function () {
    return view('welcome');
});
*/

Route::get('/home', [InscriptionController::class, 'index'])->name('home');

Route::get('/connexion',  [ConnexionController::class, 'formulaire'])->name('connexion');

Route::post('/connexion',  [ConnexionController::class, 'traitement'])->name('connexion');

Route::post('/inscription', [InscriptionController::class, 'registre'])->name('inscription');

Route::get('/inscription', [InscriptionController::class, 'showformulaire'])->name('inscription');

