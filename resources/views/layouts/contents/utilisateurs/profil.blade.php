@extends('layouts.layout')

@section('content')

<div class="container-fluid rounded bg-white mt-5 mb-5">
    <div class="row rows">

        @php    
            
        $us_id          = $onDetails->id;
        $us_nom         = $onDetails->nom;
        $us_prenom      = $onDetails->prenom;
        $us_email       = $onDetails->email;
        $us_telephone   = $onDetails->telephone;
        $us_etat        = $onDetails->etat;
        $us_statut      = $onDetails->statut;
        $us_qualite     = $onDetails->qualite;
        $us_datEdite    = $onDetails->datEdite;
        $us_dateMaj     = $onDetails->dateMaj;
            
            

        @endphp


        <div class="col-md-3 border-right">

            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" src="{{asset('logos/actualise_membre.png')}}">
                <span class="fw-bold">{{$us_nom}}</span>
                <span class="text-black-50">{{$us_qualite}}</span>
                <span></span>
            </div>


            <div class="doc-example my-1">

                <div class="doc-example-content" data-label="Autorisation">

                    <div class="card p-3 mb-2">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <p class="fw-bold">Fonction admin</p>
                                <small class="text-muted">
                                    Peut intervenir en tant qu'admin
                                </small>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="pe-3">NON</p>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="SwitchCheck">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card p-3 mb-2">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <p class="fw-bold">Fonction staff</p>
                                <small class="text-muted">
                                    Peut intervenir en tant que Staff
                                </small>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="pe-3">NON</p>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="SwitchCheck">
                                </div>
                            </div>

                        </div>

                    </div>


                    <div class="card p-3 mb-2">

                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <p class="fw-bold">Fonction particulière</p>
                                <small class="text-muted">
                                    Domaine d'intervention limité
                                </small>
                            </div>
                            <div class="d-flex align-items-center">
                                <p class="pe-3">OUI</p>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="SwitchCheck">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>


        <div class="col-md-5 border-right">

            <div class="p-3 py-5">

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Informations personnelles</h4>
                </div>

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

        <div class="col-md-4">

            <div class="p-3 py-5">

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

            <!-- Récupération et affichage QR-Code -->
            <div class="p-3 py-5">

                {{-- $qrcode --}}



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








<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
