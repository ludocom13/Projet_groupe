<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Utilisateur;
use App\Http\Controllers\Connexion;
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

Route::get('/home', [Utilisateur::class, 'index'])->name('home');

Route::get('/connexion',  [Connexion::class, 'login'])->name('connexion');


Route::post('/inscription', function () {
    return view('inscription');
});

Route::get('/inscription', [Utilisateur::class, 'registre'])->name('inscription');

