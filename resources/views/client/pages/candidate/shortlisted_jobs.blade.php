@extends('client.layout.layout')

@section('title','Shortlisted Jobs')


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
                            <div class="border-title"><h3>Shortlisted jobs</h3></div>
                            <div class="job-listing wtabs">
                               <div class="job-title-sec">
                                   <div class="c-logo"> <img src="{{asset('public/client/images/resource/l1.png')}}" alt="" /> </div>
                                   <h3><a href="#" title="">Web Designer / Developer</a></h3>
                                   <span>Massimo Artemisistator</span>
                                   <div class="job-lctn">November 6, 2017</div>
                               </div>
                               <div class="job-list-del">
                                   <a href="#" title=""><i class="la la-trash-o"></i></a>
                               </div>
                           </div><!-- Job -->
                           <div class="job-listing wtabs">
                               <div class="job-title-sec">
                                   <div class="c-logo"> <img src="{{asset('public/client/images/resource/l2.png')}}" alt="" /> </div>
                                   <h3><a href="#" title="">Web Designer / Developer</a></h3>
                                   <span>Massimo Artemisistator</span>
                                   <div class="job-lctn">November 6, 2017</div>
                               </div>
                               <div class="job-list-del">
                                   <a href="#" title=""><i class="la la-trash-o"></i></a>
                               </div>
                           </div><!-- Job -->
                           <div class="job-listing wtabs">
                               <div class="job-title-sec">
                                   <div class="c-logo"> <img src="{{asset('public/client/images/resource/l3.png')}}" alt="" /> </div>
                                   <h3><a href="#" title="">Web Designer / Developer</a></h3>
                                   <span>Massimo Artemisistator</span>
                                   <div class="job-lctn">November 6, 2017</div>
                               </div>
                               <div class="job-list-del">
                                   <a href="#" title=""><i class="la la-trash-o"></i></a>
                               </div>
                           </div><!-- Job -->
                           <div class="job-listing wtabs">
                               <div class="job-title-sec">
                                   <div class="c-logo"> <img src="{{asset('public/client/images/resource/l4.png')}}" alt="" /> </div>
                                   <h3><a href="#" title="">Web Designer / Developer</a></h3>
                                   <span>Massimo Artemisistator</span>
                                   <div class="job-lctn">November 6, 2017</div>
                               </div>
                               <div class="job-list-del">
                                   <a href="#" title=""><i class="la la-trash-o"></i></a>
                               </div>
                           </div><!-- Job -->
                           <div class="job-listing wtabs">
                               <div class="job-title-sec">
                                   <div class="c-logo"> <img src="{{asset('public/client/images/resource/l5.png')}}" alt="" /> </div>
                                   <h3><a href="#" title="">Web Designer / Developer</a></h3>
                                   <span>Massimo Artemisistator</span>
                                   <div class="job-lctn">November 6, 2017</div>
                               </div>
                               <div class="job-list-del">
                                   <a href="#" title=""><i class="la la-trash-o"></i></a>
                               </div>
                           </div><!-- Job -->
                           <div class="job-listing wtabs">
                               <div class="job-title-sec">
                                   <div class="c-logo"> <img src="{{asset('public/client/images/resource/l6.png')}}" alt="" /> </div>
                                   <h3><a href="#" title="">Web Designer / Developer</a></h3>
                                   <span>Massimo Artemisistator</span>
                                   <div class="job-lctn">November 6, 2017</div>
                               </div>
                               <div class="job-list-del">
                                   <a href="#" title=""><i class="la la-trash-o"></i></a>
                               </div>
                           </div><!-- Job -->
                           <div class="job-listing wtabs">
                               <div class="job-title-sec">
                                   <div class="c-logo"> <img src="{{asset('public/client/images/resource/l1.png')}}" alt="" /> </div>
                                   <h3><a href="#" title="">Web Designer / Developer</a></h3>
                                   <span>Massimo Artemisistator</span>
                                   <div class="job-lctn">November 6, 2017</div>
                               </div>
                               <div class="job-list-del">
                                   <a href="#" title=""><i class="la la-trash-o"></i></a>
                               </div>
                           </div><!-- Job -->
                           <div class="pagination">
                               <ul>
                                   <li class="prev"><a href="#"><i class="la la-long-arrow-left"></i> Prev</a></li>
                                   <li><a href="#">1</a></li>
                                   <li class="active"><a href="#">2</a></li>
                                   <li><a href="#">3</a></li>
                                   <li><span class="delimeter">...</span></li>
                                   <li><a href="#">14</a></li>
                                   <li class="next"><a href="#">Next <i class="la la-long-arrow-right"></i></a></li>
                               </ul>
                           </div><!-- Pagination -->
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
