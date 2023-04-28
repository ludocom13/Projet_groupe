@extends('layouts.app')


@section('title')
<h1>Inscription</h1> 
@endsection

@section('content')
<form action="{{route('store')}}" method="post" name="sign">
@csrf
<label for="nom" id="nom">NOM</label><br>
<input type="text" name="nom"/><br>
<label for="prenom" id="prenom">Prenom</label><br>
<input type="text" name="prenom"/><br>
<label for="email" id="email">email</label><br>
<input type="email" name="email"/><br>
<label for="mot_de_passe" id="mot_de_passe">Mot de passe</label><br>
<input type="password" name="mot_de_passe"/><br>
<label for="fonction" id="fonction">fonction</label><br>
<select  name="fonction">
    <option>admin</option>
    <option>staff</option>
    <option>client</option>

</select><br>
<input type="submit" value="valider" name="submit_sign"/>

</form>
@if ($errors->any())
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        @endif


<a href="{{route('acceuil')}}">Mes Films</a>


        
@endsection
