@extends('layouts.master')
@section('title') @lang('translation.Apex_Timeline_Chart') @endsection
@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Apexcharts @endslot
        @slot('title') Apex Timeline Charts @endslot
    @endcomponent
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Basic TimeLine Charts</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="basic_timeline" data-colors='["--vz-primary"]' class="apex-charts" dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Different Color For Each Bar</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="color_timeline"
                        data-colors='["--vz-primary", "--vz-danger", "--vz-success", "--vz-warning", "--vz-info"]'
                        class="apex-charts" dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Multi Series Timeline</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="multi_series" data-colors='["--vz-primary","--vz-success"]' class="apex-charts" dir="ltr">
                    </div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Advanced Timeline (Multiple Range)</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="advanced_timeline" data-colors='["--vz-primary", "--vz-success", "--vz-warning"]'
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
    <script src="{{ URL::asset('assets/libs/moment/moment.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/apexcharts-timeline.init.js') }}"></script>

    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
