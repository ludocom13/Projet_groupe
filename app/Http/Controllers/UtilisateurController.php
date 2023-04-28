<?php namespace App\Http\Controllers;


use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UtilisateurController extends Controller{
  
    public function acceuil(){

    return
    view("acceuil");
} 
public function create(){
        return 
        view("create");
    }
    public function store(Request $request){
        $request->validate([
            "nom"=> "required|string|max:50",
            "prenom"=>"required|string|max:50",
            "email"=> "required|email|max:300",
            "mot_de_passe"=>"required|string|max:50",
            "fonction"=>"required|IN:admin,staff,client|",  
        ]); 
        $utilisateur = Utilisateur::create([
            
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'mot_de_passe' =>Hash::make($request->mot_de_passe),
            'fonction'=> $request->fonction ]);



        return 
        view("store",['request'=>$request]);
    }
    
    public function show(Utilisateur $utilisateurs ){
        $utilisateurs=Utilisateur::all();
        foreach ($utilisateurs as $key => $utilisateur) {
          ?><p><?php echo $utilisateur["nom"] ?></p><?php ;
        }
        return 
        
        view('show',["utilisateur"=> $utilisateur]);
    }

    public function login (){
        return 
        view("login");
    }


    public function connected(request $request){
        $request->validate([
           
            'email' => 'required|email|max:300',
            'mot_de_passe' => 'required|string|min:8|max:100',]);
            
        if (Auth::attempt(['email' => $request->email, 'password' => $request->mot_de_passe])) {
            return view('connected', ['request' => $request]);
            }
        else
        return 
        "<html>
        <body>
        <h1>NuL</h1>
        </body>
        </html>";
    }

    public function profil(){
        
    }
   
    

}