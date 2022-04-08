@extends('layouts.master')
@section('title')
    Tambah Penilaian Kerja
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Dasbor @endslot
        @slot('title') Penilaian Kerja @endslot
        @slot('li_end') Tambah @endslot
    @endcomponent
    <div class="row g-4 mb-3">
        <div class="col-sm-auto">
            <div>
                <a href="{{ route('job-assessments.index') }}" class="btn btn-soft-dark add-btn" id="create-btn"><i class="ri-arrow-left-s-line align-bottom me-1"></i> Kembali ke penilaian kerja</a>
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
            <form method="POST" action="{{ route('job-assessments.store') }}">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="name-input">Pegawai</label>
                            <select name="employee_id" class="form-control" data-choices name="choices-single-default" id="choices-single-default">
                                <option value="">Pilih nama pegawai</option>
                                @foreach ($employees as $key => $value)
                                    <option @if (old('employee_id', $jobAssessment->employee_id ?? '') == $key) selected @endif value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="yearInputYear">Tahun Penilaian</label>
                            <input type="text" name="year" class="form-control" id="yearInputYear" value="{{ old('year', $appreciation->year ?? '') }}" placeholder="Masukkan tahun penilaian">
                        </div>


                        <!-- Bordered Tables -->
                        <table class="table table-bordered table-nowrap">
                            <thead>
                                <tr class="text-center align-middle">
                                    <th scope="col">Faktor-faktor Penilaian</th>
                                    <th scope="col">Sangat Baik<br>5</th>
                                    <th scope="col">Baik<br>4</th>
                                    <th scope="col">Cukup<br>3</th>
                                    <th scope="col">Jelek<br>2</th>
                                    <th scope="col">Sangat Jelek<br>1</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="align-middle">
                                    <th scope="row">Administrasi</th>
                                    <td class="text-center">
                                        <input value="5" class="form-check-input" type="radio" name="factors[administrasi]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['administrasi'] ?? null) == 5 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="4" class="form-check-input" type="radio" name="factors[administrasi]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['administrasi'] ?? null) == 4 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="3" class="form-check-input" type="radio" name="factors[administrasi]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['administrasi'] ?? null) == 3 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="2" class="form-check-input" type="radio" name="factors[administrasi]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['administrasi'] ?? null) == 2 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="1" class="form-check-input" type="radio" name="factors[administrasi]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['administrasi'] ?? null) == 1 ? 'checked' : ''}}>
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <th scope="row">Hubungan dengan Atasan</th>
                                    <td class="text-center">
                                        <input value="5" class="form-check-input" type="radio" name="factors[hubungan_dengan_atasan]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['hubungan_dengan_atasan'] ?? null) == 5 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="4" class="form-check-input" type="radio" name="factors[hubungan_dengan_atasan]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['hubungan_dengan_atasan'] ?? null) == 4 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="3" class="form-check-input" type="radio" name="factors[hubungan_dengan_atasan]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['hubungan_dengan_atasan'] ?? null) == 3 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="2" class="form-check-input" type="radio" name="factors[hubungan_dengan_atasan]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['hubungan_dengan_atasan'] ?? null) == 2 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="1" class="form-check-input" type="radio" name="factors[hubungan_dengan_atasan]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['hubungan_dengan_atasan'] ?? null) == 1 ? 'checked' : ''}}>
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <th scope="row">Hubungan dengan Teman Sejawat</th>
                                    <td class="text-center">
                                        <input value="5" class="form-check-input" type="radio" name="factors[hubungan_dengan_teman_sejawat]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['hubungan_dengan_teman_sejawat'] ?? null) == 5 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="4" class="form-check-input" type="radio" name="factors[hubungan_dengan_teman_sejawat]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['hubungan_dengan_teman_sejawat'] ?? null) == 4 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="3" class="form-check-input" type="radio" name="factors[hubungan_dengan_teman_sejawat]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['hubungan_dengan_teman_sejawat'] ?? null) == 3 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="2" class="form-check-input" type="radio" name="factors[hubungan_dengan_teman_sejawat]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['hubungan_dengan_teman_sejawat'] ?? null) == 2 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="1" class="form-check-input" type="radio" name="factors[hubungan_dengan_teman_sejawat]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['hubungan_dengan_teman_sejawat'] ?? null) == 1 ? 'checked' : ''}}>
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <th scope="row">Hubungan dengan Peserta Didik</th>
                                    <td class="text-center">
                                        <input value="5" class="form-check-input" type="radio" name="factors[hubungan_dengan_peserta_didik]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['hubungan_dengan_peserta_didik'] ?? null) == 5 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="4" class="form-check-input" type="radio" name="factors[hubungan_dengan_peserta_didik]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['hubungan_dengan_peserta_didik'] ?? null) == 4 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="3" class="form-check-input" type="radio" name="factors[hubungan_dengan_peserta_didik]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['hubungan_dengan_peserta_didik'] ?? null) == 3 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="2" class="form-check-input" type="radio" name="factors[hubungan_dengan_peserta_didik]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['hubungan_dengan_peserta_didik'] ?? null) == 2 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="1" class="form-check-input" type="radio" name="factors[hubungan_dengan_peserta_didik]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['hubungan_dengan_peserta_didik'] ?? null) == 1 ? 'checked' : ''}}>
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <th scope="row">Sikap dan Kerjasama</th>
                                    <td class="text-center">
                                        <input value="5" class="form-check-input" type="radio" name="factors[sikap_dan_kerja_sama]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['sikap_dan_kerja_sama'] ?? null) == 5 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="4" class="form-check-input" type="radio" name="factors[sikap_dan_kerja_sama]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['sikap_dan_kerja_sama'] ?? null) == 4 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="3" class="form-check-input" type="radio" name="factors[sikap_dan_kerja_sama]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['sikap_dan_kerja_sama'] ?? null) == 3 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="2" class="form-check-input" type="radio" name="factors[sikap_dan_kerja_sama]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['sikap_dan_kerja_sama'] ?? null) == 2 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="1" class="form-check-input" type="radio" name="factors[sikap_dan_kerja_sama]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['sikap_dan_kerja_sama'] ?? null) == 1 ? 'checked' : ''}}>
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <th scope="row">Motivasi dan Inisiatif</th>
                                    <td class="text-center">
                                        <input value="5" class="form-check-input" type="radio" name="factors[motivasi_dan_inisiatif]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['motivasi_dan_inisiatif'] ?? null) == 5 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="4" class="form-check-input" type="radio" name="factors[motivasi_dan_inisiatif]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['motivasi_dan_inisiatif'] ?? null) == 4 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="3" class="form-check-input" type="radio" name="factors[motivasi_dan_inisiatif]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['motivasi_dan_inisiatif'] ?? null) == 3 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="2" class="form-check-input" type="radio" name="factors[motivasi_dan_inisiatif]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['motivasi_dan_inisiatif'] ?? null) == 2 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="1" class="form-check-input" type="radio" name="factors[motivasi_dan_inisiatif]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['motivasi_dan_inisiatif'] ?? null) == 1 ? 'checked' : ''}}>
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <th scope="row">Disiplin</th>
                                    <td class="text-center">
                                        <input value="5" class="form-check-input" type="radio" name="factors[disiplin]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['disiplin'] ?? null) == 5 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="4" class="form-check-input" type="radio" name="factors[disiplin]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['disiplin'] ?? null) == 4 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="3" class="form-check-input" type="radio" name="factors[disiplin]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['disiplin'] ?? null) == 3 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="2" class="form-check-input" type="radio" name="factors[disiplin]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['disiplin'] ?? null) == 2 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="1" class="form-check-input" type="radio" name="factors[disiplin]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['disiplin'] ?? null) == 1 ? 'checked' : ''}}>
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <th scope="row">Kualitas Kerja dan Prestasi Kerja</th>
                                    <td class="text-center">
                                        <input value="5" class="form-check-input" type="radio" name="factors[kualitas_kerja_dan_prestasi_kerja]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['kualitas_kerja_dan_prestasi_kerja'] ?? null) == 5 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="4" class="form-check-input" type="radio" name="factors[kualitas_kerja_dan_prestasi_kerja]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['kualitas_kerja_dan_prestasi_kerja'] ?? null) == 4 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="3" class="form-check-input" type="radio" name="factors[kualitas_kerja_dan_prestasi_kerja]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['kualitas_kerja_dan_prestasi_kerja'] ?? null) == 3 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="2" class="form-check-input" type="radio" name="factors[kualitas_kerja_dan_prestasi_kerja]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['kualitas_kerja_dan_prestasi_kerja'] ?? null) == 2 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="1" class="form-check-input" type="radio" name="factors[kualitas_kerja_dan_prestasi_kerja]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['kualitas_kerja_dan_prestasi_kerja'] ?? null) == 1 ? 'checked' : ''}}>
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <th scope="row">Komitmen Terhadap Pekerjaan</th>
                                    <td class="text-center">
                                        <input value="5" class="form-check-input" type="radio" name="factors[komitmen_terhadap_pekerjaan]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['komitmen_terhadap_pekerjaan'] ?? null) == 5 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="4" class="form-check-input" type="radio" name="factors[komitmen_terhadap_pekerjaan]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['komitmen_terhadap_pekerjaan'] ?? null) == 4 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="3" class="form-check-input" type="radio" name="factors[komitmen_terhadap_pekerjaan]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['komitmen_terhadap_pekerjaan'] ?? null) == 3 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="2" class="form-check-input" type="radio" name="factors[komitmen_terhadap_pekerjaan]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['komitmen_terhadap_pekerjaan'] ?? null) == 2 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="1" class="form-check-input" type="radio" name="factors[komitmen_terhadap_pekerjaan]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['komitmen_terhadap_pekerjaan'] ?? null) == 1 ? 'checked' : ''}}>
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <th scope="row">Kreatifitas dan Inovasi</th>
                                    <td class="text-center">
                                        <input value="5" class="form-check-input" type="radio" name="factors[kreatifitas_dan_inovasi]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['kreatifitas_dan_inovasi'] ?? null) == 5 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="4" class="form-check-input" type="radio" name="factors[kreatifitas_dan_inovasi]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['kreatifitas_dan_inovasi'] ?? null) == 4 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="3" class="form-check-input" type="radio" name="factors[kreatifitas_dan_inovasi]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['kreatifitas_dan_inovasi'] ?? null) == 3 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="2" class="form-check-input" type="radio" name="factors[kreatifitas_dan_inovasi]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['kreatifitas_dan_inovasi'] ?? null) == 2 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="1" class="form-check-input" type="radio" name="factors[kreatifitas_dan_inovasi]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['kreatifitas_dan_inovasi'] ?? null) == 1 ? 'checked' : ''}}>
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <th scope="row">Pengembangan keahlian, ilmu pengetahuan dan pendidikan</th>
                                    <td class="text-center">
                                        <input value="5" class="form-check-input" type="radio" name="factors[pengembangan_keahlian_ilmu_pengetahuan_dan_pendidikan]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['pengembangan_keahlian_ilmu_pengetahuan_dan_pendidikan'] ?? null) == 5 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="4" class="form-check-input" type="radio" name="factors[pengembangan_keahlian_ilmu_pengetahuan_dan_pendidikan]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['pengembangan_keahlian_ilmu_pengetahuan_dan_pendidikan'] ?? null) == 4 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="3" class="form-check-input" type="radio" name="factors[pengembangan_keahlian_ilmu_pengetahuan_dan_pendidikan]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['pengembangan_keahlian_ilmu_pengetahuan_dan_pendidikan'] ?? null) == 3 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="2" class="form-check-input" type="radio" name="factors[pengembangan_keahlian_ilmu_pengetahuan_dan_pendidikan]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['pengembangan_keahlian_ilmu_pengetahuan_dan_pendidikan'] ?? null) == 2 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="1" class="form-check-input" type="radio" name="factors[pengembangan_keahlian_ilmu_pengetahuan_dan_pendidikan]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['pengembangan_keahlian_ilmu_pengetahuan_dan_pendidikan'] ?? null) == 1 ? 'checked' : ''}}>
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <th scope="row">Kegiatan Pengembangan Karakter<br>a. Team Building and Upgrading<br>b. Workshop/Training<br>c. Upacara 17 Agustus<br>(ketidakhadiran dalam kegiatan tersebut mengurangi nilai)</th>
                                    <td class="text-center">
                                        <input value="5" class="form-check-input" type="radio" name="factors[kegiatan_pengembangan_karakter]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['kegiatan_pengembangan_karakter'] ?? null) == 5 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="4" class="form-check-input" type="radio" name="factors[kegiatan_pengembangan_karakter]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['kegiatan_pengembangan_karakter'] ?? null) == 4 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="3" class="form-check-input" type="radio" name="factors[kegiatan_pengembangan_karakter]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['kegiatan_pengembangan_karakter'] ?? null) == 3 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="2" class="form-check-input" type="radio" name="factors[kegiatan_pengembangan_karakter]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['kegiatan_pengembangan_karakter'] ?? null) == 2 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="1" class="form-check-input" type="radio" name="factors[kegiatan_pengembangan_karakter]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['kegiatan_pengembangan_karakter'] ?? null) == 1 ? 'checked' : ''}}>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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
