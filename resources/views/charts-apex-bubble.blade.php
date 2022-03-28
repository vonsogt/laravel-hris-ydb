@extends('layouts.master')
@section('title') @lang('translation.Apex_Bubble_Chart') @endsection
@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Apexcharts @endslot
        @slot('title') Apex Bubble Charts @endslot
    @endcomponent
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Basic Bubble Chart</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="simple_bubble" data-colors='["--vz-primary", "--vz-info", "--vz-warning", "--vz-success"]'
                        class="apex-charts" dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">3D Bubble Chart</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="bubble_chart" data-colors='["--vz-primary", "--vz-success", "--vz-warning", "--vz-danger"]'
                        class="apex-charts" dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

@endsection
@section('script')
    <script src="{{ URL::asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/apexcharts-bubble.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
