@extends('layouts.master')
@section('title')
    Lihat Slip Gaji
@endsection
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('assets/libs/swiper/swiper.min.css') }}">
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Dasbor @endslot
        @slot('title') Slip Gaji @endslot
        @slot('li_end') Lihat @endslot
    @endcomponent
    <div class="row d-print-none g-4 mb-5">
        <div class="col-sm-auto">
            <div>
                <a href="{{ route('salaries.index') }}" class="btn btn-soft-dark add-btn" id="create-btn"><i class="ri-arrow-left-s-line align-bottom me-1"></i> Kembali ke daftar slip gaji</a>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-xxl-9">
            <div class="card" id="demo">
                {{-- <div class="card-header border-bottom-dashed p-4">
                    <div class="d-sm-flex">
                        <div class="flex-grow-1">
                            <img src="{{ URL::asset('images/logo-group-darussalam-sm.png') }}" class="card-logo card-logo-dark"
                                alt="logo dark" height="100">
                            <img src="{{ URL::asset('images/logo-group-darussalam-sm.png') }}" class="card-logo card-logo-light"
                                alt="logo light" height="100">
                            <div class="mt-sm-5 mt-4">
                                <h6 class="text-muted text-uppercase fw-semibold">Address</h6>
                                <p class="text-muted mb-1">California, United States</p>
                                <p class="text-muted mb-0">Zip-code: 90201</p>
                            </div>
                        </div>
                        <div class="flex-shrink-0 mt-sm-0 mt-3">
                            <h6><span class="text-muted fw-normal">Legal Registration No:</span> 987654
                            </h6>
                            <h6><span class="text-muted fw-normal">Email:</span> velzon@themesbrand.com
                            </h6>
                            <h6><span class="text-muted fw-normal">Website:</span> <a
                                    href="https://themesbrand.com/" class="link-primary"
                                    target="_blank">www.themesbrand.com</a></h6>
                            <h6 class="mb-0"><span class="text-muted fw-normal">Contact No:</span> +(01)
                                234 6789</h6>
                        </div>
                    </div>
                </div>
                <!--end card-header--> --}}
                <div class="card-body p-4">
                    <div class="row g-3">
                        <!-- Small Tables -->
                        <table class="table table-sm table-nowrap">
                            <thead>
                                <tr>
                                    <td></td>
                                    <td colspan="3">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-3">
                                                        <img src="{{ URL::asset('images/logo-group-darussalam-sm.png') }}" alt="" class="img-fluid d-block">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h4 class="mb-1 fw-medium text-danger">
                                                            SDIT 01 DARUSSALAM
                                                        </h4>
                                                        <h4 class="mb-1 fw-bold">
                                                            YAYASAN DARUSSALAM BATAM
                                                        </h4>
                                                        <p class="text-muted mb-0">Komplek Pendidikan Darussalam 2, Perumahan taman Jaya Asri, Batu Aji</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 text-end">
                                                <h5 class="fw-bold">SLIP GAJI</h5>
                                                <h5 class="fst-italic">{{ $salary->date }}</h5>
                                                <h5 class="text-danger">PRIVATE & CONFIDENTIAL</h5>
                                            </div>
                                        </div>
                                        <div style="margin-left:117px;margin-bottom: 1rem;border: 0;border-top: 3px solid "></div>
                                    </td>
                                </tr>
                                <tr style="border-top: 0">
                                    <td></td>
                                    <td colspan="3" class="border-bottom">
                                        <table class="table table-borderless table-sm table-nowrap">
                                            <tr>
                                                <td style="width: 150px">NIK</td>
                                                <td>: {{ $salary->employee->id_card ?? '-' }}</td>
                                                <td style="width: 150px">Jabatan</td>
                                                <td>: {{ $salary->employee->position->name ?? '-' }}</td>
                                            </tr>
                                            <tr>
                                                <td>Nama Karyawan</td>
                                                <td>: {{ $salary->employee->name ?? '-' }}</td>
                                                <td>NPWP</td>
                                                <td>: - </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col" class=""></th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Assignee</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Implement new UX</td>
                                    <td><span class="badge badge-soft-primary">Backlog</span></td>
                                    <td>Lanora Sandoval</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Design syntax</td>
                                    <td><span class="badge badge-soft-secondary">In Progress</span></td>
                                    <td>Calvin Garrett</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Configurable resources</td>
                                    <td><span class="badge badge-soft-success">Done</span></td>
                                    <td>Florence Guzman</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Implement extensions</td>
                                    <td><span class="badge badge-soft-dark">Backlog</span></td>
                                    <td>Maritza Blanda</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Applications Engineer</td><td>
                                    <span class="badge badge-soft-success">Done</span></td>
                                    <td>Leslie Alexander</td>
                                </tr>
                            </tbody>
                        </table>
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
@section('script')
    <script src="{{ URL::asset('assets/libs/swiper/swiper.min.js') }}"></script>

    <script src="{{ URL::asset('assets/js/pages/profile.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
