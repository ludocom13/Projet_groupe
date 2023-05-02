<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Utilisateur;
use App\Models\User;
use Jenssegers\Date\Date;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class UserController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function formInscription()
    {
        return view('layouts.contents.formulaires.inscription');
    }


    /**
     * Save the form creating of a new resource.
     */
    public function registre(Request $request)
    {
        //PREPARATION D'INSERTION

        $validatedData      = $request->validate([

            'nom'           => ['required', 'string', 'min:3', 'max:60'],
            'prenom'        => ['required', 'string', 'min:3', 'max:60'],
            'email'         => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'      => ['required', 'string', 'confirmed', 'min:8'],
        ]);

        
        
        $listUers           = User::all()->count();
        $newRang            = $listUers + 1;
        $longRang           = strlen($newRang);
        $numParaph          = rand(1234567891, 2345678912);
        
        $falsePhone         = substr($numParaph, 0, (10 - $longRang) ).$newRang;

        $login              = strtoupper( substr($request->nom, 0, 2).substr($request->prenom, 0, 1) . substr($falsePhone, 3) );



        $Persong            =  User::create([

            'login'         => $login,
            'nom'           => strtoupper( trim($request->nom) ),
            'prenom'        => ucwords( trim($request->prenom) ),
            'email'         => strtolower( trim($request->email) ),
            'telephone'     => $falsePhone,
            'email_verif'   => strtolower( trim($request->email) )."_NON",
            'password'      => Hash::make( trim($request->password)),
            'cle_token'     => Str::random(60),
            'etat'          => "VERIFICATION",
            'statut'        => "EN COURS",
            'datEdite'      => Date::now(),
            'dateMaj'       => Date::now(),


                            ]);

       return redirect()->route('R_connexion', ['successRequest' => $request,]);
    
    }


    /**
     * Display a listing of the resource.
     */
    public function formConnexion()
    {
        return view('layouts.contents.formulaires.connexion');
    }


    /**
     * Verify the form for connex a new user.
     */
    public function verifConnex(Request $request)
    {
        $validatedData      = $request->validate([

            'email'         => 'required|email',
            'password'      => 'required|string|min:8',
        ]);        
        
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            $request->session()->regenerate();

            $keyId          = Auth::user()->id;
            //$keyId          = Auth::id();
            $keyNom         = hash('sha256', Auth::user()->nom);
            //$qrcode         = QrCode::size(200)->generate($keyId);

            return redirect()->route('R_profil', [$keyId, $keyNom]);
        }

        
        return back()->withErrors([
            'email' => 'Email ou mot de passe à vérifier'
        ]);          

    }




    /**
     * 
    */
    public function profil(string $id)
    {
        //Récupération des données détails de $request->id soumis
        $thisAuth           = User::query()
                                ->where('id', $id)
                                ->firstOrFail();


        $nomAuth            = $thisAuth->nom;
        $id                 = $thisAuth->id;
        $loginUser          = $thisAuth->login;
        $user_Qr            = QrCode::size(200)->generate($loginUser);

        return view('layouts.contents.utilisateurs.profil',
            [   'onDetails' => $thisAuth,
                'rang'      => $id,
                'tags'      => $nomAuth,
                'Qr_user'   => $user_Qr, 
            ]
        );
    
    }


    /**
    * Log the user out of the application.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function logout(Request $request)
    {
        Auth::logout();
     
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/');
    }





    /**
     * Display the specified resource.
     */
    public function formReset()
    {
        return view('layouts.contents.formulaires.reinitialisation');
    }


    /**
     * Display the specified resource.
     */
    public function details(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function Modif(string $id)
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
    public function suppr(string $id)
    {
        //
    }

    
}
