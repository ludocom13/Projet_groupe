<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnage;
use App\Models\Groupe;
use Jenssegers\Date\Date;

Date::setLocale('fr');

class PersonnageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        //Récupération de la liste des personnages
        $listPerso      = Personnage::all();
        $comptPerso     = $listPerso->count();

        //Récupération des groupes des personnages
        $listGroupe     = Groupe::all();
        $comptGroupe    = $listGroupe->count();



        return view('pages.ateliers.atipersonnage.liste',
            [   'tablePersonage' => $listPerso,
                'nombrePerso'   => $comptPerso,
                'tableGroupe'   => $listGroupe,
                'nombreGroupe'  => $comptGroupe
            ]
        );
    }

    /**
     * Affichage du formulaire d'ajout de groupe
     */
    public function create()
    {
        return view('pages.ateliers.atipersonnage.create');
    }

    /**
     * Affichage du formulaire d'ajout de groupe
     */
    public function createGroupe()
    {
        return view('pages.ateliers.atipersonnage.createGroup');
    }
    

    /**
     * Ajout d'un personnage dans la BDD
     */
    public function store(Request $request)
    {
        //PREPARATION D'INSERTION

        $validatedData      = $request->validate([
            'persNom'       => 'required|min:3|max:60',
            'perSpecial'    => 'required',
            'persDescript'  => 'required',
        ]);

        $Persong            =  Personnage::create([

            'nom'           => strtoupper($request->persNom),
            'specialites'   => $request->perSpecial,
            'magie'         => rand(0, 14),
            'force'         => rand(0, 14),
            'agilite'       => rand(0, 14),
            'intelligeance' => rand(0, 14),
            'pv'            => rand(20, 50),
            'userID'        => '1',
            'description'   => $request->persDescript,
            'datEdite'      => Date::now(),
            'statut'        => 'ACTIF',
            'dateMaj'       => Date::now()


                            ]);


        return view('pages.ateliers.atipersonnage.create', ['creation' => $request]);

    }


    /**
     * Ajout d'un nouveau groupe dans la BDD
    */
    public function storeGroup(Request $request)
    {
        //PREPARATION D'INSERTION

        $validatedData      = $request->validate([
            'groupNom'      => 'required|string|min:5|max:60',
            'grouPlace'     => 'required',
            'groupDescript' => 'required|string|min:10',
        ]);

        $Persong            =  Groupe::create([

            'nom'           => strtoupper( trim($request->groupNom) ),
            'nb_place'      => $request->grouPlace,
            'description'   => trim($request->groupDescript),
            'userID'        => '1',
            'datEdite'      => Date::now(),
            'statut'        => 'ACTIF',
            'dateMaj'       => Date::now()

                            ]);


        return view('pages.ateliers.atipersonnage.createGroup', ['creation' => $request]);

    }



    /**
     * Affichage du détail d'un personnage
     */
    public function show(string $id)
    {
        //Récupération des données détails de $id soumis
        $thisPerson     = Personnage::findOrFail($id);
        $nomPersong     = $thisPerson->nom;

        return view('pages.ateliers.atipersonnage.details',
            ['onDetails' => $thisPerson, 'rang' => $id, 'tags' => $nomPersong]
        );

    }


    /**
     * Affichage du détail de groupe
     */
    public function showGroup(string $id)
    {
        //Récupération des données détails de $id soumis
        $thisGroupe     = Groupe::findOrFail($id);
        $nomGroupe      = $thisGroupe->nom;

        return view('pages.ateliers.atipersonnage.groupdetails',
            ['onDetails' => $thisGroupe, 'rang' => $id, 'tags' => $nomGroupe]
        );

    }


    /**
     * Affichage du formulaire des modification de personnage
     */
    public function edit(string $id)
    {
        //Récupération des données détails de $id soumis
        $editPerson     = Personnage::findOrFail($id);
        $nomPersong     = $editPerson->nom;

        return view('pages.ateliers.atipersonnage.edite',
            [
                'onDetails' => $editPerson,
                'rang' => $id,
                'tags' => $nomPersong
            ]
        );
    }


    /**
     * Affichage du formulaire des modification de groupe
     */
    public function editGroup(string $id)
    {
        //Récupération des données détails de $id soumis
        $editGroupe     = Groupe::findOrFail($id);
        $nomGroupe      = $editGroupe->nom;

        return view('pages.ateliers.atipersonnage.editeGroupe',
            [
                'onDetails' => $editGroupe,
                'rang' => $id,
                'tags' => $nomGroupe
            ]
        );

    }




    /**
     * Mise à jour des modification sur un personnage
     */
    public function update(Request $request, string $id)
    {
        $validatedData          = $request->validate([
            'persNom'           => 'required|min:3|max:60',
            'perSpecial'        => 'required',
            'persDescript'      => 'required',
        ]);

        $validUpDate            = Personnage::findOrFail($id);
        $updateListe            = Personnage::all()->count();

            $validUpDate->nom   = strtoupper($request->persNom);
            $validUpDate->specialites = $request->perSpecial;
            $validUpDate->description = $request->persDescript;
            $validUpDate->dateMaj     = Date::now();

        $validUpDate->save();

        //Récupération des données détails de $id soumis
        $nomPersong             = $validUpDate->nom;
        $majStatut              = $validUpDate->statut;

        return view('pages.ateliers.ATpersonnage.details',
            [
                'onDetails' => $validUpDate,
                'rang' => $id,
                'tags' => $nomPersong,
                'modification' => $majStatut
            ]
        );
        
    }


    /**
     * Mise à jour des modification sur un groupe.
     */
    public function updateGroupe(Request $request, string $id)
    {
        
        $validatedData      = $request->validate([
            'groupNom'      => 'required|string|min:5|max:60',
            'grouPlace'     => 'required',
            'groupDescript' => 'required|string|min:10',
        ]);

        
        $validUpDate        = Groupe::findOrFail($id);
        $updateListe        = Groupe::all()->count();

            $validUpDate->nom   = strtoupper($request->groupNom);
            $validUpDate->nb_place = $request->grouPlace;
            $validUpDate->description = $request->groupDescript;
            $validUpDate->dateMaj     = Date::now();

        $validUpDate->save();


        //Récupération des données détails de $id soumis
        $nomGroupe          = $validUpDate->nom;
        $majStatut          = $validUpDate->statut;

        return view('pages.ateliers.atipersonnage.groupdetails',
            [
                'onDetails' => $validUpDate,
                'rang' => $id,
                'tags' => $nomGroupe,
                'modification' => $majStatut
            ]
        );
        
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $suppr_personnage = Personnage::findOrFail($id);
        $suppr_personnage->delete();

        //Récupération de la liste des personnages
        $listPerso      = Personnage::all();
        $comptPerso     = $listPerso->count();

        return view('pages.ateliers.ATpersonnage.liste',
            [   'tablePersonage' => $listPerso,
                'nombrePerso' => $comptPerso]
        );
    }



    /**
     * Suppression d'un groupe
     */
    public function destroyGroupe(string $id)
    {
        $suppr_groupe   = Groupe::findOrFail($id);
        $suppr_groupe->delete();

        //Récupération de la liste des personnages
        $listPerso      = Groupe::all();
        $comptPerso     = $listPerso->count();

        return view('pages.ateliers.atipersonnage.liste',
            [   'tablePersonage' => $listPerso,
                'nombrePerso' => $comptPerso]
        );
    }




}
