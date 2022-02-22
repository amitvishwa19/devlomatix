@extends('client.layout.layout')

@section('title','CV & Cover Letters')


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
                            <h3>CV & Cover Letter</h3>
                            <div class="coverletter-sec">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <span class="pf-title">Select Your CV</span>
                                            <div class="pf-field">
                                                <select data-placeholder="Select Your CV" class="chosen">
                                                   <option>alitufan-cv</option>
                                                   <option>alitufan-cv old</option>
                                               </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <span class="pf-title">Cover Letter</span>
                                            <div class="pf-field">
                                                <textarea>Spent several years working on sheep on Wall Street. Had moderate success investing in Yugos on Wall Street. Managed a small team buying and selling pogo sticks for farmers. Spent several years licensing licorice in West Palm Beach, FL. Developed severalnew methods for working with banjos in the aftermarket. Spent a weekend importing banjos in West Palm Beach, FL.In this position, the Software Engineer ollaborates with Evention's Development team to continuously enhance our current software solutions as well as create new solutions to eliminate the back-office operations and management challenges present</textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="submit">Update</button>
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
    <script src="{{asset('public/client/js/jquery.scrollbar.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/client/js/circle-progress.min.js')}}" type="text/javascript"></script>

  	<script>
  		$(function(){
         'use strict'





      });
  	</script>

@endsection
