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



    <div class="overlay hide" data-pages="search">
        <!-- BEGIN Overlay Content !-->
        <div class="overlay-content has-results m-t-20">
          <!-- BEGIN Overlay Header !-->
          <div class="container-fluid">
            <!-- BEGIN Overlay Logo !-->
            <img class="overlay-brand" src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">
            <!-- END Overlay Logo !-->
            <!-- BEGIN Overlay Close !-->
            <a href="#" class="close-icon-light overlay-close text-black fs-16">
              <i class="pg-close"></i>
            </a>
            <!-- END Overlay Close !-->
          </div>
          <!-- END Overlay Header !-->
          <div class="container-fluid">
            <!-- BEGIN Overlay Controls !-->
            <input id="overlay-search" class="no-border overlay-search bg-transparent" placeholder="Search..." autocomplete="off" spellcheck="false">
            <br>
            <div class="inline-block">
              <div class="checkbox right">
                <input id="checkboxn" type="checkbox" value="1" checked="checked">
                <label for="checkboxn"><i class="fa fa-search"></i> Search within page</label>
              </div>
            </div>
            <div class="inline-block m-l-10">
              <p class="fs-13">Press enter to search</p>
            </div>
            <!-- END Overlay Controls !-->
          </div>
          <!-- BEGIN Overlay Search Results, This part is for demo purpose, you can add anything you like !-->
          <div class="container-fluid">
            <span>
                  <strong>suggestions :</strong>
              </span>
            <span id="overlay-suggestions"></span>
            <br>
            <div class="search-results m-t-40">
              <p class="bold">Pages Search Results</p>
              <div class="row">
                <div class="col-md-6">
                  <!-- BEGIN Search Result Item !-->
                  <div class="">
                    <!-- BEGIN Search Result Item Thumbnail !-->
                    <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                      <div>
                        <img width="50" height="50" src="assets/img/profiles/avatar.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">
                      </div>
                    </div>
                    <!-- END Search Result Item Thumbnail !-->
                    <div class="p-l-10 inline p-t-5">
                      <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on pages</h5>
                      <p class="hint-text">via john smith</p>
                    </div>
                  </div>
                  <!-- END Search Result Item !-->
                  <!-- BEGIN Search Result Item !-->
                  <div class="">
                    <!-- BEGIN Search Result Item Thumbnail !-->
                    <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                      <div>T</div>
                    </div>
                    <!-- END Search Result Item Thumbnail !-->
                    <div class="p-l-10 inline p-t-5">
                      <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> related topics</h5>
                      <p class="hint-text">via pages</p>
                    </div>
                  </div>
                  <!-- END Search Result Item !-->
                  <!-- BEGIN Search Result Item !-->
                  <div class="">
                    <!-- BEGIN Search Result Item Thumbnail !-->
                    <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                      <div><i class="fa fa-headphones large-text "></i>
                      </div>
                    </div>
                    <!-- END Search Result Item Thumbnail !-->
                    <div class="p-l-10 inline p-t-5">
                      <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> music</h5>
                      <p class="hint-text">via pagesmix</p>
                    </div>
                  </div>
                  <!-- END Search Result Item !-->
                </div>
                <div class="col-md-6">
                  <!-- BEGIN Search Result Item !-->
                  <div class="">
                    <!-- BEGIN Search Result Item Thumbnail !-->
                    <div class="thumbnail-wrapper d48 circular bg-info text-white inline m-t-10">
                      <div><i class="fa fa-facebook large-text "></i>
                      </div>
                    </div>
                    <!-- END Search Result Item Thumbnail !-->
                    <div class="p-l-10 inline p-t-5">
                      <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on facebook</h5>
                      <p class="hint-text">via facebook</p>
                    </div>
                  </div>
                  <!-- END Search Result Item !-->
                  <!-- BEGIN Search Result Item !-->
                  <div class="">
                    <!-- BEGIN Search Result Item Thumbnail !-->
                    <div class="thumbnail-wrapper d48 circular bg-complete text-white inline m-t-10">
                      <div><i class="fa fa-twitter large-text "></i>
                      </div>
                    </div>
                    <!-- END Search Result Item Thumbnail !-->
                    <div class="p-l-10 inline p-t-5">
                      <h5 class="m-b-5">Tweats on<span class="semi-bold result-name"> ice cream</span></h5>
                      <p class="hint-text">via twitter</p>
                    </div>
                  </div>
                  <!-- END Search Result Item !-->
                  <!-- BEGIN Search Result Item !-->
                  <div class="">
                    <!-- BEGIN Search Result Item Thumbnail !-->
                    <div class="thumbnail-wrapper d48 circular text-white bg-danger inline m-t-10">
                      <div><i class="fa fa-google-plus large-text "></i>
                      </div>
                    </div>
                    <!-- END Search Result Item Thumbnail !-->
                    <div class="p-l-10 inline p-t-5">
                      <h5 class="m-b-5">Circles on<span class="semi-bold result-name"> ice cream</span></h5>
                      <p class="hint-text">via google plus</p>
                    </div>
                  </div>
                  <!-- END Search Result Item !-->
                </div>
              </div>
            </div>
          </div>
          <!-- END Overlay Search Results !-->
        </div>
        <!-- END Overlay Content !-->
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
