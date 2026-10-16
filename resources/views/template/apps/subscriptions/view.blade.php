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
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">View
                    Subscriptions</h1>
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
                    <li class="breadcrumb-item text-muted">Subscription</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <!--begin::Filter menu-->
                <div class="m-0">
                    <!--begin::Menu toggle-->
                    <a href="#" class="btn btn-sm btn-flex btn-secondary fw-bold" data-kt-menu-trigger="click"
                        data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-filter fs-6 text-muted me-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>Filter</a>
                    <!--end::Menu toggle-->
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                        id="kt_menu_69981c39ae407">
                        <!--begin::Header-->
                        <div class="px-7 py-5">
                            <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Menu separator-->
                        <div class="separator border-gray-200"></div>
                        <!--end::Menu separator-->
                        <!--begin::Form-->
                        <div class="px-7 py-5">
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-semibold">Status:</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div>
                                    <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true"
                                        data-close-on-select="false" data-placeholder="Select option"
                                        data-dropdown-parent="#kt_menu_69981c39ae407" data-allow-clear="true">
                                        <option></option>
                                        <option value="1">Approved</option>
                                        <option value="2">Pending</option>
                                        <option value="2">In Process</option>
                                        <option value="2">Rejected</option>
                                    </select>
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-semibold">Member Type:</label>
                                <!--end::Label-->
                                <!--begin::Options-->
                                <div class="d-flex">
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                        <span class="form-check-label">Author</span>
                                    </label>
                                    <!--end::Options-->
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                        <span class="form-check-label">Customer</span>
                                    </label>
                                    <!--end::Options-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-semibold">Notifications:</label>
                                <!--end::Label-->
                                <!--begin::Switch-->
                                <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="" name="notifications"
                                        checked="checked" />
                                    <label class="form-check-label">Enabled</label>
                                </div>
                                <!--end::Switch-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                                    data-kt-menu-dismiss="true">Reset</button>
                                <button type="submit" class="btn btn-sm btn-primary"
                                    data-kt-menu-dismiss="true">Apply</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Form-->
                    </div>
                    <!--end::Menu 1-->
                </div>
                <!--end::Filter menu-->
                <!--begin::Secondary button-->
                <!--end::Secondary button-->
                <!--begin::Primary button-->
                <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                    data-bs-target="#kt_modal_create_app">Create</a>
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
                <div class="d-flex flex-column flex-lg-row">
                    <!--begin::Content-->
                    <div class="flex-lg-row-fluid me-lg-15 order-2 order-lg-1 mb-10 mb-lg-0">
                        <!--begin::Card-->
                        <div class="card card-flush pt-3 mb-5 mb-xl-10">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2 class="fw-bold">Product Details</h2>
                                </div>
                                <!--begin::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <a href="{{ route('metronic.apps.subscriptions.add') }}"
                                        class="btn btn-light-primary">Update Product</a>
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-3">
                                <!--begin::Section-->
                                <div class="mb-10">
                                    <!--begin::Title-->
                                    <h5 class="mb-4">Billing Address:</h5>
                                    <!--end::Title-->
                                    <!--begin::Details-->
                                    <div class="d-flex flex-wrap py-5">
                                        <!--begin::Row-->
                                        <div class="flex-equal me-5">
                                            <!--begin::Details-->
                                            <table class="table fs-6 fw-semibold gs-0 gy-2 gx-2 m-0">
                                                <!--begin::Row-->
                                                <tr>
                                                    <td class="text-gray-500 min-w-175px w-175px">Bill to:</td>
                                                    <td class="text-gray-800 min-w-200px">
                                                        <a href="{{ route('metronic.apps.customers.view') }}"
                                                            class="text-gray-800 text-hover-primary">smith@kpmg.com</a>
                                                    </td>
                                                </tr>
                                                <!--end::Row-->
                                                <!--begin::Row-->
                                                <tr>
                                                    <td class="text-gray-500">Customer Name:</td>
                                                    <td class="text-gray-800">Emma Smith</td>
                                                </tr>
                                                <!--end::Row-->
                                                <!--begin::Row-->
                                                <tr>
                                                    <td class="text-gray-500">Address:</td>
                                                    <td class="text-gray-800">Floor 10, 101 Avenue of the Light Square, New
                                                        York, NY, 10050.</td>
                                                </tr>
                                                <!--end::Row-->
                                                <!--begin::Row-->
                                                <tr>
                                                    <td class="text-gray-500">Phone:</td>
                                                    <td class="text-gray-800">(555) 555-1234</td>
                                                </tr>
                                                <!--end::Row-->
                                            </table>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Row-->
                                        <div class="flex-equal">
                                            <!--begin::Details-->
                                            <table class="table fs-6 fw-semibold gs-0 gy-2 gx-2 m-0">
                                                <!--begin::Row-->
                                                <tr>
                                                    <td class="text-gray-500 min-w-175px w-175px">Subscribed Product:</td>
                                                    <td class="text-gray-800 min-w-200px">
                                                        <a href="#" class="text-gray-800 text-hover-primary">Basic
                                                            Bundle</a>
                                                    </td>
                                                </tr>
                                                <!--end::Row-->
                                                <!--begin::Row-->
                                                <tr>
                                                    <td class="text-gray-500">Subscription Fees:</td>
                                                    <td class="text-gray-800">$149.99 / Year</td>
                                                </tr>
                                                <!--end::Row-->
                                                <!--begin::Row-->
                                                <tr>
                                                    <td class="text-gray-500">Billing method:</td>
                                                    <td class="text-gray-800">Annually</td>
                                                </tr>
                                                <!--end::Row-->
                                                <!--begin::Row-->
                                                <tr>
                                                    <td class="text-gray-500">Currency:</td>
                                                    <td class="text-gray-800">USD - US Dollar</td>
                                                </tr>
                                                <!--end::Row-->
                                            </table>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="mb-0">
                                    <!--begin::Title-->
                                    <h5 class="mb-4">Subscribed Products:</h5>
                                    <!--end::Title-->
                                    <!--begin::Product table-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table align-middle table-row-dashed fs-6 gy-4 mb-0">
                                            <!--begin::Table head-->
                                            <thead>
                                                <!--begin::Table row-->
                                                <tr
                                                    class="border-bottom border-gray-200 text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                                    <th class="min-w-150px">Product</th>
                                                    <th class="min-w-125px">Subscription ID</th>
                                                    <th class="min-w-125px">Qty</th>
                                                    <th class="min-w-125px">Total</th>
                                                    <th class="text-end min-w-70px">Actions</th>
                                                </tr>
                                                <!--end::Table row-->
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody class="fw-semibold text-gray-800">
                                                <tr>
                                                    <td>
                                                        <label class="w-150px">Basic Bundle</label>
                                                        <div class="fw-normal text-gray-600">Basic yearly bundle</div>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-light-danger">sub_4567_8765</span>
                                                    </td>
                                                    <td>1</td>
                                                    <td>$149.99 / Year</td>
                                                    <td class="text-end">
                                                        <!--begin::Action-->
                                                        <a href="#"
                                                            class="btn btn-icon btn-active-light-primary w-30px h-30px"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-setting-3 fs-3">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                                <span class="path4"></span>
                                                                <span class="path5"></span>
                                                            </i>
                                                        </a>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-6 w-200px py-4"
                                                            data-kt-menu="true">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Pause
                                                                    Subscription</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3"
                                                                    data-kt-subscriptions-view-action="delete">Edit
                                                                    Subscription</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link text-danger px-3"
                                                                    data-kt-subscriptions-view-action="edit">Cancel
                                                                    Subscription</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu-->
                                                        <!--end::Action-->
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="w-150px">Pro Bundle</label>
                                                        <div class="fw-normal text-gray-500">Basic yearly bundle</div>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-light-danger">sub_4567_3433</span>
                                                    </td>
                                                    <td>5</td>
                                                    <td>$949.99 / Year</td>
                                                    <td class="text-end">
                                                        <!--begin::Action-->
                                                        <a href="#"
                                                            class="btn btn-icon btn-active-light-primary w-30px h-30px"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-setting-3 fs-3">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                                <span class="path4"></span>
                                                                <span class="path5"></span>
                                                            </i>
                                                        </a>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-6 w-200px py-4"
                                                            data-kt-menu="true">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Pause
                                                                    Subscription</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3"
                                                                    data-kt-subscriptions-view-action="delete">Edit
                                                                    Subscription</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link text-danger px-3"
                                                                    data-kt-subscriptions-view-action="edit">Cancel
                                                                    Subscription</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu-->
                                                        <!--end::Action-->
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Product table-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                        <!--begin::Card-->
                        <div class="card card-flush pt-3 mb-5 mb-xl-10">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>Recent Events</h2>
                                </div>
                                <!--end::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <a href="#" class="btn btn-light-primary">View All Events</a>
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Table wrapper-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed fs-6 text-gray-600 fw-semibold gy-5"
                                        id="kt_table_customers_events">
                                        <tbody>
                                            <tr>
                                                <td class="min-w-400px">
                                                    <a href="#"
                                                        class="fw-bold text-gray-800 text-hover-primary me-1">Max
                                                        Smith</a>has made payment to
                                                    <a href="#"
                                                        class="fw-bold text-gray-800 text-hover-primary">8940-9071</a>
                                                </td>
                                                <td class="pe-0 text-gray-600 text-end min-w-200px">22 Sep 2026, 5:20 pm
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="min-w-400px">
                                                    <a href="#"
                                                        class="fw-bold text-gray-800 text-hover-primary me-1">Emma
                                                        Smith</a>has made payment to
                                                    <a href="#"
                                                        class="fw-bold text-gray-800 text-hover-primary">4161-7738</a>
                                                </td>
                                                <td class="pe-0 text-gray-600 text-end min-w-200px">24 Jun 2026, 11:30 am
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="min-w-400px">
                                                    <a href="#"
                                                        class="fw-bold text-gray-800 text-hover-primary me-1">Melody
                                                        Macy</a>has made payment to
                                                    <a href="#"
                                                        class="fw-bold text-gray-800 text-hover-primary">1822-6182</a>
                                                </td>
                                                <td class="pe-0 text-gray-600 text-end min-w-200px">22 Sep 2026, 6:05 pm
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="min-w-400px">
                                                    <a href="#"
                                                        class="fw-bold text-gray-800 text-hover-primary me-1">Brian
                                                        Cox</a>has made payment to
                                                    <a href="#"
                                                        class="fw-bold text-gray-800 text-hover-primary">2519-6819</a>
                                                </td>
                                                <td class="pe-0 text-gray-600 text-end min-w-200px">24 Jun 2026, 5:20 pm
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="min-w-400px">Invoice
                                                    <a href="#"
                                                        class="fw-bold text-gray-800 text-hover-primary me-1">8508-7054</a>status
                                                    has changed from
                                                    <span class="badge badge-light-info me-1">In Progress</span>to
                                                    <span class="badge badge-light-primary">In Transit</span>
                                                </td>
                                                <td class="pe-0 text-gray-600 text-end min-w-200px">25 Jul 2026, 5:20 pm
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table wrapper-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                        <!--begin::Card-->
                        <div class="card card-flush pt-3 mb-5 mb-xl-10">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>Invoices</h2>
                                </div>
                                <!--end::Card title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Tab nav-->
                                    <ul class="nav nav-stretch fs-5 fw-semibold nav-line-tabs nav-line-tabs-2x border-transparent"
                                        role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a id="kt_referrals_year_tab" class="nav-link text-active-primary active"
                                                data-bs-toggle="tab" role="tab"
                                                href="#kt_customer_details_invoices_1">This Year</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a id="kt_referrals_2019_tab" class="nav-link text-active-primary ms-3"
                                                data-bs-toggle="tab" role="tab"
                                                href="#kt_customer_details_invoices_2">2020</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a id="kt_referrals_2018_tab" class="nav-link text-active-primary ms-3"
                                                data-bs-toggle="tab" role="tab"
                                                href="#kt_customer_details_invoices_3">2019</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a id="kt_referrals_2017_tab" class="nav-link text-active-primary ms-3"
                                                data-bs-toggle="tab" role="tab"
                                                href="#kt_customer_details_invoices_4">2018</a>
                                        </li>
                                    </ul>
                                    <!--end::Tab nav-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-2">
                                <!--begin::Tab Content-->
                                <div id="kt_referred_users_tab_content" class="tab-content">
                                    <!--begin::Tab panel-->
                                    <div id="kt_customer_details_invoices_1" class="tab-pane fade show active"
                                        role="tabpanel">
                                        <!--begin::Table wrapper-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table id="kt_customer_details_invoices_table_1"
                                                class="table align-middle table-row-dashed fs-6 fw-bold gs-0 gy-4 p-0 m-0">
                                                <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bold">
                                                    <tr class="text-start text-gray-500">
                                                        <th class="min-w-100px">Order ID</th>
                                                        <th class="min-w-100px">Amount</th>
                                                        <th class="min-w-100px">Status</th>
                                                        <th class="min-w-125px">Date</th>
                                                        <th class="w-100px">Invoice</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="fs-6 fw-semibold text-gray-600">
                                                    <tr>
                                                        <td>
                                                            <a href="#"
                                                                class="text-gray-600 text-hover-primary">102445788</a>
                                                        </td>
                                                        <td class="text-success">$38.00</td>
                                                        <td>
                                                            <span class="badge badge-light-danger">Rejected</span>
                                                        </td>
                                                        <td>Nov 01, 2020</td>
                                                        <td class="">
                                                            <button
                                                                class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#"
                                                                class="text-gray-600 text-hover-primary">423445721</a>
                                                        </td>
                                                        <td class="text-danger">$-2.60</td>
                                                        <td>
                                                            <span class="badge badge-light-success">Approved</span>
                                                        </td>
                                                        <td>Oct 24, 2020</td>
                                                        <td class="">
                                                            <button
                                                                class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#"
                                                                class="text-gray-600 text-hover-primary">312445984</a>
                                                        </td>
                                                        <td class="text-success">$76.00</td>
                                                        <td>
                                                            <span class="badge badge-light-info">In progress</span>
                                                        </td>
                                                        <td>Oct 08, 2020</td>
                                                        <td class="">
                                                            <button
                                                                class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#"
                                                                class="text-gray-600 text-hover-primary">312445984</a>
                                                        </td>
                                                        <td class="text-success">$5.00</td>
                                                        <td>
                                                            <span class="badge badge-light-warning">Pending</span>
                                                        </td>
                                                        <td>Sep 15, 2020</td>
                                                        <td class="">
                                                            <button
                                                                class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#"
                                                                class="text-gray-600 text-hover-primary">523445943</a>
                                                        </td>
                                                        <td class="text-danger">$-1.30</td>
                                                        <td>
                                                            <span class="badge badge-light-warning">Pending</span>
                                                        </td>
                                                        <td>May 30, 2020</td>
                                                        <td class="">
                                                            <button
                                                                class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Table wrapper-->
                                    </div>
                                    <!--end::Tab panel-->
                                    <!--begin::Tab panel-->
                                    <div id="kt_customer_details_invoices_2" class="tab-pane fade" role="tabpanel">
                                        <!--begin::Table wrapper-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table id="kt_customer_details_invoices_table_2"
                                                class="table align-middle table-row-dashed fs-6 fw-bold gs-0 gy-4 p-0 m-0">
                                                <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bold">
                                                    <tr class="text-start text-gray-500">
                                                        <th class="min-w-100px">Order ID</th>
                                                        <th class="min-w-100px">Amount</th>
                                                        <th class="min-w-100px">Status</th>
                                                        <th class="min-w-125px">Date</th>
                                                        <th class="w-100px">Invoice</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="fs-6 fw-semibold text-gray-600">
                                                    <tr>
                                                        <td>
                                                            <a href="#"
                                                                class="text-gray-600 text-hover-primary">523445943</a>
                                                        </td>
                                                        <td class="text-danger">$-1.30</td>
                                                        <td>
                                                            <span class="badge badge-light-success">Approved</span>
                                                        </td>
                                                        <td>May 30, 2020</td>
                                                        <td class="">
                                                            <button
                                                                class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#"
                                                                class="text-gray-600 text-hover-primary">231445943</a>
                                                        </td>
                                                        <td class="text-success">$204.00</td>
                                                        <td>
                                                            <span class="badge badge-light-danger">Rejected</span>
                                                        </td>
                                                        <td>Apr 22, 2020</td>
                                                        <td class="">
                                                            <button
                                                                class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#"
                                                                class="text-gray-600 text-hover-primary">426445943</a>
                                                        </td>
                                                        <td class="text-success">$31.00</td>
                                                        <td>
                                                            <span class="badge badge-light-warning">Pending</span>
                                                        </td>
                                                        <td>Feb 09, 2020</td>
                                                        <td class="">
                                                            <button
                                                                class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#"
                                                                class="text-gray-600 text-hover-primary">984445943</a>
                                                        </td>
                                                        <td class="text-success">$52.00</td>
                                                        <td>
                                                            <span class="badge badge-light-success">Approved</span>
                                                        </td>
                                                        <td>Nov 01, 2020</td>
                                                        <td class="">
                                                            <button
                                                                class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#"
                                                                class="text-gray-600 text-hover-primary">324442313</a>
                                                        </td>
                                                        <td class="text-danger">$-0.80</td>
                                                        <td>
                                                            <span class="badge badge-light-info">In progress</span>
                                                        </td>
                                                        <td>Jan 04, 2020</td>
                                                        <td class="">
                                                            <button
                                                                class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Table wrapper-->
                                    </div>
                                    <!--end::Tab panel-->
                                    <!--begin::Tab panel-->
                                    <div id="kt_customer_details_invoices_3" class="tab-pane fade" role="tabpanel">
                                        <!--begin::Table wrapper-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table id="kt_customer_details_invoices_table_3"
                                                class="table align-middle table-row-dashed fs-6 fw-bold gs-0 gy-4 p-0 m-0">
                                                <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bold">
                                                    <tr class="text-start text-gray-500">
                                                        <th class="min-w-100px">Order ID</th>
                                                        <th class="min-w-100px">Amount</th>
                                                        <th class="min-w-100px">Status</th>
                                                        <th class="min-w-125px">Date</th>
                                                        <th class="w-100px">Invoice</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="fs-6 fw-semibold text-gray-600">
                                                    <tr>
                                                        <td>
                                                            <a href="#"
                                                                class="text-gray-600 text-hover-primary">426445943</a>
                                                        </td>
                                                        <td class="text-success">$31.00</td>
                                                        <td>
                                                            <span class="badge badge-light-info">In progress</span>
                                                        </td>
                                                        <td>Feb 09, 2020</td>
                                                        <td class="">
                                                            <button
                                                                class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#"
                                                                class="text-gray-600 text-hover-primary">984445943</a>
                                                        </td>
                                                        <td class="text-success">$52.00</td>
                                                        <td>
                                                            <span class="badge badge-light-success">Approved</span>
                                                        </td>
                                                        <td>Nov 01, 2020</td>
                                                        <td class="">
                                                            <button
                                                                class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#"
                                                                class="text-gray-600 text-hover-primary">324442313</a>
                                                        </td>
                                                        <td class="text-danger">$-0.80</td>
                                                        <td>
                                                            <span class="badge badge-light-success">Approved</span>
                                                        </td>
                                                        <td>Jan 04, 2020</td>
                                                        <td class="">
                                                            <button
                                                                class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#"
                                                                class="text-gray-600 text-hover-primary">312445984</a>
                                                        </td>
                                                        <td class="text-success">$5.00</td>
                                                        <td>
                                                            <span class="badge badge-light-success">Approved</span>
                                                        </td>
                                                        <td>Sep 15, 2020</td>
                                                        <td class="">
                                                            <button
                                                                class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#"
                                                                class="text-gray-600 text-hover-primary">102445788</a>
                                                        </td>
                                                        <td class="text-success">$38.00</td>
                                                        <td>
                                                            <span class="badge badge-light-success">Approved</span>
                                                        </td>
                                                        <td>Nov 01, 2020</td>
                                                        <td class="">
                                                            <button
                                                                class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Table wrapper-->
                                    </div>
                                    <!--end::Tab panel-->
                                    <!--begin::Tab panel-->
                                    <div id="kt_customer_details_invoices_4" class="tab-pane fade" role="tabpanel">
                                        <!--begin::Table wrapper-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table id="kt_customer_details_invoices_table_4"
                                                class="table align-middle table-row-dashed fs-6 fw-bold gs-0 gy-4 p-0 m-0">
                                                <thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bold">
                                                    <tr class="text-start text-gray-500">
                                                        <th class="min-w-100px">Order ID</th>
                                                        <th class="min-w-100px">Amount</th>
                                                        <th class="min-w-100px">Status</th>
                                                        <th class="min-w-125px">Date</th>
                                                        <th class="w-100px">Invoice</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="fs-6 fw-semibold text-gray-600">
                                                    <tr>
                                                        <td>
                                                            <a href="#"
                                                                class="text-gray-600 text-hover-primary">102445788</a>
                                                        </td>
                                                        <td class="text-success">$38.00</td>
                                                        <td>
                                                            <span class="badge badge-light-info">In progress</span>
                                                        </td>
                                                        <td>Nov 01, 2020</td>
                                                        <td class="">
                                                            <button
                                                                class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#"
                                                                class="text-gray-600 text-hover-primary">423445721</a>
                                                        </td>
                                                        <td class="text-danger">$-2.60</td>
                                                        <td>
                                                            <span class="badge badge-light-warning">Pending</span>
                                                        </td>
                                                        <td>Oct 24, 2020</td>
                                                        <td class="">
                                                            <button
                                                                class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#"
                                                                class="text-gray-600 text-hover-primary">102445788</a>
                                                        </td>
                                                        <td class="text-success">$38.00</td>
                                                        <td>
                                                            <span class="badge badge-light-danger">Rejected</span>
                                                        </td>
                                                        <td>Nov 01, 2020</td>
                                                        <td class="">
                                                            <button
                                                                class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#"
                                                                class="text-gray-600 text-hover-primary">423445721</a>
                                                        </td>
                                                        <td class="text-danger">$-2.60</td>
                                                        <td>
                                                            <span class="badge badge-light-danger">Rejected</span>
                                                        </td>
                                                        <td>Oct 24, 2020</td>
                                                        <td class="">
                                                            <button
                                                                class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#"
                                                                class="text-gray-600 text-hover-primary">426445943</a>
                                                        </td>
                                                        <td class="text-success">$31.00</td>
                                                        <td>
                                                            <span class="badge badge-light-success">Approved</span>
                                                        </td>
                                                        <td>Feb 09, 2020</td>
                                                        <td class="">
                                                            <button
                                                                class="btn btn-sm btn-light btn-active-light-primary">Download</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Table wrapper-->
                                    </div>
                                    <!--end::Tab panel-->
                                </div>
                                <!--end::Tab Content-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Content-->
                    <!--begin::Sidebar-->
                    <div class="flex-column flex-lg-row-auto w-lg-250px w-xl-300px mb-10 order-1 order-lg-2">
                        <!--begin::Card-->
                        <div class="card card-flush mb-0" data-kt-sticky="true"
                            data-kt-sticky-name="subscription-summary"
                            data-kt-sticky-offset="{default: false, lg: '200px'}"
                            data-kt-sticky-width="{lg: '250px', xl: '300px'}" data-kt-sticky-left="auto"
                            data-kt-sticky-top="150px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>Summary</h2>
                                </div>
                                <!--end::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::More options-->
                                    <a href="#" class="btn btn-sm btn-light btn-icon" data-kt-menu-trigger="click"
                                        data-kt-menu-placement="bottom-end">
                                        <i class="ki-duotone ki-dots-square fs-3">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                        </i>
                                    </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-6 w-200px py-4"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Pause Subscription</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                                data-kt-subscriptions-view-action="delete">Edit Subscription</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link text-danger px-3"
                                                data-kt-subscriptions-view-action="edit">Cancel Subscription</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                    <!--end::More options-->
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0 fs-6">
                                <!--begin::Section-->
                                <div class="mb-7">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-60px symbol-circle me-3">
                                            <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Info-->
                                        <div class="d-flex flex-column">
                                            <!--begin::Name-->
                                            <a href="#"
                                                class="fs-4 fw-bold text-gray-900 text-hover-primary me-2">Sean Bean</a>
                                            <!--end::Name-->
                                            <!--begin::Email-->
                                            <a href="#"
                                                class="fw-semibold text-gray-600 text-hover-primary">sean@dellito.com</a>
                                            <!--end::Email-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Seperator-->
                                <div class="separator separator-dashed mb-7"></div>
                                <!--end::Seperator-->
                                <!--begin::Section-->
                                <div class="mb-7">
                                    <!--begin::Title-->
                                    <h5 class="mb-4">Product details</h5>
                                    <!--end::Title-->
                                    <!--begin::Details-->
                                    <div class="mb-0">
                                        <!--begin::Plan-->
                                        <span class="badge badge-light-info me-2">Basic Bundle</span>
                                        <!--end::Plan-->
                                        <!--begin::Price-->
                                        <span class="fw-semibold text-gray-600">$149.99 / Year</span>
                                        <!--end::Price-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Seperator-->
                                <div class="separator separator-dashed mb-7"></div>
                                <!--end::Seperator-->
                                <!--begin::Section-->
                                <div class="mb-10">
                                    <!--begin::Title-->
                                    <h5 class="mb-4">Payment Details</h5>
                                    <!--end::Title-->
                                    <!--begin::Details-->
                                    <div class="mb-0">
                                        <!--begin::Card info-->
                                        <div class="fw-semibold text-gray-600 d-flex align-items-center">Mastercard
                                            <img src="assets/media/svg/card-logos/mastercard.svg" class="w-35px ms-2"
                                                alt="" />
                                        </div>
                                        <!--end::Card info-->
                                        <!--begin::Card expiry-->
                                        <div class="fw-semibold text-gray-600">Expires Dec 2024</div>
                                        <!--end::Card expiry-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Seperator-->
                                <div class="separator separator-dashed mb-7"></div>
                                <!--end::Seperator-->
                                <!--begin::Section-->
                                <div class="mb-10">
                                    <!--begin::Title-->
                                    <h5 class="mb-4">Subscription Details</h5>
                                    <!--end::Title-->
                                    <!--begin::Details-->
                                    <table class="table fs-6 fw-semibold gs-0 gy-2 gx-2">
                                        <!--begin::Row-->
                                        <tr class="">
                                            <td class="text-gray-500">Subscription ID:</td>
                                            <td class="text-gray-800">sub_4567_8765</td>
                                        </tr>
                                        <!--end::Row-->
                                        <!--begin::Row-->
                                        <tr class="">
                                            <td class="text-gray-500">Started:</td>
                                            <td class="text-gray-800">15 Apr 2021</td>
                                        </tr>
                                        <!--end::Row-->
                                        <!--begin::Row-->
                                        <tr class="">
                                            <td class="text-gray-500">Status:</td>
                                            <td>
                                                <span class="badge badge-light-success">Active</span>
                                            </td>
                                        </tr>
                                        <!--end::Row-->
                                        <!--begin::Row-->
                                        <tr class="">
                                            <td class="text-gray-500">Next Invoice:</td>
                                            <td class="text-gray-800">15 Apr 2022</td>
                                        </tr>
                                        <!--end::Row-->
                                    </table>
                                    <!--end::Details-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Actions-->
                                <div class="mb-0">
                                    <a href="{{ route('metronic.apps.subscriptions.add') }}" class="btn btn-primary"
                                        id="kt_subscriptions_create_button">Edit Subscription</a>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Sidebar-->
                </div>
                <!--end::Layout-->
            </div>
            <!--end::Content container-->
        </div>
        @endsection

        @section('body_extras')
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
                                <button
                                    class="btn btn-color-gray-500 btn-active btn-active-secondary px-6 py-3 me-2 active"
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
                                                    <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Startup
                                                    </div>
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
                                                    <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                        Enterprise
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
                                                    <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Custom
                                                    </div>
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
                                                <div class="text-muted fw-semibold">Optimal for 10+ team size and new
                                                    startup</div>
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Body-->
                                            <div class="pt-1">
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                    <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10
                                                        Active Users</span>
                                                    <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                    <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30
                                                        Project Integrations</span>
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
                                                    <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10
                                                        Active Users</span>
                                                    <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                    <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30
                                                        Project Integrations</span>
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
                                                <div class="text-muted fw-semibold">Optimal for 1000+ team and enterpise
                                                </div>
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Body-->
                                            <div class="pt-1">
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                    <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10
                                                        Active Users</span>
                                                    <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-7">
                                                    <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30
                                                        Project Integrations</span>
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
                                                    <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited
                                                        Cloud Space</span>
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
                                                    <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited
                                                        Project Integrations</span>
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
                                                    <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited
                                                        Cloud Space</span>
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
        <!--begin::Modal - Create App-->
        <div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-900px">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header">
                        <!--begin::Modal title-->
                        <h2>Create App</h2>
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
                    <div class="modal-body py-lg-10 px-lg-10">
                        <!--begin::Stepper-->
                        <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid"
                            id="kt_modal_create_app_stepper">
                            <!--begin::Aside-->
                            <div
                                class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
                                <!--begin::Nav-->
                                <div class="stepper-nav ps-lg-10">
                                    <!--begin::Step 1-->
                                    <div class="stepper-item current" data-kt-stepper-element="nav">
                                        <!--begin::Wrapper-->
                                        <div class="stepper-wrapper">
                                            <!--begin::Icon-->
                                            <div class="stepper-icon w-40px h-40px">
                                                <i class="ki-duotone ki-check stepper-check fs-2"></i>
                                                <span class="stepper-number">1</span>
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Label-->
                                            <div class="stepper-label">
                                                <h3 class="stepper-title">Details</h3>
                                                <div class="stepper-desc">Name your App</div>
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Line-->
                                        <div class="stepper-line h-40px"></div>
                                        <!--end::Line-->
                                    </div>
                                    <!--end::Step 1-->
                                    <!--begin::Step 2-->
                                    <div class="stepper-item" data-kt-stepper-element="nav">
                                        <!--begin::Wrapper-->
                                        <div class="stepper-wrapper">
                                            <!--begin::Icon-->
                                            <div class="stepper-icon w-40px h-40px">
                                                <i class="ki-duotone ki-check stepper-check fs-2"></i>
                                                <span class="stepper-number">2</span>
                                            </div>
                                            <!--begin::Icon-->
                                            <!--begin::Label-->
                                            <div class="stepper-label">
                                                <h3 class="stepper-title">Frameworks</h3>
                                                <div class="stepper-desc">Define your app framework</div>
                                            </div>
                                            <!--begin::Label-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Line-->
                                        <div class="stepper-line h-40px"></div>
                                        <!--end::Line-->
                                    </div>
                                    <!--end::Step 2-->
                                    <!--begin::Step 3-->
                                    <div class="stepper-item" data-kt-stepper-element="nav">
                                        <!--begin::Wrapper-->
                                        <div class="stepper-wrapper">
                                            <!--begin::Icon-->
                                            <div class="stepper-icon w-40px h-40px">
                                                <i class="ki-duotone ki-check stepper-check fs-2"></i>
                                                <span class="stepper-number">3</span>
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Label-->
                                            <div class="stepper-label">
                                                <h3 class="stepper-title">Database</h3>
                                                <div class="stepper-desc">Select the app database type</div>
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Line-->
                                        <div class="stepper-line h-40px"></div>
                                        <!--end::Line-->
                                    </div>
                                    <!--end::Step 3-->
                                    <!--begin::Step 4-->
                                    <div class="stepper-item" data-kt-stepper-element="nav">
                                        <!--begin::Wrapper-->
                                        <div class="stepper-wrapper">
                                            <!--begin::Icon-->
                                            <div class="stepper-icon w-40px h-40px">
                                                <i class="ki-duotone ki-check stepper-check fs-2"></i>
                                                <span class="stepper-number">4</span>
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Label-->
                                            <div class="stepper-label">
                                                <h3 class="stepper-title">Billing</h3>
                                                <div class="stepper-desc">Provide payment details</div>
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Line-->
                                        <div class="stepper-line h-40px"></div>
                                        <!--end::Line-->
                                    </div>
                                    <!--end::Step 4-->
                                    <!--begin::Step 5-->
                                    <div class="stepper-item mark-completed" data-kt-stepper-element="nav">
                                        <!--begin::Wrapper-->
                                        <div class="stepper-wrapper">
                                            <!--begin::Icon-->
                                            <div class="stepper-icon w-40px h-40px">
                                                <i class="ki-duotone ki-check stepper-check fs-2"></i>
                                                <span class="stepper-number">5</span>
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Label-->
                                            <div class="stepper-label">
                                                <h3 class="stepper-title">Completed</h3>
                                                <div class="stepper-desc">Review and Submit</div>
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Step 5-->
                                </div>
                                <!--end::Nav-->
                            </div>
                            <!--begin::Aside-->
                            <!--begin::Content-->
                            <div class="flex-row-fluid py-lg-5 px-lg-15">
                                <!--begin::Form-->
                                <form class="form" novalidate="novalidate" id="kt_modal_create_app_form">
                                    <!--begin::Step 1-->
                                    <div class="current" data-kt-stepper-element="content">
                                        <div class="w-100">
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-10">
                                                <!--begin::Label-->
                                                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                    <span class="required">App Name</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip"
                                                        title="Specify your unique app name">
                                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text"
                                                    class="form-control form-control-lg form-control-solid" name="name"
                                                    placeholder="" value="" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row">
                                                <!--begin::Label-->
                                                <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                                                    <span class="required">Category</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip"
                                                        title="Select your app category">
                                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin:Options-->
                                                <div class="fv-row">
                                                    <!--begin:Option-->
                                                    <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                        <!--begin:Label-->
                                                        <span class="d-flex align-items-center me-2">
                                                            <!--begin:Icon-->
                                                            <span class="symbol symbol-50px me-6">
                                                                <span class="symbol-label bg-light-primary">
                                                                    <i class="ki-duotone ki-compass fs-1 text-primary">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </i>
                                                                </span>
                                                            </span>
                                                            <!--end:Icon-->
                                                            <!--begin:Info-->
                                                            <span class="d-flex flex-column">
                                                                <span class="fw-bold fs-6">Quick Online Courses</span>
                                                                <span class="fs-7 text-muted">Creating a clear text
                                                                    structure is just one SEO</span>
                                                            </span>
                                                            <!--end:Info-->
                                                        </span>
                                                        <!--end:Label-->
                                                        <!--begin:Input-->
                                                        <span class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio"
                                                                name="category" value="1" />
                                                        </span>
                                                        <!--end:Input-->
                                                    </label>
                                                    <!--end::Option-->
                                                    <!--begin:Option-->
                                                    <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                        <!--begin:Label-->
                                                        <span class="d-flex align-items-center me-2">
                                                            <!--begin:Icon-->
                                                            <span class="symbol symbol-50px me-6">
                                                                <span class="symbol-label bg-light-danger">
                                                                    <i class="ki-duotone ki-element-11 fs-1 text-danger">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                        <span class="path3"></span>
                                                                        <span class="path4"></span>
                                                                    </i>
                                                                </span>
                                                            </span>
                                                            <!--end:Icon-->
                                                            <!--begin:Info-->
                                                            <span class="d-flex flex-column">
                                                                <span class="fw-bold fs-6">Face to Face Discussions</span>
                                                                <span class="fs-7 text-muted">Creating a clear text
                                                                    structure is just one aspect</span>
                                                            </span>
                                                            <!--end:Info-->
                                                        </span>
                                                        <!--end:Label-->
                                                        <!--begin:Input-->
                                                        <span class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio"
                                                                name="category" value="2" />
                                                        </span>
                                                        <!--end:Input-->
                                                    </label>
                                                    <!--end::Option-->
                                                    <!--begin:Option-->
                                                    <label class="d-flex flex-stack cursor-pointer">
                                                        <!--begin:Label-->
                                                        <span class="d-flex align-items-center me-2">
                                                            <!--begin:Icon-->
                                                            <span class="symbol symbol-50px me-6">
                                                                <span class="symbol-label bg-light-success">
                                                                    <i class="ki-duotone ki-timer fs-1 text-success">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                        <span class="path3"></span>
                                                                    </i>
                                                                </span>
                                                            </span>
                                                            <!--end:Icon-->
                                                            <!--begin:Info-->
                                                            <span class="d-flex flex-column">
                                                                <span class="fw-bold fs-6">Full Intro Training</span>
                                                                <span class="fs-7 text-muted">Creating a clear text
                                                                    structure copywriting</span>
                                                            </span>
                                                            <!--end:Info-->
                                                        </span>
                                                        <!--end:Label-->
                                                        <!--begin:Input-->
                                                        <span class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio"
                                                                name="category" value="3" />
                                                        </span>
                                                        <!--end:Input-->
                                                    </label>
                                                    <!--end::Option-->
                                                </div>
                                                <!--end:Options-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                    </div>
                                    <!--end::Step 1-->
                                    <!--begin::Step 2-->
                                    <div data-kt-stepper-element="content">
                                        <div class="w-100">
                                            <!--begin::Input group-->
                                            <div class="fv-row">
                                                <!--begin::Label-->
                                                <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                                                    <span class="required">Select Framework</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip"
                                                        title="Specify your apps framework">
                                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin:Option-->
                                                <label class="d-flex flex-stack cursor-pointer mb-5">
                                                    <!--begin:Label-->
                                                    <span class="d-flex align-items-center me-2">
                                                        <!--begin:Icon-->
                                                        <span class="symbol symbol-50px me-6">
                                                            <span class="symbol-label bg-light-warning">
                                                                <i class="ki-duotone ki-html fs-2x text-warning">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                            </span>
                                                        </span>
                                                        <!--end:Icon-->
                                                        <!--begin:Info-->
                                                        <span class="d-flex flex-column">
                                                            <span class="fw-bold fs-6">HTML5</span>
                                                            <span class="fs-7 text-muted">Base Web Projec</span>
                                                        </span>
                                                        <!--end:Info-->
                                                    </span>
                                                    <!--end:Label-->
                                                    <!--begin:Input-->
                                                    <span class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio" checked="checked"
                                                            name="framework" value="1" />
                                                    </span>
                                                    <!--end:Input-->
                                                </label>
                                                <!--end::Option-->
                                                <!--begin:Option-->
                                                <label class="d-flex flex-stack cursor-pointer mb-5">
                                                    <!--begin:Label-->
                                                    <span class="d-flex align-items-center me-2">
                                                        <!--begin:Icon-->
                                                        <span class="symbol symbol-50px me-6">
                                                            <span class="symbol-label bg-light-success">
                                                                <i class="ki-duotone ki-react fs-2x text-success">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                            </span>
                                                        </span>
                                                        <!--end:Icon-->
                                                        <!--begin:Info-->
                                                        <span class="d-flex flex-column">
                                                            <span class="fw-bold fs-6">ReactJS</span>
                                                            <span class="fs-7 text-muted">Robust and flexible app
                                                                framework</span>
                                                        </span>
                                                        <!--end:Info-->
                                                    </span>
                                                    <!--end:Label-->
                                                    <!--begin:Input-->
                                                    <span class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio" name="framework"
                                                            value="2" />
                                                    </span>
                                                    <!--end:Input-->
                                                </label>
                                                <!--end::Option-->
                                                <!--begin:Option-->
                                                <label class="d-flex flex-stack cursor-pointer mb-5">
                                                    <!--begin:Label-->
                                                    <span class="d-flex align-items-center me-2">
                                                        <!--begin:Icon-->
                                                        <span class="symbol symbol-50px me-6">
                                                            <span class="symbol-label bg-light-danger">
                                                                <i class="ki-duotone ki-angular fs-2x text-danger">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                </i>
                                                            </span>
                                                        </span>
                                                        <!--end:Icon-->
                                                        <!--begin:Info-->
                                                        <span class="d-flex flex-column">
                                                            <span class="fw-bold fs-6">Angular</span>
                                                            <span class="fs-7 text-muted">Powerful data mangement</span>
                                                        </span>
                                                        <!--end:Info-->
                                                    </span>
                                                    <!--end:Label-->
                                                    <!--begin:Input-->
                                                    <span class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio"
                                                            name="framework" value="3" />
                                                    </span>
                                                    <!--end:Input-->
                                                </label>
                                                <!--end::Option-->
                                                <!--begin:Option-->
                                                <label class="d-flex flex-stack cursor-pointer">
                                                    <!--begin:Label-->
                                                    <span class="d-flex align-items-center me-2">
                                                        <!--begin:Icon-->
                                                        <span class="symbol symbol-50px me-6">
                                                            <span class="symbol-label bg-light-primary">
                                                                <i class="ki-duotone ki-vue fs-2x text-primary">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                            </span>
                                                        </span>
                                                        <!--end:Icon-->
                                                        <!--begin:Info-->
                                                        <span class="d-flex flex-column">
                                                            <span class="fw-bold fs-6">Vue</span>
                                                            <span class="fs-7 text-muted">Lightweight and responsive
                                                                framework</span>
                                                        </span>
                                                        <!--end:Info-->
                                                    </span>
                                                    <!--end:Label-->
                                                    <!--begin:Input-->
                                                    <span class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio"
                                                            name="framework" value="4" />
                                                    </span>
                                                    <!--end:Input-->
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                    </div>
                                    <!--end::Step 2-->
                                    <!--begin::Step 3-->
                                    <div data-kt-stepper-element="content">
                                        <div class="w-100">
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-10">
                                                <!--begin::Label-->
                                                <label class="required fs-5 fw-semibold mb-2">Database Name</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text"
                                                    class="form-control form-control-lg form-control-solid"
                                                    name="dbname" placeholder="" value="master_db" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row">
                                                <!--begin::Label-->
                                                <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                                                    <span class="required">Select Database Engine</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip"
                                                        title="Select your app database engine">
                                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin:Option-->
                                                <label class="d-flex flex-stack cursor-pointer mb-5">
                                                    <!--begin::Label-->
                                                    <span class="d-flex align-items-center me-2">
                                                        <!--begin::Icon-->
                                                        <span class="symbol symbol-50px me-6">
                                                            <span class="symbol-label bg-light-success">
                                                                <i class="ki-duotone ki-note text-success fs-2x">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                            </span>
                                                        </span>
                                                        <!--end::Icon-->
                                                        <!--begin::Info-->
                                                        <span class="d-flex flex-column">
                                                            <span class="fw-bold fs-6">MySQL</span>
                                                            <span class="fs-7 text-muted">Basic MySQL database</span>
                                                        </span>
                                                        <!--end::Info-->
                                                    </span>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <span class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio" name="dbengine"
                                                            checked="checked" value="1" />
                                                    </span>
                                                    <!--end::Input-->
                                                </label>
                                                <!--end::Option-->
                                                <!--begin:Option-->
                                                <label class="d-flex flex-stack cursor-pointer mb-5">
                                                    <!--begin::Label-->
                                                    <span class="d-flex align-items-center me-2">
                                                        <!--begin::Icon-->
                                                        <span class="symbol symbol-50px me-6">
                                                            <span class="symbol-label bg-light-danger">
                                                                <i class="ki-duotone ki-google text-danger fs-2x">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                            </span>
                                                        </span>
                                                        <!--end::Icon-->
                                                        <!--begin::Info-->
                                                        <span class="d-flex flex-column">
                                                            <span class="fw-bold fs-6">Firebase</span>
                                                            <span class="fs-7 text-muted">Google based app data
                                                                management</span>
                                                        </span>
                                                        <!--end::Info-->
                                                    </span>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <span class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio" name="dbengine"
                                                            value="2" />
                                                    </span>
                                                    <!--end::Input-->
                                                </label>
                                                <!--end::Option-->
                                                <!--begin:Option-->
                                                <label class="d-flex flex-stack cursor-pointer">
                                                    <!--begin::Label-->
                                                    <span class="d-flex align-items-center me-2">
                                                        <!--begin::Icon-->
                                                        <span class="symbol symbol-50px me-6">
                                                            <span class="symbol-label bg-light-warning">
                                                                <i class="ki-duotone ki-microsoft text-warning fs-2x">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                </i>
                                                            </span>
                                                        </span>
                                                        <!--end::Icon-->
                                                        <!--begin::Info-->
                                                        <span class="d-flex flex-column">
                                                            <span class="fw-bold fs-6">DynamoDB</span>
                                                            <span class="fs-7 text-muted">Microsoft Fast NoSQL
                                                                Database</span>
                                                        </span>
                                                        <!--end::Info-->
                                                    </span>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <span class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio" name="dbengine"
                                                            value="3" />
                                                    </span>
                                                    <!--end::Input-->
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                    </div>
                                    <!--end::Step 3-->
                                    <!--begin::Step 4-->
                                    <div data-kt-stepper-element="content">
                                        <div class="w-100">
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <!--begin::Label-->
                                                <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                    <span class="required">Name On Card</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip"
                                                        title="Specify a card holder's name">
                                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>
                                                <!--end::Label-->
                                                <input type="text" class="form-control form-control-solid"
                                                    placeholder="" name="card_name" value="Max Doe" />
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <!--begin::Label-->
                                                <label class="required fs-6 fw-semibold form-label mb-2">Card
                                                    Number</label>
                                                <!--end::Label-->
                                                <!--begin::Input wrapper-->
                                                <div class="position-relative">
                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-solid"
                                                        placeholder="Enter card number" name="card_number"
                                                        value="4111 1111 1111 1111" />
                                                    <!--end::Input-->
                                                    <!--begin::Card logos-->
                                                    <div class="position-absolute translate-middle-y top-50 end-0 me-5">
                                                        <img src="assets/media/svg/card-logos/visa.svg" alt=""
                                                            class="h-25px" />
                                                        <img src="assets/media/svg/card-logos/mastercard.svg"
                                                            alt="" class="h-25px" />
                                                        <img src="assets/media/svg/card-logos/american-express.svg"
                                                            alt="" class="h-25px" />
                                                    </div>
                                                    <!--end::Card logos-->
                                                </div>
                                                <!--end::Input wrapper-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="row mb-10">
                                                <!--begin::Col-->
                                                <div class="col-md-8 fv-row">
                                                    <!--begin::Label-->
                                                    <label class="required fs-6 fw-semibold form-label mb-2">Expiration
                                                        Date</label>
                                                    <!--end::Label-->
                                                    <!--begin::Row-->
                                                    <div class="row fv-row">
                                                        <!--begin::Col-->
                                                        <div class="col-6">
                                                            <select name="card_expiry_month"
                                                                class="form-select form-select-solid"
                                                                data-control="select2" data-hide-search="true"
                                                                data-placeholder="Month">
                                                                <option></option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                            </select>
                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        <div class="col-6">
                                                            <select name="card_expiry_year"
                                                                class="form-select form-select-solid"
                                                                data-control="select2" data-hide-search="true"
                                                                data-placeholder="Year">
                                                                <option></option>
                                                                <option value="2026">2026</option>
                                                                <option value="2027">2027</option>
                                                                <option value="2028">2028</option>
                                                                <option value="2029">2029</option>
                                                                <option value="2030">2030</option>
                                                                <option value="2031">2031</option>
                                                                <option value="2032">2032</option>
                                                                <option value="2033">2033</option>
                                                                <option value="2034">2034</option>
                                                                <option value="2035">2035</option>
                                                                <option value="2036">2036</option>
                                                            </select>
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    <!--end::Row-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-md-4 fv-row">
                                                    <!--begin::Label-->
                                                    <label
                                                        class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                        <span class="required">CVV</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip"
                                                            title="Enter a card CVV code">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                            </i>
                                                        </span>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Input wrapper-->
                                                    <div class="position-relative">
                                                        <!--begin::Input-->
                                                        <input type="text" class="form-control form-control-solid"
                                                            minlength="3" maxlength="4" placeholder="CVV"
                                                            name="card_cvv" />
                                                        <!--end::Input-->
                                                        <!--begin::CVV icon-->
                                                        <div
                                                            class="position-absolute translate-middle-y top-50 end-0 me-3">
                                                            <i class="ki-duotone ki-credit-cart fs-2hx">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </div>
                                                        <!--end::CVV icon-->
                                                    </div>
                                                    <!--end::Input wrapper-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Label-->
                                                <div class="me-5">
                                                    <label class="fs-6 fw-semibold form-label">Save Card for further
                                                        billing?</label>
                                                    <div class="fs-7 fw-semibold text-muted">If you need more info, please
                                                        check budget planning</div>
                                                </div>
                                                <!--end::Label-->
                                                <!--begin::Switch-->
                                                <label class="form-check form-switch form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1"
                                                        checked="checked" />
                                                    <span class="form-check-label fw-semibold text-muted">Save Card</span>
                                                </label>
                                                <!--end::Switch-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                    </div>
                                    <!--end::Step 4-->
                                    <!--begin::Step 5-->
                                    <div data-kt-stepper-element="content">
                                        <div class="w-100 text-center">
                                            <!--begin::Heading-->
                                            <h1 class="fw-bold text-gray-900 mb-3">Release!</h1>
                                            <!--end::Heading-->
                                            <!--begin::Description-->
                                            <div class="text-muted fw-semibold fs-3">Submit your app to kickstart your
                                                project.</div>
                                            <!--end::Description-->
                                            <!--begin::Illustration-->
                                            <div class="text-center px-4 py-15">
                                                <img src="assets/media/illustrations/sketchy-1/9.png" alt=""
                                                    class="mw-100 mh-300px" />
                                            </div>
                                            <!--end::Illustration-->
                                        </div>
                                    </div>
                                    <!--end::Step 5-->
                                    <!--begin::Actions-->
                                    <div class="d-flex flex-stack pt-10">
                                        <!--begin::Wrapper-->
                                        <div class="me-2">
                                            <button type="button" class="btn btn-lg btn-light-primary me-3"
                                                data-kt-stepper-action="previous">
                                                <i class="ki-duotone ki-arrow-left fs-3 me-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>Back</button>
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Wrapper-->
                                        <div>
                                            <button type="button" class="btn btn-lg btn-primary"
                                                data-kt-stepper-action="submit">
                                                <span class="indicator-label">Submit
                                                    <i class="ki-duotone ki-arrow-right fs-3 ms-2 me-0">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i></span>
                                                <span class="indicator-progress">Please wait...
                                                    <span
                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                            <button type="button" class="btn btn-lg btn-primary"
                                                data-kt-stepper-action="next">Continue
                                                <i class="ki-duotone ki-arrow-right fs-3 ms-1 me-0">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i></button>
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Stepper-->
                    </div>
                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
        <!--end::Modal - Create App-->
        <!--end::Modals-->
        <!--begin::Javascript-->
        <!--begin::Global Javascript Bundle(mandatory for all pages)-->
        <!--end::Global Javascript Bundle-->
        <!--begin::Custom Javascript(used for this page only)-->
        <!--end::Custom Javascript-->
        <!--end::Javascript-->
    @endsection

    @section('page_scripts')
        <script src="assets/js/widgets.bundle.js"></script>
        <script src="assets/js/custom/widgets.js"></script>
        <script src="assets/js/custom/apps/chat/chat.js"></script>
        <script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
        <script src="assets/js/custom/utilities/modals/create-app.js"></script>
            @endsection
