@extends('layouts.metronic')

@section('body_attributes')
    id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true"
    data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true"
    data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true"
    class="app-default"
@endsection

@section('toolbar')
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6 metronic-toolbar-separated">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Add Order
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
                    <li class="breadcrumb-item text-muted">eCommerce</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-500 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Sales</li>
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
                        id="kt_menu_69981c47edb3b">
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
                                        data-dropdown-parent="#kt_menu_69981c47edb3b" data-allow-clear="true">
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
            <!--begin::Form-->
            <form id="kt_ecommerce_edit_order_form" class="form d-flex flex-column flex-lg-row"
                data-kt-redirect="/apps/ecommerce/sales/listing.html">
                <!--begin::Aside column-->
                <div class="w-100 flex-lg-row-auto w-lg-300px mb-7 me-7 me-lg-10">
                    <!--begin::Order details-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Order Details</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <div class="d-flex flex-column gap-10">
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Label-->
                                    <label class="form-label">Order ID</label>
                                    <!--end::Label-->
                                    <!--begin::Auto-generated ID-->
                                    <div class="fw-bold fs-3">#14388</div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Label-->
                                    <label class="required form-label">Payment Method</label>
                                    <!--end::Label-->
                                    <!--begin::Select2-->
                                    <select class="form-select mb-2" data-control="select2" data-hide-search="true"
                                        data-placeholder="Select an option" name="payment_method"
                                        id="kt_ecommerce_edit_order_payment">
                                        <option></option>
                                        <option value="cod">Cash on Delivery</option>
                                        <option value="visa">Credit Card (Visa)</option>
                                        <option value="mastercard">Credit Card (Mastercard)</option>
                                        <option value="paypal">Paypal</option>
                                    </select>
                                    <!--end::Select2-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Set the date of the order to process.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Label-->
                                    <label class="required form-label">Shipping Method</label>
                                    <!--end::Label-->
                                    <!--begin::Select2-->
                                    <select class="form-select mb-2" data-control="select2" data-hide-search="true"
                                        data-placeholder="Select an option" name="shipping_method"
                                        id="kt_ecommerce_edit_order_shipping">
                                        <option></option>
                                        <option value="none">N/A - Virtual Product</option>
                                        <option value="standard">Standard Rate</option>
                                        <option value="express">Express Rate</option>
                                        <option value="speed">Speed Overnight Rate</option>
                                    </select>
                                    <!--end::Select2-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Set the date of the order to process.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Label-->
                                    <label class="required form-label">Order Date</label>
                                    <!--end::Label-->
                                    <!--begin::Editor-->
                                    <input id="kt_ecommerce_edit_order_date" name="order_date"
                                        placeholder="Select a date" class="form-control mb-2" value="" />
                                    <!--end::Editor-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Set the date of the order to process.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                            </div>
                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::Order details-->
                </div>
                <!--end::Aside column-->
                <!--begin::Main column-->
                <div class="d-flex flex-column flex-lg-row-fluid gap-7 gap-lg-10">
                    <!--begin::Order details-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Select Products</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <div class="d-flex flex-column gap-10">
                                <!--begin::Input group-->
                                <div>
                                    <!--begin::Label-->
                                    <label class="form-label">Add products to this order</label>
                                    <!--end::Label-->
                                    <!--begin::Selected products-->
                                    <div class="row row-cols-1 row-cols-xl-3 row-cols-md-2 border border-dashed rounded pt-3 pb-1 px-2 mb-5 mh-300px overflow-scroll"
                                        id="kt_ecommerce_edit_order_selected_products">
                                        <!--begin::Empty message-->
                                        <span class="w-100 text-muted">Select one or more products from the list below by
                                            ticking the checkbox.</span>
                                        <!--end::Empty message-->
                                    </div>
                                    <!--begin::Selected products-->
                                    <!--begin::Total price-->
                                    <div class="fw-bold fs-4">Total Cost: $
                                        <span id="kt_ecommerce_edit_order_total_price">0.00</span>
                                    </div>
                                    <!--end::Total price-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Separator-->
                                <div class="separator"></div>
                                <!--end::Separator-->
                                <!--begin::Search products-->
                                <div class="d-flex align-items-center position-relative mb-n7">
                                    <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <input type="text" data-kt-ecommerce-edit-order-filter="search"
                                        class="form-control form-control-solid w-100 w-lg-50 ps-12"
                                        placeholder="Search Products" />
                                </div>
                                <!--end::Search products-->
                                <!--begin::Table-->
                                <table class="table align-middle table-row-dashed fs-6 gy-5"
                                    id="kt_ecommerce_edit_order_product_table">
                                    <thead>
                                        <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                            <th class="w-25px pe-2"></th>
                                            <th class="min-w-200px">Product</th>
                                            <th class="min-w-100px text-end pe-5">Qty Remaining</th>
                                        </tr>
                                    </thead>
                                    <tbody class="fw-semibold text-gray-600">
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"
                                                    data-kt-ecommerce-edit-order-filter="product"
                                                    data-kt-ecommerce-edit-order-id="product_1">
                                                    <!--begin::Thumbnail-->
                                                    <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                        class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/assets/media//stock/ecommerce/1.png);"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->
                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">Product
                                                            1</a>
                                                        <!--end::Title-->
                                                        <!--begin::Price-->
                                                        <div class="fw-semibold fs-7">Price: $
                                                            <span data-kt-ecommerce-edit-order-filter="price">214.00</span>
                                                        </div>
                                                        <!--end::Price-->
                                                        <!--begin::SKU-->
                                                        <div class="text-muted fs-7">SKU: 02703006</div>
                                                        <!--end::SKU-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-5" data-order="36">
                                                <span class="fw-bold ms-3">36</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"
                                                    data-kt-ecommerce-edit-order-filter="product"
                                                    data-kt-ecommerce-edit-order-id="product_2">
                                                    <!--begin::Thumbnail-->
                                                    <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                        class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/assets/media//stock/ecommerce/2.png);"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->
                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">Product
                                                            2</a>
                                                        <!--end::Title-->
                                                        <!--begin::Price-->
                                                        <div class="fw-semibold fs-7">Price: $
                                                            <span data-kt-ecommerce-edit-order-filter="price">210.00</span>
                                                        </div>
                                                        <!--end::Price-->
                                                        <!--begin::SKU-->
                                                        <div class="text-muted fs-7">SKU: 02692001</div>
                                                        <!--end::SKU-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-5" data-order="9">
                                                <span class="badge badge-light-warning">Low stock</span>
                                                <span class="fw-bold text-warning ms-3">9</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"
                                                    data-kt-ecommerce-edit-order-filter="product"
                                                    data-kt-ecommerce-edit-order-id="product_3">
                                                    <!--begin::Thumbnail-->
                                                    <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                        class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/assets/media//stock/ecommerce/3.png);"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->
                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">Product
                                                            3</a>
                                                        <!--end::Title-->
                                                        <!--begin::Price-->
                                                        <div class="fw-semibold fs-7">Price: $
                                                            <span data-kt-ecommerce-edit-order-filter="price">32.00</span>
                                                        </div>
                                                        <!--end::Price-->
                                                        <!--begin::SKU-->
                                                        <div class="text-muted fs-7">SKU: 03267007</div>
                                                        <!--end::SKU-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-5" data-order="4">
                                                <span class="badge badge-light-warning">Low stock</span>
                                                <span class="fw-bold text-warning ms-3">4</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"
                                                    data-kt-ecommerce-edit-order-filter="product"
                                                    data-kt-ecommerce-edit-order-id="product_4">
                                                    <!--begin::Thumbnail-->
                                                    <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                        class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/assets/media//stock/ecommerce/4.png);"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->
                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">Product
                                                            4</a>
                                                        <!--end::Title-->
                                                        <!--begin::Price-->
                                                        <div class="fw-semibold fs-7">Price: $
                                                            <span data-kt-ecommerce-edit-order-filter="price">169.00</span>
                                                        </div>
                                                        <!--end::Price-->
                                                        <!--begin::SKU-->
                                                        <div class="text-muted fs-7">SKU: 04744005</div>
                                                        <!--end::SKU-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-5" data-order="22">
                                                <span class="fw-bold ms-3">22</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"
                                                    data-kt-ecommerce-edit-order-filter="product"
                                                    data-kt-ecommerce-edit-order-id="product_5">
                                                    <!--begin::Thumbnail-->
                                                    <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                        class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/assets/media//stock/ecommerce/5.png);"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->
                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">Product
                                                            5</a>
                                                        <!--end::Title-->
                                                        <!--begin::Price-->
                                                        <div class="fw-semibold fs-7">Price: $
                                                            <span data-kt-ecommerce-edit-order-filter="price">107.00</span>
                                                        </div>
                                                        <!--end::Price-->
                                                        <!--begin::SKU-->
                                                        <div class="text-muted fs-7">SKU: 04430001</div>
                                                        <!--end::SKU-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-5" data-order="24">
                                                <span class="fw-bold ms-3">24</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"
                                                    data-kt-ecommerce-edit-order-filter="product"
                                                    data-kt-ecommerce-edit-order-id="product_6">
                                                    <!--begin::Thumbnail-->
                                                    <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                        class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/assets/media//stock/ecommerce/6.png);"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->
                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">Product
                                                            6</a>
                                                        <!--end::Title-->
                                                        <!--begin::Price-->
                                                        <div class="fw-semibold fs-7">Price: $
                                                            <span data-kt-ecommerce-edit-order-filter="price">153.00</span>
                                                        </div>
                                                        <!--end::Price-->
                                                        <!--begin::SKU-->
                                                        <div class="text-muted fs-7">SKU: 02340006</div>
                                                        <!--end::SKU-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-5" data-order="30">
                                                <span class="fw-bold ms-3">30</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"
                                                    data-kt-ecommerce-edit-order-filter="product"
                                                    data-kt-ecommerce-edit-order-id="product_7">
                                                    <!--begin::Thumbnail-->
                                                    <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                        class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/assets/media//stock/ecommerce/7.png);"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->
                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">Product
                                                            7</a>
                                                        <!--end::Title-->
                                                        <!--begin::Price-->
                                                        <div class="fw-semibold fs-7">Price: $
                                                            <span data-kt-ecommerce-edit-order-filter="price">162.00</span>
                                                        </div>
                                                        <!--end::Price-->
                                                        <!--begin::SKU-->
                                                        <div class="text-muted fs-7">SKU: 01782008</div>
                                                        <!--end::SKU-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-5" data-order="36">
                                                <span class="fw-bold ms-3">36</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"
                                                    data-kt-ecommerce-edit-order-filter="product"
                                                    data-kt-ecommerce-edit-order-id="product_8">
                                                    <!--begin::Thumbnail-->
                                                    <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                        class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/assets/media//stock/ecommerce/8.png);"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->
                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">Product
                                                            8</a>
                                                        <!--end::Title-->
                                                        <!--begin::Price-->
                                                        <div class="fw-semibold fs-7">Price: $
                                                            <span data-kt-ecommerce-edit-order-filter="price">117.00</span>
                                                        </div>
                                                        <!--end::Price-->
                                                        <!--begin::SKU-->
                                                        <div class="text-muted fs-7">SKU: 04355004</div>
                                                        <!--end::SKU-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-5" data-order="16">
                                                <span class="fw-bold ms-3">16</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"
                                                    data-kt-ecommerce-edit-order-filter="product"
                                                    data-kt-ecommerce-edit-order-id="product_9">
                                                    <!--begin::Thumbnail-->
                                                    <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                        class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/assets/media//stock/ecommerce/9.png);"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->
                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">Product
                                                            9</a>
                                                        <!--end::Title-->
                                                        <!--begin::Price-->
                                                        <div class="fw-semibold fs-7">Price: $
                                                            <span data-kt-ecommerce-edit-order-filter="price">48.00</span>
                                                        </div>
                                                        <!--end::Price-->
                                                        <!--begin::SKU-->
                                                        <div class="text-muted fs-7">SKU: 04672004</div>
                                                        <!--end::SKU-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-5" data-order="42">
                                                <span class="fw-bold ms-3">42</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"
                                                    data-kt-ecommerce-edit-order-filter="product"
                                                    data-kt-ecommerce-edit-order-id="product_10">
                                                    <!--begin::Thumbnail-->
                                                    <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                        class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/assets/media//stock/ecommerce/10.png);"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->
                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">Product
                                                            10</a>
                                                        <!--end::Title-->
                                                        <!--begin::Price-->
                                                        <div class="fw-semibold fs-7">Price: $
                                                            <span data-kt-ecommerce-edit-order-filter="price">177.00</span>
                                                        </div>
                                                        <!--end::Price-->
                                                        <!--begin::SKU-->
                                                        <div class="text-muted fs-7">SKU: 03902009</div>
                                                        <!--end::SKU-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-5" data-order="7">
                                                <span class="badge badge-light-warning">Low stock</span>
                                                <span class="fw-bold text-warning ms-3">7</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"
                                                    data-kt-ecommerce-edit-order-filter="product"
                                                    data-kt-ecommerce-edit-order-id="product_11">
                                                    <!--begin::Thumbnail-->
                                                    <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                        class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/assets/media//stock/ecommerce/11.png);"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->
                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">Product
                                                            11</a>
                                                        <!--end::Title-->
                                                        <!--begin::Price-->
                                                        <div class="fw-semibold fs-7">Price: $
                                                            <span data-kt-ecommerce-edit-order-filter="price">130.00</span>
                                                        </div>
                                                        <!--end::Price-->
                                                        <!--begin::SKU-->
                                                        <div class="text-muted fs-7">SKU: 02343004</div>
                                                        <!--end::SKU-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-5" data-order="29">
                                                <span class="fw-bold ms-3">29</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"
                                                    data-kt-ecommerce-edit-order-filter="product"
                                                    data-kt-ecommerce-edit-order-id="product_12">
                                                    <!--begin::Thumbnail-->
                                                    <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                        class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/assets/media//stock/ecommerce/12.png);"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->
                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">Product
                                                            12</a>
                                                        <!--end::Title-->
                                                        <!--begin::Price-->
                                                        <div class="fw-semibold fs-7">Price: $
                                                            <span data-kt-ecommerce-edit-order-filter="price">237.00</span>
                                                        </div>
                                                        <!--end::Price-->
                                                        <!--begin::SKU-->
                                                        <div class="text-muted fs-7">SKU: 02226002</div>
                                                        <!--end::SKU-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-5" data-order="27">
                                                <span class="fw-bold ms-3">27</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"
                                                    data-kt-ecommerce-edit-order-filter="product"
                                                    data-kt-ecommerce-edit-order-id="product_13">
                                                    <!--begin::Thumbnail-->
                                                    <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                        class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/assets/media//stock/ecommerce/13.png);"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->
                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">Product
                                                            13</a>
                                                        <!--end::Title-->
                                                        <!--begin::Price-->
                                                        <div class="fw-semibold fs-7">Price: $
                                                            <span data-kt-ecommerce-edit-order-filter="price">209.00</span>
                                                        </div>
                                                        <!--end::Price-->
                                                        <!--begin::SKU-->
                                                        <div class="text-muted fs-7">SKU: 01446007</div>
                                                        <!--end::SKU-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-5" data-order="5">
                                                <span class="badge badge-light-warning">Low stock</span>
                                                <span class="fw-bold text-warning ms-3">5</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"
                                                    data-kt-ecommerce-edit-order-filter="product"
                                                    data-kt-ecommerce-edit-order-id="product_14">
                                                    <!--begin::Thumbnail-->
                                                    <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                        class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/assets/media//stock/ecommerce/14.png);"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->
                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">Product
                                                            14</a>
                                                        <!--end::Title-->
                                                        <!--begin::Price-->
                                                        <div class="fw-semibold fs-7">Price: $
                                                            <span data-kt-ecommerce-edit-order-filter="price">112.00</span>
                                                        </div>
                                                        <!--end::Price-->
                                                        <!--begin::SKU-->
                                                        <div class="text-muted fs-7">SKU: 02745005</div>
                                                        <!--end::SKU-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-5" data-order="20">
                                                <span class="fw-bold ms-3">20</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"
                                                    data-kt-ecommerce-edit-order-filter="product"
                                                    data-kt-ecommerce-edit-order-id="product_15">
                                                    <!--begin::Thumbnail-->
                                                    <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                        class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/assets/media//stock/ecommerce/15.png);"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->
                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">Product
                                                            15</a>
                                                        <!--end::Title-->
                                                        <!--begin::Price-->
                                                        <div class="fw-semibold fs-7">Price: $
                                                            <span data-kt-ecommerce-edit-order-filter="price">230.00</span>
                                                        </div>
                                                        <!--end::Price-->
                                                        <!--begin::SKU-->
                                                        <div class="text-muted fs-7">SKU: 03972005</div>
                                                        <!--end::SKU-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-5" data-order="26">
                                                <span class="fw-bold ms-3">26</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"
                                                    data-kt-ecommerce-edit-order-filter="product"
                                                    data-kt-ecommerce-edit-order-id="product_16">
                                                    <!--begin::Thumbnail-->
                                                    <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                        class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/assets/media//stock/ecommerce/16.png);"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->
                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">Product
                                                            16</a>
                                                        <!--end::Title-->
                                                        <!--begin::Price-->
                                                        <div class="fw-semibold fs-7">Price: $
                                                            <span data-kt-ecommerce-edit-order-filter="price">146.00</span>
                                                        </div>
                                                        <!--end::Price-->
                                                        <!--begin::SKU-->
                                                        <div class="text-muted fs-7">SKU: 04931009</div>
                                                        <!--end::SKU-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-5" data-order="34">
                                                <span class="fw-bold ms-3">34</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"
                                                    data-kt-ecommerce-edit-order-filter="product"
                                                    data-kt-ecommerce-edit-order-id="product_17">
                                                    <!--begin::Thumbnail-->
                                                    <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                        class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/assets/media//stock/ecommerce/17.png);"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->
                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">Product
                                                            17</a>
                                                        <!--end::Title-->
                                                        <!--begin::Price-->
                                                        <div class="fw-semibold fs-7">Price: $
                                                            <span data-kt-ecommerce-edit-order-filter="price">236.00</span>
                                                        </div>
                                                        <!--end::Price-->
                                                        <!--begin::SKU-->
                                                        <div class="text-muted fs-7">SKU: 02808006</div>
                                                        <!--end::SKU-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-5" data-order="50">
                                                <span class="fw-bold ms-3">50</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"
                                                    data-kt-ecommerce-edit-order-filter="product"
                                                    data-kt-ecommerce-edit-order-id="product_18">
                                                    <!--begin::Thumbnail-->
                                                    <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                        class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/assets/media//stock/ecommerce/18.png);"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->
                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">Product
                                                            18</a>
                                                        <!--end::Title-->
                                                        <!--begin::Price-->
                                                        <div class="fw-semibold fs-7">Price: $
                                                            <span data-kt-ecommerce-edit-order-filter="price">130.00</span>
                                                        </div>
                                                        <!--end::Price-->
                                                        <!--begin::SKU-->
                                                        <div class="text-muted fs-7">SKU: 02386003</div>
                                                        <!--end::SKU-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-5" data-order="39">
                                                <span class="fw-bold ms-3">39</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"
                                                    data-kt-ecommerce-edit-order-filter="product"
                                                    data-kt-ecommerce-edit-order-id="product_19">
                                                    <!--begin::Thumbnail-->
                                                    <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                        class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/assets/media//stock/ecommerce/19.png);"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->
                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">Product
                                                            19</a>
                                                        <!--end::Title-->
                                                        <!--begin::Price-->
                                                        <div class="fw-semibold fs-7">Price: $
                                                            <span data-kt-ecommerce-edit-order-filter="price">194.00</span>
                                                        </div>
                                                        <!--end::Price-->
                                                        <!--begin::SKU-->
                                                        <div class="text-muted fs-7">SKU: 03520002</div>
                                                        <!--end::SKU-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-5" data-order="19">
                                                <span class="fw-bold ms-3">19</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"
                                                    data-kt-ecommerce-edit-order-filter="product"
                                                    data-kt-ecommerce-edit-order-id="product_20">
                                                    <!--begin::Thumbnail-->
                                                    <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                        class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/assets/media//stock/ecommerce/20.png);"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->
                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">Product
                                                            20</a>
                                                        <!--end::Title-->
                                                        <!--begin::Price-->
                                                        <div class="fw-semibold fs-7">Price: $
                                                            <span data-kt-ecommerce-edit-order-filter="price">25.00</span>
                                                        </div>
                                                        <!--end::Price-->
                                                        <!--begin::SKU-->
                                                        <div class="text-muted fs-7">SKU: 04711002</div>
                                                        <!--end::SKU-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-5" data-order="33">
                                                <span class="fw-bold ms-3">33</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"
                                                    data-kt-ecommerce-edit-order-filter="product"
                                                    data-kt-ecommerce-edit-order-id="product_21">
                                                    <!--begin::Thumbnail-->
                                                    <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                        class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/assets/media//stock/ecommerce/21.png);"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->
                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">Product
                                                            21</a>
                                                        <!--end::Title-->
                                                        <!--begin::Price-->
                                                        <div class="fw-semibold fs-7">Price: $
                                                            <span data-kt-ecommerce-edit-order-filter="price">240.00</span>
                                                        </div>
                                                        <!--end::Price-->
                                                        <!--begin::SKU-->
                                                        <div class="text-muted fs-7">SKU: 03192005</div>
                                                        <!--end::SKU-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-5" data-order="7">
                                                <span class="badge badge-light-warning">Low stock</span>
                                                <span class="fw-bold text-warning ms-3">7</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"
                                                    data-kt-ecommerce-edit-order-filter="product"
                                                    data-kt-ecommerce-edit-order-id="product_22">
                                                    <!--begin::Thumbnail-->
                                                    <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                        class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/assets/media//stock/ecommerce/22.png);"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->
                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">Product
                                                            22</a>
                                                        <!--end::Title-->
                                                        <!--begin::Price-->
                                                        <div class="fw-semibold fs-7">Price: $
                                                            <span data-kt-ecommerce-edit-order-filter="price">163.00</span>
                                                        </div>
                                                        <!--end::Price-->
                                                        <!--begin::SKU-->
                                                        <div class="text-muted fs-7">SKU: 03519009</div>
                                                        <!--end::SKU-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-5" data-order="12">
                                                <span class="fw-bold ms-3">12</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"
                                                    data-kt-ecommerce-edit-order-filter="product"
                                                    data-kt-ecommerce-edit-order-id="product_23">
                                                    <!--begin::Thumbnail-->
                                                    <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                        class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/assets/media//stock/ecommerce/23.png);"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->
                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">Product
                                                            23</a>
                                                        <!--end::Title-->
                                                        <!--begin::Price-->
                                                        <div class="fw-semibold fs-7">Price: $
                                                            <span data-kt-ecommerce-edit-order-filter="price">155.00</span>
                                                        </div>
                                                        <!--end::Price-->
                                                        <!--begin::SKU-->
                                                        <div class="text-muted fs-7">SKU: 01919005</div>
                                                        <!--end::SKU-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-5" data-order="33">
                                                <span class="fw-bold ms-3">33</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"
                                                    data-kt-ecommerce-edit-order-filter="product"
                                                    data-kt-ecommerce-edit-order-id="product_24">
                                                    <!--begin::Thumbnail-->
                                                    <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                        class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/assets/media//stock/ecommerce/24.png);"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->
                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">Product
                                                            24</a>
                                                        <!--end::Title-->
                                                        <!--begin::Price-->
                                                        <div class="fw-semibold fs-7">Price: $
                                                            <span data-kt-ecommerce-edit-order-filter="price">169.00</span>
                                                        </div>
                                                        <!--end::Price-->
                                                        <!--begin::SKU-->
                                                        <div class="text-muted fs-7">SKU: 03491007</div>
                                                        <!--end::SKU-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-5" data-order="28">
                                                <span class="fw-bold ms-3">28</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"
                                                    data-kt-ecommerce-edit-order-filter="product"
                                                    data-kt-ecommerce-edit-order-id="product_25">
                                                    <!--begin::Thumbnail-->
                                                    <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                        class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/assets/media//stock/ecommerce/25.png);"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->
                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">Product
                                                            25</a>
                                                        <!--end::Title-->
                                                        <!--begin::Price-->
                                                        <div class="fw-semibold fs-7">Price: $
                                                            <span data-kt-ecommerce-edit-order-filter="price">35.00</span>
                                                        </div>
                                                        <!--end::Price-->
                                                        <!--begin::SKU-->
                                                        <div class="text-muted fs-7">SKU: 01325005</div>
                                                        <!--end::SKU-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-5" data-order="7">
                                                <span class="badge badge-light-warning">Low stock</span>
                                                <span class="fw-bold text-warning ms-3">7</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"
                                                    data-kt-ecommerce-edit-order-filter="product"
                                                    data-kt-ecommerce-edit-order-id="product_26">
                                                    <!--begin::Thumbnail-->
                                                    <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                        class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/assets/media//stock/ecommerce/26.png);"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->
                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">Product
                                                            26</a>
                                                        <!--end::Title-->
                                                        <!--begin::Price-->
                                                        <div class="fw-semibold fs-7">Price: $
                                                            <span data-kt-ecommerce-edit-order-filter="price">246.00</span>
                                                        </div>
                                                        <!--end::Price-->
                                                        <!--begin::SKU-->
                                                        <div class="text-muted fs-7">SKU: 04609006</div>
                                                        <!--end::SKU-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-5" data-order="20">
                                                <span class="fw-bold ms-3">20</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"
                                                    data-kt-ecommerce-edit-order-filter="product"
                                                    data-kt-ecommerce-edit-order-id="product_27">
                                                    <!--begin::Thumbnail-->
                                                    <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                        class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/assets/media//stock/ecommerce/27.png);"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->
                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">Product
                                                            27</a>
                                                        <!--end::Title-->
                                                        <!--begin::Price-->
                                                        <div class="fw-semibold fs-7">Price: $
                                                            <span data-kt-ecommerce-edit-order-filter="price">214.00</span>
                                                        </div>
                                                        <!--end::Price-->
                                                        <!--begin::SKU-->
                                                        <div class="text-muted fs-7">SKU: 04719009</div>
                                                        <!--end::SKU-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-5" data-order="3">
                                                <span class="badge badge-light-warning">Low stock</span>
                                                <span class="fw-bold text-warning ms-3">3</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"
                                                    data-kt-ecommerce-edit-order-filter="product"
                                                    data-kt-ecommerce-edit-order-id="product_28">
                                                    <!--begin::Thumbnail-->
                                                    <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                        class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/assets/media//stock/ecommerce/28.png);"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->
                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">Product
                                                            28</a>
                                                        <!--end::Title-->
                                                        <!--begin::Price-->
                                                        <div class="fw-semibold fs-7">Price: $
                                                            <span data-kt-ecommerce-edit-order-filter="price">129.00</span>
                                                        </div>
                                                        <!--end::Price-->
                                                        <!--begin::SKU-->
                                                        <div class="text-muted fs-7">SKU: 02130007</div>
                                                        <!--end::SKU-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-5" data-order="11">
                                                <span class="fw-bold ms-3">11</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"
                                                    data-kt-ecommerce-edit-order-filter="product"
                                                    data-kt-ecommerce-edit-order-id="product_29">
                                                    <!--begin::Thumbnail-->
                                                    <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                        class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/assets/media//stock/ecommerce/29.png);"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->
                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">Product
                                                            29</a>
                                                        <!--end::Title-->
                                                        <!--begin::Price-->
                                                        <div class="fw-semibold fs-7">Price: $
                                                            <span data-kt-ecommerce-edit-order-filter="price">191.00</span>
                                                        </div>
                                                        <!--end::Price-->
                                                        <!--begin::SKU-->
                                                        <div class="text-muted fs-7">SKU: 04200004</div>
                                                        <!--end::SKU-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-5" data-order="6">
                                                <span class="badge badge-light-warning">Low stock</span>
                                                <span class="fw-bold text-warning ms-3">6</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center"
                                                    data-kt-ecommerce-edit-order-filter="product"
                                                    data-kt-ecommerce-edit-order-id="product_30">
                                                    <!--begin::Thumbnail-->
                                                    <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                        class="symbol symbol-50px">
                                                        <span class="symbol-label"
                                                            style="background-image:url(/assets/media//stock/ecommerce/30.png);"></span>
                                                    </a>
                                                    <!--end::Thumbnail-->
                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}"
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">Product
                                                            30</a>
                                                        <!--end::Title-->
                                                        <!--begin::Price-->
                                                        <div class="fw-semibold fs-7">Price: $
                                                            <span data-kt-ecommerce-edit-order-filter="price">139.00</span>
                                                        </div>
                                                        <!--end::Price-->
                                                        <!--begin::SKU-->
                                                        <div class="text-muted fs-7">SKU: 01408001</div>
                                                        <!--end::SKU-->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-5" data-order="14">
                                                <span class="fw-bold ms-3">14</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--end::Table-->
                            </div>
                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::Order details-->
                    <!--begin::Order details-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Delivery Details</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Billing address-->
                            <div class="d-flex flex-column gap-5 gap-md-7">
                                <!--begin::Title-->
                                <div class="fs-3 fw-bold mb-n2">Billing Address</div>
                                <!--end::Title-->
                                <!--begin::Input group-->
                                <div class="d-flex flex-column flex-md-row gap-5">
                                    <div class="fv-row flex-row-fluid">
                                        <!--begin::Label-->
                                        <label class="required form-label">Address Line 1</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control" name="billing_order_address_1"
                                            placeholder="Address Line 1" value="" />
                                        <!--end::Input-->
                                    </div>
                                    <div class="flex-row-fluid">
                                        <!--begin::Label-->
                                        <label class="form-label">Address Line 2</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control" name="billing_order_address_2"
                                            placeholder="Address Line 2" />
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="d-flex flex-column flex-md-row gap-5">
                                    <div class="flex-row-fluid">
                                        <!--begin::Label-->
                                        <label class="form-label">City</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control" name="billing_order_city" placeholder=""
                                            value="" />
                                        <!--end::Input-->
                                    </div>
                                    <div class="fv-row flex-row-fluid">
                                        <!--begin::Label-->
                                        <label class="required form-label">Postcode</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control" name="billing_order_postcode" placeholder=""
                                            value="" />
                                        <!--end::Input-->
                                    </div>
                                    <div class="fv-row flex-row-fluid">
                                        <!--begin::Label-->
                                        <label class="required form-label">State</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control" name="billing_order_state" placeholder=""
                                            value="" />
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Label-->
                                    <label class="required form-label">Country</label>
                                    <!--end::Label-->
                                    <!--begin::Select2-->
                                    <select class="form-select" data-placeholder="Select an option"
                                        id="kt_ecommerce_edit_order_billing_country" name="billing_order_country">
                                        <option></option>
                                        <option value="AF"
                                            data-kt-select2-country="/assets/media/flags/afghanistan.svg">Afghanistan
                                        </option>
                                        <option value="AX"
                                            data-kt-select2-country="/assets/media/flags/aland-islands.svg">Aland Islands
                                        </option>
                                        <option value="AL" data-kt-select2-country="/assets/media/flags/albania.svg">
                                            Albania</option>
                                        <option value="DZ" data-kt-select2-country="/assets/media/flags/algeria.svg">
                                            Algeria</option>
                                        <option value="AS"
                                            data-kt-select2-country="/assets/media/flags/american-samoa.svg">American Samoa
                                        </option>
                                        <option value="AD" data-kt-select2-country="/assets/media/flags/andorra.svg">
                                            Andorra</option>
                                        <option value="AO" data-kt-select2-country="/assets/media/flags/angola.svg">
                                            Angola</option>
                                        <option value="AI" data-kt-select2-country="/assets/media/flags/anguilla.svg">
                                            Anguilla</option>
                                        <option value="AG"
                                            data-kt-select2-country="/assets/media/flags/antigua-and-barbuda.svg">Antigua
                                            and Barbuda</option>
                                        <option value="AR"
                                            data-kt-select2-country="/assets/media/flags/argentina.svg">Argentina</option>
                                        <option value="AM" data-kt-select2-country="/assets/media/flags/armenia.svg">
                                            Armenia</option>
                                        <option value="AW" data-kt-select2-country="/assets/media/flags/aruba.svg">
                                            Aruba</option>
                                        <option value="AU"
                                            data-kt-select2-country="/assets/media/flags/australia.svg">Australia</option>
                                        <option value="AT" data-kt-select2-country="/assets/media/flags/austria.svg">
                                            Austria</option>
                                        <option value="AZ"
                                            data-kt-select2-country="/assets/media/flags/azerbaijan.svg">Azerbaijan
                                        </option>
                                        <option value="BS" data-kt-select2-country="/assets/media/flags/bahamas.svg">
                                            Bahamas</option>
                                        <option value="BH" data-kt-select2-country="/assets/media/flags/bahrain.svg">
                                            Bahrain</option>
                                        <option value="BD"
                                            data-kt-select2-country="/assets/media/flags/bangladesh.svg">Bangladesh
                                        </option>
                                        <option value="BB" data-kt-select2-country="/assets/media/flags/barbados.svg">
                                            Barbados</option>
                                        <option value="BY" data-kt-select2-country="/assets/media/flags/belarus.svg">
                                            Belarus</option>
                                        <option value="BE" data-kt-select2-country="/assets/media/flags/belgium.svg">
                                            Belgium</option>
                                        <option value="BZ" data-kt-select2-country="/assets/media/flags/belize.svg">
                                            Belize</option>
                                        <option value="BJ" data-kt-select2-country="/assets/media/flags/benin.svg">
                                            Benin</option>
                                        <option value="BM" data-kt-select2-country="/assets/media/flags/bermuda.svg">
                                            Bermuda</option>
                                        <option value="BT" data-kt-select2-country="/assets/media/flags/bhutan.svg">
                                            Bhutan</option>
                                        <option value="BO" data-kt-select2-country="/assets/media/flags/bolivia.svg">
                                            Bolivia, Plurinational State of</option>
                                        <option value="BQ" data-kt-select2-country="/assets/media/flags/bonaire.svg">
                                            Bonaire, Sint Eustatius and Saba</option>
                                        <option value="BA"
                                            data-kt-select2-country="/assets/media/flags/bosnia-and-herzegovina.svg">Bosnia
                                            and Herzegovina</option>
                                        <option value="BW" data-kt-select2-country="/assets/media/flags/botswana.svg">
                                            Botswana</option>
                                        <option value="BR" data-kt-select2-country="/assets/media/flags/brazil.svg">
                                            Brazil</option>
                                        <option value="IO"
                                            data-kt-select2-country="/assets/media/flags/british-indian-ocean-territory.svg">
                                            British Indian Ocean Territory</option>
                                        <option value="BN" data-kt-select2-country="/assets/media/flags/brunei.svg">
                                            Brunei Darussalam</option>
                                        <option value="BG" data-kt-select2-country="/assets/media/flags/bulgaria.svg">
                                            Bulgaria</option>
                                        <option value="BF"
                                            data-kt-select2-country="/assets/media/flags/burkina-faso.svg">Burkina Faso
                                        </option>
                                        <option value="BI" data-kt-select2-country="/assets/media/flags/burundi.svg">
                                            Burundi</option>
                                        <option value="KH" data-kt-select2-country="/assets/media/flags/cambodia.svg">
                                            Cambodia</option>
                                        <option value="CM" data-kt-select2-country="/assets/media/flags/cameroon.svg">
                                            Cameroon</option>
                                        <option value="CA" data-kt-select2-country="/assets/media/flags/canada.svg">
                                            Canada</option>
                                        <option value="CV"
                                            data-kt-select2-country="/assets/media/flags/cape-verde.svg">Cape Verde
                                        </option>
                                        <option value="KY"
                                            data-kt-select2-country="/assets/media/flags/cayman-islands.svg">Cayman Islands
                                        </option>
                                        <option value="CF"
                                            data-kt-select2-country="/assets/media/flags/central-african-republic.svg">
                                            Central African Republic</option>
                                        <option value="TD" data-kt-select2-country="/assets/media/flags/chad.svg">Chad
                                        </option>
                                        <option value="CL" data-kt-select2-country="/assets/media/flags/chile.svg">
                                            Chile</option>
                                        <option value="CN" data-kt-select2-country="/assets/media/flags/china.svg">
                                            China</option>
                                        <option value="CX"
                                            data-kt-select2-country="/assets/media/flags/christmas-island.svg">Christmas
                                            Island</option>
                                        <option value="CC"
                                            data-kt-select2-country="/assets/media/flags/cocos-island.svg">Cocos (Keeling)
                                            Islands</option>
                                        <option value="CO" data-kt-select2-country="/assets/media/flags/colombia.svg">
                                            Colombia</option>
                                        <option value="KM" data-kt-select2-country="/assets/media/flags/comoros.svg">
                                            Comoros</option>
                                        <option value="CK"
                                            data-kt-select2-country="/assets/media/flags/cook-islands.svg">Cook Islands
                                        </option>
                                        <option value="CR"
                                            data-kt-select2-country="/assets/media/flags/costa-rica.svg">Costa Rica
                                        </option>
                                        <option value="CI"
                                            data-kt-select2-country="/assets/media/flags/ivory-coast.svg">Côte d'Ivoire
                                        </option>
                                        <option value="HR" data-kt-select2-country="/assets/media/flags/croatia.svg">
                                            Croatia</option>
                                        <option value="CU" data-kt-select2-country="/assets/media/flags/cuba.svg">Cuba
                                        </option>
                                        <option value="CW" data-kt-select2-country="/assets/media/flags/curacao.svg">
                                            Curaçao</option>
                                        <option value="CZ"
                                            data-kt-select2-country="/assets/media/flags/czech-republic.svg">Czech Republic
                                        </option>
                                        <option value="DK" data-kt-select2-country="/assets/media/flags/denmark.svg">
                                            Denmark</option>
                                        <option value="DJ" data-kt-select2-country="/assets/media/flags/djibouti.svg">
                                            Djibouti</option>
                                        <option value="DM" data-kt-select2-country="/assets/media/flags/dominica.svg">
                                            Dominica</option>
                                        <option value="DO"
                                            data-kt-select2-country="/assets/media/flags/dominican-republic.svg">Dominican
                                            Republic</option>
                                        <option value="EC" data-kt-select2-country="/assets/media/flags/ecuador.svg">
                                            Ecuador</option>
                                        <option value="EG" data-kt-select2-country="/assets/media/flags/egypt.svg">
                                            Egypt</option>
                                        <option value="SV"
                                            data-kt-select2-country="/assets/media/flags/el-salvador.svg">El Salvador
                                        </option>
                                        <option value="GQ"
                                            data-kt-select2-country="/assets/media/flags/equatorial-guinea.svg">Equatorial
                                            Guinea</option>
                                        <option value="ER" data-kt-select2-country="/assets/media/flags/eritrea.svg">
                                            Eritrea</option>
                                        <option value="EE" data-kt-select2-country="/assets/media/flags/estonia.svg">
                                            Estonia</option>
                                        <option value="ET" data-kt-select2-country="/assets/media/flags/ethiopia.svg">
                                            Ethiopia</option>
                                        <option value="FK"
                                            data-kt-select2-country="/assets/media/flags/falkland-islands.svg">Falkland
                                            Islands (Malvinas)</option>
                                        <option value="FJ" data-kt-select2-country="/assets/media/flags/fiji.svg">Fiji
                                        </option>
                                        <option value="FI" data-kt-select2-country="/assets/media/flags/finland.svg">
                                            Finland</option>
                                        <option value="FR" data-kt-select2-country="/assets/media/flags/france.svg">
                                            France</option>
                                        <option value="PF"
                                            data-kt-select2-country="/assets/media/flags/french-polynesia.svg">French
                                            Polynesia</option>
                                        <option value="GA" data-kt-select2-country="/assets/media/flags/gabon.svg">
                                            Gabon</option>
                                        <option value="GM" data-kt-select2-country="/assets/media/flags/gambia.svg">
                                            Gambia</option>
                                        <option value="GE" data-kt-select2-country="/assets/media/flags/georgia.svg">
                                            Georgia</option>
                                        <option value="DE" data-kt-select2-country="/assets/media/flags/germany.svg">
                                            Germany</option>
                                        <option value="GH" data-kt-select2-country="/assets/media/flags/ghana.svg">
                                            Ghana</option>
                                        <option value="GI"
                                            data-kt-select2-country="/assets/media/flags/gibraltar.svg">Gibraltar</option>
                                        <option value="GR" data-kt-select2-country="/assets/media/flags/greece.svg">
                                            Greece</option>
                                        <option value="GL"
                                            data-kt-select2-country="/assets/media/flags/greenland.svg">Greenland</option>
                                        <option value="GD" data-kt-select2-country="/assets/media/flags/grenada.svg">
                                            Grenada</option>
                                        <option value="GU" data-kt-select2-country="/assets/media/flags/guam.svg">Guam
                                        </option>
                                        <option value="GT"
                                            data-kt-select2-country="/assets/media/flags/guatemala.svg">Guatemala</option>
                                        <option value="GG" data-kt-select2-country="/assets/media/flags/guernsey.svg">
                                            Guernsey</option>
                                        <option value="GN" data-kt-select2-country="/assets/media/flags/guinea.svg">
                                            Guinea</option>
                                        <option value="GW"
                                            data-kt-select2-country="/assets/media/flags/guinea-bissau.svg">Guinea-Bissau
                                        </option>
                                        <option value="HT" data-kt-select2-country="/assets/media/flags/haiti.svg">
                                            Haiti</option>
                                        <option value="VA"
                                            data-kt-select2-country="/assets/media/flags/vatican-city.svg">Holy See
                                            (Vatican City State)</option>
                                        <option value="HN" data-kt-select2-country="/assets/media/flags/honduras.svg">
                                            Honduras</option>
                                        <option value="HK"
                                            data-kt-select2-country="/assets/media/flags/hong-kong.svg">Hong Kong</option>
                                        <option value="HU" data-kt-select2-country="/assets/media/flags/hungary.svg">
                                            Hungary</option>
                                        <option value="IS" data-kt-select2-country="/assets/media/flags/iceland.svg">
                                            Iceland</option>
                                        <option value="IN" data-kt-select2-country="/assets/media/flags/india.svg">
                                            India</option>
                                        <option value="ID"
                                            data-kt-select2-country="/assets/media/flags/indonesia.svg">Indonesia</option>
                                        <option value="IR" data-kt-select2-country="/assets/media/flags/iran.svg">
                                            Iran, Islamic Republic of</option>
                                        <option value="IQ" data-kt-select2-country="/assets/media/flags/iraq.svg">Iraq
                                        </option>
                                        <option value="IE" data-kt-select2-country="/assets/media/flags/ireland.svg">
                                            Ireland</option>
                                        <option value="IM"
                                            data-kt-select2-country="/assets/media/flags/isle-of-man.svg">Isle of Man
                                        </option>
                                        <option value="IL" data-kt-select2-country="/assets/media/flags/israel.svg">
                                            Israel</option>
                                        <option value="IT" data-kt-select2-country="/assets/media/flags/italy.svg">
                                            Italy</option>
                                        <option value="JM"
                                            data-kt-select2-country="/assets/media/flags/jamaica.svg">Jamaica</option>
                                        <option value="JP" data-kt-select2-country="/assets/media/flags/japan.svg">
                                            Japan</option>
                                        <option value="JE" data-kt-select2-country="/assets/media/flags/jersey.svg">
                                            Jersey</option>
                                        <option value="JO" data-kt-select2-country="/assets/media/flags/jordan.svg">
                                            Jordan</option>
                                        <option value="KZ"
                                            data-kt-select2-country="/assets/media/flags/kazakhstan.svg">Kazakhstan
                                        </option>
                                        <option value="KE" data-kt-select2-country="/assets/media/flags/kenya.svg">
                                            Kenya</option>
                                        <option value="KI"
                                            data-kt-select2-country="/assets/media/flags/kiribati.svg">Kiribati</option>
                                        <option value="KP"
                                            data-kt-select2-country="/assets/media/flags/north-korea.svg">Korea,
                                            Democratic People's Republic of</option>
                                        <option value="KW" data-kt-select2-country="/assets/media/flags/kuwait.svg">
                                            Kuwait</option>
                                        <option value="KG"
                                            data-kt-select2-country="/assets/media/flags/kyrgyzstan.svg">Kyrgyzstan
                                        </option>
                                        <option value="LA" data-kt-select2-country="/assets/media/flags/laos.svg">
                                            Lao People's Democratic Republic</option>
                                        <option value="LV" data-kt-select2-country="/assets/media/flags/latvia.svg">
                                            Latvia</option>
                                        <option value="LB"
                                            data-kt-select2-country="/assets/media/flags/lebanon.svg">Lebanon</option>
                                        <option value="LS"
                                            data-kt-select2-country="/assets/media/flags/lesotho.svg">Lesotho</option>
                                        <option value="LR"
                                            data-kt-select2-country="/assets/media/flags/liberia.svg">Liberia</option>
                                        <option value="LY" data-kt-select2-country="/assets/media/flags/libya.svg">
                                            Libya</option>
                                        <option value="LI"
                                            data-kt-select2-country="/assets/media/flags/liechtenstein.svg">Liechtenstein
                                        </option>
                                        <option value="LT"
                                            data-kt-select2-country="/assets/media/flags/lithuania.svg">Lithuania</option>
                                        <option value="LU"
                                            data-kt-select2-country="/assets/media/flags/luxembourg.svg">Luxembourg
                                        </option>
                                        <option value="MO" data-kt-select2-country="/assets/media/flags/macao.svg">
                                            Macao</option>
                                        <option value="MG"
                                            data-kt-select2-country="/assets/media/flags/madagascar.svg">Madagascar
                                        </option>
                                        <option value="MW" data-kt-select2-country="/assets/media/flags/malawi.svg">
                                            Malawi</option>
                                        <option value="MY"
                                            data-kt-select2-country="/assets/media/flags/malaysia.svg">Malaysia</option>
                                        <option value="MV"
                                            data-kt-select2-country="/assets/media/flags/maldives.svg">Maldives</option>
                                        <option value="ML" data-kt-select2-country="/assets/media/flags/mali.svg">
                                            Mali</option>
                                        <option value="MT" data-kt-select2-country="/assets/media/flags/malta.svg">
                                            Malta</option>
                                        <option value="MH"
                                            data-kt-select2-country="/assets/media/flags/marshall-island.svg">Marshall
                                            Islands</option>
                                        <option value="MQ"
                                            data-kt-select2-country="/assets/media/flags/martinique.svg">Martinique
                                        </option>
                                        <option value="MR"
                                            data-kt-select2-country="/assets/media/flags/mauritania.svg">Mauritania
                                        </option>
                                        <option value="MU"
                                            data-kt-select2-country="/assets/media/flags/mauritius.svg">Mauritius</option>
                                        <option value="MX" data-kt-select2-country="/assets/media/flags/mexico.svg">
                                            Mexico</option>
                                        <option value="FM"
                                            data-kt-select2-country="/assets/media/flags/micronesia.svg">Micronesia,
                                            Federated States of</option>
                                        <option value="MD"
                                            data-kt-select2-country="/assets/media/flags/moldova.svg">Moldova, Republic of
                                        </option>
                                        <option value="MC" data-kt-select2-country="/assets/media/flags/monaco.svg">
                                            Monaco</option>
                                        <option value="MN"
                                            data-kt-select2-country="/assets/media/flags/mongolia.svg">Mongolia</option>
                                        <option value="ME"
                                            data-kt-select2-country="/assets/media/flags/montenegro.svg">Montenegro
                                        </option>
                                        <option value="MS"
                                            data-kt-select2-country="/assets/media/flags/montserrat.svg">Montserrat
                                        </option>
                                        <option value="MA"
                                            data-kt-select2-country="/assets/media/flags/morocco.svg">Morocco</option>
                                        <option value="MZ"
                                            data-kt-select2-country="/assets/media/flags/mozambique.svg">Mozambique
                                        </option>
                                        <option value="MM"
                                            data-kt-select2-country="/assets/media/flags/myanmar.svg">Myanmar</option>
                                        <option value="NA"
                                            data-kt-select2-country="/assets/media/flags/namibia.svg">Namibia</option>
                                        <option value="NR" data-kt-select2-country="/assets/media/flags/nauru.svg">
                                            Nauru</option>
                                        <option value="NP" data-kt-select2-country="/assets/media/flags/nepal.svg">
                                            Nepal</option>
                                        <option value="NL"
                                            data-kt-select2-country="/assets/media/flags/netherlands.svg">Netherlands
                                        </option>
                                        <option value="NZ"
                                            data-kt-select2-country="/assets/media/flags/new-zealand.svg">New Zealand
                                        </option>
                                        <option value="NI"
                                            data-kt-select2-country="/assets/media/flags/nicaragua.svg">Nicaragua</option>
                                        <option value="NE" data-kt-select2-country="/assets/media/flags/niger.svg">
                                            Niger</option>
                                        <option value="NG"
                                            data-kt-select2-country="/assets/media/flags/nigeria.svg">Nigeria</option>
                                        <option value="NU" data-kt-select2-country="/assets/media/flags/niue.svg">
                                            Niue</option>
                                        <option value="NF"
                                            data-kt-select2-country="/assets/media/flags/norfolk-island.svg">Norfolk
                                            Island</option>
                                        <option value="MP"
                                            data-kt-select2-country="/assets/media/flags/northern-mariana-islands.svg">
                                            Northern Mariana Islands</option>
                                        <option value="NO" data-kt-select2-country="/assets/media/flags/norway.svg">
                                            Norway</option>
                                        <option value="OM" data-kt-select2-country="/assets/media/flags/oman.svg">
                                            Oman</option>
                                        <option value="PK"
                                            data-kt-select2-country="/assets/media/flags/pakistan.svg">Pakistan</option>
                                        <option value="PW" data-kt-select2-country="/assets/media/flags/palau.svg">
                                            Palau</option>
                                        <option value="PS"
                                            data-kt-select2-country="/assets/media/flags/palestine.svg">Palestinian
                                            Territory, Occupied</option>
                                        <option value="PA" data-kt-select2-country="/assets/media/flags/panama.svg">
                                            Panama</option>
                                        <option value="PG"
                                            data-kt-select2-country="/assets/media/flags/papua-new-guinea.svg">Papua New
                                            Guinea</option>
                                        <option value="PY"
                                            data-kt-select2-country="/assets/media/flags/paraguay.svg">Paraguay</option>
                                        <option value="PE" data-kt-select2-country="/assets/media/flags/peru.svg">
                                            Peru</option>
                                        <option value="PH"
                                            data-kt-select2-country="/assets/media/flags/philippines.svg">Philippines
                                        </option>
                                        <option value="PL" data-kt-select2-country="/assets/media/flags/poland.svg">
                                            Poland</option>
                                        <option value="PT"
                                            data-kt-select2-country="/assets/media/flags/portugal.svg">Portugal</option>
                                        <option value="PR"
                                            data-kt-select2-country="/assets/media/flags/puerto-rico.svg">Puerto Rico
                                        </option>
                                        <option value="QA" data-kt-select2-country="/assets/media/flags/qatar.svg">
                                            Qatar</option>
                                        <option value="RO"
                                            data-kt-select2-country="/assets/media/flags/romania.svg">Romania</option>
                                        <option value="RU" data-kt-select2-country="/assets/media/flags/russia.svg">
                                            Russian Federation</option>
                                        <option value="RW" data-kt-select2-country="/assets/media/flags/rwanda.svg">
                                            Rwanda</option>
                                        <option value="BL"
                                            data-kt-select2-country="/assets/media/flags/st-barts.svg">Saint Barthélemy
                                        </option>
                                        <option value="KN"
                                            data-kt-select2-country="/assets/media/flags/saint-kitts-and-nevis.svg">Saint
                                            Kitts and Nevis</option>
                                        <option value="LC"
                                            data-kt-select2-country="/assets/media/flags/st-lucia.svg">Saint Lucia
                                        </option>
                                        <option value="MF"
                                            data-kt-select2-country="/assets/media/flags/sint-maarten.svg">Saint Martin
                                            (French part)</option>
                                        <option value="VC"
                                            data-kt-select2-country="/assets/media/flags/st-vincent-and-the-grenadines.svg">
                                            Saint Vincent and the Grenadines</option>
                                        <option value="WS" data-kt-select2-country="/assets/media/flags/samoa.svg">
                                            Samoa</option>
                                        <option value="SM"
                                            data-kt-select2-country="/assets/media/flags/san-marino.svg">San Marino
                                        </option>
                                        <option value="ST"
                                            data-kt-select2-country="/assets/media/flags/sao-tome-and-prince.svg">Sao Tome
                                            and Principe</option>
                                        <option value="SA"
                                            data-kt-select2-country="/assets/media/flags/saudi-arabia.svg">Saudi Arabia
                                        </option>
                                        <option value="SN"
                                            data-kt-select2-country="/assets/media/flags/senegal.svg">Senegal</option>
                                        <option value="RS" data-kt-select2-country="/assets/media/flags/serbia.svg">
                                            Serbia</option>
                                        <option value="SC"
                                            data-kt-select2-country="/assets/media/flags/seychelles.svg">Seychelles
                                        </option>
                                        <option value="SL"
                                            data-kt-select2-country="/assets/media/flags/sierra-leone.svg">Sierra Leone
                                        </option>
                                        <option value="SG"
                                            data-kt-select2-country="/assets/media/flags/singapore.svg">Singapore</option>
                                        <option value="SX"
                                            data-kt-select2-country="/assets/media/flags/sint-maarten.svg">Sint Maarten
                                            (Dutch part)</option>
                                        <option value="SK"
                                            data-kt-select2-country="/assets/media/flags/slovakia.svg">Slovakia</option>
                                        <option value="SI"
                                            data-kt-select2-country="/assets/media/flags/slovenia.svg">Slovenia</option>
                                        <option value="SB"
                                            data-kt-select2-country="/assets/media/flags/solomon-islands.svg">Solomon
                                            Islands</option>
                                        <option value="SO"
                                            data-kt-select2-country="/assets/media/flags/somalia.svg">Somalia</option>
                                        <option value="ZA"
                                            data-kt-select2-country="/assets/media/flags/south-africa.svg">South Africa
                                        </option>
                                        <option value="KR"
                                            data-kt-select2-country="/assets/media/flags/south-korea.svg">South Korea
                                        </option>
                                        <option value="SS"
                                            data-kt-select2-country="/assets/media/flags/south-sudan.svg">South Sudan
                                        </option>
                                        <option value="ES" data-kt-select2-country="/assets/media/flags/spain.svg">
                                            Spain</option>
                                        <option value="LK"
                                            data-kt-select2-country="/assets/media/flags/sri-lanka.svg">Sri Lanka</option>
                                        <option value="SD" data-kt-select2-country="/assets/media/flags/sudan.svg">
                                            Sudan</option>
                                        <option value="SR"
                                            data-kt-select2-country="/assets/media/flags/suriname.svg">Suriname</option>
                                        <option value="SZ"
                                            data-kt-select2-country="/assets/media/flags/swaziland.svg">Swaziland</option>
                                        <option value="SE" data-kt-select2-country="/assets/media/flags/sweden.svg">
                                            Sweden</option>
                                        <option value="CH"
                                            data-kt-select2-country="/assets/media/flags/switzerland.svg">Switzerland
                                        </option>
                                        <option value="SY" data-kt-select2-country="/assets/media/flags/syria.svg">
                                            Syrian Arab Republic</option>
                                        <option value="TW" data-kt-select2-country="/assets/media/flags/taiwan.svg">
                                            Taiwan, Province of China</option>
                                        <option value="TJ"
                                            data-kt-select2-country="/assets/media/flags/tajikistan.svg">Tajikistan
                                        </option>
                                        <option value="TZ"
                                            data-kt-select2-country="/assets/media/flags/tanzania.svg">Tanzania, United
                                            Republic of</option>
                                        <option value="TH"
                                            data-kt-select2-country="/assets/media/flags/thailand.svg">Thailand</option>
                                        <option value="TG" data-kt-select2-country="/assets/media/flags/togo.svg">
                                            Togo</option>
                                        <option value="TK"
                                            data-kt-select2-country="/assets/media/flags/tokelau.svg">Tokelau</option>
                                        <option value="TO" data-kt-select2-country="/assets/media/flags/tonga.svg">
                                            Tonga</option>
                                        <option value="TT"
                                            data-kt-select2-country="/assets/media/flags/trinidad-and-tobago.svg">Trinidad
                                            and Tobago</option>
                                        <option value="TN"
                                            data-kt-select2-country="/assets/media/flags/tunisia.svg">Tunisia</option>
                                        <option value="TR" data-kt-select2-country="/assets/media/flags/turkey.svg">
                                            Turkey</option>
                                        <option value="TM"
                                            data-kt-select2-country="/assets/media/flags/turkmenistan.svg">Turkmenistan
                                        </option>
                                        <option value="TC"
                                            data-kt-select2-country="/assets/media/flags/turks-and-caicos.svg">Turks and
                                            Caicos Islands</option>
                                        <option value="TV" data-kt-select2-country="/assets/media/flags/tuvalu.svg">
                                            Tuvalu</option>
                                        <option value="UG" data-kt-select2-country="/assets/media/flags/uganda.svg">
                                            Uganda</option>
                                        <option value="UA"
                                            data-kt-select2-country="/assets/media/flags/ukraine.svg">Ukraine</option>
                                        <option value="AE"
                                            data-kt-select2-country="/assets/media/flags/united-arab-emirates.svg">United
                                            Arab Emirates</option>
                                        <option value="GB"
                                            data-kt-select2-country="/assets/media/flags/united-kingdom.svg">United
                                            Kingdom</option>
                                        <option value="US"
                                            data-kt-select2-country="/assets/media/flags/united-states.svg">United States
                                        </option>
                                        <option value="UY"
                                            data-kt-select2-country="/assets/media/flags/uruguay.svg">Uruguay</option>
                                        <option value="UZ"
                                            data-kt-select2-country="/assets/media/flags/uzbekistan.svg">Uzbekistan
                                        </option>
                                        <option value="VU"
                                            data-kt-select2-country="/assets/media/flags/vanuatu.svg">Vanuatu</option>
                                        <option value="VE"
                                            data-kt-select2-country="/assets/media/flags/venezuela.svg">Venezuela,
                                            Bolivarian Republic of</option>
                                        <option value="VN"
                                            data-kt-select2-country="/assets/media/flags/vietnam.svg">Vietnam</option>
                                        <option value="VI"
                                            data-kt-select2-country="/assets/media/flags/virgin-islands.svg">Virgin
                                            Islands</option>
                                        <option value="YE" data-kt-select2-country="/assets/media/flags/yemen.svg">
                                            Yemen</option>
                                        <option value="ZM" data-kt-select2-country="/assets/media/flags/zambia.svg">
                                            Zambia</option>
                                        <option value="ZW"
                                            data-kt-select2-country="/assets/media/flags/zimbabwe.svg">Zimbabwe</option>
                                    </select>
                                    <!--end::Select2-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Checkbox-->
                                <div class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="same_as_billing" checked="checked" />
                                    <label class="form-check-label" for="same_as_billing">Shipping address is the same
                                        as billing address</label>
                                </div>
                                <!--end::Checkbox-->
                                <!--begin::Shipping address-->
                                <div class="d-none d-flex flex-column gap-5 gap-md-7"
                                    id="kt_ecommerce_edit_order_shipping_form">
                                    <!--begin::Title-->
                                    <div class="fs-3 fw-bold mb-n2">Shipping Address</div>
                                    <!--end::Title-->
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-column flex-md-row gap-5">
                                        <div class="fv-row flex-row-fluid">
                                            <!--begin::Label-->
                                            <label class="form-label">Address Line 1</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input class="form-control" name="kt_ecommerce_edit_order_address_1"
                                                placeholder="Address Line 1" value="" />
                                            <!--end::Input-->
                                        </div>
                                        <div class="flex-row-fluid">
                                            <!--begin::Label-->
                                            <label class="form-label">Address Line 2</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input class="form-control" name="kt_ecommerce_edit_order_address_2"
                                                placeholder="Address Line 2" />
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-column flex-md-row gap-5">
                                        <div class="flex-row-fluid">
                                            <!--begin::Label-->
                                            <label class="form-label">City</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input class="form-control" name="kt_ecommerce_edit_order_city"
                                                placeholder="" value="" />
                                            <!--end::Input-->
                                        </div>
                                        <div class="fv-row flex-row-fluid">
                                            <!--begin::Label-->
                                            <label class="form-label">Postcode</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input class="form-control" name="kt_ecommerce_edit_order_postcode"
                                                placeholder="" value="" />
                                            <!--end::Input-->
                                        </div>
                                        <div class="fv-row flex-row-fluid">
                                            <!--begin::Label-->
                                            <label class="form-label">State</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input class="form-control" name="kt_ecommerce_edit_order_state"
                                                placeholder="" value="" />
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="form-label">Country</label>
                                        <!--end::Label-->
                                        <!--begin::Select2-->
                                        <select class="form-select" data-placeholder="Select an option"
                                            id="kt_ecommerce_edit_order_shipping_country">
                                            <option></option>
                                            <option value="AF"
                                                data-kt-select2-country="/assets/media/flags/afghanistan.svg">Afghanistan
                                            </option>
                                            <option value="AX"
                                                data-kt-select2-country="/assets/media/flags/aland-islands.svg">Aland
                                                Islands</option>
                                            <option value="AL"
                                                data-kt-select2-country="/assets/media/flags/albania.svg">Albania</option>
                                            <option value="DZ"
                                                data-kt-select2-country="/assets/media/flags/algeria.svg">Algeria</option>
                                            <option value="AS"
                                                data-kt-select2-country="/assets/media/flags/american-samoa.svg">American
                                                Samoa</option>
                                            <option value="AD"
                                                data-kt-select2-country="/assets/media/flags/andorra.svg">Andorra</option>
                                            <option value="AO"
                                                data-kt-select2-country="/assets/media/flags/angola.svg">Angola</option>
                                            <option value="AI"
                                                data-kt-select2-country="/assets/media/flags/anguilla.svg">Anguilla
                                            </option>
                                            <option value="AG"
                                                data-kt-select2-country="/assets/media/flags/antigua-and-barbuda.svg">
                                                Antigua and Barbuda</option>
                                            <option value="AR"
                                                data-kt-select2-country="/assets/media/flags/argentina.svg">Argentina
                                            </option>
                                            <option value="AM"
                                                data-kt-select2-country="/assets/media/flags/armenia.svg">Armenia</option>
                                            <option value="AW"
                                                data-kt-select2-country="/assets/media/flags/aruba.svg">Aruba</option>
                                            <option value="AU"
                                                data-kt-select2-country="/assets/media/flags/australia.svg">Australia
                                            </option>
                                            <option value="AT"
                                                data-kt-select2-country="/assets/media/flags/austria.svg">Austria</option>
                                            <option value="AZ"
                                                data-kt-select2-country="/assets/media/flags/azerbaijan.svg">Azerbaijan
                                            </option>
                                            <option value="BS"
                                                data-kt-select2-country="/assets/media/flags/bahamas.svg">Bahamas</option>
                                            <option value="BH"
                                                data-kt-select2-country="/assets/media/flags/bahrain.svg">Bahrain</option>
                                            <option value="BD"
                                                data-kt-select2-country="/assets/media/flags/bangladesh.svg">Bangladesh
                                            </option>
                                            <option value="BB"
                                                data-kt-select2-country="/assets/media/flags/barbados.svg">Barbados
                                            </option>
                                            <option value="BY"
                                                data-kt-select2-country="/assets/media/flags/belarus.svg">Belarus</option>
                                            <option value="BE"
                                                data-kt-select2-country="/assets/media/flags/belgium.svg">Belgium</option>
                                            <option value="BZ"
                                                data-kt-select2-country="/assets/media/flags/belize.svg">Belize</option>
                                            <option value="BJ"
                                                data-kt-select2-country="/assets/media/flags/benin.svg">Benin</option>
                                            <option value="BM"
                                                data-kt-select2-country="/assets/media/flags/bermuda.svg">Bermuda</option>
                                            <option value="BT"
                                                data-kt-select2-country="/assets/media/flags/bhutan.svg">Bhutan</option>
                                            <option value="BO"
                                                data-kt-select2-country="/assets/media/flags/bolivia.svg">Bolivia,
                                                Plurinational State of</option>
                                            <option value="BQ"
                                                data-kt-select2-country="/assets/media/flags/bonaire.svg">Bonaire, Sint
                                                Eustatius and Saba</option>
                                            <option value="BA"
                                                data-kt-select2-country="/assets/media/flags/bosnia-and-herzegovina.svg">
                                                Bosnia and Herzegovina</option>
                                            <option value="BW"
                                                data-kt-select2-country="/assets/media/flags/botswana.svg">Botswana
                                            </option>
                                            <option value="BR"
                                                data-kt-select2-country="/assets/media/flags/brazil.svg">Brazil</option>
                                            <option value="IO"
                                                data-kt-select2-country="/assets/media/flags/british-indian-ocean-territory.svg">
                                                British Indian Ocean Territory</option>
                                            <option value="BN"
                                                data-kt-select2-country="/assets/media/flags/brunei.svg">Brunei Darussalam
                                            </option>
                                            <option value="BG"
                                                data-kt-select2-country="/assets/media/flags/bulgaria.svg">Bulgaria
                                            </option>
                                            <option value="BF"
                                                data-kt-select2-country="/assets/media/flags/burkina-faso.svg">Burkina
                                                Faso</option>
                                            <option value="BI"
                                                data-kt-select2-country="/assets/media/flags/burundi.svg">Burundi</option>
                                            <option value="KH"
                                                data-kt-select2-country="/assets/media/flags/cambodia.svg">Cambodia
                                            </option>
                                            <option value="CM"
                                                data-kt-select2-country="/assets/media/flags/cameroon.svg">Cameroon
                                            </option>
                                            <option value="CA"
                                                data-kt-select2-country="/assets/media/flags/canada.svg">Canada</option>
                                            <option value="CV"
                                                data-kt-select2-country="/assets/media/flags/cape-verde.svg">Cape Verde
                                            </option>
                                            <option value="KY"
                                                data-kt-select2-country="/assets/media/flags/cayman-islands.svg">Cayman
                                                Islands</option>
                                            <option value="CF"
                                                data-kt-select2-country="/assets/media/flags/central-african-republic.svg">
                                                Central African Republic</option>
                                            <option value="TD"
                                                data-kt-select2-country="/assets/media/flags/chad.svg">Chad</option>
                                            <option value="CL"
                                                data-kt-select2-country="/assets/media/flags/chile.svg">Chile</option>
                                            <option value="CN"
                                                data-kt-select2-country="/assets/media/flags/china.svg">China</option>
                                            <option value="CX"
                                                data-kt-select2-country="/assets/media/flags/christmas-island.svg">
                                                Christmas Island</option>
                                            <option value="CC"
                                                data-kt-select2-country="/assets/media/flags/cocos-island.svg">Cocos
                                                (Keeling) Islands</option>
                                            <option value="CO"
                                                data-kt-select2-country="/assets/media/flags/colombia.svg">Colombia
                                            </option>
                                            <option value="KM"
                                                data-kt-select2-country="/assets/media/flags/comoros.svg">Comoros</option>
                                            <option value="CK"
                                                data-kt-select2-country="/assets/media/flags/cook-islands.svg">Cook
                                                Islands</option>
                                            <option value="CR"
                                                data-kt-select2-country="/assets/media/flags/costa-rica.svg">Costa Rica
                                            </option>
                                            <option value="CI"
                                                data-kt-select2-country="/assets/media/flags/ivory-coast.svg">Côte
                                                d'Ivoire</option>
                                            <option value="HR"
                                                data-kt-select2-country="/assets/media/flags/croatia.svg">Croatia</option>
                                            <option value="CU"
                                                data-kt-select2-country="/assets/media/flags/cuba.svg">Cuba</option>
                                            <option value="CW"
                                                data-kt-select2-country="/assets/media/flags/curacao.svg">Curaçao</option>
                                            <option value="CZ"
                                                data-kt-select2-country="/assets/media/flags/czech-republic.svg">Czech
                                                Republic</option>
                                            <option value="DK"
                                                data-kt-select2-country="/assets/media/flags/denmark.svg">Denmark</option>
                                            <option value="DJ"
                                                data-kt-select2-country="/assets/media/flags/djibouti.svg">Djibouti
                                            </option>
                                            <option value="DM"
                                                data-kt-select2-country="/assets/media/flags/dominica.svg">Dominica
                                            </option>
                                            <option value="DO"
                                                data-kt-select2-country="/assets/media/flags/dominican-republic.svg">
                                                Dominican Republic</option>
                                            <option value="EC"
                                                data-kt-select2-country="/assets/media/flags/ecuador.svg">Ecuador</option>
                                            <option value="EG"
                                                data-kt-select2-country="/assets/media/flags/egypt.svg">Egypt</option>
                                            <option value="SV"
                                                data-kt-select2-country="/assets/media/flags/el-salvador.svg">El Salvador
                                            </option>
                                            <option value="GQ"
                                                data-kt-select2-country="/assets/media/flags/equatorial-guinea.svg">
                                                Equatorial Guinea</option>
                                            <option value="ER"
                                                data-kt-select2-country="/assets/media/flags/eritrea.svg">Eritrea</option>
                                            <option value="EE"
                                                data-kt-select2-country="/assets/media/flags/estonia.svg">Estonia</option>
                                            <option value="ET"
                                                data-kt-select2-country="/assets/media/flags/ethiopia.svg">Ethiopia
                                            </option>
                                            <option value="FK"
                                                data-kt-select2-country="/assets/media/flags/falkland-islands.svg">
                                                Falkland Islands (Malvinas)</option>
                                            <option value="FJ"
                                                data-kt-select2-country="/assets/media/flags/fiji.svg">Fiji</option>
                                            <option value="FI"
                                                data-kt-select2-country="/assets/media/flags/finland.svg">Finland</option>
                                            <option value="FR"
                                                data-kt-select2-country="/assets/media/flags/france.svg">France</option>
                                            <option value="PF"
                                                data-kt-select2-country="/assets/media/flags/french-polynesia.svg">French
                                                Polynesia</option>
                                            <option value="GA"
                                                data-kt-select2-country="/assets/media/flags/gabon.svg">Gabon</option>
                                            <option value="GM"
                                                data-kt-select2-country="/assets/media/flags/gambia.svg">Gambia</option>
                                            <option value="GE"
                                                data-kt-select2-country="/assets/media/flags/georgia.svg">Georgia</option>
                                            <option value="DE"
                                                data-kt-select2-country="/assets/media/flags/germany.svg">Germany</option>
                                            <option value="GH"
                                                data-kt-select2-country="/assets/media/flags/ghana.svg">Ghana</option>
                                            <option value="GI"
                                                data-kt-select2-country="/assets/media/flags/gibraltar.svg">Gibraltar
                                            </option>
                                            <option value="GR"
                                                data-kt-select2-country="/assets/media/flags/greece.svg">Greece</option>
                                            <option value="GL"
                                                data-kt-select2-country="/assets/media/flags/greenland.svg">Greenland
                                            </option>
                                            <option value="GD"
                                                data-kt-select2-country="/assets/media/flags/grenada.svg">Grenada</option>
                                            <option value="GU"
                                                data-kt-select2-country="/assets/media/flags/guam.svg">Guam</option>
                                            <option value="GT"
                                                data-kt-select2-country="/assets/media/flags/guatemala.svg">Guatemala
                                            </option>
                                            <option value="GG"
                                                data-kt-select2-country="/assets/media/flags/guernsey.svg">Guernsey
                                            </option>
                                            <option value="GN"
                                                data-kt-select2-country="/assets/media/flags/guinea.svg">Guinea</option>
                                            <option value="GW"
                                                data-kt-select2-country="/assets/media/flags/guinea-bissau.svg">
                                                Guinea-Bissau</option>
                                            <option value="HT"
                                                data-kt-select2-country="/assets/media/flags/haiti.svg">Haiti</option>
                                            <option value="VA"
                                                data-kt-select2-country="/assets/media/flags/vatican-city.svg">Holy See
                                                (Vatican City State)</option>
                                            <option value="HN"
                                                data-kt-select2-country="/assets/media/flags/honduras.svg">Honduras
                                            </option>
                                            <option value="HK"
                                                data-kt-select2-country="/assets/media/flags/hong-kong.svg">Hong Kong
                                            </option>
                                            <option value="HU"
                                                data-kt-select2-country="/assets/media/flags/hungary.svg">Hungary</option>
                                            <option value="IS"
                                                data-kt-select2-country="/assets/media/flags/iceland.svg">Iceland</option>
                                            <option value="IN"
                                                data-kt-select2-country="/assets/media/flags/india.svg">India</option>
                                            <option value="ID"
                                                data-kt-select2-country="/assets/media/flags/indonesia.svg">Indonesia
                                            </option>
                                            <option value="IR"
                                                data-kt-select2-country="/assets/media/flags/iran.svg">Iran, Islamic
                                                Republic of</option>
                                            <option value="IQ"
                                                data-kt-select2-country="/assets/media/flags/iraq.svg">Iraq</option>
                                            <option value="IE"
                                                data-kt-select2-country="/assets/media/flags/ireland.svg">Ireland</option>
                                            <option value="IM"
                                                data-kt-select2-country="/assets/media/flags/isle-of-man.svg">Isle of Man
                                            </option>
                                            <option value="IL"
                                                data-kt-select2-country="/assets/media/flags/israel.svg">Israel</option>
                                            <option value="IT"
                                                data-kt-select2-country="/assets/media/flags/italy.svg">Italy</option>
                                            <option value="JM"
                                                data-kt-select2-country="/assets/media/flags/jamaica.svg">Jamaica</option>
                                            <option value="JP"
                                                data-kt-select2-country="/assets/media/flags/japan.svg">Japan</option>
                                            <option value="JE"
                                                data-kt-select2-country="/assets/media/flags/jersey.svg">Jersey</option>
                                            <option value="JO"
                                                data-kt-select2-country="/assets/media/flags/jordan.svg">Jordan</option>
                                            <option value="KZ"
                                                data-kt-select2-country="/assets/media/flags/kazakhstan.svg">Kazakhstan
                                            </option>
                                            <option value="KE"
                                                data-kt-select2-country="/assets/media/flags/kenya.svg">Kenya</option>
                                            <option value="KI"
                                                data-kt-select2-country="/assets/media/flags/kiribati.svg">Kiribati
                                            </option>
                                            <option value="KP"
                                                data-kt-select2-country="/assets/media/flags/north-korea.svg">Korea,
                                                Democratic People's Republic of</option>
                                            <option value="KW"
                                                data-kt-select2-country="/assets/media/flags/kuwait.svg">Kuwait</option>
                                            <option value="KG"
                                                data-kt-select2-country="/assets/media/flags/kyrgyzstan.svg">Kyrgyzstan
                                            </option>
                                            <option value="LA"
                                                data-kt-select2-country="/assets/media/flags/laos.svg">Lao People's
                                                Democratic Republic</option>
                                            <option value="LV"
                                                data-kt-select2-country="/assets/media/flags/latvia.svg">Latvia</option>
                                            <option value="LB"
                                                data-kt-select2-country="/assets/media/flags/lebanon.svg">Lebanon</option>
                                            <option value="LS"
                                                data-kt-select2-country="/assets/media/flags/lesotho.svg">Lesotho</option>
                                            <option value="LR"
                                                data-kt-select2-country="/assets/media/flags/liberia.svg">Liberia</option>
                                            <option value="LY"
                                                data-kt-select2-country="/assets/media/flags/libya.svg">Libya</option>
                                            <option value="LI"
                                                data-kt-select2-country="/assets/media/flags/liechtenstein.svg">
                                                Liechtenstein</option>
                                            <option value="LT"
                                                data-kt-select2-country="/assets/media/flags/lithuania.svg">Lithuania
                                            </option>
                                            <option value="LU"
                                                data-kt-select2-country="/assets/media/flags/luxembourg.svg">Luxembourg
                                            </option>
                                            <option value="MO"
                                                data-kt-select2-country="/assets/media/flags/macao.svg">Macao</option>
                                            <option value="MG"
                                                data-kt-select2-country="/assets/media/flags/madagascar.svg">Madagascar
                                            </option>
                                            <option value="MW"
                                                data-kt-select2-country="/assets/media/flags/malawi.svg">Malawi</option>
                                            <option value="MY"
                                                data-kt-select2-country="/assets/media/flags/malaysia.svg">Malaysia
                                            </option>
                                            <option value="MV"
                                                data-kt-select2-country="/assets/media/flags/maldives.svg">Maldives
                                            </option>
                                            <option value="ML"
                                                data-kt-select2-country="/assets/media/flags/mali.svg">Mali</option>
                                            <option value="MT"
                                                data-kt-select2-country="/assets/media/flags/malta.svg">Malta</option>
                                            <option value="MH"
                                                data-kt-select2-country="/assets/media/flags/marshall-island.svg">Marshall
                                                Islands</option>
                                            <option value="MQ"
                                                data-kt-select2-country="/assets/media/flags/martinique.svg">Martinique
                                            </option>
                                            <option value="MR"
                                                data-kt-select2-country="/assets/media/flags/mauritania.svg">Mauritania
                                            </option>
                                            <option value="MU"
                                                data-kt-select2-country="/assets/media/flags/mauritius.svg">Mauritius
                                            </option>
                                            <option value="MX"
                                                data-kt-select2-country="/assets/media/flags/mexico.svg">Mexico</option>
                                            <option value="FM"
                                                data-kt-select2-country="/assets/media/flags/micronesia.svg">Micronesia,
                                                Federated States of</option>
                                            <option value="MD"
                                                data-kt-select2-country="/assets/media/flags/moldova.svg">Moldova,
                                                Republic of</option>
                                            <option value="MC"
                                                data-kt-select2-country="/assets/media/flags/monaco.svg">Monaco</option>
                                            <option value="MN"
                                                data-kt-select2-country="/assets/media/flags/mongolia.svg">Mongolia
                                            </option>
                                            <option value="ME"
                                                data-kt-select2-country="/assets/media/flags/montenegro.svg">Montenegro
                                            </option>
                                            <option value="MS"
                                                data-kt-select2-country="/assets/media/flags/montserrat.svg">Montserrat
                                            </option>
                                            <option value="MA"
                                                data-kt-select2-country="/assets/media/flags/morocco.svg">Morocco</option>
                                            <option value="MZ"
                                                data-kt-select2-country="/assets/media/flags/mozambique.svg">Mozambique
                                            </option>
                                            <option value="MM"
                                                data-kt-select2-country="/assets/media/flags/myanmar.svg">Myanmar</option>
                                            <option value="NA"
                                                data-kt-select2-country="/assets/media/flags/namibia.svg">Namibia</option>
                                            <option value="NR"
                                                data-kt-select2-country="/assets/media/flags/nauru.svg">Nauru</option>
                                            <option value="NP"
                                                data-kt-select2-country="/assets/media/flags/nepal.svg">Nepal</option>
                                            <option value="NL"
                                                data-kt-select2-country="/assets/media/flags/netherlands.svg">Netherlands
                                            </option>
                                            <option value="NZ"
                                                data-kt-select2-country="/assets/media/flags/new-zealand.svg">New Zealand
                                            </option>
                                            <option value="NI"
                                                data-kt-select2-country="/assets/media/flags/nicaragua.svg">Nicaragua
                                            </option>
                                            <option value="NE"
                                                data-kt-select2-country="/assets/media/flags/niger.svg">Niger</option>
                                            <option value="NG"
                                                data-kt-select2-country="/assets/media/flags/nigeria.svg">Nigeria</option>
                                            <option value="NU"
                                                data-kt-select2-country="/assets/media/flags/niue.svg">Niue</option>
                                            <option value="NF"
                                                data-kt-select2-country="/assets/media/flags/norfolk-island.svg">Norfolk
                                                Island</option>
                                            <option value="MP"
                                                data-kt-select2-country="/assets/media/flags/northern-mariana-islands.svg">
                                                Northern Mariana Islands</option>
                                            <option value="NO"
                                                data-kt-select2-country="/assets/media/flags/norway.svg">Norway</option>
                                            <option value="OM"
                                                data-kt-select2-country="/assets/media/flags/oman.svg">Oman</option>
                                            <option value="PK"
                                                data-kt-select2-country="/assets/media/flags/pakistan.svg">Pakistan
                                            </option>
                                            <option value="PW"
                                                data-kt-select2-country="/assets/media/flags/palau.svg">Palau</option>
                                            <option value="PS"
                                                data-kt-select2-country="/assets/media/flags/palestine.svg">Palestinian
                                                Territory, Occupied</option>
                                            <option value="PA"
                                                data-kt-select2-country="/assets/media/flags/panama.svg">Panama</option>
                                            <option value="PG"
                                                data-kt-select2-country="/assets/media/flags/papua-new-guinea.svg">Papua
                                                New Guinea</option>
                                            <option value="PY"
                                                data-kt-select2-country="/assets/media/flags/paraguay.svg">Paraguay
                                            </option>
                                            <option value="PE"
                                                data-kt-select2-country="/assets/media/flags/peru.svg">Peru</option>
                                            <option value="PH"
                                                data-kt-select2-country="/assets/media/flags/philippines.svg">Philippines
                                            </option>
                                            <option value="PL"
                                                data-kt-select2-country="/assets/media/flags/poland.svg">Poland</option>
                                            <option value="PT"
                                                data-kt-select2-country="/assets/media/flags/portugal.svg">Portugal
                                            </option>
                                            <option value="PR"
                                                data-kt-select2-country="/assets/media/flags/puerto-rico.svg">Puerto Rico
                                            </option>
                                            <option value="QA"
                                                data-kt-select2-country="/assets/media/flags/qatar.svg">Qatar</option>
                                            <option value="RO"
                                                data-kt-select2-country="/assets/media/flags/romania.svg">Romania</option>
                                            <option value="RU"
                                                data-kt-select2-country="/assets/media/flags/russia.svg">Russian
                                                Federation</option>
                                            <option value="RW"
                                                data-kt-select2-country="/assets/media/flags/rwanda.svg">Rwanda</option>
                                            <option value="BL"
                                                data-kt-select2-country="/assets/media/flags/st-barts.svg">Saint
                                                Barthélemy</option>
                                            <option value="KN"
                                                data-kt-select2-country="/assets/media/flags/saint-kitts-and-nevis.svg">
                                                Saint Kitts and Nevis</option>
                                            <option value="LC"
                                                data-kt-select2-country="/assets/media/flags/st-lucia.svg">Saint Lucia
                                            </option>
                                            <option value="MF"
                                                data-kt-select2-country="/assets/media/flags/sint-maarten.svg">Saint
                                                Martin (French part)</option>
                                            <option value="VC"
                                                data-kt-select2-country="/assets/media/flags/st-vincent-and-the-grenadines.svg">
                                                Saint Vincent and the Grenadines</option>
                                            <option value="WS"
                                                data-kt-select2-country="/assets/media/flags/samoa.svg">Samoa</option>
                                            <option value="SM"
                                                data-kt-select2-country="/assets/media/flags/san-marino.svg">San Marino
                                            </option>
                                            <option value="ST"
                                                data-kt-select2-country="/assets/media/flags/sao-tome-and-prince.svg">Sao
                                                Tome and Principe</option>
                                            <option value="SA"
                                                data-kt-select2-country="/assets/media/flags/saudi-arabia.svg">Saudi
                                                Arabia</option>
                                            <option value="SN"
                                                data-kt-select2-country="/assets/media/flags/senegal.svg">Senegal</option>
                                            <option value="RS"
                                                data-kt-select2-country="/assets/media/flags/serbia.svg">Serbia</option>
                                            <option value="SC"
                                                data-kt-select2-country="/assets/media/flags/seychelles.svg">Seychelles
                                            </option>
                                            <option value="SL"
                                                data-kt-select2-country="/assets/media/flags/sierra-leone.svg">Sierra
                                                Leone</option>
                                            <option value="SG"
                                                data-kt-select2-country="/assets/media/flags/singapore.svg">Singapore
                                            </option>
                                            <option value="SX"
                                                data-kt-select2-country="/assets/media/flags/sint-maarten.svg">Sint
                                                Maarten (Dutch part)</option>
                                            <option value="SK"
                                                data-kt-select2-country="/assets/media/flags/slovakia.svg">Slovakia
                                            </option>
                                            <option value="SI"
                                                data-kt-select2-country="/assets/media/flags/slovenia.svg">Slovenia
                                            </option>
                                            <option value="SB"
                                                data-kt-select2-country="/assets/media/flags/solomon-islands.svg">Solomon
                                                Islands</option>
                                            <option value="SO"
                                                data-kt-select2-country="/assets/media/flags/somalia.svg">Somalia</option>
                                            <option value="ZA"
                                                data-kt-select2-country="/assets/media/flags/south-africa.svg">South
                                                Africa</option>
                                            <option value="KR"
                                                data-kt-select2-country="/assets/media/flags/south-korea.svg">South Korea
                                            </option>
                                            <option value="SS"
                                                data-kt-select2-country="/assets/media/flags/south-sudan.svg">South Sudan
                                            </option>
                                            <option value="ES"
                                                data-kt-select2-country="/assets/media/flags/spain.svg">Spain</option>
                                            <option value="LK"
                                                data-kt-select2-country="/assets/media/flags/sri-lanka.svg">Sri Lanka
                                            </option>
                                            <option value="SD"
                                                data-kt-select2-country="/assets/media/flags/sudan.svg">Sudan</option>
                                            <option value="SR"
                                                data-kt-select2-country="/assets/media/flags/suriname.svg">Suriname
                                            </option>
                                            <option value="SZ"
                                                data-kt-select2-country="/assets/media/flags/swaziland.svg">Swaziland
                                            </option>
                                            <option value="SE"
                                                data-kt-select2-country="/assets/media/flags/sweden.svg">Sweden</option>
                                            <option value="CH"
                                                data-kt-select2-country="/assets/media/flags/switzerland.svg">Switzerland
                                            </option>
                                            <option value="SY"
                                                data-kt-select2-country="/assets/media/flags/syria.svg">Syrian Arab
                                                Republic</option>
                                            <option value="TW"
                                                data-kt-select2-country="/assets/media/flags/taiwan.svg">Taiwan, Province
                                                of China</option>
                                            <option value="TJ"
                                                data-kt-select2-country="/assets/media/flags/tajikistan.svg">Tajikistan
                                            </option>
                                            <option value="TZ"
                                                data-kt-select2-country="/assets/media/flags/tanzania.svg">Tanzania,
                                                United Republic of</option>
                                            <option value="TH"
                                                data-kt-select2-country="/assets/media/flags/thailand.svg">Thailand
                                            </option>
                                            <option value="TG"
                                                data-kt-select2-country="/assets/media/flags/togo.svg">Togo</option>
                                            <option value="TK"
                                                data-kt-select2-country="/assets/media/flags/tokelau.svg">Tokelau</option>
                                            <option value="TO"
                                                data-kt-select2-country="/assets/media/flags/tonga.svg">Tonga</option>
                                            <option value="TT"
                                                data-kt-select2-country="/assets/media/flags/trinidad-and-tobago.svg">
                                                Trinidad and Tobago</option>
                                            <option value="TN"
                                                data-kt-select2-country="/assets/media/flags/tunisia.svg">Tunisia</option>
                                            <option value="TR"
                                                data-kt-select2-country="/assets/media/flags/turkey.svg">Turkey</option>
                                            <option value="TM"
                                                data-kt-select2-country="/assets/media/flags/turkmenistan.svg">
                                                Turkmenistan</option>
                                            <option value="TC"
                                                data-kt-select2-country="/assets/media/flags/turks-and-caicos.svg">Turks
                                                and Caicos Islands</option>
                                            <option value="TV"
                                                data-kt-select2-country="/assets/media/flags/tuvalu.svg">Tuvalu</option>
                                            <option value="UG"
                                                data-kt-select2-country="/assets/media/flags/uganda.svg">Uganda</option>
                                            <option value="UA"
                                                data-kt-select2-country="/assets/media/flags/ukraine.svg">Ukraine</option>
                                            <option value="AE"
                                                data-kt-select2-country="/assets/media/flags/united-arab-emirates.svg">
                                                United Arab Emirates</option>
                                            <option value="GB"
                                                data-kt-select2-country="/assets/media/flags/united-kingdom.svg">United
                                                Kingdom</option>
                                            <option value="US"
                                                data-kt-select2-country="/assets/media/flags/united-states.svg">United
                                                States</option>
                                            <option value="UY"
                                                data-kt-select2-country="/assets/media/flags/uruguay.svg">Uruguay</option>
                                            <option value="UZ"
                                                data-kt-select2-country="/assets/media/flags/uzbekistan.svg">Uzbekistan
                                            </option>
                                            <option value="VU"
                                                data-kt-select2-country="/assets/media/flags/vanuatu.svg">Vanuatu</option>
                                            <option value="VE"
                                                data-kt-select2-country="/assets/media/flags/venezuela.svg">Venezuela,
                                                Bolivarian Republic of</option>
                                            <option value="VN"
                                                data-kt-select2-country="/assets/media/flags/vietnam.svg">Vietnam</option>
                                            <option value="VI"
                                                data-kt-select2-country="/assets/media/flags/virgin-islands.svg">Virgin
                                                Islands</option>
                                            <option value="YE"
                                                data-kt-select2-country="/assets/media/flags/yemen.svg">Yemen</option>
                                            <option value="ZM"
                                                data-kt-select2-country="/assets/media/flags/zambia.svg">Zambia</option>
                                            <option value="ZW"
                                                data-kt-select2-country="/assets/media/flags/zimbabwe.svg">Zimbabwe
                                            </option>
                                        </select>
                                        <!--end::Select2-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Shipping address-->
                            </div>
                            <!--end::Billing address-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Order details-->
                    <div class="d-flex justify-content-end">
                        <!--begin::Button-->
                        <a href="{{ route('metronic.apps.ecommerce.catalog.products') }}"
                            id="kt_ecommerce_edit_order_cancel" class="btn btn-light me-5">Cancel</a>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" id="kt_ecommerce_edit_order_submit" class="btn btn-primary">
                            <span class="indicator-label">Save Changes</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <!--end::Button-->
                    </div>
                </div>
                <!--end::Main column-->
            </form>
            <!--end::Form-->
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
    <script src="assets/plugins/custom/formrepeater/formrepeater.bundle.js"></script>
    <script src="assets/js/custom/apps/ecommerce/sales/save-order.js"></script>
    <script src="assets/js/widgets.bundle.js"></script>
    <script src="assets/js/custom/widgets.js"></script>
    <script src="assets/js/custom/apps/chat/chat.js"></script>
    <script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="assets/js/custom/utilities/modals/create-app.js"></script>
@endsection
