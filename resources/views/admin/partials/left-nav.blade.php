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
            
            <li>
                <a href="{{route('admin.dashboard')}}">
                     <i data-feather="home" class="align-self-center menu-icon"></i><span>Dashboard</span>
                </a>
            </li>

            <hr class="hr-dashed hr-menu">
            <li>
                <a href="{{route('post.index')}}">
                     <i data-feather="send" class="align-self-center menu-icon"></i><span>Posts</span>
                </a>
            </li>
            <li>
                <a href="{{route('category.index')}}">
                     <i data-feather="pause" class="align-self-center menu-icon"></i><span>Category</span>
                </a>
            </li>
            <li>
                <a href="{{route('subscription.index')}}">
                    <i data-feather="thumbs-up" class="align-self-center menu-icon"></i><span>Subscriptions</span>
                </a>
            </li>

            <li>
                <a href="{{route('inquiry.index')}}">
                    <i data-feather="zap" class="align-self-center menu-icon"></i><span>Inquiries</span>
                </a>
            </li>
            <li>
                <a href="{{route('menu.index')}}">
                    <i data-feather="menu" class="align-self-center menu-icon"></i><span>Menu</span>
                </a>
            </li>



            <!-- <hr class="hr-dashed hr-menu"> -->

            <!-- <li>
                <a href="{{route('mtemplate.index')}}">
                    <i data-feather="send" class="align-self-center menu-icon"></i><span>Mail Templates</span>
                </a>
            </li>

            <li>
                <a href="{{route('file.index')}}">
                    <i data-feather="file" class="align-self-center menu-icon"></i><span>File Manager</span>
                </a>
            </li>

            <li>
                <a href="{{route('chat.index')}}">
                    <i data-feather="message-square" class="align-self-center menu-icon"></i><span>Chat</span>
                </a>
            </li> -->

            {{-- <li>
                <a href="javascript: void(0);" class=""><i data-feather="layout" class="align-self-center menu-icon"></i>Pages <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="active"><a href="{{route('project.index')}}">Blog</a></li>
                    <li><a href="apps-project-projects.html">E-comm</a></li>
                    <li><a href="apps-project-board.html">E-learning</a></li>
                </ul>
            </li> --}}

            <hr class="hr-dashed hr-menu">

            <li>
                <a href="{{route('task.index')}}">
                    <i data-feather="check-square" class="align-self-center menu-icon"></i><span>Tasks</span>
                </a>
            </li>

            <li>
                <a href="{{route('contact.index')}}">
                    <i data-feather="user-check" class="align-self-center menu-icon"></i><span>Contacts</span>
                </a>
            </li>

            <li>
                <a href="{{route('client.index')}}">
                    <i data-feather="users" class="align-self-center menu-icon"></i><span>Clients</span>
                </a>
            </li>

            <li>
                <a href="{{route('project.index')}}">
                    <i data-feather="layers" class="align-self-center menu-icon"></i><span>Projects</span>
                </a>
            </li>




            <hr class="hr-dashed hr-menu">

            <li>
                <a href="javascript: void(0);"><i data-feather="key" class="align-self-center menu-icon"></i><span>Access Control</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li>
                        <a href="{{route('user.index')}}">
                            <i class="ti-control-record"></i>Users</a>
                    </li>

                    <li>
                        <a href="{{route('role.index')}}">
                            <i class="ti-control-record"></i>Roles</a>
                    </li>

                    <li>
                        <a href="{{route('permission.index')}}">
                            <i class="ti-control-record"></i>Permissions</a>
                    </li>

                </ul>
            </li>



            <hr class="hr-dashed hr-menu">

            

        
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
                <a href="{{route('setting.index')}}">
                    <i data-feather="settings" class="align-self-center menu-icon"></i><span>Settings</span>
                </a>
            </li>

        </ul>

        <div class="update-msg text-center">
            <a href="javascript: void(0);" class="btn btn-outline-warning btn-sm"> &copy; 2021 Devlomatix Solutions Version: {{config('app.version')}}</a>
        </div>
    </div>
</div>
<!-- end left-sidenav-->
