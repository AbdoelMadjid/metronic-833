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
										<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">eCommerce Dashboard</h1>
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
										<a href="{{ route('metronic.apps.ecommerce.sales.listing') }}" class="btn btn-sm fw-bold btn-secondary">Manage Sales</a>
										<!--end::Secondary button-->
										<!--begin::Primary button-->
										<a href="{{ route('metronic.apps.ecommerce.catalog.add_product') }}" class="btn btn-sm fw-bold btn-primary">Add Product</a>
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
									<div class="row gx-5 gx-xl-10 mb-xl-10">
										<!--begin::Col-->
										<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-10">
											<!--begin::Card widget 4-->
											<div class="card card-flush h-md-50 mb-5 mb-xl-10">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<div class="card-title d-flex flex-column">
														<!--begin::Info-->
														<div class="d-flex align-items-center">
															<!--begin::Currency-->
															<span class="fs-4 fw-semibold text-gray-500 me-1 align-self-start">$</span>
															<!--end::Currency-->
															<!--begin::Amount-->
															<span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">69,700</span>
															<!--end::Amount-->
															<!--begin::Badge-->
															<span class="badge badge-light-success fs-base">
															<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>2.2%</span>
															<!--end::Badge-->
														</div>
														<!--end::Info-->
														<!--begin::Subtitle-->
														<span class="text-gray-500 pt-1 fw-semibold fs-6">Expected Earnings</span>
														<!--end::Subtitle-->
													</div>
													<!--end::Title-->
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body pt-2 pb-4 d-flex align-items-center">
													<!--begin::Chart-->
													<div class="d-flex flex-center me-5 pt-2">
														<div id="kt_card_widget_4_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11"></div>
													</div>
													<!--end::Chart-->
													<!--begin::Labels-->
													<div class="d-flex flex-column content-justify-center w-100">
														<!--begin::Label-->
														<div class="d-flex fs-6 fw-semibold align-items-center">
															<!--begin::Bullet-->
															<div class="bullet w-8px h-6px rounded-2 bg-danger me-3"></div>
															<!--end::Bullet-->
															<!--begin::Label-->
															<div class="text-gray-500 flex-grow-1 me-4">Shoes</div>
															<!--end::Label-->
															<!--begin::Stats-->
															<div class="fw-bolder text-gray-700 text-xxl-end">$7,660</div>
															<!--end::Stats-->
														</div>
														<!--end::Label-->
														<!--begin::Label-->
														<div class="d-flex fs-6 fw-semibold align-items-center my-3">
															<!--begin::Bullet-->
															<div class="bullet w-8px h-6px rounded-2 bg-primary me-3"></div>
															<!--end::Bullet-->
															<!--begin::Label-->
															<div class="text-gray-500 flex-grow-1 me-4">Gaming</div>
															<!--end::Label-->
															<!--begin::Stats-->
															<div class="fw-bolder text-gray-700 text-xxl-end">$2,820</div>
															<!--end::Stats-->
														</div>
														<!--end::Label-->
														<!--begin::Label-->
														<div class="d-flex fs-6 fw-semibold align-items-center">
															<!--begin::Bullet-->
															<div class="bullet w-8px h-6px rounded-2 me-3" style="background-color: #E4E6EF"></div>
															<!--end::Bullet-->
															<!--begin::Label-->
															<div class="text-gray-500 flex-grow-1 me-4">Others</div>
															<!--end::Label-->
															<!--begin::Stats-->
															<div class="fw-bolder text-gray-700 text-xxl-end">$45,257</div>
															<!--end::Stats-->
														</div>
														<!--end::Label-->
													</div>
													<!--end::Labels-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card widget 4-->
											<!--begin::Card widget 5-->
											<div class="card card-flush h-md-50 mb-xl-10">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<div class="card-title d-flex flex-column">
														<!--begin::Info-->
														<div class="d-flex align-items-center">
															<!--begin::Amount-->
															<span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">1,836</span>
															<!--end::Amount-->
															<!--begin::Badge-->
															<span class="badge badge-light-danger fs-base">
															<i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>2.2%</span>
															<!--end::Badge-->
														</div>
														<!--end::Info-->
														<!--begin::Subtitle-->
														<span class="text-gray-500 pt-1 fw-semibold fs-6">Orders This Month</span>
														<!--end::Subtitle-->
													</div>
													<!--end::Title-->
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body d-flex align-items-end pt-0">
													<!--begin::Progress-->
													<div class="d-flex align-items-center flex-column mt-3 w-100">
														<div class="d-flex justify-content-between w-100 mt-auto mb-2">
															<span class="fw-bolder fs-6 text-gray-900">1,048 to Goal</span>
															<span class="fw-bold fs-6 text-gray-500">62%</span>
														</div>
														<div class="h-8px mx-3 w-100 bg-light-success rounded">
															<div class="bg-success rounded h-8px" role="progressbar" style="width: 62%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
													<!--end::Progress-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card widget 5-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-10">
											<!--begin::Card widget 6-->
											<div class="card card-flush h-md-50 mb-5 mb-xl-10">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<div class="card-title d-flex flex-column">
														<!--begin::Info-->
														<div class="d-flex align-items-center">
															<!--begin::Currency-->
															<span class="fs-4 fw-semibold text-gray-500 me-1 align-self-start">$</span>
															<!--end::Currency-->
															<!--begin::Amount-->
															<span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">2,420</span>
															<!--end::Amount-->
															<!--begin::Badge-->
															<span class="badge badge-light-success fs-base">
															<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>2.6%</span>
															<!--end::Badge-->
														</div>
														<!--end::Info-->
														<!--begin::Subtitle-->
														<span class="text-gray-500 pt-1 fw-semibold fs-6">Average Daily Sales</span>
														<!--end::Subtitle-->
													</div>
													<!--end::Title-->
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body d-flex align-items-end px-0 pb-0">
													<!--begin::Chart-->
													<div id="kt_card_widget_6_chart" class="w-100" style="height: 80px"></div>
													<!--end::Chart-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card widget 6-->
											<!--begin::Card widget 7-->
											<div class="card card-flush h-md-50 mb-xl-10">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<div class="card-title d-flex flex-column">
														<!--begin::Amount-->
														<span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">6.3k</span>
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
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
															<span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
														</div>
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
															<img alt="Pic" src="assets/media/avatars/300-11.jpg" />
														</div>
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
															<span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
														</div>
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
															<img alt="Pic" src="assets/media/avatars/300-2.jpg" />
														</div>
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
															<span class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
														</div>
														<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
															<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
														</div>
														<a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
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
										<!--begin::Col-->
										<div class="col-lg-12 col-xl-12 col-xxl-6 mb-5 mb-xl-0">
											<!--begin::Chart widget 3-->
											<div class="card card-flush overflow-hidden h-md-100">
												<!--begin::Header-->
												<div class="card-header py-5">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-900">Sales This Months</span>
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
												<!--begin::Card body-->
												<div class="card-body d-flex justify-content-between flex-column pb-1 px-0">
													<!--begin::Statistics-->
													<div class="px-9 mb-5">
														<!--begin::Statistics-->
														<div class="d-flex mb-2">
															<span class="fs-4 fw-semibold text-gray-500 me-1">$</span>
															<span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">14,094</span>
														</div>
														<!--end::Statistics-->
														<!--begin::Description-->
														<span class="fs-6 fw-semibold text-gray-500">Another $48,346 to Goal</span>
														<!--end::Description-->
													</div>
													<!--end::Statistics-->
													<!--begin::Chart-->
													<div id="kt_charts_widget_3" class="min-h-auto ps-4 pe-6" style="height: 300px"></div>
													<!--end::Chart-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Chart widget 3-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									<!--begin::Row-->
									<div class="row gy-5 g-xl-10">
										<!--begin::Col-->
										<div class="col-xl-6 mb-xl-10">
											<!--begin::Table widget 2-->
											<div class="card h-md-100">
												<!--begin::Header-->
												<div class="card-header align-items-center border-0">
													<!--begin::Title-->
													<h3 class="fw-bold text-gray-900 m-0">Recent Orders</h3>
													<!--end::Title-->
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
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-2">
													<!--begin::Nav-->
													<ul class="nav nav-pills nav-pills-custom mb-3">
														<!--begin::Item-->
														<li class="nav-item mb-3 me-3 me-lg-6">
															<!--begin::Link-->
															<a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden active w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_2_tab_1">
																<!--begin::Icon-->
																<div class="nav-icon">
																	<img alt="" src="assets/media/svg/products-categories/t-shirt.svg" class="" />
																</div>
																<!--end::Icon-->
																<!--begin::Subtitle-->
																<span class="nav-text text-gray-700 fw-bold fs-6 lh-1">T-shirt</span>
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
															<a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_2_tab_2">
																<!--begin::Icon-->
																<div class="nav-icon">
																	<img alt="" src="assets/media/svg/products-categories/gaming.svg" class="" />
																</div>
																<!--end::Icon-->
																<!--begin::Subtitle-->
																<span class="nav-text text-gray-700 fw-bold fs-6 lh-1">Gaming</span>
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
															<a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_2_tab_3">
																<!--begin::Icon-->
																<div class="nav-icon">
																	<img alt="" src="assets/media/svg/products-categories/watch.svg" class="" />
																</div>
																<!--end::Icon-->
																<!--begin::Subtitle-->
																<span class="nav-text text-gray-600 fw-bold fs-6 lh-1">Watch</span>
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
															<a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_2_tab_4">
																<!--begin::Icon-->
																<div class="nav-icon">
																	<img alt="" src="assets/media/svg/products-categories/gloves.svg" class="nav-icon" />
																</div>
																<!--end::Icon-->
																<!--begin::Subtitle-->
																<span class="nav-text text-gray-600 fw-bold fs-6 lh-1">Gloves</span>
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
															<a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_2_tab_5">
																<!--begin::Icon-->
																<div class="nav-icon">
																	<img alt="" src="assets/media/svg/products-categories/shoes.svg" class="nav-icon" />
																</div>
																<!--end::Icon-->
																<!--begin::Subtitle-->
																<span class="nav-text text-gray-600 fw-bold fs-6 lh-1">Shoes</span>
																<!--end::Subtitle-->
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
														<div class="tab-pane fade show active" id="kt_stats_widget_2_tab_1">
															<!--begin::Table container-->
															<div class="table-responsive">
																<!--begin::Table-->
																<table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
																	<!--begin::Table head-->
																	<thead>
																		<tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
																			<th class="ps-0 w-50px">ITEM</th>
																			<th class="min-w-125px"></th>
																			<th class="text-end min-w-100px">QTY</th>
																			<th class="pe-0 text-end min-w-100px">PRICE</th>
																			<th class="pe-0 text-end min-w-100px">TOTAL PRICE</th>
																		</tr>
																	</thead>
																	<!--end::Table head-->
																	<!--begin::Table body-->
																	<tbody>
																		<tr>
																			<td>
																				<img src="assets/media/stock/ecommerce/210.png" class="w-50px ms-n1" alt="" />
																			</td>
																			<td class="ps-0">
																				<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Elephant 1802</a>
																				<span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-2347</span>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x1</span>
																			</td>
																			<td class="text-end pe-0">
																				<span class="text-gray-800 fw-bold d-block fs-6">$72.00</span>
																			</td>
																			<td class="text-end pe-0">
																				<span class="text-gray-800 fw-bold d-block fs-6">$126.00</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<img src="assets/media/stock/ecommerce/215.png" class="w-50px ms-n1" alt="" />
																			</td>
																			<td class="ps-0">
																				<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Red Laga</a>
																				<span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-1321</span>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x2</span>
																			</td>
																			<td class="text-end pe-0">
																				<span class="text-gray-800 fw-bold d-block fs-6">$45.00</span>
																			</td>
																			<td class="text-end pe-0">
																				<span class="text-gray-800 fw-bold d-block fs-6">$76.00</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<img src="assets/media/stock/ecommerce/209.png" class="w-50px ms-n1" alt="" />
																			</td>
																			<td class="ps-0">
																				<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">RiseUP</a>
																				<span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-4312</span>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x3</span>
																			</td>
																			<td class="text-end pe-0">
																				<span class="text-gray-800 fw-bold d-block fs-6">$84.00</span>
																			</td>
																			<td class="text-end pe-0">
																				<span class="text-gray-800 fw-bold d-block fs-6">$168.00</span>
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
														<div class="tab-pane fade" id="kt_stats_widget_2_tab_2">
															<!--begin::Table container-->
															<div class="table-responsive">
																<!--begin::Table-->
																<table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
																	<!--begin::Table head-->
																	<thead>
																		<tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
																			<th class="ps-0 w-50px">ITEM</th>
																			<th class="min-w-125px"></th>
																			<th class="text-end min-w-100px">QTY</th>
																			<th class="pe-0 text-end min-w-100px">PRICE</th>
																			<th class="pe-0 text-end min-w-100px">TOTAL PRICE</th>
																		</tr>
																	</thead>
																	<!--end::Table head-->
																	<!--begin::Table body-->
																	<tbody>
																		<tr>
																			<td>
																				<img src="assets/media/stock/ecommerce/197.png" class="w-50px ms-n1" alt="" />
																			</td>
																			<td class="ps-0">
																				<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Elephant 1802</a>
																				<span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-4312</span>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x1</span>
																			</td>
																			<td class="text-end pe-0">
																				<span class="text-gray-800 fw-bold d-block fs-6">$32.00</span>
																			</td>
																			<td class="text-end pe-0">
																				<span class="text-gray-800 fw-bold d-block fs-6">$312.00</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<img src="assets/media/stock/ecommerce/178.png" class="w-50px ms-n1" alt="" />
																			</td>
																			<td class="ps-0">
																				<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Red Laga</a>
																				<span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-3122</span>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x2</span>
																			</td>
																			<td class="text-end pe-0">
																				<span class="text-gray-800 fw-bold d-block fs-6">$53.00</span>
																			</td>
																			<td class="text-end pe-0">
																				<span class="text-gray-800 fw-bold d-block fs-6">$62.00</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<img src="assets/media/stock/ecommerce/22.png" class="w-50px ms-n1" alt="" />
																			</td>
																			<td class="ps-0">
																				<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">RiseUP</a>
																				<span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-1142</span>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x3</span>
																			</td>
																			<td class="text-end pe-0">
																				<span class="text-gray-800 fw-bold d-block fs-6">$74.00</span>
																			</td>
																			<td class="text-end pe-0">
																				<span class="text-gray-800 fw-bold d-block fs-6">$139.00</span>
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
														<div class="tab-pane fade" id="kt_stats_widget_2_tab_3">
															<!--begin::Table container-->
															<div class="table-responsive">
																<!--begin::Table-->
																<table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
																	<!--begin::Table head-->
																	<thead>
																		<tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
																			<th class="ps-0 w-50px">ITEM</th>
																			<th class="min-w-125px"></th>
																			<th class="text-end min-w-100px">QTY</th>
																			<th class="pe-0 text-end min-w-100px">PRICE</th>
																			<th class="pe-0 text-end min-w-100px">TOTAL PRICE</th>
																		</tr>
																	</thead>
																	<!--end::Table head-->
																	<!--begin::Table body-->
																	<tbody>
																		<tr>
																			<td>
																				<img src="assets/media/stock/ecommerce/1.png" class="w-50px ms-n1" alt="" />
																			</td>
																			<td class="ps-0">
																				<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Elephant 1324</a>
																				<span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-1523</span>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x1</span>
																			</td>
																			<td class="text-end pe-0">
																				<span class="text-gray-800 fw-bold d-block fs-6">$43.00</span>
																			</td>
																			<td class="text-end pe-0">
																				<span class="text-gray-800 fw-bold d-block fs-6">$231.00</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<img src="assets/media/stock/ecommerce/24.png" class="w-50px ms-n1" alt="" />
																			</td>
																			<td class="ps-0">
																				<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Red Laga</a>
																				<span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-5314</span>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x2</span>
																			</td>
																			<td class="text-end pe-0">
																				<span class="text-gray-800 fw-bold d-block fs-6">$71.00</span>
																			</td>
																			<td class="text-end pe-0">
																				<span class="text-gray-800 fw-bold d-block fs-6">$53.00</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<img src="assets/media/stock/ecommerce/71.png" class="w-50px ms-n1" alt="" />
																			</td>
																			<td class="ps-0">
																				<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">RiseUP</a>
																				<span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-4222</span>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x3</span>
																			</td>
																			<td class="text-end pe-0">
																				<span class="text-gray-800 fw-bold d-block fs-6">$23.00</span>
																			</td>
																			<td class="text-end pe-0">
																				<span class="text-gray-800 fw-bold d-block fs-6">$213.00</span>
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
														<div class="tab-pane fade" id="kt_stats_widget_2_tab_4">
															<!--begin::Table container-->
															<div class="table-responsive">
																<!--begin::Table-->
																<table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
																	<!--begin::Table head-->
																	<thead>
																		<tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
																			<th class="ps-0 w-50px">ITEM</th>
																			<th class="min-w-125px"></th>
																			<th class="text-end min-w-100px">QTY</th>
																			<th class="pe-0 text-end min-w-100px">PRICE</th>
																			<th class="pe-0 text-end min-w-100px">TOTAL PRICE</th>
																		</tr>
																	</thead>
																	<!--end::Table head-->
																	<!--begin::Table body-->
																	<tbody>
																		<tr>
																			<td>
																				<img src="assets/media/stock/ecommerce/41.png" class="w-50px ms-n1" alt="" />
																			</td>
																			<td class="ps-0">
																				<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Elephant 2635</a>
																				<span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-1523</span>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x1</span>
																			</td>
																			<td class="text-end pe-0">
																				<span class="text-gray-800 fw-bold d-block fs-6">$65.00</span>
																			</td>
																			<td class="text-end pe-0">
																				<span class="text-gray-800 fw-bold d-block fs-6">$163.00</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<img src="assets/media/stock/ecommerce/63.png" class="w-50px ms-n1" alt="" />
																			</td>
																			<td class="ps-0">
																				<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Red Laga</a>
																				<span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-2745</span>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x2</span>
																			</td>
																			<td class="text-end pe-0">
																				<span class="text-gray-800 fw-bold d-block fs-6">$64.00</span>
																			</td>
																			<td class="text-end pe-0">
																				<span class="text-gray-800 fw-bold d-block fs-6">$73.00</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<img src="assets/media/stock/ecommerce/59.png" class="w-50px ms-n1" alt="" />
																			</td>
																			<td class="ps-0">
																				<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">RiseUP</a>
																				<span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-5173</span>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x3</span>
																			</td>
																			<td class="text-end pe-0">
																				<span class="text-gray-800 fw-bold d-block fs-6">$54.00</span>
																			</td>
																			<td class="text-end pe-0">
																				<span class="text-gray-800 fw-bold d-block fs-6">$173.00</span>
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
														<div class="tab-pane fade" id="kt_stats_widget_2_tab_5">
															<!--begin::Table container-->
															<div class="table-responsive">
																<!--begin::Table-->
																<table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
																	<!--begin::Table head-->
																	<thead>
																		<tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
																			<th class="ps-0 w-50px">ITEM</th>
																			<th class="min-w-125px"></th>
																			<th class="text-end min-w-100px">QTY</th>
																			<th class="pe-0 text-end min-w-100px">PRICE</th>
																			<th class="pe-0 text-end min-w-100px">TOTAL PRICE</th>
																		</tr>
																	</thead>
																	<!--end::Table head-->
																	<!--begin::Table body-->
																	<tbody>
																		<tr>
																			<td>
																				<img src="assets/media/stock/ecommerce/10.png" class="w-50px ms-n1" alt="" />
																			</td>
																			<td class="ps-0">
																				<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Nike</a>
																				<span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-2163</span>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x1</span>
																			</td>
																			<td class="text-end pe-0">
																				<span class="text-gray-800 fw-bold d-block fs-6">$64.00</span>
																			</td>
																			<td class="text-end pe-0">
																				<span class="text-gray-800 fw-bold d-block fs-6">$287.00</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<img src="assets/media/stock/ecommerce/96.png" class="w-50px ms-n1" alt="" />
																			</td>
																			<td class="ps-0">
																				<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Adidas</a>
																				<span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-2162</span>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x2</span>
																			</td>
																			<td class="text-end pe-0">
																				<span class="text-gray-800 fw-bold d-block fs-6">$76.00</span>
																			</td>
																			<td class="text-end pe-0">
																				<span class="text-gray-800 fw-bold d-block fs-6">$51.00</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<img src="assets/media/stock/ecommerce/13.png" class="w-50px ms-n1" alt="" />
																			</td>
																			<td class="ps-0">
																				<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Puma</a>
																				<span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-1537</span>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x3</span>
																			</td>
																			<td class="text-end pe-0">
																				<span class="text-gray-800 fw-bold d-block fs-6">$27.00</span>
																			</td>
																			<td class="text-end pe-0">
																				<span class="text-gray-800 fw-bold d-block fs-6">$167.00</span>
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
											<!--end::Table widget 2-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xl-6 mb-5 mb-xl-10">
											<!--begin::Chart widget 4-->
											<div class="card card-flush overflow-hidden h-md-100">
												<!--begin::Header-->
												<div class="card-header py-5">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-900">Discounted Product Sales</span>
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
												<!--begin::Card body-->
												<div class="card-body d-flex justify-content-between flex-column pb-1 px-0">
													<!--begin::Info-->
													<div class="px-9 mb-5">
														<!--begin::Statistics-->
														<div class="d-flex align-items-center mb-2">
															<!--begin::Currency-->
															<span class="fs-4 fw-semibold text-gray-500 align-self-start me-1">$</span>
															<!--end::Currency-->
															<!--begin::Value-->
															<span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">3,706</span>
															<!--end::Value-->
															<!--begin::Label-->
															<span class="badge badge-light-success fs-base">
															<i class="ki-duotone ki-arrow-down fs-5 text-success ms-n1">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>4.5%</span>
															<!--end::Label-->
														</div>
														<!--end::Statistics-->
														<!--begin::Description-->
														<span class="fs-6 fw-semibold text-gray-500">Total Discounted Sales This Month</span>
														<!--end::Description-->
													</div>
													<!--end::Info-->
													<!--begin::Chart-->
													<div id="kt_charts_widget_4" class="min-h-auto ps-4 pe-6" style="height: 300px"></div>
													<!--end::Chart-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Chart widget 4-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									<!--begin::Row-->
									<div class="row gy-5 g-xl-10">
										<!--begin::Col-->
										<div class="col-xl-4 mb-xl-10">
											<!--begin::Engage widget 1-->
											<div class="card h-md-100" dir="ltr">
												<!--begin::Body-->
												<div class="card-body d-flex flex-column flex-center">
													<!--begin::Heading-->
													<div class="mb-2">
														<!--begin::Title-->
														<h1 class="fw-semibold text-gray-800 text-center lh-lg">Have you tried
														<br />new
														<span class="fw-bolder">eCommerce App ?</span></h1>
														<!--end::Title-->
														<!--begin::Illustration-->
														<div class="py-10 text-center">
															<img src="assets/media/svg/illustrations/easy/2.svg" class="theme-light-show w-200px" alt="" />
															<img src="assets/media/svg/illustrations/easy/2-dark.svg" class="theme-dark-show w-200px" alt="" />
														</div>
														<!--end::Illustration-->
													</div>
													<!--end::Heading-->
													<!--begin::Links-->
													<div class="text-center mb-1">
														<!--begin::Link-->
														<a class="btn btn-sm btn-primary me-2" href="{{ route('metronic.apps.ecommerce.sales.listing') }}">View App</a>
														<!--end::Link-->
														<!--begin::Link-->
														<a class="btn btn-sm btn-light" href="{{ route('metronic.apps.ecommerce.catalog.add_product') }}">New Product</a>
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
											<!--begin::Table Widget 4-->
											<div class="card card-flush h-xl-100">
												<!--begin::Card header-->
												<div class="card-header pt-7">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800">Product Orders</span>
														<span class="text-gray-500 mt-1 fw-semibold fs-6">Avg. 57 orders per day</span>
													</h3>
													<!--end::Title-->
													<!--begin::Actions-->
													<div class="card-toolbar">
														<!--begin::Filters-->
														<div class="d-flex flex-stack flex-wrap gap-4">
															<!--begin::Destination-->
															<div class="d-flex align-items-center fw-bold">
																<!--begin::Label-->
																<div class="text-gray-500 fs-7 me-2">Cateogry</div>
																<!--end::Label-->
																<!--begin::Select-->
																<select class="form-select form-select-transparent text-graY-800 fs-base lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option">
																	<option></option>
																	<option value="Show All" selected="selected">Show All</option>
																	<option value="a">Category A</option>
																	<option value="b">Category A</option>
																</select>
																<!--end::Select-->
															</div>
															<!--end::Destination-->
															<!--begin::Status-->
															<div class="d-flex align-items-center fw-bold">
																<!--begin::Label-->
																<div class="text-gray-500 fs-7 me-2">Status</div>
																<!--end::Label-->
																<!--begin::Select-->
																<select class="form-select form-select-transparent text-gray-900 fs-7 lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option" data-kt-table-widget-4="filter_status">
																	<option></option>
																	<option value="Show All" selected="selected">Show All</option>
																	<option value="Shipped">Shipped</option>
																	<option value="Confirmed">Confirmed</option>
																	<option value="Rejected">Rejected</option>
																	<option value="Pending">Pending</option>
																</select>
																<!--end::Select-->
															</div>
															<!--end::Status-->
															<!--begin::Search-->
															<div class="position-relative my-1">
																<i class="ki-duotone ki-magnifier fs-2 position-absolute top-50 translate-middle-y ms-4">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
																<input type="text" data-kt-table-widget-4="search" class="form-control w-150px fs-7 ps-12" placeholder="Search" />
															</div>
															<!--end::Search-->
														</div>
														<!--begin::Filters-->
													</div>
													<!--end::Actions-->
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body pt-2">
													<!--begin::Table-->
													<table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_4_table">
														<!--begin::Table head-->
														<thead>
															<!--begin::Table row-->
															<tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
																<th class="min-w-100px">Order ID</th>
																<th class="text-end min-w-100px">Created</th>
																<th class="text-end min-w-125px">Customer</th>
																<th class="text-end min-w-100px">Total</th>
																<th class="text-end min-w-100px">Profit</th>
																<th class="text-end min-w-50px">Status</th>
																<th class="text-end"></th>
															</tr>
															<!--end::Table row-->
														</thead>
														<!--end::Table head-->
														<!--begin::Table body-->
														<tbody class="fw-bold text-gray-600">
															<tr data-kt-table-widget-4="subtable_template" class="d-none">
																<td colspan="2">
																	<div class="d-flex align-items-center gap-3">
																		<a href="#" class="symbol symbol-50px bg-secondary bg-opacity-25 rounded">
																			<img src="" data-kt-src-path="/assets/media/stock/ecommerce/" alt="" data-kt-table-widget-4="template_image" />
																		</a>
																		<div class="d-flex flex-column text-muted">
																			<a href="#" class="text-gray-800 text-hover-primary fw-bold" data-kt-table-widget-4="template_name">Product name</a>
																			<div class="fs-7" data-kt-table-widget-4="template_description">Product description</div>
																		</div>
																	</div>
																</td>
																<td class="text-end">
																	<div class="text-gray-800 fs-7">Cost</div>
																	<div class="text-muted fs-7 fw-bold" data-kt-table-widget-4="template_cost">1</div>
																</td>
																<td class="text-end">
																	<div class="text-gray-800 fs-7">Qty</div>
																	<div class="text-muted fs-7 fw-bold" data-kt-table-widget-4="template_qty">1</div>
																</td>
																<td class="text-end">
																	<div class="text-gray-800 fs-7">Total</div>
																	<div class="text-muted fs-7 fw-bold" data-kt-table-widget-4="template_total">name</div>
																</td>
																<td class="text-end">
																	<div class="text-gray-800 fs-7 me-3">On hand</div>
																	<div class="text-muted fs-7 fw-bold" data-kt-table-widget-4="template_stock">32</div>
																</td>
																<td></td>
															</tr>
															<tr>
																<td>
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary">#XGY-346</a>
																</td>
																<td class="text-end">7 min ago</td>
																<td class="text-end">
																	<a href="#" class="text-gray-600 text-hover-primary">Albert Flores</a>
																</td>
																<td class="text-end">$630.00</td>
																<td class="text-end">
																	<span class="text-gray-800 fw-bolder">$86.70</span>
																</td>
																<td class="text-end">
																	<span class="badge py-3 px-4 fs-7 badge-light-warning">Pending</span>
																</td>
																<td class="text-end">
																	<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
																		<i class="ki-duotone ki-plus fs-4 m-0 toggle-off"></i>
																		<i class="ki-duotone ki-minus fs-4 m-0 toggle-on"></i>
																	</button>
																</td>
															</tr>
															<tr>
																<td>
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary">#YHD-047</a>
																</td>
																<td class="text-end">52 min ago</td>
																<td class="text-end">
																	<a href="#" class="text-gray-600 text-hover-primary">Jenny Wilson</a>
																</td>
																<td class="text-end">$25.00</td>
																<td class="text-end">
																	<span class="text-gray-800 fw-bolder">$4.20</span>
																</td>
																<td class="text-end">
																	<span class="badge py-3 px-4 fs-7 badge-light-primary">Confirmed</span>
																</td>
																<td class="text-end">
																	<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
																		<i class="ki-duotone ki-plus fs-4 m-0 toggle-off"></i>
																		<i class="ki-duotone ki-minus fs-4 m-0 toggle-on"></i>
																	</button>
																</td>
															</tr>
															<tr>
																<td>
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary">#SRR-678</a>
																</td>
																<td class="text-end">1 hour ago</td>
																<td class="text-end">
																	<a href="#" class="text-gray-600 text-hover-primary">Robert Fox</a>
																</td>
																<td class="text-end">$1,630.00</td>
																<td class="text-end">
																	<span class="text-gray-800 fw-bolder">$203.90</span>
																</td>
																<td class="text-end">
																	<span class="badge py-3 px-4 fs-7 badge-light-warning">Pending</span>
																</td>
																<td class="text-end">
																	<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
																		<i class="ki-duotone ki-plus fs-4 m-0 toggle-off"></i>
																		<i class="ki-duotone ki-minus fs-4 m-0 toggle-on"></i>
																	</button>
																</td>
															</tr>
															<tr>
																<td>
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary">#PXF-534</a>
																</td>
																<td class="text-end">3 hour ago</td>
																<td class="text-end">
																	<a href="#" class="text-gray-600 text-hover-primary">Cody Fisher</a>
																</td>
																<td class="text-end">$119.00</td>
																<td class="text-end">
																	<span class="text-gray-800 fw-bolder">$12.00</span>
																</td>
																<td class="text-end">
																	<span class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
																</td>
																<td class="text-end">
																	<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
																		<i class="ki-duotone ki-plus fs-4 m-0 toggle-off"></i>
																		<i class="ki-duotone ki-minus fs-4 m-0 toggle-on"></i>
																	</button>
																</td>
															</tr>
															<tr>
																<td>
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary">#XGD-249</a>
																</td>
																<td class="text-end">2 day ago</td>
																<td class="text-end">
																	<a href="#" class="text-gray-600 text-hover-primary">Arlene McCoy</a>
																</td>
																<td class="text-end">$660.00</td>
																<td class="text-end">
																	<span class="text-gray-800 fw-bolder">$52.26</span>
																</td>
																<td class="text-end">
																	<span class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
																</td>
																<td class="text-end">
																	<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
																		<i class="ki-duotone ki-plus fs-4 m-0 toggle-off"></i>
																		<i class="ki-duotone ki-minus fs-4 m-0 toggle-on"></i>
																	</button>
																</td>
															</tr>
															<tr>
																<td>
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary">#SKP-035</a>
																</td>
																<td class="text-end">2 day ago</td>
																<td class="text-end">
																	<a href="#" class="text-gray-600 text-hover-primary">Eleanor Pena</a>
																</td>
																<td class="text-end">$290.00</td>
																<td class="text-end">
																	<span class="text-gray-800 fw-bolder">$29.00</span>
																</td>
																<td class="text-end">
																	<span class="badge py-3 px-4 fs-7 badge-light-danger">Rejected</span>
																</td>
																<td class="text-end">
																	<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
																		<i class="ki-duotone ki-plus fs-4 m-0 toggle-off"></i>
																		<i class="ki-duotone ki-minus fs-4 m-0 toggle-on"></i>
																	</button>
																</td>
															</tr>
															<tr>
																<td>
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary">#SKP-567</a>
																</td>
																<td class="text-end">7 min ago</td>
																<td class="text-end">
																	<a href="#" class="text-gray-600 text-hover-primary">Dan Wilson</a>
																</td>
																<td class="text-end">$590.00</td>
																<td class="text-end">
																	<span class="text-gray-800 fw-bolder">$50.00</span>
																</td>
																<td class="text-end">
																	<span class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
																</td>
																<td class="text-end">
																	<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
																		<i class="ki-duotone ki-plus fs-4 m-0 toggle-off"></i>
																		<i class="ki-duotone ki-minus fs-4 m-0 toggle-on"></i>
																	</button>
																</td>
															</tr>
														</tbody>
														<!--end::Table body-->
													</table>
													<!--end::Table-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Table Widget 4-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									<!--begin::Row-->
									<div class="row gy-5 g-xl-10">
										<!--begin::Col-->
										<div class="col-xl-4">
											<!--begin::List widget 5-->
											<div class="card card-flush h-xl-100">
												<!--begin::Header-->
												<div class="card-header pt-7">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-900">Product Delivery</span>
														<span class="text-gray-500 mt-1 fw-semibold fs-6">1M Products Shipped so far</span>
													</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<a href="{{ route('metronic.apps.ecommerce.sales.details') }}" class="btn btn-sm btn-light">Order Details</a>
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body">
													<!--begin::Scroll-->
													<div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 415px">
														<!--begin::Item-->
														<div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
															<!--begin::Info-->
															<div class="d-flex flex-stack mb-3">
																<!--begin::Wrapper-->
																<div class="me-3">
																	<!--begin::Icon-->
																	<img src="assets/media/stock/ecommerce/210.png" class="w-50px ms-n1 me-1" alt="" />
																	<!--end::Icon-->
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fw-bold">Elephant 1802</a>
																	<!--end::Title-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Action-->
																<div class="m-0">
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
																<!--end::Action-->
															</div>
															<!--end::Info-->
															<!--begin::Customer-->
															<div class="d-flex flex-stack">
																<!--begin::Name-->
																<span class="text-gray-500 fw-bold">To:
																<a href="{{ route('metronic.apps.ecommerce.sales.details') }}" class="text-gray-800 text-hover-primary fw-bold">Jason Bourne</a></span>
																<!--end::Name-->
																<!--begin::Label-->
																<span class="badge badge-light-success">Delivered</span>
																<!--end::Label-->
															</div>
															<!--end::Customer-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
															<!--begin::Info-->
															<div class="d-flex flex-stack mb-3">
																<!--begin::Wrapper-->
																<div class="me-3">
																	<!--begin::Icon-->
																	<img src="assets/media/stock/ecommerce/209.png" class="w-50px ms-n1 me-1" alt="" />
																	<!--end::Icon-->
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fw-bold">RiseUP</a>
																	<!--end::Title-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Action-->
																<div class="m-0">
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
																<!--end::Action-->
															</div>
															<!--end::Info-->
															<!--begin::Customer-->
															<div class="d-flex flex-stack">
																<!--begin::Name-->
																<span class="text-gray-500 fw-bold">To:
																<a href="{{ route('metronic.apps.ecommerce.sales.details') }}" class="text-gray-800 text-hover-primary fw-bold">Marie Durant</a></span>
																<!--end::Name-->
																<!--begin::Label-->
																<span class="badge badge-light-primary">Shipping</span>
																<!--end::Label-->
															</div>
															<!--end::Customer-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
															<!--begin::Info-->
															<div class="d-flex flex-stack mb-3">
																<!--begin::Wrapper-->
																<div class="me-3">
																	<!--begin::Icon-->
																	<img src="assets/media/stock/ecommerce/214.png" class="w-50px ms-n1 me-1" alt="" />
																	<!--end::Icon-->
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fw-bold">Yellow Stone</a>
																	<!--end::Title-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Action-->
																<div class="m-0">
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
																<!--end::Action-->
															</div>
															<!--end::Info-->
															<!--begin::Customer-->
															<div class="d-flex flex-stack">
																<!--begin::Name-->
																<span class="text-gray-500 fw-bold">To:
																<a href="{{ route('metronic.apps.ecommerce.sales.details') }}" class="text-gray-800 text-hover-primary fw-bold">Dan Wilson</a></span>
																<!--end::Name-->
																<!--begin::Label-->
																<span class="badge badge-light-danger">Confirmed</span>
																<!--end::Label-->
															</div>
															<!--end::Customer-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
															<!--begin::Info-->
															<div class="d-flex flex-stack mb-3">
																<!--begin::Wrapper-->
																<div class="me-3">
																	<!--begin::Icon-->
																	<img src="assets/media/stock/ecommerce/211.png" class="w-50px ms-n1 me-1" alt="" />
																	<!--end::Icon-->
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fw-bold">Elephant 1802</a>
																	<!--end::Title-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Action-->
																<div class="m-0">
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
																<!--end::Action-->
															</div>
															<!--end::Info-->
															<!--begin::Customer-->
															<div class="d-flex flex-stack">
																<!--begin::Name-->
																<span class="text-gray-500 fw-bold">To:
																<a href="{{ route('metronic.apps.ecommerce.sales.details') }}" class="text-gray-800 text-hover-primary fw-bold">Lebron Wayde</a></span>
																<!--end::Name-->
																<!--begin::Label-->
																<span class="badge badge-light-success">Delivered</span>
																<!--end::Label-->
															</div>
															<!--end::Customer-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
															<!--begin::Info-->
															<div class="d-flex flex-stack mb-3">
																<!--begin::Wrapper-->
																<div class="me-3">
																	<!--begin::Icon-->
																	<img src="assets/media/stock/ecommerce/215.png" class="w-50px ms-n1 me-1" alt="" />
																	<!--end::Icon-->
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fw-bold">RiseUP</a>
																	<!--end::Title-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Action-->
																<div class="m-0">
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
																<!--end::Action-->
															</div>
															<!--end::Info-->
															<!--begin::Customer-->
															<div class="d-flex flex-stack">
																<!--begin::Name-->
																<span class="text-gray-500 fw-bold">To:
																<a href="{{ route('metronic.apps.ecommerce.sales.details') }}" class="text-gray-800 text-hover-primary fw-bold">Ana Simmons</a></span>
																<!--end::Name-->
																<!--begin::Label-->
																<span class="badge badge-light-primary">Shipping</span>
																<!--end::Label-->
															</div>
															<!--end::Customer-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="border border-dashed border-gray-300 rounded px-7 py-3">
															<!--begin::Info-->
															<div class="d-flex flex-stack mb-3">
																<!--begin::Wrapper-->
																<div class="me-3">
																	<!--begin::Icon-->
																	<img src="assets/media/stock/ecommerce/192.png" class="w-50px ms-n1 me-1" alt="" />
																	<!--end::Icon-->
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fw-bold">Yellow Stone</a>
																	<!--end::Title-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Action-->
																<div class="m-0">
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
																<!--end::Action-->
															</div>
															<!--end::Info-->
															<!--begin::Customer-->
															<div class="d-flex flex-stack">
																<!--begin::Name-->
																<span class="text-gray-500 fw-bold">To:
																<a href="{{ route('metronic.apps.ecommerce.sales.details') }}" class="text-gray-800 text-hover-primary fw-bold">Kevin Leonard</a></span>
																<!--end::Name-->
																<!--begin::Label-->
																<span class="badge badge-light-danger">Confirmed</span>
																<!--end::Label-->
															</div>
															<!--end::Customer-->
														</div>
														<!--end::Item-->
													</div>
													<!--end::Scroll-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::List widget 5-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xl-8">
											<!--begin::Table Widget 5-->
											<div class="card card-flush h-xl-100">
												<!--begin::Card header-->
												<div class="card-header pt-7">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-900">Stock Report</span>
														<span class="text-gray-500 mt-1 fw-semibold fs-6">Total 2,356 Items in the Stock</span>
													</h3>
													<!--end::Title-->
													<!--begin::Actions-->
													<div class="card-toolbar">
														<!--begin::Filters-->
														<div class="d-flex flex-stack flex-wrap gap-4">
															<!--begin::Destination-->
															<div class="d-flex align-items-center fw-bold">
																<!--begin::Label-->
																<div class="text-muted fs-7 me-2">Cateogry</div>
																<!--end::Label-->
																<!--begin::Select-->
																<select class="form-select form-select-transparent text-gray-900 fs-7 lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option">
																	<option></option>
																	<option value="Show All" selected="selected">Show All</option>
																	<option value="a">Category A</option>
																	<option value="b">Category B</option>
																</select>
																<!--end::Select-->
															</div>
															<!--end::Destination-->
															<!--begin::Status-->
															<div class="d-flex align-items-center fw-bold">
																<!--begin::Label-->
																<div class="text-muted fs-7 me-2">Status</div>
																<!--end::Label-->
																<!--begin::Select-->
																<select class="form-select form-select-transparent text-gray-900 fs-7 lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option" data-kt-table-widget-5="filter_status">
																	<option></option>
																	<option value="Show All" selected="selected">Show All</option>
																	<option value="In Stock">In Stock</option>
																	<option value="Out of Stock">Out of Stock</option>
																	<option value="Low Stock">Low Stock</option>
																</select>
																<!--end::Select-->
															</div>
															<!--end::Status-->
															<!--begin::Search-->
															<a href="{{ route('metronic.apps.ecommerce.catalog.products') }}" class="btn btn-light btn-sm">View Stock</a>
															<!--end::Search-->
														</div>
														<!--begin::Filters-->
													</div>
													<!--end::Actions-->
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body">
													<!--begin::Table-->
													<table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_5_table">
														<!--begin::Table head-->
														<thead>
															<!--begin::Table row-->
															<tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
																<th class="min-w-150px">Item</th>
																<th class="text-end pe-3 min-w-100px">Product ID</th>
																<th class="text-end pe-3 min-w-150px">Date Added</th>
																<th class="text-end pe-3 min-w-100px">Price</th>
																<th class="text-end pe-3 min-w-100px">Status</th>
																<th class="text-end pe-0 min-w-75px">Qty</th>
															</tr>
															<!--end::Table row-->
														</thead>
														<!--end::Table head-->
														<!--begin::Table body-->
														<tbody class="fw-bold text-gray-600">
															<tr>
																<!--begin::Item-->
																<td>
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-900 text-hover-primary">Macbook Air M1</a>
																</td>
																<!--end::Item-->
																<!--begin::Product ID-->
																<td class="text-end">#XGY-356</td>
																<!--end::Product ID-->
																<!--begin::Date added-->
																<td class="text-end">02 Apr, 2026</td>
																<!--end::Date added-->
																<!--begin::Price-->
																<td class="text-end">$1,230</td>
																<!--end::Price-->
																<!--begin::Status-->
																<td class="text-end">
																	<span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
																</td>
																<!--end::Status-->
																<!--begin::Qty-->
																<td class="text-end" data-order="58">
																	<span class="text-gray-900 fw-bold">58 PCS</span>
																</td>
																<!--end::Qty-->
															</tr>
															<tr>
																<!--begin::Item-->
																<td>
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-900 text-hover-primary">Surface Laptop 4</a>
																</td>
																<!--end::Item-->
																<!--begin::Product ID-->
																<td class="text-end">#YHD-047</td>
																<!--end::Product ID-->
																<!--begin::Date added-->
																<td class="text-end">01 Apr, 2026</td>
																<!--end::Date added-->
																<!--begin::Price-->
																<td class="text-end">$1,060</td>
																<!--end::Price-->
																<!--begin::Status-->
																<td class="text-end">
																	<span class="badge py-3 px-4 fs-7 badge-light-danger">Out of Stock</span>
																</td>
																<!--end::Status-->
																<!--begin::Qty-->
																<td class="text-end" data-order="0">
																	<span class="text-gray-900 fw-bold">0 PCS</span>
																</td>
																<!--end::Qty-->
															</tr>
															<tr>
																<!--begin::Item-->
																<td>
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-900 text-hover-primary">Logitech MX 250</a>
																</td>
																<!--end::Item-->
																<!--begin::Product ID-->
																<td class="text-end">#SRR-678</td>
																<!--end::Product ID-->
																<!--begin::Date added-->
																<td class="text-end">24 Mar, 2026</td>
																<!--end::Date added-->
																<!--begin::Price-->
																<td class="text-end">$64</td>
																<!--end::Price-->
																<!--begin::Status-->
																<td class="text-end">
																	<span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
																</td>
																<!--end::Status-->
																<!--begin::Qty-->
																<td class="text-end" data-order="290">
																	<span class="text-gray-900 fw-bold">290 PCS</span>
																</td>
																<!--end::Qty-->
															</tr>
															<tr>
																<!--begin::Item-->
																<td>
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-900 text-hover-primary">AudioEngine HD3</a>
																</td>
																<!--end::Item-->
																<!--begin::Product ID-->
																<td class="text-end">#PXF-578</td>
																<!--end::Product ID-->
																<!--begin::Date added-->
																<td class="text-end">24 Mar, 2026</td>
																<!--end::Date added-->
																<!--begin::Price-->
																<td class="text-end">$1,060</td>
																<!--end::Price-->
																<!--begin::Status-->
																<td class="text-end">
																	<span class="badge py-3 px-4 fs-7 badge-light-danger">Out of Stock</span>
																</td>
																<!--end::Status-->
																<!--begin::Qty-->
																<td class="text-end" data-order="46">
																	<span class="text-gray-900 fw-bold">46 PCS</span>
																</td>
																<!--end::Qty-->
															</tr>
															<tr>
																<!--begin::Item-->
																<td>
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-900 text-hover-primary">HP Hyper LTR</a>
																</td>
																<!--end::Item-->
																<!--begin::Product ID-->
																<td class="text-end">#PXF-778</td>
																<!--end::Product ID-->
																<!--begin::Date added-->
																<td class="text-end">16 Jan, 2026</td>
																<!--end::Date added-->
																<!--begin::Price-->
																<td class="text-end">$4500</td>
																<!--end::Price-->
																<!--begin::Status-->
																<td class="text-end">
																	<span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
																</td>
																<!--end::Status-->
																<!--begin::Qty-->
																<td class="text-end" data-order="78">
																	<span class="text-gray-900 fw-bold">78 PCS</span>
																</td>
																<!--end::Qty-->
															</tr>
															<tr>
																<!--begin::Item-->
																<td>
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-900 text-hover-primary">Dell 32 UltraSharp</a>
																</td>
																<!--end::Item-->
																<!--begin::Product ID-->
																<td class="text-end">#XGY-356</td>
																<!--end::Product ID-->
																<!--begin::Date added-->
																<td class="text-end">22 Dec, 2026</td>
																<!--end::Date added-->
																<!--begin::Price-->
																<td class="text-end">$1,060</td>
																<!--end::Price-->
																<!--begin::Status-->
																<td class="text-end">
																	<span class="badge py-3 px-4 fs-7 badge-light-warning">Low Stock</span>
																</td>
																<!--end::Status-->
																<!--begin::Qty-->
																<td class="text-end" data-order="8">
																	<span class="text-gray-900 fw-bold">8 PCS</span>
																</td>
																<!--end::Qty-->
															</tr>
															<tr>
																<!--begin::Item-->
																<td>
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-900 text-hover-primary">Google Pixel 6 Pro</a>
																</td>
																<!--end::Item-->
																<!--begin::Product ID-->
																<td class="text-end">#XVR-425</td>
																<!--end::Product ID-->
																<!--begin::Date added-->
																<td class="text-end">27 Dec, 2026</td>
																<!--end::Date added-->
																<!--begin::Price-->
																<td class="text-end">$1,060</td>
																<!--end::Price-->
																<!--begin::Status-->
																<td class="text-end">
																	<span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
																</td>
																<!--end::Status-->
																<!--begin::Qty-->
																<td class="text-end" data-order="124">
																	<span class="text-gray-900 fw-bold">124 PCS</span>
																</td>
																<!--end::Qty-->
															</tr>
														</tbody>
														<!--end::Table body-->
													</table>
													<!--end::Table-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Table Widget 5-->
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
							<a href="#" class="link-primary fw-bold">Users Directory</a>.</div>
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
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Emma Smith
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
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Melody Macy
											<span class="badge badge-light fs-8 fw-semibold ms-2">Marketing Analytic</span></a>
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
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Max Smith
											<span class="badge badge-light fs-8 fw-semibold ms-2">Software Enginer</span></a>
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
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Sean Bean
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
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Brian Cox
											<span class="badge badge-light fs-8 fw-semibold ms-2">UI/UX Designer</span></a>
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
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Mikaela Collins
											<span class="badge badge-light fs-8 fw-semibold ms-2">Head Of Marketing</span></a>
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
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Francis Mitcham
											<span class="badge badge-light fs-8 fw-semibold ms-2">Software Arcitect</span></a>
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
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Olivia Wild
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
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Neil Owen
											<span class="badge badge-light fs-8 fw-semibold ms-2">Account Manager</span></a>
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
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Dan Wilson
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
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Emma Bold
											<span class="badge badge-light fs-8 fw-semibold ms-2">Corporate Finance</span></a>
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
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Ana Crown
											<span class="badge badge-light fs-8 fw-semibold ms-2">Customer Relationship</span></a>
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
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Robert Doe
											<span class="badge badge-light fs-8 fw-semibold ms-2">Marketing Executive</span></a>
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
<script src="assets/js/widgets.bundle.js"></script>
<script src="assets/js/custom/widgets.js"></script>
<script src="assets/js/custom/apps/chat/chat.js"></script>
<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
@endsection
