@extends('layouts.master')
@section('title')
    Ubah Penghargaan
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Dasbor @endslot
        @slot('title') Penghargaan @endslot
        @slot('li_end') Ubah @endslot
    @endcomponent
    <div class="row g-4 mb-3">
        <div class="col-sm-auto">
            <div>
                <a href="{{ route('appreciations.index') }}" class="btn btn-soft-dark add-btn" id="create-btn"><i class="ri-arrow-left-s-line align-bottom me-1"></i> Kembali ke daftar penghargaan</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            @if ($errors->any())
                <div class="alert alert-danger pb-0" role="alert">
                    <ul class="list-unstyled">
                        @foreach ($errors->all() as $error)
                            <li><i class="la la-info-circle"></i> {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('appreciations.update', $appreciation->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="name-input">Pegawai</label>
                            <select name="employee_id" class="form-control" data-choices name="choices-single-default" id="choices-single-default">
                                <option value="">Pilih nama pegawai</option>
                                @foreach ($employees as $key => $value)
                                    <option @if (old('employee_id', $appreciation->employee_id ?? '') == $key) selected @endif value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="name-input">Nama Penghargaan</label>
                            <input type="text" name="name" class="form-control" id="name-input" value="{{ old('name', $appreciation->name ?? '') }}" placeholder="Masukkan nama penghargaan">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="dateInputYear">Tahun Penghargaan</label>
                            <input type="text" name="date" class="form-control" id="dateInputYear" value="{{ old('date', $appreciation->date ?? '') }}" placeholder="Masukkan tahun penghargaan">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">File</label>
                            @if ($appreciation->files && \File::exists(public_path('storage/uploads') . '/' . $appreciation->files))
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
                            @endif
                            <input name="files" class="form-control" type="file" id="formFile">
                        </div>
                    </div>
                </div>
                <!-- end card -->

                <div class="mb-3">
                    <button type="submit" class="btn btn-success w-sm">Simpan</button>
                </div>
            </form>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
@endsection
@section('script')
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
