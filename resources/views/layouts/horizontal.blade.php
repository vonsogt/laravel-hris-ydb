{{-- <header class="ishorizontal-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ URL::asset('assets/images/logo-dark-sm.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ URL::asset('assets/images/logo-dark.png') }}" alt="" height="22">
                    </span>
                </a>

                <a href="index" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ URL::asset('assets/images/logo-light-sm.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ URL::asset('assets/images/logo-light.png') }}" alt="" height="22">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <div class="d-none d-sm-block ms-2 align-self-center">
                <h4 class="page-title">@yield('pagetitle')</h4>
            </div>
        </div>

        <div class="d-flex">
            <div class="dropdown">
                <button type="button" class="btn header-item"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-sm" data-eva="search-outline"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-md p-0">
                    <form class="p-2">
                        <div class="search-box">
                            <div class="position-relative">
                                <input type="text" class="form-control bg-light border-0" placeholder="Search...">
                                <i class="search-icon" data-eva="search-outline" data-eva-height="26" data-eva-width="26"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="dropdown d-inline-block language-switch">
                <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    @switch(Session::get('lang'))
                        @case('ru')
                            <img src="{{ URL::asset('/assets/images/flags/russia.jpg') }}" alt="Header Language"
                                height="16">
                        @break
                        @case('it')
                            <img src="{{ URL::asset('/assets/images/flags/italy.jpg') }}" alt="Header Language"
                                height="16">
                        @break
                        @case('de')
                            <img src="{{ URL::asset('/assets/images/flags/germany.jpg') }}" alt="Header Language"
                                height="16">
                        @break
                        @case('es')
                            <img src="{{ URL::asset('/assets/images/flags/spain.jpg') }}" alt="Header Language"
                                height="16">
                        @break
                        @default
                            <img src="{{ URL::asset('/assets/images/flags/us.jpg') }}" alt="Header Language" height="16">
                    @endswitch
                </button>
                <div class="dropdown-menu dropdown-menu-end">

                    <!-- item-->
                    <a href="{{ url('index/en') }}" class="dropdown-item notify-item language" data-lang="eng">
                        <img src="{{ URL::asset('/assets/images/flags/us.jpg') }}" alt="user-image"
                            class="me-1" height="12"> <span class="align-middle">English</span>
                    </a>
                    <!-- item-->
                    <a href="{{ url('index/es') }}" class="dropdown-item notify-item language" data-lang="sp">
                        <img src="{{ URL::asset('/assets/images/flags/spain.jpg') }}" alt="user-image"
                            class="me-1" height="12"> <span class="align-middle">Spanish</span>
                    </a>

                    <!-- item-->
                    <a href="{{ url('index/de') }}" class="dropdown-item notify-item language" data-lang="gr">
                        <img src="{{ URL::asset('/assets/images/flags/germany.jpg') }}" alt="user-image"
                            class="me-1" height="12"> <span class="align-middle">German</span>
                    </a>

                    <!-- item-->
                    <a href="{{ url('index/it') }}" class="dropdown-item notify-item language" data-lang="it">
                        <img src="{{ URL::asset('/assets/images/flags/italy.jpg') }}" alt="user-image"
                            class="me-1" height="12"> <span class="align-middle">Italian</span>
                    </a>

                    <!-- item-->
                    <a href="{{ url('index/ru') }}" class="dropdown-item notify-item language" data-lang="ru">
                        <img src="{{ URL::asset('/assets/images/flags/russia.jpg') }}" alt="user-image"
                            class="me-1" height="12"> <span class="align-middle">Russian</span>
                    </a>
                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block">
                <button type="button" class="btn header-item noti-icon"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-sm" data-eva="grid-outline"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="m-0 font-size-15">Web Apps</h5>
                            </div>
                            <div class="col-auto">
                                <a href="#!" class="small fw-semibold text-decoration-underline">View All</a>
                            </div>
                        </div>
                    </div>
                    <div class="px-lg-2 pb-2">
                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#!">
                                    <img src="{{ URL::asset('assets/images/brands/github.png') }}" alt="Github">
                                    <span>GitHub</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#!">
                                    <img src="{{ URL::asset('assets/images/brands/bitbucket.png') }}" alt="bitbucket">
                                    <span>Bitbucket</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#!">
                                    <img src="{{ URL::asset('assets/images/brands/dribbble.png') }}" alt="dribbble">
                                    <span>Dribbble</span>
                                </a>
                            </div>
                        </div>

                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#!">
                                    <img src="{{ URL::asset('assets/images/brands/dropbox.png') }}" alt="dropbox">
                                    <span>Dropbox</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#!">
                                    <img src="{{ URL::asset('assets/images/brands/mail_chimp.png') }}" alt="mail_chimp">
                                    <span>Mail Chimp</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#!">
                                    <img src="{{ URL::asset('assets/images/brands/slack.png') }}" alt="slack">
                                    <span>Slack</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon" id="page-header-notifications-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-sm" data-eva="bell-outline"></i>
                    <span class="noti-dot bg-danger rounded-pill">4</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="m-0 font-size-15">Notifications</h5>
                            </div>
                            <div class="col-auto">
                                <a href="#!" class="small fw-semibold text-decoration-underline">Mark all as read</a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 250px;">
                        <a href="#!" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <img src="{{ URL::asset('assets/images/users/avatar-3.jpg') }}" class="rounded-circle avatar-sm" alt="user-pic">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">James Lemire</h6>
                                    <div class="font-size-13 text-muted">
                                        <p class="mb-1">It will seem like simplified English.</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i><span>1 hours ago</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#!" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 avatar-sm me-3">
                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                        <i class="bx bx-cart"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Your order is placed</h6>
                                    <div class="font-size-13 text-muted">
                                        <p class="mb-1">If several languages coalesce the grammar</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i><span>3 min ago</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#!" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 avatar-sm me-3">
                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                        <i class="bx bx-badge-check"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Your item is shipped</h6>
                                    <div class="font-size-13 text-muted">
                                        <p class="mb-1">If several languages coalesce the grammar</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i><span>3 min ago</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="#!" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <img src="{{ URL::asset('assets/images/users/avatar-6.jpg') }}" class="rounded-circle avatar-sm" alt="user-pic">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Salena Layfield</h6>
                                    <div class="font-size-13 text-muted">
                                        <p class="mb-1">As a skeptical Cambridge friend of mine occidental)</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i><span>1 hours ago</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="p-2 border-top d-grid">
                        <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                            <i class="uil-arrow-circle-right me-1"></i><span>View More</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle" id="right-bar-toggle">
                    <i class="icon-sm" data-eva="settings-outline"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item user text-start d-flex align-items-center" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{ URL::asset('assets/images/users/avatar-1.jpg') }}"
                    alt="Header Avatar">
                </button>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                    <div class="p-3 border-bottom">
                        <h6 class="mb-0">Jennifer Bennett</h6>
                        <p class="mb-0 font-size-11 text-muted">jennifer.bennett@email.com</p>
                    </div>
                    <a class="dropdown-item" href="contacts-profile"><i class="mdi mdi-account-circle text-muted font-size-16 align-middle me-1"></i><span class="align-middle">@lang('translation.Profile')</span></a>
                    <a class="dropdown-item" href="apps-chat"><i class="mdi mdi-message-text-outline text-muted font-size-16 align-middle me-1"></i><span class="align-middle">@lang('translation.Messages')</span></a>
                    <a class="dropdown-item" href="pages-faqs"><i class="mdi mdi-lifebuoy text-muted font-size-16 align-middle me-1"></i><span class="align-middle">@lang('translation.Help')</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i class="mdi mdi-wallet text-muted font-size-16 align-middle me-1"></i><span class="align-middle">@lang('translation.Balance') : <b>$6951.02</b></span></a>
                    <a class="dropdown-item d-flex align-items-center" href="#"><i class="mdi mdi-cog-outline text-muted font-size-16 align-middle me-1"></i><span class="align-middle">@lang('translation.Settings')</span><span_class="badge_badge-soft-success_ms-auto">@lang('translation.New')</span_class=></a>
                    <a class="dropdown-item" href="auth-lock-screen"><i class="mdi mdi-lock text-muted font-size-16 align-middle me-1"></i><span class="align-middle">@lang('translation.Lock_screen')</span></a>
                    <a class="dropdown-item" href="auth-logout"><i class="mdi mdi-logout text-muted font-size-16 align-middle me-1"></i><span class="align-middle">@lang('translation.Logout')</span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="topnav">
        <div class="container-fluid">
            <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                <div class="collapse navbar-collapse" id="topnav-menu-content">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-dashboard" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon nav-icon" data-eva="grid-outline"></i>
                                <span data-key="t-dashboards">@lang('translation.Dashboards')</span><div class="arrow-down"></div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="topnav-dashboard">
                               <a href="index" class="dropdown-item" data-key="t-ecommerce">@lang('translation.Ecommerce')</a>
                               <a href="dashboard-saas" class="dropdown-item" data-key="t-saas">@lang('translation.Saas')</a>
                               <a href="dashboard-crypto" class="dropdown-item" data-key="t-crypto">@lang('translation.Crypto')</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-uielement" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon nav-icon" data-eva="cube-outline"></i>
                               <span data-key="t-elements">@lang('translation.Elements')</span><div class="arrow-down"></div>
                            </a>

                            <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-xl" aria-labelledby="topnav-uielement">
                                <div class="ps-2 p-lg-0">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div>
                                                <div class="menu-title">@lang('translation.Elements')</div>
                                                <div class="row g-0">
                                                    <div class="col-lg-4">
                                                        <div>
                                                            <a href="ui-alerts" class="dropdown-item" data-key="t-alerts">@lang('translation.Alerts')</a>
                                                            <a href="ui-buttons" class="dropdown-item" data-key="t-buttons">@lang('translation.Buttons')</a>
                                                            <a href="ui-cards" class="dropdown-item" data-key="t-cards">@lang('translation.Cards')</a>
                                                            <a href="ui-carousel" class="dropdown-item" data-key="t-carousel">@lang('translation.Carousel')</a>
                                                            <a href="ui-dropdowns" class="dropdown-item" data-key="t-dropdowns">@lang('translation.Dropdowns')</a>
                                                            <a href="ui-grid" class="dropdown-item" data-key="t-grid">@lang('translation.Grid')</a>
                                                            <a href="ui-images" class="dropdown-item" data-key="t-images">@lang('translation.Images')</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div>
                                                            <a href="ui-lightbox" class="dropdown-item" data-key="t-lightbox">@lang('translation.Lightbox')</a>
                                                            <a href="ui-modals" class="dropdown-item" data-key="t-modals">@lang('translation.Modals')</a>
                                                            <a href="ui-offcanvas" class="dropdown-item" data-key="t-offcanvas">@lang('translation.Offcanvas')</a>
                                                            <a href="ui-rangeslider" class="dropdown-item" data-key="t-range-slider">@lang('translation.Range_Slider')</a>
                                                            <a href="ui-progressbars" class="dropdown-item" data-key="t-progress-bars">@lang('translation.Progress_Bars')</a>
                                                            <a href="ui-sweet-alert" class="dropdown-item" data-key="t-sweet-alert">@lang('translation.Sweet_Alert')2</a>
                                                            <a href="ui-tabs-accordions" class="dropdown-item" data-key="t-tabs-accordions">@lang('translation.Tabs_&_Accordions')</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div>
                                                            <a href="ui-typography" class="dropdown-item" data-key="t-typography">@lang('translation.Typography')</a>
                                                            <a href="ui-video" class="dropdown-item" data-key="t-video">@lang('translation.Video')</a>
                                                            <a href="ui-general" class="dropdown-item" data-key="t-general">@lang('translation.General')</a>
                                                            <a href="ui-colors" class="dropdown-item" data-key="t-colors">@lang('translation.Colors')</a>
                                                            <a href="ui-rating" class="dropdown-item" data-key="t-rating">@lang('translation.Rating')</a>
                                                            <a href="ui-notifications" class="dropdown-item" data-key="t-notifications">@lang('translation.Notifications')</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button">
                                <i class="icon nav-icon" data-eva="archive-outline"></i>
                                <span data-key="t-apps">@lang('translation.Apps')</span><div class="arrow-down"></div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="topnav-pages">

                                <a href="apps-calendar" class="dropdown-item" data-key="t-calendar">@lang('translation.Calendars')</a>
                                <a href="apps-chat" class="dropdown-item" data-key="t-chat">@lang('translation.Chat')</a>
                                <a href="apps-file-manager" class="dropdown-item" data-key="t-filemanager">@lang('translation.File_Manager')</a>


                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ecommerce"
                                        role="button">
                                        <span data-key="t-ecommerce">@lang('translation.Ecommerce')</span><div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-ecommerce">
                                        <a href="ecommerce-products" class="dropdown-item" data-key="t-products">@lang('translation.Products')</a>
                                        <a href="ecommerce-product-detail" class="dropdown-item" data-key="t-product-detail">@lang('translation.Product_Detail')</a>
                                        <a href="ecommerce-orders" class="dropdown-item" data-key="t-orders">@lang('translation.Orders')</a>
                                        <a href="ecommerce-customers" class="dropdown-item" data-key="t-customers">@lang('translation.Customers')</a>
                                        <a href="ecommerce-cart" class="dropdown-item" data-key="t-cart">@lang('translation.Cart')</a>
                                        <a href="ecommerce-checkout" class="dropdown-item" data-key="t-checkout">@lang('translation.Checkout')</a>
                                        <a href="ecommerce-shops" class="dropdown-item" data-key="t-shops">@lang('translation.Shops')</a>
                                        <a href="ecommerce-add-product" class="dropdown-item" data-key="t-add-product">@lang('translation.Add_Product')</a>
                                    </div>
                                </div>

                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-email"
                                        role="button">
                                        <span data-key="t-email">@lang('translation.Email')</span><div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-email">
                                        <a href="email-inbox" class="dropdown-item" data-key="t-inbox">@lang('translation.Inbox')</a>
                                        <a href="email-read" class="dropdown-item" data-key="t-read-email">@lang('translation.Read_Email')</a>
                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-email-templates" role="button">
                                                <span data-key="t-email-templates">@lang('translation.Templates')</span><div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-email-templates">
                                                <a href="email-template-basic" class="dropdown-item" data-key="t-basic-action">@lang('translation.Basic_Action')</a>
                                                <a href="email-template-alert" class="dropdown-item" data-key="t-alert-email">@lang('translation.Alert_Email')</a>
                                                <a href="email-template-billing" class="dropdown-item" data-key="t-bill-email">@lang('translation.Billing_Email')</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-invoices"
                                        role="button">
                                       <span data-key="t-invoices">@lang('translation.Invoices')</span><div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-invoices">
                                        <a href="invoices-list" class="dropdown-item" data-key="t-invoice-list">@lang('translation.Invoice_List')</a>
                                        <a href="invoices-detail" class="dropdown-item" data-key="t-invoice-detail">@lang('translation.Invoice_Detail')</a>
                                    </div>
                                </div>

                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-projects"
                                        role="button">
                                       <span data-key="t-projects">@lang('translation.Projects')</span><div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-projects">
                                       <a href="projects-grid" class="dropdown-item" data-key="t-p-grid">@lang('translation.Projects_Grid')</a>
                                       <a href="projects-list" class="dropdown-item" data-key="t-p-list">@lang('translation.Projects_List')</a>
                                       <a href="projects-create" class="dropdown-item" data-key="t-create-new">@lang('translation.Create_New')</a>
                                    </div>
                                </div>

                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-contact"
                                        role="button">
                                       <span data-key="t-contacts">@lang('translation.Contacts')</span><div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-contact">
                                        <a href="contacts-grid" class="dropdown-item" data-key="t-user-grid">@lang('translation.User_Grid')</a>
                                        <a href="contacts-list" class="dropdown-item" data-key="t-user-list">@lang('translation.User_List')</a>
                                        <a href="contacts-profile" class="dropdown-item" data-key="t-user-profile">@lang('translation.Profile')</a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button">
                                <i class="icon nav-icon" data-eva="layers-outline"></i>
                                <span data-key="t-components">@lang('translation.Components')</span><div class="arrow-down"></div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="topnav-components">
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-form"
                                        role="button">
                                        <span data-key="t-forms">@lang('translation.Forms')</span><div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-form">
                                        <a href="form-elements" class="dropdown-item" data-key="t-form-elements">@lang('translation.Form_Elements')</a>
                                        <a href="form-layouts" class="dropdown-item" data-key="t-form-layouts">@lang('translation.Form_Layouts')</a>
                                        <a href="form-validation" class="dropdown-item" data-key="t-form-validation">@lang('translation.Form_Validation')</a>
                                        <a href="form-advanced" class="dropdown-item" data-key="t-form-advanced">@lang('translation.Form_Advanced')</a>
                                        <a href="form-editors" class="dropdown-item" data-key="t-form-editors">@lang('translation.Form_Editors')</a>
                                        <a href="form-uploads" class="dropdown-item" data-key="t-form-upload">@lang('translation.Form_File_Upload')</a>
                                        <a href="form-wizard" class="dropdown-item" data-key="t-form-wizard">@lang('translation.Form_Wizard')</a>
                                        <a href="form-mask" class="dropdown-item" data-key="t-form-mask">@lang('translation.Form_Mask')</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-table"
                                        role="button">
                                        <span data-key="t-tables">@lang('translation.Tables')</span><div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-table">
                                        <a href="tables-basic" class="dropdown-item" data-key="t-basic-tables">@lang('translation.Basic_Tables')</a>
                                        <a href="tables-advanced" class="dropdown-item" data-key="t-advanced-tables">@lang('translation.Advanced_Table')</a>
                                    </div>
                                </div>

                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-charts"
                                        role="button">
                                        <span data-key="t-charts">@lang('translation.Charts')</span><div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-charts">
                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-apex-charts"
                                                role="button">
                                                <span data-key="t-apex-charts">@lang('translation.Apex_Charts')</span><div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-apex-charts">
                                                <a href="charts-line" class="dropdown-item" data-key="t-line">@lang('translation.Line')</a>
                                                <a href="charts-area" class="dropdown-item" data-key="t-area">@lang('translation.Area')</a>
                                                <a href="charts-column" class="dropdown-item" data-key="t-column">@lang('translation.Column')</a>
                                                <a href="charts-bar" class="dropdown-item" data-key="t-bar">@lang('translation.Bar')</a>
                                                <a href="charts-mixed" class="dropdown-item" data-key="t-mixed">@lang('translation.Mixed')</a>
                                                <a href="charts-timeline" class="dropdown-item" data-key="t-timeline">@lang('translation.Timeline')</a>
                                                <a href="charts-candlestick" class="dropdown-item" data-key="t-candlestick">@lang('translation.Candlestick')</a>
                                                <a href="charts-boxplot" class="dropdown-item" data-key="t-boxplot">@lang('translation.Boxplot')</a>
                                                <a href="charts-bubble" class="dropdown-item" data-key="t-bubble">@lang('translation.Bubble')</a>
                                                <a href="charts-scatter" class="dropdown-item" data-key="t-scatter">@lang('translation.Scatter')</a>
                                                <a href="charts-heatmap" class="dropdown-item" data-key="t-heatmap">@lang('translation.Heatmap')</a>
                                                <a href="charts-treemap" class="dropdown-item" data-key="t-treemap">@lang('translation.Treemap')</a>
                                                <a href="charts-pie" class="dropdown-item" data-key="t-pie">@lang('translation.Pie')</a>
                                                <a href="charts-radialbar" class="dropdown-item" data-key="t-radialbar">@lang('translation.Radialbar')</a>
                                                <a href="charts-radar" class="dropdown-item" data-key="t-radar">@lang('translation.Radar')</a>
                                                <a href="charts-polararea" class="dropdown-item" data-key="t-polararea">@lang('translation.Polararea')</a>
                                            </div>
                                        </div>
                                        <a href="charts-echart" class="dropdown-item" data-key="t-e-charts">@lang('translation.E_Charts')</a>
                                        <a href="charts-chartjs" class="dropdown-item" data-key="t-chartjs-charts">@lang('translation.Chartjs_Charts')</a>
                                        <a href="charts-tui" class="dropdown-item" data-key="t-ui-charts">@lang('translation.Toast_UI_Charts')</a>
                                    </div>
                                </div>

                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-icons"
                                        role="button">
                                        <span data-key="t-icons">@lang('translation.Icons')</span><div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-icons">
                                        <a href="icons-evaicons" class="dropdown-item" data-key="t-evaicons">@lang('translation.Eva_Icons')</a>
                                        <a href="icons-boxicons" class="dropdown-item" data-key="t-boxicons">@lang('translation.Boxicons')</a>
                                        <a href="icons-materialdesign" class="dropdown-item" data-key="t-material-design">@lang('translation.Material_Design')</a>
                                        <a href="icons-fontawesome" class="dropdown-item" data-key="t-font-awesome">@lang('translation.Font_awesome')5</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-map"
                                        role="button">
                                        <span data-key="t-maps">@lang('translation.Maps')</span><div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-map">
                                        <a href="maps-google" class="dropdown-item" data-key="t-google">@lang('translation.Google')</a>
                                        <a href="maps-vector" class="dropdown-item" data-key="t-vector">@lang('translation.Vector')</a>
                                        <a href="maps-leaflet" class="dropdown-item" data-key="t-leaflet">@lang('translation.Leaflet')</a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-more" role="button">
                                <i class="icon nav-icon" data-eva="file-text-outline"></i>
                                <span data-key="t-pages">@lang('translation.Pages')</span><div class="arrow-down"></div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="topnav-more">
                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-authentication"
                                        role="button">
                                        <span data-key="t-authentication">@lang('translation.Authentication')</span><div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-authentication">
                                        <a href="auth-login" class="dropdown-item" data-key="t-login">@lang('translation.Login')</a>
                                        <a href="auth-register" class="dropdown-item" data-key="t-register">@lang('translation.Register')</a>
                                        <a href="auth-recoverpw" class="dropdown-item" data-key="t-recover-password">@lang('translation.Recover_Password')</a>
                                        <a href="auth-lock-screen" class="dropdown-item" data-key="t-lock-screen">@lang('translation.Lock_Screen')</a>
                                        <a href="auth-logout" class="dropdown-item" data-key="t-logout">@lang('translation.Logout')</a>
                                        <a href="auth-confirm-mail" class="dropdown-item" data-key="t-confirm-mail">@lang('translation.Confirm_Mail')</a>
                                        <a href="auth-email-verification" class="dropdown-item" data-key="t-email-verification">@lang('translation.Email_verification')</a>
                                        <a href="auth-two-step-verification" class="dropdown-item" data-key="t-two-step-verification">@lang('translation.Two_step_verification')</a>
                                    </div>
                                </div>

                                <div class="dropdown">
                                    <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-utility"
                                        role="button">
                                        <span data-key="t-utility">@lang('translation.Utility')</span><div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-utility">
                                        <a href="pages-starter" class="dropdown-item" data-key="t-starter-page">@lang('translation.Starter_Page')</a>
                                        <a href="pages-maintenance" class="dropdown-item" data-key="t-maintenance">@lang('translation.Maintenance')</a>
                                        <a href="pages-comingsoon" class="dropdown-item" data-key="t-coming-soon">@lang('translation.Coming_Soon')</a>
                                        <a href="pages-timeline" class="dropdown-item" data-key="t-timeline">@lang('translation.Timeline')</a>
                                        <a href="pages-faqs" class="dropdown-item" data-key="t-faqs">@lang('translation.FAQs')</a>
                                        <a href="pages-pricing" class="dropdown-item" data-key="t-pricing">@lang('translation.Pricing')</a>
                                        <a href="pages-404" class="dropdown-item" data-key="t-error-404">@lang('translation.Error_404')</a>
                                        <a href="pages-500" class="dropdown-item" data-key="t-error-500">@lang('translation.Error_500')</a>
                                    </div>
                                </div>

                                <a href="layouts-horizontal" class="dropdown-item" data-key="t-horizontal">@lang('translation.Horizontal')</a>
                            </div>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header> --}}
