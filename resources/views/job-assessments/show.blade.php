@extends('layouts.master')
@section('title')
    Lihat Penilaian Kerja
@endsection
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('assets/libs/swiper/swiper.min.css') }}">
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Dasbor @endslot
        @slot('title') Penilaian Kerja @endslot
        @slot('li_end') Lihat @endslot
    @endcomponent
    <div class="row g-4 mb-3">
        <div class="col-sm-auto">
            <div>
                <a href="{{ route('job-assessments.index') }}" class="btn btn-soft-dark add-btn" id="create-btn"><i class="ri-arrow-left-s-line align-bottom me-1"></i> Kembali ke daftar penilaian kerja</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xxl-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless mb-0">
                            <tbody>
                                <tr>
                                    <th class="ps-0" scope="row">Pegawai</th>
                                    <td>: <span class="text-muted">{{ $jobAssessment->employee->name ?? '-' }}</span></td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">NIY</th>
                                    <td>: <span class="text-muted">{{ $jobAssessment->employee->institution_number ?? '-' }}</span></td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">Lembaga</th>
                                    <td>: <span class="text-muted">{{ $jobAssessment->employee->institution->name ?? '-' }}</span></td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">Tahun Penilaian</th>
                                    <td>: <span class="text-muted">{{ $jobAssessment->year ?? '-' }}</span></td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">Total Nilai</th>
                                    <td>: <span class="text-muted">{{ $jobAssessment->getTotalValue() ?? '-' }}</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
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
