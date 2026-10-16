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
										<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Website Analytics</h1>
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
										<!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
										<div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm fw-bold btn-secondary d-flex align-items-center px-4">
											<!--begin::Display range-->
											<div class="text-gray-600 fw-bold">Loading date range...</div>
											<!--end::Display range-->
											<i class="ki-duotone ki-calendar-8 fs-2 ms-2 me-0">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
												<span class="path4"></span>
												<span class="path5"></span>
												<span class="path6"></span>
											</i>
										</div>
										<!--end::Daterangepicker-->
										<!--begin::Secondary button-->
										<!--end::Secondary button-->
										<!--begin::Primary button-->
										<a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Add Target</a>
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
									<div class="row gx-5 gx-xl-10">
										<!--begin::Col-->
										<div class="col-xxl-4 mb-5 mb-xl-10">
											<!--begin::Chart widget 27-->
											<div class="card card-flush h-xl-100">
												<!--begin::Header-->
												<div class="card-header py-7">
													<!--begin::Statistics-->
													<div class="m-0">
														<!--begin::Heading-->
														<div class="d-flex align-items-center mb-2">
															<!--begin::Title-->
															<span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">35,568</span>
															<!--end::Title-->
															<!--begin::Label-->
															<span class="badge badge-light-danger fs-base">
															<i class="ki-duotone ki-arrow-up fs-5 text-danger ms-n1">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>8.02%</span>
															<!--end::Label-->
														</div>
														<!--end::Heading-->
														<!--begin::Description-->
														<span class="fs-6 fw-semibold text-gray-500">Organic Sessions</span>
														<!--end::Description-->
													</div>
													<!--end::Statistics-->
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
												<div class="card-body pt-0 pb-1">
													<div id="kt_charts_widget_27" class="min-h-auto"></div>
												</div>
												<!--end::Body-->
											</div>
											<!--end::Chart widget 27-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xxl-4 mb-5 mb-xl-10">
											<!--begin::Chart widget 28-->
											<div class="card card-flush h-xl-100">
												<!--begin::Header-->
												<div class="card-header py-7">
													<!--begin::Statistics-->
													<div class="m-0">
														<!--begin::Heading-->
														<div class="d-flex align-items-center mb-2">
															<!--begin::Title-->
															<span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">2,579</span>
															<!--end::Title-->
															<!--begin::Label-->
															<span class="badge badge-light-success fs-base">
															<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>2.2%</span>
															<!--end::Label-->
														</div>
														<!--end::Heading-->
														<!--begin::Description-->
														<span class="fs-6 fw-semibold text-gray-500">Domain External Links</span>
														<!--end::Description-->
													</div>
													<!--end::Statistics-->
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
												<div class="card-body d-flex align-items-end ps-4 pe-0 pb-4">
													<!--begin::Chart-->
													<div id="kt_charts_widget_28" class="h-300px w-100 min-h-auto"></div>
													<!--end::Chart-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Chart widget 28-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xxl-4 mb-5 mb-xl-10">
											<!--begin::List widget 9-->
											<div class="card card-flush h-xl-100">
												<!--begin::Header-->
												<div class="card-header py-7">
													<!--begin::Statistics-->
													<div class="m-0">
														<!--begin::Heading-->
														<div class="d-flex align-items-center mb-2">
															<!--begin::Title-->
															<span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">5,037</span>
															<!--end::Title-->
															<!--begin::Label-->
															<span class="badge badge-light-success fs-base">
															<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>2.2%</span>
															<!--end::Label-->
														</div>
														<!--end::Heading-->
														<!--begin::Description-->
														<span class="fs-6 fw-semibold text-gray-500">Visits by Social Networks</span>
														<!--end::Description-->
													</div>
													<!--end::Statistics-->
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
												<div class="card-body card-body d-flex justify-content-between flex-column pt-3">
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Flag-->
														<img src="assets/media/svg/brand-logos/dribbble-icon-1.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
														<!--end::Flag-->
														<!--begin::Section-->
														<div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
															<!--begin::Content-->
															<div class="me-5">
																<!--begin::Title-->
																<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Dribbble</a>
																<!--end::Title-->
																<!--begin::Desc-->
																<span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Community</span>
																<!--end::Desc-->
															</div>
															<!--end::Content-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center">
																<!--begin::Number-->
																<span class="text-gray-800 fw-bold fs-4 me-3">579</span>
																<!--end::Number-->
																<!--begin::Info-->
																<div class="m-0">
																	<!--begin::Label-->
																	<span class="badge badge-light-success fs-base">
																	<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>2.6%</span>
																	<!--end::Label-->
																</div>
																<!--end::Info-->
															</div>
															<!--end::Wrapper-->
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
														<img src="assets/media/svg/brand-logos/linkedin-1.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
														<!--end::Flag-->
														<!--begin::Section-->
														<div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
															<!--begin::Content-->
															<div class="me-5">
																<!--begin::Title-->
																<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Linked In</a>
																<!--end::Title-->
																<!--begin::Desc-->
																<span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social Media</span>
																<!--end::Desc-->
															</div>
															<!--end::Content-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center">
																<!--begin::Number-->
																<span class="text-gray-800 fw-bold fs-4 me-3">1,088</span>
																<!--end::Number-->
																<!--begin::Info-->
																<div class="m-0">
																	<!--begin::Label-->
																	<span class="badge badge-light-danger fs-base">
																	<i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>0.4%</span>
																	<!--end::Label-->
																</div>
																<!--end::Info-->
															</div>
															<!--end::Wrapper-->
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
														<img src="assets/media/svg/brand-logos/slack-icon.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
														<!--end::Flag-->
														<!--begin::Section-->
														<div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
															<!--begin::Content-->
															<div class="me-5">
																<!--begin::Title-->
																<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Slack</a>
																<!--end::Title-->
																<!--begin::Desc-->
																<span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Messanger</span>
																<!--end::Desc-->
															</div>
															<!--end::Content-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center">
																<!--begin::Number-->
																<span class="text-gray-800 fw-bold fs-4 me-3">794</span>
																<!--end::Number-->
																<!--begin::Info-->
																<div class="m-0">
																	<!--begin::Label-->
																	<span class="badge badge-light-success fs-base">
																	<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>0.2%</span>
																	<!--end::Label-->
																</div>
																<!--end::Info-->
															</div>
															<!--end::Wrapper-->
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
														<img src="assets/media/svg/brand-logos/youtube-3.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
														<!--end::Flag-->
														<!--begin::Section-->
														<div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
															<!--begin::Content-->
															<div class="me-5">
																<!--begin::Title-->
																<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">YouTube</a>
																<!--end::Title-->
																<!--begin::Desc-->
																<span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Video Channel</span>
																<!--end::Desc-->
															</div>
															<!--end::Content-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center">
																<!--begin::Number-->
																<span class="text-gray-800 fw-bold fs-4 me-3">978</span>
																<!--end::Number-->
																<!--begin::Info-->
																<div class="m-0">
																	<!--begin::Label-->
																	<span class="badge badge-light-success fs-base">
																	<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>4.1%</span>
																	<!--end::Label-->
																</div>
																<!--end::Info-->
															</div>
															<!--end::Wrapper-->
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
														<img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
														<!--end::Flag-->
														<!--begin::Section-->
														<div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
															<!--begin::Content-->
															<div class="me-5">
																<!--begin::Title-->
																<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Instagram</a>
																<!--end::Title-->
																<!--begin::Desc-->
																<span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social Network</span>
																<!--end::Desc-->
															</div>
															<!--end::Content-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center">
																<!--begin::Number-->
																<span class="text-gray-800 fw-bold fs-4 me-3">1,458</span>
																<!--end::Number-->
																<!--begin::Info-->
																<div class="m-0">
																	<!--begin::Label-->
																	<span class="badge badge-light-success fs-base">
																	<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>8.3%</span>
																	<!--end::Label-->
																</div>
																<!--end::Info-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Section-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::List widget 9-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									<!--begin::Row-->
									<div class="row gx-5 gx-xl-10">
										<!--begin::Col-->
										<div class="col-xl-6 mb-5 mb-xl-10">
											<!--begin::Table widget 9-->
											<div class="card card-flush h-xl-100">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800">Top Referral Sources</span>
														<span class="text-gray-500 pt-1 fw-semibold fs-6">Counted in Millions</span>
													</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<a href="#" class="btn btn-sm btn-light">PDF Report</a>
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body py-3">
													<!--begin::Table container-->
													<div class="table-responsive">
														<!--begin::Table-->
														<table class="table table-row-dashed align-middle gs-0 gy-4">
															<!--begin::Table head-->
															<thead>
																<tr class="fs-7 fw-bold border-0 text-gray-500">
																	<th class="min-w-150px" colspan="2">CAMPAIGN</th>
																	<th class="min-w-150px text-end pe-0" colspan="2">SESSIONS</th>
																	<th class="text-end min-w-150px" colspan="2">CONVERSION RATE</th>
																</tr>
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody>
																<tr>
																	<td class="" colspan="2">
																		<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Google</a>
																	</td>
																	<td class="pe-0" colspan="2">
																		<div class="d-flex justify-content-end">
																			<span class="text-gray-800 fw-bold fs-6 me-1">1,256</span>
																			<span class="text-danger min-w-50px d-block text-end fw-bold fs-6">-935</span>
																		</div>
																	</td>
																	<td class="" colspan="2">
																		<div class="d-flex justify-content-end">
																			<span class="text-gray-900 fw-bold fs-6 me-3">23.63%</span>
																			<span class="text-danger min-w-60px d-block text-end fw-bold fs-6">-9.35%</span>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="" colspan="2">
																		<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Facebook</a>
																	</td>
																	<td class="pe-0" colspan="2">
																		<div class="d-flex justify-content-end">
																			<span class="text-gray-800 fw-bold fs-6 me-1">446</span>
																			<span class="text-danger min-w-50px d-block text-end fw-bold fs-6">-576</span>
																		</div>
																	</td>
																	<td class="" colspan="2">
																		<div class="d-flex justify-content-end">
																			<span class="text-gray-900 fw-bold fs-6 me-3">12.45%</span>
																			<span class="text-danger min-w-60px d-block text-end fw-bold fs-6">-57.02%</span>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="" colspan="2">
																		<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Bol.com</a>
																	</td>
																	<td class="pe-0" colspan="2">
																		<div class="d-flex justify-content-end">
																			<span class="text-gray-800 fw-bold fs-6 me-1">67</span>
																			<span class="text-success min-w-50px d-block text-end fw-bold fs-6">+24</span>
																		</div>
																	</td>
																	<td class="" colspan="2">
																		<div class="d-flex justify-content-end">
																			<span class="text-gray-900 fw-bold fs-6 me-3">73.63%</span>
																			<span class="text-success min-w-60px d-block text-end fw-bold fs-6">+28.73%</span>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="" colspan="2">
																		<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Dutchnews.nl</a>
																	</td>
																	<td class="pe-0" colspan="2">
																		<div class="d-flex justify-content-end">
																			<span class="text-gray-800 fw-bold fs-6 me-1">2,136</span>
																			<span class="text-danger min-w-50px d-block text-end fw-bold fs-6">-1,229</span>
																		</div>
																	</td>
																	<td class="" colspan="2">
																		<div class="d-flex justify-content-end">
																			<span class="text-gray-900 fw-bold fs-6 me-3">3.67%</span>
																			<span class="text-danger min-w-60px d-block text-end fw-bold fs-6">-12.29%</span>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="" colspan="2">
																		<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Stackoverflow</a>
																	</td>
																	<td class="pe-0" colspan="2">
																		<div class="d-flex justify-content-end">
																			<span class="text-gray-800 fw-bold fs-6 me-1">945</span>
																			<span class="text-danger min-w-50px d-block text-end fw-bold fs-6">-634</span>
																		</div>
																	</td>
																	<td class="" colspan="2">
																		<div class="d-flex justify-content-end">
																			<span class="text-gray-900 fw-bold fs-6 me-3">25.03%</span>
																			<span class="text-danger min-w-60px d-block text-end fw-bold fs-6">-9.35%</span>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="" colspan="2">
																		<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Themeforest</a>
																	</td>
																	<td class="pe-0" colspan="2">
																		<div class="d-flex justify-content-end">
																			<span class="text-gray-800 fw-bold fs-6 me-1">237</span>
																			<span class="text-success min-w-50px d-block text-end fw-bold fs-6">106</span>
																		</div>
																	</td>
																	<td class="" colspan="2">
																		<div class="d-flex justify-content-end">
																			<span class="text-gray-900 fw-bold fs-6 me-3">36.52%</span>
																			<span class="text-success min-w-60px d-block text-end fw-bold fs-6">+3.06%</span>
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
												<!--end::Body-->
											</div>
											<!--end::Table Widget 9-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xl-6 mb-5 mb-xl-10">
											<!--begin::Table widget 10-->
											<div class="card card-flush h-xl-100">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800">Top Performing Pages</span>
														<span class="text-gray-500 pt-1 fw-semibold fs-6">Counted in Millions</span>
													</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<a href="#" class="btn btn-sm btn-light">PDF Report</a>
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body py-3">
													<!--begin::Table container-->
													<div class="table-responsive">
														<!--begin::Table-->
														<table class="table table-row-dashed align-middle gs-0 gy-4">
															<!--begin::Table head-->
															<thead>
																<tr class="fs-7 fw-bold border-0 text-gray-500">
																	<th class="min-w-200px" colspan="2">LANDING PAGE</th>
																	<th class="min-w-100px text-end pe-0" colspan="2">CLICKS</th>
																	<th class="text-end min-w-100px" colspan="2">AVG. POSITION</th>
																</tr>
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody>
																<tr>
																	<td class="" colspan="2">
																		<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Index</a>
																	</td>
																	<td class="pe-0" colspan="2">
																		<div class="d-flex justify-content-end">
																			<span class="text-gray-800 fw-bold fs-6">1,256</span>
																			<span class="text-danger min-w-50px d-block text-end fw-bold fs-6">-935</span>
																		</div>
																	</td>
																	<td class="" colspan="2">
																		<div class="d-flex justify-content-end">
																			<span class="text-gray-900 fw-bold fs-6">2.63</span>
																			<span class="text-danger min-w-50px d-block text-end fw-bold fs-6">-1.35</span>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="" colspan="2">
																		<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Products</a>
																	</td>
																	<td class="pe-0" colspan="2">
																		<div class="d-flex justify-content-end">
																			<span class="text-gray-800 fw-bold fs-6">446</span>
																			<span class="text-danger min-w-50px d-block text-end fw-bold fs-6">-576</span>
																		</div>
																	</td>
																	<td class="" colspan="2">
																		<div class="d-flex justify-content-end">
																			<span class="text-gray-900 fw-bold fs-6">1.45</span>
																			<span class="text-danger min-w-50px d-block text-end fw-bold fs-6">0.32</span>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="" colspan="2">
																		<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">devs.keenthemes.com</a>
																	</td>
																	<td class="pe-0" colspan="2">
																		<div class="d-flex justify-content-end">
																			<span class="text-gray-800 fw-bold fs-6">67</span>
																			<span class="text-success min-w-50px d-block text-end fw-bold fs-6">+24</span>
																		</div>
																	</td>
																	<td class="" colspan="2">
																		<div class="d-flex justify-content-end">
																			<span class="text-gray-900 fw-bold fs-6">7.63</span>
																			<span class="text-success min-w-50px d-block text-end fw-bold fs-6">+8.73</span>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="" colspan="2">
																		<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">studio.keenthemes.com</a>
																	</td>
																	<td class="pe-0" colspan="2">
																		<div class="d-flex justify-content-end">
																			<span class="text-gray-800 fw-bold fs-6">2,136</span>
																			<span class="text-danger min-w-50px d-block text-end fw-bold fs-6">-1,229</span>
																		</div>
																	</td>
																	<td class="" colspan="2">
																		<div class="d-flex justify-content-end">
																			<span class="text-gray-900 fw-bold fs-6">3.67</span>
																			<span class="text-danger min-w-50px d-block text-end fw-bold fs-6">-2.29</span>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="" colspan="2">
																		<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">graphics.keenthemes.com</a>
																	</td>
																	<td class="pe-0" colspan="2">
																		<div class="d-flex justify-content-end">
																			<span class="text-gray-800 fw-bold fs-6">945</span>
																			<span class="text-danger min-w-50px d-block text-end fw-bold fs-6">-634</span>
																		</div>
																	</td>
																	<td class="" colspan="2">
																		<div class="d-flex justify-content-end">
																			<span class="text-gray-900 fw-bold fs-6">5.03</span>
																			<span class="text-danger min-w-50px d-block text-end fw-bold fs-6">-0.35</span>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="" colspan="2">
																		<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Licenses</a>
																	</td>
																	<td class="pe-0" colspan="2">
																		<div class="d-flex justify-content-end">
																			<span class="text-gray-800 fw-bold fs-6">237</span>
																			<span class="text-success min-w-50px d-block text-end fw-bold fs-6">106</span>
																		</div>
																	</td>
																	<td class="" colspan="2">
																		<div class="d-flex justify-content-end">
																			<span class="text-gray-900 fw-bold fs-6">3.52</span>
																			<span class="text-success min-w-50px d-block text-end fw-bold fs-6">+3.06</span>
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
												<!--end::Body-->
											</div>
											<!--end::Table Widget 10-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									<!--begin::Row-->
									<div class="row gx-5 gx-xl-10">
										<!--begin::Col-->
										<div class="col-xl-6 mb-5 mb-xl-10">
											<!--begin::Chart widget 15-->
											<div class="card card-flush h-xl-100">
												<!--begin::Header-->
												<div class="card-header pt-7">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-900">Author Sales</span>
														<span class="text-gray-500 pt-2 fw-semibold fs-6">Statistics by Countries</span>
													</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<div class="card-toolbar">
															<a href="#" class="btn btn-sm btn-light">PDF Report</a>
														</div>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold w-100px py-4" data-kt-menu="true">
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
													<div id="kt_charts_widget_15_chart" class="min-h-auto ps-4 pe-6 mb-3 h-300px"></div>
													<!--end::Chart container-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Chart widget 15-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xl-6 mb-5 mb-xl-10">
											<!--begin::Table widget 11-->
											<div class="card card-flush h-xl-100">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800">Top Queries by Clicks</span>
														<span class="text-gray-500 pt-2 fw-semibold fs-6">Counted in Millions</span>
													</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<a href="#" class="btn btn-sm btn-light">PDF Report</a>
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body d-flex justify-content-between flex-column py-3">
													<!--begin::Block-->
													<div class="m-0"></div>
													<!--end::Block-->
													<!--begin::Table container-->
													<div class="table-responsive mb-n2">
														<!--begin::Table-->
														<table class="table table-row-dashed gs-0 gy-4">
															<!--begin::Table head-->
															<thead>
																<tr class="fs-7 fw-bold border-0 text-gray-500">
																	<th class="min-w-300px">KEYWORD</th>
																	<th class="min-w-100px">CLICKS</th>
																</tr>
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody>
																<tr>
																	<td>
																		<a href="#" class="text-gray-600 fw-bold text-hover-primary mb-1 fs-6">Buy phone online</a>
																	</td>
																	<td class="d-flex align-items-center border-0">
																		<span class="fw-bold text-gray-800 fs-6 me-3">263</span>
																		<div class="progress rounded-start-0">
																			<div class="progress-bar bg-success m-0" role="progressbar" style="height: 12px;width: 166px" aria-valuenow="166" aria-valuemin="0" aria-valuemax="166px"></div>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<a href="#" class="text-gray-600 fw-bold text-hover-primary mb-1 fs-6">Top 10 Earbuds</a>
																	</td>
																	<td class="d-flex align-items-center border-0">
																		<span class="fw-bold text-gray-800 fs-6 me-3">238</span>
																		<div class="progress rounded-start-0">
																			<div class="progress-bar bg-success m-0" role="progressbar" style="height: 12px;width: 158px" aria-valuenow="158" aria-valuemin="0" aria-valuemax="158px"></div>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<a href="#" class="text-gray-600 fw-bold text-hover-primary mb-1 fs-6">Cyber Monday</a>
																	</td>
																	<td class="d-flex align-items-center border-0">
																		<span class="fw-bold text-gray-800 fs-6 me-3">189</span>
																		<div class="progress rounded-start-0">
																			<div class="progress-bar bg-success m-0" role="progressbar" style="height: 12px;width: 129px" aria-valuenow="129" aria-valuemin="0" aria-valuemax="129px"></div>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<a href="#" class="text-gray-600 fw-bold text-hover-primary mb-1 fs-6">OLED TV in Amsterdam</a>
																	</td>
																	<td class="d-flex align-items-center border-0">
																		<span class="fw-bold text-gray-800 fs-6 me-3">263</span>
																		<div class="progress rounded-start-0">
																			<div class="progress-bar bg-success m-0" role="progressbar" style="height: 12px;width: 112px" aria-valuenow="112" aria-valuemin="0" aria-valuemax="112px"></div>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<a href="#" class="text-gray-600 fw-bold text-hover-primary mb-1 fs-6">Macbook M1</a>
																	</td>
																	<td class="d-flex align-items-center border-0">
																		<span class="fw-bold text-gray-800 fs-6 me-3">263</span>
																		<div class="progress rounded-start-0">
																			<div class="progress-bar bg-success m-0" role="progressbar" style="height: 12px;width: 107px" aria-valuenow="107" aria-valuemin="0" aria-valuemax="107px"></div>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<a href="#" class="text-gray-600 fw-bold text-hover-primary mb-1 fs-6">Best noise cancelation headsets</a>
																	</td>
																	<td class="d-flex align-items-center border-0">
																		<span class="fw-bold text-gray-800 fs-6 me-3">263</span>
																		<div class="progress rounded-start-0">
																			<div class="progress-bar bg-success m-0" role="progressbar" style="height: 12px;width: 74px" aria-valuenow="74" aria-valuemin="0" aria-valuemax="74px"></div>
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
												<!--end::Body-->
											</div>
											<!--end::Table Widget 11-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									<!--begin::Row-->
									<div class="row gx-5 gx-xl-10">
										<!--begin::Col-->
										<div class="col-xl-4 mb-5 mb-xl-10">
											<!--begin::Chart widget 29-->
											<div class="card card-flush h-xl-100">
												<!--begin::Header-->
												<div class="card-header py-7">
													<!--begin::Statistics-->
													<div class="m-0">
														<!--begin::Heading-->
														<div class="d-flex align-items-center mb-2">
															<!--begin::Title-->
															<span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">7,9</span>
															<!--end::Title-->
															<!--begin::Label-->
															<span class="badge badge-light-success fs-base">
															<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>2.2%</span>
															<!--end::Label-->
														</div>
														<!--end::Heading-->
														<!--begin::Description-->
														<span class="fs-6 fw-semibold text-gray-500">Avarage Position</span>
														<!--end::Description-->
													</div>
													<!--end::Statistics-->
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
												<div class="card-body d-flex align-items-end p-0">
													<!--begin::Chart-->
													<div id="kt_charts_widget_29" class="h-300px w-100 min-h-auto ps-7 pe-0 mb-5"></div>
													<!--end::Chart-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Chart widget 29-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xl-8 mb-5 mb-xl-10">
											<!--begin::Chart widget 24-->
											<div class="card card-flush overflow-hidden h-xl-100">
												<!--begin::Header-->
												<div class="card-header py-5">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-900">Human Resources</span>
														<span class="text-gray-500 mt-1 fw-semibold fs-6">Reports by states and ganders</span>
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
												<!--begin::Card body-->
												<div class="card-body pt-0">
													<!--begin::Chart-->
													<div id="kt_charts_widget_24" class="min-h-auto" style="height: 300px"></div>
													<!--end::Chart-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Chart widget 24-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									<!--begin::Row-->
									<div class="row gx-5 gx-xl-10">
										<!--begin::Col-->
										<div class="col-xl-4 mb-5 mb-xl-0">
											<!--begin::List widget 12-->
											<div class="card card-flush h-xl-100">
												<!--begin::Header-->
												<div class="card-header pt-7">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800">Visits by Source</span>
														<span class="text-gray-500 mt-1 fw-semibold fs-6">29.4k visitors</span>
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
												<div class="card-body d-flex align-items-end">
													<!--begin::Wrapper-->
													<div class="w-100">
														<!--begin::Item-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-30px me-5">
																<span class="symbol-label">
																	<i class="ki-duotone ki-rocket fs-3 text-gray-600">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Container-->
															<div class="d-flex align-items-center flex-stack flex-wrap d-grid gap-1 flex-row-fluid">
																<!--begin::Content-->
																<div class="me-5">
																	<!--begin::Title-->
																	<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Direct Source</a>
																	<!--end::Title-->
																	<!--begin::Desc-->
																	<span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Direct link clicks</span>
																	<!--end::Desc-->
																</div>
																<!--end::Content-->
																<!--begin::Wrapper-->
																<div class="d-flex align-items-center">
																	<!--begin::Number-->
																	<span class="text-gray-800 fw-bold fs-4 me-3">1,067</span>
																	<!--end::Number-->
																	<!--begin::Info-->
																	<!--begin::label-->
																	<span class="badge badge-light-success fs-base">
																	<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>2.6%</span>
																	<!--end::label-->
																	<!--end::Info-->
																</div>
																<!--end::Wrapper-->
															</div>
															<!--end::Container-->
														</div>
														<!--end::Item-->
														<!--begin::Separator-->
														<div class="separator separator-dashed my-3"></div>
														<!--end::Separator-->
														<!--begin::Item-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-30px me-5">
																<span class="symbol-label">
																	<i class="ki-duotone ki-tiktok fs-3 text-gray-600">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Container-->
															<div class="d-flex align-items-center flex-stack flex-wrap d-grid gap-1 flex-row-fluid">
																<!--begin::Content-->
																<div class="me-5">
																	<!--begin::Title-->
																	<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Social Networks</a>
																	<!--end::Title-->
																	<!--begin::Desc-->
																	<span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">All Social Channels</span>
																	<!--end::Desc-->
																</div>
																<!--end::Content-->
																<!--begin::Wrapper-->
																<div class="d-flex align-items-center">
																	<!--begin::Number-->
																	<span class="text-gray-800 fw-bold fs-4 me-3">24,588</span>
																	<!--end::Number-->
																	<!--begin::Info-->
																	<!--begin::label-->
																	<span class="badge badge-light-success fs-base">
																	<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>4.1%</span>
																	<!--end::label-->
																	<!--end::Info-->
																</div>
																<!--end::Wrapper-->
															</div>
															<!--end::Container-->
														</div>
														<!--end::Item-->
														<!--begin::Separator-->
														<div class="separator separator-dashed my-3"></div>
														<!--end::Separator-->
														<!--begin::Item-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-30px me-5">
																<span class="symbol-label">
																	<i class="ki-duotone ki-sms fs-3 text-gray-600">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Container-->
															<div class="d-flex align-items-center flex-stack flex-wrap d-grid gap-1 flex-row-fluid">
																<!--begin::Content-->
																<div class="me-5">
																	<!--begin::Title-->
																	<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Email Newsletter</a>
																	<!--end::Title-->
																	<!--begin::Desc-->
																	<span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Mailchimp Campaigns</span>
																	<!--end::Desc-->
																</div>
																<!--end::Content-->
																<!--begin::Wrapper-->
																<div class="d-flex align-items-center">
																	<!--begin::Number-->
																	<span class="text-gray-800 fw-bold fs-4 me-3">794</span>
																	<!--end::Number-->
																	<!--begin::Info-->
																	<!--begin::label-->
																	<span class="badge badge-light-success fs-base">
																	<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>0.2%</span>
																	<!--end::label-->
																	<!--end::Info-->
																</div>
																<!--end::Wrapper-->
															</div>
															<!--end::Container-->
														</div>
														<!--end::Item-->
														<!--begin::Separator-->
														<div class="separator separator-dashed my-3"></div>
														<!--end::Separator-->
														<!--begin::Item-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-30px me-5">
																<span class="symbol-label">
																	<i class="ki-duotone ki-icon fs-3 text-gray-600">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Container-->
															<div class="d-flex align-items-center flex-stack flex-wrap d-grid gap-1 flex-row-fluid">
																<!--begin::Content-->
																<div class="me-5">
																	<!--begin::Title-->
																	<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Referrals</a>
																	<!--end::Title-->
																	<!--begin::Desc-->
																	<span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Impact Radius visits</span>
																	<!--end::Desc-->
																</div>
																<!--end::Content-->
																<!--begin::Wrapper-->
																<div class="d-flex align-items-center">
																	<!--begin::Number-->
																	<span class="text-gray-800 fw-bold fs-4 me-3">6,578</span>
																	<!--end::Number-->
																	<!--begin::Info-->
																	<!--begin::label-->
																	<span class="badge badge-light-danger fs-base">
																	<i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>0.4%</span>
																	<!--end::label-->
																	<!--end::Info-->
																</div>
																<!--end::Wrapper-->
															</div>
															<!--end::Container-->
														</div>
														<!--end::Item-->
														<!--begin::Separator-->
														<div class="separator separator-dashed my-3"></div>
														<!--end::Separator-->
														<!--begin::Item-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-30px me-5">
																<span class="symbol-label">
																	<i class="ki-duotone ki-abstract-25 fs-3 text-gray-600">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Container-->
															<div class="d-flex align-items-center flex-stack flex-wrap d-grid gap-1 flex-row-fluid">
																<!--begin::Content-->
																<div class="me-5">
																	<!--begin::Title-->
																	<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Other</a>
																	<!--end::Title-->
																	<!--begin::Desc-->
																	<span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Many Sources</span>
																	<!--end::Desc-->
																</div>
																<!--end::Content-->
																<!--begin::Wrapper-->
																<div class="d-flex align-items-center">
																	<!--begin::Number-->
																	<span class="text-gray-800 fw-bold fs-4 me-3">79,458</span>
																	<!--end::Number-->
																	<!--begin::Info-->
																	<!--begin::label-->
																	<span class="badge badge-light-success fs-base">
																	<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>8.3%</span>
																	<!--end::label-->
																	<!--end::Info-->
																</div>
																<!--end::Wrapper-->
															</div>
															<!--end::Container-->
														</div>
														<!--end::Item-->
														<!--begin::Separator-->
														<div class="separator separator-dashed my-3"></div>
														<!--end::Separator-->
														<!--begin::Item-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-30px me-5">
																<span class="symbol-label">
																	<i class="ki-duotone ki-abstract-39 fs-3 text-gray-600">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Container-->
															<div class="d-flex align-items-center flex-stack flex-wrap d-grid gap-1 flex-row-fluid">
																<!--begin::Content-->
																<div class="me-5">
																	<!--begin::Title-->
																	<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Rising Networks</a>
																	<!--end::Title-->
																	<!--begin::Desc-->
																	<span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social Network</span>
																	<!--end::Desc-->
																</div>
																<!--end::Content-->
																<!--begin::Wrapper-->
																<div class="d-flex align-items-center">
																	<!--begin::Number-->
																	<span class="text-gray-800 fw-bold fs-4 me-3">18,047</span>
																	<!--end::Number-->
																	<!--begin::Info-->
																	<!--begin::label-->
																	<span class="badge badge-light-success fs-base">
																	<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>1.9%</span>
																	<!--end::label-->
																	<!--end::Info-->
																</div>
																<!--end::Wrapper-->
															</div>
															<!--end::Container-->
														</div>
														<!--end::Item-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::List widget 12-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xl-4 mb-5 mb-xl-0">
											<!--begin::Chart widget 31-->
											<div class="card card-flush h-xl-100">
												<!--begin::Header-->
												<div class="card-header pt-7 mb-7">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800">Warephase stats</span>
														<span class="text-gray-500 mt-1 fw-semibold fs-6">8k social visitors</span>
													</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<a href="{{ route('metronic.apps.ecommerce.catalog.add_product') }}" class="btn btn-sm btn-light">PDF Report</a>
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body d-flex align-items-end pt-0">
													<!--begin::Chart-->
													<div id="kt_charts_widget_31_chart" class="w-100 h-300px"></div>
													<!--end::Chart-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Chart widget 31-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xl-4 mb-5 mb-xl-0">
											<!--begin::Chart widget 30-->
											<div class="card card-flush h-xl-100">
												<!--begin::Header-->
												<div class="card-header pt-7 mb-7">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800">Stats by Department</span>
														<span class="text-gray-500 mt-1 fw-semibold fs-6">8k social visitors</span>
													</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<a href="{{ route('metronic.apps.ecommerce.catalog.add_product') }}" class="btn btn-sm btn-light">PDF Report</a>
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body d-flex justify-content-between flex-column">
													<!--begin::Items-->
													<div class="d-flex flex-wrap d-grid gap-5 mb-10">
														<!--begin::Item-->
														<div class="border-end-dashed border-end border-gray-300 pe-xxl-7 me-xxl-5">
															<!--begin::Statistics-->
															<div class="d-flex mb-2">
																<span class="fs-4 fw-semibold text-gray-500 me-1">$</span>
																<span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">8,035</span>
															</div>
															<!--end::Statistics-->
															<!--begin::Description-->
															<span class="fs-6 fw-semibold text-gray-500">Actual for April</span>
															<!--end::Description-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="m-0">
															<!--begin::Statistics-->
															<div class="d-flex align-items-center mb-2">
																<!--begin::Currency-->
																<span class="fs-4 fw-semibold text-gray-500 align-self-start me-1">$</span>
																<!--end::Currency-->
																<!--begin::Value-->
																<span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">4,684</span>
																<!--end::Value-->
																<!--begin::Label-->
																<span class="badge badge-light-success fs-base">
																<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>4.5%</span>
																<!--end::Label-->
															</div>
															<!--end::Statistics-->
															<!--begin::Description-->
															<span class="fs-6 fw-semibold text-gray-500">GAP</span>
															<!--end::Description-->
														</div>
														<!--end::Item-->
													</div>
													<!--end::Items-->
													<!--begin::Chart container-->
													<div id="kt_charts_widget_30_chart" class="w-100 h-200px"></div>
													<!--end::Chart container-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Chart widget 30-->
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
								<a href="#" class="fw-bold link-primary">Project Guidelines</a>.</div>
								<!--end::Description-->
							</div>
							<!--end::Heading-->
							<!--begin::Input group-->
							<div class="d-flex flex-column mb-8 fv-row">
								<!--begin::Label-->
								<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
									<span class="required">Target Title</span>
									<span class="ms-1" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
										<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span>
								</label>
								<!--end::Label-->
								<input type="text" class="form-control form-control-solid" placeholder="Enter Target Title" name="target_title" />
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="row g-9 mb-8">
								<!--begin::Col-->
								<div class="col-md-6 fv-row">
									<label class="required fs-6 fw-semibold mb-2">Assign</label>
									<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member" name="target_assign">
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
										<input class="form-control form-control-solid ps-12" placeholder="Select a date" name="due_date" />
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
								<textarea class="form-control form-control-solid" rows="3" name="target_details" placeholder="Type Target Details"></textarea>
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
									<div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
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
											<input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="email" checked="checked" />
											<span class="form-check-label fw-semibold">Email</span>
										</label>
										<!--end::Checkbox-->
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid">
											<input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="phone" />
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
								<button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">Cancel</button>
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
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
<script src="assets/js/widgets.bundle.js"></script>
<script src="assets/js/custom/widgets.js"></script>
<script src="assets/js/custom/apps/chat/chat.js"></script>
<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="assets/js/custom/utilities/modals/new-target.js"></script>
@endsection
