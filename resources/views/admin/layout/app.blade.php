<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Otika - Admin Dashboard Template</title>
    <link rel="stylesheet" href="{{ asset('backend/assets/bundles/summernote/summernote-bs4.css') }}">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/app.min.css') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/components.css') }}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/custom.css') }}">
    <link rel='shortcut icon' type='image/x-icon' href="{{ asset('backend/assets/img/favicon.ico') }}" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            @include('admin.layout.header')
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    @include('admin.layout.sidebar')
                </aside>
            </div>

            <!-- Main Content -->
            @yield('content')

            <footer class="main-footer">
                <div class="footer-left">
                    <a href="templateshub.net">Admin</a></a>
                </div>
                <div class="footer-right">
                </div>
            </footer>
        </div>
    </div>
    <!-- General JS Scripts -->
    <script src="{{ asset('backend/assets/js/app.min.js') }}"></script>
    <!-- JS Libraies -->
    <script src="{{ asset('backend/assets/bundles/apexcharts/apexcharts.min.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('backend/assets/js/page/index.js') }}"></script>
    <!-- Template JS File -->
    <script src="{{ asset('backend/assets/js/scripts.js') }}"></script>
    <!-- Custom JS File -->
    <script src="{{ asset('backend/assets/js/custom.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ asset('backend/assets/bundles/summernote/summernote-bs4.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
</body>

</html>
