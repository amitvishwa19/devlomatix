@extends('layouts.admin')

@section('title','Project Dashboard')

@section('project','active')


@section('style')
    {{-- Datatable --}}
    {{--<link href="{{asset('public/admin/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />--}}
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
                            <h4 class="page-title">Projects</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Devlomatix</a></li>
                                <li class="breadcrumb-item active">Projects</li>
                            </ol>
                        </div><!--end col-->
                        <div class="col-auto align-self-center">
                            <a href="#project_display" data-toggle="modal" class="btn btn-info waves-effect waves-light btn-sm" >
                                Project Grid
                            </a>
                            <a href="#new_project" data-toggle="modal" class="btn btn-info waves-effect waves-light btn-sm" >
                                New Project
                            </a>
                        </div>
                    </div><!--end row-->
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div><!--end row-->

        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-3">
                <div class="card report-card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col">
                                <p class="text-dark mb-1 font-weight-semibold">Projects</p>
                                <h3 class="m-0">77</h3>
                                <p class="mb-0 text-truncate text-muted"><span class="text-success"><i class="mdi mdi-checkbox-marked-circle-outline mr-1"></i></span>26 Project Complete</p>
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
            <div class="col-md-6 col-lg-3">
                <div class="card report-card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col">
                                <p class="text-dark mb-1 font-weight-semibold">Tasks</p>
                                <h3 class="m-0">41</h3>
                                <p class="mb-0 text-truncate text-muted"><span class="badge badge-soft-success">Active</span> Weekly Avg.Sessions</p>
                            </div>
                            <div class="col-auto align-self-center">
                                <div class="report-main-icon bg-light-alt">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square align-self-center text-muted icon-md"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                                </div>
                            </div>
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div> <!--end col-->
            <div class="col-md-6 col-lg-3">
                <div class="card report-card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col">
                                <p class="text-dark mb-1 font-weight-semibold">Total Hours</p>
                                <h3 class="m-0">801:30</h3>
                                <p class="mb-0 text-truncate text-muted"><span class="text-muted">01:33</span> /
                                    <span class="text-muted">9:30</span>  Duration</p>
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
            <div class="col-md-6 col-lg-3">
                <div class="card report-card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col">
                                <p class="text-dark mb-1 font-weight-semibold">Budget</p>
                                <h3 class="m-0">$24000</h3>
                                <p class="mb-0 text-truncate text-muted"><span class="text-dark">$14000</span> Total used budgets</p>
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
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Tasks Performance</h4>
                            </div><!--end col-->
                            <div class="col-auto">
                                <div class="dropdown">
                                    <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-dots-horizontal text-muted"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Purchases</a>
                                        <a class="dropdown-item" href="#">Emails</a>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div>  <!--end row-->
                    </div><!--end card-header-->
                    <div class="card-body">
                        <div class="text-center">
                            <div id="task_status" class="apex-charts"></div>
                            <h6 class="text-primary bg-soft-primary p-3 mb-0">
                                <i data-feather="calendar" class="align-self-center icon-xs mr-1"></i>
                                01 January 2020 to 31 June 2020
                            </h6>
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div> <!--end col-->
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Overview</h4>
                            </div><!--end col-->
                            <div class="col-auto">
                                <div class="dropdown">
                                    <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-dots-horizontal text-muted"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Purchases</a>
                                        <a class="dropdown-item" href="#">Emails</a>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div>  <!--end row-->
                    </div><!--end card-header-->
                    <div class="card-body">
                        <div class="text-center">
                            <div id="overview" class="apex-charts"></div>
                            <h6 class="text-primary bg-soft-primary p-3 mb-0">
                                <i data-feather="calendar" class="align-self-center icon-xs mr-1"></i>
                                01 January 2020 to 01 January 2021
                            </h6>
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div> <!--end col-->
        </div><!--end row-->

        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <!-- Nav tabs -->
                        <ul class="nav-border nav nav-pills" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link font-weight-semibold pt-0" data-toggle="tab" href="#Project1_Tab" role="tab">Project1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active font-weight-semibold pt-0" data-toggle="tab" href="#Project2_Tab" role="tab">Project2</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-weight-semibold pt-0" data-toggle="tab" href="#Project3_Tab" role="tab">Project3</a>
                            </li>
                        </ul>
                    </div><!--end card-body-->
                    <div class="card-body pt-0">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane" id="Project1_Tab" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="media mb-3">
                                            <img src="assets/images/widgets/project3.jpg" alt="" class="thumb-lg rounded-circle">
                                            <div class="media-body align-self-center text-truncate ml-3">
                                                <h4 class="m-0 font-weight-semibold text-dark font-16">Payment App</h4>
                                                <p class="text-muted mb-0 font-13"><span class="text-dark">Client : </span>Kevin  J. Heal</p>
                                            </div><!--end media-body-->
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-6 text-lg-right">
                                        <h6 class="font-weight-semibold m-0">Start : <span class="text-muted font-weight-normal"> 02 June 2020</span></h6>
                                        <h6 class="font-weight-semibold  mb-0 mt-2">Deadline : <span class="text-muted font-weight-normal"> 31 Oct 2020</span></h6>
                                    </div><!--end col-->
                                </div><!--end row-->

                                <div class="holder">
                                    <ul class="steppedprogress pt-1">
                                        <li class="complete"><span>Planing</span></li>
                                        <li class="complete"><span>Design</span></li>
                                        <li class="complete continuous"><span>Development</span></li>
                                        <li class=""><span>Testing</span></li>
                                    </ul>
                                </div>
                                <div class="task-box">
                                    <div class="task-priority-icon"><i class="fas fa-circle text-success"></i></div>
                                    <div class="d-flex justify-content-between">
                                        <h6 class="font-weight-semibold m-0 align-self-center">All Hours : <span class="text-muted font-weight-normal"> 530 / 281:30</span></h6>
                                        <h6 class="font-weight-semibold">Today : <span class="text-muted font-weight-normal"> 2:45</span><span class="badge badge-soft-pink font-weight-semibold ml-2"><i class="far fa-fw fa-clock"></i> 35 days left</span></h6>
                                    </div>
                                    <p class="text-muted mb-1">There are many variations of passages of Lorem Ipsum available,
                                        but the majority have suffered alteration in some form.
                                    </p>
                                    <p class="text-muted text-right mb-1">34% Complete</p>
                                    <div class="progress mb-3" style="height: 4px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 34%;" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="img-group">
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="assets/images/users/user-6.jpg" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="assets/images/users/user-2.jpg" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="assets/images/users/user-3.jpg" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a href="#" class="avatar-box thumb-xs align-self-center">
                                                <span class="avatar-title bg-soft-info rounded-circle font-13 font-weight-normal">+6</span>
                                            </a>
                                        </div><!--end img-group-->
                                        <ul class="list-inline mb-0 align-self-center">
                                            <li class="list-item d-inline-block mr-2">
                                                <a class="" href="#">
                                                    <i class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                                    <span class="text-muted font-weight-bold">34/100</span>
                                                </a>
                                            </li>
                                            <li class="list-item d-inline-block">
                                                <a class="" href="#">
                                                    <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                                    <span class="text-muted font-weight-bold">3</span>
                                                </a>
                                            </li>
                                            <li class="list-item d-inline-block">
                                                <a class="ml-2" href="#">
                                                    <i class="mdi mdi-pencil-outline text-muted font-18"></i>
                                                </a>
                                            </li>
                                            <li class="list-item d-inline-block">
                                                <a class="" href="#">
                                                    <i class="mdi mdi-trash-can-outline text-muted font-18"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!--end task-box-->
                                <hr class="hr-dashed">
                                <div class="row mt-3">
                                    <div class="col-lg">
                                        <div class="d-flex">
                                            <i data-feather="headphones" class="align-self-center text-secondary icon-sm"></i>
                                            <div class="d-block align-self-center ml-2">
                                                <h6 class="m-0">Last Meeting</h6>
                                                <p class="mb-0 text-muted">28 Oct 2020 / 10:30AM - 12:30PM</p>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-auto">
                                        <div class="d-flex">
                                            <i data-feather="headphones" class="align-self-center text-secondary icon-sm"></i>
                                            <div class="d-block align-self-center ml-2">
                                                <h6 class="m-0">Next Meeting</h6>
                                                <p class="mb-0 text-muted">06 Nov 2020 / 10:30AM - 12:30PM</p>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end tab-pane-->

                            <div class="tab-pane active" id="Project2_Tab" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="media mb-3">
                                            <img src="assets/images/widgets/project2.jpg" alt="" class="thumb-lg rounded-circle">
                                            <div class="media-body align-self-center text-truncate ml-3">

                                                <h4 class="m-0 font-weight-semibold text-dark font-16">Banking</h4>
                                                <p class="text-muted  mb-0 font-13"><span class="text-dark">Client : </span>Hyman M. Cross</p>
                                            </div><!--end media-body-->
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-6 text-lg-right">
                                        <h6 class="font-weight-semibold m-0">Start : <span class="text-muted font-weight-normal"> 15 Nov 2020</span></h6>
                                        <h6 class="font-weight-semibold mb-0 mt-2">Deadline : <span class="text-muted font-weight-normal"> 28 Fab 2021</span></h6>
                                    </div><!--end col-->
                                </div><!--end row-->

                                <div class="holder">
                                    <ul class="steppedprogress pt-1">
                                        <li class="complete"><span>Planing</span></li>
                                        <li class="complete continuous"><span>Design</span></li>
                                        <li class=""><span>Development</span></li>
                                        <li class=""><span>Testing</span></li>
                                    </ul>
                                </div>
                                <div class="task-box">
                                    <div class="task-priority-icon"><i class="fas fa-circle text-success"></i></div>
                                    <div class="d-flex justify-content-between">
                                        <h6 class="font-weight-semibold m-0 align-self-center">All Hours : <span class="text-muted font-weight-normal"> 530 / 281:30</span></h6>
                                        <h6 class="font-weight-semibold">Today : <span class="text-muted font-weight-normal"> 2:45</span><span class="badge badge-soft-pink font-weight-semibold ml-2"><i class="far fa-fw fa-clock"></i> 35 days left</span></h6>
                                    </div>
                                    <p class="text-muted mb-1">There are many variations of passages of Lorem Ipsum available,
                                        but the majority have suffered alteration in some form.
                                    </p>
                                    <p class="text-muted text-right mb-1">15% Complete</p>
                                    <div class="progress mb-3" style="height: 4px;">
                                        <div class="progress-bar bg-purple" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="img-group">
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="assets/images/users/user-6.jpg" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="assets/images/users/user-2.jpg" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="assets/images/users/user-3.jpg" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a href="#" class="avatar-box thumb-xs align-self-center">
                                                <span class="avatar-title bg-soft-info rounded-circle font-13 font-weight-normal">+6</span>
                                            </a>
                                        </div><!--end img-group-->
                                        <ul class="list-inline mb-0 align-self-center">
                                            <li class="list-item d-inline-block mr-2">
                                                <a class="" href="#">
                                                    <i class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                                    <span class="text-muted font-weight-bold">15/100</span>
                                                </a>
                                            </li>
                                            <li class="list-item d-inline-block">
                                                <a class="" href="#">
                                                    <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                                    <span class="text-muted font-weight-bold">3</span>
                                                </a>
                                            </li>
                                            <li class="list-item d-inline-block">
                                                <a class="ml-2" href="#">
                                                    <i class="mdi mdi-pencil-outline text-muted font-18"></i>
                                                </a>
                                            </li>
                                            <li class="list-item d-inline-block">
                                                <a class="" href="#">
                                                    <i class="mdi mdi-trash-can-outline text-muted font-18"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!--end task-box-->
                                <hr class="hr-dashed">
                                <div class="row mt-3">
                                    <div class="col-lg">
                                        <div class="d-flex">
                                            <i data-feather="headphones" class="align-self-center text-secondary icon-sm"></i>
                                            <div class="d-block align-self-center ml-2">
                                                <h6 class="m-0">Last Meeting</h6>
                                                <p class="mb-0 text-muted">28 Oct 2020 / 10:30AM - 12:30PM</p>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-auto">
                                        <div class="d-flex">
                                            <i data-feather="headphones" class="align-self-center text-secondary icon-sm"></i>
                                            <div class="d-block align-self-center ml-2">
                                                <h6 class="m-0">Next Meeting</h6>
                                                <p class="mb-0 text-muted">06 Nov 2020 / 10:30AM - 12:30PM</p>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end tab-pane-->

                            <div class="tab-pane" id="Project3_Tab" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="media mb-3">
                                            <img src="assets/images/widgets/project1.jpg" alt="" class="thumb-lg rounded-circle">
                                            <div class="media-body align-self-center text-truncate ml-3">

                                                <h4 class="m-0 font-weight-semibold text-dark font-16">Transfer Money</h4>
                                                <p class="text-muted  mb-0 font-13"><span class="text-dark">Client : </span>Kevin  J. Heal</p>
                                            </div><!--end media-body-->
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-6 text-lg-right">
                                        <h6 class="font-weight-semibold m-0">Start : <span class="text-muted font-weight-normal"> 01 Jan 2020</span></h6>
                                        <h6 class="font-weight-semibold mb-0 mt-2">Deadline : <span class="text-muted font-weight-normal"> 15 Mar 2020</span></h6>
                                    </div><!--end col-->
                                </div><!--end row-->

                                <div class="holder">
                                    <ul class="steppedprogress pt-1">
                                        <li class="complete"><span>Planing</span></li>
                                        <li class="complete"><span>Design</span></li>
                                        <li class="complete"><span>Development</span></li>
                                        <li class="complete finish"><span>Testing</span></li>
                                    </ul>
                                </div>
                                <div class="task-box">
                                    <div class="task-priority-icon"><i class="fas fa-check text-danger"></i></div>
                                    <div class="d-flex justify-content-between">
                                        <h6 class="font-weight-semibold m-0 align-self-center">All Hours : <span class="text-muted font-weight-normal"> 530 / 481:30</span></h6>
                                        <h6 class="font-weight-semibold">Today : <span class="text-muted font-weight-normal"> 2:45</span><span class="badge badge-soft-pink font-weight-semibold ml-2"><i class="far fa-fw fa-clock"></i> 2 days left</span></h6>
                                    </div>
                                    <p class="text-muted mb-1">There are many variations of passages of Lorem Ipsum available,
                                        but the majority have suffered alteration in some form.
                                    </p>
                                    <p class="text-muted text-right mb-1">100% Complete</p>
                                    <div class="progress mb-3" style="height: 4px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="img-group">
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="assets/images/users/user-6.jpg" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="assets/images/users/user-2.jpg" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="assets/images/users/user-3.jpg" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a href="#" class="avatar-box thumb-xs align-self-center">
                                                <span class="avatar-title bg-soft-info rounded-circle font-13 font-weight-normal">+6</span>
                                            </a>
                                        </div><!--end img-group-->
                                        <ul class="list-inline mb-0 align-self-center">
                                            <li class="list-item d-inline-block mr-2">
                                                <a class="" href="#">
                                                    <i class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                                    <span class="text-muted font-weight-bold">100/100</span>
                                                </a>
                                            </li>
                                            <li class="list-item d-inline-block">
                                                <a class="" href="#">
                                                    <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                                    <span class="text-muted font-weight-bold">3</span>
                                                </a>
                                            </li>
                                            <li class="list-item d-inline-block">
                                                <a class="ml-2" href="#">
                                                    <i class="mdi mdi-pencil-outline text-muted font-18"></i>
                                                </a>
                                            </li>
                                            <li class="list-item d-inline-block">
                                                <a class="" href="#">
                                                    <i class="mdi mdi-trash-can-outline text-muted font-18"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!--end task-box-->
                                <hr class="hr-dashed">
                                <div class="row mt-3">
                                    <div class="col-lg">
                                        <div class="d-flex">
                                            <i data-feather="headphones" class="align-self-center text-secondary icon-sm"></i>
                                            <div class="d-block align-self-center ml-2">
                                                <h6 class="m-0">Last Meeting</h6>
                                                <p class="mb-0 text-muted">28 Oct 2020 / 10:30AM - 12:30PM</p>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-auto">
                                        <div class="d-flex">
                                            <i data-feather="headphones" class="align-self-center text-secondary icon-sm"></i>
                                            <div class="d-block align-self-center ml-2">
                                                <h6 class="m-0">Next Meeting</h6>
                                                <p class="mb-0 text-muted">06 Nov 2020 / 10:30AM - 12:30PM</p>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end tab-pane-->
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Activity</h4>
                            </div><!--end col-->
                            <div class="col-auto">
                                <div class="dropdown">
                                    <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        All<i class="las la-angle-down ml-1"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Purchases</a>
                                        <a class="dropdown-item" href="#">Emails</a>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div>  <!--end row-->
                    </div><!--end card-header-->
                    <div class="card-body">
                        <div class="project-overview-activity" data-simplebar>
                            <div class="activity">
                                <div class="activity-info">
                                    <div class="icon-info-activity">
                                        <i class="las la-user-clock bg-soft-primary"></i>
                                    </div>
                                    <div class="activity-info-text">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="text-muted mb-0 font-13 w-75"><span>Donald</span>
                                                updated the status of <a href="#">Refund #1234</a> to awaiting customer response
                                            </p>
                                            <small class="text-muted">10 Min ago</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="activity-info">
                                    <div class="icon-info-activity">
                                        <i class="mdi mdi-timer-off bg-soft-primary"></i>
                                    </div>
                                    <div class="activity-info-text">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="text-muted mb-0 font-13 w-75"><span>Lucy Peterson</span>
                                                was added to the group, group name is <a href="#">Overtake</a>
                                            </p>
                                            <small class="text-muted">50 Min ago</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="activity-info">
                                    <div class="icon-info-activity">
                                        <img src="assets/images/users/user-5.jpg" alt="" class="rounded-circle thumb-md">
                                    </div>
                                    <div class="activity-info-text">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="text-muted mb-0 font-13 w-75"><span>Joseph Rust</span>
                                                opened new showcase <a href="#">Mannat #112233</a> with theme market
                                            </p>
                                            <small class="text-muted">10 hours ago</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="activity-info">
                                    <div class="icon-info-activity">
                                        <i class="mdi mdi-clock-outline bg-soft-primary"></i>
                                    </div>
                                    <div class="activity-info-text">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="text-muted mb-0 font-13 w-75"><span>Donald</span>
                                                updated the status of <a href="#">Refund #1234</a> to awaiting customer response
                                            </p>
                                            <small class="text-muted">Yesterday</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="activity-info">
                                    <div class="icon-info-activity">
                                        <i class="mdi mdi-alert-outline bg-soft-primary"></i>
                                    </div>
                                    <div class="activity-info-text">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="text-muted mb-0 font-13 w-75"><span>Lucy Peterson</span>
                                                was added to the group, group name is <a href="#">Overtake</a>
                                            </p>
                                            <small class="text-muted">14 Nov 2019</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="activity-info">
                                    <div class="icon-info-activity">
                                        <img src="assets/images/users/user-4.jpg" alt="" class="rounded-circle thumb-md">
                                    </div>
                                    <div class="activity-info-text">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="text-muted mb-0 font-13 w-75"><span>Joseph Rust</span>
                                                opened new showcase <a href="#">Mannat #112233</a> with theme market
                                            </p>
                                            <small class="text-muted">15 Nov 2019</small>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end activity-->
                        </div><!--end analytics-dash-activity-->
                    </div>  <!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">All Projects</h4>
                            </div><!--end col-->
                            <div class="col-auto">
                                <a href="#" class="text-primary">View All</a>
                            </div><!--end col-->
                        </div>  <!--end row-->
                    </div><!--end card-header-->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Project Name</th>
                                        <th>Client Name</th>
                                        <th>Start Date</th>
                                        <th>Deadline</th>
                                        <th>Status</th>
                                        <th>Progress</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Product Devlopment</td>
                                        <td>
                                            <img src="assets/images/users/user-2.jpg" alt="" class="thumb-sm rounded mr-2">
                                            Kevin J. Heal
                                        </td>
                                        <td>20/3/2020</td>
                                        <td>5/5/2020</td>
                                        <td><span class="badge badge-md badge-boxed  badge-soft-success">Active</span></td>
                                        <td>
                                            <small class="float-right ml-2 pt-1 font-10">92%</small>
                                            <div class="progress mt-2" style="height:3px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 92%;" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>New Office Building</td>
                                        <td>
                                            <img src="assets/images/users/user-3.jpg" alt="" class="thumb-sm rounded mr-2">
                                            Frank M. Lyons
                                        </td>
                                        <td>11/6/2020</td>
                                        <td>15/7/2020</td>
                                        <td><span class="badge badge-md badge-boxed  badge-soft-warning">Panding</span></td>
                                        <td>
                                            <small class="float-right ml-2 pt-1 font-10">0%</small>
                                            <div class="progress mt-2" style="height:3px;">
                                                <div class="progress-bar  bg-success" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Website &amp; Blog</td>
                                        <td>
                                            <img src="assets/images/users/user-4.jpg" alt="" class="thumb-sm rounded mr-2">
                                            Hyman M. Cross
                                        </td>
                                        <td>21/6/2020</td>
                                        <td>3/7/2020</td>
                                        <td><span class="badge badge-md badge-boxed  badge-soft-warning">Panding</span></td>
                                        <td>
                                            <small class="float-right ml-2 pt-1 font-10">0%</small>
                                            <div class="progress mt-2" style="height:3px;">
                                                <div class="progress-bar  bg-success" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Market Research</td>
                                        <td>
                                            <img src="assets/images/users/user-5.jpg" alt="" class="thumb-sm rounded mr-2">
                                            Angelo E. Butler
                                        </td>
                                        <td>30/4/2020</td>
                                        <td>1/6/2020</td>
                                        <td><span class="badge badge-md badge-boxed  badge-soft-success">Active</span></td>
                                        <td>
                                            <small class="float-right ml-2 pt-1 font-10">78%</small>
                                            <div class="progress mt-2" style="height:3px;">
                                                <div class="progress-bar  bg-success" role="progressbar" style="width: 78%;" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Export Marketing</td>
                                        <td>
                                            <img src="assets/images/users/user-6.jpg" alt="" class="thumb-sm rounded mr-2">
                                            Robert C. Golding
                                        </td>
                                        <td>20/3/2020</td>
                                        <td>5/5/2020</td>
                                        <td><span class="badge badge-md badge-boxed  badge-soft-success">Active</span></td>
                                        <td>
                                            <small class="float-right ml-2 pt-1 font-10">45%</small>
                                            <div class="progress mt-2" style="height:3px;">
                                                <div class="progress-bar  bg-success" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Website &amp; Blog</td>
                                        <td>
                                            <img src="assets/images/users/user-8.jpg" alt="" class="thumb-sm rounded mr-2">
                                            Phillip T. Morse
                                        </td>
                                        <td>8/4/2020</td>
                                        <td>2/6/2020</td>
                                        <td><span class="badge badge-md badge-boxed  badge-soft-danger">Complete</span></td>
                                        <td>
                                            <small class="float-right ml-2 pt-1 font-10">100%</small>
                                            <div class="progress mt-2" style="height:3px;">
                                                <div class="progress-bar  bg-pink" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div><!--end table-responsive-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
        </div><!--end row-->

        {{-- Projects display grid page --}}
        <div class="modal fade" id="project_display" tabindex="-1" role="dialog" aria-labelledby="exampleModalDefaultLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title m-0" id="myExtraLargeModalLabel"><b>Project Grid</b></h6>
                        <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="la la-times"></i></span>
                        </button>
                    </div><!--end modal-header-->
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media mb-3">
                                            <img src="assets/images/widgets/project2.jpg" alt="" class="thumb-md rounded-circle">
                                            <div class="media-body align-self-center text-truncate ml-3">
                                                <h4 class="m-0 font-weight-semibold text-dark font-15">Banking</h4>
                                                <p class="text-muted  mb-0 font-13"><span class="text-dark">Client : </span>Hyman M. Cross</p>
                                            </div><!--end media-body-->
                                        </div>
                                        <hr class="hr-dashed">
                                        <div class="d-flex justify-content-between mb-3">
                                            <h6 class="font-weight-semibold m-0">Start : <span class="text-muted font-weight-normal"> 15 Nov 2020</span></h6>
                                            <h6 class="font-weight-semibold m-0">Deadline : <span class="text-muted font-weight-normal"> 28 Fab 2021</span></h6>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div>
                                                    <h5 class="font-16 m-0 font-weight-bold">$56,800</h5>
                                                    <p class="mb-0 font-weight-semibold">Total Budget</p>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-auto align-self-center">
                                                <h5 class="font-14 m-0 font-weight-bold">$22,100 <span class="font-12 text-muted font-weight-normal">Used Budget</span></h5>
                                            </div><!--end col-->
                                        </div><!--end row-->

                                        <div>
                                            <p class="text-muted mt-2 mb-1">There are many variations of passages of Lorem Ipsum available,
                                                but the majority have suffered alteration in some form.
                                            </p>
                                            <div class="d-flex justify-content-between">
                                                <h6 class="font-weight-semibold">All Hours : <span class="text-muted font-weight-normal"> 530 / 281:30</span></h6>
                                                <h6 class="font-weight-semibold">Today : <span class="text-muted font-weight-normal"> 2:45</span><span class="badge badge-soft-pink font-weight-semibold ml-2"><i class="far fa-fw fa-clock"></i> 35 days left</span></h6>
                                            </div>
                                            <p class="text-muted text-right mb-1">15% Complete</p>
                                            <div class="progress mb-4" style="height: 4px;">
                                                <div class="progress-bar bg-purple" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="img-group">
                                                    <a class="user-avatar user-avatar-group" href="#">
                                                        <img src="assets/images/users/user-6.jpg" alt="user" class="rounded-circle thumb-xxs">
                                                    </a>
                                                    <a class="user-avatar user-avatar-group" href="#">
                                                        <img src="assets/images/users/user-2.jpg" alt="user" class="rounded-circle thumb-xxs">
                                                    </a>
                                                    <a class="user-avatar user-avatar-group" href="#">
                                                        <img src="assets/images/users/user-3.jpg" alt="user" class="rounded-circle thumb-xxs">
                                                    </a>
                                                    <a class="user-avatar user-avatar-group" href="#">
                                                        <img src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle thumb-xxs">
                                                    </a>
                                                    <a href="#" class="avatar-box thumb-xxs align-self-center">
                                                        <span class="avatar-title bg-soft-info rounded-circle font-13 font-weight-normal">+6</span>
                                                    </a>
                                                </div><!--end img-group-->
                                                <ul class="list-inline mb-0 align-self-center">
                                                    <li class="list-item d-inline-block mr-2">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                                            <span class="text-muted font-weight-bold">15/100</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                                            <span class="text-muted font-weight-bold">3</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="ml-2" href="#">
                                                            <i class="mdi mdi-pencil-outline text-muted font-18"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-trash-can-outline text-muted font-18"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!--end task-box-->
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->

                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media mb-3">
                                            <img src="assets/images/widgets/project1.jpg" alt="" class="thumb-md rounded-circle">
                                            <div class="media-body align-self-center text-truncate ml-3">
                                                <h4 class="m-0 font-weight-semibold text-dark font-15">Transfer money</h4>
                                                <p class="text-muted  mb-0 font-13"><span class="text-dark">Client : </span>Jack Z Jackson</p>
                                            </div><!--end media-body-->
                                        </div>
                                        <hr class="hr-dashed">
                                        <div class="d-flex justify-content-between mb-3">
                                            <h6 class="font-weight-semibold m-0">Start : <span class="text-muted font-weight-normal"> 08 Dec 2020</span></h6>
                                            <h6 class="font-weight-semibold m-0">Deadline : <span class="text-muted font-weight-normal"> 28 Fab 2021</span></h6>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div>
                                                    <h5 class="font-16 m-0 font-weight-bold">$71,500</h5>
                                                    <p class="mb-0 font-weight-semibold">Total Budget</p>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-auto align-self-center">
                                                <h5 class="font-14 m-0 font-weight-bold">$61,800 <span class="font-12 text-muted font-weight-normal">Used Budget</span></h5>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                        <div>
                                            <p class="text-muted mt-2 mb-1">There are many variations of passages of Lorem Ipsum available,
                                                but the majority have suffered alteration in some form.
                                            </p>
                                            <div class="d-flex justify-content-between">
                                                <h6 class="font-weight-semibold">All Hours : <span class="text-muted font-weight-normal"> 530 / 281:30</span></h6>
                                                <h6 class="font-weight-semibold">Today : <span class="text-muted font-weight-normal"> 2:45</span><span class="badge badge-soft-success font-weight-semibold ml-2"><i class="far fa-fw fa-clock"></i> 35 days left</span></h6>
                                            </div>
                                            <p class="text-muted text-right mb-1">15% Complete</p>
                                            <div class="progress mb-4" style="height: 4px;">
                                                <div class="progress-bar bg-purple" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="img-group">
                                                    <a class="user-avatar user-avatar-group" href="#">
                                                        <img src="assets/images/users/user-5.jpg" alt="user" class="rounded-circle thumb-xxs">
                                                    </a>
                                                    <a class="user-avatar user-avatar-group" href="#">
                                                        <img src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle thumb-xxs">
                                                    </a>
                                                    <a class="user-avatar user-avatar-group" href="#">
                                                        <img src="assets/images/users/user-1.jpg" alt="user" class="rounded-circle thumb-xxs">
                                                    </a>
                                                    <a class="user-avatar user-avatar-group" href="#">
                                                        <img src="assets/images/users/user-7.jpg" alt="user" class="rounded-circle thumb-xxs">
                                                    </a>
                                                    <a href="#" class="avatar-box thumb-xxs align-self-center">
                                                        <span class="avatar-title bg-soft-info rounded-circle font-13 font-weight-normal">+6</span>
                                                    </a>
                                                </div><!--end img-group-->
                                                <ul class="list-inline mb-0 align-self-center">
                                                    <li class="list-item d-inline-block mr-2">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                                            <span class="text-muted font-weight-bold">15/100</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                                            <span class="text-muted font-weight-bold">3</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="ml-2" href="#">
                                                            <i class="mdi mdi-pencil-outline text-muted font-18"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-trash-can-outline text-muted font-18"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!--end task-box-->
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media mb-3">
                                            <img src="assets/images/widgets/project3.jpg" alt="" class="thumb-md rounded-circle">
                                            <div class="media-body align-self-center text-truncate ml-3">
                                                <h4 class="m-0 font-weight-semibold text-dark font-15">Organic Farming</h4>
                                                <p class="text-muted  mb-0 font-13"><span class="text-dark">Client : </span>Hyman M. Cross</p>
                                            </div><!--end media-body-->
                                        </div>
                                        <hr class="hr-dashed">
                                        <div class="d-flex justify-content-between mb-3">
                                            <h6 class="font-weight-semibold m-0">Start : <span class="text-muted font-weight-normal"> 15 Nov 2020</span></h6>
                                            <h6 class="font-weight-semibold m-0">Deadline : <span class="text-muted font-weight-normal"> 28 Fab 2021</span></h6>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div>
                                                    <h5 class="font-16 m-0 font-weight-bold">$45,300</h5>
                                                    <p class="mb-0 font-weight-semibold">Total Budget</p>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-auto align-self-center">
                                                <h5 class="font-14 m-0 font-weight-bold">$24,500 <span class="font-12 text-muted font-weight-normal">Used Budget</span></h5>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                        <div>
                                            <p class="text-muted mt-2 mb-1">There are many variations of passages of Lorem Ipsum available,
                                                but the majority have suffered alteration in some form.
                                            </p>
                                            <div class="d-flex justify-content-between">
                                                <h6 class="font-weight-semibold">All Hours : <span class="text-muted font-weight-normal"> 530 / 281:30</span></h6>
                                                <h6 class="font-weight-semibold">Today : <span class="text-muted font-weight-normal"> 2:45</span><span class="badge badge-soft-primary font-weight-semibold ml-2"><i class="far fa-fw fa-clock"></i> 35 days left</span></h6>
                                            </div>
                                            <p class="text-muted text-right mb-1">15% Complete</p>
                                            <div class="progress mb-4" style="height: 4px;">
                                                <div class="progress-bar bg-purple" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="img-group">
                                                    <a class="user-avatar user-avatar-group" href="#">
                                                        <img src="assets/images/users/user-10.jpg" alt="user" class="rounded-circle thumb-xxs">
                                                    </a>
                                                    <a class="user-avatar user-avatar-group" href="#">
                                                        <img src="assets/images/users/user-8.jpg" alt="user" class="rounded-circle thumb-xxs">
                                                    </a>
                                                    <a class="user-avatar user-avatar-group" href="#">
                                                        <img src="assets/images/users/user-5.jpg" alt="user" class="rounded-circle thumb-xxs">
                                                    </a>
                                                    <a class="user-avatar user-avatar-group" href="#">
                                                        <img src="assets/images/users/user-2.jpg" alt="user" class="rounded-circle thumb-xxs">
                                                    </a>
                                                    <a href="#" class="avatar-box thumb-xxs align-self-center">
                                                        <span class="avatar-title bg-soft-info rounded-circle font-13 font-weight-normal">+6</span>
                                                    </a>
                                                </div><!--end img-group-->
                                                <ul class="list-inline mb-0 align-self-center">
                                                    <li class="list-item d-inline-block mr-2">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                                            <span class="text-muted font-weight-bold">15/100</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                                            <span class="text-muted font-weight-bold">3</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="ml-2" href="#">
                                                            <i class="mdi mdi-pencil-outline text-muted font-18"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-trash-can-outline text-muted font-18"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!--end task-box-->
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                        </div>

                        <div class="row">

                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media mb-3">
                                            <img src="assets/images/widgets/project1.jpg" alt="" class="thumb-md rounded-circle">
                                            <div class="media-body align-self-center text-truncate ml-3">
                                                <h4 class="m-0 font-weight-semibold text-dark font-15">Book My World</h4>
                                                <p class="text-muted  mb-0 font-13"><span class="text-dark">Client : </span>Hyman M. Cross</p>
                                            </div><!--end media-body-->
                                        </div>
                                        <hr class="hr-dashed">
                                        <div class="d-flex justify-content-between mb-3">
                                            <h6 class="font-weight-semibold m-0">Start : <span class="text-muted font-weight-normal"> 15 Nov 2020</span></h6>
                                            <h6 class="font-weight-semibold m-0">Deadline : <span class="text-muted font-weight-normal"> 28 Fab 2021</span></h6>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div>
                                                    <h5 class="font-16 m-0 font-weight-bold">$38,200</h5>
                                                    <p class="mb-0 font-weight-semibold">Total Budget</p>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-auto align-self-center">
                                                <h5 class="font-14 m-0 font-weight-bold">$16,800 <span class="font-12 text-muted font-weight-normal">Used Budget</span></h5>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                        <div>
                                            <p class="text-muted mt-2 mb-1">There are many variations of passages of Lorem Ipsum available,
                                                but the majority have suffered alteration in some form.
                                            </p>
                                            <div class="d-flex justify-content-between">
                                                <h6 class="font-weight-semibold">All Hours : <span class="text-muted font-weight-normal"> 530 / 281:30</span></h6>
                                                <h6 class="font-weight-semibold">Today : <span class="text-muted font-weight-normal"> 2:45</span><span class="badge badge-soft-warning font-weight-semibold ml-2"><i class="far fa-fw fa-clock"></i> 35 days left</span></h6>
                                            </div>
                                            <p class="text-muted text-right mb-1">15% Complete</p>
                                            <div class="progress mb-4" style="height: 4px;">
                                                <div class="progress-bar bg-purple" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="img-group">
                                                    <a class="user-avatar user-avatar-group" href="#">
                                                        <img src="assets/images/users/user-5.jpg" alt="user" class="rounded-circle thumb-xxs">
                                                    </a>
                                                    <a class="user-avatar user-avatar-group" href="#">
                                                        <img src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle thumb-xxs">
                                                    </a>
                                                    <a class="user-avatar user-avatar-group" href="#">
                                                        <img src="assets/images/users/user-3.jpg" alt="user" class="rounded-circle thumb-xxs">
                                                    </a>
                                                    <a class="user-avatar user-avatar-group" href="#">
                                                        <img src="assets/images/users/user-2.jpg" alt="user" class="rounded-circle thumb-xxs">
                                                    </a>
                                                    <a href="#" class="avatar-box thumb-xxs align-self-center">
                                                        <span class="avatar-title bg-soft-info rounded-circle font-13 font-weight-normal">+6</span>
                                                    </a>
                                                </div><!--end img-group-->
                                                <ul class="list-inline mb-0 align-self-center">
                                                    <li class="list-item d-inline-block mr-2">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                                            <span class="text-muted font-weight-bold">15/100</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                                            <span class="text-muted font-weight-bold">3</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="ml-2" href="#">
                                                            <i class="mdi mdi-pencil-outline text-muted font-18"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-trash-can-outline text-muted font-18"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!--end task-box-->
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media mb-3">
                                            <img src="assets/images/widgets/project3.jpg" alt="" class="thumb-md rounded-circle">
                                            <div class="media-body align-self-center text-truncate ml-3">
                                                <h4 class="m-0 font-weight-semibold text-dark font-15">New GPS System</h4>
                                                <p class="text-muted  mb-0 font-13"><span class="text-dark">Client : </span>Hyman M. Cross</p>
                                            </div><!--end media-body-->
                                        </div>
                                        <hr class="hr-dashed">
                                        <div class="d-flex justify-content-between mb-3">
                                            <h6 class="font-weight-semibold m-0">Start : <span class="text-muted font-weight-normal"> 15 Nov 2020</span></h6>
                                            <h6 class="font-weight-semibold m-0">Deadline : <span class="text-muted font-weight-normal"> 28 Fab 2021</span></h6>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div>
                                                    <h5 class="font-16 m-0 font-weight-bold">$55,600</h5>
                                                    <p class="mb-0 font-weight-semibold">Total Budget</p>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-auto align-self-center">
                                                <h5 class="font-14 m-0 font-weight-bold">$27,200 <span class="font-12 text-muted font-weight-normal">Used Budget</span></h5>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                        <div>
                                            <p class="text-muted mt-2 mb-1">There are many variations of passages of Lorem Ipsum available,
                                                but the majority have suffered alteration in some form.
                                            </p>
                                            <div class="d-flex justify-content-between">
                                                <h6 class="font-weight-semibold">All Hours : <span class="text-muted font-weight-normal"> 530 / 281:30</span></h6>
                                                <h6 class="font-weight-semibold">Today : <span class="text-muted font-weight-normal"> 2:45</span><span class="badge badge-soft-pink font-weight-semibold ml-2"><i class="far fa-fw fa-clock"></i> 35 days left</span></h6>
                                            </div>
                                            <p class="text-muted text-right mb-1">15% Complete</p>
                                            <div class="progress mb-4" style="height: 4px;">
                                                <div class="progress-bar bg-purple" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="img-group">
                                                    <a class="user-avatar user-avatar-group" href="#">
                                                        <img src="assets/images/users/user-2.jpg" alt="user" class="rounded-circle thumb-xxs">
                                                    </a>
                                                    <a class="user-avatar user-avatar-group" href="#">
                                                        <img src="assets/images/users/user-9.jpg" alt="user" class="rounded-circle thumb-xxs">
                                                    </a>
                                                    <a class="user-avatar user-avatar-group" href="#">
                                                        <img src="assets/images/users/user-5.jpg" alt="user" class="rounded-circle thumb-xxs">
                                                    </a>
                                                    <a class="user-avatar user-avatar-group" href="#">
                                                        <img src="assets/images/users/user-10.jpg" alt="user" class="rounded-circle thumb-xxs">
                                                    </a>
                                                    <a href="#" class="avatar-box thumb-xxs align-self-center">
                                                        <span class="avatar-title bg-soft-info rounded-circle font-13 font-weight-normal">+6</span>
                                                    </a>
                                                </div><!--end img-group-->
                                                <ul class="list-inline mb-0 align-self-center">
                                                    <li class="list-item d-inline-block mr-2">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                                            <span class="text-muted font-weight-bold">15/100</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                                            <span class="text-muted font-weight-bold">3</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="ml-2" href="#">
                                                            <i class="mdi mdi-pencil-outline text-muted font-18"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-trash-can-outline text-muted font-18"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!--end task-box-->
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media mb-3">
                                            <img src="assets/images/widgets/project2.jpg" alt="" class="thumb-md rounded-circle">
                                            <div class="media-body align-self-center text-truncate ml-3">
                                                <h4 class="m-0 font-weight-semibold text-dark font-15">Body Care</h4>
                                                <p class="text-muted  mb-0 font-13"><span class="text-dark">Client : </span>Hyman M. Cross</p>
                                            </div><!--end media-body-->
                                        </div>
                                        <hr class="hr-dashed">
                                        <div class="d-flex justify-content-between mb-3">
                                            <h6 class="font-weight-semibold m-0">Start : <span class="text-muted font-weight-normal"> 15 Nov 2020</span></h6>
                                            <h6 class="font-weight-semibold m-0">Deadline : <span class="text-muted font-weight-normal"> 28 Fab 2021</span></h6>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div>
                                                    <h5 class="font-16 m-0 font-weight-bold">$65,000</h5>
                                                    <p class="mb-0 font-weight-semibold">Total Budget</p>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-auto align-self-center">
                                                <h5 class="font-14 m-0 font-weight-bold">$36,900 <span class="font-12 text-muted font-weight-normal">Used Budget</span></h5>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                        <div>
                                            <p class="text-muted mt-2 mb-1">There are many variations of passages of Lorem Ipsum available,
                                                but the majority have suffered alteration in some form.
                                            </p>
                                            <div class="d-flex justify-content-between">
                                                <h6 class="font-weight-semibold">All Hours : <span class="text-muted font-weight-normal"> 530 / 281:30</span></h6>
                                                <h6 class="font-weight-semibold">Today : <span class="text-muted font-weight-normal"> 2:45</span><span class="badge badge-soft-info font-weight-semibold ml-2"><i class="far fa-fw fa-clock"></i> 35 days left</span></h6>
                                            </div>
                                            <p class="text-muted text-right mb-1">15% Complete</p>
                                            <div class="progress mb-4" style="height: 4px;">
                                                <div class="progress-bar bg-purple" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="img-group">
                                                    <a class="user-avatar user-avatar-group" href="#">
                                                        <img src="assets/images/users/user-6.jpg" alt="user" class="rounded-circle thumb-xxs">
                                                    </a>
                                                    <a class="user-avatar user-avatar-group" href="#">
                                                        <img src="assets/images/users/user-2.jpg" alt="user" class="rounded-circle thumb-xxs">
                                                    </a>
                                                    <a class="user-avatar user-avatar-group" href="#">
                                                        <img src="assets/images/users/user-3.jpg" alt="user" class="rounded-circle thumb-xxs">
                                                    </a>
                                                    <a class="user-avatar user-avatar-group" href="#">
                                                        <img src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle thumb-xxs">
                                                    </a>
                                                    <a href="#" class="avatar-box thumb-xxs align-self-center">
                                                        <span class="avatar-title bg-soft-info rounded-circle font-13 font-weight-normal">+6</span>
                                                    </a>
                                                </div><!--end img-group-->
                                                <ul class="list-inline mb-0 align-self-center">
                                                    <li class="list-item d-inline-block mr-2">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                                            <span class="text-muted font-weight-bold">15/100</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                                            <span class="text-muted font-weight-bold">3</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="ml-2" href="#">
                                                            <i class="mdi mdi-pencil-outline text-muted font-18"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-trash-can-outline text-muted font-18"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!--end task-box-->
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                        </div>





                    </div><!--end modal-body-->

                </div><!--end modal-content-->
            </div>
        </div><!--end modal-->

        {{-- Add Project Modal --}}
        <div class="modal fade" id="new_project" tabindex="-1" role="dialog" aria-labelledby="exampleModalDefaultLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title m-0" id="myExtraLargeModalLabel"><b>Add Post</b></h6>
                        <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="la la-times"></i></span>
                        </button>
                    </div><!--end modal-header-->
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h4 class="card-title">Create Project Form</h4>
                                                <p class="text-muted mb-0">Basic example to create project form styles.</p>
                                            </div><!--end col-->
                                        </div>  <!--end row-->
                                    </div><!--end card-header-->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <form>
                                                    <div class="form-group">
                                                        <label for="projectName">Project Name :</label>
                                                        <input type="text" class="form-control" id="projectName" aria-describedby="emailHelp" placeholder="Enter project name">
                                                    </div><!--end form-group-->
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-6 mb-2 mb-lg-0">
                                                                <label for="pro-start-date">Project Start Date</label>
                                                                <input type="text" class="form-control" id="pro-start-date" placeholder="Enter start date">
                                                            </div><!--end col-->
                                                            <div class="col-lg-3 col-6 mb-2 mb-lg-0">
                                                                <label for="pro-end-date">Project End Date</label>
                                                                <input type="text" class="form-control" id="pro-end-date" placeholder="Enter end date">
                                                            </div><!--end col-->
                                                            <div class="col-lg-3 col-6">
                                                                <label for="pro-rate">Rate</label>
                                                                <input type="text" class="form-control" id="pro-rate" placeholder="Enter rate">
                                                            </div><!--end col-->
                                                            <div class="col-lg-3 col-6">
                                                                <label for="pro-end-date">Price Type</label>
                                                                <select class="form-control">
                                                                    <option>Hourly</option>
                                                                    <option>Daily</option>
                                                                    <option>Fix</option>
                                                                </select>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end form-group-->
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-6 mb-2 mb-lg-0">
                                                                <label for="pro-end-date">Required</label>
                                                                <select class="form-control">
                                                                    <option>--Select--</option>
                                                                    <option>UI/UX Design</option>
                                                                    <option>Payment System </option>
                                                                    <option>Android 10</option>
                                                                </select>
                                                            </div><!--end col-->
                                                            <div class="col-lg-3 col-6">
                                                                <label for="pro-end-date">Invoice Time</label>
                                                                <select class="form-control">
                                                                    <option>30 Day</option>
                                                                    <option>3 Month</option>
                                                                    <option>1 Year</option>
                                                                </select>
                                                            </div><!--end col-->
                                                            <div class="col-lg-3 col-6">
                                                                <label for="pro-end-date">Priority</label>
                                                                <select class="form-control">
                                                                    <option>-- select --</option>
                                                                    <option>High</option>
                                                                    <option>Medium</option>
                                                                    <option>Low</option>
                                                                </select>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end form-group-->
                                                    <div class="form-group">
                                                        <label for="pro-message">Message</label>
                                                        <textarea class="form-control" rows="5" id="pro-message" placeholder="writing here.."></textarea>
                                                    </div><!--end form-group-->

                                                    <button type="submit" class="btn btn-soft-primary btn-sm">Create project</button>
                                                    <button type="button" class="btn btn-soft-danger btn-sm">Cancel</button>
                                                </form>  <!--end form-->
                                            </div><!--end col-->
                                            <div class="col-lg-5 ml-auto align-self-center">
                                                <form>
                                                    <div class="form-group">
                                                        <label for="pro-avatar">Project Avatar</label>
                                                        <img src="assets/images/widgets/project3.jpg" alt="" class="thumb-lg ml-3">
                                                        <button class="btn btn-soft-primary btn-sm change-avatar ml-3">Change Avatar</button>
                                                        <input id="fileupload" type="file" name="files[]" multiple="" style="display: none;">
                                                    </div><!--end form-group-->
                                                    <h5 class="font-weight-normal my-5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised.</h5>
                                                    <div class="form-group">
                                                        <label for="team-leader">Project team members</label>
                                                        <div class="img-group ml-3">
                                                            <a class="user-avatar user-avatar-group" href="#">
                                                                <img src="assets/images/users/user-3.jpg" alt="user" class="thumb-xs rounded-circle">
                                                            </a>
                                                            <a class="user-avatar user-avatar-group" href="#">
                                                                <img src="assets/images/users/user-5.jpg" alt="user" class="thumb-xs rounded-circle">
                                                            </a>
                                                            <a class="user-avatar user-avatar-group" href="#">
                                                                <img src="assets/images/users/user-10.jpg" alt="user" class="thumb-xs rounded-circle">
                                                            </a>
                                                            <a class="user-avatar user-avatar-group" href="#">
                                                                <img src="assets/images/users/user-4.jpg" alt="user" class="thumb-xs rounded-circle">
                                                            </a>
                                                        </div><!--end img-group-->
                                                        <button type="button" class="btn btn-soft-primary btn-sm add-member ml-3 px-3">
                                                            <i class="fas fa-plus"></i>
                                                        </button>
                                                        <input id="add-member" type="file" name="files[]" multiple="" style="display: none;">
                                                    </div><!--end form-group-->
                                                </form>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                        </div>

                    </div><!--end modal-body-->

                </div><!--end modal-content-->
            </div>
        </div><!--end modal-->

    </div>
@endsection



@section('scripts')

    {{-- Datatable JS --}}
    {{-- <script src="{{asset('public/admin/plugins/datatables.net/js/jquery.dataTables.min.js')}}"></script> --}}
    {{-- <script src="{{asset('public/admin/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script> --}}
    {{-- <script src="{{asset('public/admin/assets/pages/jquery.datatable.init.js')}}"></script> --}}
    {{-- Datatable JS --}}

    //charts
    <script src="{{asset('public/admin/plugins/apex-charts/apexcharts.min.js')}}"></script>

    <script>

        $(function(){
            'use strict'

            //Datatable
            // $('#datatable').DataTable({
            //     processing: true,
            //     serverSide: true,
            //     ajax: '{!! route('post.index') !!}',
            //     columns:[
            //         { data: 'postdetails', name: 'postdetails'},
            //         { data: 'category', name: 'category'},
            //         { data: 'status', name: 'status'},
            //         { data: 'created_at', name: 'created_at' },
            //         { data: 'action', name: 'action' },
            //     ]
            // });


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

        var options = {
            chart: { height: 250, type: "area", stacked: !0, toolbar: { show: !1, autoSelected: "zoom" } },
            colors: ["#2a77f4"],
            dataLabels: { enabled: !1 },
            stroke: { curve: "smooth", width: [2, 2], dashArray: [0, 4], lineCap: "round" },
            grid: { borderColor: "#45404a2e", padding: { left: 0, right: 0 }, strokeDashArray: 3 },
            markers: { size: 0, hover: { size: 0 } },
            series: [{ name: "Unique Visits", data: [10, 10, 50, 20, 70, 20, 80, 30, 75, 40, 60, 60] }],
            xaxis: { type: "month", categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"], axisBorder: { show: !0, color: "#45404a2e" }, axisTicks: { show: !0, color: "#45404a2e" } },
            fill: { type: "gradient", gradient: { shadeIntensity: 1, opacityFrom: 0.4, opacityTo: 0.3, stops: [0, 90, 100] } },
            tooltip: { x: { format: "dd/MM/yy HH:mm" } },
            legend: { position: "top", horizontalAlign: "right" },
        };
        (chart = new ApexCharts(document.querySelector("#overview"), options)).render();
        var chart;
        options = {
            chart: { type: "radialBar", height: 260, dropShadow: { enabled: !0, top: 5, left: 0, bottom: 0, right: 0, blur: 5, color: "#45404a2e", opacity: 0.35 } },
            plotOptions: {
                radialBar: {
                    offsetY: -10,
                    startAngle: 0,
                    endAngle: 270,
                    hollow: { margin: 5, size: "50%", background: "transparent" },
                    track: { show: !1 },
                    dataLabels: { name: { fontSize: "18px" }, value: { fontSize: "16px", color: "#50649c" } },
                },
            },
            colors: ["#2a76f4", "rgba(42, 118, 244, .5)", "rgba(42, 118, 244, .18)"],
            stroke: { lineCap: "round" },
            series: [71, 63, 100],
            labels: ["Completed", "Active", "Assigned"],
            legend: { show: !0, floating: !0, position: "left", offsetX: -10, offsetY: 0 },
            responsive: [{ breakpoint: 480, options: { legend: { show: !0, floating: !0, position: "left", offsetX: 10, offsetY: 0 } } }],
        };
        (chart = new ApexCharts(document.querySelector("#task_status"), options)).render();


    </script>

@endsection
