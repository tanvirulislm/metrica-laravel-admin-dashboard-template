@extends('layouts.master')
@section('title')Metrica @endsection
@section('content')
<!-- this is breadcrumbs -->
@component('components.breadcrumb')
@slot('li_1') Metrica @endslot
@slot('li_2') Advanced UI @endslot
@slot('title') Clip Board @endslot
@endcomponent

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Clipboard Examples</h4>
                <p class="text-muted mb-0">Inpu example of clipboard</p>
            </div>
            <!--end card-header-->
            <div class="card-body">
                <div class="input-group">
                    <input type="text" class="form-control" id="clipboardInput" value="Welcome to Metrica!" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-de-secondary " type="button" id="button-addon2" data-clipboard-action="copy" data-clipboard-target="#clipboardInput"><i class="far fa-copy me-2"></i>Copy</button>
                    <button class="btn btn-de-primary " type="button" id="button-addon3" data-clipboard-action="cut" data-clipboard-target="#clipboardInput"><i class="fas fa-cut me-2"></i>Cut</button>
                </div>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Clipboard Examples of Paragraph</h4>
                <p class="text-muted mb-0">Paragraph example of clipboard</p>
            </div>
            <!--end card-header-->
            <div class="card-body">
                <p id="clipboardParagraph" class="border p-3">Contrary to popular belief, Lorem Ipsum is not simply random text.
                    It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,
                    a Latin professor at Hampden-Sydney College in Virginia, looked
                </p>
                <div class="mt-3">
                    <button type="button" class="btn btn-de-secondary btn-sm btn-clipboard" data-clipboard-action="copy" data-clipboard-target="#clipboardParagraph"><i class="far fa-copy me-2"></i>Copy</button>
                </div>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div> <!-- end col -->

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Clipboard Examples of Textarea</h4>
                <p class="text-muted mb-0">Textarea example of clipboard</p>
            </div>
            <!--end card-header-->
            <div class="card-body">
                <textarea class="form-control" rows="3" id="clipboardTextarea">Welcome to Metrica !</textarea>
                <div class="mt-3">
                    <button type="button" class="btn btn-de-secondary btn-sm btn-clipboard" data-clipboard-action="copy" data-clipboard-target="#clipboardTextarea"><i class="far fa-copy me-2"></i>Copy</button>
                    <button type="button" class="btn btn-de-primary btn-sm btn-clipboard" data-clipboard-action="cut" data-clipboard-target="#clipboardTextarea"><i class="fas fa-cut me-2"></i>Cut</button>
                </div>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection
@section('script')
<script src="{{URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
<script src="{{URL::asset('assets/pages/clipboard.init.js')}}"></script>
@endsection
