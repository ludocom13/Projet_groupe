@extends('layouts.app')

@section("title")
<h1>ACTION</h1>
@endsection

@section("content")
<?php
$Action=["The Dark Knight, Le Chevalier Noir <br><iframe width=500 height=200 src=https://www.youtube.com/embed/wrcaivEjWCo title=The Dark Knight, Le Chevalier Noir bande- annonce vf frameborder=0 allow=accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share allowfullscreen></iframe> ",
    "Gladiator<br><iframe width=500 height=200 src=https://www.youtube.com/embed/Nz5CnNHnpO8 title= GLADIATOR frameborder=0 allow=accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share allowfullscreen></iframe>",
    "Une journée en enfer<br><iframe width=500 height=200 src=https://www.youtube.com/embed/K2AruxS8-Rs title=Bande annonce Die Hard 3 frameborder=0 allow=accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share allowfullscreen></iframe>",
    "Joker<br><iframe width=500 height=200 src=https://www.youtube.com/embed/JDOiiACM4Lw title=Scène de danse des escaliers| Joker [UltraHD, HDR] frameborder=0 allow=accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share allowfullscreen></iframe>",
    "Vantage Point<br><iframe width=500 height=200 src= https://www.youtube.com/embed/bR1kMk4Vdrc title=Angles d'attaque frameborder=0 allow=accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share allowfullscreen></iframe>",
    "Kill Bill<br><iframe width=500 height=200 src=https://www.youtube.com/embed/WtRpzlIaM6A title=Kill Bill frameborder=0 allow=accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share allowfullscreen></iframe>",
    "American Sniper<br><iframe width=500 height=200 src=https://www.youtube.com/embed/biaNCv--D4s title=American Sniper  frameborder=0 allow=accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share allowfullscreen></iframe>",
    "Top Gun Maverick<br><iframe width=500 height=200 src=https://www.youtube.com/embed/au78BbrHqak title=TOP GUN 2 MAVERICK frameborder=0 allow=accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share allowfullscreen></iframe>",
    "Fast and Furious",
    "Terminator",
    "The legend of Zorro"];
foreach ($Action as $key => $value) {
   echo "<ul class=action style=display:inline-block>
         <li>.$value 
         </ul>" ;
}
?>
@endsection
