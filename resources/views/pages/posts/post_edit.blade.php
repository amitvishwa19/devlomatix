@extends('layouts.admin')

@section('title','Add Post')

@section('posts','active')


@section('style')
    <link href="{{asset('public/assets/plugins/summernote/css/summernote.css')}}" rel="stylesheet" type="text/css" media="screen">
@endsection



@section('content')




<div class="card card-default">
    <div class="card-body">
        <h5>
            Edit Post
        </h5>
        <form role="form" method="post" action="{{route('posts.update',$post->id)}}" enctype="multipart/form-data">
            @csrf
            {{method_field('PUT')}}

            <div class="form-group">
                <label>Post Title</label>
                <input type="text" class="form-control" name="title"  value="{{$post->title}}{{old('title')}}">
                <div class="error">{{$errors->first('title')}}</div>
            </div>

            <div class="form-group">
                <label>Post Description</label>
                <input type="text" class="form-control" name="description" value="{{$post->description}}{{old('description')}}">
            </div>

            <div class="summernote-wrapper">
                <textarea name="body" id="summernote" cols="30" rows="10">{{$post->body}}{{old('body')}}</textarea>
            </div>

            <div class="form-group mt-3">
                <button class="btn btn-primary btn-sm">Update Post</button>
                <a href="{{route('posts.index')}}" class="btn btn-secondary btn-sm">Cancel</a>
            </div>

        </form>
    </div>
  </div>
@endsection



@section('scripts')
    <script src="{{asset('public/assets/plugins/summernote/js/summernote.min.js')}}" type="text/javascript"></script>

    <script>
        $('#summernote').summernote({
            height: 200,
            onfocus: function(e) {
                $('body').addClass('overlay-disabled');
            },
            onblur: function(e) {
                $('body').removeClass('overlay-disabled');
            }
        });




    </script>
@endsection
