<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Film;





class FilmController extends Controller{
   
    public function create(Film $films){
        $films=Film::all();
        return
        view("films.create",['films'=>$films]);
    } 
    public function store(Request $request){
        $request -> validate ([
            "titre" => "required|string|max:25",
            "annee" => "required|date|max:20",
            "auteur" => "required|string|max:30",
            "categorie" => "required",
            "annonce" => "",
        ]);$films = Film::create([
            
            'titre' => $request->titre,
            'annee' => $request->annee,
            'auteur' => $request->auteur,
            'categorie'=> $request->categorie,
            'annonce'=> $request->annonce ]);

        return 
        view("films.store",['request'=>$request] );
    }
    public function show(Request $request){
        return 
        view("films.show",['request'=>$request]);
    }
}
