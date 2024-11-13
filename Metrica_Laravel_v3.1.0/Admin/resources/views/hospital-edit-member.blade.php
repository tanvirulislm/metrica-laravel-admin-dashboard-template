@extends('layouts.master')
@section('title')Metrica @endsection
@section('content')
<!-- this is breadcrumbs -->
@component('components.breadcrumb')
@slot('li_1') Metrica @endslot
@slot('li_2') Hospital @endslot
@slot('title') Edit Member @endslot
@endcomponent

<div class="row">
    <div class="col-12 col-lg-8 mx-auto">
        <div class="card">
            <div class="card-body">


                <form>
                    <div class="form-group mb-3">
                        <img src="{{URL::asset('assets/images/users/user-4.jpg')}}" alt="" class="thumb-lg rounded me-2">
                        <label class="btn btn-de-primary btn-sm text-light">
                            Add Avatar <input type="file" hidden>
                        </label>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 mb-3">
                            <input type="text" placeholder="First Name" value="Donald" class="form-control" name="First_Name" id="First_Name">
                        </div>
                        <div class="col-md-6 mb-3">
                            <input type="text" placeholder="Last Name" value="Gardner" class="form-control" name="Last_Name" id="Last_Name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-3 mb-3">
                            <input type="text" placeholder="Join Date" value="02/07/2021" class="form-control" name="Join_Date" id="Join_Date">
                        </div>
                        <div class="col-md-3 mb-3">
                            <input type="text" placeholder="Post" value="Nurse" class="form-control" name="Post" id="Post">
                        </div>
                        <div class="col-md-3 mb-3">
                            <select class="form-select">
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <input type="text" placeholder="Age" value="36" class="form-control" name="Age" id="Age">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 mb-3">
                            <input type="email" placeholder="Email" class="form-control" value="example@example.com" name="Email" id="Email">
                        </div>
                        <div class="col-md-2 mb-3">
                            <input type="text" placeholder="Phone No" class="form-control" value="+1 234 567 890" name="Phone_No" id="Phone_No">
                        </div>
                        <div class="col-md-2 mb-3">
                            <input type="text" placeholder="ID0000" class="form-control" value="#1253" name="ID" id="ID">
                        </div>
                        <div class="col-md-2 mb-3">
                            <input type="text" placeholder="Salary" class="form-control" value="$100" name="Salary" id="Salary">
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea rows="5" placeholder="About Me..." class="form-control">B28 University Street US</textarea>
                        <button class="btn btn-de-primary btn-sm text-light px-4 mt-3 mb-0">Save</button>
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
