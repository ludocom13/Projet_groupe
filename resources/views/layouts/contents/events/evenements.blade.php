@extends('layouts.layout')


@section('events')
<section class="pb-3">

    <div class="head-section">
        <h2>Liste des événements</h2>
    </div>


    <div class="row pt-2 pb-5">

        <div class="col-lg-12 mx-auto">

            <ul class="list-group shadow">

            @if($comptEvent > 0)

                @foreach($allEvents as $key => $events)
                    @php

                    $evt_id         = $events->id;
                    $evt_titre      = $events->titre;
                    $evt_lieu       = $events->lieu;
                    $evt_desc       = $events->description;
                    $evt_date       = Date::create($events->date)->format('d/m/Y');
                    $evt_heure      = Date::create($events->date)->format('H:i');
                    $evt_comment    = $events->comments;
                    $evt_notes      = $events->notes;
                    $evt_parts      = $events->participants;
                    $evt_public     = $events->public;
                    $evt_click      = $events->click;
                    $evt_statut     = $events->statut;
                    $evt_datEdit    = Date::create($events->datEdite)->format('d/m/Y');
                    $evt_dateMaj    = Date::create($events->dateMaj)->format('d/m/Y H:i');
                    $evt_agent      = $events->agent;
                    $evt_link       = $events->link_img;


                    $evt_etoile     = round(($evt_parts * 5) / 1000);

                    @endphp

                <li class="list-group-item m-2">
              
                    <div class="media align-items-lg-center d-flex flex-column flex-lg-row">

                        <img src="{{asset('logos/icon_rendez-vous.png')}}" alt="img" width="250" height="200" class="order-1 order-lg-1 d-none">

                        <iframe  class="embed-responsive-item w-auto" height="215" src="{{$evt_link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>                            
                        

                        <div class="media-body order-2 order-lg-2 ml-lg-5 w-100">

                            <h5 class="mt-0 mb-1 fw-bold">
                                {{$evt_titre}}
                            </h5>

                            <div class="product-rating mb-2">
                                <span class="badge23">
                                    <i class="fa fa-star me-1"></i>
                                    {{$evt_etoile}} étoiles
                                </span>
                                <span class="rating-review mb-1">
                                    {{$evt_notes}} notes &amp; {{$evt_comment}} Commentaires
                                </span>
                            </div>

                            <span class="product_price price-new">
                                {{$evt_date}} à {{$evt_heure}} | {{$evt_lieu}}
                            </span>
                            
                            <hr class="mb-2 mt-1 seperator">
                        
                            <div class="d-flex align-items-center justify-content-between mt-1">
                     
                                <ul class="list-inline small me-2">
                                  <li><img src="https://img.icons8.com/material-outlined/10/000000/filled-circle--v1.png"> 8th Gen Intel Core i5-8250U processor</li>
                                  <li><img src="https://img.icons8.com/material-outlined/10/000000/filled-circle--v1.png"> 15.5 Inch | Antiglare Display</li>
                                  <li><img src="https://img.icons8.com/material-outlined/10/000000/filled-circle--v1.png"> 4GB RAM with Radeon 530 2GB Graphics</li>
                                </ul>

                                <ul class="list-inline small me-2">
                                  <li><img src="https://img.icons8.com/material-outlined/10/000000/filled-circle--v1.png"> EMI Starts at 1726. No cost EMI available</li>
                                  <li><img src="https://img.icons8.com/material-outlined/10/000000/filled-circle--v1.png"> Warranty: 6 Months Warranty</li>
                                  <li><img src="https://img.icons8.com/material-outlined/10/000000/filled-circle--v1.png"> In Stock: 24 units sold this week</li>
                                  
                                </ul>

                                <ul class="list-inline small me-2">
                                  <li><img src="https://img.icons8.com/material-outlined/10/000000/filled-circle--v1.png"> EMI Starts at 1726. No cost EMI available</li>
                                  <li><img src="https://img.icons8.com/material-outlined/10/000000/filled-circle--v1.png"> Warranty: 6 Months Warranty</li>
                                  <li><img src="https://img.icons8.com/material-outlined/10/000000/filled-circle--v1.png"> In Stock: 24 units sold this week</li>
                                  
                                </ul>

                                

                            </div>

                            <div class="d-flex my-2">

                                <a href="" class="btn btn-primary btn-md w-auto my-2 mx-3 evt-btn">
                                    <i class="fas fa-thumbs-up fa-lg mr-0 text-white evt-btn-icon"><small class="ml-2 d-sm-none">20</small class="ml-2 d-sm-none"></i>
                                    <span class="d-none d-md-inline">Liker</span>
                                </a>

                                <a href="" class="btn btn-primary btn-md w-auto my-2 mx-3 evt-btn">
                                    <i class="fas fa-comments fa-lg mr-0 text-white evt-btn-icon"><small class="ml-2 d-sm-none">20</small></i>
                                    <span class="d-none d-md-inline">Commenter</span>
                                </a>

                                <a href="{{route('R_detailEvent', $evt_id)}}" class="btn btn-primary btn-md w-auto my-2 mx-3 evt-btn">
                                    <i class="fas fa-eye fa-lg mr-0 text-white evt-btn-icon"><small class="ml-2 d-sm-none">20</small class="ml-2 d-sm-none"></i>
                                    <span class="d-none d-md-inline">Consulter</span>
                                </a>

                            </div>

                            <form action="" method="POST" class="form-comment d-none">
                                @csrf
                                <div class="input-group mb-3"> 

                                    <input type="text" class="form-control form-control-lg form-control-a @error('evtComment') is-invalid @enderror" id="evtComment" name="evtComment" placeholder="Commentaire">

                                    @error('evtComment')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                
                                    <div class="input-group-append btn-comment">
                                        <button class="btn btn-outline-primary btn-lg " type="submit">Envoyer</button>
                                    </div>

                                </div>

                            </form>

                            

                        </div>
                    
                    </div>

                </li>

                @endforeach


            @else

                <li class="list-group-item m-2">
              
                    <div class="media align-items-lg-center d-flex flex-column flex-lg-row">

                        <img src="{{asset('logos/formulaire.gif')}}" alt="img" width="250" height="200" class="order-1 order-lg-1">

                        <div class="media-body order-2 order-lg-2 ml-lg-5 w-100">

                            <span class="product_price price-new text-danger">
                                Aucun événement dans la liste
                            </span>
                            <h5 class="mt-0 mb-1 fw-bold text-danger">
                                Nom de l'événement
                            </h5>
                            
                            <hr class="mb-2 mt-1 seperator">
                        
                            <div class="d-flex align-items-center justify-content-between mt-1">
                     
                                

                            </div>

                        </div>
                    
                    </div>

                </li>
    


            @endif

            </ul>
         
        </div>


        <hr class="style14 mt-4">

        <div class="my-5 text-center">

            <a href="{{route('R_addEvent')}}" class="btn btn-primary btn-md w-auto my-2 mx-3 evt-btn">
                <i class="fas fa-thumbs-up fa-lg mr-0 text-white evt-btn-icon"></i>
                <span class="d-none d-md-inline">Ajouter un événement</span>
            </a>

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
                Find <code>.env.example</code>
                file at root folder and rename it to <code>.env</code> by running below command Or also can manually rename it:
            </li>

            <p class="mt-3"><strong>Fonction QR code:</strong></p>

            <div class="doc-example my-4">
                <div class="doc-example-content" data-label="Terminal/Command">
                    <div class="doc-clipboard">
                        <button type="button" class="btn-clipboard" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard">
                            Copy
                        </button>
                    </div>
                    <pre class="docs-code">
                        {{-- $qrcodEvent --}}
                    </pre>
                </div>
            </div>

        </ol>

    </div>

