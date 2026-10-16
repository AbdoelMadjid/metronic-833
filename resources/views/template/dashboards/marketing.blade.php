@extends('layouts.metronic')

@section('body_attributes')
id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default"
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
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Marketing Dashboard</h1>
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
										<a href="{{ route('metronic.apps.customers.view') }}" class="btn btn-sm fw-bold btn-secondary">Add Customer</a>
										<!--end::Secondary button-->
										<!--begin::Primary button-->
										<a href="#" class="btn btn-sm fw-bold btn-primary">New Campaign</a>
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
									<!--begin::Row-->
									<div class="row gy-5 gx-xl-10">
										<!--begin::Col-->
										<div class="col-xxl-6">
											<!--begin::Row-->
											<div class="row gx-5 gx-xl-10">
												<!--begin::Col-->
												<div class="col-sm-6 mb-5 mb-xl-10">
													<!--begin::List widget 1-->
													<div class="card card-flush h-lg-100">
														<!--begin::Header-->
														<div class="card-header pt-5">
															<!--begin::Title-->
															<h3 class="card-title align-items-start flex-column">
																<span class="card-label fw-bold text-gray-900">Highlights</span>
																<span class="text-gray-500 mt-1 fw-semibold fs-6">Latest social statistics</span>
															</h3>
															<!--end::Title-->
															<!--begin::Toolbar-->
															<div class="card-toolbar">
																<!--begin::Menu-->
																<button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
																	<i class="ki-duotone ki-dots-square fs-1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																		<span class="path4"></span>
																	</i>
																</button>
																<!--begin::Menu 2-->
																<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
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
																	<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
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
														<div class="card-body pt-5">
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Section-->
																<div class="text-gray-700 fw-semibold fs-6 me-2">Avg. Client Rating</div>
																<!--end::Section-->
																<!--begin::Statistics-->
																<div class="d-flex align-items-senter">
																	<i class="ki-duotone ki-arrow-up-right fs-2 text-success me-2">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																	<!--begin::Number-->
																	<span class="text-gray-900 fw-bolder fs-6">7.8</span>
																	<!--end::Number-->
																	<span class="text-gray-500 fw-bold fs-6">/10</span>
																</div>
																<!--end::Statistics-->
															</div>
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed my-3"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Section-->
																<div class="text-gray-700 fw-semibold fs-6 me-2">Instagram Followers</div>
																<!--end::Section-->
																<!--begin::Statistics-->
																<div class="d-flex align-items-senter">
																	<i class="ki-duotone ki-arrow-down-right fs-2 text-danger me-2">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																	<!--begin::Number-->
																	<span class="text-gray-900 fw-bolder fs-6">730k</span>
																	<!--end::Number-->
																</div>
																<!--end::Statistics-->
															</div>
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed my-3"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Section-->
																<div class="text-gray-700 fw-semibold fs-6 me-2">Google Ads CPC</div>
																<!--end::Section-->
																<!--begin::Statistics-->
																<div class="d-flex align-items-senter">
																	<i class="ki-duotone ki-arrow-up-right fs-2 text-success me-2">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																	<!--begin::Number-->
																	<span class="text-gray-900 fw-bolder fs-6">$2.09</span>
																	<!--end::Number-->
																</div>
																<!--end::Statistics-->
															</div>
															<!--end::Item-->
														</div>
														<!--end::Body-->
													</div>
													<!--end::LIst widget 1-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-sm-6 mb-5 mb-xl-10">
													<!--begin::List widget 2-->
													<div class="card card-flush h-lg-100">
														<!--begin::Header-->
														<div class="card-header pt-5">
															<!--begin::Title-->
															<h3 class="card-title align-items-start flex-column">
																<span class="card-label fw-bold text-gray-900">External Links</span>
																<span class="text-gray-500 mt-1 fw-semibold fs-6">Most used resources</span>
															</h3>
															<!--end::Title-->
															<!--begin::Toolbar-->
															<div class="card-toolbar">
																<!--begin::Menu-->
																<button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
																	<i class="ki-duotone ki-dots-square fs-1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																		<span class="path4"></span>
																	</i>
																</button>
																<!--begin::Menu 3-->
																<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
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
																		<span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
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
																	<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
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
																					<label class="form-check form-switch form-check-custom form-check-solid">
																						<!--begin::Input-->
																						<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
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
															<!--end::Toolbar-->
														</div>
														<!--end::Header-->
														<!--begin::Body-->
														<div class="card-body pt-5">
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Title-->
																<a href="#" class="text-primary opacity-75-hover fs-6 fw-semibold">Google Analytics</a>
																<!--end::Title-->
																<!--begin::Action-->
																<button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-primary justify-content-end">
																	<i class="ki-duotone ki-exit-right-corner fs-2">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</button>
																<!--end::Action-->
															</div>
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed my-3"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Title-->
																<a href="#" class="text-primary opacity-75-hover fs-6 fw-semibold">Facebook Ads</a>
																<!--end::Title-->
																<!--begin::Action-->
																<button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-primary justify-content-end">
																	<i class="ki-duotone ki-exit-right-corner fs-2">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</button>
																<!--end::Action-->
															</div>
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed my-3"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Title-->
																<a href="#" class="text-primary opacity-75-hover fs-6 fw-semibold">Seranking</a>
																<!--end::Title-->
																<!--begin::Action-->
																<button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-primary justify-content-end">
																	<i class="ki-duotone ki-exit-right-corner fs-2">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</button>
																<!--end::Action-->
															</div>
															<!--end::Item-->
														</div>
														<!--end::Body-->
													</div>
													<!--end::List widget 2-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
											<!--begin::Table widget 1-->
											<div class="card card-flush mb-xxl-10">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-900">Featured Campaigns</span>
														<span class="text-gray-500 pt-2 fw-semibold fs-6">75% activity growth</span>
													</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<!--begin::Menu-->
														<button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
															<i class="ki-duotone ki-dots-square fs-1 text-gray-500 me-n1">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
															</i>
														</button>
														<!--begin::Menu 2-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
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
															<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
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
												<div class="card-body">
													<!--begin::Nav-->
													<ul class="nav nav-pills nav-pills-custom mb-3">
														<!--begin::Item-->
														<li class="nav-item mb-3 me-3 me-lg-6">
															<!--begin::Link-->
															<a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden active w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_1_tab_1">
																<!--begin::Icon-->
																<div class="nav-icon">
																	<img alt="" src="assets/media/svg/brand-logos/beats-electronics.svg" class="" />
																</div>
																<!--end::Icon-->
																<!--begin::Subtitle-->
																<span class="nav-text text-gray-700 fw-bold fs-6 lh-1">Beats</span>
																<!--end::Subtitle-->
																<!--begin::Bullet-->
																<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
																<!--end::Bullet-->
															</a>
															<!--end::Link-->
														</li>
														<!--end::Item-->
														<!--begin::Item-->
														<li class="nav-item mb-3 me-3 me-lg-6">
															<!--begin::Link-->
															<a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_1_tab_2">
																<!--begin::Icon-->
																<div class="nav-icon">
																	<img alt="Logo" src="assets/media/svg/brand-logos/amazon.svg" class="theme-light-show" />
																	<img alt="Logo" src="assets/media/svg/brand-logos/amazon-dark.svg" class="theme-dark-show" />
																</div>
																<!--end::Icon-->
																<!--begin::Subtitle-->
																<span class="nav-text text-gray-700 fw-bold fs-6 lh-1">Amazon</span>
																<!--end::Subtitle-->
																<!--begin::Bullet-->
																<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
																<!--end::Bullet-->
															</a>
															<!--end::Link-->
														</li>
														<!--end::Item-->
														<!--begin::Item-->
														<li class="nav-item mb-3 me-3 me-lg-6">
															<!--begin::Link-->
															<a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_1_tab_3">
																<!--begin::Icon-->
																<div class="nav-icon">
																	<img alt="" src="assets/media/svg/brand-logos/bp-2.svg" class="" />
																</div>
																<!--end::Icon-->
																<!--begin::Subtitle-->
																<span class="nav-text text-gray-600 fw-bold fs-6 lh-1">BP</span>
																<!--end::Subtitle-->
																<!--begin::Bullet-->
																<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
																<!--end::Bullet-->
															</a>
															<!--end::Link-->
														</li>
														<!--end::Item-->
														<!--begin::Item-->
														<li class="nav-item mb-3 me-3 me-lg-6">
															<!--begin::Link-->
															<a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_1_tab_4">
																<!--begin::Icon-->
																<div class="nav-icon">
																	<img alt="" src="assets/media/svg/brand-logos/slack-icon.svg" class="nav-icon" />
																</div>
																<!--end::Icon-->
																<!--begin::Subtitle-->
																<span class="nav-text text-gray-600 fw-bold fs-6 lh-1">Slack</span>
																<!--end::Subtitle-->
																<!--begin::Bullet-->
																<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
																<!--end::Bullet-->
															</a>
															<!--end::Link-->
														</li>
														<!--end::Item-->
														<!--begin::Item-->
														<li class="nav-item mb-3">
															<!--begin::Link-->
															<a class="nav-link d-flex flex-center overflow-hidden w-80px h-85px" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign" href="#">
																<!--begin::Icon-->
																<div class="nav-icon">
																	<i class="ki-duotone ki-plus-square fs-2hx text-gray-500">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</div>
																<!--end::Icon-->
																<!--begin::Bullet-->
																<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
																<!--end::Bullet-->
															</a>
															<!--end::Link-->
														</li>
														<!--end::Item-->
													</ul>
													<!--end::Nav-->
													<!--begin::Tab Content-->
													<div class="tab-content">
														<!--begin::Tap pane-->
														<div class="tab-pane fade show active" id="kt_stats_widget_1_tab_1">
															<!--begin::Table container-->
															<div class="table-responsive">
																<!--begin::Table-->
																<table class="table align-middle gs-0 gy-4 my-0">
																	<!--begin::Table head-->
																	<thead>
																		<tr class="fs-7 fw-bold text-gray-500">
																			<th class="p-0 min-w-150px d-block pt-3">EMAIL TITLE</th>
																			<th class="text-end min-w-140px pt-3">STATUS</th>
																			<th class="pe-0 text-end min-w-120px pt-3">CONVERSION</th>
																		</tr>
																	</thead>
																	<!--end::Table head-->
																	<!--begin::Table body-->
																	<tbody>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Best Rated Headsets of 2022</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-success fs-7 fw-bold">Sent</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">18%(6.4k)</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">New Model BS 2000 X</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-primary fs-7 fw-bold">In Draft</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">0.01%(1)</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">2022 Spring Conference by Beats</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-success fs-7 fw-bold">Sent</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">37%(247)</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Best Headsets Giveaway</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-warning fs-7 fw-bold">In Queue</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">0%(0)</span>
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
														<div class="tab-pane fade" id="kt_stats_widget_1_tab_2">
															<!--begin::Table container-->
															<div class="table-responsive">
																<!--begin::Table-->
																<table class="table align-middle gs-0 gy-4 my-0">
																	<!--begin::Table head-->
																	<thead>
																		<tr class="fs-7 fw-bold text-gray-500">
																			<th class="p-0 min-w-150px d-block pt-3">EMAIL TITLE</th>
																			<th class="text-end min-w-140px pt-3">STATUS</th>
																			<th class="pe-0 text-end min-w-120px pt-3">CONVERSION</th>
																		</tr>
																	</thead>
																	<!--end::Table head-->
																	<!--begin::Table body-->
																	<tbody>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">2022 Spring Conference by Beats</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-success fs-7 fw-bold">Sent</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">37%(247)</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Best Headsets Giveaway</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-warning fs-7 fw-bold">In Queue</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">0%(0)</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Best Rated Headsets of 2022</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-success fs-7 fw-bold">Sent</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">18%(6.4k)</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">New Model BS 2000 X</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-primary fs-7 fw-bold">In Draft</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">0.01%(1)</span>
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
														<div class="tab-pane fade" id="kt_stats_widget_1_tab_3">
															<!--begin::Table container-->
															<div class="table-responsive">
																<!--begin::Table-->
																<table class="table align-middle gs-0 gy-4 my-0">
																	<!--begin::Table head-->
																	<thead>
																		<tr class="fs-7 fw-bold text-gray-500">
																			<th class="p-0 min-w-150px d-block pt-3">EMAIL TITLE</th>
																			<th class="text-end min-w-140px pt-3">STATUS</th>
																			<th class="pe-0 text-end min-w-120px pt-3">CONVERSION</th>
																		</tr>
																	</thead>
																	<!--end::Table head-->
																	<!--begin::Table body-->
																	<tbody>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">New Model BS 2000 X</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-primary fs-7 fw-bold">In Draft</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">0.01%(1)</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Best Rated Headsets of 2022</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-success fs-7 fw-bold">Sent</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">18%(6.4k)</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">2022 Spring Conference by Beats</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-success fs-7 fw-bold">Sent</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">37%(247)</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Best Headsets Giveaway</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-warning fs-7 fw-bold">In Queue</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">0%(0)</span>
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
														<div class="tab-pane fade" id="kt_stats_widget_1_tab_4">
															<!--begin::Table container-->
															<div class="table-responsive">
																<!--begin::Table-->
																<table class="table align-middle gs-0 gy-4 my-0">
																	<!--begin::Table head-->
																	<thead>
																		<tr class="fs-7 fw-bold text-gray-500">
																			<th class="p-0 min-w-150px d-block pt-3">EMAIL TITLE</th>
																			<th class="text-end min-w-140px pt-3">STATUS</th>
																			<th class="pe-0 text-end min-w-120px pt-3">CONVERSION</th>
																		</tr>
																	</thead>
																	<!--end::Table head-->
																	<!--begin::Table body-->
																	<tbody>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Best Headsets Giveaway</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-warning fs-7 fw-bold">In Queue</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">0%(0)</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Best Headsets Giveaway</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-success fs-7 fw-bold">Sent</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">37%(247)</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Best Rated Headsets of 2022</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-success fs-7 fw-bold">Sent</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">18%(6.4k)</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">New Model BS 2000 X</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-primary fs-7 fw-bold">In Draft</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">0.01%(1)</span>
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
												<!--end: Card Body-->
											</div>
											<!--end::Table widget 1-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xxl-6 mb-5 mb-xl-10">
											<!--begin::Chart widget 8-->
											<div class="card card-flush h-xl-100">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-900">Performance Overview</span>
														<span class="text-gray-500 mt-1 fw-semibold fs-6">Users from all channels</span>
													</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<ul class="nav" id="kt_chart_widget_8_tabs">
															<li class="nav-item">
																<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1" data-bs-toggle="tab" id="kt_chart_widget_8_week_toggle" href="#kt_chart_widget_8_week_tab">Month</a>
															</li>
															<li class="nav-item">
																<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1 active" data-bs-toggle="tab" id="kt_chart_widget_8_month_toggle" href="#kt_chart_widget_8_month_tab">Week</a>
															</li>
														</ul>
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-6">
													<!--begin::Tab content-->
													<div class="tab-content">
														<!--begin::Tab pane-->
														<div class="tab-pane fade" id="kt_chart_widget_8_week_tab" role="tabpanel">
															<!--begin::Statistics-->
															<div class="mb-5">
																<!--begin::Statistics-->
																<div class="d-flex align-items-center mb-2">
																	<span class="fs-1 fw-semibold text-gray-500 me-1 mt-n1">$</span>
																	<span class="fs-3x fw-bold text-gray-800 me-2 lh-1 ls-n2">18,89</span>
																	<span class="badge badge-light-success fs-base">
																	<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>4,8%</span>
																</div>
																<!--end::Statistics-->
																<!--begin::Description-->
																<span class="fs-6 fw-semibold text-gray-500">Avarage cost per interaction</span>
																<!--end::Description-->
															</div>
															<!--end::Statistics-->
															<!--begin::Chart-->
															<div id="kt_chart_widget_8_week_chart" class="ms-n5 min-h-auto" style="height: 425px"></div>
															<!--end::Chart-->
															<!--begin::Items-->
															<div class="d-flex flex-wrap pt-5">
																<!--begin::Item-->
																<div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
																	<!--begin::Item-->
																	<div class="d-flex align-items-center mb-3 mb-sm-6">
																		<!--begin::Bullet-->
																		<span class="bullet bullet-dot bg-primary me-2 h-10px w-10px"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<span class="fw-bold text-gray-600 fs-6">Social Campaigns</span>
																		<!--end::Label-->
																	</div>
																	<!--ed::Item-->
																	<!--begin::Item-->
																	<div class="d-flex align-items-center">
																		<!--begin::Bullet-->
																		<span class="bullet bullet-dot bg-danger me-2 h-10px w-10px"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<span class="fw-bold text-&lt;gray-600 fs-6">Google Ads</span>
																		<!--end::Label-->
																	</div>
																	<!--ed::Item-->
																</div>
																<!--ed::Item-->
																<!--begin::Item-->
																<div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
																	<!--begin::Item-->
																	<div class="d-flex align-items-center mb-3 mb-sm-6">
																		<!--begin::Bullet-->
																		<span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<span class="fw-bold text-gray-600 fs-6">Email Newsletter</span>
																		<!--end::Label-->
																	</div>
																	<!--ed::Item-->
																	<!--begin::Item-->
																	<div class="d-flex align-items-center">
																		<!--begin::Bullet-->
																		<span class="bullet bullet-dot bg-warning me-2 h-10px w-10px"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<span class="fw-bold text-gray-600 fs-6">Courses</span>
																		<!--end::Label-->
																	</div>
																	<!--ed::Item-->
																</div>
																<!--ed::Item-->
																<!--begin::Item-->
																<div class="d-flex flex-column pt-sm-3 pt-6">
																	<!--begin::Item-->
																	<div class="d-flex align-items-center mb-3 mb-sm-6">
																		<!--begin::Bullet-->
																		<span class="bullet bullet-dot bg-info me-2 h-10px w-10px"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<span class="fw-bold text-gray-600 fs-6">TV Campaign</span>
																		<!--end::Label-->
																	</div>
																	<!--ed::Item-->
																	<!--begin::Item-->
																	<div class="d-flex align-items-center">
																		<!--begin::Bullet-->
																		<span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<span class="fw-bold text-gray-600 fs-6">Radio</span>
																		<!--end::Label-->
																	</div>
																	<!--ed::Item-->
																</div>
																<!--ed::Item-->
															</div>
															<!--ed::Items-->
														</div>
														<!--end::Tab pane-->
														<!--begin::Tab pane-->
														<div class="tab-pane fade active show" id="kt_chart_widget_8_month_tab" role="tabpanel">
															<!--begin::Statistics-->
															<div class="mb-5">
																<!--begin::Statistics-->
																<div class="d-flex align-items-center mb-2">
																	<span class="fs-1 fw-semibold text-gray-500 me-1 mt-n1">$</span>
																	<span class="fs-3x fw-bold text-gray-800 me-2 lh-1 ls-n2">8,55</span>
																	<span class="badge badge-light-success fs-base">
																	<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>2.2%</span>
																</div>
																<!--end::Statistics-->
																<!--begin::Description-->
																<span class="fs-6 fw-semibold text-gray-500">Avarage cost per interaction</span>
																<!--end::Description-->
															</div>
															<!--end::Statistics-->
															<!--begin::Chart-->
															<div id="kt_chart_widget_8_month_chart" class="ms-n5 min-h-auto" style="height: 425px"></div>
															<!--end::Chart-->
															<!--begin::Items-->
															<div class="d-flex flex-wrap pt-5">
																<!--begin::Item-->
																<div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
																	<!--begin::Item-->
																	<div class="d-flex align-items-center mb-3 mb-sm-6">
																		<!--begin::Bullet-->
																		<span class="bullet bullet-dot bg-primary me-2 h-10px w-10px"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<span class="fw-bold text-gray-600 fs-6">Social Campaigns</span>
																		<!--end::Label-->
																	</div>
																	<!--ed::Item-->
																	<!--begin::Item-->
																	<div class="d-flex align-items-center">
																		<!--begin::Bullet-->
																		<span class="bullet bullet-dot bg-danger me-2 h-10px w-10px"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<span class="fw-bold text-gray-600 fs-6">Google Ads</span>
																		<!--end::Label-->
																	</div>
																	<!--ed::Item-->
																</div>
																<!--ed::Item-->
																<!--begin::Item-->
																<div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
																	<!--begin::Item-->
																	<div class="d-flex align-items-center mb-3 mb-sm-6">
																		<!--begin::Bullet-->
																		<span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<span class="fw-bold text-gray-600 fs-6">Email Newsletter</span>
																		<!--end::Label-->
																	</div>
																	<!--ed::Item-->
																	<!--begin::Item-->
																	<div class="d-flex align-items-center">
																		<!--begin::Bullet-->
																		<span class="bullet bullet-dot bg-warning me-2 h-10px w-10px"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<span class="fw-bold text-gray-600 fs-6">Courses</span>
																		<!--end::Label-->
																	</div>
																	<!--ed::Item-->
																</div>
																<!--ed::Item-->
																<!--begin::Item-->
																<div class="d-flex flex-column pt-sm-3 pt-6">
																	<!--begin::Item-->
																	<div class="d-flex align-items-center mb-3 mb-sm-6">
																		<!--begin::Bullet-->
																		<span class="bullet bullet-dot bg-info me-2 h-10px w-10px"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<span class="fw-bold text-gray-600 fs-6">TV Campaign</span>
																		<!--end::Label-->
																	</div>
																	<!--ed::Item-->
																	<!--begin::Item-->
																	<div class="d-flex align-items-center">
																		<!--begin::Bullet-->
																		<span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<span class="fw-bold text-gray-600 fs-6">Radio</span>
																		<!--end::Label-->
																	</div>
																	<!--ed::Item-->
																</div>
																<!--ed::Item-->
															</div>
															<!--ed::Items-->
														</div>
														<!--end::Tab pane-->
													</div>
													<!--end::Tab content-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Chart widget 8-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									<!--begin::Row-->
									<div class="row gy-5 g-xl-10">
										<!--begin::Col-->
										<div class="col-xl-12 col-xxl-4">
											<!--begin::Row-->
											<div class="row gy-5 g-xl-10">
												<!--begin::Col-->
												<div class="col-md-6 col-xxl-12">
													<!--begin::Card widget 1-->
													<div class="card card-flush border-0 h-xl-100" data-bs-theme="light" style="background-color: #22232B">
														<!--begin::Header-->
														<div class="card-header pt-2">
															<!--begin::Title-->
															<h3 class="card-title">
																<span class="text-white fs-3 fw-bold me-2">Facebook Campaign</span>
																<span class="badge badge-success">Active</span>
															</h3>
															<!--end::Title-->
															<!--begin::Toolbar-->
															<div class="card-toolbar">
																<!--begin::Menu-->
																<button class="btn btn-icon bg-white bg-opacity-10 btn-color-white btn-active-success w-25px h-25px" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
																	<i class="ki-duotone ki-black-right fs-5"></i>
																</button>
																<!--begin::Menu 2-->
																<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
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
																	<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
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
														<div class="card-body d-flex justify-content-between flex-column pt-1 px-0 pb-0">
															<!--begin::Wrapper-->
															<div class="d-flex flex-wrap px-9 mb-5">
																<!--begin::Stat-->
																<div class="rounded min-w-125px py-3 px-4 my-1 me-6" style="border: 1px dashed rgba(255, 255, 255, 0.15)">
																	<!--begin::Number-->
																	<div class="d-flex align-items-center">
																		<div class="text-white fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="4368" data-kt-countup-prefix="$">0</div>
																	</div>
																	<!--end::Number-->
																	<!--begin::Label-->
																	<div class="fw-semibold fs-6 text-white opacity-50">New Followers</div>
																	<!--end::Label-->
																</div>
																<!--end::Stat-->
																<!--begin::Stat-->
																<div class="rounded min-w-125px py-3 px-4 my-1" style="border: 1px dashed rgba(255, 255, 255, 0.15)">
																	<!--begin::Number-->
																	<div class="d-flex align-items-center">
																		<div class="text-white fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="120,000">0</div>
																	</div>
																	<!--end::Number-->
																	<!--begin::Label-->
																	<div class="fw-semibold fs-6 text-white opacity-50">Followers Goal</div>
																	<!--end::Label-->
																</div>
																<!--end::Stat-->
															</div>
															<!--end::Wrapper-->
															<!--begin::Chart-->
															<div id="kt_card_widget_1_chart" data-kt-chart-color="primary" style="height: 105px"></div>
															<!--end::Chart-->
														</div>
														<!--end::Body-->
													</div>
													<!--end::Card widget 1-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-6 col-xxl-12">
													<!--begin::List widget 3-->
													<div class="card card-flush h-xl-100">
														<!--begin::Header-->
														<div class="card-header pt-5">
															<!--begin::Title-->
															<h3 class="card-title align-items-start flex-column">
																<span class="card-label fw-bold text-gray-900 fs-3">Channels</span>
																<span class="text-gray-500 mt-1 fw-semibold fs-6">Users from all channels</span>
															</h3>
															<!--end::Title-->
															<!--begin::Toolbar-->
															<div class="card-toolbar">
																<!--begin::Menu-->
																<button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
																	<i class="ki-duotone ki-dots-square fs-1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																		<span class="path4"></span>
																	</i>
																</button>
																<!--begin::Menu 2-->
																<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
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
																	<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
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
														<div class="card-body">
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Wrapper-->
																<div class="d-flex align-items-center me-3">
																	<!--begin::Icon-->
																	<img src="assets/media/svg/brand-logos/dribbble-icon-1.svg" class="me-3 w-30px" alt="" />
																	<!--end::Icon-->
																	<!--begin::Section-->
																	<div class="flex-grow-1">
																		<a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Dribbble</a>
																		<span class="text-gray-500 fw-semibold d-block fs-6">Community</span>
																	</div>
																	<!--end::Section-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Statistics-->
																<div class="d-flex align-items-center w-100 mw-125px">
																	<!--begin::Progress-->
																	<div class="progress h-6px w-100 me-2 bg-light-success">
																		<div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																	<!--end::Progress-->
																	<!--begin::Value-->
																	<span class="text-gray-500 fw-semibold">65%</span>
																	<!--end::Value-->
																</div>
																<!--end::Statistics-->
															</div>
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed my-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Wrapper-->
																<div class="d-flex align-items-center me-3">
																	<!--begin::Icon-->
																	<img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="me-3 w-30px" alt="" />
																	<!--end::Icon-->
																	<!--begin::Section-->
																	<div class="flex-grow-1">
																		<a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Linked In</a>
																		<span class="text-gray-500 fw-semibold d-block fs-6">Social Media</span>
																	</div>
																	<!--end::Section-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Statistics-->
																<div class="d-flex align-items-center w-100 mw-125px">
																	<!--begin::Progress-->
																	<div class="progress h-6px w-100 me-2 bg-light-warning">
																		<div class="progress-bar bg-warning" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																	<!--end::Progress-->
																	<!--begin::Value-->
																	<span class="text-gray-500 fw-semibold">87%</span>
																	<!--end::Value-->
																</div>
																<!--end::Statistics-->
															</div>
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed my-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Wrapper-->
																<div class="d-flex align-items-center me-3">
																	<!--begin::Icon-->
																	<img src="assets/media/svg/brand-logos/slack-icon.svg" class="me-3 w-30px" alt="" />
																	<!--end::Icon-->
																	<!--begin::Section-->
																	<div class="flex-grow-1">
																		<a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Slack</a>
																		<span class="text-gray-500 fw-semibold d-block fs-6">Messanger</span>
																	</div>
																	<!--end::Section-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Statistics-->
																<div class="d-flex align-items-center w-100 mw-125px">
																	<!--begin::Progress-->
																	<div class="progress h-6px w-100 me-2 bg-light-primary">
																		<div class="progress-bar bg-primary" role="progressbar" style="width: 44%" aria-valuenow="44" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																	<!--end::Progress-->
																	<!--begin::Value-->
																	<span class="text-gray-500 fw-semibold">44%</span>
																	<!--end::Value-->
																</div>
																<!--end::Statistics-->
															</div>
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed my-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Wrapper-->
																<div class="d-flex align-items-center me-3">
																	<!--begin::Icon-->
																	<img src="assets/media/svg/brand-logos/google-icon.svg" class="me-3 w-30px" alt="" />
																	<!--end::Icon-->
																	<!--begin::Section-->
																	<div class="flex-grow-1">
																		<a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Google</a>
																		<span class="text-gray-500 fw-semibold d-block fs-6">SEO & PPC</span>
																	</div>
																	<!--end::Section-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Statistics-->
																<div class="d-flex align-items-center w-100 mw-125px">
																	<!--begin::Progress-->
																	<div class="progress h-6px w-100 me-2 bg-light-info">
																		<div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
																	</div>
																	<!--end::Progress-->
																	<!--begin::Value-->
																	<span class="text-gray-500 fw-semibold">70%</span>
																	<!--end::Value-->
																</div>
																<!--end::Statistics-->
															</div>
															<!--end::Item-->
														</div>
														<!--end::Body-->
													</div>
													<!--end::List widget 3-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xl-12 col-xxl-8 mb-5 mb-xl-10">
											<!--begin::Table Widget 3-->
											<div class="card card-flush h-xl-100">
												<!--begin::Card header-->
												<div class="card-header py-7">
													<!--begin::Tabs-->
													<div class="card-title pt-3 mb-0 gap-4 gap-lg-10 gap-xl-15 nav nav-tabs border-bottom-0" data-kt-table-widget-3="tabs_nav">
														<!--begin::Tab item-->
														<div class="fs-4 fw-bold pb-3 border-bottom border-3 border-primary cursor-pointer" data-kt-table-widget-3="tab" data-kt-table-widget-3-value="Show All">All Campaigns (47)</div>
														<!--end::Tab item-->
														<!--begin::Tab item-->
														<div class="fs-4 fw-bold text-muted pb-3 cursor-pointer" data-kt-table-widget-3="tab" data-kt-table-widget-3-value="Pending">Pending (8)</div>
														<!--end::Tab item-->
														<!--begin::Tab item-->
														<div class="fs-4 fw-bold text-muted pb-3 cursor-pointer" data-kt-table-widget-3="tab" data-kt-table-widget-3-value="Completed">Completed (39)</div>
														<!--end::Tab item-->
													</div>
													<!--end::Tabs-->
													<!--begin::Create campaign button-->
													<div class="card-toolbar">
														<a href="#" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">Create Campaign</a>
													</div>
													<!--end::Create campaign button-->
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body pt-1">
													<!--begin::Sort & Filter-->
													<div class="d-flex flex-stack flex-wrap gap-4">
														<!--begin::Sort-->
														<div class="d-flex align-items-center flex-wrap gap-3 gap-xl-9">
															<!--begin::Type-->
															<div class="d-flex align-items-center fw-bold">
																<!--begin::Label-->
																<div class="text-muted fs-7">Type</div>
																<!--end::Label-->
																<!--begin::Select-->
																<select class="form-select form-select-transparent text-gray-900 fs-7 lh-1 fw-bold py-0 ps-3 w-auto" data-hide-search="true" data-control="select2" data-dropdown-css-class="w-150px" data-placeholder="Select an option">
																	<option></option>
																	<option value="Show All" selected="selected">Show All</option>
																	<option value="Newest">Newest</option>
																	<option value="oldest">Oldest</option>
																</select>
																<!--end::Select-->
															</div>
															<!--end::Type-->
															<!--begin::Status-->
															<div class="d-flex align-items-center fw-bold">
																<!--begin::Label-->
																<div class="text-muted fs-7 me-2">Status</div>
																<!--end::Label-->
																<!--begin::Select-->
																<select class="form-select form-select-transparent text-gray-900 fs-7 lh-1 fw-bold py-0 ps-3 w-auto" data-hide-search="true" data-control="select2" data-dropdown-css-class="w-150px" data-placeholder="Select an option" data-kt-table-widget-3="filter_status">
																	<option></option>
																	<option value="Show All" selected="selected">Show All</option>
																	<option value="Live Now">Live Now</option>
																	<option value="Reviewing">Reviewing</option>
																	<option value="Paused">Paused</option>
																</select>
																<!--end::Select-->
															</div>
															<!--begin::Status-->
															<!--begin::Budget-->
															<div class="d-flex align-items-center fw-bold">
																<!--begin::Label-->
																<div class="text-muted me-2">Budget</div>
																<!--end::Label-->
																<!--begin::Select-->
																<select class="form-select form-select-transparent text-gray-900 fs-7 lh-1 fw-bold py-0 ps-3 w-auto" data-hide-search="true" data-dropdown-css-class="w-150px" data-control="select2" data-placeholder="Select an option" data-kt-table-widget-3="filter_status">
																	<option></option>
																	<option value="Show All" selected="selected">Show All</option>
																	<option value="&lt;5000">Less than $5,000</option>
																	<option value="5000-10000">$5,001 - $10,000</option>
																	<option value="&gt;10000">More than $10,001</option>
																</select>
																<!--end::Select-->
															</div>
															<!--begin::Budget-->
														</div>
														<!--end::Sort-->
														<!--begin::Filter-->
														<div class="d-flex align-items-center gap-4">
															<!--begin::Filter button-->
															<a href="#" class="text-hover-primary ps-4" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																<i class="ki-duotone ki-filter fs-2 text-gray-500">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</a>
															<!--begin::Menu 1-->
															<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_69981c1f8610e">
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
																			<select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_69981c1f8610e" data-allow-clear="true">
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
															<!--end::Filter button-->
														</div>
														<!--end::Filter-->
													</div>
													<!--end::Sort & Filter-->
													<!--begin::Seprator-->
													<div class="separator separator-dashed my-5"></div>
													<!--end::Seprator-->
													<!--begin::Table-->
													<table id="kt_widget_table_3" class="table table-row-dashed align-middle fs-6 gy-4 my-0 pb-3" data-kt-table-widget-3="all">
														<thead class="d-none">
															<tr>
																<th>Campaign</th>
																<th>Platforms</th>
																<th>Status</th>
																<th>Team</th>
																<th>Date</th>
																<th>Progress</th>
																<th>Action</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td class="min-w-175px">
																	<div class="position-relative ps-6 pe-3 py-2">
																		<div class="position-absolute start-0 top-0 w-4px h-100 rounded-2 bg-info"></div>
																		<a href="#" class="mb-1 text-gray-900 text-hover-primary fw-bold">Happy Christmas</a>
																		<div class="fs-7 text-muted fw-bold">Created on 24 Dec 21</div>
																	</div>
																</td>
																<td>
																	<!--begin::Icons-->
																	<div class="d-flex gap-2 mb-2">
																		<a href="#">
																			<img src="assets/media/svg/brand-logos/facebook-4.svg" class="w-20px" alt="" />
																		</a>
																		<a href="#">
																			<img src="assets/media/svg/brand-logos/twitter-2.svg" class="w-20px" alt="" />
																		</a>
																		<a href="#">
																			<img src="assets/media/svg/brand-logos/linkedin-2.svg" class="w-20px" alt="" />
																		</a>
																		<a href="#">
																			<img src="assets/media/svg/brand-logos/youtube-3.svg" class="w-20px" alt="" />
																		</a>
																	</div>
																	<!--end::Icons-->
																	<div class="fs-7 text-muted fw-bold">Labor 24 - 35 years</div>
																</td>
																<td>
																	<span class="badge badge-light-success">Live Now</span>
																</td>
																<td class="min-w-125px">
																	<!--begin::Team members-->
																	<div class="symbol-group symbol-hover mb-1">
																		<!--begin::Member-->
																		<div class="symbol symbol-circle symbol-25px">
																			<img src="assets/media/avatars/300-6.jpg" alt="" />
																		</div>
																		<!--end::Member-->
																		<!--begin::Member-->
																		<div class="symbol symbol-circle symbol-25px">
																			<img src="assets/media/avatars/300-5.jpg" alt="" />
																		</div>
																		<!--end::Member-->
																		<!--begin::Member-->
																		<div class="symbol symbol-circle symbol-25px">
																			<img src="assets/media/avatars/300-25.jpg" alt="" />
																		</div>
																		<!--end::Member-->
																		<!--begin::Member-->
																		<div class="symbol symbol-circle symbol-25px">
																			<img src="assets/media/avatars/300-9.jpg" alt="" />
																		</div>
																		<!--end::Member-->
																		<!--begin::Member-->
																		<div class="symbol symbol-circle symbol-25px">
																			<div class="symbol-label bg-danger">
																				<span class="fs-7 text-inverse-danger">E</span>
																			</div>
																		</div>
																		<!--end::Member-->
																		<!--begin::More members-->
																		<div class="symbol symbol-circle symbol-25px">
																			<div class="symbol-label bg-dark">
																				<span class="fs-8 text-inverse-dark">+0</span>
																			</div>
																		</div>
																		<!--end::More members-->
																	</div>
																	<!--end::Team members-->
																	<div class="fs-7 fw-bold text-muted">Team Members</div>
																</td>
																<td class="min-w-150px">
																	<div class="mb-2 fw-bold">24 Dec 21 - 06 Jan 22</div>
																	<div class="fs-7 fw-bold text-muted">Date range</div>
																</td>
																<td class="d-none">Pending</td>
																<td class="text-end">
																	<button type="button" class="btn btn-icon btn-sm btn-light btn-active-primary w-25px h-25px">
																		<i class="ki-duotone ki-black-right fs-2 text-muted"></i>
																	</button>
																</td>
															</tr>
															<tr>
																<td class="min-w-175px">
																	<div class="position-relative ps-6 pe-3 py-2">
																		<div class="position-absolute start-0 top-0 w-4px h-100 rounded-2 bg-warning"></div>
																		<a href="#" class="mb-1 text-gray-900 text-hover-primary fw-bold">Halloween</a>
																		<div class="fs-7 text-muted fw-bold">Created on 24 Dec 21</div>
																	</div>
																</td>
																<td>
																	<!--begin::Icons-->
																	<div class="d-flex gap-2 mb-2">
																		<a href="#">
																			<img src="assets/media/svg/brand-logos/twitter-2.svg" class="w-20px" alt="" />
																		</a>
																		<a href="#">
																			<img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="w-20px" alt="" />
																		</a>
																		<a href="#">
																			<img src="assets/media/svg/brand-logos/youtube-3.svg" class="w-20px" alt="" />
																		</a>
																	</div>
																	<!--end::Icons-->
																	<div class="fs-7 text-muted fw-bold">Labor 37 - 52 years</div>
																</td>
																<td>
																	<span class="badge badge-light-primary">Reviewing</span>
																</td>
																<td class="min-w-125px">
																	<!--begin::Team members-->
																	<div class="symbol-group symbol-hover mb-1">
																		<!--begin::Member-->
																		<div class="symbol symbol-circle symbol-25px">
																			<img src="assets/media/avatars/300-1.jpg" alt="" />
																		</div>
																		<!--end::Member-->
																		<!--begin::Member-->
																		<div class="symbol symbol-circle symbol-25px">
																			<img src="assets/media/avatars/300-25.jpg" alt="" />
																		</div>
																		<!--end::Member-->
																		<!--begin::Member-->
																		<div class="symbol symbol-circle symbol-25px">
																			<img src="assets/media/avatars/300-6.jpg" alt="" />
																		</div>
																		<!--end::Member-->
																	</div>
																	<!--end::Team members-->
																	<div class="fs-7 fw-bold text-muted">Team Members</div>
																</td>
																<td class="min-w-150px">
																	<div class="mb-2 fw-bold">03 Feb 22 - 14 Feb 22</div>
																	<div class="fs-7 fw-bold text-muted">Date range</div>
																</td>
																<td class="d-none">Completed</td>
																<td class="text-end">
																	<button type="button" class="btn btn-icon btn-sm btn-light btn-active-primary w-25px h-25px">
																		<i class="ki-duotone ki-black-right fs-2 text-muted"></i>
																	</button>
																</td>
															</tr>
															<tr>
																<td class="min-w-175px">
																	<div class="position-relative ps-6 pe-3 py-2">
																		<div class="position-absolute start-0 top-0 w-4px h-100 rounded-2 bg-success"></div>
																		<a href="#" class="mb-1 text-gray-900 text-hover-primary fw-bold">Cyber Monday</a>
																		<div class="fs-7 text-muted fw-bold">Created on 24 Dec 21</div>
																	</div>
																</td>
																<td>
																	<!--begin::Icons-->
																	<div class="d-flex gap-2 mb-2">
																		<a href="#">
																			<img src="assets/media/svg/brand-logos/facebook-4.svg" class="w-20px" alt="" />
																		</a>
																		<a href="#">
																			<img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="w-20px" alt="" />
																		</a>
																	</div>
																	<!--end::Icons-->
																	<div class="fs-7 text-muted fw-bold">Labor 24 - 38 years</div>
																</td>
																<td>
																	<span class="badge badge-light-success">Live Now</span>
																</td>
																<td class="min-w-125px">
																	<!--begin::Team members-->
																	<div class="symbol-group symbol-hover mb-1">
																		<!--begin::Member-->
																		<div class="symbol symbol-circle symbol-25px">
																			<div class="symbol-label bg-danger">
																				<span class="fs-7 text-inverse-danger">M</span>
																			</div>
																		</div>
																		<!--end::Member-->
																		<!--begin::Member-->
																		<div class="symbol symbol-circle symbol-25px">
																			<img src="assets/media/avatars/300-6.jpg" alt="" />
																		</div>
																		<!--end::Member-->
																		<!--begin::Member-->
																		<div class="symbol symbol-circle symbol-25px">
																			<div class="symbol-label bg-primary">
																				<span class="fs-7 text-inverse-primary">N</span>
																			</div>
																		</div>
																		<!--end::Member-->
																		<!--begin::Member-->
																		<div class="symbol symbol-circle symbol-25px">
																			<img src="assets/media/avatars/300-13.jpg" alt="" />
																		</div>
																		<!--end::Member-->
																	</div>
																	<!--end::Team members-->
																	<div class="fs-7 fw-bold text-muted">Team Members</div>
																</td>
																<td class="min-w-150px">
																	<div class="mb-2 fw-bold">19 Mar 22 - 04 Apr 22</div>
																	<div class="fs-7 fw-bold text-muted">Date range</div>
																</td>
																<td class="d-none">Pending</td>
																<td class="text-end">
																	<button type="button" class="btn btn-icon btn-sm btn-light btn-active-primary w-25px h-25px">
																		<i class="ki-duotone ki-black-right fs-2 text-muted"></i>
																	</button>
																</td>
															</tr>
															<tr>
																<td class="min-w-175px">
																	<div class="position-relative ps-6 pe-3 py-2">
																		<div class="position-absolute start-0 top-0 w-4px h-100 rounded-2 bg-danger"></div>
																		<a href="#" class="mb-1 text-gray-900 text-hover-primary fw-bold">Thanksgiving</a>
																		<div class="fs-7 text-muted fw-bold">Created on 24 Dec 21</div>
																	</div>
																</td>
																<td>
																	<!--begin::Icons-->
																	<div class="d-flex gap-2 mb-2">
																		<a href="#">
																			<img src="assets/media/svg/brand-logos/twitter-2.svg" class="w-20px" alt="" />
																		</a>
																		<a href="#">
																			<img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="w-20px" alt="" />
																		</a>
																		<a href="#">
																			<img src="assets/media/svg/brand-logos/linkedin-2.svg" class="w-20px" alt="" />
																		</a>
																	</div>
																	<!--end::Icons-->
																	<div class="fs-7 text-muted fw-bold">Labor 24 - 38 years</div>
																</td>
																<td>
																	<span class="badge badge-light-warning">Paused</span>
																</td>
																<td class="min-w-125px">
																	<!--begin::Team members-->
																	<div class="symbol-group symbol-hover mb-1">
																		<!--begin::Member-->
																		<div class="symbol symbol-circle symbol-25px">
																			<img src="assets/media/avatars/300-6.jpg" alt="" />
																		</div>
																		<!--end::Member-->
																		<!--begin::Member-->
																		<div class="symbol symbol-circle symbol-25px">
																			<img src="assets/media/avatars/300-25.jpg" alt="" />
																		</div>
																		<!--end::Member-->
																		<!--begin::Member-->
																		<div class="symbol symbol-circle symbol-25px">
																			<img src="assets/media/avatars/300-1.jpg" alt="" />
																		</div>
																		<!--end::Member-->
																		<!--begin::Member-->
																		<div class="symbol symbol-circle symbol-25px">
																			<div class="symbol-label bg-primary">
																				<span class="fs-7 text-inverse-primary">N</span>
																			</div>
																		</div>
																		<!--end::Member-->
																		<!--begin::Member-->
																		<div class="symbol symbol-circle symbol-25px">
																			<img src="assets/media/avatars/300-5.jpg" alt="" />
																		</div>
																		<!--end::Member-->
																		<!--begin::More members-->
																		<div class="symbol symbol-circle symbol-25px">
																			<div class="symbol-label bg-dark">
																				<span class="fs-8 text-inverse-dark">+0</span>
																			</div>
																		</div>
																		<!--end::More members-->
																	</div>
																	<!--end::Team members-->
																	<div class="fs-7 fw-bold text-muted">Team Members</div>
																</td>
																<td class="min-w-150px">
																	<div class="mb-2 fw-bold">20 Jun 22 - 30 Jun 22</div>
																	<div class="fs-7 fw-bold text-muted">Date range</div>
																</td>
																<td class="d-none">Pending</td>
																<td class="text-end">
																	<button type="button" class="btn btn-icon btn-sm btn-light btn-active-primary w-25px h-25px">
																		<i class="ki-duotone ki-black-right fs-2 text-muted"></i>
																	</button>
																</td>
															</tr>
															<tr>
																<td class="min-w-175px">
																	<div class="position-relative ps-6 pe-3 py-2">
																		<div class="position-absolute start-0 top-0 w-4px h-100 rounded-2 bg-primary"></div>
																		<a href="#" class="mb-1 text-gray-900 text-hover-primary fw-bold">Happy Mother's Day</a>
																		<div class="fs-7 text-muted fw-bold">Created on 24 Dec 21</div>
																	</div>
																</td>
																<td>
																	<!--begin::Icons-->
																	<div class="d-flex gap-2 mb-2">
																		<a href="#">
																			<img src="assets/media/svg/brand-logos/youtube-3.svg" class="w-20px" alt="" />
																		</a>
																	</div>
																	<!--end::Icons-->
																	<div class="fs-7 text-muted fw-bold">Labor 30 - 40 years</div>
																</td>
																<td>
																	<span class="badge badge-light-warning">Paused</span>
																</td>
																<td class="min-w-125px">
																	<!--begin::Team members-->
																	<div class="symbol-group symbol-hover mb-1">
																		<!--begin::Member-->
																		<div class="symbol symbol-circle symbol-25px">
																			<img src="assets/media/avatars/300-23.jpg" alt="" />
																		</div>
																		<!--end::Member-->
																		<!--begin::Member-->
																		<div class="symbol symbol-circle symbol-25px">
																			<img src="assets/media/avatars/300-13.jpg" alt="" />
																		</div>
																		<!--end::Member-->
																	</div>
																	<!--end::Team members-->
																	<div class="fs-7 fw-bold text-muted">Team Members</div>
																</td>
																<td class="min-w-150px">
																	<div class="mb-2 fw-bold">01 Aug 22 - 01 Sep 22</div>
																	<div class="fs-7 fw-bold text-muted">Date range</div>
																</td>
																<td class="d-none">Completed</td>
																<td class="text-end">
																	<button type="button" class="btn btn-icon btn-sm btn-light btn-active-primary w-25px h-25px">
																		<i class="ki-duotone ki-black-right fs-2 text-muted"></i>
																	</button>
																</td>
															</tr>
															<tr>
																<td class="min-w-175px">
																	<div class="position-relative ps-6 pe-3 py-2">
																		<div class="position-absolute start-0 top-0 w-4px h-100 rounded-2 bg-success"></div>
																		<a href="#" class="mb-1 text-gray-900 text-hover-primary fw-bold">Team Getaway</a>
																		<div class="fs-7 text-muted fw-bold">Created on 24 Dec 21</div>
																	</div>
																</td>
																<td>
																	<!--begin::Icons-->
																	<div class="d-flex gap-2 mb-2">
																		<a href="#">
																			<img src="assets/media/svg/brand-logos/twitter-2.svg" class="w-20px" alt="" />
																		</a>
																		<a href="#">
																			<img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="w-20px" alt="" />
																		</a>
																		<a href="#">
																			<img src="assets/media/svg/brand-logos/youtube-3.svg" class="w-20px" alt="" />
																		</a>
																	</div>
																	<!--end::Icons-->
																	<div class="fs-7 text-muted fw-bold">Labor 24 - 38 years</div>
																</td>
																<td>
																	<span class="badge badge-light-success">Live Now</span>
																</td>
																<td class="min-w-125px">
																	<!--begin::Team members-->
																	<div class="symbol-group symbol-hover mb-1">
																		<!--begin::Member-->
																		<div class="symbol symbol-circle symbol-25px">
																			<img src="assets/media/avatars/300-6.jpg" alt="" />
																		</div>
																		<!--end::Member-->
																		<!--begin::Member-->
																		<div class="symbol symbol-circle symbol-25px">
																			<img src="assets/media/avatars/300-13.jpg" alt="" />
																		</div>
																		<!--end::Member-->
																		<!--begin::Member-->
																		<div class="symbol symbol-circle symbol-25px">
																			<div class="symbol-label bg-primary">
																				<span class="fs-7 text-inverse-primary">N</span>
																			</div>
																		</div>
																		<!--end::Member-->
																		<!--begin::Member-->
																		<div class="symbol symbol-circle symbol-25px">
																			<div class="symbol-label bg-info">
																				<span class="fs-7 text-inverse-info">A</span>
																			</div>
																		</div>
																		<!--end::Member-->
																	</div>
																	<!--end::Team members-->
																	<div class="fs-7 fw-bold text-muted">Team Members</div>
																</td>
																<td class="min-w-150px">
																	<div class="mb-2 fw-bold">24 Jul 22 - 26 Jul 22</div>
																	<div class="fs-7 fw-bold text-muted">Date range</div>
																</td>
																<td class="d-none">Completed</td>
																<td class="text-end">
																	<button type="button" class="btn btn-icon btn-sm btn-light btn-active-primary w-25px h-25px">
																		<i class="ki-duotone ki-black-right fs-2 text-muted"></i>
																	</button>
																</td>
															</tr>
														</tbody>
														<!--end::Table-->
													</table>
													<!--end::Table-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Table Widget 3-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									<!--begin::Row-->
									<div class="row gy-5 g-xl-10">
										<!--begin::Col-->
										<div class="col-xl-4">
											<!--begin::Engage widget 1-->
											<div class="card h-xl-100" dir="ltr">
												<!--begin::Body-->
												<div class="card-body d-flex flex-column flex-center">
													<!--begin::Heading-->
													<div class="mb-2">
														<!--begin::Title-->
														<h1 class="fw-semibold text-gray-800 text-center lh-lg">Have you tried
														<br />new
														<span class="fw-bolder">Mobile Application ?</span></h1>
														<!--end::Title-->
														<!--begin::Illustration-->
														<div class="py-10 text-center">
															<img src="assets/media/svg/illustrations/easy/1.svg" class="theme-light-show w-200px" alt="" />
															<img src="assets/media/svg/illustrations/easy/1-dark.svg" class="theme-dark-show w-200px" alt="" />
														</div>
														<!--end::Illustration-->
													</div>
													<!--end::Heading-->
													<!--begin::Links-->
													<div class="text-center mb-1">
														<!--begin::Link-->
														<a class="btn btn-sm btn-primary me-2" data-bs-target="#kt_modal_new_card" data-bs-toggle="modal">Try now</a>
														<!--end::Link-->
														<!--begin::Link-->
														<a class="btn btn-sm btn-light" href="{{ route('metronic.pages.user_profile.followers') }}">Learn more</a>
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
										<div class="col-xl-8">
											<!--begin::Timeline Widget 1-->
											<div class="card card-flush h-xl-100">
												<!--begin::Card header-->
												<div class="card-header pt-5">
													<!--begin::Card title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-900">Team Schedule</span>
														<span class="text-gray-500 pt-2 fw-semibold fs-6">49 Acual Tasks</span>
													</h3>
													<!--end::Card title-->
													<!--begin::Card toolbar-->
													<div class="card-toolbar">
														<!--begin::Tabs-->
														<ul class="nav">
															<li class="nav-item">
																<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1 active" data-kt-timeline-widget-1="tab" data-bs-toggle="tab" href="#kt_timeline_widget_1_tab_day">Day</a>
															</li>
															<li class="nav-item">
																<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1" data-kt-timeline-widget-1="tab" data-bs-toggle="tab" href="#kt_timeline_widget_1_tab_week">Week</a>
															</li>
															<li class="nav-item">
																<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1" data-kt-timeline-widget-1="tab" data-bs-toggle="tab" href="#kt_timeline_widget_1_tab_month">Month</a>
															</li>
														</ul>
														<!--end::Tabs-->
													</div>
													<!--end::Card toolbar-->
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body pb-0">
													<!--begin::Tab content-->
													<div class="tab-content">
														<!--begin::Tab pane-->
														<div class="tab-pane active" id="kt_timeline_widget_1_tab_day" role="tabpanel" aria-labelledby="day-tab" data-kt-timeline-widget-1-blockui="true">
															<div class="table-responsive pb-10">
																<!--begin::Timeline-->
																<div id="kt_timeline_widget_1_1" class="vis-timeline-custom h-350px min-w-700px" data-kt-timeline-widget-1-image-root="/assets/media/"></div>
																<!--end::Timeline-->
															</div>
														</div>
														<!--end::Tab pane-->
														<!--begin::Tab pane-->
														<div class="tab-pane" id="kt_timeline_widget_1_tab_week" role="tabpanel" aria-labelledby="week-tab" data-kt-timeline-widget-1-blockui="true">
															<div class="table-responsive pb-10">
																<!--begin::Timeline-->
																<div id="kt_timeline_widget_1_2" class="vis-timeline-custom h-350px min-w-700px" data-kt-timeline-widget-1-image-root="/assets/media/"></div>
																<!--end::Timeline-->
															</div>
														</div>
														<!--end::Tab pane-->
														<!--begin::Tab pane-->
														<div class="tab-pane" id="kt_timeline_widget_1_tab_month" role="tabpanel" aria-labelledby="month-tab" data-kt-timeline-widget-1-blockui="true">
															<div class="table-responsive pb-10">
																<!--begin::Timeline-->
																<div id="kt_timeline_widget_1_3" class="vis-timeline-custom h-350px min-w-700px" data-kt-timeline-widget-1-image-root="/assets/media/"></div>
																<!--end::Timeline-->
															</div>
														</div>
														<!--end::Tab pane-->
													</div>
													<!--end::Tab content-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Timeline Widget 1-->
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
		<!--begin::Modal - Create Campaign-->
		<div class="modal fade" id="kt_modal_create_campaign" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-fullscreen p-9">
				<!--begin::Modal content-->
				<div class="modal-content modal-rounded">
					<!--begin::Modal header-->
					<div class="modal-header py-7 d-flex justify-content-between">
						<!--begin::Modal title-->
						<h2>Create Campaign</h2>
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
						<div class="stepper stepper-links d-flex flex-column" id="kt_modal_create_campaign_stepper">
							<!--begin::Nav-->
							<div class="stepper-nav justify-content-center py-2">
								<!--begin::Step 1-->
								<div class="stepper-item me-5 me-md-15 current" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Campaign Details</h3>
								</div>
								<!--end::Step 1-->
								<!--begin::Step 2-->
								<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Creative Uploads</h3>
								</div>
								<!--end::Step 2-->
								<!--begin::Step 3-->
								<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Audiences</h3>
								</div>
								<!--end::Step 3-->
								<!--begin::Step 4-->
								<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Budget Estimates</h3>
								</div>
								<!--end::Step 4-->
								<!--begin::Step 5-->
								<div class="stepper-item" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Completed</h3>
								</div>
								<!--end::Step 5-->
							</div>
							<!--end::Nav-->
							<!--begin::Form-->
							<form class="mx-auto w-100 mw-600px pt-15 pb-10" novalidate="novalidate" id="kt_modal_create_campaign_stepper_form">
								<!--begin::Step 1-->
								<div class="current" data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-10 pb-lg-15">
											<!--begin::Title-->
											<h2 class="fw-bold d-flex align-items-center text-gray-900">Setup Campaign Details
											<span class="ms-1" data-bs-toggle="tooltip" title="Campaign name will be used as reference within your campaign reports">
												<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</span></h2>
											<!--end::Title-->
											<!--begin::Notice-->
											<div class="text-muted fw-semibold fs-6">If you need more info, please check out
											<a href="#" class="link-primary fw-bold">Help Page</a>.</div>
											<!--end::Notice-->
										</div>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="mb-10 fv-row">
											<!--begin::Label-->
											<label class="required form-label mb-3">Campaign Name</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="text" class="form-control form-control-lg form-control-solid" name="campaign_name" placeholder="" value="" />
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-10">
											<!--begin::Label-->
											<label class="d-block fw-semibold fs-6 mb-5">
												<span class="required">Company Logo</span>
												<span class="ms-1" data-bs-toggle="tooltip" title="E.g. Select a logo to represent the company that's running the campaign.">
													<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
												</span>
											</label>
											<!--end::Label-->
											<!--begin::Image input placeholder-->
											<style>.image-input-placeholder { background-image: url('/assets/media/svg/files/blank-image.svg'); } [data-bs-theme="dark"] .image-input-placeholder { background-image: url('/assets/media/svg/files/blank-image-dark.svg'); }</style>
											<!--end::Image input placeholder-->
											<!--begin::Image input-->
											<div class="image-input image-input-empty image-input-outline image-input-placeholder" data-kt-image-input="true">
												<!--begin::Preview existing avatar-->
												<div class="image-input-wrapper w-125px h-125px"></div>
												<!--end::Preview existing avatar-->
												<!--begin::Label-->
												<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
													<i class="ki-duotone ki-pencil fs-7">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
													<!--begin::Inputs-->
													<input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
													<input type="hidden" name="avatar_remove" />
													<!--end::Inputs-->
												</label>
												<!--end::Label-->
												<!--begin::Cancel-->
												<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
													<i class="ki-duotone ki-cross fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</span>
												<!--end::Cancel-->
												<!--begin::Remove-->
												<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
													<i class="ki-duotone ki-cross fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</span>
												<!--end::Remove-->
											</div>
											<!--end::Image input-->
											<!--begin::Hint-->
											<div class="form-text">Allowed file types: png, jpg, jpeg.</div>
											<!--end::Hint-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-10">
											<!--begin::Label-->
											<label class="required fw-semibold fs-6 mb-5">Campaign Goal</label>
											<!--end::Label-->
											<!--begin::Roles-->
											<!--begin::Input row-->
											<div class="d-flex fv-row">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid">
													<!--begin::Input-->
													<input class="form-check-input me-3" name="user_role" type="radio" value="0" id="kt_modal_update_role_option_0" checked='checked' />
													<!--end::Input-->
													<!--begin::Label-->
													<label class="form-check-label" for="kt_modal_update_role_option_0">
														<div class="fw-bold text-gray-800">Get more visitors</div>
														<div class="text-gray-600">Increase impression traffic onto the platform</div>
													</label>
													<!--end::Label-->
												</div>
												<!--end::Radio-->
											</div>
											<!--end::Input row-->
											<div class='separator separator-dashed my-5'></div>
											<!--begin::Input row-->
											<div class="d-flex fv-row">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid">
													<!--begin::Input-->
													<input class="form-check-input me-3" name="user_role" type="radio" value="1" id="kt_modal_update_role_option_1" />
													<!--end::Input-->
													<!--begin::Label-->
													<label class="form-check-label" for="kt_modal_update_role_option_1">
														<div class="fw-bold text-gray-800">Get more messages on chat</div>
														<div class="text-gray-600">Increase community interaction and communication</div>
													</label>
													<!--end::Label-->
												</div>
												<!--end::Radio-->
											</div>
											<!--end::Input row-->
											<div class='separator separator-dashed my-5'></div>
											<!--begin::Input row-->
											<div class="d-flex fv-row">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid">
													<!--begin::Input-->
													<input class="form-check-input me-3" name="user_role" type="radio" value="2" id="kt_modal_update_role_option_2" />
													<!--end::Input-->
													<!--begin::Label-->
													<label class="form-check-label" for="kt_modal_update_role_option_2">
														<div class="fw-bold text-gray-800">Get more calls</div>
														<div class="text-gray-600">Boost telecommunication feedback to provide precise and accurate information</div>
													</label>
													<!--end::Label-->
												</div>
												<!--end::Radio-->
											</div>
											<!--end::Input row-->
											<div class='separator separator-dashed my-5'></div>
											<!--begin::Input row-->
											<div class="d-flex fv-row">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid">
													<!--begin::Input-->
													<input class="form-check-input me-3" name="user_role" type="radio" value="3" id="kt_modal_update_role_option_3" />
													<!--end::Input-->
													<!--begin::Label-->
													<label class="form-check-label" for="kt_modal_update_role_option_3">
														<div class="fw-bold text-gray-800">Get more likes</div>
														<div class="text-gray-600">Increase positive interactivity on social media platforms</div>
													</label>
													<!--end::Label-->
												</div>
												<!--end::Radio-->
											</div>
											<!--end::Input row-->
											<div class='separator separator-dashed my-5'></div>
											<!--begin::Input row-->
											<div class="d-flex fv-row">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid">
													<!--begin::Input-->
													<input class="form-check-input me-3" name="user_role" type="radio" value="4" id="kt_modal_update_role_option_4" />
													<!--end::Input-->
													<!--begin::Label-->
													<label class="form-check-label" for="kt_modal_update_role_option_4">
														<div class="fw-bold text-gray-800">Lead generation</div>
														<div class="text-gray-600">Collect contact information for potential customers</div>
													</label>
													<!--end::Label-->
												</div>
												<!--end::Radio-->
											</div>
											<!--end::Input row-->
											<!--end::Roles-->
										</div>
										<!--end::Input group-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Step 1-->
								<!--begin::Step 2-->
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
											<a href="#" class="link-primary">Campaign Guidelines</a></div>
											<!--end::Description-->
										</div>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="fv-row mb-10">
											<!--begin::Dropzone-->
											<div class="dropzone" id="kt_modal_create_campaign_files_upload">
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
														<h3 class="dfs-3 fw-bold text-gray-900 mb-1">Drop campaign files here or click to upload.</h3>
														<span class="fw-semibold fs-4 text-muted">Upload up to 10 files</span>
													</div>
													<!--end::Info-->
												</div>
											</div>
											<!--end::Dropzone-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-10">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold mb-2">Uploaded File</label>
											<!--End::Label-->
											<!--begin::Files-->
											<div class="mh-300px scroll-y me-n7 pe-7">
												<!--begin::File-->
												<div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px">
															<img src="assets/media/svg/files/pdf.svg" alt="icon" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-6">
															<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Product Specifications</a>
															<div class="fw-semibold text-muted">230kb</div>
														</div>
														<!--end::Details-->
													</div>
													<!--begin::Menu-->
													<div class="min-w-100px">
														<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
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
												<div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px">
															<img src="assets/media/svg/files/tif.svg" alt="icon" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-6">
															<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Campaign Creative Poster</a>
															<div class="fw-semibold text-muted">2.4mb</div>
														</div>
														<!--end::Details-->
													</div>
													<!--begin::Menu-->
													<div class="min-w-100px">
														<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
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
												<div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px">
															<img src="assets/media/svg/files/folder-document.svg" alt="icon" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-6">
															<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Campaign Landing Page Source</a>
															<div class="fw-semibold text-muted">1.12mb</div>
														</div>
														<!--end::Details-->
													</div>
													<!--begin::Menu-->
													<div class="min-w-100px">
														<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
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
												<div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px">
															<img src="assets/media/svg/files/css.svg" alt="icon" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-6">
															<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Landing Page Styling</a>
															<div class="fw-semibold text-muted">85kb</div>
														</div>
														<!--end::Details-->
													</div>
													<!--begin::Menu-->
													<div class="min-w-100px">
														<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
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
												<div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px">
															<img src="assets/media/svg/files/ai.svg" alt="icon" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-6">
															<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Design Source Files</a>
															<div class="fw-semibold text-muted">48mb</div>
														</div>
														<!--end::Details-->
													</div>
													<!--begin::Menu-->
													<div class="min-w-100px">
														<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
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
															<img src="assets/media/svg/files/doc.svg" alt="icon" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-6">
															<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Campaign Plan Document</a>
															<div class="fw-semibold text-muted">27kb</div>
														</div>
														<!--end::Details-->
													</div>
													<!--begin::Menu-->
													<div class="min-w-100px">
														<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
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
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Step 2-->
								<!--begin::Step 3-->
								<div data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-10 pb-lg-12">
											<!--begin::Title-->
											<h1 class="fw-bold text-gray-900">Configure Audiences</h1>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="text-muted fw-semibold fs-4">If you need more info, please check
											<a href="#" class="link-primary">Campaign Guidelines</a></div>
											<!--end::Description-->
										</div>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="fv-row mb-10">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold mb-2">Gender
											<span class="ms-1" data-bs-toggle="tooltip" title="Show your ads to either men or women, or select 'All' for both">
												<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</span></label>
											<!--End::Label-->
											<!--begin::Row-->
											<div class="row g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">
												<!--begin::Col-->
												<div class="col">
													<!--begin::Option-->
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6" data-kt-button="true">
														<!--begin::Radio-->
														<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
															<input class="form-check-input" type="radio" name="campaign_gender" value="1" checked="checked" />
														</span>
														<!--end::Radio-->
														<!--begin::Info-->
														<span class="ms-5">
															<span class="fs-4 fw-bold text-gray-800 d-block">All</span>
														</span>
														<!--end::Info-->
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col">
													<!--begin::Option-->
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
														<!--begin::Radio-->
														<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
															<input class="form-check-input" type="radio" name="campaign_gender" value="2" />
														</span>
														<!--end::Radio-->
														<!--begin::Info-->
														<span class="ms-5">
															<span class="fs-4 fw-bold text-gray-800 d-block">Male</span>
														</span>
														<!--end::Info-->
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col">
													<!--begin::Option-->
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
														<!--begin::Radio-->
														<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
															<input class="form-check-input" type="radio" name="campaign_gender" value="3" />
														</span>
														<!--end::Radio-->
														<!--begin::Info-->
														<span class="ms-5">
															<span class="fs-4 fw-bold text-gray-800 d-block">Female</span>
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
										<div class="fv-row mb-10">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold mb-2">Age
											<span class="ms-1" data-bs-toggle="tooltip" title="Select the minimum and maximum age of the people who will find your ad relevant.">
												<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</span></label>
											<!--End::Label-->
											<!--begin::Slider-->
											<div class="d-flex flex-stack">
												<div id="kt_modal_create_campaign_age_min" class="fs-7 fw-semibold text-muted"></div>
												<div id="kt_modal_create_campaign_age_slider" class="noUi-sm w-100 ms-5 me-8"></div>
												<div id="kt_modal_create_campaign_age_max" class="fs-7 fw-semibold text-muted"></div>
											</div>
											<!--end::Slider-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-10">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold mb-2">Location
											<span class="ms-1" data-bs-toggle="tooltip" title="Enter one or more location points for more specific targeting.">
												<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</span></label>
											<!--End::Label-->
											<!--begin::Tagify-->
											<input class="form-control d-flex align-items-center" value="" id="kt_modal_create_campaign_location" data-kt-flags-path="/assets/media/flags/" />
											<!--end::Tagify-->
										</div>
										<!--end::Input group-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Step 3-->
								<!--begin::Step 4-->
								<div data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-10 pb-lg-12">
											<!--begin::Title-->
											<h1 class="fw-bold text-gray-900">Budget Estimates</h1>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="text-muted fw-semibold fs-4">If you need more info, please check
											<a href="#" class="link-primary">Campaign Guidelines</a></div>
											<!--end::Description-->
										</div>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="fv-row mb-10">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold mb-2">Campaign Duration
											<span class="ms-1" data-bs-toggle="tooltip" title="Choose how long you want your ad to run for">
												<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</span></label>
											<!--end::Label-->
											<!--begin::Duration option-->
											<div class="d-flex gap-9 mb-7">
												<!--begin::Button-->
												<button type="button" class="btn btn-outline btn-outline-dashed btn-active-light-primary active" id="kt_modal_create_campaign_duration_all">Continuous duration
												<br />
												<span class="fs-7">Your ad will run continuously for a daily budget.</span></button>
												<!--end::Button-->
												<!--begin::Button-->
												<button type="button" class="btn btn-outline btn-outline-dashed btn-active-light-primary btn-outline-default" id="kt_modal_create_campaign_duration_fixed">Fixed duration
												<br />
												<span class="fs-7">Your ad will run on the specified dates only.</span></button>
												<!--end::Button-->
											</div>
											<!--end::Duration option-->
											<!--begin::Datepicker-->
											<input class="form-control form-control-solid d-none" placeholder="Pick date & time" id="kt_modal_create_campaign_datepicker" />
											<!--end::Datepicker-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-10">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold mb-2">Daily Budget
											<span class="ms-1" data-bs-toggle="tooltip" title="Choose the budget allocated for each day. Higher budget will generate better results">
												<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</span></label>
											<!--end::Label-->
											<!--begin::Slider-->
											<div class="d-flex flex-column text-center">
												<div class="d-flex align-items-start justify-content-center mb-7">
													<span class="fw-bold fs-4 mt-1 me-2">$</span>
													<span class="fw-bold fs-3x" id="kt_modal_create_campaign_budget_label"></span>
													<span class="fw-bold fs-3x">.00</span>
												</div>
												<div id="kt_modal_create_campaign_budget_slider" class="noUi-sm"></div>
											</div>
											<!--end::Slider-->
										</div>
										<!--end::Input group-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Step 4-->
								<!--begin::Step 5-->
								<div data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-12 text-center">
											<!--begin::Title-->
											<h1 class="fw-bold text-gray-900">Campaign Created!</h1>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="fw-semibold text-muted fs-4">You will receive an email with with the summary of your newly created campaign!</div>
											<!--end::Description-->
										</div>
										<!--end::Heading-->
										<!--begin::Actions-->
										<div class="d-flex flex-center pb-20">
											<button id="kt_modal_create_campaign_create_new" type="button" class="btn btn-lg btn-light me-3" data-kt-element="complete-start">Create New Campaign</button>
											<a href="" class="btn btn-lg btn-primary" data-bs-toggle="tooltip" title="Coming Soon">View Campaign</a>
										</div>
										<!--end::Actions-->
										<!--begin::Illustration-->
										<div class="text-center px-4">
											<img src="assets/media/illustrations/sketchy-1/9.png" alt="" class="mww-100 mh-350px" />
										</div>
										<!--end::Illustration-->
									</div>
								</div>
								<!--end::Step 5-->
								<!--begin::Actions-->
								<div class="d-flex flex-stack pt-10">
									<!--begin::Wrapper-->
									<div class="me-2">
										<button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous" data-kt-stepper-state="hide-on-last-step">
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
						<!--end::Stepper-->
					</div>
					<!--begin::Modal body-->
				</div>
			</div>
		</div>
		<!--end::Modal - Create Campaign-->
		<!--begin::Modal - New Card-->
		<div class="modal fade" id="kt_modal_new_card" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header">
						<!--begin::Modal title-->
						<h2>Add New Card</h2>
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
					<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
						<!--begin::Form-->
						<form id="kt_modal_new_card_form" class="form" action="#">
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
							<!--begin::Actions-->
							<div class="text-center pt-15">
								<button type="reset" id="kt_modal_new_card_cancel" class="btn btn-light me-3">Discard</button>
								<button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
									<span class="indicator-label">Submit</span>
									<span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
							</div>
							<!--end::Actions-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - New Card-->
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
<script src="assets/js/widgets.bundle.js"></script>
<script src="assets/js/custom/widgets.js"></script>
<script src="assets/js/custom/apps/chat/chat.js"></script>
<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="assets/js/custom/utilities/modals/create-campaign.js"></script>
<script src="assets/js/custom/utilities/modals/new-card.js"></script>
@endsection
