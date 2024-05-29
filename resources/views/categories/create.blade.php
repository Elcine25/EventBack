@extends('layouts.app')

@section('title')
Enregistrer un catégorie
@endsection
@section('breadcrumb')
<li class="breadcrumb-item text-muted">
    <a href="/" class="text-muted">Acceuil</a>
</li>
<li class="breadcrumb-item text-muted">
    <a href="{{route('categorie-index')}}" class="text-muted">Liste des catégories</a>
</li>
<li class="breadcrumb-item text-dark">Nouvelle catégorie</li>
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
                            >Nouvelle catégorie</span
                        >

                    </h3>
                    <div
                        class="card-toolbar"
                        data-bs-toggle="tooltip"
                        data-bs-placement="top"
                        data-bs-trigger="hover"
                        title="Cliquez pour ajouter une catégorie"
                    > </div>
                </div>
                <!--end::Header-->
                @if (session('success'))
                        <div class="alert alert-success d-flex align-items-center p-5">
                            <i class="ki-duotone ki-shield-tick fs-2hx text-primary me-4"><span class="path1"></span><span
                                    class="path2"></span></i>
                            <div class="d-flex flex-column">
                                <span>{{ session('success') }}</span>
                            </div>
                        </div>

                            
                        @elseif(session('error'))
                        <div class="alert alert-danger d-flex align-items-center p-5">
                            <i class="ki-duotone ki-shield-tick fs-2hx text-primary me-4"><span class="path1"></span><span
                                    class="path2"></span></i>
                            <div class="d-flex flex-column">
                                <span>{{ session('error') }}</span>
                            </div>
                        </div>
                            
                @endif
                <!--begin::Body-->
                <div class="card-body py-3">
                    <!--begin::form container-->
                        <form class="form" method="POST" action="{{ route('categorie-store') }}" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <div class="row w-100">
                                <div class="imag  mb-3">
                                    <label for="file" class="file border @error('fichier') text-danger @enderror m-2 end">Importer l'icône</label>
                                    <input type="file" id="image" name="fichier" required >
                                    @error('fichier')
                                        <span class="invalid-feedback" role="alert">
                                            Importez un fichier de type image.
                                        </span>
                                    @enderror
                                </div>
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
                                        placeholder="Nom de la catégorie" required
                                    />
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                    <!--end::Label-->
                                </div>

                                <div class="form-group col-12 mb-5">
                                    <!--begin::Label-->
                                    <label
                                        class="d-flex align-items-center fs-5 mb-2"
                                    >
                                        <span class="required"
                                            >Description</span
                                        >
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <textarea   class="form-control @error('description') is-invalid @enderror form-control-sm " required name="description" id="" cols="30" rows="10"></textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                    <!--end::Input-->
                                </div>
                               
                            </div>
                            <div class="d-flex justify-content-between item-align-center">
                                <button
                                type="submit"
                                :disabled="!name || !description"
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
