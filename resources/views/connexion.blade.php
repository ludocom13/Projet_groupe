@extends('layouts')

@section('contenu')

<h2>Tu es ?</h2>
<form action="{{route('connexion')}}" method="post">
   
  @csrf
   
    <input type="password" placeholder="mot de passe" name="mot_de_passe">
 
    <input type="text" placeholder="email" name="email">

    <input type="text" placeholder="Nom d'utilisateurs" name="pseudo">
    
    <input type="submit" value="se connecter" name="validez">

</form>

@endsection