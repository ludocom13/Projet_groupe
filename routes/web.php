<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AtelierController;
use App\Http\Controllers\PersonnageController as Personnages;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;

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




Route::controller(AtelierController::class)->group( function () {

    Route::get('/', 'pageAtelier')->name('page.atelier');
    Route::get('/atelier/creation/', 'formAtelier')->name('atel.formCreate');
    Route::post('/atelier/creation/registre', 'registre')->name('atel.registre');
    
    Route::get('/domaine/creation/', 'formDomaine')->name('domen.formCreate');
    Route::post('/domaine/creation/registre', 'regDomaine')->name('domen.registre');

});



//Routes de gestion des indexations
Route::controller(IndexController::class)->group( function () {

    Route::get('/', 'pageIndex')->name('page.index');
    Route::get('/index/recherche/', 'pageRech')->name('page.recherche');
    Route::get('/index/recherche/{name}', 'rturnRech')->name('recher.express');

});



//Routes de gestion des utilisateurs
Route::controller(UserController::class)->group( function () {

    Route::get('/connexion', 'formConnexion')->name('R_connexion');
    Route::post('/users/verification', 'verifConnex')->name('R_verifConnexion');

    Route::get('/inscription/', 'formInscription')->name('R_inscription');
    Route::post('/users/registre', 'registre')->name('R_regInscription');

    Route::get('/users/reset/', 'formReset')->name('R_formReset');
    Route::get('/users/envoi', 'updatePass')->name('R_updatePass');

    Route::get('/users/details/{id}', 'details')->name('R_details');
    Route::get('/users/edition/{id}/edit', 'Modif')->name('R_formEdite');

    Route::patch('/users/edit/{id}', 'update')->name('R_updateDetails');
    Route::delete('/users/edit/{id}', 'suppr')->name('R_suppr');

    Route::get('/profil/{name}', 'profil')->name('R_profil')->middleware('auth');
    Route::get('/deconnexion', 'logout')->name('R_deconnexion')->middleware('auth');


    //Gestion des groupes
    Route::get('/equipes/', 'equipe')->name('R_equipe');
    Route::get('/groupes/formulaire', 'formGroupe')->name('R_formGroupe');
    Route::get('/equipes/ajout', 'reGroupe')->name('R_reGroupe');

});


//Routes de gestion des événements
Route::controller(EventController::class)->group( function () {

    Route::get('/evenements/', 'listEvent')->name('R_events');

    Route::get('/evenement/', 'formEvent')->name('R_addEvent');
    Route::post('/evenement', 'regEvent')->name('R_regEvent');


    Route::get('/evenements/event/{name}', 'showEvent')->name('R_detailEvent')->middleware('auth');

    

});


Route::controller(Personnages::class)->group( function () {

    Route::get('atelier/personnage', 'index')->name('index.personnage');
    Route::get('/atelier/personnage/ajout/', 'create')->name('create.personnage');
    

    Route::get('/atelier/personnage/details/{id}', 'show')->name('show.personnage');
    Route::get('/atelier/personnage/edition/{id}/edit', 'edit')->name('edit.personnage');
    Route::post('/atelier/personnage/ajout', 'store')->name('store.personnage');

    Route::patch('/atelier/personnage/edit/{id}', 'update')->name('update.personnage');
    Route::delete('/atelier/personnage/edit/{id}', 'destroy')->name('destroy.personnage');


    Route::get('atelier/personnage/groupes/ajout', 'createGroupe')->name('group.personnage');
    Route::post('/atelier/personnage/group/ajout', 'storeGroup')->name('store.groupe');
    Route::get('/atelier/personnage/groupe/{id}/details/', 'showGroup')->name('show.groupe');
    Route::get('/atelier/personnage/groupe/{id}/edition/', 'editGroup')->name('edit.groupe');
    Route::patch('/atelier/personnage/groupe/edit/{id}', 'updateGroupe')->name('update.groupe');
    Route::delete('/atelier/personnage/groupe/edit/{id}', 'destroyGroupe')->name('destroy.groupe');

});
