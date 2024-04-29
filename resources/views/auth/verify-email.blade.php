@extends('layouts.auth')
@section('title')
    Vérification d'email
@endsection
@section('content')
@if(session('status'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        {{ session('status')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="p-3">
    <form class="form w-100" novalidate="novalidate" method="POST" action="#" id="kt_sign_up_form">
        @csrf

        <!--begin::Heading-->
        <div class="text-center mb-5">
            <!--begin::Title-->
            <h1 class="text-dark mb-3">Vérification de l'adresse e-mail</h1>
            <!--end::Title-->
        </div>
        <!--end::Heading-->

        <!-- Contenu de la vérification d'e-mail -->
        <div class="text-center">
            <p class="mb-3 text-muted">Nous avons envoyé un lien de vérification à votre adresse e-mail. Veuillez cliquer sur le lien pour vérifier votre e-mail.</p>
        </div>

        <!-- Bouton de renvoi -->
        <div class="text-center">
            <button type="submit" id="kt_sign_up_submit" class="btn btn-sm btn-primary">
                <span class="indicator-label">Renvoyer l'e-mail de vérification</span>
            </button>
        </div>
        <!--end::Actions-->
    </form>
    <!--end::Form-->
</div>
@endsection
