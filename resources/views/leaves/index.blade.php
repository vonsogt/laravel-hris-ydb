@extends('layouts.master')
@section('title')
    {{ $data['title'] ?? 'Cuti' }}
@endsection
@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css"/>
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Dasbor @endslot
        @slot('title') {{ $data['title'] ?? 'Cuti' }} @endslot
        @slot('li_end') Daftar @endslot
    @endcomponent

    {{-- <div class="row g-4 mb-3">
        <div class="col-sm-auto">
            <div>
                <a href="{{ route('leaves.create') }}" class="btn btn-success add-btn" id="create-btn"><i class="ri-add-line align-bottom me-1"></i> Tambah cuti</a>
            </div>
        </div>
    </div> --}}

    @if (auth()->getDefaultDriver() == 'api')
        <div class="row g-4 mb-3">
            <div class="col-sm-auto">
                <div>
                    <a href="{{ route('employee.leaves.create') }}" class="btn btn-success add-btn" id="create-btn"><i class="ri-add-line align-bottom me-1"></i> Tambah cuti</a>
                    {{-- Add button to curent url with param type=pending-approval --}}
                    {{-- Check if has param type=pending-approval --}}
                    @if (request()->has('type') && request()->get('type') == 'pending-approval')
                        <a href="{{ route('employee.leaves.index') }}" class="btn btn-warning add-btn"> Semua Cuti</a>
                    @else
                        <a href="{{ route('employee.leaves.index') . '?type=pending-approval' }}" class="btn btn-warning add-btn"> Menunggu Persetujuan</a>
                    @endif
                </div>
            </div>
        </div>
    @endif

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div id="customerList">

                        <div class="table-responsive mt-3 mb-1">
                            <table class="table align-middle table-nowrap" id="leaveTable">
                                <thead class="table-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Keterangan</th>
                                        <th>Nama</th>
                                        {{-- <th>NIY</th> --}}
                                        <th>Pengajuan</th>
                                        <th>Mulai</th>
                                        <th>Selesai</th>
                                        <th>Jumlah Cuti</th>
                                        <th>Alasan</th>
                                        {{-- <th>Aksi</th> --}}
                                    </tr>
                                </thead>
                            </table>
                        </div>

                    </div>
                </div><!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    {{-- Modal #modal-files --}}
    <div id="modal-files" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Modal Heading</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nama File</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="files">
                                        <tr>
                                            <td colspan="2" class="text-center">Tidak ada data</td>
                                        </tr>
                                        <div class="row" id="description"></div>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
                </div>
    
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

@endsection
@section('script')
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>

    <!-- Datatables -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>

        $('#modal-files').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var modal = $(this)
            var id = button.data('id')
            var url = '/uploads/images/cuti/'
            var title = 'Alasan Cuti : ' + button.data('reason')
            var files = button.data('files')
            var description = button.data('description')
            var niy = button.data('niy')
            var name = button.data('name')

            // explode files to array seperated by comma
            files = files.split(', ')

            modal.find('.modal-title').text(title)
            modal.find('#files').empty()

            // Change content .modal-body#description
            modal.find('#description').empty()

            // Add content to .modal-body#description
            modal.find('#description').append(`
                <div class="row">
                    <div class="col-md-12">
                        <h5>Nama</h5>
                        <p>${name}</p>
                    </div>
                    <div class="col-md-12">
                        <h5>NIY</h5>
                        <p>${niy}</p>
                    </div>
                    <div class="col-md-12">
                        <h5>Deskripsi</h5>
                        <p>${description}</p>
                    </div>
                </div>
            `)

            if (files.length > 0) {
                $.each(files, function (index, value) {
                    modal.find('#files').append(`
                        <tr>
                            <td>${value}</td>
                            <td>
                                <a href="${url}/${value}" class="btn btn-primary btn-sm" target="_blank">Lihat</a>
                            </td>
                        </tr>
                    `)
                })
            } else {
                modal.find('#files').append(`
                    <tr>
                        <td colspan="3" class="text-center">Tidak ada data</td>
                    </tr>
                `)
            }
        })

        $(function() {

            var table = $('#leaveTable').DataTable({

                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ auth()->getDefaultDriver() == 'api' ? route('employee.leaves.index') : route('leaves.index') }}",
                    data: function (d) {
                        d.type = "{{ request()->type ?? '' }}";
                    }
                },
                columns: [
                    {
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'is_approved',
                        name: 'is_approved'
                    },
                    {
                        data: 'employee_name',
                        name: 'employee_name'
                    },
                    // {
                    //     data: 'employee_institution_number',
                    //     name: 'employee_institution_number'
                    // },
                    {
                        data: 'submission_date',
                        name: 'submission_date'
                    },
                    {
                        data: 'start_date',
                        name: 'start_date'
                    },
                    {
                        data: 'end_date',
                        name: 'end_date'
                    },
                    {
                        data: 'range_count',
                        name: 'range_count'
                    },
                    {
                        data: 'reason',
                        name: 'reason'
                    },
                    // {
                    //     data: 'action',
                    //     name: 'action',
                    //     orderable: false,
                    //     searchable: false
                    // },
                ],
                columnDefs: [{
                    targets: 2,
                    render: $.fn.dataTable.render.ellipsis()
                }],
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
                                var table = $('#leaveTable').DataTable()
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

        // Approve Button
        function updateEntry(button) {

            var route = $(button).attr('data-route');
            var value = $(button).attr('data-value');
            var employeeName = $(button).attr('data-employee-name');
            var startDate = $(button).attr('data-start-date');
            var endDate = $(button).attr('data-end-date');
            var confirmText = 'Apakah Anda ingin <span class="fw-bold text-danger">menolak</span> cuti ' + employeeName + ' pada tanggal <span class="fw-bold text-danger">' + startDate + '</span> sampai <span class="fw-bold text-danger">' + endDate + '</span>?';
                confirmButtonText = 'Tolak';

            console.log(employeeName);

            if (value == 1) {
                confirmText = 'Apakah Anda ingin <span class="fw-bold text-success">menyetujui</span> cuti ' + employeeName + ' pada tanggal <span class="fw-bold text-success">' + startDate + '</span> sampai <span class="fw-bold text-success">' + endDate + '</span>?';
                confirmButtonText = 'Setujui'
            }

            Swal.fire({
                // title: 'Apakah Anda yakin?',
                html: confirmText,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                confirmButtonText: confirmButtonText,
                // cancelButtonColor: '#d33',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: "POST",
                        url: route,
                        data: {
                            'is_approved': value
                        },
                        success: function(response) {
                            if (response == 1) {
                                // Show success notification
                                Toastify({
                                    text: "Item berhasil diubah!",
                                    className: "info",
                                    style: {
                                        background: "linear-gradient(to right, #00b09b, #96c93d)",
                                    }
                                }).showToast();

                                // remove current table row and draw table again
                                var table = $('#leaveTable').DataTable()
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
