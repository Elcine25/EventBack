@extends('layouts.auth')

@section('title')
    Se connecter
@endsection
@section('content')
    <form class="form w-100" method="POST"  action="{{ route('login') }}">
    @csrf
           <div class="text-center mb-10">
            <h1 class="text-dark mb-3">Connexion</h1>
             <!--<div class="text-gray-400 fw-semibold fs-4">
                Nouveau ici ?

                <a href="{{route('register')}}" class="link-primary fw-bold">
                    Créer un compte
                </a>
            </div>-->
        </div>
        <div class="tab-content mt-2" id="myTabContent">
            <div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel">
                <div class="fv-row mb-10">
                    <label class="form-label text-dark">Email</label>
                    <input class="form-control form-control-sm rounded @error('email') is-invalid @enderror" required type="text" name="email" autofocus placeholder="Entrer votre email"/>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            {{$message}}
                        </span>
                    @enderror
                </div>
            </div>
        </div>
   

        <div class="fv-row mb-10">
            <div class="d-flex flex-stack mb-2">
                <label class="form-label text-dark mb-0">Mot de Passe</label>
                <!--<a href="" class="link-primary fw-bold">
                    Mot de passe oublié ?
                </a>-->
            </div>

            <input class="form-control form-control-sm form-control @error('password') is-invalid @enderror" required type="password" placeholder="Entrer votre mot de passe" name="password" autocomplete="off"/>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    {{$message}}
                </span>
            @enderror

            <a href="" class="link-primary mt-2 ms-2 fw-bold">
                Mot de passe oublié ?
            </a>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-sm btn-primary w-100 mb-5">
                <span class="indicator-label">
                    Se connecter
                </span>

                <span class="indicator-progress">
                    Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                </span>
            </button>
        </div>
    </form>
@endsection
