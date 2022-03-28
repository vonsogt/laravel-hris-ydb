@extends('layouts.master')
@section('title') @lang('translation.products') @endsection
@section('css')
<link href="{{ URL::asset('assets/libs/nouislider/nouislider.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="assets/libs/gridjs/gridjs.min.css">

@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Ecommerce @endslot
@slot('title')Products @endslot
@endcomponent
<div class="row">
    <div class="col-xl-3 col-lg-4">
        <div class="card">
            <div class="card-header">
                <div class="d-flex mb-3">
                    <div class="flex-grow-1">
                        <h5 class="fs-16">Filters</h5>
                    </div>
                    <div class="flex-shrink-0">
                        <a href="#" class="text-decoration-underline">Clear All</a>
                    </div>
                </div>

                <div class="filter-choices-input">
                    <input class="form-control" data-choices data-choices-removeItem type="text"
                        value="Watches, Headset, Sweatshirt, 20% Off, 4 Star" />
                </div>
            </div>

            <div class="accordion accordion-flush">

                <div class="card-body border-bottom">
                    <div>
                        <p class="text-muted text-uppercase fs-12 fw-medium mb-2">Products</p>
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#" class="d-flex py-1">
                                    <div class="flex-grow-1">
                                        <h5 class="fs-13 mb-0">Grocery</h5>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex py-1" data-bs-toggle="collapse"
                                    href="#filterlist-fashion" role="button" aria-expanded="true"
                                    aria-controls="filterlist-fashion">
                                    <div class="flex-grow-1">
                                        <h5 class="fs-13 mb-0">Fashion</h5>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <span class="badge bg-light text-muted">5</span>
                                    </div>
                                </a>

                                <div class="collapse show" id="filterlist-fashion">
                                    <ul class="ps-4">
                                        <li><a href="#" class="d-block py-1 text-muted">Men's Wear</a>
                                        </li>
                                        <li><a href="#" class="d-block py-1 text-muted">Women Western
                                                Wear</a></li>
                                        <li><a href="#" class="d-block py-1 text-muted">Footwear</a>
                                        </li>
                                        <li><a href="#" class="d-block py-1 text-muted">Watches</a></li>
                                        <li><a href="#" class="d-block py-1 text-muted">Kids</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="d-flex py-1">
                                    <div class="flex-grow-1">
                                        <h5 class="fs-13 mb-0">Mobiles</h5>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex py-1" data-bs-toggle="collapse"
                                    href="#filterlist-electronics" role="button" aria-expanded="false"
                                    aria-controls="filterlist-electronics">
                                    <div class="flex-grow-1">
                                        <h5 class="fs-13 mb-0">Electronics</h5>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <span class="badge bg-light text-muted">5</span>
                                    </div>
                                </a>

                                <div class="collapse" id="filterlist-electronics">
                                    <ul class="ps-4">
                                        <li><a href="#" class="d-block py-1 text-muted">Audio</a></li>
                                        <li><a href="#" class="d-block py-1 text-muted">Computer</a>
                                        </li>
                                        <li><a href="#" class="d-block py-1 text-muted">Laptop</a></li>
                                        <li><a href="#" class="d-block py-1 text-muted">Gaming</a></li>
                                        <li><a href="#" class="d-block py-1 text-muted">Tablets</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a class="d-flex py-1" data-bs-toggle="collapse"
                                    href="#filterlist-furniture" role="button" aria-expanded="false"
                                    aria-controls="filterlist-furniture">
                                    <div class="flex-grow-1">
                                        <h5 class="fs-13 mb-0">Home & Furniture</h5>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <span class="badge bg-light text-muted">6</span>
                                    </div>
                                </a>

                                <div class="collapse" id="filterlist-furniture">
                                    <ul class="ps-4">
                                        <li><a href="#" class="d-block py-1 text-muted">Home
                                                Furnishing</a></li>
                                        <li><a href="#" class="d-block py-1 text-muted">Living rooms</a>
                                        </li>
                                        <li><a href="#" class="d-block py-1 text-muted">Kitchen &
                                                Dining</a></li>
                                        <li><a href="#" class="d-block py-1 text-muted">Bedroom Room</a>
                                        </li>
                                        <li><a href="#" class="d-block py-1 text-muted">Home Decor</a>
                                        </li>
                                        <li><a href="#" class="d-block py-1 text-muted">Tools &
                                                Utility</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a class="d-flex py-1" data-bs-toggle="collapse"
                                    href="#filterlist-appliances" role="button" aria-expanded="false"
                                    aria-controls="filterlist-appliances">
                                    <div class="flex-grow-1">
                                        <h5 class="fs-13 mb-0">Appliances</h5>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <span class="badge bg-light text-muted">7</span>
                                    </div>
                                </a>

                                <div class="collapse" id="filterlist-appliances">
                                    <ul class="ps-4">
                                        <li><a href="#" class="d-block py-1 text-muted">Televisions</a>
                                        </li>
                                        <li><a href="#" class="d-block py-1 text-muted">Washing
                                                Machines</a></li>
                                        <li><a href="#" class="d-block py-1 text-muted">Air
                                                Conditioners</a></li>
                                        <li><a href="#" class="d-block py-1 text-muted">Refrigerator</a>
                                        </li>
                                        <li><a href="#" class="d-block py-1 text-muted">Kitchen
                                                Appliances</a></li>
                                        <li><a href="#" class="d-block py-1 text-muted">Home
                                                Appliances</a></li>
                                        <li><a href="#" class="d-block py-1 text-muted">Premium
                                                Appliances</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#" class="d-flex py-1">
                                    <div class="flex-grow-1">
                                        <h5 class="fs-13 mb-0">Kids</h5>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card-body border-bottom">
                    <p class="text-muted text-uppercase fs-12 fw-medium mb-4">Price</p>

                    <div id="product-price-range"></div>
                    <div class="formCost d-flex gap-2 align-items-center mt-3">
                        <input class="form-control form-control-sm" type="text" id="minCost" value="0" /> <span class="fw-semibold text-muted">to</span> <input
                            class="form-control form-control-sm" type="text" id="maxCost" value="1000" />
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingBrands">
                        <button class="accordion-button bg-transparent shadow-none" type="button"
                            data-bs-toggle="collapse" data-bs-target="#flush-collapseBrands"
                            aria-expanded="true" aria-controls="flush-collapseBrands">
                            <span class="text-muted text-uppercase fs-12 fw-medium">Brands</span> <span
                                class="badge bg-success rounded-pill align-middle ms-1">2</span>
                        </button>
                    </h2>

                    <div id="flush-collapseBrands" class="accordion-collapse collapse show"
                        aria-labelledby="flush-headingBrands">
                        <div class="accordion-body text-body pt-0">
                            <div class="search-box search-box-sm">
                                <input type="text" class="form-control bg-light border-0" placeholder="Search Brands...">
                                <i class="ri-search-line search-icon"></i>
                            </div>
                            <div class="d-flex flex-column gap-2 mt-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="productBrandRadio5" checked>
                                    <label class="form-check-label"
                                        for="productBrandRadio5">Boat</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="productBrandRadio4">
                                    <label class="form-check-label"
                                        for="productBrandRadio4">OnePlus</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="productBrandRadio3">
                                    <label class="form-check-label"
                                        for="productBrandRadio3">Realme</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="productBrandRadio2">
                                    <label class="form-check-label"
                                        for="productBrandRadio2">Sony</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="productBrandRadio1" checked>
                                    <label class="form-check-label" for="productBrandRadio1">JBL</label>
                                </div>

                                <div>
                                    <button type="button"
                                        class="btn btn-link text-decoration-none text-uppercase fw-medium p-0">1,235
                                        More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end accordion-item -->

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingDiscount">
                        <button class="accordion-button bg-transparent shadow-none collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#flush-collapseDiscount"
                            aria-expanded="true" aria-controls="flush-collapseDiscount">
                            <span class="text-muted text-uppercase fs-12 fw-medium">Discount</span> <span
                                class="badge bg-success rounded-pill align-middle ms-1">1</span>
                        </button>
                    </h2>
                    <div id="flush-collapseDiscount" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingDiscount">
                        <div class="accordion-body text-body pt-1">
                            <div class="d-flex flex-column gap-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="productdiscountRadio6">
                                    <label class="form-check-label" for="productdiscountRadio6">
                                        50% or more
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="productdiscountRadio5">
                                    <label class="form-check-label" for="productdiscountRadio5">
                                        40% or more
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="productdiscountRadio4">
                                    <label class="form-check-label" for="productdiscountRadio4">
                                        30% or more
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="productdiscountRadio3" checked>
                                    <label class="form-check-label" for="productdiscountRadio3">
                                        20% or more
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="productdiscountRadio2">
                                    <label class="form-check-label" for="productdiscountRadio2">
                                        10% or more
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="productdiscountRadio1">
                                    <label class="form-check-label" for="productdiscountRadio1">
                                        Less than 10%
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end accordion-item -->

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingRating">
                        <button class="accordion-button bg-transparent shadow-none collapsed"
                            type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseRating" aria-expanded="false"
                            aria-controls="flush-collapseRating">
                            <span class="text-muted text-uppercase fs-12 fw-medium">Rating</span> <span
                                class="badge bg-success rounded-pill align-middle ms-1">1</span>
                        </button>
                    </h2>

                    <div id="flush-collapseRating" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingRating">
                        <div class="accordion-body text-body">
                            <div class="d-flex flex-column gap-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="productratingRadio4" checked>
                                    <label class="form-check-label" for="productratingRadio4">
                                        <span class="text-muted">
                                            <i class="mdi mdi-star text-warning"></i>
                                            <i class="mdi mdi-star text-warning"></i>
                                            <i class="mdi mdi-star text-warning"></i>
                                            <i class="mdi mdi-star text-warning"></i>
                                            <i class="mdi mdi-star"></i>
                                        </span> 4 & Above
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="productratingRadio3">
                                    <label class="form-check-label" for="productratingRadio3">
                                        <span class="text-muted">
                                            <i class="mdi mdi-star text-warning"></i>
                                            <i class="mdi mdi-star text-warning"></i>
                                            <i class="mdi mdi-star text-warning"></i>
                                            <i class="mdi mdi-star"></i>
                                            <i class="mdi mdi-star"></i>
                                        </span> 3 & Above
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="productratingRadio2">
                                    <label class="form-check-label" for="productratingRadio2">
                                        <span class="text-muted">
                                            <i class="mdi mdi-star text-warning"></i>
                                            <i class="mdi mdi-star text-warning"></i>
                                            <i class="mdi mdi-star"></i>
                                            <i class="mdi mdi-star"></i>
                                            <i class="mdi mdi-star"></i>
                                        </span> 2 & Above
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="productratingRadio1">
                                    <label class="form-check-label" for="productratingRadio1">
                                        <span class="text-muted">
                                            <i class="mdi mdi-star text-warning"></i>
                                            <i class="mdi mdi-star"></i>
                                            <i class="mdi mdi-star"></i>
                                            <i class="mdi mdi-star"></i>
                                            <i class="mdi mdi-star"></i>
                                        </span> 1
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end accordion-item -->
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xl-9 col-lg-8">
        <div>
            <div class="card">
                <div class="card-header border-0">
                    <div class="row g-4">
                        <div class="col-sm-auto">
                            <div>
                                <a href="apps-ecommerce-add-product" class="btn btn-success"><i
                                        class="ri-add-line align-bottom me-1"></i> Add Product</a>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="d-flex justify-content-sm-end">
                                <div class="search-box ms-2">
                                    <input type="text" class="form-control" placeholder="Search Products...">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <ul class="nav nav-tabs-custom card-header-tabs border-bottom-0" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active fw-semibold" data-bs-toggle="tab" href="#productnav-all"
                                        role="tab">
                                        All <span class="badge badge-soft-danger align-middle rounded-pill ms-1">12</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#productnav-published"
                                        role="tab">
                                        Published <span class="badge badge-soft-danger align-middle rounded-pill ms-1">5</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#productnav-draft"
                                        role="tab">
                                        Draft
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-auto">
                            <div id="selection-element">
                                <div class="my-n1 d-flex align-items-center text-muted">
                                    Select <div id="select-content" class="text-body fw-semibold px-1"></div> Result <button type="button" class="btn btn-link link-danger p-0 ms-3" data-bs-toggle="modal" data-bs-target="#removeItemModal">Remove</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card header -->
                <div class="card-body">

                    <div class="tab-content text-muted">
                        <div class="tab-pane active" id="productnav-all" role="tabpanel">
                            <div id="table-product-list-all" class="table-card gridjs-border-none"></div>
                        </div>
                        <!-- end tab pane -->

                        <div class="tab-pane" id="productnav-published" role="tabpanel">
                            <div id="table-product-list-published" class="table-card gridjs-border-none"></div>
                        </div>
                        <!-- end tab pane -->

                        <div class="tab-pane" id="productnav-draft" role="tabpanel">
                            <div class="py-4 text-center">
                                <div>
                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json"
                                        trigger="loop" colors="primary:#405189,secondary:#0ab39c"
                                        style="width:72px;height:72px">
                                    </lord-icon>
                                </div>

                                <div class="mt-4">
                                    <h5>Sorry! No Result Found</h5>
                                </div>
                            </div>
                        </div>
                        <!-- end tab pane -->
                    </div>
                    <!-- end tab content -->

                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
    </div>
    <!-- end col -->
</div>
<!-- end row -->

    <!-- END layout-wrapper -->

    <!-- removeItemModal -->
    <div id="removeItemModal" class="modal fade zoomIn" tabindex="-1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                </div>
                <div class="modal-body">
                    <div class="mt-2 text-center">
                        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                            colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                        <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                            <h4>Are you Sure ?</h4>
                            <p class="text-muted mx-4 mb-0">Are you Sure You want to Remove this Product ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn w-sm btn-danger " id="delete-product">Yes, Delete It!</button>
                    </div>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    @endsection
    @section('script')
    <script src="{{ URL::asset('assets/libs/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/wnumb/wnumb.min.js') }}"></script>
    <script src="assets/libs/gridjs/gridjs.min.js"></script>
    <script src="https://unpkg.com/gridjs/plugins/selection/dist/selection.umd.js"></script>


    <script src="{{ URL::asset('assets/js/pages/ecommerce-product-list.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
    @endsection
