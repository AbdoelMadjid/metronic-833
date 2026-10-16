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
                    Contact</h1>
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
                    <li class="breadcrumb-item text-muted">Contacts</li>
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
                        id="kt_menu_69981c3c35a5d">
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
                                        data-dropdown-parent="#kt_menu_69981c3c35a5d" data-allow-clear="true">
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
            <!--begin::Contacts App- View Contact-->
            <div class="row g-7">
                <!--begin::Contact groups-->
                <div class="col-lg-6 col-xl-3">
                    <!--begin::Contact group wrapper-->
                    <div class="card card-flush">
                        <!--begin::Card header-->
                        <div class="card-header pt-7" id="kt_chat_contacts_header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>Groups</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-5">
                            <!--begin::Contact groups-->
                            <div class="d-flex flex-column gap-5">
                                <!--begin::Contact group-->
                                <div class="d-flex flex-stack">
                                    <a href="{{ route('metronic.apps.contacts.getting_started') }}"
                                        class="fs-6 fw-bold text-gray-800 text-hover-primary text-active-primary active">All
                                        Contacts</a>
                                    <div class="badge badge-light-primary">9</div>
                                </div>
                                <!--begin::Contact group-->
                                <!--begin::Contact group-->
                                <div class="d-flex flex-stack">
                                    <a href="{{ route('metronic.apps.contacts.getting_started') }}"
                                        class="fs-6 fw-bold text-gray-800 text-hover-primary">Subscribed</a>
                                    <div class="badge badge-light-primary">3</div>
                                </div>
                                <!--begin::Contact group-->
                                <!--begin::Contact group-->
                                <div class="d-flex flex-stack">
                                    <a href="{{ route('metronic.apps.contacts.getting_started') }}"
                                        class="fs-6 fw-bold text-gray-800 text-hover-primary">Tier 1 Member</a>
                                    <div class="badge badge-light-primary">1</div>
                                </div>
                                <!--begin::Contact group-->
                                <!--begin::Contact group-->
                                <div class="d-flex flex-stack">
                                    <a href="{{ route('metronic.apps.contacts.getting_started') }}"
                                        class="fs-6 fw-bold text-gray-800 text-hover-primary">Pending Approval</a>
                                    <div class="badge badge-light-primary">3</div>
                                </div>
                                <!--begin::Contact group-->
                                <!--begin::Contact group-->
                                <div class="d-flex flex-stack">
                                    <a href="{{ route('metronic.apps.contacts.getting_started') }}"
                                        class="fs-6 fw-bold text-danger text-hover-primary">Blocked</a>
                                    <div class="badge badge-light-danger">2</div>
                                </div>
                                <!--begin::Contact group-->
                            </div>
                            <!--end::Contact groups-->
                            <!--begin::Separator-->
                            <div class="separator my-7"></div>
                            <!--begin::Separator-->
                            <!--begin::Add contact group-->
                            <label class="fs-6 fw-semibold form-label">Add new group</label>
                            <div class="input-group">
                                <input type="text" class="form-control form-control-solid" placeholder="Group name" />
                                <button type="button" class="btn btn-icon btn-light">
                                    <i class="ki-duotone ki-plus-square fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </button>
                            </div>
                            <!--end::Add contact group-->
                            <!--begin::Separator-->
                            <div class="separator my-7"></div>
                            <!--begin::Separator-->
                            <!--begin::Add new contact-->
                            <a href="{{ route('metronic.apps.contacts.add_contact') }}" class="btn btn-primary w-100">
                                <i class="ki-duotone ki-badge fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                </i>Add new contact</a>
                            <!--end::Add new contact-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Contact group wrapper-->
                </div>
                <!--end::Contact groups-->
                <!--begin::Search-->
                <div class="col-lg-6 col-xl-3">
                    <!--begin::Contacts-->
                    <div class="card card-flush" id="kt_contacts_list">
                        <!--begin::Card header-->
                        <div class="card-header pt-7" id="kt_contacts_list_header">
                            <!--begin::Form-->
                            <form class="d-flex align-items-center position-relative w-100 m-0" autocomplete="off">
                                <!--begin::Icon-->
                                <i
                                    class="ki-duotone ki-magnifier fs-3 text-gray-500 position-absolute top-50 ms-5 translate-middle-y">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <!--end::Icon-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid ps-13" name="search"
                                    value="" placeholder="Search contacts" />
                                <!--end::Input-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-5" id="kt_contacts_list_body">
                            <!--begin::List-->
                            <div class="scroll-y me-n5 pe-5 h-300px h-xl-auto" data-kt-scroll="true"
                                data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                                data-kt-scroll-dependencies="#kt_header, #kt_toolbar, #kt_footer, #kt_contacts_list_header"
                                data-kt-scroll-wrappers="#kt_content, #kt_contacts_list_body"
                                data-kt-scroll-stretch="#kt_contacts_list, #kt_contacts_main" data-kt-scroll-offset="5px">
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-4">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-40px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-4">
                                            <a href="{{ route('metronic.apps.contacts.view_contact') }}"
                                                class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
                                            <div class="fw-semibold fs-7 text-muted">smith@kpmg.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed d-none"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-4">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-40px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fs-6 fw-bolder">M</span>
                                            <div
                                                class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n2 mt-n2">
                                            </div>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-4">
                                            <a href="{{ route('metronic.apps.contacts.view_contact') }}"
                                                class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
                                            <div class="fw-semibold fs-7 text-muted">melody@altbox.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed d-none"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-4">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-40px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-4">
                                            <a href="{{ route('metronic.apps.contacts.view_contact') }}"
                                                class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
                                            <div class="fw-semibold fs-7 text-muted">max@kt.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed d-none"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-4">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-40px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-4">
                                            <a href="{{ route('metronic.apps.contacts.view_contact') }}"
                                                class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
                                            <div class="fw-semibold fs-7 text-muted">sean@dellito.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed d-none"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-4">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-40px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                            <div
                                                class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n2 mt-n2">
                                            </div>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-4">
                                            <a href="{{ route('metronic.apps.contacts.view_contact') }}"
                                                class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
                                            <div class="fw-semibold fs-7 text-muted">brian@exchange.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed d-none"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-4">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-40px symbol-circle">
                                            <span
                                                class="symbol-label bg-light-warning text-warning fs-6 fw-bolder">C</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-4">
                                            <a href="{{ route('metronic.apps.contacts.view_contact') }}"
                                                class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela
                                                Collins</a>
                                            <div class="fw-semibold fs-7 text-muted">mik@pex.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed d-none"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-4">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-40px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-9.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-4">
                                            <a href="{{ route('metronic.apps.contacts.view_contact') }}"
                                                class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Francis
                                                Mitcham</a>
                                            <div class="fw-semibold fs-7 text-muted">f.mit@kpmg.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed d-none"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-4">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-40px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fs-6 fw-bolder">O</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-4">
                                            <a href="{{ route('metronic.apps.contacts.view_contact') }}"
                                                class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
                                            <div class="fw-semibold fs-7 text-muted">olivia@corpmail.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed d-none"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-4">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-40px symbol-circle">
                                            <span
                                                class="symbol-label bg-light-primary text-primary fs-6 fw-bolder">N</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-4">
                                            <a href="{{ route('metronic.apps.contacts.view_contact') }}"
                                                class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
                                            <div class="fw-semibold fs-7 text-muted">owen.neil@gmail.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed d-none"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-4">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-40px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-23.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-4">
                                            <a href="{{ route('metronic.apps.contacts.view_contact') }}"
                                                class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
                                            <div class="fw-semibold fs-7 text-muted">dam@consilting.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed d-none"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-4">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-40px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fs-6 fw-bolder">E</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-4">
                                            <a href="{{ route('metronic.apps.contacts.view_contact') }}"
                                                class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
                                            <div class="fw-semibold fs-7 text-muted">emma@intenso.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed d-none"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-4">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-40px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-4">
                                            <a href="{{ route('metronic.apps.contacts.view_contact') }}"
                                                class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
                                            <div class="fw-semibold fs-7 text-muted">ana.cf@limtel.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed d-none"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-4">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-40px symbol-circle">
                                            <span class="symbol-label bg-light-info text-info fs-6 fw-bolder">A</span>
                                            <div
                                                class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n2 mt-n2">
                                            </div>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-4">
                                            <a href="{{ route('metronic.apps.contacts.view_contact') }}"
                                                class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
                                            <div class="fw-semibold fs-7 text-muted">robert@benko.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed d-none"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-4">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-40px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-13.jpg" />
                                            <div
                                                class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n2 mt-n2">
                                            </div>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-4">
                                            <a href="{{ route('metronic.apps.contacts.view_contact') }}"
                                                class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
                                            <div class="fw-semibold fs-7 text-muted">miller@mapple.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed d-none"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-4">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-40px symbol-circle">
                                            <span
                                                class="symbol-label bg-light-success text-success fs-6 fw-bolder">L</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-4">
                                            <a href="{{ route('metronic.apps.contacts.view_contact') }}"
                                                class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
                                            <div class="fw-semibold fs-7 text-muted">lucy.m@fentech.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed d-none"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-4">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-40px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-21.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-4">
                                            <a href="{{ route('metronic.apps.contacts.view_contact') }}"
                                                class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
                                            <div class="fw-semibold fs-7 text-muted">ethan@loop.com.au</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::List-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Contacts-->
                </div>
                <!--end::Search-->
                <!--begin::Content-->
                <div class="col-xl-6">
                    <!--begin::Contacts-->
                    <div class="card card-flush h-lg-100" id="kt_contacts_main">
                        <!--begin::Card header-->
                        <div class="card-header pt-7" id="kt_chat_contacts_header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <i class="ki-duotone ki-badge fs-1 me-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                </i>
                                <h2>Contact Details</h2>
                            </div>
                            <!--end::Card title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar gap-3">
                                <!--begin::Chat-->
                                <button class="btn btn-sm btn-light btn-active-light-primary" data-kt-drawer-show="true"
                                    data-kt-drawer-target="#kt_drawer_chat">
                                    <i class="ki-duotone ki-message-text-2 fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>Chat</button>
                                <!--end::Chat-->
                                <!--begin::Chat-->
                                <a href="{{ route('metronic.apps.inbox.reply') }}"
                                    class="btn btn-sm btn-light btn-active-light-primary">
                                    <i class="ki-duotone ki-messages fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>Message</a>
                                <!--end::Chat-->
                                <!--begin::Action menu-->
                                <a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-dots-square fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="{{ route('metronic.apps.contacts.edit_contact') }}"
                                            class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" id="kt_contact_delete"
                                            data-kt-redirect="/apps/contacts/getting-started.html">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                                <!--end::Action menu-->
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-5">
                            <!--begin::Profile-->
                            <div class="d-flex gap-7 align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-circle symbol-100px">
                                    <img src="assets/media/avatars/300-6.jpg" alt="image" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Contact details-->
                                <div class="d-flex flex-column gap-2">
                                    <!--begin::Name-->
                                    <h3 class="mb-0">Emma Smith</h3>
                                    <!--end::Name-->
                                    <!--begin::Email-->
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="ki-duotone ki-sms fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <a href="#" class="text-muted text-hover-primary">smith@kpmg.com</a>
                                    </div>
                                    <!--end::Email-->
                                    <!--begin::Phone-->
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="ki-duotone ki-phone fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <a href="#" class="text-muted text-hover-primary">+6141 234 567</a>
                                    </div>
                                    <!--end::Phone-->
                                </div>
                                <!--end::Contact details-->
                            </div>
                            <!--end::Profile-->
                            <!--begin:::Tabs-->
                            <ul
                                class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x fs-6 fw-semibold mt-6 mb-8 gap-2">
                                <!--begin:::Tab item-->
                                <li class="nav-item">
                                    <a class="nav-link text-active-primary d-flex align-items-center pb-4 active"
                                        data-bs-toggle="tab" href="#kt_contact_view_general">
                                        <i class="ki-duotone ki-home fs-4 me-1"></i>General</a>
                                </li>
                                <!--end:::Tab item-->
                                <!--begin:::Tab item-->
                                <li class="nav-item">
                                    <a class="nav-link text-active-primary d-flex align-items-center pb-4"
                                        data-bs-toggle="tab" href="#kt_contact_view_meetings">
                                        <i class="ki-duotone ki-calendar-8 fs-4 me-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                            <span class="path6"></span>
                                        </i>Meetings</a>
                                </li>
                                <!--end:::Tab item-->
                                <!--begin:::Tab item-->
                                <li class="nav-item">
                                    <a class="nav-link text-active-primary d-flex align-items-center pb-4"
                                        data-bs-toggle="tab" href="#kt_contact_view_activity">
                                        <i class="ki-duotone ki-save-2 fs-4 me-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>Activity</a>
                                </li>
                                <!--end:::Tab item-->
                            </ul>
                            <!--end:::Tabs-->
                            <!--begin::Tab content-->
                            <div class="tab-content" id="">
                                <!--begin:::Tab pane-->
                                <div class="tab-pane fade show active" id="kt_contact_view_general" role="tabpanel">
                                    <!--begin::Additional details-->
                                    <div class="d-flex flex-column gap-5 mt-7">
                                        <!--begin::Company name-->
                                        <div class="d-flex flex-column gap-1">
                                            <div class="fw-bold text-muted">Company Name</div>
                                            <div class="fw-bold fs-5">Keenthemes Inc</div>
                                        </div>
                                        <!--end::Company name-->
                                        <!--begin::City-->
                                        <div class="d-flex flex-column gap-1">
                                            <div class="fw-bold text-muted">City</div>
                                            <div class="fw-bold fs-5">Melbourne</div>
                                        </div>
                                        <!--end::City-->
                                        <!--begin::Country-->
                                        <div class="d-flex flex-column gap-1">
                                            <div class="fw-bold text-muted">Country</div>
                                            <div class="fw-bold fs-5">Australia</div>
                                        </div>
                                        <!--end::Country-->
                                        <!--begin::Notes-->
                                        <div class="d-flex flex-column gap-1">
                                            <div class="fw-bold text-muted">Notes</div>
                                            <p>Emma Smith joined the team on September 2019 as a junior associate. She soon
                                                showcased her expertise and experience in knowledge and skill in the field,
                                                which was very valuable to the company. She was promptly promoted to senior
                                                associate on July 2020.
                                                <br />
                                                <br />Emma Smith now heads a team of 5 associates and leads the company's
                                                sales growth by 7%.
                                            </p>
                                        </div>
                                        <!--end::Notes-->
                                    </div>
                                    <!--end::Additional details-->
                                </div>
                                <!--end:::Tab pane-->
                                <!--begin:::Tab pane-->
                                <div class="tab-pane fade" id="kt_contact_view_meetings" role="tabpanel">
                                    <!--begin::Dates-->
                                    <ul class="nav nav-pills d-flex flex-stack flex-nowrap scroll-x pb-2">
                                        <!--begin::Date-->
                                        <li class="nav-item me-1">
                                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-gray-900 text-active-white btn-active-primary"
                                                data-bs-toggle="tab" href="#kt_schedule_day_0">
                                                <span class="opacity-50 fs-7 fw-semibold">Su</span>
                                                <span class="fs-6 fw-bold">22</span>
                                            </a>
                                        </li>
                                        <!--end::Date-->
                                        <!--begin::Date-->
                                        <li class="nav-item me-1">
                                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-gray-900 text-active-white btn-active-primary active"
                                                data-bs-toggle="tab" href="#kt_schedule_day_1">
                                                <span class="opacity-50 fs-7 fw-semibold">Mo</span>
                                                <span class="fs-6 fw-bold">23</span>
                                            </a>
                                        </li>
                                        <!--end::Date-->
                                        <!--begin::Date-->
                                        <li class="nav-item me-1">
                                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-gray-900 text-active-white btn-active-primary"
                                                data-bs-toggle="tab" href="#kt_schedule_day_2">
                                                <span class="opacity-50 fs-7 fw-semibold">Tu</span>
                                                <span class="fs-6 fw-bold">24</span>
                                            </a>
                                        </li>
                                        <!--end::Date-->
                                        <!--begin::Date-->
                                        <li class="nav-item me-1">
                                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-gray-900 text-active-white btn-active-primary"
                                                data-bs-toggle="tab" href="#kt_schedule_day_3">
                                                <span class="opacity-50 fs-7 fw-semibold">We</span>
                                                <span class="fs-6 fw-bold">25</span>
                                            </a>
                                        </li>
                                        <!--end::Date-->
                                        <!--begin::Date-->
                                        <li class="nav-item me-1">
                                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-gray-900 text-active-white btn-active-primary"
                                                data-bs-toggle="tab" href="#kt_schedule_day_4">
                                                <span class="opacity-50 fs-7 fw-semibold">Th</span>
                                                <span class="fs-6 fw-bold">26</span>
                                            </a>
                                        </li>
                                        <!--end::Date-->
                                        <!--begin::Date-->
                                        <li class="nav-item me-1">
                                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-gray-900 text-active-white btn-active-primary"
                                                data-bs-toggle="tab" href="#kt_schedule_day_5">
                                                <span class="opacity-50 fs-7 fw-semibold">Fr</span>
                                                <span class="fs-6 fw-bold">27</span>
                                            </a>
                                        </li>
                                        <!--end::Date-->
                                        <!--begin::Date-->
                                        <li class="nav-item me-1">
                                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-gray-900 text-active-white btn-active-primary"
                                                data-bs-toggle="tab" href="#kt_schedule_day_6">
                                                <span class="opacity-50 fs-7 fw-semibold">Sa</span>
                                                <span class="fs-6 fw-bold">28</span>
                                            </a>
                                        </li>
                                        <!--end::Date-->
                                        <!--begin::Date-->
                                        <li class="nav-item me-1">
                                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-gray-900 text-active-white btn-active-primary"
                                                data-bs-toggle="tab" href="#kt_schedule_day_7">
                                                <span class="opacity-50 fs-7 fw-semibold">Su</span>
                                                <span class="fs-6 fw-bold">29</span>
                                            </a>
                                        </li>
                                        <!--end::Date-->
                                        <!--begin::Date-->
                                        <li class="nav-item me-1">
                                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-gray-900 text-active-white btn-active-primary"
                                                data-bs-toggle="tab" href="#kt_schedule_day_8">
                                                <span class="opacity-50 fs-7 fw-semibold">Mo</span>
                                                <span class="fs-6 fw-bold">30</span>
                                            </a>
                                        </li>
                                        <!--end::Date-->
                                        <!--begin::Date-->
                                        <li class="nav-item me-1">
                                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 text-gray-900 text-active-white btn-active-primary"
                                                data-bs-toggle="tab" href="#kt_schedule_day_9">
                                                <span class="opacity-50 fs-7 fw-semibold">Tu</span>
                                                <span class="fs-6 fw-bold">31</span>
                                            </a>
                                        </li>
                                        <!--end::Date-->
                                    </ul>
                                    <!--end::Dates-->
                                    <!--begin::Tab Content-->
                                    <div class="tab-content">
                                        <!--begin::Day-->
                                        <div id="kt_schedule_day_0" class="tab-pane fade show">
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative my-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-danger rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5 text-gray-600">
                                                    <!--begin::Time-->
                                                    <div class="fs-5">13:00 - 14:00
                                                        <span class="fs-7 text-gray-500 text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">9 Degree
                                                        Project Estimation Meeting</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="text-gray-500">Lead by
                                                        <a href="#">Mark Randall</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative my-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-primary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5 text-gray-600">
                                                    <!--begin::Time-->
                                                    <div class="fs-5">12:00 - 13:00
                                                        <span class="fs-7 text-gray-500 text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Committee
                                                        Review Approvals</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="text-gray-500">Lead by
                                                        <a href="#">Karina Clarke</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative my-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-primary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5 text-gray-600">
                                                    <!--begin::Time-->
                                                    <div class="fs-5">10:00 - 11:00
                                                        <span class="fs-7 text-gray-500 text-uppercase">am</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Lunch &
                                                        Learn Catch Up</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="text-gray-500">Lead by
                                                        <a href="#">Walter White</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                        </div>
                                        <!--end::Day-->
                                        <!--begin::Day-->
                                        <div id="kt_schedule_day_1" class="tab-pane fade show active">
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative my-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-success rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5 text-gray-600">
                                                    <!--begin::Time-->
                                                    <div class="fs-5">10:00 - 11:00
                                                        <span class="fs-7 text-gray-500 text-uppercase">am</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Dashboard
                                                        UI/UX Design Review</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="text-gray-500">Lead by
                                                        <a href="#">Bob Harris</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative my-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-danger rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5 text-gray-600">
                                                    <!--begin::Time-->
                                                    <div class="fs-5">10:00 - 11:00
                                                        <span class="fs-7 text-gray-500 text-uppercase">am</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative
                                                        Content Initiative</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="text-gray-500">Lead by
                                                        <a href="#">Bob Harris</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative my-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-success rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5 text-gray-600">
                                                    <!--begin::Time-->
                                                    <div class="fs-5">14:30 - 15:30
                                                        <span class="fs-7 text-gray-500 text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Committee
                                                        Review Approvals</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="text-gray-500">Lead by
                                                        <a href="#">Bob Harris</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                        </div>
                                        <!--end::Day-->
                                        <!--begin::Day-->
                                        <div id="kt_schedule_day_2" class="tab-pane fade show">
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative my-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-primary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5 text-gray-600">
                                                    <!--begin::Time-->
                                                    <div class="fs-5">14:30 - 15:30
                                                        <span class="fs-7 text-gray-500 text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative
                                                        Content Initiative</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="text-gray-500">Lead by
                                                        <a href="#">David Stevenson</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative my-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-danger rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5 text-gray-600">
                                                    <!--begin::Time-->
                                                    <div class="fs-5">14:30 - 15:30
                                                        <span class="fs-7 text-gray-500 text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Development
                                                        Team Capacity Review</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="text-gray-500">Lead by
                                                        <a href="#">Sean Bean</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative my-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-danger rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5 text-gray-600">
                                                    <!--begin::Time-->
                                                    <div class="fs-5">14:30 - 15:30
                                                        <span class="fs-7 text-gray-500 text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project
                                                        Review & Testing</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="text-gray-500">Lead by
                                                        <a href="#">Naomi Hayabusa</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                        </div>
                                        <!--end::Day-->
                                        <!--begin::Day-->
                                        <div id="kt_schedule_day_3" class="tab-pane fade show">
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative my-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-primary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5 text-gray-600">
                                                    <!--begin::Time-->
                                                    <div class="fs-5">13:00 - 14:00
                                                        <span class="fs-7 text-gray-500 text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Team
                                                        Backlog Grooming Session</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="text-gray-500">Lead by
                                                        <a href="#">Walter White</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative my-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-info rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5 text-gray-600">
                                                    <!--begin::Time-->
                                                    <div class="fs-5">14:30 - 15:30
                                                        <span class="fs-7 text-gray-500 text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly
                                                        Team Stand-Up</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="text-gray-500">Lead by
                                                        <a href="#">Caleb Donaldson</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative my-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-danger rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5 text-gray-600">
                                                    <!--begin::Time-->
                                                    <div class="fs-5">16:30 - 17:30
                                                        <span class="fs-7 text-gray-500 text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly
                                                        Team Stand-Up</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="text-gray-500">Lead by
                                                        <a href="#">Caleb Donaldson</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                        </div>
                                        <!--end::Day-->
                                        <!--begin::Day-->
                                        <div id="kt_schedule_day_4" class="tab-pane fade show">
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative my-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-danger rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5 text-gray-600">
                                                    <!--begin::Time-->
                                                    <div class="fs-5">11:00 - 11:45
                                                        <span class="fs-7 text-gray-500 text-uppercase">am</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative
                                                        Content Initiative</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="text-gray-500">Lead by
                                                        <a href="#">Bob Harris</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative my-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-info rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5 text-gray-600">
                                                    <!--begin::Time-->
                                                    <div class="fs-5">16:30 - 17:30
                                                        <span class="fs-7 text-gray-500 text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Development
                                                        Team Capacity Review</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="text-gray-500">Lead by
                                                        <a href="#">Sean Bean</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative my-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-danger rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5 text-gray-600">
                                                    <!--begin::Time-->
                                                    <div class="fs-5">12:00 - 13:00
                                                        <span class="fs-7 text-gray-500 text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Committee
                                                        Review Approvals</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="text-gray-500">Lead by
                                                        <a href="#">Michael Walters</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                        </div>
                                        <!--end::Day-->
                                        <!--begin::Day-->
                                        <div id="kt_schedule_day_5" class="tab-pane fade show">
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative my-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-warning rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5 text-gray-600">
                                                    <!--begin::Time-->
                                                    <div class="fs-5">14:30 - 15:30
                                                        <span class="fs-7 text-gray-500 text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">9 Degree
                                                        Project Estimation Meeting</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="text-gray-500">Lead by
                                                        <a href="#">Kendell Trevor</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative my-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-warning rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5 text-gray-600">
                                                    <!--begin::Time-->
                                                    <div class="fs-5">14:30 - 15:30
                                                        <span class="fs-7 text-gray-500 text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Lunch &
                                                        Learn Catch Up</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="text-gray-500">Lead by
                                                        <a href="#">Sean Bean</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative my-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-warning rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5 text-gray-600">
                                                    <!--begin::Time-->
                                                    <div class="fs-5">11:00 - 11:45
                                                        <span class="fs-7 text-gray-500 text-uppercase">am</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Committee
                                                        Review Approvals</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="text-gray-500">Lead by
                                                        <a href="#">Sean Bean</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                        </div>
                                        <!--end::Day-->
                                        <!--begin::Day-->
                                        <div id="kt_schedule_day_6" class="tab-pane fade show">
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative my-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-danger rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5 text-gray-600">
                                                    <!--begin::Time-->
                                                    <div class="fs-5">12:00 - 13:00
                                                        <span class="fs-7 text-gray-500 text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly
                                                        Team Stand-Up</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="text-gray-500">Lead by
                                                        <a href="#">Michael Walters</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative my-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-danger rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5 text-gray-600">
                                                    <!--begin::Time-->
                                                    <div class="fs-5">9:00 - 10:00
                                                        <span class="fs-7 text-gray-500 text-uppercase">am</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">9 Degree
                                                        Project Estimation Meeting</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="text-gray-500">Lead by
                                                        <a href="#">Yannis Gloverson</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative my-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-warning rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5 text-gray-600">
                                                    <!--begin::Time-->
                                                    <div class="fs-5">9:00 - 10:00
                                                        <span class="fs-7 text-gray-500 text-uppercase">am</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Development
                                                        Team Capacity Review</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="text-gray-500">Lead by
                                                        <a href="#">Mark Randall</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                        </div>
                                        <!--end::Day-->
                                        <!--begin::Day-->
                                        <div id="kt_schedule_day_7" class="tab-pane fade show">
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative my-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-danger rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5 text-gray-600">
                                                    <!--begin::Time-->
                                                    <div class="fs-5">12:00 - 13:00
                                                        <span class="fs-7 text-gray-500 text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative
                                                        Content Initiative</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="text-gray-500">Lead by
                                                        <a href="#">Yannis Gloverson</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative my-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-info rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5 text-gray-600">
                                                    <!--begin::Time-->
                                                    <div class="fs-5">10:00 - 11:00
                                                        <span class="fs-7 text-gray-500 text-uppercase">am</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">9 Degree
                                                        Project Estimation Meeting</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="text-gray-500">Lead by
                                                        <a href="#">Caleb Donaldson</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative my-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-info rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5 text-gray-600">
                                                    <!--begin::Time-->
                                                    <div class="fs-5">14:30 - 15:30
                                                        <span class="fs-7 text-gray-500 text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Development
                                                        Team Capacity Review</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="text-gray-500">Lead by
                                                        <a href="#">Sean Bean</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                        </div>
                                        <!--end::Day-->
                                        <!--begin::Day-->
                                        <div id="kt_schedule_day_8" class="tab-pane fade show">
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative my-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-success rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5 text-gray-600">
                                                    <!--begin::Time-->
                                                    <div class="fs-5">13:00 - 14:00
                                                        <span class="fs-7 text-gray-500 text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly
                                                        Team Stand-Up</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="text-gray-500">Lead by
                                                        <a href="#">Peter Marcus</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative my-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-primary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5 text-gray-600">
                                                    <!--begin::Time-->
                                                    <div class="fs-5">13:00 - 14:00
                                                        <span class="fs-7 text-gray-500 text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Marketing
                                                        Campaign Discussion</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="text-gray-500">Lead by
                                                        <a href="#">Naomi Hayabusa</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative my-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-primary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5 text-gray-600">
                                                    <!--begin::Time-->
                                                    <div class="fs-5">14:30 - 15:30
                                                        <span class="fs-7 text-gray-500 text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Team
                                                        Backlog Grooming Session</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="text-gray-500">Lead by
                                                        <a href="#">Sean Bean</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                        </div>
                                        <!--end::Day-->
                                        <!--begin::Day-->
                                        <div id="kt_schedule_day_9" class="tab-pane fade show">
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative my-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-warning rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5 text-gray-600">
                                                    <!--begin::Time-->
                                                    <div class="fs-5">11:00 - 11:45
                                                        <span class="fs-7 text-gray-500 text-uppercase">am</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Team
                                                        Backlog Grooming Session</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="text-gray-500">Lead by
                                                        <a href="#">Bob Harris</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative my-6">
                                                <!--begin::Bar-->
                                                <div class="position-absolute h-100 w-4px bg-danger rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5 text-gray-600">
                                                    <!--begin::Time-->
                                                    <div class="fs-5">14:30 - 15:30
                                                        <span class="fs-7 text-gray-500 text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Committee
                                                        Review Approvals</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="text-gray-500">Lead by
                                                        <a href="#">Mark Randall</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                            <!--begin::Time-->
                                            <div class="d-flex flex-stack position-relative my-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-success rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->
                                                <div class="fw-semibold ms-5 text-gray-600">
                                                    <!--begin::Time-->
                                                    <div class="fs-5">14:30 - 15:30
                                                        <span class="fs-7 text-gray-500 text-uppercase">pm</span>
                                                    </div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Sales
                                                        Pitch Proposal</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="text-gray-500">Lead by
                                                        <a href="#">Michael Walters</a>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Time-->
                                        </div>
                                        <!--end::Day-->
                                    </div>
                                    <!--end::Tab Content-->
                                </div>
                                <!--end:::Tab pane-->
                                <!--begin:::Tab pane-->
                                <div class="tab-pane fade" id="kt_contact_view_activity" role="tabpanel">
                                    <!--begin::Timeline-->
                                    <div class="timeline-label">
                                        <!--begin::Item-->
                                        <div class="timeline-item">
                                            <!--begin::Label-->
                                            <div class="timeline-label fw-bold text-gray-800 fs-6">08:42</div>
                                            <!--end::Label-->
                                            <!--begin::Badge-->
                                            <div class="timeline-badge">
                                                <i class="ki-duotone ki-abstract-8 text-warning fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Badge-->
                                            <!--begin::Text-->
                                            <div class="fw-mormal timeline-content text-muted ps-3">Outlines keep you
                                                honest. And keep structure</div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="timeline-item">
                                            <!--begin::Label-->
                                            <div class="timeline-label fw-bold text-gray-800 fs-6">10:00</div>
                                            <!--end::Label-->
                                            <!--begin::Badge-->
                                            <div class="timeline-badge">
                                                <i class="ki-duotone ki-abstract-8 text-success fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Badge-->
                                            <!--begin::Content-->
                                            <div class="timeline-content d-flex">
                                                <span class="fw-bold text-gray-800 ps-3">AEOL meeting</span>
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="timeline-item">
                                            <!--begin::Label-->
                                            <div class="timeline-label fw-bold text-gray-800 fs-6">14:37</div>
                                            <!--end::Label-->
                                            <!--begin::Badge-->
                                            <div class="timeline-badge">
                                                <i class="ki-duotone ki-abstract-8 text-danger fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Badge-->
                                            <!--begin::Desc-->
                                            <div class="timeline-content fw-bold text-gray-800 ps-3">Make deposit
                                                <a href="#" class="text-primary">USD 700</a>. to ESL
                                            </div>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="timeline-item">
                                            <!--begin::Label-->
                                            <div class="timeline-label fw-bold text-gray-800 fs-6">16:50</div>
                                            <!--end::Label-->
                                            <!--begin::Badge-->
                                            <div class="timeline-badge">
                                                <i class="ki-duotone ki-abstract-8 text-primary fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Badge-->
                                            <!--begin::Text-->
                                            <div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly
                                                driving and keep structure keep great</div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="timeline-item">
                                            <!--begin::Label-->
                                            <div class="timeline-label fw-bold text-gray-800 fs-6">21:03</div>
                                            <!--end::Label-->
                                            <!--begin::Badge-->
                                            <div class="timeline-badge">
                                                <i class="ki-duotone ki-abstract-8 text-danger fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Badge-->
                                            <!--begin::Desc-->
                                            <div class="timeline-content fw-semibold text-gray-800 ps-3">New order placed
                                                <a href="#" class="text-primary">#XF-2356</a>.
                                            </div>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="timeline-item">
                                            <!--begin::Label-->
                                            <div class="timeline-label fw-bold text-gray-800 fs-6">16:50</div>
                                            <!--end::Label-->
                                            <!--begin::Badge-->
                                            <div class="timeline-badge">
                                                <i class="ki-duotone ki-abstract-8 text-primary fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Badge-->
                                            <!--begin::Text-->
                                            <div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly
                                                driving and keep structure keep great</div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="timeline-item">
                                            <!--begin::Label-->
                                            <div class="timeline-label fw-bold text-gray-800 fs-6">21:03</div>
                                            <!--end::Label-->
                                            <!--begin::Badge-->
                                            <div class="timeline-badge">
                                                <i class="ki-duotone ki-abstract-8 text-danger fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Badge-->
                                            <!--begin::Desc-->
                                            <div class="timeline-content fw-semibold text-gray-800 ps-3">New order placed
                                                <a href="#" class="text-primary">#XF-2356</a>.
                                            </div>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="timeline-item">
                                            <!--begin::Label-->
                                            <div class="timeline-label fw-bold text-gray-800 fs-6">10:30</div>
                                            <!--end::Label-->
                                            <!--begin::Badge-->
                                            <div class="timeline-badge">
                                                <i class="ki-duotone ki-abstract-8 text-success fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Badge-->
                                            <!--begin::Text-->
                                            <div class="timeline-content fw-mormal text-muted ps-3">Finance KPI Mobile app
                                                launch preparion meeting</div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Timeline-->
                                </div>
                                <!--end:::Tab pane-->
                            </div>
                            <!--end::Tab content-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Contacts-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Contacts App- View Contact-->
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
    <!--begin::Custom Javascript(used for this page only)-->






    <!--end::Custom Javascript-->
    <!--end::Javascript-->
@endsection

@section('page_scripts')
    <script src="assets/js/custom/apps/contacts/view-contact.js"></script>
    <script src="assets/js/widgets.bundle.js"></script>
    <script src="assets/js/custom/widgets.js"></script>
    <script src="assets/js/custom/apps/chat/chat.js"></script>
    <script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="assets/js/custom/utilities/modals/create-app.js"></script>
@endsection
