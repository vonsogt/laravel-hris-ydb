<!doctype html >
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Layout config Js -->
    <script src="{{ asset('assets/js/layout.min.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ URL::asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ URL::asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ URL::asset('assets/css/custom.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
</head>
<body>

    <div class="row justify-content-center">
        <div class="col-xxl-9">
            <div class="card" id="demo">
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
                                                        {{-- <img src="{{ URL::asset('images/logo-group-darussalam-sm.png') }}" alt="" class="img-fluid d-block"> --}}
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
</body>

</html>
