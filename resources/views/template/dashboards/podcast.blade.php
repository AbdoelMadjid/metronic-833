@extends('layouts.metronic')

@section('body_attributes')
    id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true"
    data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true"
    data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true"
    class="app-default"
@endsection

@section('page_title')
    Metronic - The World's #1 Selling Tailwind CSS & Bootstrap Admin Template by KeenThemes
@endsection

@section('toolbar')
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6 metronic-toolbar-separated">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Podcast
                    Dashboard</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route('home') }}" class="text-muted text-hover-primary">Home</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-500 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Dashboards</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <!--begin::Secondary button-->
                <a href="#" class="btn btn-sm fw-bold btn-secondary" data-bs-toggle="modal"
                    data-bs-target="#kt_modal_create_project">Manage Bids</a>
                <!--end::Secondary button-->
                <!--begin::Primary button-->
                <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                    data-bs-target="#kt_modal_new_target">Start Auction</a>
                <!--end::Primary button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Toolbar container-->
    </div>
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">
            <!--begin::Row-->
            <div class="row g-5 gx-xl-10 mb-5 mb-xl-10">
                <!--begin::Col-->
                <div class="col-xl-8">
                    <!--begin::Engage widget 6-->
                    <div class="card flex-grow-1 bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100"
                        style="background-color:#020202;background-image:url('/assets/media/stock/600x600/img-62.jpg')">
                        <!--begin::Body-->
                        <div class="card-body d-flex justify-content-between flex-column ps-xl-18">
                            <!--begin::Heading-->
                            <div class="mb-20 pt-xl-13">
                                <!--begin::Title-->
                                <h3 class="fw-bold text-white fs-4x mb-5 ms-n1">Utah Case</h3>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <span class="fw-bold text-white fs-4 mb-8 d-block lh-0">with Kristin Watson</span>
                                <!--end::Description-->
                                <!--begin::Items-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center me-6">
                                        <!--begin::Icon-->
                                        <a href="#" class="me-2">
                                            <i class="bi bi-play-fill text-primary fs-3"></i>
                                        </a>
                                        <!--end::Icon-->
                                        <!--begin::Info-->
                                        <span class="fw-semibold text-white fs-6">70,000+ plays</span>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Icon-->
                                        <a href="#" class="me-2">
                                            <i class="bi bi-headset text-primary fs-3"></i>
                                        </a>
                                        <!--end::Icon-->
                                        <!--begin::Info-->
                                        <span class="fw-semibold text-white fs-6">372 listening now</span>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Items-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Action-->
                            <div class="mb-xl-10 mb-3">
                                <a href='#' class="btn btn-primary fw-semibold me-2" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_upgrade_plan">Listen Now</a>
                                <a href="{{ route('metronic.apps.support_center.overview') }}"
                                    class="btn btn-color-white bg-transparent btn-outline fw-semibold"
                                    style="border: 1px solid rgba(255, 255, 255, 0.3)">Save for Later</a>
                            </div>
                            <!--begin::Action-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Engage widget 6-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Video widget 2-->
                    <div class="card card-flush h-xl-100" id="kt_player_widget_2">
                        <!--begin::Header-->
                        <div class="card-header bg-black">
                            <!--begin::Title-->
                            <h3 class="card-title fw-bold text-white">Player</h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                    data-kt-menu-overflow="true">
                                    <i class="ki-duotone ki-dots-square fs-1 text-white">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 2-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator mb-3 opacity-75"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Ticket</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Customer</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                        data-kt-menu-placement="right-start">
                                        <!--begin::Menu item-->
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">New Group</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--end::Menu item-->
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Admin Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Staff Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Member Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Contact</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator mt-3 opacity-75"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3 py-3">
                                            <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 2-->
                                <!--end::Menu-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body bg-black pt-0">
                            <!--begin::Image-->
                            <div class="mx-auto mb-6 bgi-no-repeat bgi-size-contain bgi-position-center rounded-circle w-125px h-125px"
                                style="background-image:url('/assets/media/stock/600x600/img-59.jpg')"></div>
                            <!--end::Image-->
                            <!--begin::Section-->
                            <div class="text-center mb-5">
                                <!--begin::Title-->
                                <h1 class="text-white fw-bold">Strange Friends</h1>
                                <!--end::Title-->
                                <!--begin::Title-->
                                <span class="text-white opacity-75 fw-semibold">Theresa Webb</span>
                                <!--end::Title-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Card body-->
                        <!--begin::Card Footer-->
                        <div class="card-footer bg-primary p-0 pb-9">
                            <div class="mt-n10">
                                <!--begin::Progress-->
                                <div class="mb-5">
                                    <!--begin::Time-->
                                    <div class="d-flex flex-stack px-4 text-white opacity-75">
                                        <span class="current-time" data-kt-element="current-time">0:00</span>
                                        <span class="duration" data-kt-element="duration">0:00</span>
                                    </div>
                                    <!--end::Time-->
                                    <input type="range" class="form-range" data-kt-element="progress" min="0"
                                        max="100" value="0" step="0.01" />
                                </div>
                                <!--end::Progress-->
                                <!--begin::Toolbar-->
                                <div class="d-flex flex-center">
                                    <button class="btn btn-icon mx-1" data-kt-element="replay-button">
                                        <i class="bi bi-arrow-repeat fs-2 text-white"></i>
                                    </button>
                                    <button class="btn btn-icon mx-1" data-kt-element="play-prev-button">
                                        <i class='bi bi-caret-left-fill fs-2 text-white'></i>
                                    </button>
                                    <button class="btn btn-icon mx-6 play-pause" data-kt-element="play-button">
                                        <i class="bi bi-play-fill text-white fs-4x" data-kt-element="play-icon"></i>
                                        <i class="bi bi-pause-fill text-white fs-4x d-none"
                                            data-kt-element="pause-icon"></i>
                                    </button>
                                    <button class="btn btn-icon mx-1 next" data-kt-element="play-next-button">
                                        <i class='bi bi-caret-right-fill fs-2 text-white'></i>
                                    </button>
                                    <button class="btn btn-icon mx-1" data-kt-element="shuffle-button">
                                        <i class="bi bi-shuffle fs-2 text-white"></i>
                                    </button>
                                </div>
                                <!--end::Toolbar-->
                                <!--begin::Tracks-->
                                <audio data-kt-element="audio-track-1">
                                    <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-5.mp3"
                                        type="audio/mpeg" />
                                </audio>
                                <!--end::Tracks-->
                            </div>
                        </div>
                        <!--end::Card Footer-->
                    </div>
                    <!--end::Video widget 2-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                <!--begin::Col-->
                <div class="col-xl-8">
                    <!--begin::Player widget 1-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Header-->
                        <div class="card-header pt-7">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-900">Recently Played</span>
                                <span class="text-gray-500 mt-1 fw-semibold fs-6">Updated 37 minutes ago</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <a href="{{ route('metronic.account.statements') }}"
                                    class="btn btn-sm btn-light">History</a>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-7">
                            <!--begin::Row-->
                            <div class="row g-5 g-xl-9 mb-5 mb-xl-9">
                                <!--begin::Col-->
                                <div class="col-sm-3 mb-3 mb-sm-0">
                                    <!--begin::Player card-->
                                    <div class="m-0">
                                        <!--begin::User pic-->
                                        <div class="card-rounded position-relative mb-5">
                                            <!--begin::Img-->
                                            <div class="bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded"
                                                style="background-image:url('/assets/media/stock/600x600/img-61.jpg')">
                                            </div>
                                            <!--end::Img-->
                                            <!--begin::Play-->
                                            <button
                                                class="btn btn-icon h-auto w-auto p-0 ms-4 mb-4 position-absolute bottom-0 right-0"
                                                data-kt-element="list-play-button">
                                                <i class="bi bi-play-fill text-white fs-2x"
                                                    data-kt-element="list-play-icon"></i>
                                                <i class="bi bi-pause-fill text-white fs-2x d-none"
                                                    data-kt-element="list-pause-icon"></i>
                                            </button>
                                            <!--end::Play-->
                                        </div>
                                        <!--end::User pic-->
                                        <!--begin::Info-->
                                        <div class="m-0">
                                            <!--begin::Title-->
                                            <a href="#"
                                                class="text-gray-800 text-hover-primary fs-3 fw-bold d-block mb-2">Daily
                                                Podcast</a>
                                            <!--end::Title-->
                                            <span class="fw-bold fs-6 text-gray-500 d-block lh-1">Darlene Robertson</span>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Player card-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-sm-3 mb-3 mb-sm-0">
                                    <!--begin::Player card-->
                                    <div class="m-0">
                                        <!--begin::User pic-->
                                        <div class="card-rounded position-relative mb-5">
                                            <!--begin::Img-->
                                            <div class="bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded"
                                                style="background-image:url('/assets/media/stock/600x600/img-60.jpg')">
                                            </div>
                                            <!--end::Img-->
                                            <!--begin::Play-->
                                            <button
                                                class="btn btn-icon h-auto w-auto p-0 ms-4 mb-4 position-absolute bottom-0 right-0"
                                                data-kt-element="list-play-button">
                                                <i class="bi bi-play-fill text-white fs-2x"
                                                    data-kt-element="list-play-icon"></i>
                                                <i class="bi bi-pause-fill text-white fs-2x d-none"
                                                    data-kt-element="list-pause-icon"></i>
                                            </button>
                                            <!--end::Play-->
                                        </div>
                                        <!--end::User pic-->
                                        <!--begin::Info-->
                                        <div class="m-0">
                                            <!--begin::Title-->
                                            <a href="#"
                                                class="text-gray-800 text-hover-primary fs-3 fw-bold d-block mb-2">Neon
                                                Lights</a>
                                            <!--end::Title-->
                                            <span class="fw-bold fs-6 text-gray-500 d-block lh-1">Wade Warren</span>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Player card-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-sm-3 mb-3 mb-sm-0">
                                    <!--begin::Player card-->
                                    <div class="m-0">
                                        <!--begin::User pic-->
                                        <div class="card-rounded position-relative mb-5">
                                            <!--begin::Img-->
                                            <div class="bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded"
                                                style="background-image:url('/assets/media/stock/600x600/img-63.jpg')">
                                            </div>
                                            <!--end::Img-->
                                            <!--begin::Play-->
                                            <button
                                                class="btn btn-icon h-auto w-auto p-0 ms-4 mb-4 position-absolute bottom-0 right-0"
                                                data-kt-element="list-play-button">
                                                <i class="bi bi-play-fill text-white fs-2x"
                                                    data-kt-element="list-play-icon"></i>
                                                <i class="bi bi-pause-fill text-white fs-2x d-none"
                                                    data-kt-element="list-pause-icon"></i>
                                            </button>
                                            <!--end::Play-->
                                        </div>
                                        <!--end::User pic-->
                                        <!--begin::Info-->
                                        <div class="m-0">
                                            <!--begin::Title-->
                                            <a href="#"
                                                class="text-gray-800 text-hover-primary fs-3 fw-bold d-block mb-2">Single
                                                Eye</a>
                                            <!--end::Title-->
                                            <span class="fw-bold fs-6 text-gray-500 d-block lh-1">Robert Fox</span>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Player card-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-sm-3 mb-3 mb-sm-0">
                                    <!--begin::Player card-->
                                    <div class="m-0">
                                        <!--begin::User pic-->
                                        <div class="card-rounded position-relative mb-5">
                                            <!--begin::Img-->
                                            <div class="bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded"
                                                style="background-image:url('/assets/media/stock/600x600/img-56.jpg')">
                                            </div>
                                            <!--end::Img-->
                                            <!--begin::Play-->
                                            <button
                                                class="btn btn-icon h-auto w-auto p-0 ms-4 mb-4 position-absolute bottom-0 right-0"
                                                data-kt-element="list-play-button">
                                                <i class="bi bi-play-fill text-white fs-2x"
                                                    data-kt-element="list-play-icon"></i>
                                                <i class="bi bi-pause-fill text-white fs-2x d-none"
                                                    data-kt-element="list-pause-icon"></i>
                                            </button>
                                            <!--end::Play-->
                                        </div>
                                        <!--end::User pic-->
                                        <!--begin::Info-->
                                        <div class="m-0">
                                            <!--begin::Title-->
                                            <a href="#"
                                                class="text-gray-800 text-hover-primary fs-3 fw-bold d-block mb-2">Radiohead</a>
                                            <!--end::Title-->
                                            <span class="fw-bold fs-6 text-gray-500 d-block lh-1">Jacob Jones</span>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Player card-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="row g-5 g-xl-9 mb-xl-3">
                                <!--begin::Col-->
                                <div class="col-sm-3 mb-3 mb-sm-0">
                                    <!--begin::Player card-->
                                    <div class="m-0">
                                        <!--begin::User pic-->
                                        <div class="card-rounded position-relative mb-5">
                                            <!--begin::Img-->
                                            <div class="bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded"
                                                style="background-image:url('/assets/media/stock/600x600/img-57.jpg')">
                                            </div>
                                            <!--end::Img-->
                                            <!--begin::Play-->
                                            <button
                                                class="btn btn-icon h-auto w-auto p-0 ms-4 mb-4 position-absolute bottom-0 right-0"
                                                data-kt-element="list-play-button">
                                                <i class="bi bi-play-fill text-white fs-2x"
                                                    data-kt-element="list-play-icon"></i>
                                                <i class="bi bi-pause-fill text-white fs-2x d-none"
                                                    data-kt-element="list-pause-icon"></i>
                                            </button>
                                            <!--end::Play-->
                                        </div>
                                        <!--end::User pic-->
                                        <!--begin::Info-->
                                        <div class="m-0">
                                            <!--begin::Title-->
                                            <a href="#"
                                                class="text-gray-800 text-hover-primary fs-3 fw-bold d-block mb-2">It is
                                                what it is</a>
                                            <!--end::Title-->
                                            <span class="fw-bold fs-6 text-gray-500 d-block lh-1">Jane Cooper</span>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Player card-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-sm-3 mb-3 mb-sm-0">
                                    <!--begin::Player card-->
                                    <div class="m-0">
                                        <!--begin::User pic-->
                                        <div class="card-rounded position-relative mb-5">
                                            <!--begin::Img-->
                                            <div class="bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded"
                                                style="background-image:url('/assets/media/stock/600x600/img-58.jpg')">
                                            </div>
                                            <!--end::Img-->
                                            <!--begin::Play-->
                                            <button
                                                class="btn btn-icon h-auto w-auto p-0 ms-4 mb-4 position-absolute bottom-0 right-0"
                                                data-kt-element="list-play-button">
                                                <i class="bi bi-play-fill text-white fs-2x"
                                                    data-kt-element="list-play-icon"></i>
                                                <i class="bi bi-pause-fill text-white fs-2x d-none"
                                                    data-kt-element="list-pause-icon"></i>
                                            </button>
                                            <!--end::Play-->
                                        </div>
                                        <!--end::User pic-->
                                        <!--begin::Info-->
                                        <div class="m-0">
                                            <!--begin::Title-->
                                            <a href="#"
                                                class="text-gray-800 text-hover-primary fs-3 fw-bold d-block mb-2">Broken
                                                Mirros</a>
                                            <!--end::Title-->
                                            <span class="fw-bold fs-6 text-gray-500 d-block lh-1">Jenny Wilson</span>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Player card-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-sm-3 mb-3 mb-sm-0">
                                    <!--begin::Player card-->
                                    <div class="m-0">
                                        <!--begin::User pic-->
                                        <div class="card-rounded position-relative mb-5">
                                            <!--begin::Img-->
                                            <div class="bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded"
                                                style="background-image:url('/assets/media/stock/600x600/img-55.jpg')">
                                            </div>
                                            <!--end::Img-->
                                            <!--begin::Play-->
                                            <button
                                                class="btn btn-icon h-auto w-auto p-0 ms-4 mb-4 position-absolute bottom-0 right-0"
                                                data-kt-element="list-play-button">
                                                <i class="bi bi-play-fill text-white fs-2x"
                                                    data-kt-element="list-play-icon"></i>
                                                <i class="bi bi-pause-fill text-white fs-2x d-none"
                                                    data-kt-element="list-pause-icon"></i>
                                            </button>
                                            <!--end::Play-->
                                        </div>
                                        <!--end::User pic-->
                                        <!--begin::Info-->
                                        <div class="m-0">
                                            <!--begin::Title-->
                                            <a href="#"
                                                class="text-gray-800 text-hover-primary fs-3 fw-bold d-block mb-2">The
                                                Hood</a>
                                            <!--end::Title-->
                                            <span class="fw-bold fs-6 text-gray-500 d-block lh-1">Albert Flores</span>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Player card-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-sm-3">
                                    <!--begin::Player card-->
                                    <div class="m-0">
                                        <!--begin::User pic-->
                                        <div class="card-rounded position-relative mb-5">
                                            <!--begin::Img-->
                                            <div class="bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded"
                                                style="background-image:url('/assets/media/stock/600x600/img-64.jpg')">
                                            </div>
                                            <!--end::Img-->
                                            <!--begin::Play-->
                                            <button
                                                class="btn btn-icon h-auto w-auto p-0 ms-4 mb-4 position-absolute bottom-0 right-0"
                                                data-kt-element="list-play-button">
                                                <i class="bi bi-play-fill text-white fs-2x"
                                                    data-kt-element="list-play-icon"></i>
                                                <i class="bi bi-pause-fill text-white fs-2x d-none"
                                                    data-kt-element="list-pause-icon"></i>
                                            </button>
                                            <!--end::Play-->
                                        </div>
                                        <!--end::User pic-->
                                        <!--begin::Info-->
                                        <div class="m-0">
                                            <!--begin::Title-->
                                            <a href="#"
                                                class="text-gray-800 text-hover-primary fs-3 fw-bold d-block mb-2">Cirle
                                                Lights</a>
                                            <!--end::Title-->
                                            <span class="fw-bold fs-6 text-gray-500 d-block lh-1">Dianne Russell</span>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Player card-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Player widget 1-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::List widget 24-->
                    <div class="card h-xl-100" id="kt_list_widget_24">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">Top Podcaster</span>
                                <span class="text-gray-500 mt-1 fw-bold fs-7">8k social visitors</span>
                            </h3>
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <a href="#" class="btn btn-sm btn-light">View All</a>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-6">
                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-circle symbol-60px me-4">
                                    <img src="assets/media/avatars/300-28.jpg" class="" alt="" />
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Section-->
                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                    <!--begin:Author-->
                                    <div class="flex-grow-1 me-2">
                                        <a href="{{ route('metronic.pages.user_profile.overview') }}"
                                            class="text-gray-800 text-hover-primary fs-5 fw-bolder">Leslie Alexander</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-6">Community</span>
                                    </div>
                                    <!--end:Author-->
                                    <!--begin::Follow-->
                                    <button class="btn btn-sm btn-light-primary py-2 px-4 fs-7 fs-bolder"
                                        data-kt-element="follow">Follow</button>
                                    <!--end::Follow-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-5"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-circle symbol-60px me-4">
                                    <img src="assets/media/avatars/300-29.jpg" class="" alt="" />
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Section-->
                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                    <!--begin:Author-->
                                    <div class="flex-grow-1 me-2">
                                        <a href="{{ route('metronic.pages.user_profile.overview') }}"
                                            class="text-gray-800 text-hover-primary fs-5 fw-bolder">Jacob Jones</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-6">Community</span>
                                    </div>
                                    <!--end:Author-->
                                    <!--begin::Follow-->
                                    <button class="btn btn-sm btn-primary py-2 px-4 fs-7 fw-bold"
                                        data-kt-element="follow">Following</button>
                                    <!--end::Follow-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-5"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-circle symbol-60px me-4">
                                    <img src="assets/media/avatars/300-9.jpg" class="" alt="" />
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Section-->
                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                    <!--begin:Author-->
                                    <div class="flex-grow-1 me-2">
                                        <a href="{{ route('metronic.pages.user_profile.overview') }}"
                                            class="text-gray-800 text-hover-primary fs-5 fw-bolder">Ronald Richards</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-6">Community</span>
                                    </div>
                                    <!--end:Author-->
                                    <!--begin::Follow-->
                                    <button class="btn btn-sm btn-light-primary py-2 px-4 fs-7 fs-bolder"
                                        data-kt-element="follow">Follow</button>
                                    <!--end::Follow-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-5"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-circle symbol-60px me-4">
                                    <img src="assets/media/avatars/300-3.jpg" class="" alt="" />
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Section-->
                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                    <!--begin:Author-->
                                    <div class="flex-grow-1 me-2">
                                        <a href="{{ route('metronic.pages.user_profile.overview') }}"
                                            class="text-gray-800 text-hover-primary fs-5 fw-bolder">Courtney Henry</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-6">Community</span>
                                    </div>
                                    <!--end:Author-->
                                    <!--begin::Follow-->
                                    <button class="btn btn-sm btn-light-primary py-2 px-4 fs-7 fs-bolder"
                                        data-kt-element="follow">Follow</button>
                                    <!--end::Follow-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-5"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-circle symbol-60px me-4">
                                    <img src="assets/media/avatars/300-27.jpg" class="" alt="" />
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Section-->
                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                    <!--begin:Author-->
                                    <div class="flex-grow-1 me-2">
                                        <a href="{{ route('metronic.pages.user_profile.overview') }}"
                                            class="text-gray-800 text-hover-primary fs-5 fw-bolder">Arlene McCoy</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-6">Community</span>
                                    </div>
                                    <!--end:Author-->
                                    <!--begin::Follow-->
                                    <button class="btn btn-sm btn-primary py-2 px-4 fs-7 fw-bold"
                                        data-kt-element="follow">Following</button>
                                    <!--end::Follow-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-5"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-circle symbol-60px me-4">
                                    <img src="assets/media/avatars/300-30.jpg" class="" alt="" />
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Section-->
                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                    <!--begin:Author-->
                                    <div class="flex-grow-1 me-2">
                                        <a href="{{ route('metronic.pages.user_profile.overview') }}"
                                            class="text-gray-800 text-hover-primary fs-5 fw-bolder">Marvin McKinney</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-6">Community</span>
                                    </div>
                                    <!--end:Author-->
                                    <!--begin::Follow-->
                                    <button class="btn btn-sm btn-light-primary py-2 px-4 fs-7 fs-bolder"
                                        data-kt-element="follow">Follow</button>
                                    <!--end::Follow-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::List widget 24-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                <!--begin::Col-->
                <div class="col-xl-8">
                    <!--begin::Engage widget 7-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Header-->
                        <div class="card-header pt-7">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-900">Recent Followers</span>
                                <span class="text-gray-500 mt-1 fw-semibold fs-6">Total 424,567 deliveries</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <a href="{{ route('metronic.account.statements') }}"
                                    class="btn btn-sm btn-light">History</a>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-7">
                            <!--begin::Row-->
                            <div class="row align-items-end h-100 gx-5 gx-xl-10">
                                <!--begin::Col-->
                                <div class="col-md-4 mb-11 mb-md-0">
                                    <!--begin::Overlay-->
                                    <a class="d-block overlay" data-fslightbox="lightbox-hot-sales"
                                        href="assets/media/stock/900x600/42.jpg">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded mb-3"
                                            style="height: 266px;background-image:url('/assets/media/stock/900x600/42.jpg">
                                        </div>
                                        <!--end::Image-->
                                        <!--begin::Action-->
                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                            <i class="ki-duotone ki-eye fs-3x text-white">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </div>
                                        <!--end::Action-->
                                    </a>
                                    <!--end::Overlay-->
                                    <!--begin::Info-->
                                    <div class="m-0">
                                        <!--begin::Title-->
                                        <a href="#"
                                            class="text-gray-800 text-hover-primary fs-3 fw-bold d-block mb-2">Feeling
                                            Good</a>
                                        <!--end::Title-->
                                        <!--begin::Time-->
                                        <span class="fw-bold fs-6 text-gray-500 d-block lh-1">2 hours</span>
                                        <!--end::Time-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-4 mb-11 mb-md-0">
                                    <!--begin::Overlay-->
                                    <a class="d-block overlay" data-fslightbox="lightbox-hot-sales"
                                        href="assets/media/stock/900x600/40.jpg">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded mb-3"
                                            style="height: 266px;background-image:url('/assets/media/stock/900x600/40.jpg">
                                        </div>
                                        <!--end::Image-->
                                        <!--begin::Action-->
                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                            <i class="ki-duotone ki-eye fs-3x text-white">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </div>
                                        <!--end::Action-->
                                    </a>
                                    <!--end::Overlay-->
                                    <!--begin::Info-->
                                    <div class="m-0">
                                        <!--begin::Title-->
                                        <a href="#"
                                            class="text-gray-800 text-hover-primary fs-3 fw-bold d-block mb-2">Both
                                            Sides</a>
                                        <!--end::Title-->
                                        <!--begin::Time-->
                                        <span class="fw-bold fs-6 text-gray-500 d-block lh-1">52 mins</span>
                                        <!--end::Time-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-4">
                                    <!--begin::Overlay-->
                                    <a class="d-block overlay" data-fslightbox="lightbox-hot-sales"
                                        href="assets/media/stock/900x600/41.jpg">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded mb-3"
                                            style="height: 266px;background-image:url('/assets/media/stock/900x600/41.jpg">
                                        </div>
                                        <!--end::Image-->
                                        <!--begin::Action-->
                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                            <i class="ki-duotone ki-eye fs-3x text-white">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </div>
                                        <!--end::Action-->
                                    </a>
                                    <!--end::Overlay-->
                                    <!--begin::Info-->
                                    <div class="m-0">
                                        <!--begin::Title-->
                                        <a href="#"
                                            class="text-gray-800 text-hover-primary fs-3 fw-bold d-block mb-2">Birds in the
                                            Sky</a>
                                        <!--end::Title-->
                                        <!--begin::Time-->
                                        <span class="fw-bold fs-6 text-gray-500 d-block lh-1">5 hours</span>
                                        <!--end::Time-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Engage widget 7-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Engage widget 1-->
                    <div class="card h-md-100" dir="ltr">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column flex-center">
                            <!--begin::Heading-->
                            <div class="mb-2">
                                <!--begin::Title-->
                                <h1 class="fw-semibold text-gray-800 text-center lh-lg">Have your tried
                                    <br />new
                                    <span class="fw-bolder">Invoice Manager?</span>
                                </h1>
                                <!--end::Title-->
                                <!--begin::Illustration-->
                                <div class="py-10 text-center">
                                    <img src="assets/media/svg/illustrations/easy/2.svg" class="theme-light-show h-125px"
                                        alt="" />
                                    <img src="assets/media/svg/illustrations/easy/2-dark.svg"
                                        class="theme-dark-show h-125px" alt="" />
                                </div>
                                <!--end::Illustration-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Links-->
                            <div class="text-center mb-1">
                                <!--begin::Link-->
                                <a class="btn btn-sm btn-primary me-2" data-bs-target="#kt_modal_offer_a_deal"
                                    data-bs-toggle="modal">Try Now</a>
                                <!--end::Link-->
                                <!--begin::Link-->
                                <a class="btn btn-sm btn-light" href="{{ route('metronic.account.billing') }}">Learn
                                    More</a>
                                <!--end::Link-->
                            </div>
                            <!--end::Links-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Engage widget 1-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row g-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-xl-8">
                    <!--begin::Table widget 13-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Header-->
                        <div class="card-header pt-7">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">Most Popular Sellers</span>
                                <span class="text-gray-500 mt-1 fw-semibold fs-6">Total 424,567 deliveries</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                                <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left"
                                    class="btn btn-sm btn-light d-flex align-items-center px-4">
                                    <!--begin::Display range-->
                                    <div class="text-gray-600 fw-bold">Loading date range...</div>
                                    <!--end::Display range-->
                                    <i class="ki-duotone ki-calendar-8 text-gray-500 lh-0 fs-2 ms-2 me-0">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                        <span class="path6"></span>
                                    </i>
                                </div>
                                <!--end::Daterangepicker-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-3 pb-4">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                            <th class="p-0 min-w-200px"></th>
                                            <th class="p-0 min-w-150px"></th>
                                            <th class="p-0 min-w-125px"></th>
                                            <th class="p-0 min-w-125px"></th>
                                            <th class="p-0 w-100px"></th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-circle symbol-40px me-3">
                                                        <img src="assets/media/avatars/300-1.jpg" class=""
                                                            alt="" />
                                                    </div>
                                                    <div class="d-flex justify-content-start flex-column">
                                                        <a href="{{ route('metronic.account.overview') }}"
                                                            class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Brooklyn
                                                            Simmons</a>
                                                        <span class="text-gray-500 fw-semibold d-block fs-7">Zuid
                                                            Area</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <span class="text-gray-800 fw-bold d-block mb-1 fs-6">1,240</span>
                                                <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#"
                                                    class="text-gray-800 fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</a>
                                                <span class="text-gray-500 fw-semibold d-block fs-7">Earnings</span>
                                            </td>
                                            <td class="float-end text-end border-0">
                                                <div class="rating">
                                                    <div class="rating-label checked">
                                                        <i class="ki-duotone ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-duotone ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-duotone ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-duotone ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-duotone ki-star fs-6"></i>
                                                    </div>
                                                </div>
                                                <span class="text-gray-500 fw-semibold d-block fs-7 mt-1">Rating</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#"
                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-25px h-25px">
                                                    <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-circle symbol-40px me-3">
                                                        <img src="assets/media/avatars/300-2.jpg" class=""
                                                            alt="" />
                                                    </div>
                                                    <div class="d-flex justify-content-start flex-column">
                                                        <a href="{{ route('metronic.account.overview') }}"
                                                            class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Annette
                                                            Black</a>
                                                        <span class="text-gray-500 fw-semibold d-block fs-7">Zuid
                                                            Area</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <span class="text-gray-800 fw-bold d-block mb-1 fs-6">6,074</span>
                                                <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#"
                                                    class="text-gray-800 fw-bold text-hover-primary d-block mb-1 fs-6">$174,074</a>
                                                <span class="text-gray-500 fw-semibold d-block fs-7">Earnings</span>
                                            </td>
                                            <td class="float-end text-end border-0">
                                                <div class="rating">
                                                    <div class="rating-label checked">
                                                        <i class="ki-duotone ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-duotone ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-duotone ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-duotone ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-duotone ki-star fs-6"></i>
                                                    </div>
                                                </div>
                                                <span class="text-gray-500 fw-semibold d-block fs-7 mt-1">Rating</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#"
                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-25px h-25px">
                                                    <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-circle symbol-40px me-3">
                                                        <img src="assets/media/avatars/300-12.jpg" class=""
                                                            alt="" />
                                                    </div>
                                                    <div class="d-flex justify-content-start flex-column">
                                                        <a href="{{ route('metronic.account.overview') }}"
                                                            class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther
                                                            Howard</a>
                                                        <span class="text-gray-500 fw-semibold d-block fs-7">Zuid
                                                            Area</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <span class="text-gray-800 fw-bold d-block mb-1 fs-6">357</span>
                                                <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#"
                                                    class="text-gray-800 fw-bold text-hover-primary d-block mb-1 fs-6">$2,737</a>
                                                <span class="text-gray-500 fw-semibold d-block fs-7">Earnings</span>
                                            </td>
                                            <td class="float-end text-end border-0">
                                                <div class="rating">
                                                    <div class="rating-label checked">
                                                        <i class="ki-duotone ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-duotone ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-duotone ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-duotone ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-duotone ki-star fs-6"></i>
                                                    </div>
                                                </div>
                                                <span class="text-gray-500 fw-semibold d-block fs-7 mt-1">Rating</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#"
                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-25px h-25px">
                                                    <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-circle symbol-40px me-3">
                                                        <img src="assets/media/avatars/300-11.jpg" class=""
                                                            alt="" />
                                                    </div>
                                                    <div class="d-flex justify-content-start flex-column">
                                                        <a href="{{ route('metronic.account.overview') }}"
                                                            class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Guy
                                                            Hawkins</a>
                                                        <span class="text-gray-500 fw-semibold d-block fs-7">Zuid
                                                            Area</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <span class="text-gray-800 fw-bold d-block mb-1 fs-6">2,954</span>
                                                <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#"
                                                    class="text-gray-800 fw-bold text-hover-primary d-block mb-1 fs-6">$59,634</a>
                                                <span class="text-gray-500 fw-semibold d-block fs-7">Earnings</span>
                                            </td>
                                            <td class="float-end text-end border-0">
                                                <div class="rating">
                                                    <div class="rating-label checked">
                                                        <i class="ki-duotone ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-duotone ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-duotone ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-duotone ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label">
                                                        <i class="ki-duotone ki-star fs-6"></i>
                                                    </div>
                                                </div>
                                                <span class="text-gray-500 fw-semibold d-block fs-7 mt-1">Rating</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#"
                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-25px h-25px">
                                                    <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-circle symbol-40px me-3">
                                                        <img src="assets/media/avatars/300-3.jpg" class=""
                                                            alt="" />
                                                    </div>
                                                    <div class="d-flex justify-content-start flex-column">
                                                        <a href="{{ route('metronic.account.overview') }}"
                                                            class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Marvin
                                                            McKinney</a>
                                                        <span class="text-gray-500 fw-semibold d-block fs-7">Zuid
                                                            Area</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <span class="text-gray-800 fw-bold d-block mb-1 fs-6">822</span>
                                                <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#"
                                                    class="text-gray-800 fw-bold text-hover-primary d-block mb-1 fs-6">$19,842</a>
                                                <span class="text-gray-500 fw-semibold d-block fs-7">Earnings</span>
                                            </td>
                                            <td class="float-end text-end border-0">
                                                <div class="rating">
                                                    <div class="rating-label checked">
                                                        <i class="ki-duotone ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-duotone ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-duotone ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-duotone ki-star fs-6"></i>
                                                    </div>
                                                    <div class="rating-label checked">
                                                        <i class="ki-duotone ki-star fs-6"></i>
                                                    </div>
                                                </div>
                                                <span class="text-gray-500 fw-semibold d-block fs-7 mt-1">Rating</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#"
                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-25px h-25px">
                                                    <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end: Card Body-->
                    </div>
                    <!--end::Table widget 13-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Chart Widget 34-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Header-->
                        <div class="card-header pt-5 mb-6">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <!--begin::Statistics-->
                                <div class="d-flex align-items-center mb-2">
                                    <!--begin::Currency-->
                                    <span class="fs-3 fw-semibold text-gray-500 align-self-start me-1">$</span>
                                    <!--end::Currency-->
                                    <!--begin::Value-->
                                    <span class="fs-2hx fw-bold text-gray-800 me-3 lh-1 ls-n2">3,274.94</span>
                                    <!--end::Value-->
                                    <!--begin::Label-->
                                    <span class="badge badge-light-success fs-base">
                                        <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>9.2%</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Statistics-->
                                <!--begin::Description-->
                                <span class="fs-6 fw-semibold text-gray-500">Your Earnings</span>
                                <!--end::Description-->
                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button
                                    class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                    data-kt-menu-overflow="true">
                                    <i class="ki-duotone ki-dots-square fs-1 text-gray-500 me-n1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 2-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator mb-3 opacity-75"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Ticket</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Customer</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                        data-kt-menu-placement="right-start">
                                        <!--begin::Menu item-->
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">New Group</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--end::Menu item-->
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Admin Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Staff Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Member Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Contact</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator mt-3 opacity-75"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3 py-3">
                                            <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 2-->
                                <!--end::Menu-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-0 px-0">
                            <!--begin::Nav-->
                            <ul class="nav d-flex justify-content-between mb-3 mx-9">
                                <!--begin::Item-->
                                <li class="nav-item mb-3">
                                    <!--begin::Link-->
                                    <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px active"
                                        data-bs-toggle="tab" id="kt_charts_widget_34_tab_1"
                                        href="#kt_charts_widget_34_tab_content_1">1d</a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mb-3">
                                    <!--begin::Link-->
                                    <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px"
                                        data-bs-toggle="tab" id="kt_charts_widget_34_tab_2"
                                        href="#kt_charts_widget_34_tab_content_2">5d</a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mb-3">
                                    <!--begin::Link-->
                                    <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px"
                                        data-bs-toggle="tab" id="kt_charts_widget_34_tab_3"
                                        href="#kt_charts_widget_34_tab_content_3">1m</a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mb-3">
                                    <!--begin::Link-->
                                    <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px"
                                        data-bs-toggle="tab" id="kt_charts_widget_34_tab_4"
                                        href="#kt_charts_widget_34_tab_content_4">6m</a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mb-3">
                                    <!--begin::Link-->
                                    <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px"
                                        data-bs-toggle="tab" id="kt_charts_widget_34_tab_5"
                                        href="#kt_charts_widget_34_tab_content_5">1y</a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Nav-->
                            <!--begin::Tab Content-->
                            <div class="tab-content mt-n6">
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade active show" id="kt_charts_widget_34_tab_content_1">
                                    <!--begin::Chart-->
                                    <div id="kt_charts_widget_34_chart_1" data-kt-chart-color="info"
                                        class="min-h-auto h-200px ps-3 pe-6"></div>
                                    <!--end::Chart-->
                                    <!--begin::Table container-->
                                    <div class="table-responsive mx-9 mt-n6">
                                        <!--begin::Table-->
                                        <table class="table align-middle gs-0 gy-4">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr>
                                                    <th class="min-w-100px"></th>
                                                    <th class="min-w-100px text-end pe-0"></th>
                                                    <th class="text-end min-w-50px"></th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 fw-bold fs-6">Donates</a>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="fw-bold fs-6 text-danger">-139.34</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 fw-bold fs-6">Podcasts</a>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$2,207.03</span>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="fw-bold fs-6 text-success">+576.24</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table container-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_charts_widget_34_tab_content_2">
                                    <!--begin::Chart-->
                                    <div id="kt_charts_widget_34_chart_2" data-kt-chart-color="info"
                                        class="min-h-auto h-200px ps-3 pe-6"></div>
                                    <!--end::Chart-->
                                    <!--begin::Table container-->
                                    <div class="table-responsive mx-9 mt-n6">
                                        <!--begin::Table-->
                                        <table class="table align-middle gs-0 gy-4">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr>
                                                    <th class="min-w-100px"></th>
                                                    <th class="min-w-100px text-end pe-0"></th>
                                                    <th class="text-end min-w-50px"></th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 fw-bold fs-6">Donates</a>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$1,656.26</span>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="fw-bold fs-6 text-success">+124.03</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 fw-bold fs-6">Podcasts</a>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$2,865.25</span>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="fw-bold fs-6 text-primary">+135.03</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table container-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_charts_widget_34_tab_content_3">
                                    <!--begin::Chart-->
                                    <div id="kt_charts_widget_34_chart_3" data-kt-chart-color="info"
                                        class="min-h-auto h-200px ps-3 pe-6"></div>
                                    <!--end::Chart-->
                                    <!--begin::Table container-->
                                    <div class="table-responsive mx-9 mt-n6">
                                        <!--begin::Table-->
                                        <table class="table align-middle gs-0 gy-4">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr>
                                                    <th class="min-w-100px"></th>
                                                    <th class="min-w-100px text-end pe-0"></th>
                                                    <th class="text-end min-w-50px"></th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 fw-bold fs-6">Donates</a>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="fw-bold fs-6 text-primary">-134.06</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 fw-bold fs-6">Podcasts</a>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="fw-bold fs-6 text-danger">+124.03</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table container-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_charts_widget_34_tab_content_4">
                                    <!--begin::Chart-->
                                    <div id="kt_charts_widget_34_chart_4" data-kt-chart-color="info"
                                        class="min-h-auto h-200px ps-3 pe-6"></div>
                                    <!--end::Chart-->
                                    <!--begin::Table container-->
                                    <div class="table-responsive mx-9 mt-n6">
                                        <!--begin::Table-->
                                        <table class="table align-middle gs-0 gy-4">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr>
                                                    <th class="min-w-100px"></th>
                                                    <th class="min-w-100px text-end pe-0"></th>
                                                    <th class="text-end min-w-50px"></th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 fw-bold fs-6">Donates</a>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$2,925.45</span>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="fw-bold fs-6 text-warning">+145.36</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 fw-bold fs-6">Podcasts</a>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="fw-bold fs-6 text-info">+124.03</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table container-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_charts_widget_34_tab_content_5">
                                    <!--begin::Chart-->
                                    <div id="kt_charts_widget_34_chart_5" data-kt-chart-color="info"
                                        class="min-h-auto h-200px ps-3 pe-6"></div>
                                    <!--end::Chart-->
                                    <!--begin::Table container-->
                                    <div class="table-responsive mx-9 mt-n6">
                                        <!--begin::Table-->
                                        <table class="table align-middle gs-0 gy-4">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr>
                                                    <th class="min-w-100px"></th>
                                                    <th class="min-w-100px text-end pe-0"></th>
                                                    <th class="text-end min-w-50px"></th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 fw-bold fs-6">Donates</a>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$856.26</span>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="fw-bold fs-6 text-danger">-243.05</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-gray-600 fw-bold fs-6">Podcasts</a>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="text-gray-800 fw-bold fs-6 me-1">$2,556.26</span>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <span class="fw-bold fs-6 text-warning">-124.03</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table container-->
                                </div>
                                <!--end::Tap pane-->
                            </div>
                            <!--end::Tab Content-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Chart Widget 34-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Content container-->
    </div>
