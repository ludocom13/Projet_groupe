@extends('index')


@section('content')

<div class="click-closed"></div>
<!--/ Form Search Star /-->
<div class="box-collapse">

    <div class="title-box-d">

        <h3 class="title-d">
            <i class="mdi mdi-folder"></i> Création d'atelier
        </h3>
        <a href="{{route('page.index')}}">
            <span class="close-box-collapse right-boxed bi bi-x"></span>
        </a>

    </div>

    <div class="box-collapse-wrap form">

        <form action="{{route('atel.registre')}}" method="POST" class="form-a">

            @csrf

            <div class="row">


                <div class="col-md-12 mb-2">
                    <div class="form-group">
                        <label class="form-label ms-3" for="domaine">Domaine</label>
                        <select class="form-control form-select form-control-lg form-control-a @error('domaine') is-invalid @enderror" id="domaine" name="domaine">

                            <option value="noSelect" selected disabled>Sélectionner...</option>

                            @foreach($lesDomaines as $dom => $rqDom)

                                @php
                                    $dom_id     = $rqDom['id'];
                                    $dom_domen  = $rqDom['domaine'];
                                    $dom_groupe = $rqDom['groupe'];
                                    $dom_desc   = $rqDom['description'];
                                    $dom_user   = $rqDom['userID'];
                                    $dom_nom    = $rqDom['nom'];
                                    $dom_note   = $rqDom['note'];
                                    $dom_date   = $rqDom['datEdite'];
                                    $dom_statut = $rqDom['statut'];
                                    $dom_maj    = $rqDom['dateMaj'];

                                @endphp

                                <optgroup label="{{$dom_groupe}}">
                                    
                                    <option value="{{$dom_domen}}">{{$dom_domen}}</option>

                                </optgroup>

                            @endforeach                            

                        </select>

                        <small id="domaineHelpBlock" class="form-text text-muted d-none">
                            Domaine de l'atelier
                        </small>
                        @error('domaine')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                </div>

                <div class="col-md-12 mt-2 mb-2">
                    <div class="form-group">
                        <label class="form-label ms-3" for="sujet">Sujet</label>
                        <input type="text" id="sujet" name="sujet" class="form-control form-control-lg form-control-a @error('groupe') is-invalid @enderror" placeholder="Sujet" value="{{old('sujet')}}">

                        <small id="sujetHelpBlock" class="form-text text-muted d-none">
                            Sujet de l'atelier
                        </small>
                        @error('sujet')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>


                <div class="col-md-12 mt-2 mb-2">
                    <div class="mb-3">
                        <label class="form-label ms-3" for="description">Description</label>
                        <textarea class="form-control form-control-lg @error('description') is-invalid @enderror" id="description" name="description" rows="3" placeholder="Description">{{old('description')}}</textarea>

                        <small id="descriptionHelpBlock" class="form-text text-muted d-none">
                            Description de l'atelier
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
                        <h4 class="alert-heading py-0 mb-0">Atelier créé avec succès !</h4>
                        <hr class="mt-0">
                        <p>
                            Votre atelier <b class="text-danger"> {{$successRequest->sujet}} </b> a bien été créé et est prêt à être exploité ! 
                        </p>
                        <hr class="style14">
                        <p class="mt-0 mb-0">
                            Vous pouvez consulter la liste des ateliers <a href="">en cliquant ici</a>
                        </p>
                    </div>

                @endif


                <div class="form-row" style="margin-top: 15px;">
                    <a href="{{route('domen.formCreate')}}" class="ml-20 text-dark fsize-md">
                        <i class="fas fa-folder-tree fa-lg mr-7"></i>Créer un domaine
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