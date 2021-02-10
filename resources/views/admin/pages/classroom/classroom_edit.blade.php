@extends('layouts.admin')

@section('title','Classroom')

@section('classroom','active')

@section('style')
@endsection


@section('content')

    <div class="wrapper card p-2">
        <h5>
            Edit Classroom
        </h5>

        <form role="form" method="post" action="{{route('classroom.update',$classroom->id)}}" enctype="multipart/form-data">
            @csrf
            {{method_field('PUT')}}

            <div class="form-group">
                <label>Classroom name</label>
                <input type="text" class="form-control" name="name"  value="{{old('name')}}{{$classroom->name}}">
                <div class="error">{{$errors->first('name')}}</div>
            </div>

            <div class="form-group">
                <label>Classroom Description</label>
                <textarea class="form-control" name="description" id="" cols="30" rows="5">{{old('description')}}{{$classroom->description}}</textarea>
            </div>

            <div class="radio radio-success">
                <input type="radio" value="1" @if($classroom->status == '1') checked @endif name="status" id="yes">
                <label for="yes">Active</label>

                <input type="radio" @if($classroom->status == '0') checked @endif  value="0" name="status" id="no">
                <label for="no">InActive</label>
            </div>

            <div class="form-group mt-3">
                <button class="btn btn-primary btn-sm">Update Classroom</button>
                <a href="{{route('classroom.index')}}" class="btn btn-info btn-sm">Cancel</a>
            </div>

        </form>


    </div>

@endsection


@section('modal')



@endsection


@section('javascript')


@endsection
