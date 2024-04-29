@extends('layouts.auth')

@section('title')
    Inscription
@endsection
@section('content')
    <form class="form w-100" method="POST"  action="{{ route('register') }}">
        @csrf
        <div class="text-center mb-10">
            <h1 class="text-dark mb-3">Inscription</h1>
            <div class="text-gray-400 fw-semibold fs-4">
                Vous avez déjà un compte ?

                <a href="{{route('login')}}" class="link-primary fw-bold">
                    Se connecter
                </a>
            </div>
        </div>

        <div class="fv-row mb-10">
            <label class="form-label text-dark">Email</label>
            <input class="form-control form-control-sm rounded @error('email') is-invalid @enderror" type="text"
                name="email" placeholder="Entrer votre adresse email" autocomplete="off" />
            @error('email')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="fv-row mb-10">
            <label class="form-label text-dark">Nom et Prénoms</label>
            <input class="form-control form-control-sm rounded @error('name') is-invalid @enderror" type="text"
                name="name" placeholder="Entrer votre nom et prénoms" autocomplete="off" />
            @error('name')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>


        <div class="fv-row mb-10">
            <div class="d-flex flex-stack mb-2">
                <label class="form-label text-dark mb-0">Mot de Passe</label>
            </div>

            <input class="form-control form-control-sm form-control @error('password') is-invalid @enderror" type="password"
                name="password" placeholder="xxxxxxxxx" autocomplete="off" />
            @error('password')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="fv-row mb-10">
            <div class="d-flex flex-stack mb-2">
                <label class="form-label text-dark mb-0">Confirmer mot de Passe</label>
            </div>
            <input class="form-control form-control-sm form-control" type="password"
                name="password_confirmation" placeholder="xxxxxxxxx" autocomplete="off" />
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-sm btn-primary w-100 mb-5">
                <span class="indicator-label">
                    Continuer
                </span>

                <span class="indicator-progress">
                    Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                </span>
            </button>
        </div>
    </form>
@endsection
