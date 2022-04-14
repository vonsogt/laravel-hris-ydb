@extends('layouts.master')
@section('title')
    Lihat Slip Gaji
@endsection
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('assets/libs/swiper/swiper.min.css') }}">
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Dasbor @endslot
        @slot('title') Slip Gaji @endslot
        @slot('li_end') Lihat @endslot
    @endcomponent
    <div class="row d-print-none g-4 mb-5">
        <div class="col-sm-auto">
            <div>
                <a href="{{ route('salaries.index') }}" class="btn btn-soft-dark add-btn" id="create-btn"><i class="ri-arrow-left-s-line align-bottom me-1"></i> Kembali ke daftar slip gaji</a>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-xxl-9">
            <div class="card" id="demo">
                {{-- <div class="card-header border-bottom-dashed p-4">
                    <div class="d-sm-flex">
                        <div class="flex-grow-1">
                            <img src="{{ URL::asset('images/logo-group-darussalam-sm.png') }}" class="card-logo card-logo-dark"
                                alt="logo dark" height="100">
                            <img src="{{ URL::asset('images/logo-group-darussalam-sm.png') }}" class="card-logo card-logo-light"
                                alt="logo light" height="100">
                            <div class="mt-sm-5 mt-4">
                                <h6 class="text-muted text-uppercase fw-semibold">Address</h6>
                                <p class="text-muted mb-1">California, United States</p>
                                <p class="text-muted mb-0">Zip-code: 90201</p>
                            </div>
                        </div>
                        <div class="flex-shrink-0 mt-sm-0 mt-3">
                            <h6><span class="text-muted fw-normal">Legal Registration No:</span> 987654
                            </h6>
                            <h6><span class="text-muted fw-normal">Email:</span> velzon@themesbrand.com
                            </h6>
                            <h6><span class="text-muted fw-normal">Website:</span> <a
                                    href="https://themesbrand.com/" class="link-primary"
                                    target="_blank">www.themesbrand.com</a></h6>
                            <h6 class="mb-0"><span class="text-muted fw-normal">Contact No:</span> +(01)
                                234 6789</h6>
                        </div>
                    </div>
                </div>
                <!--end card-header--> --}}
                <div class="card-body p-4">
                    <div class="row g-3">
                        <!-- Small Tables -->
                        <table class="table table-sm table-nowrap table-borderless">
                            <thead>
                                <tr>
                                    <td colspan="3">
                                        <div class="row mb-4 d-print-none">
                                            <div class="text-end">
                                                <a href="javascript:window.print()" class="btn btn-success">
                                                    <i class="ri-printer-line align-bottom me-1"></i>
                                                    Cetak Slip
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-3">
                                                        <img src="{{ URL::asset('images/logo-group-darussalam-sm.png') }}" alt="" class="img-fluid d-block">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h4 class="mb-1 fw-medium text-danger">
                                                            SDIT 01 DARUSSALAM
                                                        </h4>
                                                        <h4 class="mb-1 fw-bold">
                                                            YAYASAN DARUSSALAM BATAM
                                                        </h4>
                                                        <p class="text-muted mb-0">Komplek Pendidikan Darussalam 2, Perumahan taman Jaya Asri, Batu Aji</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 text-end">
                                                <h5 class="fw-bold">SLIP GAJI</h5>
                                                <h5 class="fst-italic">{{ $salary->date }}</h5>
                                                <h5 class="text-danger">PRIVATE & CONFIDENTIAL</h5>
                                            </div>
                                        </div>
                                        <div style="margin-left:117px;border: 0;border-top: 3px solid "></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <div class="row" style="margin-bottom: -15px;">
                                            <div class="col-6">
                                                <dl class="row">
                                                    <dt class="col-sm-3">NIK</dt>
                                                    <dd class="col-sm-9">: &ensp;{{ $salary->employee->id_card ?? '-' }}</dd>

                                                    <dt class="col-sm-3">Jabatan</dt>
                                                    <dd class="col-sm-9 fw-bold text-uppercase">: &ensp;{{ $salary->employee->position->name ?? '-' }}</dd>
                                                </dl>
                                            </div>
                                            <div class="col-6">
                                                <dl class="row">
                                                    <dt class="col-sm-3">Nama Karyawan:</dt>
                                                    <dd class="col-sm-9">: &ensp;{{ $salary->employee->name ?? '-' }}</dd>

                                                    <dt class="col-sm-3">NPWP</dt>
                                                    <dd class="col-sm-9">: &ensp;-</dd>
                                                </dl>
                                            </div>
                                        </div>
                                        <div style="border: 0;border-top: 2px solid "></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <div class="row" style="margin-top: -7px">
                                            <div class="col-6">
                                                <span class="fw-bold">PENDAPATAN</span>
                                            </div>
                                            <div class="col-6">
                                                <span class="fw-bold">POTONGAN</span>
                                            </div>
                                        </div>
                                        <div style="border: 0;border-top: 5px double;"></div>

                                    </td>
                                </tr>
                            </thead>
                            <tbody style="border-top-width: 0">
                                <tr>
                                    <td colspan="3">
                                        <div class="row">
                                            <div class="col-6">
                                                @php
                                                    $totalIncomes = 0;
                                                    $totalCuts = 0;
                                                @endphp
                                                @forelse ($salary->incomes ?? [] as $item)
                                                    @php $totalIncomes += $item['value']; @endphp
                                                    <dl class="row" style="margin-bottom: -30px; padding-right: 50px">
                                                        <dt class="col-sm-1">{{ $loop->iteration }}</dt>
                                                        <dd class="col-sm-7">{{ $item['description'] }}</dd>
                                                        <dd class="col-sm-4">
                                                        <dl class="row">
                                                            <dd class="col-sm-2">Rp</dd>
                                                            <dd class="col-sm-10 text-end">{{ $item['value'] ? number_format($item['value'], '0', '.', ',') : '-' }}</dd>
                                                        </dl>
                                                        </dd>
                                                    </dl>
                                                @empty
                                                    -
                                                @endforelse
                                            </div>
                                            <div class="col-6">
                                                @forelse ($salary->cuts ?? [] as $item)
                                                    @php $totalCuts += $item['value']; @endphp
                                                    <dl class="row" style="margin-bottom: -30px; padding-right: 50px">
                                                        <dt class="col-sm-1">{{ $loop->iteration }}</dt>
                                                        <dd class="col-sm-7">{{ $item['description'] }}</dd>
                                                        <dd class="col-sm-4">
                                                        <dl class="row">
                                                            <dd class="col-sm-2">Rp</dd>
                                                            <dd class="col-sm-10 text-end">{{ $item['value'] ? number_format($item['value'], '0', '.', ',') : '-' }}</dd>
                                                        </dl>
                                                        </dd>
                                                    </dl>
                                                @empty
                                                    -
                                                @endforelse
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @if ($totalIncomes != 0 || $totalCuts != 0)
                                    <tr>
                                        <td colspan="3">
                                            <div class="row">
                                                <div class="col-6">
                                                    <dl class="row" style="margin-bottom: -30px; padding-right: 50px">
                                                        <dt class="col-sm-1"></dt>
                                                        <dt class="col-sm-7 pt-2">JUMLAH PENDAPATAN</dt>
                                                        <dd class="col-sm-4">
                                                            <dl class="row bg-soft-info">
                                                                <dt class="col-sm-2 pt-2">Rp</dt>
                                                                <dd class="col-sm-10 text-end pt-2">{{ number_format($totalIncomes, '0', '.', ',') }}</dd>
                                                            </dl>
                                                        </dd>
                                                    </dl>
                                                </div>
                                                <div class="col-6">
                                                    <dl class="row" style="margin-bottom: -30px; padding-right: 50px">
                                                        <dt class="col-sm-1"></dt>
                                                        <dt class="col-sm-7 pt-2">JUMLAH POTONGAN</dt>
                                                        <dd class="col-sm-4">
                                                            <dl class="row bg-soft-info">
                                                                <dt class="col-sm-2 pt-2">Rp</dt>
                                                                <dd class="col-sm-10 text-end pt-2">{{ number_format($totalCuts, '0', '.', ',') }}</dd>
                                                            </dl>
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            <div class="row pt-3">
                                                <div class="col-6">
                                                    <dl class="row" style="margin-bottom: -20px; padding-right: 50px">
                                                        <dt class="col-sm-1 pt-2"></dt>
                                                        <dt class="col-sm-5 pt-2">GAJI BERSIH</dt>
                                                        <dd class="col-sm-6">
                                                            <dl class="row bg-soft-dark">
                                                                <dt class="col-sm-2 pt-2">Rp</dt>
                                                                <dd class="col-sm-10 text-end pt-2">{{ number_format($totalIncomes - $totalCuts, '0', '.', ',') }}</dd>
                                                            </dl>
                                                        </dd>
                                                    </dl>
                                                    <div class="row text-end" style="padding-right: 40px">
                                                        @php
                                                            $sc = new \App\Http\Controllers\SalaryController;
                                                            $totalText = $sc->penyebut($totalIncomes - $totalCuts);
                                                        @endphp
                                                        <em class="fw-medium text-capitalize">({{ $totalText }})</em>
                                                    </div>
                                                </div>
                                                <div class="col-6 text-center">
                                                    Bendahara,
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <span class="fw-bold text-decoration-underline">Kurnia Candrawati, S.E.</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <!--end row-->
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
    </div>
    <!--end row-->
@endsection
@section('script')
    <script src="{{ URL::asset('assets/libs/swiper/swiper.min.js') }}"></script>

    <script src="{{ URL::asset('assets/js/pages/profile.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/df-number-format/2.1.6/jquery.number.min.js"></script>
@endsection
