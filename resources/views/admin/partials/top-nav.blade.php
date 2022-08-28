<!-- Top Bar Start -->
<div class="topbar">
    <!-- Navbar -->
    <nav class="navbar-custom">
        <ul class="list-unstyled topbar-nav float-right mb-0">

            <!-- App Notifications -->
            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    <i data-feather="bell" class="align-self-center topbar-icon"></i>
                    <span class="badge badge-danger badge-pill noti-icon-badge">2</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-lg pt-0">

                    <h6 class="dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center">
                        Notifications <span class="badge badge-primary badge-pill">2</span>
                    </h6>
                    <div class="notification-menu" data-simplebar>
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-right text-muted pl-2">2 min ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <i data-feather="shopping-cart" class="align-self-center icon-xs"></i>
                                </div>
                                <div class="media-body align-self-center ml-2 text-truncate">
                                    <h6 class="my-0 font-weight-normal text-dark">Your order is placed</h6>
                                    <small class="text-muted mb-0">Dummy text of the printing and industry.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-right text-muted pl-2">10 min ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <img src="{{asset('public/admin/assets/images/users/user-4.jpg')}}" alt="" class="thumb-sm rounded-circle">
                                </div>
                                <div class="media-body align-self-center ml-2 text-truncate">
                                    <h6 class="my-0 font-weight-normal text-dark">Meeting with designers</h6>
                                    <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-right text-muted pl-2">40 min ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <i data-feather="users" class="align-self-center icon-xs"></i>
                                </div>
                                <div class="media-body align-self-center ml-2 text-truncate">
                                    <h6 class="my-0 font-weight-normal text-dark">UX 3 Task complete.</h6>
                                    <small class="text-muted mb-0">Dummy text of the printing.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-right text-muted pl-2">1 hr ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <img src="{{auth()->user()->avatar_url ? auth()->user()->avatar_url : asset('public/admin/assets/images/users/user-3.jpg')}}" alt="" class="thumb-sm rounded-circle">
                                </div>
                                <div class="media-body align-self-center ml-2 text-truncate">
                                    <h6 class="my-0 font-weight-normal text-dark">Your order is placed</h6>
                                    <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-right text-muted pl-2">2 hrs ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <i data-feather="check-circle" class="align-self-center icon-xs"></i>
                                </div>
                                <div class="media-body align-self-center ml-2 text-truncate">
                                    <h6 class="my-0 font-weight-normal text-dark">Payment Successfull</h6>
                                    <small class="text-muted mb-0">Dummy text of the printing.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                    </div>
                    <!-- All-->
                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                        View all <i class="fi-arrow-right"></i>
                    </a>
                </div>
            </li>


            <!-- Usere Info Area -->
            <li class="dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                    aria-haspopup="false" aria-expanded="false">

                    @if(Auth::user()->firstName)
                        <span class="ml-1 nav-user-name hidden-sm">{{Auth::user()->firstName }},{{Auth::user()->lastName }}</span>
                    @else
                        <span class="ml-1 nav-user-name hidden-sm">{{Auth::user()->email }}</span>
                    @endif


                    @if(!Auth::user()->avatar_url)
                        @if(Auth::user()->firstName)
                            <div class="avatar-box thumb-sm align-self-center mt-2">
                                <span class="avatar-title bg-soft-pink rounded-circle">{{substr(Auth::user()->firstName, 0, 1) . substr(Auth::user()->lastName, 0, 1)}}</span>
                            </div>
                        @else
                            <div class="avatar-box thumb-sm align-self-center mt-2">
                                <span class="avatar-title bg-soft-pink rounded-circle">{{substr(Auth::user()->email, 0, 2)}}</span>
                            </div>
                        @endif
                    @else
                        <img src="{{auth()->user()->avatar_url ? auth()->user()->avatar_url : asset('public/admin/assets/images/users/user-3.jpg')}}" alt="profile-user" class="rounded-circle thumb-md" />
                    @endif





                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{route('setting.index',['type'=>'profile'])}}"><i data-feather="user" class="align-self-center icon-xs icon-dual mr-1"></i> Profile</a>


                    
                        @if(!session('impersonated_by'))
                        @if(auth()->user()->can('impersonate'))
                            <a class="dropdown-item" href="{{route('impersonate.index')}}"><i data-feather="repeat" class="align-self-center icon-xs icon-dual mr-1"></i> Impersonate</a>
                            @endif

                        @else
                            <a class="dropdown-item" href="{{route('impersonate.leave')}}"><i data-feather="repeat" class="align-self-center icon-xs icon-dual mr-1"></i>Back to LoggedIn User</a>
                        @endif
                    

                    <!-- Logout Button -->
                    <div class="dropdown-divider mb-0"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout').submit();">
                        <i data-feather="power" class="align-self-center icon-xs icon-dual mr-1"></i> Logout
                    </a>
                    <form id="logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>


                </div>
            </li>

        </ul><!--end topbar-nav-->


        <!-- Shrink Side menu button -->
        <ul class="list-unstyled topbar-nav mb-0">
            <li>
                <button class="nav-link button-menu-mobile">
                    <i data-feather="menu" class="align-self-center topbar-icon"></i>
                </button>
            </li>
            
        </ul>



    </nav>
    <!-- end navbar-->
</div>
<!-- Top Bar End -->
