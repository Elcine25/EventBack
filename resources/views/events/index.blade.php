@extends('layouts.app')

@section('title')
    Evénement
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item text-muted">
        <a href="/" class="text-muted">Acceuil</a>
    </li>
    <li class="breadcrumb-item text-dark">Liste des Evénements</li>
@endsection
@section('css')
@endsection
@section('content')
    <div class="row gy-5 g-xl-8">
        <div class="col-xl-12">
            <!--begin::Tables Widget 3-->
            <div class="card card-xl-stretch mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="me-2 text-gray-800 mt-2 fs-6 text-uppercase">Liste des Evénements</span>
                        <span class="text-muted mt-1 fs-7">Au total {{$evenements->count()}} évenement(s)</span>
                    </h3>
                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
                                title="Cliquez pour ajouter un Evénement">
                                <a href="{{route('event-create')}}" class="btn fs-7 p-2 rounded-0 btn-light-primary">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2"
                                                rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->Nouvel évenement
                                </a>
                            </div>
                        <!--begin::Export dropdown-->
                        <button type="button" class="btn fs-7 p-2 rounded-0 btn-primary"data-kt-menu-trigger="click"
                            data-kt-menu-placement="bottom-end">
                            <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    style="height: 12px !important; width: 12px !important;"
                                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path
                                        d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32V274.7l-73.4-73.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0l128-128c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L288 274.7V32zM64 352c-35.3 0-64 28.7-64 64v32c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V416c0-35.3-28.7-64-64-64H346.5l-45.3 45.3c-25 25-65.5 25-90.5 0L165.5 352H64zm368 56a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"
                                        fill="black" />
                                </svg>
                            </span>
                            Exporter
                        </button>
                        <!--begin::Menu-->
                        <div id="kt_datatable_example_export_menu"
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-export="excel">
                                    Exporter sous Excel
                                </a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-export="pdf">
                                    Exporter au format PDF
                                </a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                        <!--end::Export dropdown-->

                        <!--begin::Hide default export buttons-->
                        <div id="kt_datatable_example_buttons" class="d-none"></div>
                        <!--end::Hide default export buttons -->
                    </div>
                </div>
                <!--end::Header-->
                
                <!--begin::Body-->
                <div class="card-body py-3">
                    <!-- Modal -->
<div class="modal fade" id="eventDetailsModal" tabindex="-1" aria-labelledby="eventDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="eventDetailsModalLabel">Détails de l'événement</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p id="eventDescription"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
                <!--end::Modal-->

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
                    @if (session('primary'))
                        <div class="alert alert-primary d-flex align-items-center p-5">
                            <!--begin::Icon-->
                            <i class="ki-duotone ki-shield-tick fs-2hx text-primary me-4"><span class="path1"></span><span
                                    class="path2"></span></i>
                            <!--end::Icon-->

                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column">
                                <!--begin::Title-->

                                <!--end::Title-->

                                <!--begin::Content-->
                                <span>{{ session('primary') }}</span>
                                <!--end::Content-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                    @endif
                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table id="pme_table" class="table table-bordered table-sm table-hover">
                            <!--begin::Table head-->
                            <thead class="bg-primary">
                                <tr class="fw-bolder text-white">
                                    <th class=" text-center">#</th>
                                    <th>
                                        Nom
                                    </th>
                                    <th>
                                        Image
                                    </th>
                                    <th>
                                        Date
                                    </th>
                                    <th>
                                        Lieu
                                    </th>
                                    <th>
                                        Heure
                                    </th>
                                    <th>Ville</th>
                                    <th>Catégorie</th>
                                    <th class="min-w-100px text-center">
                                        Mise en avant
                                    </th>
                                    <th class="min-w-100px text-end">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody>
                                @foreach ($evenements as $item)
                                <tr>
                                    <td class="text-center">
                                        {{ $loop->index + 1 }}
                                    </td>
                                    <td>{{ $item->nom }}</td>
                                    <td>@if($item->fichier)
                                        <img src="{{ asset('storage/Fichiers/' . $item->fichier) }}" alt="{{ $item->nom }}" style="width: 50px; height: auto;">
                                    @else
                                        Aucun fichier
                                    @endif
                                </td>
                                    <td>{{ $item->date }}</td>
                                    <td>{{ $item->lieu }}</td>
                                    <td>{{ $item->heure }}</td>
                                    <td>{{ $item->villes->name }}</td>
                                    <td>{{ $item->categories->name }}</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <form id="form-{{ $item->id }}" method="POST" action="{{ route('event-miseenavant', $item->id) }}">
                                                @csrf
                                                <div class="form-check form-switch center">
                                                    <input class="form-check-input"
                                                           type="checkbox"
                                                           role="switch"
                                                           id="flexSwitchCheckDefault{{ $item->id }}"
                                                           onclick="document.getElementById('form-{{ $item->id }}').submit()"
                                                           {{ $item->mise_en_avant ? 'checked' : '' }}> <!-- Condition ternaire pour définir l'attribut checked -->
                                                    <label class="form-check-label" for="flexSwitchCheckDefault{{ $item->id }}"></label>
                                                </div>
                                            </form>
                                            @error('mise_en_avant')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                        </div>
                                    </td>
                                    
                                    <td>
                                        <div class="d-flex justify-content-end flex-shrink-0">
                                            
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#eventDetailsModal"
                                            data-description="{{$item->description}}"
                                            title="Détails de l'événement: {{$item->description}}" class="btn btn-icon btn-bg-light btn-active-color-primary iconBtn me-1">
                                             <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                             <span class="svg-icon svg-icon-3">
                                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                     <path d="M12 4.5C7.30558 4.5 3.22702 7.42064 1.48929 12C3.22702 16.5794 7.30558 19.5 12 19.5C16.6944 19.5 20.773 16.5794 22.5107 12C20.773 7.42064 16.6944 4.5 12 4.5ZM12 17C9.23858 17 7 14.7614 7 12C7 9.23858 9.23858 7 12 7C14.7614 7 17 9.23858 17 12C17 14.7614 14.7614 17 12 17Z" fill="black" />
                                                     <path d="M12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9Z" fill="black" />
                                                 </svg>
                                             </span>
                                             <!--end::Svg Icon-->
                                         </a>
                                                <a href="{{route('event-edit', $item->id)}}" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-trigger="hover"
                                                    title="Modifier l'événement" data-bs-custom-class="tooltip-dark"
                                                    class="btn btn-icon btn-bg-light btn-active-color-primary iconBtn me-1">
                                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                    <span class="svg-icon svg-icon-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3"
                                                                d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                fill="black" />
                                                            <path
                                                                d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                fill="black" />
                                                        </svg>
                                                    </span>
                                                </a>
                                            
                                                <form id="deleteForm{{ $item->id }}" method="POST"
                                                    action="{{ route('event-delete', $item->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a type="button" onclick="confirmDelete('{{ $item->id }}')" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-trigger="hover"
                                                        title="Supprimer l'événement" data-bs-custom-class="tooltip-dark"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary iconBtn">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" fill="none">
                                                                <path
                                                                    d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                    fill="black" />
                                                                <path opacity="0.5"
                                                                    d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                    fill="black" />
                                                                <path opacity="0.5"
                                                                    d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                    fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                </form>
                                            
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table container-->
                </div>
                <!--begin::Body-->
            </div>
            <!--end::Tables Widget 3-->
        </div>
    </div>
    <!-- Modal create -->
