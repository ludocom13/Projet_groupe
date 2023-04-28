@extends('layouts.app')


@section("title")
<h1 id="titre">FREEFLIX</h1>
@endsection


@section("content")
<h2>Á l'affiche</h2>
<div>
    <img src="https://mir-s3-cdn-cf.behance.net/project_modules/1400/61da8438155793.57575971afe13.jpg" alt="error!"/> 
    <img src="https://mir-s3-cdn-cf.behance.net/project_modules/1400/868e2d38155793.57575971b116a.jpg" alt="error!"/> 
    <img src="https://mir-s3-cdn-cf.behance.net/project_modules/1400/e2918138155793.57575971b0453.jpg" alt="error!"/> 
    <img src="https://mir-s3-cdn-cf.behance.net/project_modules/1400/8b46db38155793.57575971b16df.jpg" alt="error!"/> 
    <img src="https://mir-s3-cdn-cf.behance.net/project_modules/1400/45f68d38155793.57575971b0983.jpg" alt="error!"/> 
    <img src="https://mir-s3-cdn-cf.behance.net/project_modules/1400/eadee997221175.5ec00e9150a29.png" alt="error!"/> 
</div>
<div class="para">
    <p><a href="{{route('science_fiction')}}">Science-Fiction</a></p>
    <p><a href="{{route('action')}}">Action</a></p>
    <p><a href="{{route('aventure')}}">Aventure</a></p>
    <p><a href="{{route('epouvante')}}">Epouvante</a></p>
    <p><a href="{{route('animation')}}">Animation</a></p>
    <p><a href="{{route('thriller')}}">Thriller</a></p>
    <p><a href="{{route('comedie')}}">Comédie</a></p>
</div>

@endsection