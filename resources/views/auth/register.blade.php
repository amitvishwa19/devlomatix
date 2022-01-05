@extends('auth.layout')

@section('title','Register')

@section('content')
    <div class="login-page">
        <div class="row">
            <div class="col-9 left-area">
                <img src="https://miro.medium.com/max/2625/1*qAX1633WKgkCBjW-7BICCA.jpeg" alt="">

            </div>

            <div class="col-3 right-area">

                <div class="login-content">
                    <div class="brand-logo">
                        <a href="{{route('home')}}">
                            <img src="{{asset('public/admin/assets/1598601943DZ-Logo Orange-black.png')}}" alt="" style="width: 150px;">
                         </a>
                    </div>

                    <div class="login-form">
                        <form method="POST" action="{{ route('register') }}" class="mg-b-20">
                            @csrf
                            <h5 class="info-title">Sign Up for New account</h5>

                            @if(Session::has('inactive'))
                              <!-- <p class="alert alert-info">{{ Session::get('message') }}</p> -->
                              <div class="alert alert-info" role="alert">
                                Your account is not activated ! Please activate your account. <a href="">Click here</a> to resend activation link
                              </div>
                            @endif

                            <div class="form-group">
                                <label for="email">Email Address</label>
                               <input type="text" class="form-control" name="email" placeholder="yourname@yourdomain.com" required="" autofocus value="{{ old('email') }}"/>
                               @if ($errors->has('email'))
                               <span class="help-block">
                                  <strong>{{ $errors->first('email') }}</strong>
                               </span>
                               @endif
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                               <input type="password" class="form-control" name="password" placeholder="Enter your password" required="" />
                               @if ($errors->has('password'))
                               <span class="help-block">
                                  <strong>{{ $errors->first('password') }}</strong>
                               </span>
                               @endif
                            </div>

                            <div class="form-group">
                                <label for="password">Confirm Password</label>
                               <input type="password" class="form-control" name="password_confirmation" placeholder="Enter your password" required="" />
                               @if ($errors->has('password_confirmation'))
                               <span class="help-block">
                                  <strong>{{ $errors->first('password_confirmation') }}</strong>
                               </span>
                               @endif
                            </div>



                            <div>
                               <button class="btn btn-primary btn-login submit btn-sm pull-left form-control" style="margin-top: 5px;">Sign Up</button>
                            </div>

                        </form>

                        <div class="clearfix"></div>
                        <div class="separator">
                            <p class="change_link">Already have Account?
                                <a href="{{ route('login') }}" class="to_register"> Login here </a>
                            </p>
                            <div class="clearfix"></div>
                            <br />

                        </div>
                        <p class="info">Your data will not be used outside of devlomatix. By signing up you agree that your statistics may be used anonymously inside www.devlomatix.com.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
