@extends('layouts.master')
@section('title')Metrica @endsection
@section('css')
<link href="{{URL::asset('assets/plugins/fullcalendar/main.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<!-- this is breadcrumbs -->
@component('components.breadcrumb')
@slot('li_1') Metrica @endslot
@slot('li_2') Helpdesk @endslot
@slot('title') Agents @endslot
@endcomponent

<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="media mb-3">
                    <img src="assets/images/users/user-4.jpg" class="me-3 thumb-md align-self-center rounded-circle" alt="...">
                    <div class="media-body align-self-center">
                        <h4 class="mt-0 mb-0 font-15">Donald Gardner <span class="badge badge-soft-warning font-12">
                                4.8 <i class="mdi mdi-star text-warning ms-1"></i></span>
                        </h4>
                        <p class="text-muted mb-0 font-12">ID : #78459, New Jersey </p>
                    </div>
                    <!--end media body-->
                </div>
                <!--end media-->

                <p class="text-muted  mb-0"><span class="text-dark fw-semibold">Last Message :</span> popular belief,
                    Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.
                </p>
                <hr class="hr-dashed">
                <div class="row align-items-center">
                    <div class="col">
                        <button type="button" class="btn btn-sm btn-de-secondary">Send SMS</button>
                        <button type="button" class="btn btn-sm btn-de-primary">Send Email</button>
                    </div>
                    <!--end col-->
                    <div class="col-auto">
                        <div class="align-self-center d-inline-block">
                            <span class="fw-semibold">Satisfied : </span>
                        </div>
                        <div class="align-self-center d-inline-block">
                            <i class="lar la-thumbs-up text-success font-20"></i>
                            <span class="font-14 fw-semibold">91%</span>
                        </div>
                        <!--end-->
                        <div class="align-self-center ms-2 d-inline-block">
                            <i class="lar la-thumbs-down text-danger font-20"></i>
                            <span class="font-14 fw-semibold">09%</span>
                        </div>
                        <!--end -->
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
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="media mb-3">
                    <img src="assets/images/users/user-5.jpg" class="me-3 thumb-md align-self-center rounded-circle" alt="...">
                    <div class="media-body align-self-center">
                        <h4 class="mt-0 mb-0 font-15">Nicholas Smith <span class="badge badge-soft-warning font-12">
                                4.8 <i class="mdi mdi-star text-warning ms-1"></i></span>
                        </h4>
                        <p class="text-muted mb-0 font-12">ID : #78459, New Jersey </p>
                    </div>
                    <!--end media body-->
                </div>
                <!--end media-->

                <p class="text-muted  mb-0"><span class="text-dark fw-semibold">Last Message :</span> popular belief,
                    Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.
                </p>
                <hr class="hr-dashed">
                <div class="row align-items-center">
                    <div class="col">
                        <button type="button" class="btn btn-sm btn-de-secondary">Send SMS</button>
                        <button type="button" class="btn btn-sm btn-de-primary">Send Email</button>
                    </div>
                    <!--end col-->
                    <div class="col-auto">
                        <div class="align-self-center d-inline-block">
                            <span class="fw-semibold">Satisfied : </span>
                        </div>
                        <div class="align-self-center d-inline-block">
                            <i class="lar la-thumbs-up text-success font-20"></i>
                            <span class="font-14 fw-semibold">91%</span>
                        </div>
                        <!--end-->
                        <div class="align-self-center ms-2 d-inline-block">
                            <i class="lar la-thumbs-down text-danger font-20"></i>
                            <span class="font-14 fw-semibold">09%</span>
                        </div>
                        <!--end -->
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
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="media mb-3">
                    <img src="assets/images/users/user-1.jpg" class="me-3 thumb-md align-self-center rounded-circle" alt="...">
                    <div class="media-body align-self-center">
                        <h4 class="mt-0 mb-0 font-15">Joseph Rust <span class="badge badge-soft-warning font-12">
                                4.8 <i class="mdi mdi-star text-warning ms-1"></i></span>
                        </h4>
                        <p class="text-muted mb-0 font-12">ID : #78459, New Jersey </p>
                    </div>
                    <!--end media body-->
                </div>
                <!--end media-->

                <p class="text-muted  mb-0"><span class="text-dark fw-semibold">Last Message :</span> popular belief,
                    Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.
                </p>
                <hr class="hr-dashed">
                <div class="row align-items-center">
                    <div class="col">
                        <button type="button" class="btn btn-sm btn-de-secondary">Send SMS</button>
                        <button type="button" class="btn btn-sm btn-de-primary">Send Email</button>
                    </div>
                    <!--end col-->
                    <div class="col-auto">
                        <div class="align-self-center d-inline-block">
                            <span class="fw-semibold">Satisfied : </span>
                        </div>
                        <div class="align-self-center d-inline-block">
                            <i class="lar la-thumbs-up text-success font-20"></i>
                            <span class="font-14 fw-semibold">91%</span>
                        </div>
                        <!--end-->
                        <div class="align-self-center ms-2 d-inline-block">
                            <i class="lar la-thumbs-down text-danger font-20"></i>
                            <span class="font-14 fw-semibold">09%</span>
                        </div>
                        <!--end -->
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
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Agent Performance</h4>
                    </div>
                    <!--end col-->
                    <div class="col-auto">
                        <a href="#" class="text-primary">View All</a>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body">
                <div class="table-responsive browser_users">
                    <table class="table mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th class="border-top-0">Agent</th>
                                <th class="border-top-0">Total Calls</th>
                                <th class="border-top-0">Calls Answered</th>
                                <th class="border-top-0">Avg.Speed of answer</th>
                                <th class="border-top-0">Adherence %</th>
                                <th class="border-top-0">Action</th>
                            </tr>
                            <!--end tr-->
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="media">
                                        <img src="assets/images/users/user-1.jpg" alt="" class="thumb-sm rounded-circle me-2">
                                        <div class="media-body align-self-center text-truncate">
                                            <h6 class="mt-0 mb-1 text-dark">Donald Gardner</h6>
                                            <p class="text-muted mb-0">Dummy text of the printing.</p>
                                        </div>
                                        <!--end media-body-->
                                    </div>
                                </td>
                                <td>38</td>
                                <td>32</td>
                                <td>3:12s</td>
                                <td>80%</td>
                                <td>
                                    <a href="#"><i class="las la-pen text-secondary font-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-18"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="d-flex align-items-center">
                                            <span class="thumb-sm justify-content-center d-flex align-items-center bg-soft-warning rounded-circle me-2">MT</span>
                                        </div>
                                        <div class="media-body align-self-center text-truncate">
                                            <h6 class="mt-0 mb-1 text-dark">Nicholas Smith</h6>
                                            <p class="text-muted mb-0">Dummy text of the printing.</p>
                                        </div>
                                        <!--end media-body-->
                                    </div>
                                </td>
                                <td>50</td>
                                <td>45</td>
                                <td>2:45s</td>
                                <td>84%</td>
                                <td>
                                    <a href="#"><i class="las la-pen text-secondary font-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-18"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td>
                                    <div class="media">
                                        <img src="assets/images/users/user-4.jpg" alt="" class="thumb-sm rounded-circle me-2">
                                        <div class="media-body align-self-center text-truncate">
                                            <h6 class="mt-0 mb-1 text-dark">Paula Anderson</h6>
                                            <p class="text-muted mb-0">Dummy text of the printing.</p>
                                        </div>
                                        <!--end media-body-->
                                    </div>
                                </td>
                                <td>32</td>
                                <td>24</td>
                                <td>4:15s</td>
                                <td>73%</td>
                                <td>
                                    <a href="#"><i class="las la-pen text-secondary font-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-18"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->

                            <tr>
                                <td>
                                    <div class="media">
                                        <img src="assets/images/users/user-3.jpg" alt="" class="thumb-sm rounded-circle me-2">
                                        <div class="media-body align-self-center text-truncate">
                                            <h6 class="mt-0 mb-1 text-dark">Lucy Peterson</h6>
                                            <p class="text-muted mb-0">Dummy text of the printing.</p>
                                        </div>
                                        <!--end media-body-->
                                    </div>
                                </td>
                                <td>25</td>
                                <td>21</td>
                                <td>5:42s</td>
                                <td>93%</td>
                                <td>
                                    <a href="#"><i class="las la-pen text-secondary font-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-18"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="d-flex align-items-center">
                                            <span class="thumb-sm justify-content-center d-flex align-items-center bg-soft-primary rounded-circle me-2">MT</span>
                                        </div>
                                        <div class="media-body align-self-center text-truncate">
                                            <h6 class="mt-0 mb-1 text-dark">Joseph Rust</h6>
                                            <p class="text-muted mb-0">Dummy text of the printing.</p>
                                        </div>
                                        <!--end media-body-->
                                    </div>
                                </td>
                                <td>50</td>
                                <td>45</td>
                                <td>2:45s</td>
                                <td>84%</td>
                                <td>
                                    <a href="#"><i class="las la-pen text-secondary font-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-18"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                        </tbody>
                    </table>
                    <!--end table-->
                </div>
                <!--end /div-->
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
</div>
<!--end row-->

@endsection
