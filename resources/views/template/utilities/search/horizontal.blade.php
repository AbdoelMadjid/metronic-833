@extends('layouts.metronic')

@section('body_attributes')
id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default"
@endsection

@section('toolbar')
<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6 metronic-toolbar-separated">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Horizontal</h1>
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
											<li class="breadcrumb-item text-muted">Utilities</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-500 w-5px h-2px"></span>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">Search</li>
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
											<a href="#" class="btn btn-sm btn-flex btn-secondary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
											<i class="ki-duotone ki-filter fs-6 text-muted me-1">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>Filter</a>
											<!--end::Menu toggle-->
											<!--begin::Menu 1-->
											<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_69981c1fcf7c4">
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
															<select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_69981c1fcf7c4" data-allow-clear="true">
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
															<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
															<label class="form-check-label">Enabled</label>
														</div>
														<!--end::Switch-->
													</div>
													<!--end::Input group-->
													<!--begin::Actions-->
													<div class="d-flex justify-content-end">
														<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
														<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
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
										<a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a>
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
								<div id="kt_app_content_container" class="app-container container-xxl">
									<!--begin::Form-->
									<form action="#">
										<!--begin::Card-->
										<div class="card mb-7">
											<!--begin::Card body-->
											<div class="card-body">
												<!--begin::Compact form-->
												<div class="d-flex align-items-center">
													<!--begin::Input group-->
													<div class="position-relative w-md-400px me-md-2">
														<i class="ki-duotone ki-magnifier fs-3 text-gray-500 position-absolute top-50 translate-middle ms-6">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
														<input type="text" class="form-control form-control-solid ps-10" name="search" value="" placeholder="Search" />
													</div>
													<!--end::Input group-->
													<!--begin:Action-->
													<div class="d-flex align-items-center">
														<button type="submit" class="btn btn-primary me-5">Search</button>
														<a href="#" id="kt_horizontal_search_advanced_link" class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#kt_advanced_search_form">Advanced Search</a>
													</div>
													<!--end:Action-->
												</div>
												<!--end::Compact form-->
												<!--begin::Advance form-->
												<div class="collapse" id="kt_advanced_search_form">
													<!--begin::Separator-->
													<div class="separator separator-dashed mt-9 mb-6"></div>
													<!--end::Separator-->
													<!--begin::Row-->
													<div class="row g-8 mb-8">
														<!--begin::Col-->
														<div class="col-xxl-7">
															<label class="fs-6 form-label fw-bold text-gray-900">Tags</label>
															<input type="text" class="form-control form-control form-control-solid" name="tags" value="products, users, events" />
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-xxl-5">
															<!--begin::Row-->
															<div class="row g-8">
																<!--begin::Col-->
																<div class="col-lg-6">
																	<label class="fs-6 form-label fw-bold text-gray-900">Team Type</label>
																	<!--begin::Select-->
																	<select class="form-select form-select-solid" data-control="select2" data-placeholder="In Progress" data-hide-search="true">
																		<option value=""></option>
																		<option value="1">Not started</option>
																		<option value="2" selected="selected">In Progress</option>
																		<option value="3">Done</option>
																	</select>
																	<!--end::Select-->
																</div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col-lg-6">
																	<label class="fs-6 form-label fw-bold text-gray-900">Select Group</label>
																	<!--begin::Radio group-->
																	<div class="nav-group nav-group-fluid">
																		<!--begin::Option-->
																		<label>
																			<input type="radio" class="btn-check" name="type" value="has" checked="checked" />
																			<span class="btn btn-sm btn-color-muted btn-active btn-active-primary fw-bold px-4">All</span>
																		</label>
																		<!--end::Option-->
																		<!--begin::Option-->
																		<label>
																			<input type="radio" class="btn-check" name="type" value="users" />
																			<span class="btn btn-sm btn-color-muted btn-active btn-active-primary fw-bold px-4">Users</span>
																		</label>
																		<!--end::Option-->
																		<!--begin::Option-->
																		<label>
																			<input type="radio" class="btn-check" name="type" value="orders" />
																			<span class="btn btn-sm btn-color-muted btn-active btn-active-primary fw-bold px-4">Orders</span>
																		</label>
																		<!--end::Option-->
																	</div>
																	<!--end::Radio group-->
																</div>
																<!--end::Col-->
															</div>
															<!--end::Row-->
														</div>
														<!--end::Col-->
													</div>
													<!--end::Row-->
													<!--begin::Row-->
													<div class="row g-8">
														<!--begin::Col-->
														<div class="col-xxl-7">
															<!--begin::Row-->
															<div class="row g-8">
																<!--begin::Col-->
																<div class="col-lg-4">
																	<label class="fs-6 form-label fw-bold text-gray-900">Min. Amount</label>
																	<!--begin::Dialer-->
																	<div class="position-relative" data-kt-dialer="true" data-kt-dialer-min="1000" data-kt-dialer-max="50000" data-kt-dialer-step="1000" data-kt-dialer-prefix="$" data-kt-dialer-decimals="2">
																		<!--begin::Decrease control-->
																		<button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0" data-kt-dialer-control="decrease">
																			<i class="ki-duotone ki-minus-circle fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</button>
																		<!--end::Decrease control-->
																		<!--begin::Input control-->
																		<input type="text" class="form-control form-control-solid border-0 ps-12" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value="$50" />
																		<!--end::Input control-->
																		<!--begin::Increase control-->
																		<button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0" data-kt-dialer-control="increase">
																			<i class="ki-duotone ki-plus-circle fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</button>
																		<!--end::Increase control-->
																	</div>
																	<!--end::Dialer-->
																</div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col-lg-4">
																	<label class="fs-6 form-label fw-bold text-gray-900">Max. Amount</label>
																	<!--begin::Dialer-->
																	<div class="position-relative" data-kt-dialer="true" data-kt-dialer-min="1000" data-kt-dialer-max="50000" data-kt-dialer-step="1000" data-kt-dialer-prefix="$" data-kt-dialer-decimals="2">
																		<!--begin::Decrease control-->
																		<button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0" data-kt-dialer-control="decrease">
																			<i class="ki-duotone ki-minus-circle fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</button>
																		<!--end::Decrease control-->
																		<!--begin::Input control-->
																		<input type="text" class="form-control form-control-solid border-0 ps-12" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value="$100" />
																		<!--end::Input control-->
																		<!--begin::Increase control-->
																		<button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0" data-kt-dialer-control="increase">
																			<i class="ki-duotone ki-plus-circle fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</button>
																		<!--end::Increase control-->
																	</div>
																	<!--end::Dialer-->
																</div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col-lg-4">
																	<label class="fs-6 form-label fw-bold text-gray-900">Team Size</label>
																	<input type="text" class="form-control form-control form-control-solid" name="city" />
																</div>
																<!--end::Col-->
															</div>
															<!--end::Row-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-xxl-5">
															<!--begin::Row-->
															<div class="row g-8">
																<!--begin::Col-->
																<div class="col-lg-6">
																	<label class="fs-6 form-label fw-bold text-gray-900">Category</label>
																	<!--begin::Select-->
																	<select class="form-select form-select-solid" data-control="select2" data-placeholder="In Progress" data-hide-search="true">
																		<option value=""></option>
																		<option value="1">Not started</option>
																		<option value="2" selected="selected">Select</option>
																		<option value="3">Done</option>
																	</select>
																	<!--end::Select-->
																</div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col-lg-6">
																	<label class="fs-6 form-label fw-bold text-gray-900">Status</label>
																	<div class="form-check form-switch form-check-custom form-check-solid mt-1">
																		<input class="form-check-input" type="checkbox" value="" id="flexSwitchChecked" checked="checked" />
																		<label class="form-check-label" for="flexSwitchChecked">Active</label>
																	</div>
																</div>
																<!--end::Col-->
															</div>
															<!--end::Row-->
														</div>
														<!--end::Col-->
													</div>
													<!--end::Row-->
												</div>
												<!--end::Advance form-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Card-->
									</form>
									<!--end::Form-->
									<!--begin::Toolbar-->
									<div class="d-flex flex-wrap flex-stack pb-7">
										<!--begin::Title-->
										<div class="d-flex flex-wrap align-items-center my-1">
											<h3 class="fw-bold me-5 my-1">57 Items Found
											<span class="text-gray-500 fs-6">by Recent Updates ↓</span></h3>
										</div>
										<!--end::Title-->
										<!--begin::Controls-->
										<div class="d-flex flex-wrap my-1">
											<!--begin::Tab nav-->
											<ul class="nav nav-pills me-6 mb-2 mb-sm-0">
												<li class="nav-item m-0">
													<a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary me-3 active" data-bs-toggle="tab" href="#kt_project_users_card_pane">
														<i class="ki-duotone ki-element-plus fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
															<span class="path5"></span>
														</i>
													</a>
												</li>
												<li class="nav-item m-0">
													<a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary" data-bs-toggle="tab" href="#kt_project_users_table_pane">
														<i class="ki-duotone ki-row-horizontal fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</a>
												</li>
											</ul>
											<!--end::Tab nav-->
											<!--begin::Actions-->
											<div class="d-flex my-0">
												<!--begin::Select-->
												<select name="status" data-control="select2" data-hide-search="true" data-placeholder="Filter" class="form-select form-select-sm form-select-solid w-150px me-5">
													<option value="1">Recently Updated</option>
													<option value="2">Last Month</option>
													<option value="3">Last Quarter</option>
													<option value="4">Last Year</option>
												</select>
												<!--end::Select-->
												<!--begin::Select-->
												<select name="status" data-control="select2" data-hide-search="true" data-placeholder="Export" class="form-select form-select-sm form-select-solid w-100px">
													<option value="1">Excel</option>
													<option value="1">PDF</option>
													<option value="2">Print</option>
												</select>
												<!--end::Select-->
											</div>
											<!--end::Actions-->
										</div>
										<!--end::Controls-->
									</div>
									<!--end::Toolbar-->
									<!--begin::Tab Content-->
									<div class="tab-content">
										<!--begin::Tab pane-->
										<div id="kt_project_users_card_pane" class="tab-pane fade show active">
											<!--begin::Row-->
											<div class="row g-6 g-xl-9">
												<!--begin::Col-->
												<div class="col-md-6 col-xxl-4">
													<!--begin::Card-->
													<div class="card">
														<!--begin::Card body-->
														<div class="card-body d-flex flex-center flex-column pt-12 p-9">
															<!--begin::Avatar-->
															<div class="symbol symbol-65px symbol-circle mb-5">
																<img src="assets/media//avatars/300-2.jpg" alt="image" />
																<div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n3 mt-n3"></div>
															</div>
															<!--end::Avatar-->
															<!--begin::Name-->
															<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Karina Clark</a>
															<!--end::Name-->
															<!--begin::Position-->
															<div class="fw-semibold text-gray-500 mb-6">Art Director at Novica Co.</div>
															<!--end::Position-->
															<!--begin::Info-->
															<div class="d-flex flex-center flex-wrap">
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">$14,560</div>
																	<div class="fw-semibold text-gray-500">Earnings</div>
																</div>
																<!--end::Stats-->
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">23</div>
																	<div class="fw-semibold text-gray-500">Tasks</div>
																</div>
																<!--end::Stats-->
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">$236,400</div>
																	<div class="fw-semibold text-gray-500">Sales</div>
																</div>
																<!--end::Stats-->
															</div>
															<!--end::Info-->
														</div>
														<!--end::Card body-->
													</div>
													<!--end::Card-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-6 col-xxl-4">
													<!--begin::Card-->
													<div class="card">
														<!--begin::Card body-->
														<div class="card-body d-flex flex-center flex-column pt-12 p-9">
															<!--begin::Avatar-->
															<div class="symbol symbol-65px symbol-circle mb-5">
																<span class="symbol-label fs-2x fw-semibold text-primary bg-light-primary">S</span>
																<div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n3 mt-n3"></div>
															</div>
															<!--end::Avatar-->
															<!--begin::Name-->
															<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Sean Bean</a>
															<!--end::Name-->
															<!--begin::Position-->
															<div class="fw-semibold text-gray-500 mb-6">Developer at Loop Inc</div>
															<!--end::Position-->
															<!--begin::Info-->
															<div class="d-flex flex-center flex-wrap">
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">$14,560</div>
																	<div class="fw-semibold text-gray-500">Earnings</div>
																</div>
																<!--end::Stats-->
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">23</div>
																	<div class="fw-semibold text-gray-500">Tasks</div>
																</div>
																<!--end::Stats-->
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">$236,400</div>
																	<div class="fw-semibold text-gray-500">Sales</div>
																</div>
																<!--end::Stats-->
															</div>
															<!--end::Info-->
														</div>
														<!--end::Card body-->
													</div>
													<!--end::Card-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-6 col-xxl-4">
													<!--begin::Card-->
													<div class="card">
														<!--begin::Card body-->
														<div class="card-body d-flex flex-center flex-column pt-12 p-9">
															<!--begin::Avatar-->
															<div class="symbol symbol-65px symbol-circle mb-5">
																<img src="assets/media//avatars/300-1.jpg" alt="image" />
															</div>
															<!--end::Avatar-->
															<!--begin::Name-->
															<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Alan Johnson</a>
															<!--end::Name-->
															<!--begin::Position-->
															<div class="fw-semibold text-gray-500 mb-6">Web Designer at Nextop Ltd.</div>
															<!--end::Position-->
															<!--begin::Info-->
															<div class="d-flex flex-center flex-wrap">
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">$14,560</div>
																	<div class="fw-semibold text-gray-500">Earnings</div>
																</div>
																<!--end::Stats-->
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">23</div>
																	<div class="fw-semibold text-gray-500">Tasks</div>
																</div>
																<!--end::Stats-->
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">$236,400</div>
																	<div class="fw-semibold text-gray-500">Sales</div>
																</div>
																<!--end::Stats-->
															</div>
															<!--end::Info-->
														</div>
														<!--end::Card body-->
													</div>
													<!--end::Card-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-6 col-xxl-4">
													<!--begin::Card-->
													<div class="card">
														<!--begin::Card body-->
														<div class="card-body d-flex flex-center flex-column pt-12 p-9">
															<!--begin::Avatar-->
															<div class="symbol symbol-65px symbol-circle mb-5">
																<img src="assets/media//avatars/300-14.jpg" alt="image" />
															</div>
															<!--end::Avatar-->
															<!--begin::Name-->
															<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Robert Doe</a>
															<!--end::Name-->
															<!--begin::Position-->
															<div class="fw-semibold text-gray-500 mb-6">Marketing Analytic at Avito Ltd.</div>
															<!--end::Position-->
															<!--begin::Info-->
															<div class="d-flex flex-center flex-wrap">
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">$14,560</div>
																	<div class="fw-semibold text-gray-500">Earnings</div>
																</div>
																<!--end::Stats-->
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">23</div>
																	<div class="fw-semibold text-gray-500">Tasks</div>
																</div>
																<!--end::Stats-->
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">$236,400</div>
																	<div class="fw-semibold text-gray-500">Sales</div>
																</div>
																<!--end::Stats-->
															</div>
															<!--end::Info-->
														</div>
														<!--end::Card body-->
													</div>
													<!--end::Card-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-6 col-xxl-4">
													<!--begin::Card-->
													<div class="card">
														<!--begin::Card body-->
														<div class="card-body d-flex flex-center flex-column pt-12 p-9">
															<!--begin::Avatar-->
															<div class="symbol symbol-65px symbol-circle mb-5">
																<img src="assets/media//avatars/300-6.jpg" alt="image" />
															</div>
															<!--end::Avatar-->
															<!--begin::Name-->
															<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Olivia Wild</a>
															<!--end::Name-->
															<!--begin::Position-->
															<div class="fw-semibold text-gray-500 mb-6">Art Director at Seal Inc.</div>
															<!--end::Position-->
															<!--begin::Info-->
															<div class="d-flex flex-center flex-wrap">
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">$14,560</div>
																	<div class="fw-semibold text-gray-500">Earnings</div>
																</div>
																<!--end::Stats-->
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">23</div>
																	<div class="fw-semibold text-gray-500">Tasks</div>
																</div>
																<!--end::Stats-->
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">$236,400</div>
																	<div class="fw-semibold text-gray-500">Sales</div>
																</div>
																<!--end::Stats-->
															</div>
															<!--end::Info-->
														</div>
														<!--end::Card body-->
													</div>
													<!--end::Card-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-6 col-xxl-4">
													<!--begin::Card-->
													<div class="card">
														<!--begin::Card body-->
														<div class="card-body d-flex flex-center flex-column pt-12 p-9">
															<!--begin::Avatar-->
															<div class="symbol symbol-65px symbol-circle mb-5">
																<span class="symbol-label fs-2x fw-semibold text-warning bg-light-warning">A</span>
																<div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n3 mt-n3"></div>
															</div>
															<!--end::Avatar-->
															<!--begin::Name-->
															<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Adam Williams</a>
															<!--end::Name-->
															<!--begin::Position-->
															<div class="fw-semibold text-gray-500 mb-6">System Arcitect at Wolto Co.</div>
															<!--end::Position-->
															<!--begin::Info-->
															<div class="d-flex flex-center flex-wrap">
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">$14,560</div>
																	<div class="fw-semibold text-gray-500">Earnings</div>
																</div>
																<!--end::Stats-->
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">23</div>
																	<div class="fw-semibold text-gray-500">Tasks</div>
																</div>
																<!--end::Stats-->
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">$236,400</div>
																	<div class="fw-semibold text-gray-500">Sales</div>
																</div>
																<!--end::Stats-->
															</div>
															<!--end::Info-->
														</div>
														<!--end::Card body-->
													</div>
													<!--end::Card-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-6 col-xxl-4">
													<!--begin::Card-->
													<div class="card">
														<!--begin::Card body-->
														<div class="card-body d-flex flex-center flex-column pt-12 p-9">
															<!--begin::Avatar-->
															<div class="symbol symbol-65px symbol-circle mb-5">
																<span class="symbol-label fs-2x fw-semibold text-info bg-light-info">P</span>
																<div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n3 mt-n3"></div>
															</div>
															<!--end::Avatar-->
															<!--begin::Name-->
															<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Peter Marcus</a>
															<!--end::Name-->
															<!--begin::Position-->
															<div class="fw-semibold text-gray-500 mb-6">Art Director at Novica Co.</div>
															<!--end::Position-->
															<!--begin::Info-->
															<div class="d-flex flex-center flex-wrap">
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">$14,560</div>
																	<div class="fw-semibold text-gray-500">Earnings</div>
																</div>
																<!--end::Stats-->
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">23</div>
																	<div class="fw-semibold text-gray-500">Tasks</div>
																</div>
																<!--end::Stats-->
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">$236,400</div>
																	<div class="fw-semibold text-gray-500">Sales</div>
																</div>
																<!--end::Stats-->
															</div>
															<!--end::Info-->
														</div>
														<!--end::Card body-->
													</div>
													<!--end::Card-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-6 col-xxl-4">
													<!--begin::Card-->
													<div class="card">
														<!--begin::Card body-->
														<div class="card-body d-flex flex-center flex-column pt-12 p-9">
															<!--begin::Avatar-->
															<div class="symbol symbol-65px symbol-circle mb-5">
																<span class="symbol-label fs-2x fw-semibold text-success bg-light-success">N</span>
															</div>
															<!--end::Avatar-->
															<!--begin::Name-->
															<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Neil Owen</a>
															<!--end::Name-->
															<!--begin::Position-->
															<div class="fw-semibold text-gray-500 mb-6">Accountant at Numbers Co.</div>
															<!--end::Position-->
															<!--begin::Info-->
															<div class="d-flex flex-center flex-wrap">
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">$14,560</div>
																	<div class="fw-semibold text-gray-500">Earnings</div>
																</div>
																<!--end::Stats-->
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">23</div>
																	<div class="fw-semibold text-gray-500">Tasks</div>
																</div>
																<!--end::Stats-->
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">$236,400</div>
																	<div class="fw-semibold text-gray-500">Sales</div>
																</div>
																<!--end::Stats-->
															</div>
															<!--end::Info-->
														</div>
														<!--end::Card body-->
													</div>
													<!--end::Card-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-6 col-xxl-4">
													<!--begin::Card-->
													<div class="card">
														<!--begin::Card body-->
														<div class="card-body d-flex flex-center flex-column pt-12 p-9">
															<!--begin::Avatar-->
															<div class="symbol symbol-65px symbol-circle mb-5">
																<img src="assets/media//avatars/300-12.jpg" alt="image" />
															</div>
															<!--end::Avatar-->
															<!--begin::Name-->
															<a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Benjamin Jacob</a>
															<!--end::Name-->
															<!--begin::Position-->
															<div class="fw-semibold text-gray-500 mb-6">Art Director at Novica Co.</div>
															<!--end::Position-->
															<!--begin::Info-->
															<div class="d-flex flex-center flex-wrap">
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">$14,560</div>
																	<div class="fw-semibold text-gray-500">Earnings</div>
																</div>
																<!--end::Stats-->
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">23</div>
																	<div class="fw-semibold text-gray-500">Tasks</div>
																</div>
																<!--end::Stats-->
																<!--begin::Stats-->
																<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
																	<div class="fs-6 fw-bold text-gray-700">$236,400</div>
																	<div class="fw-semibold text-gray-500">Sales</div>
																</div>
																<!--end::Stats-->
															</div>
															<!--end::Info-->
														</div>
														<!--end::Card body-->
													</div>
													<!--end::Card-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
											<!--begin::Pagination-->
											<div class="d-flex flex-stack flex-wrap pt-10">
												<div class="fs-6 fw-semibold text-gray-700">Showing 1 to 10 of 50 entries</div>
												<!--begin::Pages-->
												<ul class="pagination">
													<li class="page-item previous">
														<a href="#" class="page-link">
															<i class="previous"></i>
														</a>
													</li>
													<li class="page-item active">
														<a href="#" class="page-link">1</a>
													</li>
													<li class="page-item">
														<a href="#" class="page-link">2</a>
													</li>
													<li class="page-item">
														<a href="#" class="page-link">3</a>
													</li>
													<li class="page-item">
														<a href="#" class="page-link">4</a>
													</li>
													<li class="page-item">
														<a href="#" class="page-link">5</a>
													</li>
													<li class="page-item">
														<a href="#" class="page-link">6</a>
													</li>
													<li class="page-item next">
														<a href="#" class="page-link">
															<i class="next"></i>
														</a>
													</li>
												</ul>
												<!--end::Pages-->
											</div>
											<!--end::Pagination-->
										</div>
										<!--end::Tab pane-->
										<!--begin::Tab pane-->
										<div id="kt_project_users_table_pane" class="tab-pane fade">
											<!--begin::Card-->
											<div class="card card-flush">
												<!--begin::Card body-->
												<div class="card-body pt-0">
													<!--begin::Table container-->
													<div class="table-responsive">
														<!--begin::Table-->
														<table id="kt_project_users_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold">
															<thead class="fs-7 text-gray-500 text-uppercase">
																<tr>
																	<th class="min-w-250px">Manager</th>
																	<th class="min-w-150px">Date</th>
																	<th class="min-w-90px">Amount</th>
																	<th class="min-w-90px">Status</th>
																	<th class="min-w-50px text-end">Details</th>
																</tr>
															</thead>
															<tbody class="fs-6">
																<tr>
																	<td>
																		<!--begin::User-->
																		<div class="d-flex align-items-center">
																			<!--begin::Wrapper-->
																			<div class="me-5 position-relative">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-35px symbol-circle">
																					<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
																				</div>
																				<!--end::Avatar-->
																			</div>
																			<!--end::Wrapper-->
																			<!--begin::Info-->
																			<div class="d-flex flex-column justify-content-center">
																				<a href="" class="mb-1 text-gray-800 text-hover-primary">Emma Smith</a>
																				<div class="fw-semibold fs-6 text-gray-500">smith@kpmg.com</div>
																			</div>
																			<!--end::Info-->
																		</div>
																		<!--end::User-->
																	</td>
																	<td>Aug 19, 2026</td>
																	<td>$974.00</td>
																	<td>
																		<span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-light btn-sm">View</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<!--begin::User-->
																		<div class="d-flex align-items-center">
																			<!--begin::Wrapper-->
																			<div class="me-5 position-relative">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-35px symbol-circle">
																					<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
																				</div>
																				<!--end::Avatar-->
																				<!--begin::Online-->
																				<div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
																				<!--end::Online-->
																			</div>
																			<!--end::Wrapper-->
																			<!--begin::Info-->
																			<div class="d-flex flex-column justify-content-center">
																				<a href="" class="mb-1 text-gray-800 text-hover-primary">Melody Macy</a>
																				<div class="fw-semibold fs-6 text-gray-500">melody@altbox.com</div>
																			</div>
																			<!--end::Info-->
																		</div>
																		<!--end::User-->
																	</td>
																	<td>Oct 25, 2026</td>
																	<td>$893.00</td>
																	<td>
																		<span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-light btn-sm">View</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<!--begin::User-->
																		<div class="d-flex align-items-center">
																			<!--begin::Wrapper-->
																			<div class="me-5 position-relative">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-35px symbol-circle">
																					<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
																				</div>
																				<!--end::Avatar-->
																			</div>
																			<!--end::Wrapper-->
																			<!--begin::Info-->
																			<div class="d-flex flex-column justify-content-center">
																				<a href="" class="mb-1 text-gray-800 text-hover-primary">Max Smith</a>
																				<div class="fw-semibold fs-6 text-gray-500">max@kt.com</div>
																			</div>
																			<!--end::Info-->
																		</div>
																		<!--end::User-->
																	</td>
																	<td>Feb 21, 2026</td>
																	<td>$865.00</td>
																	<td>
																		<span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-light btn-sm">View</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<!--begin::User-->
																		<div class="d-flex align-items-center">
																			<!--begin::Wrapper-->
																			<div class="me-5 position-relative">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-35px symbol-circle">
																					<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
																				</div>
																				<!--end::Avatar-->
																			</div>
																			<!--end::Wrapper-->
																			<!--begin::Info-->
																			<div class="d-flex flex-column justify-content-center">
																				<a href="" class="mb-1 text-gray-800 text-hover-primary">Sean Bean</a>
																				<div class="fw-semibold fs-6 text-gray-500">sean@dellito.com</div>
																			</div>
																			<!--end::Info-->
																		</div>
																		<!--end::User-->
																	</td>
																	<td>Jul 25, 2026</td>
																	<td>$740.00</td>
																	<td>
																		<span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-light btn-sm">View</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<!--begin::User-->
																		<div class="d-flex align-items-center">
																			<!--begin::Wrapper-->
																			<div class="me-5 position-relative">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-35px symbol-circle">
																					<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
																				</div>
																				<!--end::Avatar-->
																			</div>
																			<!--end::Wrapper-->
																			<!--begin::Info-->
																			<div class="d-flex flex-column justify-content-center">
																				<a href="" class="mb-1 text-gray-800 text-hover-primary">Brian Cox</a>
																				<div class="fw-semibold fs-6 text-gray-500">brian@exchange.com</div>
																			</div>
																			<!--end::Info-->
																		</div>
																		<!--end::User-->
																	</td>
																	<td>Jul 25, 2026</td>
																	<td>$972.00</td>
																	<td>
																		<span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-light btn-sm">View</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<!--begin::User-->
																		<div class="d-flex align-items-center">
																			<!--begin::Wrapper-->
																			<div class="me-5 position-relative">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-35px symbol-circle">
																					<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
																				</div>
																				<!--end::Avatar-->
																				<!--begin::Online-->
																				<div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
																				<!--end::Online-->
																			</div>
																			<!--end::Wrapper-->
																			<!--begin::Info-->
																			<div class="d-flex flex-column justify-content-center">
																				<a href="" class="mb-1 text-gray-800 text-hover-primary">Mikaela Collins</a>
																				<div class="fw-semibold fs-6 text-gray-500">mik@pex.com</div>
																			</div>
																			<!--end::Info-->
																		</div>
																		<!--end::User-->
																	</td>
																	<td>Jun 24, 2026</td>
																	<td>$541.00</td>
																	<td>
																		<span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-light btn-sm">View</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<!--begin::User-->
																		<div class="d-flex align-items-center">
																			<!--begin::Wrapper-->
																			<div class="me-5 position-relative">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-35px symbol-circle">
																					<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
																				</div>
																				<!--end::Avatar-->
																			</div>
																			<!--end::Wrapper-->
																			<!--begin::Info-->
																			<div class="d-flex flex-column justify-content-center">
																				<a href="" class="mb-1 text-gray-800 text-hover-primary">Francis Mitcham</a>
																				<div class="fw-semibold fs-6 text-gray-500">f.mit@kpmg.com</div>
																			</div>
																			<!--end::Info-->
																		</div>
																		<!--end::User-->
																	</td>
																	<td>Feb 21, 2026</td>
																	<td>$744.00</td>
																	<td>
																		<span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-light btn-sm">View</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<!--begin::User-->
																		<div class="d-flex align-items-center">
																			<!--begin::Wrapper-->
																			<div class="me-5 position-relative">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-35px symbol-circle">
																					<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
																				</div>
																				<!--end::Avatar-->
																				<!--begin::Online-->
																				<div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
																				<!--end::Online-->
																			</div>
																			<!--end::Wrapper-->
																			<!--begin::Info-->
																			<div class="d-flex flex-column justify-content-center">
																				<a href="" class="mb-1 text-gray-800 text-hover-primary">Olivia Wild</a>
																				<div class="fw-semibold fs-6 text-gray-500">olivia@corpmail.com</div>
																			</div>
																			<!--end::Info-->
																		</div>
																		<!--end::User-->
																	</td>
																	<td>Sep 22, 2026</td>
																	<td>$508.00</td>
																	<td>
																		<span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-light btn-sm">View</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<!--begin::User-->
																		<div class="d-flex align-items-center">
																			<!--begin::Wrapper-->
																			<div class="me-5 position-relative">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-35px symbol-circle">
																					<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
																				</div>
																				<!--end::Avatar-->
																				<!--begin::Online-->
																				<div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
																				<!--end::Online-->
																			</div>
																			<!--end::Wrapper-->
																			<!--begin::Info-->
																			<div class="d-flex flex-column justify-content-center">
																				<a href="" class="mb-1 text-gray-800 text-hover-primary">Neil Owen</a>
																				<div class="fw-semibold fs-6 text-gray-500">owen.neil@gmail.com</div>
																			</div>
																			<!--end::Info-->
																		</div>
																		<!--end::User-->
																	</td>
																	<td>May 05, 2026</td>
																	<td>$955.00</td>
																	<td>
																		<span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-light btn-sm">View</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<!--begin::User-->
																		<div class="d-flex align-items-center">
																			<!--begin::Wrapper-->
																			<div class="me-5 position-relative">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-35px symbol-circle">
																					<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
																				</div>
																				<!--end::Avatar-->
																			</div>
																			<!--end::Wrapper-->
																			<!--begin::Info-->
																			<div class="d-flex flex-column justify-content-center">
																				<a href="" class="mb-1 text-gray-800 text-hover-primary">Dan Wilson</a>
																				<div class="fw-semibold fs-6 text-gray-500">dam@consilting.com</div>
																			</div>
																			<!--end::Info-->
																		</div>
																		<!--end::User-->
																	</td>
																	<td>Sep 22, 2026</td>
																	<td>$956.00</td>
																	<td>
																		<span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-light btn-sm">View</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<!--begin::User-->
																		<div class="d-flex align-items-center">
																			<!--begin::Wrapper-->
																			<div class="me-5 position-relative">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-35px symbol-circle">
																					<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
																				</div>
																				<!--end::Avatar-->
																				<!--begin::Online-->
																				<div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
																				<!--end::Online-->
																			</div>
																			<!--end::Wrapper-->
																			<!--begin::Info-->
																			<div class="d-flex flex-column justify-content-center">
																				<a href="" class="mb-1 text-gray-800 text-hover-primary">Emma Bold</a>
																				<div class="fw-semibold fs-6 text-gray-500">emma@intenso.com</div>
																			</div>
																			<!--end::Info-->
																		</div>
																		<!--end::User-->
																	</td>
																	<td>Mar 10, 2026</td>
																	<td>$898.00</td>
																	<td>
																		<span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-light btn-sm">View</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<!--begin::User-->
																		<div class="d-flex align-items-center">
																			<!--begin::Wrapper-->
																			<div class="me-5 position-relative">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-35px symbol-circle">
																					<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
																				</div>
																				<!--end::Avatar-->
																			</div>
																			<!--end::Wrapper-->
																			<!--begin::Info-->
																			<div class="d-flex flex-column justify-content-center">
																				<a href="" class="mb-1 text-gray-800 text-hover-primary">Ana Crown</a>
																				<div class="fw-semibold fs-6 text-gray-500">ana.cf@limtel.com</div>
																			</div>
																			<!--end::Info-->
																		</div>
																		<!--end::User-->
																	</td>
																	<td>Jul 25, 2026</td>
																	<td>$726.00</td>
																	<td>
																		<span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-light btn-sm">View</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<!--begin::User-->
																		<div class="d-flex align-items-center">
																			<!--begin::Wrapper-->
																			<div class="me-5 position-relative">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-35px symbol-circle">
																					<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
																				</div>
																				<!--end::Avatar-->
																				<!--begin::Online-->
																				<div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
																				<!--end::Online-->
																			</div>
																			<!--end::Wrapper-->
																			<!--begin::Info-->
																			<div class="d-flex flex-column justify-content-center">
																				<a href="" class="mb-1 text-gray-800 text-hover-primary">Robert Doe</a>
																				<div class="fw-semibold fs-6 text-gray-500">robert@benko.com</div>
																			</div>
																			<!--end::Info-->
																		</div>
																		<!--end::User-->
																	</td>
																	<td>Nov 10, 2026</td>
																	<td>$927.00</td>
																	<td>
																		<span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-light btn-sm">View</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<!--begin::User-->
																		<div class="d-flex align-items-center">
																			<!--begin::Wrapper-->
																			<div class="me-5 position-relative">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-35px symbol-circle">
																					<img alt="Pic" src="assets/media/avatars/300-13.jpg" />
																				</div>
																				<!--end::Avatar-->
																			</div>
																			<!--end::Wrapper-->
																			<!--begin::Info-->
																			<div class="d-flex flex-column justify-content-center">
																				<a href="" class="mb-1 text-gray-800 text-hover-primary">John Miller</a>
																				<div class="fw-semibold fs-6 text-gray-500">miller@mapple.com</div>
																			</div>
																			<!--end::Info-->
																		</div>
																		<!--end::User-->
																	</td>
																	<td>Aug 19, 2026</td>
																	<td>$537.00</td>
																	<td>
																		<span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-light btn-sm">View</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<!--begin::User-->
																		<div class="d-flex align-items-center">
																			<!--begin::Wrapper-->
																			<div class="me-5 position-relative">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-35px symbol-circle">
																					<span class="symbol-label bg-light-success text-success fw-semibold">L</span>
																				</div>
																				<!--end::Avatar-->
																				<!--begin::Online-->
																				<div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
																				<!--end::Online-->
																			</div>
																			<!--end::Wrapper-->
																			<!--begin::Info-->
																			<div class="d-flex flex-column justify-content-center">
																				<a href="" class="mb-1 text-gray-800 text-hover-primary">Lucy Kunic</a>
																				<div class="fw-semibold fs-6 text-gray-500">lucy.m@fentech.com</div>
																			</div>
																			<!--end::Info-->
																		</div>
																		<!--end::User-->
																	</td>
																	<td>Sep 22, 2026</td>
																	<td>$951.00</td>
																	<td>
																		<span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-light btn-sm">View</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<!--begin::User-->
																		<div class="d-flex align-items-center">
																			<!--begin::Wrapper-->
																			<div class="me-5 position-relative">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-35px symbol-circle">
																					<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
																				</div>
																				<!--end::Avatar-->
																				<!--begin::Online-->
																				<div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
																				<!--end::Online-->
																			</div>
																			<!--end::Wrapper-->
																			<!--begin::Info-->
																			<div class="d-flex flex-column justify-content-center">
																				<a href="" class="mb-1 text-gray-800 text-hover-primary">Ethan Wilder</a>
																				<div class="fw-semibold fs-6 text-gray-500">ethan@loop.com.au</div>
																			</div>
																			<!--end::Info-->
																		</div>
																		<!--end::User-->
																	</td>
																	<td>Oct 25, 2026</td>
																	<td>$604.00</td>
																	<td>
																		<span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-light btn-sm">View</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<!--begin::User-->
																		<div class="d-flex align-items-center">
																			<!--begin::Wrapper-->
																			<div class="me-5 position-relative">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-35px symbol-circle">
																					<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
																				</div>
																				<!--end::Avatar-->
																			</div>
																			<!--end::Wrapper-->
																			<!--begin::Info-->
																			<div class="d-flex flex-column justify-content-center">
																				<a href="" class="mb-1 text-gray-800 text-hover-primary">Francis Mitcham</a>
																				<div class="fw-semibold fs-6 text-gray-500">f.mit@kpmg.com</div>
																			</div>
																			<!--end::Info-->
																		</div>
																		<!--end::User-->
																	</td>
																	<td>Apr 15, 2026</td>
																	<td>$589.00</td>
																	<td>
																		<span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-light btn-sm">View</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<!--begin::User-->
																		<div class="d-flex align-items-center">
																			<!--begin::Wrapper-->
																			<div class="me-5 position-relative">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-35px symbol-circle">
																					<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
																				</div>
																				<!--end::Avatar-->
																				<!--begin::Online-->
																				<div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
																				<!--end::Online-->
																			</div>
																			<!--end::Wrapper-->
																			<!--begin::Info-->
																			<div class="d-flex flex-column justify-content-center">
																				<a href="" class="mb-1 text-gray-800 text-hover-primary">Robert Doe</a>
																				<div class="fw-semibold fs-6 text-gray-500">robert@benko.com</div>
																			</div>
																			<!--end::Info-->
																		</div>
																		<!--end::User-->
																	</td>
																	<td>Apr 15, 2026</td>
																	<td>$705.00</td>
																	<td>
																		<span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-light btn-sm">View</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<!--begin::User-->
																		<div class="d-flex align-items-center">
																			<!--begin::Wrapper-->
																			<div class="me-5 position-relative">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-35px symbol-circle">
																					<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
																				</div>
																				<!--end::Avatar-->
																			</div>
																			<!--end::Wrapper-->
																			<!--begin::Info-->
																			<div class="d-flex flex-column justify-content-center">
																				<a href="" class="mb-1 text-gray-800 text-hover-primary">Francis Mitcham</a>
																				<div class="fw-semibold fs-6 text-gray-500">f.mit@kpmg.com</div>
																			</div>
																			<!--end::Info-->
																		</div>
																		<!--end::User-->
																	</td>
																	<td>Jun 24, 2026</td>
																	<td>$628.00</td>
																	<td>
																		<span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-light btn-sm">View</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<!--begin::User-->
																		<div class="d-flex align-items-center">
																			<!--begin::Wrapper-->
																			<div class="me-5 position-relative">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-35px symbol-circle">
																					<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
																				</div>
																				<!--end::Avatar-->
																			</div>
																			<!--end::Wrapper-->
																			<!--begin::Info-->
																			<div class="d-flex flex-column justify-content-center">
																				<a href="" class="mb-1 text-gray-800 text-hover-primary">Ana Crown</a>
																				<div class="fw-semibold fs-6 text-gray-500">ana.cf@limtel.com</div>
																			</div>
																			<!--end::Info-->
																		</div>
																		<!--end::User-->
																	</td>
																	<td>Aug 19, 2026</td>
																	<td>$420.00</td>
																	<td>
																		<span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-light btn-sm">View</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<!--begin::User-->
																		<div class="d-flex align-items-center">
																			<!--begin::Wrapper-->
																			<div class="me-5 position-relative">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-35px symbol-circle">
																					<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
																				</div>
																				<!--end::Avatar-->
																				<!--begin::Online-->
																				<div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
																				<!--end::Online-->
																			</div>
																			<!--end::Wrapper-->
																			<!--begin::Info-->
																			<div class="d-flex flex-column justify-content-center">
																				<a href="" class="mb-1 text-gray-800 text-hover-primary">Robert Doe</a>
																				<div class="fw-semibold fs-6 text-gray-500">robert@benko.com</div>
																			</div>
																			<!--end::Info-->
																		</div>
																		<!--end::User-->
																	</td>
																	<td>Feb 21, 2026</td>
																	<td>$590.00</td>
																	<td>
																		<span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-light btn-sm">View</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<!--begin::User-->
																		<div class="d-flex align-items-center">
																			<!--begin::Wrapper-->
																			<div class="me-5 position-relative">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-35px symbol-circle">
																					<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
																				</div>
																				<!--end::Avatar-->
																				<!--begin::Online-->
																				<div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
																				<!--end::Online-->
																			</div>
																			<!--end::Wrapper-->
																			<!--begin::Info-->
																			<div class="d-flex flex-column justify-content-center">
																				<a href="" class="mb-1 text-gray-800 text-hover-primary">Neil Owen</a>
																				<div class="fw-semibold fs-6 text-gray-500">owen.neil@gmail.com</div>
																			</div>
																			<!--end::Info-->
																		</div>
																		<!--end::User-->
																	</td>
																	<td>Nov 10, 2026</td>
																	<td>$716.00</td>
																	<td>
																		<span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-light btn-sm">View</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<!--begin::User-->
																		<div class="d-flex align-items-center">
																			<!--begin::Wrapper-->
																			<div class="me-5 position-relative">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-35px symbol-circle">
																					<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
																				</div>
																				<!--end::Avatar-->
																				<!--begin::Online-->
																				<div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
																				<!--end::Online-->
																			</div>
																			<!--end::Wrapper-->
																			<!--begin::Info-->
																			<div class="d-flex flex-column justify-content-center">
																				<a href="" class="mb-1 text-gray-800 text-hover-primary">Robert Doe</a>
																				<div class="fw-semibold fs-6 text-gray-500">robert@benko.com</div>
																			</div>
																			<!--end::Info-->
																		</div>
																		<!--end::User-->
																	</td>
																	<td>Oct 25, 2026</td>
																	<td>$626.00</td>
																	<td>
																		<span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-light btn-sm">View</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<!--begin::User-->
																		<div class="d-flex align-items-center">
																			<!--begin::Wrapper-->
																			<div class="me-5 position-relative">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-35px symbol-circle">
																					<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
																				</div>
																				<!--end::Avatar-->
																				<!--begin::Online-->
																				<div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
																				<!--end::Online-->
																			</div>
																			<!--end::Wrapper-->
																			<!--begin::Info-->
																			<div class="d-flex flex-column justify-content-center">
																				<a href="" class="mb-1 text-gray-800 text-hover-primary">Ethan Wilder</a>
																				<div class="fw-semibold fs-6 text-gray-500">ethan@loop.com.au</div>
																			</div>
																			<!--end::Info-->
																		</div>
																		<!--end::User-->
																	</td>
																	<td>Nov 10, 2026</td>
																	<td>$948.00</td>
																	<td>
																		<span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-light btn-sm">View</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<!--begin::User-->
																		<div class="d-flex align-items-center">
																			<!--begin::Wrapper-->
																			<div class="me-5 position-relative">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-35px symbol-circle">
																					<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
																				</div>
																				<!--end::Avatar-->
																			</div>
																			<!--end::Wrapper-->
																			<!--begin::Info-->
																			<div class="d-flex flex-column justify-content-center">
																				<a href="" class="mb-1 text-gray-800 text-hover-primary">Emma Smith</a>
																				<div class="fw-semibold fs-6 text-gray-500">smith@kpmg.com</div>
																			</div>
																			<!--end::Info-->
																		</div>
																		<!--end::User-->
																	</td>
																	<td>Nov 10, 2026</td>
																	<td>$747.00</td>
																	<td>
																		<span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-light btn-sm">View</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<!--begin::User-->
																		<div class="d-flex align-items-center">
																			<!--begin::Wrapper-->
																			<div class="me-5 position-relative">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-35px symbol-circle">
																					<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
																				</div>
																				<!--end::Avatar-->
																			</div>
																			<!--end::Wrapper-->
																			<!--begin::Info-->
																			<div class="d-flex flex-column justify-content-center">
																				<a href="" class="mb-1 text-gray-800 text-hover-primary">Max Smith</a>
																				<div class="fw-semibold fs-6 text-gray-500">max@kt.com</div>
																			</div>
																			<!--end::Info-->
																		</div>
																		<!--end::User-->
																	</td>
																	<td>Aug 19, 2026</td>
																	<td>$847.00</td>
																	<td>
																		<span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-light btn-sm">View</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<!--begin::User-->
																		<div class="d-flex align-items-center">
																			<!--begin::Wrapper-->
																			<div class="me-5 position-relative">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-35px symbol-circle">
																					<span class="symbol-label bg-light-success text-success fw-semibold">L</span>
																				</div>
																				<!--end::Avatar-->
																				<!--begin::Online-->
																				<div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
																				<!--end::Online-->
																			</div>
																			<!--end::Wrapper-->
																			<!--begin::Info-->
																			<div class="d-flex flex-column justify-content-center">
																				<a href="" class="mb-1 text-gray-800 text-hover-primary">Lucy Kunic</a>
																				<div class="fw-semibold fs-6 text-gray-500">lucy.m@fentech.com</div>
																			</div>
																			<!--end::Info-->
																		</div>
																		<!--end::User-->
																	</td>
																	<td>Nov 10, 2026</td>
																	<td>$836.00</td>
																	<td>
																		<span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-light btn-sm">View</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<!--begin::User-->
																		<div class="d-flex align-items-center">
																			<!--begin::Wrapper-->
																			<div class="me-5 position-relative">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-35px symbol-circle">
																					<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
																				</div>
																				<!--end::Avatar-->
																			</div>
																			<!--end::Wrapper-->
																			<!--begin::Info-->
																			<div class="d-flex flex-column justify-content-center">
																				<a href="" class="mb-1 text-gray-800 text-hover-primary">Ana Crown</a>
																				<div class="fw-semibold fs-6 text-gray-500">ana.cf@limtel.com</div>
																			</div>
																			<!--end::Info-->
																		</div>
																		<!--end::User-->
																	</td>
																	<td>Jun 20, 2026</td>
																	<td>$644.00</td>
																	<td>
																		<span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-light btn-sm">View</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<!--begin::User-->
																		<div class="d-flex align-items-center">
																			<!--begin::Wrapper-->
																			<div class="me-5 position-relative">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-35px symbol-circle">
																					<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
																				</div>
																				<!--end::Avatar-->
																				<!--begin::Online-->
																				<div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
																				<!--end::Online-->
																			</div>
																			<!--end::Wrapper-->
																			<!--begin::Info-->
																			<div class="d-flex flex-column justify-content-center">
																				<a href="" class="mb-1 text-gray-800 text-hover-primary">Emma Bold</a>
																				<div class="fw-semibold fs-6 text-gray-500">emma@intenso.com</div>
																			</div>
																			<!--end::Info-->
																		</div>
																		<!--end::User-->
																	</td>
																	<td>Jun 20, 2026</td>
																	<td>$546.00</td>
																	<td>
																		<span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-light btn-sm">View</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<!--begin::User-->
																		<div class="d-flex align-items-center">
																			<!--begin::Wrapper-->
																			<div class="me-5 position-relative">
																				<!--begin::Avatar-->
																				<div class="symbol symbol-35px symbol-circle">
																					<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
																				</div>
																				<!--end::Avatar-->
																				<!--begin::Online-->
																				<div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
																				<!--end::Online-->
																			</div>
																			<!--end::Wrapper-->
																			<!--begin::Info-->
																			<div class="d-flex flex-column justify-content-center">
																				<a href="" class="mb-1 text-gray-800 text-hover-primary">Olivia Wild</a>
																				<div class="fw-semibold fs-6 text-gray-500">olivia@corpmail.com</div>
																			</div>
																			<!--end::Info-->
																		</div>
																		<!--end::User-->
																	</td>
																	<td>May 05, 2026</td>
																	<td>$638.00</td>
																	<td>
																		<span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-light btn-sm">View</a>
																	</td>
																</tr>
															</tbody>
														</table>
														<!--end::Table-->
													</div>
													<!--end::Table container-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card-->
										</div>
										<!--end::Tab pane-->
									</div>
									<!--end::Tab Content-->
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
							<a href="#" class="link-primary fw-bold">Pricing Guidelines</a>.</div>
						</div>
						<!--end::Heading-->
						<!--begin::Plans-->
						<div class="d-flex flex-column">
							<!--begin::Nav group-->
							<div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
								<button class="btn btn-color-gray-500 btn-active btn-active-secondary px-6 py-3 me-2 active" data-kt-plan="month">Monthly</button>
								<button class="btn btn-color-gray-500 btn-active btn-active-secondary px-6 py-3" data-kt-plan="annual">Annual</button>
							</div>
							<!--end::Nav group-->
							<!--begin::Row-->
							<div class="row mt-10">
								<!--begin::Col-->
								<div class="col-lg-6 mb-10 mb-lg-0">
									<!--begin::Tabs-->
									<div class="nav flex-column">
										<!--begin::Tab link-->
										<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
											<!--end::Description-->
											<div class="d-flex align-items-center me-2">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
													<input class="form-check-input" type="radio" name="plan" checked="checked" value="startup" />
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
												<span class="fs-3x fw-bold" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">39</span>
												<span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
											</div>
											<!--end::Price-->
										</label>
										<!--end::Tab link-->
										<!--begin::Tab link-->
										<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">
											<!--end::Description-->
											<div class="d-flex align-items-center me-2">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
													<input class="form-check-input" type="radio" name="plan" value="advanced" />
												</div>
												<!--end::Radio-->
												<!--begin::Info-->
												<div class="flex-grow-1">
													<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Advanced</div>
													<div class="fw-semibold opacity-75">Best for 100+ team size</div>
												</div>
												<!--end::Info-->
											</div>
											<!--end::Description-->
											<!--begin::Price-->
											<div class="ms-5">
												<span class="mb-2">$</span>
												<span class="fs-3x fw-bold" data-kt-plan-price-month="339" data-kt-plan-price-annual="3399">339</span>
												<span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
											</div>
											<!--end::Price-->
										</label>
										<!--end::Tab link-->
										<!--begin::Tab link-->
										<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">
											<!--end::Description-->
											<div class="d-flex align-items-center me-2">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
													<input class="form-check-input" type="radio" name="plan" value="enterprise" />
												</div>
												<!--end::Radio-->
												<!--begin::Info-->
												<div class="flex-grow-1">
													<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Enterprise
													<span class="badge badge-light-success ms-2 py-2 px-3 fs-7">Popular</span></div>
													<div class="fw-semibold opacity-75">Best value for 1000+ team</div>
												</div>
												<!--end::Info-->
											</div>
											<!--end::Description-->
											<!--begin::Price-->
											<div class="ms-5">
												<span class="mb-2">$</span>
												<span class="fs-3x fw-bold" data-kt-plan-price-month="999" data-kt-plan-price-annual="9999">999</span>
												<span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
											</div>
											<!--end::Price-->
										</label>
										<!--end::Tab link-->
										<!--begin::Tab link-->
										<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_custom">
											<!--end::Description-->
											<div class="d-flex align-items-center me-2">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
													<input class="form-check-input" type="radio" name="plan" value="custom" />
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
												<div class="text-muted fw-semibold">Optimal for 10+ team size and new startup</div>
											</div>
											<!--end::Heading-->
											<!--begin::Body-->
											<div class="pt-1">
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
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
													<span class="fw-semibold fs-5 text-muted flex-grow-1">Accounting Module</span>
													<i class="ki-duotone ki-cross-circle fs-1">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-muted flex-grow-1">Network Platform</span>
													<i class="ki-duotone ki-cross-circle fs-1">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center">
													<span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud Space</span>
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
												<div class="text-muted fw-semibold">Optimal for 100+ team size and grown company</div>
											</div>
											<!--end::Heading-->
											<!--begin::Body-->
											<div class="pt-1">
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-muted flex-grow-1">Network Platform</span>
													<i class="ki-duotone ki-cross-circle fs-1">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center">
													<span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud Space</span>
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
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network Platform</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud Space</span>
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
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Users</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Project Integrations</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network Platform</span>
													<i class="ki-duotone ki-check-circle fs-1 text-success">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud Space</span>
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
						<div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_modal_create_app_stepper">
							<!--begin::Aside-->
							<div class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
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
													<span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
														<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span>
												</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="text" class="form-control form-control-lg form-control-solid" name="name" placeholder="" value="" />
												<!--end::Input-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-5 fw-semibold mb-4">
													<span class="required">Category</span>
													<span class="ms-1" data-bs-toggle="tooltip" title="Select your app category">
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
																<span class="fs-7 text-muted">Creating a clear text structure is just one SEO</span>
															</span>
															<!--end:Info-->
														</span>
														<!--end:Label-->
														<!--begin:Input-->
														<span class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="radio" name="category" value="1" />
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
																<span class="fs-7 text-muted">Creating a clear text structure is just one aspect</span>
															</span>
															<!--end:Info-->
														</span>
														<!--end:Label-->
														<!--begin:Input-->
														<span class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="radio" name="category" value="2" />
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
																<span class="fs-7 text-muted">Creating a clear text structure copywriting</span>
															</span>
															<!--end:Info-->
														</span>
														<!--end:Label-->
														<!--begin:Input-->
														<span class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="radio" name="category" value="3" />
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
													<span class="ms-1" data-bs-toggle="tooltip" title="Specify your apps framework">
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
														<input class="form-check-input" type="radio" checked="checked" name="framework" value="1" />
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
															<span class="fs-7 text-muted">Robust and flexible app framework</span>
														</span>
														<!--end:Info-->
													</span>
													<!--end:Label-->
													<!--begin:Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="framework" value="2" />
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
														<input class="form-check-input" type="radio" name="framework" value="3" />
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
															<span class="fs-7 text-muted">Lightweight and responsive framework</span>
														</span>
														<!--end:Info-->
													</span>
													<!--end:Label-->
													<!--begin:Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="framework" value="4" />
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
												<input type="text" class="form-control form-control-lg form-control-solid" name="dbname" placeholder="" value="master_db" />
												<!--end::Input-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-5 fw-semibold mb-4">
													<span class="required">Select Database Engine</span>
													<span class="ms-1" data-bs-toggle="tooltip" title="Select your app database engine">
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
														<input class="form-check-input" type="radio" name="dbengine" checked="checked" value="1" />
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
															<span class="fs-7 text-muted">Google based app data management</span>
														</span>
														<!--end::Info-->
													</span>
													<!--end::Label-->
													<!--begin::Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="dbengine" value="2" />
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
														<input class="form-check-input" type="radio" name="dbengine" value="3" />
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
													<span class="ms-1" data-bs-toggle="tooltip" title="Specify a card holder's name">
														<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span>
												</label>
												<!--end::Label-->
												<input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="Max Doe" />
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
													<input type="text" class="form-control form-control-solid" placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111" />
													<!--end::Input-->
													<!--begin::Card logos-->
													<div class="position-absolute translate-middle-y top-50 end-0 me-5">
														<img src="assets/media/svg/card-logos/visa.svg" alt="" class="h-25px" />
														<img src="assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px" />
														<img src="assets/media/svg/card-logos/american-express.svg" alt="" class="h-25px" />
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
													<label class="required fs-6 fw-semibold form-label mb-2">Expiration Date</label>
													<!--end::Label-->
													<!--begin::Row-->
													<div class="row fv-row">
														<!--begin::Col-->
														<div class="col-6">
															<select name="card_expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Month">
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
															<select name="card_expiry_year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Year">
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
														<span class="ms-1" data-bs-toggle="tooltip" title="Enter a card CVV code">
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
														<input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
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
													<label class="fs-6 fw-semibold form-label">Save Card for further billing?</label>
													<div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
												</div>
												<!--end::Label-->
												<!--begin::Switch-->
												<label class="form-check form-switch form-check-custom form-check-solid">
													<input class="form-check-input" type="checkbox" value="1" checked="checked" />
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
											<div class="text-muted fw-semibold fs-3">Submit your app to kickstart your project.</div>
											<!--end::Description-->
											<!--begin::Illustration-->
											<div class="text-center px-4 py-15">
												<img src="assets/media/illustrations/sketchy-1/9.png" alt="" class="mw-100 mh-300px" />
											</div>
											<!--end::Illustration-->
										</div>
									</div>
									<!--end::Step 5-->
									<!--begin::Actions-->
									<div class="d-flex flex-stack pt-10">
										<!--begin::Wrapper-->
										<div class="me-2">
											<button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
											<i class="ki-duotone ki-arrow-left fs-3 me-1">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>Back</button>
										</div>
										<!--end::Wrapper-->
										<!--begin::Wrapper-->
										<div>
											<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
												<span class="indicator-label">Submit
												<i class="ki-duotone ki-arrow-right fs-3 ms-2 me-0">
													<span class="path1"></span>
													<span class="path2"></span>
												</i></span>
												<span class="indicator-progress">Please wait...
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
											</button>
											<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
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
<script src="assets/js/custom/utilities/search/horizontal.js"></script>
<script src="assets/js/custom/apps/projects/users/users.js"></script>
<script src="assets/js/widgets.bundle.js"></script>
<script src="assets/js/custom/widgets.js"></script>
<script src="assets/js/custom/apps/chat/chat.js"></script>
<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="assets/js/custom/utilities/modals/create-app.js"></script>
@endsection
