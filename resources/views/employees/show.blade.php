@extends('layouts.master')
@section('title')
    Lihat Pegawai
@endsection
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('assets/libs/swiper/swiper.min.css') }}">
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Dasbor @endslot
        @slot('title') Pegawai @endslot
        @slot('li_end') Lihat @endslot
    @endcomponent

    <div class="row g-4 mb-5">
        <div class="col-sm-auto">
            <div>
                <a href="{{ auth()->getDefaultDriver() == 'api' ? route('employee.employees.index') : route('employees.index') }}" class="btn btn-soft-dark add-btn" id="create-btn"><i class="ri-arrow-left-s-line align-bottom me-1"></i> Kembali ke daftar pegawai</a>
            </div>
        </div>
    </div>

    <div class="profile-foreground position-relative mx-n4 mt-n4">
        <div class="profile-wid-bg">
            <img src="{{ URL::asset('assets/images/profile-bg.jpg') }}" alt="" class="profile-wid-img" />
        </div>
    </div>
    <div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
        <div class="row g-4">
            <div class="col-auto">
                <div class="avatar-lg">
                    <img src="{{ $employee->photo ? asset('uploads/images/' . $employee->photo) : URL::asset('assets/images/users/avatar-1.jpg') }}" alt="user-img"
                        class="img-thumbnail rounded-circle" />
                </div>
            </div>
            <!--end col-->
            <div class="col">
                <div class="p-2">
                    <h3 class="text-white mb-1">{{ $employee->name }}</h3>
                    <p class="text-white-75">{{ $employee->position->name }}</p>
                </div>
            </div>
            <!--end col-->

        </div>
        <!--end row-->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div>
                <div class="d-flex">
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1"
                        role="tablist">
                    </ul>
                    <div class="flex-shrink-0">
                        <a href="{{ auth()->getDefaultDriver() == 'api' ? route('employee.employees.edit', $employee->id) : route('employees.edit', $employee->id) }}" class="btn btn-success"><i
                                class="ri-edit-box-line align-bottom"></i> Ubah</a>
                    </div>
                </div>
                <!-- Tab panes -->
                <div class="tab-content pt-4 text-muted">
                    <div class="tab-pane active" id="overview-tab" role="tabpanel">
                        <div class="row">
                            <div class="col-xxl-12">

                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-borderless mb-0">
                                                <tbody>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Nama</th>
                                                        <td>: <span class="text-muted">{{ $employee->name ?? '-' }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">NIY</th>
                                                        <td>: <span class="text-muted">{{ $employee->institution_number ?? '-' }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Email</th>
                                                        <td>: <span class="text-muted">{{ $employee->email ?? '-' }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Nomor KTP</th>
                                                        <td>: <span class="text-muted">{{ $employee->id_card ?? '-' }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">NUPTK</th>
                                                        <td>: <span class="text-muted">{{ $employee->education_personnel_number ?? '-' }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Tempat Lahir</th>
                                                        <td>: <span class="text-muted">{{ $employee->birth_place ?? '-' }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Tanggal Lahir</th>
                                                        <td>: <span class="text-muted">{{ $employee->birth_date ? \Carbon\Carbon::make($employee->birth_date)->format('d M Y') : '' }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Jenis Kelamin</th>
                                                        <td>: <span class="text-muted">{{ $employee->gender !== null ? \App\Enums\Gender::getDescription((int) $employee->gender) : '-' }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Pendidikan</th>
                                                        <td>: <span class="text-muted text-uppercase">{{ \App\Enums\Education::getDescription((int) $employee->education) ?? '-' }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Gol Darah</th>
                                                        <td>: <span class="text-muted text-uppercase">{{ $employee->blood_type ? \App\Enums\BloodType::getDescription($employee->blood_type) : '-' }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Bergabung</th>
                                                        <td>: <span class="text-muted">{{ $employee->join_date ? \Carbon\Carbon::make($employee->join_date)->format('d M Y') : '-' }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Akhir Kontrak</th>
                                                        <td>: <span class="text-muted">{{ $employee->end_date ? \Carbon\Carbon::make($employee->end_date)->format('d M Y') : '-' }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Lembaga</th>
                                                        <td>: <span class="text-muted">{{ $employee->institution->name }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Jabatan</th>
                                                        <td>: <span class="text-muted">{{ $employee->position->name }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Alamat</th>
                                                        <td>: <span class="text-muted">{{ $employee->address ?? '-' }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Status</th>
                                                        <td>: <span class="text-muted">{{ $employee->status ?? '-' }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Nomor HP</th>
                                                        <td>: <span class="text-muted">{{ $employee->phone_number ?? '-' }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Nama Ibu Kandung</th>
                                                        <td>: <span class="text-muted">{{ $employee->mother_name }}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Nama Suami/Istri</th>
                                                        <td>: <span class="text-muted">{{ $employee->partner_name }}</span></td>
                                                    </tr>
                                                    @forelse ($employee->children_name ?? [] as $child_name)
                                                        <tr>
                                                            <th class="ps-0" scope="row">Nama Anak Ke-{{ $loop->iteration }}</th>
                                                            <td>: <span class="text-muted">{{ $child_name }}</span></td>
                                                        </tr>
                                                    @empty

                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                </div>
                <!--end tab-content-->
            </div>
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
