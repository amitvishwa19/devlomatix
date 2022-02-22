@extends('client.layout.layout')

@section('title','Resumes')


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

                        <div class="emply-resume-sec">
                            <h3>Resume</h3>
                            <div class="emply-resume-list">
                                <div class="emply-resume-thumb">
                                    <img src="{{asset('public/client/images/resource/er1.jpg')}}" alt="" />
                                </div>
                                <div class="emply-resume-info">
                                    <h3><a href="#" title="">DigiZigs</a></h3>
                                    <span><i>UX / UI Designer</i> at Atract Solutions</span>
                                    <p><i class="la la-map-marker"></i>Istanbul / Turkey</p>
                                </div>
                                <div class="action-resume">
                                    <div class="action-center">
                                        <span>Action <i class="la la-angle-down"></i></span>
                                        <ul>
                                            <li class="open-letter"><a href="#" title="">Cover Letter</a></li>
                                            <li><a href="#" title="">Download CV</a></li>
                                            <li><a href="#" title="">Linked-in Profile</a></li>
                                            <li class="open-contact"><a href="#" title="">Send a Message</a></li>
                                            <li><a href="#" title="">View Profile</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="del-resume">
                                    <a href="#" title=""><i class="la la-trash-o"></i></a>
                                </div>
                            </div><!-- Emply List -->
                            <div class="emply-resume-list">
                                <div class="emply-resume-thumb">
                                    <img src="{{asset('public/client/images/resource/er1.jpg')}}" alt="" />
                                </div>
                                <div class="emply-resume-info">
                                    <h3><a href="#" title="">DigiZigs</a></h3>
                                    <span><i>UX / UI Designer</i> at Atract Solutions</span>
                                    <p><i class="la la-map-marker"></i>Istanbul / Turkey</p>
                                </div>
                                <div class="action-resume">
                                    <div class="action-center">
                                        <span>Action <i class="la la-angle-down"></i></span>
                                        <ul>
                                            <li class="open-letter"><a href="#" title="">Cover Letter</a></li>
                                            <li><a href="#" title="">Download CV</a></li>
                                            <li><a href="#" title="">Linked-in Profile</a></li>
                                            <li class="open-contact"><a href="#" title="">Send a Message</a></li>
                                            <li><a href="#" title="">View Profile</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="del-resume">
                                    <a href="#" title=""><i class="la la-trash-o"></i></a>
                                </div>
                            </div><!-- Emply List -->
                            <div class="emply-resume-list">
                                <div class="emply-resume-thumb">
                                    <img src="{{asset('public/client/images/resource/er1.jpg')}}" alt="" />
                                </div>
                                <div class="emply-resume-info">
                                    <h3><a href="#" title="">DigiZigs</a></h3>
                                    <span><i>UX / UI Designer</i> at Atract Solutions</span>
                                    <p><i class="la la-map-marker"></i>Istanbul / Turkey</p>
                                </div>
                                <div class="action-resume">
                                    <div class="action-center">
                                        <span>Action <i class="la la-angle-down"></i></span>
                                        <ul>
                                            <li class="open-letter"><a href="#" title="">Cover Letter</a></li>
                                            <li><a href="#" title="">Download CV</a></li>
                                            <li><a href="#" title="">Linked-in Profile</a></li>
                                            <li class="open-contact"><a href="#" title="">Send a Message</a></li>
                                            <li><a href="#" title="">View Profile</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="del-resume">
                                    <a href="#" title=""><i class="la la-trash-o"></i></a>
                                </div>
                            </div><!-- Emply List -->
                            <div class="emply-resume-list">
                                <div class="emply-resume-thumb">
                                    <img src="{{asset('public/client/images/resource/er1.jpg')}}" alt="" />
                                </div>
                                <div class="emply-resume-info">
                                    <h3><a href="#" title="">DigiZigs</a></h3>
                                    <span><i>UX / UI Designer</i> at Atract Solutions</span>
                                    <p><i class="la la-map-marker"></i>Istanbul / Turkey</p>
                                </div>
                                <div class="action-resume">
                                    <div class="action-center">
                                        <span>Action <i class="la la-angle-down"></i></span>
                                        <ul>
                                            <li class="open-letter"><a href="#" title="">Cover Letter</a></li>
                                            <li><a href="#" title="">Download CV</a></li>
                                            <li><a href="#" title="">Linked-in Profile</a></li>
                                            <li class="open-contact"><a href="#" title="">Send a Message</a></li>
                                            <li><a href="#" title="">View Profile</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="del-resume">
                                    <a href="#" title=""><i class="la la-trash-o"></i></a>
                                </div>
                            </div><!-- Emply List -->
                            <div class="emply-resume-list">
                                <div class="emply-resume-thumb">
                                    <img src="{{asset('public/client/images/resource/er1.jpg')}}" alt="" />
                                </div>
                                <div class="emply-resume-info">
                                    <h3><a href="#" title="">DigiZigs</a></h3>
                                    <span><i>UX / UI Designer</i> at Atract Solutions</span>
                                    <p><i class="la la-map-marker"></i>Istanbul / Turkey</p>
                                </div>
                                <div class="action-resume">
                                    <div class="action-center">
                                        <span>Action <i class="la la-angle-down"></i></span>
                                        <ul>
                                            <li class="open-letter"><a href="#" title="">Cover Letter</a></li>
                                            <li><a href="#" title="">Download CV</a></li>
                                            <li><a href="#" title="">Linked-in Profile</a></li>
                                            <li class="open-contact"><a href="#" title="">Send a Message</a></li>
                                            <li><a href="#" title="">View Profile</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="del-resume">
                                    <a href="#" title=""><i class="la la-trash-o"></i></a>
                                </div>
                            </div><!-- Emply List -->
                            <div class="emply-resume-list">
                                <div class="emply-resume-thumb">
                                    <img src="{{asset('public/client/images/resource/er1.jpg')}}" alt="" />
                                </div>
                                <div class="emply-resume-info">
                                    <h3><a href="#" title="">DigiZigs</a></h3>
                                    <span><i>UX / UI Designer</i> at Atract Solutions</span>
                                    <p><i class="la la-map-marker"></i>Istanbul / Turkey</p>
                                </div>
                                <div class="action-resume">
                                    <div class="action-center">
                                        <span>Action <i class="la la-angle-down"></i></span>
                                        <ul>
                                            <li class="open-letter"><a href="#" title="">Cover Letter</a></li>
                                            <li><a href="#" title="">Download CV</a></li>
                                            <li><a href="#" title="">Linked-in Profile</a></li>
                                            <li class="open-contact"><a href="#" title="">Send a Message</a></li>
                                            <li><a href="#" title="">View Profile</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="del-resume">
                                    <a href="#" title=""><i class="la la-trash-o"></i></a>
                                </div>
                            </div><!-- Emply List -->
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
