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
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Create
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
                    <li class="breadcrumb-item text-muted">Invoice Manager</li>
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
                        id="kt_menu_69981c1d536d6">
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
                                        data-dropdown-parent="#kt_menu_69981c1d536d6" data-allow-clear="true">
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
                    <div class="flex-lg-row-fluid mb-10 mb-lg-0 me-lg-7 me-xl-10">
                        <!--begin::Card-->
                        <div class="card">
                            <!--begin::Card body-->
                            <div class="card-body p-12">
                                <!--begin::Form-->
                                <form action="" id="kt_invoice_form">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column align-items-start flex-xxl-row">
                                        <!--begin::Input group-->
                                        <div class="d-flex align-items-center flex-equal fw-row me-4 order-2"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover" title="Specify invoice date">
                                            <!--begin::Date-->
                                            <div class="fs-6 fw-bold text-gray-700 text-nowrap">Date:</div>
                                            <!--end::Date-->
                                            <!--begin::Input-->
                                            <div class="position-relative d-flex align-items-center w-150px">
                                                <!--begin::Datepicker-->
                                                <input class="form-control form-control-transparent fw-bold pe-5"
                                                    placeholder="Select date" name="invoice_date" />
                                                <!--end::Datepicker-->
                                                <!--begin::Icon-->
                                                <i class="ki-duotone ki-down fs-4 position-absolute ms-4 end-0"></i>
                                                <!--end::Icon-->
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-center flex-equal fw-row text-nowrap order-1 order-xxl-2 me-4"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover" title="Enter invoice number">
                                            <span class="fs-2x fw-bold text-gray-800">Invoice #</span>
                                            <input type="text"
                                                class="form-control form-control-flush fw-bold text-muted fs-3 w-125px"
                                                value="2021001" placehoder="..." />
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="d-flex align-items-center justify-content-end flex-equal order-3 fw-row"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover"
                                            title="Specify invoice due date">
                                            <!--begin::Date-->
                                            <div class="fs-6 fw-bold text-gray-700 text-nowrap">Due Date:</div>
                                            <!--end::Date-->
                                            <!--begin::Input-->
                                            <div class="position-relative d-flex align-items-center w-150px">
                                                <!--begin::Datepicker-->
                                                <input class="form-control form-control-transparent fw-bold pe-5"
                                                    placeholder="Select date" name="invoice_due_date" />
                                                <!--end::Datepicker-->
                                                <!--begin::Icon-->
                                                <i class="ki-duotone ki-down fs-4 position-absolute end-0 ms-4"></i>
                                                <!--end::Icon-->
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Top-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-10"></div>
                                    <!--end::Separator-->
                                    <!--begin::Wrapper-->
                                    <div class="mb-0">
                                        <!--begin::Row-->
                                        <div class="row gx-10 mb-5">
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <label class="form-label fs-6 fw-bold text-gray-700 mb-3">Bill From</label>
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <input type="text" class="form-control form-control-solid"
                                                        placeholder="Name" />
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <input type="text" class="form-control form-control-solid"
                                                        placeholder="Email" />
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <textarea name="notes" class="form-control form-control-solid" rows="3"
                                                        placeholder="Who is this invoice from?"></textarea>
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <label class="form-label fs-6 fw-bold text-gray-700 mb-3">Bill To</label>
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <input type="text" class="form-control form-control-solid"
                                                        placeholder="Name" />
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <input type="text" class="form-control form-control-solid"
                                                        placeholder="Email" />
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <textarea name="notes" class="form-control form-control-solid" rows="3"
                                                        placeholder="What is this invoice for?"></textarea>
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Table wrapper-->
                                        <div class="table-responsive mb-10">
                                            <!--begin::Table-->
                                            <table class="table g-5 gs-0 mb-0 fw-bold text-gray-700"
                                                data-kt-element="items">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr class="border-bottom fs-7 fw-bold text-gray-700 text-uppercase">
                                                        <th class="min-w-300px w-475px">Item</th>
                                                        <th class="min-w-100px w-100px">QTY</th>
                                                        <th class="min-w-150px w-150px">Price</th>
                                                        <th class="min-w-100px w-150px text-end">Total</th>
                                                        <th class="min-w-75px w-75px text-end">Action</th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody>
                                                    <tr class="border-bottom border-bottom-dashed" data-kt-element="item">
                                                        <td class="pe-7">
                                                            <input type="text"
                                                                class="form-control form-control-solid mb-2"
                                                                name="name[]" placeholder="Item name" />
                                                            <input type="text" class="form-control form-control-solid"
                                                                name="description[]" placeholder="Description" />
                                                        </td>
                                                        <td class="ps-0">
                                                            <input class="form-control form-control-solid" type="number"
                                                                min="1" name="quantity[]" placeholder="1"
                                                                value="1" data-kt-element="quantity" />
                                                        </td>
                                                        <td>
                                                            <input type="text"
                                                                class="form-control form-control-solid text-end"
                                                                name="price[]" placeholder="0.00" value="0.00"
                                                                data-kt-element="price" />
                                                        </td>
                                                        <td class="pt-8 text-end text-nowrap">$
                                                            <span data-kt-element="total">0.00</span>
                                                        </td>
                                                        <td class="pt-5 text-end">
                                                            <button type="button"
                                                                class="btn btn-sm btn-icon btn-active-color-primary"
                                                                data-kt-element="remove-item">
                                                                <i class="ki-duotone ki-trash fs-3">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                    <span class="path5"></span>
                                                                </i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <!--end::Table body-->
                                                <!--begin::Table foot-->
                                                <tfoot>
                                                    <tr
                                                        class="border-top border-top-dashed align-top fs-6 fw-bold text-gray-700">
                                                        <th class="text-primary">
                                                            <button class="btn btn-link py-1"
                                                                data-kt-element="add-item">Add item</button>
                                                        </th>
                                                        <th colspan="2"
                                                            class="border-bottom border-bottom-dashed ps-0">
                                                            <div class="d-flex flex-column align-items-start">
                                                                <div class="fs-5">Subtotal</div>
                                                                <button class="btn btn-link py-1" data-bs-toggle="tooltip"
                                                                    data-bs-trigger="hover" title="Coming soon">Add
                                                                    tax</button>
                                                                <button class="btn btn-link py-1" data-bs-toggle="tooltip"
                                                                    data-bs-trigger="hover" title="Coming soon">Add
                                                                    discount</button>
                                                            </div>
                                                        </th>
                                                        <th colspan="2"
                                                            class="border-bottom border-bottom-dashed text-end">$
                                                            <span data-kt-element="sub-total">0.00</span>
                                                        </th>
                                                    </tr>
                                                    <tr class="align-top fw-bold text-gray-700">
                                                        <th></th>
                                                        <th colspan="2" class="fs-4 ps-0">Total</th>
                                                        <th colspan="2" class="text-end fs-4 text-nowrap">$
                                                            <span data-kt-element="grand-total">0.00</span>
                                                        </th>
                                                    </tr>
                                                </tfoot>
                                                <!--end::Table foot-->
                                            </table>
                                        </div>
                                        <!--end::Table-->
                                        <!--begin::Item template-->
                                        <table class="table d-none" data-kt-element="item-template">
                                            <tr class="border-bottom border-bottom-dashed" data-kt-element="item">
                                                <td class="pe-7">
                                                    <input type="text" class="form-control form-control-solid mb-2"
                                                        name="name[]" placeholder="Item name" />
                                                    <input type="text" class="form-control form-control-solid"
                                                        name="description[]" placeholder="Description" />
                                                </td>
                                                <td class="ps-0">
                                                    <input class="form-control form-control-solid" type="number"
                                                        min="1" name="quantity[]" placeholder="1"
                                                        data-kt-element="quantity" />
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control form-control-solid text-end"
                                                        name="price[]" placeholder="0.00" data-kt-element="price" />
                                                </td>
                                                <td class="pt-8 text-end">$
                                                    <span data-kt-element="total">0.00</span>
                                                </td>
                                                <td class="pt-5 text-end">
                                                    <button type="button"
                                                        class="btn btn-sm btn-icon btn-active-color-primary"
                                                        data-kt-element="remove-item">
                                                        <i class="ki-duotone ki-trash fs-3">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                            <span class="path4"></span>
                                                            <span class="path5"></span>
                                                        </i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </table>
                                        <table class="table d-none" data-kt-element="empty-template">
                                            <tr data-kt-element="empty">
                                                <th colspan="5" class="text-muted text-center py-10">No items</th>
                                            </tr>
                                        </table>
                                        <!--end::Item template-->
                                        <!--begin::Notes-->
                                        <div class="mb-0">
                                            <label class="form-label fs-6 fw-bold text-gray-700">Notes</label>
                                            <textarea name="notes" class="form-control form-control-solid" rows="3"
                                                placeholder="Thanks for your business"></textarea>
                                        </div>
                                        <!--end::Notes-->
                                    </div>
                                    <!--end::Wrapper-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Content-->
                    <!--begin::Sidebar-->
                    <div class="flex-lg-auto min-w-lg-300px">
                        <!--begin::Card-->
                        <div class="card" data-kt-sticky="true" data-kt-sticky-name="invoice"
                            data-kt-sticky-offset="{default: false, lg: '200px'}"
                            data-kt-sticky-width="{lg: '250px', lg: '300px'}" data-kt-sticky-left="auto"
                            data-kt-sticky-top="150px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
                            <!--begin::Card body-->
                            <div class="card-body p-10">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold fs-6 text-gray-700">Currency</label>
                                    <!--end::Label-->
                                    <!--begin::Select-->
                                    <select name="currnecy" aria-label="Select a Timezone" data-control="select2"
                                        data-placeholder="Select currency" class="form-select form-select-solid">
                                        <option value=""></option>
                                        <option data-kt-flag="flags/united-states.svg" value="USD">
                                            <b>USD</b>&nbsp;-&nbsp;USA dollar
                                        </option>
                                        <option data-kt-flag="flags/united-kingdom.svg" value="GBP">
                                            <b>GBP</b>&nbsp;-&nbsp;British pound
                                        </option>
                                        <option data-kt-flag="flags/australia.svg" value="AUD">
                                            <b>AUD</b>&nbsp;-&nbsp;Australian dollar
                                        </option>
                                        <option data-kt-flag="flags/japan.svg" value="JPY">
                                            <b>JPY</b>&nbsp;-&nbsp;Japanese yen
                                        </option>
                                        <option data-kt-flag="flags/sweden.svg" value="SEK">
                                            <b>SEK</b>&nbsp;-&nbsp;Swedish krona
                                        </option>
                                        <option data-kt-flag="flags/canada.svg" value="CAD">
                                            <b>CAD</b>&nbsp;-&nbsp;Canadian dollar
                                        </option>
                                        <option data-kt-flag="flags/switzerland.svg" value="CHF">
                                            <b>CHF</b>&nbsp;-&nbsp;Swiss franc
                                        </option>
                                    </select>
                                    <!--end::Select-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed mb-8"></div>
                                <!--end::Separator-->
                                <!--begin::Input group-->
                                <div class="mb-8">
                                    <!--begin::Option-->
                                    <label
                                        class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack mb-5">
                                        <span class="form-check-label ms-0 fw-bold fs-6 text-gray-700">Payment
                                            method</span>
                                        <input class="form-check-input" type="checkbox" checked="checked"
                                            value="" />
                                    </label>
                                    <!--end::Option-->
                                    <!--begin::Option-->
                                    <label
                                        class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack mb-5">
                                        <span class="form-check-label ms-0 fw-bold fs-6 text-gray-700">Late fees</span>
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </label>
                                    <!--end::Option-->
                                    <!--begin::Option-->
                                    <label
                                        class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                        <span class="form-check-label ms-0 fw-bold fs-6 text-gray-700">Notes</span>
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </label>
                                    <!--end::Option-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed mb-8"></div>
                                <!--end::Separator-->
                                <!--begin::Actions-->
                                <div class="mb-0">
                                    <!--begin::Row-->
                                    <div class="row mb-5">
                                        <!--begin::Col-->
                                        <div class="col">
                                            <a href="#"
                                                class="btn btn-light btn-active-light-primary w-100">Preview</a>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col">
                                            <a href="#"
                                                class="btn btn-light btn-active-light-primary w-100">Download</a>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                    <button type="submit" href="#" class="btn btn-primary w-100"
                                        id="kt_invoice_submit_button">
                                        <i class="ki-duotone ki-triangle fs-3">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>Send Invoice</button>
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
        <script src="assets/js/custom/apps/invoices/create.js"></script>
        <script src="assets/js/widgets.bundle.js"></script>
        <script src="assets/js/custom/widgets.js"></script>
        <script src="assets/js/custom/apps/chat/chat.js"></script>
        <script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
        <script src="assets/js/custom/utilities/modals/create-app.js"></script>
            @endsection
