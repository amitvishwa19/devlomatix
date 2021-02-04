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
            Add New Post
        </h5>
        <form role="form" method="post" action="{{route('posts.store')}}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label>Post Title</label>
                <input type="text" class="form-control" name="title"  value="{{old('title')}}">
                <div class="error">{{$errors->first('title')}}</div>
            </div>

            <div class="form-group">
                <label>Post Description</label>
                <input type="text" class="form-control" name="description" value="{{old('description')}}">
            </div>

            <div class="summernote-wrapper">
                <textarea name="body" id="summernote" cols="30" rows="10">{{old('body')}}</textarea>
            </div>

            <div class="form-group mt-2">
                <label>Meta Description</label>
                <textarea class="form-control" name="meta_description" id="" cols="30" rows="5">{{old('meta_description')}}</textarea>
            </div>

            <div class="form-group">
                <label>Meta Keywords</label>
                <textarea class="form-control" name="meta_keywords" id="" cols="30" rows="5">{{old('meta_keywords')}}</textarea>
            </div>

            <div class="radio radio-success">
                <input type="radio" checked="checked" value="draft" name="status" id="yes">
                <label for="yes">Draft</label>
                <input type="radio"  value="published" name="status" id="no">
                <label for="no">Publish</label>
            </div>

            <div class="form-group mt-3">
                <button class="btn btn-primary btn-sm">Add Post</button>
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
            height: 400,
            onfocus: function(e) {
                $('body').addClass('overlay-disabled');
            },
            onblur: function(e) {
                $('body').removeClass('overlay-disabled');
            }
        });




    </script>
@endsection
