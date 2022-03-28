@extends('layouts.master')
@section('title') @lang('translation.google') @endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Maps @endslot
        @slot('title') Google Maps @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Markers</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="gmaps-markers" class="gmaps"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Overlays</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="gmaps-overlay" class="gmaps"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Street View Panoramas</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="panorama" class="gmaps-panaroma"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Map Types</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="gmaps-types" class="gmaps"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
@endsection
@section('script')
    <script src="{{ URL::asset('assets/libs/prismjs/prismjs.min.js') }}"></script>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI"></script>

    <script src="{{ URL::asset('assets/libs/gmaps/gmaps.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/gmaps.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
