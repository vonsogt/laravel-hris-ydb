@extends('layouts.master')
@section('title')
    Pegawai
@endsection
@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css"/>

    <style>
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            padding: 0.5rem 0.75rem;
            font-size: 0.875rem;
            line-height: 1.5;
            border-radius: 0.25rem;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button.current, .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
            color: #fff;
            background-color: #0d6efd;
            border-color: #0d6efd;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            color: #0d6efd;
            background-color: #e9ecef;
            border-color: #dee2e6;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.disabled, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active {
            color: #6c757d;
            cursor: default;
            background-color: #fff;
            border-color: #dee2e6;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button:first-child {
            margin-left: 0;
            border-top-left-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button:last-child {
            border-top-right-radius: 0.25rem;
            border-bottom-right-radius: 0.25rem;
        }

        .dataTables_wrapper .dataTables_paginate .ellipsis {
            padding: 0.5rem 0.75rem;
            font-size: 0.875rem;
            line-height: 1.5;
            border-radius: 0.25rem;
            color: #6c757d;
            cursor: default;
            background-color: #fff;
            border-color: #dee2e6;
        }

        .dataTables_wrapper .dataTables_info {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            margin-top: 0;
            margin-bottom: 0;
            font-size: 0.875rem;
            line-height: 1.5;
        }

        .dataTables_wrapper .dataTables_length {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            margin-top: 0;
            margin-bottom: 0;
            font-size: 0.875rem;
            line-height: 1.5;
        }

        .dataTables_wrapper .dataTables_length select {
            width: 75px;
            display: inline-block;
        }

        .dataTables_wrapper .dataTables_filter {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            margin-top: 0;
            margin-bottom: 0;
            font-size: 0.875rem;
            line-height: 1.5;
        }

        .dataTables_wrapper .dataTables_filter input {
            margin-left: 0.5rem;
            display: inline-block;
            width: auto;
            vertical-align: middle;
        }

        .dataTables_wrapper .dataTables_processing {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            height: 40px;
            margin-left: -50%;
            margin-top: -25px;
            padding-top: 20px;
            text-align: center;
            font-size: 1.2em;
            background-color: white;
            background: -webkit-gradient(linear, left top, right top, color-stop(0%, rgba(255, 255, 255, 0)), color-stop(50%, rgba(255, 255, 255, 0.9)), color-stop(100%, rgba(255, 255, 255, 0)));
            background: -webkit-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 50%, rgba(255, 255, 255, 0) 100%);
            background: -o-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 50%, rgba(255, 255, 255, 0) 100%);
            background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 50%, rgba(255, 255, 255, 0) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00ffffff', endColorstr='#00ffffff', GradientType=1);
        }

        .dataTables_wrapper .dataTables_scroll {
            clear: both;
        }

        .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody {
            -webkit-overflow-scrolling: touch;
        }

        .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody table {
            margin-bottom: 0 !important;
            margin-top: 0 !important;
            border-top: 0;
            border-left: 0;
            border-right: 0;
        }

        .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody table.dataTable th, .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody table.dataTable td {
            vertical-align: middle;
        }

        .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody table.dataTable thead th, .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody table.dataTable thead td {
            border-bottom-width: 0;
        }

        .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody table.dataTable tbody th, .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody table.dataTable tbody td {
            border-top-width: 0;
        }

        .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody table.dataTable.no-footer {
            border-bottom-width: 0;
        }

        .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody table.dataTable.no-footer tbody th, .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody table.dataTable.no-footer tbody td {
            border-bottom-width: 0;
        }

        .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody table.dataTable.no-footer tr:last-child th, .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody table.dataTable.no-footer tr:last-child td {
            border-bottom-width: 0;
        }

    </style>

