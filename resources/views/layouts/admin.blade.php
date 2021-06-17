
<!DOCTYPE html>
<html lang="en">



<head>
        <meta charset="utf-8" />
        <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('public/admin/assets/images/logo-sm.png')}}">

        <!-- App css -->
        <link href="{{asset('public/admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/admin/assets/css/metisMenu.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/admin/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/admin/plugins/sweet-alert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css">
        @yield('style')
        <link href="{{asset('public/admin/assets/css/main.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/admin/assets/css/app.css')}}" rel="stylesheet" type="text/css" />


    </head>

    <body class="dark-sidenav">


        @include('admin.partials.left-nav')


        <div class="page-wrapper">

            @include('admin.partials.top-nav')

             <!-- Page Content-->
            <div class="page-content">
                <div class="container-fluid">

                    {{-- @include('admin.partials.page-area') --}}
                    @yield('content')

                </div><!-- container -->

                {{-- <footer class="footer text-center text-sm-left">
                    &copy; 2021 Devlomatix Solutions <span class="d-none d-sm-inline-block float-right">Devloped by <i class="mdi mdi-heart text-danger"></i> Devlomatix Solutions Pvt. Ltd</span>
                </footer><!--end footer--> --}}
            </div>
            <!-- end page content -->

        </div>
        <!-- end page-wrapper -->




        <!-- jQuery  -->
        <script src="{{asset('public/admin/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('public/admin/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('public/admin/assets/js/metismenu.min.js')}}"></script>
        <script src="{{asset('public/admin/assets/js/waves.js')}}"></script>
        <script src="{{asset('public/admin/assets/js/feather.min.js')}}"></script>
        <script src="{{asset('public/admin/assets/js/simplebar.min.js')}}"></script>
        <script src="{{asset('public/admin/assets/js/moment.js')}}"></script>
        <script src="{{asset('public/admin/plugins/daterangepicker/daterangepicker.js')}}"></script>

        {{-- Custom js scripts from blade file --}}
        @yield('scripts')

        <!-- App js -->
        <script src="{{asset('public/admin/assets/js/main.js')}}"></script>
        <script src="{{asset('public/admin/assets/js/app.js')}}"></script>


        <script>
            @if(Session::has('message'))
            var alertType = {!! json_encode(Session::get('alert-type', 'info')) !!};
            var alertMessage = {!! json_encode(Session::get('message')) !!};

            if(alertType == 'success'){
                toast({
                    type: "success",
                    title: alertMessage
                });
            }

            if(alertType == 'error'){
                toast({
                    type: "error",
                    title: alertMessage
                });
            }

            if(alertType == 'warning'){
                toast({
                    type: "warning",
                    title: alertMessage
                });
            }

            if(alertType == 'info'){
                toast({
                    type: "info",
                    title: alertMessage
                });
            }

            @endif

            @if(Session::has('errors'))

            @endif
        </script>

    </body>



</html>
