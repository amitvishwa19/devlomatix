@extends('admin.layout.admin')

@section('title','Products')

@section('product','active')


@section('style')
    {{-- Datatable --}}
    <link href="{{asset('public/admin/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    {{-- Datatable --}}
@endsection



@section('content')
    <div class="content-area">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h4 class="page-title">Products</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Devlomatix</a></li>
                                <li class="breadcrumb-item active">Products</li>
                                
                            </ol>

                            <div class="mt-2">
                                
                            </div>
                        </div><!--end col-->
                        
                        <div class="col-auto align-self-center">
                            <!-- <a href="#post_display" class="btn btn-info waves-effect waves-light btn-sm" data-toggle="modal" >Posts Grid</a> -->
                            <a href="{{route('shoppee.product.create')}}" class="btn btn-info waves-effect waves-light btn-sm" >Add Product</a>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div><!--end row-->



        <div class="mb-2">
            <a href="{{route('shoppee.product.index')}}" class="mr-2">All Categories</a>
            @foreach($categories as $category)
                <a class="mr-2" href="{{route('shoppee.product.index',['category'=>$category->slug])}}">{{$category->name}}</a>
            @endforeach
        </div>
        <!-- <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="card">
                    <div class="card-body table-responsive">
                        <div class="">
                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                    <th style="width:5%">Feature Image</th>
                                        <th style="">Title</th>
                                        <th style="">Description</th>
                                        <th style="width:15%">Categories</th>
                                        <th style="">Price</th>
                                        <th style="">Discount</th>
                                        <th style="">Quantity</th>
                                        <th style="">Status</th>
                                        <th style="width:10%">Actions</th>

                                    </tr>
                                </thead>


                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->


        <div class="form-group mt-1">
                
                <div class="form-group">
                    <table class="table table-bordered mb-0 table-centered">
                        <thead>
                            <tr>
                                <th style=""><label for=""><b>Feature Image</b></label></th>
                                <th style=""><label for=""><b>Title</b></label></th>
                                <th style=""><label for=""><b>Description</b></label></th>
                                <th style=""><label for=""><b>Categories</b></label></th>
                                <th style=""><label for=""><b>Price</b></label></th>
                                <th style=""><label for=""><b>Discount</b></label></th>
                                <th style=""><label for=""><b>Quantity</b></label></th>
                                <th style=""><label for=""><b>Status</b></label></th>
                                <th style=""><label for=""><b>Actions</b></label></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            

                            @foreach($products as $product)
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-between">
                                        <div class="meta-box">
                                            <div class="media">
                                                <img src="{{$product->feature_image}}" height="40" class="mr-3 align-self-center rounded" alt="...">
                                            </div>                                      
                                        </div><!--end meta-box-->
                                    
                                    </div>
                                </td>
                                <td>
                                    {{$product->title}}
                                </td>
                                <td>
                                    {{$product->description}}
                                </td>
                                <td>
                                    @foreach($product->categories as $category)
                                        <div class="badge badge-info mr-1" >{{$category->name}}</div>
                                    @endforeach
                                </td>
                                <td>
                                    {{$product->price}}
                                </td>
                                <td>
                                    {{$product->discount}}%
                                </td>
                                <td>
                                    @if($product->quantity == 0)
                                        <div class="badge badge-danger mr-1" >Out of Stock</div>
                                    @else
                                        {{$product->quantity}}
                                    @endif
                                </td>
                                <td>
                                    @if($product->status == true)
                                        <div class="badge badge-soft-success mr-1" >Active</div>
                                    @else
                                        <div class="badge badge-soft-danger mr-1" >InActive</div>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{route('shoppee.product.edit',$product->id)}}" class="badge badge-soft-success mr-2"><small>Edit</small></a>
                                        <a href="javascript:void(0);" id="'.$data->id.'" class="badge badge-secondary delete mr-2"><small>Delete</small></a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                           
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
@endsection



@section('scripts')

    {{-- Datatable JS --}}
    <script src="{{asset('public/admin/plugins/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('public/admin/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    {{-- <script src="{{asset('public/admin/assets/pages/jquery.datatable.init.js')}}"></script> --}}
    {{-- Datatable JS --}}



    <script>

        $(function(){
            'use strict'

            //Datatable
            $('#datatable').DataTable({
                processing: true,
                serverSide: true,
                pageLength: 20,
                ajax: '{!! route('shoppee.product.index') !!}',
                columns:[
                    { data: 'image', name: 'image'},
                    { data: 'title', name: 'title'},
                    { data: 'description', name: 'description'},
                    { data: 'categories', name: 'categories'},
                    { data: 'price', name: 'price'},
                    { data: 'discount', name: 'discount'},
                    { data: 'quantity', name: 'quantity'},
                    { data: 'status', name: 'status'},
                    { data: 'action', name: 'action' },
                ]
            });


            //Action Delete function
            // $(document).on('click','.delete',function(){
            //     var id =  $(this).attr('id');
            //     swalWithBootstrapButtons({
            //         title: "Delete Selected Post?",
            //         text: "You won't be able to revert this!",
            //         type: "warning",
            //         showCancelButton: true,
            //         confirmButtonText: "Delete",
            //         cancelButtonText: "Cancel",
            //         reverseButtons: true
            //     }).then(result => {
            //         if (result.value) {
            //         $.ajax({
            //             url: "post/"+id,
            //             type:"post",
            //             data: {_method: 'delete', _token: "{{ csrf_token() }}"},
            //             success: function(result){
            //                 location.reload();
            //                 toast({
            //                     type: "success",
            //                     title: "Post Deleted Successfully"
            //                 });
            //             }
            //         });
            //         }
            //     });
            // });

        });

    </script>

@endsection
