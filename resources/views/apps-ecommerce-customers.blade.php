@extends('layouts.master')
@section('title') @lang('translation.customers') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Ecommerce @endslot
@slot('title') Customers @endslot
@endcomponent
<div class="row">
    <div class="col-lg-12">
        <div class="card" id="customerList">
            <div class="card-header border-bottom-dashed">

                <div class="row g-4 align-items-center">
                    <div class="col-sm">
                        <div>
                            <h5 class="card-title mb-0">Customer List</h5>
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        <div>
                            <button type="button" class="btn btn-success add-btn"
                                data-bs-toggle="modal" id="create-btn"
                                data-bs-target="#showModal"><i
                                    class="ri-add-line align-bottom me-1"></i> Add Customer</button>
                            <button type="button" class="btn btn-info"><i
                                    class="ri-file-download-line align-bottom me-1"></i>
                                Import</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body border-bottom-dashed border-bottom">
                <form>
                    <div class="row g-3">
                        <div class="col-xl-6">
                            <div class="search-box">
                                <input type="text" class="form-control search"
                                    placeholder="Search for customer, email, phone, status or something...">
                                <i class="ri-search-line search-icon"></i>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xl-6">
                            <div class="row g-3">
                                <div class="col-sm-4">
                                    <div class="">
                                        <input type="text" class="form-control"
                                            id="datepicker-range" data-provider="flatpickr"
                                            data-date-format="d M, Y" data-range-date="true"
                                            placeholder="Select date">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-sm-4">
                                    <div>
                                        <select class="form-control" data-plugin="choices"
                                            data-choices data-choices-search-false
                                            name="choices-single-default" id="idStatus">
                                            <option value="">Status</option>
                                            <option value="all" selected>All</option>
                                            <option value="Active">Active</option>
                                            <option value="Block">Block</option>
                                        </select>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-sm-4">
                                    <div>
                                        <button type="button" class="btn btn-primary w-100"
                                            onclick="SearchData();"> <i
                                                class="ri-equalizer-fill me-2 align-bottom"></i>Filters</button>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </form>
            </div>
            <div class="card-body">
                <div>
                    <div class="table-responsive table-card mb-1">
                        <table class="table align-middle" id="customerTable">
                            <thead class="table-light text-muted">
                                <tr>
                                    <th scope="col" style="width: 50px;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                id="checkAll" value="option">
                                        </div>
                                    </th>

                                    <th class="sort" data-sort="customer_name">Customer</th>
                                    <th class="sort" data-sort="email">Email</th>
                                    <th class="sort" data-sort="phone">Phone</th>
                                    <th class="sort" data-sort="date">Joining Date</th>
                                    <th class="sort" data-sort="status">Delivery Status</th>
                                    <th class="sort" data-sort="action">Action</th>
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
                                    <td class="id" style="display:none;"><a
                                            href="javascript:void(0);"
                                            class="fw-medium link-primary">#VZ2101</a></td>
                                    <td class="customer_name">Mary Cousar</td>
                                    <td class="email">marycousar@velzon.com</td>
                                    <td class="phone">580-464-4694</td>
                                    <td class="date">06 Apr, 2021</td>
                                    <td class="status"><span
                                            class="badge badge-soft-success text-uppercase">Active</span>
                                    </td>
                                    <td>
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <li class="list-inline-item edit"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Edit">
                                                <a href="#showModal" data-bs-toggle="modal"
                                                    class="text-primary d-inline-block edit-item-btn">
                                                    <i class="ri-pencil-fill fs-16"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="top"
                                                title="Remove">
                                                <a class="text-danger d-inline-block remove-item-btn"
                                                    data-bs-toggle="modal"
                                                    href="#deleteRecordModal">
                                                    <i class="ri-delete-bin-5-fill fs-16"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                name="checkAll" value="option2">
                                        </div>
                                    </th>
                                    <td class="id" style="display:none;"><a
                                            href="javascript:void(0);"
                                            class="fw-medium link-primary">#VZ2102</a></td>
                                    <td class="customer_name">Jeff Taylor</td>
                                    <td class="email">jefftaylor@velzon.com</td>
                                    <td class="phone">863-577-5537</td>
                                    <td class="date">15 Feb, 2021</td>
                                    <td class="status"><span
                                            class="badge badge-soft-success text-uppercase">Active</span>
                                    </td>
                                    <td>
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <li class="list-inline-item edit"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Edit">
                                                <a href="#showModal" data-bs-toggle="modal"
                                                    class="text-primary d-inline-block edit-item-btn">
                                                    <i class="ri-pencil-fill fs-16"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item remove"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Remove">
                                                <a data-bs-toggle="modal" href="#deleteRecordModal"
                                                    class="text-danger d-inline-block remove-item-btn">
                                                    <i class="ri-delete-bin-5-fill fs-16"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                name="checkAll" value="option3">
                                        </div>
                                    </th>
                                    <td class="id" style="display:none;"><a
                                            href="javascript:void(0);"
                                            class="fw-medium link-primary">#VZ2103</a></td>
                                    <td class="customer_name">Robert McMahon</td>
                                    <td class="email">robertmcmahon@velzon.com</td>
                                    <td class="phone">786-253-9927</td>
                                    <td class="date">12 Jan, 2021</td>
                                    <td class="status"><span
                                            class="badge badge-soft-success text-uppercase">Active</span>
                                    </td>
                                    <td>
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <li class="list-inline-item edit"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Edit">
                                                <a href="#showModal" data-bs-toggle="modal"
                                                    class="text-primary d-inline-block edit-item-btn">
                                                    <i class=" ri-pencil-fill fs-16"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item remove"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Remove">
                                                <a data-bs-toggle="modal" href="#deleteRecordModal"
                                                    class="text-danger d-inline-block remove-item-btn">
                                                    <i class="ri-delete-bin-5-fill fs-16"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                name="checkAll" value="option4">
                                        </div>
                                    </th>
                                    <td class="id" style="display:none;"><a
                                            href="javascript:void(0);"
                                            class="fw-medium link-primary">#VZ2104</a></td>
                                    <td class="customer_name">Michael Morris</td>
                                    <td class="email">michaelmorris@velzon.com</td>
                                    <td class="phone">805-447-8398</td>
                                    <td class="date">19 May, 2021</td>
                                    <td class="status"><span
                                            class="badge badge-soft-danger text-uppercase">Block</span>
                                    </td>
                                    <td>
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <li class="list-inline-item edit"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Edit">
                                                <a href="#showModal" data-bs-toggle="modal"
                                                    class="text-primary d-inline-block edit-item-btn">
                                                    <i class="ri-pencil-fill fs-16"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item remove"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Remove">
                                                <a data-bs-toggle="modal" href="#deleteRecordModal"
                                                    class="text-danger d-inline-block remove-item-btn">
                                                    <i class="ri-delete-bin-5-fill fs-16"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                name="checkAll" value="option5">
                                        </div>
                                    </th>
                                    <td class="id" style="display:none;"><a
                                            href="javascript:void(0);"
                                            class="fw-medium link-primary">#VZ2105</a></td>
                                    <td class="customer_name">Kevin Dawson</td>
                                    <td class="email">kevindawson@velzon.com</td>
                                    <td class="phone">213-741-4294</td>
                                    <td class="date">14 Apr, 2021</td>
                                    <td class="status"><span
                                            class="badge badge-soft-success text-uppercase">Active</span>
                                    </td>
                                    <td>
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <li class="list-inline-item edit"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Edit">
                                                <a href="#showModal" data-bs-toggle="modal"
                                                    class="text-primary d-inline-block edit-item-btn">
                                                    <i class="ri-pencil-fill fs-16"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item remove"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Remove">
                                                <a data-bs-toggle="modal" href="#deleteRecordModal"
                                                    class="text-danger d-inline-block remove-item-btn">
                                                    <i class="ri-delete-bin-5-fill fs-16"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                name="checkAll" value="option6">
                                        </div>
                                    </th>
                                    <td class="id" style="display:none;"><a
                                            href="javascript:void(0);"
                                            class="fw-medium link-primary">#VZ2106</a></td>
                                    <td class="customer_name">Carolyn Jones</td>
                                    <td class="email">carolynjones@velzon.com</td>
                                    <td class="phone">414-453-5725</td>
                                    <td class="date">07 Jun, 2021</td>
                                    <td class="status"><span
                                            class="badge badge-soft-success text-uppercase">Active</span>
                                    </td>
                                    <td>
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <li class="list-inline-item edit"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Edit">
                                                <a href="#showModal" data-bs-toggle="modal"
                                                    class="text-primary d-inline-block edit-item-btn">
                                                    <i class="ri-pencil-fill fs-16"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item remove"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Remove">
                                                <a data-bs-toggle="modal" href="#deleteRecordModal"
                                                    class="text-danger d-inline-block remove-item-btn">
                                                    <i class="ri-delete-bin-5-fill fs-16"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                name="checkAll" value="option7">
                                        </div>
                                    </th>
                                    <td class="id" style="display:none;"><a
                                            href="javascript:void(0);"
                                            class="fw-medium link-primary">#VZ2107</a></td>
                                    <td class="customer_name">Glen Matney</td>
                                    <td class="email">glenmatney@velzon.com</td>
                                    <td class="phone">515-395-1069</td>
                                    <td class="date">02 Nov, 2021</td>
                                    <td class="status"><span
                                            class="badge badge-soft-success text-uppercase">Active</span>
                                    </td>
                                    <td>
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <li class="list-inline-item edit"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Edit">
                                                <a href="#showModal" data-bs-toggle="modal"
                                                    class="text-primary d-inline-block edit-item-btn">
                                                    <i class="ri-pencil-fill fs-16"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item remove"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Remove">
                                                <a data-bs-toggle="modal" href="#deleteRecordModal"
                                                    class="text-danger d-inline-block remove-item-btn">
                                                    <i class="ri-delete-bin-5-fill fs-16"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                name="checkAll" value="option8">
                                        </div>
                                    </th>
                                    <td class="id" style="display:none;"><a
                                            href="javascript:void(0);"
                                            class="fw-medium link-primary">#VZ2108</a></td>
                                    <td class="customer_name">Charles Kubik</td>
                                    <td class="email">charleskubik@velzon.com</td>
                                    <td class="phone">231-480-8536</td>
                                    <td class="date">25 Sep, 2021</td>
                                    <td class="status"><span
                                            class="badge badge-soft-danger text-uppercase">Block</span>
                                    </td>
                                    <td>
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <li class="list-inline-item edit"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Edit">
                                                <a href="#showModal" data-bs-toggle="modal"
                                                    class="text-primary d-inline-block edit-item-btn">
                                                    <i class="ri-pencil-fill fs-16"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item remove"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Remove">
                                                <a data-bs-toggle="modal" href="#deleteRecordModal"
                                                    class="text-danger d-inline-block remove-item-btn">
                                                    <i class="ri-delete-bin-5-fill fs-16"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                name="checkAll" value="option9">
                                        </div>
                                    </th>
                                    <td class="id" style="display:none;"><a
                                            href="javascript:void(0);"
                                            class="fw-medium link-primary">#VZ2109</a></td>
                                    <td class="customer_name">Herbert Stokes</td>
                                    <td class="email">herbertstokes@velzon.com</td>
                                    <td class="phone">312-944-1448</td>
                                    <td class="date">20 Jul, 2021</td>
                                    <td class="status"><span
                                            class="badge badge-soft-danger text-uppercase">Block</span>
                                    </td>
                                    <td>
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <li class="list-inline-item edit"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Edit">
                                                <a href="#showModal" data-bs-toggle="modal"
                                                    class="text-primary d-inline-block edit-item-btn">
                                                    <i class="ri-pencil-fill fs-16"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item remove"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Remove">
                                                <a data-bs-toggle="modal" href="#deleteRecordModal"
                                                    class="text-danger d-inline-block remove-item-btn">
                                                    <i class="ri-delete-bin-5-fill fs-16"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                name="checkAll" value="option10">
                                        </div>
                                    </th>
                                    <td class="id" style="display:none;"><a
                                            href="javascript:void(0);"
                                            class="fw-medium link-primary">#VZ2110</a></td>
                                    <td class="customer_name">Timothy Smith</td>
                                    <td class="email">timothysmith@velzon.com</td>
                                    <td class="phone">973-277-6950</td>
                                    <td class="date">13 Dec, 2021</td>
                                    <td class="status"><span
                                            class="badge badge-soft-success text-uppercase">Active</span>
                                    </td>
                                    <td>
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <li class="list-inline-item edit"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Edit">
                                                <a href="#showModal" data-bs-toggle="modal"
                                                    class="text-primary d-inline-block edit-item-btn">
                                                    <i class="ri-pencil-fill fs-16"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item remove"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Remove">
                                                <a data-bs-toggle="modal" href="#deleteRecordModal"
                                                    class="text-danger d-inline-block remove-item-btn">
                                                    <i class="ri-delete-bin-5-fill fs-16"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                name="checkAll" value="option11">
                                        </div>
                                    </th>
                                    <td class="id" style="display:none;"><a
                                            href="javascript:void(0);"
                                            class="fw-medium link-primary">#VZ2111</a></td>
                                    <td class="customer_name">Johnny Evans</td>
                                    <td class="email">johnnyevans@velzon.com</td>
                                    <td class="phone">407-645-1767</td>
                                    <td class="date">01 Oct, 2021</td>
                                    <td class="status"><span
                                            class="badge badge-soft-danger text-uppercase">Block</span>
                                    </td>
                                    <td>
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <li class="list-inline-item edit"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Edit">
                                                <a href="#showModal" data-bs-toggle="modal"
                                                    class="text-primary d-inline-block edit-item-btn">
                                                    <i class="ri-pencil-fill fs-16"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item remove"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Remove">
                                                <a data-bs-toggle="modal" href="#deleteRecordModal"
                                                    class="text-danger d-inline-block remove-item-btn">
                                                    <i class="ri-delete-bin-5-fill fs-16"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                name="checkAll" value="option12">
                                        </div>
                                    </th>
                                    <td class="id" style="display:none;"><a
                                            href="javascript:void(0);"
                                            class="fw-medium link-primary">#VZ2112</a></td>
                                    <td class="customer_name">Kevin Dawson</td>
                                    <td class="email">kevindawson@velzon.com</td>
                                    <td class="phone">213-741-4294</td>
                                    <td class="date">14 Apr, 2021</td>
                                    <td class="status"><span
                                            class="badge badge-soft-success text-uppercase">Active</span>
                                    </td>
                                    <td>
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <li class="list-inline-item edit"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Edit">
                                                <a href="#showModal" data-bs-toggle="modal"
                                                    class="text-primary d-inline-block edit-item-btn">
                                                    <i class="ri-pencil-fill fs-16"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item remove"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Remove">
                                                <a data-bs-toggle="modal" href="#deleteRecordModal"
                                                    class="text-danger d-inline-block remove-item-btn">
                                                    <i class="ri-delete-bin-5-fill fs-16"></i>
                                                </a>
                                            </li>
                                        </ul>
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
                                <p class="text-muted mb-0">We've searched more than 150+ customer We
                                    did not find any
                                    customer for you search.</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
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
                <div class="modal fade" id="showModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-light p-3">
                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close" id="close-modal"></button>
                            </div>
                            <form action="#">
                                <div class="modal-body">
                                    <input type="hidden" id="id-field" />

                                    <div class="mb-3" id="modal-id" style="display: none;">
                                        <label for="id-field1" class="form-label">ID</label>
                                        <input type="text" id="id-field1" class="form-control"
                                            placeholder="ID" readonly />
                                    </div>

                                    <div class="mb-3">
                                        <label for="customername-field" class="form-label">Customer
                                            Name</label>
                                        <input type="text" id="customername-field"
                                            class="form-control" placeholder="Enter name"
                                            required />
                                    </div>

                                    <div class="mb-3">
                                        <label for="email-field" class="form-label">Email</label>
                                        <input type="email" id="email-field" class="form-control"
                                            placeholder="Enter email" required />
                                    </div>

                                    <div class="mb-3">
                                        <label for="phone-field" class="form-label">Phone</label>
                                        <input type="text" id="phone-field" class="form-control"
                                            placeholder="Enter phone no." required />
                                    </div>

                                    <div class="mb-3">
                                        <label for="date-field" class="form-label">Joining
                                            Date</label>
                                        <input type="date" id="date-field" class="form-control"
                                            data-provider="flatpickr" data-date-format="d M, Y"
                                            required placeholder="Select date" />
                                    </div>

                                    <div>
                                        <label for="status-field" class="form-label">Status</label>
                                        <select class="form-control" data-trigger
                                            name="status-field" id="status-field">
                                            <option value="">Status</option>
                                            <option value="Active">Active</option>
                                            <option value="Block">Block</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="hstack gap-2 justify-content-end">
                                        <button type="button" class="btn btn-light"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success"
                                            id="add-btn">Add Customer</button>
                                        <button type="button" class="btn btn-success"
                                            id="edit-btn">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close" id="btn-close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mt-2 text-center">
                                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json"
                                        trigger="loop" colors="primary:#f7b84b,secondary:#f06548"
                                        style="width:100px;height:100px"></lord-icon>
                                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                        <h4>Are you sure ?</h4>
                                        <p class="text-muted mx-4 mb-0">Are you sure you want to
                                            remove this record ?</p>
                                    </div>
                                </div>
                                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                    <button type="button" class="btn w-sm btn-light"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn w-sm btn-danger "
                                        id="delete-record">Yes, Delete It!</button>
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
<script src="assets/libs/list.js/list.js.min.js"></script>
        <script src="assets/libs/list.pagination.js/list.pagination.js.min.js"></script>

        <!--ecommerce-customer init js -->
        <script src="assets/js/pages/ecommerce-customer-list.init.js"></script>

<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
