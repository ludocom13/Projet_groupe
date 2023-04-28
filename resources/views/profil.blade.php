@extends('layouts.app')

@section('title')
<h1>Mon Compte</h1>
@endsection
@section('content')
<p>NOM : {{$utilisateur->nom}}</p>
<p>PRENOM : {{$utilisateur->prenom}}</p>
<p>EMAIL : {{$utilisateur->email}}</p>
<p>FONCTION : {{$utilisateur->fonction}}</p>



@endsection