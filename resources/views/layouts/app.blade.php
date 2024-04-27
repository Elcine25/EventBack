<!DOCTYPE html>
<html lang="fr">
<head>
    <title> @yield('title', 'Acceuil') | EVENTPULSE</title>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="{{ asset('/assets/media/logos/favicon.png') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="{{ asset('/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="{{ asset('/assets/css/leaflet.css') }}" />
    <style>
        .iconBtn {
            padding: 1% !important;
            font-size: 2px !important;
        }

        /* td {
            padding: 2px !important;
            font-size: 12px !important;
        }
class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-enabled"
        tr {
            font-size: 12px !important;
        } */
    </style>
    @yield('css')
</head>

<body id="kt_body" >
    <div class="page d-flex flex-row flex-column-fluid" style="width: 100% !important;">
        @include('partials.kt_aside')
        <div class="wrapper container-xxl d-block " id="kt_wrapper">
            @include('partials.kt_header')
            {{-- d-flex flex-column flex-column-fluid flex-column--}}
            <div class="content " id="kt_content">
                <div class="" id="kt_content_container" >
                    @yield('content')
                </div>
            </div>
        </div>
    </div> 
    {{-- <div class="d-flex flex-column flex-root">
    </div> --}}
    {{-- <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1"
                    transform="rotate(90 13 6)" fill="black" />
                <path
                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                    fill="black" />
            </svg>
        </span>
    </div> --}}
    <script src="{{ asset('/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('/assets/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <script src="{{ asset('/assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    @yield('script')
</body>

</html>
