<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ConnexionstaffController extends Controller
{
   

    public function staffco(Request $request){
        request()->validate([
           
            'password' => ['required'],
        ]);


Auth::attempt([
        
         'email'=> $request->get('email'),
         'mot_de_passe'=> $request->input('password'),
]);

      
    return view('staff');
     //mettre la vue de l'ajout de film
    }
}
