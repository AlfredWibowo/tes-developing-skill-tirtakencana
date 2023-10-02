<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
    <title></title>
    <link rel="icon" href="">

    @include('utils.style')

    <style>
        .sidebar a.active {
            background-color: #1E3258 !important;
        }

        h1.page-title {
            color: #1E3258 !important;
            font-weight: bold;
        }

        h5.card-title {
            color: #1E3258 !important;
            font-weight: bold;
        }

        .select2 {
            width: 100% !important;
        }
    </style>

    @yield('style')

</head>

<body class="hold-transition sidebar-mini layout-navbar-fixed layout-footer-fixed layout-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        {{-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('images/pcu/logoPCU.png') }}" alt="{{ config('app.name') }}"
                style="width: 32%;">
        </div> --}}

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

        //select2
        $('.select2').select2({
            theme: 'bootstrap-5',
            minimumResultsForSearch: Infinity
        });

        $('.logout-btn').on('click', function(event) {
            event.preventDefault();

            const url = "{{ route('logout') }}";

            $.confirm({
                title: 'Logout?',
                content: 'Your time is out, you will be automatically logged out in 10 seconds.',
                icon: 'fas fa-exclamation-circle',
                theme: 'modern',
                closeIcon: true,
                animation: 'scale',
                //type: default, blue, green, orange, red, purple, dark
                type: 'red',
                autoClose: 'logout|10000',
                buttons: {
                    logout: {
                        text: 'Logout Myself',
                        icon: 'fas fa-sign-out-alt',
                        btnClass: 'btn-red',
                        action: function() {
                            window.location.href = url;
                        }
                    },
                    cancel: {
                        text: 'Cancel',
                        // btnClass: 'btn',
                        action: function() {}
                    }
                }
            });
        });

        //delete btn table
        $('.delete-btn').on('click', function(event) {
            event.preventDefault();

            const form = $(this).closest('form');

            $.confirm({
                title: 'Delete',
                content: 'Are you sure?',
                icon: 'fas fa-exclamation-circle',
                theme: 'modern',
                closeIcon: true,
                animation: 'scale',
                type: 'red',
                autoClose: 'cancel|8000',
                buttons: {
                    confirm: {
                        text: 'Delete',
                        btnClass: 'btn-red',
                        action: function() {
                            form.submit();
                        }
                    },
                    cancel: {
                        text: 'Cancel',
                        // btnClass: 'btn',
                        action: function() {}
                    }
                }
            });
        });

        $('.save-btn').on('click', function() {
            const form = $(this).closest('form');

            // Trigger form validation
            if (form[0].checkValidity()) {
                $(this).attr('disabled', true);
                $(this).html('<i class="fas fa-spinner fa-spin me-2"></i> Saving...');
                form.submit();
            } else {
                // Handle invalid form (e.g., display error messages)
                form.addClass('was-validated');
            }
        });

        $('.send-btn').on('click', function() {
            const form = $(this).closest('form');

            // Trigger form validation
            if (form[0].checkValidity()) {
                $(this).attr('disabled', true);
                $(this).html('<i class="fas fa-spinner fa-spin me-2"></i> Sending...');
                form.submit();
            } else {
                // Handle invalid form (e.g., display error messages)
                form.addClass('was-validated');
            }
        });

        $('.filter-btn').on('click', function() {
            const form = $(this).closest('form');

            // Trigger form validation
            if (form[0].checkValidity()) {
                $(this).attr('disabled', true);
                $(this).html('<i class="fas fa-spinner fa-spin me-2"></i> Filtering...');
                form.submit();
            } else {
                // Handle invalid form (e.g., display error messages)
                form.addClass('was-validated');
            }
        });
    </script> --}}

    @yield('script')
</body>

</html>
