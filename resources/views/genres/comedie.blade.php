@extends('layouts.app')

@section("title")
<h1>COMEDIE</h1>
@endsection

@section("content")
<?php
$Comedie=["Step Brothers","Star wars","inception","Retour vers le futur","Matrix","Alien","Avatar","Wall E"];
foreach ($Comedie as $key => $value) {
   echo "<li>".$value ;
}
?>
@endsection