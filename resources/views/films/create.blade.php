@extends('layouts.app')


@section('title')
<h1>Films:</h1>
@endsection

@section("content")

<form action="{{route('films.store')}}" method="post" id="movies">
    @csrf
    <label for="titre" id="titre">Titre</label><br>
    <input name="titre" type="text"><br>
    <label for="annee" id="annee">Année</label><br>
    <input name="annee" type="date"><br>
    <label for="auteur" id="auteur">Realisateur</label><br>
    <input name="auteur" type="text"><br>
    <label for="categorie" id="categorie">Categorie</label><br>
    <select name="categorie"><br>
    <option>action</option>
    <option>aventure</option>
    <option>epouvante</option>
    <option>science_fiction</option>
    <option>thriller</option>
    <option>comedie</option>
    <option>animation</option>
    </select><br>
    <label for="annonce" id="annonce">Bande-annonce</label><br>
    <input type="text" name="annonce">
    <input type="submit" value="valider" name="submit_film">
</form>
@if ($errors->any())
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        @endif
<br>
<br>
<a href="{{route('action')}}">ACTION</a><br>
<a href="{{route('aventure')}}">AVENTURE</a><br>
<a href="{{route('science_fiction')}}">SCIENCE-FICTION</a><br>
<a href="{{route('epouvante')}}">EPOUVANTE</a><br>
<a href="{{route('comedie')}}">COMEDIE</a><br>
<a href="{{route('thriller')}}">THRILLER</a><br>
<a href="{{route('animation')}}">ANIMATION</a>

<ul style="display:block;text-align:center;background-color:bisque;">
<?php
foreach ($films as $key => $film) {?>
   <li style="color:black"><?php echo $film["titre"] ?></li><br>
   <li style="color:black"><?php echo $film["annee"] ?></li><br>
   <li style="color:black"><?php echo $film["auteur"] ?></li><br>
   <li style="color:black"><?php echo $film["categorie"] ?></li><br>
   <li style="color:black"><iframe src=<?php echo $film["annonce"] ?>></iframe></li>
  
<?php 
} ?>
</ul>
@endsection