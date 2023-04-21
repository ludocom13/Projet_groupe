@extends('layouts')

@section('contenu')
<h2>Pret a devenir cinéphile ? </h2>

<form action="{{route('inscription')}}" method="post">
   
  @csrf
   
    <input type="text" placeholder="Prenom" name="prenom">
    
    <input type="text" placeholder="Nom" name="nom">

    <input type="text" placeholder="email" name="email">

    <input type="text" placeholder="Nom d'utilisateurs" name="pseudo">
    
    <input type="submit" value="s'inscrire" name="validez">

</form>



@endsection