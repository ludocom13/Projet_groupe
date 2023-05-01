@extends('layouts.layout')

@php
    
    $routCurrent        = Route::getCurrentRoute()->uri();

    if($routCurrent     == "/index") {$domaine = "ACCUEIL";}
    else {
        $domaine        = strtoupper( str_replace("_",
                            " ", substr(strrchr( $routCurrent, "/"), 1) ) );
    }


    // Construction d'une fonction qui retourne un tableau (Array) des sous repértoirs ($dir)
    function getSubDir($dir)
    {
        $subDir = array();
        // Récupère at ajoute des sous repértoirs de $dir
        $directories = array_filter(glob($dir), 'is_dir');
        $subDir = array_merge($subDir, $directories);
        // Boucle des sous repértoirs, recursivement récupère et ajoute des sous repértoirs
        foreach ($directories as $directory) $subDir = array_merge($subDir, getSubDir($directory.'/*'));
        // Retourne une liste des sous repértoirs
        return $subDir;

    } // FIN DE LA FONCTION DE RECUPERATION DES SOUS REPERTOIRES

    $rep_atelier        = "layouts/contents/ateliers";


    $dos_ateliers       = getSubDir($rep_atelier);
    $count_ateliers     = count($dos_ateliers);
    $sous_ateliers      = Array();
    
    foreach ($dos_ateliers as $key => $dossier) {
        array_push($sous_ateliers, $dossier );
    }
    

@endphp


@section('titlePage')
    <title>WORKGROUP | {{$domaine}}</title>
@endsection



{{--
@section('articles')
    @include('layouts.contents.currentContent')
@endsection




@section('groupes')
    @include('layouts.contents.groupe')
@endsection


--}}

