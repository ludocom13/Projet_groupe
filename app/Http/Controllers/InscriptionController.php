<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use App\Models\Inscriptionutilisateur;

class InscriptionController extends Controller { 


public function registre(Request $request)
    {
            $request()->validate([
            'nom'=>['require|string|max:15'],
            'prenom'=>['require|string|max:15'],
            'email'=>['required|string|max:50|unique:users'],
            'pseudo'=>['required|string|max:20|unique:users'],
            'mot_de_passe'=>['required|string|min:8'],

        ]);
    }

    public function showformulaire(){
        return view('inscription');
    }

    public function index()
    {
        return view('home');
    }

}