@endsection
@section('script')
    <script>
        "use strict";

        // Class definition
        var KTDatatablesExample = function() {
            // Shared variables
            var table;
            var datatable;

            // Private functions
            var initDatatable = function() {
                // Set date data order
                const tableRows = table.querySelectorAll('tbody tr');

                tableRows.forEach(row => {
                    const dateRow = row.querySelectorAll('td');
                    const realDate = moment(dateRow[3].innerHTML, "DD MMM YYYY, LT")
                        .format(); // select date from 4th column in table
                    dateRow[3].setAttribute('data-order', realDate);
                });

                // Init datatable --- more info on datatables: https://datatables.net/manual/
                datatable = $(table).DataTable({
                    "info": false,
                    'order': [],
                    'pageLength': 10,
                });
            }

            // Hook export buttons
            var exportButtons = () => {
                const documentTitle = 'Rapport des pme';
                var buttons = new $.fn.dataTable.Buttons(table, {
                    buttons: [{
                            extend: 'copyHtml5',
                            title: documentTitle
                        },
                        {
                            extend: 'excelHtml5',
                            title: documentTitle
                        },
                        {
                            extend: 'csvHtml5',
                            title: documentTitle
                        },
                        {
                            extend: 'pdfHtml5',
                            title: documentTitle
                        }
                    ]
                }).container().appendTo($('#kt_datatable_example_buttons'));

                // Hook dropdown menu click event to datatable export buttons
                const exportButtons = document.querySelectorAll(
                    '#kt_datatable_example_export_menu [data-kt-export]');
                exportButtons.forEach(exportButton => {
                    exportButton.addEventListener('click', e => {
                        e.preventDefault();

                        // Get clicked export value
                        const exportValue = e.target.getAttribute('data-kt-export');
                        const target = document.querySelector('.dt-buttons .buttons-' +
                            exportValue);

                        // Trigger click event on hidden datatable export buttons
                        target.click();
                    });
                });
            }

            // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
            var handleSearchDatatable = () => {
                const filterSearch = document.querySelector('[data-kt-filter="search"]');
                filterSearch.addEventListener('keyup', function(e) {
                    datatable.search(e.target.value).draw();
                });
            }

            // Public methods
            return {
                init: function() {
                    table = document.querySelector('#pme_table');

                    if (!table) {
                        return;
                    }

                    // initDatatable();
                    exportButtons();
                    handleSearchDatatable();
                }
            };
        }();

        // On document ready
        KTUtil.onDOMContentLoaded(function() {
            KTDatatablesExample.init();
        });
        $("#pme_table").DataTable({
            "language": {
                info: 'Affichage de la page _PAGE_ sur _PAGES_',
                infoEmpty: 'Aucun enregistrement disponible',
                infoFiltered: '(filtré à partir de _MAX_ enregistrements totaux)',
                lengthMenu: 'Afficher _MENU_ par page',
                zeroRecords: 'Rien trouvé - désolé'
            },
            "dom": "<'row'" +
                "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
                ">" +

                "<'table-responsive'tr>" +

                "<'row'" +
                "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                ">"
        });
        function confirmDelete(formId) {
            Swal.fire({
                text: "Êtes-vous sûr de vouloir supprimer cet événement ?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#dc3545",
                cancelButtonColor: "#6c757d",
                confirmButtonText: "Oui, supprimer",
                cancelButtonText: "Annuler"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('deleteForm' + formId).submit();
                }
            });
        }

        document.addEventListener('DOMContentLoaded', function () {
        var eventDetailsModal = document.getElementById('eventDetailsModal');
        eventDetailsModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget; // Le bouton qui a déclenché le modal
            var description = button.getAttribute('data-description'); // Récupérer la description de l'attribut data-description
            
            // Mettre à jour le contenu du modal
            var modalDescription = eventDetailsModal.querySelector('#eventDescription');
            modalDescription.textContent = description;
        });

        
        
    });
    </script>
@endsection
