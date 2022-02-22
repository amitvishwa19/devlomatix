@extends('client.layout.layout')

@section('title','Profile')


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

                        <div class="profile-title" id="mp">
                            <h3>My Profile</h3>
                            <div class="upload-img-bar">
                                <span><img src="images/resource/up1.jpg" alt="" /><i>x</i></span>
                                <div class="upload-info">
                                    <a href="#" title="">Browse</a>
                                    <span>Max file size is 1MB, Minimum dimension: 270x210 And Suitable files are .jpg & .png</span>
                                </div>
                            </div>
                            <div class="upload-img-bar">
                                <span><img src="images/resource/up2.jpg" alt="" /><i>x</i></span>
                                <div class="upload-info">
                                    <a href="#" title="">Browse</a>
                                    <span>Max file size is 1MB, Minimum dimension: 270x210 And Suitable files are .jpg & .png</span>
                                </div>
                            </div>
                        </div>
                        <div class="profile-form-edit">
                            <form>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <span class="pf-title">Company Name</span>
                                        <div class="pf-field">
                                            <input type="text" placeholder="Tera Planer" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="pf-title">Allow In Search</span>
                                        <div class="pf-field">
                                            <select data-placeholder="Please Select Specialism" class="chosen">
                                               <option>Web Development</option>
                                               <option>Web Designing</option>
                                               <option>Art & Culture</option>
                                               <option>Reading & Writing</option>
                                           </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <span class="pf-title">Since</span>
                                        <div class="pf-field">
                                            <input type="text" placeholder="1991" />
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <span class="pf-title">Team Size</span>
                                        <div class="pf-field">
                                            <input type="text" placeholder="100 - 201" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="pf-title">Allow In Search</span>
                                        <div class="pf-field">
                                            <select data-placeholder="Please Select Specialism" class="chosen">
                                               <option>Web Development</option>
                                               <option>Web Designing</option>
                                               <option>Art & Culture</option>
                                               <option>Reading & Writing</option>
                                           </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <span class="pf-title">Categories</span>
                                        <div class="pf-field no-margin">
                                            <ul class="tags">
                                              <li class="addedTag">Web Deisgn<span onclick="$(this).parent().remove();" class="tagRemove">x</span><input type="hidden" name="tags[]" value="Web Deisgn"></li>
                                               <li class="addedTag">Web Develop<span onclick="$(this).parent().remove();" class="tagRemove">x</span><input type="hidden" name="tags[]" value="Web Develop"></li>
                                               <li class="addedTag">SEO<span onclick="$(this).parent().remove();" class="tagRemove">x</span><input type="hidden" name="tags[]" value="SEO"></li>
                                               <li class="tagAdd taglist">
                                                      <input type="text" id="search-field">
                                               </li>
                                           </ul>
                                       </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <span class="pf-title">Description</span>
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
                        <div class="social-edit"  id="sn">
                            <h3>Social Edit</h3>
                            <form>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <span class="pf-title">Facebook</span>
                                        <div class="pf-field">
                                            <input type="text" placeholder="www.facebook.com/TeraPlaner" />
                                            <i class="fa fa-facebook"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="pf-title">Twitter</span>
                                        <div class="pf-field">
                                            <input type="text" placeholder="www.twitter.com/TeraPlaner" />
                                            <i class="fa fa-twitter"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="pf-title">Google</span>
                                        <div class="pf-field">
                                            <input type="text" placeholder="www.google-plus.com/TeraPlaner" />
                                            <i class="la la-google"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="pf-title">Linkedin</span>
                                        <div class="pf-field">
                                            <input type="text" placeholder="www.Linkedin.com/TeraPlaner" />
                                            <i class="fa fa-linkedin"></i>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="contact-edit" id="ci">
                            <h3>Contact</h3>
                            <form>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <span class="pf-title">Phone Number</span>
                                        <div class="pf-field">
                                            <input type="text" placeholder="+90 538 963 58 96" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <span class="pf-title">Email</span>
                                        <div class="pf-field">
                                            <input type="text" placeholder="demo@jobhunt.com" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <span class="pf-title">Website</span>
                                        <div class="pf-field">
                                            <input type="text" placeholder="www.jobhun.com" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="pf-title">Country</span>
                                        <div class="pf-field">
                                            <select data-placeholder="Please Select Specialism" class="chosen">
                                               <option>Web Development</option>
                                               <option>Web Designing</option>
                                               <option>Art & Culture</option>
                                               <option>Reading & Writing</option>
                                           </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="pf-title">City</span>
                                        <div class="pf-field">
                                            <select data-placeholder="Please Select Specialism" class="chosen">
                                               <option>Web Development</option>
                                               <option>Web Designing</option>
                                               <option>Art & Culture</option>
                                               <option>Reading & Writing</option>
                                           </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span class="pf-title">Find On Map</span>
                                        <div class="pf-field">
                                            <input type="text" placeholder="Collins Street West, Victoria 8007, Australia." />
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <span class="pf-title">Latitude</span>
                                        <div class="pf-field">
                                            <input type="text" placeholder="41.1589654" />
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <span class="pf-title">Longitude</span>
                                        <div class="pf-field">
                                            <input type="text" placeholder="21.1589654" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <a href="#" title="" class="srch-lctn">Search Location</a>
                                    </div>
                                    <div class="col-lg-12">
                                        <span class="pf-title">Maps</span>
                                        <div class="pf-map">
                                            <div id="map_div"></div>
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
</section>

@endsection



@section('modal')
@endsection


@section('javascript')
    <script src="{{asset('public/client/js/tag.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/client/js/maps3.js')}}" type="text/javascript"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYc537bQom7ajFpWE5sQaVyz1SQa9_tuY&amp;sensor=true&amp;libraries=places"></script>
  	<script>
  		$(function(){
         'use strict'





      });
  	</script>

@endsection
