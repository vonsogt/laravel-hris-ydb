@extends('layouts.master-without-nav')
@section('title') Landing @endsection
@section('css')
<link href="assets/libs/swiper/swiper.min.css" rel="stylesheet" type="text/css" />

@endsection
@section('body')

<body data-bs-spy="scroll" data-bs-target="#navbar-example">
@endsection
@section('content')
    {{-- @component('components.breadcrumb')
        @slot('li_1') Icons @endslot
        @slot('title') Landing @endslot
    @endcomponent --}}


    <body data-bs-spy="scroll" data-bs-target="#navbar-example">

        <!-- Begin page -->
        <div class="layout-wrapper landing">
            <nav class="navbar navbar-expand-lg navbar-landing fixed-top" id="navbar">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="{{ URL::asset('assets/images/logo-dark.png') }}" class="card-logo card-logo-dark" alt="logo dark" height="17">
                        <img src="{{ URL::asset('assets/images/logo-light.png') }}" class="card-logo card-logo-light" alt="logo light"
                            height="17">
                    </a>
                    <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="mdi mdi-menu"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
                            <li class="nav-item">
                                <a class="nav-link active" href="#hero">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#services">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#features">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#plans">Plans</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#reviews">Reviews</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#team">Team</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li>
                        </ul>

                        <div class="">
                            <button type="button" class="btn btn-link fw-medium text-decoration-none text-dark">Sign
                                in</button>
                            <button type="button" class="btn btn-primary">Sign Up</button>
                        </div>
                    </div>

                </div>
            </nav>
            <!-- end navbar -->

            <!-- start hero section -->
            <section class="section pb-0 hero-section" id="hero">
                <div class="bg-overlay bg-overlay-pattern"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-sm-10">
                            <div class="text-center mt-lg-5 pt-5">
                                <h1 class="display-6 fw-semibold mb-3">The better way to manage your website with <span
                                        class="text-success">Velzon </span></h1>
                                <p class="fs-14 text-muted">Improve your sourcing costs by finding contractors without
                                    long tendering processes.</p>

                                <div class="d-flex gap-2 justify-content-center mt-4">
                                    <a href="#" class="btn btn-primary">Get Started</a>
                                    <a href="#" class="btn btn-danger">View Plan</a>
                                </div>
                            </div>

                            <div class="mt-4 mt-sm-5 pt-sm-5 mb-sm-n5 demo-carousel">
                                <div class="demo-img-patten-top d-none d-sm-block">
                                    <img src="{{ URL::asset('assets/images/landing/img-pattern.png') }}" class="d-block img-fluid" alt="...">
                                </div>
                                <div class="demo-img-patten-bottom d-none d-sm-block">
                                    <img src="{{ URL::asset('assets/images/landing/img-pattern.png') }}" class="d-block img-fluid" alt="...">
                                </div>
                                <div class="carousel slide carousel-fade" data-bs-ride="carousel">
                                    <div class="carousel-inner shadow-lg p-2 bg-white rounded">
                                        <div class="carousel-item active" data-bs-interval="2000">
                                            <img src="{{ URL::asset('assets/images/demos/default.png') }}" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="{{ URL::asset('assets/images/demos/saas.png') }}" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="{{ URL::asset('assets/images/demos/material.png') }}" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="{{ URL::asset('assets/images/demos/minimal.png') }}" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="{{ URL::asset('assets/images/demos/creative.png') }}" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="{{ URL::asset('assets/images/demos/modern.png') }}" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="{{ URL::asset('assets/images/demos/interactive.png') }}" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
                <div class="position-absolute start-0 end-0 bottom-0 hero-shape-svg">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 1440 120">
                        <g mask="url(&quot;#SvgjsMask1003&quot;)" fill="none">
                            <path d="M 0,118 C 288,98.6 1152,40.4 1440,21L1440 140L0 140z">
                            </path>
                        </g>
                    </svg>
                </div>
                <!-- end shape -->
            </section>
            <!-- end hero section -->

            <!-- start client section -->
            <div class="pt-5 mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="text-center">
                                <h5 class="fs-16">Trusted by the world's best</h5>

                                <!-- Swiper -->
                                <div class="swiper trusted-client-slider mt-sm-5 mt-4 mb-sm-5 mb-4" dir="ltr">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="client-images">
                                                <img src="{{ URL::asset('assets/images/clients/1.png') }}" alt="client-img"
                                                    class="mx-auto img-fluid d-block">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="client-images">
                                                <img src="{{ URL::asset('assets/images/clients/2.png') }}" alt="client-img"
                                                    class="mx-auto img-fluid d-block">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="client-images">
                                                <img src="{{ URL::asset('assets/images/clients/3.png') }}" alt="client-img"
                                                    class="mx-auto img-fluid d-block">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="client-images">
                                                <img src="{{ URL::asset('assets/images/clients/4.png') }}" alt="client-img"
                                                    class="mx-auto img-fluid d-block">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="client-images">
                                                <img src="{{ URL::asset('assets/images/clients/5.png') }}" alt="client-img"
                                                    class="mx-auto img-fluid d-block">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="client-images">
                                                <img src="{{ URL::asset('assets/images/clients/6.png') }}" alt="client-img"
                                                    class="mx-auto img-fluid d-block">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="text-muted mb-0">
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end client section -->

            <!-- start services -->
            <section class="section" id="services">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="text-center mb-5">
                                <h2 class="mb-3">A Digital web design studio creating modern & engaging online</h2>
                                <p class="text-muted">To achieve this, it would be necessary to have uniform grammar,
                                    pronunciation and more common words. If several languages coalesce the grammar</p>
                            </div>

                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row g-3">
                        <div class="col-lg-4">
                            <div class="d-flex p-3">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm icon-effect">
                                        <div class="avatar-title bg-transparent text-success rounded-circle h2">
                                            <i class="ri-quill-pen-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5>Creative Design</h5>
                                    <p class="text-muted mb-2">Some quick example text to build on the card title and make
                                        up the bulk of the card's content.</p>
                                    <div>
                                        <a href="#">Learn more <i class="ri-arrow-right-s-line align-bottom"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4">
                            <div class="d-flex p-3">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm icon-effect">
                                        <div class="avatar-title bg-transparent text-success rounded-circle h2">
                                            <i class="ri-palette-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5>Unlimited Colors</h5>
                                    <p class="text-muted mb-2">Credibly brand standards compliant users without extensible
                                        services. Anibh euismod tincidunt ut.</p>
                                    <div>
                                        <a href="#">Learn more <i class="ri-arrow-right-s-line align-bottom"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4">
                            <div class="d-flex p-3">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm icon-effect">
                                        <div class="avatar-title bg-transparent text-success rounded-circle h2">
                                            <i class="ri-lightbulb-flash-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5>Strategy Solutions</h5>
                                    <p class="text-muted mb-2">Separated they live in Bookmarksgrove right at the coast of
                                        the Semantics.</p>
                                    <div>
                                        <a href="#">Learn more <i class="ri-arrow-right-s-line align-bottom"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4">
                            <div class="d-flex p-3">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm icon-effect">
                                        <div class="avatar-title bg-transparent text-success rounded-circle h2">
                                            <i class="ri-customer-service-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5>Awesome Support</h5>
                                    <p class="text-muted mb-2">It is a paradisematic country, in which roasted parts of
                                        sentences fly into your mouth leave for the far World.</p>
                                    <div>
                                        <a href="#">Learn more <i class="ri-arrow-right-s-line align-bottom"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4">
                            <div class="d-flex p-3">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm icon-effect">
                                        <div class="avatar-title bg-transparent text-success rounded-circle h2">
                                            <i class="ri-stack-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5>Truly Multipurpose</h5>
                                    <p class="text-muted mb-2">Even the all-powerful Pointing has no control about the blind
                                        texts it is an almost unorthographic.</p>
                                    <div>
                                        <a href="#">Learn more <i class="ri-arrow-right-s-line align-bottom"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4">
                            <div class="d-flex p-3">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm icon-effect">
                                        <div class="avatar-title bg-transparent text-success rounded-circle h2">
                                            <i class="ri-settings-2-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5>Easy to customize</h5>
                                    <p class="text-muted mb-2">Question Marks and devious Semikoli, but the Little Blind
                                        Text didn’t listen. She packed her seven.</p>
                                    <div>
                                        <a href="#">Learn more <i class="ri-arrow-right-s-line align-bottom"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end services -->

            <!-- start features -->
            <section class="section bg-light py-5" id="features">
                <div class="container">
                    <div class="row align-items-center gy-4">
                        <div class="col-lg-6 col-sm-7 mx-auto">
                            <div>
                                <img src="{{ URL::asset('assets/images/landing/features/img-1.png') }}" alt="" class="img-fluid mx-auto">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text-muted">
                                <div class="avatar-sm icon-effect mb-4">
                                    <div class="avatar-title bg-transparent rounded-circle text-success h1">
                                        <i class="ri-stack-fill"></i>
                                    </div>
                                </div>
                                <h4 class="mb-3">Huge collection of widgets</h4>
                                <p class="mb-4">To achieve this, it would be necessary to have uniform grammar,
                                    pronunciation and more common words. If several languages coalesce, the grammar of the
                                    resulting.</p>

                                <div class="row pt-2">
                                    <div class="col-3">
                                        <div>
                                            <h4>5</h4>
                                            <p>Dashboards</p>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div>
                                            <h4>150 +</h4>
                                            <p>Pages</p>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div>
                                            <h4>7 +</h4>
                                            <p>App pages</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end features -->

            <!-- start cta -->
            <section class="py-5 bg-primary position-relative">
                <div class="bg-overlay bg-overlay-pattern opacity-50"></div>
                <div class="container">
                    <div class="row align-items-center gy-4">
                        <div class="col-sm">
                            <div>
                                <h4 class="text-white mb-0 fw-semibold">Build your dream website today</h4>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-sm-auto">
                            <div>
                                <button type="button" class="btn btn-success">View Plan & Pricing</button>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end cta -->

            <!-- start features -->
            <section class="section">
                <div class="container">
                    <div class="row align-items-center gy-4">
                        <div class="col-lg-6 order-2 order-lg-1">
                            <div class="text-muted">
                                <h5 class="fs-12 text-uppercase text-success">Design</h5>
                                <h4 class="mb-3">Well Designed Dashboards</h4>
                                <p class="mb-4">The new common language will be more simple and regular than the existing
                                    European languages. It will be as simple as in fact, it will be Occidental. To an
                                    English person, it will seem like simplified.</p>

                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="vstack gap-2">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-2">
                                                    <div class="avatar-xs icon-effect">
                                                        <div
                                                            class="avatar-title bg-transparent text-success rounded-circle h2">
                                                            <i class="ri-check-fill"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-14 mb-0">Ecommerce</h5>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-2">
                                                    <div class="avatar-xs icon-effect">
                                                        <div
                                                            class="avatar-title bg-transparent text-success rounded-circle h2">
                                                            <i class="ri-check-fill"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-14 mb-0">Analytics</h5>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-2">
                                                    <div class="avatar-xs icon-effect">
                                                        <div
                                                            class="avatar-title bg-transparent text-success rounded-circle h2">
                                                            <i class="ri-check-fill"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-14 mb-0">CRM</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="vstack gap-2">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-2">
                                                    <div class="avatar-xs icon-effect">
                                                        <div
                                                            class="avatar-title bg-transparent text-success rounded-circle h2">
                                                            <i class="ri-check-fill"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-14 mb-0">Crypto</h5>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-2">
                                                    <div class="avatar-xs icon-effect">
                                                        <div
                                                            class="avatar-title bg-transparent text-success rounded-circle h2">
                                                            <i class="ri-check-fill"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-14 mb-0">Projects</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <button type="button" class="btn btn-primary">Learn more</button>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4 col-sm-7 col-10 mx-auto order-1 order-lg-2">
                            <div>
                                <img src="{{ URL::asset('assets/images/landing/features/img-2.png') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row align-items-center mt-5 pt-lg-5 gy-4">
                        <div class="col-lg-6 col-sm-7 col-10 mx-auto">
                            <div>
                                <img src="{{ URL::asset('assets/images/landing/features/img-3.png') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text-muted ps-lg-5">
                                <h5 class="fs-12 text-uppercase text-success">structure</h5>
                                <h4 class="mb-3">Well Documented</h4>
                                <p class="mb-4">Everyone realizes why a new common language would be desirable: one could
                                    refuse to pay expensive translators.</p>

                                <div class="vstack gap-2">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-2">
                                            <div class="avatar-xs icon-effect">
                                                <div class="avatar-title bg-transparent text-success rounded-circle h2">
                                                    <i class="ri-check-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">Sed ut perspiciatis unde omnis iste</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-2">
                                            <div class="avatar-xs icon-effect">
                                                <div class="avatar-title bg-transparent text-success rounded-circle h2">
                                                    <i class="ri-check-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0">Neque porro est dolor sit</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end features -->

            <!-- start plan -->
            <section class="section bg-light" id="plans">
                <div class="bg-overlay bg-overlay-pattern"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="text-center mb-5">
                                <h3 class="mb-3 fw-semibold">Choose the plan that's right for you</h3>
                                <p class="text-muted mb-4">Simple pricing. No hidden fees. Advanced features for you
                                    business.</p>

                                <div class="d-flex justify-content-center align-items-center">
                                    <div>
                                        <h5 class="fs-14 mb-0">Month</h5>
                                    </div>
                                    <div class="form-check form-switch fs-20 ms-3 " onclick="check()">
                                        <input class="form-check-input" type="checkbox" id="plan-switch">
                                        <label class="form-check-label" for="plan-switch"></label>
                                    </div>
                                    <div>
                                        <h5 class="fs-14 mb-0">Annual</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row gy-4">
                        <div class="col-lg-4">
                            <div class="card plan-box mb-0">
                                <div class="card-body p-4 m-2">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <h5 class="mb-1 fw-semibold">Basic Plan</h5>
                                            <p class="text-muted mb-0">For Startup</p>
                                        </div>
                                        <div class="avatar-sm icon-effect">
                                            <div class="avatar-title bg-transparent text-success rounded-circle h2 mb-0">
                                                <i class="ri-book-mark-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pt-4">
                                        <h2 class="month"><sup><small>$</small></sup>19 <span
                                                class="fs-13 text-muted">/Month</span></h2>
                                        <h2 class="annual"><sup><small>$</small></sup>171 <span
                                                class="fs-13 text-muted">/Year</span></h2>
                                    </div>
                                    <hr class="my-4 text-muted">
                                    <div>
                                        <ul class="list-unstyled text-muted vstack gap-1">
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <div class="avatar-xs icon-effect h-auto">
                                                            <div
                                                                class="avatar-title bg-transparent text-success rounded-circle h2 mb-0">
                                                                <i class="ri-check-fill"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        Upto <b>3</b> Projects
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <div class="avatar-xs icon-effect h-auto">
                                                            <div
                                                                class="avatar-title bg-transparent text-success rounded-circle h2 mb-0">
                                                                <i class="ri-check-fill"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        Upto <b>299</b> Customers
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <div class="avatar-xs icon-effect h-auto">
                                                            <div
                                                                class="avatar-title bg-transparent text-success rounded-circle h2 mb-0">
                                                                <i class="ri-check-fill"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        Scalable Bandwidth
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <div class="avatar-xs icon-effect h-auto">
                                                            <div
                                                                class="avatar-title bg-transparent text-success rounded-circle h2 mb-0">
                                                                <i class="ri-check-fill"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <b>5</b> FTP Login
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <div class="avatar-xs icon-effect h-auto">
                                                            <div
                                                                class="avatar-title bg-transparent text-danger rounded-circle h2 mb-0">
                                                                <i class="ri-close-fill"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <b>24/7</b> Support
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <div class="avatar-xs icon-effect h-auto">
                                                            <div
                                                                class="avatar-title bg-transparent text-danger rounded-circle h2 mb-0">
                                                                <i class="ri-close-fill"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <b>Unlimited</b> Storage
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="mt-4">
                                            <a href="javascript:void(0);" class="btn btn-soft-success w-100">Get
                                                started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-4">
                            <div class="card plan-box mb-0 ribbon-box right">
                                <div class="card-body p-4 m-2">
                                    <div class="ribbon-two ribbon-two-danger"><span>Popular</span></div>
                                    <div>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="mb-1 fw-semibold">Pro Business</h5>
                                                <p class="text-muted mb-0">Professional plans</p>
                                            </div>
                                            <div class="avatar-sm icon-effect">
                                                <div
                                                    class="avatar-title bg-transparent text-success rounded-circle h2 mb-0">
                                                    <i class="ri-medal-fill"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pt-4">
                                            <h2 class="month"><sup><small>$</small></sup>29 <span
                                                    class="fs-13 text-muted">/Month</span></h2>
                                            <h2 class="annual"><sup><small>$</small></sup>261 <span
                                                    class="fs-13 text-muted">/Year</span></h2>
                                        </div>
                                    </div>
                                    <hr class="my-4 text-muted">
                                    <div>
                                        <ul class="list-unstyled vstack gap-1 text-muted">
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <div class="avatar-xs icon-effect h-auto">
                                                            <div
                                                                class="avatar-title bg-transparent text-success rounded-circle h2 mb-0">
                                                                <i class="ri-check-fill"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        Upto <b>15</b> Projects
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <div class="avatar-xs icon-effect h-auto">
                                                            <div
                                                                class="avatar-title bg-transparent text-success rounded-circle h2 mb-0">
                                                                <i class="ri-check-fill"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <b>Unlimited</b> Customers
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <div class="avatar-xs icon-effect h-auto">
                                                            <div
                                                                class="avatar-title bg-transparent text-success rounded-circle h2 mb-0">
                                                                <i class="ri-check-fill"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        Scalable Bandwidth
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <div class="avatar-xs icon-effect h-auto">
                                                            <div
                                                                class="avatar-title bg-transparent text-success rounded-circle h2 mb-0">
                                                                <i class="ri-check-fill"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <b>12</b> FTP Login
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <div class="avatar-xs icon-effect h-auto">
                                                            <div
                                                                class="avatar-title bg-transparent text-success rounded-circle h2 mb-0">
                                                                <i class="ri-check-fill"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <b>24/7</b> Support
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <div class="avatar-xs icon-effect h-auto">
                                                            <div
                                                                class="avatar-title bg-transparent text-danger rounded-circle h2 mb-0">
                                                                <i class="ri-close-fill"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <b>Unlimited</b> Storage
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="mt-4">
                                            <a href="javascript:void(0);" class="btn btn-success w-100">Get
                                                started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-4">
                            <div class="card plan-box mb-0">
                                <div class="card-body p-4 m-2">
                                    <div>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="mb-1 fw-semibold">Platinum Plan</h5>
                                                <p class="text-muted mb-0">Enterprise Businesses</p>
                                            </div>
                                            <div class="avatar-sm icon-effect">
                                                <div
                                                    class="avatar-title bg-transparent text-success rounded-circle h2 mb-0">
                                                    <i class="ri-stack-fill"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pt-4">
                                            <h2 class="month"><sup><small>$</small></sup>39 <span
                                                    class="fs-13 text-muted">/Month</span></h2>
                                            <h2 class="annual"><sup><small>$</small></sup>351 <span
                                                    class="fs-13 text-muted">/Year</span></h2>
                                        </div>
                                    </div>
                                    <hr class="my-4 text-muted">
                                    <div>
                                        <ul class="list-unstyled vstack gap-1 text-muted">
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <div class="avatar-xs icon-effect h-auto">
                                                            <div
                                                                class="avatar-title bg-transparent text-success rounded-circle h2 mb-0">
                                                                <i class="ri-check-fill"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <b>Unlimited</b> Projects
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <div class="avatar-xs icon-effect h-auto">
                                                            <div
                                                                class="avatar-title bg-transparent text-success rounded-circle h2 mb-0">
                                                                <i class="ri-check-fill"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <b>Unlimited</b> Customers
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <div class="avatar-xs icon-effect h-auto">
                                                            <div
                                                                class="avatar-title bg-transparent text-success rounded-circle h2 mb-0">
                                                                <i class="ri-check-fill"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        Scalable Bandwidth
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <div class="avatar-xs icon-effect h-auto">
                                                            <div
                                                                class="avatar-title bg-transparent text-success rounded-circle h2 mb-0">
                                                                <i class="ri-check-fill"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <b>Unlimited</b> FTP Login
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <div class="avatar-xs icon-effect h-auto">
                                                            <div
                                                                class="avatar-title bg-transparent text-success rounded-circle h2 mb-0">
                                                                <i class="ri-check-fill"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <b>24/7</b> Support
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <div class="avatar-xs icon-effect h-auto">
                                                            <div
                                                                class="avatar-title bg-transparent text-success rounded-circle h2 mb-0">
                                                                <i class="ri-check-fill"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <b>Unlimited</b> Storage
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="mt-4">
                                            <a href="javascript:void(0);" class="btn btn-soft-success w-100">Get
                                                started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!-- end container -->
            </section>
            <!-- end plan -->

            <!-- start faqs -->
            <section class="section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="text-center mb-5">
                                <h3 class="mb-3 fw-semibold">Frequently asked questions</h3>
                                <p class="text-muted mb-4">If you can not find answer to your question in our FAQ, you can
                                    always contact us or email us. We will answer you shortly!</p>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row g-lg-5 g-4">
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center mb-2">
                                <div class="flex-shrink-0 me-1">
                                    <i class="ri-question-line fs-24 align-middle text-success me-1"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-14 mb-0 fw-semibold">General Questions</h5>
                                </div>
                            </div>
                            <div class="accordion custom-accordionwithicon accordion-flush accordion-fill-success"
                                id="genques-accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="genques-headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#genques-collapseOne" aria-expanded="true"
                                            aria-controls="genques-collapseOne">
                                            What is Lorem Ipsum ?
                                        </button>
                                    </h2>
                                    <div id="genques-collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="genques-headingOne" data-bs-parent="#genques-accordion">
                                        <div class="accordion-body">
                                            If several languages coalesce, the grammar of the resulting language is more
                                            simple and regular than that of the individual languages. The new common
                                            language will be more simple and regular than the existing European languages.
                                            It will be as simple their most common words.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="genques-headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#genques-collapseTwo" aria-expanded="false"
                                            aria-controls="genques-collapseTwo">
                                            Why do we use it ?
                                        </button>
                                    </h2>
                                    <div id="genques-collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="genques-headingTwo" data-bs-parent="#genques-accordion">
                                        <div class="accordion-body">
                                            The new common language will be more simple and regular than the existing
                                            European languages. It will be as simple as Occidental; in fact, it will be
                                            Occidental. To an English person, it will seem like simplified English, as a
                                            skeptical Cambridge friend of mine told me what Occidental is.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="genques-headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#genques-collapseThree" aria-expanded="false"
                                            aria-controls="genques-collapseThree">
                                            Where does it come from ?
                                        </button>
                                    </h2>
                                    <div id="genques-collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="genques-headingThree" data-bs-parent="#genques-accordion">
                                        <div class="accordion-body">
                                            he wise man therefore always holds in these matters to this principle of
                                            selection: he rejects pleasures to secure other greater pleasures, or else he
                                            endures pains to avoid worse pains.But I must explain to you how all this
                                            mistaken idea of denouncing pleasure and praising pain was born and I will give
                                            you a complete.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="genques-headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#genques-collapseFour" aria-expanded="false"
                                            aria-controls="genques-collapseFour">
                                            Where can I get some ?
                                        </button>
                                    </h2>
                                    <div id="genques-collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="genques-headingFour" data-bs-parent="#genques-accordion">
                                        <div class="accordion-body">
                                            Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in
                                            faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi
                                            consectetuer lacinia. Nam pretium turpis et arcu arcu tortor, suscipit eget,
                                            imperdiet nec, imperdiet iaculis aliquam ultrices mauris.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end accordion-->

                        </div>
                        <!-- end col -->
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center mb-2">
                                <div class="flex-shrink-0 me-1">
                                    <i class="ri-shield-keyhole-line fs-24 align-middle text-success me-1"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-14 mb-0 fw-semibold">Privacy &amp; Security</h5>
                                </div>
                            </div>

                            <div class="accordion custom-accordionwithicon accordion-flush accordion-fill-success"
                                id="privacy-accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="privacy-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#privacy-collapseOne" aria-expanded="false"
                                            aria-controls="privacy-collapseOne">
                                            Why do we use it ?
                                        </button>
                                    </h2>
                                    <div id="privacy-collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="privacy-headingOne" data-bs-parent="#privacy-accordion">
                                        <div class="accordion-body">
                                            If several languages coalesce, the grammar of the resulting language is more
                                            simple and regular than that of the individual languages. The new common
                                            language will be more simple and regular than the existing European languages.
                                            It will be as simple their most common words.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="privacy-headingTwo">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#privacy-collapseTwo" aria-expanded="true"
                                            aria-controls="privacy-collapseTwo">
                                            Where can I get some ?
                                        </button>
                                    </h2>
                                    <div id="privacy-collapseTwo" class="accordion-collapse collapse show"
                                        aria-labelledby="privacy-headingTwo" data-bs-parent="#privacy-accordion">
                                        <div class="accordion-body">
                                            The new common language will be more simple and regular than the existing
                                            European languages. It will be as simple as Occidental; in fact, it will be
                                            Occidental. To an English person, it will seem like simplified English, as a
                                            skeptical Cambridge friend of mine told me what Occidental is.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="privacy-headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#privacy-collapseThree" aria-expanded="false"
                                            aria-controls="privacy-collapseThree">
                                            What is Lorem Ipsum ?
                                        </button>
                                    </h2>
                                    <div id="privacy-collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="privacy-headingThree" data-bs-parent="#privacy-accordion">
                                        <div class="accordion-body">
                                            he wise man therefore always holds in these matters to this principle of
                                            selection: he rejects pleasures to secure other greater pleasures, or else he
                                            endures pains to avoid worse pains.But I must explain to you how all this
                                            mistaken idea of denouncing pleasure and praising pain was born and I will give
                                            you a complete.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="privacy-headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#privacy-collapseFour" aria-expanded="false"
                                            aria-controls="privacy-collapseFour">
                                            Where does it come from ?
                                        </button>
                                    </h2>
                                    <div id="privacy-collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="privacy-headingFour" data-bs-parent="#privacy-accordion">
                                        <div class="accordion-body">
                                            Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in
                                            faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi
                                            consectetuer lacinia. Nam pretium turpis et arcu arcu tortor, suscipit eget,
                                            imperdiet nec, imperdiet iaculis aliquam ultrices mauris.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end accordion-->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end faqs -->

            <!-- start review -->
            <section class="section bg-primary" id="reviews">
                <div class="bg-overlay bg-overlay-pattern"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="text-center">
                                <div>
                                    <i class="ri-double-quotes-l text-success display-3"></i>
                                </div>
                                <h4 class="text-white mb-5"><span class="text-success">5k</span>+ Satisfied clients</h4>

                                <!-- Swiper -->
                                <div class="swiper client-review-swiper rounded" dir="ltr">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="row justify-content-center">
                                                <div class="col-10">
                                                    <div class="text-white-50">
                                                        <p class="fs-15 mb-4">" Fantastic theme with a ton of options. If
                                                            you just want the HTML to integrate with your project, then this
                                                            is the package. You can find the files in the 'dist' folder...no
                                                            need to install git and all the other stuff the documentation
                                                            talks about. "</p>

                                                        <div>
                                                            <h4 class="text-white">Abs1981</h4>
                                                            <p>- Admin User</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end slide -->
                                        <div class="swiper-slide">
                                            <div class="row justify-content-center">
                                                <div class="col-10">
                                                    <div class="text-white-50">
                                                        <p class="fs-15 mb-4">" If Every Vendor on Envato are as supportive
                                                            as Themesbrand, Development with be a nice experience. You guys
                                                            are Wonderful. Keep us the good work. "</p>

                                                        <div>
                                                            <h4 class="text-white">nezerious</h4>
                                                            <p>- Admin User</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end slide -->
                                        <div class="swiper-slide">
                                            <div class="row justify-content-center">
                                                <div class="col-10">
                                                    <div class="text-white-50">
                                                        <p class="fs-15 mb-4">" Fantastic theme with a ton of options. If
                                                            you just want the HTML to integrate with your project, then this
                                                            is the package. You can find the files in the 'dist' folder...no
                                                            need to install git and all the other stuff the documentation
                                                            talks about. "</p>

                                                        <div>
                                                            <h4 class="text-white">Abs1981</h4>
                                                            <p>- Admin User</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end slide -->
                                    </div>
                                    <div class="swiper-button-next bg-white rounded-circle"></div>
                                    <div class="swiper-button-prev bg-white rounded-circle"></div>
                                    <div class="swiper-pagination position-relative mt-2"></div>
                                </div>
                                <!-- end slider -->
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end review -->

            <!-- start counter -->
            <section class="py-5 position-relative bg-light">
                <div class="container">
                    <div class="row text-center gy-4">
                        <div class="col-lg-3 col-6">
                            <div>
                                <h2 class="mb-1"><span class="counter-value" data-target="100">0</span>+</h2>
                                <div class="text-muted">Projects Completed</div>
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-lg-3 col-6">
                            <div>
                                <h2 class="mb-1"><span class="counter-value" data-target="24">0</span></h2>
                                <div class="text-muted">Win Awards</div>
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-lg-3 col-6">
                            <div>
                                <h2 class="mb-1"><span class="counter-value" data-target="20.3">0</span>K</h2>
                                <div class="text-muted">Satisfied Clients</div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-6">
                            <div>
                                <h2 class="mb-1"><span class="counter-value" data-target="50">0</span></h2>
                                <div class="text-muted">Employees</div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end counter -->

            <!-- start Work Process -->
            <section class="section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="text-center mb-5">
                                <h3 class="mb-3 fw-semibold">Work Process</h3>
                                <p class="text-muted mb-4">In an ideal world this website wouldn’t exist, a client would
                                    acknowledge the importance of having web copy before the Proin vitae ipsum vel ex
                                    finibus semper design starts.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row text-center">
                        <div class="col-lg-4">
                            <div class="process-card mt-4">
                                <div class="process-arrow-img d-none d-lg-block">
                                    <img src="{{ URL::asset('assets/images/landing/process-arrow-img.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="avatar-sm icon-effect mx-auto mb-4">
                                    <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                        <i class="ri-quill-pen-fill"></i>
                                    </div>
                                </div>

                                <h5>Tell us what you need</h5>
                                <p class="text-muted">The Big Oxmox advised her not to do so.</p>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4">
                            <div class="process-card mt-4">
                                <div class="process-arrow-img d-none d-lg-block">
                                    <img src="{{ URL::asset('assets/images/landing/process-arrow-img.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="avatar-sm icon-effect mx-auto mb-4">
                                    <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                        <i class="ri-user-follow-fill"></i>
                                    </div>
                                </div>

                                <h5>Get free quotes</h5>
                                <p class="text-muted">TLittle Blind Text didn’t listen.</p>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-4">
                            <div class="process-card mt-4">
                                <div class="avatar-sm icon-effect mx-auto mb-4">
                                    <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                        <i class="ri-book-mark-fill"></i>
                                    </div>
                                </div>

                                <h5>Deliver high quality product</h5>
                                <p class="text-muted">When she reached the first hills.</p>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end Work Process -->

            <!-- start team -->
            <section class="section bg-light" id="team">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="text-center mb-5">
                                <h3 class="mb-3 fw-semibold">Our Team</h3>
                                <p class="text-muted mb-4">To achieve this, it would be necessary to have uniform grammar,
                                    pronunciation and more common words. If several languages coalesce the grammar.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body text-center p-4">
                                    <div class="avatar-xl mx-auto mb-4 position-relative">
                                        <img src="{{ URL::asset('assets/images/users/avatar-2.jpg') }}" alt="" class="img-fluid rounded-circle">
                                        <button type="button"
                                            class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                            <i class="ri-mail-fill align-bottom"></i>
                                        </button>
                                    </div>
                                    <!-- end card body -->
                                    <h5 class="mb-1"><a href="#" class="text-body">Nancy Martino</a></h5>
                                    <p class="text-muted mb-0">Team Leader</p>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body text-center p-4">
                                    <div class="avatar-xl mx-auto mb-4 position-relative">
                                        <div class="avatar-title bg-light text-primary rounded-circle fs-24">
                                            HB
                                        </div>
                                        <button type="button"
                                            class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                            <i class="ri-mail-fill align-bottom"></i>
                                        </button>
                                    </div>
                                    <!-- end card body -->
                                    <h5 class="mb-1"><a href="#" class="text-body">Henry Baird</a></h5>
                                    <p class="text-muted mb-0">Full Stack Developer</p>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body text-center p-4">
                                    <div class="avatar-xl mx-auto mb-4 position-relative">
                                        <img src="{{ URL::asset('assets/images/users/avatar-3.jpg') }}" alt="" class="img-fluid rounded-circle">
                                        <button type="button"
                                            class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                            <i class="ri-mail-fill align-bottom"></i>
                                        </button>
                                    </div>
                                    <!-- end card body -->
                                    <h5 class="mb-1"><a href="#" class="text-body">Frank Hook</a></h5>
                                    <p class="text-muted mb-0">Project Manager</p>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body text-center p-4">
                                    <div class="avatar-xl mx-auto mb-4 position-relative">
                                        <img src="{{ URL::asset('assets/images/users/avatar-8.jpg') }}" alt="" class="img-fluid rounded-circle">
                                        <button type="button"
                                            class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                            <i class="ri-mail-fill align-bottom"></i>
                                        </button>
                                    </div>
                                    <!-- end card body -->
                                    <h5 class="mb-1"><a href="#" class="text-body">Donald Palmer</a></h5>
                                    <p class="text-muted mb-0">UI/UX Designer</p>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body text-center p-4">
                                    <div class="avatar-xl mx-auto mb-4 position-relative">
                                        <img src="{{ URL::asset('assets/images/users/avatar-5.jpg') }}" alt="" class="img-fluid rounded-circle">
                                        <button type="button"
                                            class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                            <i class="ri-mail-fill align-bottom"></i>
                                        </button>
                                    </div>
                                    <!-- end card body -->
                                    <h5 class="mb-1"><a href="#" class="text-body">Erica Kernan</a></h5>
                                    <p class="text-muted mb-0">Web Designer</p>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body text-center p-4">
                                    <div class="avatar-xl mx-auto mb-4 position-relative">
                                        <img src="{{ URL::asset('assets/images/users/avatar-4.jpg') }}" alt="" class="img-fluid rounded-circle">
                                        <button type="button"
                                            class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                            <i class="ri-mail-fill align-bottom"></i>
                                        </button>
                                    </div>
                                    <!-- end card body -->
                                    <h5 class="mb-1"><a href="#" class="text-body">Alexis Clarke</a></h5>
                                    <p class="text-muted mb-0">Backend Developer</p>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body text-center p-4">
                                    <div class="avatar-xl mx-auto mb-4 position-relative">
                                        <img src="{{ URL::asset('assets/images/users/avatar-6.jpg') }}" alt="" class="img-fluid rounded-circle">
                                        <button type="button"
                                            class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                            <i class="ri-mail-fill align-bottom"></i>
                                        </button>
                                    </div>
                                    <!-- end card body -->
                                    <h5 class="mb-1"><a href="#" class="text-body">Marie Ward</a></h5>
                                    <p class="text-muted mb-0">Full Stack Developer</p>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body text-center p-4">
                                    <div class="avatar-xl mx-auto mb-4 position-relative">
                                        <img src="{{ URL::asset('assets/images/users/avatar-7.jpg') }}" alt="" class="img-fluid rounded-circle">
                                        <button type="button"
                                            class="btn btn-success btn-sm position-absolute bottom-0 end-0 rounded-circle avatar-xs">
                                            <i class="ri-mail-fill align-bottom"></i>
                                        </button>
                                    </div>
                                    <!-- end card body -->
                                    <h5 class="mb-1"><a href="#" class="text-body">Jack Gough</a></h5>
                                    <p class="text-muted mb-0">React Js Developer</p>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center mt-2">
                                <button type="button" class="btn btn-primary">View more <i
                                        class="ri-arrow-right-line ms-1 align-bottom"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end team -->

            <!-- start contact -->
            <section class="section" id="contact">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="text-center mb-5">
                                <h3 class="mb-3 fw-semibold">Get In Touch</h3>
                                <p class="text-muted mb-4">We thrive when coming up with innovative ideas but also
                                    understand that a smart concept should be supported with faucibus sapien odio measurable
                                    results.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row gy-4">
                        <div class="col-lg-4">
                            <div>
                                <div class="mt-4">
                                    <h5 class="fs-15">Office Address 1:</h5>
                                    <div class="text-muted">4461 Cedar Street Moro, AR 72368</div>
                                </div>
                                <div class="mt-4">
                                    <h5 class="fs-15">Office Address 2:</h5>
                                    <div class="text-muted">2467 Swick Hill Street <br />New Orleans, LA</div>
                                </div>
                                <div class="mt-4">
                                    <h5 class="fs-15">Working Hours:</h5>
                                    <div class="text-muted">9:00AM To 6:00PM</div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-8">
                            <div>
                                <form>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-4">
                                                <label for="name" class="form-label fs-13">Name</label>
                                                <input name="name" id="name" type="text"
                                                    class="form-control bg-light border-light" placeholder="Your name*">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-4">
                                                <label for="email" class="form-label fs-13">Email</label>
                                                <input name="email" id="email" type="email"
                                                    class="form-control bg-light border-light" placeholder="Your email*">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-4">
                                                <label for="subject" class="form-label fs-13">Subject</label>
                                                <input type="text" class="form-control bg-light border-light" id="subject"
                                                    name="subject" placeholder="Your Subject.." />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="comments" class="form-label fs-13">Message</label>
                                                <textarea name="comments" id="comments" rows="3"
                                                    class="form-control bg-light border-light"
                                                    placeholder="Your message..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 text-end">
                                            <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary"
                                                value="Send Message">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end contact -->

            <!-- start cta -->
            <section class="py-md-5 py-4 bg-primary position-relative">
                <div class="bg-overlay bg-overlay-pattern opacity-50"></div>
                <div class="container">
                    <div class="row align-items-center gy-4">
                        <div class="col-sm">
                            <div>
                                <h4 class="text-white mb-0 fw-semibold">Become a part of Velzon business community today
                                </h4>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-sm-auto">
                            <div>
                                <button type="button" class="btn btn-success">Get Started</button>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end cta -->

            <!-- Start footer -->
            <footer class="bg-dark py-5 position-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 mt-4">
                            <div>
                                <div>
                                    <img src="{{ URL::asset('assets/images/logo-light.png') }}" alt="logo light" height="17">
                                </div>
                                <div class="text-white-50 mt-4 fs-13">
                                    <p>Premium Multipurpose Admin & Dashboard Template</p>
                                    <p>You can build any type of web application like eCommerce, CRM, CMS, Project
                                        management apps, Admin Panels, etc using Velzon.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-7 ms-lg-auto">
                            <div class="row">
                                <div class="col-sm-4 mt-4">
                                    <h5 class="text-white mb-0">Company</h5>
                                    <div class="text-muted mt-3">
                                        <ul class="list-unstyled footer-list">
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Media & Press</a></li>
                                            <li><a href="#">Career</a></li>
                                            <li><a href="#">Blog</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-4 mt-4">
                                    <h5 class="text-white mb-0">More Info</h5>
                                    <div class="text-muted mt-3">
                                        <ul class="list-unstyled footer-list">
                                            <li><a href="#">Pricing</a></li>
                                            <li><a href="#">For Marketing</a></li>
                                            <li><a href="#">For CEOs</a></li>
                                            <li><a href="#">For Agencies</a></li>
                                            <li><a href="#">Our Apps</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-4 mt-4">
                                    <h5 class="text-white mb-0">Support</h5>
                                    <div class="text-muted mt-3">
                                        <ul class="list-unstyled footer-list">
                                            <li><a href="">FAQ</a></li>
                                            <li><a href="">Contact</a></li>
                                            <li><a href="">Disscusion</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <hr class="my-5 text-white-50">

                    <div class="row text-center text-sm-start align-items-center">
                        <div class="col-sm-6">

                            <div>
                                <p class="copy-rights text-white-50 mb-0">
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script> © Velzon - Themesbrand
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end mt-3 mt-sm-0">
                                <ul class="list-inline mb-0 footer-social-link">
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="avatar-xs d-block">
                                            <div class="avatar-title bg-light text-primary rounded-circle">
                                                <i class="ri-facebook-fill"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="avatar-xs d-block">
                                            <div class="avatar-title bg-light text-info rounded-circle">
                                                <i class="ri-github-fill"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="avatar-xs d-block">
                                            <div class="avatar-title bg-light text-primary rounded-circle">
                                                <i class="ri-linkedin-fill"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="avatar-xs d-block">
                                            <div class="avatar-title bg-light text-danger rounded-circle">
                                                <i class="ri-google-fill"></i>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end footer -->

        </div>
        <!-- end layout wrapper -->
    </body>


    @endsection
    @section('script')
        <script src="{{ URL::asset('/assets/libs/swiper/swiper.min.js') }}"></script>
        <script src="{{ URL::asset('/assets/js/pages/landing.init.js') }}"></script>
        {{-- <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script> --}}
    @endsection
