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
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Tables
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
                    <li class="breadcrumb-item text-muted">Widgets</li>
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
                        id="kt_menu_69981c2d244aa">
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
                                        data-dropdown-parent="#kt_menu_69981c2d244aa" data-allow-clear="true">
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
            <!--begin::Row-->
            <div class="row g-5 g-xl-8">
                <!--begin::Col-->
                <div class="col-xl-6">
                    <!--begin::Tables Widget 1-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">Tasks Overview</span>
                                <span class="text-muted fw-semibold fs-7">Pending 10 tasks</span>
                            </h3>
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button type="button"
                                    class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-category fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 1-->
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                    id="kt_menu_69981c2d2478e">
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
                                                <select class="form-select form-select-solid" multiple="multiple"
                                                    data-kt-select2="true" data-close-on-select="false"
                                                    data-placeholder="Select option"
                                                    data-dropdown-parent="#kt_menu_69981c2d2478e" data-allow-clear="true">
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
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                    <span class="form-check-label">Author</span>
                                                </label>
                                                <!--end::Options-->
                                                <!--begin::Options-->
                                                <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="2"
                                                        checked="checked" />
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
                                            <div
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    name="notifications" checked="checked" />
                                                <label class="form-check-label">Enabled</label>
                                            </div>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end">
                                            <button type="reset"
                                                class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                data-kt-menu-dismiss="true">Reset</button>
                                            <button type="submit" class="btn btn-sm btn-primary"
                                                data-kt-menu-dismiss="true">Apply</button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Form-->
                                </div>
                                <!--end::Menu 1-->
                                <!--end::Menu-->
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-3">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table align-middle gs-0 gy-5">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr>
                                            <th class="p-0 w-50px"></th>
                                            <th class="p-0 min-w-200px"></th>
                                            <th class="p-0 min-w-100px"></th>
                                            <th class="p-0 min-w-40px"></th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <th>
                                                <div class="symbol symbol-50px me-2">
                                                    <span class="symbol-label">
                                                        <img src="assets/media/svg/brand-logos/plurk.svg"
                                                            class="h-50 align-self-center" alt="" />
                                                    </span>
                                                </div>
                                            </th>
                                            <td>
                                                <a href="#"
                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Top
                                                    Authors</a>
                                                <span class="text-muted fw-semibold d-block fs-7">Successful Fellas</span>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column w-100 me-2">
                                                    <div class="d-flex flex-stack mb-2">
                                                        <span class="text-muted me-2 fs-7 fw-bold">70%</span>
                                                    </div>
                                                    <div class="progress h-6px w-100">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: 70%" aria-valuenow="70" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <a href="#"
                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                    <i class="ki-duotone ki-arrow-right fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <div class="symbol symbol-50px me-2">
                                                    <span class="symbol-label">
                                                        <img src="assets/media/svg/brand-logos/telegram.svg"
                                                            class="h-50 align-self-center" alt="" />
                                                    </span>
                                                </div>
                                            </th>
                                            <td>
                                                <a href="#"
                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Popular
                                                    Authors</a>
                                                <span class="text-muted fw-semibold d-block fs-7">Most Successful</span>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column w-100 me-2">
                                                    <div class="d-flex flex-stack mb-2">
                                                        <span class="text-muted me-2 fs-7 fw-bold">50%</span>
                                                    </div>
                                                    <div class="progress h-6px w-100">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <a href="#"
                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                    <i class="ki-duotone ki-arrow-right fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <div class="symbol symbol-50px me-2">
                                                    <span class="symbol-label">
                                                        <img src="assets/media/svg/brand-logos/vimeo.svg"
                                                            class="h-50 align-self-center" alt="" />
                                                    </span>
                                                </div>
                                            </th>
                                            <td>
                                                <a href="#"
                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">New
                                                    Users</a>
                                                <span class="text-muted fw-semibold d-block fs-7">Awesome Users</span>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column w-100 me-2">
                                                    <div class="d-flex flex-stack mb-2">
                                                        <span class="text-muted me-2 fs-7 fw-bold">80%</span>
                                                    </div>
                                                    <div class="progress h-6px w-100">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: 80%" aria-valuenow="80" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <a href="#"
                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                    <i class="ki-duotone ki-arrow-right fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <div class="symbol symbol-50px me-2">
                                                    <span class="symbol-label">
                                                        <img src="assets/media/svg/brand-logos/bebo.svg"
                                                            class="h-50 align-self-center" alt="" />
                                                    </span>
                                                </div>
                                            </th>
                                            <td>
                                                <a href="#"
                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Active
                                                    Customers</a>
                                                <span class="text-muted fw-semibold d-block fs-7">Best Customers</span>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column w-100 me-2">
                                                    <div class="d-flex flex-stack mb-2">
                                                        <span class="text-muted me-2 fs-7 fw-bold">90%</span>
                                                    </div>
                                                    <div class="progress h-6px w-100">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: 90%" aria-valuenow="90" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <a href="#"
                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                    <i class="ki-duotone ki-arrow-right fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <div class="symbol symbol-50px me-2">
                                                    <span class="symbol-label">
                                                        <img src="assets/media/svg/brand-logos/kickstarter.svg"
                                                            class="h-50 align-self-center" alt="" />
                                                    </span>
                                                </div>
                                            </th>
                                            <td>
                                                <a href="#"
                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Bestseller
                                                    Theme</a>
                                                <span class="text-muted fw-semibold d-block fs-7">Amazing Templates</span>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column w-100 me-2">
                                                    <div class="d-flex flex-stack mb-2">
                                                        <span class="text-muted me-2 fs-7 fw-bold">70%</span>
                                                    </div>
                                                    <div class="progress h-6px w-100">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: 70%" aria-valuenow="70" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <a href="#"
                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                    <i class="ki-duotone ki-arrow-right fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--endW::Tables Widget 1-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-6">
                    <!--begin::Tables Widget 2-->
                    <div class="card card-xl-stretch mb-5 mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">Latest Arrivals</span>
                                <span class="text-muted mt-1 fw-semibold fs-7">More than 100 new products</span>
                            </h3>
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button type="button"
                                    class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-category fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 1-->
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                    id="kt_menu_69981c2d249b6">
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
                                                <select class="form-select form-select-solid" multiple="multiple"
                                                    data-kt-select2="true" data-close-on-select="false"
                                                    data-placeholder="Select option"
                                                    data-dropdown-parent="#kt_menu_69981c2d249b6" data-allow-clear="true">
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
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                    <span class="form-check-label">Author</span>
                                                </label>
                                                <!--end::Options-->
                                                <!--begin::Options-->
                                                <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="2"
                                                        checked="checked" />
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
                                            <div
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    name="notifications" checked="checked" />
                                                <label class="form-check-label">Enabled</label>
                                            </div>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end">
                                            <button type="reset"
                                                class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                data-kt-menu-dismiss="true">Reset</button>
                                            <button type="submit" class="btn btn-sm btn-primary"
                                                data-kt-menu-dismiss="true">Apply</button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Form-->
                                </div>
                                <!--end::Menu 1-->
                                <!--end::Menu-->
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-3">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table align-middle gs-0 gy-5">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr>
                                            <th class="p-0 w-50px"></th>
                                            <th class="p-0 min-w-150px"></th>
                                            <th class="p-0 min-w-150px"></th>
                                            <th class="p-0 min-w-125px"></th>
                                            <th class="p-0 min-w-40px"></th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="symbol symbol-50px me-2">
                                                    <span class="symbol-label">
                                                        <img src="assets/media/svg/brand-logos/plurk.svg"
                                                            class="h-50 align-self-center" alt="" />
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#"
                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Top
                                                    Authors</a>
                                                <span class="text-muted fw-semibold d-block fs-7">Successful Fellas</span>
                                            </td>
                                            <td class="text-end">
                                                <span class="badge badge-light-danger fw-semibold me-1">Angular</span>
                                                <span class="badge badge-light-info fw-semibold me-1">PHP</span>
                                            </td>
                                            <td class="text-end">
                                                <span class="text-muted fw-bold">4600 Users</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#"
                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                    <i class="ki-duotone ki-arrow-right fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="symbol symbol-50px me-2">
                                                    <span class="symbol-label">
                                                        <img src="assets/media/svg/brand-logos/telegram.svg"
                                                            class="h-50 align-self-center" alt="" />
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#"
                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Popular
                                                    Authors</a>
                                                <span class="text-muted fw-semibold d-block fs-7">Most Successful</span>
                                            </td>
                                            <td class="text-end">
                                                <span class="badge badge-light-danger fw-semibold me-1">HTML</span>
                                                <span class="badge badge-light-info fw-semibold me-1">CSS</span>
                                            </td>
                                            <td class="text-end">
                                                <span class="text-muted fw-bold">7200 Users</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#"
                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                    <i class="ki-duotone ki-arrow-right fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="symbol symbol-50px me-2">
                                                    <span class="symbol-label">
                                                        <img src="assets/media/svg/brand-logos/vimeo.svg"
                                                            class="h-50 align-self-center" alt="" />
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#"
                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">New
                                                    Users</a>
                                                <span class="text-muted fw-semibold d-block fs-7">Awesome Users</span>
                                            </td>
                                            <td class="text-end">
                                                <span class="badge badge-light-danger fw-semibold me-1">React</span>
                                                <span class="badge badge-light-info fw-semibold me-1">SASS</span>
                                            </td>
                                            <td class="text-end">
                                                <span class="text-muted fw-bold">890 Users</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#"
                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                    <i class="ki-duotone ki-arrow-right fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="symbol symbol-50px me-2">
                                                    <span class="symbol-label">
                                                        <img src="assets/media/svg/brand-logos/bebo.svg"
                                                            class="h-50 align-self-center" alt="" />
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#"
                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Active
                                                    Customers</a>
                                                <span class="text-muted fw-semibold d-block fs-7">Best Customers</span>
                                            </td>
                                            <td class="text-end">
                                                <span class="badge badge-light-danger fw-semibold me-1">Java</span>
                                                <span class="badge badge-light-info fw-semibold me-1">PHP</span>
                                            </td>
                                            <td class="text-end">
                                                <span class="text-muted fw-bold">6370 Users</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#"
                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                    <i class="ki-duotone ki-arrow-right fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="symbol symbol-50px me-2">
                                                    <span class="symbol-label">
                                                        <img src="assets/media/svg/brand-logos/kickstarter.svg"
                                                            class="h-50 align-self-center" alt="" />
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#"
                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Bestseller
                                                    Theme</a>
                                                <span class="text-muted fw-semibold d-block fs-7">Amazing Templates</span>
                                            </td>
                                            <td class="text-end">
                                                <span class="badge badge-light-danger fw-semibold me-1">Python</span>
                                                <span class="badge badge-light-info fw-semibold me-1">MySQL</span>
                                            </td>
                                            <td class="text-end">
                                                <span class="text-muted fw-bold">354 Users</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#"
                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                    <i class="ki-duotone ki-arrow-right fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Tables Widget 2-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row g-5 g-xl-8">
                <!--begin::Col-->
                <div class="col-xl-6">
                    <!--begin::Tables Widget 3-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">Files</span>
                                <span class="text-muted mt-1 fw-semibold fs-7">Over 100 pending files</span>
                            </h3>
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button type="button"
                                    class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-category fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 3-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                    data-kt-menu="true">
                                    <!--begin::Heading-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link flex-stack px-3">Create Payment
                                            <span class="ms-2" data-bs-toggle="tooltip"
                                                title="Specify a target name for future usage and reference">
                                                <i class="ki-duotone ki-information fs-6">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </span></a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                        data-kt-menu-placement="right-end">
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">Subscription</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Plans</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Billing</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Statements</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3">
                                                    <!--begin::Switch-->
                                                    <label
                                                        class="form-check form-switch form-check-custom form-check-solid">
                                                        <!--begin::Input-->
                                                        <input class="form-check-input w-30px h-20px" type="checkbox"
                                                            value="1" checked="checked" name="notifications" />
                                                        <!--end::Input-->
                                                        <!--end::Label-->
                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                        <!--end::Label-->
                                                    </label>
                                                    <!--end::Switch-->
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-1">
                                        <a href="#" class="menu-link px-3">Settings</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 3-->
                                <!--end::Menu-->
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-3">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table align-middle gs-0 gy-3">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr>
                                            <th class="p-0 w-50px"></th>
                                            <th class="p-0 min-w-150px"></th>
                                            <th class="p-0 min-w-140px"></th>
                                            <th class="p-0 min-w-120px"></th>
                                            <th class="p-0 min-w-40px"></th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="symbol symbol-50px me-2">
                                                    <span class="symbol-label bg-light-success">
                                                        <i class="ki-duotone ki-basket fs-2x text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                            <span class="path4"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#"
                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Top
                                                    Authors</a>
                                            </td>
                                            <td class="text-end text-muted fw-bold">ReactJs, HTML</td>
                                            <td class="text-end text-muted fw-bold">4600 Users</td>
                                            <td class="text-end text-gray-900 fw-bold fs-6 pe-0">5.4MB</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="symbol symbol-50px me-2">
                                                    <span class="symbol-label bg-light-danger">
                                                        <i class="ki-duotone ki-element-11 fs-2x text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                            <span class="path4"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#"
                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Popular
                                                    Authors</a>
                                            </td>
                                            <td class="text-end text-muted fw-bold">Python, MySQL</td>
                                            <td class="text-end text-muted fw-bold">7200 Users</td>
                                            <td class="text-end text-gray-900 fw-bold fs-6 pe-0">2.8MB</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="symbol symbol-50px me-2">
                                                    <span class="symbol-label bg-light-info">
                                                        <i class="ki-duotone ki-briefcase fs-2x text-info">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#"
                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">New
                                                    Users</a>
                                            </td>
                                            <td class="text-end text-muted fw-bold">Laravel, Metronic</td>
                                            <td class="text-end text-muted fw-bold">890 Users</td>
                                            <td class="text-end text-gray-900 fw-bold fs-6 pe-0">1.5MB</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="symbol symbol-50px me-2">
                                                    <span class="symbol-label bg-light-warning">
                                                        <i class="ki-duotone ki-abstract-26 fs-2x text-warning">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#"
                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Active
                                                    Customers</a>
                                            </td>
                                            <td class="text-end text-muted fw-bold">AngularJS, C#</td>
                                            <td class="text-end text-muted fw-bold">4600 Users</td>
                                            <td class="text-end text-gray-900 fw-bold fs-6 pe-0">5.4MB</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="symbol symbol-50px me-2">
                                                    <span class="symbol-label bg-light-primary">
                                                        <i class="ki-duotone ki-abstract-41 fs-2x text-primary">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#"
                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Active
                                                    Customers</a>
                                            </td>
                                            <td class="text-end text-muted fw-bold">ReactJS, Ruby</td>
                                            <td class="text-end text-muted fw-bold">354 Users</td>
                                            <td class="text-end text-gray-900 fw-bold fs-6 pe-0">500KB</td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--begin::Body-->
                    </div>
                    <!--end::Tables Widget 3-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-6">
                    <!--begin::Tables Widget 4-->
                    <div class="card card-xl-stretch mb-5 mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">New Members</span>
                                <span class="text-muted mt-1 fw-semibold fs-7">More than 400 new members</span>
                            </h3>
                            <div class="card-toolbar">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary active fw-bold px-4 me-1"
                                            data-bs-toggle="tab" href="#kt_table_widget_4_tab_1">Month</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bold px-4 me-1"
                                            data-bs-toggle="tab" href="#kt_table_widget_4_tab_2">Week</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bold px-4"
                                            data-bs-toggle="tab" href="#kt_table_widget_4_tab_3">Day</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-3">
                            <div class="tab-content">
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade show active" id="kt_table_widget_4_tab_1">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table align-middle gs-0 gy-3">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr>
                                                    <th class="p-0 w-50px"></th>
                                                    <th class="p-0 min-w-150px"></th>
                                                    <th class="p-0 min-w-140px"></th>
                                                    <th class="p-0 min-w-120px"></th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px">
                                                            <img src="assets/media/avatars/300-14.jpg" alt="" />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Brad
                                                            Simmons</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Movie
                                                            Creator</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fw-semibold d-block fs-7">Rating</span>
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
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-icon btn-light-twitter btn-sm me-3">
                                                            <i class="ki-duotone ki-twitter fs-4">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                        <a href="#" class="btn btn-icon btn-light-facebook btn-sm">
                                                            <i class="ki-duotone ki-facebook fs-4">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px">
                                                            <img src="assets/media/avatars/300-5.jpg" alt="" />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Jessie
                                                            Clarcson</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">HTML, CSS
                                                            Coding</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fw-semibold d-block fs-7">Rating</span>
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
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-icon btn-light-twitter btn-sm me-3">
                                                            <i class="ki-duotone ki-twitter fs-4">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                        <a href="#" class="btn btn-icon btn-light-facebook btn-sm">
                                                            <i class="ki-duotone ki-facebook fs-4">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px">
                                                            <img src="assets/media/avatars/300-20.jpg" alt="" />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Lebron
                                                            Wayde</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">ReactJS
                                                            Developer</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fw-semibold d-block fs-7">Rating</span>
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
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-icon btn-light-twitter btn-sm me-3">
                                                            <i class="ki-duotone ki-twitter fs-4">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                        <a href="#" class="btn btn-icon btn-light-facebook btn-sm">
                                                            <i class="ki-duotone ki-facebook fs-4">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px">
                                                            <img src="assets/media/avatars/300-23.jpg" alt="" />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Natali
                                                            Trump</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">UI/UX
                                                            Designer</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fw-semibold d-block fs-7">Rating</span>
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
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-icon btn-light-twitter btn-sm me-3">
                                                            <i class="ki-duotone ki-twitter fs-4">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                        <a href="#" class="btn btn-icon btn-light-facebook btn-sm">
                                                            <i class="ki-duotone ki-facebook fs-4">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px">
                                                            <img src="assets/media/avatars/300-10.jpg" alt="" />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Kevin
                                                            Leonard</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Art
                                                            Director</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fw-semibold d-block fs-7">Rating</span>
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
                                                            <div class="rating-label">
                                                                <i class="ki-duotone ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label">
                                                                <i class="ki-duotone ki-star fs-6"></i>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-icon btn-light-twitter btn-sm me-3">
                                                            <i class="ki-duotone ki-twitter fs-4">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                        <a href="#" class="btn btn-icon btn-light-facebook btn-sm">
                                                            <i class="ki-duotone ki-facebook fs-4">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_table_widget_4_tab_2">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table align-middle gs-0 gy-3">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr>
                                                    <th class="p-0 w-50px"></th>
                                                    <th class="p-0 min-w-150px"></th>
                                                    <th class="p-0 min-w-140px"></th>
                                                    <th class="p-0 min-w-120px"></th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px">
                                                            <img src="assets/media/svg/avatars/043-boy-18.svg"
                                                                alt="" />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Kevin
                                                            Leonard</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Art
                                                            Director</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fw-semibold d-block fs-7">Rating</span>
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
                                                            <div class="rating-label">
                                                                <i class="ki-duotone ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label">
                                                                <i class="ki-duotone ki-star fs-6"></i>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-icon btn-light-twitter btn-sm me-3">
                                                            <i class="ki-duotone ki-twitter fs-4">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                        <a href="#" class="btn btn-icon btn-light-facebook btn-sm">
                                                            <i class="ki-duotone ki-facebook fs-4">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px">
                                                            <img src="assets/media/svg/avatars/014-girl-7.svg"
                                                                alt="" />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Natali
                                                            Trump</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">UI/UX
                                                            Designer</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fw-semibold d-block fs-7">Rating</span>
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
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-icon btn-light-twitter btn-sm me-3">
                                                            <i class="ki-duotone ki-twitter fs-4">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                        <a href="#" class="btn btn-icon btn-light-facebook btn-sm">
                                                            <i class="ki-duotone ki-facebook fs-4">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px">
                                                            <img src="assets/media/svg/avatars/018-girl-9.svg"
                                                                alt="" />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Jessie
                                                            Clarcson</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">HTML, CSS
                                                            Coding</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fw-semibold d-block fs-7">Rating</span>
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
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-icon btn-light-twitter btn-sm me-3">
                                                            <i class="ki-duotone ki-twitter fs-4">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                        <a href="#" class="btn btn-icon btn-light-facebook btn-sm">
                                                            <i class="ki-duotone ki-facebook fs-4">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px">
                                                            <img src="assets/media/svg/avatars/001-boy.svg"
                                                                alt="" />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Brad
                                                            Simmons</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Movie
                                                            Creator</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fw-semibold d-block fs-7">Rating</span>
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
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-icon btn-light-twitter btn-sm me-3">
                                                            <i class="ki-duotone ki-twitter fs-4">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                        <a href="#" class="btn btn-icon btn-light-facebook btn-sm">
                                                            <i class="ki-duotone ki-facebook fs-4">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_table_widget_4_tab_3">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table align-middle gs-0 gy-3">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr>
                                                    <th class="p-0 w-50px"></th>
                                                    <th class="p-0 min-w-150px"></th>
                                                    <th class="p-0 min-w-140px"></th>
                                                    <th class="p-0 min-w-120px"></th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px">
                                                            <img src="assets/media/svg/avatars/018-girl-9.svg"
                                                                alt="" />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Jessie
                                                            Clarcson</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">HTML, CSS
                                                            Coding</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fw-semibold d-block fs-7">Rating</span>
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
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-icon btn-light-twitter btn-sm me-3">
                                                            <i class="ki-duotone ki-twitter fs-4">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                        <a href="#" class="btn btn-icon btn-light-facebook btn-sm">
                                                            <i class="ki-duotone ki-facebook fs-4">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px">
                                                            <img src="assets/media/svg/avatars/047-girl-25.svg"
                                                                alt="" />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Lebron
                                                            Wayde</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">ReactJS
                                                            Developer</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fw-semibold d-block fs-7">Rating</span>
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
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-icon btn-light-twitter btn-sm me-3">
                                                            <i class="ki-duotone ki-twitter fs-4">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                        <a href="#" class="btn btn-icon btn-light-facebook btn-sm">
                                                            <i class="ki-duotone ki-facebook fs-4">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px">
                                                            <img src="assets/media/svg/avatars/014-girl-7.svg"
                                                                alt="" />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Natali
                                                            Trump</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">UI/UX
                                                            Designer</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fw-semibold d-block fs-7">Rating</span>
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
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-icon btn-light-twitter btn-sm me-3">
                                                            <i class="ki-duotone ki-twitter fs-4">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                        <a href="#" class="btn btn-icon btn-light-facebook btn-sm">
                                                            <i class="ki-duotone ki-facebook fs-4">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Tables Widget 4-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row g-5 g-xl-8">
                <!--begin::Col-->
                <div class="col-xl-6">
                    <!--begin::Tables Widget 5-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">Latest Products</span>
                                <span class="text-muted mt-1 fw-semibold fs-7">More than 400 new products</span>
                            </h3>
                            <div class="card-toolbar">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bold px-4 me-1 active"
                                            data-bs-toggle="tab" href="#kt_table_widget_5_tab_1">Month</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bold px-4 me-1"
                                            data-bs-toggle="tab" href="#kt_table_widget_5_tab_2">Week</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bold px-4"
                                            data-bs-toggle="tab" href="#kt_table_widget_5_tab_3">Day</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-3">
                            <div class="tab-content">
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade show active" id="kt_table_widget_5_tab_1">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="border-0">
                                                    <th class="p-0 w-50px"></th>
                                                    <th class="p-0 min-w-150px"></th>
                                                    <th class="p-0 min-w-140px"></th>
                                                    <th class="p-0 min-w-110px"></th>
                                                    <th class="p-0 min-w-50px"></th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
                                                            <span class="symbol-label">
                                                                <img src="assets/media/svg/brand-logos/plurk.svg"
                                                                    class="h-50 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Brad
                                                            Simmons</a>
                                                        <span class="text-muted fw-semibold d-block">Movie Creator</span>
                                                    </td>
                                                    <td class="text-end text-muted fw-bold">React, HTML</td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-success">Approved</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-duotone ki-arrow-right fs-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
                                                            <span class="symbol-label">
                                                                <img src="assets/media/svg/brand-logos/telegram.svg"
                                                                    class="h-50 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Popular
                                                            Authors</a>
                                                        <span class="text-muted fw-semibold d-block">Most
                                                            Successful</span>
                                                    </td>
                                                    <td class="text-end text-muted fw-bold">Python, MySQL</td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-warning">In Progress</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-duotone ki-arrow-right fs-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
                                                            <span class="symbol-label">
                                                                <img src="assets/media/svg/brand-logos/vimeo.svg"
                                                                    class="h-50 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">New
                                                            Users</a>
                                                        <span class="text-muted fw-semibold d-block">Awesome Users</span>
                                                    </td>
                                                    <td class="text-end text-muted fw-bold">Laravel,Metronic</td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-primary">Success</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-duotone ki-arrow-right fs-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
                                                            <span class="symbol-label">
                                                                <img src="assets/media/svg/brand-logos/bebo.svg"
                                                                    class="h-50 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Active
                                                            Customers</a>
                                                        <span class="text-muted fw-semibold d-block">Movie Creator</span>
                                                    </td>
                                                    <td class="text-end text-muted fw-bold">AngularJS, C#</td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-danger">Rejected</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-duotone ki-arrow-right fs-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
                                                            <span class="symbol-label">
                                                                <img src="assets/media/svg/brand-logos/kickstarter.svg"
                                                                    class="h-50 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Bestseller
                                                            Theme</a>
                                                        <span class="text-muted fw-semibold d-block">Best Customers</span>
                                                    </td>
                                                    <td class="text-end text-muted fw-bold">ReactJS, Ruby</td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-warning">In Progress</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-duotone ki-arrow-right fs-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_table_widget_5_tab_2">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="border-0">
                                                    <th class="p-0 w-50px"></th>
                                                    <th class="p-0 min-w-150px"></th>
                                                    <th class="p-0 min-w-140px"></th>
                                                    <th class="p-0 min-w-110px"></th>
                                                    <th class="p-0 min-w-50px"></th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
                                                            <span class="symbol-label">
                                                                <img src="assets/media/svg/brand-logos/plurk.svg"
                                                                    class="h-50 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Brad
                                                            Simmons</a>
                                                        <span class="text-muted fw-semibold d-block">Movie Creator</span>
                                                    </td>
                                                    <td class="text-end text-muted fw-bold">React, HTML</td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-success">Approved</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-duotone ki-arrow-right fs-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
                                                            <span class="symbol-label">
                                                                <img src="assets/media/svg/brand-logos/telegram.svg"
                                                                    class="h-50 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Popular
                                                            Authors</a>
                                                        <span class="text-muted fw-semibold d-block">Most
                                                            Successful</span>
                                                    </td>
                                                    <td class="text-end text-muted fw-bold">Python, MySQL</td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-warning">In Progress</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-duotone ki-arrow-right fs-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
                                                            <span class="symbol-label">
                                                                <img src="assets/media/svg/brand-logos/bebo.svg"
                                                                    class="h-50 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Active
                                                            Customers</a>
                                                        <span class="text-muted fw-semibold d-block">Movie Creator</span>
                                                    </td>
                                                    <td class="text-end text-muted fw-bold">AngularJS, C#</td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-danger">Rejected</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-duotone ki-arrow-right fs-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_table_widget_5_tab_3">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="border-0">
                                                    <th class="p-0 w-50px"></th>
                                                    <th class="p-0 min-w-150px"></th>
                                                    <th class="p-0 min-w-140px"></th>
                                                    <th class="p-0 min-w-110px"></th>
                                                    <th class="p-0 min-w-50px"></th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
                                                            <span class="symbol-label">
                                                                <img src="assets/media/svg/brand-logos/kickstarter.svg"
                                                                    class="h-50 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Bestseller
                                                            Theme</a>
                                                        <span class="text-muted fw-semibold d-block">Best Customers</span>
                                                    </td>
                                                    <td class="text-end text-muted fw-bold">ReactJS, Ruby</td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-warning">In Progress</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-duotone ki-arrow-right fs-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
                                                            <span class="symbol-label">
                                                                <img src="assets/media/svg/brand-logos/bebo.svg"
                                                                    class="h-50 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Active
                                                            Customers</a>
                                                        <span class="text-muted fw-semibold d-block">Movie Creator</span>
                                                    </td>
                                                    <td class="text-end text-muted fw-bold">AngularJS, C#</td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-danger">Rejected</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-duotone ki-arrow-right fs-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
                                                            <span class="symbol-label">
                                                                <img src="assets/media/svg/brand-logos/vimeo.svg"
                                                                    class="h-50 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">New
                                                            Users</a>
                                                        <span class="text-muted fw-semibold d-block">Awesome Users</span>
                                                    </td>
                                                    <td class="text-end text-muted fw-bold">Laravel,Metronic</td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-primary">Success</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-duotone ki-arrow-right fs-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-45px me-2">
                                                            <span class="symbol-label">
                                                                <img src="assets/media/svg/brand-logos/telegram.svg"
                                                                    class="h-50 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Popular
                                                            Authors</a>
                                                        <span class="text-muted fw-semibold d-block">Most
                                                            Successful</span>
                                                    </td>
                                                    <td class="text-end text-muted fw-bold">Python, MySQL</td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-warning">In Progress</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-duotone ki-arrow-right fs-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Tables Widget 5-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-6">
                    <!--begin::Table Widget 6-->
                    <div class="card card-xl-stretch mb-5 mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">Authors Earnings</span>
                                <span class="text-muted mt-1 fw-semibold fs-7">More than 400 new authors</span>
                            </h3>
                            <div class="card-toolbar">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bold px-4 me-1"
                                            data-bs-toggle="tab" href="#kt_table_widget_6_tab_1">Month</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bold px-4 me-1"
                                            data-bs-toggle="tab" href="#kt_table_widget_6_tab_2">Week</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bold px-4 active"
                                            data-bs-toggle="tab" href="#kt_table_widget_6_tab_3">Day</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-3">
                            <div class="tab-content">
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_table_widget_6_tab_1">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table align-middle gs-0 gy-3">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr>
                                                    <th class="p-0 w-50px"></th>
                                                    <th class="p-0 min-w-150px"></th>
                                                    <th class="p-0 min-w-140px"></th>
                                                    <th class="p-0 min-w-120px"></th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px me-2">
                                                            <span class="symbol-label">
                                                                <img src="assets/media/svg/avatars/001-boy.svg"
                                                                    class="h-75 align-self-end" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Brad
                                                            Simmons</a>
                                                        <span class="text-muted fw-semibold d-block">Successful
                                                            Fellas</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fw-semibold d-block fs-7">Paid</span>
                                                        <span class="text-gray-900 fw-bold d-block fs-5">$200,500</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-primary fs-7 fw-bold">+28%</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-duotone ki-arrow-right fs-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px me-2">
                                                            <span class="symbol-label">
                                                                <img src="assets/media/svg/avatars/018-girl-9.svg"
                                                                    class="h-75 align-self-end" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Jessie
                                                            Clarcson</a>
                                                        <span class="text-muted fw-semibold d-block">HTML, CSS
                                                            Coding</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fw-semibold d-block fs-7">Paid</span>
                                                        <span class="text-gray-900 fw-bold d-block fs-5">$1,200,000</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-warning fs-7 fw-bold">+52%</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-duotone ki-arrow-right fs-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px me-2">
                                                            <span class="symbol-label">
                                                                <img src="assets/media/svg/avatars/047-girl-25.svg"
                                                                    class="h-75 align-self-end" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Jessie
                                                            Clarcson</a>
                                                        <span class="text-muted fw-semibold d-block">PHP, Laravel,
                                                            VueJS</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fw-semibold d-block fs-7">Paid</span>
                                                        <span class="text-gray-900 fw-bold d-block fs-5">$1,200,000</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-danger fs-7 fw-bold">+52%</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-duotone ki-arrow-right fs-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px me-2">
                                                            <span class="symbol-label">
                                                                <img src="assets/media/svg/avatars/014-girl-7.svg"
                                                                    class="h-75 align-self-end" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Natali
                                                            Trump</a>
                                                        <span class="text-muted fw-semibold d-block">UI/UX Designer</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fw-semibold d-block fs-7">Paid</span>
                                                        <span class="text-gray-900 fw-bold d-block fs-5">$3,400,000</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-success fs-7 fw-bold">-34%</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-duotone ki-arrow-right fs-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px me-2">
                                                            <span class="symbol-label">
                                                                <img src="assets/media/svg/avatars/043-boy-18.svg"
                                                                    class="h-75 align-self-end" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Kevin
                                                            Leonard</a>
                                                        <span class="text-muted fw-semibold d-block">Art Director</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fw-semibold d-block fs-7">Paid</span>
                                                        <span
                                                            class="text-gray-900 fw-bold d-block fs-5">$35,600,000</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-info fs-7 fw-bold">+230%</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-duotone ki-arrow-right fs-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_table_widget_6_tab_2">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table align-middle gs-0 gy-3">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr>
                                                    <th class="p-0 w-50px"></th>
                                                    <th class="p-0 min-w-150px"></th>
                                                    <th class="p-0 min-w-140px"></th>
                                                    <th class="p-0 min-w-120px"></th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px me-2">
                                                            <span class="symbol-label">
                                                                <img src="assets/media/svg/avatars/018-girl-9.svg"
                                                                    class="h-75 align-self-end" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Jessie
                                                            Clarcson</a>
                                                        <span class="text-muted fw-semibold d-block">HTML, CSS
                                                            Coding</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fw-semibold d-block fs-7">Paid</span>
                                                        <span class="text-gray-900 fw-bold d-block fs-5">$1,200,000</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-warning fs-7 fw-bold">+52%</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-duotone ki-arrow-right fs-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px me-2">
                                                            <span class="symbol-label">
                                                                <img src="assets/media/svg/avatars/014-girl-7.svg"
                                                                    class="h-75 align-self-end" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Natali
                                                            Trump</a>
                                                        <span class="text-muted fw-semibold d-block">UI/UX Designer</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fw-semibold d-block fs-7">Paid</span>
                                                        <span class="text-gray-900 fw-bold d-block fs-5">$3,400,000</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-success fs-7 fw-bold">-34%</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-duotone ki-arrow-right fs-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px me-2">
                                                            <span class="symbol-label">
                                                                <img src="assets/media/svg/avatars/001-boy.svg"
                                                                    class="h-75 align-self-end" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Brad
                                                            Simmons</a>
                                                        <span class="text-muted fw-semibold d-block">Successful
                                                            Fellas</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fw-semibold d-block fs-7">Paid</span>
                                                        <span class="text-gray-900 fw-bold d-block fs-5">$200,500</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-primary fs-7 fw-bold">+28%</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-duotone ki-arrow-right fs-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade show active" id="kt_table_widget_6_tab_3">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table align-middle gs-0 gy-3">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr>
                                                    <th class="p-0 w-50px"></th>
                                                    <th class="p-0 min-w-150px"></th>
                                                    <th class="p-0 min-w-140px"></th>
                                                    <th class="p-0 min-w-120px"></th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px me-2">
                                                            <span class="symbol-label">
                                                                <img src="assets/media/svg/avatars/047-girl-25.svg"
                                                                    class="h-75 align-self-end" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Jessie
                                                            Clarcson</a>
                                                        <span class="text-muted fw-semibold d-block">HTML, CSS
                                                            Coding</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fw-semibold d-block fs-7">Paid</span>
                                                        <span class="text-gray-900 fw-bold d-block fs-5">$1,200,000</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-danger fs-7 fw-bold">+52%</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-duotone ki-arrow-right fs-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px me-2">
                                                            <span class="symbol-label">
                                                                <img src="assets/media/svg/avatars/014-girl-7.svg"
                                                                    class="h-75 align-self-end" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Natali
                                                            Trump</a>
                                                        <span class="text-muted fw-semibold d-block">UI/UX Designer</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fw-semibold d-block fs-7">Paid</span>
                                                        <span class="text-gray-900 fw-bold d-block fs-5">$3,400,000</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-success fs-7 fw-bold">-34%</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-duotone ki-arrow-right fs-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px me-2">
                                                            <span class="symbol-label">
                                                                <img src="assets/media/svg/avatars/043-boy-18.svg"
                                                                    class="h-75 align-self-end" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Kevin
                                                            Leonard</a>
                                                        <span class="text-muted fw-semibold d-block">Art Director</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fw-semibold d-block fs-7">Paid</span>
                                                        <span
                                                            class="text-gray-900 fw-bold d-block fs-5">$35,600,000</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-info fs-7 fw-bold">+230%</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-duotone ki-arrow-right fs-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px me-2">
                                                            <span class="symbol-label">
                                                                <img src="assets/media/svg/avatars/001-boy.svg"
                                                                    class="h-75 align-self-end" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Brad
                                                            Simmons</a>
                                                        <span class="text-muted fw-semibold d-block">Successful
                                                            Fellas</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fw-semibold d-block fs-7">Paid</span>
                                                        <span class="text-gray-900 fw-bold d-block fs-5">$200,500</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-primary fs-7 fw-bold">+28%</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-duotone ki-arrow-right fs-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Tables Widget 6-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row g-5 g-xl-8">
                <!--begin::Col-->
                <div class="col-xl-6">
                    <!--begin::Table Widget 7-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">Latest Orders</span>
                                <span class="text-muted mt-1 fw-semibold fs-7">More than 100 new orders</span>
                            </h3>
                            <div class="card-toolbar">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary active fw-bold px-4 me-1"
                                            data-bs-toggle="tab" href="#kt_table_widget_7_tab_1">Month</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bold px-4 me-1"
                                            data-bs-toggle="tab" href="#kt_table_widget_7_tab_2">Week</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bold px-4"
                                            data-bs-toggle="tab" href="#kt_table_widget_7_tab_3">Day</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-3">
                            <div class="tab-content">
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade show active" id="kt_table_widget_7_tab_1">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table align-middle gs-0 gy-3">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr>
                                                    <th class="p-0 w-50px"></th>
                                                    <th class="p-0 min-w-150px"></th>
                                                    <th class="p-0 min-w-140px"></th>
                                                    <th class="p-0 min-w-120px"></th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px me-2">
                                                            <span class="symbol-label bg-light-success">
                                                                <i class="ki-duotone ki-scroll fs-2x text-success">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                </i>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Media
                                                            Device</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Voice and video
                                                            recorder</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-muted fw-semibold d-block fs-8">Ordered</span>
                                                        <span class="text-gray-900 fw-bold d-block fs-7">5 day ago</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span
                                                            class="badge badge-light-success fs-7 fw-bold">Delivered</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-solid ki-dots-horizontal fs-1"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px me-2">
                                                            <span class="symbol-label bg-light-danger">
                                                                <i class="ki-duotone ki-element-11 fs-2x text-danger">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                </i>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Special
                                                            Meal</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Quona
                                                            Rice</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-muted fw-semibold d-block fs-8">Ordered</span>
                                                        <span class="text-gray-900 fw-bold d-block fs-7">2 day ago</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span
                                                            class="badge badge-light-danger fs-7 fw-bold">Delivered</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-solid ki-dots-horizontal fs-1"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px me-2">
                                                            <span class="symbol-label bg-light-primary">
                                                                <i class="ki-duotone ki-compass fs-2x text-primary">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">New
                                                            Users</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Awesome
                                                            Users</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-muted fw-semibold d-block fs-8">Ordered</span>
                                                        <span class="text-gray-900 fw-bold d-block fs-7">4 day ago</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span
                                                            class="badge badge-light-primary fs-7 fw-bold">Delivered</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-solid ki-dots-horizontal fs-1"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px me-2">
                                                            <span class="symbol-label bg-light-warning">
                                                                <i class="ki-duotone ki-abstract-26 fs-2x text-warning">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Active
                                                            Customers</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Best
                                                            Customers</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-muted fw-semibold d-block fs-8">Ordered</span>
                                                        <span class="text-gray-900 fw-bold d-block fs-7">1 day ago</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span
                                                            class="badge badge-light-warning fs-7 fw-bold">Delivered</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-solid ki-dots-horizontal fs-1"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px me-2">
                                                            <span class="symbol-label bg-light-info">
                                                                <i class="ki-duotone ki-bucket fs-2x text-info">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                </i>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Strawberry
                                                            Boxes</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">From
                                                            Spain</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-muted fw-semibold d-block fs-8">Ordered</span>
                                                        <span class="text-gray-900 fw-bold d-block fs-7">7 day ago</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-info fs-7 fw-bold">Delivered</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-solid ki-dots-horizontal fs-1"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_table_widget_7_tab_2">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table align-middle gs-0 gy-3">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr>
                                                    <th class="p-0 w-50px"></th>
                                                    <th class="p-0 min-w-150px"></th>
                                                    <th class="p-0 min-w-140px"></th>
                                                    <th class="p-0 min-w-120px"></th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px me-2">
                                                            <span class="symbol-label bg-light-info">
                                                                <i class="ki-duotone ki-abstract-41 fs-2x text-info">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Strawberry
                                                            Boxes</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">From
                                                            Spain</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-muted fw-semibold d-block fs-8">Ordered</span>
                                                        <span class="text-gray-900 fw-bold d-block fs-7">4 week ago</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-info fs-7 fw-bold">Delivered</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-solid ki-dots-horizontal fs-1"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px me-2">
                                                            <span class="symbol-label bg-light-danger">
                                                                <i class="ki-duotone ki-element-11 fs-2x text-danger">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                </i>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Special
                                                            Meal</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Quona
                                                            Rice</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-muted fw-semibold d-block fs-8">Ordered</span>
                                                        <span class="text-gray-900 fw-bold d-block fs-7">2 week ago</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span
                                                            class="badge badge-light-danger fs-7 fw-bold">Delivered</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-solid ki-dots-horizontal fs-1"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px me-2">
                                                            <span class="symbol-label bg-light-warning">
                                                                <i class="ki-duotone ki-abstract-26 fs-2x text-warning">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Active
                                                            Customers</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Best
                                                            Customers</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-muted fw-semibold d-block fs-8">Ordered</span>
                                                        <span class="text-gray-900 fw-bold d-block fs-7">5 week ago</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span
                                                            class="badge badge-light-warning fs-7 fw-bold">Delivered</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-solid ki-dots-horizontal fs-1"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_table_widget_7_tab_3">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table align-middle gs-0 gy-3">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr>
                                                    <th class="p-0 w-50px"></th>
                                                    <th class="p-0 min-w-150px"></th>
                                                    <th class="p-0 min-w-140px"></th>
                                                    <th class="p-0 min-w-120px"></th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px me-2">
                                                            <span class="symbol-label bg-light-success">
                                                                <i class="ki-duotone ki-basket fs-2x text-success">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                </i>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Media
                                                            Device</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Voice and video
                                                            recorder</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-muted fw-semibold d-block fs-8">Ordered</span>
                                                        <span class="text-gray-900 fw-bold d-block fs-7">3 month
                                                            ago</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span
                                                            class="badge badge-light-success fs-7 fw-bold">Delivered</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-solid ki-dots-horizontal fs-1"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px me-2">
                                                            <span class="symbol-label bg-light-danger">
                                                                <i class="ki-duotone ki-element-11 fs-2x text-danger">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                </i>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Special
                                                            Meal</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Quona
                                                            Rice</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-muted fw-semibold d-block fs-8">Ordered</span>
                                                        <span class="text-gray-900 fw-bold d-block fs-7">5 month
                                                            ago</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span
                                                            class="badge badge-light-danger fs-7 fw-bold">Delivered</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-solid ki-dots-horizontal fs-1"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px me-2">
                                                            <span class="symbol-label bg-light-warning">
                                                                <i class="ki-duotone ki-abstract-26 fs-2x text-warning">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Active
                                                            Customers</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Best
                                                            Customers</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-muted fw-semibold d-block fs-8">Ordered</span>
                                                        <span class="text-gray-900 fw-bold d-block fs-7">6 month
                                                            ago</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span
                                                            class="badge badge-light-warning fs-7 fw-bold">Delivered</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-solid ki-dots-horizontal fs-1"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px me-2">
                                                            <span class="symbol-label bg-light-info">
                                                                <i class="ki-duotone ki-abstract-41 fs-2x text-info">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Strawberry
                                                            Boxes</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">From
                                                            Spain</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-muted fw-semibold d-block fs-8">Ordered</span>
                                                        <span class="text-gray-900 fw-bold d-block fs-7">4 month
                                                            ago</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-info fs-7 fw-bold">Delivered</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-solid ki-dots-horizontal fs-1"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Tables Widget 7-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-6">
                    <!--begin::Table Widget 8-->
                    <div class="card card-xl-stretch mb-5 mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">Latest Products</span>
                                <span class="text-muted mt-1 fw-semibold fs-7">More than 100 new orders</span>
                            </h3>
                            <div class="card-toolbar">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary active fw-bold px-4 me-1"
                                            data-bs-toggle="tab" href="#kt_table_widget_8_tab_1">Month</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bold px-4 me-1"
                                            data-bs-toggle="tab" href="#kt_table_widget_8_tab_2">Week</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bold px-4"
                                            data-bs-toggle="tab" href="#kt_table_widget_8_tab_3">Day</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-3">
                            <div class="tab-content">
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade show active" id="kt_table_widget_8_tab_1">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table align-middle gs-0 gy-3">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr>
                                                    <th class="p-0 w-50px"></th>
                                                    <th class="p-0 min-w-150px"></th>
                                                    <th class="p-0 min-w-120px"></th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px me-2">
                                                            <span class="symbol-label bg-light-danger">
                                                                <i class="ki-duotone ki-scroll fs-2x text-danger">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                </i>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">School
                                                            Music Festival</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">by Rose
                                                            Liam</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-gray-900 fw-bold d-block fs-7">4:20PM, 03
                                                            Sep</span>
                                                        <span class="text-muted fw-semibold d-block fs-8">Date</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-solid ki-dots-horizontal fs-1"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px me-2">
                                                            <span class="symbol-label bg-light-warning">
                                                                <i class="ki-duotone ki-element-11 fs-2x text-warning">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                </i>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Maths
                                                            Championship</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">By Tom
                                                            Gere</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-gray-900 fw-bold d-block fs-7">10:05PM, 25
                                                            Oct</span>
                                                        <span class="text-muted fw-semibold d-block fs-8">Date</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-solid ki-dots-horizontal fs-1"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px me-2">
                                                            <span class="symbol-label bg-light-info">
                                                                <i class="ki-duotone ki-compass fs-2x text-info">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Who
                                                            Knows Geography</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">By Zoey
                                                            Dylan</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-gray-900 fw-bold d-block fs-7">3:22PM, 07
                                                            Sep</span>
                                                        <span class="text-muted fw-semibold d-block fs-8">Date</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-solid ki-dots-horizontal fs-1"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px me-2">
                                                            <span class="symbol-label bg-light-primary">
                                                                <i class="ki-duotone ki-abstract-26 fs-2x text-primary">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Napoleon
                                                            Days</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">By Luke
                                                            Owen</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-gray-900 fw-bold d-block fs-7">1:20PM, 02
                                                            Dec</span>
                                                        <span class="text-muted fw-semibold d-block fs-8">Date</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-solid ki-dots-horizontal fs-1"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px me-2">
                                                            <span class="symbol-label bg-light-success">
                                                                <i class="ki-duotone ki-bucket fs-2x text-success">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                </i>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">The
                                                            School Art Leads</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">By Ellie
                                                            Cole</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-gray-900 fw-bold d-block fs-7">6:20PM, 07
                                                            Sep</span>
                                                        <span class="text-muted fw-semibold d-block fs-8">Date</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-solid ki-dots-horizontal fs-1"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_table_widget_8_tab_2">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table align-middle gs-0 gy-3">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr>
                                                    <th class="p-0 w-50px"></th>
                                                    <th class="p-0 min-w-150px"></th>
                                                    <th class="p-0 min-w-120px"></th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px me-2">
                                                            <span class="symbol-label bg-light-info">
                                                                <i class="ki-duotone ki-compass fs-2x text-info">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Who
                                                            Knows Geography</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">By Zoey
                                                            Dylan</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-gray-900 fw-bold d-block fs-7">3:22PM, 07
                                                            Sep</span>
                                                        <span class="text-muted fw-semibold d-block fs-8">Date</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-solid ki-dots-horizontal fs-1"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px me-2">
                                                            <span class="symbol-label bg-light-warning">
                                                                <i class="ki-duotone ki-element-11 fs-2x text-warning">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                </i>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Maths
                                                            Championship</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">By Tom
                                                            Gere</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-gray-900 fw-bold d-block fs-7">10:05PM, 25
                                                            Oct</span>
                                                        <span class="text-muted fw-semibold d-block fs-8">Date</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-solid ki-dots-horizontal fs-1"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px me-2">
                                                            <span class="symbol-label bg-light-danger">
                                                                <i class="ki-duotone ki-scroll fs-2x text-danger">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                </i>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">School
                                                            Music Festival</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">by Rose
                                                            Liam</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-gray-900 fw-bold d-block fs-7">4:20PM, 03
                                                            Sep</span>
                                                        <span class="text-muted fw-semibold d-block fs-8">Date</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-solid ki-dots-horizontal fs-1"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_table_widget_8_tab_3">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table align-middle gs-0 gy-3">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr>
                                                    <th class="p-0 w-50px"></th>
                                                    <th class="p-0 min-w-150px"></th>
                                                    <th class="p-0 min-w-120px"></th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px me-2">
                                                            <span class="symbol-label bg-light-warning">
                                                                <i class="ki-duotone ki-element-11 fs-2x text-warning">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                </i>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Maths
                                                            Championship</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">By Tom
                                                            Gere</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-gray-900 fw-bold d-block fs-7">10:05PM, 25
                                                            Oct</span>
                                                        <span class="text-muted fw-semibold d-block fs-8">Date</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-solid ki-dots-horizontal fs-1"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px me-2">
                                                            <span class="symbol-label bg-light-info">
                                                                <i class="ki-duotone ki-compass fs-2x text-info">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Who
                                                            Knows Geography</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">By Zoey
                                                            Dylan</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-gray-900 fw-bold d-block fs-7">3:22PM, 07
                                                            Sep</span>
                                                        <span class="text-muted fw-semibold d-block fs-8">Date</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-solid ki-dots-horizontal fs-1"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px me-2">
                                                            <span class="symbol-label bg-light-primary">
                                                                <i class="ki-duotone ki-abstract-26 fs-2x text-primary">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Napoleon
                                                            Days</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">By Luke
                                                            Owen</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-gray-900 fw-bold d-block fs-7">1:20PM, 02
                                                            Dec</span>
                                                        <span class="text-muted fw-semibold d-block fs-8">Date</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-solid ki-dots-horizontal fs-1"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="symbol symbol-50px me-2">
                                                            <span class="symbol-label bg-light-danger">
                                                                <i class="ki-duotone ki-scroll fs-2x text-danger">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                </i>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">School
                                                            Music Festival</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">by Rose
                                                            Liam</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-gray-900 fw-bold d-block fs-7">4:20PM, 03
                                                            Sep</span>
                                                        <span class="text-muted fw-semibold d-block fs-8">Date</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                            <i class="ki-solid ki-dots-horizontal fs-1"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Tables Widget 8-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Tables Widget 9-->
            <div class="card mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Members Statistics</span>
                        <span class="text-muted mt-1 fw-semibold fs-7">Over 500 members</span>
                    </h3>
                    <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top"
                        data-bs-trigger="hover" title="Click to add a user">
                        <a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_invite_friends">
                            <i class="ki-duotone ki-plus fs-2"></i>New Member</a>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body py-3">
                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="fw-bold text-muted">
                                    <th class="w-25px">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1"
                                                data-kt-check="true" data-kt-check-target=".widget-9-check" />
                                        </div>
                                    </th>
                                    <th class="min-w-200px">Authors</th>
                                    <th class="min-w-150px">Company</th>
                                    <th class="min-w-150px">Progress</th>
                                    <th class="min-w-100px text-end">Actions</th>
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input widget-9-check" type="checkbox"
                                                value="1" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-45px me-5">
                                                <img src="assets/media/avatars/300-14.jpg" alt="" />
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#"
                                                    class="text-gray-900 fw-bold text-hover-primary fs-6">Ana Simmons</a>
                                                <span class="text-muted fw-semibold text-muted d-block fs-7">HTML, JS,
                                                    ReactJS</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block fs-6">Intertico</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Web, UI/UX
                                            Design</span>
                                    </td>
                                    <td class="text-end">
                                        <div class="d-flex flex-column w-100 me-2">
                                            <div class="d-flex flex-stack mb-2">
                                                <span class="text-muted me-2 fs-7 fw-bold">50%</span>
                                            </div>
                                            <div class="progress h-6px w-100">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                    style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-end flex-shrink-0">
                                            <a href="#"
                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <i class="ki-duotone ki-switch fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </a>
                                            <a href="#"
                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <i class="ki-duotone ki-pencil fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </a>
                                            <a href="#"
                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                <i class="ki-duotone ki-trash fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    <span class="path5"></span>
                                                </i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input widget-9-check" type="checkbox"
                                                value="1" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-45px me-5">
                                                <img src="assets/media/avatars/300-2.jpg" alt="" />
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#"
                                                    class="text-gray-900 fw-bold text-hover-primary fs-6">Jessie
                                                    Clarcson</a>
                                                <span class="text-muted fw-semibold text-muted d-block fs-7">C#, ASP.NET,
                                                    MS SQL</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block fs-6">Agoda</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Houses &
                                            Hotels</span>
                                    </td>
                                    <td class="text-end">
                                        <div class="d-flex flex-column w-100 me-2">
                                            <div class="d-flex flex-stack mb-2">
                                                <span class="text-muted me-2 fs-7 fw-bold">70%</span>
                                            </div>
                                            <div class="progress h-6px w-100">
                                                <div class="progress-bar bg-danger" role="progressbar"
                                                    style="width: 70%" aria-valuenow="70" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-end flex-shrink-0">
                                            <a href="#"
                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <i class="ki-duotone ki-switch fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </a>
                                            <a href="#"
                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <i class="ki-duotone ki-pencil fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </a>
                                            <a href="#"
                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                <i class="ki-duotone ki-trash fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    <span class="path5"></span>
                                                </i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input widget-9-check" type="checkbox"
                                                value="1" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-45px me-5">
                                                <img src="assets/media/avatars/300-5.jpg" alt="" />
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#"
                                                    class="text-gray-900 fw-bold text-hover-primary fs-6">Lebron Wayde</a>
                                                <span class="text-muted fw-semibold text-muted d-block fs-7">PHP, Laravel,
                                                    VueJS</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block fs-6">RoadGee</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Transportation</span>
                                    </td>
                                    <td class="text-end">
                                        <div class="d-flex flex-column w-100 me-2">
                                            <div class="d-flex flex-stack mb-2">
                                                <span class="text-muted me-2 fs-7 fw-bold">60%</span>
                                            </div>
                                            <div class="progress h-6px w-100">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 60%" aria-valuenow="60" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-end flex-shrink-0">
                                            <a href="#"
                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <i class="ki-duotone ki-switch fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </a>
                                            <a href="#"
                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <i class="ki-duotone ki-pencil fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </a>
                                            <a href="#"
                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                <i class="ki-duotone ki-trash fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    <span class="path5"></span>
                                                </i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input widget-9-check" type="checkbox"
                                                value="1" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-45px me-5">
                                                <img src="assets/media/avatars/300-20.jpg" alt="" />
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#"
                                                    class="text-gray-900 fw-bold text-hover-primary fs-6">Natali
                                                    Goodwin</a>
                                                <span class="text-muted fw-semibold text-muted d-block fs-7">Python,
                                                    PostgreSQL, ReactJS</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block fs-6">The Hill</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Insurance</span>
                                    </td>
                                    <td class="text-end">
                                        <div class="d-flex flex-column w-100 me-2">
                                            <div class="d-flex flex-stack mb-2">
                                                <span class="text-muted me-2 fs-7 fw-bold">50%</span>
                                            </div>
                                            <div class="progress h-6px w-100">
                                                <div class="progress-bar bg-warning" role="progressbar"
                                                    style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-end flex-shrink-0">
                                            <a href="#"
                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <i class="ki-duotone ki-switch fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </a>
                                            <a href="#"
                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <i class="ki-duotone ki-pencil fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </a>
                                            <a href="#"
                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                <i class="ki-duotone ki-trash fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    <span class="path5"></span>
                                                </i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input widget-9-check" type="checkbox"
                                                value="1" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-45px me-5">
                                                <img src="assets/media/avatars/300-23.jpg" alt="" />
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#"
                                                    class="text-gray-900 fw-bold text-hover-primary fs-6">Kevin
                                                    Leonard</a>
                                                <span class="text-muted fw-semibold text-muted d-block fs-7">HTML, JS,
                                                    ReactJS</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block fs-6">RoadGee</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Art Director</span>
                                    </td>
                                    <td class="text-end">
                                        <div class="d-flex flex-column w-100 me-2">
                                            <div class="d-flex flex-stack mb-2">
                                                <span class="text-muted me-2 fs-7 fw-bold">90%</span>
                                            </div>
                                            <div class="progress h-6px w-100">
                                                <div class="progress-bar bg-info" role="progressbar"
                                                    style="width: 90%" aria-valuenow="90" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-end flex-shrink-0">
                                            <a href="#"
                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <i class="ki-duotone ki-switch fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </a>
                                            <a href="#"
                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <i class="ki-duotone ki-pencil fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </a>
                                            <a href="#"
                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                <i class="ki-duotone ki-trash fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    <span class="path5"></span>
                                                </i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table container-->
                </div>
                <!--begin::Body-->
            </div>
            <!--end::Tables Widget 9-->
            <!--begin::Tables Widget 10-->
            <div class="card mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">New Products</span>
                        <span class="text-muted mt-1 fw-semibold fs-7">Over 500 new products</span>
                    </h3>
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-category fs-6">
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
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-3">
                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="border-0">
                                    <th class="p-0"></th>
                                    <th class="p-0 min-w-150px"></th>
                                    <th class="p-0 min-w-200px"></th>
                                    <th class="p-0 min-w-150px"></th>
                                    <th class="p-0 min-w-100px text-end"></th>
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-45px me-5">
                                                <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Name-->
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#"
                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Emma
                                                    Smith</a>
                                                <a href="#"
                                                    class="text-muted text-hover-primary fw-semibold text-muted d-block fs-7">
                                                    <span class="text-gray-900">Email</span>: smith@kpmg.com</a>
                                            </div>
                                            <!--end::Name-->
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$560,000</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Paid</span>
                                    </td>
                                    <td class="text-muted fw-semibold text-end">Laravel, Metronic</td>
                                    <td class="text-end">
                                        <span class="badge badge-light-success">Approved</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <i class="ki-duotone ki-switch fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <i class="ki-duotone ki-pencil fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                            <i class="ki-duotone ki-trash fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-45px me-5">
                                                <span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Name-->
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#"
                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Melody
                                                    Macy</a>
                                                <a href="#"
                                                    class="text-muted text-hover-primary fw-semibold text-muted d-block fs-7">
                                                    <span class="text-gray-900">Email</span>: melody@altbox.com</a>
                                            </div>
                                            <!--end::Name-->
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$2,000,000</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Paid</span>
                                    </td>
                                    <td class="text-muted fw-semibold text-end">ReactJs, HTML</td>
                                    <td class="text-end">
                                        <span class="badge badge-light-warning">In Progress</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <i class="ki-duotone ki-switch fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <i class="ki-duotone ki-pencil fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                            <i class="ki-duotone ki-trash fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-45px me-5">
                                                <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Name-->
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#"
                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Max
                                                    Smith</a>
                                                <a href="#"
                                                    class="text-muted text-hover-primary fw-semibold text-muted d-block fs-7">
                                                    <span class="text-gray-900">Email</span>: max@kt.com</a>
                                            </div>
                                            <!--end::Name-->
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$760,000</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Paid</span>
                                    </td>
                                    <td class="text-muted fw-semibold text-end">Python, MySQL</td>
                                    <td class="text-end">
                                        <span class="badge badge-light-danger">Success</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <i class="ki-duotone ki-switch fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <i class="ki-duotone ki-pencil fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                            <i class="ki-duotone ki-trash fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-45px me-5">
                                                <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Name-->
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#"
                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Sean
                                                    Bean</a>
                                                <a href="#"
                                                    class="text-muted text-hover-primary fw-semibold text-muted d-block fs-7">
                                                    <span class="text-gray-900">Email</span>: sean@dellito.com</a>
                                            </div>
                                            <!--end::Name-->
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$257,000</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Paid</span>
                                    </td>
                                    <td class="text-muted fw-semibold text-end">ReactJS, Ruby</td>
                                    <td class="text-end">
                                        <span class="badge badge-light-info">Rejected</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <i class="ki-duotone ki-switch fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <i class="ki-duotone ki-pencil fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                            <i class="ki-duotone ki-trash fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-45px me-5">
                                                <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Name-->
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#"
                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Brian
                                                    Cox</a>
                                                <a href="#"
                                                    class="text-muted text-hover-primary fw-semibold text-muted d-block fs-7">
                                                    <span class="text-gray-900">Email</span>: brian@exchange.com</a>
                                            </div>
                                            <!--end::Name-->
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$560,000</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Paid</span>
                                    </td>
                                    <td class="text-muted fw-semibold text-end">AngularJS, C#</td>
                                    <td class="text-end">
                                        <span class="badge badge-light-primary">In Progress</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <i class="ki-duotone ki-switch fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <i class="ki-duotone ki-pencil fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                            <i class="ki-duotone ki-trash fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table container-->
                </div>
                <!--begin::Body-->
            </div>
            <!--end::Tables Widget 10-->
            <!--begin::Tables Widget 11-->
            <div class="card mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">New Arrivals</span>
                        <span class="text-muted mt-1 fw-semibold fs-7">Over 500 new products</span>
                    </h3>
                    <div class="card-toolbar">
                        <a href="#" class="btn btn-sm btn-light-primary">
                            <i class="ki-duotone ki-plus fs-2"></i>New Member</a>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body py-3">
                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table align-middle gs-0 gy-4">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="fw-bold text-muted bg-light">
                                    <th class="ps-4 min-w-325px rounded-start">Product</th>
                                    <th class="min-w-125px">Price</th>
                                    <th class="min-w-125px">Deposit</th>
                                    <th class="min-w-200px">Agent</th>
                                    <th class="min-w-150px">Status</th>
                                    <th class="min-w-200px text-end rounded-end"></th>
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50px me-5">
                                                <img src="assets/media/stock/600x400/img-26.jpg" class=""
                                                    alt="" />
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#"
                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Sant
                                                    Extreanet Solution</a>
                                                <span class="text-muted fw-semibold text-muted d-block fs-7">HTML, JS,
                                                    ReactJS</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$2,790</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Paid</span>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$520</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Rejected</span>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Bradly
                                            Beal</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Insurance</span>
                                    </td>
                                    <td>
                                        <span class="badge badge-light-primary fs-7 fw-bold">Approved</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <i class="ki-duotone ki-switch fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <i class="ki-duotone ki-pencil fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                            <i class="ki-duotone ki-trash fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50px me-5">
                                                <img src="assets/media/stock/600x400/img-3.jpg" class=""
                                                    alt="" />
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#"
                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Telegram
                                                    Development</a>
                                                <span class="text-muted fw-semibold text-muted d-block fs-7">C#, ASP.NET,
                                                    MS SQL</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$4,790</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Paid</span>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$240</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Rejected</span>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Chris
                                            Thompson</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">NBA Player</span>
                                    </td>
                                    <td>
                                        <span class="badge badge-light-danger fs-7 fw-bold">In Progress</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <i class="ki-duotone ki-switch fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <i class="ki-duotone ki-pencil fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                            <i class="ki-duotone ki-trash fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50px me-5">
                                                <img src="assets/media/stock/600x400/img-9.jpg" class=""
                                                    alt="" />
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#"
                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Payroll
                                                    Application</a>
                                                <span class="text-muted fw-semibold text-muted d-block fs-7">PHP, Laravel,
                                                    VueJS</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$4,390</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Paid</span>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$593</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Rejected</span>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Zoey
                                            McGee</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Ruby Developer</span>
                                    </td>
                                    <td>
                                        <span class="badge badge-light-success fs-7 fw-bold">Success</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <i class="ki-duotone ki-switch fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <i class="ki-duotone ki-pencil fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                            <i class="ki-duotone ki-trash fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50px me-5">
                                                <img src="assets/media/stock/600x400/img-18.jpg" class=""
                                                    alt="" />
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#"
                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">HR
                                                    Management System</a>
                                                <span class="text-muted fw-semibold text-muted d-block fs-7">Python,
                                                    PostgreSQL, ReactJS</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$7,990</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Paid</span>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$980</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Rejected</span>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Brandon
                                            Ingram</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Insurance</span>
                                    </td>
                                    <td>
                                        <span class="badge badge-light-info fs-7 fw-bold">Rejected</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <i class="ki-duotone ki-switch fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <i class="ki-duotone ki-pencil fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                            <i class="ki-duotone ki-trash fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50px me-5">
                                                <img src="assets/media/stock/600x400/img-8.jpg" class=""
                                                    alt="" />
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#"
                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Telegram
                                                    Mobile</a>
                                                <span class="text-muted fw-semibold text-muted d-block fs-7">HTML, JS,
                                                    ReactJS</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$5,790</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Paid</span>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$750</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Rejected</span>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Natali
                                            Trump</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Insurance</span>
                                    </td>
                                    <td>
                                        <span class="badge badge-light-warning fs-7 fw-bold">Approved</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <i class="ki-duotone ki-switch fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <i class="ki-duotone ki-pencil fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                            <i class="ki-duotone ki-trash fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table container-->
                </div>
                <!--begin::Body-->
            </div>
            <!--end::Tables Widget 11-->
            <!--begin::Tables Widget 12-->
            <div class="card mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Member Statistics</span>
                        <span class="text-muted mt-1 fw-semibold fs-7">Over 500 new members</span>
                    </h3>
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-category fs-6">
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
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body py-3">
                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table align-middle gs-0 gy-4">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="fw-bold text-muted bg-light">
                                    <th class="ps-4 min-w-300px rounded-start">Agent</th>
                                    <th class="min-w-125px">Earnings</th>
                                    <th class="min-w-125px">Comission</th>
                                    <th class="min-w-200px">Company</th>
                                    <th class="min-w-150px">Rating</th>
                                    <th class="min-w-200px text-end rounded-end"></th>
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50px me-5">
                                                <span class="symbol-label bg-light">
                                                    <img src="assets/media/svg/avatars/001-boy.svg"
                                                        class="h-75 align-self-end" alt="" />
                                                </span>
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#"
                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Brad
                                                    Simmons</a>
                                                <span class="text-muted fw-semibold text-muted d-block fs-7">HTML, JS,
                                                    ReactJS</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$8,000,000</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Pending</span>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Paid</span>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Intertico</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Web, UI/UX
                                            Design</span>
                                    </td>
                                    <td>
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
                                        <span class="text-muted fw-semibold text-muted d-block fs-7 mt-1">Best
                                            Rated</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2">View</a>
                                        <a href="#"
                                            class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">Edit</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50px me-5">
                                                <span class="symbol-label bg-light">
                                                    <img src="assets/media/svg/avatars/047-girl-25.svg"
                                                        class="h-75 align-self-end" alt="" />
                                                </span>
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#"
                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Lebron
                                                    Wayde</a>
                                                <span class="text-muted fw-semibold text-muted d-block fs-7">PHP, Laravel,
                                                    VueJS</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$8,750,000</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Paid</span>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$7,400</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Paid</span>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Agoda</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Houses &
                                            Hotels</span>
                                    </td>
                                    <td>
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
                                        <span class="text-muted fw-semibold text-muted d-block fs-7 mt-1">Above
                                            Avarage</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2">View</a>
                                        <a href="#"
                                            class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">Edit</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50px me-5">
                                                <span class="symbol-label bg-light">
                                                    <img src="assets/media/svg/avatars/006-girl-3.svg"
                                                        class="h-75 align-self-end" alt="" />
                                                </span>
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#"
                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Brad
                                                    Simmons</a>
                                                <span class="text-muted fw-semibold text-muted d-block fs-7">HTML, JS,
                                                    ReactJS</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$8,000,000</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">In Proccess</span>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$2,500</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Rejected</span>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">RoadGee</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Paid</span>
                                    </td>
                                    <td>
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
                                        <span class="text-muted fw-semibold text-muted d-block fs-7 mt-1">Best
                                            Rated</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2">View</a>
                                        <a href="#"
                                            class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">Edit</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50px me-5">
                                                <span class="symbol-label bg-light">
                                                    <img src="assets/media/svg/avatars/014-girl-7.svg"
                                                        class="h-75 align-self-end" alt="" />
                                                </span>
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#"
                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Natali
                                                    Trump</a>
                                                <span class="text-muted fw-semibold text-muted d-block fs-7">HTML, JS,
                                                    ReactJS</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$700,000</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Pending</span>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$7,760</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Paid</span>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">The
                                            Hill</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Insurance</span>
                                    </td>
                                    <td>
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
                                            <div class="rating-label">
                                                <i class="ki-duotone ki-star fs-6"></i>
                                            </div>
                                            <div class="rating-label">
                                                <i class="ki-duotone ki-star fs-6"></i>
                                            </div>
                                        </div>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7 mt-1">Avarage</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2">View</a>
                                        <a href="#"
                                            class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">Edit</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50px me-5">
                                                <span class="symbol-label bg-light">
                                                    <img src="assets/media/svg/avatars/020-girl-11.svg"
                                                        class="h-75 align-self-end" alt="" />
                                                </span>
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#"
                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Jessie
                                                    Clarcson</a>
                                                <span class="text-muted fw-semibold text-muted d-block fs-7">HTML, JS,
                                                    ReactJS</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$1,320,000</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Pending</span>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$6,250</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Paid</span>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Intertico</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Web, UI/UX
                                            Design</span>
                                    </td>
                                    <td>
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
                                        <span class="text-muted fw-semibold text-muted d-block fs-7 mt-1">Best
                                            Rated</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2">View</a>
                                        <a href="#"
                                            class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">Edit</a>
                                    </td>
                                </tr>
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table container-->
                </div>
                <!--begin::Body-->
            </div>
            <!--end::Tables Widget 12-->
            <!--begin::Tables Widget 13-->
            <div class="card mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Recent Orders</span>
                        <span class="text-muted mt-1 fw-semibold fs-7">Over 500 orders</span>
                    </h3>
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-category fs-6">
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
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body py-3">
                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="fw-bold text-muted">
                                    <th class="w-25px">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1"
                                                data-kt-check="true" data-kt-check-target=".widget-13-check" />
                                        </div>
                                    </th>
                                    <th class="min-w-150px">Order Id</th>
                                    <th class="min-w-140px">Country</th>
                                    <th class="min-w-120px">Date</th>
                                    <th class="min-w-120px">Company</th>
                                    <th class="min-w-120px">Total</th>
                                    <th class="min-w-120px">Status</th>
                                    <th class="min-w-100px text-end">Actions</th>
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input widget-13-check" type="checkbox"
                                                value="1" />
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary fs-6">56037-XDER</a>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Brasil</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Code: PH</span>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">05/28/2020</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Code: Paid</span>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Intertico</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Web, UI/UX
                                            Design</span>
                                    </td>
                                    <td class="text-gray-900 fw-bold text-hover-primary fs-6">$3560</td>
                                    <td>
                                        <span class="badge badge-light-success">Approved</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <i class="ki-duotone ki-switch fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <i class="ki-duotone ki-pencil fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                            <i class="ki-duotone ki-trash fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input widget-13-check" type="checkbox"
                                                value="1" />
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary fs-6">05822-FXSP</a>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Belarus</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Code: BY</span>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">04/18/2021</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Code: Paid</span>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Agoda</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Houses &
                                            Hotels</span>
                                    </td>
                                    <td class="text-gray-900 fw-bold text-hover-primary fs-6">$4850</td>
                                    <td>
                                        <span class="badge badge-light-warning">In Progress</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <i class="ki-duotone ki-switch fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <i class="ki-duotone ki-pencil fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                            <i class="ki-duotone ki-trash fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input widget-13-check" type="checkbox"
                                                value="1" />
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary fs-6">4472-QREX</a>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Phillipines</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Code: BH</span>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">07/23/2019</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Code: Paid</span>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">RoadGee</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Transportation</span>
                                    </td>
                                    <td class="text-gray-900 fw-bold text-hover-primary fs-6">$8376</td>
                                    <td>
                                        <span class="badge badge-light-danger">Success</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <i class="ki-duotone ki-switch fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <i class="ki-duotone ki-pencil fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                            <i class="ki-duotone ki-trash fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input widget-13-check" type="checkbox"
                                                value="1" />
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary fs-6">00347-BCLQ</a>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Argentina</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Code: BR</span>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">12/21/2021</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Code: Paid</span>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">The
                                            Hill</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Insurance</span>
                                    </td>
                                    <td class="text-gray-900 fw-bold text-hover-primary fs-6">$9486</td>
                                    <td>
                                        <span class="badge badge-light-info">Rejected</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <i class="ki-duotone ki-switch fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <i class="ki-duotone ki-pencil fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                            <i class="ki-duotone ki-trash fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input widget-13-check" type="checkbox"
                                                value="1" />
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary fs-6">59486-XDER</a>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Agoda</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Code: BT</span>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">05/28/2020</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Code: Paid</span>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Phillipines</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">Transportation</span>
                                    </td>
                                    <td class="text-gray-900 fw-bold text-hover-primary fs-6">$8476</td>
                                    <td>
                                        <span class="badge badge-light-primary">Approved</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <i class="ki-duotone ki-switch fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <i class="ki-duotone ki-pencil fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                            <i class="ki-duotone ki-trash fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table container-->
                </div>
                <!--begin::Body-->
            </div>
            <!--end::Tables Widget 13-->
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
                                                            <span class="fs-7 text-muted">Creating a clear text structure
                                                                is just one SEO</span>
                                                        </span>
                                                        <!--end:Info-->
                                                    </span>
                                                    <!--end:Label-->
                                                    <!--begin:Input-->
                                                    <span class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio" name="category"
                                                            value="1" />
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
                                                            <span class="fs-7 text-muted">Creating a clear text structure
                                                                is just one aspect</span>
                                                        </span>
                                                        <!--end:Info-->
                                                    </span>
                                                    <!--end:Label-->
                                                    <!--begin:Input-->
                                                    <span class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio" name="category"
                                                            value="2" />
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
                                                            <span class="fs-7 text-muted">Creating a clear text structure
                                                                copywriting</span>
                                                        </span>
                                                        <!--end:Info-->
                                                    </span>
                                                    <!--end:Label-->
                                                    <!--begin:Input-->
                                                    <span class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio" name="category"
                                                            value="3" />
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
                                                    <input class="form-check-input" type="radio" name="framework"
                                                        value="3" />
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
                                                    <input class="form-check-input" type="radio" name="framework"
                                                        value="4" />
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
                                                class="form-control form-control-lg form-control-solid" name="dbname"
                                                placeholder="" value="master_db" />
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
                                                        <span class="fs-7 text-muted">Microsoft Fast NoSQL Database</span>
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
                                            <label class="required fs-6 fw-semibold form-label mb-2">Card Number</label>
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
                                                    <img src="assets/media/svg/card-logos/mastercard.svg" alt=""
                                                        class="h-25px" />
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
                                                            class="form-select form-select-solid" data-control="select2"
                                                            data-hide-search="true" data-placeholder="Month">
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
                                                            class="form-select form-select-solid" data-control="select2"
                                                            data-hide-search="true" data-placeholder="Year">
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
                                                <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
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
                                                    <div class="position-absolute translate-middle-y top-50 end-0 me-3">
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
    <!--begin::Modal - Invite Friends-->
    <div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
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
                        <h1 class="mb-3">Invite a Friend</h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">If you need more info, please check out
                            <a href="#" class="link-primary fw-bold">FAQ Page</a>.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Google Contacts Invite-->
                    <div class="btn btn-light-primary fw-bold w-100 mb-8">
                        <img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg"
                            class="h-20px me-3" />Invite Gmail Contacts
                    </div>
                    <!--end::Google Contacts Invite-->
                    <!--begin::Separator-->
                    <div class="separator d-flex flex-center mb-8">
                        <span class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3">or</span>
                    </div>
                    <!--end::Separator-->
                    <!--begin::Textarea-->
                    <textarea class="form-control form-control-solid mb-8" rows="3" placeholder="Type or paste emails here"></textarea>
                    <!--end::Textarea-->
                    <!--begin::Users-->
                    <div class="mb-10">
                        <!--begin::Heading-->
                        <div class="fs-6 fw-semibold mb-2">Your Invitations</div>
                        <!--end::Heading-->
                        <!--begin::List-->
                        <div class="mh-300px scroll-y me-n7 pe-7">
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
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
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
                                        <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected="selected">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
                                        <div class="fw-semibold text-muted">melody@altbox.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected="selected">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max
                                            Smith</a>
                                        <div class="fw-semibold text-muted">max@kt.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected="selected">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
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
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
                                        <div class="fw-semibold text-muted">sean@dellito.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected="selected">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
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
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
                                        <div class="fw-semibold text-muted">brian@exchange.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected="selected">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
                                        <div class="fw-semibold text-muted">mik@pex.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected="selected">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
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
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
                                        <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected="selected">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
                                        <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected="selected">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
                                        <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected="selected">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="assets/media/avatars/300-23.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan
                                            Wilson</a>
                                        <div class="fw-semibold text-muted">dam@consilting.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected="selected">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
                                        <div class="fw-semibold text-muted">emma@intenso.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected="selected">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana
                                            Crown</a>
                                        <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected="selected">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
                                        <div class="fw-semibold text-muted">robert@benko.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected="selected">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
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
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
                                        <div class="fw-semibold text-muted">miller@mapple.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected="selected">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-success text-success fw-semibold">L</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
                                        <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected="selected">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
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
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
                                        <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
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
                                        <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
                                        <div class="fw-semibold text-muted">robert@benko.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected="selected">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::List-->
                    </div>
                    <!--end::Users-->
                    <!--begin::Notice-->
                    <div class="d-flex flex-stack">
                        <!--begin::Label-->
                        <div class="me-5 fw-semibold">
                            <label class="fs-6">Adding Users by Team Members</label>
                            <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
                        </div>
                        <!--end::Label-->
                        <!--begin::Switch-->
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" checked="checked" />
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
    <!--end::Modal - Invite Friend-->
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
