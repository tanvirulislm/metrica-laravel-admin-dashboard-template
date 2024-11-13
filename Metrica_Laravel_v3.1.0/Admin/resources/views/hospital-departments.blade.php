@extends('layouts.master')
@section('title')Metrica @endsection
@section('content')
<!-- this is breadcrumbs -->
@component('components.breadcrumb')
@slot('li_1') Metrica @endslot
@slot('li_2') Hospital @endslot
@slot('title') Departments @endslot
@endcomponent

<div class="row">
    <div class="col-lg-6">
        <ul class="list-inline">
            <li class="list-inline-item">
                <h5 class="mt-0">Here the list of all Departments. <span class="badge badge-pink">6</span></h5>
            </li>
        </ul>
    </div>
    <!--end col-->

    <div class="col-lg-6">
        <div class="text-end">
            <ul class="list-inline">
                <li class="list-inline-item">
                    <div class="input-group">
                        <input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control form-control-sm" placeholder="Search">
                        <button type="button" class="btn btn-de-primary btn-sm"><i class="fas fa-search"></i></button>
                    </div>
                </li>
                <li class="list-inline-item">
                    <button type="button" class="btn btn-de-primary btn-sm">Add New Department</button>
                </li>
            </ul>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->

<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="float-end">
                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                </div>
                <div class="media mb-3">
                    <img src="{{URL::asset('assets/images/small/project-2.jpg')}}" alt="" class="thumb-md rounded-circle">
                    <div class="media-body align-self-center text-truncate ms-3">
                        <h4 class="m-0 font-weight-semibold text-dark font-16">Dentists</h4>
                        <p class="text-muted  mb-0 font-13"><span class="badge badge-soft-success font-11">Active</span></p>
                    </div>
                    <!--end media-body-->
                </div>
                <hr class="hr-dashed">
                <p class="text-muted"><span class="text-dark font-13"><b>Description :</b></span>There are many variations of passages of
                    Lorem Ipsum available, but the majority have suffered alteration in some form.
                </p>
                <div class="d-flex justify-content-between">
                    <div>
                        <h4 class="m-0 font-16">3/4</h4>
                        <p class="text-muted">Available Doctors</p>
                    </div>
                    <div>
                        <h4 class="m-0 font-16">$5800</h4>
                        <p class="text-muted">Revenue This Month</p>
                    </div>
                </div>
                <div class="d-flex justify-content-between project-card">
                    <div class="img-group">
                        <a class="user-avatar" href="#">
                            <img src="{{URL::asset('assets/images/users/dr-1.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                        </a>
                        <a class="user-avatar ms-n3" href="#">
                            <img src="{{URL::asset('assets/images/users/dr-2.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                        </a>
                        <a class="user-avatar ms-n3" href="#">
                            <img src="{{URL::asset('assets/images/users/dr-3.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                        </a>
                        <a class="user-avatar ms-n3" href="#">
                            <img src="{{URL::asset('assets/images/users/dr-4.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                        </a>
                        <a href="" class="user-avatar">
                            <span class="thumb-xs justify-content-center d-flex align-items-center bg-soft-info rounded-circle fw-semibold">+6</span>
                        </a>
                    </div>
                    <!--end img-group-->
                    <div class="align-self-center">
                        <a href="#" class="text-secondary d-flex">Read More<i class="las la-long-arrow-alt-right ms-1  font-16 align-self-center"></i></a>
                    </div>
                </div>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->

    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="float-end">
                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                </div>
                <div class="media mb-3">
                    <img src="{{URL::asset('assets/images/small/project-3.jpg')}}" alt="" class="thumb-md rounded-circle">
                    <div class="media-body align-self-center text-truncate ms-3">
                        <h4 class="m-0 font-weight-semibold text-dark font-16">Neurology</h4>
                        <p class="text-muted  mb-0 font-13"><span class="badge badge-soft-danger font-11">Inactive</span></p>
                    </div>
                    <!--end media-body-->
                </div>
                <hr class="hr-dashed">
                <p class="text-muted"><span class="text-dark font-13"><b>Description :</b></span>There are many variations of passages of
                    Lorem Ipsum available, but the majority have suffered alteration in some form.
                </p>
                <div class="d-flex justify-content-between">
                    <div>
                        <h4 class="m-0 font-16">0/4</h4>
                        <p class="text-muted">Available Doctors</p>
                    </div>
                    <div>
                        <h4 class="m-0 font-16">$800</h4>
                        <p class="text-muted">Revenue This Month</p>
                    </div>
                </div>
                <div class="d-flex justify-content-between project-card">
                    <div class="img-group">
                        <a class="user-avatar" href="#">
                            <img src="{{URL::asset('assets/images/users/dr-5.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                        </a>
                        <a class="user-avatar ms-n3" href="#">
                            <img src="{{URL::asset('assets/images/users/dr-2.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                        </a>
                        <a class="user-avatar ms-n3" href="#">
                            <img src="{{URL::asset('assets/images/users/dr-3.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                        </a>
                        <a class="user-avatar ms-n3" href="#">
                            <img src="{{URL::asset('assets/images/users/dr-6.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                        </a>
                        <a href="" class="user-avatar">
                            <span class="thumb-xs justify-content-center d-flex align-items-center bg-soft-info rounded-circle fw-semibold">+6</span>
                        </a>
                    </div>
                    <!--end img-group-->
                    <div class="align-self-center">
                        <a href="#" class="text-secondary d-flex">Read More<i class="las la-long-arrow-alt-right ms-1  font-16 align-self-center"></i></a>
                    </div>
                </div>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="float-end">
                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                </div>
                <div class="media mb-3">
                    <img src="{{URL::asset('assets/images/small/project-1.jpg')}}" alt="" class="thumb-md rounded-circle">
                    <div class="media-body align-self-center text-truncate ms-3">
                        <h4 class="m-0 font-weight-semibold text-dark font-16">Orthopedics</h4>
                        <p class="text-muted  mb-0 font-13"><span class="badge badge-soft-success font-11">Active</span></p>
                    </div>
                    <!--end media-body-->
                </div>
                <hr class="hr-dashed">
                <p class="text-muted"><span class="text-dark font-13"><b>Description :</b></span>There are many variations of passages of
                    Lorem Ipsum available, but the majority have suffered alteration in some form.
                </p>
                <div class="d-flex justify-content-between">
                    <div>
                        <h4 class="m-0 font-16">7/8</h4>
                        <p class="text-muted">Available Doctors</p>
                    </div>
                    <div>
                        <h4 class="m-0 font-16">$7100</h4>
                        <p class="text-muted">Revenue This Month</p>
                    </div>
                </div>
                <div class="d-flex justify-content-between project-card">
                    <div class="img-group">
                        <a class="user-avatar" href="#">
                            <img src="{{URL::asset('assets/images/users/dr-3.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                        </a>
                        <a class="user-avatar ms-n3" href="#">
                            <img src="{{URL::asset('assets/images/users/dr-4.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                        </a>
                        <a class="user-avatar ms-n3" href="#">
                            <img src="{{URL::asset('assets/images/users/dr-2.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                        </a>
                        <a class="user-avatar ms-n3" href="#">
                            <img src="{{URL::asset('assets/images/users/dr-1.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                        </a>
                        <a href="" class="user-avatar">
                            <span class="thumb-xs justify-content-center d-flex align-items-center bg-soft-info rounded-circle fw-semibold">+6</span>
                        </a>
                    </div>
                    <!--end img-group-->
                    <div class="align-self-center">
                        <a href="#" class="text-secondary d-flex">Read More<i class="las la-long-arrow-alt-right ms-1  font-16 align-self-center"></i></a>
                    </div>
                </div>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
