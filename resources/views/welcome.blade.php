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

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50px me-3">
                                                <img src="/seven-html-pro/assets/media/stock/600x600/img-49.jpg"
                                                    class="" alt="">
                                            </div>

                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#"
                                                    class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Mivy
                                                    App</a>
                                                <span class="text-gray-500 fw-semibold d-block fs-7">Jane Cooper</span>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="text-end pe-0">
                                        <span class="text-gray-600 fw-bold fs-6">$32,400</span>
                                    </td>

                                    <td class="text-end pe-0">
                                        <!--begin::Label-->
                                        <span class="badge badge-light-success fs-base">
                                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span
                                                    class="path1"></span><span class="path2"></span></i>
                                            9.2%
                                        </span>
                                        <!--end::Label-->

                                    </td>

                                    <td class="text-end pe-12">
                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">In Process</span>
                                    </td>

                                    <td class="text-end pe-0">
                                        <div id="kt_table_widget_14_chart_1" class="h-50px mt-n8 pe-7"
                                            data-kt-chart-color="success" style="min-height: 50px;">
                                            <div id="apexchartszeag3e64"
                                                class="apexcharts-canvas apexchartszeag3e64 apexcharts-theme-light"
                                                style="width: 92.25px; height: 50px;"><svg id="SvgjsSvg1956" width="92.25"
                                                    height="50" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                    style="background: transparent;">
                                                    <foreignObject x="0" y="0" width="92.25" height="50">
                                                        <div class="apexcharts-legend"
                                                            xmlns="http://www.w3.org/1999/xhtml"
                                                            style="max-height: 25px;"></div>
                                                    </foreignObject>
                                                    <g id="SvgjsG2004" class="apexcharts-yaxis" rel="0"
                                                        transform="translate(-18, 0)"></g>
                                                    <g id="SvgjsG1958" class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(0, 1)">
                                                        <defs id="SvgjsDefs1957">
                                                            <clipPath id="gridRectMaskzeag3e64">
                                                                <rect id="SvgjsRect1961" width="98.25" height="60"
                                                                    x="-4" y="-6" rx="0" ry="0"
                                                                    opacity="1" stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMaskzeag3e64"></clipPath>
                                                            <clipPath id="nonForecastMaskzeag3e64"></clipPath>
                                                            <clipPath id="gridRectMarkerMaskzeag3e64">
                                                                <rect id="SvgjsRect1962" width="96.25" height="52"
                                                                    x="-2" y="-2" rx="0" ry="0"
                                                                    opacity="1" stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                        </defs>
                                                        <g id="SvgjsG1969" class="apexcharts-grid">
                                                            <g id="SvgjsG1970" class="apexcharts-gridlines-horizontal"
                                                                style="display: none;">
                                                                <line id="SvgjsLine1973" x1="0" y1="0"
                                                                    x2="92.25" y2="0" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1974" x1="0" y1="4.8"
                                                                    x2="92.25" y2="4.8" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1975" x1="0" y1="9.6"
                                                                    x2="92.25" y2="9.6" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1976" x1="0"
                                                                    y1="14.399999999999999" x2="92.25"
                                                                    y2="14.399999999999999" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1977" x1="0" y1="19.2"
                                                                    x2="92.25" y2="19.2" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1978" x1="0" y1="24"
                                                                    x2="92.25" y2="24" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1979" x1="0" y1="28.8"
                                                                    x2="92.25" y2="28.8" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1980" x1="0" y1="33.6"
                                                                    x2="92.25" y2="33.6" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1981" x1="0" y1="38.4"
                                                                    x2="92.25" y2="38.4" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1982" x1="0"
                                                                    y1="43.199999999999996" x2="92.25"
                                                                    y2="43.199999999999996" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine1983" x1="0"
                                                                    y1="47.99999999999999" x2="92.25"
                                                                    y2="47.99999999999999" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                            </g>
                                                            <g id="SvgjsG1971" class="apexcharts-gridlines-vertical"
                                                                style="display: none;"></g>
                                                            <line id="SvgjsLine1985" x1="0" y1="48"
                                                                x2="92.25" y2="48" stroke="transparent"
                                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            <line id="SvgjsLine1984" x1="0" y1="1"
                                                                x2="0" y2="48" stroke="transparent"
                                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        </g>
                                                        <g id="SvgjsG1972" class="apexcharts-grid-borders"
                                                            style="display: none;"></g>
                                                        <g id="SvgjsG1963"
                                                            class="apexcharts-area-series apexcharts-plot-series">
                                                            <g id="SvgjsG1964" class="apexcharts-series" zIndex="0"
                                                                seriesName="NetxProfit" data:longestSeries="true"
                                                                rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath1967"
                                                                    d="M 0 48 L 0 42.4C1.061294121737277, 42.04105824825796, 4.760455166587203, 39.736680040460776, 7.096153846153847, 40Q12.48379152410298, 45.05937262678926, 14.192307692307693, 44Q18.930568926364927, 31.33291101986886, 21.28846153846154, 31.2Q26.589586070888846, 42.18816775811621, 28.384615384615387, 43.2Q33.12287661867262, 39.067088980131146, 35.48076923076923, 39.2Q40.954070854274654, 45.09773418637682, 42.57692307692308, 44Q47.307692307692314, 29.6, 49.67307692307693, 29.6Q55.14637854658235, 42.90226581362318, 56.769230769230774, 44Q62.32640571001633, 40.32775039569536, 63.86538461538462, 39.2Q68.71058905184252, 33.092468859385626, 70.96153846153847, 33.6Q75.75806939865741, 42.78887932120264, 78.0576923076923, 42.4Q83.03125791037161, 31.917883503484074, 85.15384615384616, 31.2Q91.59781051260946, 37.01179224551878, 92.25, 37.6 L 92.25 48 L 0 48M 0 42.4z"
                                                                    fill="rgba(255,255,255,1)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-area" index="0"
                                                                    clip-path="url(#gridRectMaskzeag3e64)"
                                                                    pathTo="M 0 48 L 0 42.4C1.061294121737277, 42.04105824825796, 4.760455166587203, 39.736680040460776, 7.096153846153847, 40Q12.48379152410298, 45.05937262678926, 14.192307692307693, 44Q18.930568926364927, 31.33291101986886, 21.28846153846154, 31.2Q26.589586070888846, 42.18816775811621, 28.384615384615387, 43.2Q33.12287661867262, 39.067088980131146, 35.48076923076923, 39.2Q40.954070854274654, 45.09773418637682, 42.57692307692308, 44Q47.307692307692314, 29.6, 49.67307692307693, 29.6Q55.14637854658235, 42.90226581362318, 56.769230769230774, 44Q62.32640571001633, 40.32775039569536, 63.86538461538462, 39.2Q68.71058905184252, 33.092468859385626, 70.96153846153847, 33.6Q75.75806939865741, 42.78887932120264, 78.0576923076923, 42.4Q83.03125791037161, 31.917883503484074, 85.15384615384616, 31.2Q91.59781051260946, 37.01179224551878, 92.25, 37.6 L 92.25 48 L 0 48M 0 42.4z"
                                                                    pathFrom="M -1 48 L -1 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48">
                                                                </path>
                                                                <path id="SvgjsPath1968"
                                                                    d="M 0 42.4C1.061294121737277, 42.04105824825796, 4.760455166587203, 39.736680040460776, 7.096153846153847, 40Q12.48379152410298, 45.05937262678926, 14.192307692307693, 44Q18.930568926364927, 31.33291101986886, 21.28846153846154, 31.2Q26.589586070888846, 42.18816775811621, 28.384615384615387, 43.2Q33.12287661867262, 39.067088980131146, 35.48076923076923, 39.2Q40.954070854274654, 45.09773418637682, 42.57692307692308, 44Q47.307692307692314, 29.6, 49.67307692307693, 29.6Q55.14637854658235, 42.90226581362318, 56.769230769230774, 44Q62.32640571001633, 40.32775039569536, 63.86538461538462, 39.2Q68.71058905184252, 33.092468859385626, 70.96153846153847, 33.6Q75.75806939865741, 42.78887932120264, 78.0576923076923, 42.4Q83.03125791037161, 31.917883503484074, 85.15384615384616, 31.2Q91.59781051260946, 37.01179224551878, 92.25, 37.6"
                                                                    fill="none" fill-opacity="1" stroke="#50cd89"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="2" stroke-dasharray="0"
                                                                    class="apexcharts-area" index="0"
                                                                    clip-path="url(#gridRectMaskzeag3e64)"
                                                                    pathTo="M 0 42.4C1.061294121737277, 42.04105824825796, 4.760455166587203, 39.736680040460776, 7.096153846153847, 40Q12.48379152410298, 45.05937262678926, 14.192307692307693, 44Q18.930568926364927, 31.33291101986886, 21.28846153846154, 31.2Q26.589586070888846, 42.18816775811621, 28.384615384615387, 43.2Q33.12287661867262, 39.067088980131146, 35.48076923076923, 39.2Q40.954070854274654, 45.09773418637682, 42.57692307692308, 44Q47.307692307692314, 29.6, 49.67307692307693, 29.6Q55.14637854658235, 42.90226581362318, 56.769230769230774, 44Q62.32640571001633, 40.32775039569536, 63.86538461538462, 39.2Q68.71058905184252, 33.092468859385626, 70.96153846153847, 33.6Q75.75806939865741, 42.78887932120264, 78.0576923076923, 42.4Q83.03125791037161, 31.917883503484074, 85.15384615384616, 31.2Q91.59781051260946, 37.01179224551878, 92.25, 37.6"
                                                                    pathFrom="M -1 48 L -1 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48"
                                                                    fill-rule="evenodd"></path>
                                                                <g id="SvgjsG1965"
                                                                    class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                    data:realIndex="0"></g>
                                                            </g>
                                                            <g id="SvgjsG1966" class="apexcharts-datalabels"
                                                                data:realIndex="0"></g>
                                                        </g>
                                                        <line id="SvgjsLine1986" x1="0" y1="0"
                                                            x2="92.25" y2="0" stroke="#b6b6b6"
                                                            stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine1987" x1="0" y1="0"
                                                            x2="92.25" y2="0" stroke-dasharray="0"
                                                            stroke-width="0" stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g id="SvgjsG1988" class="apexcharts-xaxis"
                                                            transform="translate(0, 0)">
                                                            <g id="SvgjsG1989" class="apexcharts-xaxis-texts-g"
                                                                transform="translate(0, 4)"></g>
                                                        </g>
                                                        <g id="SvgjsG2005" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG2006" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG2007" class="apexcharts-point-annotations"></g>
                                                    </g>
                                                </svg></div>
                                        </div>
                                    </td>

                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i> </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50px me-3">
                                                <img src="/seven-html-pro/assets/media/stock/600x600/img-40.jpg"
                                                    class="" alt="">
                                            </div>

                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#"
                                                    class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Avionica</a>
                                                <span class="text-gray-500 fw-semibold d-block fs-7">Esther Howard</span>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="text-end pe-0">
                                        <span class="text-gray-600 fw-bold fs-6">$256,910</span>
                                    </td>

                                    <td class="text-end pe-0">
                                        <!--begin::Label-->
                                        <span class="badge badge-light-danger fs-base">
                                            <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1"><span
                                                    class="path1"></span><span class="path2"></span></i>
                                            0.4%
                                        </span>
                                        <!--end::Label-->

                                    </td>

                                    <td class="text-end pe-12">
                                        <span class="badge py-3 px-4 fs-7 badge-light-warning">On Hold</span>
                                    </td>

                                    <td class="text-end pe-0">
                                        <div id="kt_table_widget_14_chart_2" class="h-50px mt-n8 pe-7"
                                            data-kt-chart-color="danger" style="min-height: 50px;">
                                            <div id="apexchartsn4e9zsf1"
                                                class="apexcharts-canvas apexchartsn4e9zsf1 apexcharts-theme-light"
                                                style="width: 92.25px; height: 50px;"><svg id="SvgjsSvg2008"
                                                    width="92.25" height="50" xmlns="http://www.w3.org/2000/svg"
                                                    version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                    style="background: transparent;">
                                                    <foreignObject x="0" y="0" width="92.25" height="50">
                                                        <div class="apexcharts-legend"
                                                            xmlns="http://www.w3.org/1999/xhtml"
                                                            style="max-height: 25px;"></div>
                                                    </foreignObject>
                                                    <g id="SvgjsG2056" class="apexcharts-yaxis" rel="0"
                                                        transform="translate(-18, 0)"></g>
                                                    <g id="SvgjsG2010" class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(0, 1)">
                                                        <defs id="SvgjsDefs2009">
                                                            <clipPath id="gridRectMaskn4e9zsf1">
                                                                <rect id="SvgjsRect2013" width="98.25" height="60"
                                                                    x="-4" y="-6" rx="0" ry="0"
                                                                    opacity="1" stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMaskn4e9zsf1"></clipPath>
                                                            <clipPath id="nonForecastMaskn4e9zsf1"></clipPath>
                                                            <clipPath id="gridRectMarkerMaskn4e9zsf1">
                                                                <rect id="SvgjsRect2014" width="96.25" height="52"
                                                                    x="-2" y="-2" rx="0" ry="0"
                                                                    opacity="1" stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                        </defs>
                                                        <g id="SvgjsG2021" class="apexcharts-grid">
                                                            <g id="SvgjsG2022" class="apexcharts-gridlines-horizontal"
                                                                style="display: none;">
                                                                <line id="SvgjsLine2025" x1="0" y1="0"
                                                                    x2="92.25" y2="0" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2026" x1="0" y1="4.8"
                                                                    x2="92.25" y2="4.8" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2027" x1="0" y1="9.6"
                                                                    x2="92.25" y2="9.6" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2028" x1="0"
                                                                    y1="14.399999999999999" x2="92.25"
                                                                    y2="14.399999999999999" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2029" x1="0" y1="19.2"
                                                                    x2="92.25" y2="19.2" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2030" x1="0" y1="24"
                                                                    x2="92.25" y2="24" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2031" x1="0" y1="28.8"
                                                                    x2="92.25" y2="28.8" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2032" x1="0" y1="33.6"
                                                                    x2="92.25" y2="33.6" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2033" x1="0" y1="38.4"
                                                                    x2="92.25" y2="38.4" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2034" x1="0"
                                                                    y1="43.199999999999996" x2="92.25"
                                                                    y2="43.199999999999996" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2035" x1="0"
                                                                    y1="47.99999999999999" x2="92.25"
                                                                    y2="47.99999999999999" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                            </g>
                                                            <g id="SvgjsG2023" class="apexcharts-gridlines-vertical"
                                                                style="display: none;"></g>
                                                            <line id="SvgjsLine2037" x1="0" y1="48"
                                                                x2="92.25" y2="48" stroke="transparent"
                                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            <line id="SvgjsLine2036" x1="0" y1="1"
                                                                x2="0" y2="48" stroke="transparent"
                                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        </g>
                                                        <g id="SvgjsG2024" class="apexcharts-grid-borders"
                                                            style="display: none;"></g>
                                                        <g id="SvgjsG2015"
                                                            class="apexcharts-area-series apexcharts-plot-series">
                                                            <g id="SvgjsG2016" class="apexcharts-series" zIndex="0"
                                                                seriesName="NetxProfit" data:longestSeries="true"
                                                                rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath2019"
                                                                    d="M 0 48 L 0 34.4C0.41788426919631205, 34.96533286499403, 4.973565602679292, 44.717883503484074, 7.096153846153847, 44Q11.892684783272795, 29.211120678797354, 14.192307692307693, 29.6Q18.952762858894896, 46.13668004046078, 21.28846153846154, 46.4Q26.3378919619225, 32.00759601719264, 28.384615384615387, 31.2Q33.22981982107328, 40.29246885938562, 35.48076923076923, 40.8Q41.11930446495521, 35.55029414581312, 42.57692307692308, 34.4Q48.13409801770864, 28.472249604304647, 49.67307692307693, 29.6Q54.41133815713416, 44.93291101986886, 56.769230769230774, 44.8Q61.67406805146384, 29.4176068364438, 63.86538461538462, 28.8Q68.91481503884557, 39.99240398280736, 70.96153846153847, 40.8Q76.43484008504389, 35.49773418637682, 78.0576923076923, 34.4Q83.35881684011962, 30.188167758116204, 85.15384615384616, 31.2Q91.91122581289721, 41.86530599845891, 92.25, 42.4 L 92.25 48 L 0 48M 0 34.4z"
                                                                    fill="rgba(255,255,255,1)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-area" index="0"
                                                                    clip-path="url(#gridRectMaskn4e9zsf1)"
                                                                    pathTo="M 0 48 L 0 34.4C0.41788426919631205, 34.96533286499403, 4.973565602679292, 44.717883503484074, 7.096153846153847, 44Q11.892684783272795, 29.211120678797354, 14.192307692307693, 29.6Q18.952762858894896, 46.13668004046078, 21.28846153846154, 46.4Q26.3378919619225, 32.00759601719264, 28.384615384615387, 31.2Q33.22981982107328, 40.29246885938562, 35.48076923076923, 40.8Q41.11930446495521, 35.55029414581312, 42.57692307692308, 34.4Q48.13409801770864, 28.472249604304647, 49.67307692307693, 29.6Q54.41133815713416, 44.93291101986886, 56.769230769230774, 44.8Q61.67406805146384, 29.4176068364438, 63.86538461538462, 28.8Q68.91481503884557, 39.99240398280736, 70.96153846153847, 40.8Q76.43484008504389, 35.49773418637682, 78.0576923076923, 34.4Q83.35881684011962, 30.188167758116204, 85.15384615384616, 31.2Q91.91122581289721, 41.86530599845891, 92.25, 42.4 L 92.25 48 L 0 48M 0 34.4z"
                                                                    pathFrom="M -1 48 L -1 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48">
                                                                </path>
                                                                <path id="SvgjsPath2020"
                                                                    d="M 0 34.4C0.41788426919631205, 34.96533286499403, 4.973565602679292, 44.717883503484074, 7.096153846153847, 44Q11.892684783272795, 29.211120678797354, 14.192307692307693, 29.6Q18.952762858894896, 46.13668004046078, 21.28846153846154, 46.4Q26.3378919619225, 32.00759601719264, 28.384615384615387, 31.2Q33.22981982107328, 40.29246885938562, 35.48076923076923, 40.8Q41.11930446495521, 35.55029414581312, 42.57692307692308, 34.4Q48.13409801770864, 28.472249604304647, 49.67307692307693, 29.6Q54.41133815713416, 44.93291101986886, 56.769230769230774, 44.8Q61.67406805146384, 29.4176068364438, 63.86538461538462, 28.8Q68.91481503884557, 39.99240398280736, 70.96153846153847, 40.8Q76.43484008504389, 35.49773418637682, 78.0576923076923, 34.4Q83.35881684011962, 30.188167758116204, 85.15384615384616, 31.2Q91.91122581289721, 41.86530599845891, 92.25, 42.4"
                                                                    fill="none" fill-opacity="1" stroke="#f1416c"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="2" stroke-dasharray="0"
                                                                    class="apexcharts-area" index="0"
                                                                    clip-path="url(#gridRectMaskn4e9zsf1)"
                                                                    pathTo="M 0 34.4C0.41788426919631205, 34.96533286499403, 4.973565602679292, 44.717883503484074, 7.096153846153847, 44Q11.892684783272795, 29.211120678797354, 14.192307692307693, 29.6Q18.952762858894896, 46.13668004046078, 21.28846153846154, 46.4Q26.3378919619225, 32.00759601719264, 28.384615384615387, 31.2Q33.22981982107328, 40.29246885938562, 35.48076923076923, 40.8Q41.11930446495521, 35.55029414581312, 42.57692307692308, 34.4Q48.13409801770864, 28.472249604304647, 49.67307692307693, 29.6Q54.41133815713416, 44.93291101986886, 56.769230769230774, 44.8Q61.67406805146384, 29.4176068364438, 63.86538461538462, 28.8Q68.91481503884557, 39.99240398280736, 70.96153846153847, 40.8Q76.43484008504389, 35.49773418637682, 78.0576923076923, 34.4Q83.35881684011962, 30.188167758116204, 85.15384615384616, 31.2Q91.91122581289721, 41.86530599845891, 92.25, 42.4"
                                                                    pathFrom="M -1 48 L -1 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48"
                                                                    fill-rule="evenodd"></path>
                                                                <g id="SvgjsG2017"
                                                                    class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                    data:realIndex="0"></g>
                                                            </g>
                                                            <g id="SvgjsG2018" class="apexcharts-datalabels"
                                                                data:realIndex="0"></g>
                                                        </g>
                                                        <line id="SvgjsLine2038" x1="0" y1="0"
                                                            x2="92.25" y2="0" stroke="#b6b6b6"
                                                            stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine2039" x1="0" y1="0"
                                                            x2="92.25" y2="0" stroke-dasharray="0"
                                                            stroke-width="0" stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g id="SvgjsG2040" class="apexcharts-xaxis"
                                                            transform="translate(0, 0)">
                                                            <g id="SvgjsG2041" class="apexcharts-xaxis-texts-g"
                                                                transform="translate(0, 4)"></g>
                                                        </g>
                                                        <g id="SvgjsG2057" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG2058" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG2059" class="apexcharts-point-annotations"></g>
                                                    </g>
                                                </svg></div>
                                        </div>
                                    </td>

                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i> </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50px me-3">
                                                <img src="/seven-html-pro/assets/media/stock/600x600/img-39.jpg"
                                                    class="" alt="">
                                            </div>

                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#"
                                                    class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Charto
                                                    CRM</a>
                                                <span class="text-gray-500 fw-semibold d-block fs-7">Jenny Wilson</span>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="text-end pe-0">
                                        <span class="text-gray-600 fw-bold fs-6">$8,220</span>
                                    </td>

                                    <td class="text-end pe-0">
                                        <!--begin::Label-->
                                        <span class="badge badge-light-success fs-base">
                                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span
                                                    class="path1"></span><span class="path2"></span></i>
                                            9.2%
                                        </span>
                                        <!--end::Label-->

                                    </td>

                                    <td class="text-end pe-12">
                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">In Process</span>
                                    </td>

                                    <td class="text-end pe-0">
                                        <div id="kt_table_widget_14_chart_3" class="h-50px mt-n8 pe-7"
                                            data-kt-chart-color="success" style="min-height: 50px;">
                                            <div id="apexcharts28vucdcf"
                                                class="apexcharts-canvas apexcharts28vucdcf apexcharts-theme-light"
                                                style="width: 92.25px; height: 50px;"><svg id="SvgjsSvg2060"
                                                    width="92.25" height="50" xmlns="http://www.w3.org/2000/svg"
                                                    version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                    style="background: transparent;">
                                                    <foreignObject x="0" y="0" width="92.25" height="50">
                                                        <div class="apexcharts-legend"
                                                            xmlns="http://www.w3.org/1999/xhtml"
                                                            style="max-height: 25px;"></div>
                                                    </foreignObject>
                                                    <g id="SvgjsG2108" class="apexcharts-yaxis" rel="0"
                                                        transform="translate(-18, 0)"></g>
                                                    <g id="SvgjsG2062" class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(0, 1)">
                                                        <defs id="SvgjsDefs2061">
                                                            <clipPath id="gridRectMask28vucdcf">
                                                                <rect id="SvgjsRect2065" width="98.25" height="60"
                                                                    x="-4" y="-6" rx="0" ry="0"
                                                                    opacity="1" stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMask28vucdcf"></clipPath>
                                                            <clipPath id="nonForecastMask28vucdcf"></clipPath>
                                                            <clipPath id="gridRectMarkerMask28vucdcf">
                                                                <rect id="SvgjsRect2066" width="96.25" height="52"
                                                                    x="-2" y="-2" rx="0" ry="0"
                                                                    opacity="1" stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                        </defs>
                                                        <g id="SvgjsG2073" class="apexcharts-grid">
                                                            <g id="SvgjsG2074" class="apexcharts-gridlines-horizontal"
                                                                style="display: none;">
                                                                <line id="SvgjsLine2077" x1="0" y1="0"
                                                                    x2="92.25" y2="0" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2078" x1="0" y1="4.8"
                                                                    x2="92.25" y2="4.8" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2079" x1="0" y1="9.6"
                                                                    x2="92.25" y2="9.6" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2080" x1="0"
                                                                    y1="14.399999999999999" x2="92.25"
                                                                    y2="14.399999999999999" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2081" x1="0" y1="19.2"
                                                                    x2="92.25" y2="19.2" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2082" x1="0" y1="24"
                                                                    x2="92.25" y2="24" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2083" x1="0" y1="28.8"
                                                                    x2="92.25" y2="28.8" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2084" x1="0" y1="33.6"
                                                                    x2="92.25" y2="33.6" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2085" x1="0" y1="38.4"
                                                                    x2="92.25" y2="38.4" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2086" x1="0"
                                                                    y1="43.199999999999996" x2="92.25"
                                                                    y2="43.199999999999996" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2087" x1="0"
                                                                    y1="47.99999999999999" x2="92.25"
                                                                    y2="47.99999999999999" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                            </g>
                                                            <g id="SvgjsG2075" class="apexcharts-gridlines-vertical"
                                                                style="display: none;"></g>
                                                            <line id="SvgjsLine2089" x1="0" y1="48"
                                                                x2="92.25" y2="48" stroke="transparent"
                                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            <line id="SvgjsLine2088" x1="0" y1="1"
                                                                x2="0" y2="48" stroke="transparent"
                                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        </g>
                                                        <g id="SvgjsG2076" class="apexcharts-grid-borders"
                                                            style="display: none;"></g>
                                                        <g id="SvgjsG2067"
                                                            class="apexcharts-area-series apexcharts-plot-series">
                                                            <g id="SvgjsG2068" class="apexcharts-series" zIndex="0"
                                                                seriesName="NetxProfit" data:longestSeries="true"
                                                                rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath2071"
                                                                    d="M 0 48 L 0 46.4C0.16537738632895943, 45.98982822772828, 4.7965309371189475, 29.18887932120265, 7.096153846153847, 28.8Q12.145584269614808, 43.19240398280736, 14.192307692307693, 44Q18.952762858894896, 34.66331995953922, 21.28846153846154, 34.4Q27.00531672028107, 41.23376373096936, 28.384615384615387, 42.4Q33.289452666848454, 47.0176068364438, 35.48076923076923, 46.4Q41.64488727897258, 39.55582542314945, 42.57692307692308, 38.4Q47.62635350038404, 27.99240398280736, 49.67307692307693, 28.8Q54.40384615384616, 44, 56.769230769230774, 44Q61.56576170634972, 28.411120678797353, 63.86538461538462, 28.8Q69.65715948675738, 45.22358449103755, 70.96153846153847, 46.4Q76.26266299396576, 42.611832241883796, 78.0576923076923, 41.6Q82.79595354174954, 38.267088980131135, 85.15384615384616, 38.4Q91.35248534313673, 41.8940838790581, 92.25, 42.4 L 92.25 48 L 0 48M 0 46.4z"
                                                                    fill="rgba(255,255,255,1)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-area" index="0"
                                                                    clip-path="url(#gridRectMask28vucdcf)"
                                                                    pathTo="M 0 48 L 0 46.4C0.16537738632895943, 45.98982822772828, 4.7965309371189475, 29.18887932120265, 7.096153846153847, 28.8Q12.145584269614808, 43.19240398280736, 14.192307692307693, 44Q18.952762858894896, 34.66331995953922, 21.28846153846154, 34.4Q27.00531672028107, 41.23376373096936, 28.384615384615387, 42.4Q33.289452666848454, 47.0176068364438, 35.48076923076923, 46.4Q41.64488727897258, 39.55582542314945, 42.57692307692308, 38.4Q47.62635350038404, 27.99240398280736, 49.67307692307693, 28.8Q54.40384615384616, 44, 56.769230769230774, 44Q61.56576170634972, 28.411120678797353, 63.86538461538462, 28.8Q69.65715948675738, 45.22358449103755, 70.96153846153847, 46.4Q76.26266299396576, 42.611832241883796, 78.0576923076923, 41.6Q82.79595354174954, 38.267088980131135, 85.15384615384616, 38.4Q91.35248534313673, 41.8940838790581, 92.25, 42.4 L 92.25 48 L 0 48M 0 46.4z"
                                                                    pathFrom="M -1 48 L -1 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48">
                                                                </path>
                                                                <path id="SvgjsPath2072"
                                                                    d="M 0 46.4C0.16537738632895943, 45.98982822772828, 4.7965309371189475, 29.18887932120265, 7.096153846153847, 28.8Q12.145584269614808, 43.19240398280736, 14.192307692307693, 44Q18.952762858894896, 34.66331995953922, 21.28846153846154, 34.4Q27.00531672028107, 41.23376373096936, 28.384615384615387, 42.4Q33.289452666848454, 47.0176068364438, 35.48076923076923, 46.4Q41.64488727897258, 39.55582542314945, 42.57692307692308, 38.4Q47.62635350038404, 27.99240398280736, 49.67307692307693, 28.8Q54.40384615384616, 44, 56.769230769230774, 44Q61.56576170634972, 28.411120678797353, 63.86538461538462, 28.8Q69.65715948675738, 45.22358449103755, 70.96153846153847, 46.4Q76.26266299396576, 42.611832241883796, 78.0576923076923, 41.6Q82.79595354174954, 38.267088980131135, 85.15384615384616, 38.4Q91.35248534313673, 41.8940838790581, 92.25, 42.4"
                                                                    fill="none" fill-opacity="1" stroke="#50cd89"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="2" stroke-dasharray="0"
                                                                    class="apexcharts-area" index="0"
                                                                    clip-path="url(#gridRectMask28vucdcf)"
                                                                    pathTo="M 0 46.4C0.16537738632895943, 45.98982822772828, 4.7965309371189475, 29.18887932120265, 7.096153846153847, 28.8Q12.145584269614808, 43.19240398280736, 14.192307692307693, 44Q18.952762858894896, 34.66331995953922, 21.28846153846154, 34.4Q27.00531672028107, 41.23376373096936, 28.384615384615387, 42.4Q33.289452666848454, 47.0176068364438, 35.48076923076923, 46.4Q41.64488727897258, 39.55582542314945, 42.57692307692308, 38.4Q47.62635350038404, 27.99240398280736, 49.67307692307693, 28.8Q54.40384615384616, 44, 56.769230769230774, 44Q61.56576170634972, 28.411120678797353, 63.86538461538462, 28.8Q69.65715948675738, 45.22358449103755, 70.96153846153847, 46.4Q76.26266299396576, 42.611832241883796, 78.0576923076923, 41.6Q82.79595354174954, 38.267088980131135, 85.15384615384616, 38.4Q91.35248534313673, 41.8940838790581, 92.25, 42.4"
                                                                    pathFrom="M -1 48 L -1 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48"
                                                                    fill-rule="evenodd"></path>
                                                                <g id="SvgjsG2069"
                                                                    class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                    data:realIndex="0"></g>
                                                            </g>
                                                            <g id="SvgjsG2070" class="apexcharts-datalabels"
                                                                data:realIndex="0"></g>
                                                        </g>
                                                        <line id="SvgjsLine2090" x1="0" y1="0"
                                                            x2="92.25" y2="0" stroke="#b6b6b6"
                                                            stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine2091" x1="0" y1="0"
                                                            x2="92.25" y2="0" stroke-dasharray="0"
                                                            stroke-width="0" stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g id="SvgjsG2092" class="apexcharts-xaxis"
                                                            transform="translate(0, 0)">
                                                            <g id="SvgjsG2093" class="apexcharts-xaxis-texts-g"
                                                                transform="translate(0, 4)"></g>
                                                        </g>
                                                        <g id="SvgjsG2109" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG2110" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG2111" class="apexcharts-point-annotations"></g>
                                                    </g>
                                                </svg></div>
                                        </div>
                                    </td>

                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i> </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50px me-3">
                                                <img src="/seven-html-pro/assets/media/stock/600x600/img-47.jpg"
                                                    class="" alt="">
                                            </div>

                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#"
                                                    class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Tower
                                                    Hill</a>
                                                <span class="text-gray-500 fw-semibold d-block fs-7">Cody Fisher</span>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="text-end pe-0">
                                        <span class="text-gray-600 fw-bold fs-6">$74,000</span>
                                    </td>

                                    <td class="text-end pe-0">
                                        <!--begin::Label-->
                                        <span class="badge badge-light-success fs-base">
                                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span
                                                    class="path1"></span><span class="path2"></span></i>
                                            9.2%
                                        </span>
                                        <!--end::Label-->

                                    </td>

                                    <td class="text-end pe-12">
                                        <span class="badge py-3 px-4 fs-7 badge-light-success">Complated</span>
                                    </td>

                                    <td class="text-end pe-0">
                                        <div id="kt_table_widget_14_chart_4" class="h-50px mt-n8 pe-7"
                                            data-kt-chart-color="success" style="min-height: 50px;">
                                            <div id="apexchartscd6o4j5k"
                                                class="apexcharts-canvas apexchartscd6o4j5k apexcharts-theme-light"
                                                style="width: 92.25px; height: 50px;"><svg id="SvgjsSvg2112"
                                                    width="92.25" height="50" xmlns="http://www.w3.org/2000/svg"
                                                    version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                    style="background: transparent;">
                                                    <foreignObject x="0" y="0" width="92.25" height="50">
                                                        <div class="apexcharts-legend"
                                                            xmlns="http://www.w3.org/1999/xhtml"
                                                            style="max-height: 25px;"></div>
                                                    </foreignObject>
                                                    <g id="SvgjsG2160" class="apexcharts-yaxis" rel="0"
                                                        transform="translate(-18, 0)"></g>
                                                    <g id="SvgjsG2114" class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(0, 1)">
                                                        <defs id="SvgjsDefs2113">
                                                            <clipPath id="gridRectMaskcd6o4j5k">
                                                                <rect id="SvgjsRect2117" width="98.25" height="60"
                                                                    x="-4" y="-6" rx="0" ry="0"
                                                                    opacity="1" stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMaskcd6o4j5k"></clipPath>
                                                            <clipPath id="nonForecastMaskcd6o4j5k"></clipPath>
                                                            <clipPath id="gridRectMarkerMaskcd6o4j5k">
                                                                <rect id="SvgjsRect2118" width="96.25" height="52"
                                                                    x="-2" y="-2" rx="0" ry="0"
                                                                    opacity="1" stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                        </defs>
                                                        <g id="SvgjsG2125" class="apexcharts-grid">
                                                            <g id="SvgjsG2126" class="apexcharts-gridlines-horizontal"
                                                                style="display: none;">
                                                                <line id="SvgjsLine2129" x1="0" y1="0"
                                                                    x2="92.25" y2="0" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2130" x1="0" y1="4.8"
                                                                    x2="92.25" y2="4.8" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2131" x1="0" y1="9.6"
                                                                    x2="92.25" y2="9.6" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2132" x1="0"
                                                                    y1="14.399999999999999" x2="92.25"
                                                                    y2="14.399999999999999" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2133" x1="0" y1="19.2"
                                                                    x2="92.25" y2="19.2" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2134" x1="0" y1="24"
                                                                    x2="92.25" y2="24" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2135" x1="0" y1="28.8"
                                                                    x2="92.25" y2="28.8" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2136" x1="0" y1="33.6"
                                                                    x2="92.25" y2="33.6" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2137" x1="0" y1="38.4"
                                                                    x2="92.25" y2="38.4" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2138" x1="0"
                                                                    y1="43.199999999999996" x2="92.25"
                                                                    y2="43.199999999999996" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2139" x1="0"
                                                                    y1="47.99999999999999" x2="92.25"
                                                                    y2="47.99999999999999" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                            </g>
                                                            <g id="SvgjsG2127" class="apexcharts-gridlines-vertical"
                                                                style="display: none;"></g>
                                                            <line id="SvgjsLine2141" x1="0" y1="48"
                                                                x2="92.25" y2="48" stroke="transparent"
                                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            <line id="SvgjsLine2140" x1="0" y1="1"
                                                                x2="0" y2="48" stroke="transparent"
                                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        </g>
                                                        <g id="SvgjsG2128" class="apexcharts-grid-borders"
                                                            style="display: none;"></g>
                                                        <g id="SvgjsG2119"
                                                            class="apexcharts-area-series apexcharts-plot-series">
                                                            <g id="SvgjsG2120" class="apexcharts-series"
                                                                zIndex="0" seriesName="NetxProfit"
                                                                data:longestSeries="true" rel="1"
                                                                data:realIndex="0">
                                                                <path id="SvgjsPath2123"
                                                                    d="M 0 48 L 0 28.8C0.1790612366764685, 29.22392383837551, 5.230276270163127, 44.63458869705468, 7.096153846153847, 45.6Q12.204324796386764, 44.86618021403456, 14.192307692307693, 44Q18.952762858894896, 32.53668004046077, 21.28846153846154, 32.8Q26.718454550703697, 44.52063941204535, 28.384615384615387, 45.6Q34.49949738760497, 43.565414471827026, 35.48076923076923, 42.4Q40.530199654230195, 28.80759601719264, 42.57692307692308, 28Q48.631500507112136, 35.625756669264625, 49.67307692307693, 36.8Q54.40384615384616, 44, 56.769230769230774, 44Q61.56576170634972, 36.411120678797346, 63.86538461538462, 36.8Q68.83895021806391, 45.682116496515924, 70.96153846153847, 46.4Q75.75806939865741, 41.98887932120265, 78.0576923076923, 41.6Q83.27263102806242, 44.95437255161712, 85.15384615384616, 44Q91.8321157308037, 34.96533286499403, 92.25, 34.4 L 92.25 48 L 0 48M 0 28.8z"
                                                                    fill="rgba(255,255,255,1)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-area" index="0"
                                                                    clip-path="url(#gridRectMaskcd6o4j5k)"
                                                                    pathTo="M 0 48 L 0 28.8C0.1790612366764685, 29.22392383837551, 5.230276270163127, 44.63458869705468, 7.096153846153847, 45.6Q12.204324796386764, 44.86618021403456, 14.192307692307693, 44Q18.952762858894896, 32.53668004046077, 21.28846153846154, 32.8Q26.718454550703697, 44.52063941204535, 28.384615384615387, 45.6Q34.49949738760497, 43.565414471827026, 35.48076923076923, 42.4Q40.530199654230195, 28.80759601719264, 42.57692307692308, 28Q48.631500507112136, 35.625756669264625, 49.67307692307693, 36.8Q54.40384615384616, 44, 56.769230769230774, 44Q61.56576170634972, 36.411120678797346, 63.86538461538462, 36.8Q68.83895021806391, 45.682116496515924, 70.96153846153847, 46.4Q75.75806939865741, 41.98887932120265, 78.0576923076923, 41.6Q83.27263102806242, 44.95437255161712, 85.15384615384616, 44Q91.8321157308037, 34.96533286499403, 92.25, 34.4 L 92.25 48 L 0 48M 0 28.8z"
                                                                    pathFrom="M -1 48 L -1 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48">
                                                                </path>
                                                                <path id="SvgjsPath2124"
                                                                    d="M 0 28.8C0.1790612366764685, 29.22392383837551, 5.230276270163127, 44.63458869705468, 7.096153846153847, 45.6Q12.204324796386764, 44.86618021403456, 14.192307692307693, 44Q18.952762858894896, 32.53668004046077, 21.28846153846154, 32.8Q26.718454550703697, 44.52063941204535, 28.384615384615387, 45.6Q34.49949738760497, 43.565414471827026, 35.48076923076923, 42.4Q40.530199654230195, 28.80759601719264, 42.57692307692308, 28Q48.631500507112136, 35.625756669264625, 49.67307692307693, 36.8Q54.40384615384616, 44, 56.769230769230774, 44Q61.56576170634972, 36.411120678797346, 63.86538461538462, 36.8Q68.83895021806391, 45.682116496515924, 70.96153846153847, 46.4Q75.75806939865741, 41.98887932120265, 78.0576923076923, 41.6Q83.27263102806242, 44.95437255161712, 85.15384615384616, 44Q91.8321157308037, 34.96533286499403, 92.25, 34.4"
                                                                    fill="none" fill-opacity="1" stroke="#50cd89"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="2" stroke-dasharray="0"
                                                                    class="apexcharts-area" index="0"
                                                                    clip-path="url(#gridRectMaskcd6o4j5k)"
                                                                    pathTo="M 0 28.8C0.1790612366764685, 29.22392383837551, 5.230276270163127, 44.63458869705468, 7.096153846153847, 45.6Q12.204324796386764, 44.86618021403456, 14.192307692307693, 44Q18.952762858894896, 32.53668004046077, 21.28846153846154, 32.8Q26.718454550703697, 44.52063941204535, 28.384615384615387, 45.6Q34.49949738760497, 43.565414471827026, 35.48076923076923, 42.4Q40.530199654230195, 28.80759601719264, 42.57692307692308, 28Q48.631500507112136, 35.625756669264625, 49.67307692307693, 36.8Q54.40384615384616, 44, 56.769230769230774, 44Q61.56576170634972, 36.411120678797346, 63.86538461538462, 36.8Q68.83895021806391, 45.682116496515924, 70.96153846153847, 46.4Q75.75806939865741, 41.98887932120265, 78.0576923076923, 41.6Q83.27263102806242, 44.95437255161712, 85.15384615384616, 44Q91.8321157308037, 34.96533286499403, 92.25, 34.4"
                                                                    pathFrom="M -1 48 L -1 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48"
                                                                    fill-rule="evenodd"></path>
                                                                <g id="SvgjsG2121"
                                                                    class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                    data:realIndex="0"></g>
                                                            </g>
                                                            <g id="SvgjsG2122" class="apexcharts-datalabels"
                                                                data:realIndex="0"></g>
                                                        </g>
                                                        <line id="SvgjsLine2142" x1="0" y1="0"
                                                            x2="92.25" y2="0" stroke="#b6b6b6"
                                                            stroke-dasharray="0" stroke-width="1"
                                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine2143" x1="0" y1="0"
                                                            x2="92.25" y2="0" stroke-dasharray="0"
                                                            stroke-width="0" stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g id="SvgjsG2144" class="apexcharts-xaxis"
                                                            transform="translate(0, 0)">
                                                            <g id="SvgjsG2145" class="apexcharts-xaxis-texts-g"
                                                                transform="translate(0, 4)"></g>
                                                        </g>
                                                        <g id="SvgjsG2161" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG2162" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG2163" class="apexcharts-point-annotations"></g>
                                                    </g>
                                                </svg></div>
                                        </div>
                                    </td>

                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i> </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50px me-3">
                                                <img src="/seven-html-pro/assets/media/stock/600x600/img-48.jpg"
                                                    class="" alt="">
                                            </div>

                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#"
                                                    class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">9
                                                    Degree</a>
                                                <span class="text-gray-500 fw-semibold d-block fs-7">Savannah
                                                    Nguyen</span>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="text-end pe-0">
                                        <span class="text-gray-600 fw-bold fs-6">$183,300</span>
                                    </td>

                                    <td class="text-end pe-0">
                                        <!--begin::Label-->
                                        <span class="badge badge-light-danger fs-base">
                                            <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1"><span
                                                    class="path1"></span><span class="path2"></span></i>
                                            0.4%
                                        </span>
                                        <!--end::Label-->

                                    </td>

                                    <td class="text-end pe-12">
                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">In Process</span>
                                    </td>

                                    <td class="text-end pe-0">
                                        <div id="kt_table_widget_14_chart_5" class="h-50px mt-n8 pe-7"
                                            data-kt-chart-color="danger" style="min-height: 50px;">
                                            <div id="apexchartsgnd2n3ni"
                                                class="apexcharts-canvas apexchartsgnd2n3ni apexcharts-theme-light"
                                                style="width: 92.25px; height: 50px;"><svg id="SvgjsSvg2164"
                                                    width="92.25" height="50" xmlns="http://www.w3.org/2000/svg"
                                                    version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                    style="background: transparent;">
                                                    <foreignObject x="0" y="0" width="92.25" height="50">
                                                        <div class="apexcharts-legend"
                                                            xmlns="http://www.w3.org/1999/xhtml"
                                                            style="max-height: 25px;"></div>
                                                    </foreignObject>
                                                    <g id="SvgjsG2212" class="apexcharts-yaxis" rel="0"
                                                        transform="translate(-18, 0)"></g>
                                                    <g id="SvgjsG2166" class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(0, 1)">
                                                        <defs id="SvgjsDefs2165">
                                                            <clipPath id="gridRectMaskgnd2n3ni">
                                                                <rect id="SvgjsRect2169" width="98.25" height="60"
                                                                    x="-4" y="-6" rx="0" ry="0"
                                                                    opacity="1" stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMaskgnd2n3ni"></clipPath>
                                                            <clipPath id="nonForecastMaskgnd2n3ni"></clipPath>
                                                            <clipPath id="gridRectMarkerMaskgnd2n3ni">
                                                                <rect id="SvgjsRect2170" width="96.25" height="52"
                                                                    x="-2" y="-2" rx="0" ry="0"
                                                                    opacity="1" stroke-width="0" stroke="none"
                                                                    stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                        </defs>
                                                        <g id="SvgjsG2177" class="apexcharts-grid">
                                                            <g id="SvgjsG2178" class="apexcharts-gridlines-horizontal"
                                                                style="display: none;">
                                                                <line id="SvgjsLine2181" x1="0" y1="0"
                                                                    x2="92.25" y2="0" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2182" x1="0" y1="4.8"
                                                                    x2="92.25" y2="4.8" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2183" x1="0" y1="9.6"
                                                                    x2="92.25" y2="9.6" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2184" x1="0"
                                                                    y1="14.399999999999999" x2="92.25"
                                                                    y2="14.399999999999999" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2185" x1="0" y1="19.2"
                                                                    x2="92.25" y2="19.2" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2186" x1="0" y1="24"
                                                                    x2="92.25" y2="24" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2187" x1="0" y1="28.8"
                                                                    x2="92.25" y2="28.8" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2188" x1="0" y1="33.6"
                                                                    x2="92.25" y2="33.6" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2189" x1="0" y1="38.4"
                                                                    x2="92.25" y2="38.4" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2190" x1="0"
                                                                    y1="43.199999999999996" x2="92.25"
                                                                    y2="43.199999999999996" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine2191" x1="0"
                                                                    y1="47.99999999999999" x2="92.25"
                                                                    y2="47.99999999999999" stroke="#e0e0e0"
                                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                            </g>
                                                            <g id="SvgjsG2179" class="apexcharts-gridlines-vertical"
                                                                style="display: none;"></g>
                                                            <line id="SvgjsLine2193" x1="0" y1="48"
                                                                x2="92.25" y2="48" stroke="transparent"
                                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            <line id="SvgjsLine2192" x1="0" y1="1"
                                                                x2="0" y2="48" stroke="transparent"
                                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        </g>
                                                        <g id="SvgjsG2180" class="apexcharts-grid-borders"
                                                            style="display: none;"></g>
                                                        <g id="SvgjsG2171"
                                                            class="apexcharts-area-series apexcharts-plot-series">
                                                            <g id="SvgjsG2172" class="apexcharts-series"
                                                                zIndex="0" seriesName="NetxProfit"
                                                                data:longestSeries="true" rel="1"
                                                                data:realIndex="0">
                                                                <path id="SvgjsPath2175"
                                                                    d="M 0 48 L 0 45.6C0.19439821738405735, 45.1616820681205, 4.760455166587203, 29.33668004046078, 7.096153846153847, 29.6Q11.941358282611738, 46.69246885938563, 14.192307692307693, 47.2Q18.952762858894896, 33.063319959539214, 21.28846153846154, 32.8Q26.048916705048743, 45.33668004046078, 28.384615384615387, 45.6Q33.11538461538462, 34.4, 35.48076923076923, 34.4Q40.61126416180717, 44.71358904207239, 42.57692307692308, 45.6Q48.74104112512643, 41.95582542314945, 49.67307692307693, 40.8Q54.577914205309995, 27.382393163556202, 56.769230769230774, 28Q62.09203610181831, 43.77536038475126, 63.86538461538462, 44.8Q68.85653380572191, 47.140338454473415, 70.96153846153847, 46.4Q77.17536677968181, 34.743914722493834, 78.0576923076923, 33.6Q83.77454748951185, 26.83376373096936, 85.15384615384616, 28Q92.08462261367104, 45.189828227728285, 92.25, 45.6 L 92.25 48 L 0 48M 0 45.6z"
                                                                    fill="rgba(255,255,255,1)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-area" index="0"
                                                                    clip-path="url(#gridRectMaskgnd2n3ni)"
                                                                    pathTo="M 0 48 L 0 45.6C0.19439821738405735, 45.1616820681205, 4.760455166587203, 29.33668004046078, 7.096153846153847, 29.6Q11.941358282611738, 46.69246885938563, 14.192307692307693, 47.2Q18.952762858894896, 33.063319959539214, 21.28846153846154, 32.8Q26.048916705048743, 45.33668004046078, 28.384615384615387, 45.6Q33.11538461538462, 34.4, 35.48076923076923, 34.4Q40.61126416180717, 44.71358904207239, 42.57692307692308, 45.6Q48.74104112512643, 41.95582542314945, 49.67307692307693, 40.8Q54.577914205309995, 27.382393163556202, 56.769230769230774, 28Q62.09203610181831, 43.77536038475126, 63.86538461538462, 44.8Q68.85653380572191, 47.140338454473415, 70.96153846153847, 46.4Q77.17536677968181, 34.743914722493834, 78.0576923076923, 33.6Q83.77454748951185, 26.83376373096936, 85.15384615384616, 28Q92.08462261367104, 45.189828227728285, 92.25, 45.6 L 92.25 48 L 0 48M 0 45.6z"
                                                                    pathFrom="M -1 48 L -1 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48">
                                                                </path>
                                                                <path id="SvgjsPath2176"
                                                                    d="M 0 45.6C0.19439821738405735, 45.1616820681205, 4.760455166587203, 29.33668004046078, 7.096153846153847, 29.6Q11.941358282611738, 46.69246885938563, 14.192307692307693, 47.2Q18.952762858894896, 33.063319959539214, 21.28846153846154, 32.8Q26.048916705048743, 45.33668004046078, 28.384615384615387, 45.6Q33.11538461538462, 34.4, 35.48076923076923, 34.4Q40.61126416180717, 44.71358904207239, 42.57692307692308, 45.6Q48.74104112512643, 41.95582542314945, 49.67307692307693, 40.8Q54.577914205309995, 27.382393163556202, 56.769230769230774, 28Q62.09203610181831, 43.77536038475126, 63.86538461538462, 44.8Q68.85653380572191, 47.140338454473415, 70.96153846153847, 46.4Q77.17536677968181, 34.743914722493834, 78.0576923076923, 33.6Q83.77454748951185, 26.83376373096936, 85.15384615384616, 28Q92.08462261367104, 45.189828227728285, 92.25, 45.6"
                                                                    fill="none" fill-opacity="1" stroke="#f1416c"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="2" stroke-dasharray="0"
                                                                    class="apexcharts-area" index="0"
                                                                    clip-path="url(#gridRectMaskgnd2n3ni)"
                                                                    pathTo="M 0 45.6C0.19439821738405735, 45.1616820681205, 4.760455166587203, 29.33668004046078, 7.096153846153847, 29.6Q11.941358282611738, 46.69246885938563, 14.192307692307693, 47.2Q18.952762858894896, 33.063319959539214, 21.28846153846154, 32.8Q26.048916705048743, 45.33668004046078, 28.384615384615387, 45.6Q33.11538461538462, 34.4, 35.48076923076923, 34.4Q40.61126416180717, 44.71358904207239, 42.57692307692308, 45.6Q48.74104112512643, 41.95582542314945, 49.67307692307693, 40.8Q54.577914205309995, 27.382393163556202, 56.769230769230774, 28Q62.09203610181831, 43.77536038475126, 63.86538461538462, 44.8Q68.85653380572191, 47.140338454473415, 70.96153846153847, 46.4Q77.17536677968181, 34.743914722493834, 78.0576923076923, 33.6Q83.77454748951185, 26.83376373096936, 85.15384615384616, 28Q92.08462261367104, 45.189828227728285, 92.25, 45.6"
                                                                    pathFrom="M -1 48 L -1 48 L 7.096153846153847 48 L 14.192307692307693 48 L 21.28846153846154 48 L 28.384615384615387 48 L 35.48076923076923 48 L 42.57692307692308 48 L 49.67307692307693 48 L 56.769230769230774 48 L 63.86538461538462 48 L 70.96153846153847 48 L 78.0576923076923 48 L 85.15384615384616 48 L 92.25 48"
                                                                    fill-rule="evenodd"></path>
                                                                <g id="SvgjsG2173"
                                                                    class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                    data:realIndex="0"></g>
                                                            </g>
                                                            <g id="SvgjsG2174" class="apexcharts-datalabels"
                                                                data:realIndex="0"></g>
                                                        </g>
                                                        <line id="SvgjsLine2194" x1="0" y1="0"
                                                            x2="92.25" y2="0" stroke="#b6b6b6"
                                                            stroke-dasharray="0" stroke-width="1"
                                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine2195" x1="0" y1="0"
                                                            x2="92.25" y2="0" stroke-dasharray="0"
                                                            stroke-width="0" stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g id="SvgjsG2196" class="apexcharts-xaxis"
                                                            transform="translate(0, 0)">
                                                            <g id="SvgjsG2197" class="apexcharts-xaxis-texts-g"
                                                                transform="translate(0, 4)"></g>
                                                        </g>
                                                        <g id="SvgjsG2213" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG2214" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG2215" class="apexcharts-point-annotations"></g>
                                                    </g>
                                                </svg></div>
                                        </div>
                                    </td>

                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i> </a>
                                    </td>
                                </tr>
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