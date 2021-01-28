@extends('layouts.admin')

@section('title','Posts')

@section('posts','active')


@section('style')

@endsection



@section('content')
    <div class="row">
        <div class="col-sm-12">
        <h4><b>Posts</b> <div class="float-right"><a href="{{route('posts.create')}}" class="btn btn-primary btn-sm">Add Post</a></div></h4>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-12">
            <div class="card">
                <table class="table">
                    <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Body</th>
                                <th>Status</th>
                                <th>View</th>
                                <th>Delete</th>
                            </tr>
                    </thead>
                    <tbody>
                            @foreach($posts as $post )
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->description}}</td>
                                    <td>{!! $post->body !!}</td>
                                    <td>{{ucfirst($post->status)}}</td>
                                    <td><a href="{{ route('posts.edit', $post->id) }}" class="mr-3">View</a></td>
                                    <td><a href="{{ route('post.delete', $post->id) }}" class="mr-3">Delete</a></td>
                                </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-2">
                {{ $posts->render() }}
            </div>
        </div>
    </div>
@endsection



@section('scripts')

@endsection
