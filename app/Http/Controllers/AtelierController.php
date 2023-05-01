<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atelier;
use App\Models\Domaine;
use App\Http\Requests\StoreAtelierRequest;
use App\Http\Requests\UpdateAtelierRequest;

use Jenssegers\Date\Date;

Date::setLocale('fr');

class AtelierController extends Controller
{
    /**
     * Affichage de la pages des ateliers
     */
    public function pageAtelier()
    {
        //
    }

    /**
     * Affichage du formulaire de création d'atelier
     */
    public function formAtelier()
    {
        //Récupération de la liste des personnages
        $listDomen          = Domaine::all();
        $listAtelier        = Atelier::all();

        return view('layouts.contents.modals.creatAtelier', 
                    [
                        'lesDomaines' => $listDomen,
                        'lesAteliers' => $listAtelier,
                    ]);
    }


    /**
     * Affichage du formulaire de création de domaine de travail
     */
    public function formDomaine()
    {
        return view('layouts.contents.modals.creatDomaine');
    }


    /**
     * Enregistrement d'un nouveau atelier
     */
    public function registre(Request $request)
    {
        //PREPARATION D'INSERTION

        //Récupération de la liste des domaines
        $listDomen          = Domaine::all();

        //Récupération de la liste des ateliers
        $listAtelier        = Atelier::all();
        $comptAtelier       = $listAtelier->count();
        $ranAtelier         = $comptAtelier + 1;

        $validatedData      = $request->validate([
            'domaine'       => 'required',
            'sujet'         => 'required|min:3|max:60',
            'description'   => 'required|string|min:15',
        ]);

        $Persong            = Atelier::create([

            'sujet'         => $request->sujet,
            'domaine'       => strtoupper($request->domaine),
            'userID'        => 1,
            'nom'           => str_replace(" ", "_", $request->sujet)."[_]".$ranAtelier,
            'note'          => 0,
            'description'   => $request->description,
            'statut'        => 'ACTIF',
            'datEdite'      => Date::now(),
            'dateMaj'       => Date::now()


                            ]);



        

        return view('layouts.contents.modals.creatAtelier',
                    [
                        'successRequest' => $request,
                        'lesDomaines' => $listDomen,
                        'lesAteliers' => $listAtelier,

                    ]);

    }
    
    
    /**
     * Enregistrement d'un nouveau domaine de travail
     */
    public function regDomaine(Request $request)
    {
        //PREPARATION D'INSERTION

        //Récupération de la liste des personnages
        $listDomen          = Domaine::all();
        $comptDomen         = $listDomen->count();
        $ranDomen           = $comptDomen + 1;

        $validatedData      = $request->validate([
            'nomDomaine'    => 'required|min:3|max:60',
            'groupe'        => 'required|in:HTML,PHP,LARAVEL,JAVASCRIPT,REACT,VUE,PYTHON',
            'description'   => 'required|string|min:15',
        ]);

        $Persong            = Domaine::create([

            'domaine'       => strtoupper($request->nomDomaine),
            'groupe'        => $request->groupe,
            'userID'        => 1,
            'nom'           => str_replace(" ", "_", $request->nomDomaine)."[_]".$ranDomen,
            'note'          => 0,
            'description'   => $request->description,
            'statut'        => 'ACTIF',
            'datEdite'      => Date::now(),
            'dateMaj'       => Date::now()


                            ]);





        return view('layouts.contents.modals.creatDomaine', ['successRequest' => $request]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Atelier $atelier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Atelier $atelier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAtelierRequest $request, Atelier $atelier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Atelier $atelier)
    {
        //
    }
}
