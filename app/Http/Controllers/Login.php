<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    public function login(){
     

        return view('connexion');
    }

    public function traitement(Request $request){
        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

    $resultat=
Auth::attempt([
         'email'=> $request->get('email'),
         'pseudo'=> $request->get('pseudo'),
         'mp'=> $request->input('password'),
]);
var_dump($resultat);  
      
    return "conectée";
     
    }
}
