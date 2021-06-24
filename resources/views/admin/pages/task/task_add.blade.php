@extends('layouts.admin')

@section('title','Task')

@section('task','active')

@section('style')
@endsection


@section('content')

    <div class="wrapper card p-2">
        <h5>
            Add New Task
        </h5>

        <form role="form" method="post" action="{{route('task.store')}}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label>Task name</label>
                <input type="text" class="form-control" name="name"  value="{{old('name')}}">
                <div class="error">{{$errors->first('name')}}</div>
            </div>

            <div class="form-group mt-3">
                <button class="btn btn-primary btn-sm">Add Task</button>
                <a href="{{route('task.index')}}" class="btn btn-info btn-sm">Cancel</a>
            </div>

        </form>


    </div>

@endsection


@section('modal')



@endsection


@section('scripts')


@endsection
