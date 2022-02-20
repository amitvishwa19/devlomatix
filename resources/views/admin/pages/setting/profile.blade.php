
<div class="row">

    <div class="col-lg-12">

    <div class="card">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col">                      
                    <h4 class="card-title">Personal Information</h4>                      
                </div><!--end col-->                                                       
            </div>  <!--end row-->                                  
        </div><!--end card-header-->
        <div class="card-body">                       
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 text-right mb-lg-0 align-self-center">First Name</label>
                <div class="col-lg-9 col-xl-8">
                    <input class="form-control" type="text" value="{{auth()->user()->firstName}}{{old('firstname')}}" name="firstname">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 text-right mb-lg-0 align-self-center">Last Name</label>
                <div class="col-lg-9 col-xl-8">
                    <input class="form-control" type="text" value="{{auth()->user()->lastName}}{{old('lastname')}}" name="lastname">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 text-right mb-lg-0 align-self-center">Username</label>
                <div class="col-lg-9 col-xl-8">
                    <input class="form-control" type="text" value="{{auth()->user()->username}}{{old('username')}}" name="username">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 text-right mb-lg-0 align-self-center">Email Address</label>
                <div class="col-lg-9 col-xl-8">
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="las la-at"></i></span></div>
                        <input type="text" class="form-control" value="{{auth()->user()->email}}{{old('email')}}" placeholder="Email" name="email">
                    </div>
                </div>
            </div>                                                
        </div>                                            
    </div>

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Password Management</h4>
        </div><!--end card-header-->
        <div class="card-body"> 
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 text-right mb-lg-0 align-self-center">Current Password</label>
                <div class="col-lg-9 col-xl-8">
                    <input class="form-control" type="password" placeholder="Password" name="current_password">
                    <a href="#" class="text-primary font-12">Forgot password ?</a>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 text-right mb-lg-0 align-self-center">New Password</label>
                <div class="col-lg-9 col-xl-8">
                    <input class="form-control" type="password" placeholder="New Password" name="new_password">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 text-right mb-lg-0 align-self-center">Confirm Password</label>
                <div class="col-lg-9 col-xl-8">
                    <input class="form-control" type="password" placeholder="Re-Password" name="confirm_password">
                    <span class="form-text text-muted font-12">Never share your password.</span>
                </div>
            </div>
    
        </div>
    </div>
    </div>
</div>

