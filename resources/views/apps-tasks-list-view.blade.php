@extends('layouts.master')
@section('title') @lang('translation.list-view') @endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Tasks @endslot
        @slot('title')Tasks view @endslot
    @endcomponent

    <div class="row">
        <div class="col-xxl-3 col-sm-6">
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="fw-medium text-muted mb-0">Total Tasks</p>
                            <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="234">0</span>k
                            </h2>
                            <p class="mb-0 text-muted"><span class="badge bg-light text-success mb-0">
                                    <i class="ri-arrow-up-line align-middle"></i> 17.32 %
                                </span> vs. previous month</p>
                        </div>
                        <div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-soft-info text-info rounded-circle fs-4">
                                    <i class="ri-ticket-2-line"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div> <!-- end card-->
        </div>
        <!--end col-->
        <div class="col-xxl-3 col-sm-6">
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="fw-medium text-muted mb-0">Pending Tasks</p>
                            <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value"
                                    data-target="64.5">0</span>k</h2>
                            <p class="mb-0 text-muted"><span class="badge bg-light text-danger mb-0">
                                    <i class="ri-arrow-down-line align-middle"></i> 0.87 %
                                </span> vs. previous month</p>
                        </div>
                        <div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-soft-warning text-warning rounded-circle fs-4">
                                    <i class="mdi mdi-timer-sand"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div>
        </div>
        <!--end col-->
        <div class="col-xxl-3 col-sm-6">
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="fw-medium text-muted mb-0">Completed Tasks</p>
                            <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value"
                                    data-target="116.21">0</span>K</h2>
                            <p class="mb-0 text-muted"><span class="badge bg-light text-danger mb-0">
                                    <i class="ri-arrow-down-line align-middle"></i> 2.52 %
                                </span> vs. previous month</p>
                        </div>
                        <div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-soft-success text-success rounded-circle fs-4">
                                    <i class="ri-checkbox-circle-line"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div>
        </div>
        <!--end col-->
        <div class="col-xxl-3 col-sm-6">
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="fw-medium text-muted mb-0">Deleted Tasks</p>
                            <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value"
                                    data-target="14.84">0</span>%</h2>
                            <p class="mb-0 text-muted"><span class="badge bg-light text-success mb-0">
                                    <i class="ri-arrow-up-line align-middle"></i> 0.63 %
                                </span> vs. previous month</p>
                        </div>
                        <div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-soft-danger text-danger rounded-circle fs-4">
                                    <i class="ri-delete-bin-line"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->

    <div class="row">
        <div class="col-lg-12">
            <div class="card" id="tasksList">
                <div class="card-header border-0">
                    <div class="d-flex align-items-center">
                        <h5 class="card-title mb-0 flex-grow-1">All Tasks</h5>
                        <div class="flex-shrink-0">
                            <button class="btn btn-danger add-btn" data-bs-toggle="modal" data-bs-target="#showModal"><i
                                    class="ri-add-line align-bottom me-1"></i> Create Task</button>
                        </div>
                    </div>
                </div>
                <div class="card-body border border-dashed border-end-0 border-start-0">
                    <form>
                        <div class="row g-3">
                            <div class="col-xxl-5 col-sm-12">
                                <div class="search-box">
                                    <input type="text" class="form-control search bg-light border-light"
                                        placeholder="Search for tasks or something...">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-xxl-3 col-sm-4">
                                <input type="text" class="form-control bg-light border-light" id="demo-datepicker"
                                    data-provider="flatpickr" data-date-format="d M, Y" data-range-date="true"
                                    placeholder="Select date range">
                            </div>
                            <!--end col-->

                            <div class="col-xxl-3 col-sm-4">
                                <div class="input-light">
                                    <select class="form-control" data-choices data-choices-search-false
                                        name="choices-single-default" id="idStatus">
                                        <option value="">Status</option>
                                        <option value="all" selected>All</option>
                                        <option value="New">New</option>
                                        <option value="Pending">Pending</option>
                                        <option value="Inprogress">Inprogress</option>
                                        <option value="Completed">Completed</option>
                                    </select>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-1 col-sm-4">
                                <button type="button" class="btn btn-primary w-100" onclick="SearchData();"> <i
                                        class="ri-equalizer-fill me-1 align-bottom"></i>
                                    Filters
                                </button>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </form>
                </div>
                <!--end card-body-->
                <div class="card-body">
                    <div class="table-responsive table-card mb-4">
                        <table class="table align-middle table-nowrap mb-0" id="tasksTable">
                            <thead class="table-light text-muted">
                                <tr>
                                    <th scope="col" style="width: 40px;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                        </div>
                                    </th>
                                    <th class="sort" data-sort="id">ID</th>
                                    <th class="sort" data-sort="project_name">Project</th>
                                    <th class="sort" data-sort="tasks_name">Task</th>
                                    <th class="sort" data-sort="client_name">Created By</th>
                                    <th class="sort" data-sort="assignedto">Assigned To</th>
                                    <th class="sort" data-sort="due_date">Due Date</th>
                                    <th class="sort" data-sort="status">Status</th>
                                    <th class="sort" data-sort="priority">Priority</th>
                                </tr>
                            </thead>
                            <tbody class="list form-check-all">
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                        </div>
                                    </th>
                                    <td class="id"><a href="apps-tasks-details"
                                            class="fw-medium link-primary">#VLZ632</a></td>
                                    <td class="project_name"><a href="apps-projects-overview"
                                            class="fw-medium link-primary">Velzon - v1.0.0</a></td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="flex-grow-1 tasks_name">Error message when placing an orders?</div>
                                            <div class="flex-shrink-0 ms-4">
                                                <ul class="list-inline tasks-list-menu mb-0">
                                                    <li class="list-inline-item"><a href="apps-tasks-details"><i
                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a href="#"><i
                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="remove-item-btn" data-bs-toggle="modal"
                                                            href="#deleteOrder">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="client_name">Robert McMahon</td>
                                    <td class="assignedto">
                                        <div class="avatar-group">
                                            <a href="javascript: void(0);" class="avatar-group-item"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                                title="Frank">
                                                <img src="{{ URL::asset('assets/images/users/avatar-3.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xxs" />
                                            </a>
                                            <a href="javascript: void(0);" class="avatar-group-item"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                                title="Anna">
                                                <img src="{{ URL::asset('assets/images/users/avatar-1.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xxs" />
                                            </a>
                                        </div>
                                    </td>
                                    <td class="due_date">25 Jan, 2022</td>
                                    <td class="status"><span
                                            class="badge badge-soft-secondary text-uppercase">Inprogress</span></td>
                                    <td class="priority"><span class="badge bg-danger text-uppercase">High</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="checkAll"
                                                value="option1">
                                        </div>
                                    </th>
                                    <td class="id"><a href="apps-tasks-details"
                                            class="fw-medium link-primary">#VLZ453</a></td>
                                    <td class="project_name"><a href="apps-projects-overview"
                                            class="fw-medium link-primary">Skote - v1.0.0</a></td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="flex-grow-1 tasks_name">Profile Page Satructure</div>
                                            <div class="flex-shrink-0 ms-4">
                                                <ul class="list-inline tasks-list-menu mb-0">
                                                    <li class="list-inline-item"><a href="apps-tasks-details"><i
                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a href="#"><i
                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="remove-item-btn" data-bs-toggle="modal"
                                                            href="#deleteOrder">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="client_name">Mary Cousar</td>
                                    <td class="assignedto">
                                        <div class="avatar-group">
                                            <a href="javascript: void(0);" class="avatar-group-item"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                                title="Tonya">
                                                <img src="{{ URL::asset('assets/images/users/avatar-10.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xxs" />
                                            </a>
                                            <a href="javascript: void(0);" class="avatar-group-item"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                                title="Donald">
                                                <img src="{{ URL::asset('assets/images/users/avatar-9.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xxs" />
                                            </a>
                                            <a href="javascript: void(0);" class="avatar-group-item"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                                title="Nancy">
                                                <img src="{{ URL::asset('assets/images/users/avatar-5.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xxs" />
                                            </a>
                                        </div>
                                    </td>
                                    <td class="due_date">20 Dec, 2021</td>
                                    <td class="status"><span
                                            class="badge badge-soft-info text-uppercase">New</span></td>
                                    <td class="priority"><span class="badge bg-success text-uppercase">Low</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="checkAll"
                                                value="option1">
                                        </div>
                                    </th>
                                    <td class="id"><a href="apps-tasks-details"
                                            class="fw-medium link-primary">#VLZ454</a></td>
                                    <td class="project_name"><a href="apps-projects-overview"
                                            class="fw-medium link-primary">Skote - v2.3.0</a></td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="flex-grow-1 tasks_name">Apologize for shopping Error!</div>
                                            <div class="flex-shrink-0 ms-4">
                                                <ul class="list-inline tasks-list-menu mb-0">
                                                    <li class="list-inline-item"><a href="apps-tasks-details"><i
                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a href="#"><i
                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="remove-item-btn" data-bs-toggle="modal"
                                                            href="#deleteOrder">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="client_name">Nathan Cole</td>
                                    <td class="assignedto">
                                        <div class="avatar-group">
                                            <a href="javascript: void(0);" class="avatar-group-item"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                                title="Nancy">
                                                <img src="{{ URL::asset('assets/images/users/avatar-5.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xxs" />
                                            </a>
                                            <a href="javascript: void(0);" class="avatar-group-item"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                                title="Alexis">
                                                <img src="{{ URL::asset('assets/images/users/avatar-6.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xxs" />
                                            </a>
                                            <a href="javascript: void(0);" class="avatar-group-item"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                                title="Michael">
                                                <img src="{{ URL::asset('assets/images/users/avatar-7.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xxs" />
                                            </a>
                                            <a href="javascript: void(0);" class="avatar-group-item"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                                title="Thomas">
                                                <img src="{{ URL::asset('assets/images/users/avatar-8.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xxs" />
                                            </a>
                                        </div>
                                    </td>
                                    <td class="due_date">23 Oct, 2021</td>
                                    <td class="status"><span
                                            class="badge badge-soft-success text-uppercase">Completed</span></td>
                                    <td class="priority"><span class="badge bg-warning text-uppercase">Medium</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="checkAll"
                                                value="option1">
                                        </div>
                                    </th>
                                    <td class="id"><a href="apps-tasks-details"
                                            class="fw-medium link-primary">#VLZ455</a></td>
                                    <td class="project_name"><a href="apps-projects-overview"
                                            class="fw-medium link-primary">Minia - v1.4.0</a></td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="flex-grow-1 tasks_name">Post launch reminder/ post list</div>
                                            <div class="flex-shrink-0 ms-4">
                                                <ul class="list-inline tasks-list-menu mb-0">
                                                    <li class="list-inline-item"><a href="apps-tasks-details"><i
                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a href="#"><i
                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="remove-item-btn" data-bs-toggle="modal"
                                                            href="#deleteOrder">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="client_name">Joseph Parker</td>
                                    <td class="assignedto">
                                        <div class="avatar-group">
                                            <a href="javascript: void(0);" class="avatar-group-item"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                                title="Herbert">
                                                <img src="{{ URL::asset('assets/images/users/avatar-2.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xxs" />
                                            </a>
                                        </div>
                                    </td>
                                    <td class="due_date">05 Oct, 2021</td>
                                    <td class="status"><span
                                            class="badge badge-soft-warning text-uppercase">Pending</span></td>
                                    <td class="priority"><span class="badge bg-danger text-uppercase">High</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="checkAll"
                                                value="option1">
                                        </div>
                                    </th>
                                    <td class="id"><a href="apps-tasks-details"
                                            class="fw-medium link-primary">#VLZ456</a></td>
                                    <td class="project_name"><a href="apps-projects-overview"
                                            class="fw-medium link-primary">Minia - v1.2.0</a></td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="flex-grow-1 tasks_name">Make a creating an account profile</div>
                                            <div class="flex-shrink-0 ms-4">
                                                <ul class="list-inline tasks-list-menu mb-0">
                                                    <li class="list-inline-item"><a href="apps-tasks-details"><i
                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a href="#"><i
                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="remove-item-btn" data-bs-toggle="modal"
                                                            href="#deleteOrder">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="client_name">Henry Baird</td>
                                    <td class="assignedto">
                                        <div class="avatar-group">
                                            <a href="javascript: void(0);" class="avatar-group-item"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                                title="Frank">
                                                <img src="{{ URL::asset('assets/images/users/avatar-3.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xxs" />
                                            </a>
                                            <a href="javascript: void(0);" class="avatar-group-item"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                                title="Tonya">
                                                <img src="{{ URL::asset('assets/images/users/avatar-10.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xxs" />
                                            </a>
                                            <a href="javascript: void(0);" class="avatar-group-item"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                                title="Donald">
                                                <img src="{{ URL::asset('assets/images/users/avatar-9.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xxs" />
                                            </a>
                                        </div>
                                    </td>
                                    <td class="due_date">17 Oct, 2021</td>
                                    <td class="status"><span
                                            class="badge badge-soft-secondary text-uppercase">Inprogress</span></td>
                                    <td class="priority"><span class="badge bg-warning text-uppercase">Medium</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="checkAll"
                                                value="option1">
                                        </div>
                                    </th>
                                    <td class="id"><a href="apps-tasks-details"
                                            class="fw-medium link-primary">#VLZ457</a></td>
                                    <td class="project_name"><a href="apps-projects-overview"
                                            class="fw-medium link-primary">Minimal - v2.1.0</a></td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="flex-grow-1 tasks_name">Change email option process</div>
                                            <div class="flex-shrink-0 ms-4">
                                                <ul class="list-inline tasks-list-menu mb-0">
                                                    <li class="list-inline-item"><a href="apps-tasks-details"><i
                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a href="#"><i
                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="remove-item-btn" data-bs-toggle="modal"
                                                            href="#deleteOrder">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="client_name">Tonya Noble</td>
                                    <td class="assignedto">
                                        <div class="avatar-group">
                                            <a href="javascript: void(0);" class="avatar-group-item"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                                title="Alexis">
                                                <img src="{{ URL::asset('assets/images/users/avatar-6.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xxs" />
                                            </a>
                                            <a href="javascript: void(0);" class="avatar-group-item"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                                title="Michael">
                                                <img src="{{ URL::asset('assets/images/users/avatar-7.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xxs" />
                                            </a>
                                        </div>
                                    </td>
                                    <td class="due_date">04 Dec, 2021</td>
                                    <td class="status"><span
                                            class="badge badge-soft-success text-uppercase">Completed</span></td>
                                    <td class="priority"><span class="badge bg-danger text-uppercase">High</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="checkAll"
                                                value="option1">
                                        </div>
                                    </th>
                                    <td class="id"><a href="apps-tasks-details"
                                            class="fw-medium link-primary">#VLZ458</a></td>
                                    <td class="project_name"><a href="apps-projects-overview"
                                            class="fw-medium link-primary">Dason - v1.1.0</a></td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="flex-grow-1 tasks_name">User research</div>
                                            <div class="flex-shrink-0 ms-4">
                                                <ul class="list-inline tasks-list-menu mb-0">
                                                    <li class="list-inline-item"><a href="apps-tasks-details"><i
                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a href="#"><i
                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="remove-item-btn" data-bs-toggle="modal"
                                                            href="#deleteOrder">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="client_name">Donald Palmer</td>
                                    <td class="assignedto">
                                        <div class="avatar-group">
                                            <a href="javascript: void(0);" class="avatar-group-item"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                                title="Tonya">
                                                <img src="{{ URL::asset('assets/images/users/avatar-10.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xxs" />
                                            </a>
                                            <a href="javascript: void(0);" class="avatar-group-item"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                                title="Donald">
                                                <img src="{{ URL::asset('assets/images/users/avatar-9.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xxs" />
                                            </a>
                                            <a href="javascript: void(0);" class="avatar-group-item"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                                title="Thomas">
                                                <img src="{{ URL::asset('assets/images/users/avatar-8.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xxs" />
                                            </a>
                                            <a href="javascript: void(0);" class="avatar-group-item"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                                title="Anna">
                                                <img src="{{ URL::asset('assets/images/users/avatar-1.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xxs" />
                                            </a>
                                        </div>
                                    </td>
                                    <td class="due_date">11 Oct, 2021</td>
                                    <td class="status"><span
                                            class="badge badge-soft-info text-uppercase">New</span></td>
                                    <td class="priority"><span class="badge bg-success text-uppercase">Low</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="checkAll"
                                                value="option1">
                                        </div>
                                    </th>
                                    <td class="id"><a href="apps-tasks-details"
                                            class="fw-medium link-primary">#VLZ459</a></td>
                                    <td class="project_name"><a href="apps-projects-overview"
                                            class="fw-medium link-primary">Dorsin - Landing Page</a></td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="flex-grow-1 tasks_name">Benner design for FB & Twitter</div>
                                            <div class="flex-shrink-0 ms-4">
                                                <ul class="list-inline tasks-list-menu mb-0">
                                                    <li class="list-inline-item"><a href="apps-tasks-details"><i
                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a href="#"><i
                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="remove-item-btn" data-bs-toggle="modal"
                                                            href="#deleteOrder">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="client_name"> Carter</td>
                                    <td class="assignedto">
                                        <div class="avatar-group">
                                            <a href="javascript: void(0);" class="avatar-group-item"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                                title="Nancy">
                                                <img src="{{ URL::asset('assets/images/users/avatar-5.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xxs" />
                                            </a>
                                            <a href="javascript: void(0);" class="avatar-group-item"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                                title="Jennifer">
                                                <img src="{{ URL::asset('assets/images/users/avatar-4.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xxs" />
                                            </a>
                                        </div>
                                    </td>
                                    <td class="due_date">16 Dec, 2021</td>
                                    <td class="status"><span
                                            class="badge badge-soft-warning text-uppercase">Pending</span></td>
                                    <td class="priority"><span class="badge bg-warning text-uppercase">Medium</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="checkAll"
                                                value="option1">
                                        </div>
                                    </th>
                                    <td class="id"><a href="apps-tasks-details"
                                            class="fw-medium link-primary">#VLZ460</a></td>
                                    <td class="project_name"><a href="apps-projects-overview"
                                            class="fw-medium link-primary">Qexal - Landing Page</a></td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="flex-grow-1 tasks_name">Brand logo design</div>
                                            <div class="flex-shrink-0 ms-4">
                                                <ul class="list-inline tasks-list-menu mb-0">
                                                    <li class="list-inline-item"><a href="apps-tasks-details"><i
                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a href="#"><i
                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="remove-item-btn" data-bs-toggle="modal"
                                                            href="#deleteOrder">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="client_name">David Nichols</td>
                                    <td class="assignedto">
                                        <div class="avatar-group">
                                            <a href="javascript: void(0);" class="avatar-group-item"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                                title="Alexis">
                                                <img src="{{ URL::asset('assets/images/users/avatar-6.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xxs" />
                                            </a>
                                            <a href="javascript: void(0);" class="avatar-group-item"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                                title="Michael">
                                                <img src="{{ URL::asset('assets/images/users/avatar-7.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xxs" />
                                            </a>
                                            <a href="javascript: void(0);" class="avatar-group-item"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                                title="Thomas">
                                                <img src="{{ URL::asset('assets/images/users/avatar-8.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xxs" />
                                            </a>
                                        </div>
                                    </td>
                                    <td class="due_date">29 Dec, 2021</td>
                                    <td class="status"><span
                                            class="badge badge-soft-warning text-uppercase">Pending</span></td>
                                    <td class="priority"><span class="badge bg-danger text-uppercase">High</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="checkAll"
                                                value="option1">
                                        </div>
                                    </th>
                                    <td class="id"><a href="apps-tasks-details"
                                            class="fw-medium link-primary">#VLZ461</a></td>
                                    <td class="project_name"><a href="apps-projects-overview"
                                            class="fw-medium link-primary">Doot - Chat App Template</a></td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="flex-grow-1 tasks_name">Additional Calendar</div>
                                            <div class="flex-shrink-0 ms-4">
                                                <ul class="list-inline tasks-list-menu mb-0">
                                                    <li class="list-inline-item"><a href="apps-tasks-details"><i
                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a href="#"><i
                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="remove-item-btn" data-bs-toggle="modal"
                                                            href="#deleteOrder">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="client_name">Diana Kohler</td>
                                    <td class="assignedto">
                                        <div class="avatar-group">
                                            <a href="javascript: void(0);" class="avatar-group-item"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                                title="Jennifer">
                                                <img src="{{ URL::asset('assets/images/users/avatar-4.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xxs" />
                                            </a>
                                        </div>
                                    </td>
                                    <td class="due_date">13 Oct, 2021</td>
                                    <td class="status"><span
                                            class="badge badge-soft-info text-uppercase">New</span></td>
                                    <td class="priority"><span class="badge bg-success text-uppercase">Low</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="checkAll"
                                                value="option1">
                                        </div>
                                    </th>
                                    <td class="id"><a href="apps-tasks-details"
                                            class="fw-medium link-primary">#VLZ462</a></td>
                                    <td class="project_name"><a href="apps-projects-overview"
                                            class="fw-medium link-primary">Skote - v2.1.0</a></td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="flex-grow-1 tasks_name">Edit customer testimonial</div>
                                            <div class="flex-shrink-0 ms-4">
                                                <ul class="list-inline tasks-list-menu mb-0">
                                                    <li class="list-inline-item"><a href="apps-tasks-details"><i
                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a href="#"><i
                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="remove-item-btn" data-bs-toggle="modal"
                                                            href="#deleteOrder">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="client_name">Nathan Cole</td>
                                    <td class="assignedto">
                                        <div class="avatar-group">
                                            <a href="javascript: void(0);" class="avatar-group-item"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                                title="Michael">
                                                <img src="{{ URL::asset('assets/images/users/avatar-7.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xxs" />
                                            </a>
                                            <a href="javascript: void(0);" class="avatar-group-item"
                                                data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                                title="Thomas">
                                                <img src="{{ URL::asset('assets/images/users/avatar-8.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xxs" />
                                            </a>
                                        </div>
                                    </td>
                                    <td class="due_date">02 Jan, 2021</td>
                                    <td class="status"><span
                                            class="badge badge-soft-secondary text-uppercase">Inprogress</span></td>
                                    <td class="priority"><span class="badge bg-warning text-uppercase">Medium</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!--end table-->
                        <div class="noresult" style="display: none">
                            <div class="text-center">
                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                    colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                <p class="text-muted mb-0">We've searched more than 200k+ tasks We did not find any tasks
                                    for you search.</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-2">
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
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
    </div>
    <!--end row-->

    <div class="modal fade flip" id="deleteOrder" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-5 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                        colors="primary:#405189,secondary:#f06548" style="width:90px;height:90px"></lord-icon>
                    <div class="mt-4 text-center">
                        <h4>You are about to delete a task ?</h4>
                        <p class="text-muted fs-14 mb-4">Deleting your task will remove all of
                            your information from our database.</p>
                        <div class="hstack gap-2 justify-content-center remove">
                            <button class="btn btn-link btn-ghost-success fw-medium text-decoration-none"
                                data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</button>
                            <button class="btn btn-danger" id="delete-record">Yes, Delete It</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end delete modal -->

    <div class="modal fade zoomIn" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0">
                <div class="modal-header p-3 bg-soft-info">
                    <h5 class="modal-title" id="exampleModalLabel">Create Task</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        id="close-modal"></button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-lg-12">
                                <label for="projectName-field" class="form-label">Project Name</label>
                                <input type="text" id="projectName-field" class="form-control" placeholder="Project name"
                                    required />
                            </div>
                            <!--end col-->
                            <div class="col-lg-12">
                                <div>
                                    <label for="tasksTitle-field" class="form-label">Title</label>
                                    <input type="text" id="tasksTitle-field" class="form-control" placeholder="Title"
                                        required />
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-12">
                                <label for="createName-field" class="form-label">Client Name</label>
                                <input type="text" id="createName-field" class="form-control" placeholder="Client name"
                                    required />
                            </div>
                            <!--end col-->
                            <div class="col-lg-12">
                                <label class="form-label">Assigned To</label>
                                <div data-simplebar style="height: 95px;">
                                    <ul class="list-unstyled vstack gap-2 mb-0">
                                        <li>
                                            <div class="form-check d-flex align-items-center">
                                                <input class="form-check-input me-3" type="checkbox" value=""
                                                    id="anna-adame">
                                                <label class="form-check-label d-flex align-items-center" for="anna-adame">
                                                    <span class="flex-shrink-0">
                                                        <img src="{{ URL::asset('assets/images/users/avatar-1.jpg') }}" alt=""
                                                            class="avatar-xxs rounded-circle">
                                                    </span>
                                                    <span class="flex-grow-1 ms-2">
                                                        Anna Adame
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check d-flex align-items-center">
                                                <input class="form-check-input me-3" type="checkbox" value=""
                                                    id="frank-hook">
                                                <label class="form-check-label d-flex align-items-center" for="frank-hook">
                                                    <span class="flex-shrink-0">
                                                        <img src="{{ URL::asset('assets/images/users/avatar-3.jpg') }}" alt=""
                                                            class="avatar-xxs rounded-circle">
                                                    </span>
                                                    <span class="flex-grow-1 ms-2">
                                                        Frank Hook
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check d-flex align-items-center">
                                                <input class="form-check-input me-3" type="checkbox" value=""
                                                    id="alexis-clarke">
                                                <label class="form-check-label d-flex align-items-center"
                                                    for="alexis-clarke">
                                                    <span class="flex-shrink-0">
                                                        <img src="{{ URL::asset('assets/images/users/avatar-6.jpg') }}" alt=""
                                                            class="avatar-xxs rounded-circle">
                                                    </span>
                                                    <span class="flex-grow-1 ms-2">
                                                        Alexis Clarke
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check d-flex align-items-center">
                                                <input class="form-check-input me-3" type="checkbox" value=""
                                                    id="herbert-stokes">
                                                <label class="form-check-label d-flex align-items-center"
                                                    for="herbert-stokes">
                                                    <span class="flex-shrink-0">
                                                        <img src="{{ URL::asset('assets/images/users/avatar-2.jpg') }}" alt=""
                                                            class="avatar-xxs rounded-circle">
                                                    </span>
                                                    <span class="flex-grow-1 ms-2">
                                                        Herbert Stokes
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check d-flex align-items-center">
                                                <input class="form-check-input me-3" type="checkbox" value=""
                                                    id="michael-morris">
                                                <label class="form-check-label d-flex align-items-center"
                                                    for="michael-morris">
                                                    <span class="flex-shrink-0">
                                                        <img src="{{ URL::asset('assets/images/users/avatar-7.jpg') }}" alt=""
                                                            class="avatar-xxs rounded-circle">
                                                    </span>
                                                    <span class="flex-grow-1 ms-2">
                                                        Michael Morris
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check d-flex align-items-center">
                                                <input class="form-check-input me-3" type="checkbox" value=""
                                                    id="nancy-martino">
                                                <label class="form-check-label d-flex align-items-center"
                                                    for="nancy-martino">
                                                    <span class="flex-shrink-0">
                                                        <img src="{{ URL::asset('assets/images/users/avatar-5.jpg') }}" alt=""
                                                            class="avatar-xxs rounded-circle">
                                                    </span>
                                                    <span class="flex-grow-1 ms-2">
                                                        Nancy Martino
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check d-flex align-items-center">
                                                <input class="form-check-input me-3" type="checkbox" value=""
                                                    id="thomas-taylor">
                                                <label class="form-check-label d-flex align-items-center"
                                                    for="thomas-taylor">
                                                    <span class="flex-shrink-0">
                                                        <img src="{{ URL::asset('assets/images/users/avatar-8.jpg') }}" alt=""
                                                            class="avatar-xxs rounded-circle">
                                                    </span>
                                                    <span class="flex-grow-1 ms-2">
                                                        Thomas Taylor
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check d-flex align-items-center">
                                                <input class="form-check-input me-3" type="checkbox" value=""
                                                    id="tonya-noble">
                                                <label class="form-check-label d-flex align-items-center"
                                                    for="tonya-noble">
                                                    <span class="flex-shrink-0">
                                                        <img src="{{ URL::asset('assets/images/users/avatar-10.jpg') }}" alt=""
                                                            class="avatar-xxs rounded-circle">
                                                    </span>
                                                    <span class="flex-grow-1 ms-2">
                                                        Tonya Noble
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
                                <label for="duedate-field" class="form-label">Due Date</label>
                                <input type="text" id="duedate-field" class="form-control" data-provider="flatpickr"
                                    placeholder="Due date" required />
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
                                <label for="ticket-status" class="form-label">Status</label>
                                <select class="form-control" data-choices data-choices-search-false id="ticket-status">
                                    <option value="">Status</option>
                                    <option value="New">New</option>
                                    <option value="Inprogress">Inprogress</option>
                                    <option value="Pending">Pending</option>
                                    <option value="Completed">Completed</option>
                                </select>
                            </div>
                            <!--end col-->
                            <div class="col-lg-12">
                                <label for="priority-field" class="form-label">Priority</label>
                                <select class="form-control" data-choices data-choices-search-false id="priority-field">
                                    <option value="">Priority</option>
                                    <option value="High">High</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Low">Low</option>
                                </select>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <div class="modal-footer">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success" id="add-btn">Add Task</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--end modal-->

@endsection
@section('script')
    <script src="{{ URL::asset('assets/libs/list.js/list.js.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/list.pagination.js/list.pagination.js.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/tasks-list.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
    @endsection

