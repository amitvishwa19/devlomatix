@extends('layouts.admin')

@section('title','Project')

@section('project','active')

@section('style')
    <link href="{{asset('public/admin/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css" />
@endsection


@section('content')


    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row">
                    <div class="col">
                        <h4 class="page-title">Create Project</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Devlomatix</a></li>
                            <li class="breadcrumb-item"><a href="{{route('project.index')}}">Projects</a></li>
                            <li class="breadcrumb-item active">Create</li>
                        </ol>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div><!--end row-->
    <!-- end page title end breadcrumb -->


    <div class="row">
        <div class="col-12">
            <div class="col-lg-12">
                <form action="{{route('project.store')}}" method="POST" autocomplete="off">
                    @csrf

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="projectName"><b>Project Name</b></label>
                                <input type="text" class="form-control" name="name"  placeholder="Project name" value="{{old("name")}}">
                            </div>
                            <div class="col-md-3">
                                <label for="projectName"><b>Project Duration(Days)</b></label>
                                <input type="number" class="form-control" name="duration"  placeholder="Project duration" value="{{old("name")}}">
                            </div>
                            <div class="col-md-3">
                                <label for="pro-start-date"><b>Start Date</b></label>
                                <input type="date" class="form-control" name="start_date" value="{{old('start_date')}}" placeholder="dd-mm-yyyy">
                            </div>
                            <div class="col-md-3">
                                <label for="pro-start-date"><b>Deadline</b></label>
                                <input type="date" class="form-control" name="end_date" value="{{old('end_date')}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="pro-message"><b>Requirement</b></label>
                                <textarea class="form-control" rows="2" name="requirement"  placeholder="Project Requirement">{{old("requirement")}}</textarea>
                            </div><!--end col-->

                            <div class="col-md-6">
                                <label for="pro-message"><b>Description</b></label>
                                <textarea class="form-control" rows="2" name="description"  placeholder="Project Description">{{old("description")}}</textarea>
                            </div><!--end col-->

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">

                            <div class="col-md-2">
                                <label for="pro-rate"><b>Project Budget</b></label>
                                <input type="text" class="form-control" name="rate" placeholder="Enter budget" value="{{old("rate")}}">
                            </div><!--end col-->

                            <div class="col-md-2">
                                <label for="pro-end-date"><b>Price Type</b></label>
                                <select class="form-control" name="price_type">
                                    <option value="fix" {{ (old("price_type") == "fix" ? "selected":"") }}>Fix</option>
                                    <option value="hourly" {{ (old("price_type") == "hourly" ? "selected":"") }}>Hourly</option>
                                    <option value="daily" {{ (old("price_type") == "daily" ? "selected":"") }}>Daily</option>
                                </select>
                            </div><!--end col-->
                            <div class="col-md-2">
                                <label for="pro-end-date"><b>Priority</b></label>
                                <select class="form-control" name="priority">
                                    <option value="high" {{ (old("priority") == "high" ? "selected":"") }}>High</option>
                                    <option value="medium" {{ (old("priority") == "medium" ? "selected":"") }}>Medium</option>
                                    <option value="low" {{ (old("priority") == "low" ? "selected":"") }}>Low</option>
                                </select>
                            </div><!--end col-->
                            <div class="col-md-2">
                                <label for="pro-end-date"><b>Payment</b></label>
                                <select class="form-control" name="payment">
                                    <option value="pending" {{ (old("payment") == "pending" ? "selected":"") }}>Pending</option>
                                    <option value="advance" {{ (old("payment") == "advance" ? "selected":"") }}>Advance</option>
                                    <option value="completed" {{ (old("payment") == "completed" ? "selected":"") }}>Completed</option>
                                </select>
                            </div><!--end col-->
                            

                            <div class="col-md-2">
                                <label for="pro-end-date"><b>Status</b></label>
                                <select class="form-control" name="status">
                                    <option value="planning" {{ (old("status") == "planning" ? "selected":"") }}>Planning</option>
                                    <option value="started" {{ (old("status") == "started" ? "selected":"") }}>Started</option>
                                    <option value="wip" {{ (old("status") == "wip" ? "selected":"") }}>WIP</option>
                                    <option value="completed" {{ (old("status") == "completed" ? "selected":"") }}>Completed</option>
                                </select>
                            </div><!--end col-->

                            <div class="col-md-2">
                                <label for="pro-rate"><b>Completed(%)</b></label>
                                <input type="number" class="form-control" name="completion_status" placeholder="Enter budget" value="{{old("completion_status")}}">
                            </div><!--end col-->


                        </div><!--end row-->
                    </div><!--end form-group-->

                    <div class="form-group">
                        <label for="pro-message"><b>Notes</b></label>
                        <textarea class="form-control" rows="2" id="pro-message"  placeholder="Additional Notes"></textarea>
                    </div><!--end form-group-->


                    <div class="form-group mt-2">
                        <label><h5><b>Project Requirements</b></h5></label>

                        <div class="form-group">
                            <table class="table table-bordered mb-0 table-centered">
                                <thead>
                                    <tr>
                                        <th style="width:80%"><label for=""><b>Requirements</b></label></th>
                                        <th style="width:10%"><label for=""><b>Status</b></label></th>
                                        <th style="width:10%"><a href="javascript:void(0)" class="btn btn-info waves-effect waves-light btn-sm addrow"> Add </a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control" name="task_item_title[]" value="{{old('task_title')}}">
                                        </td>
                                        <td>
                                            <select class="form-control" name="task_item_status[]">
                                                <option value="0" {{ (old("task_item_status") == 0? "selected":"") }}>Pending</option>
                                                <option value="1" {{ (old("task_item_status") == 1 ? "selected":"") }}>Completed</option>
                                            </select>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)" class="btn btn-danger waves-effect waves-light btn-sm deleterow">Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                    

                    

                    <button class="btn btn-info waves-effect waves-light btn-sm">Add Project</button>
                    <a href="{{route('project.index')}}" class="btn btn-secondary btn-sm">Cancel</a>
                </form>  <!--end form-->
            </div><!--end col-->
        </div><!--end col-->
    </div><!--end row-->



@endsection


@section('modal')



@endsection


@section('scripts')



@endsection
