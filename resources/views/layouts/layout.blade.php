<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="description" content="Services digitaux et application, formation en développement digital ">
        <meta name="keywords" content="Formation, Le bocal academy, LE BOCAL, pôle-emploi, Marseille, Débutant, DEV, WEB, W3, Développeur WEB, Tools webmaster">
        <meta name="author" content="ABOUDOU, MANSOUR, LUDOVIC">
        <meta name="csrf-token" content="{{ csrf_token() }}">


        @yield('titlePage')

        <link rel="apple-touch-icon" href="{{asset('logos/members.png')}}">
        <link rel="icon" type="image/png" sizes="256x256" href="{{asset('logos/members.png')}}">

        <link rel="stylesheet" href="{{asset('assets/css/app.css') }}">
        

    </head> 

    <body>

        @include('layouts.menus.headers.header')

        <main id="main" class="py-3">

            <div class="container-fluid">
                <section class="index py-4 my-3 shadow-none"></section>

                @yield('articles')

                @yield('events')
                @yield('content')


                @yield('formulaire')
                
                {{-- @yield('formInscription') --}}
                {{-- @include('layouts.contents.formulaires.addEvent') --}}

                @yield('groupes')


            </div>

        </main>
            

        @include('layouts.menus.footers.footer')
        @include('layouts.menus.footers.scripts')


    </body>
</html>