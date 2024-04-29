@extends('layouts.app')

@section('title')
    Tableau de bord
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item text-muted">
        <a href="/" class="text-muted">Acceuil</a>
    </li>
@endsection
@section('content')
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        <!--begin::Col-->
        <div class="col-xxl-12">
            <!--begin::Engage widget 8-->
            <div class="card border-0 h-md-100" data-bs-theme="light"
                style="background: linear-gradient(112.14deg, #7139ea7e 0%, #7239EA 100%)">
                <!--begin::Body-->
                <div class="card-body">
                    <!--begin::Row-->
                    <div class="row align-items-center h-100">
                        <!--begin::Col-->
                        <div class="col-7 ps-xl-13">
                            <!--begin::Title-->
                            <div class="text-white mb-6 pt-6">
                                <span class="fs-4 fw-semibold me-2 d-block lh-1 pb-2 opacity-75">Tableau de bord</span>

                                <span class="fs-2qx fw-bold">Bienvenue sur EVENTPULSE</span>
                            </div>
                            <!--end::Title-->

                            <!--begin::Text-->
                            <span class="fw-semibold text-white fs-6 mb-8 d-block opacity-75">
                                La meilleurs platforme pour gérer vos événements
                            </span>
                            <!--end::Text-->

                            <!--begin::Items-->
                            <div class="d-flex align-items-center flex-wrap d-grid gap-2 mb-10 mb-xl-20">
                                <!--begin::Item-->
                                <div class="d-flex align-items-center me-5 me-xl-13">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px symbol-circle me-3">
                                        <span class="symbol-label" style="background: #7239EA">
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z"
                                                        fill="black"></path>
                                                    <path
                                                        d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z"
                                                        fill="black"></path>
                                                    <path opacity="0.3"
                                                        d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z"
                                                        fill="black"></path>
                                                    <path opacity="0.3"
                                                        d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z"
                                                        fill="black"></path>
                                                </svg>
                                            </span>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->

                                    <!--begin::Info-->
                                    <div class="text-white">
                                        <span class="fw-semibold d-block fs-8 opacity-75">+20</span>
                                        <span class="fw-bold fs-7">Evénements</span>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Item-->

                                <!--begin::Item-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px symbol-circle me-3">
                                        <span class="symbol-label" style="background: #7239EA">
                                            <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/keenthemes/seven/docs/core/html/src/media/icons/duotune/maps/map006.svg-->
                                            <span class="svg-icon svg-icon-muted svg-icon-2"><svg width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17.5 7.89998L14.8 14.8L13.4 13.3999C14.2 12.5999 14.2 11.4001 13.4 10.6001C12.6 9.80006 11.4 9.80006 10.6 10.6001L9.20001 9.19991L16.1 6.49996C17 6.19996 17.8 6.99998 17.5 7.89998ZM12.7 11.3C12.3 10.9 11.7 10.9 11.3 11.3C10.9 11.7 10.9 12.2999 11.3 12.6999C11.7 13.0999 12.3 13.0999 12.7 12.6999C13.1 12.2999 13.1 11.7 12.7 11.3Z"
                                                        fill="currentColor" />
                                                    <path opacity="0.3"
                                                        d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM16.1 6.5L9.20001 9.19995L6.5 16.1001C6.2 17.0001 6.99999 17.8 7.89999 17.5L14.8 14.8L17.5 7.90002C17.8 7.00002 17 6.2 16.1 6.5Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Symbol-->

                                    <!--begin::Info-->
                                    <div class="text-white">
                                        <span class="fw-semibold opacity-75 d-block fs-8">+30</span>
                                        <span class="fw-bold fs-7">Villes</span>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Items-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-5 pt-10">
                            <!--begin::Illustration-->
                            <div class="bgi-no-repeat bgi-size-contain bgi-position-x-end h-225px"
                                style="background-image:url('{{ asset('/assets/media/illustrations/sigma-1/12.png') }}">
                            </div>
                            <!--end::Illustration-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Engage widget 8-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-12">

            <!--begin::Table widget 14-->
            <div class="card card-flush h-md-100">
                <!--begin::Header-->
                <div class="card-header pt-7">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-800">Liste des événements</span>

                        <span class="text-gray-500 mt-1 fw-semibold fs-6">Updated 37 minutes ago</span>
                    </h3>
                    <!--end::Title-->

                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div class="card-body pt-6">
                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-bordered table-sm table-hover">
                            <!--begin::Table head-->
                            <thead class="bg-primary">
                                <tr class="fs-7 fw-bold text-white border-bottom-0">
                                    <th class="p-0 pb-3 min-w-175px text-start">Nom</th>
                                    <th class="p-0 pb-3 min-w-100px text-end">Date</th>
                                    <th class="p-0 pb-3 min-w-100px text-end">Lieu</th>
                                    <th class="p-0 pb-3 min-w-175px text-end pe-12">Heure</th>
                                    <th class="p-0 pb-3 w-125px text-end pe-7">Ville</th>
                                    <th class="p-0 pb-3 w-50px text-end">Catégorie</th>
                                </tr>
                            </thead>
                            <!--end::Table head-->

                            <!--begin::Table body-->
                            <tbody>

                               
                            </tbody>
                            <!--end::Table body-->
                        </table>
                    </div>
                    <!--end::Table-->
                </div>
                <!--end: Card Body-->
            </div>
            <!--end::Table widget 14-->
        </div>
        <!--end::Col-->
    </div>
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