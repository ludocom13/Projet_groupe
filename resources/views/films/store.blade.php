@extends('layouts.app')

@section("title")
<h1>Dernier ajouts</h1>
@endsection

@section("content")
<h2>Film ajouté</h2>

<p>Titre : {{$request->titre}}</p>
<p>Année : {{$request->annee}}</p>
<p>Réalisateur : {{$request->auteur}}</p>
<p>Genre : {{$request->categorie}}</p>
@if(isset($request['annonce']))
            <iframe src='{{ $request ['annonce'] }}'/>
        @endif
<p>Bande-annonce : {{$request->annonce}}</p>

<a href="{{route('films.show')}}">Mes Films</a>


@endsection