@endsection

@section('body_extras')
    <!--end::App-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-duotone ki-arrow-up">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
    </div>
    <!--end::Scrolltop-->
    <!--begin::Modals-->
    <!--begin::Modal - Upgrade plan-->
    <div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-xl">
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header justify-content-end border-0 pb-0">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body pt-0 pb-15 px-5 px-xl-20">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <h1 class="mb-3">Upgrade a Plan</h1>
                        <div class="text-muted fw-semibold fs-5">If you need more info, please check
                            <a href="#" class="link-primary fw-bold">Pricing Guidelines</a>.
                        </div>
                    </div>
                    <!--end::Heading-->
                    <!--begin::Plans-->
                    <div class="d-flex flex-column">
                        <!--begin::Nav group-->
                        <div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
                            <button class="btn btn-color-gray-500 btn-active btn-active-secondary px-6 py-3 me-2 active"
                                data-kt-plan="month">Monthly</button>
                            <button class="btn btn-color-gray-500 btn-active btn-active-secondary px-6 py-3"
                                data-kt-plan="annual">Annual</button>
                        </div>
                        <!--end::Nav group-->
                        <!--begin::Row-->
                        <div class="row mt-10">
                            <!--begin::Col-->
                            <div class="col-lg-6 mb-10 mb-lg-0">
                                <!--begin::Tabs-->
                                <div class="nav flex-column">
                                    <!--begin::Tab link-->
                                    <label
                                        class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6"
                                        data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan"
                                                    checked="checked" value="startup" />
                                            </div>
                                            <!--end::Radio-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Startup</div>
                                                <div class="fw-semibold opacity-75">Best for startups</div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->
                                        <!--begin::Price-->
                                        <div class="ms-5">
                                            <span class="mb-2">$</span>
                                            <span class="fs-3x fw-bold" data-kt-plan-price-month="39"
                                                data-kt-plan-price-annual="399">39</span>
                                            <span class="fs-7 opacity-50">/
                                                <span data-kt-element="period">Mon</span></span>
                                        </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Tab link-->
                                    <!--begin::Tab link-->
                                    <label
                                        class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
                                        data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">
                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan"
                                                    value="advanced" />
                                            </div>
                                            <!--end::Radio-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Advanced
                                                </div>
                                                <div class="fw-semibold opacity-75">Best for 100+ team size</div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->
                                        <!--begin::Price-->
                                        <div class="ms-5">
                                            <span class="mb-2">$</span>
                                            <span class="fs-3x fw-bold" data-kt-plan-price-month="339"
                                                data-kt-plan-price-annual="3399">339</span>
                                            <span class="fs-7 opacity-50">/
                                                <span data-kt-element="period">Mon</span></span>
                                        </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Tab link-->
                                    <!--begin::Tab link-->
                                    <label
                                        class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
                                        data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">
                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan"
                                                    value="enterprise" />
                                            </div>
                                            <!--end::Radio-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Enterprise
                                                    <span
                                                        class="badge badge-light-success ms-2 py-2 px-3 fs-7">Popular</span>
                                                </div>
                                                <div class="fw-semibold opacity-75">Best value for 1000+ team</div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->
                                        <!--begin::Price-->
                                        <div class="ms-5">
                                            <span class="mb-2">$</span>
                                            <span class="fs-3x fw-bold" data-kt-plan-price-month="999"
                                                data-kt-plan-price-annual="9999">999</span>
                                            <span class="fs-7 opacity-50">/
                                                <span data-kt-element="period">Mon</span></span>
                                        </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Tab link-->
                                    <!--begin::Tab link-->
                                    <label
                                        class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
                                        data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_custom">
                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan"
                                                    value="custom" />
                                            </div>
                                            <!--end::Radio-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Custom</div>
                                                <div class="fw-semibold opacity-75">Requet a custom license</div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->
                                        <!--begin::Price-->
                                        <div class="ms-5">
                                            <a href="#" class="btn btn-sm btn-success">Contact Us</a>
                                        </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Tab link-->
                                </div>
                                <!--end::Tabs-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-lg-6">
                                <!--begin::Tab content-->
                                <div class="tab-content rounded h-100 bg-light p-10">
                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-gray-900">What’s in Startup Plan?</h2>
                                            <div class="text-muted fw-semibold">Optimal for 10+ team size and new startup
                                            </div>
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Body-->
                                        <div class="pt-1">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active
                                                    Users</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project
                                                    Integrations</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics
                                                    Module</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">Finance Module</span>
                                                <i class="ki-duotone ki-cross-circle fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">Accounting
                                                    Module</span>
                                                <i class="ki-duotone ki-cross-circle fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">Network
                                                    Platform</span>
                                                <i class="ki-duotone ki-cross-circle fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud
                                                    Space</span>
                                                <i class="ki-duotone ki-cross-circle fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade" id="kt_upgrade_plan_advanced">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-gray-900">What’s in Startup Plan?</h2>
                                            <div class="text-muted fw-semibold">Optimal for 100+ team size and grown
                                                company</div>
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Body-->
                                        <div class="pt-1">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active
                                                    Users</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project
                                                    Integrations</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics
                                                    Module</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance
                                                    Module</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting
                                                    Module</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">Network
                                                    Platform</span>
                                                <i class="ki-duotone ki-cross-circle fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud
                                                    Space</span>
                                                <i class="ki-duotone ki-cross-circle fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade" id="kt_upgrade_plan_enterprise">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-gray-900">What’s in Startup Plan?</h2>
                                            <div class="text-muted fw-semibold">Optimal for 1000+ team and enterpise</div>
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Body-->
                                        <div class="pt-1">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active
                                                    Users</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project
                                                    Integrations</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics
                                                    Module</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance
                                                    Module</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting
                                                    Module</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network
                                                    Platform</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud
                                                    Space</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade" id="kt_upgrade_plan_custom">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-gray-900">What’s in Startup Plan?</h2>
                                            <div class="text-muted fw-semibold">Optimal for corporations</div>
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Body-->
                                        <div class="pt-1">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited
                                                    Users</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Project
                                                    Integrations</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics
                                                    Module</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance
                                                    Module</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting
                                                    Module</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network
                                                    Platform</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud
                                                    Space</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                </div>
                                <!--end::Tab content-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Plans-->
                    <!--begin::Actions-->
                    <div class="d-flex flex-center flex-row-fluid pt-12">
                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" id="kt_modal_upgrade_plan_btn">
                            <!--begin::Indicator label-->
                            <span class="indicator-label">Upgrade Plan</span>
                            <!--end::Indicator label-->
                            <!--begin::Indicator progress-->
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            <!--end::Indicator progress-->
                        </button>
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Upgrade plan-->
    <!--begin::Modal - Create Project-->
    <div class="modal fade" id="kt_modal_create_project" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-fullscreen p-9">
            <!--begin::Modal content-->
            <div class="modal-content modal-rounded">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2>Create Project</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y m-5">
                    <!--begin::Stepper-->
                    <div class="stepper stepper-links d-flex flex-column" id="kt_modal_create_project_stepper">
                        <!--begin::Container-->
                        <div class="container">
                            <!--begin::Nav-->
                            <div class="stepper-nav justify-content-center py-2">
                                <!--begin::Step 1-->
                                <div class="stepper-item me-5 me-md-15 current" data-kt-stepper-element="nav">
                                    <h3 class="stepper-title">Project Type</h3>
                                </div>
                                <!--end::Step 1-->
                                <!--begin::Step 2-->
                                <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                                    <h3 class="stepper-title">Project Settings</h3>
                                </div>
                                <!--end::Step 2-->
                                <!--begin::Step 3-->
                                <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                                    <h3 class="stepper-title">Budget</h3>
                                </div>
                                <!--end::Step 3-->
                                <!--begin::Step 4-->
                                <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                                    <h3 class="stepper-title">Build A Team</h3>
                                </div>
                                <!--end::Step 4-->
                                <!--begin::Step 5-->
                                <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                                    <h3 class="stepper-title">Set First Target</h3>
                                </div>
                                <!--end::Step 5-->
                                <!--begin::Step 6-->
                                <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                                    <h3 class="stepper-title">Upload Files</h3>
                                </div>
                                <!--end::Step 6-->
                                <!--begin::Step 7-->
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <h3 class="stepper-title">Completed</h3>
                                </div>
                                <!--end::Step 7-->
                            </div>
                            <!--end::Nav-->
                            <!--begin::Form-->
                            <form class="mx-auto w-100 mw-600px pt-15 pb-10" novalidate="novalidate"
                                id="kt_modal_create_project_form" method="post">
                                <!--begin::Type-->
                                <div class="current" data-kt-stepper-element="content">
                                    <!--begin::Wrapper-->
                                    <div class="w-100">
                                        <!--begin::Heading-->
                                        <div class="pb-7 pb-lg-12">
                                            <!--begin::Title-->
                                            <h1 class="fw-bold text-gray-900">Project Type</h1>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="text-muted fw-semibold fs-4">If you need more info, please check
                                                out
                                                <a href="#" class="link-primary fw-bold">FAQ Page</a>
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-15" data-kt-buttons="true">
                                            <!--begin::Option-->
                                            <label
                                                class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 mb-6 active">
                                                <!--begin::Input-->
                                                <input class="btn-check" type="radio" checked="checked"
                                                    name="project_type" value="1" />
                                                <!--end::Input-->
                                                <!--begin::Label-->
                                                <span class="d-flex">
                                                    <!--begin::Icon-->
                                                    <i class="ki-duotone ki-profile-circle fs-3hx">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <span class="ms-4">
                                                        <span class="fs-3 fw-bold text-gray-900 mb-2 d-block">Personal
                                                            Project</span>
                                                        <span class="fw-semibold fs-4 text-muted">If you need more info,
                                                            please check it out</span>
                                                    </span>
                                                    <!--end::Info-->
                                                </span>
                                                <!--end::Label-->
                                            </label>
                                            <!--end::Option-->
                                            <!--begin::Option-->
                                            <label
                                                class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6">
                                                <!--begin::Input-->
                                                <input class="btn-check" type="radio" name="project_type"
                                                    value="2" />
                                                <!--end::Input-->
                                                <!--begin::Label-->
                                                <span class="d-flex">
                                                    <!--begin::Icon-->
                                                    <i class="ki-duotone ki-rocket fs-3hx">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <span class="ms-4">
                                                        <span class="fs-3 fw-bold text-gray-900 mb-2 d-block">Team
                                                            Project</span>
                                                        <span class="fw-semibold fs-4 text-muted">Create corporate account
                                                            to manage users</span>
                                                    </span>
                                                    <!--end::Info-->
                                                </span>
                                                <!--end::Label-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end">
                                            <button type="button" class="btn btn-lg btn-primary"
                                                data-kt-element="type-next">
                                                <span class="indicator-label">Project Settings</span>
                                                <span class="indicator-progress">Please wait...
                                                    <span
                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Type-->
                                <!--begin::Settings-->
                                <div data-kt-stepper-element="content">
                                    <!--begin::Wrapper-->
                                    <div class="w-100">
                                        <!--begin::Heading-->
                                        <div class="pb-12">
                                            <!--begin::Title-->
                                            <h1 class="fw-bold text-gray-900">Project Settings</h1>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="text-muted fw-semibold fs-4">If you need more info, please check
                                                <a href="#" class="link-primary">Project Guidelines</a>
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-8">
                                            <!--begin::Dropzone-->
                                            <div class="dropzone" id="kt_modal_create_project_settings_logo">
                                                <!--begin::Message-->
                                                <div class="dz-message needsclick">
                                                    <!--begin::Icon-->
                                                    <i class="ki-duotone ki-file-up fs-3hx text-primary">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <div class="ms-4">
                                                        <h3 class="dfs-3 fw-bold text-gray-900 mb-1">Drop files here or
                                                            click to upload.</h3>
                                                        <span class="fw-semibold fs-4 text-muted">Upload up to 10
                                                            files</span>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                            </div>
                                            <!--end::Dropzone-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-8">
                                            <!--begin::Label-->
                                            <label class="required fs-6 fw-semibold mb-2">Customer</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select class="form-select form-select-solid" data-control="select2"
                                                data-hide-search="true" data-placeholder="Select..."
                                                name="settings_customer">
                                                <option></option>
                                                <option value="1">Keenthemes</option>
                                                <option value="2">CRM App</option>
                                            </select>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-8">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                <span class="required">Project Name</span>
                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Specify project name">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid"
                                                placeholder="Enter Project Name" value="StockPro Mobile App"
                                                name="settings_name" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-8">
                                            <!--begin::Label-->
                                            <label class="required fs-6 fw-semibold mb-2">Project Description</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <textarea class="form-control form-control-solid" rows="3" placeholder="Enter Project Description"
                                                name="settings_description">Experience share market at your fingertips with TICK PRO stock investment mobile trading app</textarea>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-8">
                                            <!--begin::Label-->
                                            <label class="required fs-6 fw-semibold mb-2">Release Date</label>
                                            <!--end::Label-->
                                            <!--begin::Wrapper-->
                                            <div class="position-relative d-flex align-items-center">
                                                <!--begin::Icon-->
                                                <i class="ki-duotone ki-calendar-8 fs-2 position-absolute mx-4">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    <span class="path5"></span>
                                                    <span class="path6"></span>
                                                </i>
                                                <!--end::Icon-->
                                                <!--begin::Input-->
                                                <input class="form-control form-control-solid ps-12"
                                                    placeholder="Pick date range" name="settings_release_date" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-15">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Label-->
                                                <div class="me-5">
                                                    <label class="required fs-6 fw-semibold">Notifications</label>
                                                    <div class="fs-7 fw-semibold text-muted">Allow Notifications by Phone
                                                        or Email</div>
                                                </div>
                                                <!--end::Label-->
                                                <!--begin::Checkboxes-->
                                                <div class="d-flex">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-10">
                                                        <!--begin::Input-->
                                                        <input class="form-check-input h-20px w-20px" type="checkbox"
                                                            value="email" name="settings_notifications[]" />
                                                        <!--end::Input-->
                                                        <!--begin::Label-->
                                                        <span class="form-check-label fw-semibold">Email</span>
                                                        <!--end::Label-->
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid">
                                                        <!--begin::Input-->
                                                        <input class="form-check-input h-20px w-20px" type="checkbox"
                                                            value="phone" checked="checked"
                                                            name="settings_notifications[]" />
                                                        <!--end::Input-->
                                                        <!--begin::Label-->
                                                        <span class="form-check-label fw-semibold">Phone</span>
                                                        <!--end::Label-->
                                                    </label>
                                                    <!--end::Checkbox-->
                                                </div>
                                                <!--end::Checkboxes-->
                                            </div>
                                            <!--begin::Wrapper-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex flex-stack">
                                            <button type="button" class="btn btn-lg btn-light me-3"
                                                data-kt-element="settings-previous">Project Type</button>
                                            <button type="button" class="btn btn-lg btn-primary"
                                                data-kt-element="settings-next">
                                                <span class="indicator-label">Budget</span>
                                                <span class="indicator-progress">Please wait...
                                                    <span
                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Settings-->
                                <!--begin::Budget-->
                                <div data-kt-stepper-element="content">
                                    <!--begin::Wrapper-->
                                    <div class="w-100">
                                        <!--begin::Heading-->
                                        <div class="pb-10 pb-lg-12">
                                            <!--begin::Title-->
                                            <h1 class="fw-bold text-gray-900">Budget</h1>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="text-muted fw-semibold fs-4">If you need more info, please check
                                                <a href="#" class="link-primary">Project Guidelines</a>
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-8">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">Setup Budget</span>
                                                <span class="lh-1 ms-1" data-bs-toggle="popover"
                                                    data-bs-trigger="hover" data-bs-html="true"
                                                    data-bs-content="&lt;div class=&#039;p-4 rounded bg-light&#039;&gt; &lt;div class=&#039;d-flex flex-stack text-muted mb-4&#039;&gt; &lt;i class=&quot;ki-duotone ki-bank fs-3 me-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt; &lt;div class=&#039;fw-bold&#039;&gt;INCBANK **** 1245 STATEMENT&lt;/div&gt; &lt;/div&gt; &lt;div class=&#039;d-flex flex-stack fw-semibold text-gray-600&#039;&gt; &lt;div&gt;Amount&lt;/div&gt; &lt;div&gt;Transaction&lt;/div&gt; &lt;/div&gt; &lt;div class=&#039;separator separator-dashed my-2&#039;&gt;&lt;/div&gt; &lt;div class=&#039;d-flex flex-stack text-gray-900 fw-bold mb-2&#039;&gt; &lt;div&gt;USD345.00&lt;/div&gt; &lt;div&gt;KEENTHEMES*&lt;/div&gt; &lt;/div&gt; &lt;div class=&#039;d-flex flex-stack text-muted mb-2&#039;&gt; &lt;div&gt;USD75.00&lt;/div&gt; &lt;div&gt;Hosting fee&lt;/div&gt; &lt;/div&gt; &lt;div class=&#039;d-flex flex-stack text-muted&#039;&gt; &lt;div&gt;USD3,950.00&lt;/div&gt; &lt;div&gt;Payrol&lt;/div&gt; &lt;/div&gt; &lt;/div&gt;">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Dialer-->
                                            <div class="position-relative w-lg-250px"
                                                id="kt_modal_create_project_budget_setup" data-kt-dialer="true"
                                                data-kt-dialer-min="50" data-kt-dialer-max="50000"
                                                data-kt-dialer-step="100" data-kt-dialer-prefix="$"
                                                data-kt-dialer-decimals="2">
                                                <!--begin::Decrease control-->
                                                <button type="button"
                                                    class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0"
                                                    data-kt-dialer-control="decrease">
                                                    <i class="ki-duotone ki-minus-circle fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </button>
                                                <!--end::Decrease control-->
                                                <!--begin::Input control-->
                                                <input type="text"
                                                    class="form-control form-control-solid border-0 ps-12"
                                                    data-kt-dialer-control="input" placeholder="Amount"
                                                    name="budget_setup" readonly="readonly" value="$50" />
                                                <!--end::Input control-->
                                                <!--begin::Increase control-->
                                                <button type="button"
                                                    class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0"
                                                    data-kt-dialer-control="increase">
                                                    <i class="ki-duotone ki-plus-circle fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </button>
                                                <!--end::Increase control-->
                                            </div>
                                            <!--end::Dialer-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-8">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold mb-2">Budget Usage</label>
                                            <!--end::Label-->
                                            <!--begin::Row-->
                                            <div class="row g-9" data-kt-buttons="true"
                                                data-kt-buttons-target="[data-kt-button='true']">
                                                <!--begin::Col-->
                                                <div class="col-md-6 col-lg-12 col-xxl-6">
                                                    <!--begin::Option-->
                                                    <label
                                                        class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6"
                                                        data-kt-button="true">
                                                        <!--begin::Radio-->
                                                        <span
                                                            class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                            <input class="form-check-input" type="radio"
                                                                name="budget_usage" value="1"
                                                                checked="checked" />
                                                        </span>
                                                        <!--end::Radio-->
                                                        <!--begin::Info-->
                                                        <span class="ms-5">
                                                            <span class="fs-4 fw-bold text-gray-800 mb-2 d-block">Precise
                                                                Usage</span>
                                                            <span class="fw-semibold fs-7 text-gray-600">Withdraw money to
                                                                your bank account per transaction under $50,000
                                                                budget</span>
                                                        </span>
                                                        <!--end::Info-->
                                                    </label>
                                                    <!--end::Option-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-md-6 col-lg-12 col-xxl-6">
                                                    <!--begin::Option-->
                                                    <label
                                                        class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6"
                                                        data-kt-button="true">
                                                        <!--begin::Radio-->
                                                        <span
                                                            class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                            <input class="form-check-input" type="radio"
                                                                name="budget_usage" value="2" />
                                                        </span>
                                                        <!--end::Radio-->
                                                        <!--begin::Info-->
                                                        <span class="ms-5">
                                                            <span class="fs-4 fw-bold text-gray-800 mb-2 d-block">Extreme
                                                                Usage</span>
                                                            <span class="fw-semibold fs-7 text-gray-600">Withdraw money to
                                                                your bank account per transaction under $50,000
                                                                budget</span>
                                                        </span>
                                                        <!--end::Info-->
                                                    </label>
                                                    <!--end::Option-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-15">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Label-->
                                                <div class="me-5">
                                                    <label class="fs-6 fw-semibold">Allow Changes in Budget</label>
                                                    <div class="fs-7 fw-semibold text-muted">If you need more info, please
                                                        check budget planning</div>
                                                </div>
                                                <!--end::Label-->
                                                <!--begin::Switch-->
                                                <label class="form-check form-switch form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1"
                                                        name="budget_allow" checked="checked" />
                                                    <span class="form-check-label fw-semibold text-muted">Allowed</span>
                                                </label>
                                                <!--end::Switch-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex flex-stack">
                                            <button type="button" class="btn btn-lg btn-light me-3"
                                                data-kt-element="budget-previous">Project Settings</button>
                                            <button type="button" class="btn btn-lg btn-primary"
                                                data-kt-element="budget-next">
                                                <span class="indicator-label">Build Team</span>
                                                <span class="indicator-progress">Please wait...
                                                    <span
                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Budget-->
                                <!--begin::Team-->
                                <div data-kt-stepper-element="content">
                                    <!--begin::Wrapper-->
                                    <div class="w-100">
                                        <!--begin::Heading-->
                                        <div class="pb-12">
                                            <!--begin::Title-->
                                            <h1 class="fw-bold text-gray-900">Build a Team</h1>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="text-muted fw-semibold fs-4">If you need more info, please check
                                                <a href="#" class="link-primary">Project Guidelines</a>
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Input group-->
                                        <div class="mb-8">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold mb-2">Invite Teammates</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid"
                                                placeholder="Add project memnbers by name or email.."
                                                name="invite_teammates" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-8">
                                            <!--begin::Label-->
                                            <div class="fs-6 fw-semibold mb-2">Team Members</div>
                                            <!--end::Label-->
                                            <!--begin::Users-->
                                            <div class="mh-300px scroll-y me-n7 pe-7">
                                                <!--begin::User-->
                                                <div
                                                    class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#"
                                                                class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                                                Smith</a>
                                                            <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2" selected="selected">Owner</option>
                                                            <option value="3">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <div
                                                    class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span
                                                                class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#"
                                                                class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody
                                                                Macy</a>
                                                            <div class="fw-semibold text-muted">melody@altbox.com</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true">
                                                            <option value="1" selected="selected">Guest</option>
                                                            <option value="2">Owner</option>
                                                            <option value="3">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <div
                                                    class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#"
                                                                class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max
                                                                Smith</a>
                                                            <div class="fw-semibold text-muted">max@kt.com</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2">Owner</option>
                                                            <option value="3" selected="selected">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <div
                                                    class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#"
                                                                class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean
                                                                Bean</a>
                                                            <div class="fw-semibold text-muted">sean@dellito.com</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2" selected="selected">Owner</option>
                                                            <option value="3">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <div
                                                    class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#"
                                                                class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian
                                                                Cox</a>
                                                            <div class="fw-semibold text-muted">brian@exchange.com</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2">Owner</option>
                                                            <option value="3" selected="selected">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <div
                                                    class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span
                                                                class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#"
                                                                class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela
                                                                Collins</a>
                                                            <div class="fw-semibold text-muted">mik@pex.com</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2" selected="selected">Owner</option>
                                                            <option value="3">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <div
                                                    class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/300-9.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#"
                                                                class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis
                                                                Mitcham</a>
                                                            <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2">Owner</option>
                                                            <option value="3" selected="selected">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <div
                                                    class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span
                                                                class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#"
                                                                class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia
                                                                Wild</a>
                                                            <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2" selected="selected">Owner</option>
                                                            <option value="3">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <div
                                                    class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span
                                                                class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#"
                                                                class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil
                                                                Owen</a>
                                                            <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true">
                                                            <option value="1" selected="selected">Guest</option>
                                                            <option value="2">Owner</option>
                                                            <option value="3">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <div
                                                    class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/300-23.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#"
                                                                class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan
                                                                Wilson</a>
                                                            <div class="fw-semibold text-muted">dam@consilting.com</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2">Owner</option>
                                                            <option value="3" selected="selected">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <div
                                                    class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span
                                                                class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#"
                                                                class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                                                Bold</a>
                                                            <div class="fw-semibold text-muted">emma@intenso.com</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2" selected="selected">Owner</option>
                                                            <option value="3">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <div
                                                    class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#"
                                                                class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana
                                                                Crown</a>
                                                            <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true">
                                                            <option value="1" selected="selected">Guest</option>
                                                            <option value="2">Owner</option>
                                                            <option value="3">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <div
                                                    class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span
                                                                class="symbol-label bg-light-info text-info fw-semibold">A</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#"
                                                                class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert
                                                                Doe</a>
                                                            <div class="fw-semibold text-muted">robert@benko.com</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2">Owner</option>
                                                            <option value="3" selected="selected">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <div
                                                    class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/300-13.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#"
                                                                class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John
                                                                Miller</a>
                                                            <div class="fw-semibold text-muted">miller@mapple.com</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2">Owner</option>
                                                            <option value="3" selected="selected">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <div
                                                    class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span
                                                                class="symbol-label bg-light-success text-success fw-semibold">L</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#"
                                                                class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy
                                                                Kunic</a>
                                                            <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2" selected="selected">Owner</option>
                                                            <option value="3">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <div
                                                    class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/300-21.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#"
                                                                class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan
                                                                Wilder</a>
                                                            <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true">
                                                            <option value="1" selected="selected">Guest</option>
                                                            <option value="2">Owner</option>
                                                            <option value="3">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#"
                                                                class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana
                                                                Crown</a>
                                                            <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2">Owner</option>
                                                            <option value="3" selected="selected">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Users-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Notice-->
                                        <div class="d-flex flex-stack mb-15">
                                            <!--begin::Label-->
                                            <div class="me-5 fw-semibold">
                                                <label class="fs-6">Adding Users by Team Members</label>
                                                <div class="fs-7 text-muted">If you need more info, please check budget
                                                    planning</div>
                                            </div>
                                            <!--end::Label-->
                                            <!--begin::Switch-->
                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    checked="checked" />
                                            </label>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Notice-->
                                        <!--begin::Actions-->
                                        <div class="d-flex flex-stack">
                                            <button type="button" class="btn btn-lg btn-light me-3"
                                                data-kt-element="team-previous">Budget</button>
                                            <button type="button" class="btn btn-lg btn-primary"
                                                data-kt-element="team-next">
                                                <span class="indicator-label">Set Target</span>
                                                <span class="indicator-progress">Please wait...
                                                    <span
                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Team-->
                                <!--begin::Targets-->
                                <div data-kt-stepper-element="content">
                                    <!--begin::Wrapper-->
                                    <div class="w-100">
                                        <!--begin::Heading-->
                                        <div class="pb-12">
                                            <!--begin::Title-->
                                            <h1 class="fw-bold text-gray-900">Set First Target</h1>
                                            <!--end::Title-->
                                            <!--begin::Title-->
                                            <div class="text-muted fw-semibold fs-4">If you need more info, please check
                                                <a href="#" class="link-primary">Project Guidelines</a>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-8">
                                            <label class="fs-6 fw-semibold mb-2">Target Title</label>
                                            <input type="text" class="form-control form-control-solid"
                                                placeholder="Enter Target Title" name="Project Launch" />
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row g-9 mb-8">
                                            <!--begin::Col-->
                                            <div class="col-md-6 fv-row">
                                                <label class="required fs-6 fw-semibold mb-2">Assign</label>
                                                <select class="form-select form-select-solid" data-control="select2"
                                                    data-hide-search="true" data-placeholder="Select a Team Member"
                                                    name="target_assign">
                                                    <option></option>
                                                    <option value="1">Karina Clark</option>
                                                    <option value="2" selected="selected">Robert Doe</option>
                                                    <option value="3">Niel Owen</option>
                                                    <option value="4">Olivia Wild</option>
                                                    <option value="5">Sean Bean</option>
                                                </select>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-md-6 fv-row">
                                                <label class="required fs-6 fw-semibold mb-2">Due Date</label>
                                                <div class="position-relative d-flex align-items-center">
                                                    <!--begin::Icon-->
                                                    <i class="ki-duotone ki-calendar-8 fs-2 position-absolute mx-4">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                        <span class="path5"></span>
                                                        <span class="path6"></span>
                                                    </i>
                                                    <!--end::Icon-->
                                                    <!--begin::Datepicker-->
                                                    <input class="form-control form-control-solid ps-12"
                                                        placeholder="Pick date range" name="target_due_date" />
                                                    <!--end::Datepicker-->
                                                </div>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-8">
                                            <label class="fs-6 fw-semibold mb-2">Target Details</label>
                                            <textarea class="form-control form-control-solid" rows="2" name="target_details"
                                                placeholder="Type Target Details">Experience share market at your fingertips with TICK PRO stock investment mobile trading app</textarea>
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-8">
                                            <label class="required fs-6 fw-semibold mb-2">Tags</label>
                                            <input class="form-control form-control-solid" value="Important, Urgent"
                                                name="target_tags" />
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-8">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Label-->
                                                <div class="me-5">
                                                    <label class="fs-6 fw-semibold">Allow Changes in Budget</label>
                                                    <div class="fs-7 fw-semibold text-muted">If you need more info, please
                                                        check budget planning</div>
                                                </div>
                                                <!--end::Label-->
                                                <!--begin::Switch-->
                                                <label class="form-check form-switch form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1"
                                                        name="target_allow" checked="checked" />
                                                    <span class="form-check-label fw-semibold text-muted">Allowed</span>
                                                </label>
                                                <!--end::Switch-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-15">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Label-->
                                                <div class="me-5">
                                                    <label class="fs-6 fw-semibold">Notifications</label>
                                                    <div class="fs-7 fw-semibold text-muted">Allow Notifications by Phone
                                                        or Email</div>
                                                </div>
                                                <!--end::Label-->
                                                <!--begin::Checkboxes-->
                                                <div class="d-flex">
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-10">
                                                        <!--begin::Input-->
                                                        <input class="form-check-input h-20px w-20px" type="checkbox"
                                                            value="email" name="target_notifications[]" />
                                                        <!--end::Input-->
                                                        <!--begin::Label-->
                                                        <span class="form-check-label fw-semibold">Email</span>
                                                        <!--end::Label-->
                                                    </label>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid">
                                                        <!--begin::Input-->
                                                        <input class="form-check-input h-20px w-20px" type="checkbox"
                                                            value="phone" checked="checked"
                                                            name="target_notifications[]" />
                                                        <!--end::Input-->
                                                        <!--begin::Label-->
                                                        <span class="form-check-label fw-semibold">Phone</span>
                                                        <!--end::Label-->
                                                    </label>
                                                    <!--end::Checkbox-->
                                                </div>
                                                <!--end::Checkboxes-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex flex-stack">
                                            <button type="button" class="btn btn-lg btn-light me-3"
                                                data-kt-element="targets-previous">Build a Team</button>
                                            <button type="button" class="btn btn-lg btn-primary"
                                                data-kt-element="targets-next">
                                                <span class="indicator-label">Upload Files</span>
                                                <span class="indicator-progress">Please wait...
                                                    <span
                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Targets-->
                                <!--begin::Files-->
                                <div data-kt-stepper-element="content">
                                    <!--begin::Wrapper-->
                                    <div class="w-100">
                                        <!--begin::Heading-->
                                        <div class="pb-10 pb-lg-12">
                                            <!--begin::Title-->
                                            <h1 class="fw-bold text-gray-900">Upload Files</h1>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="text-muted fw-semibold fs-4">If you need more info, please check
                                                <a href="#" class="link-primary">Project Guidelines</a>
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-8">
                                            <!--begin::Dropzone-->
                                            <div class="dropzone" id="kt_modal_create_project_files_upload">
                                                <!--begin::Message-->
                                                <div class="dz-message needsclick">
                                                    <!--begin::Icon-->
                                                    <i class="ki-duotone ki-file-up fs-3hx text-primary">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <div class="ms-4">
                                                        <h3 class="dfs-3 fw-bold text-gray-900 mb-1">Drop files here or
                                                            click to upload.</h3>
                                                        <span class="fw-semibold fs-4 text-muted">Upload up to 10
                                                            files</span>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                            </div>
                                            <!--end::Dropzone-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-8">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold mb-2">Uploaded File</label>
                                            <!--End::Label-->
                                            <!--begin::Files-->
                                            <div class="mh-300px scroll-y me-n7 pe-7">
                                                <!--begin::File-->
                                                <div
                                                    class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px">
                                                            <img src="assets/media/svg/files/pdf.svg" alt="icon" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-6">
                                                            <a href="#"
                                                                class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Avionica
                                                                Technical Requirements</a>
                                                            <div class="fw-semibold text-muted">230kb</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--begin::Menu-->
                                                    <div class="min-w-100px">
                                                        <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true"
                                                            data-placeholder="Edit">
                                                            <option></option>
                                                            <option value="1">Remove</option>
                                                            <option value="2">Modify</option>
                                                            <option value="3">Select</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Menu-->
                                                </div>
                                                <!--end::File-->
                                                <!--begin::File-->
                                                <div
                                                    class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px">
                                                            <img src="assets/media/svg/files/doc.svg" alt="icon" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-6">
                                                            <a href="#"
                                                                class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">9
                                                                Degree CURD draftplan</a>
                                                            <div class="fw-semibold text-muted">3.6mb</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--begin::Menu-->
                                                    <div class="min-w-100px">
                                                        <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true"
                                                            data-placeholder="Edit">
                                                            <option></option>
                                                            <option value="1">Remove</option>
                                                            <option value="2">Modify</option>
                                                            <option value="3">Select</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Menu-->
                                                </div>
                                                <!--end::File-->
                                                <!--begin::File-->
                                                <div
                                                    class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px">
                                                            <img src="assets/media/svg/files/css.svg" alt="icon" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-6">
                                                            <a href="#"
                                                                class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">User
                                                                CRUD Styles</a>
                                                            <div class="fw-semibold text-muted">85kb</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--begin::Menu-->
                                                    <div class="min-w-100px">
                                                        <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true"
                                                            data-placeholder="Edit">
                                                            <option></option>
                                                            <option value="1">Remove</option>
                                                            <option value="2">Modify</option>
                                                            <option value="3">Select</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Menu-->
                                                </div>
                                                <!--end::File-->
                                                <!--begin::File-->
                                                <div
                                                    class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px">
                                                            <img src="assets/media/svg/files/ai.svg" alt="icon" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-6">
                                                            <a href="#"
                                                                class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Design
                                                                Initial Logo</a>
                                                            <div class="fw-semibold text-muted">40kb</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--begin::Menu-->
                                                    <div class="min-w-100px">
                                                        <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true"
                                                            data-placeholder="Edit">
                                                            <option></option>
                                                            <option value="1">Remove</option>
                                                            <option value="2">Modify</option>
                                                            <option value="3">Select</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Menu-->
                                                </div>
                                                <!--end::File-->
                                                <!--begin::File-->
                                                <div class="d-flex flex-stack py-4">
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px">
                                                            <img src="assets/media/svg/files/tif.svg" alt="icon" />
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-6">
                                                            <a href="#"
                                                                class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Tower
                                                                Hill Bilboard</a>
                                                            <div class="fw-semibold text-muted">27mb</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--begin::Menu-->
                                                    <div class="min-w-100px">
                                                        <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true"
                                                            data-placeholder="Edit">
                                                            <option></option>
                                                            <option value="1">Remove</option>
                                                            <option value="2">Modify</option>
                                                            <option value="3">Select</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Menu-->
                                                </div>
                                                <!--end::File-->
                                            </div>
                                            <!--end::Files-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-8">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Label-->
                                                <div class="me-5">
                                                    <label class="fs-6 fw-semibold">Allow Changes in Budget</label>
                                                    <div class="fs-7 fw-semibold text-muted">If you need more info, please
                                                        check budget planning</div>
                                                </div>
                                                <!--end::Label-->
                                                <!--begin::Switch-->
                                                <label class="form-check form-switch form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1"
                                                        name="target_allow" checked="checked" />
                                                    <span class="form-check-label fw-semibold text-muted">Allowed</span>
                                                </label>
                                                <!--end::Switch-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex flex-stack">
                                            <button type="button" class="btn btn-lg btn-light me-3"
                                                data-kt-element="files-previous">Set First Target</button>
                                            <button type="button" class="btn btn-lg btn-primary"
                                                data-kt-element="files-next">
                                                <span class="indicator-label">Complete</span>
                                                <span class="indicator-progress">Please wait...
                                                    <span
                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Files-->
                                <!--begin::Complete-->
                                <div data-kt-stepper-element="content">
                                    <!--begin::Wrapper-->
                                    <div class="w-100">
                                        <!--begin::Heading-->
                                        <div class="pb-12 text-center">
                                            <!--begin::Title-->
                                            <h1 class="fw-bold text-gray-900">Project Created!</h1>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="text-muted fw-semibold fs-4">If you need more info, please check
                                                how to create project</div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Actions-->
                                        <div class="d-flex flex-center pb-20">
                                            <button type="button" class="btn btn-lg btn-light me-3"
                                                data-kt-element="complete-start">Create New Project</button>
                                            <a href="" class="btn btn-lg btn-primary" data-bs-toggle="tooltip"
                                                title="Coming Soon">View Project</a>
                                        </div>
                                        <!--end::Actions-->
                                        <!--begin::Illustration-->
                                        <div class="text-center px-4">
                                            <img src="assets/media/illustrations/sketchy-1/9.png" alt=""
                                                class="mww-100 mh-350px" />
                                        </div>
                                        <!--end::Illustration-->
                                    </div>
                                </div>
                                <!--end::Complete-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--begin::Container-->
                    </div>
                    <!--end::Stepper-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Create Project-->
    <!--begin::Modal - New Target-->
    <div class="modal fade" id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                    <!--begin:Form-->
                    <form id="kt_modal_new_target_form" class="form" action="#">
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3">Set First Target</h1>
                            <!--end::Title-->
                            <!--begin::Description-->
                            <div class="text-muted fw-semibold fs-5">If you need more info, please check
                                <a href="#" class="fw-bold link-primary">Project Guidelines</a>.
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Target Title</span>
                                <span class="ms-1" data-bs-toggle="tooltip"
                                    title="Specify a target name for future usage and reference">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid"
                                placeholder="Enter Target Title" name="target_title" />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row g-9 mb-8">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <label class="required fs-6 fw-semibold mb-2">Assign</label>
                                <select class="form-select form-select-solid" data-control="select2"
                                    data-hide-search="true" data-placeholder="Select a Team Member"
                                    name="target_assign">
                                    <option value="">Select user...</option>
                                    <option value="1">Karina Clark</option>
                                    <option value="2">Robert Doe</option>
                                    <option value="3">Niel Owen</option>
                                    <option value="4">Olivia Wild</option>
                                    <option value="5">Sean Bean</option>
                                </select>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <label class="required fs-6 fw-semibold mb-2">Due Date</label>
                                <!--begin::Input-->
                                <div class="position-relative d-flex align-items-center">
                                    <!--begin::Icon-->
                                    <i class="ki-duotone ki-calendar-8 fs-2 position-absolute mx-4">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                        <span class="path6"></span>
                                    </i>
                                    <!--end::Icon-->
                                    <!--begin::Datepicker-->
                                    <input class="form-control form-control-solid ps-12" placeholder="Select a date"
                                        name="due_date" />
                                    <!--end::Datepicker-->
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8">
                            <label class="fs-6 fw-semibold mb-2">Target Details</label>
                            <textarea class="form-control form-control-solid" rows="3" name="target_details"
                                placeholder="Type Target Details"></textarea>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Tags</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Specify a target priorty">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->
                            <input class="form-control form-control-solid" value="Important, Urgent" name="tags" />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-stack mb-8">
                            <!--begin::Label-->
                            <div class="me-5">
                                <label class="fs-6 fw-semibold">Adding Users by Team Members</label>
                                <div class="fs-7 fw-semibold text-muted">If you need more info, please check budget
                                    planning</div>
                            </div>
                            <!--end::Label-->
                            <!--begin::Switch-->
                            <label class="form-check form-switch form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                <span class="form-check-label fw-semibold text-muted">Allowed</span>
                            </label>
                            <!--end::Switch-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-15 fv-row">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack">
                                <!--begin::Label-->
                                <div class="fw-semibold me-5">
                                    <label class="fs-6">Notifications</label>
                                    <div class="fs-7 text-muted">Allow Notifications by Phone or Email</div>
                                </div>
                                <!--end::Label-->
                                <!--begin::Checkboxes-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Checkbox-->
                                    <label class="form-check form-check-custom form-check-solid me-10">
                                        <input class="form-check-input h-20px w-20px" type="checkbox"
                                            name="communication[]" value="email" checked="checked" />
                                        <span class="form-check-label fw-semibold">Email</span>
                                    </label>
                                    <!--end::Checkbox-->
                                    <!--begin::Checkbox-->
                                    <label class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input h-20px w-20px" type="checkbox"
                                            name="communication[]" value="phone" />
                                        <span class="form-check-label fw-semibold">Phone</span>
                                    </label>
                                    <!--end::Checkbox-->
                                </div>
                                <!--end::Checkboxes-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="text-center">
                            <button type="reset" id="kt_modal_new_target_cancel"
                                class="btn btn-light me-3">Cancel</button>
                            <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end:Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - New Target-->
    <!--begin::Modal - Offer A Deal-->
    <div class="modal fade" id="kt_modal_offer_a_deal" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-1000px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header py-7 d-flex justify-content-between">
                    <!--begin::Modal title-->
                    <h2>Offer a Deal</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y m-5">
                    <!--begin::Stepper-->
                    <div class="stepper stepper-links d-flex flex-column" id="kt_modal_offer_a_deal_stepper">
                        <!--begin::Nav-->
                        <div class="stepper-nav justify-content-center py-2">
                            <!--begin::Step 1-->
                            <div class="stepper-item me-5 me-md-15 current" data-kt-stepper-element="nav">
                                <h3 class="stepper-title">Deal Type</h3>
                            </div>
                            <!--end::Step 1-->
                            <!--begin::Step 2-->
                            <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                                <h3 class="stepper-title">Deal Details</h3>
                            </div>
                            <!--end::Step 2-->
                            <!--begin::Step 3-->
                            <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                                <h3 class="stepper-title">Finance Settings</h3>
                            </div>
                            <!--end::Step 3-->
                            <!--begin::Step 4-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <h3 class="stepper-title">Completed</h3>
                            </div>
                            <!--end::Step 4-->
                        </div>
                        <!--end::Nav-->
                        <!--begin::Form-->
                        <form class="mx-auto mw-500px w-100 pt-15 pb-10" novalidate="novalidate"
                            id="kt_modal_offer_a_deal_form">
                            <!--begin::Type-->
                            <div class="current" data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="mb-13">
                                        <!--begin::Title-->
                                        <h2 class="mb-3">Deal Type</h2>
                                        <!--end::Title-->
                                        <!--begin::Description-->
                                        <div class="text-muted fw-semibold fs-5">If you need more info, please check out
                                            <a href="#" class="link-primary fw-bold">FAQ Page</a>.
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-15" data-kt-buttons="true">
                                        <!--begin::Option-->
                                        <label
                                            class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 mb-6 active">
                                            <!--begin::Input-->
                                            <input class="btn-check" type="radio" checked="checked"
                                                name="offer_type" value="1" />
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <span class="d-flex">
                                                <!--begin::Icon-->
                                                <i class="ki-duotone ki-profile-circle fs-3hx">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                                <!--end::Icon-->
                                                <!--begin::Info-->
                                                <span class="ms-4">
                                                    <span class="fs-3 fw-bold text-gray-900 mb-2 d-block">Personal
                                                        Deal</span>
                                                    <span class="fw-semibold fs-4 text-muted">If you need more info,
                                                        please check it out</span>
                                                </span>
                                                <!--end::Info-->
                                            </span>
                                            <!--end::Label-->
                                        </label>
                                        <!--end::Option-->
                                        <!--begin::Option-->
                                        <label
                                            class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6">
                                            <!--begin::Input-->
                                            <input class="btn-check" type="radio" name="offer_type"
                                                value="2" />
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <span class="d-flex">
                                                <!--begin::Icon-->
                                                <i class="ki-duotone ki-element-11 fs-3hx">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                </i>
                                                <!--end::Icon-->
                                                <!--begin::Info-->
                                                <span class="ms-4">
                                                    <span class="fs-3 fw-bold text-gray-900 mb-2 d-block">Corporate
                                                        Deal</span>
                                                    <span class="fw-semibold fs-4 text-muted">Create corporate account to
                                                        manage users</span>
                                                </span>
                                                <!--end::Info-->
                                            </span>
                                            <!--end::Label-->
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="button" class="btn btn-lg btn-primary"
                                            data-kt-element="type-next">
                                            <span class="indicator-label">Offer Details</span>
                                            <span class="indicator-progress">Please wait...
                                                <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Type-->
                            <!--begin::Details-->
                            <div data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="mb-13">
                                        <!--begin::Title-->
                                        <h2 class="mb-3">Deal Details</h2>
                                        <!--end::Title-->
                                        <!--begin::Description-->
                                        <div class="text-muted fw-semibold fs-5">If you need more info, please check out
                                            <a href="#" class="link-primary fw-bold">FAQ Page</a>.
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-8">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-semibold mb-2">Customer</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select class="form-select form-select-solid" data-control="select2"
                                            data-placeholder="Select an option" name="details_customer">
                                            <option></option>
                                            <option value="1" selected="selected">Keenthemes</option>
                                            <option value="2">CRM App</option>
                                        </select>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-8">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-semibold mb-2">Deal Title</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid"
                                            placeholder="Enter Deal Title" name="details_title"
                                            value="Marketing Campaign" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-8">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-2">Deal Description</label>
                                        <!--end::Label-->
                                        <!--begin::Label-->
                                        <textarea class="form-control form-control-solid" rows="3" placeholder="Enter Deal Description"
                                            name="details_description">Experience share market at your fingertips with TICK PRO stock investment mobile trading app</textarea>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-8">
                                        <label class="required fs-6 fw-semibold mb-2">Activation Date</label>
                                        <div class="position-relative d-flex align-items-center">
                                            <!--begin::Icon-->
                                            <i class="ki-duotone ki-calendar-8 fs-2 position-absolute mx-4">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                                <span class="path6"></span>
                                            </i>
                                            <!--end::Icon-->
                                            <!--begin::Datepicker-->
                                            <input class="form-control form-control-solid ps-12"
                                                placeholder="Pick date range" name="details_activation_date" />
                                            <!--end::Datepicker-->
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-15">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Label-->
                                            <div class="me-5">
                                                <label class="required fs-6 fw-semibold">Notifications</label>
                                                <div class="fs-7 fw-semibold text-muted">Allow Notifications by Phone or
                                                    Email</div>
                                            </div>
                                            <!--end::Label-->
                                            <!--begin::Checkboxes-->
                                            <div class="d-flex">
                                                <!--begin::Checkbox-->
                                                <label class="form-check form-check-custom form-check-solid me-10">
                                                    <!--begin::Input-->
                                                    <input class="form-check-input h-20px w-20px" type="checkbox"
                                                        value="email" name="details_notifications[]" />
                                                    <!--end::Input-->
                                                    <!--begin::Label-->
                                                    <span class="form-check-label fw-semibold">Email</span>
                                                    <!--end::Label-->
                                                </label>
                                                <!--end::Checkbox-->
                                                <!--begin::Checkbox-->
                                                <label class="form-check form-check-custom form-check-solid">
                                                    <!--begin::Input-->
                                                    <input class="form-check-input h-20px w-20px" type="checkbox"
                                                        value="phone" checked="checked"
                                                        name="details_notifications[]" />
                                                    <!--end::Input-->
                                                    <!--begin::Label-->
                                                    <span class="form-check-label fw-semibold">Phone</span>
                                                    <!--end::Label-->
                                                </label>
                                                <!--end::Checkbox-->
                                            </div>
                                            <!--end::Checkboxes-->
                                        </div>
                                        <!--begin::Wrapper-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex flex-stack">
                                        <button type="button" class="btn btn-lg btn-light me-3"
                                            data-kt-element="details-previous">Deal Type</button>
                                        <button type="button" class="btn btn-lg btn-primary"
                                            data-kt-element="details-next">
                                            <span class="indicator-label">Financing</span>
                                            <span class="indicator-progress">Please wait...
                                                <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Budget-->
                            <div data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="mb-13">
                                        <!--begin::Title-->
                                        <h2 class="mb-3">Finance</h2>
                                        <!--end::Title-->
                                        <!--begin::Description-->
                                        <div class="text-muted fw-semibold fs-5">If you need more info, please check out
                                            <a href="#" class="link-primary fw-bold">FAQ Page</a>.
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-8">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required">Setup Budget</span>
                                            <span class="lh-1 ms-1" data-bs-toggle="popover" data-bs-trigger="hover"
                                                data-bs-html="true"
                                                data-bs-content="&lt;div class=&#039;p-4 rounded bg-light&#039;&gt; &lt;div class=&#039;d-flex flex-stack text-muted mb-4&#039;&gt; &lt;i class=&quot;ki-duotone ki-bank fs-3 me-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt; &lt;div class=&#039;fw-bold&#039;&gt;INCBANK **** 1245 STATEMENT&lt;/div&gt; &lt;/div&gt; &lt;div class=&#039;d-flex flex-stack fw-semibold text-gray-600&#039;&gt; &lt;div&gt;Amount&lt;/div&gt; &lt;div&gt;Transaction&lt;/div&gt; &lt;/div&gt; &lt;div class=&#039;separator separator-dashed my-2&#039;&gt;&lt;/div&gt; &lt;div class=&#039;d-flex flex-stack text-gray-900 fw-bold mb-2&#039;&gt; &lt;div&gt;USD345.00&lt;/div&gt; &lt;div&gt;KEENTHEMES*&lt;/div&gt; &lt;/div&gt; &lt;div class=&#039;d-flex flex-stack text-muted mb-2&#039;&gt; &lt;div&gt;USD75.00&lt;/div&gt; &lt;div&gt;Hosting fee&lt;/div&gt; &lt;/div&gt; &lt;div class=&#039;d-flex flex-stack text-muted&#039;&gt; &lt;div&gt;USD3,950.00&lt;/div&gt; &lt;div&gt;Payrol&lt;/div&gt; &lt;/div&gt; &lt;/div&gt;">
                                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Dialer-->
                                        <div class="position-relative w-lg-250px" id="kt_modal_finance_setup"
                                            data-kt-dialer="true" data-kt-dialer-min="50" data-kt-dialer-max="50000"
                                            data-kt-dialer-step="100" data-kt-dialer-prefix="$"
                                            data-kt-dialer-decimals="2">
                                            <!--begin::Decrease control-->
                                            <button type="button"
                                                class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0"
                                                data-kt-dialer-control="decrease">
                                                <i class="ki-duotone ki-minus-circle fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </button>
                                            <!--end::Decrease control-->
                                            <!--begin::Input control-->
                                            <input type="text" class="form-control form-control-solid border-0 ps-12"
                                                data-kt-dialer-control="input" placeholder="Amount"
                                                name="finance_setup" readonly="readonly" value="$50" />
                                            <!--end::Input control-->
                                            <!--begin::Increase control-->
                                            <button type="button"
                                                class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0"
                                                data-kt-dialer-control="increase">
                                                <i class="ki-duotone ki-plus-circle fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </button>
                                            <!--end::Increase control-->
                                        </div>
                                        <!--end::Dialer-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-8">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-2">Budget Usage</label>
                                        <!--end::Label-->
                                        <!--begin::Row-->
                                        <div class="row g-9" data-kt-buttons="true"
                                            data-kt-buttons-target="[data-kt-button='true']">
                                            <!--begin::Col-->
                                            <div class="col-md-6 col-lg-12 col-xxl-6">
                                                <!--begin::Option-->
                                                <label
                                                    class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6"
                                                    data-kt-button="true">
                                                    <!--begin::Radio-->
                                                    <span
                                                        class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                        <input class="form-check-input" type="radio"
                                                            name="finance_usage" value="1" checked="checked" />
                                                    </span>
                                                    <!--end::Radio-->
                                                    <!--begin::Info-->
                                                    <span class="ms-5">
                                                        <span class="fs-4 fw-bold text-gray-800 mb-2 d-block">Precise
                                                            Usage</span>
                                                        <span class="fw-semibold fs-7 text-gray-600">Withdraw money to
                                                            your bank account per transaction under $50,000 budget</span>
                                                    </span>
                                                    <!--end::Info-->
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-md-6 col-lg-12 col-xxl-6">
                                                <!--begin::Option-->
                                                <label
                                                    class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6"
                                                    data-kt-button="true">
                                                    <!--begin::Radio-->
                                                    <span
                                                        class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                        <input class="form-check-input" type="radio"
                                                            name="finance_usage" value="2" />
                                                    </span>
                                                    <!--end::Radio-->
                                                    <!--begin::Info-->
                                                    <span class="ms-5">
                                                        <span class="fs-4 fw-bold text-gray-800 mb-2 d-block">Extreme
                                                            Usage</span>
                                                        <span class="fw-semibold fs-7 text-gray-600">Withdraw money to
                                                            your bank account per transaction under $50,000 budget</span>
                                                    </span>
                                                    <!--end::Info-->
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-15">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Label-->
                                            <div class="me-5">
                                                <label class="fs-6 fw-semibold">Allow Changes in Budget</label>
                                                <div class="fs-7 fw-semibold text-muted">If you need more info, please
                                                    check budget planning</div>
                                            </div>
                                            <!--end::Label-->
                                            <!--begin::Switch-->
                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1"
                                                    name="finance_allow" checked="checked" />
                                                <span class="form-check-label fw-semibold text-muted">Allowed</span>
                                            </label>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex flex-stack">
                                        <button type="button" class="btn btn-lg btn-light me-3"
                                            data-kt-element="finance-previous">Project Settings</button>
                                        <button type="button" class="btn btn-lg btn-primary"
                                            data-kt-element="finance-next">
                                            <span class="indicator-label">Build Team</span>
                                            <span class="indicator-progress">Please wait...
                                                <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Budget-->
                            <!--begin::Complete-->
                            <div data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="mb-13">
                                        <!--begin::Title-->
                                        <h2 class="mb-3">Deal Created!</h2>
                                        <!--end::Title-->
                                        <!--begin::Description-->
                                        <div class="text-muted fw-semibold fs-5">If you need more info, please check out
                                            <a href="#" class="link-primary fw-bold">FAQ Page</a>.
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Actions-->
                                    <div class="d-flex flex-center pb-20">
                                        <button type="button" class="btn btn-lg btn-light me-3"
                                            data-kt-element="complete-start">Create New Deal</button>
                                        <a href="#" class="btn btn-lg btn-primary" data-bs-toggle="tooltip"
                                            title="Coming Soon">View Deal</a>
                                    </div>
                                    <!--end::Actions-->
                                    <!--begin::Illustration-->
                                    <div class="text-center px-4">
                                        <img src="assets/media/illustrations/sketchy-1/20.png" alt=""
                                            class="mw-100 mh-300px" />
                                    </div>
                                    <!--end::Illustration-->
                                </div>
                            </div>
                            <!--end::Complete-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Stepper-->
                </div>
                <!--begin::Modal body-->
            </div>
        </div>
    </div>
    <!--end::Modal - Offer A Deal-->
    <!--end::Modals-->
    <!--begin::Javascript-->

    <!--begin::Global Javascript Bundle(mandatory for all pages)-->


    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->







    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->


















    <!--end::Custom Javascript-->
    <!--end::Javascript-->
