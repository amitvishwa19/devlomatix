@extends('client.layout.layout')

@section('title','InterDuniya')


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
						<h3>Welcome {{auth()->user()->firstName}}, {{auth()->user()->lastName}}</h3>
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
				<aside class="col-lg-3 column border-right">
					<div class="widget">
						<div class="tree_widget-sec">
							<ul>
								<li><a href="candidates_profile.html" title=""><i class="la la-file-text"></i>My Profile</a></li>
								<li><a href="candidates_my_resume.html" title=""><i class="la la-briefcase"></i>My Resume</a></li>
								<li><a href="candidates_shortlist.html" title=""><i class="la la-money"></i>Shorlisted Internships</a></li>
								<li><a href="candidates_applied_jobs.html" title=""><i class="la la-paper-plane"></i>Applied Interships</a></li>
								<li><a href="candidates_cv_cover_letter.html" title=""><i class="la la-file-text"></i>Cover Letter</a></li>
								<li><a href="candidates_change_password.html" title=""><i class="la la-flash"></i>Change Password</a></li>
								<li><a href="#" title=""><i class="la la-unlink"></i>Logout</a></li>
							</ul>
						</div>
					</div>
					
				</aside>
				
                @yield('main_content')
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