@extends('admin.layout.admin')

@section('title','Trading')

@section('trading','active')


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
                            <h4 class="page-title">Trading Journal</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Devlomatix</a></li>
                                <li class="breadcrumb-item active">Trade Book </li>
                            </ol>
                        </div><!--end col-->
                        <div class="col-auto align-self-center">
                            <a href="{{route('trading.create')}}"  class="btn btn-info waves-effect waves-light btn-sm" >
                                Add New
                            </a>
                        </div>
                    </div><!--end row-->
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div><!--end row-->

        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-2">
                <div class="card report-card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col">
                                <p class="text-dark mb-1 font-weight-semibold">Trading Sessions</p>
                                <h3 class="m-0">{{$tradings->count()}}</h3>
                            </div>
                            <div class="col-auto align-self-center">
                                <div class="report-main-icon bg-light-alt">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers align-self-center text-muted icon-md"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                                </div>
                            </div>
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div> <!--end col-->
            <div class="col-md-6 col-lg-2">
                <div class="card report-card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col">
                                <p class="text-dark mb-1 font-weight-semibold">Total Trades</p>
                                <h3 class="m-0">{{$trades}}</h3>
                            </div>
                            <div class="col-auto align-self-center">
                                <div class="report-main-icon bg-light-alt">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock align-self-center text-muted icon-md"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                                </div>
                            </div>
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div> <!--end col-->
            <div class="col-md-6 col-lg-2">
                <div class="card report-card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col">
                                <p class="text-dark mb-1 font-weight-semibold">Total P&L</p>
                                <h3 class="m-0">₹ {{$t_pnl}}</h3>
                            </div>
                            <div class="col-auto align-self-center">
                                <div class="report-main-icon bg-light-alt">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign align-self-center text-muted icon-md"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                </div>
                            </div>
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div> <!--end col-->
            <div class="col-md-6 col-lg-2">
                <div class="card report-card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col">
                                <p class="text-dark mb-1 font-weight-semibold">Total Charges</p>
                                <h3 class="m-0">₹ {{$t_charges}}</h3>
                            </div>
                            <div class="col-auto align-self-center">
                                <div class="report-main-icon bg-light-alt">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign align-self-center text-muted icon-md"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                </div>
                            </div>
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div> <!--end col-->
            <div class="col-md-6 col-lg-2">
                <div class="card report-card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col">
                                <p class="text-dark mb-1 font-weight-semibold">Net P&L</p>
                                <h3 class="m-0">₹ {{$t_pnl - $t_charges}}</h3>
                            </div>
                            <div class="col-auto align-self-center">
                                <div class="report-main-icon bg-light-alt">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign align-self-center text-muted icon-md"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                </div>
                            </div>
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div> <!--end col-->
            <div class="col-md-6 col-lg-2">
                <div class="card report-card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col">
                                <p class="text-dark mb-1 font-weight-semibold">Success</p>
                                <h3 class="m-0">4</h3>
                            </div>
                            <div class="col-auto align-self-center">
                                <div class="report-main-icon bg-light-alt">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign align-self-center text-muted icon-md"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                </div>
                            </div>
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div> <!--end col-->
        </div>

        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="cards">
                    <div class="card-body table-responsive">
                        <div class="">
                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th style="">Date</th>
                                        <th style="">Trades</th>
                                        <th style="">Traded Capital</th>
                                        <th style="">Total P&L</th>
                                        <th style="">Total Charges</th>
                                        <th style="">Net P&L</th>
                                        <th style="">ROI</th>
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
        </div>

    </div>
@endsection



@section('scripts')

    {{-- Datatable JS --}}
        <script src="{{asset('public/admin/plugins/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('public/admin/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    {{-- Datatable JS --}}



    <script>

        $(function(){
            'use strict'

            //Datatable
            $('#datatable').DataTable({
                 processing: true,
                 serverSide: true,
                 ajax: '{!! route('trading.index') !!}',
                 columns:[
                     { data: 'date', name: 'date' },
                     { data: 'trades', name: 'trades' },
                     { data: 'traded_amount', name: 'traded_amount' },
                     { data: 't_pnl', name: 't_pnl' },
                     { data: 't_charges', name: 't_charges' },
                     { data: 'n_pnl', name: 'n_pnl' },
                     { data: 'roi', name: 'roi' },
                     { data: 'action', name: 'action' },
                ]
            });


            //Action Delete function
             $(document).on('click','.delete',function(){
                 var id =  $(this).attr('id');
                 swalWithBootstrapButtons({
                     title: "Delete Selected Trading Journal?",
                     text: "You won't be able to revert this!",
                     type: "warning",
                     showCancelButton: true,
                     confirmButtonText: "Delete",
                     cancelButtonText: "Cancel",
                     reverseButtons: true
                 }).then(result => {
                     if (result.value) {
                     $.ajax({
                         url: "trading/"+id,
                         type:"post",
                         data: {_method: 'delete', _token: "{{ csrf_token() }}"},
                         success: function(result){
                             location.reload();
                             toast({
                                 type: "success",
                                 title: "Trading Journal Deleted Successfully"
                             });
                         },
                         error: function(result){
                            console.log(result);
                         }
                     });
                     }
                 });
            });

        });

    </script>

@endsection
