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
                <a href="{{ auth()->getDefaultDriver() == 'api' ? route('employee.job-assessments.index') : route('job-assessments.index') }}" class="btn btn-soft-dark add-btn" id="create-btn"><i class="ri-arrow-left-s-line align-bottom me-1"></i> Kembali ke daftar penilaian kerja</a>
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

                    <!-- Bordered Tables -->
                    <div class="table-responsive mt-4">
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
                                        <input value="5" class="form-check-input disabled" disabled type="radio" name="factors[administrasi]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['administrasi'] ?? null) == 5 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="4" class="form-check-input disabled" disabled type="radio" name="factors[administrasi]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['administrasi'] ?? null) == 4 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="3" class="form-check-input disabled" disabled type="radio" name="factors[administrasi]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['administrasi'] ?? null) == 3 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="2" class="form-check-input disabled" disabled type="radio" name="factors[administrasi]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['administrasi'] ?? null) == 2 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="1" class="form-check-input disabled" disabled type="radio" name="factors[administrasi]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['administrasi'] ?? null) == 1 ? 'checked' : ''}}>
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <th scope="row">Hubungan dengan Atasan</th>
                                    <td class="text-center">
                                        <input value="5" class="form-check-input disabled" disabled type="radio" name="factors[hubungan_dengan_atasan]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['hubungan_dengan_atasan'] ?? null) == 5 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="4" class="form-check-input disabled" disabled type="radio" name="factors[hubungan_dengan_atasan]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['hubungan_dengan_atasan'] ?? null) == 4 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="3" class="form-check-input disabled" disabled type="radio" name="factors[hubungan_dengan_atasan]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['hubungan_dengan_atasan'] ?? null) == 3 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="2" class="form-check-input disabled" disabled type="radio" name="factors[hubungan_dengan_atasan]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['hubungan_dengan_atasan'] ?? null) == 2 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="1" class="form-check-input disabled" disabled type="radio" name="factors[hubungan_dengan_atasan]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['hubungan_dengan_atasan'] ?? null) == 1 ? 'checked' : ''}}>
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <th scope="row">Hubungan dengan Teman Sejawat</th>
                                    <td class="text-center">
                                        <input value="5" class="form-check-input disabled" disabled type="radio" name="factors[hubungan_dengan_teman_sejawat]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['hubungan_dengan_teman_sejawat'] ?? null) == 5 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="4" class="form-check-input disabled" disabled type="radio" name="factors[hubungan_dengan_teman_sejawat]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['hubungan_dengan_teman_sejawat'] ?? null) == 4 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="3" class="form-check-input disabled" disabled type="radio" name="factors[hubungan_dengan_teman_sejawat]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['hubungan_dengan_teman_sejawat'] ?? null) == 3 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="2" class="form-check-input disabled" disabled type="radio" name="factors[hubungan_dengan_teman_sejawat]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['hubungan_dengan_teman_sejawat'] ?? null) == 2 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="1" class="form-check-input disabled" disabled type="radio" name="factors[hubungan_dengan_teman_sejawat]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['hubungan_dengan_teman_sejawat'] ?? null) == 1 ? 'checked' : ''}}>
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <th scope="row">Hubungan dengan Peserta Didik</th>
                                    <td class="text-center">
                                        <input value="5" class="form-check-input disabled" disabled type="radio" name="factors[hubungan_dengan_peserta_didik]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['hubungan_dengan_peserta_didik'] ?? null) == 5 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="4" class="form-check-input disabled" disabled type="radio" name="factors[hubungan_dengan_peserta_didik]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['hubungan_dengan_peserta_didik'] ?? null) == 4 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="3" class="form-check-input disabled" disabled type="radio" name="factors[hubungan_dengan_peserta_didik]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['hubungan_dengan_peserta_didik'] ?? null) == 3 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="2" class="form-check-input disabled" disabled type="radio" name="factors[hubungan_dengan_peserta_didik]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['hubungan_dengan_peserta_didik'] ?? null) == 2 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="1" class="form-check-input disabled" disabled type="radio" name="factors[hubungan_dengan_peserta_didik]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['hubungan_dengan_peserta_didik'] ?? null) == 1 ? 'checked' : ''}}>
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <th scope="row">Sikap dan Kerjasama</th>
                                    <td class="text-center">
                                        <input value="5" class="form-check-input disabled" disabled type="radio" name="factors[sikap_dan_kerja_sama]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['sikap_dan_kerja_sama'] ?? null) == 5 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="4" class="form-check-input disabled" disabled type="radio" name="factors[sikap_dan_kerja_sama]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['sikap_dan_kerja_sama'] ?? null) == 4 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="3" class="form-check-input disabled" disabled type="radio" name="factors[sikap_dan_kerja_sama]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['sikap_dan_kerja_sama'] ?? null) == 3 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="2" class="form-check-input disabled" disabled type="radio" name="factors[sikap_dan_kerja_sama]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['sikap_dan_kerja_sama'] ?? null) == 2 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="1" class="form-check-input disabled" disabled type="radio" name="factors[sikap_dan_kerja_sama]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['sikap_dan_kerja_sama'] ?? null) == 1 ? 'checked' : ''}}>
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <th scope="row">Motivasi dan Inisiatif</th>
                                    <td class="text-center">
                                        <input value="5" class="form-check-input disabled" disabled type="radio" name="factors[motivasi_dan_inisiatif]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['motivasi_dan_inisiatif'] ?? null) == 5 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="4" class="form-check-input disabled" disabled type="radio" name="factors[motivasi_dan_inisiatif]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['motivasi_dan_inisiatif'] ?? null) == 4 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="3" class="form-check-input disabled" disabled type="radio" name="factors[motivasi_dan_inisiatif]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['motivasi_dan_inisiatif'] ?? null) == 3 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="2" class="form-check-input disabled" disabled type="radio" name="factors[motivasi_dan_inisiatif]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['motivasi_dan_inisiatif'] ?? null) == 2 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="1" class="form-check-input disabled" disabled type="radio" name="factors[motivasi_dan_inisiatif]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['motivasi_dan_inisiatif'] ?? null) == 1 ? 'checked' : ''}}>
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <th scope="row">Disiplin</th>
                                    <td class="text-center">
                                        <input value="5" class="form-check-input disabled" disabled type="radio" name="factors[disiplin]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['disiplin'] ?? null) == 5 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="4" class="form-check-input disabled" disabled type="radio" name="factors[disiplin]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['disiplin'] ?? null) == 4 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="3" class="form-check-input disabled" disabled type="radio" name="factors[disiplin]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['disiplin'] ?? null) == 3 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="2" class="form-check-input disabled" disabled type="radio" name="factors[disiplin]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['disiplin'] ?? null) == 2 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="1" class="form-check-input disabled" disabled type="radio" name="factors[disiplin]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['disiplin'] ?? null) == 1 ? 'checked' : ''}}>
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <th scope="row">Kualitas Kerja dan Prestasi Kerja</th>
                                    <td class="text-center">
                                        <input value="5" class="form-check-input disabled" disabled type="radio" name="factors[kualitas_kerja_dan_prestasi_kerja]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['kualitas_kerja_dan_prestasi_kerja'] ?? null) == 5 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="4" class="form-check-input disabled" disabled type="radio" name="factors[kualitas_kerja_dan_prestasi_kerja]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['kualitas_kerja_dan_prestasi_kerja'] ?? null) == 4 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="3" class="form-check-input disabled" disabled type="radio" name="factors[kualitas_kerja_dan_prestasi_kerja]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['kualitas_kerja_dan_prestasi_kerja'] ?? null) == 3 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="2" class="form-check-input disabled" disabled type="radio" name="factors[kualitas_kerja_dan_prestasi_kerja]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['kualitas_kerja_dan_prestasi_kerja'] ?? null) == 2 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="1" class="form-check-input disabled" disabled type="radio" name="factors[kualitas_kerja_dan_prestasi_kerja]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['kualitas_kerja_dan_prestasi_kerja'] ?? null) == 1 ? 'checked' : ''}}>
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <th scope="row">Komitmen Terhadap Pekerjaan</th>
                                    <td class="text-center">
                                        <input value="5" class="form-check-input disabled" disabled type="radio" name="factors[komitmen_terhadap_pekerjaan]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['komitmen_terhadap_pekerjaan'] ?? null) == 5 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="4" class="form-check-input disabled" disabled type="radio" name="factors[komitmen_terhadap_pekerjaan]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['komitmen_terhadap_pekerjaan'] ?? null) == 4 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="3" class="form-check-input disabled" disabled type="radio" name="factors[komitmen_terhadap_pekerjaan]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['komitmen_terhadap_pekerjaan'] ?? null) == 3 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="2" class="form-check-input disabled" disabled type="radio" name="factors[komitmen_terhadap_pekerjaan]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['komitmen_terhadap_pekerjaan'] ?? null) == 2 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="1" class="form-check-input disabled" disabled type="radio" name="factors[komitmen_terhadap_pekerjaan]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['komitmen_terhadap_pekerjaan'] ?? null) == 1 ? 'checked' : ''}}>
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <th scope="row">Kreatifitas dan Inovasi</th>
                                    <td class="text-center">
                                        <input value="5" class="form-check-input disabled" disabled type="radio" name="factors[kreatifitas_dan_inovasi]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['kreatifitas_dan_inovasi'] ?? null) == 5 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="4" class="form-check-input disabled" disabled type="radio" name="factors[kreatifitas_dan_inovasi]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['kreatifitas_dan_inovasi'] ?? null) == 4 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="3" class="form-check-input disabled" disabled type="radio" name="factors[kreatifitas_dan_inovasi]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['kreatifitas_dan_inovasi'] ?? null) == 3 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="2" class="form-check-input disabled" disabled type="radio" name="factors[kreatifitas_dan_inovasi]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['kreatifitas_dan_inovasi'] ?? null) == 2 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="1" class="form-check-input disabled" disabled type="radio" name="factors[kreatifitas_dan_inovasi]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['kreatifitas_dan_inovasi'] ?? null) == 1 ? 'checked' : ''}}>
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <th scope="row">Pengembangan keahlian, ilmu pengetahuan dan pendidikan</th>
                                    <td class="text-center">
                                        <input value="5" class="form-check-input disabled" disabled type="radio" name="factors[pengembangan_keahlian_ilmu_pengetahuan_dan_pendidikan]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['pengembangan_keahlian_ilmu_pengetahuan_dan_pendidikan'] ?? null) == 5 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="4" class="form-check-input disabled" disabled type="radio" name="factors[pengembangan_keahlian_ilmu_pengetahuan_dan_pendidikan]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['pengembangan_keahlian_ilmu_pengetahuan_dan_pendidikan'] ?? null) == 4 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="3" class="form-check-input disabled" disabled type="radio" name="factors[pengembangan_keahlian_ilmu_pengetahuan_dan_pendidikan]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['pengembangan_keahlian_ilmu_pengetahuan_dan_pendidikan'] ?? null) == 3 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="2" class="form-check-input disabled" disabled type="radio" name="factors[pengembangan_keahlian_ilmu_pengetahuan_dan_pendidikan]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['pengembangan_keahlian_ilmu_pengetahuan_dan_pendidikan'] ?? null) == 2 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="1" class="form-check-input disabled" disabled type="radio" name="factors[pengembangan_keahlian_ilmu_pengetahuan_dan_pendidikan]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['pengembangan_keahlian_ilmu_pengetahuan_dan_pendidikan'] ?? null) == 1 ? 'checked' : ''}}>
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <th scope="row">Kegiatan Pengembangan Karakter<br>a. Team Building and Upgrading<br>b. Workshop/Training<br>c. Upacara 17 Agustus<br>(ketidakhadiran dalam kegiatan tersebut mengurangi nilai)</th>
                                    <td class="text-center">
                                        <input value="5" class="form-check-input disabled" disabled type="radio" name="factors[kegiatan_pengembangan_karakter]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['kegiatan_pengembangan_karakter'] ?? null) == 5 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="4" class="form-check-input disabled" disabled type="radio" name="factors[kegiatan_pengembangan_karakter]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['kegiatan_pengembangan_karakter'] ?? null) == 4 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="3" class="form-check-input disabled" disabled type="radio" name="factors[kegiatan_pengembangan_karakter]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['kegiatan_pengembangan_karakter'] ?? null) == 3 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="2" class="form-check-input disabled" disabled type="radio" name="factors[kegiatan_pengembangan_karakter]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['kegiatan_pengembangan_karakter'] ?? null) == 2 ? 'checked' : ''}}>
                                    </td>
                                    <td class="text-center">
                                        <input value="1" class="form-check-input disabled" disabled type="radio" name="factors[kegiatan_pengembangan_karakter]" id="flexRadioQuestion1" required {{ (old('factors', $jobAssessment->factors ?? [])['kegiatan_pengembangan_karakter'] ?? null) == 1 ? 'checked' : ''}}>
                                    </td>
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