@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Dasbor @endslot
        @slot('title') Pegawai @endslot
        @slot('li_end') Daftar @endslot
    @endcomponent

    @if (auth()->getDefaultDriver() == 'web')
        <div class="row g-4 mb-3">
            <div class="col-sm-auto">
                <div>
                    <a href="{{ route('employees.create') }}" class="btn btn-success add-btn" id="create-btn"><i class="ri-add-line align-bottom me-1"></i> Tambah pegawai</a>
                </div>
            </div>
            <div class="col-sm-auto ms-auto">
                <div class="hstack gap-2">
                    <button type="button" class="btn btn-info" data-bs-toggle="offcanvas" href="#offcanvasExample"><i class="ri-filter-3-line align-bottom me-1"></i> Fliters</button>
                </div>
            </div>
        </div>
    @else
        <div class="row g-4 mb-3">
            <div class="col-sm-auto">
                <div>
                    <a href="{{ route('employee.employees.show', auth()->user()->id) }}" class="btn btn-primary add-btn" id="create-btn"><i class="ri-eye-line align-bottom me-1"></i> Detail Pegawai Saya</a>
                </div>
            </div>
            <div class="col-sm-auto ms-auto">
                <div class="hstack gap-2">
                    <div class="float-end">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-file-download-line align-middle me-1"></i> Export
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="{{ route('employee.employees.export', ['type' => 'xlsx']) }}" id="export-excel"><i class="ri-file-excel-2-line align-middle me-1"></i> Excel</a>
                                <a class="dropdown-item" href="{{ route('employee.employees.export', ['type' => 'pdf']) }}" id="export-pdf"><i class="ri-file-pdf-line align-middle me-1"></i> PDF</a>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-info" data-bs-toggle="offcanvas" href="#offcanvasExample"><i class="ri-filter-3-line align-bottom me-1"></i> Fliters</button>
                </div>
            </div>
        </div>
    @endif
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header bg-light">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Filter Pegawai</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!--end offcanvas-header-->
        <form id="filter-employee" action="" class="d-flex flex-column justify-content-end h-100">
            <div class="offcanvas-body">
                <div class="mb-4">
                    <label for="filter-by-" class="form-label text-muted text-uppercase fw-semibold mb-3">Lembaga</label>
                    <select class="form-select mb-3" id="filter-by-institution" aria-label="Default select example">
                        <option selected="" disabled>Pilih Lembaga</option>
                        @foreach ($institutionOptions as $key => $value)
                            <option value="{{ $value }}">{{ $value }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <!--end offcanvas-body-->
            <div class="offcanvas-footer border-top p-3 text-center hstack gap-2">
                <a href="javascript:void(0)" id="clearFilter" class="btn btn-danger w-100">Hapus Filter</a>
                <button type="submit" class="btn btn-success w-100">Terapkan Filter</button>
            </div>
            <!--end offcanvas-footer-->
        </form>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div id="customerList">

                        <div class="mt-3 mb-1">
                            <div class="table-responsive">
                                <table class="table align-middle table-nowrap" id="employeeTable">
                                    <thead class="table-light">
                                        <tr>
                                            <th></th>
                                            {{-- <th>ID</th> --}}
                                            <th>NIY</th>
                                            <th>Lembaga</th>
                                            <th>Jabatan</th>
                                            <th>Nama Lengkap</th>
                                            <th>Bergabung</th>
                                            @if (auth()->getDefaultDriver() == 'web')
                                                <th>Aksi</th>
                                            @endif
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>

                    </div>
                </div><!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
@endsection
@section('script')
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>

    <!-- Datatables -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>

    <!-- Datatables Buttons -->
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.bootstrap5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.colVis.min.js"></script>
    {{-- <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.flash.min.js"></script> --}}
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(function() {

            var table = $('#employeeTable').DataTable({

                responsive: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ auth()->getDefaultDriver() == 'api' ? route('employee.employees.index') : route('employees.index') }}",
                    data: function (d) {
                        d.month = "{{ request()->bulan }}";
                        d.year = "{{ request()->tahun }}";
                    }
                },
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'pdf', 'print'
                ],
                columns: [
                    {
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    // {
                    //     data: 'id',
                    //     name: 'id'
                    // },
                    {
                        data: 'institution_number',
                        name: 'institution_number'
                    },
                    {
                        data: 'institution_name',
                        name: 'institution_name'
                    },
                    {
                        data: 'position_name',
                        name: 'position_name'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'join_date',
                        name: 'join_date'
                    },
                    @if (auth()->getDefaultDriver() == 'web')
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false
                        },
                    @endif
                ],
                language: {
                    "emptyTable": "Tidak ada data yang tersedia pada tabel ini",
                    "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                    "infoEmpty": "Menampilkan 0 sampai 0 dari 0 entri",
                    "infoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
                    "lengthMenu": "Tampilkan _MENU_ entri",
                    "loadingRecords": "Sedang memuat...",
                    "processing": "Sedang memproses...",
                    "search": "Cari:",
                    "zeroRecords": "Tidak ditemukan data yang sesuai",
                    "thousands": "'",
                    "paginate": {
                        "first": "Pertama",
                        "last": "Terakhir",
                        "next": "Selanjutnya",
                        "previous": "Sebelumnya"
                    },
                    "aria": {
                        "sortAscending": ": aktifkan untuk mengurutkan kolom ke atas",
                        "sortDescending": ": aktifkan untuk mengurutkan kolom menurun"
                    },
                    "autoFill": {
                        "cancel": "Batalkan",
                        "fill": "Isi semua sel dengan <i>%d<\/i>",
                        "fillHorizontal": "Isi sel secara horizontal",
                        "fillVertical": "Isi sel secara vertikal"
                    },
                    "buttons": {
                        "collection": "Kumpulan <span class='ui-button-icon-primary ui-icon ui-icon-triangle-1-s'\/>",
                        "colvis": "Visibilitas Kolom",
                        "colvisRestore": "Kembalikan visibilitas",
                        "copy": "Salin",
                        "copySuccess": {
                            "1": "1 baris disalin ke papan klip",
                            "_": "%d baris disalin ke papan klip"
                        },
                        "copyTitle": "Salin ke Papan klip",
                        "csv": "CSV",
                        "excel": "Excel",
                        "pageLength": {
                            "-1": "Tampilkan semua baris",
                            "_": "Tampilkan %d baris"
                        },
                        "pdf": "PDF",
                        "print": "Cetak",
                        "copyKeys": "Tekan ctrl atau u2318 + C untuk menyalin tabel ke papan klip.<br \/><br \/>Untuk membatalkan, klik pesan ini atau tekan esc."
                    },
                    "searchBuilder": {
                        "add": "Tambah Kondisi",
                        "button": {
                            "0": "Cari Builder",
                            "_": "Cari Builder (%d)"
                        },
                        "clearAll": "Bersihkan Semua",
                        "condition": "Kondisi",
                        "data": "Data",
                        "deleteTitle": "Hapus filter",
                        "leftTitle": "Ke Kiri",
                        "logicAnd": "Dan",
                        "logicOr": "Atau",
                        "rightTitle": "Ke Kanan",
                        "title": {
                            "0": "Cari Builder",
                            "_": "Cari Builder (%d)"
                        },
                        "value": "Nilai",
                        "conditions": {
                            "date": {
                                "after": "Setelah",
                                "before": "Sebelum",
                                "between": "Diantara",
                                "empty": "Kosong",
                                "equals": "Sama dengan",
                                "not": "Tidak sama",
                                "notBetween": "Tidak diantara",
                                "notEmpty": "Tidak kosong"
                            },
                            "number": {
                                "between": "Diantara",
                                "empty": "Kosong",
                                "equals": "Sama dengan",
                                "gt": "Lebih besar dari",
                                "gte": "Lebih besar atau sama dengan",
                                "lt": "Lebih kecil dari",
                                "lte": "Lebih kecil atau sama dengan",
                                "not": "Tidak sama",
                                "notBetween": "Tidak diantara",
                                "notEmpty": "Tidak kosong"
                            },
                            "string": {
                                "contains": "Berisi",
                                "empty": "Kosong",
                                "endsWith": "Diakhiri dengan",
                                "equals": "Sama Dengan",
                                "not": "Tidak sama",
                                "notEmpty": "Tidak kosong",
                                "startsWith": "Diawali dengan"
                            },
                            "array": {
                                "equals": "Sama dengan",
                                "empty": "Kosong",
                                "contains": "Berisi",
                                "not": "Tidak",
                                "notEmpty": "Tidak kosong",
                                "without": "Tanpa"
                            }
                        }
                    },
                    "searchPanes": {
                        "clearMessage": "Bersihkan Semua",
                        "count": "{total}",
                        "countFiltered": "{shown} ({total})",
                        "title": "Filter Aktif - %d",
                        "collapse": {
                            "0": "Panel Pencarian",
                            "_": "Panel Pencarian (%d)"
                        },
                        "emptyPanes": "Tidak Ada Panel Pencarian",
                        "loadMessage": "Memuat Panel Pencarian"
                    },
                    "infoThousands": ",",
                    "select": {
                        "cells": {
                            "1": "1 sel terpilih",
                            "_": "%d sel terpilih"
                        },
                        "columns": {
                            "1": "1 kolom terpilih",
                            "_": "%d kolom terpilih"
                        }
                    },
                    "datetime": {
                        "previous": "Sebelumnya",
                        "next": "Selanjutnya",
                        "hours": "Jam",
                        "minutes": "Menit",
                        "seconds": "Detik",
                        "unknown": "-",
                        "amPm": [
                            "am",
                            "pm"
                        ],
                        "weekdays": [
                            "Min",
                            "Sen",
                            "Sel",
                            "Rab",
                            "Kam",
                            "Jum",
                            "Sab"
                        ],
                        "months": [
                            "Januari",
                            "Februari",
                            "Maret",
                            "April",
                            "Mei",
                            "Juni",
                            "Juli",
                            "Agustus",
                            "September",
                            "Oktober",
                            "November",
                            "Desember"
                        ]
                    },
                    "editor": {
                        "close": "Tutup",
                        "create": {
                            "button": "Tambah",
                            "submit": "Tambah",
                            "title": "Tambah inputan baru"
                        },
                        "remove": {
                            "button": "Hapus",
                            "submit": "Hapus",
                            "confirm": {
                                "_": "Apakah Anda yakin untuk menghapus %d baris?",
                                "1": "Apakah Anda yakin untuk menghapus 1 baris?"
                            },
                            "title": "Hapus inputan"
                        },
                        "multi": {
                            "title": "Beberapa Nilai",
                            "info": "Item yang dipilih berisi nilai yang berbeda untuk input ini. Untuk mengedit dan mengatur semua item untuk input ini ke nilai yang sama, klik atau tekan di sini, jika tidak maka akan mempertahankan nilai masing-masing.",
                            "restore": "Batalkan Perubahan",
                            "noMulti": "Masukan ini dapat diubah satu per satu, tetapi bukan bagian dari grup."
                        },
                        "edit": {
                            "title": "Edit inputan",
                            "submit": "Edit",
                            "button": "Edit"
                        },
                        "error": {
                            "system": "Terjadi kesalahan pada system. (<a target=\"\\\" rel=\"\\ nofollow\" href=\"\\\">Informasi Selebihnya<\/a>)."
                        }
                    }
                }
            });
        });

        $.fn.dataTable.render.ellipsis = function() {
            return function(data, type, row) {
                return type === 'display' && data.length > 100 ?
                    data.substr(0, 100) + '…' :
                    data;
            }
        };

        // DeleteButton
        function deleteEntry(button) {

            var route = $(button).attr('data-route');

            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Apakah Anda yakin ingin menghapus item ini?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: "POST",
                        data: {
                            _method: "DELETE",
                        },
                        url: route,
                        success: function(response) {
                            if (response == 1) {
                                // Show success notification
                                Toastify({
                                    text: "Item berhasil dihapus!",
                                    className: "info",
                                    style: {
                                        background: "linear-gradient(to right, #00b09b, #96c93d)",
                                    }
                                }).showToast();

                                // remove current table row and draw table again
                                var table = $('#employeeTable').DataTable()
                                table.row($(button).parents('tr')).remove().draw(false);
                            } else {
                                Swal.fire({
                                    title: 'TIDAK Dihapus!',
                                    text: 'Terjadi kesalahan.',
                                    icon: 'error',
                                    timer: 4000,
                                    showConfirmButton: false,
                                })
                            }
                        },
                        error: function(response) {
                            Swal.fire({
                                title: 'TIDAK Dihapus!',
                                text: 'Terjadi kesalahan.',
                                icon: 'error',
                                timer: 4000,
                                showConfirmButton: false,
                            })
                        }
                    })
                }
            })
        }

        // Filters
        $('#filter-employee').on('submit', function(e) {
            e.preventDefault();

            // Get value from #filter-by-institution
            var institution = $('#filter-by-institution').val();

            // Validate if at least one filter is selected
            if (institution == null) {
                Swal.fire({
                    html: 'Pilih minimal satu filter',
                    showCancelButton: true,
                    showConfirmButton: false,
                    cancelButtonClass: 'btn btn-primary w-xs mb-1',
                    cancelButtonText: 'Tutup',
                    buttonsStyling: false,
                    showCloseButton: true
                })
                return;
            }

            // Filter datatable
            var table = $('#employeeTable').DataTable();
            table.column(2).search(institution).draw();

            $('#filter-employee').parent().find('[data-bs-dismiss="offcanvas"]').click();

        });

        $("#clearFilter").on('click', function() {
            var table = $('#employeeTable').DataTable();

            // Select the first option in #filter-by-institution
            $('#filter-by-institution').val($('#filter-by-institution option:first').val());

            table.column(2).search('').draw();
            $('#filter-employee').parent().find('[data-bs-dismiss="offcanvas"]').click();
        });

    </script>

    <script>
        @if (Session::has('message'))
            Toastify({
                text: "{{ session('message') }}",
                className: "info",
                style: {
                    background: "linear-gradient(to right, #00b09b, #96c93d)",
                }
            }).showToast();
        @endif

        @if (Session::has('error'))
            Toastify({
                text: "{{ session('error') }}",
                className: "info",
                style: {
                    background: "#f06548",
                }
            }).showToast();
        @endif

        @if (Session::has('info'))
            Toastify({
                text: "{{ session('info') }}",
                className: "info",
                style: {
                    background: "#299cdb",
                }
            }).showToast();
        @endif

        @if (Session::has('warning'))
            Toastify({
                text: "{{ session('warning') }}",
                className: "info",
                style: {
                    background: "#f7b84b",
                }
            }).showToast();
        @endif
    </script>
@endsection
