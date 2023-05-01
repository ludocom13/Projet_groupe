@extends('index')


@section('content')

<div class="click-closed"></div>
<!--/ Form Search Star /-->
<div class="box-collapse">

    <div class="title-box-d">

        <h3 class="title-d">
            <i class="mdi mdi-folder"></i> Création d'un domaine
        </h3>
        <a href="{{route('page.index')}}">
            <span class="close-box-collapse right-boxed bi bi-x"></span>
        </a>

    </div>

    <div class="box-collapse-wrap">

        <form action="{{route('domen.registre')}}" method="POST" class="form-a">

            @csrf

            <div class="row">

                <div class="col-md-12 mt-2 mb-2">
                    <div class="form-group">
                        <label class="form-label ms-3 mb-0" for="nomDomaine">Nom du domaine</label>
                        <input type="text" id="nomDomaine" name="nomDomaine" class="form-control form-control-lg form-control-a @error('nomDomaine') is-invalid @enderror" placeholder="Nom du domaine" value="{{old('nomDomaine')}}">
                        <small id="nomDomaineHelpBlock" class="form-text text-muted d-none">
                            Nom du domaine à travailler
                        </small>
                        @error('nomDomaine')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12 mb-2">
                    <div class="form-group">
                        <label class="form-label ms-3" for="groupe">Groupe</label>
                        <select class="form-control form-select form-control-lg form-control-a @error('groupe') is-invalid @enderror" id="groupe" name="groupe">
                            <option value="noSelect" selected disabled>Sélectionner...</option>
                            <option value="HTML">HTML</option>
                            <option value="PHP">PHP</option>
                            <option value="LARAVEL">LARAVEL</option>
                            <option value="JAVASCRIPT">JAVASCRIPT</option>
                            <option value="REACT">REACT</option>
                            <option value="VUE">VUE</option>
                            <option value="PYTHON">PYTHON</option>
                            <option value="AUTRES">AUTRES</option>

                        </select>

                        <small id="groupeHelpBlock" class="form-text text-muted d-none">
                            Groupe du domaine à travailler
                        </small>
                        @error('groupe')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                </div>


                <div class="col-md-12 mt-2 mb-2">
                    <div class="mb-3">
                        <label class="form-label ms-3 mb-0" for="basic-form-textarea">Description</label>
                        <textarea class="form-control form-control-lg @error('description') is-invalid @enderror" id="description" name="description" rows="3" placeholder="Description">{{old('description')}}</textarea>
                        <small id="descriptionHelpBlock" class="form-text text-muted d-none">
                            Description (15 caractères minimum)
                        </small>
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
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
                        <h4 class="alert-heading py-0 mb-0">Domaine créé avec succès !</h4>
                        <hr class="mt-0">
                        <p>
                            Votre domaine <b class="text-danger"> {{$successRequest->sujet}} </b> a bien été créé et est prêt à être exploité ! 
                        </p>
                        <hr class="style14">
                        <p class="mt-0 mb-0">
                            Vous pouvez consulter la liste des domaines <a href="">en cliquant ici</a>
                        </p>
                    </div>

                @endif


                <div class="form-row" style="margin-top: 15px;">
                    <a href="{{route('atel.formCreate')}}" class="ml-20 text-dark fsize-md">
                        <i class="fas fa-folder-tree fa-lg mr-7"></i>Créer un atelier
                    </a>
                </div>


                <div class="form-row text-center">

                    <button type="submit" class="btn-save-texte fsize-md mr-10">
                        Valider<i class="fas fa-check fa-lg ml-7"></i>
                    </button>                    

                </div>

            </div>

        </form>    

    </div>

</div>

@endsection