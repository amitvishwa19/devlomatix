@extends('layouts.admin')

@section('title','User')

@section('user','active')

@section('style')
@endsection


@section('content')

    <div class="wrapper card p-2">
        <div class="">
            <h4><b>Users</b> <div class="float-right"><a href="{{route('user.create')}}" class="btn btn-primary btn-sm">Add User</a></div></h4>
        </div>
        <div data-label="Example" class="mt-2">
            <table id="datatable" class="table table-color-primary">
                <thead>
                <tr>
                    <th style="" class="">Name</th>
                    <th style="" class="">Email</th>
                    <th style="" class="">User Type</th>
                    <th style="" class="">Roles</th>
                    <th style="" class="">Created</th>
                    <th style="" class="">Actions</th>
                </tr>
                </thead>

                <tbody>
                </tbody>

            </table>
        </div>
    </div>

@endsection


@section('modal')



@endsection


@section('scripts')
  <script src="{{asset('public/assets/plugins/datatables.net/js/jquery.dataTables.min.js')}}"></script>

  <script>
    $(function(){
      'use strict'


      //Datatable
      $('#datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('user.index') !!}',
        columns:[
            { data: 'name', name: 'name'},
            { data: 'email', name: 'email'},
            { data: 'type', name: 'type'},
            { data: 'roles', name: 'roles'},
            { data: 'created_at', name: 'created_at' },
            { data: 'action', name: 'action' },
        ]
      });


      //Action Delete function
      $(document).on('click','.delete',function(){
        var id =  $(this).attr('id');
        swalWithBootstrapButtons({
            title: "Delete Selected User?",
            text: "You won't be able to revert this!",
            type: "warning",
            showCancelButton: true,
            confirmButtonText: "Delete",
            cancelButtonText: "Cancel",
            reverseButtons: true
        }).then(result => {
            if (result.value) {
              $.ajax({
                  url: "user/"+id,
                  type:"post",
                  data: {_method: 'delete', _token: "{{ csrf_token() }}"},
                  success: function(result){
                    location.reload();
                    toast({
                        type: "success",
                        title: "User Deleted Successfully"
                    });
                  }
              });
            }
        });
      });


    });
  </script>

@endsection
