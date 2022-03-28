@extends('layouts.master')
@section('title') @lang('translation.list-view') @endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1') invoices @endslot
        @slot('title')list view @endslot
    @endcomponent
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <p class="text-uppercase fw-medium text-muted mb-0">Invoices Sent</p>
                        </div>
                        <div class="flex-shrink-0">
                            <h5 class="text-success fs-14 mb-0">
                                <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +89.24 %
                            </h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value"
                                    data-target="559.25">0</span>k</h4>
                            <span class="badge bg-warning me-1">2,258</span> <span class="text-muted">
                                Invoices sent</span>
                        </div>
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-light rounded fs-3">
                                <i data-feather="file-text" class="text-success icon-dual-success"></i>
                            </span>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <p class="text-uppercase fw-medium text-muted mb-0">Paid Invoices</p>
                        </div>
                        <div class="flex-shrink-0">
                            <h5 class="text-danger fs-14 mb-0">
                                <i class="ri-arrow-right-down-line fs-13 align-middle"></i> +8.09 %
                            </h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value"
                                    data-target="409.66">0</span>k</h4>
                            <span class="badge bg-warning me-1">1,958</span> <span class="text-muted">
                                Paid by clients</span>
                        </div>
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-light rounded fs-3">
                                <i data-feather="check-square"
                                    class="text-success icon-dual-success"></i>
                            </span>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <p class="text-uppercase fw-medium text-muted mb-0">Unpaid Invoices</p>
                        </div>
                        <div class="flex-shrink-0">
                            <h5 class="text-danger fs-14 mb-0">
                                <i class="ri-arrow-right-down-line fs-13 align-middle"></i> +9.01 %
                            </h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value"
                                    data-target="136.98">0</span>k</h4>
                            <span class="badge bg-warning me-1">338</span> <span class="text-muted">
                                Unpaid by clients</span>
                        </div>
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-light rounded fs-3">
                                <i data-feather="clock" class="text-success icon-dual-success"></i>
                            </span>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <p class="text-uppercase fw-medium text-muted mb-0">Cancelled Invoices</p>
                        </div>
                        <div class="flex-shrink-0">
                            <h5 class="text-success fs-14 mb-0">
                                <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +7.55 %
                            </h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value"
                                    data-target="84.20">0</span>k</h4>
                            <span class="badge bg-warning me-1">502</span> <span class="text-muted">
                                Cancelled by clients</span>
                        </div>
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-light rounded fs-3">
                                <i data-feather="x-octagon" class="text-success icon-dual-success"></i>
                            </span>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div> <!-- end row-->

    <div class="row">
        <div class="col-lg-12">
            <div class="card" id="invoiceList">
                <div class="card-header border-0">
                    <div class="d-flex align-items-center">
                        <h5 class="card-title mb-0 flex-grow-1">Invoices</h5>
                        <div class="flex-shrink-0">
                            <a href="apps-invoices-create" class="btn btn-danger"><i
                                    class="ri-add-line align-bottom me-1"></i> Create Invoice</a>
                        </div>
                    </div>
                </div>
                <div class="card-body bg-soft-light border border-dashed border-start-0 border-end-0">
                    <form>
                        <div class="row g-3">
                            <div class="col-xxl-5 col-sm-12">
                                <div class="search-box">
                                    <input type="text" class="form-control search bg-light border-light"
                                        placeholder="Search for customer, email, country, status or something...">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-3 col-sm-4">
                                <input type="text" class="form-control bg-light border-light"
                                    id="datepicker-range" placeholder="Select date">
                            </div>
                            <!--end col-->
                            <div class="col-xxl-3 col-sm-4">
                                <div class="input-light">
                                    <select class="form-control" data-choices data-choices-search-false
                                        name="choices-single-default" id="idStatus">
                                        <option value="">Status</option>
                                        <option value="all" selected>All</option>
                                        <option value="Unpaid">Unpaid</option>
                                        <option value="Paid">Paid</option>
                                        <option value="Cancel">Cancel</option>
                                        <option value="Refund">Refund</option>
                                    </select>
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-xxl-1 col-sm-4">
                                <button type="button" class="btn btn-primary w-100"
                                    onclick="SearchData();">
                                    <i class="ri-equalizer-fill me-1 align-bottom"></i> Filters
                                </button>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </form>
                </div>
                <div class="card-body">
                    <div>
                        <div class="table-responsive table-card">
                            <table class="table align-middle table-nowrap" id="invoiceTable">
                                <thead class="text-muted">
                                    <tr>
                                        <th scope="col" style="width: 50px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    id="checkAll" value="option">
                                            </div>
                                        </th>
                                        <th class="sort text-uppercase" data-sort="invoice_id">ID</th>
                                        <th class="sort text-uppercase" data-sort="customer_name">
                                            Customer</th>
                                        <th class="sort text-uppercase" data-sort="email">Email</th>
                                        <th class="sort text-uppercase" data-sort="country">Country</th>
                                        <th class="sort text-uppercase" data-sort="date">Date</th>
                                        <th class="sort text-uppercase" data-sort="invoice_amount">
                                            Amount</th>
                                        <th class="sort text-uppercase" data-sort="status">Payment
                                            Status</th>
                                        <th class="sort text-uppercase" data-sort="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="list form-check-all">
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="checkAll" value="option1">
                                            </div>
                                        </th>
                                        <td class="id"><a href="apps-invoices-details"
                                                class="fw-medium link-primary">#VL25000351</a></td>
                                        <td class="customer_name">
                                            <div class="d-flex align-items-center">
                                                <img src="{{ URL::asset('assets/images/users/avatar-2.jpg') }}" alt=""
                                                    class="avatar-xs rounded-circle me-2" />
                                                Diana Kohler
                                            </div>
                                        </td>
                                        <td class="email">dianakohler@velzon.com</td>
                                        <td class="country">Brazil</td>
                                        <td class="date">06 Apr, 2021 <small
                                                class="text-muted">09:58PM</small></td>
                                        <td class="invoice_amount">$875</td>
                                        <td class="status"><span
                                                class="badge badge-soft-success text-uppercase">Paid</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-soft-secondary btn-sm dropdown"
                                                    type="button" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item"
                                                            href="apps-invoices-details"><i
                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                            View</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="apps-invoices-create"><i
                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                            Edit</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="javascript:void(0);"><i
                                                                class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                            Download</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn"
                                                            data-bs-toggle="modal" href="#deleteOrder">
                                                            <i
                                                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                            Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="checkAll" value="option2">
                                            </div>
                                        </th>
                                        <td class="id"><a href="javascript:void(0);"
                                                class="fw-medium link-primary">#VL25000352</a></td>
                                        <td class="customer_name">
                                            <div class="d-flex align-items-center">
                                                <img src="{{ URL::asset('assets/images/users/avatar-3.jpg') }}" alt=""
                                                    class="avatar-xs rounded-circle me-2" />
                                                James Morris
                                            </div>
                                        </td>
                                        <td class="email">jamesmorris@velzon.com</td>
                                        <td class="country">Germany</td>
                                        <td class="date">17 Dec, 2021, <small
                                                class="text-muted">1:24AM</small></td>
                                        <td class="invoice_amount">$451.00</td>
                                        <td class="status"><span
                                                class="badge badge-soft-warning text-uppercase">Unpaid</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-soft-secondary btn-sm dropdown"
                                                    type="button" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item"
                                                            href="apps-invoices-details"><i
                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                            View</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="apps-invoices-create"><i
                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                            Edit</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="javascript:void(0);"><i
                                                                class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                            Download</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn"
                                                            data-bs-toggle="modal" href="#deleteOrder">
                                                            <i
                                                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                            Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="checkAll" value="option3">
                                            </div>
                                        </th>
                                        <td class="id"><a href="javascript:void(0);"
                                                class="fw-medium link-primary">#VL25000353</a></td>
                                        <td class="customer_name">
                                            <div class="d-flex align-items-center">
                                                <img src="{{ URL::asset('assets/images/users/avatar-4.jpg') }}" alt=""
                                                    class="avatar-xs rounded-circle me-2" />
                                                Dawn Koh
                                            </div>
                                        </td>
                                        <td class="email">dawnkoh@velzon.com</td>
                                        <td class="country">United Kingdom</td>
                                        <td class="date">29 Nov, 2021, <small
                                                class="text-muted">7:20PM</small></td>
                                        <td class="invoice_amount">$984.98</td>
                                        <td class="status"><span
                                                class="badge badge-soft-success text-uppercase">Paid</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-soft-secondary btn-sm dropdown"
                                                    type="button" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item"
                                                            href="apps-invoices-details"><i
                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                            View</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="apps-invoices-create"><i
                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                            Edit</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="javascript:void(0);"><i
                                                                class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                            Download</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn"
                                                            data-bs-toggle="modal" href="#deleteOrder">
                                                            <i
                                                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                            Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="checkAll" value="option4">
                                            </div>
                                        </th>
                                        <td class="id"><a href="javascript:void(0);"
                                                class="fw-medium link-primary">#VL25000354</a></td>
                                        <td class="customer_name">
                                            <div class="d-flex align-items-center">
                                                <img src="{{ URL::asset('assets/images/users/avatar-5.jpg') }}" alt=""
                                                    class="avatar-xs rounded-circle me-2" />
                                                Tonya Noble
                                            </div>
                                        </td>
                                        <td class="email">tonynoble@velzon.com</td>
                                        <td class="country">Spain</td>
                                        <td class="date">22 Nov, 2021, <small
                                                class="text-muted">10:20PM</small></td>
                                        <td class="invoice_amount">$742.12</td>
                                        <td class="status"><span
                                                class="badge badge-soft-danger text-uppercase">Cancel</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-soft-secondary btn-sm dropdown"
                                                    type="button" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item"
                                                            href="apps-invoices-details"><i
                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                            View</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="apps-invoices-create"><i
                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                            Edit</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="javascript:void(0);"><i
                                                                class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                            Download</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn"
                                                            data-bs-toggle="modal" href="#deleteOrder">
                                                            <i
                                                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                            Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="checkAll" value="option5">
                                            </div>
                                        </th>
                                        <td class="id"><a href="javascript:void(0);"
                                                class="fw-medium link-primary">#VL25000355</a></td>
                                        <td class="customer_name">
                                            <div class="d-flex align-items-center">
                                                <img src="{{ URL::asset('assets/images/users/avatar-6.jpg') }}" alt=""
                                                    class="avatar-xs rounded-circle me-2" />
                                                David Nichols
                                            </div>
                                        </td>
                                        <td class="email">davidnochols@velzon.com</td>
                                        <td class="country">United States of America</td>
                                        <td class="date">11 Nov, 2021, <small
                                                class="text-muted">12:37AM</small></td>
                                        <td class="invoice_amount">$2415.00</td>
                                        <td class="status"><span
                                                class="badge badge-soft-warning text-uppercase">Unpaid</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-soft-secondary btn-sm dropdown"
                                                    type="button" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item"
                                                            href="apps-invoices-details"><i
                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                            View</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="apps-invoices-create"><i
                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                            Edit</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="javascript:void(0);"><i
                                                                class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                            Download</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn"
                                                            data-bs-toggle="modal" href="#deleteOrder">
                                                            <i
                                                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                            Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="checkAll" value="option6">
                                            </div>
                                        </th>
                                        <td class="id"><a href="javascript:void(0);"
                                                class="fw-medium link-primary">#VL25000356</a></td>
                                        <td class="customer_name">
                                            <div class="d-flex align-items-center">
                                                <img src="{{ URL::asset('assets/images/users/avatar-7.jpg') }}" alt=""
                                                    class="avatar-xs rounded-circle me-2" />
                                                Joseph Payten
                                            </div>
                                        </td>
                                        <td class="email">josephpayten@velzon.com</td>
                                        <td class="country">France</td>
                                        <td class="date">03 Nov, 2021, <small
                                                class="text-muted">12:29AM</small></td>
                                        <td class="invoice_amount">$7451.02</td>
                                        <td class="status"><span
                                                class="badge badge-soft-success text-uppercase">Paid</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-soft-secondary btn-sm dropdown"
                                                    type="button" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item"
                                                            href="apps-invoices-details"><i
                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                            View</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="apps-invoices-create"><i
                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                            Edit</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="javascript:void(0);"><i
                                                                class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                            Download</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn"
                                                            data-bs-toggle="modal" href="#deleteOrder">
                                                            <i
                                                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                            Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="checkAll" value="option7">
                                            </div>
                                        </th>
                                        <td class="id"><a href="javascript:void(0);"
                                                class="fw-medium link-primary">#VL25000357</a></td>
                                        <td class="customer_name">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 avatar-xs me-2">
                                                    <div
                                                        class="avatar-title bg-soft-success text-success rounded-circle fs-13">
                                                        MR
                                                    </div>
                                                </div>
                                                Mary Rucker
                                            </div>
                                        </td>
                                        <td class="email">maryrucker@velzon.com</td>
                                        <td class="country">United Kingdom</td>
                                        <td class="date">27 Oct, 2021, <small
                                                class="text-muted">01:46PM</small></td>
                                        <td class="invoice_amount">$327.36</td>
                                        <td class="status"><span
                                                class="badge badge-soft-danger text-uppercase">Cancel</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-soft-secondary btn-sm dropdown"
                                                    type="button" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item"
                                                            href="apps-invoices-details"><i
                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                            View</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="apps-invoices-create"><i
                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                            Edit</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="javascript:void(0);"><i
                                                                class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                            Download</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn"
                                                            data-bs-toggle="modal" href="#deleteOrder">
                                                            <i
                                                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                            Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="checkAll" value="option8">
                                            </div>
                                        </th>
                                        <td class="id"><a href="javascript:void(0);"
                                                class="fw-medium link-primary">#VL25000358</a></td>
                                        <td class="customer_name">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 avatar-xs me-2">
                                                    <div
                                                        class="avatar-title bg-soft-success text-success rounded-circle fs-13">
                                                        AC
                                                    </div>
                                                </div>
                                                Alexis Clarke
                                            </div>
                                        </td>
                                        <td class="email">alexisclarke@velzon.com</td>
                                        <td class="country">Spain</td>
                                        <td class="date">18 Oct, 2021, <small
                                                class="text-muted">04:55PM</small></td>
                                        <td class="invoice_amount">$879.78</td>
                                        <td class="status"><span
                                                class="badge badge-soft-warning text-uppercase">Unpaid</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-soft-secondary btn-sm dropdown"
                                                    type="button" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item"
                                                            href="apps-invoices-details"><i
                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                            View</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="apps-invoices-create"><i
                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                            Edit</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="javascript:void(0);"><i
                                                                class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                            Download</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn"
                                                            data-bs-toggle="modal" href="#deleteOrder">
                                                            <i
                                                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                            Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="checkAll" value="option9">
                                            </div>
                                        </th>
                                        <td class="id"><a href="javascript:void(0);"
                                                class="fw-medium link-primary">#VL25000359</a></td>
                                        <td class="customer_name">
                                            <div class="d-flex align-items-center">
                                                <img src="{{ URL::asset('assets/images/users/avatar-8.jpg') }}" alt=""
                                                    class="avatar-xs rounded-circle me-2" />
                                                Ryan Cowie
                                            </div>
                                        </td>
                                        <td class="email">rayancowie@velzon.com</td>
                                        <td class="country">France</td>
                                        <td class="date">07 Oct, 2021, <small
                                                class="text-muted">06:33AM</small></td>
                                        <td class="invoice_amount">$879.00</td>
                                        <td class="status"><span
                                                class="badge badge-soft-primary text-uppercase">Refund</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-soft-secondary btn-sm dropdown"
                                                    type="button" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item"
                                                            href="apps-invoices-details"><i
                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                            View</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="apps-invoices-create"><i
                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                            Edit</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="javascript:void(0);"><i
                                                                class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                            Download</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn"
                                                            data-bs-toggle="modal" href="#deleteOrder">
                                                            <i
                                                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                            Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="checkAll" value="option10">
                                            </div>
                                        </th>
                                        <td class="id"><a href="javascript:void(0);"
                                                class="fw-medium link-primary">#VL25000360</a></td>
                                        <td class="customer_name">
                                            <div class="d-flex align-items-center">
                                                <img src="{{ URL::asset('assets/images/users/avatar-4.jpg') }}" alt=""
                                                    class="avatar-xs rounded-circle me-2" />
                                                Christina Maier
                                            </div>
                                        </td>
                                        <td class="email">christinamaier@velzon.com</td>
                                        <td class="country">United States of America</td>
                                        <td class="date">13 Sep, 2021, <small
                                                class="text-muted">11:59AM</small></td>
                                        <td class="invoice_amount">$1624.18</td>
                                        <td class="status"><span
                                                class="badge badge-soft-warning text-uppercase">Unpaid</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-soft-secondary btn-sm dropdown"
                                                    type="button" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item"
                                                            href="apps-invoices-details"><i
                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                            View</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="apps-invoices-create"><i
                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                            Edit</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="javascript:void(0);"><i
                                                                class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                            Download</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn"
                                                            data-bs-toggle="modal" href="#deleteOrder">
                                                            <i
                                                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                            Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="checkAll" value="option11">
                                            </div>
                                        </th>
                                        <td class="id"><a href="javascript:void(0);"
                                                class="fw-medium link-primary">#VL25000361</a></td>
                                        <td class="customer_name">
                                            <div class="d-flex align-items-center">
                                                <img src="{{ URL::asset('assets/images/users/avatar-2.jpg') }}" alt=""
                                                    class="avatar-xs rounded-circle me-2" />
                                                Jennifer Winkel
                                            </div>
                                        </td>
                                        <td class="email">jenniferwinkal@velzon.com</td>
                                        <td class="country">Brazil</td>
                                        <td class="date">15 Aug, 2021, <small
                                                class="text-muted">01:05PM</small></td>
                                        <td class="invoice_amount">$214.67</td>
                                        <td class="status"><span
                                                class="badge badge-soft-danger text-uppercase">Cancel</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-soft-secondary btn-sm dropdown"
                                                    type="button" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item"
                                                            href="apps-invoices-details"><i
                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                            View</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="apps-invoices-create"><i
                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                            Edit</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="javascript:void(0);"><i
                                                                class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                            Download</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn"
                                                            data-bs-toggle="modal" href="#deleteOrder">
                                                            <i
                                                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                            Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="checkAll" value="option12">
                                            </div>
                                        </th>
                                        <td class="id"><a href="javascript:void(0);"
                                                class="fw-medium link-primary">#VL25000362</a></td>
                                        <td class="customer_name">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 avatar-xs me-2">
                                                    <div
                                                        class="avatar-title bg-soft-success text-success rounded-circle fs-13">
                                                        EP
                                                    </div>
                                                </div>
                                                Erik Peters
                                            </div>
                                        </td>
                                        <td class="email">erikpeters@velzon.com</td>
                                        <td class="country">Mexico</td>
                                        <td class="date">07 Aug, 2021, <small
                                                class="text-muted">07:46PM</small></td>
                                        <td class="invoice_amount">$1798.71</td>
                                        <td class="status"><span
                                                class="badge badge-soft-success text-uppercase">Active</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-soft-secondary btn-sm dropdown"
                                                    type="button" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item"
                                                            href="apps-invoices-details"><i
                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                            View</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="apps-invoices-create"><i
                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                            Edit</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="javascript:void(0);"><i
                                                                class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                            Download</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn"
                                                            data-bs-toggle="modal" href="#deleteOrder">
                                                            <i
                                                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                            Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="noresult" style="display: none">
                                <div class="text-center">
                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json"
                                        trigger="loop" colors="primary:#121331,secondary:#08a88a"
                                        style="width:75px;height:75px">
                                    </lord-icon>
                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                    <p class="text-muted mb-0">We've searched more than 150+ invoices We
                                        did not find any
                                        invoices for you search.</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-3">
                            <div class="pagination-wrap hstack gap-2">
                                <a class="page-item pagination-prev disabled" href="#">
                                    Previous
                                </a>
                                <ul class="pagination listjs-pagination mb-0"></ul>
                                <a class="page-item pagination-next" href="#">
                                    Next
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade flip" id="deleteOrder" tabindex="-1"
                        aria-labelledby="deleteOrderLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body p-5 text-center">
                                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json"
                                        trigger="loop" colors="primary:#405189,secondary:#f06548"
                                        style="width:90px;height:90px">
                                    </lord-icon>
                                    <div class="mt-4 text-center">
                                        <h4>You are about to delete a order ?</h4>
                                        <p class="text-muted fs-15 mb-4">Deleting your order will remove
                                            all of
                                            your information from our database.</p>
                                        <div class="hstack gap-2 justify-content-center remove">
                                            <button
                                                class="btn btn-link link-success fw-medium text-decoration-none"
                                                data-bs-dismiss="modal"><i
                                                    class="ri-close-line me-1 align-middle"></i>
                                                Close</button>
                                            <button class="btn btn-danger" id="delete-record">Yes,
                                                Delete It</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end modal -->
                </div>
            </div>

        </div>
        <!--end col-->
    </div>
    <!--end row-->
@endsection
@section('script')
    <script src="{{ URL::asset('assets/libs/list.js/list.js.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/list.pagination.js/list.pagination.js.min.js') }}"></script>
    <script src="assets/js/pages/invoiceslist.init.js"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
