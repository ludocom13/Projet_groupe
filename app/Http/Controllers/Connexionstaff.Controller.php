<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConnexionstaffController extends Controller
{
   

    public function staffco(Request $request){
        request()->validate([
            'pseudo' => ['required', 'pseudo'],
            'password' => ['required'],
        ]);


Auth::attempt([
        
         'pseudo'=> $request->get('pseudo'),
         'mot_de_passe'=> $request->input('password'),
]);

      
    return view('Add_movie');
     //mettre la vue de l'ajout de film
    }
}
