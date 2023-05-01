<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
    
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Services digitaux et application, formation en développement digital ">
        <meta name="keywords" content="Formation, Le bocal academy, LE BOCAL, pôle-emploi, Marseille, Débutant, DEV, WEB, W3, Développeur WEB, Tools webmaster">
        <meta name="author" content="ABOUDOU ASSOUMANI">

        @yield('titlePage')
        
        <link rel="icon" type="image/png" sizes="256x256" href="logos/members.png">

        @vite('resources/css/app.css')


    </head>

    <body>


        @include('layouts.headers.header')


        <main>

            
            @yield('domainExo')

            @yield('indexContent')

            @yield('content')

            @yield('margeContent')


        </main>



        @include('layouts.footers.footer')
        @include('layouts.footers.scripts')


        <!-- @yield('contentFooter')
        @yield('scriptsFooter') -->

    </body>

</html>