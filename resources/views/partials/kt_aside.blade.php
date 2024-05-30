<div id="kt_aside" class="aside"{{--  data-kt-drawer="true" data-kt-drawer-name="aside"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-width="auto"
    data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle" --}}>
    <div class="aside-secondary d-block bg-primary">
        @php $currentRoute = \Illuminate\Support\Facades\Route::currentRouteName(); @endphp
        <div class=" d-flex align-items-center justify-content-between mt-4 mb-3">
            <div>
                <img alt="Logo" src="{{ asset('/assets/media/logos/EventPluse_blanc.png') }}" class="h-30px m-2" />
                <span class="mx-3 text-white fw-bold fs-3">EP ADMIN</span>
            </div>
            <div>
                <div class="d-flex align-items-center" id="kt_header_user_menu_toggle">
                    <!--begin::Menu wrapper-->
                    <div class="cursor-pointer symbol symbol-40px"
                        data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-overflow="true"
                        data-kt-menu-placement="top-start">
                        <div class="symbol symbol-50px me-5">
                            <span class="symbol-label text-inverse-primary bg-primary shadow fw-bold">
                                {{ auth()->user()->name[0] }}
                            </span>
                        </div>
                    </div>


                    <!--begin::User account menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                        data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <div class="menu-content d-flex align-items-center px-3">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-50px me-5">
                                    <span class="symbol-label text-inverse-primary bg-primary shadow fw-bold">
                                        {{ auth()->user()->name[0] }}
                                    </span>
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Username-->
                                <div class="d-flex flex-column">
                                    <div class="fw-bolder d-flex align-items-center fs-5">
                                        {{ auth()->user()->name[0] }}
                                    </div>
                                    <a href="#"
                                        class="text-muted text-hover-primary fs-7">{{ auth()->user()->email }}</a>
                                </div>
                                <!--end::Username-->
                            </div>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu separator-->
                        <div class="separator my-2"></div>
                        <!--end::Menu separator-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="/profile/edit" class="menu-link px-5">Mon Profile</a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-5 my-1">
                            <a href="/profile/password" class="menu-link px-5">Changer mot de passe</a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu separator-->
                        <div class="separator my-2"></div>
                        <!--end::Menu separator-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn menu-link px-5">Se déconnecter</button>
                            </form>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::User account menu-->
                    <!--end::Menu wrapper-->
                </div>
            </div>
        </div>
        <hr class="mt-4 text-white w-100">
        <div class="aside-workspace" id="kt_aside_wordspace">
            <div class="d-flex h-100 flex-column">
                <!--begin::Wrapper-->
                <div class="flex-column-fluid hover-scroll-y" data-kt-scroll="true" data-kt-scroll-activate="true"
                    data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_aside_wordspace"
                    data-kt-scroll-dependencies="#kt_aside_secondary_footer">
                    <!--begin::Tab content-->
                    <div class="tab-content">
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade active show" id="kt_aside_nav_tab_menu" role="tabpanel">
                            <!--begin::Menu-->
                            <div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-6 my-5 my-lg-0"
                                id="kt_aside_menu" data-kt-menu="true">
                                <div id="kt_aside_menu_wrapper" class="menu-fit">
                                    <div class="menu-item mb-1 px-6">
                                        <a class="menu-link" href="{{ route('home') }}">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect x="2" y="2" width="9" height="9" rx="2"
                                                            fill="black"></rect>
                                                        <rect opacity="0.3" x="13" y="2" width="9" height="9"
                                                            rx="2" fill="black"></rect>
                                                        <rect opacity="0.3" x="13" y="13" width="9" height="9"
                                                            rx="2" fill="black"></rect>
                                                        <rect opacity="0.3" x="2" y="13" width="9" height="9"
                                                            rx="2" fill="black"></rect>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title text-white">Tableau de bord</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-content">
                                            <div class="separator my-4"></div>
                                        </div>
                                    </div>
                                    <div class="menu-item px-6">
                                        <div class="menu-content pb-2">
                                            <span
                                                class="menu-section text-muted text-uppercase fs-8 ls-1">INTERFACE</span>
                                        </div>
                                    </div>
                                    <div data-kt-menu-trigger="click" class="menu-item px-6 menu-accordion mb-1">
                                        <span class="menu-link">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
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
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title text-white">Evénements</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <div class="menu-sub menu-sub-accordion">
                                            <div class="menu-item">
                                                <a class="menu-link" href="{{ route('event-index') }}">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title text-white">Liste des événements</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link" href="{{ route('event-create') }}"
                                                    data-kt-page="pro">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title text-white">Nouvel événement </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--<div data-kt-menu-trigger="click" class="menu-item px-6 menu-accordion mb-1">
                                        <span class="menu-link">
                                            <span class="menu-icon">
                                                <span class="svg-icon svg-icon-muted svg-icon-2"><svg width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M16.0173 9H15.3945C14.2833 9 13.263 9.61425 12.7431 10.5963L12.154 11.7091C12.0645 11.8781 12.1072 12.0868 12.2559 12.2071L12.6402 12.5183C13.2631 13.0225 13.7556 13.6691 14.0764 14.4035L14.2321 14.7601C14.2957 14.9058 14.4396 15 14.5987 15H18.6747C19.7297 15 20.4057 13.8774 19.912 12.945L18.6686 10.5963C18.1487 9.61425 17.1285 9 16.0173 9Z"
                                                            fill="currentColor" />
                                                        <rect opacity="0.3" x="14" y="4" width="4"
                                                            height="4" rx="2" fill="currentColor" />
                                                        <path
                                                            d="M4.65486 14.8559C5.40389 13.1224 7.11161 12 9 12C10.8884 12 12.5961 13.1224 13.3451 14.8559L14.793 18.2067C15.3636 19.5271 14.3955 21 12.9571 21H5.04292C3.60453 21 2.63644 19.5271 3.20698 18.2067L4.65486 14.8559Z"
                                                            fill="currentColor" />
                                                        <rect opacity="0.3" x="6" y="5" width="6"
                                                            height="6" rx="3" fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </span>
                                            <span class="menu-title text-white">Visiteurs</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <div class="menu-sub menu-sub-accordion">
                                            <div class="menu-item">
                                                <a class="menu-link" href="../dist/general/about.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title text-white">Liste des visiteurs</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link" href="#" data-kt-page="pro">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title text-white">Favoris Client </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>-->
                                    <div class="menu-item px-6 mb-1">
                                        <a class="menu-link" href="{{ route('ville-index') }}">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/keenthemes/seven/docs/core/html/src/media/icons/duotune/maps/map006.svg-->
                                                <span class="svg-icon svg-icon-muted svg-icon-2">
                                                    <svg width="24"
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
                                            <span class="menu-title text-white">Villes </span>
                                        </a>
                                    </div>
                                    <div class="menu-item px-6 mb-1">
                                        <a class="menu-link" href="{{ route('categorie-index') }}">
                                            <span class="menu-icon">
                                                <!--begin::Svg Icon | path: icons/duotune/layouts/lay009.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M20 14H11C10.4 14 10 13.6 10 13V10C10 9.4 10.4 9 11 9H20C20.6 9 21 9.4 21 10V13C21 13.6 20.6 14 20 14ZM21 20V17C21 16.4 20.6 16 20 16H11C10.4 16 10 16.4 10 17V20C10 20.6 10.4 21 11 21H20C20.6 21 21 20.6 21 20Z"
                                                            fill="black"></path>
                                                        <path
                                                            d="M20 7H3C2.4 7 2 6.6 2 6V3C2 2.4 2.4 2 3 2H20C20.6 2 21 2.4 21 3V6C21 6.6 20.6 7 20 7ZM7 9H3C2.4 9 2 9.4 2 10V20C2 20.6 2.4 21 3 21H7C7.6 21 8 20.6 8 20V10C8 9.4 7.6 9 7 9Z"
                                                            fill="black"></path>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-title text-white">Catégories</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Tab pane-->
                    </div>
                    <!--end::Tab content-->
                </div>
                <!--end::Wrapper-->
            </div>
        </div>
    </div>
</div>
