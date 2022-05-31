<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>TheFastLane Cinema</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="{{ url('admin/vendors/feather/feather.css') }}">
        <link rel="stylesheet" href="{{ url('admin/vendors/ti-icons/css/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ url('admin/vendors/css/vendor.bundle.base.css') }}">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="{{ url('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
        <link rel="stylesheet" href="{{ url('admin/vendors/ti-icons/css/themify-icons.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('admin/js/select.dataTables.min.css') }}">
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="{{ url('admin/css/vertical-layout-light/style.css') }}">
        <!-- endinject -->
        <link rel="stylesheet" href="{{ url('admin/vendors/mdi/css/materialdesignicons.min.css') }}">
        <link rel="shortcut icon" href="{{ url('admin/images/favicon.png') }}" />
        <!-- Data Table CSS -->
        <link rel="stylesheet" href="{{ url('admin/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ url('admin/css/dataTables.bootstrap4.min.css') }}">
        <!-- End Data Table CSS -->
    </head>
    <body>
        <div class="container-scroller">
            <!-- partial:partials/_navbar.html -->
            @include('front.frontlayout.front_header')
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_settings-panel.html -->
                <div class="theme-setting-wrapper">
                    <div id="settings-trigger"><i class="ti-settings"></i></div>
                    <div id="theme-settings" class="settings-panel">
                        <i class="settings-close ti-close"></i>
                        <p class="settings-heading">SIDEBAR SKINS</p>
                        <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                            <div class="img-ss rounded-circle bg-light border mr-3"></div>
                            Light
                        </div>
                        <div class="sidebar-bg-options" id="sidebar-dark-theme">
                            <div class="img-ss rounded-circle bg-dark border mr-3"></div>
                            Dark
                        </div>
                        <p class="settings-heading mt-2">HEADER SKINS</p>
                        <div class="color-tiles mx-0 px-4">
                            <div class="tiles dark"></div>
                            <div class="tiles default"></div>
                        </div>
                    </div>
                </div>
                <!-- partial -->

                <!-- partial -->
                @yield('content')
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
            @include('front.frontlayout.front_footer')
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="{{ url('admin/vendors/js/vendor.bundle.base.js') }}"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="{{ url('admin/vendors/chart.js/Chart.min.js') }}"></script>
        <script src="{{ url('admin/vendors/datatables.net/jquery.dataTables.js') }}"></script>
        <script src="{{ url('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
        <script src="{{ url('admin/js/dataTables.select.min.js') }}"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="{{ url('admin/js/off-canvas.js') }}"></script>
        <script src="{{ url('admin/js/hoverable-collapse.js') }}"></script>
        <script src="{{ url('admin/js/template.js') }}"></script>
        <script src="{{ url('admin/js/settings.js') }}"></script>
        <script src="{{ url('admin/js/todolist.js') }}"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="{{ url('admin/js/dashboard.js') }}"></script>
        <script src="{{ url('admin/js/Chart.roundedBarCharts.js') }}"></script>
        <!-- End custom js for this page-->
        <!-- Custom Admin js for Admin-->
        <script src="{{ url('admin/js/custom.js') }}"></script>
        <!-- End custom Admin js for Admin-->
        <!-- Data Table js -->
        <script src="{{ url('admin/js/jquery-3.5.1.js') }}"></script>
        <script src="{{ url('admin/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ url('admin/js/dataTables.bootstrap4.min.js') }}"></script>
        <!-- End Data Table js -->
        <!-- script for sweetalert2-->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- End script for sweetalert2 -->
    </body>
</html>