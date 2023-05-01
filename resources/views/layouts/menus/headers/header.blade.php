<!-- ======= Header ======= -->
<header id="header" class="header d-flex">

    <div class="container-fluid d-flex align-items-center justify-content-between">

        <a href="{{route('page.index')}}" class="logo d-flex align-items-center">
            <img src="logos/reunion.png" alt="LOGO" class="img-fluid">
            <span>My Event</span>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="{{route('page.index')}}">Accueil</a></li>
                <li>
                    <a class="nav-link scrollto" href="{{route('R_events')}}">Evénements</a>
                </li>

                <li>
                    <a class="nav-link scrollto" href="#services">Equipes</a>
                </li>
                
                <li class="dropdown">
                    <a href="#">
                        <span>Services</span> <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul>
                        <li>
                            <a class="scrollto oppen-modals" href="{{route('R_inscription')}}">Inscription</a>
                        </li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li>


                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

                <li>
                    <a class="getstarted scrollto d-none" href="{{route('R_deconnexion')}}">Déconnexion</a>
                </li>


                <li>
                    <a class="getstarted scrollto oppen-modals" href="{{route('R_connexion')}}">Connexion</a>
                </li>
                    
                    

            </ul>

            <i class="bi bi-list mobile-nav-toggle"></i>

        </nav><!-- .navbar -->

    </div>



</header><!-- End Header -->