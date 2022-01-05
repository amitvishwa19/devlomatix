
@extends('client.layout.layout')

@section('title','Blog')


@section('style')
@endsection


@section('content')

	{{-- <!-- Banner Section -->
	<section class="page-banner">
		<div class="image-layer" style="background-image:url({{asset('public/client/images/background/image-7.jpg')}});"></div>
		<div class="shape-1"></div>
		<div class="shape-2"></div>
		<div class="banner-inner">
			 <div class="auto-container">
				  <div class="inner-container clearfix">
						<h1>Blog Posts</h1>
						<div class="page-nav">
							 <ul class="bread-crumb clearfix">
							 		<li><a href="{{route('app.home')}}">Home</a></li>
								  	<li class="active">Blog Posts</li>
							 </ul>
						</div>
				  </div>
			 </div>
		</div>
  	</section>
	<!--End Banner Section --> --}}

	<div class="sidebar-page-container">
		<div class="auto-container">
			 <div class="row clearfix">

				  <!--Content Side-->
				  <div class="content-side col-lg-8 col-md-12 col-sm-12">
						<div class="blog-posts">

                            @foreach($posts as $post)

                                <!--News Block-->
                                <div class="news-block-two">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <a href="{{route('app.blog',$post->slug)}}"><img src="{{$post->image_url}}" alt=""></a>
                                        </div>
                                        <div class="lower-box">
                                            <div class="post-meta">
                                                    <ul class="clearfix">
                                                        <li><span class="far fa-clock"></span>{{ $post->publish_date() }} 20 Mar</li>
                                                        <li><span class="far fa-user-circle"></span> {{ $post->author->firstname }},{{ $post->author->lastname }}</li>
                                                        <li><span class="far fa-comments"></span> 2 Comments</li>
                                                    </ul>
                                            </div>
                                            <h4><a href="{{route('app.blog',$post->slug)}}">{{$post->title}}</a>
                                            </h4>
                                            <div class="text">{!!str_limit($post->body,400)!!}</div>

                                        </div>
                                    </div>
                            </div>

                            @endforeach

							 {{-- <!--News Block-->
							 <div class="news-block-two">
								  <div class="inner-box">
										<div class="image-box">
											 <a href="{{route('app.blog',$post->slug)}}"><img src="{{asset('public/client/images/resource/news-7.jpg')}}" alt=""></a>
										</div>
										<div class="lower-box">
											 <div class="post-meta">
												  <ul class="clearfix">
														<li><span class="far fa-clock"></span> 20 Mar</li>
														<li><span class="far fa-user-circle"></span> Admin</li>
														<li><span class="far fa-comments"></span> 2 Comments</li>
												  </ul>
											 </div>
											 <h4><a href="{{route('app.blog',$post->slug)}}">basic rules of running web agency business</a>
											 </h4>
											 <div class="text">There are many variations of passages of Lorem Ipsum
												  available, but the majority have suffered alteration in some form, by
												  injected humour, or randomised words which don't look even slightly
												  believable. If you are going to use a passage of Lorem Ipsum.</div>
											 <div class="link-box"><a class="theme-btn" href="blog-single.html">Read More</a>
											 </div>
										</div>
								  </div>
							 </div>

							 <!--News Block-->
							 <div class="news-block-two">
								  <div class="inner-box">
										<div class="image-box">
											 <a href="{{route('app.blog',$post->slug)}}"><img src="{{asset('public/client/images/resource/news-8.jpg')}}" alt=""></a>
											 <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
												  class="vid-link lightbox-image">
												  <div class="icon"><span class="flaticon-play-button-1"></span></div>
											 </a>
										</div>
										<div class="lower-box">
											 <div class="post-meta">
												  <ul class="clearfix">
														<li><span class="far fa-clock"></span> 20 Mar</li>
														<li><span class="far fa-user-circle"></span> Admin</li>
														<li><span class="far fa-comments"></span> 2 Comments</li>
												  </ul>
											 </div>
											 <h4><a href="{{route('app.blog',$post->slug)}}">Delivering the best digital marketing</a></h4>
											 <div class="text">There are many variations of passages of Lorem Ipsum
												  available, but the majority have suffered alteration in some form, by
												  injected humour, or randomised words which don't look even slightly
												  believable. If you are going to use a passage of Lorem Ipsum.</div>
											 <div class="link-box"><a class="theme-btn" href="blog-single.html">Read More</a>
											 </div>
										</div>
								  </div>
							 </div>

							 <!--News Block-->
							 <div class="news-block-two">
								  <div class="inner-box">

										<div class="lower-box">
											 <div class="post-meta">
												  <ul class="clearfix">
														<li><span class="far fa-clock"></span> 20 Mar</li>
														<li><span class="far fa-user-circle"></span> Admin</li>
														<li><span class="far fa-comments"></span> 2 Comments</li>
												  </ul>
											 </div>
											 <h4><a href="{{route('app.blog',$post->slug)}}">Introducing the latest linoor features</a></h4>
											 <div class="text">There are many variations of passages of Lorem Ipsum
												  available, but the majority have suffered alteration in some form, by
												  injected humour, or randomised words which don't look even slightly
												  believable. If you are going to use a passage of Lorem Ipsum.</div>
											 <div class="link-box"><a class="theme-btn" href="blog-single.html">Read More</a>
											 </div>
										</div>
								  </div>
							 </div>

							 <!--News Block-->
							 <div class="news-block-three">
								  <div class="inner-box">
										<div class="quote-icon"><span>“</span></div>
										<div class="text">There are many variations of passages of available but majority
											 have alteration in some by inject humour or random words. There are many
											 variations of passages of Lorem Ipsum available, but the majority have suffered
											 alteration.</div>
										<a href="{{route('app.blog',$post->slug)}}" class="over-link"></a>
								  </div>
							 </div>

							 <!--News Block-->
							 <div class="news-block-three">
								  <div class="inner-box">
										<div class="link-icon"><span class="flaticon-link-2"></span></div>
										<h4><a href="blog-single.html">Delivering the best digital marketing</a></h4>
										<a href="{{route('app.blog')}}" class="over-link"></a>
								  </div>
							 </div> --}}

						</div>
						<div class="more-box">
							 <a class="theme-btn btn-style-one" href="blog.html">
								  <i class="btn-curve"></i>
								  <span class="btn-title">Load more posts</span>
							 </a>
						</div>
				  </div>

				  <!--Sidebar Side-->
				  <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
						<aside class="sidebar blog-sidebar">

							 <div class="sidebar-widget recent-posts">
								  <div class="widget-inner">
										<div class="sidebar-title">
											 <h4>Latest Posts</h4>
										</div>

										<div class="post">
											 <figure class="post-thumb"><img src="{{asset('public/client/images/resource/news-thumb-1.jpg')}}" alt="">
											 </figure>
											 <h5 class="text"><a href="#">EXPERIENCES THAT CONNECT WITH PEOPLE</a></h5>
										</div>

										<div class="post">
											 <figure class="post-thumb"><img src="{{asset('public/client/images/resource/news-thumb-2.jpg')}}" alt="">
											 </figure>
											 <h5 class="text"><a href="#">WE BUILD AND ACTIVATE BRANDS INSIGHT</a></h5>
										</div>

										<div class="post">
											 <figure class="post-thumb"><img src="{{asset('public/client/images/resource/news-thumb-3.jpg')}}" alt="">
											 </figure>
											 <h5 class="text"><a href="#">A DEEP UNDERSTANDING OF OUR AUDIENCE</a></h5>
										</div>

								  </div>
							 </div>

							 <div class="sidebar-widget archives">
								  <div class="widget-inner">
										<div class="sidebar-title">
											 <h4>Categories</h4>
										</div>
										<ul>
											 <li><a href="blog.html">Business (16)</a></li>
											 <li class="active"><a href="blog.html">Introductions (14)</a></li>
											 <li><a href="blog.html">One Page Template (33)</a></li>
											 <li><a href="blog.html">Parallax Effects (29)</a></li>
											 <li><a href="blog.html">New Technologies (8)</a></li>
											 <li><a href="blog.html">Video Backgrounds (6)</a></li>
										</ul>
								  </div>
							 </div>

							 <div class="sidebar-widget popular-tags">
								  <div class="widget-inner">
										<div class="sidebar-title">
											 <h4>Tags</h4>
										</div>
										<div class="tags-list clearfix">
											 <a href="#">Business</a>, <a href="#">Agency</a>, <a href="#">Technology</a>,<a
												  href="#">Parallax</a>, <a href="#">Innovative</a>, <a
												  href="#">Professional</a>,<a href="#">Experience</a>
										</div>
								  </div>
							 </div>

							 <div class="sidebar-widget recent-comments">
								  <div class="widget-inner">
										<div class="sidebar-title">
											 <h4>Comments</h4>
										</div>

										<div class="comment">
											 <div class="icon">
												  <span class="flaticon-speech-bubble-2"></span>
											 </div>
											 <h5 class="text"><a href="#">A Wordpress Commenter on Launch New Mobile App</a>
											 </h5>
										</div>

										<div class="comment">
											 <div class="icon">
												  <span class="flaticon-speech-bubble-2"></span>
											 </div>
											 <h5 class="text"><a href="#">John Doe on Template: <br>Comments</a></h5>
										</div>

										<div class="comment">
											 <div class="icon">
												  <span class="flaticon-speech-bubble-2"></span>
											 </div>
											 <h5 class="text"><a href="#">A Wordpress Commenter on Launch New Mobile App</a>
											 </h5>
										</div>

										<div class="comment">
											 <div class="icon">
												  <span class="flaticon-speech-bubble-2"></span>
											 </div>
											 <h5 class="text"><a href="#">John Doe on Template: <br>Comments</a></h5>
										</div>

								  </div>
							 </div>


						</aside>
				  </div>

			 </div>
		</div>
  	</div>

	@include('client.partials.action')

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
