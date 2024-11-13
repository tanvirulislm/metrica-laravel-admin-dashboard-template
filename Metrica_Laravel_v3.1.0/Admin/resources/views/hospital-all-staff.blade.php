@extends('layouts.master')
@section('title')Metrica @endsection
@section('content')
<!-- this is breadcrumbs -->
@component('components.breadcrumb')
@slot('li_1') Metrica @endslot
@slot('li_2') Hospital @endslot
@slot('title') All Staff @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th>Member Name</th>
                                <th>Age</th>
                                <th>ID</th>
                                <th>Address</th>
                                <th>Mobile No</th>
                                <th>Join Date</th>
                                <th>Post</th>
                                <th class="text-right">Action</th>
                            </tr>
                            <!--end tr-->
                        </thead>

                        <tbody>
                            <tr>
                                <td><a href="hospital-member-profile"><img src="{{URL::asset('assets/images/users/user-10.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Donald Gardner</a></td>
                                <td>36</td>
                                <td>N-1236</td>
                                <td>B28 University Street US</td>
                                <td>+123456789</td>
                                <td>18/07/2018</td>
                                <td>Nurse</td>
                                <td class="text-right">
                                    <a href="hospital-edit-member" class="mr-2"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td><a href="hospital-member-profile"><img src="{{URL::asset('assets/images/users/user-9.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Keith Jacobson</a></td>
                                <td>48</td>
                                <td>H-1236</td>
                                <td>B28 University Street US</td>
                                <td>+123456789</td>
                                <td>18/07/2017</td>
                                <td>Housekeeping</td>
                                <td class="text-right">
                                    <a href="hospital-edit-member" class="mr-2"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td><a href="hospital-member-profile"><img src="{{URL::asset('assets/images/users/user-9.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Greg Crosby</a></td>
                                <td>27</td>
                                <td>D-1236</td>
                                <td>B28 University Street US</td>
                                <td>+123456789</td>
                                <td>18/07/2017</td>
                                <td>Doctor</td>
                                <td class="text-right">
                                    <a href="hospital-edit-member" class="mr-2"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td><a href="hospital-member-profile"><img src="{{URL::asset('assets/images/users/user-8.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Fred Godina</a></td>
                                <td>22</td>
                                <td>S-1236</td>
                                <td>B28 University Street US</td>
                                <td>+123456789</td>
                                <td>18/07/2016</td>
                                <td>Security</td>
                                <td class="text-right">
                                    <a href="hospital-edit-member" class="mr-2"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td><a href="hospital-member-profile"><img src="{{URL::asset('assets/images/users/user-7.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Peggy Doe</a></td>
                                <td>51</td>
                                <td>N-7851</td>
                                <td>B28 University Street US</td>
                                <td>+123456789</td>
                                <td>20/07/2016</td>
                                <td>Nurse</td>
                                <td class="text-right">
                                    <a href="hospital-edit-member" class="mr-2"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td><a href="hospital-member-profile"><img src="{{URL::asset('assets/images/users/user-8.jpg')}}" alt="" class="thumb-sm rounded-circle mr-2">Jennifer Doss</a></td>
                                <td>18</td>
                                <td>N-3654</td>
                                <td>B28 University Street US</td>
                                <td>+123456789</td>
                                <td>19/07/2016</td>
                                <td>Nurse</td>
                                <td class="text-right">
                                    <a href="hospital-edit-member" class="mr-2"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col">
                        <button class="btn btn-de-secondary btn-sm px-4 ">+ Add New Member</button>
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
