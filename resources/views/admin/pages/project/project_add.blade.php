@extends('layouts.admin')

@section('title','Project')

@section('project','active')

@section('style')
@endsection


@section('content')

    <div class="wrapper card p-2">
        <h5>
            Add New Project
        </h5>

        <form role="form" method="post" action="{{route('project.store')}}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label>Project name</label>
                <input type="text" class="form-control" name="name"  value="{{old('name')}}">
                <div class="error">{{$errors->first('name')}}</div>
            </div>

            <div class="form-group mt-3">
                <button class="btn btn-primary btn-sm">Add Project</button>
                <a href="{{route('project.index')}}" class="btn btn-info btn-sm">Cancel</a>
            </div>

        </form>


    </div>

@endsection


@section('modal')



@endsection


@section('scripts')


@endsection
