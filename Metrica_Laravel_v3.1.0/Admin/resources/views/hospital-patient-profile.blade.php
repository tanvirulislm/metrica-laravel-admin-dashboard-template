@extends('layouts.master')
@section('title')Metrica @endsection
@section('content')
<!-- this is breadcrumbs -->
@component('components.breadcrumb')
@slot('li_1') Metrica @endslot
@slot('li_2') Hospital @endslot
@slot('title') Patient Profile @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="media">
                            <img src="{{URL::asset('assets/images/users/user-4.jpg')}}" alt="user" class="rounded-circle thumb-xl me-3 align-self-center">
                            <div class="media-body align-self-center">
                                <h4 class="mt-0">Rosa Dodson</h4>
                                <p class="mb-0 text-muted">Contrary to popular belief, Lorem Ipsum is not simply random text
                                
                                    It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                                    Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-4 ms-auto">
                        <dl class="row mb-0">
                            <dt class="col-sm-3">Name</dt>
                            <dd class="col-sm-9">Rosa Dodson</dt>
                            <dt class="col-sm-3">Admit Date</dt>
                            <dd class="col-sm-9">09/07/2019</dt>
                            <dt class="col-sm-3">Phone No</dt>
                            <dd class="col-sm-9">+1 234 567 890</dt>
                            <dt class="col-sm-3">Address</dt>
                            <dd class="col-sm-9">225 Rose Street, Dublin, California</dt>
                            <dt class="col-sm-3">Doctor Name</dt>
                            <dd class="col-sm-9 mb-0">Dr.Wendy Keen (MS Orthopaedic)</dt>
                        </dl>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-body-->

        </div>
        <!--end card-->
    </div>
    <!--end col-->
</div>
<!--end row-->
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Latest Activity</h4>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body">
                <div style="height: 385px;" data-simplebar>
                    <div class="activity">
                        <div class="activity-info">
                            <div class="icon-info-activity">
                                <i class="las la-user-clock bg-soft-primary"></i>
                            </div>
                            <div class="activity-info-text">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="text-muted mb-0 font-13 w-75"><span>Donald</span>
                                        updated the status of <a href="">Refund #1234</a> to awaiting customer response
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
                                        was added to the group, group name is <a href="">Overtake</a>
                                    </p>
                                    <small class="text-muted">50 Min ago</small>
                                </div>
                            </div>
                        </div>

                        <div class="activity-info">
                            <div class="icon-info-activity">
                                <img src="{{URL::asset('assets/images/users/user-5.jpg')}}" alt="" class="rounded-circle thumb-sm">
                            </div>
                            <div class="activity-info-text">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="text-muted mb-0 font-13 w-75"><span>Joseph Rust</span>
                                        opened new showcase <a href="">Mannat #112233</a> with theme market
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
                                        updated the status of <a href="">Refund #1234</a> to awaiting customer response
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
                                        was added to the group, group name is <a href="">Overtake</a>
                                    </p>
                                    <small class="text-muted">14 Nov 2019</small>
                                </div>
                            </div>
                        </div>
                        <div class="activity-info">
                            <div class="icon-info-activity">
                                <img src="{{URL::asset('assets/images/users/user-4.jpg')}}" alt="" class="rounded-circle thumb-sm">
                            </div>
                            <div class="activity-info-text">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="text-muted mb-0 font-13 w-75"><span>Joseph Rust</span>
                                        opened new showcase <a href="">Mannat #112233</a> with theme market
                                    </p>
                                    <small class="text-muted">15 Nov 2019</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end activity-->
                </div>
                <!--end analytics-dash-activity-->
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Patient Medical Report</h4>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body">
                <div class="row">
                    <div class="col-2">
                        <img src="{{URL::asset('assets/images/small/flame.png')}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-8 align-self-center">
                        <p class="skill-detail">Contrary to popular belief, Lorem Ipsum is not simply random text.
                            It has roots in a piece of classical Latin literature from 45 BC,
                            making it over 2000 years old. Richard McClintock, a Latin professor
                            at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words.
                        </p>
                    </div>
                </div>
                <div class="skills mt-4">
                    <div class="skill-box">
                        <h4 class="skill-title">Blood Pressure</h4>
                        <div class="progress-line">
                            <span data-percent="50" style="width: 50%;">
                                <span class="percent-tooltip">110 Normal</span>
                            </span>
                        </div>
                    </div>
                    <div class="skill-box">
                        <h4 class="skill-title">Diabetes</h4>
                        <div class="progress-line">
                            <span data-percent="64" style="width: 64%;">
                                <span class="percent-tooltip">64 Normal</span>
                            </span>
                        </div>
                    </div>
                    <div class="skill-box">
                        <h4 class="skill-title">Hemoglobin</h4>
                        <div class="progress-line">
                            <span data-percent="51" style="width: 51%;">
                                <span class="percent-tooltip text-danger">11% Low
                                </span>
                        </div>
                    </div>
                    <div class="skill-box">
                        <h4 class="skill-title">Vitamin B-12</h4>
                        <div class="progress-line">
                            <span data-percent="95" style="width: 95%;">
                                <span class="percent-tooltip">95% Normal</span>
                            </span>
                        </div>
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
