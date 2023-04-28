@extends('layouts.app')

@section("title")
<h1>Films</h1>
@endsection

@section("content")
<h2>{{$request->titre}}</h2>


<p>Année : {{$request->annee}}</p>
<p>Réalisateur : {{$request->auteur}}</p>
<p>Genre : {{$request->categorie}}</p>
@if(isset($request['annonce']))
            <iframe src='{{ $request ['annonce'] }}'/>
        @endif
<p>Bande-annonce : {{$request->annonce}}</p>

<a href="{{route('acceuil')}}">Mes Films</a>

@endsection