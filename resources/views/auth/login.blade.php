@extends('layouts.auth')

@section('title','Login')

@section('content')

<div class="login-wrapper">

<div class="bg-pic">

    <img src="{{asset('public/assets/img/demo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg')}}">

</div>

<div class="login-container bg-white">
    <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
        {{-- <img src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22"> --}}
        <h4><b>{{ config('app.name', 'Laravel') }}</b></h4>
        <p class="p-t-35">Sign into your account</p>



        <form id="form-login" class="p-t-15" role="form" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group form-group-default">
                <label>Email</label>
                <div class="controls">
                    <input type="text" name="email" class="form-control" value="{{ old('email') }}" required autocomplete="email" autofocus>
                </div>
                @error('email')
                    <small>{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group form-group-default">
                <label>Password</label>
                <div class="controls">
                <input type="password" class="form-control" name="password">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 no-padding sm-p-l-10">
                <div class="checkbox ">
                    <input type="checkbox" name="remember" value="1" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="checkbox1">Keep Me Signed in</label>
                </div>
                </div>
                <div class="col-md-6 d-flex align-items-center justify-content-end">
                <a href="{{route('register')}}" class="text-info small">No Account? Register Here</a>
                </div>
            </div>

            <button class="btn btn-primary btn-cons m-t-10" type="submit">Sign in</button>
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



