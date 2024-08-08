<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Admin Dashborad</title>

    <meta name="description" content="" />

    <!-- Favicon -->

    <link rel="icon" type="image/x-icon" href={{ asset('admin/assets/img/favicon/favicon.ico') }} />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <script src="{{ asset('admin/assets/vendor/libs/jquery/jquery.j') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/fonts/boxicons.css') }}" />
    <!-- Core CSS -->

    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/css/core.css') }}"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/css/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/demo.css') }}" />
    {{-- for sweetalter --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css"> --}}
    {{-- <script src="{{ asset('admin/assets/js/sweetalert-new.js') }}"></script>
    <script src="{{ asset('admin/assets/js/sweetalert-new.js') }}"></script> --}}
    {{-- Sweetalert --}}
    {{-- <script src="{{ asset('admin/assets/js/sweetalert-new.js') }}"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/apex-charts/apex-charts.css') }}" />
    {{-- Dropify --}}
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/dropify/css/dropify.min.css') }}">
    {{-- CK-Editor --}}
    <style>
        .ck-editor__editable {
            min-height: 300px;
        }

        .ck-editor__editable ul>li {
            list-style: disc;
        }

        .ck-editor__editable ol>li {
            list-style: decimal;
        }
    </style>
    <style>
        /* Target the Dropify container */
        .dropify-wrapper .dropify-message p {
            font-size: 16px;
            /* Adjust the size as needed */
        }

        .dropify-wrapper .dropify-message .file-icon p {
            font-size: 16px;
            /* Adjust the size as needed */
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css"
        integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('admin/assets/vendor/js/helpers.js') }}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('admin/assets/js/config.js') }}"></script>
</head>

<body>
    <!-- Notification alerts -->
    @include('admin.includes.notification')
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            @include('layout.admin.sidebar')
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <i class="bx bx-search fs-4 lh-0"></i>
                                <input type="text" class="form-control border-0 shadow-none ps-1 ps-sm-2"
                                    placeholder="Search..." aria-label="Search..." />
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Place this tag where you want the button to render. -->
                            <li class="nav-item lh-1 me-3">
                                <a class="github-button"
                                    href="https://github.com/themeselection/sneat-html-admin-template-free"
                                    data-icon="octicon-star" data-size="large" data-show-count="true"
                                    aria-label="Star themeselection/sneat-html-admin-template-free on GitHub">Star</a>
                            </li>

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="{{ asset('admin/assets/img/avatars/logo.jpg') }}" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="{{ asset('admin/assets/img/avatars/1.png') }}" alt
                                                            class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-medium d-block">Admin </span>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-cog me-2"></i>
                                            <span class="align-middle">Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <span class="d-flex align-items-center align-middle">
                                                <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                                                <span class="flex-grow-1 align-middle ms-1">Billing</span>
                                                <span
                                                    class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
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

                    @yield('content')
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div
                            class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                            <div class="mb-2 mb-md-0 d-flex">
                                ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                , <p class="text-info">Trial Site Dot</p>

                            </div>
                            <div class="d-none d-lg-inline-block">
                                Powered By <span class="text-info"> Paradise It Solutions</span>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>

    {{-- Dropify's Js --}}
    {{-- <script src="{{ asset('admin/assets/vendor/libs/dropify/js/dropify.min.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
        integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('#image').dropify();
        $('.dropify').dropify();
        $('#site_main_logo').dropify();
        $('#banner_image').dropify();


        /* const dropifyMessages = {
            'default': '',
            'replace': '',
            'remove': 'Remove',
            'error': 'Ooops, something wrong happened.'
        }; */
    </script>
    <!-- CkEditor-->
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/super-build/ckeditor.js"></script>

    <script>
        // let table = new DataTable('#myTable');
        ckeditor("ckeditor");
        ckeditor("ckeditor1");
        ckeditor("ckeditor2");
        ckeditor("ckeditor3");
        ckeditor("ckeditor4");
        ckeditor("ckeditor101");
        ckeditor("ckeditor102");
        ckeditor("ckeditor103");
        ckeditor("ckeditor104");
        ckeditor("video-desc");
        ckeditor("overviewckeditor");

        function ckeditor($className) {
            CKEDITOR.ClassicEditor.create(document.querySelector("." + $className), {
                toolbar: {
                    items: [
                        "heading",
                        "|",
                        "bold",
                        "italic",
                        "strikethrough",
                        "underline",
                        "code",
                        "subscript",
                        "superscript",
                        "removeFormat",
                        "|",
                        "bulletedList",
                        "numberedList",
                        "|",
                        "outdent",
                        "indent",
                        "|",
                        "undo",
                        "redo",
                        "|",
                        "fontSize",
                        "fontFamily",
                        "fontColor",
                        "|",
                        "alignment",
                        "|",
                        "link",
                        "insertImage",
                        "blockQuote",
                        "insertTable",
                        "mediaEmbed",
                        "|",
                        "specialCharacters",
                        "horizontalLine",
                        "pageBreak",
                        "|",
                        "sourceEditing",
                    ],
                    shouldNotGroupWhenFull: true,
                },
                list: {
                    properties: {
                        styles: true,
                        startIndex: true,
                        reversed: true,
                    },
                },
                heading: {
                    options: [{
                            model: "paragraph",
                            title: "Paragraph",
                            class: "ck-heading_paragraph",
                        },
                        {
                            model: "heading1",
                            view: "h1",
                            title: "Heading 1",
                            class: "ck-heading_heading1",
                        },
                        {
                            model: "heading2",
                            view: "h2",
                            title: "Heading 2",
                            class: "ck-heading_heading2",
                        },
                        {
                            model: "heading3",
                            view: "h3",
                            title: "Heading 3",
                            class: "ck-heading_heading3",
                        },
                        {
                            model: "heading4",
                            view: "h4",
                            title: "Heading 4",
                            class: "ck-heading_heading4",
                        },
                        {
                            model: "heading5",
                            view: "h5",
                            title: "Heading 5",
                            class: "ck-heading_heading5",
                        },
                        {
                            model: "heading6",
                            view: "h6",
                            title: "Heading 6",
                            class: "ck-heading_heading6",
                        },
                    ],
                },
                placeholder: "",
                fontFamily: {
                    options: [
                        "default",
                        "Arial, Helvetica, sans-serif",
                        "Courier New, Courier, monospace",
                        "Georgia, serif",
                        "Lucida Sans Unicode, Lucida Grande, sans-serif",
                        "Tahoma, Geneva, sans-serif",
                        "Times New Roman, Times, serif",
                        "Trebuchet MS, Helvetica, sans-serif",
                        "Verdana, Geneva, sans-serif",
                    ],
                    supportAllValues: true,
                },
                fontSize: {
                    options: [
                        8,
                        10,
                        12,
                        14,
                        "default",
                        18,
                        20,
                        22,
                        24,
                        26,
                        28,
                        30,
                        32,
                        34,
                        36,
                    ],
                    supportAllValues: true,
                },
                htmlSupport: {
                    allow: [{
                        name: /.*/,
                        attributes: true,
                        classes: true,
                        styles: true,
                    }, ],
                },
                htmlEmbed: {
                    showPreviews: true,
                },
                link: {
                    decorators: {
                        addTargetToExternalLinks: true,
                        defaultProtocol: "https://",
                        toggleDownloadable: {
                            mode: "manual",
                            label: "Downloadable",
                            attributes: {
                                download: "file",
                            },
                        },
                    },
                },
                mention: {
                    feeds: [{
                        marker: "@",
                        feed: [
                            "@apple",
                            "@bears",
                            "@brownie",
                            "@cake",
                            "@cake",
                            "@candy",
                            "@canes",
                            "@chocolate",
                            "@cookie",
                            "@cotton",
                            "@cream",
                            "@cupcake",
                            "@danish",
                            "@donut",
                            "@dragée",
                            "@fruitcake",
                            "@gingerbread",
                            "@gummi",
                            "@ice",
                            "@jelly-o",
                            "@liquorice",
                            "@macaroon",
                            "@marzipan",
                            "@oat",
                            "@pie",
                            "@plum",
                            "@pudding",
                            "@sesame",
                            "@snaps",
                            "@soufflé",
                            "@sugar",
                            "@sweet",
                            "@topping",
                            "@wafer",
                        ],
                        minimumCharacters: 1,
                    }, ],
                },
                removePlugins: [
                    "CKBox",
                    "CKFinder",
                    "EasyImage",
                    "RealTimeCollaborativeComments",
                    "RealTimeCollaborativeTrackChanges",
                    "RealTimeCollaborativeRevisionHistory",
                    "PresenceList",
                    "Comments",
                    "TrackChanges",
                    "TrackChangesData",
                    "RevisionHistory",
                    "Pagination",
                    "WProofreader",
                    "MathType",
                ],

            });
        }
    </script>


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="{{ asset('admin/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->
    <!-- Vendors JS -->
    <script src="{{ asset('admin/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('admin/assets/js/main.js') }}"></script>
    <!-- Page JS -->
    <script src="{{ asset('admin/assets/js/dashboards-analytics.js') }}"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
