@extends('layouts.app')

@section('title')
Enregistrer une ville
@endsection
@section('breadcrumb')
<li class="breadcrumb-item text-muted">
    <a href="/" class="text-muted">Acceuil</a>
</li>
<li class="breadcrumb-item text-muted">
    <a href="{{route('categorie-index')}}" class="text-muted">Liste des villes</a>
</li>
<li class="breadcrumb-item text-dark">Nouvelle ville</li>
@endsection
@section("css")

@endsection
@section('content')
    <div class="row gy-5 g-xl-8">
        <div class="col-xl-12">
            <!--begin::Tables Widget 3-->
            <div
                class="card card-xl-stretch mb-5 mb-xl-8"
            >
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3
                        class="card-title align-items-start flex-column"
                    >
                        <span
                            class="card-label fw-bolder fs-3 mb-1"
                            >Nouvelle ville</span
                        >

                    </h3>
                    <div
                        class="card-toolbar"
                        data-bs-toggle="tooltip"
                        data-bs-placement="top"
                        data-bs-trigger="hover"
                        title="Cliquez pour ajouter une PME"
                    > </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body py-3">
                    <!--begin::form container-->
                    <form class="form" method="POST" action="{{route('ville-store')}}" >
                        @csrf
                        <div>
                            <div class="row w-100">
                                <div class="form-group col-12 mb-5">
                                    <!--begin::Label-->
                                    <label
                                        class="d-flex align-items-center fs-5 mb-2"
                                    >
                                    <span class="required"
                                            >Nom</span
                                        >
                                    </label>
                                    <input
                                        type="text"
                                        class="form-control form-control-sm  @error('name') is-invalid @enderror"
                                        name="name"
                                        placeholder="Nom de la ville" required
                                    />
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                    <!--end::Label-->
                                    </div>
                               
                            </div>
                            <div class="d-flex justify-content-between item-align-center">
                                <button
                                type="submit"
                                :disabled="!name"
                                class="btn btn-sm btn-primary"
                                >
                                    Enregistrer
                                </button>
                            </div>
                        </div>
                    </form>
                    <!--end::form container-->
                </div>
                <!--begin::Body-->
            </div>
            <!--end::Tables Widget 3-->
        </div>
    </div>
    <!-- Modal create -->
@endsection
@section('script')

@endsection
