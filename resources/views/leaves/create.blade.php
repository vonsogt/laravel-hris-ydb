@extends('layouts.master')
@section('title')
    Tambah Cuti
@endsection
@section('css')
    <!-- Filepond css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/libs/filepond/filepond.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css') }}">
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Dasbor @endslot
        @slot('title') Cuti @endslot
        @slot('li_end') Tambah @endslot
    @endcomponent
    <div class="row g-4 mb-3">
        <div class="col-sm-auto">
            <div>
                <a href="{{ auth()->getDefaultDriver() == 'api' ? route('employee.leaves.index') : route('leaves.index') }}" class="btn btn-soft-dark add-btn" id="create-btn"><i class="ri-arrow-left-s-line align-bottom me-1"></i> Kembali ke daftar cuti</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card card-animate bg-primary">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="fw-medium text-white-50 mb-0">Sisa Cuti Tahun {{ date('Y') }}</p>
                            <h2 class="mt-4 ff-secondary fw-semibold text-white"><span class="counter-value" data-target="{{ auth()->user()->remainingLeave }}" data-decimals="0" data-duration="0">0</span> Hari</h2>
                        </div>
                        <div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-soft-light rounded-circle fs-2">
                                    <i data-feather="clock" class="text-white"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div> <!-- end card-->
        </div> <!-- end col-->
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
            <form method="POST" action="{{ auth()->getDefaultDriver() == 'api' ? route('employee.leaves.index') : route('leaves.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        @if (auth()->getDefaultDriver() == 'web')
                            <div class="mb-3">
                                <label class="form-label" for="name-input">Pegawai</label>
                                <select name="employee_id" class="form-control" data-choices name="choices-single-default" id="choices-single-default">
                                    <option value="">Pilih nama pegawai</option>
                                    @foreach ($employees as $key => $value)
                                        <option @if (old('employee_id', $leave->employee_id ?? '') == $key) selected @endif value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>                            
                        @endif

                        <input type="hidden" name="employee_id" value="{{ auth()->user()->id }}">

                        <div class="mb-3">
                            <label class="form-label" for="submissionDateInputdate">Tanggal Pengajuan</label>
                            <input type="date" name="submission_date" class="form-control" id="submissionDateInputdate" value="{{ old('submission_date', $leave->submission_date ?? '') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="startDateInputdate">Tanggal Mulai</label>
                            <input type="date" name="start_date" class="form-control" id="startDateInputdate" value="{{ old('start_date', $leave->start_date ?? '') }}">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="endDateInputdate">Tanggal Selesai</label>
                            <input type="date" name="end_date" class="form-control" id="endDateInputdate" value="{{ old('end_date', $leave->end_date ?? '') }}">
                        </div>

                        <div class="mb-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="reason" id="inlineRadio1" value="Cuti" checked {{ old('reason', $leave->reason ?? '') == 'Cuti' ? 'checked' : '' }}>
                                <label class="form-check-label" for="inlineRadio1">Cuti</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="reason" id="inlineRadio2" value="Izin" {{ old('reason', $leave->reason ?? '') == 'Izin' ? 'checked' : '' }}>
                                <label class="form-check-label" for="inlineRadio2">Izin</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="reason" id="inlineRadio3" value="Sakit" {{ old('reason', $leave->reason ?? '') == 'Sakit' ? 'checked' : '' }}>
                                <label class="form-check-label" for="inlineRadio3">Sakit</label>
                            </div>
                        </div>

                        <div id="leaveDocument" class="mb-3">
                            <label for="photoFile" class="form-label">Unggah Dokumen</label>
                            <input type="file" class="filepond filepond-input-multiple" multiple name="attachment[]" id="photoFile" data-max-file-size="3MB" data-max-files="3" data-allow-reorder="true" data-allow-multiple="true" data-max-file-size-preview="3MB" data-accepted-file-types="image/jpeg, image/png, application/pdf">
                            {{-- Help text --}}
                            <small class="form-text text-muted">Unggah dokumen pendukung (maks. 3 file, 3MB/file).</small>
                        </div>

                        <div class="{{ auth()->getDefaultDriver() != 'web' ?: 'mb-3' }}">
                            <label class="form-label" for="descriptionInput">Keterangan</label>
                            <textarea name="description" class="form-control" id="descriptionInput" rows="3" spellcheck="false">{{ old('description', $institution->description ?? '') }}</textarea>
                        </div>

                        @if (auth()->getDefaultDriver() == 'web')
                            <div class="mb-3">
                                <label class="form-label" for="endDateInputdate">Disetujui?</label>
                                <!-- Base Radios -->
                                <div class="form-check mb-2">
                                    <input value="" class="form-check-input" type="radio" name="is_approved" id="flexRadioDefault" checked>
                                    <label class="form-check-label" for="flexRadioDefault">
                                        Menunggu
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input value="1" class="form-check-input" type="radio" name="is_approved" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Setujui
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input value="0" class="form-check-input" type="radio" name="is_approved" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Tolak
                                    </label>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <!-- end card -->

                <div class="mb-3">
                    <button type="submit" class="btn btn-success w-sm">Ajukan</button>
                </div>
            </form>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
@endsection
@section('script')
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>

    <!-- filepond js -->
    <script src="{{ URL::asset('assets/libs/filepond/filepond.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js') }}"></script>

    <!-- File upload js -->
    <script>
        // FilePond
        FilePond.registerPlugin(
            // encodes the file as base64 data
            FilePondPluginFileEncode,
            // validates the size of the file
            FilePondPluginFileValidateSize,
            // corrects mobile image orientation
            FilePondPluginImageExifOrientation,
            // previews dropped images
            FilePondPluginImagePreview,
        );

        FilePond.create(
            document.querySelector('input.filepond-input-multiple'),
            {
                labelIdle: 'Seret & Jatuhkan gambar Anda atau <span class="filepond--label-action">Pilih</span>',
            }  
        );

        // Hide #leaveDocument when reason is 'Cuti'
        $(document).ready(function() {
            $('#leaveDocument').hide();
            $('input[type=radio][name=reason]').change(function() {
                if (this.value == 'Cuti') {
                    $('#leaveDocument').hide();
                }
                else if (this.value == 'Izin') {
                    $('#leaveDocument').show();
                }
                else if (this.value == 'Sakit') {
                    $('#leaveDocument').show();
                }
            });

            if ($('input[name=reason]:checked').val() == 'Cuti') {
                $('#leaveDocument').hide();
            }
            else if ($('input[name=reason]:checked').val() == 'Izin') {
                $('#leaveDocument').show();
            }
            else if ($('input[name=reason]:checked').val() == 'Sakit') {
                $('#leaveDocument').show();
            }
        });

    </script>
@endsection
