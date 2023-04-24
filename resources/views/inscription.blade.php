@extends('layouts')

@section('contenu')
<h2>Pret a devenir cinéphile ? </h2>

<form action="{{route('inscription')}}" method="post">
   
  @csrf
   
    <input type="text" placeholder="Prenom" name="prenom">

    @if($errors->has('prenom'))
    <p>{{ $errors->first ('prenom') }}</p>
    @endif

    <input type="text" placeholder="Nom" name="nom">

    @if($errors->has('nom'))
    <p>{{ $errors->first ('nom') }}</p>
    @endif

    <input type="text" placeholder="email" name="email" value="{{ old('email') }}">

    @if($errors->has('email'))
    <p>{{ $errors->first ('email') }}</p>
    @endif

    <input type="text" placeholder="Nom d'utilisateurs" name="pseudo">

    @if($errors->has('pseudo'))
    <p>{{ $errors->first ('pseudo') }}</p>
    @endif
    <input type="text" placeholder="mot de passe " name="mot_de_passe">

    @if($errors->has('mot_de_passe'))
    <p>{{ $errors->first ('mot_de_passe') }}</p>
    @endif
    

    <input type="submit" value="s'inscrire" name="validez">

</form>



@endsection