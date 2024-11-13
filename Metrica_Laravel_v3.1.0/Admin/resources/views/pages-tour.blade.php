@extends('layouts.master')
@section('title')Metrica @endsection
@section('css')
<link href="{{URL::asset('assets/plugins/hopscotch/hopscotch.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<!-- this is breadcrumbs -->
@component('components.breadcrumb')
@slot('li_1') Metrica @endslot
@slot('li_2') Pages @endslot
@slot('title') Tour @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        <div class="card" id="tourFaq">
            <div class="card-header">
                <h4 class="card-title">Most Commonly Asked Questions</h4>
                <p class="text-muted mb-0">Anim pariatur cliche reprehenderit,
                    enim eiusmod high life accusamus terry richardson ad squid.
                </p>
            </div>
            <!--end card-header-->
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled faq-qa">
                            <li class="mb-5">
                                <h6 class="">1. What is Metrica?</h6>
                                <p class="font-14 text-muted ms-3">Anim pariatur cliche reprehenderit,
                                    enim eiusmod high life accusamus terry richardson ad squid.
                                </p>
                            </li>
                            <li class="mb-5">
                                <h6 class="">3. What cryptocurrency can i use to buy Metrica?</h6>
                                <p class="font-14 text-muted  ms-3">Anim pariatur cliche reprehenderit,
                                    enim eiusmod high life accusamus terry richardson ad squid.
                                </p>
                            </li>
                            <li class="mb-5">
                                <h6 class="">5. Can i trade Metrica?</h6>
                                <p class="font-14 text-muted ms-3">Anim pariatur cliche reprehenderit,
                                    enim eiusmod high life accusamus terry richardson ad squid.
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="list-unstyled faq-qa">
                            <li class="mb-5">
                                <h6 class="">2. How buy Metrica on coin?</h6>
                                <p class="font-14 text-muted ms-3">Anim pariatur cliche reprehenderit,
                                    enim eiusmod high life accusamus terry richardson ad squid.
                                </p>
                            </li>
                            <li class="mb-5">
                                <h6 class="">4. Where can i download the wallet?</h6>
                                <p class="font-14 text-muted ms-3">Anim pariatur cliche reprehenderit,
                                    enim eiusmod high life accusamus terry richardson ad squid.
                                </p>
                            </li>
                            <li class="mb-5">
                                <h6 class="">6. What is Metrica?</h6>
                                <p class="font-14 text-muted ms-3">Anim pariatur cliche reprehenderit,
                                    enim eiusmod high life accusamus terry richardson ad squid.
                                </p>
                            </li>
                        </ul>
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
    <div class="col-lg-4">
        <div class="card text-white bg-primary">
            <div class="card-body">
                <blockquote class="card-bodyquote mb-0">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur. Integer posuere
                        erat a ante.</p>
                    <footer class="blockquote-footer text-white font-14">
                        Someone famous in <cite title="Source Title">Source Title</cite>
                    </footer>
                </blockquote>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->

    <div class="col-lg-4">
        <div class="card text-white bg-warning">
            <div class="card-body">
                <blockquote class="card-bodyquote mb-0">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur. Integer posuere
                        erat a ante.</p>
                    <footer class="blockquote-footer text-white font-14">
                        Someone famous in <cite title="Source Title">Source Title</cite>
                    </footer>
                </blockquote>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->

    <div class="col-lg-4">
        <div class="card bg-success text-white" id="bg_colorCard">
            <div class="card-body">
                <blockquote class="card-bodyquote mb-0">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur. Integer posuere
                        erat a ante.</p>
                    <footer class="blockquote-footer text-white font-14">
                        Someone famous in <cite title="Source Title">Source Title</cite>
                    </footer>
                </blockquote>
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

                <h4 class="mt-0 header-title">Bordered table</h4>
                <p class="text-muted mb-4">Add <code>.table-bordered</code> for
                    borders on all sides of the table and cells.
                </p>

                <div class="table-responsive">
                    <table class="table table-bordered mb-0 table-centered">
                        <thead>
                            <tr>
                                <th>Transaction ID</th>
                                <th>Date</th>
                                <th>Price</th>
                                <th>Order Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#124781</td>
                                <td>25/11/2018</td>
                                <td>$321</td>
                                <td><span class="badge badge-success">Approved</span></td>
                                <td>
                                    <div class="dropdown d-inline-block float-right">
                                        <a class="nav-link dropdown-toggle arrow-none" id="dLabel8" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel8">
                                            <a class="dropdown-item" href="#">Creat Project</a>
                                            <a class="dropdown-item" href="#">Open Project</a>
                                            <a class="dropdown-item" href="#">Tasks Details</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#542136</td>
                                <td>19/11/2018</td>
                                <td>$227</td>
                                <td><span class="badge badge-success">Approved</span></td>
                                <td>
                                    <div class="dropdown d-inline-block float-right">
                                        <a class="nav-link dropdown-toggle arrow-none" id="dLabel9" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel9">
                                            <a class="dropdown-item" href="#">Creat Project</a>
                                            <a class="dropdown-item" href="#">Open Project</a>
                                            <a class="dropdown-item" href="#">Tasks Details</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#234578</td>
                                <td>11/10/2018</td>
                                <td>$442</td>
                                <td><span class="badge badge-danger">Rejected</span></td>
                                <td>
                                    <div class="dropdown d-inline-block float-right">
                                        <a class="nav-link dropdown-toggle arrow-none" id="dLabel10" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel10">
                                            <a class="dropdown-item" href="#">Creat Project</a>
                                            <a class="dropdown-item" href="#">Open Project</a>
                                            <a class="dropdown-item" href="#">Tasks Details</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#951357</td>
                                <td>03/12/2018</td>
                                <td>$625</td>
                                <td><span class="badge badge-success">Approved</span></td>
                                <td>
                                    <div class="dropdown d-inline-block float-right">
                                        <a class="nav-link dropdown-toggle arrow-none" id="dLabel11" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel11">
                                            <a class="dropdown-item" href="#">Creat Project</a>
                                            <a class="dropdown-item" href="#">Open Project</a>
                                            <a class="dropdown-item" href="#">Tasks Details</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!--end /table-->
                </div>
                <!--end /tableresponsive-->
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
</div>
<!--end row-->

@endsection
@section('script')
<script src="{{URL::asset('assets/plugins/hopscotch/hopscotch.js')}}"></script>
<script src="{{URL::asset('assets/pages/tour.init.js')}}"></script>
@endsection
