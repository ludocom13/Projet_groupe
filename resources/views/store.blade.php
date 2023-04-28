@extends('layouts.app')

@section('title')
<h1>Votre comptre à été créer</h1>
@endsection
@section('content')
<p>NOM : {{$request->nom}}</p>
<p>PRENOM : {{$request->prenom}}</p>
<p>EMAIL : {{$request->email}}</p>
<p>FONCTION : {{$request->fonction}}</p>


@endsection