</div>







<div id="formConnexion" class="madals-overlay d-none">

    <a href="{{route('page.index')}}">
        <i class="bi bi-x closer-modals"></i>
    </a>

    <span class="titreModal">Créer un événement</span>

    <div class="form-modals">

        <div class="py-3 position-relative">

            <div class="card overflow-hidden z-index-1">

                <div class="card-body p-0">

                    <div class="row g-0 h-100">

                        <div class="col-md-7 d-flex flex-center">

                            <div class="p-4 p-md-5 flex-grow-1">

                                <form action="{{route('R_regEvent')}}" method="POST">

                                    @csrf

                                    <div class="mb-3">
                                        <label class="form-label mb-0" for="evtTitle">Titre d'événement</label>
                                        <input class="form-control form-control-lg form-control-a @error('evtTitle') is-invalid @enderror" type="text" autocomplete="off" id="evtTitle" name="evtTitle" maxlength="150" placeholder="Titre d'événement" value="{{old('evtTitle')}}" />

                                        @error('evtTitle')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>


                                    <div class="row gx-2">

                                        <div class="mb-3 col-sm-6">
                                            <label class="form-label mb-0" for="evtDate">Date d'événement</label>
                                            <input class="form-control form-control-lg form-control-a @error('evtDate') is-invalid @enderror" type="date" autocomplete="off" id="evtDate" name="evtDate" maxlength="150" placeholder="Date d'événement" value="{{old('evtDate')}}" />

                                            @error('evtDate')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>


                                        <div class="mb-3 col-sm-6">
                                            <label class="form-label mb-0" for="evtHeure">Heure</label>
                                            <input class="form-control form-control-lg form-control-a @error('evtHeure') is-invalid @enderror" type="time" autocomplete="off" id="evtHeure" name="evtHeure" maxlength="60" placeholder="Heure" value="{{old('evtHeure')}}" />

                                            @error('evtHeure')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>

                                    </div>


                                    <div class="mb-3">
                                        <label class="form-label mb-0" for="evtLieu">Lieu d'événement</label>
                                        <input class="form-control form-control-lg form-control-a @error('evtLieu') is-invalid @enderror" type="text" autocomplete="off" id="evtLieu" name="evtLieu" maxlength="150" placeholder="Lieu d'événement" value="{{old('evtLieu')}}" />

                                        @error('evtLieu')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>


                                    <div class="mb-3">
                                        <label class="form-label mb-0" for="evtDescript">Description</label>

                                        <textarea class="form-control form-control-lg form-control-a @error('evtDescript') is-invalid @enderror" id="evtDescript" name="evtDescript" placeholder="Description...">{{old('evtDescript')}}</textarea>

                                        @error('evtDescript')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>           



                                    @if ($errors->any())

                                        <div class="alert alert-danger" role="alert">
                                            <h4 class="alert-heading py-0 mb-0">
                                                Attention, <b class="">{{count($errors)}}</b> erreur de saisie !
                                            </h4>
                                            <hr class="mt-0">
                                            <p>
                                                <ul>
                                                    @foreach ($errors->all() as $error)

                                                    <li>{{ $error }}</li>

                                                    @endforeach
                                                </ul> 
                                            </p>

                                            <hr class="style14">
                                            <p class="mt-0 mb-0">
                                                Veuillez corriger les <b class="">{{count($errors)}}</b> erreurs indiquées !
                                            </p>
                                        </div>
                                        
                                    @elseif (isset($successRequest) )

                                        <div class="alert alert-success" role="alert">
                                            <h4 class="alert-heading py-0 mb-0">Félicitations, 1 événement enregistré !</h4>
                                            <hr class="mt-0">
                                            <p>
                                                Votre événement, <b class="text-danger"> {{strtoupper( $successRequest->evtTitle)}}, </b> 
                                                a bien été enregistrée avec succès ! 
                                            </p>
                                            <hr class="style14">
                                            <p class="mt-0 mb-0">
                                                Vous pouvez consulter la liste des événement <a href="{{route('R_events')}}">en cliquant ici</a>
                                            </p>
                                        </div>

                                    @endif


                                    <div class="row g-2 mt-2">
                                        <div class="col-sm-6">
                                            <button class="btn btn-primary d-block w-100" type="submit" name="submit">Enregistrer</button>
                                        </div>

                                        <div class="col-sm-6">
                                            <a class="btn btn-danger d-block w-100" href="{{route('R_events')}}">
                                                Annuler
                                            </a>
                                        </div>

                                    </div>


                                </form>


                                


                            </div>

                        </div>


                        <div class="col-md-5 flex-center d-none d-sm-flex">
                            
                            <img class="bg-auth-circle-shape" src="logos/icon_rendez-vous.png" alt="" width="">
                            

                        </div>


                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
@endsection


