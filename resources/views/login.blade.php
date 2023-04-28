@extends('layouts.app')


@section('title')
<h1>CONNEXION</h1>
@endsection

@section('content')
<form action="{{route('login.connected')}}" method="post">
    @csrf
    <label for="email" id="email">Email</label>
    <input type="email" name="email"/>
    <label for="mot_de_passe" id="mot_de_passe">Mot de passe</label>
    <input type="password" name="mot_de_passe" />
    <input type="submit" value="valider" />
</form>
@if ($errors->any())
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        @endif

@endsection