@extends('layouts.admin')

@section('title','Classroom')

@section('classroom','active')

@section('style')
@endsection


@section('content')

    <div class="wrapper card p-2">
        <h5>
            Add New Classroom
        </h5>

        <form role="form" method="post" action="{{route('classroom.store')}}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label>Classroom name</label>
                <input type="text" class="form-control" name="name"  value="{{old('name')}}">
                <div class="error">{{$errors->first('name')}}</div>
            </div>

            <div class="form-group">
                <label>Classroom Description</label>
                <textarea class="form-control" name="description" id="" cols="30" rows="5"></textarea>
            </div>

            <div class="radio radio-success">
                <input type="radio" value="1" name="status" id="yes">
                <label for="yes">Active</label>

                <input type="radio" checked="checked"  value="0" name="status" id="no">
                <label for="no">InActive</label>
            </div>



            <div class="form-group mt-3">
                <button class="btn btn-primary btn-sm">Add Classroom</button>
                <a href="{{route('classroom.index')}}" class="btn btn-secondary btn-sm">Cancel</a>
            </div>

        </form>


    </div>

@endsection


@section('modal')



@endsection


@section('javascript')


@endsection
