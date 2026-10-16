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
										<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Delivery</h1>
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
										<a href="#" class="btn btn-sm fw-bold btn-secondary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Rollover</a>
										<!--end::Secondary button-->
										<!--begin::Primary button-->
										<a href="{{ route('metronic.apps.ecommerce.sales.add_order') }}" class="btn btn-sm fw-bold btn-primary">New Shipment</a>
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
										<div class="col-xl-4 mb-xl-10">
											<!--begin::Engage widget 3-->
											<div class="card bg-primary h-md-100" data-bs-theme="light">
												<!--begin::Body-->
												<div class="card-body d-flex flex-column pt-13 pb-14">
													<!--begin::Heading-->
													<div class="m-0">
														<!--begin::Title-->
														<h1 class="fw-semibold text-white text-center lh-lg mb-9">Delivery is easy
														<br />
														<span class="fw-bolder">Start Your Delivery</span></h1>
														<!--end::Title-->
														<!--begin::Illustration-->
														<div class="flex-grow-1 bgi-no-repeat bgi-size-contain bgi-position-x-center card-rounded-bottom h-200px mh-200px my-5 mb-lg-12" style="background-image:url('/assets/media/svg/illustrations/easy/5.svg')"></div>
														<!--end::Illustration-->
													</div>
													<!--end::Heading-->
													<!--begin::Links-->
													<div class="text-center">
														<!--begin::Link-->
														<a class="btn btn-sm bg-white btn-color-gray-800 me-2" data-bs-target="#kt_modal_bidding" data-bs-toggle="modal">New Delivery</a>
														<!--end::Link-->
														<!--begin::Link-->
														<a class="btn btn-sm bg-white btn-color-white bg-opacity-20" href="{{ route('metronic.pages.user_profile.projects') }}">Quick Guide</a>
														<!--end::Link-->
													</div>
													<!--end::Links-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Engage widget 3-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xl-8 mb-5 mb-xl-10">
											<!--begin::Chart widget 11-->
											<div class="card card-flush h-xl-100">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-900">Delivery Stats</span>
														<span class="text-gray-500 mt-1 fw-semibold fs-6">Users from all channels</span>
													</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<ul class="nav" id="kt_chart_widget_11_tabs">
															<li class="nav-item">
																<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1" data-bs-toggle="tab" id="kt_charts_widget_11_tab_1" href="#kt_chart_widget_11_tab_content_1">2020</a>
															</li>
															<li class="nav-item">
																<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1" data-bs-toggle="tab" id="kt_charts_widget_11_tab_2" href="#kt_chart_widget_11_tab_content_2">2021</a>
															</li>
															<li class="nav-item">
																<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1 active" data-bs-toggle="tab" id="kt_charts_widget_11_tab_3" href="#kt_chart_widget_11_tab_content_3">Month</a>
															</li>
														</ul>
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pb-0 pt-4">
													<!--begin::Tab content-->
													<div class="tab-content">
														<!--begin::Tab pane-->
														<div class="tab-pane fade" id="kt_chart_widget_11_tab_content_1" role="tabpanel">
															<!--begin::Statistics-->
															<div class="mb-2">
																<!--begin::Statistics-->
																<span class="fs-2hx fw-bold d-block text-gray-800 me-2 mb-2 lh-1 ls-n2">1,349</span>
																<!--end::Statistics-->
																<!--begin::Description-->
																<span class="fs-6 fw-semibold text-gray-500">Avarage cost per iteraction</span>
																<!--end::Description-->
															</div>
															<!--end::Statistics-->
															<!--begin::Chart-->
															<div id="kt_charts_widget_11_chart_1" class="ms-n5 me-n3 min-h-auto w-100" style="height: 300px"></div>
															<!--end::Chart-->
														</div>
														<!--end::Tab pane-->
														<!--begin::Tab pane-->
														<div class="tab-pane fade" id="kt_chart_widget_11_tab_content_2" role="tabpanel">
															<!--begin::Statistics-->
															<div class="mb-2">
																<!--begin::Statistics-->
																<span class="fs-2hx fw-bold d-block text-gray-800 me-2 mb-2 lh-1 ls-n2">3,492</span>
																<!--end::Statistics-->
																<!--begin::Description-->
																<span class="fs-6 fw-semibold text-gray-500">Avarage cost per iteraction</span>
																<!--end::Description-->
															</div>
															<!--end::Statistics-->
															<!--begin::Chart-->
															<div id="kt_charts_widget_11_chart_2" class="ms-n5 me-n3 min-h-auto" style="height: 300px"></div>
															<!--end::Chart-->
														</div>
														<!--end::Tab pane-->
														<!--begin::Tab pane-->
														<div class="tab-pane fade active show" id="kt_chart_widget_11_tab_content_3" role="tabpanel">
															<!--begin::Statistics-->
															<div class="mb-2">
																<!--begin::Statistics-->
																<span class="fs-2hx fw-bold d-block text-gray-800 me-2 mb-2 lh-1 ls-n2">4,796</span>
																<!--end::Statistics-->
																<!--begin::Description-->
																<span class="fs-6 fw-semibold text-gray-500">Deliveries in 30 Days</span>
																<!--end::Description-->
															</div>
															<!--end::Statistics-->
															<!--begin::Chart-->
															<div id="kt_charts_widget_11_chart_3" class="ms-n5 me-n3 min-h-auto" style="height: 300px"></div>
															<!--end::Chart-->
														</div>
														<!--end::Tab pane-->
													</div>
													<!--end::Tab content-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Chart widget 11-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									<!--begin::Row-->
									<div class="row gy-5 g-xl-10">
										<!--begin::Col-->
										<div class="col-xl-4 mb-xl-10">
											<!--begin::List widget 16-->
											<div class="card card-flush h-xl-100">
												<!--begin::Header-->
												<div class="card-header pt-7">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800">Delivery Tracking</span>
														<span class="text-gray-500 mt-1 fw-semibold fs-6">56 deliveries in progress</span>
													</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<a href="#" class="btn btn-sm btn-light" data-bs-toggle='tooltip' data-bs-dismiss='click' data-bs-custom-class="tooltip-inverse" title="Delivery App is coming soon">View All</a>
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-4 px-0">
													<!--begin::Nav-->
													<ul class="nav nav-pills nav-pills-custom item position-relative mx-9 mb-9">
														<!--begin::Item-->
														<li class="nav-item col-4 mx-0 p-0">
															<!--begin::Link-->
															<a class="nav-link active d-flex justify-content-center w-100 border-0 h-100" data-bs-toggle="pill" href="#kt_list_widget_16_tab_1">
																<!--begin::Subtitle-->
																<span class="nav-text text-gray-800 fw-bold fs-6 mb-3">New</span>
																<!--end::Subtitle-->
																<!--begin::Bullet-->
																<span class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
																<!--end::Bullet-->
															</a>
															<!--end::Link-->
														</li>
														<!--end::Item-->
														<!--begin::Item-->
														<li class="nav-item col-4 mx-0 px-0">
															<!--begin::Link-->
															<a class="nav-link d-flex justify-content-center w-100 border-0 h-100" data-bs-toggle="pill" href="#kt_list_widget_16_tab_2">
																<!--begin::Subtitle-->
																<span class="nav-text text-gray-800 fw-bold fs-6 mb-3">Preparing</span>
																<!--end::Subtitle-->
																<!--begin::Bullet-->
																<span class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
																<!--end::Bullet-->
															</a>
															<!--end::Link-->
														</li>
														<!--end::Item-->
														<!--begin::Item-->
														<li class="nav-item col-4 mx-0 px-0">
															<!--begin::Link-->
															<a class="nav-link d-flex justify-content-center w-100 border-0 h-100" data-bs-toggle="pill" href="#kt_list_widget_16_tab_3">
																<!--begin::Subtitle-->
																<span class="nav-text text-gray-800 fw-bold fs-6 mb-3">Shipping</span>
																<!--end::Subtitle-->
																<!--begin::Bullet-->
																<span class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
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
													<div class="tab-content px-9 hover-scroll-overlay-y pe-7 me-3 mb-2" style="height: 454px">
														<!--begin::Tap pane-->
														<div class="tab-pane fade show active" id="kt_list_widget_16_tab_1">
															<!--begin::Item-->
															<div class="m-0">
																<!--begin::Timeline-->
																<div class="timeline timeline-border-dashed">
																	<!--begin::Timeline item-->
																	<div class="timeline-item pb-5">
																		<!--begin::Timeline line-->
																		<div class="timeline-line"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon">
																			<i class="ki-duotone ki-cd fs-2 text-success">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Brooklyn Simmons</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-500">6391 Elgin St. Celina, Delaware 10299</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																	<!--begin::Timeline item-->
																	<div class="timeline-item">
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
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Ralph Edwards</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-500">2464 Royal Ln. Mesa, New Jersey 45463</span>
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
															<div class="separator separator-dashed mt-5 mb-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="m-0">
																<!--begin::Timeline-->
																<div class="timeline timeline-border-dashed">
																	<!--begin::Timeline item-->
																	<div class="timeline-item pb-5">
																		<!--begin::Timeline line-->
																		<div class="timeline-line"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon">
																			<i class="ki-duotone ki-cd fs-2 text-success">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Cameron Williamson</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-500">3891 Ranchview Dr. Richardson, California 62639</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																	<!--begin::Timeline item-->
																	<div class="timeline-item">
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
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Kristin Watson</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-500">8502 Preston Rd. Inglewood, Maine 98380</span>
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
															<div class="separator separator-dashed mt-5 mb-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="m-0">
																<!--begin::Timeline-->
																<div class="timeline timeline-border-dashed">
																	<!--begin::Timeline item-->
																	<div class="timeline-item pb-5">
																		<!--begin::Timeline line-->
																		<div class="timeline-line"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon">
																			<i class="ki-duotone ki-cd fs-2 text-success">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Albert Flores</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-500">3517 W. Gray St. Utica, Pennsylvania 57867</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																	<!--begin::Timeline item-->
																	<div class="timeline-item">
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
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Jessie Clarcson</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-500">Total 2,356 Items in the Stock</span>
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
															<div class="separator separator-dashed mt-5 mb-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="m-0">
																<!--begin::Timeline-->
																<div class="timeline timeline-border-dashed">
																	<!--begin::Timeline item-->
																	<div class="timeline-item pb-5">
																		<!--begin::Timeline line-->
																		<div class="timeline-line"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon">
																			<i class="ki-duotone ki-cd fs-2 text-success">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Cameron Williamson</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-500">3891 Ranchview Dr. Richardson, California 62639</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																	<!--begin::Timeline item-->
																	<div class="timeline-item">
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
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Kristin Watson</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-500">8502 Preston Rd. Inglewood, Maine 98380</span>
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
															<div class="separator separator-dashed mt-5 mb-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="m-0">
																<!--begin::Timeline-->
																<div class="timeline timeline-border-dashed">
																	<!--begin::Timeline item-->
																	<div class="timeline-item pb-5">
																		<!--begin::Timeline line-->
																		<div class="timeline-line"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon">
																			<i class="ki-duotone ki-cd fs-2 text-success">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Brooklyn Simmons</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-500">6391 Elgin St. Celina, Delaware 10299</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																	<!--begin::Timeline item-->
																	<div class="timeline-item">
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
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Ralph Edwards</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-500">2464 Royal Ln. Mesa, New Jersey 45463</span>
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
														<div class="tab-pane fade" id="kt_list_widget_16_tab_2">
															<!--begin::Item-->
															<div class="m-0">
																<!--begin::Timeline-->
																<div class="timeline timeline-border-dashed">
																	<!--begin::Timeline item-->
																	<div class="timeline-item pb-5">
																		<!--begin::Timeline line-->
																		<div class="timeline-line"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon">
																			<i class="ki-duotone ki-cd fs-2 text-success">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Cameron Williamson</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-500">3891 Ranchview Dr. Richardson, California 62639</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																	<!--begin::Timeline item-->
																	<div class="timeline-item">
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
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Kristin Watson</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-500">8502 Preston Rd. Inglewood, Maine 98380</span>
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
															<div class="separator separator-dashed mt-5 mb-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="m-0">
																<!--begin::Timeline-->
																<div class="timeline timeline-border-dashed">
																	<!--begin::Timeline item-->
																	<div class="timeline-item pb-5">
																		<!--begin::Timeline line-->
																		<div class="timeline-line"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon">
																			<i class="ki-duotone ki-cd fs-2 text-success">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Brooklyn Simmons</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-500">6391 Elgin St. Celina, Delaware 10299</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																	<!--begin::Timeline item-->
																	<div class="timeline-item">
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
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Ralph Edwards</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-500">2464 Royal Ln. Mesa, New Jersey 45463</span>
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
															<div class="separator separator-dashed mt-5 mb-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="m-0">
																<!--begin::Timeline-->
																<div class="timeline timeline-border-dashed">
																	<!--begin::Timeline item-->
																	<div class="timeline-item pb-5">
																		<!--begin::Timeline line-->
																		<div class="timeline-line"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon">
																			<i class="ki-duotone ki-cd fs-2 text-success">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Cameron Williamson</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-500">3891 Ranchview Dr. Richardson, California 62639</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																	<!--begin::Timeline item-->
																	<div class="timeline-item">
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
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Kristin Watson</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-500">8502 Preston Rd. Inglewood, Maine 98380</span>
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
															<div class="separator separator-dashed mt-5 mb-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="m-0">
																<!--begin::Timeline-->
																<div class="timeline timeline-border-dashed">
																	<!--begin::Timeline item-->
																	<div class="timeline-item pb-5">
																		<!--begin::Timeline line-->
																		<div class="timeline-line"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon">
																			<i class="ki-duotone ki-cd fs-2 text-success">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Albert Flores</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-500">3517 W. Gray St. Utica, Pennsylvania 57867</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																	<!--begin::Timeline item-->
																	<div class="timeline-item">
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
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Jessie Clarcson</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-500">Total 2,356 Items in the Stock</span>
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
															<div class="separator separator-dashed mt-5 mb-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="m-0">
																<!--begin::Timeline-->
																<div class="timeline timeline-border-dashed">
																	<!--begin::Timeline item-->
																	<div class="timeline-item pb-5">
																		<!--begin::Timeline line-->
																		<div class="timeline-line"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon">
																			<i class="ki-duotone ki-cd fs-2 text-success">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Albert Flores</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-500">3517 W. Gray St. Utica, Pennsylvania 57867</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																	<!--begin::Timeline item-->
																	<div class="timeline-item">
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
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Jessie Clarcson</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-500">Total 2,356 Items in the Stock</span>
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
														<div class="tab-pane fade" id="kt_list_widget_16_tab_3">
															<!--begin::Item-->
															<div class="m-0">
																<!--begin::Timeline-->
																<div class="timeline timeline-border-dashed">
																	<!--begin::Timeline item-->
																	<div class="timeline-item pb-5">
																		<!--begin::Timeline line-->
																		<div class="timeline-line"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon">
																			<i class="ki-duotone ki-cd fs-2 text-success">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Albert Flores</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-500">3517 W. Gray St. Utica, Pennsylvania 57867</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																	<!--begin::Timeline item-->
																	<div class="timeline-item">
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
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Jessie Clarcson</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-500">Total 2,356 Items in the Stock</span>
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
															<div class="separator separator-dashed mt-5 mb-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="m-0">
																<!--begin::Timeline-->
																<div class="timeline timeline-border-dashed">
																	<!--begin::Timeline item-->
																	<div class="timeline-item pb-5">
																		<!--begin::Timeline line-->
																		<div class="timeline-line"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon">
																			<i class="ki-duotone ki-cd fs-2 text-success">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Brooklyn Simmons</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-500">6391 Elgin St. Celina, Delaware 10299</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																	<!--begin::Timeline item-->
																	<div class="timeline-item">
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
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Ralph Edwards</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-500">2464 Royal Ln. Mesa, New Jersey 45463</span>
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
															<div class="separator separator-dashed mt-5 mb-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="m-0">
																<!--begin::Timeline-->
																<div class="timeline timeline-border-dashed">
																	<!--begin::Timeline item-->
																	<div class="timeline-item pb-5">
																		<!--begin::Timeline line-->
																		<div class="timeline-line"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon">
																			<i class="ki-duotone ki-cd fs-2 text-success">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Brooklyn Simmons</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-500">6391 Elgin St. Celina, Delaware 10299</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																	<!--begin::Timeline item-->
																	<div class="timeline-item">
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
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Ralph Edwards</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-500">2464 Royal Ln. Mesa, New Jersey 45463</span>
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
															<div class="separator separator-dashed mt-5 mb-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="m-0">
																<!--begin::Timeline-->
																<div class="timeline timeline-border-dashed">
																	<!--begin::Timeline item-->
																	<div class="timeline-item pb-5">
																		<!--begin::Timeline line-->
																		<div class="timeline-line"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon">
																			<i class="ki-duotone ki-cd fs-2 text-success">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Cameron Williamson</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-500">3891 Ranchview Dr. Richardson, California 62639</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																	<!--begin::Timeline item-->
																	<div class="timeline-item">
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
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Kristin Watson</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-500">8502 Preston Rd. Inglewood, Maine 98380</span>
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
															<div class="separator separator-dashed mt-5 mb-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="m-0">
																<!--begin::Timeline-->
																<div class="timeline timeline-border-dashed">
																	<!--begin::Timeline item-->
																	<div class="timeline-item pb-5">
																		<!--begin::Timeline line-->
																		<div class="timeline-line"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon">
																			<i class="ki-duotone ki-cd fs-2 text-success">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Cameron Williamson</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-500">3891 Ranchview Dr. Richardson, California 62639</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																	<!--begin::Timeline item-->
																	<div class="timeline-item">
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
																			<!--begin::Label-->
																			<span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
																			<!--begin::Label-->
																			<!--begin::Title-->
																			<a href="#" class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Kristin Watson</a>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fw-semibold text-gray-500">8502 Preston Rd. Inglewood, Maine 98380</span>
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
											<!--end::List widget 16-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xl-8 mb-5 mb-xl-10">
											<!--begin::Chart widget 32-->
											<div class="card card-flush h-xl-100">
												<!--begin::Header-->
												<div class="card-header pt-7 mb-3">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800">Deliveries by Category</span>
														<span class="text-gray-500 mt-1 fw-semibold fs-6">Total 424,567 deliveries</span>
													</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
														<div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm btn-light d-flex align-items-center px-4">
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
															<a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 active" data-bs-toggle="pill" id="kt_charts_widget_32_tab_1" href="#kt_charts_widget_32_tab_content_1">
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
																<span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Van</span>
																<!--end::Title-->
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
															<a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" data-bs-toggle="pill" id="kt_charts_widget_32_tab_2" href="#kt_charts_widget_32_tab_content_2">
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
																<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
																<!--end::Bullet-->
															</a>
															<!--end::Link-->
														</li>
														<!--end::Item-->
														<!--begin::Item-->
														<li class="nav-item mb-3 me-3 me-lg-6">
															<!--begin::Link-->
															<a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" data-bs-toggle="pill" id="kt_charts_widget_32_tab_3" href="#kt_charts_widget_32_tab_content_3">
																<!--begin::Icon-->
																<div class="nav-icon mb-3">
																	<i class="ki-duotone ki-car fs-1 p-0">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																		<span class="path4"></span>
																		<span class="path5"></span>
																	</i>
																</div>
																<!--end::Icon-->
																<!--begin::Title-->
																<span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Car</span>
																<!--end::Title-->
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
													<div class="tab-content ps-4 pe-6">
														<!--begin::Tap pane-->
														<div class="tab-pane fade active show" id="kt_charts_widget_32_tab_content_1">
															<!--begin::Chart-->
															<div id="kt_charts_widget_32_chart_1" class="min-h-auto" style="height: 375px"></div>
															<!--end::Chart-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_charts_widget_32_tab_content_2">
															<!--begin::Chart-->
															<div id="kt_charts_widget_32_chart_2" class="min-h-auto" style="height: 375px"></div>
															<!--end::Chart-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_charts_widget_32_tab_content_3">
															<!--begin::Chart-->
															<div id="kt_charts_widget_32_chart_3" class="min-h-auto" style="height: 375px"></div>
															<!--end::Chart-->
														</div>
														<!--end::Tap pane-->
													</div>
													<!--end::Tab Content-->
												</div>
												<!--end: Card Body-->
											</div>
											<!--end::Chart widget 32-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									<!--begin::Row-->
									<div class="row gy-5 g-xl-10">
										<!--begin::Col-->
										<div class="col-xl-4 mb-xl-10">
											<!--begin::List widget 17-->
											<div class="card card-flush h-xl-100">
												<!--begin::Header-->
												<div class="card-header pt-7">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800">Popular Products</span>
														<span class="text-gray-500 mt-1 fw-semibold fs-6">8k social visitors</span>
													</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<a href="{{ route('metronic.apps.ecommerce.catalog.add_product') }}" class="btn btn-sm btn-light">Add Product</a>
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-0">
													<!--begin::Content-->
													<div class="d-flex flex-stack my-5">
														<span class="text-gray-500 fs-7 fw-bold">ITEM</span>
														<span class="text-gray-500 fw-bold fs-7">ITEM PRICE</span>
													</div>
													<!--end::Content-->
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center me-3">
															<!--begin::Icon-->
															<img src="assets/media/stock/ecommerce/14.png" class="me-4 w-50px" alt="" />
															<!--end::Icon-->
															<!--begin::Section-->
															<div class="flex-grow-1">
																<a href="{{ route('metronic.apps.ecommerce.sales.details') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Fjallraven</a>
																<span class="text-gray-500 fw-semibold d-block fs-7">Item: #XDG-6437</span>
															</div>
															<!--end::Section-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Value-->
														<span class="text-gray-800 fw-bold fs-6">$ 72.00</span>
														<!--end::Value-->
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
															<img src="assets/media/stock/ecommerce/13.png" class="me-4 w-50px" alt="" />
															<!--end::Icon-->
															<!--begin::Section-->
															<div class="flex-grow-1">
																<a href="{{ route('metronic.apps.ecommerce.sales.details') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Nike AirMax</a>
																<span class="text-gray-500 fw-semibold d-block fs-7">Item: #XDG-1836</span>
															</div>
															<!--end::Section-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Value-->
														<span class="text-gray-800 fw-bold fs-6">$ 45.00</span>
														<!--end::Value-->
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
															<img src="assets/media/stock/ecommerce/41.png" class="me-4 w-50px" alt="" />
															<!--end::Icon-->
															<!--begin::Section-->
															<div class="flex-grow-1">
																<a href="{{ route('metronic.apps.ecommerce.sales.details') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Bose QC 35</a>
																<span class="text-gray-500 fw-semibold d-block fs-7">Item: #XDG-6254</span>
															</div>
															<!--end::Section-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Value-->
														<span class="text-gray-800 fw-bold fs-6">$ 168.00</span>
														<!--end::Value-->
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
															<img src="assets/media/stock/ecommerce/53.png" class="me-4 w-50px" alt="" />
															<!--end::Icon-->
															<!--begin::Section-->
															<div class="flex-grow-1">
																<a href="{{ route('metronic.apps.ecommerce.sales.details') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Greeny</a>
																<span class="text-gray-500 fw-semibold d-block fs-7">Item: #XDG-1746</span>
															</div>
															<!--end::Section-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Value-->
														<span class="text-gray-800 fw-bold fs-6">$ 14.50</span>
														<!--end::Value-->
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
															<img src="assets/media/stock/ecommerce/71.png" class="me-4 w-50px" alt="" />
															<!--end::Icon-->
															<!--begin::Section-->
															<div class="flex-grow-1">
																<a href="{{ route('metronic.apps.ecommerce.sales.details') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Apple Watches</a>
																<span class="text-gray-500 fw-semibold d-block fs-7">Item: #XDG-6245</span>
															</div>
															<!--end::Section-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Value-->
														<span class="text-gray-800 fw-bold fs-6">$ 362.00</span>
														<!--end::Value-->
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
															<img src="assets/media/stock/ecommerce/194.png" class="me-4 w-50px" alt="" />
															<!--end::Icon-->
															<!--begin::Section-->
															<div class="flex-grow-1">
																<a href="{{ route('metronic.apps.ecommerce.sales.details') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Friendly Robot</a>
																<span class="text-gray-500 fw-semibold d-block fs-7">Item: #XDG-2347</span>
															</div>
															<!--end::Section-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Value-->
														<span class="text-gray-800 fw-bold fs-6">$ 48.00</span>
														<!--end::Value-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::List widget 17-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xl-8 mb-5 mb-xl-10">
											<!--begin::Table widget 6-->
											<div class="card card-flush h-xl-100">
												<!--begin::Header-->
												<div class="card-header pt-7">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800">Leading Agents by Category</span>
														<span class="text-gray-500 mt-1 fw-semibold fs-6">Total 424,567 deliveries</span>
													</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<a href="{{ route('metronic.apps.ecommerce.catalog.add_product') }}" class="btn btn-sm btn-light">Add Product</a>
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
															<a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 active" data-bs-toggle="pill" href="#kt_stats_widget_6_tab_1">
																<!--begin::Icon-->
																<div class="nav-icon mb-3">
																	<i class="ki-duotone ki-truck fs-1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																		<span class="path4"></span>
																		<span class="path5"></span>
																	</i>
																</div>
																<!--end::Icon-->
																<!--begin::Title-->
																<span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Van</span>
																<!--end::Title-->
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
															<a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" data-bs-toggle="pill" href="#kt_stats_widget_6_tab_2">
																<!--begin::Icon-->
																<div class="nav-icon mb-3">
																	<i class="ki-duotone ki-bus fs-1">
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
																<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
																<!--end::Bullet-->
															</a>
															<!--end::Link-->
														</li>
														<!--end::Item-->
														<!--begin::Item-->
														<li class="nav-item mb-3 me-3 me-lg-6">
															<!--begin::Link-->
															<a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" data-bs-toggle="pill" href="#kt_stats_widget_6_tab_3">
																<!--begin::Icon-->
																<div class="nav-icon mb-3">
																	<i class="ki-duotone ki-logistic fs-1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																		<span class="path4"></span>
																		<span class="path5"></span>
																		<span class="path6"></span>
																		<span class="path7"></span>
																	</i>
																</div>
																<!--end::Icon-->
																<!--begin::Title-->
																<span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Drone</span>
																<!--end::Title-->
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
														<div class="tab-pane fade active show" id="kt_stats_widget_6_tab_1">
															<!--begin::Table container-->
															<div class="table-responsive">
																<!--begin::Table-->
																<table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
																	<!--begin::Table head-->
																	<thead>
																		<tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
																			<th class="p-0 w-200px w-xxl-450px"></th>
																			<th class="p-0 min-w-150px"></th>
																			<th class="p-0 min-w-150px"></th>
																			<th class="p-0 min-w-190px"></th>
																			<th class="p-0 w-50px"></th>
																		</tr>
																	</thead>
																	<!--end::Table head-->
																	<!--begin::Table body-->
																	<tbody>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-40px me-3">
																						<img src="assets/media/avatars/300-1.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Brooklyn Simmons</a>
																						<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																					</div>
																				</div>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block mb-1 fs-6">1,240</span>
																				<span class="fw-semibold text-gray-500 d-block">Deliveries</span>
																			</td>
																			<td>
																				<a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</a>
																				<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
																			</td>
																			<td>
																				<div class="rating">
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																				</div>
																				<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
																				</a>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-40px me-3">
																						<img src="assets/media/avatars/300-2.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Annette Black</a>
																						<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																					</div>
																				</div>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block mb-1 fs-6">6,074</span>
																				<span class="fw-semibold text-gray-500 d-block">Deliveries</span>
																			</td>
																			<td>
																				<a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$174,074</a>
																				<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
																			</td>
																			<td>
																				<div class="rating">
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																				</div>
																				<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
																				</a>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-40px me-3">
																						<img src="assets/media/avatars/300-12.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
																						<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																					</div>
																				</div>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block mb-1 fs-6">357</span>
																				<span class="fw-semibold text-gray-500 d-block">Deliveries</span>
																			</td>
																			<td>
																				<a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$2,737</a>
																				<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
																			</td>
																			<td>
																				<div class="rating">
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																				</div>
																				<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
																				</a>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-40px me-3">
																						<img src="assets/media/avatars/300-11.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Guy Hawkins</a>
																						<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																					</div>
																				</div>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block mb-1 fs-6">2,954</span>
																				<span class="fw-semibold text-gray-500 d-block">Deliveries</span>
																			</td>
																			<td>
																				<a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$59,634</a>
																				<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
																			</td>
																			<td>
																				<div class="rating">
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																				</div>
																				<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
																				</a>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-40px me-3">
																						<img src="assets/media/avatars/300-13.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Marvin McKinney</a>
																						<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																					</div>
																				</div>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block mb-1 fs-6">822</span>
																				<span class="fw-semibold text-gray-500 d-block">Deliveries</span>
																			</td>
																			<td>
																				<a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$19,842</a>
																				<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
																			</td>
																			<td>
																				<div class="rating">
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																				</div>
																				<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
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
														<div class="tab-pane fade" id="kt_stats_widget_6_tab_2">
															<!--begin::Table container-->
															<div class="table-responsive">
																<!--begin::Table-->
																<table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
																	<!--begin::Table head-->
																	<thead>
																		<tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
																			<th class="p-0 w-200px w-xxl-450px"></th>
																			<th class="p-0 min-w-150px"></th>
																			<th class="p-0 min-w-150px"></th>
																			<th class="p-0 min-w-190px"></th>
																			<th class="p-0 w-50px"></th>
																		</tr>
																	</thead>
																	<!--end::Table head-->
																	<!--begin::Table body-->
																	<tbody>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-40px me-3">
																						<img src="assets/media/avatars/300-11.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Guy Hawkins</a>
																						<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																					</div>
																				</div>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block mb-1 fs-6">2,954</span>
																				<span class="fw-semibold text-gray-500 d-block">Deliveries</span>
																			</td>
																			<td>
																				<a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$59,634</a>
																				<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
																			</td>
																			<td>
																				<div class="rating">
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																				</div>
																				<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
																				</a>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-40px me-3">
																						<img src="assets/media/avatars/300-13.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Marvin McKinney</a>
																						<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																					</div>
																				</div>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block mb-1 fs-6">822</span>
																				<span class="fw-semibold text-gray-500 d-block">Deliveries</span>
																			</td>
																			<td>
																				<a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$19,842</a>
																				<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
																			</td>
																			<td>
																				<div class="rating">
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																				</div>
																				<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
																				</a>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-40px me-3">
																						<img src="assets/media/avatars/300-1.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Brooklyn Simmons</a>
																						<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																					</div>
																				</div>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block mb-1 fs-6">1,240</span>
																				<span class="fw-semibold text-gray-500 d-block">Deliveries</span>
																			</td>
																			<td>
																				<a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</a>
																				<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
																			</td>
																			<td>
																				<div class="rating">
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																				</div>
																				<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
																				</a>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-40px me-3">
																						<img src="assets/media/avatars/300-2.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Annette Black</a>
																						<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																					</div>
																				</div>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block mb-1 fs-6">6,074</span>
																				<span class="fw-semibold text-gray-500 d-block">Deliveries</span>
																			</td>
																			<td>
																				<a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$174,074</a>
																				<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
																			</td>
																			<td>
																				<div class="rating">
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																				</div>
																				<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
																				</a>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-40px me-3">
																						<img src="assets/media/avatars/300-12.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
																						<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																					</div>
																				</div>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block mb-1 fs-6">357</span>
																				<span class="fw-semibold text-gray-500 d-block">Deliveries</span>
																			</td>
																			<td>
																				<a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$2,737</a>
																				<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
																			</td>
																			<td>
																				<div class="rating">
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																				</div>
																				<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
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
														<div class="tab-pane fade" id="kt_stats_widget_6_tab_3">
															<!--begin::Table container-->
															<div class="table-responsive">
																<!--begin::Table-->
																<table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
																	<!--begin::Table head-->
																	<thead>
																		<tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
																			<th class="p-0 w-200px w-xxl-450px"></th>
																			<th class="p-0 min-w-150px"></th>
																			<th class="p-0 min-w-150px"></th>
																			<th class="p-0 min-w-190px"></th>
																			<th class="p-0 w-50px"></th>
																		</tr>
																	</thead>
																	<!--end::Table head-->
																	<!--begin::Table body-->
																	<tbody>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-40px me-3">
																						<img src="assets/media/avatars/300-1.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Brooklyn Simmons</a>
																						<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																					</div>
																				</div>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block mb-1 fs-6">1,240</span>
																				<span class="fw-semibold text-gray-500 d-block">Deliveries</span>
																			</td>
																			<td>
																				<a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</a>
																				<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
																			</td>
																			<td>
																				<div class="rating">
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																				</div>
																				<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
																				</a>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-40px me-3">
																						<img src="assets/media/avatars/300-11.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Guy Hawkins</a>
																						<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																					</div>
																				</div>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block mb-1 fs-6">2,954</span>
																				<span class="fw-semibold text-gray-500 d-block">Deliveries</span>
																			</td>
																			<td>
																				<a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$59,634</a>
																				<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
																			</td>
																			<td>
																				<div class="rating">
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																				</div>
																				<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
																				</a>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-40px me-3">
																						<img src="assets/media/avatars/300-13.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Marvin McKinney</a>
																						<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																					</div>
																				</div>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block mb-1 fs-6">822</span>
																				<span class="fw-semibold text-gray-500 d-block">Deliveries</span>
																			</td>
																			<td>
																				<a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$19,842</a>
																				<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
																			</td>
																			<td>
																				<div class="rating">
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																				</div>
																				<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
																				</a>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-40px me-3">
																						<img src="assets/media/avatars/300-12.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
																						<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																					</div>
																				</div>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block mb-1 fs-6">357</span>
																				<span class="fw-semibold text-gray-500 d-block">Deliveries</span>
																			</td>
																			<td>
																				<a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$2,737</a>
																				<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
																			</td>
																			<td>
																				<div class="rating">
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																				</div>
																				<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
																				</a>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-40px me-3">
																						<img src="assets/media/avatars/300-2.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Annette Black</a>
																						<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																					</div>
																				</div>
																			</td>
																			<td>
																				<span class="text-gray-800 fw-bold d-block mb-1 fs-6">6,074</span>
																				<span class="fw-semibold text-gray-500 d-block">Deliveries</span>
																			</td>
																			<td>
																				<a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$174,074</a>
																				<span class="text-muted fw-semibold d-block fs-7">Earnings</span>
																			</td>
																			<td>
																				<div class="rating">
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																					<div class="rating-label checked">
																						<i class="ki-solid ki-star fs-6"></i>
																					</div>
																				</div>
																				<span class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
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
													<!--end::Tab Content-->
												</div>
												<!--end: Card Body-->
											</div>
											<!--end::Table widget 6-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									<!--begin::Row-->
									<div class="row gy-5 g-xl-10">
										<!--begin::Col-->
										<div class="col-xl-4">
											<!--begin::List widget 18-->
											<div class="card card-flush h-xl-100">
												<!--begin::Header-->
												<div class="card-header pt-7">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800">Lading Companies</span>
														<span class="text-gray-500 mt-1 fw-semibold fs-6">8k social visitors</span>
													</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<ul class="nav me-n1" id="kt_chart_widget_11_tabs">
															<li class="nav-item">
																<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1" data-bs-toggle="tab" id="kt_list_widget_18_tab_1" href="#kt_list_widget_18_tab_content_1">2021</a>
															</li>
															<li class="nav-item">
																<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1 active" data-bs-toggle="tab" id="kt_list_widget_18_tab_2" href="#kt_list_widget_18_tab_content_2">Month</a>
															</li>
														</ul>
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-4">
													<!--begin::Tab Content-->
													<div class="tab-content">
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_list_widget_18_tab_content_1">
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Section-->
																<div class="d-flex align-items-center me-5">
																	<!--begin::Flag-->
																	<img src="assets/media/svg/brand-logos/kickstarter.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
																	<!--end::Flag-->
																	<!--begin::Content-->
																	<div class="me-5">
																		<!--begin::Title-->
																		<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Abstergo Ltd.</a>
																		<!--end::Title-->
																		<!--begin::Desc-->
																		<span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Video Channel</span>
																		<!--end::Desc-->
																	</div>
																	<!--end::Content-->
																</div>
																<!--end::Section-->
																<!--begin::Wrapper-->
																<div class="d-flex align-items-center">
																	<!--begin::Number-->
																	<span class="text-gray-800 fw-bold fs-4 me-3">1,578</span>
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
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed my-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Section-->
																<div class="d-flex align-items-center me-5">
																	<!--begin::Flag-->
																	<img src="assets/media/svg/brand-logos/balloon.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
																	<!--end::Flag-->
																	<!--begin::Content-->
																	<div class="me-5">
																		<!--begin::Title-->
																		<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Barone LLC.</a>
																		<!--end::Title-->
																		<!--begin::Desc-->
																		<span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Messanger</span>
																		<!--end::Desc-->
																	</div>
																	<!--end::Content-->
																</div>
																<!--end::Section-->
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
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed my-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Section-->
																<div class="d-flex align-items-center me-5">
																	<!--begin::Flag-->
																	<img src="assets/media/svg/brand-logos/plurk.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
																	<!--end::Flag-->
																	<!--begin::Content-->
																	<div class="me-5">
																		<!--begin::Title-->
																		<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Big Kahuna Burger</a>
																		<!--end::Title-->
																		<!--begin::Desc-->
																		<span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social Network</span>
																		<!--end::Desc-->
																	</div>
																	<!--end::Content-->
																</div>
																<!--end::Section-->
																<!--begin::Wrapper-->
																<div class="d-flex align-items-center">
																	<!--begin::Number-->
																	<span class="text-gray-800 fw-bold fs-4 me-3">2,047</span>
																	<!--end::Number-->
																	<!--begin::Info-->
																	<div class="m-0">
																		<!--begin::Label-->
																		<span class="badge badge-light-success fs-base">
																		<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>1.9%</span>
																		<!--end::Label-->
																	</div>
																	<!--end::Info-->
																</div>
																<!--end::Wrapper-->
															</div>
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed my-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Section-->
																<div class="d-flex align-items-center me-5">
																	<!--begin::Flag-->
																	<img src="assets/media/svg/brand-logos/vimeo.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
																	<!--end::Flag-->
																	<!--begin::Content-->
																	<div class="me-5">
																		<!--begin::Title-->
																		<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Biffco Enterprises</a>
																		<!--end::Title-->
																		<!--begin::Desc-->
																		<span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social Network</span>
																		<!--end::Desc-->
																	</div>
																	<!--end::Content-->
																</div>
																<!--end::Section-->
																<!--begin::Wrapper-->
																<div class="d-flex align-items-center">
																	<!--begin::Number-->
																	<span class="text-gray-800 fw-bold fs-4 me-3">3,458</span>
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
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed my-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Section-->
																<div class="d-flex align-items-center me-5">
																	<!--begin::Flag-->
																	<img src="assets/media/svg/brand-logos/atica.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
																	<!--end::Flag-->
																	<!--begin::Content-->
																	<div class="me-5">
																		<!--begin::Title-->
																		<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Abstergo Ltd.</a>
																		<!--end::Title-->
																		<!--begin::Desc-->
																		<span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Community</span>
																		<!--end::Desc-->
																	</div>
																	<!--end::Content-->
																</div>
																<!--end::Section-->
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
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed my-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Section-->
																<div class="d-flex align-items-center me-5">
																	<!--begin::Flag-->
																	<img src="assets/media/svg/brand-logos/telegram-2.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
																	<!--end::Flag-->
																	<!--begin::Content-->
																	<div class="me-5">
																		<!--begin::Title-->
																		<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Binford Ltd.</a>
																		<!--end::Title-->
																		<!--begin::Desc-->
																		<span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social Media</span>
																		<!--end::Desc-->
																	</div>
																	<!--end::Content-->
																</div>
																<!--end::Section-->
																<!--begin::Wrapper-->
																<div class="d-flex align-items-center">
																	<!--begin::Number-->
																	<span class="text-gray-800 fw-bold fs-4 me-3">2,588</span>
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
															<!--end::Item-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade show active" id="kt_list_widget_18_tab_content_2">
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Section-->
																<div class="d-flex align-items-center me-5">
																	<!--begin::Flag-->
																	<img src="assets/media/svg/brand-logos/atica.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
																	<!--end::Flag-->
																	<!--begin::Content-->
																	<div class="me-5">
																		<!--begin::Title-->
																		<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Abstergo Ltd.</a>
																		<!--end::Title-->
																		<!--begin::Desc-->
																		<span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Community</span>
																		<!--end::Desc-->
																	</div>
																	<!--end::Content-->
																</div>
																<!--end::Section-->
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
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed my-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Section-->
																<div class="d-flex align-items-center me-5">
																	<!--begin::Flag-->
																	<img src="assets/media/svg/brand-logos/telegram-2.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
																	<!--end::Flag-->
																	<!--begin::Content-->
																	<div class="me-5">
																		<!--begin::Title-->
																		<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Binford Ltd.</a>
																		<!--end::Title-->
																		<!--begin::Desc-->
																		<span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social Media</span>
																		<!--end::Desc-->
																	</div>
																	<!--end::Content-->
																</div>
																<!--end::Section-->
																<!--begin::Wrapper-->
																<div class="d-flex align-items-center">
																	<!--begin::Number-->
																	<span class="text-gray-800 fw-bold fs-4 me-3">2,588</span>
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
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed my-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Section-->
																<div class="d-flex align-items-center me-5">
																	<!--begin::Flag-->
																	<img src="assets/media/svg/brand-logos/balloon.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
																	<!--end::Flag-->
																	<!--begin::Content-->
																	<div class="me-5">
																		<!--begin::Title-->
																		<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Barone LLC.</a>
																		<!--end::Title-->
																		<!--begin::Desc-->
																		<span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Messanger</span>
																		<!--end::Desc-->
																	</div>
																	<!--end::Content-->
																</div>
																<!--end::Section-->
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
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed my-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Section-->
																<div class="d-flex align-items-center me-5">
																	<!--begin::Flag-->
																	<img src="assets/media/svg/brand-logos/kickstarter.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
																	<!--end::Flag-->
																	<!--begin::Content-->
																	<div class="me-5">
																		<!--begin::Title-->
																		<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Abstergo Ltd.</a>
																		<!--end::Title-->
																		<!--begin::Desc-->
																		<span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Video Channel</span>
																		<!--end::Desc-->
																	</div>
																	<!--end::Content-->
																</div>
																<!--end::Section-->
																<!--begin::Wrapper-->
																<div class="d-flex align-items-center">
																	<!--begin::Number-->
																	<span class="text-gray-800 fw-bold fs-4 me-3">1,578</span>
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
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed my-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Section-->
																<div class="d-flex align-items-center me-5">
																	<!--begin::Flag-->
																	<img src="assets/media/svg/brand-logos/vimeo.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
																	<!--end::Flag-->
																	<!--begin::Content-->
																	<div class="me-5">
																		<!--begin::Title-->
																		<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Biffco Enterprises</a>
																		<!--end::Title-->
																		<!--begin::Desc-->
																		<span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social Network</span>
																		<!--end::Desc-->
																	</div>
																	<!--end::Content-->
																</div>
																<!--end::Section-->
																<!--begin::Wrapper-->
																<div class="d-flex align-items-center">
																	<!--begin::Number-->
																	<span class="text-gray-800 fw-bold fs-4 me-3">3,458</span>
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
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed my-4"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Section-->
																<div class="d-flex align-items-center me-5">
																	<!--begin::Flag-->
																	<img src="assets/media/svg/brand-logos/plurk.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
																	<!--end::Flag-->
																	<!--begin::Content-->
																	<div class="me-5">
																		<!--begin::Title-->
																		<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Big Kahuna Burger</a>
																		<!--end::Title-->
																		<!--begin::Desc-->
																		<span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social Network</span>
																		<!--end::Desc-->
																	</div>
																	<!--end::Content-->
																</div>
																<!--end::Section-->
																<!--begin::Wrapper-->
																<div class="d-flex align-items-center">
																	<!--begin::Number-->
																	<span class="text-gray-800 fw-bold fs-4 me-3">2,047</span>
																	<!--end::Number-->
																	<!--begin::Info-->
																	<div class="m-0">
																		<!--begin::Label-->
																		<span class="badge badge-light-success fs-base">
																		<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>1.9%</span>
																		<!--end::Label-->
																	</div>
																	<!--end::Info-->
																</div>
																<!--end::Wrapper-->
															</div>
															<!--end::Item-->
														</div>
														<!--end::Tap pane-->
													</div>
													<!--end::Tab Content-->
												</div>
												<!--end: Card Body-->
											</div>
											<!--end::List widget 18-->
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
														<span class="text-gray-500 pt-2 fw-semibold fs-6">Top Selling Products</span>
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
													<!--begin::Chart container-->
													<div id="kt_charts_widget_17_chart" class="w-100 h-400px"></div>
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
								<a href="#" class="fw-bold link-primary">Bidding Guidelines</a>.</div>
								<!--end::Description-->
							</div>
							<!--end::Heading-->
							<!--begin::Input group-->
							<div class="d-flex flex-column mb-8 fv-row">
								<!--begin::Label-->
								<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
									<span class="required">Bid Amount</span>
									<span class="ms-1" data-bs-toggle="tooltip" title="Specify the bid amount to place in.">
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
									<button type="button" class="btn btn-light-primary w-100" data-kt-modal-bidding="option">10</button>
									<button type="button" class="btn btn-light-primary w-100" data-kt-modal-bidding="option">50</button>
									<button type="button" class="btn btn-light-primary w-100" data-kt-modal-bidding="option">100</button>
								</div>
								<!--begin::Bid options-->
								<input type="text" class="form-control form-control-solid" placeholder="Enter Bid Amount" name="bid_amount" />
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
								<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Currency Type" name="currency_type">
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
									<select name="currency_dollar" aria-label="Select a Currency" data-placeholder="Select a currency.." class="form-select form-select-solid form-select-lg">
										<option data-kt-bidding-modal-option-icon="flags/united-states.svg" value="USD" selected="selected">
										<b>USD</b>&nbsp;-&nbsp;USA dollar</option>
										<option data-kt-bidding-modal-option-icon="flags/united-kingdom.svg" value="GBP">
										<b>GBP</b>&nbsp;-&nbsp;British pound</option>
										<option data-kt-bidding-modal-option-icon="flags/australia.svg" value="AUD">
										<b>AUD</b>&nbsp;-&nbsp;Australian dollar</option>
										<option data-kt-bidding-modal-option-icon="flags/japan.svg" value="JPY">
										<b>JPY</b>&nbsp;-&nbsp;Japanese yen</option>
										<option data-kt-bidding-modal-option-icon="flags/sweden.svg" value="SEK">
										<b>SEK</b>&nbsp;-&nbsp;Swedish krona</option>
										<option data-kt-bidding-modal-option-icon="flags/canada.svg" value="CAD">
										<b>CAD</b>&nbsp;-&nbsp;Canadian dollar</option>
										<option data-kt-bidding-modal-option-icon="flags/switzerland.svg" value="CHF">
										<b>CHF</b>&nbsp;-&nbsp;Swiss franc</option>
									</select>
									<!--end::Select2-->
								</div>
								<!--end::Dollar type-->
								<!--begin::Crypto type-->
								<div class="d-none" data-kt-modal-bidding-type="crypto">
									<!--begin::Select2-->
									<select name="currency_crypto" aria-label="Select a Coin" data-placeholder="Select a currency.." class="form-select form-select-solid form-select-lg">
										<option data-kt-bidding-modal-option-icon="svg/coins/bitcoin.svg" value="1" selected="selected">Bitcoin</option>
										<option data-kt-bidding-modal-option-icon="svg/coins/binance.svg" value="2">Binance</option>
										<option data-kt-bidding-modal-option-icon="svg/coins/chainlink.svg" value="3">Chainlink</option>
										<option data-kt-bidding-modal-option-icon="svg/coins/coin.svg" value="4">Coin</option>
										<option data-kt-bidding-modal-option-icon="svg/coins/ethereum.svg" value="5">Ethereum</option>
										<option data-kt-bidding-modal-option-icon="svg/coins/filecoin.svg" value="6">Filecoin</option>
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
										<a href="{{ route('metronic.utilities.modals.wizards.top_up_wallet') }}" class="text-bolder">Top up wallet</a>.</div>
									</div>
									<!--end::Content-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Notice-->
							<!--end::Notice-->
							<!--begin::Actions-->
							<div class="text-center">
								<button type="reset" class="btn btn-light me-3" data-kt-modal-action-type="cancel">Cancel</button>
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
<script src="assets/js/widgets.bundle.js"></script>
<script src="assets/js/custom/widgets.js"></script>
<script src="assets/js/custom/apps/chat/chat.js"></script>
<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="assets/js/custom/utilities/modals/create-app.js"></script>
<script src="assets/js/custom/utilities/modals/bidding.js"></script>
@endsection
