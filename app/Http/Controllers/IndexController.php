<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnage;
use App\Models\Groupe;
use App\Models\User;
use App\Models\Atelier;
use Jenssegers\Date\Date;

Date::setLocale('fr');



class IndexController extends Controller
{
    /**
     * Récupération et affichage des données indexées
     */
    public function pageIndex()
    {
        //Récupération de la liste des personnages
        $listPerso      = Personnage::all();
        $comptPerso     = $listPerso->count();

        //Récupération des groupes des personnages
        $listGroupe     = Groupe::all();
        $comptGroupe    = $listGroupe->count();
        
        //Récupération des ateliers disponibles
        $listAtelier    = Atelier::all();
        $comptAtelier   = $listAtelier->count();



        return view('index',
            [   'tablePersonage' => $listPerso,
                'nombrePerso'   => $comptPerso,
                'tableGroupe'   => $listGroupe,
                'nombreGroupe'  => $comptGroupe,
                'tableAtelier'  => $listAtelier,
                'nombreAtelier' => $comptAtelier,
            ]
        );
    }


    /**
     * Display a listing of the resource.
     */
    public function pageRech()
    {

        return view('layouts.contents.modals.searchModal');
    }


    /**
     * Retourne le resultat d'une recherche
     */
    public function rturnRech()
    {
        //Récupération de la liste des personnages
        $listPerso      = Personnage::all();
        $comptPerso     = $listPerso->count();

        //Récupération des groupes des personnages
        $listGroupe     = Groupe::all();
        $comptGroupe    = $listGroupe->count();



        return view('layouts.contents.modals.searchModal',
            [   'tablePersonage' => $listPerso,
                'nombrePerso'   => $comptPerso,
                'tableGroupe'   => $listGroupe,
                'nombreGroupe'  => $comptGroupe
            ]
        );
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
        //
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
}
