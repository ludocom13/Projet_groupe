<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConnexionController extends Controller
{
    public function formulaire(){
     

        return view('connexion');
    }

    public function traitement(Request $request){
        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


Auth::attempt([
         'email'=> $request->get('email'),
         
         'mot_de_passe'=> $request->input('password'),
]);

      
    return view('Acceuil');
     //mettre la vue de l'acceuil
    }
}
