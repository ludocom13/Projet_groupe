@extends('layouts.layout')

@section('content')

<div class="rounded bg-white mt-5 mb-5">

    <div class="row">

        @php    
        
        $us_id          = $onDetails->id;
        $us_login       = $onDetails->login;    
        $us_nom         = $onDetails->nom;
        $us_prenom      = $onDetails->prenom;
        $us_email       = $onDetails->email;
        $us_telephone   = $onDetails->telephone;
        $us_etat        = $onDetails->etat;
        $us_statut      = $onDetails->statut;
        $us_qualite     = $onDetails->qualite;

        $us_datEdite    = $onDetails->datEdite;
        $us_datInscript = Date::create($us_datEdite)->format('d/m/Y');

        $us_dateMaj     = $onDetails->dateMaj;
            
            

        @endphp


        <div class="col-md-4 p-0 pb-3 me-0 border-right">

            <div class="doc-example">

                <div class="doc-example-content" data-label="Identifiant/QR code">

                    <div class="d-flex flex-column align-items-center text-center py-5">
                        <img class="rounded-circle mt-5" width="150px" src="{{asset('logos/actualise_membre.png')}}">

                        <span class="fw-bold">{{$us_nom}}</span>
                        <span class="text-black-50">{{$us_qualite}}</span>
                        <span></span>


                    </div>

                    <!-- Récupération et affichage QR-Code -->
                    <div class="pt-1 pb-5">

                        <div class="card  p-4">

                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <div class="text-center">
                                    {{$Qr_user}}
                                </div>
                                <span class="name mt-3">{{$us_nom.' '.$us_prenom}}</span>
                                <span class="idd">{{$us_login}}</span>

                                <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                                    <span class="idd1">Oxc4c16a645_b21a</span>
                                    <span><i class="fa fa-copy"></i></span>
                                </div>
                                <div class="d-flex flex-row justify-content-center align-items-center mt-3">
                                    <span class="number">1069
                                        <span class="follow">Followers</span>
                                    </span>
                                </div>
                                <div class=" d-flex mt-2">
                                    <button class="btn1 btn-dark">
                                        Modifier le bagde
                                    </button>
                                </div>
                                <div class="text mt-3">

                                    <span>
                                        Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.
                                        <br><br>
                                        Artist/ Creative Director by Day #NFT minting@ with FND night.
                                    </span>
                                </div>

                                <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin"></i></a>
                                </div>
                                <div class=" px-2 rounded mt-4 date ">
                                    <span class="join">Inscrit le, {{$us_datInscript}}</span>
                                </div>
                            </div>
                        </div>

                    
                    </div>

                </div>


            </div><!-- // bagde d'utilisateur -->


        </div>


        <div class="col-md-5 p-0 pb-3 me-0   border-right">

            <div class="doc-example">

                <div class="doc-example-content" data-label="Informations personnelles">
                

                    <div class="row mt-2">

                        <div class="col-md-6">
                            <label class="labels">Nom</label>
                            <input type="text" class="form-control" placeholder="Nom" value="{{$us_nom}}" readonly>
                        </div>

                        <div class="col-md-6">
                            <label class="labels">Prénom</label>
                            <input type="text" class="form-control" placeholder="Prénom" value="{{$us_prenom}}" readonly>
                        </div>

                    </div>

                    <div class="row mt-3">

                        <div class="col-md-12">
                            <label class="labels">Adresse e-mail</label>
                            <input type="text" class="form-control" placeholder="Adresse e-mail" value="{{$us_email}}" readonly>
                        </div>

                        <div class="col-md-12 mt-2">
                            <label class="labels">N° Téléphone</label>
                            <input type="text" class="form-control" placeholder="N° Téléphone" value="{{$us_telephone}}" readonly>
                        </div>

                        <div class="col-md-12 mt-2">
                            <label class="labels">Adresse</label>
                            <input type="text" class="form-control" placeholder="Adresse" value="">
                        </div>

                        <div class="col-md-12 mt-2">
                            <label class="labels">Complément d'adresse</label>
                            <input type="text" class="form-control" placeholder="Complément d'adresse" value="">
                        </div>

                        <div class="col-md-12 mt-2">
                            <label class="labels">Code postal</label>
                            <input type="text" class="form-control" placeholder="Code postal" maxlength="5" value="">
                        </div>

                        <div class="col-md-12 mt-2">
                            <label class="labels">Commune</label>
                            <input type="text" class="form-control" placeholder="Commune" maxlength="30" value="">
                        </div>

                        <div class="col-md-12 mt-2">
                            <label class="labels">Pays</label>
                            <input type="text" class="form-control" placeholder="Pays" value="">
                        </div>

                    </div>


                    <div class="my-5 text-center">
                        <button class="btn btn-primary profile-button" type="button">Enregistrer</button>
                    </div>
                

                </div>

            </div>

        </div>


        <div class="col-md-3 pb-3 ">

            <div class="doc-example">

                <div class="doc-example-content" data-label="Infos professionnelles">

                    <div class="d-flex justify-content-between align-items-center experience">
                        <span>Information professionnelles</span>

                        <button class="btn btn-primary px-3 p-1 profile-button add-experience">
                            <i class="fa fa-plus me-1"></i>Experience
                        </button>
                    </div>

                    <div class="col-md-12 mt-2">
                        <label class="labels">Une expérience</label>
                        <input type="text" class="form-control" placeholder="experience" value="">
                    </div>

                    <div class="col-md-12 mt-2">
                        <label class="labels">Détails</label>
                        <input type="text" class="form-control" placeholder="additional details" value="">
                    </div>

                </div>

            </div>            

        </div>

    </div>
