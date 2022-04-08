@extends('layouts.master')
@section('title')
    Ubah Cuti
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Dasbor @endslot
        @slot('title') Cuti @endslot
        @slot('li_end') Ubah @endslot
    @endcomponent
    <div class="row g-4 mb-3">
        <div class="col-sm-auto">
            <div>
                <a href="{{ route('leaves.index') }}" class="btn btn-soft-dark add-btn" id="create-btn"><i class="ri-arrow-left-s-line align-bottom me-1"></i> Kembali ke daftar cuti</a>
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
            <form method="POST" action="{{ route('leaves.update', $leave->id) }}">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="name-input">Pegawai</label>
                            <select name="employee_id" class="form-control" data-choices name="choices-single-default" id="choices-single-default">
                                <option value="">Pilih nama pegawai</option>
                                @foreach ($employees as $key => $value)
                                    <option @if (old('employee_id', $leave->employee_id ?? '') == $key) selected @endif value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="submissionDateInputdate">Tanggal Pengajuan</label>
                            <input type="date" name="submission_date" class="form-control" id="submissionDateInputdate" value="{{ old('submission_date', $leave->submission_date ?? '') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="startDateInputdate">Tanggal Mulai</label>
                            <input type="date" name="start_date" class="form-control" id="startDateInputdate" value="{{ old('start_date', $leave->start_date ?? '') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="endDateInputdate">Tanggal Selesai</label>
                            <input type="date" name="end_date" class="form-control" id="endDateInputdate" value="{{ old('end_date', $leave->end_date ?? '') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="reasonInput">Alasan</label>
                            <textarea name="reason" class="form-control" id="reasonInput" rows="3" spellcheck="false">{{ old('reason', $leave->reason ?? '') }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="endDateInputdate">Disetujui?</label>
                            <!-- Base Radios -->
                            <div class="form-check mb-2">
                                <input value="" class="form-check-input" type="radio" name="is_approve" id="flexRadioDefault" {{ old('reason', $leave->is_approve ?? '') == null ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexRadioDefault">
                                    Menunggu
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input value="1" class="form-check-input" type="radio" name="is_approve" id="flexRadioDefault1" {{ old('reason', $leave->is_approve ?? '') == 1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Setujui
                                </label>
                            </div>
                            <div class="form-check">
                                <input value="0" class="form-check-input" type="radio" name="is_approve" id="flexRadioDefault2" {{ old('reason', $leave->is_approve ?? '') == 0 ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Tolak
                                </label>
                            </div>
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
