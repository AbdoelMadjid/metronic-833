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

@section('head_assets')
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/vis-timeline/vis-timeline.bundle.css" rel="stylesheet" type="text/css" />
@endsection

@section('toolbar')
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6 metronic-toolbar-separated">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Logistics
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
                <a href="{{ route('metronic.apps.customers.list') }}" class="btn btn-sm fw-bold btn-secondary">Add
                    Customer</a>
                <!--end::Secondary button-->
                <!--begin::Primary button-->
                <a href="{{ route('metronic.apps.ecommerce.sales.add_order') }}" class="btn btn-sm fw-bold btn-primary">New
                    Shipment</a>
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
            <div class="row gy-5 gx-xl-10">
                <!--begin::Col-->
                <div class="col-xl-4 mb-xl-10">
                    <!--begin::Engage widget 1-->
                    <div class="card h-md-100" dir="ltr">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column flex-center">
                            <!--begin::Heading-->
                            <div class="mb-2">
                                <!--begin::Title-->
                                <h1 class="fw-semibold text-gray-800 text-center lh-lg">Quick form to
                                    <br />
                                    <span class="fw-bolder">Bid a New Shipment</span>
                                </h1>
                                <!--end::Title-->
                                <!--begin::Illustration-->
                                <div class="py-10 text-center">
                                    <img src="assets/media/svg/illustrations/easy/3.svg" class="theme-light-show w-200px"
                                        alt="" />
                                    <img src="assets/media/svg/illustrations/easy/3-dark.svg"
                                        class="theme-dark-show w-200px" alt="" />
                                </div>
                                <!--end::Illustration-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Links-->
                            <div class="text-center mb-1">
                                <!--begin::Link-->
                                <a class="btn btn-sm btn-primary me-2" data-bs-target="#kt_modal_bidding"
                                    data-bs-toggle="modal">Start Now</a>
                                <!--end::Link-->
                                <!--begin::Link-->
                                <a class="btn btn-sm btn-light"
                                    href="{{ route('metronic.apps.invoices.view.invoice_2') }}">Quick Guide</a>
                                <!--end::Link-->
                            </div>
                            <!--end::Links-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Engage widget 1-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-8 mb-5 mb-xl-10">
                    <!--begin::Row-->
                    <div class="row g-lg-5 g-xl-10">
                        <!--begin::Col-->
                        <div class="col-md-6 col-xl-6 mb-5 mb-xl-10">
                            <!--begin::Card widget 12-->
                            <div class="card overflow-hidden h-md-50 mb-5 mb-xl-10">
                                <!--begin::Card body-->
                                <div class="card-body d-flex justify-content-between flex-column px-0 pb-0">
                                    <!--begin::Statistics-->
                                    <div class="mb-4 px-9">
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center mb-2">
                                            <!--begin::Value-->
                                            <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">47,769,700</span>
                                            <!--end::Value-->
                                            <!--begin::Label-->
                                            <span class="d-flex align-items-end text-gray-500 fs-6 fw-semibold">Tons</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Description-->
                                        <span class="fs-6 fw-semibold text-gray-500">Total Online Sales</span>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Statistics-->
                                    <!--begin::Chart-->
                                    <div id="kt_card_widget_12_chart" class="min-h-auto" style="height: 125px"></div>
                                    <!--end::Chart-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card widget 12-->
                            <!--begin::Card widget 10-->
                            <div class="card card-flush h-md-50 mb-lg-10">
                                <!--begin::Header-->
                                <div class="card-header pt-5">
                                    <!--begin::Title-->
                                    <div class="card-title d-flex flex-column">
                                        <!--begin::Amount-->
                                        <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">69,700</span>
                                        <!--end::Amount-->
                                        <!--begin::Subtitle-->
                                        <span class="text-gray-500 pt-1 fw-semibold fs-6">Expected Earnings This
                                            Month</span>
                                        <!--end::Subtitle-->
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Card body-->
                                <div class="card-body d-flex align-items-end pt-0">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center flex-wrap">
                                        <!--begin::Chart-->
                                        <div class="d-flex me-7 me-xxl-10">
                                            <div id="kt_card_widget_10_chart" class="min-h-auto"
                                                style="height: 78px; width: 78px" data-kt-size="78" data-kt-line="11"></div>
                                        </div>
                                        <!--end::Chart-->
                                        <!--begin::Labels-->
                                        <div class="d-flex flex-column content-justify-center flex-grow-1">
                                            <!--begin::Label-->
                                            <div class="d-flex fs-6 fw-semibold align-items-center">
                                                <!--begin::Bullet-->
                                                <div class="bullet w-8px h-6px rounded-2 bg-success me-3"></div>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="fs-6 fw-semibold text-gray-500 flex-shrink-0">Used Truck freight
                                                </div>
                                                <!--end::Label-->
                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed min-w-10px flex-grow-1 mx-2"></div>
                                                <!--end::Separator-->
                                                <!--begin::Stats-->
                                                <div class="ms-auto fw-bolder text-gray-700 text-end">45%</div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::Label-->
                                            <!--begin::Label-->
                                            <div class="d-flex fs-6 fw-semibold align-items-center my-1">
                                                <!--begin::Bullet-->
                                                <div class="bullet w-8px h-6px rounded-2 bg-primary me-3"></div>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="fs-6 fw-semibold text-gray-500 flex-shrink-0">Used Ship freight
                                                </div>
                                                <!--end::Label-->
                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed min-w-10px flex-grow-1 mx-2"></div>
                                                <!--end::Separator-->
                                                <!--begin::Stats-->
                                                <div class="ms-auto fw-bolder text-gray-700 text-end">21%</div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::Label-->
                                            <!--begin::Label-->
                                            <div class="d-flex fs-6 fw-semibold align-items-center">
                                                <!--begin::Bullet-->
                                                <div class="bullet w-8px h-6px rounded-2 me-3"
                                                    style="background-color: #E4E6EF"></div>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="fs-6 fw-semibold text-gray-500 flex-shrink-0">Used Plane freight
                                                </div>
                                                <!--end::Label-->
                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed min-w-10px flex-grow-1 mx-2"></div>
                                                <!--end::Separator-->
                                                <!--begin::Stats-->
                                                <div class="ms-auto fw-bolder text-gray-700 text-end">34%</div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Labels-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card widget 10-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 col-xl-6 mb-md-5 mb-xl-10">
                            <!--begin::Card widget 13-->
                            <div class="card overflow-hidden h-md-50 mb-5 mb-xl-10">
                                <!--begin::Card body-->
                                <div class="card-body d-flex justify-content-between flex-column px-0 pb-0">
                                    <!--begin::Statistics-->
                                    <div class="mb-4 px-9">
                                        <!--begin::Statistics-->
                                        <div class="d-flex align-items-center mb-2">
                                            <!--begin::Value-->
                                            <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">259,786</span>
                                            <!--end::Value-->
                                            <!--begin::Label-->
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Statistics-->
                                        <!--begin::Description-->
                                        <span class="fs-6 fw-semibold text-gray-500">Total Shipments</span>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Statistics-->
                                    <!--begin::Chart-->
                                    <div id="kt_card_widget_13_chart" class="min-h-auto" style="height: 125px"></div>
                                    <!--end::Chart-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card widget 13-->
                            <!--begin::Card widget 7-->
                            <div class="card card-flush h-md-50 mb-lg-10">
                                <!--begin::Header-->
                                <div class="card-header pt-5">
                                    <!--begin::Title-->
                                    <div class="card-title d-flex flex-column">
                                        <!--begin::Amount-->
                                        <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">604</span>
                                        <!--end::Amount-->
                                        <!--begin::Subtitle-->
                                        <span class="text-gray-500 pt-1 fw-semibold fs-6">New Customers This Month</span>
                                        <!--end::Subtitle-->
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Card body-->
                                <div class="card-body d-flex flex-column justify-content-end pe-0">
                                    <!--begin::Title-->
                                    <span class="fs-6 fw-bolder text-gray-800 d-block mb-2">Today’s Heroes</span>
                                    <!--end::Title-->
                                    <!--begin::Users group-->
                                    <div class="symbol-group symbol-hover flex-nowrap">
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                            title="Alan Warden">
                                            <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                        </div>
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                            title="Michael Eberon">
                                            <img alt="Pic" src="assets/media/avatars/300-11.jpg" />
                                        </div>
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                            title="Susan Redwood">
                                            <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                        </div>
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                            title="Melody Macy">
                                            <img alt="Pic" src="assets/media/avatars/300-2.jpg" />
                                        </div>
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                            title="Perry Matthew">
                                            <span class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
                                        </div>
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                            title="Barry Walter">
                                            <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                                        </div>
                                        <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_view_users">
                                            <span class="symbol-label bg-light text-gray-400 fs-8 fw-bold">+42</span>
                                        </a>
                                    </div>
                                    <!--end::Users group-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card widget 7-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row gy-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-xl-4 mb-xl-10">
                    <!--begin::List widget 10-->
                    <div class="card card-flush h-lg-100">
                        <!--begin::Header-->
                        <div class="card-header pt-7">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">Shipment History</span>
                                <span class="text-gray-500 mt-1 fw-semibold fs-6">59 Active Shipments</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <a href="#" class="btn btn-sm btn-light" data-bs-toggle='tooltip'
                                    data-bs-dismiss='click' data-bs-custom-class="tooltip-inverse"
                                    title="Logistics App is coming soon">View All</a>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Nav-->
                            <ul class="nav nav-pills nav-pills-custom row position-relative mx-0 mb-9">
                                <!--begin::Item-->
                                <li class="nav-item col-4 mx-0 p-0">
                                    <!--begin::Link-->
                                    <a class="nav-link active d-flex justify-content-center w-100 border-0 h-100"
                                        data-bs-toggle="pill" href="#kt_list_widget_10_tab_1">
                                        <!--begin::Subtitle-->
                                        <span class="nav-text text-gray-800 fw-bold fs-6 mb-3">Notable</span>
                                        <!--end::Subtitle-->
                                        <!--begin::Bullet-->
                                        <span
                                            class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item col-4 mx-0 px-0">
                                    <!--begin::Link-->
                                    <a class="nav-link d-flex justify-content-center w-100 border-0 h-100"
                                        data-bs-toggle="pill" href="#kt_list_widget_10_tab_2">
                                        <!--begin::Subtitle-->
                                        <span class="nav-text text-gray-800 fw-bold fs-6 mb-3">Delivered</span>
                                        <!--end::Subtitle-->
                                        <!--begin::Bullet-->
                                        <span
                                            class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item col-4 mx-0 px-0">
                                    <!--begin::Link-->
                                    <a class="nav-link d-flex justify-content-center w-100 border-0 h-100"
                                        data-bs-toggle="pill" href="#kt_list_widget_10_tab_3">
                                        <!--begin::Subtitle-->
                                        <span class="nav-text text-gray-800 fw-bold fs-6 mb-3">Shipping</span>
                                        <!--end::Subtitle-->
                                        <!--begin::Bullet-->
                                        <span
                                            class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Bullet-->
                                <span class="position-absolute z-index-1 bottom-0 w-100 h-4px bg-light rounded"></span>
                                <!--end::Bullet-->
                            </ul>
                            <!--end::Nav-->
                            <!--begin::Tab Content-->
                            <div class="tab-content">
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade show active" id="kt_list_widget_10_tab_1">
                                    <!--begin::Item-->
                                    <div class="m-0">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-sm-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-45px me-4">
                                                <span class="symbol-label bg-primary">
                                                    <i class="ki-duotone ki-ship text-inverse-primary fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                <div class="flex-grow-1 me-2">
                                                    <a href="#" class="text-gray-500 fs-6 fw-semibold">Ship
                                                        Freight</a>
                                                    <span class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
                                                </div>
                                                <span
                                                    class="badge badge-lg badge-light-success fw-bold my-2 fs-8">Delivered</span>
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Timeline-->
                                        <div class="timeline">
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center mb-7">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
                                                <!--end::Timeline line-->
                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon">
                                                    <i class="ki-duotone ki-cd fs-2 text-danger">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <!--end::Timeline icon-->
                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Title-->
                                                    <span class="fs-6 text-gray-500 fw-semibold d-block">Messina
                                                        Harbor</span>
                                                    <!--end::Title-->
                                                    <!--begin::Title-->
                                                    <span class="fs-6 fw-bold text-gray-800">Sicily, Italy</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line"></div>
                                                <!--end::Timeline line-->
                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon">
                                                    <i class="ki-duotone ki-geolocation fs-2 text-info">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <!--end::Timeline icon-->
                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Title-->
                                                    <span class="fs-6 text-gray-500 fw-semibold d-block">Hektor Container
                                                        Hotel</span>
                                                    <!--end::Title-->
                                                    <!--begin::Title-->
                                                    <span class="fs-6 fw-bold text-gray-800">Tallin, EST</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                        </div>
                                        <!--end::Timeline-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-6"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="m-0">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-sm-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-45px me-4">
                                                <span class="symbol-label bg-primary">
                                                    <i class="ki-duotone ki-truck text-inverse-primary fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                        <span class="path5"></span>
                                                    </i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                <div class="flex-grow-1 me-2">
                                                    <a href="#" class="text-gray-500 fs-6 fw-semibold">Truck
                                                        Freight</a>
                                                    <span class="text-gray-800 fw-bold d-block fs-4">#0066-954784</span>
                                                </div>
                                                <span
                                                    class="badge badge-lg badge-light-primary fw-bold my-2 fs-8">Shipping</span>
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Timeline-->
                                        <div class="timeline">
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center mb-7">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
                                                <!--end::Timeline line-->
                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon">
                                                    <i class="ki-duotone ki-cd fs-2 text-danger">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <!--end::Timeline icon-->
                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Title-->
                                                    <span class="fs-6 text-gray-500 fw-semibold d-block">Haven van
                                                        Rotterdam</span>
                                                    <!--end::Title-->
                                                    <!--begin::Title-->
                                                    <span class="fs-6 fw-bold text-gray-800">Rotterdam, Netherlands</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line"></div>
                                                <!--end::Timeline line-->
                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon">
                                                    <i class="ki-duotone ki-geolocation fs-2 text-info">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <!--end::Timeline icon-->
                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Title-->
                                                    <span class="fs-6 text-gray-500 fw-semibold d-block">Forest-Midi</span>
                                                    <!--end::Title-->
                                                    <!--begin::Title-->
                                                    <span class="fs-6 fw-bold text-gray-800">Brussels, Belgium</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                        </div>
                                        <!--end::Timeline-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-6"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="m-0">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-sm-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-45px me-4">
                                                <span class="symbol-label bg-primary">
                                                    <i class="ki-duotone ki-delivery text-inverse-primary fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                        <span class="path5"></span>
                                                    </i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                <div class="flex-grow-1 me-2">
                                                    <a href="#" class="text-gray-500 fs-6 fw-semibold">Delivery
                                                        Freight</a>
                                                    <span class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
                                                </div>
                                                <span
                                                    class="badge badge-lg badge-light-success fw-bold my-2 fs-8">Delivered</span>
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Timeline-->
                                        <div class="timeline">
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center mb-7">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
                                                <!--end::Timeline line-->
                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon">
                                                    <i class="ki-duotone ki-cd fs-2 text-danger">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <!--end::Timeline icon-->
                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Title-->
                                                    <span class="fs-6 text-gray-500 fw-semibold d-block">Mina St - Zayed
                                                        Port</span>
                                                    <!--end::Title-->
                                                    <!--begin::Title-->
                                                    <span class="fs-6 fw-bold text-gray-800">Abu Dhabi, UAE</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line"></div>
                                                <!--end::Timeline line-->
                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon">
                                                    <i class="ki-duotone ki-geolocation fs-2 text-info">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <!--end::Timeline icon-->
                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Title-->
                                                    <span class="fs-6 text-gray-500 fw-semibold d-block">27 Drydock
                                                        Boston</span>
                                                    <!--end::Title-->
                                                    <!--begin::Title-->
                                                    <span class="fs-6 fw-bold text-gray-800">Boston, USA</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                        </div>
                                        <!--end::Timeline-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-6"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="m-0">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-sm-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-45px me-4">
                                                <span class="symbol-label bg-primary">
                                                    <i class="ki-duotone ki-airplane-square text-inverse-primary fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                <div class="flex-grow-1 me-2">
                                                    <a href="#" class="text-gray-500 fs-6 fw-semibold">Plane
                                                        Freight</a>
                                                    <span class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
                                                </div>
                                                <span
                                                    class="badge badge-lg badge-light-danger fw-bold my-2 fs-8">Delayed</span>
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Timeline-->
                                        <div class="timeline">
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center mb-7">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
                                                <!--end::Timeline line-->
                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon">
                                                    <i class="ki-duotone ki-cd fs-2 text-danger">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <!--end::Timeline icon-->
                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Title-->
                                                    <span class="fs-6 text-gray-500 fw-semibold d-block">KLM Cargo</span>
                                                    <!--end::Title-->
                                                    <!--begin::Title-->
                                                    <span class="fs-6 fw-bold text-gray-800">Schipol Airport,
                                                        Amsterdam</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line"></div>
                                                <!--end::Timeline line-->
                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon">
                                                    <i class="ki-duotone ki-geolocation fs-2 text-info">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <!--end::Timeline icon-->
                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Title-->
                                                    <span class="fs-6 text-gray-500 fw-semibold d-block">Singapore
                                                        Cargo</span>
                                                    <!--end::Title-->
                                                    <!--begin::Title-->
                                                    <span class="fs-6 fw-bold text-gray-800">Changi Airport,
                                                        Singapore</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                        </div>
                                        <!--end::Timeline-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_list_widget_10_tab_2">
                                    <!--begin::Item-->
                                    <div class="m-0">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-sm-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-45px me-4">
                                                <span class="symbol-label bg-primary">
                                                    <i class="ki-duotone ki-airplane-square text-inverse-primary fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                <div class="flex-grow-1 me-2">
                                                    <a href="#" class="text-gray-500 fs-6 fw-semibold">Plane
                                                        Freight</a>
                                                    <span class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
                                                </div>
                                                <span
                                                    class="badge badge-lg badge-light-success fw-bold my-2 fs-8">Delivered</span>
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Timeline-->
                                        <div class="timeline">
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center mb-7">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
                                                <!--end::Timeline line-->
                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon">
                                                    <i class="ki-duotone ki-cd fs-2 text-danger">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <!--end::Timeline icon-->
                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Title-->
                                                    <span class="fs-6 text-gray-500 fw-semibold d-block">KLM Cargo</span>
                                                    <!--end::Title-->
                                                    <!--begin::Title-->
                                                    <span class="fs-6 fw-bold text-gray-800">Schipol Airport,
                                                        Amsterdam</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line"></div>
                                                <!--end::Timeline line-->
                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon">
                                                    <i class="ki-duotone ki-geolocation fs-2 text-info">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <!--end::Timeline icon-->
                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Title-->
                                                    <span class="fs-6 text-gray-500 fw-semibold d-block">Singapore
                                                        Cargo</span>
                                                    <!--end::Title-->
                                                    <!--begin::Title-->
                                                    <span class="fs-6 fw-bold text-gray-800">Changi Airport,
                                                        Singapore</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                        </div>
                                        <!--end::Timeline-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-6"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="m-0">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-sm-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-45px me-4">
                                                <span class="symbol-label bg-primary">
                                                    <i class="ki-duotone ki-truck text-inverse-primary fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                        <span class="path5"></span>
                                                    </i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                <div class="flex-grow-1 me-2">
                                                    <a href="#" class="text-gray-500 fs-6 fw-semibold">Truck
                                                        Freight</a>
                                                    <span class="text-gray-800 fw-bold d-block fs-4">#0066-954784</span>
                                                </div>
                                                <span
                                                    class="badge badge-lg badge-light-success fw-bold my-2 fs-8">Delivered</span>
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Timeline-->
                                        <div class="timeline">
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center mb-7">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
                                                <!--end::Timeline line-->
                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon">
                                                    <i class="ki-duotone ki-cd fs-2 text-danger">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <!--end::Timeline icon-->
                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Title-->
                                                    <span class="fs-6 text-gray-500 fw-semibold d-block">Haven van
                                                        Rotterdam</span>
                                                    <!--end::Title-->
                                                    <!--begin::Title-->
                                                    <span class="fs-6 fw-bold text-gray-800">Rotterdam, Netherlands</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line"></div>
                                                <!--end::Timeline line-->
                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon">
                                                    <i class="ki-duotone ki-geolocation fs-2 text-info">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <!--end::Timeline icon-->
                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Title-->
                                                    <span class="fs-6 text-gray-500 fw-semibold d-block">Forest-Midi</span>
                                                    <!--end::Title-->
                                                    <!--begin::Title-->
                                                    <span class="fs-6 fw-bold text-gray-800">Brussels, Belgium</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                        </div>
                                        <!--end::Timeline-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-6"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="m-0">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-sm-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-45px me-4">
                                                <span class="symbol-label bg-primary">
                                                    <i class="ki-duotone ki-ship text-inverse-primary fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                <div class="flex-grow-1 me-2">
                                                    <a href="#" class="text-gray-500 fs-6 fw-semibold">Ship
                                                        Freight</a>
                                                    <span class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
                                                </div>
                                                <span
                                                    class="badge badge-lg badge-light-success fw-bold my-2 fs-8">Delivered</span>
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Timeline-->
                                        <div class="timeline">
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center mb-7">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
                                                <!--end::Timeline line-->
                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon">
                                                    <i class="ki-duotone ki-cd fs-2 text-danger">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <!--end::Timeline icon-->
                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Title-->
                                                    <span class="fs-6 text-gray-500 fw-semibold d-block">Mina St - Zayed
                                                        Port</span>
                                                    <!--end::Title-->
                                                    <!--begin::Title-->
                                                    <span class="fs-6 fw-bold text-gray-800">Abu Dhabi, UAE</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line"></div>
                                                <!--end::Timeline line-->
                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon">
                                                    <i class="ki-duotone ki-geolocation fs-2 text-info">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <!--end::Timeline icon-->
                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Title-->
                                                    <span class="fs-6 text-gray-500 fw-semibold d-block">27 Drydock
                                                        Boston</span>
                                                    <!--end::Title-->
                                                    <!--begin::Title-->
                                                    <span class="fs-6 fw-bold text-gray-800">Boston, USA</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                        </div>
                                        <!--end::Timeline-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-6"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="m-0">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-sm-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-45px me-4">
                                                <span class="symbol-label bg-primary">
                                                    <i class="ki-duotone ki-ship text-inverse-primary fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                <div class="flex-grow-1 me-2">
                                                    <a href="#" class="text-gray-500 fs-6 fw-semibold">Ship
                                                        Freight</a>
                                                    <span class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
                                                </div>
                                                <span
                                                    class="badge badge-lg badge-light-success fw-bold my-2 fs-8">Delivered</span>
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Timeline-->
                                        <div class="timeline">
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center mb-7">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
                                                <!--end::Timeline line-->
                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon">
                                                    <i class="ki-duotone ki-cd fs-2 text-danger">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <!--end::Timeline icon-->
                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Title-->
                                                    <span class="fs-6 text-gray-500 fw-semibold d-block">Messina
                                                        Harbor</span>
                                                    <!--end::Title-->
                                                    <!--begin::Title-->
                                                    <span class="fs-6 fw-bold text-gray-800">Sicily, Italy</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line"></div>
                                                <!--end::Timeline line-->
                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon">
                                                    <i class="ki-duotone ki-geolocation fs-2 text-info">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <!--end::Timeline icon-->
                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Title-->
                                                    <span class="fs-6 text-gray-500 fw-semibold d-block">Hektor Container
                                                        Hotel</span>
                                                    <!--end::Title-->
                                                    <!--begin::Title-->
                                                    <span class="fs-6 fw-bold text-gray-800">Tallin, EST</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                        </div>
                                        <!--end::Timeline-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_list_widget_10_tab_3">
                                    <!--begin::Item-->
                                    <div class="m-0">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-sm-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-45px me-4">
                                                <span class="symbol-label bg-primary">
                                                    <i class="ki-duotone ki-ship text-inverse-primary fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                <div class="flex-grow-1 me-2">
                                                    <a href="#" class="text-gray-500 fs-6 fw-semibold">Ship
                                                        Freight</a>
                                                    <span class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
                                                </div>
                                                <span
                                                    class="badge badge-lg badge-light-primary fw-bold my-2 fs-8">Shipping</span>
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Timeline-->
                                        <div class="timeline">
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center mb-7">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
                                                <!--end::Timeline line-->
                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon">
                                                    <i class="ki-duotone ki-cd fs-2 text-danger">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <!--end::Timeline icon-->
                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Title-->
                                                    <span class="fs-6 text-gray-500 fw-semibold d-block">Mina St - Zayed
                                                        Port</span>
                                                    <!--end::Title-->
                                                    <!--begin::Title-->
                                                    <span class="fs-6 fw-bold text-gray-800">Abu Dhabi, UAE</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line"></div>
                                                <!--end::Timeline line-->
                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon">
                                                    <i class="ki-duotone ki-geolocation fs-2 text-info">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <!--end::Timeline icon-->
                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Title-->
                                                    <span class="fs-6 text-gray-500 fw-semibold d-block">27 Drydock
                                                        Boston</span>
                                                    <!--end::Title-->
                                                    <!--begin::Title-->
                                                    <span class="fs-6 fw-bold text-gray-800">Boston, USA</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                        </div>
                                        <!--end::Timeline-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-6"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="m-0">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-sm-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-45px me-4">
                                                <span class="symbol-label bg-primary">
                                                    <i class="ki-duotone ki-airplane-square text-inverse-primary fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                <div class="flex-grow-1 me-2">
                                                    <a href="#" class="text-gray-500 fs-6 fw-semibold">Plane
                                                        Freight</a>
                                                    <span class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
                                                </div>
                                                <span
                                                    class="badge badge-lg badge-light-primary fw-bold my-2 fs-8">Shipping</span>
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Timeline-->
                                        <div class="timeline">
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center mb-7">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
                                                <!--end::Timeline line-->
                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon">
                                                    <i class="ki-duotone ki-cd fs-2 text-danger">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <!--end::Timeline icon-->
                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Title-->
                                                    <span class="fs-6 text-gray-500 fw-semibold d-block">KLM Cargo</span>
                                                    <!--end::Title-->
                                                    <!--begin::Title-->
                                                    <span class="fs-6 fw-bold text-gray-800">Schipol Airport,
                                                        Amsterdam</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line"></div>
                                                <!--end::Timeline line-->
                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon">
                                                    <i class="ki-duotone ki-geolocation fs-2 text-info">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <!--end::Timeline icon-->
                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Title-->
                                                    <span class="fs-6 text-gray-500 fw-semibold d-block">Singapore
                                                        Cargo</span>
                                                    <!--end::Title-->
                                                    <!--begin::Title-->
                                                    <span class="fs-6 fw-bold text-gray-800">Changi Airport,
                                                        Singapore</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                        </div>
                                        <!--end::Timeline-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-6"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="m-0">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-sm-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-45px me-4">
                                                <span class="symbol-label bg-primary">
                                                    <i class="ki-duotone ki-ship text-inverse-primary fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                <div class="flex-grow-1 me-2">
                                                    <a href="#" class="text-gray-500 fs-6 fw-semibold">Ship
                                                        Freight</a>
                                                    <span class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
                                                </div>
                                                <span
                                                    class="badge badge-lg badge-light-primary fw-bold my-2 fs-8">Shipping</span>
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Timeline-->
                                        <div class="timeline">
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center mb-7">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
                                                <!--end::Timeline line-->
                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon">
                                                    <i class="ki-duotone ki-cd fs-2 text-danger">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <!--end::Timeline icon-->
                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Title-->
                                                    <span class="fs-6 text-gray-500 fw-semibold d-block">Messina
                                                        Harbor</span>
                                                    <!--end::Title-->
                                                    <!--begin::Title-->
                                                    <span class="fs-6 fw-bold text-gray-800">Sicily, Italy</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line"></div>
                                                <!--end::Timeline line-->
                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon">
                                                    <i class="ki-duotone ki-geolocation fs-2 text-info">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <!--end::Timeline icon-->
                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Title-->
                                                    <span class="fs-6 text-gray-500 fw-semibold d-block">Hektor Container
                                                        Hotel</span>
                                                    <!--end::Title-->
                                                    <!--begin::Title-->
                                                    <span class="fs-6 fw-bold text-gray-800">Tallin, EST</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                        </div>
                                        <!--end::Timeline-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-6"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="m-0">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-sm-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-45px me-4">
                                                <span class="symbol-label bg-primary">
                                                    <i class="ki-duotone ki-truck text-inverse-primary fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                        <span class="path5"></span>
                                                    </i>
                                                </span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                <div class="flex-grow-1 me-2">
                                                    <a href="#" class="text-gray-500 fs-6 fw-semibold">Truck
                                                        Freight</a>
                                                    <span class="text-gray-800 fw-bold d-block fs-4">#0066-954784</span>
                                                </div>
                                                <span
                                                    class="badge badge-lg badge-light-primary fw-bold my-2 fs-8">Shipping</span>
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Timeline-->
                                        <div class="timeline">
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center mb-7">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
                                                <!--end::Timeline line-->
                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon">
                                                    <i class="ki-duotone ki-cd fs-2 text-danger">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <!--end::Timeline icon-->
                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Title-->
                                                    <span class="fs-6 text-gray-500 fw-semibold d-block">Haven van
                                                        Rotterdam</span>
                                                    <!--end::Title-->
                                                    <!--begin::Title-->
                                                    <span class="fs-6 fw-bold text-gray-800">Rotterdam, Netherlands</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line"></div>
                                                <!--end::Timeline line-->
                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon">
                                                    <i class="ki-duotone ki-geolocation fs-2 text-info">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <!--end::Timeline icon-->
                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Title-->
                                                    <span class="fs-6 text-gray-500 fw-semibold d-block">Forest-Midi</span>
                                                    <!--end::Title-->
                                                    <!--begin::Title-->
                                                    <span class="fs-6 fw-bold text-gray-800">Brussels, Belgium</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                        </div>
                                        <!--end::Timeline-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Tap pane-->
                            </div>
                            <!--end::Tab Content-->
                        </div>
                        <!--end: Card Body-->
                    </div>
                    <!--end::List widget 10-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-8 mb-5 mb-xl-10">
                    <!--begin::Row-->
                    <div class="row g-5 g-xl-10 h-xxl-50 mb-0 mb-xl-10">
                        <!--begin::Col-->
                        <div class="col-xxl-6">
                            <!--begin::Chart widget 6-->
                            <div class="card card-flush h-lg-100">
                                <!--begin::Header-->
                                <div class="card-header py-7 mb-3">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-800">Top Selling Categories</span>
                                        <span class="text-gray-500 mt-1 fw-semibold fs-6">8k social visitors</span>
                                    </h3>
                                    <!--end::Title-->
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        <a href="{{ route('metronic.apps.ecommerce.sales.listing') }}"
                                            class="btn btn-sm btn-light">View All</a>
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body py-0 ps-6 mt-n12">
                                    <div id="kt_charts_widget_6"></div>
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Chart widget 6-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xxl-6 mb-5 mb-xl-0">
                            <!--begin::List widget 8-->
                            <div class="card card-flush h-lg-100">
                                <!--begin::Header-->
                                <div class="card-header pt-7 mb-5">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-800">Visits by Country</span>
                                        <span class="text-gray-500 mt-1 fw-semibold fs-6">20 countries share 97%
                                            visits</span>
                                    </h3>
                                    <!--end::Title-->
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        <a href="{{ route('metronic.apps.ecommerce.sales.listing') }}"
                                            class="btn btn-sm btn-light">View All</a>
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-0">
                                    <!--begin::Items-->
                                    <div class="m-0">
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Flag-->
                                            <img src="assets/media/flags/united-states.svg" class="me-4 w-25px"
                                                style="border-radius: 4px" alt="" />
                                            <!--end::Flag-->
                                            <!--begin::Section-->
                                            <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                                <!--begin::Content-->
                                                <div class="me-5">
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 fw-bold text-hover-primary fs-6">United
                                                        States</a>
                                                    <!--end::Title-->
                                                    <!--begin::Desc-->
                                                    <span
                                                        class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Direct
                                                        link clicks</span>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Content-->
                                                <!--begin::Info-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Number-->
                                                    <span class="text-gray-800 fw-bold fs-6 me-3 d-block">9,763</span>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="m-0">
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light-success fs-base">
                                                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>2.6%</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Separator-->
                                        <div class="separator separator-dashed my-3"></div>
                                        <!--end::Separator-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Flag-->
                                            <img src="assets/media/flags/brazil.svg" class="me-4 w-25px"
                                                style="border-radius: 4px" alt="" />
                                            <!--end::Flag-->
                                            <!--begin::Section-->
                                            <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                                <!--begin::Content-->
                                                <div class="me-5">
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 fw-bold text-hover-primary fs-6">Brasil</a>
                                                    <!--end::Title-->
                                                    <!--begin::Desc-->
                                                    <span
                                                        class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">All
                                                        Social Channels</span>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Content-->
                                                <!--begin::Info-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Number-->
                                                    <span class="text-gray-800 fw-bold fs-6 me-3 d-block">4,062</span>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="m-0">
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light-danger fs-base">
                                                            <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>0.4%</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Separator-->
                                        <div class="separator separator-dashed my-3"></div>
                                        <!--end::Separator-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Flag-->
                                            <img src="assets/media/flags/turkey.svg" class="me-4 w-25px"
                                                style="border-radius: 4px" alt="" />
                                            <!--end::Flag-->
                                            <!--begin::Section-->
                                            <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                                <!--begin::Content-->
                                                <div class="me-5">
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 fw-bold text-hover-primary fs-6">Turkey</a>
                                                    <!--end::Title-->
                                                    <!--begin::Desc-->
                                                    <span
                                                        class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Mailchimp
                                                        Campaigns</span>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Content-->
                                                <!--begin::Info-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Number-->
                                                    <span class="text-gray-800 fw-bold fs-6 me-3 d-block">1,680</span>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="m-0">
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light-success fs-base">
                                                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>0.2%</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Separator-->
                                        <div class="separator separator-dashed my-3"></div>
                                        <!--end::Separator-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Flag-->
                                            <img src="assets/media/flags/france.svg" class="me-4 w-25px"
                                                style="border-radius: 4px" alt="" />
                                            <!--end::Flag-->
                                            <!--begin::Section-->
                                            <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                                <!--begin::Content-->
                                                <div class="me-5">
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 fw-bold text-hover-primary fs-6">France</a>
                                                    <!--end::Title-->
                                                    <!--begin::Desc-->
                                                    <span
                                                        class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Impact
                                                        Radius visits</span>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Content-->
                                                <!--begin::Info-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Number-->
                                                    <span class="text-gray-800 fw-bold fs-6 me-3 d-block">849</span>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="m-0">
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light-success fs-base">
                                                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>4.1%</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Separator-->
                                        <div class="separator separator-dashed my-3"></div>
                                        <!--end::Separator-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Flag-->
                                            <img src="assets/media/flags/india.svg" class="me-4 w-25px"
                                                style="border-radius: 4px" alt="" />
                                            <!--end::Flag-->
                                            <!--begin::Section-->
                                            <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                                <!--begin::Content-->
                                                <div class="me-5">
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 fw-bold text-hover-primary fs-6">India</a>
                                                    <!--end::Title-->
                                                    <!--begin::Desc-->
                                                    <span
                                                        class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Many
                                                        Sources</span>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Content-->
                                                <!--begin::Info-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Number-->
                                                    <span class="text-gray-800 fw-bold fs-6 me-3 d-block">604</span>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="m-0">
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light-danger fs-base">
                                                            <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>8.3%</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Separator-->
                                        <div class="separator separator-dashed my-3"></div>
                                        <!--end::Separator-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Flag-->
                                            <img src="assets/media/flags/sweden.svg" class="me-4 w-25px"
                                                style="border-radius: 4px" alt="" />
                                            <!--end::Flag-->
                                            <!--begin::Section-->
                                            <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                                <!--begin::Content-->
                                                <div class="me-5">
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 fw-bold text-hover-primary fs-6">Sweden</a>
                                                    <!--end::Title-->
                                                    <!--begin::Desc-->
                                                    <span
                                                        class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social
                                                        Network</span>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Content-->
                                                <!--begin::Info-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Number-->
                                                    <span class="text-gray-800 fw-bold fs-6 me-3 d-block">237</span>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="m-0">
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light-success fs-base">
                                                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>1.9%</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Items-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::LIst widget 8-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <div class="row h-xxl-50">
                        <!--begin::Col-->
                        <div class="col">
                            <!--begin::Chart widget 10-->
                            <div class="card card-flush h-xxl-100">
                                <!--begin::Header-->
                                <div class="card-header pt-7">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-800">Freight Tonnage</span>
                                        <span class="text-gray-500 mt-1 fw-semibold fs-6">3,567,457 tons</span>
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
                                <div class="card-body d-flex flex-column justify-content-between pb-5 px-0">
                                    <!--begin::Nav-->
                                    <ul class="nav nav-pills nav-pills-custom mb-3 mx-9">
                                        <!--begin::Item-->
                                        <li class="nav-item mb-3 me-3 me-lg-6">
                                            <!--begin::Link-->
                                            <a class="nav-link btn btn-outline btn-flex btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 active"
                                                data-bs-toggle="pill" id="kt_charts_widget_10_tab_1"
                                                href="#kt_charts_widget_10_tab_content_1">
                                                <!--begin::Icon-->
                                                <div class="nav-icon mb-3">
                                                    <i class="ki-duotone ki-ship fs-1 p-0">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Title-->
                                                <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Ship</span>
                                                <!--end::Title-->
                                                <!--begin::Bullet-->
                                                <span
                                                    class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                <!--end::Bullet-->
                                            </a>
                                            <!--end::Link-->
                                        </li>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="nav-item mb-3 me-3 me-lg-6">
                                            <!--begin::Link-->
                                            <a class="nav-link btn btn-outline btn-flex btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2"
                                                data-bs-toggle="pill" id="kt_charts_widget_10_tab_2"
                                                href="#kt_charts_widget_10_tab_content_2">
                                                <!--begin::Icon-->
                                                <div class="nav-icon mb-3">
                                                    <i class="ki-duotone ki-truck fs-1 p-0">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                        <span class="path5"></span>
                                                    </i>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Title-->
                                                <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Truck</span>
                                                <!--end::Title-->
                                                <!--begin::Bullet-->
                                                <span
                                                    class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                <!--end::Bullet-->
                                            </a>
                                            <!--end::Link-->
                                        </li>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="nav-item mb-3 me-3 me-lg-6">
                                            <!--begin::Link-->
                                            <a class="nav-link btn btn-outline btn-flex btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2"
                                                data-bs-toggle="pill" id="kt_charts_widget_10_tab_3"
                                                href="#kt_charts_widget_10_tab_content_3">
                                                <!--begin::Icon-->
                                                <div class="nav-icon mb-3">
                                                    <i class="ki-duotone ki-airplane-square fs-1 p-0">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Title-->
                                                <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Plane</span>
                                                <!--end::Title-->
                                                <!--begin::Bullet-->
                                                <span
                                                    class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                <!--end::Bullet-->
                                            </a>
                                            <!--end::Link-->
                                        </li>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="nav-item mb-3 me-3 me-lg-6">
                                            <!--begin::Link-->
                                            <a class="nav-link btn btn-outline btn-flex btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2"
                                                data-bs-toggle="pill" id="kt_charts_widget_10_tab_4"
                                                href="#kt_charts_widget_10_tab_content_4">
                                                <!--begin::Icon-->
                                                <div class="nav-icon mb-3">
                                                    <i class="ki-duotone ki-bus fs-1 p-0">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                        <span class="path5"></span>
                                                    </i>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Title-->
                                                <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Train</span>
                                                <!--end::Title-->
                                                <!--begin::Bullet-->
                                                <span
                                                    class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                <!--end::Bullet-->
                                            </a>
                                            <!--end::Link-->
                                        </li>
                                        <!--end::Item-->
                                    </ul>
                                    <!--end::Nav-->
                                    <!--begin::Tab Content-->
                                    <div class="tab-content ps-4 pe-6">
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade active show" id="kt_charts_widget_10_tab_content_1">
                                            <!--begin::Chart-->
                                            <div id="kt_charts_widget_10_chart_1" class="min-h-auto"
                                                style="height: 270px"></div>
                                            <!--end::Chart-->
                                        </div>
                                        <!--end::Tap pane-->
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade" id="kt_charts_widget_10_tab_content_2">
                                            <!--begin::Chart-->
                                            <div id="kt_charts_widget_10_chart_2" class="min-h-auto"
                                                style="height: 270px"></div>
                                            <!--end::Chart-->
                                        </div>
                                        <!--end::Tap pane-->
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade" id="kt_charts_widget_10_tab_content_3">
                                            <!--begin::Chart-->
                                            <div id="kt_charts_widget_10_chart_3" class="min-h-auto"
                                                style="height: 270px"></div>
                                            <!--end::Chart-->
                                        </div>
                                        <!--end::Tap pane-->
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade" id="kt_charts_widget_10_tab_content_4">
                                            <!--begin::Chart-->
                                            <div id="kt_charts_widget_10_chart_4" class="min-h-auto"
                                                style="height: 270px"></div>
                                            <!--end::Chart-->
                                        </div>
                                        <!--end::Tap pane-->
                                    </div>
                                    <!--end::Tab Content-->
                                </div>
                                <!--end: Card Body-->
                            </div>
                            <!--end::Chart widget 10-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row gy-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::List widget 11-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Header-->
                        <div class="card-header pt-7 mb-3">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">Our Fleet Tonnage</span>
                                <span class="text-gray-500 mt-1 fw-semibold fs-6">Total 1,247 vehicles</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <a href="#" class="btn btn-sm btn-light" data-bs-toggle='tooltip'
                                    data-bs-dismiss='click' data-bs-custom-class="tooltip-inverse"
                                    title="Logistics App is coming soon">Review Fleet</a>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-4">
                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Section-->
                                <div class="d-flex align-items-center me-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40px me-4">
                                        <span class="symbol-label">
                                            <i class="ki-duotone ki-ship text-gray-600 fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Ships</a>
                                        <!--end::Title-->
                                        <!--begin::Desc-->
                                        <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">234
                                            Ships</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Wrapper-->
                                <div class="text-gray-500 fw-bold fs-7 text-end">
                                    <!--begin::Number-->
                                    <span class="text-gray-800 fw-bold fs-6 d-block">2,345,500</span>
                                    <!--end::Number-->Tons
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-5"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Section-->
                                <div class="d-flex align-items-center me-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40px me-4">
                                        <span class="symbol-label">
                                            <i class="ki-duotone ki-truck text-gray-600 fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Trucks</a>
                                        <!--end::Title-->
                                        <!--begin::Desc-->
                                        <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">1,460
                                            Trucks</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Wrapper-->
                                <div class="text-gray-500 fw-bold fs-7 text-end">
                                    <!--begin::Number-->
                                    <span class="text-gray-800 fw-bold fs-6 d-block">457,200</span>
                                    <!--end::Number-->Tons
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-5"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Section-->
                                <div class="d-flex align-items-center me-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40px me-4">
                                        <span class="symbol-label">
                                            <i class="ki-duotone ki-airplane-square text-gray-600 fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Planes</a>
                                        <!--end::Title-->
                                        <!--begin::Desc-->
                                        <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">8
                                            Aircrafts</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Wrapper-->
                                <div class="text-gray-500 fw-bold fs-7 text-end">
                                    <!--begin::Number-->
                                    <span class="text-gray-800 fw-bold fs-6 d-block">1,240</span>
                                    <!--end::Number-->Tons
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-5"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Section-->
                                <div class="d-flex align-items-center me-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40px me-4">
                                        <span class="symbol-label">
                                            <i class="ki-duotone ki-bus text-gray-600 fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Content-->
                                    <div class="me-5">
                                        <!--begin::Title-->
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Trains</a>
                                        <!--end::Title-->
                                        <!--begin::Desc-->
                                        <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">36
                                            Trains</span>
                                        <!--end::Desc-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Wrapper-->
                                <div class="text-gray-500 fw-bold fs-7 text-end">
                                    <!--begin::Number-->
                                    <span class="text-gray-800 fw-bold fs-6 d-block">804,300</span>
                                    <!--end::Number-->Tons
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Item-->
                            <div class="text-center pt-9">
                                <a href="{{ route('metronic.apps.ecommerce.catalog.add_product') }}"
                                    class="btn btn-primary">Add Vehicle</a>
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::List widget 11-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-8">
                    <!--begin::Chart widget 17-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Header-->
                        <div class="card-header pt-7">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-900">Sales Statistics</span>
                                <span class="text-gray-500 pt-2 fw-semibold fs-6">Top Selling Countries</span>
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
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold w-100px py-4"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Remove</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Mute</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Settings</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                                <!--end::Menu-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-5">
                            <!--begin::Chart container-->
                            <div id="kt_charts_widget_16_chart" class="w-100 h-350px"></div>
                            <!--end::Chart container-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Chart widget 17-->
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
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">Finance
                                                    Module</span>
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
    <!--begin::Modal - New Target-->
    <div class="modal fade" id="kt_modal_bidding" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-kt-modal-action-type="close">
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
                    <form id="kt_modal_bidding_form" class="form" action="#">
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3">Place your bids</h1>
                            <!--end::Title-->
                            <!--begin::Description-->
                            <div class="text-muted fw-semibold fs-5">If you need more info, please check
                                <a href="#" class="fw-bold link-primary">Bidding Guidelines</a>.
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Bid Amount</span>
                                <span class="ms-1" data-bs-toggle="tooltip"
                                    title="Specify the bid amount to place in.">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Bid options-->
                            <div class="d-flex flex-stack gap-5 mb-3">
                                <button type="button" class="btn btn-light-primary w-100"
                                    data-kt-modal-bidding="option">10</button>
                                <button type="button" class="btn btn-light-primary w-100"
                                    data-kt-modal-bidding="option">50</button>
                                <button type="button" class="btn btn-light-primary w-100"
                                    data-kt-modal-bidding="option">100</button>
                            </div>
                            <!--begin::Bid options-->
                            <input type="text" class="form-control form-control-solid"
                                placeholder="Enter Bid Amount" name="bid_amount" />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-8">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Currency Type</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Select the currency type.">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Select2-->
                            <select class="form-select form-select-solid" data-control="select2"
                                data-hide-search="true" data-placeholder="Select a Currency Type"
                                name="currency_type">
                                <option value=""></option>
                                <option value="dollar" selected="selected">Dollar</option>
                                <option value="crypto">Crypto</option>
                            </select>
                            <!--end::Select2-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-8">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span>Currency</span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Dollar type-->
                            <div class="" data-kt-modal-bidding-type="dollar">
                                <!--begin::Select2-->
                                <select name="currency_dollar" aria-label="Select a Currency"
                                    data-placeholder="Select a currency.."
                                    class="form-select form-select-solid form-select-lg">
                                    <option data-kt-bidding-modal-option-icon="flags/united-states.svg" value="USD"
                                        selected="selected">
                                        <b>USD</b>&nbsp;-&nbsp;USA dollar
                                    </option>
                                    <option data-kt-bidding-modal-option-icon="flags/united-kingdom.svg" value="GBP">
                                        <b>GBP</b>&nbsp;-&nbsp;British pound
                                    </option>
                                    <option data-kt-bidding-modal-option-icon="flags/australia.svg" value="AUD">
                                        <b>AUD</b>&nbsp;-&nbsp;Australian dollar
                                    </option>
                                    <option data-kt-bidding-modal-option-icon="flags/japan.svg" value="JPY">
                                        <b>JPY</b>&nbsp;-&nbsp;Japanese yen
                                    </option>
                                    <option data-kt-bidding-modal-option-icon="flags/sweden.svg" value="SEK">
                                        <b>SEK</b>&nbsp;-&nbsp;Swedish krona
                                    </option>
                                    <option data-kt-bidding-modal-option-icon="flags/canada.svg" value="CAD">
                                        <b>CAD</b>&nbsp;-&nbsp;Canadian dollar
                                    </option>
                                    <option data-kt-bidding-modal-option-icon="flags/switzerland.svg" value="CHF">
                                        <b>CHF</b>&nbsp;-&nbsp;Swiss franc
                                    </option>
                                </select>
                                <!--end::Select2-->
                            </div>
                            <!--end::Dollar type-->
                            <!--begin::Crypto type-->
                            <div class="d-none" data-kt-modal-bidding-type="crypto">
                                <!--begin::Select2-->
                                <select name="currency_crypto" aria-label="Select a Coin"
                                    data-placeholder="Select a currency.."
                                    class="form-select form-select-solid form-select-lg">
                                    <option data-kt-bidding-modal-option-icon="svg/coins/bitcoin.svg" value="1"
                                        selected="selected">Bitcoin</option>
                                    <option data-kt-bidding-modal-option-icon="svg/coins/binance.svg" value="2">
                                        Binance</option>
                                    <option data-kt-bidding-modal-option-icon="svg/coins/chainlink.svg" value="3">
                                        Chainlink</option>
                                    <option data-kt-bidding-modal-option-icon="svg/coins/coin.svg" value="4">Coin
                                    </option>
                                    <option data-kt-bidding-modal-option-icon="svg/coins/ethereum.svg" value="5">
                                        Ethereum</option>
                                    <option data-kt-bidding-modal-option-icon="svg/coins/filecoin.svg" value="6">
                                        Filecoin</option>
                                </select>
                                <!--end::Select2-->
                            </div>
                            <!--end::Crypto type-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Notice-->
                        <!--begin::Notice-->
                        <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
                            <!--begin::Icon-->
                            <i class="ki-duotone ki-wallet fs-2tx text-primary me-4">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                            <!--end::Icon-->
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-grow-1">
                                <!--begin::Content-->
                                <div class="fw-semibold">
                                    <h4 class="text-gray-900 fw-bold">Top up funds</h4>
                                    <div class="fs-6 text-gray-700">Not enough funds in your wallet?
                                        <a href="{{ route('metronic.utilities.modals.wizards.top_up_wallet') }}"
                                            class="text-bolder">Top up wallet</a>.
                                    </div>
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Notice-->
                        <!--end::Notice-->
                        <!--begin::Actions-->
                        <div class="text-center">
                            <button type="reset" class="btn btn-light me-3"
                                data-kt-modal-action-type="cancel">Cancel</button>
                            <button type="submit" class="btn btn-primary" data-kt-modal-action-type="submit">
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
    <!--begin::Modal - View Users-->
    <div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
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
                <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                    <!--begin::Heading-->
                    <div class="text-center mb-13">
                        <!--begin::Title-->
                        <h1 class="mb-3">Browse Users</h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">If you need more info, please check out our
                            <a href="#" class="link-primary fw-bold">Users Directory</a>.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Users-->
                    <div class="mb-15">
                        <!--begin::List-->
                        <div class="mh-375px scroll-y me-n7 pe-7">
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Emma
                                            Smith
                                            <span class="badge badge-light fs-8 fw-semibold ms-2">Art Director</span></a>
                                        <!--end::Name-->
                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">$23,000</div>
                                        <div class="fs-7 text-muted">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Melody
                                            Macy
                                            <span class="badge badge-light fs-8 fw-semibold ms-2">Marketing
                                                Analytic</span></a>
                                        <!--end::Name-->
                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">melody@altbox.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">$50,500</div>
                                        <div class="fs-7 text-muted">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Max
                                            Smith
                                            <span class="badge badge-light fs-8 fw-semibold ms-2">Software
                                                Enginer</span></a>
                                        <!--end::Name-->
                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">max@kt.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">$75,900</div>
                                        <div class="fs-7 text-muted">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Sean
                                            Bean
                                            <span class="badge badge-light fs-8 fw-semibold ms-2">Web Developer</span></a>
                                        <!--end::Name-->
                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">sean@dellito.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">$10,500</div>
                                        <div class="fs-7 text-muted">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Brian
                                            Cox
                                            <span class="badge badge-light fs-8 fw-semibold ms-2">UI/UX
                                                Designer</span></a>
                                        <!--end::Name-->
                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">brian@exchange.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">$20,000</div>
                                        <div class="fs-7 text-muted">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Mikaela
                                            Collins
                                            <span class="badge badge-light fs-8 fw-semibold ms-2">Head Of
                                                Marketing</span></a>
                                        <!--end::Name-->
                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">mik@pex.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">$9,300</div>
                                        <div class="fs-7 text-muted">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="assets/media/avatars/300-9.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Francis
                                            Mitcham
                                            <span class="badge badge-light fs-8 fw-semibold ms-2">Software
                                                Arcitect</span></a>
                                        <!--end::Name-->
                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">$15,000</div>
                                        <div class="fs-7 text-muted">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Olivia
                                            Wild
                                            <span class="badge badge-light fs-8 fw-semibold ms-2">System Admin</span></a>
                                        <!--end::Name-->
                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">$23,000</div>
                                        <div class="fs-7 text-muted">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Neil
                                            Owen
                                            <span class="badge badge-light fs-8 fw-semibold ms-2">Account
                                                Manager</span></a>
                                        <!--end::Name-->
                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">$45,800</div>
                                        <div class="fs-7 text-muted">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="assets/media/avatars/300-23.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Dan
                                            Wilson
                                            <span class="badge badge-light fs-8 fw-semibold ms-2">Web Desinger</span></a>
                                        <!--end::Name-->
                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">dam@consilting.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">$90,500</div>
                                        <div class="fs-7 text-muted">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Emma
                                            Bold
                                            <span class="badge badge-light fs-8 fw-semibold ms-2">Corporate
                                                Finance</span></a>
                                        <!--end::Name-->
                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">emma@intenso.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">$5,000</div>
                                        <div class="fs-7 text-muted">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Ana
                                            Crown
                                            <span class="badge badge-light fs-8 fw-semibold ms-2">Customer
                                                Relationship</span></a>
                                        <!--end::Name-->
                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">$70,000</div>
                                        <div class="fs-7 text-muted">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Robert
                                            Doe
                                            <span class="badge badge-light fs-8 fw-semibold ms-2">Marketing
                                                Executive</span></a>
                                        <!--end::Name-->
                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">robert@benko.com</div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">$45,500</div>
                                        <div class="fs-7 text-muted">Sales</div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::List-->
                    </div>
                    <!--end::Users-->
                    <!--begin::Notice-->
                    <div class="d-flex justify-content-between">
                        <!--begin::Label-->
                        <div class="fw-semibold">
                            <label class="fs-6">Adding Users by Team Members</label>
                            <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
                        </div>
                        <!--end::Label-->
                        <!--begin::Switch-->
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="" checked="checked" />
                            <span class="form-check-label fw-semibold text-muted">Allowed</span>
                        </label>
                        <!--end::Switch-->
                    </div>
                    <!--end::Notice-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - View Users-->
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
    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <script src="assets/plugins/custom/vis-timeline/vis-timeline.bundle.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="assets/js/widgets.bundle.js"></script>
    <script src="assets/js/custom/widgets.js"></script>
    <script src="assets/js/custom/apps/chat/chat.js"></script>
    <script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="assets/js/custom/utilities/modals/bidding.js"></script>
@endsection
