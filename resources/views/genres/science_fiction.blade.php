@extends('layouts.app')

@section("title")
<h1>SCIENCE-FICTION</h1>
@endsection

@section("content")
<?php
$Sciencefiction=["Interstellar ","Star wars","inception","Retour vers le futur","Matrix","Alien","Avatar","Wall E"];
foreach ($Sciencefiction as $key => $value) {
   echo "<li>".$value ;
}
?>
@endsection