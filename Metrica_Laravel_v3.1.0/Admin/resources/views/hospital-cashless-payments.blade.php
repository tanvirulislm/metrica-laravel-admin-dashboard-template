@extends('layouts.master')
@section('title')Metrica @endsection
@section('content')
<!-- this is breadcrumbs -->
@component('components.breadcrumb')
@slot('li_1') Metrica @endslot
@slot('li_2') Hospital @endslot
@slot('title') Cashless Payments @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th>Bill No</th>
                                <th>Patient Name</th>
                                <th>Doctor Name</th>
                                <th>Insurance Company</th>
                                <th>Payment</th>
                                <th>Bill Date</th>
                                <th>Charge</th>
                                <th>Tax</th>
                                <th>Discount</th>
                                <th class="text-end">Total</th>
                            </tr>
                            <!--end tr-->
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <a href="hospital-payment-invoice">Keith Jacobson</a>
                                </td>
                                <td>Dr.Justin Williams</td>
                                <td>Tata MediCare Insurance</td>
                                <td>Cashless</td>
                                <td>23/07/2019</td>
                                <td>$1500</td>
                                <td>10%</td>
                                <td>10%</td>
                                <td class="text-end text-dark fw-semibold">$1500</td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td>2</td>
                                <td>
                                    <a href="hospital-payment-invoice">Fred Godina</a>
                                </td>
                                <td>Dr.Thomas Fant</td>
                                <td> Star Health insurance </td>
                                <td>Cashless</td>
                                <td>23/07/2019</td>
                                <td>$1500</td>
                                <td>10%</td>
                                <td>10%</td>
                                <td class="text-end text-dark fw-semibold">$3500</td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td>3</td>
                                <td>
                                    <a href="hospital-payment-invoice">Greg Crosby</a>
                                </td>
                                <td>Dr.Aretha Garland</td>
                                <td>Apollo Health Insurance</td>
                                <td>Cashless</td>
                                <td>24/07/2019</td>
                                <td>$1500</td>
                                <td>10%</td>
                                <td>10%</td>
                                <td class="text-end text-dark fw-semibold">$5000</td>
                            </tr>
                            <!--end tr-->

                            <tr>
                                <td>4</td>
                                <td>
                                    <a href="hospital-payment-invoice">Jennifer Doss</a>
                                </td>
                                <td>Dr.Justin Williams</td>
                                <td>LIC Health Insurance</td>
                                <td>Cashless</td>
                                <td>23/07/2019</td>
                                <td>$1500</td>
                                <td>10%</td>
                                <td>10%</td>
                                <td class="text-end text-dark fw-semibold">$1500</td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td>5</td>
                                <td>
                                    <a href="hospital-payment-invoice">Peggy Doe</a>
                                </td>
                                <td>Dr.Thomas Fant</td>
                                <td> National Insurance</td>
                                <td>Cashless</td>
                                <td>23/07/2019</td>
                                <td>$1500</td>
                                <td>10%</td>
                                <td>10%</td>
                                <td class="text-end text-dark fw-semibold">$3500</td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td>6</td>
                                <td>
                                    <a href="hospital-payment-invoice">Donald Gardner</a>
                                </td>
                                <td>Dr.Aretha Garland</td>
                                <td>Star Health insurance </td>
                                <td>Cashless</td>
                                <td>24/07/2019</td>
                                <td>$1500</td>
                                <td>10%</td>
                                <td>10%</td>
                                <td class="text-end text-dark fw-semibold">$5000</td>
                            </tr>
                            <!--end tr-->

                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col">
                        <button class="btn btn-de-secondary btn-sm px-4 ">+ Add New Payment</button>
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