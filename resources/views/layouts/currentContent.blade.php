@extends('index')

@section('indexContent')

    <section class="une_section bg-secondary bx-shodow-black">

        <h3>
            <a class="btn-titre open-soumenu">
                <span class="d-none d-md-inline mr-7">Tri</span>
                <i class="fas fa-sort-amount-up fa-lg d-none d-md-block"></i>
                <i class="fas fa-sort-amount-up fa-xl d-md-none d-sm-block"></i>
            </a>
            <ul class="soumenu d-none">
                <li>
                    <a href="#!">Menu à afficher 
                        <i class="fas fa-info fa-lg fa-fw ml-7"></i>
                    </a>
                </li>
                <li>
                    <a href="#!">Menu à afficher 
                        <i class="fas fa-info fa-lg fa-fw ml-7"></i>
                    </a>
                </li>
                <li>
                    <a href="#!">Menu à afficher 
                        <i class="fas fa-info fa-lg fa-fw ml-7"></i>
                    </a>
                </li>
            </ul>

            <i class="fas fa-folder-tree fa-lg fa-fw mr-7"></i> Ateliers ({{$nombreAtelier}})
        </h3>
        
        <div class="table-responsive carnetstocks">

            <table class="table table-striped custom-table pb-20 bx-shodow-black floraforms">
                <thead class="bx-shodow-black">
                    <tr>
                        <th scope="col">#N°</th>
                        <th scope="col">Sujet</th>
                        <th scope="col">Domaine</th>
                        <th scope="col">Description</th>
                        <th scope="col">Créateur</th>
                        <th scope="col">Note</th>
                        <th scope="col">Créé le</th>
                        <th scope="col">Statut</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($tableAtelier as $ati => $rqFold)

                        @php
                            $ate_id     = $rqFold['id'];
                            $ate_sujet  = $rqFold['sujet'];
                            $ate_domen  = $rqFold['domaine'];
                            $ate_desc   = $rqFold['description'];
                            $ate_user   = $rqFold['userID'];
                            $ate_nom    = $rqFold['nom'];
                            $ate_note   = $rqFold['note'];
                            $ate_date   = $rqFold['datEdite'];
                            $ate_statut = $rqFold['statut'];
                            $ate_maj    = $rqFold['dateMaj'];
                        @endphp

                    <tr scope="row" class="tr_colored">
                        <td class="text-bolder text-center">
                            <div class="user-info__img">
                                <small class="d-block idTd">{{$ate_id}}</small>
                            </div>
                        </td>

                        <td class="text-bolder text-center">{{$ate_sujet}}</td>
                        <td class="text-bolder text-center">{{$ate_domen}}</td>
                        <td class="text-bolder text-center">{{substr($ate_desc, 0, 20)}}...</td>
                        <td class="text-bolder text-center">{{$ate_user}}</td>
                        <td class="text-bolder text-center">{{$ate_note}}</td>
                        <td class="text-bolder text-center">{{$ate_date}}</td>
                        <td class="text-bolder text-center">{{$ate_statut}}</td>
                        <td class="tdAction text-center">
                            <a href="" class="">
                                <span class="d-none d-md-inline"> Consulter</span> <i class="fas fa-edit fa-lg ml-7"></i>
                            </a>
                        </td>
                    </tr>

                    @endforeach

                    @for($tr = 1; $tr <= 2; $tr ++)

                        <tr class="text-white">
                            @for($td = 1; $td < 10; $td ++)
                                
                                @if($td     == 9)
                                    <td class="tdVide tdAction">---</td>
                                @else                                    
                                    <td class="tdVide"></td>
                                @endif
                            
                            @endfor

                        </tr>

                    @endfor

                </tbody>

                <tfoot>
                    <tr scop="row">
                        @for($ftd = 1; $ftd < 10; $ftd ++)
                            <td>...</td>
                        @endfor
                    </tr>
                </tfoot>
            </table>

        </div>


        <div class="form-row wid-lg-70">
            <section class="colm colm12 mt-7 text-end pr-20">

                <a href="{{route('atel.formCreate')}}" class="btn-save-texte fsize-md mr-10 add-atelier">
                    <i class="fas fa-user-plus fa-lg mr-7"></i><span class="d-none d-md-inline">Créer un </span>Atelier
                </a>

                <a href="{{route('domen.formCreate')}}" class="btn-save-texte fsize-md ml-10 add-group">
                    <i class="fas fa-users fa-lg mr-7"></i><span class="d-none d-md-inline">Créer un </span>Domaine
                </a>
                
            </section>

        </div>

    </section>

    <hr class="style14">






    <section class="une_section bg-secondary bx-shodow-black">

        <h3>
            <a class="btn-titre open-soumenu">
                <span class="d-none d-md-inline mr-7">Tri</span>
                <i class="fas fa-sort-amount-up fa-lg d-none d-md-block"></i>
                <i class="fas fa-sort-amount-up fa-xl d-md-none d-sm-block"></i>
            </a>
            <ul class="soumenu d-none">
                <li>
                    <a href="#!">Menu à afficher 
                        <i class="fas fa-info fa-lg fa-fw ml-7"></i>
                    </a>
                </li>
                <li>
                    <a href="#!">Menu à afficher 
                        <i class="fas fa-info fa-lg fa-fw ml-7"></i>
                    </a>
                </li>
                <li>
                    <a href="#!">Menu à afficher 
                        <i class="fas fa-info fa-lg fa-fw ml-7"></i>
                    </a>
                </li>
            </ul>

            <i class="fas fa-edit fa-lg fa-fw mr-7"></i> Liste des personnages ({{$nombrePerso}})
        </h3>
        
        <div class="table-responsive carnetstocks">

            <table class="table table-striped custom-table pb-20 bx-shodow-black floraforms">
                <thead class="bx-shodow-black">
                    <tr>
                        <th scope="col">#ID</th>
                        <th scope="col">Utilisateur</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Spéc.</th>
                        <th scope="col">Magie</th>
                        <th scope="col">Force</th>
                        <th scope="col">Agilité</th>
                        <th scope="col">Intélig.</th>
                        <th scope="col">PV</th>
                        <th scope="col">Groupe</th>
                        <th scope="col">Statut</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($tablePersonage as $prs => $rqValues)

                        @php
                            $per_id     = $rqValues['id'];
                            $per_nom    = $rqValues['nom'];
                            $per_spec   = $rqValues['specialites'];
                            $per_magie  = $rqValues['magie'];
                            $per_force  = $rqValues['force'];
                            $per_agil   = $rqValues['agilite'];
                            $per_intel  = $rqValues['intelligeance'];
                            $per_pv     = $rqValues['pv'];
                            $per_user   = $rqValues['userID'];
                            $per_desc   = $rqValues['description'];
                            $per_group  = $rqValues['groupID'];
                            $per_statut = $rqValues['statut'];
                            $per_maj    = $rqValues['dateMaj'];
                        @endphp

                    <tr scope="row" class="tr_colored">
                        <td class="text-bolder text-center">
                            <div class="user-info__img">
                                <img src="../../logos/infos_membre.png" alt="{{$per_id}}" class="img-fluid d-none d-lg-block">
                                <small class="d-block idTd">{{$per_id}}</small>
                            </div>
                        </td>

                        <td class="text-bolder text-center">{{$per_user}}</td>
                        <td class="text-bolder text-center">{{$per_nom}}</td>
                        <td class="text-bolder text-center">{{$per_spec}}</td>
                        <td class="text-bolder text-center">{{$per_magie}}</td>
                        <td class="text-bolder text-center">{{$per_force}}</td>
                        <td class="text-bolder text-center">{{$per_agil}}</td>
                        <td class="text-bolder text-center">{{$per_intel}}</td>
                        <td class="text-bolder text-center">{{$per_pv}}</td>
                        <td class="text-bolder text-center">{{$per_group}}</td>
                        <td class="text-bolder text-center">{{$per_statut}}</td>
                        <td class="tdAction text-center">
                            <a href="{{route('show.personnage', $per_id)}}" class="">
                                <span class="d-none d-md-inline"> Détails</span> <i class="fas fa-edit fa-lg ml-7"></i>
                            </a>
                        </td>
                    </tr>

                    @endforeach

                    @for($tr = 1; $tr <= 2; $tr ++)

                        <tr class="text-white">
                            @for($td = 0; $td < 12; $td ++)
                                
                                @if($td     == 11)
                                    <td class="tdVide tdAction">---</td>
                                @else                                    
                                    <td class="tdVide"></td>
                                @endif
                            
                            @endfor

                        </tr>

                    @endfor

                </tbody>

                <tfoot>
                    <tr scop="row">
                        @for($ftd = 0; $ftd < 12; $ftd ++)
                            <td>...</td>
                        @endfor
                    </tr>
                </tfoot>
            </table>
        </div>


        <div class="form-row wid-lg-70">
            <section class="colm colm12 mt-7 text-end pr-20">

                <a href="{{route('create.personnage')}}" class="btn-save-texte fsize-md mr-10 add-personnage">
                    <i class="fas fa-user-plus fa-lg mr-7"></i><span class="d-none d-md-inline">Créer un </span>Personnage
                </a>

                <a href="{{route('group.personnage')}}" class="btn-save-texte fsize-md ml-10 add-group">
                    <i class="fas fa-users fa-lg mr-7"></i><span class="d-none d-md-inline">Créer un </span>Groupe
                </a>
                
            </section>

        </div>

    </section>

    <hr class="style14">


    <section class="une_section bg-primary bx-shodow-black">

        <h3>
            <a class="btn-titre open-soumenu">
                <span class="d-none d-md-inline mr-7">Tri</span>
                <i class="fas fa-sort-amount-up fa-lg d-none d-md-block"></i>
                <i class="fas fa-sort-amount-up fa-xl d-md-none d-sm-block"></i>
            </a>
            <ul class="soumenu d-none">
                <li>
                    <a href="#!">Menu à afficher 
                        <i class="fas fa-info fa-lg fa-fw ml-7"></i>
                    </a>
                </li>
                <li>
                    <a href="#!">Menu à afficher 
                        <i class="fas fa-info fa-lg fa-fw ml-7"></i>
                    </a>
                </li>
                <li>
                    <a href="#!">Menu à afficher 
                        <i class="fas fa-info fa-lg fa-fw ml-7"></i>
                    </a>
                </li>
            </ul>

            <i class="fas fa-edit fa-lg fa-fw mr-7"></i> Annonces disponibles (0)
        </h3>
        
        <div class="bookAnnonces">

            
        </div>


        <div class="form-row wid-lg-70">
            <section class="colm colm12 mt-7 text-end pr-20">

                <a href="" class="btn-save-texte fsize-md mr-10 add-personnage">
                    <i class="fas fa-user-plus fa-lg mr-7"></i><span class="d-none d-md-inline">Créer une </span>Annonce
                </a>

                <a href="" class="btn-save-texte fsize-md ml-10 add-group">
                    <i class="fas fa-users fa-lg mr-7"></i><span class="d-none d-md-inline">Créer une </span>Anchère
                </a>
                
            </section>

        </div>

    </section>




    <hr class="style14">


    <section class="une_section bg-warning bx-shodow-black">

        <h3>
            <a class="btn-titre open-soumenu">
                <span class="d-none d-md-inline mr-7">Tri</span>
                <i class="fas fa-sort-amount-up fa-lg d-none d-md-block"></i>
                <i class="fas fa-sort-amount-up fa-xl d-md-none d-sm-block"></i>
            </a>
            <ul class="soumenu d-none">
                <li>
                    <a href="#!">Menu à afficher 
                        <i class="fas fa-info fa-lg fa-fw ml-7"></i>
                    </a>
                </li>
                <li>
                    <a href="#!">Menu à afficher 
                        <i class="fas fa-info fa-lg fa-fw ml-7"></i>
                    </a>
                </li>
                <li>
                    <a href="#!">Menu à afficher 
                        <i class="fas fa-info fa-lg fa-fw ml-7"></i>
                    </a>
                </li>
            </ul>

            <i class="fas fa-edit fa-lg fa-fw mr-7"></i> Anchères en attentes (0)
        </h3>
        
        <div class="bookAnnonces">

            
        </div>


        <div class="form-row wid-lg-70">
            <section class="colm colm12 mt-7 text-end pr-20">

                <a href="" class="btn-save-texte fsize-md mr-10 add-personnage">
                    <i class="fas fa-user-plus fa-lg mr-7"></i><span class="d-none d-md-inline">Créer une </span>Annonce
                </a>

                <a href="" class="btn-save-texte fsize-md ml-10 add-group">
                    <i class="fas fa-users fa-lg mr-7"></i><span class="d-none d-md-inline">Créer une </span>Anchère
                </a>
                
            </section>

        </div>

    </section>

@endsection