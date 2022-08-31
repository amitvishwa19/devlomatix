<!-- Left Sidenav -->
<div class="left-sidenav">
    <!-- LOGO -->
    <div class="brand mt-2">
        <a href="{{route('admin.dashboard')}}" class="logo">
            <span class="admin-sidebar-logo-title">
                @if(setting('app_icon'))
                    <img src="{{setting('app_icon')}}" alt="logo-small" class="logo-sm">
                @else
                    <span class="title-text">{{setting('app_name')}}</span>
                @endif
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

            @hasanyrole('super_admin|post_management')

                @if(auth()->user()->can('admin_dashboard'))
                
                @endif

                
                @if(auth()->user()->can('post'))
                    <li>
                        <a href="{{route('post.index')}}">
                            <i data-feather="send" class="align-self-center menu-icon"></i><span>Posts</span>
                        </a>
                    </li>
                @endif


                @if(auth()->user()->can('categories'))
                    <li>
                        <a href="{{route('category.index')}}">
                            <i data-feather="pause" class="align-self-center menu-icon"></i><span>Category</span>
                        </a>
                    </li>
                @endif

                @if(auth()->user()->can('subscriptions'))
                    <li>
                        <a href="{{route('subscription.index')}}">
                            <i data-feather="thumbs-up" class="align-self-center menu-icon"></i><span>Subscriptions</span>
                        </a>
                    </li>
                @endif

                @if(auth()->user()->can('inquiries'))
                    <li>
                        <a href="{{route('inquiry.index')}}">
                            <i data-feather="zap" class="align-self-center menu-icon"></i><span>Inquiries</span>
                            
                            <span class="menu-arrow"><small class="badge badge-soft-pink font-weight-semibold ml-2">{{auth()->user()->unreadNotifications()->count()}}</small></span>
                        </a>
                    </li>
                @endif

                <!-- <li>
                    <a href="{{route('menu.index')}}">
                        <i data-feather="menu" class="align-self-center menu-icon"></i><span>Menu</span>
                    </a>
                </li> -->

                @if(auth()->user()->can('files'))
                    <li>
                        <a href="{{route('filemanager.index',['type'=>'all','id'=>0])}}">
                            <i data-feather="grid" class="align-self-center menu-icon"></i><span>Files</span>
                        </a>
                    </li>
                @endif
                
            @endhasrole


            <!-- Sandbox -->
            @hasrole('super_admin|sandbox')
                <li>
                    <a href="javascript: void(0);"><i data-feather="cast" class="align-self-center menu-icon"></i><span>Sandbox</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        

                    @if(auth()->user()->can('stockmarket'))
                        <li>
                            <a href="{{route('admin.sandbox.trading')}}"><i class="ti-control-record"></i>Stock Market Analysis</a>
                        </li>
                    @endif
                    

                    </ul>
                </li>
                
            @endhasrole


            @hasrole('super_admin|shoppee')
                
                <li>
                    <a href="javascript: void(0);"><i data-feather="shopping-cart" class="align-self-center menu-icon"></i><span>Shoppee</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        
                        <li>
                            <a href="{{route('shoppee.dashboard')}}"><i class="ti-control-record"></i>Dashboard</a>
                        </li>

                        <li>
                            <a href="{{route('shoppee.slider.index')}}"><i class="ti-control-record"></i>Sliders</a>
                        </li>
                        
                        <li>
                            <a href="{{route('shoppee.slider.index')}}"><i class="ti-control-record"></i>Categories</a>
                        </li>
                        
                        <!-- <li>
                            <a href="{{route('product_category.index')}}">
                                <i class="ti-control-record"></i>Categories</a>
                        </li> -->
                        <li>
                            <a href="{{route('shoppee.product.index')}}"><i class="ti-control-record"></i>Products</a>
                        </li>
                        <!-- <li>
                            <a href="{{route('product_category.index')}}">
                                <i class="ti-control-record"></i>Wishlists</a>
                        </li>
                        <li>
                            <a href="{{route('product_category.index')}}">
                                <i class="ti-control-record"></i>Carts</a>
                        </li>
                        <li>
                            <a href="{{route('product_category.index')}}">
                                <i class="ti-control-record"></i>Orders</a>
                        </li>
                        <li>
                            <a href="{{route('product_category.index')}}">
                                <i class="ti-control-record"></i>Shippings</a>
                        </li>
                        <li>
                            <a href="{{route('product_category.index')}}">
                                <i class="ti-control-record"></i>Shipments</a>
                        </li> -->

                        <li>
                            <a href="{{route('shoppee.fcm')}}"><i class="ti-control-record"></i>Push Notification</a>
                        </li>
                    

                    </ul>
                </li>
                
            @endhasrole
            
        
            @hasrole('super_admin|project_management')
                
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
                    <a href="{{route('note.index')}}">
                        <i data-feather="file-text" class="align-self-center menu-icon"></i><span>Notes</span>
                    </a>
                </li>
                
            @endhasrole
            

            @hasrole('super_admin|user_management|manage_user|manage_role|manage_permission')
                
                <li>
                    <a href="javascript: void(0);"><i data-feather="user" class="align-self-center menu-icon"></i><span>User Management</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">

                        @if(auth()->user()->can('manage_user'))
                        <li>
                            <a href="{{route('user.index')}}">
                                <i class="ti-control-record"></i>Users</a>
                        </li>
                        @endif

                        @if(auth()->user()->can('manage_role'))
                        <li>
                            <a href="{{route('role.index')}}">
                                <i class="ti-control-record"></i>Roles</a>
                        </li>
                        @endif

                        @if(auth()->user()->can('manage_permission'))
                        <li>
                            <a href="{{route('permission.index')}}">
                                <i class="ti-control-record"></i>Permissions</a>
                        </li>
                        @endif

                    </ul>
                </li>
                
            @endhasrole

            @hasrole('super_admin|app_management')
                
                @if(auth()->user()->can('activity_logs'))
                <li>
                    <a href="{{route('activity.index')}}">
                        <i data-feather="activity" class="align-self-center menu-icon"></i><span>Activity Logs</span>
                    </a>
                </li>
                @endif

                @if(auth()->user()->can('error_logs'))
                <li>
                    <a href="{{route('admin.logs')}}">
                        <i data-feather="alert-triangle" class="align-self-center menu-icon"></i><span>Error Logs</span>
                    </a>
                </li>
                @endif

                @if(auth()->user()->can('app_settings'))
                <li>
                    <a href="{{route('setting.index')}}">
                        <i data-feather="settings" class="align-self-center menu-icon"></i><span>Settings</span>
                    </a>
                </li>
                @endif

            @endhasrole

        </ul>

        <!-- <div class="update-msg text-center">
            <a href="javascript: void(0);" class="btn btn-outline-warning btn-sm"> &copy; 2021 Devlomatix Solutions Version: {{config('app.version')}}</a>
        </div> -->
    </div>
</div>
<!-- end left-sidenav-->
