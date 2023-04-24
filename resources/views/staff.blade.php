@extends('layouts')

@section('contenu')

<form action="Add_movie" method="post">
@csrf

<input type="text" placeholder="email" name="email">

<input type="text" placeholder="Nom d'utilisateurs" name="pseudo">

<input type="submit" value="se connecter" name="validez">


</form>

@endsection
