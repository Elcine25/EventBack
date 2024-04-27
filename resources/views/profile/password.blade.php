@extends('layouts.app')
@section('title')
Paramètre de compte
@endsection
@section('breadcrumb')
@section('content')
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content pb-0">
            <!--begin::details View-->
            <div class="card mb-5 mb-xl-10">
                <!--begin::Card header-->
                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                    <!--begin::Card title-->
                    <div class="card-title m-0">
                        <h3 class="m-0">Changer de mot de passe </h3>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--begin::Card header-->
                <div id="kt_account_settings_profile_details" class="collapse show">
                    <form method="POST" action="{{ route('user-password.update') }}">
                        @csrf
                        @method('PUT')


                        @if (session('status') == "password-updated")
                        <div class="alert alert-primary d-flex align-items-center p-5">
                            <!--begin::Icon-->
                            <i class="ki-duotone ki-shield-tick fs-2hx text-primary me-4"><span class="path1"></span><span class="path2"></span></i>
                            <!--end::Icon-->
    
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column">
                                <!--begin::Title-->
                                <h4 class="mb-1 text-dark">Notification</h4>
                                <!--end::Title-->
    
                                <!--begin::Content-->
                                <span>Mot de passe modifier avec succès.</span>
                                <!--end::Content-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        @endif

                        <div class="card-body border-top p-9">
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label for="current_password" class="col-lg-4 col-form-label required fw-semibold fs-6">Mot de passe actuel</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input id="current_password" class="form-control form-control-sm @error('current_password', 'updatePassword') is-invalid @enderror" type="password" placeholder="" name="current_password" required autofocus />
                                    @error('current_password', 'updatePassword')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <!--end::Col-->
                            </div>
    
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label for="password" class="col-lg-4 col-form-label required fw-semibold fs-6">Nouveau Mot de passe</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input id="password" class="form-control form-control-sm  @error('password', 'updatePassword') is-invalid @enderror" type="password" placeholder="" name="password" required autocomplete="new-password"/>
                                    @error('password', 'updatePassword')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <!--end::Col-->
                            </div>
    
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label for="password-confirm" class="col-lg-4 col-form-label required fw-semibold fs-6">Confirmer Mot de passe </label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input id="password-confirm" class="form-control form-control-sm" type="password" placeholder="" name="password_confirmation" required autocomplete="new-password"/>
                                </div>
                                <!--end::Col-->
                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            <button type="submit" class="btn btn-primary btn-sms">Mettre à jour</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection