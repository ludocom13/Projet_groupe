<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Evenement;
use Jenssegers\Date\Date;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class EventController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function listEvent()
    {
        $listEvent  = Evenement::all();
        $nmbrEvent  = $listEvent->count();
        $qrcodEvent = QrCode::size(200)->generate($nmbrEvent);

        return view('layouts.contents.events.evenements',

                    [
                        'allEvents'     => $listEvent,
                        'comptEvent'    => $nmbrEvent,
                        'codeQR'        => $qrcodEvent,
                    ]
                );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function formEvent()
    {
        $listEvent  = Evenement::all();
        $nmbrEvent  = $listEvent->count();
        $qrcodEvent = QrCode::size(200)->generate($nmbrEvent);

        return view('layouts.contents.formulaires.addEvent',
                    [
                        'allEvents'     => $listEvent,
                        'comptEvent'    => $nmbrEvent,
                        'codeQR'        => $qrcodEvent,
                    ]
                );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function regEvent(Request $request)
    {   
        $listEvent  = Evenement::all();
        $nmbrEvent  = $listEvent->count();
        $qrcodEvent = QrCode::size(200)->generate($nmbrEvent);

        $request->validate([

            'evtTitle'     => ['required', 'string', 'min:5', 'max:150'], 
            'evtDate'      => ['required', 'date'],
            'evtHeure'     => ['required', 'string'], 
            'evtLieu'      => ['required', 'string', 'min:5', 'max:150'], 
            'evtDescript'  => ['required', 'string', 'min:10', 'max:250'],
            'evtLink'      => ['string'], 
        ]);

        $varDate            = explode("-", $request->evtDate);
        $datEvent           = new Date($request->evtDate . ' '. $request->evtHeure . ':'. 0);

        $newEvent           = Evenement::create([
            'titre'         => strtoupper( trim( $request->evtTitle) ),
            'lieu'          => strtoupper( trim( $request->evtLieu) ),
            'description'   => trim( $request->evtDescript),
            'date'          => $datEvent,
            'comments'      => 0,
            'notes'         => 0,
            'participants'  => 0,
            'click'         => 0,
            'statut'        => 'EN COURS',
            'datEdite'      => Date::now(),
            'dateMaj'       => Date::now(),
            'agent'         => Auth::id(),
            'link_img'      => trim($request->evtLink),
        ]);


        return redirect()->route('R_events',

                    [
                        'successRequest'=> $request,     
                        'allEvents'     => $listEvent,
                        'comptEvent'    => $nmbrEvent,
                        'codeQR'        => $qrcodEvent,
                    ]

                );

        /*return view('layouts.contents.events.evenements',
                    [
                        'successRequest'=> $request,     
                        'allEvents'     => $listEvent,
                        'comptEvent'    => $nmbrEvent,
                    ]
                );
        */

    }


    /**
     * Affichage du détail d'un événement
    */
    public function showEvent(string $id)
    {
        //Récupération des données détails de $request->id soumis
        $thisEvent          = Evenement::query()
                                ->where('id', $id)
                                ->firstOrFail();


        $idEvent            = $thisEvent->id;
        $nomEvent           = $thisEvent->titre;
        $idUser             = $thisEvent->agent;

        return view('layouts.contents.events.detailEvent',
            [   'onDetails' => $thisEvent,
                'rang'      => $idEvent,
                'tags'      => $nomEvent,
                'agentEvt'  => $idUser, 
            ]
        );
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
