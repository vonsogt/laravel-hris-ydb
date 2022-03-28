@extends('layouts.master')
@section('title') @lang('translation.Apex_Candlstick_Chart') @endsection
@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Apexcharts @endslot
        @slot('title') Apex Candlestick Charts @endslot
    @endcomponent
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Basic Candlestick Chart</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="basic_candlestick" data-colors='["--vz-success", "--vz-danger"]' class="apex-charts"
                        dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Candlestick Synced with Brush Chart (Combo)</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div>
                        <div id="combo_candlestick" data-colors='["--vz-info", "--vz-danger"]' class="apex-charts"
                            dir="ltr"></div>
                        <div id="combo_candlestick_chart" data-colors='["--vz-warning", "--vz-danger"]'
                            class="apex-charts" dir="ltr"></div>
                    </div>
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
                    <h4 class="card-title mb-0">Category X-Axis</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="category_candlestick" data-colors='["--vz-success", "--vz-danger"]' class="apex-charts"
                        dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->

    </div>
    <!-- end row -->
@endsection
@section('script')
    <script src="{{ URL::asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="https://apexcharts.com/samples/assets/ohlc.js"></script>
    <!-- for Category x-axis chart -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.8.17/dayjs.min.js"></script>
    <script src="{{ URL::asset('assets/js/pages/apexcharts-candlestick.init.js') }}"></script>

    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
