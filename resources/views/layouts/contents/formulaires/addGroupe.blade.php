@extends('layouts.layout')


@section('formulaire')
<div id="formConnexion" class="madals-overlay">

    <a href="{{route('page.index')}}">
        <i class="bi bi-x closer-modals"></i>
    </a>

    <span class="titreModal">Création de groupe</span>

    <div class="form-modals">

        <div class="py-3 position-relative">

            <div class="card overflow-hidden z-index-1">

                <div class="card-body p-0">

                    <div class="row g-0 h-100">

                        <div class="col-md-7 d-flex flex-center">

                            <div class="p-4 p-md-5 flex-grow-1">

                                <form action="{{route('R_reGroupe')}}" method="POST">

                                    @csrf

                                    <div class="mb-3">
                                        <label class="form-label mb-0" for="nomGroupe">Nom du groupe</label>
                                        <input class="form-control form-control-lg form-control-a @error('nomGroupe') is-invalid @enderror" type="text" autocomplete="off" id="nomGroupe" name="nomGroupe" maxlength="150" placeholder="Nom du groupe" value="{{old('nomGroupe')}}" />

                                        @error('nomGroupe')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label mb-0" for="placeGroupe">Place du groupe</label>

                                        <select id="placeGroupe" name="placeGroupe" class="form-control form-control-lg form-control-a @error('placeGroupe') is-invalid @enderror">
                                          <option>Sélectionner...</option>

                                          @for($gr = 1; $gr <= 10; $gr ++)

                                            <option value="{{$gr}}">{{$gr}}</option>

                                          @endfor


                                        </select>

                                        @error('placeGroupe')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>


                                    <div class="mb-3">
                                        <label class="form-label mb-0" for="groupeDescript">Description</label>

                                        <textarea class="form-control form-control-lg form-control-a @error('groupeDescript') is-invalid @enderror" id="groupeDescript" name="groupeDescript" placeholder="Description...">{{old('groupeDescript')}}</textarea>

                                        @error('groupeDescript')
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
                                            <a class="btn btn-danger d-block w-100" href="{{route('R_equipe')}}">
                                                Annuler
                                            </a>
                                        </div>

                                    </div>


                                </form>

                                <hr>
                                <div class="text-center">
                                    <small class="mr-25">
                                        Vous faites partie d'un groupr ?
                                    </small>
                                    <a href="{{route('R_formReset')}}">
                                        <small>Consulter ici</small>
                                    </a>

                                </div>                                


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