@extends('layouts')

@section('contenu')

<h2>Tu es ?</h2>
<form action="{{route('connexion')}}" method="post">
   
  @csrf
   
    <input type="password" placeholder="mot de passe" name="mot_de_passe">

     
    @if($errors->has('mot_de_passe'))
    <p>{{ $errors->first ('mot_de_passe') }}</p>
    @endif
    
 
    <input type="text" placeholder="email" name="email">

    @if($errors->has('email'))
    <p>{{ $errors->first ('email') }}</p>
    @endif
   
    <input type="submit" value="se connecter" name="validez">

</form>

<img id="img0" src="https://gardiennageparis.fr/wp-content/uploads/2021/03/1-e1617112301138-973x1024.png" height="260" >

@endsection