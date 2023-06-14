@extends('layouts.master')
@section('title')
    Lihat Penghargaan
@endsection
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('assets/libs/swiper/swiper.min.css') }}">
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Dasbor @endslot
        @slot('title') Penghargaan @endslot
        @slot('li_end') Lihat @endslot
    @endcomponent
    <div class="row g-4 mb-3">
        <div class="col-sm-auto">
            <div>
                <a href="{{ auth()->getDefaultDriver() == 'api' ? route('employee.appreciations.index') : route('appreciations.index') }}" class="btn btn-soft-dark add-btn" id="create-btn"><i class="ri-arrow-left-s-line align-bottom me-1"></i> Kembali ke daftar penghargaan</a>
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
                                    <td>: <span class="text-muted">{{ $appreciation->employee->name ?? '-' }}</span></td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">Nama Penghargaan</th>
                                    <td>: <span class="text-muted">{{ $appreciation->name ?? '-' }}</span></td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">Lembaga</th>
                                    <td>: <span class="text-muted">{{ $appreciation->employee->institution->name ?? '-' }}</span></td>
                                </tr>
                                <tr>
                                    <th class="ps-0" scope="row">Tahun Penghargaan</th>
                                    <td>: <span class="text-muted">{{ $appreciation->date ?? '-' }}</span></td>
                                </tr>
                                @if ($appreciation->files && \File::exists(public_path('storage/uploads') . '/' . $appreciation->files))
                                    <tr>
                                        <th class="ps-0" scope="row">File</th>
                                        <td>
                                            <div class="vstack gap-2 mb-2">
                                                <div class="border rounded border-dashed p-2">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar-sm">
                                                                <div class="avatar-title bg-light text-secondary rounded fs-24">
                                                                    <i class="ri-file-pdf-line"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <h5 class="fs-13 mb-1"><a href="{{ url('storage/uploads') . '/' . $appreciation->files }}" target="_blank" class="text-body text-truncate d-block">{{ str_replace('penghargaan/', '', $appreciation->files) }}</a></h5>
                                                            <div>{{ \App\Http\Controllers\AppreciationController::bytesToHuman(\File::size(public_path('storage/uploads') . '/' . $appreciation->files)) }}</div>
                                                        </div>
                                                        <div class="flex-shrink-0 ms-2">
                                                            <div class="d-flex gap-1">
                                                                <a href="{{ url('storage/uploads') . '/' . $appreciation->files }}" target="_blank" class="btn btn-icon text-muted btn-sm fs-18"><i class="ri-download-2-line"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endif
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
