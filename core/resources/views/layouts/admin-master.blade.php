<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/"
      data-template="vertical-menu-template-free">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>

    <title> @yield('title') | App Microsite</title>

    <meta name="description" content=""/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('admin/assets/img/wb-icon.png') }}" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
          rel="stylesheet"/>

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/fonts/boxicons.css') }}"/>

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/css/core.css') }}"
          class="template-customizer-core-css"/>
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/css/theme-default.css') }}"
          class="template-customizer-theme-css"/>
    <link rel="stylesheet" href="{{ asset('admin/assets/css/demo.css') }}"/>

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}"/>

    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/apex-charts/apex-charts.css') }}"/>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/custom.css') }}">

    <link href="{{ asset('admin/assets/vendor/libs/select2/select2.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('admin/assets/vendor/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}"
          rel="stylesheet"/>
    <link href="{{ asset('admin/assets/vendor/libs/jquery-confirm/jquery-confirm.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('admin/assets/vendor/libs/dropzone/dropzone.min.css') }}" rel="stylesheet"/>

    <!-- Helpers -->
    <script src="{{ asset('admin/assets/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('admin/assets/js/config.js') }}"></script>
    <style>
        .custom-nav .nav-item.active a {
            background-color: #696cff !important;
            color: #fff;
            box-shadow: 0 2px 4px 0 rgb(105 108 255 / 40%);
        }
    </style>
    @yield('styles')
</head>

