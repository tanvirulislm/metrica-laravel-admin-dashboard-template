@extends('layouts.master')
@section('title')Metrica @endsection
@section('content')
<!-- this is breadcrumbs -->
@component('components.breadcrumb')
@slot('li_1') Metrica @endslot
@slot('li_2') Hospital @endslot
@slot('title') All Doctors @endslot
@endcomponent

<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body text-center">
                <div class="text-end">
                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                </div>
                <img src="{{URL::asset('assets/images/users/dr-2.jpg')}}" alt="user" height="100" class="rounded-circle mt-n3">
                <h5 class="mb-1">Dr.Wendy Keen</h5>
                <p class="text-muted mb-1">MD Orthopedic</p>
                <p class="text-center font-14">4 years experience in Apollo Hospital</p>
                <button type="button" class="btn btn-sm btn-de-primary" onclick="location.href='hospital-doctor-profile'">View Profile</button>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body text-center">
                <div class="text-end">
                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                </div>
                <img src="{{URL::asset('assets/images/users/dr-4.jpg')}}" alt="user" height="100" class="rounded-circle mt-n3">
                <h5 class="mb-1">Dr.Helen White</h5>
                <p class="text-muted mb-1">MS Cardiology</p>
                <p class="text-center font-14">3 years experience in Apollo Hospital</p>
                <button type="button" class="btn btn-sm btn-de-primary" onclick="location.href='hospital-doctor-profile'">View Profile</button>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body text-center">
                <div class="text-end">
                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                </div>
                <img src="{{URL::asset('assets/images/users/dr-5.jpg')}}" alt="user" height="100" class="rounded-circle mt-n3">
                <h5 class="mb-1">Dr.Thomas Fant</h5>
                <p class="text-muted mb-1">MD Neurology</p>
                <p class="text-center font-14">10 years experience in Apollo Hospital</p>
                <button type="button" class="btn btn-sm btn-de-primary" onclick="location.href='hospital-doctor-profile'">View Profile</button>
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
            <div class="card-body text-center">
                <div class="text-end">
                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                </div>
                <img src="{{URL::asset('assets/images/users/dr-6.jpg')}}" alt="user" height="100" class="rounded-circle mt-n3">
                <h5 class="mb-1">Dr.Justin Williams</h5>
                <p class="text-muted mb-1">MS Psychology</p>
                <p class="text-center font-14">4 years experience in Apollo Hospital</p>
                <button type="button" class="btn btn-sm btn-de-primary" onclick="location.href='hospital-doctor-profile'">View Profile</button>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body text-center">
                <div class="text-end">
                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                </div>
                <img src="{{URL::asset('assets/images/users/dr-6.jpg')}}" alt="user" height="100" class="rounded-circle mt-n3">
                <h5 class="mb-1">Dr.Wendy Keen</h5>
                <p class="text-muted mb-1">MD Orthopedic</p>
                <p class="text-center font-14">4 years experience in Apollo Hospital</p>
                <button type="button" class="btn btn-sm btn-de-primary" onclick="location.href='hospital-doctor-profile'">View Profile</button>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body text-center">
                <div class="text-end">
                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                </div>
                <img src="{{URL::asset('assets/images/users/dr-1.jpg')}}" alt="user" height="100" class="rounded-circle mt-n3">
                <h5 class="mb-1">Dr.Helen White</h5>
                <p class="text-muted mb-1">MS Cardiology</p>
                <p class="text-center font-14">3 years experience in Apollo Hospital</p>
                <button type="button" class="btn btn-sm btn-de-primary" onclick="location.href='hospital-doctor-profile'">View Profile</button>
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
            <div class="card-body text-center">
                <div class="text-end">
                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                </div>
                <img src="{{URL::asset('assets/images/users/dr-2.jpg')}}" alt="user" height="100" class="rounded-circle mt-n3">
                <h5 class="mb-1">Dr.Thomas Fant</h5>
                <p class="text-muted mb-1">MD Neurology</p>
                <p class="text-center font-14">10 years experience in Apollo Hospital</p>
                <button type="button" class="btn btn-sm btn-de-primary" onclick="location.href='hospital-doctor-profile'">View Profile</button>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body text-center">
                <div class="text-end">
                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                </div>
                <img src="{{URL::asset('assets/images/users/dr-5.jpg')}}" alt="user" height="100" class="rounded-circle mt-n3">
                <h5 class="mb-1">Dr.Justin Williams</h5>
                <p class="text-muted mb-1">MS Psychology</p>
                <p class="text-center font-14">4 years experience in Apollo Hospital</p>
                <button type="button" class="btn btn-sm btn-de-primary" onclick="location.href='hospital-doctor-profile'">View Profile</button>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body text-center">
                <div class="text-end">
                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                </div>
                <img src="{{URL::asset('assets/images/users/dr-2.jpg')}}" alt="user" height="100" class="rounded-circle mt-n3">
                <h5 class="mb-1">Dr.Wendy Keen</h5>
                <p class="text-muted mb-1">MD Orthopedic</p>
                <p class="text-center font-14">4 years experience in Apollo Hospital</p>
                <button type="button" class="btn btn-sm btn-de-primary" onclick="location.href='hospital-doctor-profile'">View Profile</button>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
</div>
<!--end row-->

@endsection
