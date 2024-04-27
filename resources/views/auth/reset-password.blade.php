@extends('layouts.auth')
@section('title')
    Changer mot de passe
@endsection
@section('content')
    <form class="form w-100" method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ request()->token }}">
        <input type="hidden" name="email" value="{{ request()->email }}">

        <!--begin::Heading-->
        <div class="text-center mb-10">
            <!--begin::Title-->
            <h1 class="text-dark mb-3">Réinitialiser mot de passe.</h1>
            <!--end::Title-->
            @if (session('status'))
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <!--begin::Link-->
            <div class="text-gray-400 fw-semibold fs-4">
                Avez-vous déjà réinitialisé votre mot de passe ?
                <a href="/login" class="link-primary fw-bold">
                    Se connecter ici
                </a>
            </div>
            <!--end::Link-->
        </div>
        <!--begin::Heading-->
         <!--begin::Input group-->
         <div class="fv-row mb-5">
            <!--begin::Label-->
            <label class="form-label fs-6 text-dark">Email</label>
            
            <!--end::Label-->
            <!--begin::Input-->
            <input class="form-control form-control-sm @error('email') is-invalid @enderror" type="email" value="{{ request()->email }}" disabled />
            @error('email')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
            <!--end::Input-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="fv-row mb-5">
            <!--begin::Label-->
            <label class="form-label fs-6 text-dark">Nouveau mot de passe</label>
            <!--end::Label-->
            <!--begin::Input-->
            <input class="form-control form-control-sm @error('password') is-invalid @enderror"
                type="password" name="password" autocomplete="off" />
            @error('password')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
            <!--end::Input-->
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="fv-row mb-5">
            <!--begin::Label-->
            <label class="form-label fs-6 text-dark">Confirmer mot de passe</label>
            <!--end::Label-->
            <!--begin::Input-->
            <input class="form-control form-control-sm form-control-solid" type="password" name="password_confirmation"
                autocomplete="off" />
        </div>

        <!--begin::Actions-->
        <div class="text-center">
            <!--begin::Submit button-->
            <button type="submit" class="btn btn-sm btn-primary w-100 mb-5">
                <span class="indicator-label">
                    Réinitialiser
                </span>
            </button>
            <!--end::Submit button-->
        </div>
        <!--end::Actions-->
    </form>
@endsection
