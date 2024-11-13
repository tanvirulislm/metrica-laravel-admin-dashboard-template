@extends('layouts.master')
@section('title')Metrica @endsection
@section('content')
<!-- this is breadcrumbs -->
@component('components.breadcrumb')
@slot('li_1') Metrica @endslot
@slot('li_2') Hospital @endslot
@slot('title') Insurance Co. @endslot
@endcomponent

<div class="row">
    <div class="col-lg-4">
        <div class="card profile-card">
            <div class="card-body p-0">
                <div class="media p-3  align-items-center">
                    <img src="{{URL::asset('assets/images/small/project-3.jpg')}}" alt="user" class="rounded-circle thumb-lg">
                    <div class="media-body ms-3 align-self-center">
                        <h5 class="pro-title mt-0 font-15">Meri Gold Insurance</h5>
                        <p class="mb-2 text-muted">MeriGoldInsurance@example.com</p>
                        <button type="button" class="btn btn-xs btn-soft-primary ">Message</button>
                    </div>
                    <div class="action-btn">
                        <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                        <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                    </div>
                </div>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->

    <div class="col-lg-4">
        <div class="card profile-card">
            <div class="card-body p-0">
                <div class="media p-3  align-items-center">
                    <img src="{{URL::asset('assets/images/small/project-2.jpg')}}" alt="user" class="rounded-circle thumb-lg">
                    <div class="media-body ms-3 align-self-center">
                        <h5 class="pro-title mt-0 font-15">National Insurance</h5>
                        <p class="mb-2 text-muted">NationalInsurance@example.com</p>
                        <button type="button" class="btn btn-xs btn-soft-primary ">Message</button>
                    </div>
                    <div class="action-btn">
                        <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                        <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                    </div>
                </div>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-lg-4">
        <div class="card profile-card">
            <div class="card-body p-0">
                <div class="media p-3  align-items-center">
                    <img src="{{URL::asset('assets/images/small/project-1.jpg')}}" alt="user" class="rounded-circle thumb-lg">
                    <div class="media-body ms-3 align-self-center">
                        <h5 class="pro-title mt-0 font-15">7Star Insurance</h5>
                        <p class="mb-2 text-muted">7StarInsurance@example.com</p>
                        <button type="button" class="btn btn-xs btn-soft-primary ">Message</button>
                    </div>
                    <div class="action-btn">
                        <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                        <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
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
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th>Insurance Company</th>
                                <th>Contact No</th>
                                <th>Total Payments</th>
                                <th>Total Amounts</th>
                                <th>Status</th>
                                <th class="text-end">Action</th>
                            </tr>
                            <!--end tr-->
                        </thead>

                        <tbody>
                            <tr>
                                <td>Meri Gold Insurance</td>
                                <td>+1 223 344 556</td>
                                <td>1320</td>
                                <td>$1,25,590</td>
                                <td><span class="badge badge-soft-success">Approved</span></td>
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td>National Insurance</td>
                                <td>+1 778 899 001</td>
                                <td>1008</td>
                                <td>$1,12,330</td>
                                <td><span class="badge badge-soft-success">Approved</span></td>
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td>7Star Insurance</td>
                                <td>+1 234 567 890</td>
                                <td>982</td>
                                <td>$95,780</td>
                                <td><span class="badge badge-soft-success">Approved</span></td>
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td>Lightway Insurance</td>
                                <td>+1 098 76 5432</td>
                                <td>482</td>
                                <td>$65,780</td>
                                <td><span class="badge badge-soft-success">Approved</span></td>
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col">
                        <button class="btn btn-de-secondary btn-sm px-4 ">+ Add New Company</button>
                    </div>
                    <!--end col-->
                    <div class="col-auto">
                        <nav aria-label="...">
                            <ul class="pagination pagination-sm mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                            <!--end pagination-->
                        </nav>
                        <!--end nav-->
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

@endsection