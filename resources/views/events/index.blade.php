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
                        <span class="text-muted mt-1 fs-7">Au total 0 pme(s)</span>
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
                                <a href="#" class="menu-link px-3" data-kt-export="copy">
                                    Copier dans le presse-papier
                                </a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-export="excel">
                                    Exporter sous Excel
                                </a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-kt-export="csv">
                                    Exporter au format CSV
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
                                    <th class="text-start">#</th>
                                    <th>
                                        Nom
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
                                        <td>
                                            {{ $loop->index + 1 }}
                                        </td>
                                        <td>{{ $item->nom }}</td>
                                        <td>{{ $item->date }}</td>
                                        <td>{{ $item->lieu }}</td>
                                        <td>{{ $item->heure }}</td>
                                        <td>{{ $item->ville }}</td>
                                        <td>{{ $item->ville }}</td>
                                        <td>
                                            <div class="d-flex justify-content-end flex-shrink-0">
                                                    <a href="#"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary iconBtn me-1" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-trigger="hover"
                                                        title="Moyens roulants" data-bs-custom-class="tooltip-dark">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                                <path  fill="black"
                                                                    d="M368.6 96l76.8 96H288V96h80.6zM224 80V192H64c-17.7 0-32 14.3-32 32v64c-17.7 0-32 14.3-32 32s14.3 32 32 32H65.1c-.7 5.2-1.1 10.6-1.1 16c0 61.9 50.1 112 112 112s112-50.1 112-112c0-5.4-.4-10.8-1.1-16h66.3c-.7 5.2-1.1 10.6-1.1 16c0 61.9 50.1 112 112 112s112-50.1 112-112c0-5.4-.4-10.8-1.1-16H608c17.7 0 32-14.3 32-32s-14.3-32-32-32V224c0-17.7-14.3-32-32-32H527.4L418.6 56c-12.1-15.2-30.5-24-50-24H272c-26.5 0-48 21.5-48 48zm0 288a48 48 0 1 1 -96 0 48 48 0 1 1 96 0zm288 0a48 48 0 1 1 -96 0 48 48 0 1 1 96 0z" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-trigger="hover"
                                                        title="Détails de l'événement" data-bs-custom-class="tooltip-dark"
                                                        class="btn btn-icon btn-bg-light btn-active-color-primary iconBtn me-1">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <path
                                                                    d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                                    fill="black" />
                                                                <path opacity="0.3"
                                                                    d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                                    fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-trigger="hover"
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
                                                @can('sgds_delete-pme')
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
                                                                    height="24" viewBox="0 0 24 24" fill="none">
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
                                                @endcan
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
    </script>
    <script>
        function confirmDelete(formId) {
            Swal.fire({
                text: "Êtes-vous sûr de vouloir supprimer cette entreprise ?",
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
    </script>
@endsection
