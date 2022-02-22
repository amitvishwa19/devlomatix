@extends('client.layout.layout')

@section('title','Job Alerts')


@section('style')
@endsection


@section('content')
<section class="overlape">
    <div class="block no-padding">
        <div data-velocity="-.1" style="background: url({{asset('public/client/images/resource/mslider1.jpg')}}) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Welcome {{Auth::user()->firstname,Auth::user()->lastname}}</h3>
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

                {{-- Candidate dashboard sidebar --}}
                @include('client.pages.candidate.sidebar')

                <div class="col-lg-9 column">
                    <div class="padding-left">

                        <div class="manage-jobs-sec">
                            <h3>Job Alerts</h3>
                            <table class="alrt-table">
                                <thead>
                                    <tr>
                                        <td>Alert Details</td>
                                        <td class="text-right">Email Frequency</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="table-list-title">
                                                <h3><a href="#" title="">Test Title</a></h3>
                                                <span>Search Keywords: 2, 60, Crawley RH10 8XH, United Kingdom</span>
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="action_job">
                                                <li><span>Delete</span><a href="#" title=""><i class="la la-trash-o"></i></a></li>
                                            </ul>
                                            <span>Never</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="table-list-title">
                                                <h3><a href="#" title="">Test Title</a></h3>
                                                <span>Search Keywords: 2, 60, Crawley RH10 8XH, United Kingdom</span>
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="action_job">
                                                <li><span>Delete</span><a href="#" title=""><i class="la la-trash-o"></i></a></li>
                                            </ul>
                                            <span>Never</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="table-list-title">
                                                <h3><a href="#" title="">Test Title</a></h3>
                                                <span>Search Keywords: 2, 60, Crawley RH10 8XH, United Kingdom</span>
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="action_job">
                                                <li><span>Delete</span><a href="#" title=""><i class="la la-trash-o"></i></a></li>
                                            </ul>
                                            <span>Never</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="table-list-title">
                                                <h3><a href="#" title="">Test Title</a></h3>
                                                <span>Search Keywords: 2, 60, Crawley RH10 8XH, United Kingdom</span>
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="action_job">
                                                <li><span>Delete</span><a href="#" title=""><i class="la la-trash-o"></i></a></li>
                                            </ul>
                                            <span>Never</span>
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
    <script src="{{asset('public/client/js/jquery.scrollbar.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/client/js/circle-progress.min.js')}}" type="text/javascript"></script>

  	<script>
  		$(function(){
         'use strict'





      });
  	</script>

@endsection
