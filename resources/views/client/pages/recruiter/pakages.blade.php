@extends('client.layout.layout')

@section('title','Pakages')


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
                            <h3>Packages</h3>
                            <table class="pkges-table">
                                <thead>
                                    <tr>
                                        <td>Transaction ID</td>
                                        <td>Package</td>
                                        <td>Expiry</td>
                                        <td>Total Jobs/CVs</td>
                                        <td>Used</td>
                                        <td>Remaining</td>
                                        <td>Status</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <span>221319456</span>
                                        </td>
                                        <td>
                                            <div class="table-list-title">
                                                <h3><a href="#" title="">Supper Jobs</a></h3>
                                            </div>
                                        </td>
                                        <td>
                                            <span>April 04, 2017</span>
                                        </td>
                                        <td>
                                            <span>125</span>
                                        </td>
                                        <td>
                                            <span>0</span>
                                        </td>
                                        <td>
                                            <span>200</span>
                                        </td>
                                        <td>
                                            <span>Pending</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>221319456</span>
                                        </td>
                                        <td>
                                            <div class="table-list-title">
                                                <h3><a href="#" title="">Supper Jobs</a></h3>
                                            </div>
                                        </td>
                                        <td>
                                            <span>April 04, 2017</span>
                                        </td>
                                        <td>
                                            <span>125</span>
                                        </td>
                                        <td>
                                            <span>0</span>
                                        </td>
                                        <td>
                                            <span>200</span>
                                        </td>
                                        <td>
                                            <span>Pending</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>221319456</span>
                                        </td>
                                        <td>
                                            <div class="table-list-title">
                                                <h3><a href="#" title="">Supper Jobs</a></h3>
                                            </div>
                                        </td>
                                        <td>
                                            <span>April 04, 2017</span>
                                        </td>
                                        <td>
                                            <span>125</span>
                                        </td>
                                        <td>
                                            <span>0</span>
                                        </td>
                                        <td>
                                            <span>200</span>
                                        </td>
                                        <td>
                                            <span>Pending</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>221319456</span>
                                        </td>
                                        <td>
                                            <div class="table-list-title">
                                                <h3><a href="#" title="">Supper Jobs</a></h3>
                                            </div>
                                        </td>
                                        <td>
                                            <span>April 04, 2017</span>
                                        </td>
                                        <td>
                                            <span>125</span>
                                        </td>
                                        <td>
                                            <span>0</span>
                                        </td>
                                        <td>
                                            <span>200</span>
                                        </td>
                                        <td>
                                            <span>Pending</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
