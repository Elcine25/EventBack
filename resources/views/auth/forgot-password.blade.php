@extends('layouts.auth')
@section('title')
    Mot de pase oublié
@endsection
@section('content')
    <!--begin::Form-->
    <form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" method="POST" action="{{ route('password.request') }}">
    @csrf
        <!--begin::Heading-->
        <div class="text-center mb-10">
            <!--begin::Title-->
            <h1 class="text-dark mb-3">
            Mot de passe oublié ?
            </h1>
            <!--end::Title-->

            <!--begin::Link-->
            <div class="text-gray-400 fw-semibold fs-6">
            Entrez votre E-mail et des instructions vous seront envoyées !
            </div>
            <!--end::Link-->
        </div>
        <!--begin::Heading-->

        @if(session('status'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                {{-- {{ session('status')}} --}}
                Nous vous avons envoyé par e-mail un lien de réinitialisation de votre mot de passe.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!--begin::Input group-->
        <div class="fv-row mb-10 fv-plugins-icon-container">
            <label class="form-label text-gray-900 fs-6">Email</label>
            <input class="form-control form-control-sm @error('email') is-invalid @enderror" required type="email" placeholder="Entrer votre email" name="email" autofocus  >
            @error('email')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
        <!--end::Input group-->

        <!--begin::Actions-->
        <div class="d-flex flex-wrap justify-content-center pb-lg-0">
            <button type="submit" id="kt_password_reset_submit" class="btn btn-sm btn-primary me-4">
                <span class="indicator-label">
                    Envoyé
                </span>
                <span class="indicator-progress">
                    Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                </span>
            </button>

            <a href="/login" class="btn fs-7 p-2 btn-light-primary fw-bold">Se connecter</a>
        </div>
        <!--end::Actions-->
    </form>
    <!--end::Form-->
@endsection
