@extends('layouts.layout')


@section('events')
<section class="pb-3">

    <div class="head-section">
        <h2>Liste des utilisateurs</h2>
    </div>


    <div class="row pt-2 pb-5">

        <div class="col-lg-12 mx-auto">
            
            @if($comptUsers > 0)

            <div class="table-responsive shadow">

                <table class="table table-striped custom-table pb-20">

                    <thead class="bx-shodow-black">
                        <tr>
                            <th scope="col">#ID</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prénom</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Téléphone</th>
                            <th scope="col">qualité</th>
                            <th scope="col">Date inscrit</th>
                            <th scope="col">Statut</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>

                    <tbody>                        

                    @foreach($listUsers as $key => $users)
                        @php

                        $us_id          = $users->id;
                        $us_login       = $users->login;
                        $us_nom         = $users->nom;
                        $us_prenom      = $users->prenom;
                        $us_email       = $users->email;
                        $us_telephone   = $users->telephone;
                        $us_etat        = $users->etat;
                        $us_statut      = $users->statut;
                        $us_qualite     = $users->qualite;
                        $us_datEdite    = Date::create($users->datEdite)->format('d/m/Y');
                        $us_dateMaj     = $users->dateMaj;

                        @endphp

                        <tr scope="row" class="tr_colored">
                            <td class="text-bolder text-center">
                                <div class="user-info__img">
                                    <img src="logos/infos_membre.png" alt="" class="img-fluid d-none d-lg-block">
                                    <small class="d-block idTd">{{$us_id}}</small>
                                </div>
                            </td>

                            <td class="text-bolder text-center">{{$us_nom}}</td>
                            <td class="text-bolder text-center">{{$us_prenom}}</td>
                            <td class="text-bolder text-center">{{$us_email}}</td>
                            <td class="text-bolder text-center">{{$us_telephone}}</td>
                            <td class="text-bolder text-center">{{$us_qualite}}</td>
                            <td class="text-bolder text-center">{{$us_datEdite}}</td>
                            <td class="text-bolder text-center">{{$us_statut}}</td>


                            <td class="tdAction text-center">

                                @if (auth()->check() && Auth::user()->qualite == 'ADMIN')
                                <a href="{{route('R_profil', [$us_id, hash('sha256', $us_nom)])}}" class="">
                                    <span class="d-none d-md-inline"> Détails</span> <i class="fas fa-edit fa-lg ml-7"></i>
                                </a>
                                @else 
                                <a class="scrollto text-secondary">
                                    <span class="d-none d-md-inline"> Détails</span> <i class="fas fa-edit fa-lg ml-7"></i>
                                </a>

                                @endif


                            </td>
                        </tr>


                    @endforeach


                    </tbody>

                    <tfoot>
                        <tr scop="row">
                            @for($ftd = 1; $ftd < 10; $ftd ++)
                                <td>...</td>
                            @endfor
                        </tr>
                    </tfoot>

                </table>


            @else

                <li class="list-group-item m-2">
              
                    <div class="media align-items-lg-center d-flex flex-column flex-lg-row">

                        <img src="{{asset('logos/formulaire.gif')}}" alt="img" width="250" height="200" class="order-1 order-lg-1">

                        <div class="media-body order-2 order-lg-2 ml-lg-5 w-100">

                            <span class="product_price price-new text-danger">
                                La liste des utilisateus est vide
                            </span>
                            <h5 class="mt-0 mb-1 fw-bold text-danger">
                                Vous pouvez ajouter ou inscrire un utilisateur
                            </h5>
                            
                            <hr class="mb-2 mt-1 seperator">
                        
                            <div class="d-flex align-items-center justify-content-between mt-1">
                     
                                <div class="my-5 text-center">

                                    @if (auth()->check() && Auth::user()->qualite == 'ADMIN') 

                                    <a href="{{route('R_addEvent')}}" class="btn btn-primary btn-md w-auto my-2 mx-3 evt-btn">
                                        <i class="fas fa-user-plus fa-lg mr-0 text-white evt-btn-icon"></i>
                                        <span class="d-none d-md-inline">Ajouter un utilisateur</span>
                                    </a>

                                    @else

                                    <button class="btn btn-secondary btn-md w-auto my-2 mx-3 evt-btn">
                                        <i class="fas fa-user-plus fa-lg mr-0 text-white evt-btn-icon"></i>
                                        <span class="d-none d-md-inline">Ajouter un utilisateur</span>
                                    </button>


                                    @endif

                                </div>

                            </div>

                        </div>
                    
                    </div>

                </li>
    


            @endif

            </div>
         
        </div>


        <hr class="style14 mt-4">

        <div class="my-5 text-center">

            @if (auth()->check() && Auth::user()->qualite == 'ADMIN') 

                <a href="{{route('R_addUser')}}" class="btn btn-primary btn-md w-auto my-2 mx-3 evt-btn">
                    <i class="fas fa-user-plus fa-lg mr-0 text-white evt-btn-icon"></i>
                    <span class="d-none d-md-inline">Ajouter un utilisateur</span>
                </a>

                @else

                <button class="btn btn-secondary btn-md w-auto my-2 mx-3">
                    <i class="fas fa-user-plus fa-lg mr-0 text-white evt-btn-icon"></i>
                    <span class="d-none d-md-inline">Ajouter un utilisateur</span>
                </button>


            @endif

        </div>

    </div>


</section>








<hr class="style14 mt-4">

<div class="row my-4 d-none">

    <div class="col-lg-12 mx-auto">

        <p class="text-center fw-bold">Aide sur l'utilisation de la page</p>

        <ol>
            <li class="fw-bold">Paragraphe de listes des événements</li>
            <div class="doc-example my-4">
                <div class="doc-example-content" data-label="Terminal/Command">
                    <div class="doc-clipboard">
                        <button type="button" class="btn-clipboard" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard">
                        Copy
                        </button>
                    </div>
                    <pre class="docs-code">
                        <code class="properties">composer install</code>
                    </pre>
                </div>
            </div>

            <li class="fw-bold">
                Find <code>.env.example</code>
                file at root folder and rename it to <code>.env</code> by running below command Or also can manually rename it:
            </li>

            <p class="mt-3"><strong>For Windows:</strong></p>

            <div class="doc-example my-4">
                <div class="doc-example-content" data-label="Terminal/Command">
                    <div class="doc-clipboard">
                        <button type="button" class="btn-clipboard" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard">
                            Copy
                        </button>
                    </div>
                    <pre class="docs-code">
                        <code class="properties">ren .env.example .env</code>
                    </pre>
                </div>
            </div>


            <li class="fw-bold">
                Mise en place de la fonction <code>QR code</code>
                réservée à l'identification des <code>utilisateurs</code> connectés:
            </li>

            <div class="doc-example my-4">
                <div class="doc-example-content" data-label="Fonction/QR code">
                    <div class="doc-clipboard">
                        <button type="button" class="btn-clipboard" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard">
                            Copy
                        </button>
                    </div>
                    <pre class="docs-code">
                        
                    </pre>
                </div>
            </div>

        </ol>

    </div>

</div>


@endsection


