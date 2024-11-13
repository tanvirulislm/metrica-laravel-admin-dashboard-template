@extends('layouts.master')
@section('title')Metrica @endsection
@section('css')
<link href="{{URL::asset('assets/plugins/ui-slider/nouislider.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<!-- this is breadcrumbs -->
@component('components.breadcrumb')
@slot('li_1') Metrica @endslot
@slot('li_2') Advanced UI @endslot
@slot('title') UI-slider @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">UI-slider</h4>
                <p class="text-muted mb-0">Cool, comfortable, responsive and easily customizable range slider</p>
            </div>
            <!--end card-header-->
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <div class="p-3">
                            <h6 class="mb-3 mt-0">Default Slider</h6>
                            <div id="slider"></div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-6 mb-3">
                        <div class="p-3">
                            <h6 class="mb-3 mt-0">Only showing tooltips when sliding handles</h6>
                            <div id="slider_2"></div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <div class="p-3">
                            <h6 class="mb-3 mt-0">Using HTML5 input elements</h6>
                            <div id="html5" class="mb-3"></div>
                            <div class="row">
                                <div class="col-3">
                                    <select class="form-select" id="input-select"></select>
                                </div>
                                <div class="col-3">
                                    <input type="number" class="form-control" min="-20" max="40" step="1" id="input-number">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-6 mb-3">
                        <div class="p-3">
                            <h6 class="mb-3 mt-0">Working with dates</h6>
                            <div id="slider-date" class="mb-2"></div>
                            <span class="example-val d-block fw-semibold" id="event-start"></span>
                            <span class="example-val d-block fw-semibold" id="event-end"></span>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <div class="p-3">
                            <h6 class="mb-3 mt-0">Skipping steps</h6>
                            <div id="skipstep" class="mb-2"></div>
                            <span class="example-val d-block fw-semibold" id="skip-value-lower"></span>
                            <span class="example-val d-block fw-semibold" id="skip-value-upper"></span>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-6 mb-3">
                        <div class="p-3">
                            <h6 class="mb-3 mt-0">Moving the slider by clicking pips</h6>
                            <div id="slider-pips"></div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->


                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <div class="p-3">
                            <h6 class="mb-3 mt-0">Vertical slider</h6>
                            <div id="range"></div>
                            <div style="text-align: center; font-size: 12px;">
                                <span id="range-value-4"></span> -
                                <span id="range-diff-3" style="color: #227afb"></span> -
                                <span id="range-value-3"></span> -
                                <span id="range-diff-2" style="color: #227afb"></span> -
                                <span id="range-value-2"></span> -
                                <span id="range-diff-1" style="color: #227afb"></span> -
                                <span id="range-value-1"></span>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-6 mb-3">
                        <div class="p-3">
                            <h6 class="mb-3 mt-0">Soft limits</h6>
                            <div id="soft"></div>
                        </div>
                    </div>
                    <!--end col-->

                </div>
                <!--end row-->
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div><!-- end col -->
</div><!-- end row -->

@endsection
@section('script')
<script src="{{URL::asset('assets/plugins/ui-slider/nouislider.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/ui-slider/wNumb.js')}}"></script>
<script src="{{URL::asset('assets/pages/ui-slider.js')}}"></script>
@endsection
