@extends('layouts.master')
@section('title')Metrica @endsection
@section('content')
<!-- this is breadcrumbs -->
@component('components.breadcrumb')
@slot('li_1') Metrica @endslot
@slot('li_2') Hospital @endslot
@slot('title') Edit @endslot
@endcomponent

<div class="row">
    <div class="col-12 col-md-8 mx-auto">
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="form-group mb-3">
                        <img src="{{URL::asset('assets/images/users/dr-1.jpg')}}" alt="" class="thumb-lg rounded me-2">
                        <label class="btn btn-de-primary btn-sm text-light">
                            Add Avatar <input type="file" hidden>
                        </label>
                    </div>
                    <div class="form-group mb-3 row">
                        <div class="col-md-6">
                            <input type="text" placeholder="First Name" value="Rosa" class="form-control" name="First_Name" id="First_Name">
                        </div>
                        <div class="col-md-6">
                            <input type="text" placeholder="Last Name" value="Dodson" class="form-control" name="Last_Name" id="Last_Name">
                        </div>
                    </div>

                    <div class="form-group mb-3 row">
                        <div class="col-md-4">
                            <input type="text" placeholder="Date of Birth" value="11/06/1988" class="form-control" name="DOB" id="DOB">
                        </div>
                        <div class="col-md-4">
                            <input type="text" placeholder="Speciality" value="Orthopaedic" class="form-control" name="Speciality" id="Speciality">
                        </div>
                        <div class="col-md-4">
                            <input type="text" placeholder="Phone No" value="+1 234 567 890" class="form-control" name="Phone_No" id="Phone_No">
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <div class="col-md-6">
                            <input type="email" placeholder="Email" value="dr.example@example.com" class="form-control" name="Email" id="Email">
                        </div>
                        <div class="col-md-6">
                            <input type="text" placeholder="Web URL" value="www.xyz.com" class="form-control" name="Web_URL" id="Web_URL">
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <div class="col-md-6">
                            <input type="text" value="M.B.B.S" placeholder="Digree" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <select class="form-select">
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea rows="5" placeholder="About Me..." class="form-control">There are many variations of passages of Lorem Ipsum available,but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look.</textarea>
                        <button class="btn btn-de-primary btn-sm text-light px-4 mt-3 mb-0">Update</button>
                        <button class="btn btn-de-danger btn-sm text-light px-4 mt-3 mb-0">Cancel</button>
                    </div>
                </form>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
</div>
<!--end row-->

@endsection