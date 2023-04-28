@extends('layouts.app')

@section("title")
<h1>AVENTURE</h1>
@endsection

@section("content")
<?php
$Aventure=["Interstellar ","Star wars","inception","Retour vers le futur","Matrix","Alien","Avatar","Wall E"];
foreach ($Aventure as $key => $value) {
   echo "<li>".$value ;
}
?>
@endsection