@extends('layouts.master')
@section('title')
    Tambah Pegawai
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Dasbor @endslot
        @slot('title') Pegawai @endslot
        @slot('li_end') Tambah @endslot
    @endcomponent
    <div class="row g-4 mb-3">
        <div class="col-sm-auto">
            <div>
                <a href="{{ route('employees.index') }}" class="btn btn-soft-dark add-btn" id="create-btn"><i class="ri-arrow-left-s-line align-bottom me-1"></i> Kembali ke daftar pegawai</a>
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
            <form method="POST" action="{{ route('employees.store') }}">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="name-input">Nama</label>
                            <input type="text" name="name" class="form-control" id="name-input" value="{{ old('name', $employee->name ?? '') }}" placeholder="Masukkan nama">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="institution_number-input">Nomor Induk Yayasan (NIY)</label>
                            <input type="text" name="institution_number" class="form-control" id="institution_number-input" value="{{ old('institution_number', $employee->institution_number ?? '') }}" placeholder="Masukkan nomor induk yayasan">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="id_card-input">Nomor KTP</label>
                            <input type="text" name="id_card" class="form-control" id="id_card-input" value="{{ old('id_card', $employee->id_card ?? '') }}" placeholder="Masukkan nomor ktp">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="education_personnel_number-input">NUPTK</label>
                            <input type="text" name="education_personnel_number" class="form-control" id="education_personnel_number-input" value="{{ old('education_personnel_number', $employee->education_personnel_number ?? '') }}" placeholder="Masukkan nomor unik pendidik dan tenaga kependidikan">
                        </div>
                        <div class="row mb-3">
                            <div class="col-xxl-6 col-md-6">
                                <div>
                                    <label for="birthPlaceInput" class="form-label">Tempat Lahir</label>
                                    <input type="text" name="birth_place" class="form-control form-control-icon" id="birthPlaceInput" value="{{ old('birth_place', $employee->birth_place ?? '') }}" placeholder="Masukkan tempat lahir">
                                </div>
                            </div>
                            <div class="col-xxl-6 col-md-6 mt-md-0 mt-sm-3">
                                <div>
                                    <label for="birthDateInputdate" class="form-label">Tanggal Lahir</label>
                                    <input type="date" name="birth_date" class="form-control" id="birthDateInputdate" value="{{ old('birth_date', $employee->birth_date ?? '') }}">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="gender-inputSelect">Jenis Kelamin</label>
                            <select id="gender-inputSelect" class="form-select mb-3" name="gender" aria-label="Pilih jenis kelamin">
                                <option disabled selected> -- Pilih jenis kelamin -- </option>
                                @foreach ($data['genderOptions'] as $key => $option)
                                    <option @if (old('gender', '') == $key) selected @endif value="{{ $key }}">{{ $option }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="religion-inputSelect">Agama</label>
                            <select id="religion-inputSelect" class="form-select mb-3" name="religion" aria-label="Pilih agama">
                                <option disabled selected> -- Pilih agama -- </option>
                                @foreach ($data['religionOptions'] as $key => $option)
                                    <option @if (old('religion', '') == $key) selected @endif value="{{ $key }}">{{ $option }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="education-input">Pendidikan</label>
                            <input type="text" name="education" class="form-control" id="education-input" value="{{ old('education', $employee->education ?? '') }}" placeholder="Masukkan pendidikan">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="blood_type-input">Golongan Darah</label>
                            <input type="text" name="blood_type" class="form-control" id="blood_type-input" value="{{ old('blood_type', $employee->blood_type ?? '') }}" placeholder="Masukkan golongan darah">
                        </div>
                        <div>
                            <label class="form-label" for="description-input">Deskripsi</label>
                            <textarea name="description" class="form-control" id="description-input" rows="3" spellcheck="false">{{ old('description', $employee->description ?? '') }}</textarea>
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