<body>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
                <a href="#" class="app-brand-link">
                      <span class="app-brand-logo demo">
                        <img src="{{ asset('admin/assets/img/wb-icon.png') }}" alt="" height="50" style="margin-left: 45px;">
                      </span>
                    <span class="app-brand-text demo menu-text fw-bolder ms-2 text-uppercase"></span>
                </a>

                <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                    <i class="bx bx-chevron-left bx-sm align-middle"></i>
                </a>
            </div>

            <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1">
                <!-- Dashboard -->
                <li class="menu-item">
                    <a href="{{ url('admin/dashboard') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-home-circle"></i>
                        <div data-i18n="Analytics">Dashboard</div>
                    </a>
                </li>
                <!-- Dashboard -->
                <li class="menu-item">
                    <a href="{{ route('admin.media.index') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bxs-folder-open"></i>
                        <div data-i18n="Analytics">Media</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="{{ route('admin.feature.index') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bxl-play-store"></i>
                        <div data-i18n="Analytics">Feature</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="{{ route('admin.screenshot.index') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bxl-play-store"></i>
                        <div data-i18n="Analytics">Screenshot</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="{{ route('admin.faq.index') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bxl-play-store"></i>
                        <div data-i18n="Analytics">FAQ</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="{{ route('admin.apps.index') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bxl-play-store"></i>
                        <div data-i18n="Analytics">Apps</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-globe"></i>
                        <div data-i18n="Analytics">Site</div>
                    </a>

                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{ route('admin.seo.index') }}" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-search-alt"></i>
                                <div data-i18n="Without menu">Global Seo</div>
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ route('admin.theme.index') }}" class="menu-link">
                                <i class="menu-icon tf-icons bx bxs-palette"></i>
                                <div data-i18n="Without menu">Theme</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="#" class="menu-link">
                                <div data-i18n="Without menu">Page Seo</div>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bxl-blogger"></i>
                        <div data-i18n="Layouts">Blog</div>
                    </a>

                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{ route('admin/blog/post/index') }}" class="menu-link">
                                <div data-i18n="Without menu">Posts</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('admin/blog/comments/index') }}" class="menu-link">
                                <div data-i18n="Without menu">Comments</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('admin/blog/category/index') }}" class="menu-link">
                                <div data-i18n="Without navbar">Categories</div>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-file"></i>
                        <div data-i18n="Layouts">Pages</div>
                    </a>

                    <ul class="menu-sub">

                        <li class="menu-item">
                            <a href="{{ route('admin.page.home.index') }}" class="menu-link">
                                <div data-i18n="Without menu">Home</div>
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ route('admin.page.download.index') }}" class="menu-link">
                                <div data-i18n="Without menu">Download</div>
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ route('admin.page.about-us.main-section') }}" class="menu-link">
                                <div data-i18n="Without menu">About Us</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('admin.page.disclaimer') }}" class="menu-link">
                                <div data-i18n="Without menu">Disclaimer</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('admin.page.privacy-policy') }}" class="menu-link">
                                <div data-i18n="Without navbar">Privacy Policy</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('admin.page.terms-conditions') }}" class="menu-link">
                                <div data-i18n="Without navbar">Terms & Conditions</div>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="menu-item">
                    <a href="{{ route('admin.contact-message.index') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-conversation"></i>
                        <div data-i18n="Analytics">Contact Message</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link  menu-toggle">
                        <i class="menu-icon tf-icons bx bx-slider-alt"></i>
                        <div data-i18n="Analytics">For Developer</div>
                    </a>
                    <ul class="menu-sub">

                        <li class="menu-item">
                            <a href="{{ route('admin.sitemap.update') }}" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-sitemap"></i>
                                <div data-i18n="Analytics">Update SiteMap</div>
                            </a>
                        </li>
                        @if(auth()->user()->user_name == 'developer')
                            <li class="menu-item">
                                <a href="{{ route('admin.execute') }}" class="menu-link">
                                    <i class="menu-icon tf-icons bx bx-code-block"></i>
                                    <div data-i18n="Analytics">Run Commands</div>
                                </a>
                            </li>
                        @endif
                    </ul>
                </li>

            </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page" style="position: relative; margin-top: 70px;">
            <!-- Navbar -->

            <nav class="nav-correction layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                 id="layout-navbar" style="position: fixed;top:0;width: calc(100% - 16.25rem);">
                <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                    <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                        <i class="bx bx-menu bx-sm"></i>
                    </a>
                </div>

                <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                    <!-- Search -->
                    <div class="navbar-nav align-items-center">
                        <div class="nav-item d-flex align-items-center">
                            <h3><img style="width: 35px;margin-top: -5px;margin-right: 5px;" src="{{ asset('admin/assets/img/logo.png') }}" alt="">App Microsite</h3>
                        </div>
                    </div>
                    <!-- /Search -->

                    <ul class="navbar-nav flex-row align-items-center ms-auto">
                        <!-- Place this tag where you want the button to render. -->

                        <!-- User -->
                        <li class="nav-item navbar-dropdown dropdown-user dropdown">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                               data-bs-toggle="dropdown">
                                <div class="avatar avatar-online">
                                    <img src="{{ asset('admin/assets/img/wb-icon.png') }}" alt
                                         class="w-px-40 h-auto rounded-circle"/>
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">

                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar avatar-online">
                                                    <img src="{{ asset('admin/assets/img/wb-icon.png') }}" alt="" class="w-px-40 h-auto rounded-circle"/>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <span class="fw-semibold d-block">Admin - AM</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{('portal/profile') }}">
                                        <i class="bx bx-user me-2"></i>
                                        <span class="align-middle">My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('admin/profile/changePassword') }}">
                                        <i class="bx bx-cog me-2"></i>
                                        <span class="align-middle">Change Password</span>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Log Out</span>
                                        </button>
                                    </form>

                                </li>
                            </ul>
                        </li>
                        <!--/ User -->
                    </ul>
                </div>
            </nav>
            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->
                @yield('body')
                <!-- / Content -->

                <!-- Footer -->
                <footer class="content-footer footer bg-footer-theme text-center">
                    <div class="container-xxl flex-wrap  py-2 flex-md-row flex-column">
                        Copyright &copy;2023 <a href="#">App Microsite</a> All
                        rights reserved.
                    </div>
                </footer>
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
                {{--                <div class="modal" id="common-modal" tabindex="-1" role="dialog" aria-labelledby="..." aria-hidden="true">--}}
                <div class="modal fade" id="common-modal" data-bs-backdrop="static" data-bs-keyboard="true"
                     tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

                </div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
</div>

<script src="{{ asset('admin/assets/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('assets/vendor/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

<script src="{{ asset('admin/assets/vendor/libs/select2/select2.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/libs/jquery-confirm/jquery-confirm.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/libs/dropzone/dropzone.min.js') }}"></script>

<script src="{{ asset('admin/assets/vendor/js/menu.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

<script src="{{ asset('admin/assets/js/main.js') }}"></script>

<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="{{ asset('admin/assets/js/custom.js') }}"></script>

<script>

    const APP_URL = {!! json_encode(url('/')) !!};

    $(".select2").select2();

    const currentUrl = new URL(window.location);
    const currentNavItem = $('a[href="' + currentUrl.href + '"]');
    currentNavItem.parent().addClass('active');
    currentNavItem.parents('.menu-item').addClass('open active');
    //$('a[href="' + currentUrl + '"]').parent().parent().parent().addClass('open active');

    function showErrorMessage(errMsg) {
        $.alert({
            title: '<span class="text-danger"><i class="fa fa-exclamation-triangle"></i>Error</span>',
            content: errMsg,
            type: 'red',
            typeAnimated: true
        });

    }
</script>
<script>
    $(function(){
        $('.ckEditor').each(function(e){
            CKEDITOR.replace( this.id, { customConfig: '/jblog/ckeditor/config_Large.js' });
        });
    });
</script>
@yield('script')
</body>
</html>