</div>









<div class="card">

    <div class="d-flex pb-3">
        <p class="text-muted">Statut et fonctionnement du compte:</p>
        <p class="ps-1">{{$us_statut}}</p>
    </div>

    <div class="progress mb-2">

        <div class="progress-bar p-green mx1" role="progressbar" style="width: 50%" aria-valuenow="20"
            aria-valuemin="0" aria-valuemax="100">
        </div>

        <div class="icon1 d-flex align-items-center justify-content-center">
            <span class="far fa-star "></span>
        </div>

        <div class="icon2 d-flex align-items-center justify-content-center">
            <span class="fas fa-check "></span>
        </div>

    </div>

</div>


<div class="boxes">

    <p class="h-dash">Activités</p>

    <div class="row rows mx-0 mt-2">

        <div class="col-md-4 p-0 border-end">
            <div class="viewbox">
                <p class="blue">11</p>
                <p>Groupe et personnage</p>
            </div>

        </div>

        <div class="col-md-4 p-0 border-end">
            <div class="viewbox">
                <p class="blue">0</p>
                <p>Articles et projets</p>
            </div>
        </div>

        <div class="col-md-4 p-0">
            <div class="viewbox">
                <p class="blue">1</p>
                <p>Gestion des projets</p>
            </div>
        </div>

    </div>

    <div>
        <div class="box2 mt-3">
            <div class="d-flex mt-2 ">
                <span class="fas fa-users-cog mt-1"></span>
                <div class="w-100 border-bottom">
                    <p class="">Manage my network</p>
                    <p class="textmuted mb-2">Access and Manage your connection events and interests all in once
                        place</p>
                </div>
            </div>
            <div class="d-flex mt-2">
                <span class="fas fa-money-bill-alt mt-1"></span>
                <div class="w-100 border-bottom">
                    <p class="">Salary insights</p>
                    <p class="textmuted mb-2">See how your Salary compares to others in the communtiy</p>
                </div>
            </div>
            <div class="d-flex mt-2">
                <span class="fas fa-bookmark ms-0 mt-1"></span>
                <div class="w-100 ps-2">
                    <p class="">My items</p>
                    <p class="textmuted mb-2">keep track of your jobs courses and article</p>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="row mt-4">

    <div class="doc-example">

        <div class="doc-example-content pt-4 px-1" data-label="Autorisations/Accès">

            <div class="table-verticale mb-2">

                <div class="thead-vertical">

                    <ul>
                        
                        <li>
                            <i class="fas fa-fingerprint fa-lg"></i></i>Identifiant
                        </li>

                        <li class="d-flex align-items-center">
                            <i class="fas fa-edit fa-lg"></i></i>
                            <label class="d-flex align-items-center" for="auto-edition">
                                <span class="pe-3 me-auto">Edition</span>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="auto-edition">
                                </div>
                            </label>
                        </li>

                        <li><i class="fas fa-cogs fa-lg"></i></i>Spécialités </li>

                        <li><i class="fas fa-magic fa-lg"></i></i>
                            <span class="d-none d-md-inline"> Niveau de magie </span>
                            <span class="d-md-none" >Magie</span>
                        </li>

                        <li><i class="fas fa-skiing fa-lg"></i></i>Force </li>
                        <li><i class="fas fa-snowboarding fa-lg"></i>Agilités </li>

                        <li><i class="fas fa-medal fa-lg"></i></i>
                            <span class="d-none d-md-inline"> Intélligence </span>
                            <span class="d-md-none" >Intel.</span> 
                        </li>

                        <li><i class="fas fa-sort-amount-up fa-lg"></i>
                            <span class="d-none d-md-inline"> Points de vie </span>
                            <span class="d-md-none" >PV</span>
                        </li>


                        <li><i class="fas fa-user-cog fa-lg"></i></i>Utilisateur </li>
                        <li><i class="fas fa-receipt fa-lg"></i></i>Description </li>
                        
                        <li><i class="fas fa-calendar-check fa-lg"></i></i>
                            <span class="d-none d-md-inline"> Date de création </span>
                            <span class="d-md-none" >Créé le</span>
                        </li>
                        
                        <li><i class="fas fa-sync fa-spin fa-lg"></i></i>Statut </li>
                        
                        <li><i class="fas fa-calendar-alt fa-lg"></i></i>
                            <span class="d-none d-md-inline"> Dernière utilisation </span>
                            <span class="d-md-none" >Mis à jour</span>
                        </li>

                    </ul>
                    
                </div>

                <div class="tbody-vertical">

                    <div class="tbody-content">

                        <ul class="overflow-x-auto">                            
                            <li>{{$us_login}}</li>

                            <li class="d-flex align-items-center ov">
                                <label class="">
                                    <span class="pe-3">Autorisation sur les éditions des profil</span>
                                </label>
                            </li>

                            <li>ieieie</li>
                            <li>ieieie</li>
                            <li>ieieie</li>
                            <li>ieieie</li>
                            <li>ieieie</li>
                            <li>ieieie</li>
                            <li>ieieie</li>
                            <li>ieieie</li>
                            <li>ieieie</li>
                            <li>ieieie</li>
                            <li>ieieie</li>
                        </ul>

                    </div>
                    
                </div>
                
            </div>

        </div>

    </div>
    
</div>




@endsection
