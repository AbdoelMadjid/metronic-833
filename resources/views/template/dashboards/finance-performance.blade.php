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
										<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Finance Performance</h1>
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
									<div class="row gy-5 gx-xl-10">
										<!--begin::Col-->
										<div class="col-sm-6 col-xl-2 mb-xl-10">
											<!--begin::Card widget 2-->
											<div class="card h-lg-100">
												<!--begin::Body-->
												<div class="card-body d-flex justify-content-between align-items-start flex-column">
													<!--begin::Icon-->
													<div class="m-0">
														<i class="ki-duotone ki-compass fs-2hx text-gray-600">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Icon-->
													<!--begin::Section-->
													<div class="d-flex flex-column my-7">
														<!--begin::Number-->
														<span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">327</span>
														<!--end::Number-->
														<!--begin::Follower-->
														<div class="m-0">
															<span class="fw-semibold fs-6 text-gray-500">Projects</span>
														</div>
														<!--end::Follower-->
													</div>
													<!--end::Section-->
													<!--begin::Badge-->
													<span class="badge badge-light-success fs-base">
													<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>2.1%</span>
													<!--end::Badge-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Card widget 2-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-sm-6 col-xl-2 mb-xl-10">
											<!--begin::Card widget 2-->
											<div class="card h-lg-100">
												<!--begin::Body-->
												<div class="card-body d-flex justify-content-between align-items-start flex-column">
													<!--begin::Icon-->
													<div class="m-0">
														<i class="ki-duotone ki-chart-simple fs-2hx text-gray-600">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
														</i>
													</div>
													<!--end::Icon-->
													<!--begin::Section-->
													<div class="d-flex flex-column my-7">
														<!--begin::Number-->
														<span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">27,5M</span>
														<!--end::Number-->
														<!--begin::Follower-->
														<div class="m-0">
															<span class="fw-semibold fs-6 text-gray-500">Stock Qty</span>
														</div>
														<!--end::Follower-->
													</div>
													<!--end::Section-->
													<!--begin::Badge-->
													<span class="badge badge-light-success fs-base">
													<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>2.1%</span>
													<!--end::Badge-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Card widget 2-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-sm-6 col-xl-2 mb-xl-10">
											<!--begin::Card widget 2-->
											<div class="card h-lg-100">
												<!--begin::Body-->
												<div class="card-body d-flex justify-content-between align-items-start flex-column">
													<!--begin::Icon-->
													<div class="m-0">
														<i class="ki-duotone ki-abstract-39 fs-2hx text-gray-600">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Icon-->
													<!--begin::Section-->
													<div class="d-flex flex-column my-7">
														<!--begin::Number-->
														<span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">149M</span>
														<!--end::Number-->
														<!--begin::Follower-->
														<div class="m-0">
															<span class="fw-semibold fs-6 text-gray-500">Stock Value</span>
														</div>
														<!--end::Follower-->
													</div>
													<!--end::Section-->
													<!--begin::Badge-->
													<span class="badge badge-light-danger fs-base">
													<i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>0.47%</span>
													<!--end::Badge-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Card widget 2-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-sm-6 col-xl-2 mb-xl-10">
											<!--begin::Card widget 2-->
											<div class="card h-lg-100">
												<!--begin::Body-->
												<div class="card-body d-flex justify-content-between align-items-start flex-column">
													<!--begin::Icon-->
													<div class="m-0">
														<i class="ki-duotone ki-map fs-2hx text-gray-600">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</div>
													<!--end::Icon-->
													<!--begin::Section-->
													<div class="d-flex flex-column my-7">
														<!--begin::Number-->
														<span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">89M</span>
														<!--end::Number-->
														<!--begin::Follower-->
														<div class="m-0">
															<span class="fw-semibold fs-6 text-gray-500">C APEX</span>
														</div>
														<!--end::Follower-->
													</div>
													<!--end::Section-->
													<!--begin::Badge-->
													<span class="badge badge-light-success fs-base">
													<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>2.1%</span>
													<!--end::Badge-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Card widget 2-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-sm-6 col-xl-2 mb-5 mb-xl-10">
											<!--begin::Card widget 2-->
											<div class="card h-lg-100">
												<!--begin::Body-->
												<div class="card-body d-flex justify-content-between align-items-start flex-column">
													<!--begin::Icon-->
													<div class="m-0">
														<i class="ki-duotone ki-abstract-35 fs-2hx text-gray-600">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Icon-->
													<!--begin::Section-->
													<div class="d-flex flex-column my-7">
														<!--begin::Number-->
														<span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">72.4%</span>
														<!--end::Number-->
														<!--begin::Follower-->
														<div class="m-0">
															<span class="fw-semibold fs-6 text-gray-500">OPEX</span>
														</div>
														<!--end::Follower-->
													</div>
													<!--end::Section-->
													<!--begin::Badge-->
													<span class="badge badge-light-danger fs-base">
													<i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>0.647%</span>
													<!--end::Badge-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Card widget 2-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-sm-6 col-xl-2 mb-5 mb-xl-10">
											<!--begin::Card widget 2-->
											<div class="card h-lg-100">
												<!--begin::Body-->
												<div class="card-body d-flex justify-content-between align-items-start flex-column">
													<!--begin::Icon-->
													<div class="m-0">
														<i class="ki-duotone ki-abstract-26 fs-2hx text-gray-600">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Icon-->
													<!--begin::Section-->
													<div class="d-flex flex-column my-7">
														<!--begin::Number-->
														<span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">106M</span>
														<!--end::Number-->
														<!--begin::Follower-->
														<div class="m-0">
															<span class="fw-semibold fs-6 text-gray-500">Saving</span>
														</div>
														<!--end::Follower-->
													</div>
													<!--end::Section-->
													<!--begin::Badge-->
													<span class="badge badge-light-success fs-base">
													<i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>2.1%</span>
													<!--end::Badge-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Card widget 2-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									<!--begin::Row-->
									<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
										<!--begin::Col-->
										<div class="col-xl-4">
											<!--begin::Chart widget 19-->
											<div class="card card-flush h-100 mb-5 mb-xl-10">
												<!--begin::Header-->
												<div class="card-header pt-7">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-900">Leading Companies</span>
														<span class="text-gray-500 pt-2 fw-semibold fs-6">8k social visitors</span>
													</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<!--begin::Nav-->
														<ul class="nav" id="kt_chart_widget_19_tabs">
															<li class="nav-item">
																<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light active fw-bold px-4 me-1" data-bs-toggle="tab" id="kt_chart_widget_19_tab_1" href="#kt_chart_widget_19_tab_content_1">2026</a>
															</li>
															<li class="nav-item">
																<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4" data-bs-toggle="tab" id="kt_chart_widget_19_tab_2" href="#kt_chart_widget_19_tab_content_2">Month</a>
															</li>
														</ul>
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-0">
													<!--begin::Tab Content (ishlamayabdi)-->
													<div class="tab-content">
														<!--begin::Tap pane-->
														<div class="tab-pane fade show active" id="kt_chart_widget_19_tab_content_1">
															<!--begin::Chart container-->
															<div id="kt_charts_widget_19_chart_1" class="w-100 h-400px mb-13 mt-n4"></div>
															<!--end::Chart container-->
															<!--begin::Items-->
															<div class="m-0">
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
															<!--end::Items-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_chart_widget_19_tab_content_2">
															<!--begin::Chart container-->
															<div id="kt_charts_widget_19_chart_2" class="w-100 h-400px mb-13 mt-n4"></div>
															<!--end::Chart container-->
															<!--begin::Items-->
															<div class="m-0">
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
															<!--end::Items-->
														</div>
														<!--end::Tap pane-->
													</div>
													<!--end::Tab Content-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Chart widget 19-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xl-8 mb-xl-10">
											<!--begin::Chart widget 38-->
											<div class="card card-flush h-xl-50 mb-5 mb-xl-10">
												<!--begin::Header-->
												<div class="card-header pt-7">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800">LOI Issued by Departments</span>
														<span class="text-gray-500 mt-1 fw-semibold fs-6">Counted in Millions</span>
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
												<div class="card-body d-flex align-items-end px-0 pt-3 pb-5">
													<!--begin::Chart-->
													<div id="kt_charts_widget_38_chart" class="h-325px w-100 min-h-auto ps-4 pe-6"></div>
													<!--end::Chart-->
												</div>
												<!--end: Card Body-->
											</div>
											<!--end::Chart widget 38-->
											<!--begin::Chart widget 20-->
											<div class="card card-flush h-xl-50">
												<!--begin::Header-->
												<div class="card-header py-5">
													<!--begin::Title-->
													<h3 class="card-title fw-bold text-gray-800">Monthly Targets</h3>
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
												<!--begin::Card body-->
												<div class="card-body d-flex justify-content-between flex-column pb-0 px-0 pt-1">
													<!--begin::Items-->
													<div class="d-flex flex-wrap d-grid gap-5 px-9 mb-5">
														<!--begin::Item-->
														<div class="me-md-2">
															<!--begin::Statistics-->
															<div class="d-flex mb-2">
																<span class="fs-4 fw-semibold text-gray-500 me-1">$</span>
																<span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">12,706</span>
															</div>
															<!--end::Statistics-->
															<!--begin::Description-->
															<span class="fs-6 fw-semibold text-gray-500">Targets for April</span>
															<!--end::Description-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="border-start-dashed border-end-dashed border-start border-end border-gray-300 px-5 ps-md-10 pe-md-7 me-md-5">
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
																<i class="ki-duotone ki-black-up fs-7 text-success ms-n1"></i>4.5%</span>
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
													<!--begin::Chart-->
													<div id="kt_charts_widget_20" class="min-h-auto ps-4 pe-6" data-kt-chart-info="Revenue" style="height: 300px"></div>
													<!--end::Chart-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Chart widget 20-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									<!--begin::Row-->
									<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
										<!--begin::Col-->
										<div class="col-xxl-4">
											<!--begin::Engage widget 1-->
											<div class="card h-md-100" dir="ltr">
												<!--begin::Body-->
												<div class="card-body d-flex flex-column flex-center">
													<!--begin::Heading-->
													<div class="mb-2">
														<!--begin::Title-->
														<h1 class="fw-semibold text-gray-800 text-center lh-lg">Try out our
														<br />new
														<span class="fw-bolder">Invoice Manager</span></h1>
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
														<a class="btn btn-sm btn-primary me-2" data-bs-target="#kt_modal_new_address" data-bs-toggle="modal">Try Now</a>
														<!--end::Link-->
														<!--begin::Link-->
														<a class="btn btn-sm btn-light" href="{{ route('metronic.apps.user_management.users.view') }}">Learn More</a>
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
										<div class="col-xxl-8">
											<!--begin::Chart widget 23-->
											<div class="card card-flush overflow-hidden h-md-100">
												<!--begin::Header-->
												<div class="card-header py-5">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-900">Some Chart with AmCharts</span>
														<span class="text-gray-500 mt-1 fw-semibold fs-6">83 countries in service</span>
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
												<div class="card-body pt-4">
													<!--begin::Chart-->
													<div id="kt_charts_widget_23" class="h-400px w-100"></div>
													<!--end::Chart-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Chart widget 23-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									<!--begin::Row-->
									<div class="row g-5 g-xl-10">
										<!--begin::Col-->
										<div class="col-xxl-4">
											<!--begin::Chart widget 25-->
											<div class="card card-flush h-md-100">
												<!--begin::Header-->
												<div class="card-header pt-7">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-900">Warephase stats</span>
														<span class="text-gray-500 pt-2 fw-semibold fs-6">8k social visitors</span>
													</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<!--begin::Nav-->
														<ul class="nav" id="kt_chart_widget_19_tabs">
															<li class="nav-item">
																<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1" data-bs-toggle="tab" id="kt_chart_widget_25_tab_1" href="#kt_chart_widget_25_tab_content_1">2026</a>
															</li>
															<li class="nav-item">
																<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light active fw-bold px-4" data-bs-toggle="tab" id="kt_chart_widget_25_tab_2" href="#kt_chart_widget_25_tab_content_2">Month</a>
															</li>
														</ul>
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-0">
													<!--begin::Tab Content (ishlamayabdi)-->
													<div class="tab-content">
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_chart_widget_25_tab_content_1">
															<!--begin::Chart-->
															<div id="kt_charts_widget_25_chart_1" class="w-100 h-400px"></div>
															<!--end::Chart-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade active show" id="kt_chart_widget_25_tab_content_2">
															<!--begin::Chart-->
															<div id="kt_charts_widget_25_chart_2" class="w-100 h-400px"></div>
															<!--end::Chart-->
														</div>
														<!--end::Tap pane-->
													</div>
													<!--end::Tab Content-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Chart widget 25-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xxl-8">
											<!--begin::Chart widget 24-->
											<div class="card card-flush overflow-hidden h-md-100">
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
													<div id="kt_charts_widget_24" class="min-h-auto" style="height: 400px"></div>
													<!--end::Chart-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Chart widget 24-->
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
		<!--begin::Modal - New Address-->
		<div class="modal fade" id="kt_modal_new_address" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Form-->
					<form class="form" action="#" id="kt_modal_new_address_form">
						<!--begin::Modal header-->
						<div class="modal-header" id="kt_modal_new_address_header">
							<!--begin::Modal title-->
							<h2>Add New Address</h2>
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
						<div class="modal-body py-10 px-lg-17">
							<!--begin::Scroll-->
							<div class="scroll-y me-n7 pe-7" id="kt_modal_new_address_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_new_address_header" data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px">
								<!--begin::Notice-->
								<!--begin::Notice-->
								<div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
									<!--begin::Icon-->
									<i class="ki-duotone ki-information fs-2tx text-warning me-4">
										<span class="path1"></span>
										<span class="path2"></span>
										<span class="path3"></span>
									</i>
									<!--end::Icon-->
									<!--begin::Wrapper-->
									<div class="d-flex flex-stack flex-grow-1">
										<!--begin::Content-->
										<div class="fw-semibold">
											<h4 class="text-gray-900 fw-bold">Warning</h4>
											<div class="fs-6 text-gray-700">Updating address may affter to your
											<a href="#">Tax Location</a></div>
										</div>
										<!--end::Content-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Notice-->
								<!--end::Notice-->
								<!--begin::Input group-->
								<div class="row mb-5">
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<!--begin::Label-->
										<label class="required fs-5 fw-semibold mb-2">First name</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input type="text" class="form-control form-control-solid" placeholder="" name="first-name" />
										<!--end::Input-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<!--end::Label-->
										<label class="required fs-5 fw-semibold mb-2">Last name</label>
										<!--end::Label-->
										<!--end::Input-->
										<input type="text" class="form-control form-control-solid" placeholder="" name="last-name" />
										<!--end::Input-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="d-flex flex-column mb-5 fv-row">
									<!--begin::Label-->
									<label class="d-flex align-items-center fs-5 fw-semibold mb-2">
										<span class="required">Country</span>
										<span class="ms-1" data-bs-toggle="tooltip" title="Your payment statements may very based on selected country">
											<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
											</i>
										</span>
									</label>
									<!--end::Label-->
									<!--begin::Select-->
									<select name="country" data-control="select2" data-dropdown-parent="#kt_modal_new_address" data-placeholder="Select a Country..." class="form-select form-select-solid">
										<option value="">Select a Country...</option>
										<option value="AF">Afghanistan</option>
										<option value="AX">Aland Islands</option>
										<option value="AL">Albania</option>
										<option value="DZ">Algeria</option>
										<option value="AS">American Samoa</option>
										<option value="AD">Andorra</option>
										<option value="AO">Angola</option>
										<option value="AI">Anguilla</option>
										<option value="AG">Antigua and Barbuda</option>
										<option value="AR">Argentina</option>
										<option value="AM">Armenia</option>
										<option value="AW">Aruba</option>
										<option value="AU">Australia</option>
										<option value="AT">Austria</option>
										<option value="AZ">Azerbaijan</option>
										<option value="BS">Bahamas</option>
										<option value="BH">Bahrain</option>
										<option value="BD">Bangladesh</option>
										<option value="BB">Barbados</option>
										<option value="BY">Belarus</option>
										<option value="BE">Belgium</option>
										<option value="BZ">Belize</option>
										<option value="BJ">Benin</option>
										<option value="BM">Bermuda</option>
										<option value="BT">Bhutan</option>
										<option value="BO">Bolivia, Plurinational State of</option>
										<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
										<option value="BA">Bosnia and Herzegovina</option>
										<option value="BW">Botswana</option>
										<option value="BR">Brazil</option>
										<option value="IO">British Indian Ocean Territory</option>
										<option value="BN">Brunei Darussalam</option>
										<option value="BG">Bulgaria</option>
										<option value="BF">Burkina Faso</option>
										<option value="BI">Burundi</option>
										<option value="KH">Cambodia</option>
										<option value="CM">Cameroon</option>
										<option value="CA">Canada</option>
										<option value="CV">Cape Verde</option>
										<option value="KY">Cayman Islands</option>
										<option value="CF">Central African Republic</option>
										<option value="TD">Chad</option>
										<option value="CL">Chile</option>
										<option value="CN">China</option>
										<option value="CX">Christmas Island</option>
										<option value="CC">Cocos (Keeling) Islands</option>
										<option value="CO">Colombia</option>
										<option value="KM">Comoros</option>
										<option value="CK">Cook Islands</option>
										<option value="CR">Costa Rica</option>
										<option value="CI">Côte d'Ivoire</option>
										<option value="HR">Croatia</option>
										<option value="CU">Cuba</option>
										<option value="CW">Curaçao</option>
										<option value="CZ">Czech Republic</option>
										<option value="DK">Denmark</option>
										<option value="DJ">Djibouti</option>
										<option value="DM">Dominica</option>
										<option value="DO">Dominican Republic</option>
										<option value="EC">Ecuador</option>
										<option value="EG">Egypt</option>
										<option value="SV">El Salvador</option>
										<option value="GQ">Equatorial Guinea</option>
										<option value="ER">Eritrea</option>
										<option value="EE">Estonia</option>
										<option value="ET">Ethiopia</option>
										<option value="FK">Falkland Islands (Malvinas)</option>
										<option value="FJ">Fiji</option>
										<option value="FI">Finland</option>
										<option value="FR">France</option>
										<option value="PF">French Polynesia</option>
										<option value="GA">Gabon</option>
										<option value="GM">Gambia</option>
										<option value="GE">Georgia</option>
										<option value="DE">Germany</option>
										<option value="GH">Ghana</option>
										<option value="GI">Gibraltar</option>
										<option value="GR">Greece</option>
										<option value="GL">Greenland</option>
										<option value="GD">Grenada</option>
										<option value="GU">Guam</option>
										<option value="GT">Guatemala</option>
										<option value="GG">Guernsey</option>
										<option value="GN">Guinea</option>
										<option value="GW">Guinea-Bissau</option>
										<option value="HT">Haiti</option>
										<option value="VA">Holy See (Vatican City State)</option>
										<option value="HN">Honduras</option>
										<option value="HK">Hong Kong</option>
										<option value="HU">Hungary</option>
										<option value="IS">Iceland</option>
										<option value="IN">India</option>
										<option value="ID">Indonesia</option>
										<option value="IR">Iran, Islamic Republic of</option>
										<option value="IQ">Iraq</option>
										<option value="IE">Ireland</option>
										<option value="IM">Isle of Man</option>
										<option value="IL">Israel</option>
										<option value="IT">Italy</option>
										<option value="JM">Jamaica</option>
										<option value="JP">Japan</option>
										<option value="JE">Jersey</option>
										<option value="JO">Jordan</option>
										<option value="KZ">Kazakhstan</option>
										<option value="KE">Kenya</option>
										<option value="KI">Kiribati</option>
										<option value="KP">Korea, Democratic People's Republic of</option>
										<option value="KW">Kuwait</option>
										<option value="KG">Kyrgyzstan</option>
										<option value="LA">Lao People's Democratic Republic</option>
										<option value="LV">Latvia</option>
										<option value="LB">Lebanon</option>
										<option value="LS">Lesotho</option>
										<option value="LR">Liberia</option>
										<option value="LY">Libya</option>
										<option value="LI">Liechtenstein</option>
										<option value="LT">Lithuania</option>
										<option value="LU">Luxembourg</option>
										<option value="MO">Macao</option>
										<option value="MG">Madagascar</option>
										<option value="MW">Malawi</option>
										<option value="MY">Malaysia</option>
										<option value="MV">Maldives</option>
										<option value="ML">Mali</option>
										<option value="MT">Malta</option>
										<option value="MH">Marshall Islands</option>
										<option value="MQ">Martinique</option>
										<option value="MR">Mauritania</option>
										<option value="MU">Mauritius</option>
										<option value="MX">Mexico</option>
										<option value="FM">Micronesia, Federated States of</option>
										<option value="MD">Moldova, Republic of</option>
										<option value="MC">Monaco</option>
										<option value="MN">Mongolia</option>
										<option value="ME">Montenegro</option>
										<option value="MS">Montserrat</option>
										<option value="MA">Morocco</option>
										<option value="MZ">Mozambique</option>
										<option value="MM">Myanmar</option>
										<option value="NA">Namibia</option>
										<option value="NR">Nauru</option>
										<option value="NP">Nepal</option>
										<option value="NL">Netherlands</option>
										<option value="NZ">New Zealand</option>
										<option value="NI">Nicaragua</option>
										<option value="NE">Niger</option>
										<option value="NG">Nigeria</option>
										<option value="NU">Niue</option>
										<option value="NF">Norfolk Island</option>
										<option value="MP">Northern Mariana Islands</option>
										<option value="NO">Norway</option>
										<option value="OM">Oman</option>
										<option value="PK">Pakistan</option>
										<option value="PW">Palau</option>
										<option value="PS">Palestinian Territory, Occupied</option>
										<option value="PA">Panama</option>
										<option value="PG">Papua New Guinea</option>
										<option value="PY">Paraguay</option>
										<option value="PE">Peru</option>
										<option value="PH">Philippines</option>
										<option value="PL">Poland</option>
										<option value="PT">Portugal</option>
										<option value="PR">Puerto Rico</option>
										<option value="QA">Qatar</option>
										<option value="RO">Romania</option>
										<option value="RU">Russian Federation</option>
										<option value="RW">Rwanda</option>
										<option value="BL">Saint Barthélemy</option>
										<option value="KN">Saint Kitts and Nevis</option>
										<option value="LC">Saint Lucia</option>
										<option value="MF">Saint Martin (French part)</option>
										<option value="VC">Saint Vincent and the Grenadines</option>
										<option value="WS">Samoa</option>
										<option value="SM">San Marino</option>
										<option value="ST">Sao Tome and Principe</option>
										<option value="SA">Saudi Arabia</option>
										<option value="SN">Senegal</option>
										<option value="RS">Serbia</option>
										<option value="SC">Seychelles</option>
										<option value="SL">Sierra Leone</option>
										<option value="SG">Singapore</option>
										<option value="SX">Sint Maarten (Dutch part)</option>
										<option value="SK">Slovakia</option>
										<option value="SI">Slovenia</option>
										<option value="SB">Solomon Islands</option>
										<option value="SO">Somalia</option>
										<option value="ZA">South Africa</option>
										<option value="KR">South Korea</option>
										<option value="SS">South Sudan</option>
										<option value="ES">Spain</option>
										<option value="LK">Sri Lanka</option>
										<option value="SD">Sudan</option>
										<option value="SR">Suriname</option>
										<option value="SZ">Swaziland</option>
										<option value="SE">Sweden</option>
										<option value="CH">Switzerland</option>
										<option value="SY">Syrian Arab Republic</option>
										<option value="TW">Taiwan, Province of China</option>
										<option value="TJ">Tajikistan</option>
										<option value="TZ">Tanzania, United Republic of</option>
										<option value="TH">Thailand</option>
										<option value="TG">Togo</option>
										<option value="TK">Tokelau</option>
										<option value="TO">Tonga</option>
										<option value="TT">Trinidad and Tobago</option>
										<option value="TN">Tunisia</option>
										<option value="TR">Turkey</option>
										<option value="TM">Turkmenistan</option>
										<option value="TC">Turks and Caicos Islands</option>
										<option value="TV">Tuvalu</option>
										<option value="UG">Uganda</option>
										<option value="UA">Ukraine</option>
										<option value="AE">United Arab Emirates</option>
										<option value="GB">United Kingdom</option>
										<option value="US">United States</option>
										<option value="UY">Uruguay</option>
										<option value="UZ">Uzbekistan</option>
										<option value="VU">Vanuatu</option>
										<option value="VE">Venezuela, Bolivarian Republic of</option>
										<option value="VN">Vietnam</option>
										<option value="VI">Virgin Islands</option>
										<option value="YE">Yemen</option>
										<option value="ZM">Zambia</option>
										<option value="ZW">Zimbabwe</option>
									</select>
									<!--end::Select-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="d-flex flex-column mb-5 fv-row">
									<!--begin::Label-->
									<label class="required fs-5 fw-semibold mb-2">Address Line 1</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input class="form-control form-control-solid" placeholder="" name="address1" />
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="d-flex flex-column mb-5 fv-row">
									<!--begin::Label-->
									<label class="required fs-5 fw-semibold mb-2">Address Line 2</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input class="form-control form-control-solid" placeholder="" name="address2" />
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="d-flex flex-column mb-5 fv-row">
									<!--begin::Label-->
									<label class="fs-5 fw-semibold mb-2">Town</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input class="form-control form-control-solid" placeholder="" name="city" />
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="row g-9 mb-5">
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<!--begin::Label-->
										<label class="fs-5 fw-semibold mb-2">State / Province</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input class="form-control form-control-solid" placeholder="" name="state" />
										<!--end::Input-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<!--begin::Label-->
										<label class="fs-5 fw-semibold mb-2">Post Code</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input class="form-control form-control-solid" placeholder="" name="postcode" />
										<!--end::Input-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row mb-5">
									<!--begin::Wrapper-->
									<div class="d-flex flex-stack">
										<!--begin::Label-->
										<div class="me-5">
											<!--begin::Label-->
											<label class="fs-5 fw-semibold">Use as a billing adderess?</label>
											<!--end::Label-->
											<!--begin::Input-->
											<div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
											<!--end::Input-->
										</div>
										<!--end::Label-->
										<!--begin::Switch-->
										<label class="form-check form-switch form-check-custom form-check-solid">
											<!--begin::Input-->
											<input class="form-check-input" name="billing" type="checkbox" value="1" checked="checked" />
											<!--end::Input-->
											<!--begin::Label-->
											<span class="form-check-label fw-semibold text-muted">Yes</span>
											<!--end::Label-->
										</label>
										<!--end::Switch-->
									</div>
									<!--begin::Wrapper-->
								</div>
								<!--end::Input group-->
							</div>
							<!--end::Scroll-->
						</div>
						<!--end::Modal body-->
						<!--begin::Modal footer-->
						<div class="modal-footer flex-center">
							<!--begin::Button-->
							<button type="reset" id="kt_modal_new_address_cancel" class="btn btn-light me-3">Discard</button>
							<!--end::Button-->
							<!--begin::Button-->
							<button type="submit" id="kt_modal_new_address_submit" class="btn btn-primary">
								<span class="indicator-label">Submit</span>
								<span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
							</button>
							<!--end::Button-->
						</div>
						<!--end::Modal footer-->
					</form>
					<!--end::Form-->
				</div>
			</div>
		</div>
		<!--end::Modal - New Address-->
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
<script src="assets/js/custom/utilities/modals/new-address.js"></script>
@endsection
