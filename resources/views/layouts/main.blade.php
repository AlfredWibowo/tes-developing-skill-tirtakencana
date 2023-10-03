<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
    <title></title>
    <link rel="icon" href="">

    @include('utils.style')

    @yield('style')

</head>

<body class="hold-transition sidebar-mini layout-navbar-fixed layout-footer-fixed layout-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('images/AvianLogo2.png') }}" style="width: 32%;">
        </div>

        @include('layouts.partials.navbar')

        @include('layouts.partials.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            @include('layouts.partials.page-header')

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
            <!-- /.content -->
        </div>

        <!-- /.content-wrapper -->

        @include('layouts.partials.footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">


        </aside>
    </div>

    @include('utils.script')
    <script>
        $('.table').dataTable();
    </script>
    {{-- <script>
        // Check if the session variable 'success' exists
        if ('{{ session()->has('success') }}') {
            // Show the success message using Toastr
            toastr.success('{{ session('success') }}', 'Success!');
        }

        if ('{{ session()->has('error') }}') {
            toastr.error('{{ session('error') }}', 'Error!');
        }

        if ('{{ session()->has('warning') }}') {
            toastr.warning('{{ session('warning') }}', 'Warning!');
        }

        if ('{{ session()->has('info') }}') {
            toastr.info('{{ session('info') }}', 'Info!');
        }
    </script> --}}

    @yield('script')
</body>

</html>
