@extends('layouts.admin')

@section('title','User')

@section('user','active')

@section('style')
@endsection


@section('content')

    <div class="wrapper card p-2">
        <h5>
            Add New User
        </h5>

        <form role="form" method="post" action="{{route('user.store')}}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label>User name</label>
                <input type="text" class="form-control" name="name"  value="{{old('name')}}">
                <div class="error">{{$errors->first('name')}}</div>
            </div>

            <div class="form-group mt-3">
                <button class="btn btn-primary btn-sm">Add User</button>
                <a href="{{route('user.index')}}" class="btn btn-secondary btn-sm">Cancel</a>
            </div>

        </form>


    </div>

@endsection


@section('modal')



@endsection


@section('javascript')


@endsection
