<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Inscriptionutilisateur as modelUser;
use Illuminate\Support\Facades\Hash;


class InscriptionController extends Controller { 


public function registre(Request $request)
    {
            $request->validate([
            'nom'=>['required','string','max:15'],
            'prenom'=>['required','string','max:15'],
            'email'=>['required','string','max:50, unique:users'],
            'mot_de_passe'=>['required','string','min:8'],
         
        ]);
        
        modelUser::create([
             'nom'=> $request->nom,
             'prenom'=> $request->prenom,
             'email'=> $request->email,
             'mot_de_passe' => Hash::make($request->mot_de_passe),
             'fonction'=> 'particulier',
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