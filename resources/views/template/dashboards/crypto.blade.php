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
										<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">My Balance: 37,045$</h1>
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
										<a href="{{ route('metronic.apps.subscriptions.list') }}" class="btn btn-sm fw-bold btn-secondary">My Subscriptions</a>
										<!--end::Secondary button-->
										<!--begin::Primary button-->
										<a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_top_up_wallet">Top Up</a>
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
									<div class="row g-5 gx-xl-10 mb-5 mb-xl-10">
										<!--begin::Col-->
										<div class="col-xxl-8">
											<!--begin::Row-->
											<div class="row g-5 gx-xl-10">
												<!--begin::Col-->
												<div class="col-md-4">
													<!--begin::Card widget 11-->
													<div class="card card-flush h-xl-100" style="background-color: #F6E5CA">
														<!--begin::Header-->
														<div class="card-header flex-nowrap pt-5">
															<!--begin::Title-->
															<h3 class="card-title align-items-start flex-column">
																<span class="card-label fw-bold fs-4 text-gray-800">Bitcoin</span>
																<span class="mt-1 fw-semibold fs-7" style="color:">36,668 USD for 1 BTC</span>
															</h3>
															<!--end::Title-->
															<!--begin::Toolbar-->
															<div class="card-toolbar">
																<!--begin::Menu-->
																<button class="btn btn-icon justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true" style="color:">
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
														<div class="card-body text-center pt-5">
															<!--begin::Image-->
															<img src="assets/media/svg/shapes/bitcoin.svg" class="h-125px mb-5" alt="" />
															<!--end::Image-->
															<!--begin::Section-->
															<div class="text-start">
																<span class="d-block fw-bold fs-1 text-gray-800">0.44554576 BTC</span>
																<span class="mt-1 fw-semibold fs-3" style="color:">19,335,45 USD</span>
															</div>
															<!--end::Section-->
														</div>
														<!--end::Body-->
													</div>
													<!--end::Card widget 11-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-4">
													<!--begin::Card widget 11-->
													<div class="card card-flush h-xl-100" style="background-color: #F3D6EF">
														<!--begin::Header-->
														<div class="card-header flex-nowrap pt-5">
															<!--begin::Title-->
															<h3 class="card-title align-items-start flex-column">
																<span class="card-label fw-bold fs-4 text-gray-800">Etherium</span>
																<span class="mt-1 fw-semibold fs-7" style="color:">325,035 USD for 1 ETH</span>
															</h3>
															<!--end::Title-->
															<!--begin::Toolbar-->
															<div class="card-toolbar">
																<!--begin::Menu-->
																<button class="btn btn-icon justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true" style="color:">
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
														<div class="card-body text-center pt-5">
															<!--begin::Image-->
															<img src="assets/media/svg/shapes/ethereum.svg" class="h-125px mb-5" alt="" />
															<!--end::Image-->
															<!--begin::Section-->
															<div class="text-start">
																<span class="d-block fw-bold fs-1 text-gray-800">29.33460000 ETH</span>
																<span class="mt-1 fw-semibold fs-3" style="color:">7,336,00 USD</span>
															</div>
															<!--end::Section-->
														</div>
														<!--end::Body-->
													</div>
													<!--end::Card widget 11-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-4">
													<!--begin::Card widget 11-->
													<div class="card card-flush h-xl-100" style="background-color: #BFDDE3">
														<!--begin::Header-->
														<div class="card-header flex-nowrap pt-5">
															<!--begin::Title-->
															<h3 class="card-title align-items-start flex-column">
																<span class="card-label fw-bold fs-4 text-gray-800">Dogecoin</span>
																<span class="mt-1 fw-semibold fs-7" style="color:">0.12,045 USD for 1 DOGE</span>
															</h3>
															<!--end::Title-->
															<!--begin::Toolbar-->
															<div class="card-toolbar">
																<!--begin::Menu-->
																<button class="btn btn-icon justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true" style="color:">
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
														<div class="card-body text-center pt-5">
															<!--begin::Image-->
															<img src="assets/media/svg/shapes/dogecoin.svg" class="h-125px mb-5" alt="" />
															<!--end::Image-->
															<!--begin::Section-->
															<div class="text-start">
																<span class="d-block fw-bold fs-1 text-gray-800">4703.7589 DOGE</span>
																<span class="mt-1 fw-semibold fs-3" style="color:">503,005,56 USD</span>
															</div>
															<!--end::Section-->
														</div>
														<!--end::Body-->
													</div>
													<!--end::Card widget 11-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xxl-4">
											<!--begin::Forms widget 1-->
											<div class="card h-xl-100">
												<!--begin::Header-->
												<div class="card-header position-relative min-h-50px p-0 border-bottom-2">
													<!--begin::Nav-->
													<ul class="nav nav-pills nav-pills-custom d-flex position-relative w-100">
														<!--begin::Item-->
														<li class="nav-item mx-0 p-0 w-50">
															<!--begin::Link-->
															<a class="nav-link btn btn-color-muted active border-0 h-100 px-0" data-bs-toggle="pill" id="kt_forms_widget_1_tab_1" href="#kt_forms_widget_1_tab_content_1">
																<!--begin::Subtitle-->
																<span class="nav-text fw-bold fs-4 mb-3">Buy</span>
																<!--end::Subtitle-->
																<!--begin::Bullet-->
																<span class="bullet-custom position-absolute z-index-2 w-100 h-2px top-100 bottom-n100 bg-primary rounded"></span>
																<!--end::Bullet-->
															</a>
															<!--end::Link-->
														</li>
														<!--end::Item-->
														<!--begin::Item-->
														<li class="nav-item mx-0 px-0 w-50">
															<!--begin::Link-->
															<a class="nav-link btn btn-color-muted border-0 h-100 px-0" data-bs-toggle="pill" id="kt_forms_widget_1_tab_2" href="#kt_forms_widget_1_tab_content_2">
																<!--begin::Subtitle-->
																<span class="nav-text fw-bold fs-4 mb-3">Sell</span>
																<!--end::Subtitle-->
																<!--begin::Bullet-->
																<span class="bullet-custom position-absolute z-index-2 w-100 h-2px top-100 bottom-n100 bg-primary rounded"></span>
																<!--end::Bullet-->
															</a>
															<!--end::Link-->
														</li>
														<!--end::Item-->
													</ul>
													<!--end::Nav-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body">
													<!--begin::Tab Content-->
													<div class="tab-content">
														<!--begin::Tap pane-->
														<div class="tab-pane fade active show" id="kt_forms_widget_1_tab_content_1">
															<!--begin::Input group-->
															<div class="form-floating border border-gray-300 rounded mb-7">
																<select class="form-select form-select-transparent" id="kt_forms_widget_1_select_1">
																	<option></option>
																	<option value="0" data-kt-select2-icon="/assets/media/svg/coins/bitcoin.svg" selected="selected">Bitcoin/BTC</option>
																	<option value="1" data-kt-select2-icon="/assets/media/svg/coins/ethereum.svg">Ethereum/ETH</option>
																	<option value="2" data-kt-select2-icon="/assets/media/svg/coins/filecoin.svg">Filecoin/FLE</option>
																	<option value="3" data-kt-select2-icon="/assets/media/svg/coins/chainlink.svg">Chainlink/CIN</option>
																	<option value="4" data-kt-select2-icon="/assets/media/svg/coins/binance.svg">Binance/BCN</option>
																</select>
																<label for="floatingInputValue">Coin Name</label>
															</div>
															<!--end::Input group-->
															<!--begin::Row-->
															<div class="row mb-7">
																<!--begin::Col-->
																<div class="col-6">
																	<!--begin::Input group-->
																	<div class="form-floating">
																		<input type="email" class="form-control text-gray-800 fw-bold" placeholder="00.0" id="floatingInputValue" value="$230.00" />
																		<label for="floatingInputValue">Amount(USD)</label>
																	</div>
																	<!--end::Input group-->
																</div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col-6">
																	<!--begin::Input group-->
																	<div class="form-floating">
																		<input type="email" class="form-control text-gray-800 fw-bold" placeholder="00.0" id="floatingInputValue" value="$0,00000032" />
																		<label for="floatingInputValue">Amount(BTC)</label>
																	</div>
																	<!--end::Input group-->
																</div>
																<!--end::Col-->
															</div>
															<!--end::Row-->
															<!--begin::Action-->
															<div class="d-flex align-items-end">
																<a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_top_up_wallet" class="btn btn-primary fs-3 w-100">Make Payment</a>
															</div>
															<!--end::Action-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_forms_widget_1_tab_content_2">
															<!--begin::Input group-->
															<div class="form-floating border rounded mb-7">
																<select class="form-select form-select-transparent" id="kt_forms_widget_1_select_2">
																	<option></option>
																	<option value="0" data-kt-select2-icon="/assets/media/svg/coins/bitcoin.svg" selected="selected">Bitcoin/BTC</option>
																	<option value="1" data-kt-select2-icon="/assets/media/svg/coins/ethereum.svg">Ethereum/ETH</option>
																	<option value="2" data-kt-select2-icon="/assets/media/svg/coins/filecoin.svg">Filecoin/FLE</option>
																	<option value="3" data-kt-select2-icon="/assets/media/svg/coins/chainlink.svg">Chainlink/CIN</option>
																	<option value="4" data-kt-select2-icon="/assets/media/svg/coins/binance.svg">Binance/BCN</option>
																</select>
																<label for="floatingInputValue">Coin Name</label>
															</div>
															<!--end::Input group-->
															<!--begin::Row-->
															<div class="row mb-7">
																<!--begin::Col-->
																<div class="col-6">
																	<!--begin::Input group-->
																	<div class="form-floating">
																		<input type="email" class="form-control text-gray-800 fw-bold" placeholder="00.0" id="floatingInputValue" value="$0,0000005" />
																		<label for="floatingInputValue">Amount(BTC)</label>
																	</div>
																	<!--end::Input group-->
																</div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col-6">
																	<!--begin::Input group-->
																	<div class="form-floating">
																		<input type="email" class="form-control text-gray-800 fw-bold" placeholder="00.0" id="floatingInputValue" value="$1230.00" />
																		<label for="floatingInputValue">Amount(USD)</label>
																	</div>
																	<!--end::Input group-->
																</div>
																<!--end::Col-->
															</div>
															<!--end::Row-->
															<!--begin::Action-->
															<div class="d-flex align-items-end">
																<a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_top_up_wallet" class="btn btn-primary fs-3 w-100">Place Offer</a>
															</div>
															<!--end::Action-->
														</div>
														<!--end::Tap pane-->
													</div>
													<!--end::Tab Content-->
												</div>
												<!--end: Card Body-->
											</div>
											<!--end::Forms widget 1-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									<!--begin::Row-->
									<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
										<!--begin::Col-->
										<div class="col-xxl-8">
											<!--begin::Chart widget 26-->
											<div class="card card-flush overflow-hidden h-xl-100">
												<!--begin::Header-->
												<div class="card-header pt-7 mb-2">
													<!--begin::Title-->
													<h3 class="card-title text-gray-800 fw-bold">Transaction History</h3>
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
												<div class="card-body d-flex justify-content-between flex-column pt-0 pb-1 px-0">
													<!--begin::Info-->
													<div class="px-9 mb-5">
														<!--begin::Statistics-->
														<div class="d-flex align-items-center mb-2">
															<!--begin::Currency-->
															<span class="fs-4 fw-semibold text-gray-500 align-self-start me-1">$</span>
															<!--end::Currency-->
															<!--begin::Value-->
															<span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">12,706</span>
															<!--end::Value-->
															<!--begin::Label-->
															<span class="badge badge-success fs-base">
															<i class="ki-duotone ki-arrow-up fs-5 text-white ms-n1">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>4.5%</span>
															<!--end::Label-->
														</div>
														<!--end::Statistics-->
														<!--begin::Description-->
														<span class="fs-6 fw-semibold text-gray-500">Transactions in April</span>
														<!--end::Description-->
													</div>
													<!--end::Info-->
													<!--begin::Chart-->
													<div id="kt_charts_widget_26" class="min-h-auto ps-4 pe-6" data-kt-chart-info="Transactions" style="height: 300px"></div>
													<!--end::Chart-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Chart widget 26-->
										</div>
										<!--end::Col-->
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
														<a class="btn btn-sm btn-primary me-2" data-bs-target="#kt_modal_create_account" data-bs-toggle="modal">Try Now</a>
														<!--end::Link-->
														<!--begin::Link-->
														<a class="btn btn-sm btn-light" href="{{ route('metronic.apps.ecommerce.sales.listing') }}">Learn More</a>
														<!--end::Link-->
													</div>
													<!--end::Links-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Engage widget 1-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									<!--begin::Row-->
									<div class="row g-5 g-xl-10">
										<!--begin::Col-->
										<div class="col-xxl-8">
											<!--begin::Table widget 7-->
											<div class="card card-flush h-xl-100">
												<!--begin::Header-->
												<div class="card-header pt-7">
													<!--begin::Title-->
													<h4 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800">Latest Activity</span>
														<span class="text-gray-500 mt-1 fw-semibold fs-7">Updated 37 minutes ago</span>
													</h4>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
														<div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-flex btn-sm btn-light d-flex align-items-center px-4">
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
												<div class="card-body py-3">
													<!--begin::Table container-->
													<div class="table-responsive">
														<!--begin::Table-->
														<table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
															<!--begin::Table head-->
															<thead>
																<tr class="border-bottom-0">
																	<th class="p-0 w-50px"></th>
																	<th class="p-0 min-w-175px"></th>
																	<th class="p-0 min-w-175px"></th>
																	<th class="p-0 min-w-150px"></th>
																	<th class="p-0 min-w-150px"></th>
																	<th class="p-0 min-w-50px"></th>
																</tr>
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody>
																<tr>
																	<td>
																		<div class="symbol symbol-40px">
																			<span class="symbol-label bg-light-info">
																				<i class="ki-duotone ki-abstract-24 fs-2x text-info">
																					<span class="path1"></span>
																					<span class="path2"></span>
																				</i>
																			</span>
																		</div>
																	</td>
																	<td class="ps-0">
																		<a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Insurance</a>
																		<span class="text-muted fw-semibold d-block fs-7">Personal Health</span>
																	</td>
																	<td>
																		<span class="text-gray-900 fw-bold d-block fs-6">BTC Wallet</span>
																		<span class="text-gray-500 fw-semibold d-block fs-7">Personal Account</span>
																	</td>
																	<td>
																		<span class="text-gray-900 fw-bold d-block fs-6">23 Jan, 22</span>
																		<span class="text-gray-500 fw-semibold d-block fs-7">Last Payment</span>
																	</td>
																	<td>
																		<span class="text-gray-900 fw-bold d-block fs-6">-0.0024 BTC</span>
																		<span class="text-gray-500 fw-semibold d-block fs-7">Balance</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																			<i class="ki-duotone ki-arrow-right fs-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="symbol symbol-40px">
																			<span class="symbol-label bg-light-success">
																				<i class="ki-duotone ki-flask fs-2x text-success">
																					<span class="path1"></span>
																					<span class="path2"></span>
																				</i>
																			</span>
																		</div>
																	</td>
																	<td class="ps-0">
																		<a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Annette Black</a>
																		<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																	</td>
																	<td>
																		<span class="text-gray-900 fw-bold d-block fs-6">ETH Wallet</span>
																		<span class="text-gray-500 fw-semibold d-block fs-7">Personal Account</span>
																	</td>
																	<td>
																		<span class="text-gray-900 fw-bold d-block fs-6">04 Feb, 22</span>
																		<span class="text-gray-500 fw-semibold d-block fs-7">Last Payment</span>
																	</td>
																	<td>
																		<span class="text-gray-900 fw-bold d-block fs-6">-0.346 ETH</span>
																		<span class="text-gray-500 fw-semibold d-block fs-7">Balance</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																			<i class="ki-duotone ki-arrow-right fs-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="symbol symbol-40px">
																			<span class="symbol-label bg-light-danger">
																				<i class="ki-duotone ki-abstract-33 fs-2x text-danger">
																					<span class="path1"></span>
																					<span class="path2"></span>
																				</i>
																			</span>
																		</div>
																	</td>
																	<td class="ps-0">
																		<a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
																		<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																	</td>
																	<td>
																		<span class="text-gray-900 fw-bold d-block fs-6">BTC Wallet</span>
																		<span class="text-gray-500 fw-semibold d-block fs-7">Personal Account</span>
																	</td>
																	<td>
																		<span class="text-gray-900 fw-bold d-block fs-6">18 Feb, 22</span>
																		<span class="text-gray-500 fw-semibold d-block fs-7">Last Payment</span>
																	</td>
																	<td>
																		<span class="text-gray-900 fw-bold d-block fs-6">-0.00081 BTC</span>
																		<span class="text-gray-500 fw-semibold d-block fs-7">Balance</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																			<i class="ki-duotone ki-arrow-right fs-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="symbol symbol-40px">
																			<span class="symbol-label bg-light-primary">
																				<i class="ki-duotone ki-abstract-47 fs-2x text-primary">
																					<span class="path1"></span>
																					<span class="path2"></span>
																				</i>
																			</span>
																		</div>
																	</td>
																	<td class="ps-0">
																		<a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Guy Hawkins</a>
																		<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																	</td>
																	<td>
																		<span class="text-gray-900 fw-bold d-block fs-6">DOGE Wallet</span>
																		<span class="text-gray-500 fw-semibold d-block fs-7">Personal Account</span>
																	</td>
																	<td>
																		<span class="text-gray-900 fw-bold d-block fs-6">01 Apr, 22</span>
																		<span class="text-gray-500 fw-semibold d-block fs-7">Last Payment</span>
																	</td>
																	<td>
																		<span class="text-gray-900 fw-bold d-block fs-6">-456.34 DOGE</span>
																		<span class="text-gray-500 fw-semibold d-block fs-7">Balance</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																			<i class="ki-duotone ki-arrow-right fs-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</a>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="symbol symbol-40px">
																			<span class="symbol-label bg-light-warning">
																				<i class="ki-duotone ki-technology-2 fs-2x text-warning">
																					<span class="path1"></span>
																					<span class="path2"></span>
																				</i>
																			</span>
																		</div>
																	</td>
																	<td class="ps-0">
																		<a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Marvin McKinney</a>
																		<span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
																	</td>
																	<td>
																		<span class="text-gray-900 fw-bold d-block fs-6">BTC Wallet</span>
																		<span class="text-gray-500 fw-semibold d-block fs-7">Personal Account</span>
																	</td>
																	<td>
																		<span class="text-gray-900 fw-bold d-block fs-6">26 May, 22</span>
																		<span class="text-gray-500 fw-semibold d-block fs-7">Last Payment</span>
																	</td>
																	<td>
																		<span class="text-gray-900 fw-bold d-block fs-6">-0.000039 BTC</span>
																		<span class="text-gray-500 fw-semibold d-block fs-7">Balance</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
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
												<!--begin::Body-->
											</div>
											<!--end::Table widget 7-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xxl-4">
											<!--begin::List widget 22-->
											<div class="card card-flush h-xl-100">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800">Mining Status</span>
														<span class="text-gray-500 mt-1 fw-semibold fs-6">8k social visitors</span>
													</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<a href="#" class="btn btn-sm btn-light">All Courses</a>
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body">
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Section-->
														<div class="d-flex align-items-center me-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-3">
																<span class="symbol-label bg-light-info">
																	<i class="ki-duotone ki-abstract-24 fs-2x text-info">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Content-->
															<div class="me-5">
																<!--begin::Title-->
																<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">GPUs mining</a>
																<!--end::Title-->
																<!--begin::Desc-->
																<span class="fw-semibold fs-7 d-block text-start text-success ps-0">Running</span>
																<!--end::Desc-->
															</div>
															<!--end::Content-->
														</div>
														<!--end::Section-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center">
															<!--begin::Info-->
															<div class="d-flex flex-center">
																<!--begin::Action-->
																<div class="form-check form-switch form-check-custom form-check-solid">
																	<input class="form-check-input h-20px w-30px" type="checkbox" value="" id="flexSwitchChecked" checked="checked" />
																</div>
																<!--end::Action-->
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
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-3">
																<span class="symbol-label bg-light-success">
																	<i class="ki-duotone ki-flask fs-2x text-success">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Content-->
															<div class="me-5">
																<!--begin::Title-->
																<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">GPUs mining</a>
																<!--end::Title-->
																<!--begin::Desc-->
																<span class="fw-semibold fs-7 d-block text-start text-success ps-0">Running</span>
																<!--end::Desc-->
															</div>
															<!--end::Content-->
														</div>
														<!--end::Section-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center">
															<!--begin::Info-->
															<div class="d-flex flex-center">
																<!--begin::Action-->
																<div class="form-check form-switch form-check-custom form-check-solid">
																	<input class="form-check-input h-20px w-30px" type="checkbox" value="" id="flexSwitchChecked" checked="checked" />
																</div>
																<!--end::Action-->
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
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-3">
																<span class="symbol-label bg-light-danger">
																	<i class="ki-duotone ki-abstract-33 fs-2x text-danger">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Content-->
															<div class="me-5">
																<!--begin::Title-->
																<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Est. daily USD</a>
																<!--end::Title-->
																<!--begin::Desc-->
																<span class="fw-semibold fs-7 d-block text-start text-gray-400 ps-0">$48.02</span>
																<!--end::Desc-->
															</div>
															<!--end::Content-->
														</div>
														<!--end::Section-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center">
															<!--begin::Info-->
															<div class="d-flex flex-center">
																<!--begin::Action-->
																<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-25px h-25px">
																	<i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
																</a>
																<!--end::Action-->
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
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-3">
																<span class="symbol-label bg-light-primary">
																	<i class="ki-duotone ki-abstract-47 fs-2x text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Content-->
															<div class="me-5">
																<!--begin::Title-->
																<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Team Members</a>
																<!--end::Title-->
																<!--begin::Desc-->
																<span class="fw-semibold fs-7 d-block text-start text-gray-400 ps-0">6</span>
																<!--end::Desc-->
															</div>
															<!--end::Content-->
														</div>
														<!--end::Section-->
														<!--begin::Wrapper-->
														<div class="d-flex align-items-center">
															<!--begin::Info-->
															<div class="d-flex flex-center">
																<!--begin::Action-->
																<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-25px h-25px">
																	<i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
																</a>
																<!--end::Action-->
															</div>
															<!--end::Info-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Body-->
												<!--begin::Footer-->
												<div class="card-footer mx-auto pt-0">
													<!--begin::Actions-->
													<a href="#" class="btn btn-primary btn-sm me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">Add PC</a>
													<a href="#" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Buy GPU</a>
													<!--end::Actions-->
												</div>
												<!--end::Footer-->
											</div>
											<!--end::List widget 22-->
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
		<div class="modal fade" id="kt_modal_top_up_wallet" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-fullscreen p-9">
				<!--begin::Modal content-->
				<div class="modal-content modal-rounded">
					<!--begin::Modal header-->
					<div class="modal-header py-7 d-flex justify-content-between">
						<!--begin::Modal title-->
						<h2>Top Up Wallet</h2>
						<!--end::Modal title-->
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
					<div class="modal-body scroll-y m-5">
						<!--begin::Stepper-->
						<div class="stepper stepper-links d-flex flex-column gap-5" id="kt_modal_top_up_wallet_stepper">
							<!--begin::Nav-->
							<div class="stepper-nav justify-content-center py-2">
								<!--begin::Step 1-->
								<div class="stepper-item current" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Deposit Amount</h3>
								</div>
								<!--end::Step 1-->
								<!--begin::Step 2-->
								<div class="stepper-item" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Currency</h3>
								</div>
								<!--end::Step 2-->
								<!--begin::Step 3-->
								<div class="stepper-item" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Authentication</h3>
								</div>
								<!--end::Step 3-->
								<!--begin::Step 4-->
								<div class="stepper-item" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Completed</h3>
								</div>
								<!--end::Step 4-->
							</div>
							<!--end::Nav-->
							<!--begin::Form-->
							<form class="mx-auto w-100 mw-600px pt-15 pb-10" novalidate="novalidate" id="kt_modal_top_up_wallet_stepper_form">
								<!--begin::Step 1-->
								<div class="current" data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-10 pb-lg-15">
											<!--begin::Title-->
											<h2 class="fw-bold d-flex align-items-center text-gray-900">Set Amount to Top Up
											<span class="ms-1" data-bs-toggle="tooltip" title="You will be charged the set amount from your selected payment option">
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
											<label class="form-label mb-3">
												<span class="required">Top Up Amount</span>
											</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="text" class="form-control form-control-lg form-control-solid" name="top_up_amount" placeholder="" value="" autocomplete="off" />
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-10">
											<!--begin::Label-->
											<label class="required fw-semibold fs-6 mb-5">Currency Type</label>
											<!--end::Label-->
											<!--begin::Row-->
											<div class="row row-cols-1 row-cols-md-2 g-5">
												<!--begin::Col-->
												<div class="col">
													<!--begin::Option-->
													<input type="radio" class="btn-check" name="currency_type" value="dollar" id="kt_radio_buttons_2_option_1" checked="checked" />
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center h-100" for="kt_radio_buttons_2_option_1">
														<i class="ki-duotone ki-dollar fs-3hx text-primary">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
														<span class="d-block fw-semibold text-start">
															<span class="text-gray-900 fw-bold d-block fs-3">Cash</span>
															<span class="text-muted fw-semibold fs-6">Top up wallet using cash from one of your saved payment options.</span>
														</span>
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col">
													<!--begin::Option-->
													<input type="radio" class="btn-check" name="currency_type" value="crypto" id="kt_radio_buttons_2_option_2" />
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center h-100" for="kt_radio_buttons_2_option_2">
														<i class="ki-duotone ki-bitcoin fs-3hx text-primary">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
														<span class="d-block fw-semibold text-start">
															<span class="text-gray-900 fw-bold d-block fs-3">Crypto</span>
															<span class="text-muted fw-semibold fs-6">Top up wallet using a crypto currency.</span>
														</span>
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
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
											<h1 class="fw-bold text-gray-900">Currency</h1>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="text-muted fw-semibold fs-6">If you need more info, please check
											<a href="#" class="link-primary">Top Up Guidelines</a></div>
											<!--end::Description-->
										</div>
										<!--end::Heading-->
										<!--begin::Dollar options-->
										<div class="" data-kt-modal-top-up-wallet-option="dollar">
											<!--begin::Input group-->
											<div class="fv-row mb-10">
												<!--begin::Label-->
												<label class="required fs-6 fw-semibold mb-2">Select a payment method</label>
												<!--End::Label-->
												<!--begin::Row-->
												<div class="row row-cols-1 row-cols-md-2 g-5">
													<!--begin::Col-->
													<div class="col">
														<!--begin::Option-->
														<input type="radio" class="btn-check" name="payment_methods" value="dollar" id="kt_modal_top_up_wallet_payment_method_option_0" checked="checked" />
														<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-start gap-5 h-100" for="kt_modal_top_up_wallet_payment_method_option_0">
															<!--begin::Icon-->
															<img src="assets/media/svg/card-logos/mastercard.svg" alt="" class="w-50px" />
															<!--end::Icon-->
															<!--begin::Card details-->
															<div class="d-flex align-items-start flex-column gap-3">
																<div class="d-flex align-items-center">
																	<!--begin::Card name-->
																	<span>Personal</span>
																	<!--end::Card name-->
																	<!--begin::Badge-->
																	<div class="badge badge-primary ms-5">Primary</div>
																	<!--end::Badge-->
																</div>
																<!--begin::Card number-->
																<div class="text-gray-900 fw-bold">**** 8742</div>
																<!--end::Card number-->
																<!--begin::Card expiry-->
																<div class="text-muted">exp 01/23</div>
																<!--end::Card expiry-->
															</div>
															<!--end::Card details-->
														</label>
														<!--end::Option-->
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col">
														<!--begin::Option-->
														<input type="radio" class="btn-check" name="payment_methods" value="dollar" id="kt_modal_top_up_wallet_payment_method_option_1" />
														<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-start gap-5 h-100" for="kt_modal_top_up_wallet_payment_method_option_1">
															<!--begin::Icon-->
															<img src="assets/media/svg/card-logos/visa.svg" alt="" class="w-50px" />
															<!--end::Icon-->
															<!--begin::Card details-->
															<div class="d-flex align-items-start flex-column gap-3">
																<div class="d-flex align-items-center">
																	<!--begin::Card name-->
																	<span>Family</span>
																	<!--end::Card name-->
																</div>
																<!--begin::Card number-->
																<div class="text-gray-900 fw-bold">**** 1141</div>
																<!--end::Card number-->
																<!--begin::Card expiry-->
																<div class="text-muted">exp 05/24</div>
																<!--end::Card expiry-->
															</div>
															<!--end::Card details-->
														</label>
														<!--end::Option-->
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col">
														<!--begin::Option-->
														<input type="radio" class="btn-check" name="payment_methods" value="dollar" id="kt_modal_top_up_wallet_payment_method_option_2" />
														<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-start gap-5 h-100" for="kt_modal_top_up_wallet_payment_method_option_2">
															<!--begin::Icon-->
															<img src="assets/media/svg/card-logos/mastercard.svg" alt="" class="w-50px" />
															<!--end::Icon-->
															<!--begin::Card details-->
															<div class="d-flex align-items-start flex-column gap-3">
																<div class="d-flex align-items-center">
																	<!--begin::Card name-->
																	<span>Company</span>
																	<!--end::Card name-->
																</div>
																<!--begin::Card number-->
																<div class="text-gray-900 fw-bold">**** 8839</div>
																<!--end::Card number-->
																<!--begin::Card expiry-->
																<div class="text-muted">exp 07/24</div>
																<!--end::Card expiry-->
															</div>
															<!--end::Card details-->
														</label>
														<!--end::Option-->
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col">
														<!--begin::Add new card-->
														<a href="{{ route('metronic.utilities.modals.forms.new_card') }}" class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex flex-column flex-center gap-5 h-100">
															<!--begin::Icon-->
															<i class="ki-duotone ki-plus-circle fs-3hx text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
															<!--end::Icon-->
															<!--begin::Label-->
															<div class="fs-5 fw-bold">Add New Card</div>
															<!--end::Label-->
														</a>
														<!--end::Add new card-->
													</div>
													<!--end::Col-->
												</div>
												<!--end::Row-->
											</div>
											<!--end::Input group-->
										</div>
										<!--end::Dollar options-->
										<!--begin::Crypto options-->
										<div class="d-none" data-kt-modal-top-up-wallet-option="crypto">
											<!--begin::Input group-->
											<div class="mb-10">
												<!--begin::Label-->
												<label class="required fs-6 fw-semibold mb-2">Select a coin</label>
												<!--End::Label-->
												<!--begin::Row-->
												<div class="row row-cols-2 row-cols-md-4 g-5">
													<!--begin::Col-->
													<div class="col">
														<!--begin::Option-->
														<input type="radio" class="btn-check" name="select_coin" value="dollar" id="kt_modal_top_up_wallet_coin_option_0" checked="checked" />
														<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex flex-column flex-center gap-5 h-100" for="kt_modal_top_up_wallet_coin_option_0">
															<!--begin::Icon-->
															<img src="assets/media/svg/coins/binance.svg" alt="" class="w-50px" />
															<!--end::Icon-->
															<!--begin::Label-->
															<div class="fs-5 fw-bold">Binance</div>
															<!--end::Label-->
														</label>
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col">
														<!--begin::Option-->
														<input type="radio" class="btn-check" name="select_coin" value="dollar" id="kt_modal_top_up_wallet_coin_option_1" />
														<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex flex-column flex-center gap-5 h-100" for="kt_modal_top_up_wallet_coin_option_1">
															<!--begin::Icon-->
															<img src="assets/media/svg/coins/bitcoin.svg" alt="" class="w-50px" />
															<!--end::Icon-->
															<!--begin::Label-->
															<div class="fs-5 fw-bold">Bitcoin</div>
															<!--end::Label-->
														</label>
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col">
														<!--begin::Option-->
														<input type="radio" class="btn-check" name="select_coin" value="dollar" id="kt_modal_top_up_wallet_coin_option_2" />
														<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex flex-column flex-center gap-5 h-100" for="kt_modal_top_up_wallet_coin_option_2">
															<!--begin::Icon-->
															<img src="assets/media/svg/coins/chainlink.svg" alt="" class="w-50px" />
															<!--end::Icon-->
															<!--begin::Label-->
															<div class="fs-5 fw-bold">Chainlink</div>
															<!--end::Label-->
														</label>
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col">
														<!--begin::Option-->
														<input type="radio" class="btn-check" name="select_coin" value="dollar" id="kt_modal_top_up_wallet_coin_option_3" />
														<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex flex-column flex-center gap-5 h-100" for="kt_modal_top_up_wallet_coin_option_3">
															<!--begin::Icon-->
															<img src="assets/media/svg/coins/coin.svg" alt="" class="w-50px" />
															<!--end::Icon-->
															<!--begin::Label-->
															<div class="fs-5 fw-bold">Coin</div>
															<!--end::Label-->
														</label>
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col">
														<!--begin::Option-->
														<input type="radio" class="btn-check" name="select_coin" value="dollar" id="kt_modal_top_up_wallet_coin_option_4" />
														<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex flex-column flex-center gap-5 h-100" for="kt_modal_top_up_wallet_coin_option_4">
															<!--begin::Icon-->
															<img src="assets/media/svg/coins/ethereum.svg" alt="" class="w-50px" />
															<!--end::Icon-->
															<!--begin::Label-->
															<div class="fs-5 fw-bold">Ethereum</div>
															<!--end::Label-->
														</label>
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col">
														<!--begin::Option-->
														<input type="radio" class="btn-check" name="select_coin" value="dollar" id="kt_modal_top_up_wallet_coin_option_5" />
														<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex flex-column flex-center gap-5 h-100" for="kt_modal_top_up_wallet_coin_option_5">
															<!--begin::Icon-->
															<img src="assets/media/svg/coins/filecoin.svg" alt="" class="w-50px" />
															<!--end::Icon-->
															<!--begin::Label-->
															<div class="fs-5 fw-bold">Filecoin</div>
															<!--end::Label-->
														</label>
													</div>
													<!--end::Col-->
												</div>
												<!--end::Row-->
											</div>
											<!--end::Input group-->
										</div>
										<!--end::Crypto options-->
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
											<h1 class="fw-bold text-gray-900">Authentication</h1>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="text-muted fw-semibold fs-6">If you need more info, please check
											<a href="#" class="link-primary">Top Up Guidelines</a></div>
											<!--end::Description-->
										</div>
										<!--end::Heading-->
										<!--begin::Secret key-->
										<div class="d-flex flex-column mb-10">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold mb-2">Secret Key
											<span class="ms-1" data-bs-toggle="tooltip" title="Please ensure that your secret key matches your saved image and keyword">
												<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</span></label>
											<!--end::Label-->
											<div class="d-flex align-items-center gap-5">
												<!--begin::Image-->
												<div class="symbol symbol-100px symbol-circle">
													<img src="assets/media/avatars/300-11.jpg" alt="Secret Image" />
												</div>
												<!--end::Image-->
												<!--begin::Keyword-->
												<div class="fw-bold fs-5">my_secret_key</div>
												<!--end::Keyword-->
											</div>
										</div>
										<!--end::Secret key-->
										<!--begin::Input group-->
										<div class="fv-row mb-10">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold mb-2">Enter Password
											<span class="ms-1" data-bs-toggle="tooltip" title="Please enter your password to authenticate the wallet top up">
												<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</span></label>
											<!--End::Label-->
											<!--begin::Input-->
											<input type="password" class="form-control form-control-lg form-control-solid" name="top_up_password" placeholder="" value="" autocomplete="off" />
											<!--end::Input-->
										</div>
										<!--end::Input group-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Step 3-->
								<!--begin::Step 5-->
								<div data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-12 text-center">
											<!--begin::Title-->
											<h1 class="fw-bold text-gray-900">Successful Top Up!</h1>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="fw-semibold text-muted fs-4">You will receive an email with with the summary of your latest top up!</div>
											<!--end::Description-->
										</div>
										<!--end::Heading-->
										<!--begin::Actions-->
										<div class="d-flex flex-center pb-20">
											<button id="kt_modal_top_up_wallet_create_new" type="button" class="btn btn-lg btn-light me-3" data-kt-element="complete-start">Top Up Wallet</button>
											<a href="" class="btn btn-lg btn-primary" data-bs-toggle="tooltip" title="Coming Soon">View Wallet</a>
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
						<!--end::Stepper-->
					</div>
					<!--begin::Modal body-->
				</div>
			</div>
		</div>
		<!--end::Modal - Create Campaign-->
		<!--begin::Modal - Create account-->
		<div class="modal fade" id="kt_modal_create_account" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog mw-1000px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header">
						<!--begin::Title-->
						<h2>Create Business Account</h2>
						<!--end::Title-->
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
					<div class="modal-body scroll-y m-5">
						<!--begin::Stepper-->
						<div class="stepper stepper-links d-flex flex-column" id="kt_create_account_stepper">
							<!--begin::Nav-->
							<div class="stepper-nav py-5">
								<!--begin::Step 1-->
								<div class="stepper-item current" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Account Type</h3>
								</div>
								<!--end::Step 1-->
								<!--begin::Step 2-->
								<div class="stepper-item" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Account Info</h3>
								</div>
								<!--end::Step 2-->
								<!--begin::Step 3-->
								<div class="stepper-item" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Business Details</h3>
								</div>
								<!--end::Step 3-->
								<!--begin::Step 4-->
								<div class="stepper-item" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Billing Details</h3>
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
							<form class="mx-auto mw-600px w-100 py-10" novalidate="novalidate" id="kt_create_account_form">
								<!--begin::Step 1-->
								<div class="current" data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-10 pb-lg-15">
											<!--begin::Title-->
											<h2 class="fw-bold d-flex align-items-center text-gray-900">Choose Account Type
											<span class="ms-1" data-bs-toggle="tooltip" title="Billing is issued based on your selected account typ">
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
										<div class="fv-row">
											<!--begin::Row-->
											<div class="row">
												<!--begin::Col-->
												<div class="col-lg-6">
													<!--begin::Option-->
													<input type="radio" class="btn-check" name="account_type" value="personal" checked="checked" id="kt_create_account_form_account_type_personal" />
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-10" for="kt_create_account_form_account_type_personal">
														<i class="ki-duotone ki-badge fs-3x me-5">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
															<span class="path5"></span>
														</i>
														<!--begin::Info-->
														<span class="d-block fw-semibold text-start">
															<span class="text-gray-900 fw-bold d-block fs-4 mb-2">Personal Account</span>
															<span class="text-muted fw-semibold fs-6">If you need more info, please check it out</span>
														</span>
														<!--end::Info-->
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-6">
													<!--begin::Option-->
													<input type="radio" class="btn-check" name="account_type" value="corporate" id="kt_create_account_form_account_type_corporate" />
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center" for="kt_create_account_form_account_type_corporate">
														<i class="ki-duotone ki-briefcase fs-3x me-5">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
														<!--begin::Info-->
														<span class="d-block fw-semibold text-start">
															<span class="text-gray-900 fw-bold d-block fs-4 mb-2">Corporate Account</span>
															<span class="text-muted fw-semibold fs-6">Create corporate account to mane users</span>
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
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Step 1-->
								<!--begin::Step 2-->
								<div data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-10 pb-lg-15">
											<!--begin::Title-->
											<h2 class="fw-bold text-gray-900">Account Info</h2>
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
											<label class="d-flex align-items-center form-label mb-3">Specify Team Size
											<span class="ms-1" data-bs-toggle="tooltip" title="Provide your team size to help us setup your billing">
												<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</span></label>
											<!--end::Label-->
											<!--begin::Row-->
											<div class="row mb-2" data-kt-buttons="true">
												<!--begin::Col-->
												<div class="col">
													<!--begin::Option-->
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4">
														<input type="radio" class="btn-check" name="account_team_size" value="1-1" />
														<span class="fw-bold fs-3">1-1</span>
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col">
													<!--begin::Option-->
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4 active">
														<input type="radio" class="btn-check" name="account_team_size" checked="checked" value="2-10" />
														<span class="fw-bold fs-3">2-10</span>
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col">
													<!--begin::Option-->
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4">
														<input type="radio" class="btn-check" name="account_team_size" value="10-50" />
														<span class="fw-bold fs-3">10-50</span>
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col">
													<!--begin::Option-->
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4">
														<input type="radio" class="btn-check" name="account_team_size" value="50+" />
														<span class="fw-bold fs-3">50+</span>
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
											<!--begin::Hint-->
											<div class="form-text">Customers will see this shortened version of your statement descriptor</div>
											<!--end::Hint-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-10 fv-row">
											<!--begin::Label-->
											<label class="form-label mb-3">Team Account Name</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="text" class="form-control form-control-lg form-control-solid" name="account_name" placeholder="" value="" />
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-0 fv-row">
											<!--begin::Label-->
											<label class="d-flex align-items-center form-label mb-5">Select Account Plan
											<span class="ms-1" data-bs-toggle="tooltip" title="Monthly billing will be based on your account plan">
												<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</span></label>
											<!--end::Label-->
											<!--begin::Options-->
											<div class="mb-0">
												<!--begin:Option-->
												<label class="d-flex flex-stack mb-5 cursor-pointer">
													<!--begin:Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin::Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label">
																<i class="ki-duotone ki-bank fs-1 text-gray-600">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</span>
														</span>
														<!--end::Icon-->
														<!--begin::Description-->
														<span class="d-flex flex-column">
															<span class="fw-bold text-gray-800 text-hover-primary fs-5">Company Account</span>
															<span class="fs-6 fw-semibold text-muted">Use images to enhance your post flow</span>
														</span>
														<!--end:Description-->
													</span>
													<!--end:Label-->
													<!--begin:Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="account_plan" value="1" />
													</span>
													<!--end:Input-->
												</label>
												<!--end::Option-->
												<!--begin:Option-->
												<label class="d-flex flex-stack mb-5 cursor-pointer">
													<!--begin:Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin::Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label">
																<i class="ki-duotone ki-chart fs-1 text-gray-600">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</span>
														</span>
														<!--end::Icon-->
														<!--begin::Description-->
														<span class="d-flex flex-column">
															<span class="fw-bold text-gray-800 text-hover-primary fs-5">Developer Account</span>
															<span class="fs-6 fw-semibold text-muted">Use images to your post time</span>
														</span>
														<!--end:Description-->
													</span>
													<!--end:Label-->
													<!--begin:Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" checked="checked" name="account_plan" value="2" />
													</span>
													<!--end:Input-->
												</label>
												<!--end::Option-->
												<!--begin:Option-->
												<label class="d-flex flex-stack mb-0 cursor-pointer">
													<!--begin:Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin::Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label">
																<i class="ki-duotone ki-chart-pie-4 fs-1 text-gray-600">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>
															</span>
														</span>
														<!--end::Icon-->
														<!--begin::Description-->
														<span class="d-flex flex-column">
															<span class="fw-bold text-gray-800 text-hover-primary fs-5">Testing Account</span>
															<span class="fs-6 fw-semibold text-muted">Use images to enhance time travel rivers</span>
														</span>
														<!--end:Description-->
													</span>
													<!--end:Label-->
													<!--begin:Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="account_plan" value="3" />
													</span>
													<!--end:Input-->
												</label>
												<!--end::Option-->
											</div>
											<!--end::Options-->
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
											<h2 class="fw-bold text-gray-900">Business Details</h2>
											<!--end::Title-->
											<!--begin::Notice-->
											<div class="text-muted fw-semibold fs-6">If you need more info, please check out
											<a href="#" class="link-primary fw-bold">Help Page</a>.</div>
											<!--end::Notice-->
										</div>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="fv-row mb-10">
											<!--begin::Label-->
											<label class="form-label required">Business Name</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input name="business_name" class="form-control form-control-lg form-control-solid" value="Keenthemes Inc." />
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-10">
											<!--begin::Label-->
											<label class="d-flex align-items-center form-label">
												<span class="required">Shortened Descriptor</span>
												<span class="lh-1 ms-1" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="&lt;div class=&#039;p-4 rounded bg-light&#039;&gt; &lt;div class=&#039;d-flex flex-stack text-muted mb-4&#039;&gt; &lt;i class=&quot;ki-duotone ki-bank fs-3 me-3&quot;&gt;&lt;span class=&quot;path1&quot;&gt;&lt;/span&gt;&lt;span class=&quot;path2&quot;&gt;&lt;/span&gt;&lt;/i&gt; &lt;div class=&#039;fw-bold&#039;&gt;INCBANK **** 1245 STATEMENT&lt;/div&gt; &lt;/div&gt; &lt;div class=&#039;d-flex flex-stack fw-semibold text-gray-600&#039;&gt; &lt;div&gt;Amount&lt;/div&gt; &lt;div&gt;Transaction&lt;/div&gt; &lt;/div&gt; &lt;div class=&#039;separator separator-dashed my-2&#039;&gt;&lt;/div&gt; &lt;div class=&#039;d-flex flex-stack text-gray-900 fw-bold mb-2&#039;&gt; &lt;div&gt;USD345.00&lt;/div&gt; &lt;div&gt;KEENTHEMES*&lt;/div&gt; &lt;/div&gt; &lt;div class=&#039;d-flex flex-stack text-muted mb-2&#039;&gt; &lt;div&gt;USD75.00&lt;/div&gt; &lt;div&gt;Hosting fee&lt;/div&gt; &lt;/div&gt; &lt;div class=&#039;d-flex flex-stack text-muted&#039;&gt; &lt;div&gt;USD3,950.00&lt;/div&gt; &lt;div&gt;Payrol&lt;/div&gt; &lt;/div&gt; &lt;/div&gt;">
													<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
												</span>
											</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input name="business_descriptor" class="form-control form-control-lg form-control-solid" value="KEENTHEMES" />
											<!--end::Input-->
											<!--begin::Hint-->
											<div class="form-text">Customers will see this shortened version of your statement descriptor</div>
											<!--end::Hint-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-10">
											<!--begin::Label-->
											<label class="form-label required">Corporation Type</label>
											<!--end::Label-->
											<!--begin::Input-->
											<select name="business_type" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Select..." data-allow-clear="true" data-hide-search="true">
												<option></option>
												<option value="1">S Corporation</option>
												<option value="1">C Corporation</option>
												<option value="2">Sole Proprietorship</option>
												<option value="3">Non-profit</option>
												<option value="4">Limited Liability</option>
												<option value="5">General Partnership</option>
											</select>
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-10">
											<!--end::Label-->
											<label class="form-label">Business Description</label>
											<!--end::Label-->
											<!--begin::Input-->
											<textarea name="business_description" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-0">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold form-label required">Contact Email</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input name="business_email" class="form-control form-control-lg form-control-solid" value="corp@support.com" />
											<!--end::Input-->
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
										<div class="pb-10 pb-lg-15">
											<!--begin::Title-->
											<h2 class="fw-bold text-gray-900">Billing Details</h2>
											<!--end::Title-->
											<!--begin::Notice-->
											<div class="text-muted fw-semibold fs-6">If you need more info, please check out
											<a href="#" class="text-primary fw-bold">Help Page</a>.</div>
											<!--end::Notice-->
										</div>
										<!--end::Heading-->
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
									<!--end::Wrapper-->
								</div>
								<!--end::Step 4-->
								<!--begin::Step 5-->
								<div data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-8 pb-lg-10">
											<!--begin::Title-->
											<h2 class="fw-bold text-gray-900">Your Are Done!</h2>
											<!--end::Title-->
											<!--begin::Notice-->
											<div class="text-muted fw-semibold fs-6">If you need more info, please
											<a href="{{ route('metronic.authentication.layouts.corporate.sign_in') }}" class="link-primary fw-bold">Sign In</a>.</div>
											<!--end::Notice-->
										</div>
										<!--end::Heading-->
										<!--begin::Body-->
										<div class="mb-0">
											<!--begin::Text-->
											<div class="fs-6 text-gray-600 mb-5">Writing headlines for blog posts is as much an art as it is a science and probably warrants its own post, but for all advise is with what works for your great & amazing audience.</div>
											<!--end::Text-->
											<!--begin::Alert-->
											<!--begin::Notice-->
											<div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
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
														<h4 class="text-gray-900 fw-bold">We need your attention!</h4>
														<div class="fs-6 text-gray-700">To start using great tools, please,
														<a href="{{ route('metronic.utilities.wizards.vertical') }}" class="fw-bold">Create Team Platform</a></div>
													</div>
													<!--end::Content-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Notice-->
											<!--end::Alert-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Step 5-->
								<!--begin::Actions-->
								<div class="d-flex flex-stack pt-15">
									<!--begin::Wrapper-->
									<div class="mr-2">
										<button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous" data-kt-stepper-state="hide-on-last-step">
										<i class="ki-duotone ki-arrow-left fs-4 me-1">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>Back</button>
									</div>
									<!--end::Wrapper-->
									<!--begin::Wrapper-->
									<div>
										<button type="button" class="btn btn-lg btn-primary me-3" data-kt-stepper-action="submit">
											<span class="indicator-label">Submit
											<i class="ki-duotone ki-arrow-right fs-3 ms-2 me-0">
												<span class="path1"></span>
												<span class="path2"></span>
											</i></span>
											<span class="indicator-progress">Please wait...
											<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										</button>
										<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
										<i class="ki-duotone ki-arrow-right fs-4 ms-1 me-0">
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
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - Create project-->
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
		<!--begin::Modal - Users Search-->
		<div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-650px">
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
						<!--begin::Content-->
						<div class="text-center mb-13">
							<h1 class="mb-3">Search Users</h1>
							<div class="text-muted fw-semibold fs-5">Invite Collaborators To Your Project</div>
						</div>
						<!--end::Content-->
						<!--begin::Search-->
						<div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
							<!--begin::Form-->
							<form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
								<!--begin::Hidden input(Added to disable form autocomplete)-->
								<input type="hidden" />
								<!--end::Hidden input-->
								<!--begin::Icon-->
								<i class="ki-duotone ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
								<!--end::Icon-->
								<!--begin::Input-->
								<input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input" />
								<!--end::Input-->
								<!--begin::Spinner-->
								<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
									<span class="spinner-border h-15px w-15px align-middle text-muted"></span>
								</span>
								<!--end::Spinner-->
								<!--begin::Reset-->
								<span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
									<i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</span>
								<!--end::Reset-->
							</form>
							<!--end::Form-->
							<!--begin::Wrapper-->
							<div class="py-5">
								<!--begin::Suggestions-->
								<div data-kt-search-element="suggestions">
									<!--begin::Heading-->
									<h3 class="fw-semibold mb-5">Recently searched:</h3>
									<!--end::Heading-->
									<!--begin::Users-->
									<div class="mh-375px scroll-y me-n7 pe-7">
										<!--begin::User-->
										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Emma Smith</span>
												<span class="badge badge-light">Art Director</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
										<!--begin::User-->
										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Melody Macy</span>
												<span class="badge badge-light">Marketing Analytic</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
										<!--begin::User-->
										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Max Smith</span>
												<span class="badge badge-light">Software Enginer</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
										<!--begin::User-->
										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Sean Bean</span>
												<span class="badge badge-light">Web Developer</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
										<!--begin::User-->
										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Brian Cox</span>
												<span class="badge badge-light">UI/UX Designer</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
									</div>
									<!--end::Users-->
								</div>
								<!--end::Suggestions-->
								<!--begin::Results(add d-none to below element to hide the users list by default)-->
								<div data-kt-search-element="results" class="d-none">
									<!--begin::Users-->
									<div class="mh-375px scroll-y me-n7 pe-7">
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="0" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
													<div class="fw-semibold text-muted">smith@kpmg.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='1']" value="1" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
													<div class="fw-semibold text-muted">melody@altbox.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1" selected="selected">Guest</option>
													<option value="2">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='2']" value="2" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
													<div class="fw-semibold text-muted">max@kt.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='3']" value="3" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
													<div class="fw-semibold text-muted">sean@dellito.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='4']" value="4" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
													<div class="fw-semibold text-muted">brian@exchange.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='5']" value="5" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
													<div class="fw-semibold text-muted">mik@pex.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='6']" value="6" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
													<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='7']" value="7" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
													<div class="fw-semibold text-muted">olivia@corpmail.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='8']" value="8" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
													<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1" selected="selected">Guest</option>
													<option value="2">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='9']" value="9" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
													<div class="fw-semibold text-muted">dam@consilting.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='10']" value="10" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
													<div class="fw-semibold text-muted">emma@intenso.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='11']" value="11" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
													<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1" selected="selected">Guest</option>
													<option value="2">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='12']" value="12" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
													<div class="fw-semibold text-muted">robert@benko.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='13']" value="13" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-13.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
													<div class="fw-semibold text-muted">miller@mapple.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='14']" value="14" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-success text-success fw-semibold">L</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
													<div class="fw-semibold text-muted">lucy.m@fentech.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='15']" value="15" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
													<div class="fw-semibold text-muted">ethan@loop.com.au</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1" selected="selected">Guest</option>
													<option value="2">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='16']" value="16" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
													<div class="fw-semibold text-muted">brian@exchange.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
									</div>
									<!--end::Users-->
									<!--begin::Actions-->
									<div class="d-flex flex-center mt-15">
										<button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal" class="btn btn-active-light me-3">Cancel</button>
										<button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">Add Selected Users</button>
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Results-->
								<!--begin::Empty-->
								<div data-kt-search-element="empty" class="text-center d-none">
									<!--begin::Message-->
									<div class="fw-semibold py-10">
										<div class="text-gray-600 fs-3 mb-2">No users found</div>
										<div class="text-muted fs-6">Try to search by username, full name or email...</div>
									</div>
									<!--end::Message-->
									<!--begin::Illustration-->
									<div class="text-center px-5">
										<img src="assets/media/illustrations/sketchy-1/1.png" alt="" class="w-100 h-200px h-sm-325px" />
									</div>
									<!--end::Illustration-->
								</div>
								<!--end::Empty-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Search-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - Users Search-->
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
<script src="assets/js/custom/utilities/modals/top-up-wallet.js"></script>
<script src="assets/js/custom/utilities/modals/create-account.js"></script>
<script src="assets/js/custom/utilities/modals/users-search.js"></script>
@endsection
