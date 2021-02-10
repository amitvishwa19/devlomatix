<div class="col-md-2 p-2">

    <div class="card social-card share">
        <div class="circle" data-toggle="tooltip" title="" data-container="body" data-original-title="Label">
        </div>
        <div class="card-header">
          <div class="user-pic">
            <img alt="Profile Image" width="33" height="33" src="{{asset('public/assets/img/profiles/8x.jpg')}}">
          </div>
          <h5 class="mt-1">{{ ucfirst(Auth::user()->firstName) }} {{ ucfirst(Auth::user()->lastName) }}</h5>
        </div>
        <div class="card-description">
          <p>What you think, you become. What you feel, you attract. What you imagine, you create - Buddha. <a href="#">#quote</a></p>
          <div class="via">via Twitter</div>
        </div>
    </div>

    <div class="card social-card share">
        <div class="circle" data-toggle="tooltip" title="" data-container="body" data-original-title="Label">
        </div>
        <div class="card-header clearfix">
            <h5> Access Management</h5>
        </div>
        <div class="card-description">
            <li><a href="{{route('user.index')}}">Users</a></li>
            <li><a href="{{route('role.index')}}">Roles</a></li>
            <li><a href="{{route('permission.index')}}">Permissions</a></li>
        </div>
    </div>

    @role('posts_section')
    {{-- Post Area --}}
    <div class="card social-card share">
        <div class="circle" data-toggle="tooltip" title="" data-container="body" data-original-title="Label">
        </div>
        <div class="card-header clearfix">
            <h5>Posts</h5>
        </div>
        <div class="card-description">
            <li><a href="{{route('posts.index')}}">All Posts</a></li>
            <li><a href="">Create Post</a></li>
        </div>
    </div>
    @endrole

    @role('digilearn')
    {{-- Digilearn Area --}}
    <div class="card social-card share">
        <div class="circle" data-toggle="tooltip" title="" data-container="body" data-original-title="Label">
        </div>
        <div class="card-header clearfix">
            <h5>Digilearn</h5>
        </div>
        <div class="card-description">
            <li><a href="{{route('classroom.index')}}">Classrooms</a></li>
            {{-- <li><a href="">Create Post</a></li> --}}
        </div>
    </div>
    @endrole


    {{-- Post Area --}}
    <div class="card social-card share">
        <div class="circle" data-toggle="tooltip" title="" data-container="body" data-original-title="Label">
        </div>
        <div class="card-header clearfix">
            <h5>App Essentials</h5>
        </div>
        <div class="card-description">
            <li><a href="{{route('posts.index')}}">Error Logs</a></li>
            <li><a href="{{route('posts.index')}}">Activity Logs</a></li>
            <li><a href="{{route('posts.index')}}">Settings</a></li>
        </div>
    </div>





</div>
