@extends('layouts.admin')

@section('title','Category')

@section('category','active')

@section('style')
    <link href="{{asset('public/admin/plugins/nestable/jquery.nestable.min.css')}}" rel="stylesheet" />
@endsection


@section('content')

    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row">
                    <div class="col">
                        <h4 class="page-title">Categories</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Devlomatix</a></li>
                            <li class="breadcrumb-item active">Categories</li>
                        </ol>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div><!--end row-->

    <div class="row">
        <div class="col-sm-4">

            <form method="post" action="{{route('category.store')}}"  class="mg-t-30">
                @csrf

                <div class="form-group">
                    <label for="exampleFormControlSelect1"><b>Parent Category</b></label>
                    <select class="form-control" name="parent">
                        <option value="">Select parent category</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">
                                {{$category->name}}
                                @foreach($category->child as $c1)
                                        <option value="{{$c1->id}}">
                                        {{$category->name}} > {{$c1->name}}
                                        @foreach($c1->child as $c2)
                                            <option value="{{$c2->id}}">
                                                    {{$category->name}} > {{$c1->name}} > {{$c2->name}}
                                                    @foreach($c2->child as $c3)
                                                    <option value="{{$c3->id}}">
                                                        {{$category->name}} > {{$c1->name}} > {{$c2->name}} > {{$c3->name}}
                                                        @foreach($c3->child as $c4)
                                                            <option value="{{$c4->id}}">
                                                                {{$category->name}} > {{$c1->name}} > {{$c2->name}} > {{$c3->name}} > {{$c4->name}}
                                                            </option>
                                                        @endforeach
                                                    </option>
                                                    @endforeach
                                            </option>
                                        @endforeach
                                        </option>
                                @endforeach
                            </option>
                            @endforeach
                    </select>
                    <small id="emailHelp" class="form-text text-muted"><i>By Selecting this WebBlock Name will become category under select parent</i></small>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"><b>Category</b></label>
                    <input type="text" class="form-control" name="category" value="{{ old('category') }}" required>
                    <small id="emailHelp" class="form-text text-muted"><i>The name is how it appears on your site</i>.</small>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"><b>Add Class</b></label>
                    <input type="text" class="form-control" name="class" value="{{ old('class') }}">
                    <small id="emailHelp" class="form-text text-muted"><i>Additional Class</i>.</small>
                </div>

                <div class="checkbox form-group">
                    <input id="checkbox0" type="checkbox" name="favourite">
                    <label for="checkbox0">
                        <b>Favourite</b>
                    </label>
                </div>

                <div class="checkbox form-group">
                    <input id="checkbox1" type="checkbox" name="status">
                    <label for="checkbox1">
                        <b>Active</b>
                    </label>
                </div>

                <button class="btn btn-info waves-effect waves-light btn-sm">Add Category</button>

            </form>
        </div>

        <div class="col-sm-8">

            <div class="mg-t-50 mg-b-50">
                <div class="custom-dd dd" id="nestable_list_1">
                    @include('admin.pages.category.child_cat',$categories)
                </div>
            </div>

            <div class="mg-t-50">
                <b>Note:</b><br>
                <small><i>Deleting a category does not delete the posts in that category. Instead, posts that were only assigned to the deleted category are set to the category Uncategorized.</i></small>
            </div>
        </div>
    </div>
@endsection


@section('modal')



@endsection


@section('scripts')
    <script src="{{asset('public/admin/plugins/nestable/jquery.nestable.min.js')}}"></script>
    <script src="{{asset('public/admin/assets/pages/jquery.nastable.init.js')}}"></script>




  <script>
    $(function(){
      'use strict'
        //   $('.dd').nestable({
        //         onDragStart: function(l,e){
        //             //l is the main container
        //             //e is the element that was moved
        //             console.log(l)
        //             console.log(e)
        //         }
        //     });


        //Action Delete function
        $(document).on('click','.delete',function(){
            var id =  $(this).attr('id');
            swalWithBootstrapButtons({
                title: "Delete Selected Category?",
                text: "You won't be able to revert this!",
                type: "warning",
                showCancelButton: true,
                confirmButtonText: "Delete",
                cancelButtonText: "Cancel",
                reverseButtons: true
            }).then(result => {
                if (result.value) {
                $.ajax({
                    url: "category/"+id,
                    type:"post",
                    data: {_method: 'delete', _token: "{{ csrf_token() }}"},
                    success: function(result){
                        location.reload();
                        toast({
                            type: "success",
                            title: "Category Deleted Successfully"
                        });
                    }
                });
                }
            });
        });

        $(document).on('click','.delete',function(){
            console.log('delete');
        });

    });
  </script>

@endsection
