@extends('layouts.app')

@section('title')
Modifier un évenement
@endsection
@section('breadcrumb')
<li class="breadcrumb-item text-muted">
    <a href="/" class="text-muted">Acceuil</a>
</li>
<li class="breadcrumb-item text-muted">
    <a href="{{route('event-index')}}" class="text-muted">Liste des évenements</a>
</li>
<li class="breadcrumb-item text-dark">Nouvel évenement</li>
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
                            >Modifier évenement</span
                        >

                    </h3>
                    <div
                        class="card-toolbar"
                        data-bs-toggle="tooltip"
                        data-bs-placement="top"
                        data-bs-trigger="hover"
                        title="Cliquez pour ajouterune PME"
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
                    <form class="form" method="POST" action="{{route('event-update', $evenements->id)}}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div>
                            <div class="row w-100">
                                <div class="imag  mb-3">
                                    <label for="file" class="file border @error('fichier') text-danger @enderror m-2 end">Importer l'affiche</label>
                                    <input type="file" id="image" name="fichier">
                                    @error('fichier')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-6 mb-5">
                                    
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
                                        class="form-control form-control-sm  @error('nom') is-invalid @enderror"
                                        name="nom"
                                        placeholder="Nom de l'événement"
                                        value="{{$evenements->nom}}"
                                    />
                                    @error('nom')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                    <!--end::Label-->
                                </div>
                                <div class="form-group col-6 mb-5">
                                    <!--begin::Label-->
                                    <label
                                        class="d-flex align-items-center fs-5 mb-2"
                                    >
                                    <span class=""
                                            >Date</span
                                        >
                                    </label>
                                    <input
                                        type="date"
                                        class="form-control form-control-sm  @error('date') is-invalid @enderror"
                                        name="date"
                                        placeholder="Date de l'événement"
                                        value="{{$evenements->date}}"
                                    />
                                    @error('date')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                    <!--end::Label-->
                                </div>
                                <div class="form-group col-6 mb-5">
                                    <!--begin::Label-->
                                    <label
                                        class="d-flex align-items-center fs-5 mb-2"
                                    >
                                    <span class=""
                                            >Heure</span
                                        >
                                    </label>
                                    <input
                                        type="time"
                                        class="form-control form-control-sm  @error('heure') is-invalid text-danger @enderror"
                                        name="heure"
                                        placeholder="Heure de l'événement"
                                        value="{{$evenements->heure}}"
                                    />
                                    @error('heure')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                    <!--end::Label-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="form-group col-6 mb-5">
                                    <!--begin::Label-->
                                    <label
                                        class="d-flex align-items-center fs-5 mb-2"
                                    >
                                        <span class=""
                                            >Adresse</span
                                        >
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input
                                        type="text"
                                        class="form-control @error('lieu') is-invalid @enderror form-control-sm "
                                        name="lieu"
                                        placeholder="Adresse de l'événement"
                                        value="{{$evenements->lieu}}"
                                    />
                                    @error('lieu')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="form-group col-6 mb-5">
                                    <!--begin::Label-->
                                    <label
                                        class="d-flex align-items-center fs-5 mb-2"
                                    >
                                        <span class="required"
                                            >Catégories</span
                                        >
                                    </label>
                                    <!--end::Label-->
                                    <select name="categories_id"
                                        class="form-select form-select-sm @error('categories_id') is-invalid @enderror"
                                        aria-label="Select example" aria-placeholder="sélectionner une catégorie">
                                        <option>Sélectionner une catégorie</option>
                                        @foreach ($categories as $item)
                                                <option value="{{ $item->id }}" {{$evenements->categories_id==$item->id ? 'selected':''}}>{{ $item->name }}</option>
                                            @endforeach
                                    </select>

                                    @error('categories_id')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                    
                                </div>
                                <div class="form-group col-6 mb-5">
                                    <!--begin::Label-->
                                    <label
                                        class="d-flex align-items-center fs-5 mb-2"
                                    >
                                        <span class="required"
                                            >Ville</span
                                        >
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select name="villes_id"
                                        class="form-select form-select-sm @error('villes_id') is-invalid @enderror"
                                        aria-label="Select example" aria-placeholder="sélectionner une catégorie">
                                        <option>sélectionner une ville</option>
                                        @foreach ($villes as $item)
                                                <option value="{{ $item->id }}"{{$evenements->villes_id==$item->id ? 'selected':''}}>{{ $item->name }}</option>
                                            @endforeach
                                    </select>

                                    @error('villes_id')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                    <!--end::Input-->
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
                                    <textarea   class="form-control @error('description') is-invalid @enderror form-control-sm " 
                                    value="" name="description" id="" cols="30" rows="10">{{$evenements->description}}</textarea>
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
