@extends('layouts.admin')

@section('title','Edit  User')

@section('dashboard','active')


@section('style')
@endsection



@section('content')
    <div class="wrapper card p-2">
        <h5>
            Edit Role
        </h5>
        <form role="form" method="post" action="{{route('role.update',$role->id)}}" enctype="multipart/form-data">
            @csrf
            {{method_field('PUT')}}

            <div class="form-group">
                <label>Role Name</label>
                <input type="text" class="form-control" name="name"  value="{{$role->name}}{{old('name')}}">
                <div class="error">{{$errors->first('name')}}</div>
            </div>

            <div class="form-group">
                <label>Role Description</label>
                <textarea class="form-control" name="description" cols="30" rows="5">{{$role->description}}{{old('description')}}</textarea>
            </div>

            <div class="form-group">
                <label>Permissions</label>
                <div class="row pl-2 pr-2">
                    @foreach($permissions as $permission)
                        <div class="col-4">
                            <input type="checkbox" name="permissions[]" value="{{$permission->id}}"
                            @foreach($role->permissions as $perm)
                                @if($perm->id == $permission->id)
                                    checked
                                @endif
                            @endforeach
                            >
                            <label for="checkbox" class="mg-l-5">{{$permission->name}}</label>
                        </div>
                    @endforeach
                </div>
            </div>



            <div class="form-group mt-3">
                <button class="btn btn-primary btn-sm">Update Role</button>
                <a href="{{route('role.index')}}" class="btn btn-info btn-sm">Cancel</a>
            </div>

        </form>
    </div>
@endsection



@section('scripts')
@endsection
