@extends('layouts.auth')

@section('title','Register')

@section('content')

<div class="login-wrapper">

<div class="bg-pic">

    <img src="{{asset('public/assets/img/demo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg')}}">

</div>

<div class="login-container bg-white">
    <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-10 sm-p-l-15 sm-p-r-15 sm-p-t-40">
        <!-- <img src="{{asset('public/assets/img/logo.png')}}" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">  -->
        <h4><b>{{ config('app.name', 'Laravel') }}</b></h4>
        <p class="p-t-35"><b>Register for new account</b></p>



        <form id="form-login" class="p-t-15" role="form" method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group form-group-default">
                <label>First Name</label>
                <div class="controls">
                    <input type="text" name="firstName" class="form-control" value="{{ old('firstName') }}" autocomplete="firstName" autofocus>
                </div>
                @error('firstName')
                    <small>{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group form-group-default">
                <label>Last Name</label>
                <div class="controls">
                    <input type="text" name="lastName" class="form-control" value="{{ old('lastName') }}" autocomplete="lastName" autofocus>
                </div>
                @error('lastName')
                    <small>{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group form-group-default">
                <label>Email</label>
                <div class="controls">
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}" required autocomplete="email" autofocus>
                </div>
                @error('email')
                    <small>{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group form-group-default">
                <label>{{ __('Password') }}</label>
                <div class="controls">
                    <input type="password" class="form-control" name="password">
                </div>
                @error('password')
                    <small>{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group form-group-default">
                <label>{{ __('Confirm Password') }}</label>
                <div class="controls">
                    <input type="password" class="form-control" name="password_confirmation">
                </div>
            </div>

            <div class="row">

                <div class="col-md-10 align-items-center">
                    <a href="{{route('login')}}" class="text-info small"><b>Already Have Account? Login Here</b></a>
                </div>
            </div>

            <button class="btn btn-primary btn-cons m-t-10" type="submit">Sign Up</button>
        </form>

        <div class="pull-bottom sm-pull-bottom">
          <div class="m-b-30 p-r-80 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix">
            <div class="col-sm-9 no-padding m-t-10">
              <p>
                <small>
                    Create a {{ config('app.name', 'Laravel') }} account. If you have a facebook account, log into it for this
                    process. Sign in with
                    <a href="#" class="text-info">Facebook</a> or
                    <a href="#"class="text-info">Google</a>
                </small>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

</div>
@endsection



