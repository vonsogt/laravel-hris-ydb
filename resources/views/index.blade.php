@extends('layouts.master')
@section('title') Dasbor @endsection
@section('css')
<link href="assets/libs/jsvectormap/jsvectormap.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/swiper/swiper.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Dasbor @endslot
@slot('title') Dasbor @endslot
@endcomponent
<div class="row">
    <div class="col">

        <div class="h-100">
            <div class="row mb-3 pb-1">
                <div class="col-12">
                    <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                        <div class="flex-grow-1">
                            <h4 class="fs-16 mb-1">Selamat datang, {{ auth()->user()->name }}!</h4>
                        </div>
                    </div><!-- end card header -->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            @if (auth()->getDefaultDriver() == 'web')
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                            Total Pegawai
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                                class="counter-value" data-target="{{ $data['employeesCount'] }}">0</span>
                                        </h4>
                                        <a href="{{ route('employees.index') }}" class="text-decoration-underline">
                                            Lihat semua pegawai
                                        </a>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-soft-success rounded fs-3">
                                            <i class="bx bx-user text-success"></i>
                                        </span>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                            Lembaga
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                                class="counter-value" data-target="{{ $data['institutionsCount'] }}">0</span></h4>
                                        <a href="{{ route('institutions.index') }}" class="text-decoration-underline">Lihat semua lembaga</a>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-soft-info rounded fs-3">
                                            <i class="bx bx-briefcase text-info"></i>
                                        </span>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p
                                            class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                            Pegawai Baru
                                        </p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <h5 class="text-success fs-14 mb-0">
                                            {{ now()->monthName . ' ' . now()->year }}
                                        </h5>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                                class="counter-value" data-target="{{ $data['newEmployeesCount'] }}">0</span>
                                        </h4>
                                        <a href="{{ route('employees.index') . '?bulan=' . now()->month . '&tahun=' . now()->year }}" class="text-decoration-underline">Lihat semua pegawai</a>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-soft-warning rounded fs-3">
                                            <i class="bx bx-user-plus text-warning"></i>
                                        </span>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                            Segera Hadir
                                        </p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <h5 class="text-muted fs-14 mb-0">
                                            ...
                                        </h5>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                                class="counter-value" data-target="{{ $data['newEmployeesCount'] }}">0</span>
                                        </h4>
                                        <a href="#" class="text-decoration-underline">Segera Hadir</a>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-soft-primary rounded fs-3">
                                            <i class="bx bx-rocket text-primary"></i>
                                        </span>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div> <!-- end row-->
            @endif

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header border-0 align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">HEADCOUNT PEGAWAI {{ explode(',', $data['chartCategories'])[0] }} - {{ explode(',', $data['chartCategories'])[4] }}</h4>
                        </div><!-- end card header -->

                        <div class="card-body p-0 pb-2">
                            <div class="w-100">
                                <div id="customer_impression_charts"
                                    data-colors='["--vz-primary", "--vz-success", "--vz-danger"]'
                                    class="apex-charts" dir="ltr"></div>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div>

        </div> <!-- end .h-100-->

    </div> <!-- end col -->
</div>
@endsection
@section('script')
<!-- apexcharts -->
<script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/jsvectormap/jsvectormap.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/swiper/swiper.min.js')}}"></script>

<!-- dashboard init -->
<script>
    // get colors array from the string
    function getChartColorsArray(chartId) {
        if (document.getElementById(chartId) !== null) {
            var colors = document.getElementById(chartId).getAttribute("data-colors");
            colors = JSON.parse(colors);
            return colors.map(function(value) {
                var newValue = value.replace(" ", "");

                if (newValue.indexOf(",") === -1) {
                    var color = getComputedStyle(document.documentElement).getPropertyValue(newValue);
                    if (color) return color;
                    else return newValue;
                } else {
                    var val = value.split(",");

                    if (val.length == 2) {
                        var rgbaColor = getComputedStyle(document.documentElement).getPropertyValue(val[0]);
                        rgbaColor = "rgba(" + rgbaColor + "," + val[1] + ")";
                        return rgbaColor;
                    } else {
                        return newValue;
                    }
                }
            });
        }
    }

    var linechartcustomerColors = getChartColorsArray("customer_impression_charts");
    var options = {
        series: [{
            name: "Total",
            type: "bar",
            data: [{{ $data['chartData'] }}]
        }],
        chart: {
            height: 370,
            type: "line",
            toolbar: {
                show: false
            }
        },
        stroke: {
            curve: "straight",
            dashArray: [0, 0, 8],
            width: [2, 0, 2.2]
        },
        fill: {
            opacity: 0.9
        },
        markers: {
            size: [0, 0, 0],
            strokeWidth: 2,
            hover: {
                size: 4
            }
        },
        xaxis: {
            categories: [{{ $data['chartCategories'] }}],
            axisTicks: {
                show: false
            },
            axisBorder: {
                show: false
            }
        },
        yaxis: {
            min: 0,
            tickAmount: 4,
        },
        grid: {
            show: true,
            xaxis: {
                lines: {
                    show: true
                }
            },
            yaxis: {
                lines: {
                    show: false
                }
            },
            padding: {
                top: 0,
                right: -2,
                bottom: 15,
                left: 10
            }
        },
        legend: {
            show: true,
            horizontalAlign: "center",
            offsetX: 0,
            offsetY: -5,
            markers: {
                width: 9,
                height: 9,
                radius: 6
            },
            itemMargin: {
                horizontal: 10,
                vertical: 0
            }
        },
        plotOptions: {
            bar: {
                columnWidth: "30%",
                barHeight: "70%"
            }
        },
        colors: linechartcustomerColors,
        tooltip: {
            shared: true,
            y: [{
                formatter: function(y) {
                    if (typeof y !== "undefined") {
                        return y.toFixed(0) + " Pegawai";
                    }
                    return y;
                },
            }, ],
        },
    };
    var chart = new ApexCharts(document.querySelector("#customer_impression_charts"), options);
    chart.render(); // Simple Donut Charts
</script>

<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