@endsection

@section('page_scripts')
    <script src="assets/plugins/custom/fslightbox/fslightbox.bundle.js"></script>
    <script src="assets/plugins/custom/typedjs/typedjs.bundle.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="assets/js/widgets.bundle.js"></script>
    <script src="assets/js/custom/widgets.js"></script>
    <script src="assets/js/custom/apps/chat/chat.js"></script>
    <script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="assets/js/custom/utilities/modals/create-project/type.js"></script>
    <script src="assets/js/custom/utilities/modals/create-project/budget.js"></script>
    <script src="assets/js/custom/utilities/modals/create-project/settings.js"></script>
    <script src="assets/js/custom/utilities/modals/create-project/team.js"></script>
    <script src="assets/js/custom/utilities/modals/create-project/targets.js"></script>
    <script src="assets/js/custom/utilities/modals/create-project/files.js"></script>
    <script src="assets/js/custom/utilities/modals/create-project/complete.js"></script>
    <script src="assets/js/custom/utilities/modals/create-project/main.js"></script>
    <script src="assets/js/custom/utilities/modals/new-target.js"></script>
    <script src="assets/js/custom/utilities/modals/offer-a-deal/type.js"></script>
    <script src="assets/js/custom/utilities/modals/offer-a-deal/details.js"></script>
    <script src="assets/js/custom/utilities/modals/offer-a-deal/finance.js"></script>
    <script src="assets/js/custom/utilities/modals/offer-a-deal/complete.js"></script>
    <script src="assets/js/custom/utilities/modals/offer-a-deal/main.js"></script>
@endsection
