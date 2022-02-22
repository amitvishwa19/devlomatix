@extends('client.layout.layout')

@section('title','Change Password')


@section('style')
@endsection


@section('content')

<section class="overlape">
    <div class="block no-padding">
        <div data-velocity="-.1" style="background: url(images/resource/mslider1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Welcome {{Auth::user()->firstname}},{{Auth::user()->lastname}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="block no-padding">
        <div class="container">
             <div class="row no-gape">


                {{-- Recruiter dashboard sidebar --}}
                @include('client.pages.recruiter.sidebar')


                 <div class="col-lg-9 column">
                     <div class="padding-left">

                        <div class="manage-jobs-sec">
                            <h3>Change Password</h3>
                            <div class="change-password">
                                <form class="needs-validation" novalidate>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <span class="pf-title">Old Password</span>
                                            <div class="pf-field">
                                                <input type="password" />
                                            </div>
                                            <span class="pf-title">New Password</span>
                                            <div class="pf-field">
                                                <input type="password" />
                                            </div>
                                            <span class="pf-title">Confirm Password</span>
                                            <div class="pf-field">
                                                <input type="password" />
                                            </div>
                                            <button type="submit">Update</button>
                                        </div>
                                        <div class="col-lg-6">
                                            <i class="la la-key big-icon"></i>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                     </div>
                </div>
             </div>
        </div>
    </div>
</section>

@endsection



@section('modal')
@endsection


@section('javascript')


  	<script>
  		$(function(){
         'use strict'





      });
  	</script>

@endsection
