@extends('layouts.layout')


@section('formulaire')
<div id="formConnexion" class="madals-overlay">

    <a href="{{route('R_events')}}">
        <i class="bi bi-x closer-modals"></i>
    </a>

    <span class="titreModal">Création d'un événement</span>

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

                                    <div class="input-group mb-3">

                                        <span class="input-group-text" id="basic-addon3">Réf. URL</span>
                                        <input type="text" class="form-control form-control-lg form-control-a @error('evtLink') is-invalid @enderror" id="evtLink" name="evtLink" placeholder="Lien de référence" value="{{old('evtLink')}}" aria-describedby="basic-addon3" />

                                        @error('evtLink')
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