<!doctype html >
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg">

<head>
    <meta charset="utf-8" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')| HRIS Yayasan Darussalam Batam</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Human Resource Information System Yayasan Darussalam Batam" name="description" />
    <meta content="Anggi Syah Putri Nasution" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico')}}">
    @include('layouts.head-css')
</head>

@section('body')
    @include('layouts.body')
@show
    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('layouts.topbar')
        @include('layouts.sidebar')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            @include('layouts.footer')
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    {{-- @include('layouts.customizer') --}}

    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!-- JAVASCRIPT -->
    @include('layouts.vendor-scripts')

    @if (auth()->getDefaultDriver() == 'api')
        <script>
            $(function() {
                // handle submit event of form
                $(document).on("submit", "#logout-form", function() {
                    var e = this;
                    $.post($(this).attr('action'), $(this).serialize(), function(data) {

                        if (data.success) { // If success then redirect to login url
                            window.location = "{{ route('login') }}";
                        }
                    }).fail(function(response) {
                        // handle error and show in html
                    });
                    return false;
                });
            });
        </script>
    @endif
</body>

</html>
