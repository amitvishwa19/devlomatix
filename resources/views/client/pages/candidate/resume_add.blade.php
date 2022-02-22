@extends('client.layout.layout')

@section('title','Add Resume')


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
                            <div class="border-title"><h3>Education</h3><a class="cancel" href="#" title=""><i class="la la-close"></i> Cancel</a></div>
                            <div class="resumeadd-form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span class="pf-title">Title</span>
                                        <div class="pf-field">
                                            <input placeholder="Tooms.." type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="pf-title">From Date</span>
                                        <div class="pf-field">
                                            <input placeholder="06.11.2007" type="text" class="form-control datepicker">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="pf-title">To Date</span>
                                        <div class="pf-field">
                                            <input placeholder="06.11.2012" type="text" class="form-control datepicker">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <span class="pf-title">Institute</span>
                                        <div class="pf-field">
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <span class="pf-title">Description</span>
                                        <div class="pf-field">
                                            <textarea></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                         <button type="submit">Save</button>
                                    </div>
                                </div>
                            </div>
                            <div class="border-title"><h3>Work Experience</h3><a class="cancel" href="#" title=""><i class="la la-close"></i> Cancel</a></div>
                            <div class="resumeadd-form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span class="pf-title">Title</span>
                                        <div class="pf-field">
                                            <input placeholder="Tooms.." type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <span class="pf-title">From Date</span>
                                        <div class="pf-field">
                                            <input placeholder="06.11.2007" type="text" class="form-control datepicker">
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <span class="pf-title">To Date</span>
                                        <div class="pf-field">
                                            <input placeholder="06.11.2012" type="text" class="form-control datepicker">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <p class="remember-label">
                                           <input type="checkbox" name="cb" id="fgfg"><label for="fgfg">Present</label>
                                       </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <span class="pf-title">Company</span>
                                        <div class="pf-field">
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <span class="pf-title">Description</span>
                                        <div class="pf-field">
                                            <textarea></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                         <button type="submit">Save</button>
                                    </div>
                                </div>
                            </div>
                            <div class="border-title"><h3>Portfolio</h3><a class="cancel" href="#" title=""><i class="la la-close"></i> Cancel</a></div>
                            <div class="resumeadd-form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>Max file size is 1MB, Minimum dimension: 270x210 And Suitable files are .jpg & .png</p>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="upload-portfolio">
                                            <div class="uploadbox">
                                                <label for="file-upload" class="custom-file-upload">
                                                   <i class="la la-cloud-upload"></i> <span>Upload Image</span>
                                               </label>
                                               <input id="file-upload" type="file" style="display: none;" />
                                            </div>
                                            <div class="uploadfield">
                                                <span class="pf-title">Title</span>
                                                <div class="pf-field">
                                                    <input placeholder="Tooms.." type="text">
                                                </div>
                                            </div>
                                            <div class="uploadbutton">
                                                <button type="submit">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-title"><h3>Professional Skills</h3><a class="cancel" href="#" title=""><i class="la la-close"></i> Cancel</a></div>
                            <div class="resumeadd-form">
                                <div class="row align-items-end">
                                    <div class="col-lg-7">
                                        <span class="pf-title">Skill Heading</span>
                                        <div class="pf-field">
                                            <input placeholder="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <span class="pf-title">Percentage</span>
                                        <div class="pf-field">
                                            <input placeholder="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                         <button type="submit">Save</button>
                                    </div>
                                </div>
                            </div>
                            <div class="border-title"><h3>Awards</h3><a class="cancel" href="#" title=""><i class="la la-close"></i> Cancel</a></div>
                            <div class="resumeadd-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <span class="pf-title">06.11.2007</span>
                                        <div class="pf-field">
                                            <input placeholder="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="pf-title">06.11.2012</span>
                                        <div class="pf-field">
                                            <input placeholder="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <span class="pf-title">Description</span>
                                        <div class="pf-field">
                                            <textarea></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                         <button type="submit">Save</button>
                                    </div>
                                </div>
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
