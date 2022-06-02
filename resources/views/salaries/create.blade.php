@extends('layouts.master')
@section('title')
    Tambah Slip Gaji
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Dasbor @endslot
        @slot('title') Slip Gaji @endslot
        @slot('li_end') Tambah @endslot
    @endcomponent
    <div class="row g-4 mb-3">
        <div class="col-sm-auto">
            <div>
                <a href="{{ route('salaries.index') }}" class="btn btn-soft-dark add-btn" id="create-btn"><i class="ri-arrow-left-s-line align-bottom me-1"></i> Kembali ke daftar slip gaji</a>
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
            <form method="POST" action="{{ route('salaries.store') }}">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="name-input">Pegawai</label>
                            <select name="employee_id" class="form-control" data-choices name="choices-single-default" id="choices-single-default">
                                <option value="">Pilih nama pegawai</option>
                                @foreach ($employees as $key => $value)
                                    <option @if (old('employee_id', $salary->employee_id ?? '') == $key) selected @endif value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="monthInput">Bulan</label>
                            <select class="form-control" name="month" id="monthInput">
                                <option value="">Pilih Bulan</option>
                                <option value="1" @if (old('month') == "1") selected @endif>Januari</option>
                                <option value="2" @if (old('month') == "2") selected @endif>Februari</option>
                                <option value="3" @if (old('month') == "3") selected @endif>Maret</option>
                                <option value="4" @if (old('month') == "4") selected @endif>April</option>
                                <option value="5" @if (old('month') == "5") selected @endif>Mei</option>
                                <option value="6" @if (old('month') == "6") selected @endif>Juni</option>
                                <option value="7" @if (old('month') == "7") selected @endif>Juli</option>
                                <option value="8" @if (old('month') == "8") selected @endif>Agustus</option>
                                <option value="9" @if (old('month') == "9") selected @endif>September</option>
                                <option value="10" @if (old('month') == "10") selected @endif>Oktober</option>
                                <option value="11" @if (old('month') == "11") selected @endif>November</option>
                                <option value="12" @if (old('month') == "12") selected @endif>Desember</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="dateInputYear">Tahun</label>
                            <input type="text" name="year" class="form-control" id="dateInputYear" value="{{ old('year') }}" placeholder="Masukkan tahun">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Pemasukan</label>
                            <div class="table-responsive">
                                <table class="invoice-table table table-borderless table-nowrap mb-0">
                                    <thead class="align-middle">
                                        <tr class="table-active">
                                            <th scope="col" style="width: 50px;">#</th>
                                            <th scope="col">
                                                Deskripsi
                                            </th>
                                            <th scope="col" class="text-end" style="width: 270px;">Jumlah (Rp)</th>
                                            <th scope="col" class="text-end" style="width: 105px;"></th>
                                        </tr>
                                    </thead>
                                    <tbody id="newlink">
                                        @forelse (old('incomes', $salary->incomes ?? []) as $key => $item)
                                            <tr id="{{ $key }}" class="income">
                                                <th scope="row" class="income-id">{{ $key }}</th>
                                                <td class="text-start">
                                                    <div class="mb-2">
                                                        <input type="text" class="form-control bg-light border-0 item-description" name="incomes[{{ $key }}][description]" placeholder="Masukkan deskripsi pemasukan" value="{{ $item['description'] }}" required />
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <div>
                                                        <input type="number" class="form-control bg-light border-0 item-price" name="incomes[{{ $key }}][value]" value="{{ $item['value'] }}" placeholder="Rp0" required />
                                                    </div>
                                                </td>
                                                <td class="income-removal">
                                                    <a href="javascript:void(0)" class="btn btn-success">Hapus</a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr id="1" class="income">
                                                <th scope="row" class="income-id">1</th>
                                                <td class="text-start">
                                                    <div class="mb-2">
                                                        <input type="text" class="form-control bg-light border-0 item-description" name="incomes[1][description]" placeholder="Masukkan deskripsi pemasukan" required />
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <div>
                                                        <input type="number" class="form-control bg-light border-0 item-price" name="incomes[1][value]" placeholder="Rp0" />
                                                    </div>
                                                </td>
                                                <td class="income-removal">
                                                    <a href="javascript:void(0)" class="btn btn-success">Hapus</a>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                    <tr id="newForm" style="display: none;"></tr>
                                    <tr>
                                        <td colspan="4">
                                            <a href="javascript:new_link()" class="btn btn-soft-secondary fw-medium"><i class="ri-add-fill me-1 align-bottom"></i> Tambah Item</a>
                                        </td>
                                    </tr>
                                    <tr class="border-top border-top-dashed mt-2">
                                        <td colspan="2"></td>
                                        <td class="p-0">
                                            <table class="table table-borderless table-sm table-nowrap align-middle mb-0">
                                                <tbody>
                                                    <tr class="border-top border-top-dashed text-end">
                                                        <th scope="row">Total Pemasukan</th>
                                                        <td>
                                                            <input type="text" class="form-control bg-light border-0" id="incomes-total" placeholder="Rp0" readonly />
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table><!--end table-->
                                        </td>
                                    </tr>
                                </table><!--end table-->
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Potongan</label>
                            <div class="table-responsive">
                                <table class="invoice-table table table-borderless table-nowrap mb-0">
                                    <thead class="align-middle">
                                        <tr class="table-active">
                                            <th scope="col" style="width: 50px;">#</th>
                                            <th scope="col">
                                                Deskripsi
                                            </th>
                                            <th scope="col" class="text-end" style="width: 270px;">Jumlah (Rp)</th>
                                            <th scope="col" class="text-end" style="width: 105px;"></th>
                                        </tr>
                                    </thead>
                                    <tbody id="newlink2">
                                        @forelse (old('cuts', $salary->cuts ?? []) as $key => $item)
                                            <tr id="{{ $key }}" class="cut">
                                                <th scope="row" class="cut-id">{{ $key }}</th>
                                                <td class="text-start">
                                                    <div class="mb-2">
                                                        <input type="text" class="form-control bg-light border-0 cut-item-description" name="cuts[{{ $key }}][description]" placeholder="Masukkan deskripsi potongan" value="{{ $item['description'] }}" required />
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <div>
                                                        <input type="number" class="form-control bg-light border-0 cut-item-price" name="cuts[{{ $key }}][value]" value="{{ $item['value'] }}" placeholder="Rp0" required />
                                                    </div>
                                                </td>
                                                <td class="cut-removal">
                                                    <a href="javascript:void(0)" class="btn btn-success">Hapus</a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr id="1" class="cut">
                                                <th scope="row" class="cut-id">1</th>
                                                <td class="text-start">
                                                    <div class="mb-2">
                                                        <input type="text" class="form-control bg-light border-0 cut-item-description" name="cuts[1][description]" placeholder="Masukkan deskripsi potongan" required />
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <div>
                                                        <input type="number" class="form-control bg-light border-0 cut-item-price" name="cuts[1][value]" placeholder="Rp0" />
                                                    </div>
                                                </td>
                                                <td class="cut-removal">
                                                    <a href="javascript:void(0)" class="btn btn-success">Hapus</a>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                    <tr id="newForm2" style="display: none;"></tr>
                                    <tr>
                                        <td colspan="4">
                                            <a href="javascript:new_link_cuts()" class="btn btn-soft-secondary fw-medium"><i class="ri-add-fill me-1 align-bottom"></i> Tambah Item</a>
                                        </td>
                                    </tr>
                                    <tr class="border-top border-top-dashed mt-2">
                                        <td colspan="2"></td>
                                        <td class="p-0">
                                            <table class="table table-borderless table-sm table-nowrap align-middle mb-0">
                                                <tbody>
                                                    <tr class="border-top border-top-dashed text-end">
                                                        <th scope="row">Total Potongan</th>
                                                        <td>
                                                            <input type="text" class="form-control bg-light border-0" id="cuts-total" placeholder="Rp0" readonly />
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table><!--end table-->
                                        </td>
                                    </tr>
                                </table><!--end table-->
                            </div>
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
    <script src="{{ URL::asset('assets/libs/cleave.js/cleave.js.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/df-number-format/2.1.6/jquery.number.min.js"></script>

    <script>
        var cleaveDate = new Cleave('#dateInputYear', {
            date: true,
            delimiter: '-',
            datePattern: ['Y']
        });

        var paymentSign = "Rp";

        // START Incomes
        var count = 1;

        function new_link() {
            count++;
            var tr1 = document.createElement("tr");
            tr1.id = count;
            tr1.className = "income";
            var delLink =
                "<tr>" +
                    '<th scope="row" class="income-id">' +
                        count +
                    "</th>" +
                    '<td class="text-start">' +
                        '<div class="mb-2">' +
                            '<input class="form-control bg-light border-0 item-description" type="text" name="incomes[' + count + '][description]" placeholder="Masukkan deskripsi pemasukan" required />' +
                        '</div>' +
                    "</td>" +
                    '<td class="text-end">' +
                        "<div>" +
                            '<input type="number" class="form-control bg-light border-0 item-price" name="incomes[' + count + '][value]" placeholder="Rp0" required />' +
                        "</div>" +
                    "</td>" +
                    '<td class="income-removal">' +
                        '<a class="btn btn-success">Hapus</a>' +
                    "</td>" +
                "</tr>";
            tr1.innerHTML = document.getElementById("newForm").innerHTML + delLink;
            document.getElementById("newlink").appendChild(tr1);
            remove();
            amountKeyup();
            resetRow()
        }

        remove();
        /* Set rates + misc */
        var taxRate = 0.125;
        var shippingRate = 65.0;
        var discountRate = 0.15;

        function remove() {
            document.querySelectorAll(".income-removal a").forEach(function(el) {
                el.addEventListener("click", function(e) {
                    removeItem(e);
                    resetRow()
                });
            });
        }

        function resetRow() {
            document.getElementById("newlink").querySelectorAll("tr").forEach(function(subItem, index) {
                var incId = index + 1;
                subItem.querySelector('.item-description').name = 'incomes[' + incId + '][description]'
                subItem.querySelector('.item-price').name = 'incomes[' + incId + '][value]'
                subItem.querySelector('.income-id').innerHTML = incId;
            });
        }

        /* Recalculate incomes */
        function recalculateIncome() {
            var subtotal = 0;
            document.getElementsByClassName("income").forEach(function(item) {
                item.getElementsByClassName("item-price").forEach(function(e) {
                    if (e.value) {
                        subtotal += parseFloat(e.value);
                    }
                });
            });
            /* Calculate totals */
            document.getElementById("incomes-total").value = paymentSign + $.number(subtotal, 0, ',', '.');;
        }
        recalculateIncome();

        function amountKeyup() {
            document.getElementsByClassName('item-price').forEach(function(item) {
                item.addEventListener('keyup', function(e) {
                    recalculateIncome();
                });
            });
        }
        amountKeyup();

        /* Remove item from incomes */
        function removeItem(removeButton) {
            removeButton.target.closest("tr").remove();
            recalculateIncome();
        }
        // END Incomes


        // START Cuts
        var cutsCount = 1;

        function new_link_cuts() {
            cutsCount++;
            var tr1 = document.createElement("tr");
            tr1.id = cutsCount;
            tr1.className = "cut";
            var delLink =
                "<tr>" +
                    '<th scope="row" class="cut-id">' +
                        cutsCount +
                    "</th>" +
                    '<td class="text-start">' +
                        '<div class="mb-2">' +
                            '<input class="form-control bg-light border-0 cut-item-description" type="text" name="cuts[' + cutsCount + '][description]" placeholder="Masukkan deskripsi potongan" required />' +
                        '</div>' +
                    "</td>" +
                    '<td class="text-end">' +
                        "<div>" +
                            '<input type="number" class="form-control bg-light border-0 cut-item-price" name="cuts[' + cutsCount + '][value]" placeholder="Rp0" required />' +
                        "</div>" +
                    "</td>" +
                    '<td class="cut-removal">' +
                        '<a class="btn btn-success">Hapus</a>' +
                    "</td>" +
                "</tr>";
            tr1.innerHTML = document.getElementById("newForm2").innerHTML + delLink;
            document.getElementById("newlink2").appendChild(tr1);
            removeCut();
            cutAmountKeyup();
            resetRowCut()
        }

        removeCut();
        /* Set rates + misc */
        var taxRate = 0.125;
        var shippingRate = 65.0;
        var discountRate = 0.15;

        function removeCut() {
            document.querySelectorAll(".cut-removal a").forEach(function(el) {
                el.addEventListener("click", function(e) {
                    removeItem(e);
                    resetRowCut()
                });
            });
        }

        function resetRowCut() {
            document.getElementById("newlink2").querySelectorAll("tr").forEach(function(subItem, index) {
                var incId = index + 1;
                subItem.querySelector('.cut-item-description').name = 'cuts[' + incId + '][description]'
                subItem.querySelector('.cut-item-price').name = 'cuts[' + incId + '][value]'
                subItem.querySelector('.cut-id').innerHTML = incId;
            });
        }

        /* Recalculate cuts */
        function recalculateCuts() {
            var subtotal = 0;
            document.getElementsByClassName("cut").forEach(function(item) {
                item.getElementsByClassName("cut-item-price").forEach(function(e) {
                    if (e.value) {
                        subtotal += parseFloat(e.value);
                    }
                });
            });
            /* Calculate totals */
            document.getElementById("cuts-total").value = paymentSign + $.number(subtotal, 0, ',', '.');;
        }
        recalculateCuts();

        function cutAmountKeyup() {
            document.getElementsByClassName('cut-item-price').forEach(function(item) {
                item.addEventListener('keyup', function(e) {
                    recalculateCuts();
                });
            });
        }
        cutAmountKeyup();

        /* Remove item from cuts */
        function removeItem(removeButton) {
            removeButton.target.closest("tr").remove();
            recalculateCuts();
        }
        // END Cuts
    </script>
@endsection
