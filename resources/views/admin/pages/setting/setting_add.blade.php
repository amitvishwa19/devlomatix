@extends('layouts.admin')

@section('title','Setting')

@section('setting','active')

@section('style')
@endsection


@section('content')

    <div class="wrapper card p-2">
        <h5>
            Add New Setting
        </h5>

        <form role="form" method="post" action="{{route('setting.store')}}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label>Setting name</label>
                <input type="text" class="form-control" name="name"  value="{{old('name')}}">
                <div class="error">{{$errors->first('name')}}</div>
            </div>

            <div class="form-group mt-3">
                <button class="btn btn-primary btn-sm">Add Setting</button>
                <a href="{{route('setting.index')}}" class="btn btn-secondary btn-sm">Cancel</a>
            </div>

        </form>


    </div>

@endsection


@section('modal')



@endsection


@section('javascript')


@endsection
