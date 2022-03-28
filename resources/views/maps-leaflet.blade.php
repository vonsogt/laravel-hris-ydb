@extends('layouts.master')
@section('title') @lang('translation.leaflet') @endsection
@section('css')
    <link href="{{ URL::asset('assets/libs/leaflet/leaflet.min.css') }}" rel="stylesheet" type="text/css" />

@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Maps @endslot
        @slot('title') Leaflet Maps @endslot
    @endcomponent
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Example</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="leaflet-map" class="leaflet-map"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Markers, Circles and Polygons</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="leaflet-map-marker" class="leaflet-map"></div>
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
                    <h4 class="card-title mb-0">Working with Popups</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="leaflet-map-popup" class="leaflet-map"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Markers with Custom Icons</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="leaflet-map-custom-icons" class="leaflet-map"></div>
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
                    <h4 class="card-title mb-0">Interactive Choropleth Map</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="leaflet-map-interactive-map" class="leaflet-map"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Layer Groups and Layers Control</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="leaflet-map-group-control" class="leaflet-map"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
@endsection
@section('script')
    <script src="{{ URL::asset('assets/libs/prismjs/prismjs.min.js') }}"></script>

    <script src="{{ URL::asset('/assets/libs/leaflet/leaflet.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/leaflet-us-states.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/leaflet-map.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
