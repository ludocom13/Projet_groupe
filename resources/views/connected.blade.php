@extends('layouts.app')

@section('title')
<h1>Vous êtes connecté</h1>
@endsection
@section('content')

<p>EMAIL : {{$request->email}}</p>

<a href="{{route('acceuil')}}">Acceuil</a>

@endsection