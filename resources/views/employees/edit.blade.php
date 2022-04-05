@extends('layouts.master')
@section('title')
    Ubah Pegawai
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Dasbor @endslot
        @slot('title') Pegawai @endslot
        @slot('li_end') Ubah @endslot
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
            <form method="POST" action="{{ route('employees.update', $employee->id) }}">
                @csrf
                @method('PUT')
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
                                    <option @if (old('gender', $employee->gender ?? '') == $key) selected @endif value="{{ $key }}">{{ $option }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="religion-inputSelect">Agama</label>
                            <select id="religion-inputSelect" class="form-select mb-3" name="religion" aria-label="Pilih agama">
                                <option disabled selected> -- Pilih agama -- </option>
                                @foreach ($data['religionOptions'] as $key => $option)
                                    <option @if (old('religion', $employee->religion ?? '') == $key) selected @endif value="{{ $key }}">{{ $option }}</option>
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
                        <div class="mb-3">
                            <label for="joinDateInputdate" class="form-label">Bergabung</label>
                            <input type="date" name="join_date" class="form-control" id="joinDateInputdate" value="{{ old('join_date', $employee->join_date ?? '') }}">
                        </div>
                        <div class="mb-3">
                            <label for="endDateInputdate" class="form-label">Akhir Kontrak</label>
                            <input type="date" name="end_date" class="form-control" id="endDateInputdate" value="{{ old('end_date', $employee->end_date ?? '') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="institutionInputSelect">Lembaga</label>
                            <select id="institutionInputSelect" class="form-select mb-3" name="institution_id" aria-label="Pilih lembaga">
                                <option disabled selected> -- Pilih lembaga -- </option>
                                @foreach ($data['institutionOptions'] as $key => $option)
                                    <option @if (old('institution_id', $employee->institution_id ?? '') == $key) selected @endif value="{{ $key }}">{{ $option }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="positionInputSelect">Jabatan</label>
                            <select id="positionInputSelect" class="form-select mb-3" name="position_id" aria-label="Pilih jabatan">
                                <option disabled selected> -- Pilih jabatan -- </option>
                                @foreach ($data['positionOptions'] as $key => $option)
                                    <option @if (old('position_id', $employee->position_id ?? '') == $key) selected @endif value="{{ $key }}">{{ $option }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label class="form-label" for="addressInput">Alamat</label>
                            <textarea name="address" class="form-control" id="addressInput" rows="3" spellcheck="false">{{ old('address', $employee->address ?? '') }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="status-input">Status</label>
                            <input type="text" name="status" class="form-control" id="status-input" value="{{ old('status', $employee->status ?? '') }}" placeholder="Masukkan status">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="phoneNumberInput">Nomor HP</label>
                            <input type="text" name="phone_number" class="form-control" id="phoneNumberInput" value="{{ old('phone_number', $employee->phone_number ?? '') }}" placeholder="Masukkan nomor hp">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="motherNameInput">Nama Ibu Kandung</label>
                            <input type="text" name="mother_name" class="form-control" id="motherNameInput" value="{{ old('mother_name', $employee->mother_name ?? '') }}" placeholder="Masukkan nama ibu kandung">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="partnerNameInput">Nama Suami/Istri</label>
                            <input type="text" name="partner_name" class="form-control" id="partnerNameInput" value="{{ old('partner_name', $employee->partner_name ?? '') }}" placeholder="Masukkan nama suami/istri">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Anak</label>
                            <div class="table-responsive">
                                <table id="faqs" class="table table-hover">
                                    <tbody>
                                        @forelse (old('children_name', $employee->children_name ?? []) as $key => $item)
                                            <tr id="children-name-row{{$key}}">
                                                <td class="text-start">
                                                    <div class="mb-2">
                                                        <input type="text" name="children_name[{{ $key }}]" class="form-control" value="{{ $item }}" placeholder="Nama anak pertama">
                                                    </div>
                                                </td>
                                                <td style="width: 105px;">
                                                    <button type="button" onclick="addChildRow();" class="btn btn-success btn-icon waves-effect waves-light"><i class="ri-add-line"></i></button>
                                                    @if ($loop->index != 0)
                                                        <a href="javascript:void(0);" class="btn btn-danger btn-icon waves-effect waves-light" onclick="$('#children-name-row{{ $key }}').remove();"><i class="ri-delete-bin-5-line"></i></a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td class="text-start">
                                                    <div class="mb-2">
                                                        <input type="text" name="children_name[1]" class="form-control" placeholder="Nama anak pertama">
                                                    </div>
                                                </td>
                                                <td style="width: 105px;">
                                                    <button type="button" onclick="addChildRow();" class="btn btn-success btn-icon waves-effect waves-light"><i class="ri-add-line"></i></button>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="photoFile" class="form-label">Foto</label>
                            <input class="form-control" name="photo" type="file" id="photoFile">
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

    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        var children_name_row = 2;

        @if(($cnr = count((array)old('children_name', $employee->children_name ?? []))) > 2)
            children_name_row = {{ $cnr + 1 }}
        @endif

        function addChildRow() {
            html = '<tr id="children-name-row' + children_name_row + '">';
            html += '<td><input type="text" name="children_name[' + children_name_row + ']" class="form-control" placeholder="Nama anak ke-' + children_name_row + '"></td>';
            html += '<td><button type="button" onclick="addChildRow();" class="btn btn-success btn-icon waves-effect waves-light"><i class="ri-add-line"></i></button> ' +
                '<a href="javascript:void(0);" class="btn btn-danger btn-icon waves-effect waves-light" onclick="$(\'#children-name-row' + children_name_row +
                '\').remove();children_name_row--"><i class="ri-delete-bin-5-line"></i></a></td>';

            html += '</tr>';

            $('#faqs tbody').append(html);

            children_name_row++;
        }
    </script>
@endsection
