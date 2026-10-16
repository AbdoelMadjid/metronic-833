@extends('layouts.metronic')

@section('body_attributes')
    id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true"
    data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-minimize="on" data-kt-app-sidebar-hoverable="true"
    data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true"
    data-kt-app-toolbar-enabled="true" class="app-default"
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
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">POS System
                </h1>
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
                <a href="{{ route('metronic.apps.ecommerce.sales.listing') }}"
                    class="btn btn-sm fw-bold btn-secondary">Recent Orders</a>
                <!--end::Secondary button-->
                <!--begin::Primary button-->
                <a href="{{ route('metronic.apps.ecommerce.catalog.add_product') }}"
                    class="btn btn-sm fw-bold btn-primary">New Product</a>
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
            <!--begin::Layout-->
            <div class="d-flex flex-column flex-xl-row">
                <!--begin::Content-->
                <div class="d-flex flex-row-fluid me-xl-9 mb-10 mb-xl-0">
                    <!--begin::Pos food-->
                    <div class="card card-flush card-p-0 bg-transparent border-0">
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Nav-->
                            <ul class="nav nav-pills d-flex justify-content-between nav-pills-custom gap-3 mb-6">
                                <!--begin::Item-->
                                <li class="nav-item mb-3 me-0">
                                    <!--begin::Nav link-->
                                    <a class="nav-link nav-link-border-solid btn btn-outline btn-flex btn-active-color-primary flex-column flex-stack pt-9 pb-7 page-bg show active"
                                        data-bs-toggle="pill" href="#kt_pos_food_content_1"
                                        style="width: 138px;height: 180px">
                                        <!--begin::Icon-->
                                        <div class="nav-icon mb-3">
                                            <!--begin::Food icon-->
                                            <img src="assets/media/svg/food-icons/spaghetti.svg" class="w-50px"
                                                alt="" />
                                            <!--end::Food icon-->
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Info-->
                                        <div class="">
                                            <span class="text-gray-800 fw-bold fs-2 d-block">Lunch</span>
                                            <span class="text-gray-500 fw-semibold fs-7">8 Options</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::Nav link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mb-3 me-0">
                                    <!--begin::Nav link-->
                                    <a class="nav-link nav-link-border-solid btn btn-outline btn-flex btn-active-color-primary flex-column flex-stack pt-9 pb-7 page-bg"
                                        data-bs-toggle="pill" href="#kt_pos_food_content_2"
                                        style="width: 138px;height: 180px">
                                        <!--begin::Icon-->
                                        <div class="nav-icon mb-3">
                                            <!--begin::Food icon-->
                                            <img src="assets/media/svg/food-icons/salad.svg" class="w-50px"
                                                alt="" />
                                            <!--end::Food icon-->
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Info-->
                                        <div class="">
                                            <span class="text-gray-800 fw-bold fs-2 d-block">Salad</span>
                                            <span class="text-gray-500 fw-semibold fs-7">14 Salads</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::Nav link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mb-3 me-0">
                                    <!--begin::Nav link-->
                                    <a class="nav-link nav-link-border-solid btn btn-outline btn-flex btn-active-color-primary flex-column flex-stack pt-9 pb-7 page-bg"
                                        data-bs-toggle="pill" href="#kt_pos_food_content_3"
                                        style="width: 138px;height: 180px">
                                        <!--begin::Icon-->
                                        <div class="nav-icon mb-3">
                                            <!--begin::Food icon-->
                                            <img src="assets/media/svg/food-icons/cheeseburger.svg" class="w-50px"
                                                alt="" />
                                            <!--end::Food icon-->
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Info-->
                                        <div class="">
                                            <span class="text-gray-800 fw-bold fs-2 d-block">Burger</span>
                                            <span class="text-gray-500 fw-semibold fs-7">5 Burgers</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::Nav link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mb-3 me-0">
                                    <!--begin::Nav link-->
                                    <a class="nav-link nav-link-border-solid btn btn-outline btn-flex btn-active-color-primary flex-column flex-stack pt-9 pb-7 page-bg"
                                        data-bs-toggle="pill" href="#kt_pos_food_content_4"
                                        style="width: 138px;height: 180px">
                                        <!--begin::Icon-->
                                        <div class="nav-icon mb-3">
                                            <!--begin::Food icon-->
                                            <img src="assets/media/svg/food-icons/coffee.svg" class="w-50px"
                                                alt="" />
                                            <!--end::Food icon-->
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Info-->
                                        <div class="">
                                            <span class="text-gray-800 fw-bold fs-2 d-block">Coffee</span>
                                            <span class="text-gray-500 fw-semibold fs-7">7 Beverages</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::Nav link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mb-3 me-0">
                                    <!--begin::Nav link-->
                                    <a class="nav-link nav-link-border-solid btn btn-outline btn-flex btn-active-color-primary flex-column flex-stack pt-9 pb-7 page-bg"
                                        data-bs-toggle="pill" href="#kt_pos_food_content_5"
                                        style="width: 138px;height: 180px">
                                        <!--begin::Icon-->
                                        <div class="nav-icon mb-3">
                                            <!--begin::Food icon-->
                                            <img src="assets/media/svg/food-icons/cheesecake.svg" class="w-50px"
                                                alt="" />
                                            <!--end::Food icon-->
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Info-->
                                        <div class="">
                                            <span class="text-gray-800 fw-bold fs-2 d-block">Dessert</span>
                                            <span class="text-gray-500 fw-semibold fs-7">8 Desserts</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::Nav link-->
                                </li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Nav-->
                            <!--begin::Tab Content-->
                            <div class="tab-content">
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade show active" id="kt_pos_food_content_1">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-wrap d-grid gap-5 gap-xxl-9">
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-2.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">T-Bone
                                                            Stake</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$16.50$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-7.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chef’s
                                                            Salmon</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$12.40$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-8.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Ramen</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$14.90$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-4.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chicken
                                                            Breast</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$9.00$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-10.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Tenderlion
                                                            Steak</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$19.00$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-9.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Soup
                                                            of the Day</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$7.50$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-3.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Pancakes</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$6.50$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-5.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Breakfast</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$8.20$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-11.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Sweety</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$11.40$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_pos_food_content_2">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-wrap d-grid gap-5 gap-xxl-9">
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-11.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Sweety</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$11.40$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-5.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Breakfast</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$8.20$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-4.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chicken
                                                            Breast</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$9.00$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-8.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Ramen</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$14.90$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-10.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Tenderlion
                                                            Steak</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$19.00$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-9.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Soup
                                                            of the Day</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$7.50$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-3.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Pancakes</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$6.50$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-7.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chef’s
                                                            Salmon</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$12.40$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-2.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">T-Bone
                                                            Stake</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$16.50$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_pos_food_content_3">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-wrap d-grid gap-5 gap-xxl-9">
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-5.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Breakfast</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$8.20$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-11.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Sweety</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$11.40$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-2.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">T-Bone
                                                            Stake</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$16.50$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-7.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chef’s
                                                            Salmon</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$12.40$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-4.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chicken
                                                            Breast</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$9.00$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-8.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Ramen</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$14.90$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-9.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Soup
                                                            of the Day</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$7.50$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-10.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Tenderlion
                                                            Steak</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$19.00$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-3.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Pancakes</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$6.50$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_pos_food_content_4">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-wrap d-grid gap-5 gap-xxl-9">
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-3.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Pancakes</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$6.50$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-5.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Breakfast</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$8.20$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-4.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chicken
                                                            Breast</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$9.00$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-8.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Ramen</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$14.90$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-9.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Soup
                                                            of the Day</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$7.50$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-11.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Sweety</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$11.40$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-3.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Pancakes</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$6.50$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-7.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chef’s
                                                            Salmon</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$12.40$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-10.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Tenderlion
                                                            Steak</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$19.00$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_pos_food_content_5">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-wrap d-grid gap-5 gap-xxl-9">
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-10.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Tenderlion
                                                            Steak</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$19.00$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-5.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Breakfast</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$8.20$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-4.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chicken
                                                            Breast</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$9.00$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-3.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Pancakes</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$6.50$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-2.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">T-Bone
                                                            Stake</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$16.50$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-7.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chef’s
                                                            Salmon</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$12.40$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-8.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Ramen</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$14.90$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-9.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Soup
                                                            of the Day</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$7.50$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Card-->
                                        <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                            <!--begin::Body-->
                                            <div class="card-body text-center">
                                                <!--begin::Food img-->
                                                <img src="assets/media/stock/food/img-11.jpg"
                                                    class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px"
                                                    alt="" />
                                                <!--end::Food img-->
                                                <!--begin::Info-->
                                                <div class="mb-2">
                                                    <!--begin::Title-->
                                                    <div class="text-center">
                                                        <span
                                                            class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Sweety</span>
                                                        <span class="text-gray-500 fw-semibold d-block fs-6 mt-n1">16 mins
                                                            to cook</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Total-->
                                                <span class="text-success text-end fw-bold fs-1">$11.40$</span>
                                                <!--end::Total-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Tap pane-->
                            </div>
                            <!--end::Tab Content-->
                        </div>
                        <!--end: Card Body-->
                    </div>
                    <!--end::Pos food-->
                </div>
                <!--end::Content-->
                <!--begin::Sidebar-->
                <div class="flex-row-auto w-xl-450px">
                    <!--begin::Pos order-->
                    <div class="card card-flush bg-body" id="kt_pos_form">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <h3 class="card-title fw-bold text-gray-800 fs-2qx">Current Order</h3>
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <a href="#" class="btn btn-light-primary fs-4 fw-bold py-4">Clear All</a>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-0">
                            <!--begin::Table container-->
                            <div class="table-responsive mb-8">
                                <!--begin::Table-->
                                <table class="table align-middle gs-0 gy-4 my-0">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr>
                                            <th class="min-w-175px"></th>
                                            <th class="w-125px"></th>
                                            <th class="w-60px"></th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr data-kt-pos-element="item" data-kt-pos-item-price="33">
                                            <td class="pe-0">
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/media/stock/food/img-2.jpg"
                                                        class="w-50px h-50px rounded-3 me-3" alt="" />
                                                    <span
                                                        class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-6 me-1">T-Bone
                                                        Stake</span>
                                                </div>
                                            </td>
                                            <td class="pe-0">
                                                <!--begin::Dialer-->
                                                <div class="position-relative d-flex align-items-center"
                                                    data-kt-dialer="true" data-kt-dialer-min="1" data-kt-dialer-max="10"
                                                    data-kt-dialer-step="1" data-kt-dialer-decimals="0">
                                                    <!--begin::Decrease control-->
                                                    <button type="button"
                                                        class="btn btn-icon btn-sm btn-light btn-icon-gray-500"
                                                        data-kt-dialer-control="decrease">
                                                        <i class="ki-duotone ki-minus fs-3x"></i>
                                                    </button>
                                                    <!--end::Decrease control-->
                                                    <!--begin::Input control-->
                                                    <input type="text"
                                                        class="form-control border-0 text-center px-0 fs-3 fw-bold text-gray-800 w-30px"
                                                        data-kt-dialer-control="input" placeholder="Amount"
                                                        name="manageBudget" readonly="readonly" value="2" />
                                                    <!--end::Input control-->
                                                    <!--begin::Increase control-->
                                                    <button type="button"
                                                        class="btn btn-icon btn-sm btn-light btn-icon-gray-500"
                                                        data-kt-dialer-control="increase">
                                                        <i class="ki-duotone ki-plus fs-3x"></i>
                                                    </button>
                                                    <!--end::Increase control-->
                                                </div>
                                                <!--end::Dialer-->
                                            </td>
                                            <td class="text-end">
                                                <span class="fw-bold text-primary fs-2"
                                                    data-kt-pos-element="item-total">$66.00</span>
                                            </td>
                                        </tr>
                                        <tr data-kt-pos-element="item" data-kt-pos-item-price="7.5">
                                            <td class="pe-0">
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/media/stock/food/img-9.jpg"
                                                        class="w-50px h-50px rounded-3 me-3" alt="" />
                                                    <span
                                                        class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-6 me-1">Soup
                                                        of the Day</span>
                                                </div>
                                            </td>
                                            <td class="pe-0">
                                                <!--begin::Dialer-->
                                                <div class="position-relative d-flex align-items-center"
                                                    data-kt-dialer="true" data-kt-dialer-min="1" data-kt-dialer-max="10"
                                                    data-kt-dialer-step="1" data-kt-dialer-decimals="0">
                                                    <!--begin::Decrease control-->
                                                    <button type="button"
                                                        class="btn btn-icon btn-sm btn-light btn-icon-gray-500"
                                                        data-kt-dialer-control="decrease">
                                                        <i class="ki-duotone ki-minus fs-3x"></i>
                                                    </button>
                                                    <!--end::Decrease control-->
                                                    <!--begin::Input control-->
                                                    <input type="text"
                                                        class="form-control border-0 text-center px-0 fs-3 fw-bold text-gray-800 w-30px"
                                                        data-kt-dialer-control="input" placeholder="Amount"
                                                        name="manageBudget" readonly="readonly" value="1" />
                                                    <!--end::Input control-->
                                                    <!--begin::Increase control-->
                                                    <button type="button"
                                                        class="btn btn-icon btn-sm btn-light btn-icon-gray-500"
                                                        data-kt-dialer-control="increase">
                                                        <i class="ki-duotone ki-plus fs-3x"></i>
                                                    </button>
                                                    <!--end::Increase control-->
                                                </div>
                                                <!--end::Dialer-->
                                            </td>
                                            <td class="text-end">
                                                <span class="fw-bold text-primary fs-2"
                                                    data-kt-pos-element="item-total">$7.50</span>
                                            </td>
                                        </tr>
                                        <tr data-kt-pos-element="item" data-kt-pos-item-price="13.5">
                                            <td class="pe-0">
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/media/stock/food/img-3.jpg"
                                                        class="w-50px h-50px rounded-3 me-3" alt="" />
                                                    <span
                                                        class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-6 me-1">Pancakes</span>
                                                </div>
                                            </td>
                                            <td class="pe-0">
                                                <!--begin::Dialer-->
                                                <div class="position-relative d-flex align-items-center"
                                                    data-kt-dialer="true" data-kt-dialer-min="1" data-kt-dialer-max="10"
                                                    data-kt-dialer-step="1" data-kt-dialer-decimals="0">
                                                    <!--begin::Decrease control-->
                                                    <button type="button"
                                                        class="btn btn-icon btn-sm btn-light btn-icon-gray-500"
                                                        data-kt-dialer-control="decrease">
                                                        <i class="ki-duotone ki-minus fs-3x"></i>
                                                    </button>
                                                    <!--end::Decrease control-->
                                                    <!--begin::Input control-->
                                                    <input type="text"
                                                        class="form-control border-0 text-center px-0 fs-3 fw-bold text-gray-800 w-30px"
                                                        data-kt-dialer-control="input" placeholder="Amount"
                                                        name="manageBudget" readonly="readonly" value="2" />
                                                    <!--end::Input control-->
                                                    <!--begin::Increase control-->
                                                    <button type="button"
                                                        class="btn btn-icon btn-sm btn-light btn-icon-gray-500"
                                                        data-kt-dialer-control="increase">
                                                        <i class="ki-duotone ki-plus fs-3x"></i>
                                                    </button>
                                                    <!--end::Increase control-->
                                                </div>
                                                <!--end::Dialer-->
                                            </td>
                                            <td class="text-end">
                                                <span class="fw-bold text-primary fs-2"
                                                    data-kt-pos-element="item-total">$27.00</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                            <!--begin::Summary-->
                            <div class="d-flex flex-stack bg-success rounded-3 p-6 mb-11">
                                <!--begin::Content-->
                                <div class="fs-6 fw-bold text-white">
                                    <span class="d-block lh-1 mb-2">Subtotal</span>
                                    <span class="d-block mb-2">Discounts</span>
                                    <span class="d-block mb-9">Tax(12%)</span>
                                    <span class="d-block fs-2qx lh-1">Total</span>
                                </div>
                                <!--end::Content-->
                                <!--begin::Content-->
                                <div class="fs-6 fw-bold text-white text-end">
                                    <span class="d-block lh-1 mb-2" data-kt-pos-element="total">$100.50</span>
                                    <span class="d-block mb-2" data-kt-pos-element="discount">-$8.00</span>
                                    <span class="d-block mb-9" data-kt-pos-element="tax">$11.20</span>
                                    <span class="d-block fs-2qx lh-1" data-kt-pos-element="grant-total">$93.46</span>
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Summary-->
                            <!--begin::Payment Method-->
                            <div class="m-0">
                                <!--begin::Title-->
                                <h1 class="fw-bold text-gray-800 mb-5">Payment Method</h1>
                                <!--end::Title-->
                                <!--begin::Radio group-->
                                <div class="d-flex flex-equal gap-5 gap-xxl-9 px-0 mb-12" data-kt-buttons="true"
                                    data-kt-buttons-target="[data-kt-button]">
                                    <!--begin::Radio-->
                                    <label
                                        class="btn bg-light btn-color-gray-600 btn-active-text-gray-800 border border-3 border-gray-100 border-active-primary btn-active-light-primary w-100 px-4"
                                        data-kt-button="true">
                                        <!--begin::Input-->
                                        <input class="btn-check" type="radio" name="method" value="0" />
                                        <!--end::Input-->
                                        <!--begin::Icon-->
                                        <i class="ki-duotone ki-dollar fs-2hx mb-2 pe-0">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <span class="fs-7 fw-bold d-block">Cash</span>
                                        <!--end::Title-->
                                    </label>
                                    <!--end::Radio-->
                                    <!--begin::Radio-->
                                    <label
                                        class="btn bg-light btn-color-gray-600 btn-active-text-gray-800 border border-3 border-gray-100 border-active-primary btn-active-light-primary w-100 px-4 active"
                                        data-kt-button="true">
                                        <!--begin::Input-->
                                        <input class="btn-check" type="radio" name="method" value="1" />
                                        <!--end::Input-->
                                        <!--begin::Icon-->
                                        <i class="ki-duotone ki-credit-cart fs-2hx mb-2 pe-0">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <span class="fs-7 fw-bold d-block">Card</span>
                                        <!--end::Title-->
                                    </label>
                                    <!--end::Radio-->
                                    <!--begin::Radio-->
                                    <label
                                        class="btn bg-light btn-color-gray-600 btn-active-text-gray-800 border border-3 border-gray-100 border-active-primary btn-active-light-primary w-100 px-4"
                                        data-kt-button="true">
                                        <!--begin::Input-->
                                        <input class="btn-check" type="radio" name="method" value="2" />
                                        <!--end::Input-->
                                        <!--begin::Icon-->
                                        <i class="ki-duotone ki-paypal fs-2hx mb-2 pe-0">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <span class="fs-7 fw-bold d-block">E-Wallet</span>
                                        <!--end::Title-->
                                    </label>
                                    <!--end::Radio-->
                                </div>
                                <!--end::Radio group-->
                                <!--begin::Actions-->
                                <button class="btn btn-primary fs-1 w-100 py-4">Print Bills</button>
                                <!--end::Actions-->
                            </div>
                            <!--end::Payment Method-->
                        </div>
                        <!--end: Card Body-->
                    </div>
                    <!--end::Pos order-->
                </div>
                <!--end::Sidebar-->
            </div>
            <!--end::Layout-->
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
    <!--end::Modals-->
    <!--begin::Javascript-->

    <!--begin::Global Javascript Bundle(mandatory for all pages)-->


    <!--end::Global Javascript Bundle-->
    <!--begin::Custom Javascript(used for this page only)-->





    <!--end::Custom Javascript-->
    <!--end::Javascript-->
@endsection

@section('page_scripts')
    <script src="assets/js/custom/pages/general/pos.js"></script>
    <script src="assets/js/widgets.bundle.js"></script>
    <script src="assets/js/custom/widgets.js"></script>
    <script src="assets/js/custom/apps/chat/chat.js"></script>
    <script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
@endsection
