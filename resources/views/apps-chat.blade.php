@extends('layouts.master')
@section('title') @lang('translation.chat') @endsection
@section('css')
    <link rel="stylesheet" href="assets/libs/glightbox/glightbox.min.css">

@endsection
@section('content')
    <div class="chat-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
        <div class="chat-leftsidebar">
            <div class="px-4 pt-4 mb-4">
                <div class="d-flex align-items-start">
                    <div class="flex-grow-1">
                        <h5 class="mb-4">Chats</h5>
                    </div>
                    <div class="flex-shrink-0">
                        <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="bottom"
                            title="Add Contact">

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-soft-success btn-sm">
                                <i class="ri-add-line align-bottom"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="search-box">
                    <input type="text" class="form-control bg-light border-light" placeholder="Search here...">
                    <i class="ri-search-2-line search-icon"></i>
                </div>

            </div> <!-- .p-4 -->

            <div class="chat-room-list" data-simplebar>

                <div class="d-flex align-items-center px-4 mb-2">
                    <div class="flex-grow-1">
                        <h4 class="mb-0 fs-11 text-muted text-uppercase">Direct Messages</h4>
                    </div>
                    <div class="flex-shrink-0">
                        <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="bottom"
                            title="New Message">

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-soft-success btn-sm">
                                <i class="ri-add-line align-bottom"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="chat-message-list">

                    <ul class="list-unstyled chat-list chat-user-list" id="userList">
                        <li class="active">
                            <a href="javascript: void(0);">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 chat-user-img online align-self-center me-2 ms-0">
                                        <div class="avatar-xxs">
                                            <img src="{{ URL::asset('assets/images/users/avatar-2.jpg') }}"
                                                class="rounded-circle img-fluid userprofile" alt="">
                                        </div>
                                        <span class="user-status"></span>
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-truncate mb-0">Lisa Parker</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="unread-msg-user">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 chat-user-img online align-self-center me-2 ms-0">
                                        <div class="avatar-xxs">
                                            <img src="{{ URL::asset('assets/images/users/avatar-3.jpg') }}"
                                                class="rounded-circle img-fluid userprofile" alt="">
                                        </div>
                                        <span class="user-status"></span>
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-truncate mb-0">Frank Thomas</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <span class="badge badge-soft-dark rounded p-1">8</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 chat-user-img away align-self-center me-2 ms-0">
                                        <div class="avatar-xxs">
                                            <div class="avatar-title rounded-circle bg-danger userprofile">
                                                C
                                            </div>
                                        </div>
                                        <span class="user-status"></span>
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-truncate mb-0">Clifford Taylor</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 chat-user-img online align-self-center me-2 ms-0">
                                        <div class="avatar-xxs">
                                            <img src="{{ URL::asset('assets/images/users/avatar-4.jpg') }}"
                                                class="rounded-circle img-fluid userprofile" alt="">
                                        </div>
                                        <span class="user-status"></span>
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-truncate mb-0">Janette Caster</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="unread-msg-user">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 chat-user-img online align-self-center me-2 ms-0">
                                        <div class="avatar-xxs">
                                            <img src="{{ URL::asset('assets/images/users/avatar-5.jpg') }}"
                                                class="rounded-circle img-fluid userprofile" alt="">
                                        </div>
                                        <span class="user-status"></span>
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-truncate mb-0">Sarah Beattie</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <span class="badge badge-soft-dark rounded p-1">5</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="unread-msg-user">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 chat-user-img away align-self-center me-2 ms-0">
                                        <div class="avatar-xxs">
                                            <img src="{{ URL::asset('assets/images/users/avatar-6.jpg') }}"
                                                class="rounded-circle img-fluid userprofile" alt="">
                                        </div>
                                        <span class="user-status"></span>
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-truncate mb-0">Nellie Cornett</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <span class="badge badge-soft-dark rounded p-1">2</span>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 chat-user-img online align-self-center me-2 ms-0">
                                        <div class="avatar-xxs">
                                            <div class="avatar-title rounded-circle bg-warning userprofile">
                                                C
                                            </div>
                                        </div>
                                        <span class="user-status"></span>
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-truncate mb-0">Chris Kiernan</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 chat-user-img away align-self-center me-2 ms-0">
                                        <div class="avatar-xxs">
                                            <div class="avatar-title rounded-circle bg-info userprofile">
                                                E
                                            </div>
                                        </div>
                                        <span class="user-status"></span>
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-truncate mb-0">Edith Evans</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 chat-user-img away align-self-center me-2 ms-0">
                                        <div class="avatar-xxs">
                                            <img src="{{ URL::asset('assets/images/users/avatar-7.jpg') }}"
                                                class="rounded-circle img-fluid userprofile" alt="">
                                        </div>
                                        <span class="user-status"></span>
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-truncate mb-0">Joseph Siegel</p>
                                    </div>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>

                <div class="d-flex align-items-center px-4 mt-4 pt-2 mb-2">
                    <div class="flex-grow-1">
                        <h4 class="mb-0 fs-11 text-muted text-uppercase">Channels</h4>
                    </div>
                    <div class="flex-shrink-0">
                        <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="bottom"
                            title="Create group">

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-soft-success btn-sm">
                                <i class="ri-add-line align-bottom"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="chat-message-list">

                    <ul class="list-unstyled chat-list chat-user-list mb-0" id="channelList">
                        <li>
                            <a href="javascript: void(0);" class="unread-msg-user">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 chat-user-img online align-self-center me-2 ms-0">
                                        <div class="avatar-xxs">
                                            <div class="avatar-title bg-light rounded-circle text-body">
                                                #
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-truncate mb-0">Landing Design</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <span class="badge badge-soft-dark rounded p-1">7</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 chat-user-img online align-self-center me-2 ms-0">
                                        <div class="avatar-xxs">
                                            <div class="avatar-title bg-light rounded-circle text-body">
                                                #
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-truncate mb-0">General</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="unread-msg-user">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 chat-user-img online align-self-center me-2 ms-0">
                                        <div class="avatar-xxs">
                                            <div class="avatar-title bg-light rounded-circle text-body">
                                                #
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-truncate mb-0">Project Tasks</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <span class="badge badge-soft-dark rounded p-1">3</span>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 chat-user-img online align-self-center me-2 ms-0">
                                        <div class="avatar-xxs">
                                            <div class="avatar-title bg-light rounded-circle text-dark">
                                                #
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-truncate mb-0">Meeting</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 chat-user-img online align-self-center me-2 ms-0">
                                        <div class="avatar-xxs">
                                            <div class="avatar-title bg-light rounded-circle text-dark">
                                                #
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-truncate mb-0">Reporting</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End chat-message-list -->
            </div>

        </div>
        <!-- end chat leftsidebar -->
        <!-- Start User chat -->
        <div class="user-chat w-100 overflow-hidden">

            <div class="chat-content d-lg-flex">
                <!-- start chat conversation section -->
                <div class="w-100 overflow-hidden position-relative">
                    <!-- conversation user -->
                    <div class="position-relative">
                        <div class="p-3 user-chat-topbar">
                            <div class="row align-items-center">
                                <div class="col-sm-4 col-8">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 d-block d-lg-none me-3">
                                            <a href="javascript: void(0);" class="user-chat-remove fs-18 p-1"><i
                                                    class="ri-arrow-left-s-line align-bottom"></i></a>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="flex-shrink-0 chat-user-img online user-own-img align-self-center me-3 ms-0">
                                                    <img src="{{ URL::asset('assets/images/users/avatar-2.jpg') }}"
                                                        class="rounded-circle avatar-xs" alt="">
                                                    <span class="user-status"></span>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h5 class="text-truncate mb-0 fs-16"><a class="text-reset username"
                                                            data-bs-toggle="offcanvas" href="#userProfileCanvasExample"
                                                            aria-controls="userProfileCanvasExample">Lisa Parker</a>
                                                    </h5>
                                                    <p class="text-truncate text-muted fs-14 mb-0 userStatus">
                                                        <small>Online</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8 col-4">
                                    <ul class="list-inline user-chat-nav text-end mb-0">
                                        <li class="list-inline-item m-0">
                                            <div class="dropdown">
                                                <button class="btn btn-ghost-secondary btn-icon" type="button"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i data-feather="search" class="icon-sm"></i>
                                                </button>
                                                <div class="dropdown-menu p-0 dropdown-menu-end dropdown-menu-lg">
                                                    <div class="p-2">
                                                        <div class="search-box">
                                                            <input type="text" class="form-control bg-light border-light"
                                                                placeholder="Search here..." onkeyup="searchMessages()"
                                                                id="searchMessage">
                                                            <i class="ri-search-2-line search-icon"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="list-inline-item d-none d-lg-inline-block m-0">
                                            <button type="button" class="btn btn-ghost-secondary btn-icon"
                                                data-bs-toggle="offcanvas" data-bs-target="#userProfileCanvasExample"
                                                aria-controls="userProfileCanvasExample">
                                                <i data-feather="info" class="icon-sm"></i>
                                            </button>
                                        </li>

                                        <li class="list-inline-item m-0">
                                            <div class="dropdown">
                                                <button class="btn btn-ghost-secondary btn-icon" type="button"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i data-feather="more-vertical" class="icon-sm"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item d-block d-lg-none user-profile-show"
                                                        href="#"><i
                                                            class="ri-user-2-fill align-bottom text-muted me-2"></i>
                                                        View Profile</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="ri-inbox-archive-line align-bottom text-muted me-2"></i>
                                                        Archive</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="ri-mic-off-line align-bottom text-muted me-2"></i>
                                                        Muted</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="ri-delete-bin-5-line align-bottom text-muted me-2"></i>
                                                        Delete</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <!-- end chat user head -->

                        <div class="position-relative" id="users-chat">
                            <div class="chat-conversation p-3 p-lg-4 " id="chat-conversation" data-simplebar>
                                <ul class="list-unstyled chat-conversation-list" id="users-conversation">
                                    <li class="chat-list left">
                                        <div class="conversation-list">
                                            <div class="chat-avatar">
                                                <img src="{{ URL::asset('assets/images/users/avatar-2.jpg') }}" alt="">
                                            </div>
                                            <div class="user-chat-content">
                                                <div class="ctext-wrap">
                                                    <div class="ctext-wrap-content">
                                                        <p class="mb-0 ctext-content">Good morning 😊</p>
                                                    </div>
                                                    <div class="dropdown align-self-start message-box-drop">
                                                        <a class="dropdown-toggle" href="#" role="button"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="ri-more-2-fill"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item reply-message" href="#"><i
                                                                    class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="ri-share-line me-2 text-muted align-bottom"></i>Forward</a>
                                                            <a class="dropdown-item copy-message" href="#"><i
                                                                    class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="ri-bookmark-line me-2 text-muted align-bottom"></i>Bookmark</a>
                                                            <a class="dropdown-item delete-item" href="#"><i
                                                                    class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="conversation-name"><small class="text-muted time">09:07
                                                        am</small> <span class="text-success check-message-icon"><i
                                                            class="ri-check-double-line align-bottom"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- chat-list -->

                                    <li class="chat-list right">
                                        <div class="conversation-list">
                                            <div class="user-chat-content">
                                                <div class="ctext-wrap">
                                                    <div class="ctext-wrap-content">
                                                        <p class="mb-0 ctext-content">Good morning, How are you?
                                                            What about our next meeting?</p>
                                                    </div>
                                                    <div class="dropdown align-self-start message-box-drop">
                                                        <a class="dropdown-toggle" href="#" role="button"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="ri-more-2-fill"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item reply-message" href="#"><i
                                                                    class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="ri-share-line me-2 text-muted align-bottom"></i>Forward</a>
                                                            <a class="dropdown-item copy-message" href="#"><i
                                                                    class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="ri-bookmark-line me-2 text-muted align-bottom"></i>Bookmark</a>
                                                            <a class="dropdown-item delete-item" href="#"><i
                                                                    class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="conversation-name"><small class="text-muted time">09:08
                                                        am</small> <span class="text-success check-message-icon"><i
                                                            class="ri-check-double-line align-bottom"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- chat-list -->

                                    <li class="chat-list left">
                                        <div class="conversation-list">
                                            <div class="chat-avatar">
                                                <img src="{{ URL::asset('assets/images/users/avatar-2.jpg') }}" alt="">
                                            </div>
                                            <div class="user-chat-content">
                                                <div class="ctext-wrap">
                                                    <div class="ctext-wrap-content">
                                                        <p class="mb-0 ctext-content">Yeah everything is fine. Our
                                                            next meeting tomorrow at 10.00 AM</p>
                                                    </div>
                                                    <div class="dropdown align-self-start message-box-drop">
                                                        <a class="dropdown-toggle" href="#" role="button"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="ri-more-2-fill"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item reply-message" href="#"><i
                                                                    class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="ri-share-line me-2 text-muted align-bottom"></i>Forward</a>
                                                            <a class="dropdown-item copy-message" href="#"><i
                                                                    class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="ri-bookmark-line me-2 text-muted align-bottom"></i>Bookmark</a>
                                                            <a class="dropdown-item delete-item" href="#"><i
                                                                    class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ctext-wrap">
                                                    <div class="ctext-wrap-content">
                                                        <p class="mb-0 ctext-content">Hey, I'm going to meet a
                                                            friend of mine at the department store. I have to buy
                                                            some presents for my parents 🎁.</p>
                                                    </div>
                                                    <div class="dropdown align-self-start message-box-drop">
                                                        <a class="dropdown-toggle" href="#" role="button"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="ri-more-2-fill"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item reply-message" href="#"><i
                                                                    class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="ri-share-line me-2 text-muted align-bottom"></i>Forward</a>
                                                            <a class="dropdown-item copy-message" href="#"><i
                                                                    class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="ri-bookmark-line me-2 text-muted align-bottom"></i>Bookmark</a>
                                                            <a class="dropdown-item delete-item" href="#"><i
                                                                    class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="conversation-name"><small class="text-muted time">09:10
                                                        am</small> <span class="text-success check-message-icon"><i
                                                            class="ri-check-double-line align-bottom"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- chat-list -->

                                    <li class="chat-list right">
                                        <div class="conversation-list">
                                            <div class="user-chat-content">
                                                <div class="ctext-wrap">
                                                    <div class="ctext-wrap-content">
                                                        <p class="mb-0 ctext-content">Wow that's great</p>
                                                    </div>
                                                    <div class="dropdown align-self-start message-box-drop">
                                                        <a class="dropdown-toggle" href="#" role="button"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="ri-more-2-fill"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item reply-message" href="#"><i
                                                                    class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="ri-share-line me-2 text-muted align-bottom"></i>Forward</a>
                                                            <a class="dropdown-item copy-message" href="#"><i
                                                                    class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="ri-bookmark-line me-2 text-muted align-bottom"></i>Bookmark</a>
                                                            <a class="dropdown-item delete-item" href="#"><i
                                                                    class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="conversation-name"><small class="text-muted time">09:12
                                                        am</small> <span class="text-success check-message-icon"><i
                                                            class="ri-check-double-line align-bottom"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- chat-list -->

                                    <li class="chat-list left">
                                        <div class="conversation-list">
                                            <div class="chat-avatar">
                                                <img src="{{ URL::asset('assets/images/users/avatar-2.jpg') }}" alt="">
                                            </div>
                                            <div class="user-chat-content">
                                                <div class="ctext-wrap">
                                                    <div class="message-img mb-0">
                                                        <div class="message-img-list">
                                                            <div>
                                                                <a class="popup-img d-inline-block"
                                                                    href="{{ URL::asset('assets/images/small/img-1.jpg') }}">
                                                                    <img src="{{ URL::asset('assets/images/small/img-1.jpg') }}" alt=""
                                                                        class="rounded border">
                                                                </a>
                                                            </div>
                                                            <div class="message-img-link">
                                                                <ul class="list-inline mb-0">
                                                                    <li class="list-inline-item dropdown">
                                                                        <a class="dropdown-toggle" href="#" role="button"
                                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                                            aria-expanded="false">
                                                                            <i class="ri-more-fill"></i>
                                                                        </a>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item"
                                                                                href="{{ URL::asset('assets/images/small/img-1.jpg') }}"
                                                                                download=""><i
                                                                                    class="ri-download-2-line me-2 text-muted align-bottom"></i>Download</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="ri-share-line me-2 text-muted align-bottom"></i>Forward</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="ri-bookmark-line me-2 text-muted align-bottom"></i>Bookmark</a>
                                                                            <a class="dropdown-item delete-image"
                                                                                href="#"><i
                                                                                    class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="message-img-list">
                                                            <div>
                                                                <a class="popup-img d-inline-block"
                                                                    href="{{ URL::asset('assets/images/small/img-2.jpg') }}">
                                                                    <img src="{{ URL::asset('assets/images/small/img-2.jpg') }}" alt=""
                                                                        class="rounded border">
                                                                </a>
                                                            </div>
                                                            <div class="message-img-link">
                                                                <ul class="list-inline mb-0">
                                                                    <li class="list-inline-item dropdown">
                                                                        <a class="dropdown-toggle" href="#" role="button"
                                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                                            aria-expanded="false">
                                                                            <i class="ri-more-fill"></i>
                                                                        </a>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item"
                                                                                href="{{ URL::asset('assets/images/small/img-2.jpg') }}"
                                                                                download=""><i
                                                                                    class="ri-download-2-line me-2 text-muted align-bottom"></i>Download</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="ri-share-line me-2 text-muted align-bottom"></i>Forward</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="ri-bookmark-line me-2 text-muted align-bottom"></i>Bookmark</a>
                                                                            <a class="dropdown-item delete-image"
                                                                                href="#"><i
                                                                                    class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="conversation-name"><small class="text-muted time">09:30
                                                        am</small> <span class="text-success check-message-icon"><i
                                                            class="ri-check-double-line align-bottom"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- chat-list -->
                                </ul>
                                <!-- end chat-conversation-list -->

                            </div>
                            <div class="alert alert-warning alert-dismissible copyclipboard-alert px-4 fade show "
                                id="copyClipBoard" role="alert">
                                Message copied
                            </div>
                        </div>

                        <!-- end chat-conversation -->

                        <div class="chat-input-section p-3 p-lg-4">

                            <form id="chatinput-form" enctype="multipart/form-data">
                                <div class="row g-0 align-items-center">
                                    <div class="col-auto">
                                        <div class="chat-input-links me-2">
                                            <div class="links-list-item">
                                                <button type="button" class="btn btn-link text-decoration-none emoji-btn"
                                                    id="emoji-btn">
                                                    <i class="bx bx-smile align-middle"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="chat-input-feedback">
                                            Please Enter a Message
                                        </div>
                                        <input type="text" class="form-control chat-input bg-light border-light"
                                            id="chat-input" placeholder="Type your message..." autocomplete="off">
                                    </div>
                                    <div class="col-auto">
                                        <div class="chat-input-links ms-2">
                                            <div class="links-list-item">
                                                <button type="submit"
                                                    class="btn btn-success chat-send waves-effect waves-light">
                                                    <i class="ri-send-plane-2-fill align-bottom"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>

                        <div class="replyCard">
                            <div class="card mb-0">
                                <div class="card-body py-3">
                                    <div class="replymessage-block mb-0 d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <h5 class="conversation-name"></h5>
                                            <p class="mb-0"></p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <button type="button" id="close_toggle"
                                                class="btn btn-sm btn-link mt-n2 me-n3 fs-18">
                                                <i class="bx bx-x align-middle"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end chat-wrapper -->
    <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="userProfileCanvasExample">
        <!--end offcanvas-header-->
        <div class="offcanvas-body profile-offcanvas p-0">
            <div class="team-cover">
                <img src="{{ URL::asset('assets/images/small/img-9.jpg') }}" alt="" class="img-fluid" />
            </div>
            <div class="p-1 pb-4 pt-0">
                <div class="team-settings">
                    <div class="row g-0">
                        <div class="col">
                            <div class="btn nav-btn">
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="user-chat-nav d-flex">
                                <button type="button" class="btn nav-btn favourite-btn active">
                                    <i class="ri-star-fill"></i>
                                </button>

                                <div class="dropdown">
                                    <a class="btn nav-btn" href="javascript:void(0);" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-inbox-archive-line align-bottom text-muted me-2"></i>Archive</a>
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-mic-off-line align-bottom text-muted me-2"></i>Muted</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-delete-bin-5-line align-bottom text-muted me-2"></i>Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <div class="p-3 text-center">
                <img src="{{ URL::asset('assets/images/users/avatar-2.jpg') }}" alt="" class="avatar-lg img-thumbnail rounded-circle mx-auto">
                <div class="mt-3">
                    <h5 class="fs-16 mb-1"><a href="javascript:void(0);" class="link-primary username">Lisa Parker</a>
                    </h5>
                    <p class="text-muted"><i
                            class="ri-checkbox-blank-circle-fill me-1 align-bottom text-success"></i>Online</p>
                </div>

                <div class="d-flex gap-2 justify-content-center">
                    <button type="button" class="btn avatar-xs p-0" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Message">
                        <span class="avatar-title rounded bg-light text-body">
                            <i class="ri-question-answer-line"></i>
                        </span>
                    </button>

                    <button type="button" class="btn avatar-xs p-0" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Favourite">
                        <span class="avatar-title rounded bg-light text-body">
                            <i class="ri-star-line"></i>
                        </span>
                    </button>

                    <button type="button" class="btn avatar-xs p-0" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Phone">
                        <span class="avatar-title rounded bg-light text-body">
                            <i class="ri-phone-line"></i>
                        </span>
                    </button>

                    <div class="dropdown">
                        <button class="btn avatar-xs p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <span class="avatar-title bg-light text-body rounded">
                                <i class="ri-more-fill"></i>
                            </span>
                        </button>

                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                        class="ri-inbox-archive-line align-bottom text-muted me-2"></i>Archive</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                        class="ri-mic-off-line align-bottom text-muted me-2"></i>Muted</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);"><i
                                        class="ri-delete-bin-5-line align-bottom text-muted me-2"></i>Delete</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="border-top border-top-dashed p-3">
                <h5 class="fs-15 mb-3">Personal Details</h5>
                <div class="mb-3">
                    <p class="text-muted text-uppercase fw-medium fs-12 mb-1">Number</p>
                    <h6>+(256) 2451 8974</h6>
                </div>
                <div class="mb-3">
                    <p class="text-muted text-uppercase fw-medium fs-12 mb-1">Email</p>
                    <h6>lisaparker@gmail.com</h6>
                </div>
                <div>
                    <p class="text-muted text-uppercase fw-medium fs-12 mb-1">Location</p>
                    <h6 class="mb-0">California, USA</h6>
                </div>
            </div>

            <div class="border-top border-top-dashed p-3">
                <h5 class="fs-15 mb-3">Attached Files</h5>

                <div class="vstack gap-2">
                    <div class="border rounded border-dashed p-2">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-xs">
                                    <div class="avatar-title bg-light text-secondary rounded fs-20">
                                        <i class="ri-folder-zip-line"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="fs-13 mb-1"><a href="#" class="text-body text-truncate d-block">App
                                        pages.zip</a></h5>
                                <div class="text-muted">2.2MB</div>
                            </div>
                            <div class="flex-shrink-0 ms-2">
                                <div class="d-flex gap-1">
                                    <button type="button" class="btn btn-icon text-muted btn-sm fs-18"><i
                                            class="ri-download-2-line"></i></button>
                                    <div class="dropdown">
                                        <button class="btn btn-icon text-muted btn-sm fs-18 dropdown" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ri-share-line align-bottom me-2 text-muted"></i> Share</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ri-bookmark-line align-bottom me-2 text-muted"></i>
                                                    Bookmark</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ri-delete-bin-line align-bottom me-2 text-muted"></i>
                                                    Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border rounded border-dashed p-2">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-xs">
                                    <div class="avatar-title bg-light text-secondary rounded fs-20">
                                        <i class="ri-file-ppt-2-line"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="fs-13 mb-1"><a href="#" class="text-body text-truncate d-block">Velzon
                                        admin.ppt</a></h5>
                                <div class="text-muted">2.4MB</div>
                            </div>
                            <div class="flex-shrink-0 ms-2">
                                <div class="d-flex gap-1">
                                    <button type="button" class="btn btn-icon text-muted btn-sm fs-18"><i
                                            class="ri-download-2-line"></i></button>
                                    <div class="dropdown">
                                        <button class="btn btn-icon text-muted btn-sm fs-18 dropdown" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ri-share-line align-bottom me-2 text-muted"></i> Share</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ri-bookmark-line align-bottom me-2 text-muted"></i>
                                                    Bookmark</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ri-delete-bin-line align-bottom me-2 text-muted"></i>
                                                    Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border rounded border-dashed p-2">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-xs">
                                    <div class="avatar-title bg-light text-secondary rounded fs-20">
                                        <i class="ri-folder-zip-line"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="fs-13 mb-1"><a href="#"
                                        class="text-body text-truncate d-block">Images.zip</a></h5>
                                <div class="text-muted">1.2MB</div>
                            </div>
                            <div class="flex-shrink-0 ms-2">
                                <div class="d-flex gap-1">
                                    <button type="button" class="btn btn-icon text-muted btn-sm fs-18"><i
                                            class="ri-download-2-line"></i></button>
                                    <div class="dropdown">
                                        <button class="btn btn-icon text-muted btn-sm fs-18 dropdown" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ri-share-line align-bottom me-2 text-muted"></i> Share</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ri-bookmark-line align-bottom me-2 text-muted"></i>
                                                    Bookmark</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ri-delete-bin-line align-bottom me-2 text-muted"></i>
                                                    Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border rounded border-dashed p-2">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-xs">
                                    <div class="avatar-title bg-light text-secondary rounded fs-20">
                                        <i class="ri-image-2-line"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="fs-13 mb-1"><a href="#"
                                        class="text-body text-truncate d-block">bg-pattern.png</a></h5>
                                <div class="text-muted">1.1MB</div>
                            </div>
                            <div class="flex-shrink-0 ms-2">
                                <div class="d-flex gap-1">
                                    <button type="button" class="btn btn-icon text-muted btn-sm fs-18"><i
                                            class="ri-download-2-line"></i></button>
                                    <div class="dropdown">
                                        <button class="btn btn-icon text-muted btn-sm fs-18 dropdown" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ri-share-line align-bottom me-2 text-muted"></i> Share</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ri-bookmark-line align-bottom me-2 text-muted"></i>
                                                    Bookmark</a></li>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="ri-delete-bin-line align-bottom me-2 text-muted"></i>
                                                    Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-2">
                        <button type="button" class="btn btn-danger">Load more <i
                                class="ri-arrow-right-fill align-bottom ms-1"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <!--end offcanvas-body-->
    </div>
    <!--end offcanvas-->
@endsection
@section('script')
    <script src="assets/libs/glightbox/glightbox.min.js"></script>

    <!-- fgEmojiPicker js -->
    <script src="assets/libs/fg-emoji-picker/fg-emoji-picker.min.js"></script>

    <!-- chat init js -->
    <script src="assets/js/pages/chat.init.js"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
