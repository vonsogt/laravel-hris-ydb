@extends('layouts.master')
@section('title') @lang('translation.companies') @endsection
@section('css')
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') CRM @endslot
@slot('title') Companies @endslot
@endcomponent
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center flex-wrap gap-2">
                    <div class="flex-grow-1">
                        <button class="btn btn-info add-btn" data-bs-toggle="modal"
                            data-bs-target="#showModal"><i
                                class="ri-add-fill me-1 align-bottom"></i> Add Company</button>
                    </div>
                    <div class="flex-shrink-0">
                        <div class="hstack text-nowrap gap-2">
                            <button class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#addmembers"><i
                                    class="ri-filter-2-line me-1 align-bottom"></i> Filters</button>
                            <button class="btn btn-soft-success">Import</button>
                            <button type="button" id="dropdownMenuLink1" data-bs-toggle="dropdown"
                                aria-expanded="false" class="btn btn-soft-info"><i
                                    class="ri-more-2-fill"></i></button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                <li><a class="dropdown-item" href="#">All</a></li>
                                <li><a class="dropdown-item" href="#">Last Week</a></li>
                                <li><a class="dropdown-item" href="#">Last Month</a></li>
                                <li><a class="dropdown-item" href="#">Last Year</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
    <div class="col-xxl-9">
        <div class="card" id="companyList">
            <div class="card-header">
                <div class="row g-2">
                    <div class="col-md-3">
                        <div class="search-box">
                            <input type="text" class="form-control search"
                                placeholder="Search for company...">
                            <i class="ri-search-line search-icon"></i>
                        </div>
                    </div>
                    <div class="col-md-auto ms-auto">
                        <div class="d-flex align-items-center gap-2">
                            <span class="text-muted">Sort by: </span>
                            <select class="form-control mb-0" data-choices data-choices-search-false
                                id="choices-single-default">
                                <option value="Owner">Owner</option>
                                <option value="Company">Company</option>
                                <option value="location">Location</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div>
                    <div class="table-responsive table-card mb-3">
                        <table class="table align-middle table-nowrap mb-0" id="customerTable">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col" style="width: 50px;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                id="checkAll" value="option">
                                        </div>
                                    </th>
                                    <th class="sort" data-sort="name" scope="col">Company Name</th>
                                    <th class="sort" data-sort="owner" scope="col">Owner</th>
                                    <th class="sort" data-sort="industry_type" scope="col">Industry
                                        Type</th>
                                    <th class="sort" data-sort="star_value" scope="col">Rating</th>
                                    <th class="sort" data-sort="location" scope="col">Location</th>
                                    <th scope="col">Action</th>
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
                                            class="fw-medium link-primary">#VZ001</a></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{ URL::asset('assets/images/brands/dribbble.png') }}" alt=""
                                                    class="avatar-xxs rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-2 name">Nesta Technologies
                                            </div>
                                        </div>
                                    </td>
                                    <td class="owner">Tonya Noble</td>
                                    <td class="industry_type">Computer Industry</td>
                                    <td><span class="star_value">4.5</span> <i
                                            class="ri-star-fill text-warning align-bottom"></i></td>
                                    <td class="location">Los Angeles, USA</td>
                                    <td>
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <li class="list-inline-item edit"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Call">
                                                <a href="javascript:void(0);"
                                                    class="text-muted d-inline-block">
                                                    <i class="ri-phone-line fs-16"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item edit"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Message">
                                                <a href="javascript:void(0);"
                                                    class="text-muted d-inline-block">
                                                    <i class="ri-question-answer-line fs-16"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="top"
                                                title="View">
                                                <a href="javascript:void(0);"><i
                                                        class="ri-eye-fill align-bottom text-muted"></i></a>
                                            </li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="top"
                                                title="Edit">
                                                <a class="edit-item-btn" href="#showModal"
                                                    data-bs-toggle="modal"><i
                                                        class="ri-pencil-fill align-bottom text-muted"></i></a>
                                            </li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="top"
                                                title="Delete">
                                                <a class="remove-item-btn" data-bs-toggle="modal"
                                                    href="#deleteRecordModal">
                                                    <i
                                                        class="ri-delete-bin-fill align-bottom text-muted"></i>
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
                                            class="fw-medium link-primary">#VZ002</a></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{ URL::asset('assets/images/brands/bitbucket.png') }}" alt=""
                                                    class="avatar-xxs rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-2 name">iTest Factory</div>
                                        </div>
                                    </td>
                                    <td class="owner">Thomas Taylor</td>
                                    <td class="industry_type">Chemical Industries</td>
                                    <td><span class="star_value">3.8</span> <i
                                            class="ri-star-fill text-warning align-bottom"></i></td>
                                    <td class="location">Berlin, Germany</td>
                                    <td>
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <li class="list-inline-item edit"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Call">
                                                <a href="javascript:void(0);"
                                                    class="text-muted d-inline-block">
                                                    <i class="ri-phone-line fs-16"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item edit"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Message">
                                                <a href="javascript:void(0);"
                                                    class="text-muted d-inline-block">
                                                    <i class="ri-question-answer-line fs-16"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="top"
                                                title="View">
                                                <a href="javascript:void(0);"><i
                                                        class="ri-eye-fill align-bottom text-muted"></i></a>
                                            </li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="top"
                                                title="Edit">
                                                <a class="edit-item-btn" href="#showModal"
                                                    data-bs-toggle="modal"><i
                                                        class="ri-pencil-fill align-bottom text-muted"></i></a>
                                            </li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="top"
                                                title="Delete">
                                                <a class="remove-item-btn" data-bs-toggle="modal"
                                                    href="#deleteRecordModal">
                                                    <i
                                                        class="ri-delete-bin-fill align-bottom text-muted"></i>
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
                                            class="fw-medium link-primary">#VZ003</a></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{ URL::asset('assets/images/companies/img-8.png') }}" alt=""
                                                    class="avatar-xxs rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-2 name">Force Medicines</div>
                                        </div>
                                    </td>
                                    <td class="owner">Glen Matney</td>
                                    <td class="industry_type">Health Services</td>
                                    <td><span class="star_value">4.1</span> <i
                                            class="ri-star-fill text-warning align-bottom"></i></td>
                                    <td class="location">Phoenix, USA</td>
                                    <td>
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <li class="list-inline-item edit"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Call">
                                                <a href="javascript:void(0);"
                                                    class="text-muted d-inline-block">
                                                    <i class="ri-phone-line fs-16"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item edit"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Message">
                                                <a href="javascript:void(0);"
                                                    class="text-muted d-inline-block">
                                                    <i class="ri-question-answer-line fs-16"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="top"
                                                title="View">
                                                <a href="javascript:void(0);"><i
                                                        class="ri-eye-fill align-bottom text-muted"></i></a>
                                            </li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="top"
                                                title="Edit">
                                                <a class="edit-item-btn" href="#showModal"
                                                    data-bs-toggle="modal"><i
                                                        class="ri-pencil-fill align-bottom text-muted"></i></a>
                                            </li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="top"
                                                title="Delete">
                                                <a class="remove-item-btn" data-bs-toggle="modal"
                                                    href="#deleteRecordModal">
                                                    <i
                                                        class="ri-delete-bin-fill align-bottom text-muted"></i>
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
                                            class="fw-medium link-primary">#VZ004</a></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{ URL::asset('assets/images/companies/img-1.png') }}" alt=""
                                                    class="avatar-xxs rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-2 name">Digitech Galaxy</div>
                                        </div>
                                    </td>
                                    <td class="owner">Alexis Clarke</td>
                                    <td class="industry_type">Telecommunications Services</td>
                                    <td><span class="star_value">3.2 </span><i
                                            class="ri-star-fill text-warning align-bottom"></i></td>
                                    <td class="location">Bogota, Colombia</td>
                                    <td>
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <li class="list-inline-item edit"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Call">
                                                <a href="javascript:void(0);"
                                                    class="text-muted d-inline-block">
                                                    <i class="ri-phone-line fs-16"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item edit"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Message">
                                                <a href="javascript:void(0);"
                                                    class="text-muted d-inline-block">
                                                    <i class="ri-question-answer-line fs-16"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="top"
                                                title="View">
                                                <a href="javascript:void(0);"><i
                                                        class="ri-eye-fill align-bottom text-muted"></i></a>
                                            </li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="top"
                                                title="Edit">
                                                <a class="edit-item-btn" href="#showModal"
                                                    data-bs-toggle="modal"><i
                                                        class="ri-pencil-fill align-bottom text-muted"></i></a>
                                            </li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="top"
                                                title="Delete">
                                                <a class="remove-item-btn" data-bs-toggle="modal"
                                                    href="#deleteRecordModal">
                                                    <i
                                                        class="ri-delete-bin-fill align-bottom text-muted"></i>
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
                                            class="fw-medium link-primary">#VZ005</a></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{ URL::asset('assets/images/companies/img-6.png') }}" alt=""
                                                    class="avatar-xxs rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-2 name">Zoetic Fashion</div>
                                        </div>
                                    </td>
                                    <td class="owner">James Price</td>
                                    <td class="industry_type">Textiles: Clothing, Footwear</td>
                                    <td><span class="star_value">4.4</span> <i
                                            class="ri-star-fill text-warning align-bottom"></i></td>
                                    <td class="location">Brasilia, Brazil</td>
                                    <td>
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <li class="list-inline-item edit"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Call">
                                                <a href="javascript:void(0);"
                                                    class="text-muted d-inline-block">
                                                    <i class="ri-phone-line fs-16"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item edit"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Message">
                                                <a href="javascript:void(0);"
                                                    class="text-muted d-inline-block">
                                                    <i class="ri-question-answer-line fs-16"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="top"
                                                title="View">
                                                <a href="javascript:void(0);"><i
                                                        class="ri-eye-fill align-bottom text-muted"></i></a>
                                            </li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="top"
                                                title="Edit">
                                                <a class="edit-item-btn" href="#showModal"
                                                    data-bs-toggle="modal"><i
                                                        class="ri-pencil-fill align-bottom text-muted"></i></a>
                                            </li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="top"
                                                title="Delete">
                                                <a class="remove-item-btn" data-bs-toggle="modal"
                                                    href="#deleteRecordModal">
                                                    <i
                                                        class="ri-delete-bin-fill align-bottom text-muted"></i>
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
                                            class="fw-medium link-primary">#VZ006</a></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{ URL::asset('assets/images/brands/dropbox.png') }}" alt=""
                                                    class="avatar-xxs rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-2 name">Micro Design</div>
                                        </div>
                                    </td>
                                    <td class="owner">Mary Cousar</td>
                                    <td class="industry_type">Financial Services</td>
                                    <td><span class="star_value">2.7</span> <i
                                            class="ri-star-fill text-warning align-bottom"></i></td>
                                    <td class="location">Windhoek, Namibia</td>
                                    <td>
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <li class="list-inline-item edit"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Call">
                                                <a href="javascript:void(0);"
                                                    class="text-muted d-inline-block">
                                                    <i class="ri-phone-line fs-16"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item edit"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Message">
                                                <a href="javascript:void(0);"
                                                    class="text-muted d-inline-block">
                                                    <i class="ri-question-answer-line fs-16"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="top"
                                                title="View">
                                                <a href="javascript:void(0);"><i
                                                        class="ri-eye-fill align-bottom text-muted"></i></a>
                                            </li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="top"
                                                title="Edit">
                                                <a class="edit-item-btn" href="#showModal"
                                                    data-bs-toggle="modal"><i
                                                        class="ri-pencil-fill align-bottom text-muted"></i></a>
                                            </li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="top"
                                                title="Delete">
                                                <a class="remove-item-btn" data-bs-toggle="modal"
                                                    href="#deleteRecordModal">
                                                    <i
                                                        class="ri-delete-bin-fill align-bottom text-muted"></i>
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
                                            class="fw-medium link-primary">#VZ007</a></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{ URL::asset('assets/images/brands/mail_chimp.png') }}"
                                                    alt="" class="avatar-xxs rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-2 name">Syntyce Solutions
                                            </div>
                                        </div>
                                    </td>
                                    <td class="owner">Michael Morris</td>
                                    <td class="industry_type">Chemical Industries</td>
                                    <td><span class="star_value">4.0</span> <i
                                            class="ri-star-fill text-warning align-bottom"></i></td>
                                    <td class="location">Damascus, Syria</td>
                                    <td>
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <li class="list-inline-item edit"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Call">
                                                <a href="javascript:void(0);"
                                                    class="text-muted d-inline-block">
                                                    <i class="ri-phone-line fs-16"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item edit"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Message">
                                                <a href="javascript:void(0);"
                                                    class="text-muted d-inline-block">
                                                    <i class="ri-question-answer-line fs-16"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="top"
                                                title="View">
                                                <a href="javascript:void(0);"><i
                                                        class="ri-eye-fill align-bottom text-muted"></i></a>
                                            </li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="top"
                                                title="Edit">
                                                <a class="edit-item-btn" href="#showModal"
                                                    data-bs-toggle="modal"><i
                                                        class="ri-pencil-fill align-bottom text-muted"></i></a>
                                            </li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="top"
                                                title="Delete">
                                                <a class="remove-item-btn" data-bs-toggle="modal"
                                                    href="#deleteRecordModal">
                                                    <i
                                                        class="ri-delete-bin-fill align-bottom text-muted"></i>
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
                                            class="fw-medium link-primary">#VZ008</a></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{ URL::asset('assets/images/companies/img-3.png') }}" alt=""
                                                    class="avatar-xxs rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-2 name">Meta4Systems</div>
                                        </div>
                                    </td>
                                    <td class="owner">Nancy Martino</td>
                                    <td class="industry_type">Computer Industry</td>
                                    <td><span class="star_value">3.3</span> <i
                                            class="ri-star-fill text-warning align-bottom"></i></td>
                                    <td class="location">London, UK</td>
                                    <td>
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <li class="list-inline-item edit"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Call">
                                                <a href="javascript:void(0);"
                                                    class="text-muted d-inline-block">
                                                    <i class="ri-phone-line fs-16"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item edit"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Message">
                                                <a href="javascript:void(0);"
                                                    class="text-muted d-inline-block">
                                                    <i class="ri-question-answer-line fs-16"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="top"
                                                title="View">
                                                <a href="javascript:void(0);"><i
                                                        class="ri-eye-fill align-bottom text-muted"></i></a>
                                            </li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="top"
                                                title="Edit">
                                                <a class="edit-item-btn" href="#showModal"
                                                    data-bs-toggle="modal"><i
                                                        class="ri-pencil-fill align-bottom text-muted"></i></a>
                                            </li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="top"
                                                title="Delete">
                                                <a class="remove-item-btn" data-bs-toggle="modal"
                                                    href="#deleteRecordModal">
                                                    <i
                                                        class="ri-delete-bin-fill align-bottom text-muted"></i>
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
                                            class="fw-medium link-primary">#VZ009</a></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{ URL::asset('assets/images/companies/img-4.png') }}" alt=""
                                                    class="avatar-xxs rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-2 name">Moetic Fashion</div>
                                        </div>
                                    </td>
                                    <td class="owner">Timothy Smith</td>
                                    <td class="industry_type">Textiles: Clothing, Footwear</td>
                                    <td><span class="star_value">4.9</span> <i
                                            class="ri-star-fill text-warning align-bottom"></i></td>
                                    <td class="location">Damascus, Syria</td>
                                    <td>
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <li class="list-inline-item edit"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Call">
                                                <a href="javascript:void(0);"
                                                    class="text-muted d-inline-block">
                                                    <i class="ri-phone-line fs-16"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item edit"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Message">
                                                <a href="javascript:void(0);"
                                                    class="text-muted d-inline-block">
                                                    <i class="ri-question-answer-line fs-16"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="top"
                                                title="View">
                                                <a href="javascript:void(0);"><i
                                                        class="ri-eye-fill align-bottom text-muted"></i></a>
                                            </li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="top"
                                                title="Edit">
                                                <a class="edit-item-btn" href="#showModal"
                                                    data-bs-toggle="modal"><i
                                                        class="ri-pencil-fill align-bottom text-muted"></i></a>
                                            </li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="top"
                                                title="Delete">
                                                <a class="remove-item-btn" data-bs-toggle="modal"
                                                    href="#deleteRecordModal">
                                                    <i
                                                        class="ri-delete-bin-fill align-bottom text-muted"></i>
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
                                            class="fw-medium link-primary">#VZ010</a></td>
                                    <td class="name">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img src="{{ URL::asset('assets/images/brands/slack.png') }}" alt=""
                                                    class="avatar-xxs rounded-circle">
                                            </div>
                                            <div class="flex-grow-1 ms-2 name">Syntyce Solutions
                                            </div>
                                        </div>
                                    </td>
                                    <td class="owner">Herbert Stokes</td>
                                    <td class="industry_type">Health Services</td>
                                    <td><span class="star_value">2.9</span> <i
                                            class="ri-star-fill text-warning align-bottom"></i></td>
                                    <td class="location">Berlin, Germany</td>
                                    <td>
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <li class="list-inline-item edit"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Call">
                                                <a href="javascript:void(0);"
                                                    class="text-muted d-inline-block">
                                                    <i class="ri-phone-line fs-16"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item edit"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                data-bs-placement="top" title="Message">
                                                <a href="javascript:void(0);"
                                                    class="text-muted d-inline-block">
                                                    <i class="ri-question-answer-line fs-16"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="top"
                                                title="View">
                                                <a href="javascript:void(0);"><i
                                                        class="ri-eye-fill align-bottom text-muted"></i></a>
                                            </li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="top"
                                                title="Edit">
                                                <a class="edit-item-btn" href="#showModal"
                                                    data-bs-toggle="modal"><i
                                                        class="ri-pencil-fill align-bottom text-muted"></i></a>
                                            </li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="top"
                                                title="Delete">
                                                <a class="remove-item-btn" data-bs-toggle="modal"
                                                    href="#deleteRecordModal">
                                                    <i
                                                        class="ri-delete-bin-fill align-bottom text-muted"></i>
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
                                <p class="text-muted mb-0">We've searched more than 150+ companies
                                    We did not find any
                                    companies for you search.</p>
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
                <div class="modal fade" id="showModal" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content border-0">
                            <div class="modal-header bg-soft-info p-3">
                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close" id="close-modal"></button>
                            </div>
                            <form action="">
                                <div class="modal-body">
                                    <input type="hidden" id="id-field" />
                                    <div class="row g-3">
                                        <div class="col-lg-12">
                                            <div>
                                                <label for="name-field"
                                                    class="form-label">Name</label>
                                                <input type="text" id="customername-field"
                                                    class="form-control"
                                                    placeholder="Enter company name" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div>
                                                <label for="owner-field" class="form-label">Owner
                                                    Name</label>
                                                <input type="text" id="owner-field"
                                                    class="form-control"
                                                    placeholder="Enter owner name" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div>
                                                <label for="industry_type-field"
                                                    class="form-label">Industry Type</label>
                                                <select class="form-control"
                                                    id="industry_type-field">
                                                    <option value="">Select industry type</option>
                                                    <option value="Computer Industry">Computer
                                                        Industry</option>
                                                    <option value="Chemical Industries">Chemical
                                                        Industries</option>
                                                    <option value="Health Services">Health Services
                                                    </option>
                                                    <option value="Telecommunications Services">
                                                        Telecommunications Services</option>
                                                    <option value="Textiles: Clothing, Footwear">
                                                        Textiles: Clothing, Footwear</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div>
                                                <label for="star_value-field"
                                                    class="form-label">Rating</label>
                                                <input type="text" id="star_value-field"
                                                    class="form-control" placeholder="Enter rating"
                                                    required />
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div>
                                                <label for="location-field"
                                                    class="form-label">location</label>
                                                <input type="text" id="location-field"
                                                    class="form-control"
                                                    placeholder="Enter location" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="hstack gap-2 justify-content-end">
                                        <button type="button" class="btn btn-light"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success"
                                            id="add-btn">Add Company</button>
                                        <button type="button" class="btn btn-success"
                                            id="edit-btn">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--end add modal-->

                <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1"
                    aria-labelledby="deleteRecordLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close" id="btn-close"></button>
                            </div>
                            <div class="modal-body p-5 text-center">
                                <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json"
                                    trigger="loop" colors="primary:#405189,secondary:#f06548"
                                    style="width:90px;height:90px"></lord-icon>
                                <div class="mt-4 text-center">
                                    <h4 class="fs-semibold">You are about to delete a company ?</h4>
                                    <p class="text-muted fs-14 mb-4 pt-1">Deleting your company will
                                        remove all of your information from our database.</p>
                                    <div class="hstack gap-2 justify-content-center remove">
                                        <button
                                            class="btn btn-link link-success fw-medium text-decoration-none"
                                            data-bs-dismiss="modal"><i
                                                class="ri-close-line me-1 align-middle"></i>
                                            Close</button>
                                        <button class="btn btn-danger" id="delete-record">Yes,
                                            Delete It!!</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end delete modal -->

            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-xxl-3">
        <div class="card">
            <div class="card-body text-center">
                <div class="position-relative d-inline-block">
                    <div class="avatar-md">
                        <div class="avatar-title bg-light rounded-circle">
                            <img src="{{ URL::asset('assets/images/brands/mail_chimp.png') }}" alt="" class="avatar-xs">
                        </div>
                    </div>
                </div>
                <h5 class="mt-3 mb-1">Syntyce Solution</h5>
                <p class="text-muted">Michael Morris</p>

                <ul class="list-inline mb-0">
                    <li class="list-inline-item avatar-xs">
                        <a href="javascript:void(0);"
                            class="avatar-title bg-soft-success text-success fs-15 rounded">
                            <i class="ri-global-line"></i>
                        </a>
                    </li>
                    <li class="list-inline-item avatar-xs">
                        <a href="javascript:void(0);"
                            class="avatar-title bg-soft-danger text-danger fs-15 rounded">
                            <i class="ri-mail-line"></i>
                        </a>
                    </li>
                    <li class="list-inline-item avatar-xs">
                        <a href="javascript:void(0);"
                            class="avatar-title bg-soft-warning text-warning fs-15 rounded">
                            <i class="ri-question-answer-line"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <h6 class="text-muted text-uppercase fw-semibold mb-3">Information</h6>
                <p class="text-muted mb-4">A company incurs fixed and variable costs such as the
                    purchase of raw materials, salaries and overhead, as explained by
                    AccountingTools, Inc. Business owners have the discretion to determine the
                    actions.</p>
                <div class="table-responsive table-card">
                    <table class="table table-borderless mb-0">
                        <tbody>
                            <tr>
                                <td class="fw-medium" scope="row">Industry Type</td>
                                <td>Chemical Industries</td>
                            </tr>
                            <tr>
                                <td class="fw-medium" scope="row">Location</td>
                                <td>Damascus, Syria</td>
                            </tr>
                            <tr>
                                <td class="fw-medium" scope="row">Employee</td>
                                <td>10-50</td>
                            </tr>
                            <tr>
                                <td class="fw-medium" scope="row">Rating</td>
                                <td>4.0 <i class="ri-star-fill text-warning align-bottom"></i></td>
                            </tr>
                            <tr>
                                <td class="fw-medium" scope="row">Website</td>
                                <td>
                                    <a href="javascript:void(0);"
                                        class="link-primary text-decoration-underline">www.syntycesolution.com</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-medium" scope="row">Contact Email</td>
                                <td>info@syntycesolution.com</td>
                            </tr>
                            <tr>
                                <td class="fw-medium" scope="row">Since</td>
                                <td>1995</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
</div>
<!--end row-->

@endsection
@section('script')
<script src="{{ URL::asset('/assets/libs/list.js/list.js.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/list.pagination.js/list.pagination.js.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/crm-companies.init.js') }}"></script>
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
