<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{route('create')}}" style="color: bisque;">Inscription</a></li>
                <li><a href="{{route('login')}}"style="color: bisque;">Connexion</a></li>
                <li><a href="{{route('acceuil')}}"style="color: bisque;">Acceuil</a></li>
                <li><a href="{{route('show')}}"style="color: bisque;">Profil</a></li>
                <li><a href="{{route('films.create')}}"style="color: bisque;">Films</a></li>
                <li><a href="{{route('vues')}}"style="color: bisque;">Les plus vues</a></li>

            </ul>
            <form>
                <label for="rechercher" id="rechercher" style="color:white">Recherche</label><br>
                <input type="text"  name="rechercher" style="background-color:white" />
            </form>
        </nav>
    </header>
   
    <h1> @yield("title")</h1>

    @yield("content")
    
    
</body>
</html>