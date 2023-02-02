@extends('layouts.master')
@section('title')
    Tambah Surat Keputusan
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Dasbor
        @endslot
        @slot('title')
            Surat Keputusan
        @endslot
        @slot('li_end')
            Tambah
        @endslot
    @endcomponent
    <div class="row g-4 mb-3">
        <div class="col-sm-auto">
            <div>
                <a href="{{ auth()->getDefaultDriver() == 'api' ? route('employee.decrees.index') : route('decrees.index') }}" class="btn btn-soft-dark add-btn" id="create-btn"><i
                        class="ri-arrow-left-s-line align-bottom me-1"></i> Kembali ke daftar surat keputusan</a>
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
            <form method="POST" action="{{ route('decrees.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="name-input">Pegawai</label>
                            <select name="employee_id" class="form-control" data-choices name="choices-single-default"
                                id="choices-single-default">
                                <option value="">Pilih nama pegawai</option>
                                @foreach ($employees as $key => $value)
                                    <option @if (old('employee_id', $decree->employee_id ?? '') == $key) selected @endif value="{{ $key }}">
                                        {{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="yearInputYear">Tahun SK</label>
                            <input type="text" name="year" class="form-control" id="yearInputYear"
                                value="{{ old('year', $decree->year ?? '') }}"
                                placeholder="Masukkan tahun surat keputusan">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="numberInput">Nomor SK</label>
                            <input type="text" name="number" class="form-control" id="numberInput"
                                value="{{ old('number', $decree->number ?? '') }}"
                                placeholder="Masukkan nomor surat keputusan">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">File</label>
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

    <script src="{{ URL::asset('assets/libs/cleave.js/cleave.js.min.js') }}"></script>

    <script>
        var cleaveDate = new Cleave('#yearInputYear', {
            date: true,
            delimiter: '-',
            datePattern: ['Y']
        });
    </script>
@endsection