</div>
<!--end row-->

<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="float-end">
                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                </div>
                <div class="media mb-3">
                    <img src="{{URL::asset('assets/images/small/project-1.jpg')}}" alt="" class="thumb-md rounded-circle">
                    <div class="media-body align-self-center text-truncate ms-3">
                        <h4 class="m-0 font-weight-semibold text-dark font-16">Psychology</h4>
                        <p class="text-muted  mb-0 font-13"><span class="badge badge-soft-success font-11">Active</span></p>
                    </div>
                    <!--end media-body-->
                </div>
                <hr class="hr-dashed">
                <p class="text-muted"><span class="text-dark font-13"><b>Description :</b></span>There are many variations of passages of
                    Lorem Ipsum available, but the majority have suffered alteration in some form.
                </p>
                <div class="d-flex justify-content-between">
                    <div>
                        <h4 class="m-0 font-16">5/9</h4>
                        <p class="text-muted">Available Doctors</p>
                    </div>
                    <div>
                        <h4 class="m-0 font-16">$6600</h4>
                        <p class="text-muted">Revenue This Month</p>
                    </div>
                </div>
                <div class="d-flex justify-content-between project-card">
                    <div class="img-group">
                        <a class="user-avatar" href="#">
                            <img src="{{URL::asset('assets/images/users/dr-4.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                        </a>
                        <a class="user-avatar ms-n3" href="#">
                            <img src="{{URL::asset('assets/images/users/dr-5.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                        </a>
                        <a class="user-avatar ms-n3" href="#">
                            <img src="{{URL::asset('assets/images/users/dr-6.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                        </a>
                        <a class="user-avatar ms-n3" href="#">
                            <img src="{{URL::asset('assets/images/users/dr-2.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                        </a>
                        <a href="" class="user-avatar">
                            <span class="thumb-xs justify-content-center d-flex align-items-center bg-soft-info rounded-circle fw-semibold">+6</span>
                        </a>
                    </div>
                    <!--end img-group-->
                    <div class="align-self-center">
                        <a href="#" class="text-secondary d-flex">Read More<i class="las la-long-arrow-alt-right ms-1  font-16 align-self-center"></i></a>
                    </div>
                </div>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->

    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="float-end">
                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                </div>
                <div class="media mb-3">
                    <img src="{{URL::asset('assets/images/small/project-2.jpg')}}" alt="" class="thumb-md rounded-circle">
                    <div class="media-body align-self-center text-truncate ms-3">
                        <h4 class="m-0 font-weight-semibold text-dark font-16">Pathology</h4>
                        <p class="text-muted  mb-0 font-13"><span class="badge badge-soft-success font-11">Active</span></p>
                    </div>
                    <!--end media-body-->
                </div>
                <hr class="hr-dashed">
                <p class="text-muted"><span class="text-dark font-13"><b>Description :</b></span>There are many variations of passages of
                    Lorem Ipsum available, but the majority have suffered alteration in some form.
                </p>
                <div class="d-flex justify-content-between">
                    <div>
                        <h4 class="m-0 font-16">4/4</h4>
                        <p class="text-muted">Available Doctors</p>
                    </div>
                    <div>
                        <h4 class="m-0 font-16">$4500</h4>
                        <p class="text-muted">Revenue This Month</p>
                    </div>
                </div>
                <div class="d-flex justify-content-between project-card">
                    <div class="img-group">
                        <a class="user-avatar" href="#">
                            <img src="{{URL::asset('assets/images/users/dr-1.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                        </a>
                        <a class="user-avatar ms-n3" href="#">
                            <img src="{{URL::asset('assets/images/users/dr-2.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                        </a>
                        <a class="user-avatar ms-n3" href="#">
                            <img src="{{URL::asset('assets/images/users/dr-3.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                        </a>
                        <a class="user-avatar ms-n3" href="#">
                            <img src="{{URL::asset('assets/images/users/dr-4.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                        </a>
                        <a href="" class="user-avatar">
                            <span class="thumb-xs justify-content-center d-flex align-items-center bg-soft-info rounded-circle fw-semibold">+6</span>
                        </a>
                    </div>
                    <!--end img-group-->
                    <div class="align-self-center">
                        <a href="#" class="text-secondary d-flex">Read More<i class="las la-long-arrow-alt-right ms-1  font-16 align-self-center"></i></a>
                    </div>
                </div>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="float-end">
                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                </div>
                <div class="media mb-3">
                    <img src="{{URL::asset('assets/images/small/project-3.jpg')}}" alt="" class="thumb-md rounded-circle">
                    <div class="media-body align-self-center text-truncate ms-3">
                        <h4 class="m-0 font-weight-semibold text-dark font-16">Cardiology</h4>
                        <p class="text-muted  mb-0 font-13"><span class="badge badge-soft-success font-11">Active</span></p>
                    </div>
                    <!--end media-body-->
                </div>
                <hr class="hr-dashed">
                <p class="text-muted"><span class="text-dark font-13"><b>Description :</b></span>There are many variations of passages of
                    Lorem Ipsum available, but the majority have suffered alteration in some form.
                </p>
                <div class="d-flex justify-content-between">
                    <div>
                        <h4 class="m-0 font-16">5/7</h4>
                        <p class="text-muted">Available Doctors</p>
                    </div>
                    <div>
                        <h4 class="m-0 font-16">$9100</h4>
                        <p class="text-muted">Revenue This Month</p>
                    </div>
                </div>
                <div class="d-flex justify-content-between project-card">
                    <div class="img-group">
                        <a class="user-avatar" href="#">
                            <img src="{{URL::asset('assets/images/users/dr-4.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                        </a>
                        <a class="user-avatar ms-n3" href="#">
                            <img src="{{URL::asset('assets/images/users/dr-5.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                        </a>
                        <a class="user-avatar ms-n3" href="#">
                            <img src="{{URL::asset('assets/images/users/dr-6.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                        </a>
                        <a class="user-avatar ms-n3" href="#">
                            <img src="{{URL::asset('assets/images/users/dr-2.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                        </a>
                    </div>
                    <!--end img-group-->
                    <div class="align-self-center">
                        <a href="#" class="text-secondary d-flex">Read More<i class="las la-long-arrow-alt-right ms-1  font-16 align-self-center"></i></a>
                    </div>
                </div>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
</div>
<!--end row-->

@endsection
