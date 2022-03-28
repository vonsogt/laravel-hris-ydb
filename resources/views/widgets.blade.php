@extends('layouts.master')
@section('title') @lang('translation.widgets') @endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Velzon @endslot
        @slot('title') Widgets @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <h5 class="text-decoration-underline mb-3 pb-1">Tile Boxs</h5>
        </div>
    </div>
    <!-- end row-->

    <div class="row">
        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <p class="text-uppercase fw-medium text-muted mb-0">Total Earnings</p>
                        </div>
                        <div class="flex-shrink-0">
                            <h5 class="text-success fs-14 mb-0">
                                <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +16.24 %
                            </h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value"
                                    data-target="559.25">0</span>k</h4>
                            <a href="" class="text-decoration-underline">View net earnings</a>
                        </div>
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-soft-success rounded fs-3">
                                <i class="bx bx-dollar-circle text-success"></i>
                            </span>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-animate bg-info">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <p class="text-uppercase fw-medium text-white-50 mb-0">Orders</p>
                        </div>
                        <div class="flex-shrink-0">
                            <h5 class="text-warning fs-14 mb-0">
                                <i class="ri-arrow-right-down-line fs-13 align-middle"></i> -3.57 %
                            </h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                            <h4 class="fs-22 fw-semibold ff-secondary mb-4 text-white"><span
                                    class="counter-value" data-target="36894">0</span></h4>
                            <a href="" class="text-decoration-underline text-white-50">View all
                                orders</a>
                        </div>
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-soft-light rounded fs-3">
                                <i class="bx bx-shopping-bag text-white"></i>
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
                            <p class="text-uppercase fw-medium text-muted mb-0">Customers</p>
                        </div>
                        <div class="flex-shrink-0">
                            <h5 class="text-success fs-14 mb-0">
                                <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +29.08 %
                            </h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value"
                                    data-target="183.35">0</span>M</h4>
                            <a href="" class="text-decoration-underline">See details</a>
                        </div>
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-soft-warning rounded fs-3">
                                <i class="bx bx-user-circle text-warning"></i>
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
                            <p class="text-uppercase fw-medium text-muted mb-0">My Balance</p>
                        </div>
                        <div class="flex-shrink-0">
                            <h5 class="text-muted fs-14 mb-0">
                                +0.00 %
                            </h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value"
                                    data-target="165.89">0</span>k</h4>
                            <a href="" class="text-decoration-underline">Withdraw money</a>
                        </div>
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-soft-primary rounded fs-3">
                                <i class="bx bx-wallet text-primary"></i>
                            </span>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div> <!-- end row-->

    <div class="row">
        <div class="col-xl-12">
            <div class="card crm-widget">
                <div class="card-body p-0">
                    <div class="row row-cols-md-3 row-cols-1">
                        <div class="col col-lg border-end">
                            <div class="py-4 px-3">
                                <h5 class="text-muted text-uppercase fs-13">Campaign Sent <i
                                        class="ri-arrow-up-circle-line text-success fs-18 float-end align-middle"></i>
                                </h5>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <i class="ri-space-ship-line display-6 text-muted"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h2 class="mb-0"><span class="counter-value"
                                                data-target="197">0</span></h2>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->
                        <div class="col col-lg border-end">
                            <div class="mt-3 mt-md-0 py-4 px-3">
                                <h5 class="text-muted text-uppercase fs-13">Annual Profit <i
                                        class="ri-arrow-up-circle-line text-success fs-18 float-end align-middle"></i>
                                </h5>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <i class="ri-exchange-dollar-line display-6 text-muted"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h2 class="mb-0">$<span class="counter-value"
                                                data-target="489.4">0</span>k</h2>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->
                        <div class="col col-lg border-end">
                            <div class="mt-3 mt-md-0 py-4 px-3">
                                <h5 class="text-muted text-uppercase fs-13">Lead Coversation <i
                                        class="ri-arrow-down-circle-line text-danger fs-18 float-end align-middle"></i>
                                </h5>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <i class="ri-pulse-line display-6 text-muted"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h2 class="mb-0"><span class="counter-value"
                                                data-target="32.89">0</span>%</h2>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->
                        <div class="col col-lg border-end">
                            <div class="mt-3 mt-lg-0 py-4 px-3">
                                <h5 class="text-muted text-uppercase fs-13">Daily Average Income <i
                                        class="ri-arrow-up-circle-line text-success fs-18 float-end align-middle"></i>
                                </h5>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <i class="ri-trophy-line display-6 text-muted"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h2 class="mb-0">$<span class="counter-value"
                                                data-target="1596.5">0</span></h2>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->
                        <div class="col col-lg">
                            <div class="mt-3 mt-lg-0 py-4 px-3">
                                <h5 class="text-muted text-uppercase fs-13">Annual Deals <i
                                        class="ri-arrow-down-circle-line text-danger fs-18 float-end align-middle"></i>
                                </h5>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <i class="ri-service-line display-6 text-muted"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h2 class="mb-0"><span class="counter-value"
                                                data-target="2659">0</span></h2>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->

    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="fw-medium text-muted mb-0">Users</p>
                            <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value"
                                    data-target="28.05">0</span>k</h2>
                            <p class="mb-0 text-muted"><span class="badge bg-light text-success mb-0">
                                    <i class="ri-arrow-up-line align-middle"></i> 16.24 %
                                </span> vs. previous month</p>
                        </div>
                        <div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-soft-info rounded-circle fs-2">
                                    <i data-feather="users" class="text-info"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-3 col-md-6">
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="fw-medium text-muted mb-0">Sessions</p>
                            <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value"
                                    data-target="97.66">0</span>k</h2>
                            <p class="mb-0 text-muted"><span class="badge bg-light text-danger mb-0">
                                    <i class="ri-arrow-down-line align-middle"></i> 3.96 %
                                </span> vs. previous month</p>
                        </div>
                        <div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-soft-info rounded-circle fs-2">
                                    <i data-feather="activity" class="text-info"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-3 col-md-6">
            <div class="card card-animate bg-primary">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="fw-medium text-white-50 mb-0">Avg. Visit Duration</p>
                            <h2 class="mt-4 ff-secondary fw-semibold text-white"><span
                                    class="counter-value" data-target="3">0</span>m <span
                                    class="counter-value" data-target="40">0</span>sec</h2>
                            <p class="mb-0 text-white-50"><span class="badge badge-soft-light mb-0">
                                    <i class="ri-arrow-down-line align-middle"></i> 0.24 %
                                </span> vs. previous month</p>
                        </div>
                        <div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-soft-light rounded-circle fs-2">
                                    <i data-feather="clock" class="text-white"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-3 col-md-6">
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="fw-medium text-muted mb-0">Bounce Rate</p>
                            <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value"
                                    data-target="33.48">0</span>%</h2>
                            <p class="mb-0 text-muted"><span class="badge bg-light text-success mb-0">
                                    <i class="ri-arrow-up-line align-middle"></i> 7.05 %
                                </span> vs. previous month</p>
                        </div>
                        <div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-soft-info rounded-circle fs-2">
                                    <i data-feather="external-link" class="text-info"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div> <!-- end row-->

    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success card-height-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-soft-light text-white rounded-2 fs-2">
                                <i class="bx bx-shopping-bag"></i>
                            </span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="text-uppercase fw-medium text-white-50 mb-3">Total Sales</p>
                            <h4 class="fs-4 mb-3 text-white"><span class="counter-value"
                                    data-target="2045">0</span></h4>
                            <p class="text-white-50 mb-0">From 1930 last year</p>
                        </div>
                        <div class="flex-shrink-0 align-self-center">
                            <span class="badge badge-soft-light fs-12"><i
                                    class="ri-arrow-up-s-line fs-13 align-middle me-1"></i>6.11 %<span>
                                </span></span>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div>
        </div> <!-- end col-->

        <div class="col-xl-3 col-md-6">
            <div class="card card-height-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-soft-warning text-warning rounded-2 fs-2">
                                <i class="bx bxs-user-account"></i>
                            </span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="text-uppercase fw-medium text-muted mb-3">Number of Users</p>
                            <h4 class="fs-4 mb-3"><span class="counter-value"
                                    data-target="7522">0</span></h4>
                            <p class="text-muted mb-0">From 9530 last year</p>
                        </div>
                        <div class="flex-shrink-0 align-self-center">
                            <span class="badge badge-soft-danger fs-12"><i
                                    class="ri-arrow-down-s-line fs-13 align-middle me-1"></i>10.35
                                %<span>
                                </span></span>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div>
        </div> <!-- end col-->

        <div class="col-xl-3 col-md-6">
            <div class="card card-height-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-soft-danger text-danger rounded-2 fs-2">
                                <i class="bx bxs-badge-dollar"></i>
                            </span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="text-uppercase fw-medium text-muted mb-3">Total Revenue</p>
                            <h4 class="fs-4 mb-3">$<span class="counter-value"
                                    data-target="2845.05">0</span></h4>
                            <p class="text-muted mb-0">From $1,750.04 last year</p>
                        </div>
                        <div class="flex-shrink-0 align-self-center">
                            <span class="badge badge-soft-success fs-12"><i
                                    class="ri-arrow-up-s-line fs-13 align-middle me-1"></i>22.96 %<span>
                                </span></span>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div>
        </div> <!-- end col-->

        <div class="col-xl-3 col-md-6">
            <div class="card card-height-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-soft-info text-info rounded-2 fs-2">
                                <i class="bx bx-store-alt"></i>
                            </span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="text-uppercase fw-medium text-muted mb-3">Number of Stores</p>
                            <h4 class="fs-4 mb-3"><span class="counter-value"
                                    data-target="405">0</span>k</h4>
                            <p class="text-muted mb-0">From 308 last year</p>
                        </div>
                        <div class="flex-shrink-0 align-self-center">
                            <span class="badge badge-soft-success fs-12"><i
                                    class="ri-arrow-up-s-line fs-13 align-middle me-1"></i>16.31 %<span>
                                </span></span>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div>
        </div> <!-- end col-->
    </div> <!-- end row-->

    <div class="row">
        <div class="col-12">
            <h5 class="text-decoration-underline mb-3 mt-2 pb-3">Other Widgets</h5>
        </div>
    </div>
    <!-- end row-->

    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body p-0">
                    <div class="alert alert-warning border-0 rounded-top rounded-0 m-0 d-flex align-items-center"
                        role="alert">
                        <i data-feather="alert-triangle" class="text-warning me-2 icon-sm"></i>
                        <div class="flex-grow-1 text-truncate">
                            Your free trial expired in <b>17</b> days.
                        </div>
                        <div class="flex-shrink-0">
                            <a href="pages-pricing"
                                class="text-reset text-decoration-underline"><b>Upgrade</b></a>
                        </div>
                    </div>

                    <div class="row align-items-end">
                        <div class="col-sm-8">
                            <div class="p-3">
                                <p class="fs-16 lh-base">Upgrade your plan from a <span
                                        class="fw-semibold">Free
                                        trial</span>, to ‘Premium Plan’ <i
                                        class="mdi mdi-arrow-right"></i></p>
                                <div class="mt-3">
                                    <a href="pages-pricing" class="btn btn-success">Upgrade
                                        Account!</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="px-3">
                                <img src="{{ URL::asset('assets/images/user-illustarator-2.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-body-->
            </div>
        </div> <!-- end col-->
        <div class="col-xl-4">
            <div class="card bg-primary">
                <div class="card-body p-0">
                    <div class="alert alert-danger rounded-top alert-solid alert-label-icon border-0 rounded-0 m-0 d-flex align-items-center"
                        role="alert">
                        <i class="ri-error-warning-line label-icon"></i>
                        <div class="flex-grow-1 text-truncate">
                            Your free trial expired in <b>17</b> days.
                        </div>
                        <div class="flex-shrink-0">
                            <a href="pages-pricing"
                                class="text-reset text-decoration-underline"><b>Upgrade</b></a>
                        </div>
                    </div>

                    <div class="row align-items-end">
                        <div class="col-sm-8">
                            <div class="p-3">
                                <p class="fs-16 lh-base text-white">Upgrade your plan from a <span
                                        class="fw-semibold">Free
                                        trial</span>, to ‘Premium Plan’ <i
                                        class="mdi mdi-arrow-right"></i></p>
                                <div class="mt-3">
                                    <a href="pages-pricing" class="btn btn-info">Upgrade
                                        Account!</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="px-3">
                                <img src="{{ URL::asset('assets/images/user-illustarator-1.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-body-->
            </div>
        </div> <!-- end col-->
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body p-0">
                    <div class="alert alert-warning border-0 rounded-top rounded-0 m-0 d-flex align-items-center"
                        role="alert">
                        <div class="flex-grow-1 text-truncate">
                            We will choose a gift for you in <b>5</b> days.
                        </div>
                        <div class="flex-shrink-0">
                            <a href="pages-pricing"
                                class="text-reset text-decoration-underline"><b>Get Free Gift</b></a>
                        </div>
                    </div>
                    <div class="d-flex p-3">
                        <div class="flex-shrink-0">
                            <div class="avatar-md me-3">
                                <span class="avatar-title bg-soft-danger rounded-circle fs-1">
                                    <i class="ri-gift-2-line text-danger"></i>
                                </span>
                            </div>
                        </div>
                        <div>
                            <p class="fs-16 lh-base">Personalized <span class="fw-semibold">Gift
                                    Boxes</span>, with attitude, Let's collect your Xmas box <i
                                    class="mdi mdi-arrow-right"></i></p>
                            <div class="mt-3">
                                <a href="pages-pricing" class="btn btn-secondary">Get a Free
                                    Gift</a>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-body-->
            </div>
        </div> <!-- end col-->
    </div> <!-- end row-->

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="fs-15 fw-semibold">Brand Logo Design - MD</h5>
                    <p class="text-muted">Graphics Work</p>
                    <div class="d-flex flex-wrap justify-content-evenly">
                        <p class="text-muted mb-0"><i
                                class="mdi mdi-numeric-1-circle text-success fs-18 align-middle me-2"></i>Completed
                        </p>
                        <p class="text-muted mb-0"><i
                                class="mdi mdi-numeric-3-circle text-info fs-18 align-middle me-2"></i>In
                            Progress</p>
                        <p class="text-muted mb-0"><i
                                class="mdi mdi-numeric-2-circle text-primary fs-18 align-middle me-2"></i>To
                            Do</p>
                    </div>
                </div>
                <div class="progress animated-progress rounded-bottom rounded-0" style="height: 6px;">
                    <div class="progress-bar bg-success rounded-0" role="progressbar" style="width: 30%"
                        aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-info rounded-0" role="progressbar" style="width: 50%"
                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar rounded-0" role="progressbar" style="width: 20%"
                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div><!-- end col -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="fs-15 fw-semibold">Redesign - Landing Page</h5>
                    <p class="text-muted">UI/UX Design</p>
                    <div class="d-flex flex-wrap justify-content-evenly">
                        <p class="text-muted mb-0"><i
                                class="mdi mdi-numeric-3-circle text-success fs-18 align-middle me-2"></i>Completed
                        </p>
                        <p class="text-muted mb-0"><i
                                class="mdi mdi-numeric-0-circle text-info fs-18 align-middle me-2"></i>In
                            Progress</p>
                        <p class="text-muted mb-0"><i
                                class="mdi mdi-numeric-8-circle text-primary fs-18 align-middle me-2"></i>To
                            Do</p>
                    </div>
                </div>
                <div class="progress animated-progress rounded-bottom rounded-0" style="height: 6px;">
                    <div class="progress-bar bg-success rounded-0" role="progressbar" style="width: 30%"
                        aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-info rounded-0" role="progressbar" style="width: 0%"
                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar rounded-0" role="progressbar" style="width: 70%"
                        aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div><!-- end col -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="fs-15 fw-semibold">Ecommerce App for Web</h5>
                    <p class="text-muted">CRM Project</p>
                    <div class="d-flex flex-wrap justify-content-evenly">
                        <p class="text-muted mb-0"><i
                                class="mdi mdi-numeric-10-circle text-success fs-18 align-middle me-2"></i>Completed
                        </p>
                        <p class="text-muted mb-0"><i
                                class="mdi mdi-numeric-3-circle text-info fs-18 align-middle me-2"></i>In
                            Progress</p>
                        <p class="text-muted mb-0"><i
                                class="mdi mdi-numeric-2-circle text-primary fs-18 align-middle me-2"></i>To
                            Do</p>
                    </div>
                </div>
                <div class="progress animated-progress rounded-bottom rounded-0" style="height: 6px;">
                    <div class="progress-bar bg-success rounded-0" role="progressbar" style="width: 60%"
                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-info rounded-0" role="progressbar" style="width: 25%"
                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar rounded-0" role="progressbar" style="width: 15%"
                        aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div><!-- end col -->
    </div> <!-- end row-->

    <div class="row">
        <div class="col-xxl-5">
            <div class="card card-height-100">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Upcoming Activities</h4>
                    <div class="flex-shrink-0">
                        <div class="dropdown card-header-dropdown">
                            <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted fs-18"><i
                                        class="mdi mdi-dots-vertical"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item" href="#">Remove</a>
                            </div>
                        </div>
                    </div>
                </div><!-- end card header -->
                <div class="card-body pt-0">
                    <ul class="list-group list-group-flush border-dashed">
                        <li class="list-group-item ps-0">
                            <div class="row align-items-center g-3">
                                <div class="col-auto">
                                    <div class="avatar-sm p-1 py-2 h-auto bg-light rounded-3">
                                        <div class="text-center">
                                            <h5 class="mb-0">25</h5>
                                            <div class="text-muted">Tue</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <h5 class="text-muted mt-0 mb-1 fs-13">12:00am - 03:30pm</h5>
                                    <a href="#" class="text-reset fs-14 mb-0">Meeting for campaign with
                                        sales team</a>
                                </div>
                                <div class="col-sm-auto">
                                    <div class="avatar-group">
                                        <div class="avatar-group-item">
                                            <a href="javascript: void(0);" class="d-inline-block"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="" data-bs-original-title="Stine Nielsen">
                                                <img src="{{ URL::asset('assets/images/users/avatar-1.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xxs">
                                            </a>
                                        </div>
                                        <div class="avatar-group-item">
                                            <a href="javascript: void(0);" class="d-inline-block"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="" data-bs-original-title="Jansh Brown">
                                                <img src="{{ URL::asset('assets/images/users/avatar-2.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xxs">
                                            </a>
                                        </div>
                                        <div class="avatar-group-item">
                                            <a href="javascript: void(0);" class="d-inline-block"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="" data-bs-original-title="Dan Gibson">
                                                <img src="{{ URL::asset('assets/images/users/avatar-3.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xxs">
                                            </a>
                                        </div>
                                        <div class="avatar-group-item">
                                            <a href="javascript: void(0);">
                                                <div class="avatar-xxs">
                                                    <span
                                                        class="avatar-title rounded-circle bg-info text-white">
                                                        5
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </li><!-- end -->
                        <li class="list-group-item ps-0">
                            <div class="row align-items-center g-3">
                                <div class="col-auto">
                                    <div class="avatar-sm p-1 py-2 h-auto bg-light rounded-3">
                                        <div class="text-center">
                                            <h5 class="mb-0">20</h5>
                                            <div class="text-muted">Wed</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <h5 class="text-muted mt-0 mb-1 fs-13">02:00pm - 03:45pm</h5>
                                    <a href="#" class="text-reset fs-14 mb-0">Adding a new event with
                                        attachments</a>
                                </div>
                                <div class="col-sm-auto">
                                    <div class="avatar-group">
                                        <div class="avatar-group-item">
                                            <a href="javascript: void(0);" class="d-inline-block"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="" data-bs-original-title="Frida Bang">
                                                <img src="{{ URL::asset('assets/images/users/avatar-4.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xxs">
                                            </a>
                                        </div>
                                        <div class="avatar-group-item">
                                            <a href="javascript: void(0);" class="d-inline-block"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="" data-bs-original-title="Malou Silva">
                                                <img src="{{ URL::asset('assets/images/users/avatar-5.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xxs">
                                            </a>
                                        </div>
                                        <div class="avatar-group-item">
                                            <a href="javascript: void(0);" class="d-inline-block"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="" data-bs-original-title="Simon Schmidt">
                                                <img src="{{ URL::asset('assets/images/users/avatar-6.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xxs">
                                            </a>
                                        </div>
                                        <div class="avatar-group-item">
                                            <a href="javascript: void(0);" class="d-inline-block"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="" data-bs-original-title="Tosh Jessen">
                                                <img src="{{ URL::asset('assets/images/users/avatar-7.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xxs">
                                            </a>
                                        </div>
                                        <div class="avatar-group-item">
                                            <a href="javascript: void(0);">
                                                <div class="avatar-xxs">
                                                    <span
                                                        class="avatar-title rounded-circle bg-success text-white">
                                                        3
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </li><!-- end -->
                        <li class="list-group-item ps-0">
                            <div class="row align-items-center g-3">
                                <div class="col-auto">
                                    <div class="avatar-sm p-1 py-2 h-auto bg-light rounded-3">
                                        <div class="text-center">
                                            <h5 class="mb-0">17</h5>
                                            <div class="text-muted">Wed</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <h5 class="text-muted mt-0 mb-1 fs-13">04:30pm - 07:15pm</h5>
                                    <a href="#" class="text-reset fs-14 mb-0">Create new project
                                        Bundling Product</a>
                                </div>
                                <div class="col-sm-auto">
                                    <div class="avatar-group">
                                        <div class="avatar-group-item">
                                            <a href="javascript: void(0);" class="d-inline-block"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="" data-bs-original-title="Nina Schmidt">
                                                <img src="{{ URL::asset('assets/images/users/avatar-8.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xxs">
                                            </a>
                                        </div>
                                        <div class="avatar-group-item">
                                            <a href="javascript: void(0);" class="d-inline-block"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="" data-bs-original-title="Stine Nielsen">
                                                <img src="{{ URL::asset('assets/images/users/avatar-1.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xxs">
                                            </a>
                                        </div>
                                        <div class="avatar-group-item">
                                            <a href="javascript: void(0);" class="d-inline-block"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="" data-bs-original-title="Jansh Brown">
                                                <img src="{{ URL::asset('assets/images/users/avatar-2.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xxs">
                                            </a>
                                        </div>
                                        <div class="avatar-group-item">
                                            <a href="javascript: void(0);">
                                                <div class="avatar-xxs">
                                                    <span
                                                        class="avatar-title rounded-circle bg-primary text-white">
                                                        4
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </li><!-- end -->
                        <li class="list-group-item ps-0">
                            <div class="row align-items-center g-3">
                                <div class="col-auto">
                                    <div class="avatar-sm p-1 py-2 h-auto bg-light rounded-3">
                                        <div class="text-center">
                                            <h5 class="mb-0">12</h5>
                                            <div class="text-muted">Tue</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <h5 class="text-muted mt-0 mb-1 fs-13">10:30am - 01:15pm</h5>
                                    <a href="#" class="text-reset fs-14 mb-0">Weekly closed sales won
                                        checking with sales team</a>
                                </div>
                                <div class="col-sm-auto">
                                    <div class="avatar-group">
                                        <div class="avatar-group-item">
                                            <a href="javascript: void(0);" class="d-inline-block"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="" data-bs-original-title="Stine Nielsen">
                                                <img src="{{ URL::asset('assets/images/users/avatar-1.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xxs">
                                            </a>
                                        </div>
                                        <div class="avatar-group-item">
                                            <a href="javascript: void(0);" class="d-inline-block"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="" data-bs-original-title="Jansh Brown">
                                                <img src="{{ URL::asset('assets/images/users/avatar-5.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xxs">
                                            </a>
                                        </div>
                                        <div class="avatar-group-item">
                                            <a href="javascript: void(0);" class="d-inline-block"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="" data-bs-original-title="Dan Gibson">
                                                <img src="{{ URL::asset('assets/images/users/avatar-2.jpg') }}" alt=""
                                                    class="rounded-circle avatar-xxs">
                                            </a>
                                        </div>
                                        <div class="avatar-group-item">
                                            <a href="javascript: void(0);">
                                                <div class="avatar-xxs">
                                                    <span
                                                        class="avatar-title rounded-circle bg-warning text-white">
                                                        9
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </li><!-- end -->
                    </ul><!-- end -->
                    <div class="align-items-center mt-2 row text-center text-sm-start">
                        <div class="col-sm">
                            <div class="text-muted">Showing<span class="fw-semibold">4</span> of <span
                                    class="fw-semibold">125</span> Results
                            </div>
                        </div>
                        <div class="col-sm-auto">
                            <ul
                                class="pagination pagination-separated pagination-sm justify-content-center justify-content-sm-start mb-0">
                                <li class="page-item disabled">
                                    <a href="#" class="page-link">←</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">3</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">→</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div> <!-- end col-->
        <div class="col-xxl-7">
            <div class="row">
                <div class="col-xl-6">
                    <div class="card card-height-100">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">My Tasks</h4>
                            <div class="flex-shrink-0">
                                <div class="dropdown card-header-dropdown">
                                    <a class="text-reset dropdown-btn" href="#"
                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <span class="text-muted"><i
                                                class="ri-settings-4-line align-middle me-1 fs-15"></i>Settings</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end card header -->

                        <div class="card-body p-0">

                            <div class="align-items-center p-3 justify-content-between d-flex">
                                <div class="flex-shrink-0">
                                    <div class="text-muted"><span class="fw-semibold">4</span> of <span
                                            class="fw-semibold">10</span> remaining</div>
                                </div>
                                <button type="button" class="btn btn-sm btn-success"><i
                                        class="ri-add-line align-middle me-1"></i> Add Task</button>
                            </div><!-- end card header -->

                            <div data-simplebar style="max-height: 257px;">
                                <ul class="list-group list-group-flush border-dashed px-3">
                                    <li class="list-group-item ps-0">
                                        <div class="d-flex align-items-start">
                                            <div class="form-check ps-0 flex-sharink-0">
                                                <input type="checkbox" class="form-check-input ms-0"
                                                    id="task_one">
                                            </div>
                                            <div class="flex-grow-1">
                                                <label class="form-check-label mb-0 ps-2"
                                                    for="task_one">Review and make sure nothing slips
                                                    through cracks</label>
                                            </div>
                                            <div class="flex-shrink-0 ms-2">
                                                <p class="text-muted fs-12 mb-0">15 Sep, 2021</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item ps-0">
                                        <div class="d-flex align-items-start">
                                            <div class="form-check ps-0 flex-sharink-0">
                                                <input type="checkbox" class="form-check-input ms-0"
                                                    id="task_two">
                                            </div>
                                            <div class="flex-grow-1">
                                                <label class="form-check-label mb-0 ps-2"
                                                    for="task_two">Send meeting invites for sales
                                                    upcampaign</label>
                                            </div>
                                            <div class="flex-shrink-0 ms-2">
                                                <p class="text-muted fs-12 mb-0">20 Sep, 2021</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item ps-0">
                                        <div class="d-flex align-items-start">
                                            <div class="form-check flex-sharink-0 ps-0">
                                                <input type="checkbox" class="form-check-input ms-0"
                                                    id="task_three">
                                            </div>
                                            <div class="flex-grow-1">
                                                <label class="form-check-label mb-0 ps-2"
                                                    for="task_three">Weekly closed sales won checking
                                                    with sales team</label>
                                            </div>
                                            <div class="flex-shrink-0 ms-2">
                                                <p class="text-muted fs-12 mb-0">24 Sep, 2021</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item ps-0">
                                        <div class="d-flex align-items-start">
                                            <div class="form-check ps-0 flex-sharink-0">
                                                <input type="checkbox" class="form-check-input ms-0"
                                                    id="task_four">
                                            </div>
                                            <div class="flex-grow-1">
                                                <label class="form-check-label mb-0 ps-2"
                                                    for="task_four">Add notes that can be viewed from
                                                    the individual view</label>
                                            </div>
                                            <div class="flex-shrink-0 ms-2">
                                                <p class="text-muted fs-12 mb-0">27 Sep, 2021</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item ps-0">
                                        <div class="d-flex align-items-start">
                                            <div class="form-check ps-0 flex-sharink-0">
                                                <input type="checkbox" class="form-check-input ms-0"
                                                    id="task_five">
                                            </div>
                                            <div class="flex-grow-1">
                                                <label class="form-check-label mb-0 ps-2"
                                                    for="task_five">Move stuff to another page</label>
                                            </div>
                                            <div class="flex-shrink-0 ms-2">
                                                <p class="text-muted fs-12 mb-0">27 Sep, 2021</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item ps-0">
                                        <div class="d-flex align-items-start">
                                            <div class="form-check ps-0 flex-sharink-0">
                                                <input type="checkbox" class="form-check-input ms-0"
                                                    id="task_six">
                                            </div>
                                            <div class="flex-grow-1">
                                                <label class="form-check-label mb-0 ps-2"
                                                    for="task_six">Styling wireframe design and
                                                    documentation for velzon admin</label>
                                            </div>
                                            <div class="flex-shrink-0 ms-2">
                                                <p class="text-muted fs-12 mb-0">27 Sep, 2021</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul><!-- end ul -->
                            </div>
                            <div class="p-3">
                                <a href="javascript:void(0);"
                                    class="text-muted text-decoration-underline">Show more...</a>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->
                <div class="col-xl-6">
                    <div class="card card-height-100">
                        <div class="card-header border-bottom-dashed align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Recent Activity</h4>
                            <div class="flex-shrink-0">
                                <button type="button" class="btn btn-soft-primary btn-sm">
                                    View All Activity
                                </button>
                            </div>
                        </div><!-- end cardheader -->
                        <div class="card-body p-0">
                            <div data-simplebar style="max-height: 364px;" class="p-3">
                                <div class="acitivity-timeline acitivity-main">
                                    <div class="acitivity-item d-flex">
                                        <div class="flex-shrink-0 avatar-xs acitivity-avatar">
                                            <div
                                                class="avatar-title bg-soft-success text-success rounded-circle">
                                                <i class="ri-shopping-cart-2-line"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">Purchase by James Price</h6>
                                            <p class="text-muted mb-1">Product noise evolve smartwatch
                                            </p>
                                            <small class="mb-0 text-muted">02:14 PM Today</small>
                                        </div>
                                    </div>
                                    <div class="acitivity-item py-3 d-flex">
                                        <div class="flex-shrink-0 avatar-xs acitivity-avatar">
                                            <div
                                                class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                <i class="ri-stack-fill"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">Added new <span class="fw-semibold">style
                                                    collection</span></h6>
                                            <p class="text-muted mb-1">By Nesta Technologies</p>
                                            <div
                                                class="d-inline-flex gap-2 border border-dashed p-2 mb-2 w-75">
                                                <a href="apps-ecommerce-product-details"
                                                    class="bg-light rounded p-1">
                                                    <img src="{{ URL::asset('assets/images/products/img-8.png') }}" alt=""
                                                        class="img-fluid d-block" />
                                                </a>
                                                <a href="apps-ecommerce-product-details"
                                                    class="bg-light rounded p-1">
                                                    <img src="{{ URL::asset('assets/images/products/img-2.png') }}" alt=""
                                                        class="img-fluid d-block" />
                                                </a>
                                                <a href="apps-ecommerce-product-details"
                                                    class="bg-light rounded p-1">
                                                    <img src="{{ URL::asset('assets/images/products/img-10.png') }}" alt=""
                                                        class="img-fluid d-block" />
                                                </a>
                                            </div>
                                            <p class="mb-0 text-muted"><small>9:47 PM Yesterday</small>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="acitivity-item py-3 d-flex">
                                        <div class="flex-shrink-0">
                                            <img src="{{ URL::asset('assets/images/users/avatar-2.jpg') }}" alt=""
                                                class="avatar-xs rounded-circle acitivity-avatar">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">Natasha Carey have liked the products</h6>
                                            <p class="text-muted mb-1">Allow users to like products in
                                                your WooCommerce store.</p>
                                            <small class="mb-0 text-muted">25 Dec, 2021</small>
                                        </div>
                                    </div>
                                    <div class="acitivity-item py-3 d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="avatar-xs acitivity-avatar">
                                                <div class="avatar-title rounded-circle bg-secondary">
                                                    <i class="mdi mdi-sale fs-14"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">Today offers by <a
                                                    href="apps-ecommerce-seller-details"
                                                    class="link-secondary">Digitech Galaxy</a></h6>
                                            <p class="text-muted mb-2">Offer is valid on orders of
                                                Rs.500 Or above for selected products only.</p>
                                            <small class="mb-0 text-muted">12 Dec, 2021</small>
                                        </div>
                                    </div>
                                    <div class="acitivity-item py-3 d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="avatar-xs acitivity-avatar">
                                                <div
                                                    class="avatar-title rounded-circle bg-soft-danger text-danger">
                                                    <i class="ri-bookmark-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">Favoried Product</h6>
                                            <p class="text-muted mb-2">Esther James have favorited
                                                product.</p>
                                            <small class="mb-0 text-muted">25 Nov, 2021</small>
                                        </div>
                                    </div>
                                    <div class="acitivity-item py-3 d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="avatar-xs acitivity-avatar">
                                                <div class="avatar-title rounded-circle bg-secondary">
                                                    <i class="mdi mdi-sale fs-14"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">Flash sale starting <span
                                                    class="text-primary">Tomorrow.</span></h6>
                                            <p class="text-muted mb-0">Flash sale by <a
                                                    href="javascript:void(0);"
                                                    class="link-secondary fw-medium">Zoetic Fashion</a>
                                            </p>
                                            <small class="mb-0 text-muted">22 Oct, 2021</small>
                                        </div>
                                    </div>
                                    <div class="acitivity-item py-3 d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="avatar-xs acitivity-avatar">
                                                <div
                                                    class="avatar-title rounded-circle bg-soft-info text-info">
                                                    <i class="ri-line-chart-line"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">Monthly sales report</h6>
                                            <p class="text-muted mb-2"><span class="text-danger">2 days
                                                    left</span> notification to submit the monthly sales
                                                report. <a href="javascript:void(0);"
                                                    class="link-warning text-decoration-underline">Reports
                                                    Builder</a></p>
                                            <small class="mb-0 text-muted">15 Oct</small>
                                        </div>
                                    </div>
                                    <div class="acitivity-item d-flex">
                                        <div class="flex-shrink-0">
                                            <img src="{{ URL::asset('assets/images/users/avatar-3.jpg') }}" alt=""
                                                class="avatar-xs rounded-circle acitivity-avatar" />
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">Frank Hook Commented</h6>
                                            <p class="text-muted mb-2 fst-italic">" A product that has
                                                reviews is more likable to be sold than a product. "</p>
                                            <small class="mb-0 text-muted">26 Aug, 2021</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div> <!-- end row-->
        </div> <!-- end col-xl-7-->
    </div>
    <!-- end row-->

    <div class="row">
        <div class="col-12">
            <h5 class="text-decoration-underline mb-3 mt-2 pb-3">Chart & Map Widgets</h5>
        </div>
    </div>
    <!-- end row-->

    <div class="row">
        <div class="col-xxl-4 col-xl-6">
            <div class="card card-height-100">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Live Users By Country</h4>
                    <div class="flex-shrink-0">
                        <button type="button" class="btn btn-soft-primary btn-sm">
                            Export Report
                        </button>
                    </div>
                </div><!-- end card header -->

                <!-- card body -->
                <div class="card-body">

                    <div id="users-by-country" data-colors='["--vz-light"]' style="height: 252px"></div>

                    <div class="table-responsive table-card mt-3">
                        <table
                            class="table table-borderless table-sm table-centered align-middle table-nowrap mb-1">
                            <thead
                                class="text-muted border-dashed border border-start-0 border-end-0 bg-soft-light">
                                <tr>
                                    <th>Duration (Secs)</th>
                                    <th style="width: 30%;">Sessions</th>
                                    <th style="width: 30%;">Views</th>
                                </tr>
                            </thead>
                            <tbody class="border-0">
                                <tr>
                                    <td>0-30</td>
                                    <td>2,250</td>
                                    <td>4,250</td>
                                </tr>
                                <tr>
                                    <td>31-60</td>
                                    <td>1,501</td>
                                    <td>2,050</td>
                                </tr>
                                <tr>
                                    <td>61-120</td>
                                    <td>750</td>
                                    <td>1,600</td>
                                </tr>
                                <tr>
                                    <td>121-240</td>
                                    <td>540</td>
                                    <td>1,040</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xxl-4 col-xl-6">
            <div class="card card-height-100">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Sessions by Countries</h4>
                    <div>
                        <button type="button" class="btn btn-soft-secondary btn-sm">
                            ALL
                        </button>
                        <button type="button" class="btn btn-soft-primary btn-sm">
                            1M
                        </button>
                        <button type="button" class="btn btn-soft-secondary btn-sm">
                            6M
                        </button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div>
                        <div id="countries_charts"
                            data-colors='["--vz-info", "--vz-info", "--vz-info", "--vz-info", "--vz-danger", "--vz-info", "--vz-info", "--vz-info", "--vz-info", "--vz-info"]'
                            class="apex-charts" dir="ltr"></div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div> <!-- end col-->

        <div class="col-xxl-4">
            <div class="card card-height-100">
                <div class="card-header border-0 align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Audiences Metrics</h4>
                    <div>
                        <button type="button" class="btn btn-soft-secondary btn-sm">
                            ALL
                        </button>
                        <button type="button" class="btn btn-soft-secondary btn-sm">
                            1M
                        </button>
                        <button type="button" class="btn btn-soft-secondary btn-sm">
                            6M
                        </button>
                        <button type="button" class="btn btn-soft-primary btn-sm">
                            1Y
                        </button>
                    </div>
                </div><!-- end card header -->
                <div class="card-header p-0">
                    <div class="alert alert-warning alert-solid alert-label-icon border-0 rounded-0 m-0 d-flex align-items-center"
                        role="alert">
                        <i class="ri-error-warning-line label-icon"></i>
                        <div class="flex-grow-1 text-truncate">
                            Your free trial expired in <b>17</b> days.
                        </div>
                        <div class="flex-shrink-0">
                            <a href="pages-pricing"
                                class="text-reset text-decoration-underline"><b>Upgrade</b></a>
                        </div>
                    </div>
                </div>
                <div class="card-header p-0 border-0 bg-soft-light">
                    <div class="row g-0 text-center">
                        <div class="col-6 col-sm-4">
                            <div class="p-3 border border-dashed border-start-0">
                                <h5 class="mb-1"><span class="counter-value" data-target="854">0</span>
                                    <span class="text-success ms-1 fs-12">49%<i
                                            class="ri-arrow-right-up-line ms-1 align-middle"></i></span>
                                </h5>
                                <p class="text-muted mb-0">Avg. Session</p>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-6 col-sm-4">
                            <div class="p-3 border border-dashed border-start-0">
                                <h5 class="mb-1"><span class="counter-value" data-target="1278">0</span>
                                    <span class="text-success ms-1 fs-12">60%<i
                                            class="ri-arrow-right-up-line ms-1 align-middle"></i></span>
                                </h5>
                                <p class="text-muted mb-0">Conversion Rate</p>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-6 col-sm-4">
                            <div class="p-3 border border-dashed border-start-0 border-end-0">
                                <h5 class="mb-1"><span class="counter-value" data-target="3">0</span>m
                                    <span class="counter-value" data-target="40">0</span>sec
                                </h5>
                                <p class="text-muted mb-0">Avg. Ses. Duration</p>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                </div><!-- end card header -->

                <div class="card-body p-0 pb-2">
                    <div>
                        <div id="audiences_metrics_charts"
                            data-colors='["--vz-success", "--vz-gray-300"]' class="apex-charts"
                            dir="ltr"></div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

    </div> <!-- end row-->

    <div class="row">
        <div class="col-xxl-4 col-xl-6">
            <!-- card -->
            <div class="card card-height-100">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Sales by Locations</h4>
                    <div class="flex-shrink-0">
                        <button type="button" class="btn btn-soft-primary btn-sm">
                            Export Report
                        </button>
                    </div>
                </div><!-- end card header -->

                <!-- card body -->
                <div class="card-body">

                    <div id="sales-by-locations" data-colors='["--vz-light"]' style="height: 269px">
                    </div>

                    <div class="px-2 py-2 mt-1">
                        <p class="mb-1">New Maxico <span class="float-end">75%</span></p>
                        <div class="progress mt-2" style="height: 6px;">
                            <div class="progress-bar progress-bar-striped bg-primary" role="progressbar"
                                style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                aria-valuemax="75">
                            </div>
                        </div>

                        <p class="mt-3 mb-1">California <span class="float-end">47%</span></p>
                        <div class="progress mt-2" style="height: 6px;">
                            <div class="progress-bar progress-bar-striped bg-primary" role="progressbar"
                                style="width: 47%" aria-valuenow="47" aria-valuemin="0"
                                aria-valuemax="47">
                            </div>
                        </div>

                        <p class="mt-3 mb-1">Texas <span class="float-end">82%</span></p>
                        <div class="progress mt-2" style="height: 6px;">
                            <div class="progress-bar progress-bar-striped bg-primary" role="progressbar"
                                style="width: 82%" aria-valuenow="82" aria-valuemin="0"
                                aria-valuemax="82">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-xxl-4 col-xl-6">
            <div class="card card-height-100">
                <div class="card-header border-bottom-dashed align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">My Portfolio</h4>
                    <div>
                        <div class="dropdown">
                            <button class="btn btn-soft-primary btn-sm" href="#"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="text-uppercase">Btc<i
                                        class="mdi mdi-chevron-down align-middle ms-1"></i></span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">BTC</a>
                                <a class="dropdown-item" href="#">USD</a>
                                <a class="dropdown-item" href="#">Euro</a>
                            </div>
                        </div>
                    </div>
                </div><!-- end cardheader -->
                <div class="card-body">
                    <div id="portfolio_donut_charts"
                        data-colors='["--vz-primary", "--vz-info", "--vz-warning", "--vz-success"]'
                        class="apex-charts" dir="ltr"></div>

                    <ul class="list-group list-group-flush border-dashed mb-0">
                        <li class="list-group-item px-0">
                            <div class="d-flex">
                                <div class="flex-shrink-0 avatar-xs">
                                    <span class="avatar-title bg-light p-1 rounded-circle">
                                        <img src="{{ URL::asset('assets/images/svg/crypto-icons/btc.svg') }}"
                                            class="img-fluid" alt="">
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-2">
                                    <h6 class="mb-1">Bitcoin</h6>
                                    <p class="fs-12 mb-0 text-muted"><i
                                            class="mdi mdi-circle fs-10 align-middle text-primary me-1"></i>BTC
                                    </p>
                                </div>
                                <div class="flex-shrink-0 text-end">
                                    <h6 class="mb-1">BTC 0.00584875</h6>
                                    <p class="text-success fs-12 mb-0">$19,405.12</p>
                                </div>
                            </div>
                        </li><!-- end -->
                        <li class="list-group-item px-0">
                            <div class="d-flex">
                                <div class="flex-shrink-0 avatar-xs">
                                    <span class="avatar-title bg-light p-1 rounded-circle">
                                        <img src="{{ URL::asset('assets/images/svg/crypto-icons/eth.svg') }}"
                                            class="img-fluid" alt="">
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-2">
                                    <h6 class="mb-1">Ethereum</h6>
                                    <p class="fs-12 mb-0 text-muted"><i
                                            class="mdi mdi-circle fs-10 align-middle text-info me-1"></i>ETH
                                    </p>
                                </div>
                                <div class="flex-shrink-0 text-end">
                                    <h6 class="mb-1">ETH 2.25842108</h6>
                                    <p class="text-danger fs-12 mb-0">$40552.18</p>
                                </div>
                            </div>
                        </li><!-- end -->
                        <li class="list-group-item px-0">
                            <div class="d-flex">
                                <div class="flex-shrink-0 avatar-xs">
                                    <span class="avatar-title bg-light p-1 rounded-circle">
                                        <img src="{{ URL::asset('assets/images/svg/crypto-icons/ltc.svg') }}"
                                            class="img-fluid" alt="">
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-2">
                                    <h6 class="mb-1">Litecoin</h6>
                                    <p class="fs-12 mb-0 text-muted"><i
                                            class="mdi mdi-circle fs-10 align-middle text-warning me-1"></i>LTC
                                    </p>
                                </div>
                                <div class="flex-shrink-0 text-end">
                                    <h6 class="mb-1">LTC 10.58963217</h6>
                                    <p class="text-success fs-12 mb-0">$15824.58</p>
                                </div>
                            </div>
                        </li><!-- end -->
                        <li class="list-group-item px-0 pb-0">
                            <div class="d-flex">
                                <div class="flex-shrink-0 avatar-xs">
                                    <span class="avatar-title bg-light p-1 rounded-circle">
                                        <img src="{{ URL::asset('assets/images/svg/crypto-icons/dash.svg') }}"
                                            class="img-fluid" alt="">
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-2">
                                    <h6 class="mb-1">Dash</h6>
                                    <p class="fs-12 mb-0 text-muted"><i
                                            class="mdi mdi-circle fs-10 align-middle text-success me-1"></i>DASH
                                    </p>
                                </div>
                                <div class="flex-shrink-0 text-end">
                                    <h6 class="mb-1">DASH 204.28565885</h6>
                                    <p class="text-success fs-12 mb-0">$30635.84</p>
                                </div>
                            </div>
                        </li><!-- end -->
                    </ul><!-- end -->
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xxl-4">
            <div class="card card-height-100">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Top Referrals Pages</h4>
                    <div class="flex-shrink-0">
                        <button type="button" class="btn btn-soft-primary btn-sm">
                            Export Report
                        </button>
                    </div>
                </div>

                <div class="card-body">

                    <div id="color_heatmap"
                        data-colors='["--vz-success", "--vz-info", "--vz-primary", "--vz-warning", "--vz-secondary"]'
                        class="apex-charts mt-n3" dir="ltr"></div>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="d-flex mb-3">
                                <div class="flex-grow-1">
                                    <p class="text-truncate text-muted fs-14 mb-0"><i
                                            class="mdi mdi-circle align-middle text-primary me-2"></i>www.google.com
                                    </p>
                                </div>
                                <div class="flex-shrink-0">
                                    <p class="mb-0">24.58%</p>
                                </div>
                            </div><!-- end -->
                            <div class="d-flex mb-3">
                                <div class="flex-grow-1">
                                    <p class="text-truncate text-muted fs-14 mb-0"><i
                                            class="mdi mdi-circle align-middle text-warning me-2"></i>www.medium.com
                                    </p>
                                </div>
                                <div class="flex-shrink-0">
                                    <p class="mb-0">12.22%</p>
                                </div>
                            </div><!-- end -->
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-truncate text-muted fs-14 mb-0"><i
                                            class="mdi mdi-circle align-middle text-secondary me-2"></i>Other
                                    </p>
                                </div>
                                <div class="flex-shrink-0">
                                    <p class="mb-0">17.58%</p>
                                </div>
                            </div><!-- end -->
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex mb-3">
                                <div class="flex-grow-1">
                                    <p class="text-truncate text-muted fs-14 mb-0"><i
                                            class="mdi mdi-circle align-middle text-info me-2"></i>www.youtube.com
                                    </p>
                                </div>
                                <div class="flex-shrink-0">
                                    <p class="mb-0">17.51%</p>
                                </div>
                            </div><!-- end -->
                            <div class="d-flex mb-3">
                                <div class="flex-grow-1">
                                    <p class="text-truncate text-muted fs-14 mb-0"><i
                                            class="mdi mdi-circle align-middle text-success me-2"></i>www.meta.com
                                    </p>
                                </div>
                                <div class="flex-shrink-0">
                                    <p class="mb-0">23.05%</p>
                                </div>
                            </div><!-- end -->
                        </div>
                    </div>

                    <div class="mt-2 text-center">
                        <a href="javascript:void(0);" class="text-muted text-decoration-underline">Show
                            All</a>
                    </div>

                </div><!-- end card body -->
            </div>
        </div>
        <!--end col-->

    </div>
    <!-- end row-->
@endsection
@section('script')
    <!-- apexcharts -->
    <script src="{{ URL::asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Vector map-->
    <script src="{{ URL::asset('assets/libs/jsvectormap/jsvectormap.min.js') }}"></script>

    <!-- Widget init -->
    <script src="{{ URL::asset('assets/js/pages/widgets.init.js') }}"></script>

    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
