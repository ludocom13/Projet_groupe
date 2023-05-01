@extends('layouts.layout')


@section('formulaire')
<div id="formInscription" class="madals-overlay">

    <a href="{{route('page.index')}}">
        <i class="bi bi-x closer-modals"></i>
    </a>
    <span class="titreModal">Inscription</span>

    <div class="form-modals">

        <div class="py-3 position-relative">

            <div class="card overflow-hidden z-index-1">

                <div class="card-body p-0">

                    <div class="row g-0 h-100">

                        <div class="col-md-7 d-flex flex-center">

                            <div class="p-4 p-md-5 flex-grow-1">

                                <form action="{{route('R_regInscription')}}" method="POST">

                                    @csrf

                                    <div class="row gx-2">

                                        <div class="mb-3 col-sm-6">
                                            <label class="form-label mb-0" for="nom">Nom</label>
                                            <input class="form-control form-control-lg form-control-a @error('nom') is-invalid @enderror" type="text" autocomplete="off" id="nom" name="nom" maxlength="60" placeholder="Nom" value="{{old('nom')}}" />
                                            @error('nom')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror


                                        </div>

                                        <div class="mb-3 col-sm-6">
                                            <label class="form-label mb-0" for="prenom">Prénom</label>
                                            <input class="form-control form-control-lg form-control-a @error('prenom') is-invalid @enderror" type="text" autocomplete="off" id="prenom" name="prenom" maxlength="60" placeholder="Prénom" value="{{old('prenom')}}" />

                                            @error('prenom')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>

                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label mb-0" for="email">Adresse e-mail</label>
                                        <input class="form-control form-control-lg form-control-a @error('email') is-invalid @enderror" type="email" autocomplete="off" id="email" name="email" maxlength="150" placeholder="Adresse e-mail" value="{{old('email')}}" />

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>


                                    <div class="row gx-2">

                                        <div class="mb-3 col-sm-6">
                                            <label class="form-label mb-0" for="password">Mot de passe</label>
                                            <input class="form-control form-control-lg form-control-a @error('password') is-invalid @enderror" type="password" autocomplete="off" onpaste="return false" id="password" name="password" maxlength="24" placeholder="Mot de passe" value="{{old('password')}}" />

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>

                                        <div class="mb-3 col-sm-6">
                                            <label class="form-label mb-0" for="creat-confirm-password">Confirmation mot de passe</label>
                                            <input class="form-control form-control-lg form-control-a @error('creatConfirmPassword') is-invalid @enderror" type="password" autocomplete="off" onpaste="return false" maxlength="24" id="creatConfirmPassword" name="password_confirmation" placeholder="Confirmation du mot de passe" />

                                            @error('creatConfirmPassword')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>

                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="creat-register-checkbox" />
                                        <label class="form-label" for="creat-register-checkbox">
                                            I accept the <a href="#!">terms </a>and <a href="#!">privacy policy</a>
                                        </label>
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
                                            <h4 class="alert-heading py-0 mb-0">Félicitations, inscription achevée avec succès !</h4>
                                            <hr class="mt-0">
                                            <p>
                                                Votre inscription, <b class="text-danger"> {{ strtoupper($successRequest->nom)}}, </b> 
                                                a bien été enregistrée et est en attente de confirmation de votre e-mail ! 
                                            </p>
                                            <hr class="style14">
                                            <p class="mt-0 mb-0">
                                                Vous pouvez consulter la liste de vos mails <a href="#mailto:{{$successRequest->email}}">en cliquant ici</a>
                                            </p>
                                        </div>

                                    @endif



                                    <div class="mb-3">
                                        <button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Enregistrer</button>
                                    </div>

                                </form>

                                <hr>
                                <div class="text-center">
                                    <small class="mr-25">Vous avez un compte ?</small>
                                    <a class="scrollto oppen-modals" href="{{route('R_connexion')}}">
                                        <small>Connectez-vous ici</small>
                                    </a>

                                </div>

                            </div>

                        </div>


                        <div class="col-md-5 flex-center d-none d-sm-flex">
                            
                            <img class="bg-auth-circle-shape" src="logos/reunion.png" alt="" width="">
                            

                        </div>


                    </div>

                </div>

            </div>

        </div>


    </div>

</div>
@endsection