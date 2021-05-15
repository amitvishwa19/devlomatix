@extends('layouts.admin')

@section('title','Edit Subscription')

@section('subscription','active')


@section('style')

@endsection



@section('content')
    <div class="content-area">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h4 class="page-title">Subscriptions</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Devlomatix</a></li>
                                <li class="breadcrumb-item active">Subscriptions</li>
                            </ol>
                        </div><!--end col-->
                        <div class="col-auto align-self-center">
                            <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                                <span class="ay-name" id="Day_Name">Today:</span>&nbsp;
                                <span class="" id="Select_date">Jan 11</span>
                                <i data-feather="calendar" class="align-self-center icon-xs ml-1"></i>
                            </a>

                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div><!--end row-->



        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('subscribe.update',$subscription->id)}}" method="POST">
                        @csrf
                        {{method_field('PUT')}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter email" value="{{$subscription->email}}{{old('email')}}">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-switch switch-secondary">
                                <input type="checkbox" class="custom-control-input" id="customSwitchSecondary" name="status" @if($subscription->status == true) checked  @endif>
                                <label class="custom-control-label" for="customSwitchSecondary">Status</label>
                            </div>
                        </div>
                        <a href="{{route('subscribe.index')}}" class="btn btn-danger btn-sm">Cancel</a>
                        <button type="submit" class="btn btn-primary btn-sm">Update Subscription</button>

                    </form>
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->



    </div>
@endsection



@section('scripts')



    <script>

        $(function(){
            'use strict'


        });

    </script>

@endsection
