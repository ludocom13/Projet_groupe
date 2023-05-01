@extends('index')


@section('content')
<!--/ Form Search Star /-->
<div class="overlay-modals">

    <div class="panneau-collapse">

        <div class="title-panneau-te">

            <h3 class="title-te">
              <i class="mdi mdi-account-lock"></i> Connexion à l'espace membre
            </h3>
            <a href="{{route('page.index')}}">
                <span class="close-panneau-collapse right-boxed bi bi-x"></span>
            </a>

        </div>

        <div class="panneau-collapse-wrap form">

            <form action="{{route('user.updatePass')}}" method="POST" class="form-a">

                @csrf

                <div class="row">

                    <div class="col-md-12 mb-2">
                        <div class="form-group">
                            <label class="pb-2" for="email">Identifiant</label>
                            <input type="text" id="email" name="email" class="form-control form-control-lg form-control-a isNumber" placeholder="Identifiant" maxlength="200" autocomplete="off" value="{{old('email')}}">
                        </div>
                    </div>

                    <div class="col-md-12 mb-2">
                        <div class="form-group">

                            <label class="me-4 d-inline" for="Type">
                                <a href="{{route('user.formConnex')}}">Connexion<i class="mdi mdi-account-lock mdi-36px ms-1"></i>  </a>
                            </label>

                            <label class="d-inline" for="Type">
                                <a href="{{route('user.formInscript')}}">Inscription<i class="mdi mdi-account-plus mdi-36px ms-1"></i>  </a>
                            </label>

                        </div>
                    </div>


                    <div class="flo-ui getErrors mt-10">
                
                        @if ($errors->any())

                            <div class="alert alert-danger">

                                @foreach ($errors->all() as $error)

                                <div class="flo-notification alert-error">
                                    {{ $error }}                                  
                                </div>
                                    
                                @endforeach


                            </div>

                        @elseif (isset($successRequest) )

                            <div class="flo-notification alert-success">
                                <p class="">
                                    <strong> Félicitation, votre inscription a réussi !</strong>
                                </p>
                                    <br><hr class="">
                                <p>
                                    Vous pouvez, dès à présent, vous connecter avec vos identifiant que vous venez d'indiquer !

                                </p>                                 
                            </div>

                        @endif

                    </div>


                    
                    
                    <div class="col-md-12 text-center my-3">
                        <button type="submit" class="btn btn-primary btn-b">Envoyer</button>
                    </div>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection                 