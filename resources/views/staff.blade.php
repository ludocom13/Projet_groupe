@extends('layouts')

@section('contenu')

<form action="{{route('staff')}}" method="post">
@csrf

<input type="text" placeholder="email" name="email">

<input type="text" placeholder="Nom" name="nom">

<input type="submit" value="se connecter" name="validez">


</form>

@endsection
