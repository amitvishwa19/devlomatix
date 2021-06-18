<!-- Left Sidenav -->
<div class="left-sidenav">
    <!-- LOGO -->
    <div class="brand">
        <a href="{{route('admin.dashboard')}}" class="logo">
            <span class="admin-sidebar-logo-title">
                <img src="{{asset('public/admin/assets/images/logo-sm.png')}}" alt="logo-small" class="logo-sm">
                <span class="title-text">DevloMatix</span>
            </span>
            {{-- <span>
                <img src="{{asset('public/admin/assets/images/logo.png')}}" alt="logo-large" class="logo-lg logo-light">
                <img src="{{asset('public/admin/assets/images/logo-dark.png')}}" alt="logo-large" class="logo-lg logo-dark">
            </span> --}}
        </a>
    </div>
    <!--end logo-->
    <div class="menu-content h-100" data-simplebar>
        <ul class="metismenu left-sidenav-menu">
            <li class="menu-label mt-0">Main</li>
            <li>
                <a href="{{route('admin.dashboard')}}">
                     <i data-feather="home" class="align-self-center menu-icon"></i><span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="{{route('post.index')}}">
                    <i data-feather="cast" class="align-self-center menu-icon"></i><span>Posts</span>
                </a>
            </li>

            <li>
                <a href="widgets.html">
                    <i data-feather="list" class="align-self-center menu-icon"></i><span>Categories</span>
                </a>
            </li>

            <li>
                <a href="widgets.html">
                    <i data-feather="menu" class="align-self-center menu-icon"></i><span>Menus</span>
                </a>
            </li>

            <li>
                <a href="{{route('subscribe.index')}}">
                    <i data-feather="thumbs-up" class="align-self-center menu-icon"></i><span>Subscriptions</span>
                </a>
            </li>

            <li>
                <a href="{{route('inquire')}}">
                    <i data-feather="zap" class="align-self-center menu-icon"></i><span>Inquiries</span>
                </a>
            </li>

            <hr class="hr-dashed hr-menu">

            <li>
                <a href="javascript: void(0);"><i data-feather="key" class="align-self-center menu-icon"></i><span>Access Control</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li>
                        <a href="javascript: void(0);">
                            <i class="ti-control-record"></i>Users</a>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="ti-control-record"></i>Roles</a>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="ti-control-record"></i>Permissions</a>
                    </li>

                </ul>
            </li>



            <hr class="hr-dashed hr-menu">

            <li>
                <a href="javascript: void(0);"><i data-feather="codesandbox" class="align-self-center menu-icon"></i><span>Sandbox</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li>
                        <a href="{{route('sandbox.mail')}}">
                            <i class="ti-control-record"></i>Mail</a>
                    </li>

                    {{-- <li>
                        <a href="javascript: void(0);">
                            <i class="ti-control-record"></i>Roles</a>
                    </li> --}}


                </ul>
            </li>


            <li>
                <a href="{{route('activity.index')}}">
                    <i data-feather="activity" class="align-self-center menu-icon"></i><span>Activity Logs</span>
                </a>
            </li>

            <li>
                <a href="{{route('admin.logs')}}">
                    <i data-feather="alert-triangle" class="align-self-center menu-icon"></i><span>Error Logs</span>
                </a>
            </li>

            <li>
                <a href="widgets.html">
                    <i data-feather="settings" class="align-self-center menu-icon"></i><span>Settings</span>
                </a>
            </li>

        </ul>

        <div class="update-msg text-center">
            <a href="javascript: void(0);" class="float-right close-btn text-muted" data-dismiss="update-msg" aria-label="Close" aria-hidden="true">
                <i class="mdi mdi-close"></i>
            </a>
            <p class="mb-3">We Design and Develop High Quality and Enterprise ready Web Applications</p>
            <a href="javascript: void(0);" class="btn btn-outline-warning btn-sm"> &copy; 2021 Devlomatix Solutions Version: {{config('app.version')}}</a>
        </div>
    </div>
</div>
<!-- end left-sidenav-->
