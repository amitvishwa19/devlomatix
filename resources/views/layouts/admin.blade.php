<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />


        <link href="{{asset('public/assets/plugins/pace/pace-theme-flash.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/assets/plugins/font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/assets/plugins/jquery-scrollbar/jquery.scrollbar.css')}}" rel="stylesheet" type="text/css" media="screen" />
        <!-- <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" media="screen" /> -->
        <!-- <link href="assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" /> -->
        <!-- <link href="assets/plugins/nvd3/nv.d3.min.css" rel="stylesheet" type="text/css" media="screen" /> -->
        <!-- <link href="assets/plugins/rickshaw/rickshaw.min.css" rel="stylesheet" type="text/css" /> -->
        <!-- <link href="assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css" media="screen"> -->
        <!-- <link href="assets/plugins/mapplic/css/mapplic.css" rel="stylesheet" type="text/css" /> -->
        <!-- <link href="assets/css/dashboard.widgets.css" rel="stylesheet" type="text/css" media="screen" /> -->
        <link href="{{asset('public/assets/css/pages-icons.css')}}" rel="stylesheet" type="text/css">
        <link class="main-stylesheet" href="{{asset('public/assets/css/pages.css')}}" rel="stylesheet" type="text/css" />
        <link class="main-stylesheet" href="{{asset('public/css/app.css')}}" rel="stylesheet" type="text/css" />
        @yield('style')


    </head>
    <body class="fixed-header horizontal-menu horizontal-app-menu dashboard">

        @include('admin.partials.header')


    <div class="page-container">
        <div class="page-content-wrapper">

          <div class="content sm-gutter">
            <div class="container-fluid sm-padding-10 pt-3">
                <div class="row">
                    @include('admin.partials.left_sidebar')
                    <div class="col-md-8 p-2">
                        @yield('content')
                    </div>
                    @include('admin.partials.right_sidebar')
                </div>
            </div>
          </div>

          @include('admin.partials.footer')

        </div>
        <!-- END PAGE CONTENT WRAPPER -->
    </div>




    <script src="{{asset('public/assets/plugins/feather-icons/feather.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/assets/plugins/pace/pace.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/assets/plugins/jquery/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/assets/plugins/modernizr.custom.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/assets/plugins/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/assets/plugins/popper/umd/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/assets/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <!-- <script src="assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script> -->
    <!-- <script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script> -->
    <!-- <script src="assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script> -->
    <!-- <script src="assets/plugins/jquery-actual/jquery.actual.min.js"></script> -->
    <script src="{{asset('public/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
    <!-- <script type="text/javascript" src="assets/plugins/select2/js/select2.full.min.js"></script> -->
    <!-- <script type="text/javascript" src="assets/plugins/classie/classie.js"></script> -->
    <!-- <script src="assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script> -->
    <!-- <script src="assets/plugins/nvd3/lib/d3.v3.js" type="text/javascript"></script> -->
    <!-- <script src="assets/plugins/nvd3/nv.d3.min.js" type="text/javascript"></script> -->
    <!-- <script src="assets/plugins/nvd3/src/utils.js" type="text/javascript"></script> -->
    <!-- <script src="assets/plugins/nvd3/src/tooltip.js" type="text/javascript"></script> -->
    <!-- <script src="assets/plugins/nvd3/src/interactiveLayer.js" type="text/javascript"></script> -->
    <!-- <script src="assets/plugins/nvd3/src/models/axis.js" type="text/javascript"></script> -->
    <!-- <script src="assets/plugins/nvd3/src/models/line.js" type="text/javascript"></script> -->
    <!-- <script src="assets/plugins/nvd3/src/models/lineWithFocusChart.js" type="text/javascript"></script> -->
    <!-- <script src="assets/plugins/rickshaw/rickshaw.min.js"></script> -->
    <!-- <script src="assets/plugins/mapplic/js/hammer.min.js"></script> -->
    <!-- <script src="assets/plugins/mapplic/js/jquery.mousewheel.js"></script> -->
    <!-- <script src="assets/plugins/mapplic/js/mapplic.js"></script> -->

    <script src="{{asset('public/assets/js/pages.js')}}"></script>
    <script src="{{asset('public/assets/js/dashboard.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/assets/js/notifications.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/assets/js/scripts.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/js/app.js')}}" type="text/javascript"></script>

    @yield('scripts')

    {{-- Script for notification --}}
    <script>
        // @if(Session::has('message'))
        //     alert('session has a message');
        // @endif


        @if(Session::has('errors'))
            //alert('session has a error');
            $('.page-content-wrapper').pgNotification({
                    style: 'simple',
                    message: 'There is a error',
                    position: 'top',
                    timeout: 0,
                    type: 'success'
                }).show();
        @endif

        $('#alert').delay(5000).fadeOut('slow');
        $('.alert').delay(5000).fadeOut('slow');
    </script>

  </body>
</html>
