<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use App\Models\Inscriptionutilisateur;

class Utilisateur extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    public function login(Request $request)
    {
        
    }
    /**
     * Store a newly created resource in storage.
     */
    public function registre(Request $request)
    {
        $validate= $request->validate([
            'nom'=>'require|string|max:15',
            'prenom'=>'require|string|max:15',
            'email'=>'required|string|max:50|unique:users',
            'pseudo'=>'required|string|max:20|unique:users',

        ]);

       $insertion= Utilisateur::create([

       'nom'=> $request->nom,
       'prenom'=> $request->prenom,
       'email'=>$request->email,
       'fonction'=> $request->pseudo,
        

       ]);
     
    }
   


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    public function sign(){
        return view('inscription');
    }
    
    public function signok(Request $request){
        $utilisateurs = new Utilisateur;
        $utilisateurs->mp = $request->mp;
        $utilisateurs->email = $request->email;
        $utilisateurs->pseudo= $request->pseudo;

        $utilisateurs->save();
        return view('');
    }
};

