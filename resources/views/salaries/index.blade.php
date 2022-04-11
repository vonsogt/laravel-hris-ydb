@extends('layouts.master')
@section('title')
    Slip Gaji
@endsection
@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css"/>
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Dasbor @endslot
        @slot('title') Slip Gaji @endslot
        @slot('li_end') Daftar @endslot
    @endcomponent
    <div class="card">
        <div class="card-header card-primary">
            <div class="row g-4 align-items-center">
                <div class="col-sm">
                    <div>
                        <h5 class="card-title mb-0">Filter Data Gaji Pegawai</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row g-3">
                <div class="col-xxl-4 col-lg-4">
                    <select class="form-control" name="filterMonth" id="filterMonth">
                        <option value=""> -- Pilih Bulan -- </option>
                        <option value="1">Januari</option>
                        <option value="2">Februari</option>
                        <option value="3">Maret</option>
                        <option value="4">April</option>
                        <option value="5">Mei</option>
                        <option value="6">Juni</option>
                        <option value="7">Juli</option>
                        <option value="8">Agustus</option>
                        <option value="9">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                    </select>
                </div>
                <!--end col-->
                <div class="col-xxl-4 col-lg-4">
                    <select class="form-control" name="filterYear" id="filterYear">
                        <option value=""> -- Pilih Tahun -- </option>
                        @foreach ($filterYearRange as $year)
                            <option value="{{ $year }}">{{ $year }}</option>
                        @endforeach
                    </select>
                </div>
                <!--end col-->
                <div class="col-xxl-4 col-lg-4 text-end">
                    <a id="clearFilterData" href="{{ route('salaries.index') }}" class="text-format-underline d-none"> Bersihkan Filter &nbsp;&nbsp;</a>
                    <button id="filterData" class="btn btn-primary"><i class="ri-equalizer-line align-bottom me-1"></i> Tampilkan</button>
                    <a href="{{ route('salaries.create') }}" class="btn btn-success add-btn" id="create-btn"><i class="ri-add-line align-bottom me-1"></i> Tambah slip gaji</a>
                    </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div id="filter-alert" class="alert alert-info alert-solid d-none" role="alert">
                Menampilkan Data Gaji Pegawai Bulan: <strong>04</strong> Tahun: <b> 2022</b>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div id="customerList">

                        <div class="table-responsive mt-3 mb-1">
                            <table class="table align-middle table-nowrap table-hover" id="salaryTable">
                                <thead class="table-light">
                                    <tr>
                                        <th>Detail</th>
                                        <th>Tahun</th>
                                        <th>Nama</th>
                                        <th>Gaji Bersih</th>
                                        <th>Gaji diterima</th>
                                        <th>Total Tunjangan</th>
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
@endsection
@section('script')
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>

    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Datatables -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(function() {

            var table = $('#salaryTable').DataTable({

                aaSorting: [],
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('salaries.index') }}",
                    data: function (d) {
                        d.bulan = $("#filterMonth").val();
                        d.tahun = $("#filterYear").val();
                    }
                },
                columns: [
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'date',
                        name: 'date'
                    },
                    {
                        data: 'employee_name',
                        name: 'employee_name'
                    },
                    {
                        data: 'net_salary',
                        name: 'net_salary'
                    },
                    {
                        data: 'salary_received',
                        name: 'salary_received'
                    },
                    {
                        data: 'total_allowance',
                        name: 'total_allowance'
                    },
                ],
            });

            $('#filterData').on('click', function(e) {
                if (checkFilterInput()) {

                    var monthText = $("#filterMonth").val() != '' ? ' Bulan: ' + $("#filterMonth").val() : ''
                    var yearText = $("#filterYear").val() != '' ? ' Tahun: ' + $("#filterYear").val() : ''

                    table.draw();
                    e.preventDefault();
                    $("#clearFilterData").removeClass('d-none');
                    filterAlert('Menampilkan Data Gaji Pegawai' + monthText + yearText)
                }
            });

            $("#clearFilterData").click(function (e) {
                $("#filterMonth").val('')
                $("#filterYear").val('')
                table.draw();
                e.preventDefault();
                $("#clearFilterData").addClass('d-none');
                filterAlert()
            });
        });

        function filterAlert(text) {
            var filterAlertBox = $("#filter-alert")

            if (text) {
                filterAlertBox.removeClass('d-none')
                filterAlertBox.text(text)
            } else {
                filterAlertBox.removeClass('d-none').addClass('d-none')
            }
        }

        function checkFilterInput() {
            if ($("#filterMonth").val() == '' && $("#filterYear").val() == '') {
                return false
            }
            return true
        }

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
                        type: "DELETE",
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
                                var table = $('#salaryTable').DataTable()
                                table.row($(button).parents('tr')).remove().draw(false);
                            } else {
                                Swal.fire({
                                    title: 'NOT deleted!',
                                    text: 'There\'s been an error.',
                                    icon: 'error',
                                    timer: 4000,
                                    showConfirmButton: false,
                                })
                            }
                        },
                        error: function(response) {
                            Swal.fire({
                                title: 'NOT deleted!',
                                text: 'There\'s been an error.',
                                icon: 'error',
                                timer: 4000,
                                showConfirmButton: false,
                            })
                        }
                    })
                }
            })
        }



        // $(document).ready(function () {
        //     $("#filterData").click(function(e) {
        //         e.preventDefault();

        //         var month = $("#filterMonth").val()
        //         var year = $("#filterYear").val()
        //         var url = "{{ route('salaries.index') }}" + "?bulan=" + month + "&tahun=" + year;

        //         document.location = url;
        //     });
        // });

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
